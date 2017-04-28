<?php

	/**
	 * MANEJO DE LAS ENCUESTAS DE CARACTERIZACION DE POBLACION SIPIVE
	 * @author Bernardo Zerda
	 * @version 1.0 Abril 2017
	 */
	
	class Encuestas {
		
		public $seqDiseno;
		public $txtDiseno;
		public $bolFormulario;
		public $bolCiudadano;
		public $arrPlantilla;
		public $arrAplicacion;
		private $seqFormulario;
		private $arrPregunta;
		
		
		function Encuestas(){
			$this->seqDiseno = 0;
			$this->txtDiseno = 0;
			$this->bolFormulario = 0;
			$this->bolCiudadano = 0;
			$this->seqFormulario = 0;
			$this->arrPregunta = array();
		}
		
		public function obtenerDiseno($seqDiseno = 0){
			global $aptBd;
			$arrDisenos = array();
			$sql = "
				select 
					seqDiseno, 
					txtDiseno, 
					bolFormulario, 
					bolCiudadano 
				from t_enc_diseno ".
			$sql.= ($seqDiseno == 0)? "" : "where seqDiseno = " . $seqDiseno;
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				$claEncuesta = null;
				$claEncuesta = new Encuestas();
				$claEncuesta->seqDiseno = $objRes->fields['seqDiseno'];
				$claEncuesta->txtDiseno = $objRes->fields['txtDiseno'];
				$claEncuesta->bolFormulario = $objRes->fields['bolFormulario'];
				$claEncuesta->bolCiudadano = $objRes->fields['bolCiudadano'];
				$arrDisenos[] = $claEncuesta;
				$objRes->MoveNext();
			}
			return $arrDisenos;
		}
		
		public function validarTitiulos($arrLinea,$txtDestino){
			global $aptBd;
			$arrErrores = array();
			if($txtDestino == "formulario" or $txtDestino == "ciudadano"){
				
				// verifica que la primera columna sea el identificador de formulario
				if(trim(mb_strtoupper($arrLinea[0])) != "FORMULARIO" ){
					$arrErrores[] = "No se encuentra la columna FORMULARIO en el archivo de respuestas de formulario";
				}
				unset($arrLinea[0]); // formulario
				
				// Identifica la tabla destino de las preguntas donde se almacenará la respuesta
				if($txtDestino == "formulario"){
					$txtTablaDestino= "T_ENC_APLICACION_FORMULARIO";	
				}else{
					$txtTablaDestino= "T_ENC_APLICACION_CIUDADANO";
				}
				
				$sql = "
					select distinct
						res.txtIdentificador
					from t_enc_diseno dis
					inner join t_enc_seccion sec on dis.seqDiseno = sec.seqDiseno
					inner join t_enc_subseccion sse on sec.seqSeccion = sse.seqSeccion
					inner join t_enc_pregunta pre on sse.seqSubseccion = pre.seqSubseccion
					inner join t_enc_respuesta res on pre.seqPregunta = res.seqPregunta
					where dis.bolActivo = 1
					and sec.bolActivo = 1
					and sse.bolActivo = 1
					and pre.bolActivo = 1
					and dis.seqDiseno = " . $this->seqDiseno . "
					and pre.txtTablaDestino = '".$txtTablaDestino."'
				";
				$objRes = $aptBd->execute($sql);
				while($objRes->fields){
					if( in_array($objRes->fields['txtIdentificador'],$arrLinea)){
						$i = array_shift(array_keys($arrLinea,$objRes->fields['txtIdentificador']));
						unset($arrLinea[$i]);
					}else{
						$arrErrores[] = "En el archivo $txtDestino, falta la pregunta con el identificador " . $objRes->fields['txtIdentificador'];
					}
					$objRes->MoveNext();
				}
				if( ! empty($arrLinea) ){
					$arrErrores[] = "En el archivo $txtDestino, las preguntas " . implode(",", $arrLinea) . " son desconocidas";
				}		
				
			}else{
				$arrErrores[] = "Valor del segundo parámetro no válido, use 'formulario' o 'ciudadano' como valores validos";
			}
			return $arrErrores;
		}
		
		
		/**
		 * VALIDA LAS RESPUESTAS, EL TIP ODE RESPUESTA Y LOS DATOS QUE SE HAN CONTESTADO
		 * @param array $arrArchivo
		 * @param array $txtDestino
		 * @return string
		 */
		
		public function validarRespuestas($arrArchivo,$txtDestino){
			global $aptBd;
			
			if($txtDestino != "formulario" and $txtDestino != "ciudadano"){
				$arrErrores[] = "Valor del segundo parámetro no válido, use 'formulario' o 'ciudadano' como valores validos";
			}else{
				$arrFormularios = array();
				foreach($arrArchivo as $numLinea => $arrLinea){
					
					if(!esNumero($arrLinea['FORMULARIO'])){
						$arrErrores[] = "Archivo Ciudadano - Error linea " . ($numLinea + 1).": Columna Formulario debe ser numérico";
					}else{
						$numFormulario = intval($arrLinea['FORMULARIO']);
					}
					unset($arrLinea['FORMULARIO']); // formulario
					
					if($txtDestino == "formulario"){
						if( in_array($numFormulario, $arrFormularios) ){
							$arrErrores[] = "Archivo Formulario - Error linea " . ($numLinea + 1).": No puede tener registrado el formulario en más de una ocasión";
						}else{
							$arrFormularios[] = $numFormulario;
						}						
					}
					
					foreach($arrLinea as $txtIdentificador => $txtRespuesta){
						$this->obtenerPregunta($txtIdentificador);
						if(trim($txtRespuesta) != ""){
							switch ($this->arrPregunta['tipo']){
								case 1: // NUMERO
									if(! esNumero($txtRespuesta)){
										$arrErrores[] = "Archivo " . $txtDestino . " - Formulario " .$numFormulario. ": Error en " . $txtIdentificador . ", respuesta debe ser un valor numérico"; 
									}
									break;
								case 2: // TEXTO
									// las preguntas tipo texto no tienen validacion
									break;
								case 3: // UNICA
									$bolRespuestaValida = false;
									foreach( $this->arrPregunta['respuesta'] as $seqRespuesta => $arrRespuesta ){
										if(trim($txtRespuesta) == $arrRespuesta['respuesta']){
											$bolRespuestaValida = true;
										}
									}
									if( $bolRespuestaValida == false ){
										$arrErrores[] = "Archivo " . $txtDestino . " - Formulario " .$numFormulario. ": Error en " . $txtIdentificador . ", respuesta no válida";
									}
									break;
								case 4: // FECHA
									if(! esFechaValida($txtRespuesta)){
										$arrErrores[] = "Archivo " . $txtDestino . " - Formulario " .$numFormulario. ": Error en " . $txtIdentificador . ", formato de fecha no válido (use el formato yyyy-mm-dd)";
									}
									break;
								case 5: // MULTIPLE
									// las preguntas tipo multiple no tienen validacion (las respuestas son preguntas separadas)
									break;
								default:
									$arrErrores[] = "Archivo " . $txtDestino . " - Formulario " .$numFormulario. ": Error en " . $txtIdentificador . ", tipo de respuesta (".$this->arrPregunta['tipo'].") desconocido";
									break;
							}
						}
// 						if(! empty($arrErrores)){
// 							echo $txtIdentificador ." => #". $txtRespuesta ."#<br>";
// 							pr($this->arrPregunta);
// 							pr($arrErrores);
// 						}
						
					}
				}
			}
			return $arrErrores;
		}
		
		private function obtenerPregunta($txtIdentificador){
			global $aptBd;
			$arrErrores = array();
			try{
				$this->arrPregunta = array();
				$sql = "
					select
					  pre.seqPregunta,
					  pre.txtIdentificador as idPregunta, 
					  pre.txtPregunta, 
					  pre.seqTipoPregunta,
					  res.seqTipoRespuesta,
					  res.seqRespuesta,
					  res.txtIdentificador as idRespuesta,
					  res.txtRespuesta,
					  res.valRespuesta,
					  res.txtTablaEquivalente, 
					  res.txtCampoEquivalente, 
					  res.valEquivalente
					from t_enc_diseno dis
					inner join t_enc_seccion sec on dis.seqDiseno = sec.seqDiseno
					inner join t_enc_subseccion sse on sec.seqSeccion = sse.seqSeccion
					inner join t_enc_pregunta pre on sse.seqSubseccion = pre.seqSubseccion
					inner join t_enc_respuesta res on pre.seqPregunta = res.seqPregunta
					inner join t_enc_tipo_pregunta tpr on pre.seqTipoPregunta = tpr.seqTipoPregunta
					inner join t_enc_tipo_respuesta tre on res.seqTipoRespuesta = tre.seqTipoRespuesta
					where dis.bolActivo = 1
					and sec.bolActivo = 1
					and sse.bolActivo = 1
					and pre.bolActivo = 1
					and dis.seqDiseno = " . $this->seqDiseno . "
					and res.txtIdentificador = '".$txtIdentificador."'
				";
				$objRes = $aptBd->execute($sql);
				while($objRes->fields){
					$this->arrPregunta['seqPregunta'] = $objRes->fields['seqPregunta'];
					$this->arrPregunta['identificador'] = $objRes->fields['idRespuesta'];
					$this->arrPregunta['texto'] = $objRes->fields['txtPregunta'];
					$this->arrPregunta['tipo'] = $objRes->fields['seqTipoPregunta'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['identificador'] = $objRes->fields['idRespuesta'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['tipo'] = $objRes->fields['seqTipoRespuesta'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['texto'] = $objRes->fields['txtRespuesta'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['respuesta'] = $objRes->fields['valRespuesta'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['tabla'] = $objRes->fields['txtTablaEquivalente'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['campo'] = $objRes->fields['txtCampoEquivalente'];
					$this->arrPregunta['respuesta'][$objRes->fields['seqRespuesta']]['valor'] = $objRes->fields['valEquivalente'];
					$objRes->MoveNext();
				}
			}catch(Exception $objError){
				$arrErrores[] = "No se pudo obtener la informacion de la pregunta " . $txtIdentificador;
				$arrErrores[] = $objError->getMessage();				
			}
			return $arrErrores;
		}
		
		public function salvar($txtNombre,$arrFormulario,$arrCiudadano){
			global $aptBd;
			$arrAplicaciones = array();
			try{
				
				// al menos una persona debe estar en un formulario de SDV
				if($this->bolCiudadano == 1){
					$arrHogar = array();
					foreach($arrCiudadano as $numLinea => $arrLinea){
						$txtFormulario = $arrLinea['FORMULARIO'];
						$this->obtenerFormulario($arrLinea['P311_NUMERO_DOC']);
						if(!isset($arrHogar[ $txtFormulario ])){
							$arrHogar[ $txtFormulario ] = $this->seqFormulario;
						}elseif($arrHogar[ $txtFormulario ] == 0){
							$arrHogar[ $txtFormulario ] = $this->seqFormulario;
						}
					}
					foreach($arrHogar as $txtFormulario => $seqFormulario){
						if( $seqFormulario == 0 ){
							$arrErrores[] = "Error formulario " . $txtFormulario . ": Ninguno de los ciudadanos reportados por la encuesta está registrado en el sistema";
						}
					}
				}else{
					$arrHogar = array();
					foreach($arrFormulario as $numLinea => $arrLinea){
						$txtFormulario = $arrLinea['FORMULARIO'];
						$this->obtenerFormulario($arrLinea['NUMERO_DOC']);
						if(!isset($arrHogar[ $txtFormulario ])){
							$arrHogar[ $txtFormulario ] = $this->seqFormulario;
						}
					}
					foreach($arrHogar as $txtFormulario => $seqFormulario){
						if( $seqFormulario == 0 ){
							$arrErrores[] = "Error formulario " . $txtFormulario . ": El ciudadano reportado (" . $arrLinea['NUMERO_DOC']. ") por la encuesta no está registrado en el sistema";
						}
					}
				}
				
				if( empty($arrErrores)){
					foreach($arrFormulario as $numLinea => $arrRegistro){
						
						$txtFormulario = $arrRegistro['FORMULARIO'];
						$this->seqFormulario = $arrHogar[$txtFormulario];
						
						// Inactiva las aplicaciones anteriores que haya tenido el mismo hogar
						// Se pueden tener varias aplicaciones para el mismo hogar pero solo una activa
						$sql = "
							update t_enc_aplicacion set 
								bolActiva = 0 
							where seqDiseno = " . $this->seqDiseno . " 
							and seqFormulario = " . $this->seqFormulario; 
						$aptBd->execute($sql);
					
						$sql = "
							INSERT INTO t_enc_aplicacion(
							  seqDiseno,
							  txtNombreCargue,
							  seqFormulario,
							  txtFormulario,
							  fchAplicacion,
							  fchCarga,
							  bolActiva,
							  seqUsuarioCarga
							) VALUES (
							  " . $this->seqDiseno . ",
							  '" . trim($txtNombre) . "',
							  " . $this->seqFormulario . ",
							  '" . $arrRegistro['FORMULARIO'] . "',
							  '" . $arrRegistro['FECHA'] . "',
							  NOW(),
							  1,
							  " . $_SESSION['seqUsuario'] . "
							 );
						"; 
		
						$aptBd->execute($sql);
						$seqAplicacion = $aptBd->Insert_ID();
						
						$txtFormulario = $arrRegistro['FORMULARIO'];
						$arrAplicaciones[ $txtFormulario ] = $seqAplicacion;
						unset($arrRegistro['FORMULARIO']); // formulario
						
						foreach($arrRegistro as $txtIdentificador => $txtValor){
							$seqRespuesta = $this->obtenerSecuencialRespuesta($txtIdentificador,$txtValor);
							if( $seqRespuesta != 0 ){
								$sql = "
									INSERT INTO t_enc_aplicacion_formulario ( 
										seqAplicacion, 
										seqRespuesta, 
										valRespuesta
									) VALUES (
										" . $seqAplicacion . ",
										" . $seqRespuesta . ",
										'". trim($txtValor) ."'
									)
								"; 
								$aptBd->execute($sql);
							}
						}
						
					}	
					
					if($this->bolCiudadano == 1){
						foreach($arrCiudadano as $numLinea => $arrRegistro){
							$txtFormulario = $arrRegistro['FORMULARIO'];
							unset($arrRegistro['FORMULARIO']); // formulario
							$seqAplicacion = $arrAplicaciones[ $txtFormulario ];
							foreach($arrRegistro as $txtIdentificador => $txtValor){
								$seqRespuesta = $this->obtenerSecuencialRespuesta($txtIdentificador,$txtValor);
								$sql = "
									INSERT INTO t_enc_aplicacion_ciudadano (
										seqAplicacion,
										seqRespuesta,
										valRespuesta,
										numOrden
									) VALUES (
										" . $seqAplicacion . ",
										" . $seqRespuesta . ",
										'" . $txtValor . "',
										" . $numLinea . "
									)
								";
								$aptBd->execute($sql);
							}	
						}
					}
				}
			}catch(Exception $objError){
				echo $objError->getMessage() . "<br>";
				echo $objError->getTrace() . "<hr>";
				die();
			}
			return $arrErrores;
		}
		
		private function obtenerFormulario($numDocumento){
			global $aptBd;
			$arrErrores = array();
			$this->seqFormulario = 0;
			$sql = "
				select 
				  frm.seqFormulario
				from t_frm_formulario frm
				inner join t_frm_hogar hog on frm.seqFormulario = hog.seqFormulario
				inner join t_ciu_ciudadano ciu on ciu.seqCiudadano = hog.seqCiudadano
				where ciu.numDocumento = '" . $numDocumento. "'
			";
			$objRes = $aptBd->execute($sql);
			if( $objRes->RecordCount() == 1 ){
				$this->seqFormulario = $objRes->fields['seqFormulario'];
			}elseif($objRes->RecordCount() > 1){
				$arrErrores[] = "El numero de documento " . $numDocumento . " está vinculado a mas de un formulario";
			}else{
				$arrErrores[] = "El numero de documento " . $numDocumento . " no está vinculado a nungún formulario";
			}
			return $arrErrores;
		}
		
		public function listarAplicaciones($numDocumento){
			global $aptBd;
			$arrAplicaciones = array();
			$this->obtenerFormulario($numDocumento);
			$sql = "
				SELECT 
					apl.seqAplicacion,
					dis.txtDiseno,
					apl.txtFormulario,
					apl.fchAplicacion,
					apl.fchCarga,
					apl.bolActiva
				FROM t_enc_aplicacion apl
				INNER JOIN t_enc_diseno dis ON dis.seqDiseno = apl.seqDiseno
				WHERE dis.bolActivo = 1
				AND apl.seqFormulario = ".$this->seqFormulario."
				ORDER BY 
				  apl.bolActiva DESC,
				  apl.fchAplicacion DESC,
				  apl.fchCarga DESC
			";
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				$arrAplicaciones[] = $objRes->fields;
				$objRes->MoveNext();
			}
			return $arrAplicaciones;			
		}
		
		public function eliminarEncuestas($seqAplicacion){
			global $aptBd;
			$arrErrores = array();
			try{
				$sql = " 
					select max(seqAplicacion) as seqAplicacion
					from t_enc_aplicacion apl1
					inner join (
						select max(apl.fchAplicacion) as fchAplicacion
						from t_enc_aplicacion apl
						where seqFormulario = (
							select seqFormulario
							from t_enc_aplicacion
							where seqAplicacion = ".$seqAplicacion."
							) and apl.seqAplicacion <> ".$seqAplicacion."
						) apl on apl.fchAplicacion = apl1.fchAplicacion
				";
				$objRes = $aptBd->execute($sql);
				$aptBd->execute("UPDATE T_ENC_APLICACION SET bolActiva = 1 WHERE seqAplicacion = " . $objRes->fields['seqAplicacion']);
				$aptBd->execute("DELETE FROM T_ENC_APLICACION_CIUDADANO WHERE seqAplicacion = " . $seqAplicacion);
				$aptBd->execute("DELETE FROM T_ENC_APLICACION_FORMULARIO WHERE seqAplicacion = " . $seqAplicacion);
				$aptBd->execute("DELETE FROM T_ENC_APLICACION WHERE seqAplicacion = " . $seqAplicacion);
			} catch (Exception $objError){
				$arrErrores[] = "No se pudo eliminar la aplicacion";
				$arrErrores[] = $objError->getMessage();
				
			}
			
			return $arrErrores;
		}
		
		public function obtenerCargue(){
			global $aptBd;
			$arrCargue = array();
			$sql = "select distinct txtNombreCargue from t_enc_aplicacion";
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				$arrCargue[] = $objRes->fields["txtNombreCargue"];
				$objRes->MoveNext();
			}
			return $arrCargue;
		}
		
		private function obtenerSecuencialRespuesta($txtIdentificador,$txtValor){
			$seqRespuesta = 0;
			$this->obtenerPregunta($txtIdentificador);
			if( $this->arrPregunta['tipo'] == 3 ){
				$bolRespuesta = false;
				foreach( $this->arrPregunta['respuesta'] as $seqRespuesta => $arrRespuesta ){
					if(trim($txtValor) == $arrRespuesta['respuesta']){
						$bolRespuesta = true;
						break;
					}
				}
				$seqRespuesta = ($bolRespuesta == true)? $seqRespuesta : 0 ;
			}else{
				$arrPrimeraRespuesta = array_keys($this->arrPregunta['respuesta']);
				$seqRespuesta = $arrPrimeraRespuesta[0];
			}
			return $seqRespuesta;
		}
		
		
		public function obtenerEncuesta($seqAplicacion){
			global $aptBd;
			
			// las respuestas dadas por el ciudadano a la encuesta
			$sql = "
				select
					apl.txtNombreCargue,
					apl.txtFormulario,
					apl.fchAplicacion,
					apl.fchCarga,
					apl.seqUsuarioCarga,
					afo.seqRespuesta,
					afo.valRespuesta
				from t_enc_aplicacion apl
				inner join t_enc_aplicacion_formulario afo on apl.seqAplicacion = afo.seqAplicacion
				where apl.seqAplicacion = ".$seqAplicacion."
			";
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				foreach($objRes->fields as $txtCampo => $txtValor){
					$$txtCampo = iconv("UTF-8", "Windows-1252", $txtValor);
				}
				$this->arrAplicacion['encabezado']['nombre'] = $txtNombreCargue;
				$this->arrAplicacion['encabezado']['formulario'] = $txtFormulario;
				$this->arrAplicacion['encabezado']['fchAplicacion'] = $fchAplicacion;
				$this->arrAplicacion['encabezado']['fchCarga'] = $fchCarga;
				$arrUsuario = obtenerDatosTabla("T_COR_USUARIO", array("seqUsuario","txtNombre","txtApellido"),"seqUsuario","seqUsuario = " . $objRes->fields['seqUsuarioCarga']);
				$this->arrAplicacion['encabezado']['txtUsuario'] = $arrUsuario[ $objRes->fields['seqUsuarioCarga'] ]['txtNombre'] . " " . $arrUsuario[ $objRes->fields['seqUsuarioCarga'] ]['txtApellido'];
				$this->arrAplicacion['formulario'][$seqRespuesta] = $valRespuesta;
				$objRes->MoveNext();
			}
			
			$sql = "
				select
					aci.seqRespuesta,
					aci.numOrden,
					aci.valRespuesta
				from t_enc_aplicacion apl
				inner join t_enc_aplicacion_ciudadano aci on apl.seqAplicacion = aci.seqAplicacion
				where apl.seqAplicacion = ".$seqAplicacion."
			";
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				foreach($objRes->fields as $txtCampo => $txtValor){
					$$txtCampo = iconv("UTF-8", "Windows-1252", $txtValor);
				}
				$this->arrAplicacion['ciudadano'][$numOrden][$seqRespuesta] = $valRespuesta;
				$objRes->MoveNext();
			}
			
			// todas las preguntas y respuestas posibles del formulario
			$sql = "
				select
					dis.seqDiseno,
					dis.txtDiseno,
					dis.bolFormulario,
					dis.bolCiudadano,
					sec.txtSeccion,
					sse.txtSubseccion,
					pre.seqPregunta,
					pre.txtIdentificador as idPregunta,
					pre.txtPregunta,
					pre.txtTablaDestino,
					tpr.seqTipoPregunta,
					res.seqRespuesta,
					res.seqTipoRespuesta,
					res.txtIdentificador as idRespuesta,
					res.txtRespuesta,
					res.valRespuesta,
					res.txtTablaEquivalente,
					res.txtCampoEquivalente,
					res.valEquivalente,
					pre.txtIdentificadorPadre
				from t_enc_diseno dis
				inner join t_enc_aplicacion apl on apl.seqDiseno = dis.seqDiseno
				inner join t_enc_seccion sec on dis.seqDiseno = sec.seqDiseno
				inner join t_enc_subseccion sse on sec.seqSeccion = sse.seqSeccion
				inner join t_enc_pregunta pre on sse.seqSubseccion = pre.seqSubseccion
				left join t_enc_respuesta res on pre.seqPregunta = res.seqPregunta
				inner join t_enc_tipo_pregunta tpr on pre.seqTipoPregunta = tpr.seqTipoPregunta
				left join t_enc_tipo_respuesta tre on res.seqTipoRespuesta = tre.seqTipoRespuesta
				where dis.bolActivo = 1
				and sec.bolActivo = 1
				and sse.bolActivo = 1
				and pre.bolActivo = 1
				and apl.seqAplicacion = ".$seqAplicacion."
			";
			$objRes = $aptBd->execute($sql);
			while($objRes->fields){
				
				foreach($objRes->fields as $txtCampo => $txtValor){
					$$txtCampo = iconv("UTF-8", "Windows-1252", $txtValor);
				}
				
				$this->txtDiseno = $txtDiseno;
				$this->seqDiseno = $seqDiseno;
				$this->bolFormulario = $bolFormulario;
				$this->bolCiudadano = $bolCiudadano;
				
				$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['pregunta'] = $txtPregunta;
				$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['tipo'] = $seqTipoPregunta;
				$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['destino'] = $txtTablaDestino;
				$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['padre'] = $txtIdentificadorPadre;
				if( intval($seqRespuesta) != 0 ){
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['identificador'] = $idRespuesta;
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['tipo'] = $seqTipoRespuesta;
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['texto'] = $txtRespuesta;
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['tabla'] = $txtTablaEquivalente;
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['campo'] = $txtCampoEquivalente;
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'][$seqRespuesta]['valor'] = $valEquivalente;
				}else{
					$this->arrPlantilla[$txtSeccion][$txtSubseccion][$idPregunta]['respuesta'] = array();
				}
				
				// TRANSFORMACION DE LAS EQUIVALENCIAS CONFIGURADAS
				if($txtTablaEquivalente != ""){
					if( $txtTablaDestino == "T_ENC_APLICACION_FORMULARIO" ){
						if(isset($this->arrAplicacion['formulario'][$seqRespuesta])){
							if(intval($valEquivalente) != 0){
								$this->arrAplicacion['formulario'][$seqRespuesta] = $valEquivalente;
							}else{								
								$this->arrAplicacion['formulario'][$seqRespuesta] = mb_strtoupper(obtenerCampo(
									$txtTablaEquivalente, 
									$this->arrAplicacion['formulario'][$seqRespuesta], 
									"txt" . ucwords(substr(strtolower($txtCampoEquivalente),3)), 
									$txtCampoEquivalente
								));
							}
						}
					}else{
						foreach( $this->arrAplicacion['ciudadano'] as $numOrden => $arrCiudadano){
							if(isset($arrCiudadano[$seqRespuesta])){
								if(intval($valEquivalente) != 0){
									$this->arrAplicacion['ciudadano'][$numOrden][$seqRespuesta] = $valEquivalente;
								}else{
									$this->arrAplicacion['ciudadano'][$numOrden][$seqRespuesta] = mb_strtoupper(obtenerCampo(
											$txtTablaEquivalente,
											$this->arrAplicacion['formulario'][$seqRespuesta],
											"txt" . ucwords(substr(strtolower($txtCampoEquivalente),3)),
											$txtCampoEquivalente
											));
								}
							}
						}
					}	
				}
				
				$objRes->MoveNext();
			}
			
		}
		
		
		
		
	}

?>