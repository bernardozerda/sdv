<?php /* Smarty version 2.6.26, created on 2017-03-20 19:20:47
         compiled from desembolso/formatoEstudioTitulos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'desembolso/formatoEstudioTitulos.tpl', 33, false),array('modifier', 'ucwords', 'desembolso/formatoEstudioTitulos.tpl', 49, false),array('modifier', 'upper', 'desembolso/formatoEstudioTitulos.tpl', 108, false),)), $this); ?>
<?php $this->assign('tipoDocCiudadano', $this->_tpl_vars['claCiudadano']->seqTipoDocumento); ?>
<?php $this->assign('tipoDocVendedor', $this->_tpl_vars['claDesembolso']->seqTipoDocumento); ?>
<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
<?php $this->assign('seqProyecto', $this->_tpl_vars['claFormulario']->seqProyecto); ?>
<?php $this->assign('seqLocalidad', $this->_tpl_vars['claDesembolso']->seqLocalidad); ?>
<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>
<?php $this->assign('txtElaboro', $this->_tpl_vars['claDesembolso']->arrTitulos['txtElaboro']); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="Subsidios de Vivienda">
		<meta name="keywords" content="subsidio,vivienda,social,prioritaria,bogota,habitat,asignacion,credito" />
		<meta name="description" content="Sistema de informacion de subsidios de vivienda">
		<meta http-equiv="Content-Language" content="es">
		<meta name="robots" content="index,  nofollow" />
		<title>SDV - SDHT</title>
	
	</head>
	<body onLoad="window.print();">
	
		<center>

		<!-- TITULO DE LA CARTA DE IMPRESION -->
		<table cellspacing="0" cellpadding="0" border="0" width="90%" style="border: 1px solid #999999;">
			<tr>
				<td width="150px" height="80px" align="center" valign="middle"><img src="../../recursos/imagenes/escudo.png"></td>
				<td align="center" valign="middle" style="<?php echo $this->_tpl_vars['txtFuente12']; ?>
 padding:10px;">
					<b>Subsidio Distrital de Vivienda</b><br>
					<b>Proceso de Desembolso.</b><br>
					<span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
						Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['txtFecha']; ?>
<br>
						No. Registro: <?php echo ((is_array($_tmp=$this->_tpl_vars['numRegistro'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

					</span>
				</td>
				<td width="150px" align="center" valign="middle"><img src="../../recursos/imagenes/bta_positiva_carta.jpg"></td>
			</tr>
		</table>	
		<br>
					
		<table cellpadding="2" cellspacing="0" border="0" width="90%" style="<?php echo $this->_tpl_vars['txtFuente12']; ?>
">
			<tr><td align="center" style="padding-left:30px; padding-right:30px; font-weight:bold;">
				<b>Secretaría Distrital de Hábitat<br>
				<?php if ($this->_tpl_vars['seqModalidad'] == '5'): ?>
					Concepto Jurídico Contrato<br /> 
					Subsidio Condicionado de Arrendamiento
				<?php else: ?>
					Estudio de Títulos<br />
					Vivienda <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtCompraVivienda)) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</b>
				<?php endif; ?>
			</td></tr>
		</table>
		
		<table cellpadding="5" cellspacing="0" border="0" width="90%" style="border: 1px solid #E4E4E4; <?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			
			<!-- FECHA DEL ESTUDIO DE TITULOS -->
			<tr>
				<td bgcolor="#E4E4E4"><b>Fecha</b></td>
				<td><?php echo $this->_tpl_vars['txtFecha']; ?>
</td>
			</tr>
			
			<!-- POSTULANTE PRINCIPAL -->
			<tr>
				<td bgcolor="#E4E4E4"><b>Postulante Principal</b></td>
				<td>
					<?php echo $this->_tpl_vars['claCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtNombre2; ?>

					<?php echo $this->_tpl_vars['claCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtApellido2; ?>
 / 
					<?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocCiudadano']]; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->numDocumento; ?>

				</td>
			</tr>
			
			<!-- PROPERTARIO -->
			<tr>
				<td bgcolor="#E4E4E4"><b><?php if ($this->_tpl_vars['seqModalidad'] == '5'): ?>Arrendador<?php else: ?>Vendedor<?php endif; ?></b></td>
				<td>
					<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['txtNombreVendedor'] != ""): ?>
						<?php echo $this->_tpl_vars['claDesembolso']->arrEscrituracion['txtNombreVendedor']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>

					<?php endif; ?> / <?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 
					<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['numDocumentoVendedor'] != ""): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrEscrituracion['numDocumentoVendedor'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

					<?php endif; ?>
				</td>
			</tr>
			
			<!-- PROYECTO EPI (se muestra si esquema es 1)-->
			<?php if ($this->_tpl_vars['nombreComercial'] != '' || $this->_tpl_vars['arrProyectos'][$this->_tpl_vars['seqProyecto']] != ''): ?>
			<tr>
				<td valign="top" bgcolor="#E4E4E4"><b>Proyecto</b></td>
				<td align="justify">
					<?php if ($this->_tpl_vars['arrProyectos'][$this->_tpl_vars['seqProyecto']] == '' || $this->_tpl_vars['arrProyectos'][$this->_tpl_vars['seqProyecto']] == ' '): ?>
						<?php echo $this->_tpl_vars['nombreComercial']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['arrProyectos'][$this->_tpl_vars['seqProyecto']]; ?>

					<?php endif; ?>
				</td>
			</tr>
			<?php endif; ?>
			
			<!-- IDENTIFICACION ACTUAL -->
			<tr>
				<td valign="top" bgcolor="#E4E4E4"><b>Identificación Actual del Inmueble</b></td>
				<td align="justify">
					<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['txtDireccionInmueble'] != ""): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrEscrituracion['txtDireccionInmueble'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
;
					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtDireccionInmueble)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
;
					<?php endif; ?>
					<?php if ($this->_tpl_vars['seqModalidad'] != '5'): ?>
						predio cuya descripcion, cabida y linderos se encuentran
						estipulados en la escritura pública <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numEscrituraIdentificacion'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

						del <?php echo $this->_tpl_vars['claDesembolso']->arrTitulos['fchEscrituraIdentificacionTexto']; ?>
 elevada ante la notaría 
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numNotariaIdentificacion'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 de <?php echo $this->_tpl_vars['claDesembolso']->arrTitulos['txtCiudadIdentificacion']; ?>

					<?php endif; ?>
				</td>
			</tr>
			
			<?php if ($this->_tpl_vars['seqModalidad'] != '5'): ?>
				<!-- TITULO DE ADQUISICION -->
				<tr>
					<td valign="top" bgcolor="#E4E4E4"><b>Título de Adquisición</b></td>
					<td align="justify">
						Escritura pública <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numEscrituraTitulo'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 del 
						<?php echo $this->_tpl_vars['claDesembolso']->arrTitulos['fchEscrituraTituloTexto']; ?>
 elevada ante la notaría 
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numNotariaTitulo'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 de <?php echo $this->_tpl_vars['claDesembolso']->arrTitulos['txtCiudadTitulo']; ?>
, registrada en la anotación 
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numFolioMatricula'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 del Folio de Matricula Inmobilaria.
					</td>
				</tr>
			<?php endif; ?>
			
			<!-- MATRICULA INMOBILIARIA -->
			<tr>
				<td valign="top" bgcolor="#E4E4E4"><b>Matricula Inmobiliaria</b></td>
				<td align="justify">
					<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['txtMatriculaInmobiliaria'] != ""): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrEscrituracion['txtMatriculaInmobiliaria'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
; 
					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtMatriculaInmobiliaria)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
; 
					<?php endif; ?>
					<?php if (( $this->_tpl_vars['claDesembolso']->arrTitulos['txtZonaMatricula'] != "" ) && ( $this->_tpl_vars['claDesembolso']->arrTitulos['fchMatriculaTexto'] != "" || $this->_tpl_vars['claDesembolso']->arrTitulos['fchMatriculaTexto'] != "0000-00-00" )): ?>
						de la oficina de registro de instrumentos públicos
						<?php if ($this->_tpl_vars['claDesembolso']->arrTitulos['txtZonaMatricula'] != 'Otra'): ?>
							zona <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['txtZonaMatricula'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>

						<?php endif; ?>
						 de <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['txtCiudadMatricula'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
, cuya fecha de expedicion data del 
						<?php echo $this->_tpl_vars['claDesembolso']->arrTitulos['fchMatriculaTexto']; ?>

					<?php endif; ?> 
				</td>
			</tr>
			
			<?php if ($this->_tpl_vars['seqModalidad'] != '5'): ?>
				<!-- MODO DE ADQUISICION -->
				<tr>
					<td valign="top" bgcolor="#E4E4E4"><b>Modo de Adquisición</b></td>
					<td align="justify">
						Compraventa <?php echo $this->_tpl_vars['arrSolucionDescripcion'][$this->_tpl_vars['seqModalidad']][$this->_tpl_vars['seqSolucion']]; ?>
, adquirida con el producto otorgado por la SDHT&nbsp;
						<?php if ($this->_tpl_vars['claDesembolso']->arrTitulos['bolSubsidioFonvivienda'] == 1): ?> y Fonvivienda <?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>			

			<!-- SUBSIDIOS ASIGNADOS -->
			<tr>
				<td valign="top" bgcolor="#E4E4E4"><b>Subsidios Asignados</b></td>
				<td align="justify">
					SDHT: Resolución <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['fchResolucion']; ?>
<br>
					<?php if ($this->_tpl_vars['claDesembolso']->arrTitulos['bolSubsidioFonvivienda'] == 1): ?> 
						Fonvivienda: Resolución <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numResolucionFonvivienda'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 del
						<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['numAnoResolucionFonvivienda'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

					<?php endif; ?> 
				</td>
			</tr>
			
			<?php if ($this->_tpl_vars['seqModalidad'] != '5'): ?>
				<!-- AVALUO -->
				<tr>
					<td valign="top" bgcolor="#E4E4E4"><b>Valor Inmueble:</b></td>
					<td align="justify">
						<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['numValorInmueble'] != ""): ?>
							$<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrEscrituracion['numValorInmueble'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

						<?php else: ?>
							$<?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numValorInmueble)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ".") : number_format($_tmp, 0, ",", ".")); ?>

						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
	
			<!-- OBSERVACIONES -->
			<tr><td valign="top" colspan="2" bgcolor="#E4E4E4"><b>Observaciones</b></td></tr>
			<tr><td colspan="2">
				<ol>
					<?php $_from = $this->_tpl_vars['claDesembolso']->arrTitulos['observacion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['observacion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['observacion']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtObservacion']):
        $this->_foreach['observacion']['iteration']++;
?>
						<li><?php echo $this->_tpl_vars['txtObservacion']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>					
				</ol>
			</td></tr>
			
			<!-- DOCUMENTOS -->
			<tr><td valign="top" colspan="2" bgcolor="#E4E4E4"><b>Documentos Analizados</b></td></tr>
			<tr><td colspan="2">
				<ol>
					<?php $_from = $this->_tpl_vars['claDesembolso']->arrTitulos['documentos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['documentos'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['documentos']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtDocumentos']):
        $this->_foreach['documentos']['iteration']++;
?>
						<li><?php echo $this->_tpl_vars['txtDocumentos']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>					
				</ol>
			</td></tr>
			
			<!-- RECOMENDACIONES -->
			<tr><td valign="top" colspan="2" bgcolor="#E4E4E4"><b>Recomendaciones</b></td></tr>
			<tr><td colspan="2">
				<ol>
					<?php $_from = $this->_tpl_vars['claDesembolso']->arrTitulos['recomendaciones']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recomendaciones'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recomendaciones']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtRecomendaciones']):
        $this->_foreach['recomendaciones']['iteration']++;
?>
						<li><?php echo $this->_tpl_vars['txtRecomendaciones']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>					
				</ol>
			</td></tr>
			
			<!-- FIRMA DEL ABOGADO -->
                        
                        
			<tr><td valign="top" colspan="2">
				<br><br><br><b>Cordialmente</b><br><br><br>
				<p>___________________________________________________</p>
				<p><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTitulos['txtAprobo'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<br>
				Subdirección de Recursos Públicos.</p>                      
                
                                <br><br><br>
                                <!--
                                
				<b>VoBo</b><br><br><br>
				<p>___________________________________________________</p>
				<p>Martha Arenas Pineda<br>
				Grupo Juridico.</p>
                                
                                -->
                     

				<p>Preparó: 
				<?php if ($this->_tpl_vars['txtElaboro'] == ""): ?>
					<?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>

				<?php else: ?>
					<?php echo $this->_tpl_vars['txtElaboro']; ?>

				<?php endif; ?>
				</p><br><br>

			</td></tr>
                        
			
			<!-- PIE DE PAGINA -->
			<tr><td valign="top" colspan="2">
			El estudio jur&iacute;dico responde por la regularidad formal de los documentos examinados, 
			mas no por la veracidad de su contenido.
			</td></tr>
			
		</table><br>
		
		</center>
	</body>
</html>