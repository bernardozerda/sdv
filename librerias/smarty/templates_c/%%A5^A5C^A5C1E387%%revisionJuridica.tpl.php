<?php /* Smarty version 2.6.26, created on 2017-03-22 12:30:58
         compiled from desembolso/revisionJuridica.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'desembolso/revisionJuridica.tpl', 85, false),array('modifier', 'strlen', 'desembolso/revisionJuridica.tpl', 222, false),array('modifier', 'substr', 'desembolso/revisionJuridica.tpl', 223, false),array('function', 'math', 'desembolso/revisionJuridica.tpl', 213, false),)), $this); ?>

	<!--
		PLANTILLA PARA LA ETAPA DE REVSION DE OFERTA Y ESCRITURACION 
		@author Bernardo Zerda
		@version 1.0 Dic 2009
	-->
	
	<!-- DECLARACION DE VARIABLES PARA USAR EN LA PLANTILLA -->	
	<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
	<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>		
	<?php $this->assign('seqLocalidad', $this->_tpl_vars['claFormulario']->seqLocalidad); ?>
	<?php $this->assign('seqBancoAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
	<?php $this->assign('seqBancoAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
	<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
	<?php $this->assign('seqEstadoProceso', $this->_tpl_vars['claFormulario']->seqEstadoProceso); ?>
	<?php $this->assign('seqBancoCuentaAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
	<?php $this->assign('seqBancoCuentaAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
	<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
	<?php $this->assign('seqEntidadDonante', $this->_tpl_vars['claFormulario']->seqEmpresaDonante); ?>
	<?php $this->assign('txtCompraVivienda', $this->_tpl_vars['claDesembolso']->txtCompraVivienda); ?>
	<?php $this->assign('seqTipoDocumento', $this->_tpl_vars['claPostulantePrincipal']->seqTipoDocumento); ?>
	<?php $this->assign('seqTipoDocumentoVendedor', $this->_tpl_vars['claDesembolso']->seqTipoDocumento); ?>

	<!-- 
		TREE VIEW QUE CONTIENE LA INFORMACION DE LA FASE 
	-->	
	<?php $this->assign('numAltura', 500); ?>
	<div id="demo" class="yui-navset" style="width:98%; height:<?php echo $this->_tpl_vars['numAltura']; ?>
; text-align:left;">
	    <ul class="yui-nav">
	    	<li class="selected"><a href="#dh"><em>Datos del Hogar</em></a></li>
	        <li><a href="#cj"><em>Concepto Jur&iacute;dico</em></a></li>
	        <li><a href="#se"><em>Seguimiento</em></a></li>
	        <li><a href="#aad"><em>Actos Administrativos</em></a></li>
	    </ul>            
	    <div class="yui-content">
	    
			<!-- PESTANA DE DATOS DEL HOGAR -->
			<div id="dh" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "desembolso/pestanaDatosHogar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>				
			</div>
			
			<!-- CONCEPTO JURIDICO -->			
			<div id="cj" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
; overflow:auto;"><p>
				
				<!-- QUIEN PREPARA Y QUIEN APRUEBA EL DOCUMENTO -->
				<table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
					<tr>
						<td width="100px" class="tituloTabla">Preparado Por</td>
						<td><?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>
</td>
					</tr>
					<tr>
						<td class="tituloTabla" valign="top">Aprobado Por</td>
						<td height="22px" valign="top">
							<div id="buscarUsuario">
								<input	id="aprobo" 
										name="aprobo"
										type="text" 
										style="width:250px" 
										onFocus="this.style.backgroundColor = '#ADD8E6'; " 
										onBlur="this.style.backgroundColor = '#FFFFFF';" 
										value="<?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtAprobo']; ?>
"
								/>
								<div id="contUsuario" style="width:250px"></div>
							</div>	
						</td>
					</tr>
				</table>
				
				<!-- IDENTIFICACION DE LAS PARTES INVOLUCRADAS -->
				<table cellspacing="0" cellpadding="2" border="0" width="100%" bgcolor="#FFFFFF">
					<tr><td colspan="3" class="tituloTabla">Identificaci&oacute;n de las partes</td></tr>
					<tr>
						<td width="165px"><b>Promitente comprador</b></td>
						<td>
							<?php echo $this->_tpl_vars['objCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtNombre2; ?>
 
							<?php echo $this->_tpl_vars['objCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido2; ?>

						</td>
						<td>
							<b>Documento:</b> <?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumento']]; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->numDocumento; ?>

						</td>
					</tr>
					<tr>
						<td><b>Promitente vendedor</b></td>
						<td><?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>
</td>
						<td><b>Documento:</b> <?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumentoVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
					</tr>
					
					
					<!-- DEFINE LA RESOLUCION DE ASIGNACION -->
					<?php $this->assign('numResolucion', 0); ?>
					<?php $this->assign('fchResolucion', ""); ?>
					<?php if ($this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion'] == "" || $this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion'] == 0): ?>
						<?php $this->assign('numResolucion', $this->_tpl_vars['arrResolucionAsignacion']['numero']); ?>
					<?php else: ?>
						<?php $this->assign('numResolucion', $this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion']); ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['claDesembolso']->arrJuridico['fchResolucion'] == ""): ?>
						<?php $this->assign('fchResolucion', $this->_tpl_vars['arrResolucionAsignacion']['fecha']); ?>
					<?php else: ?>
						<?php $this->assign('fchResolucion', $this->_tpl_vars['claDesembolso']->arrJuridico['fchResolucion']); ?>
					<?php endif; ?>
					
					<!-- RESOLUCION DE ASIGNACION -->
                    <?php if ($this->_tpl_vars['arrFlujoHogar']['flujo'] != 'cem'): ?> <!-- PARA CASA EN MANO NO SE MUESTRA -->
                        <tr>
                            <td colspan="2"><b>Resolucion de asignacion del subsidio distrital de vivienda</b></td>
                            <td>
                                No. <input type="text" 
                                       name="numResolucion" 
                                       id="numResolucion" 
                                       value="<?php echo $this->_tpl_vars['numResolucion']; ?>
"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="this.style.backgroundColor = '#FFFFFF'; soloNumeros( this );" 
                                       style="width:50px"
                                       maxlength="5"								  
                                /> del <input type="text" 
                                       name="resolucion" 
                                       id="resolucion" 
                                       value="<?php echo $this->_tpl_vars['fchResolucion']; ?>
"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="this.style.backgroundColor = '#FFFFFF'; esFechaValida( this );" 
                                       style="width:80px"
                                       maxlength="10"								  
                                /> yyyy-mm-dd

                            </td>
                        </tr>
                    <?php endif; ?>
				</table>
				<table cellspacing="0" cellpadding="2" border="0" width="100%" bgcolor="#FFFFFF">
					<tr><td colspan="4" class="tituloTabla">Identificaci&oacute;n del Inmueble</td></tr>
					
					<!-- DIRECCION Y FOLIO DE MATRICULA-->
					<tr>
						<td width="20%"><b>Direcc&oacute;n:</b> </td>
						<td width="30%"><?php echo $this->_tpl_vars['claDesembolso']->txtDireccionInmueble; ?>
</td>
						<td width="20%"><b>Folio de Matricula:</b></td>
						<td><?php echo $this->_tpl_vars['claDesembolso']->txtMatriculaInmobiliaria; ?>
</td>
					</tr>
					
					<!-- RESOLUCION DE ASIGNACION Y CEDULA CATASTRAL -->
					<tr>
						<td><b>CHIP:</b></td>
						<td><?php echo $this->_tpl_vars['claDesembolso']->txtChip; ?>
</td>
						<td><b>Cedula Catastral:</b></td>
						<td><?php echo $this->_tpl_vars['claDesembolso']->txtCedulaCatastral; ?>
</td>
					</tr>
					
					<!-- AREA LOTE Y AREA CONSTRUIDA -->
					<tr>
						<td><b>Area lote (m<sup>2</sup>):</b></td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numAreaLote)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
						<td><b>Area construida (m<sup>2</sup>):</b></td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numAreaConstruida)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
					</tr>
					
					<!-- DESCRIPCION DE CABIDA Y LINDEROS -->
					<tr>
						<th colspan="4" style="padding:5px; padding-left:5px; padding-right:20px;" align="left">
							La descripci&oacute;n de cabida y linderos reposan en la escritura p&uacute;blica 
							<?php echo $this->_tpl_vars['claDesembolso']->txtEscritura; ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->fchEscritura; ?>
, elevada ante la notaria 
							<?php echo $this->_tpl_vars['claDesembolso']->numNotaria; ?>
 del circulo de <?php echo $this->_tpl_vars['claDesembolso']->txtCiudad; ?>

						</th>
					</tr>
				</table>
				<table cellspacing="0" cellpadding="2" border="0" width="100%">
				
					<!-- OBSERVACIONES Y LIBERTAD -->
					<tr>
						<td class="tituloTabla">Observaciones</td>
						<td class="tituloTabla">Libertad</td>
					</tr>
					<tr>
						<td align="center" width="50%">	
							<textarea name="observaciones" 
									  style="width:96%"
									  onFocus="this.style.backgroundColor = '#ADD8E6';" 
								   	  onBlur="this.style.backgroundColor = '#FFFFFF'; sinCaracteresEspeciales( this );"
							><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtObservaciones']; ?>
</textarea>
						</td>
						<td align="center">
							<textarea name="libertad" 
									  style="width:96%"
									  onFocus="this.style.backgroundColor = '#ADD8E6';" 
								   	  onBlur="this.style.backgroundColor = '#FFFFFF'; sinCaracteresEspeciales( this );"
							><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtLibertad']; ?>
</textarea>
						</td>
					</tr>

					<!-- DOCUMENTOS ANALIZADOS -->
					<tr><td colspan="3" class="tituloTabla">Documentos Analizados</td></tr>
					<tr>
						<td valign="top" style="padding-left:10px;">
							<input type="text"
								   id="documento"
								   onFocus="this.style.backgroundColor = '#ADD8E6';" 
								   onBlur="this.style.backgroundColor = '#FFFFFF'; sinCaracteresEspeciales( this );"
								   style="width:300px;"
								   class="inputLogin"
							/> 
							
							<button type="button" 
									id="adicionar" 
									title="adicionar" 
									class="reporteador"
									onClick="adicionarDocumentoAnalizado( document.getElementById('documento') , 'documentosAnalizados' , 'documento' , 95 , 50 );"
							>
								<img src="./recursos/imagenes/plus_icon.gif" alt="Adicionar" align="center" >
							</button>
						</td>
						<td id="documentosAnalizados" bgcolor="#FFFFFF">
							<?php $_from = $this->_tpl_vars['claDesembolso']->arrJuridico['documento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['documento'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['documento']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtDocumento']):
        $this->_foreach['documento']['iteration']++;
?>
								<?php echo smarty_function_math(array('equation' => "x + y",'x' => ($this->_foreach['documento']['iteration']-1),'y' => 1,'assign' => 'numSecuencia'), $this);?>
							
								<div id="documento<?php echo $this->_tpl_vars['numSecuencia']; ?>
">							
									<div style="width:12px; height:14px; cursor:pointer; border: 1px solid #999999; float:left"
										 onMouseOver="this.style.backgroundColor='#FFA4A4';"
										 onMouseOut="this.style.backgroundColor='#F9F9F9'"
										 onClick="eliminarObjeto('documento<?php echo $this->_tpl_vars['numSecuencia']; ?>
')"
									>X</div>
									<div style="cursor:pointer; float:right; width:95%; height:14px; border:1px solid #F9F9F9;"
									onMouseOver="mostrarHint( '<?php echo $this->_tpl_vars['txtDocumento']; ?>
')" onMouseOut="ocultarHint();">
										<?php if (((is_array($_tmp=$this->_tpl_vars['txtDocumento'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 40): ?>
											<?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['txtDocumento'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 40) : substr($_tmp, 0, 40)); ?>
...
										<?php else: ?>
											<?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo $this->_tpl_vars['txtDocumento']; ?>

										<?php endif; ?>
									</div>
									<input type="hidden" name="documento[]" value="<?php echo $this->_tpl_vars['txtDocumento']; ?>
">
								</div>								
							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					
					<!-- RECOMENDACIONES -->
                    <tr><td colspan="3" class="tituloTabla">Recomendaciones y Comentarios</td></tr>
                    <tr><td valign="top" style="padding-left:10px;">
                        <input type="text" 
                               id="recomendacion"
                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                               onBlur="this.style.backgroundColor = '#FFFFFF'; sinCaracteresEspeciales( this );"
                               style="width:300px;"
                               class="inputLogin"
                        /> 
                        <button type="button" 
                                id="adicionar" 
                                title="adicionar" 
                                class="reporteador"
                                onClick="adicionarDocumentoAnalizado( document.getElementById('recomendacion') , 'recomendaciones' , 'recomendacion' , 95 , 50 );"
                        >
                            <img src="./recursos/imagenes/plus_icon.gif" width="14" height="15" alt="Adicionar" align="center">
                        </button>
                    </td>
                    <td id="recomendaciones">
						<ol>
                            <li>EL PRECIO DE COMPRA NO DEBERÁ SUPERAR LOS 70 SMMLV.</li>
                            <li>SI HAY VIABILIDAD TÉCNICA, PARA LA POSULACI&Oacute;N, SE FIRMAR&Aacute; LA PROMESA DE COMPRA VENTA QUE ENTREGAR&Aacute; EL TUTOR ASIGNADO.</li>
                            <li>EN LA ESCRITURA PÚBLICA DEBERÁ IR PROTOCOLIZADA LA CARTA DE ASIGNACIÓN DEL SUBSIDIO DISTRITAL DE VIVIENDA.</li>
                            <li>ANTES DE LA FIRMA DE LA ESCRITURA PÚBLICA EL HOGAR BENEFICIARIO DEBERÁ ALLEGAR EL BORRADOR DE LA MINUTA PARA SU REVISIÓN Y APROBACIÓN.</li>
                            <li>AL MOMENTO DE FIRMAR ESCRITURA PÚBLICA EL VENDEDOR DEBERÁ ESTAR A PAZ Y SALVO CON EL IMPUESTO PREDIAL DE LOS ÚLTIMOS CINCO AÑOS, CUANDO APLIQUE.</li>
                            <li>AL MOMENTO DE FIRMAR ESCRITURAS PÚBLICAS EL VENDEDOR DEBERÁ ESTAR A PAZ Y SALVO CON LOS SERVICIOS PÚBLICOS BÁSICOS Y NO DEBERÁ TENER CRÉDITOS A SU CARGO EN CODENSA Y ACUEDUCTO, CUANDO APLIQUE.</li>
                            <li>VERIFICAR QUE LOS NOMBRES, CEDULAS Y TIPO DE VIVIENDA DEL HOGAR BENEFICIARIO DEL SDV ESTÉN ESCRITOS EN FORMA CORRECTA.</li>
                            <li>ACTUALIZAR EL NOMBRE DEL TITULAR EN LOS RECIBOS DE AGUA Y LUZ, CUANDO APLIQUE.</li>
                        </ol>
                        <?php $_from = $this->_tpl_vars['claDesembolso']->arrJuridico['recomendacion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recomendacion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recomendacion']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtRecomendacion']):
        $this->_foreach['recomendacion']['iteration']++;
?>
                                <?php echo smarty_function_math(array('equation' => "x + y",'x' => ($this->_foreach['recomendacion']['iteration']-1),'y' => 1,'assign' => 'numSecuencia'), $this);?>
							
                                <div id="recomendacion<?php echo $this->_tpl_vars['numSecuencia']; ?>
">							
                                    <div style="width:12px; height:14px; cursor:pointer; border: 1px solid #999999; float:left"
                                         onMouseOver="this.style.backgroundColor='#FFA4A4';"
                                         onMouseOut="this.style.backgroundColor='#F9F9F9'"
                                         onClick="eliminarObjeto('recomendacion<?php echo $this->_tpl_vars['numSecuencia']; ?>
')"
                                    >X</div>
                                    <div style="cursor:pointer; float:right; width:95%; height:14px; border:1px solid #F9F9F9;"
                                    onMouseOver="mostrarHint( '<?php echo $this->_tpl_vars['txtRecomendacion']; ?>
')" onMouseOut="ocultarHint();">
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['txtRecomendacion'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 40): ?>
                                            <?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['txtRecomendacion'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 40) : substr($_tmp, 0, 40)); ?>
...
                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo $this->_tpl_vars['txtRecomendacion']; ?>

                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="recomendacion[]" value="<?php echo $this->_tpl_vars['txtRecomendacion']; ?>
">
                                </div>								
                            <?php endforeach; endif; unset($_from); ?>
                    </td></tr>
				</table>
				
				<!-- CONCEPTO -->
				<table cellspacing="0" cellpadding="2" border="0" width="100%">
					<tr><td class="tituloTabla" colspan="2">Concepto</td></tr>
					<tr>
						<td align="center" colspan="2">	
							<textarea name="concepto"
									  style="width:96%; height:60px;"
									  onFocus="this.style.backgroundColor = '#ADD8E6';" 
								   	  onBlur="this.style.backgroundColor = '#FFFFFF'; sinCaracteresEspeciales( this );"
							><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtConcepto']; ?>
</textarea>
						</td>
					</tr>
				</table>
				
			</p></div>
<!-- PESTANA DE SEGUIMIENTO -->			
			<div id="se" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
; overflow:auto;"><p>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "seguimiento/seguimientoFormulario.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	        	<p><div id="contenidoBusqueda">
	        		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "seguimiento/buscarSeguimiento.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	        	</div></p>
	        	<!--  <input type="hidden" id="seqFormularioEditar" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
"> -->
	        	<input type="hidden" id="seqFormulario" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
">
			</p></div>
			
<!-- PESTANA ACTOS ADMINISTRATIVOS -->	        
	        <div id="aad" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
;"><p>
	        	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "subsidios/actosAdministrativos.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	        </p></div>
			
		</div>		
	</div>	

<!-- NO BORRAR, ESTE DIV ACTIVA EL TABVIEW -->
		<div id="seguimiento"></div>
		<div id="listenerBuscarUsuario" style="visibility: hidden;">juridica</div>