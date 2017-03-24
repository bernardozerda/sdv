<?php /* Smarty version 2.6.26, created on 2017-03-21 07:45:35
         compiled from casaMano/casaMano.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'casaMano/casaMano.tpl', 51, false),array('modifier', 'date_format', 'casaMano/casaMano.tpl', 63, false),array('modifier', 'upper', 'casaMano/casaMano.tpl', 63, false),)), $this); ?>

    <?php  setlocale(LC_TIME , 'spanish' );  ?>

    <?php $this->assign('numAncho', '130px'); ?>
    <?php $this->assign('numAlto', '40px'); ?>
    <?php $this->assign('numPadding', '2'); ?>
    <?php $this->assign('numBorde', '0'); ?>
    
    <?php $this->assign('txtVerde', "#d0ffd8"); ?>
    <?php $this->assign('txtRojo', "#ffd7d7"); ?>
    <?php $this->assign('txtAmarillo', "#ffffd7"); ?>
      
    <div id="regresar" hidden></div>    
    
<!-- CONTROLES PARA EL MODULO -->
    <div id="controles" 
         style="width:98%; padding-top: 10px;"
         align="center"
    >
        <table border="<?php echo $this->_tpl_vars['numBorde']; ?>
" cellpadding="0" cellspacing="<?php echo $this->_tpl_vars['numPadding']; ?>
" width="100%">
            <tr align="center" style="vertical-align: bottom;">
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
">
                    <strong>Registro de la Oferta</strong>
                </td>
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">
                    <strong>Revisi&oacute;n Jur&iacute;dica</strong>
                </td>
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">
                    <strong>Revisi&oacute;n T&eacute;cnica</strong>
                </td>
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">
                    <strong>Primera <br>Verificaci&oacute;n</strong>
                </td>
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">
                    <strong>Postulaci&oacute;n</strong>
                </td>
                <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">
                    <strong>Segunda<br>Verificaci&oacute;n</strong>
                </td>
            </tr>
        </table>
    </div>
    
<!-- CONTENIDOS DE CASA EN MANO -->
    <div id="cem" 
         style="width:98%; height:680px"
    ><p>
        <div>
            <table border="<?php echo $this->_tpl_vars['numBorde']; ?>
" cellpadding="0" cellspacing="<?php echo $this->_tpl_vars['numPadding']; ?>
" width="100%">
                <?php $_from = $this->_tpl_vars['arrCasaMano']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fases'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fases']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['seqCasaMano'] => $this->_tpl_vars['objCasaMano']):
        $this->_foreach['fases']['iteration']++;
?>
                    <tr align="center" style="vertical-align: middle;" bgcolor="<?php echo smarty_function_cycle(array('values' => "#FFFFFF,#E4E4E4"), $this);?>
">

                        <!-- REGISTRO DE VIVIENDA -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
"
                            style="cursor: pointer;"
                            onClick="cambioCEM(
                                        './contenidos/casaMano/registroOferta.php',
                                        'seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
&modificar=<?php echo ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']); ?>
'
                                    );"
                        >
                            <?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchRegistroVivienda )): ?>
                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchRegistroVivienda)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                            <?php else: ?>
                                &nbsp;
                            <?php endif; ?>
                        </td>

                        <!-- REVISION JURIDICA -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
" 
                            style="border-left: 1px dotted #666666; 
                                   <?php if ($this->_tpl_vars['objCasaMano']->bolRevisionJuridica == 0): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtAmarillo']; ?>

                                   <?php elseif ($this->_tpl_vars['objCasaMano']->bolRevisionJuridica == 1): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtVerde']; ?>

                                   <?php else: ?>
                                       background-color: <?php echo $this->_tpl_vars['txtRojo']; ?>

                                   <?php endif; ?>
                            "
                            <?php if ($this->_tpl_vars['objCasaMano']->txtRevisionJuridica != ""): ?>
                                onMouseOver="mostrarTooltip( this , '<div align=left><?php echo $this->_tpl_vars['objCasaMano']->txtRevisionJuridica; ?>
</div>' );"
                            <?php endif; ?>
                        >
                            <?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchRevisionJuridica )): ?>
                                <div style="padding-bottom:5px; cursor: pointer;" 
                                     onClick="cambioCEM('./contenidos/casaMano/revisionJuridica.php',
                                                        'seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
&modificar=<?php echo ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']); ?>
'
                                              );"
                                >
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchRevisionJuridica)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                </div>
                                <div style="cursor: pointer; 
                                            background-color: 
                                                <?php if ($this->_tpl_vars['objCasaMano']->numDiasRevisionJuridica >= $this->_tpl_vars['objCasaMano']->numDiasLimiteRevsionJuridica): ?> 
                                                    red 
                                                <?php else: ?> 
                                                    green 
                                                <?php endif; ?>; 
                                            font-size: 7px; 
                                            color: white; 
                                            font-weight: bold; 
                                            width:30px; 
                                            height: 10px;"
                                >
                                    <?php echo $this->_tpl_vars['objCasaMano']->numDiasRevisionJuridica; ?>

                                </div>
                            <?php else: ?>
                                <?php if (in_array ( $this->_tpl_vars['claFormulario']->seqEstadoProceso , $this->_tpl_vars['objCasaMano']->arrFases['cem']['revisionJuridica']['permisos'] ) && ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']) == 1): ?>
                                    <button style="cursor: pointer;" onClick="cambioCEM('./contenidos/casaMano/revisionJuridica.php','seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
&modificar=<?php echo ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']); ?>
');">
                                        <img src="./recursos/imagenes/plus_icon.gif">
                                    </button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>

                        <!-- REVISION TECNICA -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
" 
                            style="border-left: 1px dotted #666666; 
                                   <?php if ($this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 0): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtAmarillo']; ?>

                                   <?php elseif ($this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 1): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtVerde']; ?>

                                   <?php else: ?>
                                       background-color: <?php echo $this->_tpl_vars['txtRojo']; ?>

                                   <?php endif; ?>
                            "
                            <?php if ($this->_tpl_vars['objCasaMano']->txtRevisionTecnica != ""): ?>
                                <?php if ($this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 0): ?>
										onMouseOver="mostrarTooltip(this, '<div align=left>Concepto Final: En Proceso</div>');"
									<?php elseif ($this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 1): ?>
										onMouseOver="mostrarTooltip(this, '<div align=left>Concepto Final: Viabilizado</div>');"
								<?php else: ?>
										onMouseOver="mostrarTooltip(this, '<div align=left>Concepto Final: No viabilizado</div>');"
                            <?php endif; ?>
                            <?php endif; ?>
                        >
                            <?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchRevisionTecnica )): ?>
                                <div style="padding-bottom:5px; cursor: pointer;" 
                                     onClick="cambioCEM('./contenidos/casaMano/revisionTecnica.php',
                                                        'seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
&modificar=<?php echo ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']); ?>
'
                                              );"
                                >
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchRevisionTecnica)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                </div>
                                
                                
                                
                                <div style="cursor: pointer; 
                                            background-color: 
                                                <?php if ($this->_tpl_vars['objCasaMano']->numDiasRevisionTecnica >= $this->_tpl_vars['objCasaMano']->numDiasLimiteRevsionTecnica): ?> 
                                                    red 
                                                <?php else: ?> 
                                                    green 
                                                <?php endif; ?>; 
                                            font-size: 7px; 
                                            color: white; 
                                            font-weight: bold; 
                                            width:30px; 
                                            height: 10px;"
                                    onClick="
                                       <?php if ($this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 1): ?>                                    
                                          
                                       <?php else: ?>
                                          popUpPdfCasaMano( 'habitabilidadPdf.php' , 'exportar[]=<?php echo $this->_tpl_vars['seqFormulario']; ?>
' , '<?php echo $this->_tpl_vars['seqCasaMano']; ?>
' )
                                       <?php endif; ?>
                                    "
                                >
                                   <?php echo $this->_tpl_vars['objCasaMano']->numDiasRevisionTecnica; ?>

                                </div>
                            <?php else: ?>
                                <?php if (in_array ( $this->_tpl_vars['claFormulario']->seqEstadoProceso , $this->_tpl_vars['objCasaMano']->arrFases['cem']['revisionTecnica']['permisos'] ) && ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']) == 1): ?>
                                    <button style="cursor: pointer;" onClick="cambioCEM('./contenidos/casaMano/revisionTecnica.php','seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
&modificar=<?php echo ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']); ?>
');">
                                        <img src="./recursos/imagenes/plus_icon.gif">
                                    </button>
									<input type="checkbox" id="bolVisita" name="bolVisita">Con visita
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>

                        <!-- PRIMERA VERIFICACION -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
" 
                            style="border-left: 1px dotted #666666; 
                                   <?php if ($this->_tpl_vars['objCasaMano']->bolPrimeraVerificacion == 1): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtVerde']; ?>

                                   <?php elseif ($this->_tpl_vars['objCasaMano']->bolPrimeraVerificacion == 2): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtRojo']; ?>

                                   <?php endif; ?>
                            "
                        >
                            <?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchPrimeraVerificacion )): ?>
                                <div style="padding-bottom:5px">
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchPrimeraVerificacion)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                </div>
                                <?php if ($this->_tpl_vars['objCasaMano']->bolPrimeraVerificacion == 2): ?>
                                    <div style="cursor: pointer; 
                                                background-color: red; 
                                                font-size: 7px; 
                                                color: white; 
                                                font-weight: bold; 
                                                width:30px; 
                                                height: 10px;"
                                         onClick="popUpPdfCasaMano( 'exportarPdf.php' , 'exportar[]=<?php echo $this->_tpl_vars['seqFormulario']; ?>
' , '<?php echo $this->_tpl_vars['objCasaMano']->seqPrimeraVerificacion; ?>
' )"
                                    >
                                        PDF
                                    </div>
                                <?php endif; ?>    
                            <?php else: ?>
                                &nbsp;
                            <?php endif; ?>
                        </td>

                        <!-- POSTULACION -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
" 
                            style="border-left: 1px dotted #666666;"
                            
                        >
							<?php if ($this->_tpl_vars['objCasaMano']->bolPrimeraVerificacion == 1 && ( $this->_tpl_vars['objCasaMano']->bolRevisionTecnica == 1 )): ?>
								<?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchPostulacion )): ?>
									<div style="cursor: pointer;" onClick="cambioCEM('./contenidos/casaMano/postulacion.php','seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
');">
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchPostulacion)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

									</div>
								<?php else: ?>
									<?php if (in_array ( $this->_tpl_vars['claFormulario']->seqEstadoProceso , $this->_tpl_vars['objCasaMano']->arrFases['cem']['postulacion']['permisos'] ) && ($this->_foreach['fases']['iteration'] == $this->_foreach['fases']['total']) == 1): ?>
										<button style="cursor: pointer;" onClick="cambioCEM('./contenidos/casaMano/postulacion.php','seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&seqCasaMano=<?php echo $this->_tpl_vars['seqCasaMano']; ?>
');">
											<img src="./recursos/imagenes/plus_icon.gif">
										</button>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
                        </td>

                        <!-- SEGUNDA VERIFICACION -->
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" 
                            height="<?php echo $this->_tpl_vars['numAlto']; ?>
" 
                            style="border-left: 1px dotted #666666; 
                                   <?php if ($this->_tpl_vars['objCasaMano']->bolSegundaVerificacion == 1): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtVerde']; ?>

                                   <?php elseif ($this->_tpl_vars['objCasaMano']->bolSegundaVerificacion == 2): ?>
                                       background-color: <?php echo $this->_tpl_vars['txtRojo']; ?>

                                   <?php endif; ?>
                            "
                         >
                            <?php if (esFechaValida ( $this->_tpl_vars['objCasaMano']->fchSegundaVerificacion )): ?>
                                <div style="padding-bottom:5px">
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['objCasaMano']->fchSegundaVerificacion)) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                </div>
                                <?php if ($this->_tpl_vars['objCasaMano']->bolSegundaVerificacion == 2): ?>
                                    <div style="cursor: pointer; 
                                                background-color: red; 
                                                font-size: 7px; 
                                                color: white; 
                                                font-weight: bold; 
                                                width:30px; 
                                                height: 10px;"
                                         onClick="popUpPdfCasaMano( 'exportar[]=<?php echo $this->_tpl_vars['seqFormulario']; ?>
' , '<?php echo $this->_tpl_vars['objCasaMano']->seqSegundaVerificacion; ?>
' )"
                                       >
                                        PDF
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                &nbsp;
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                
                <!-- 
                    LINEA PARA ADICIONAR REGISTROS DE VIVIENDA
                    SOLO SI ESTA EN EL ESTADO DE HOGAR POSTULADO
                -->
                
                <?php if ($this->_tpl_vars['claFormulario']->seqEstadoProceso == 37): ?>
                    <tr align="center" style="vertical-align: bottom;">
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
">
                            <button onClick="cambioCEM( 
                                                './contenidos/casaMano/registroOferta.php' , 
                                                'seqFormulario=<?php echo $this->_tpl_vars['seqFormulario']; ?>
&cedula=<?php echo $this->_tpl_vars['arrPost']['cedula']; ?>
&modificar=1'
                                             );"
                            >
                                <img src="./recursos/imagenes/plus_icon.gif">
                            </button>
                        </td>
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">&nbsp;</td>
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">&nbsp;</td>
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">&nbsp;</td>
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">&nbsp;</td>
                        <td width="<?php echo $this->_tpl_vars['numAncho']; ?>
" style="border-left: 1px dotted #666666;">&nbsp;</td>
                    </tr>
                <?php endif; ?>
                
            </table>
        </div>
        <p><div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./cruces/datosHogar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div></p>
    </p></div>

	<!--
		DESPLIEGA UN CUADRO DE DIALOGO PARA CARGAR IMAGENES DE DESEMBOLSO 
		EN LA ETAPA DE REVISION TECNICA, CUANDO SE HA SELECCIONADO
		VIVIENDA USADA
	-->
		
	<div id="cargaArchivosDesembolso" style="visibility:hidden">
		<div class="hd">Seleccione el archivo de imágen</div>
		<div class="bd">
		<form method="POST" id="frmCargaArchivosDesembolso">
			<table cellpadding="0" cellspacing="5" border="0" width="90%">
				<tr>
					<td id="mensajesCargandoArchivos" colspan="2" class="tituloTabla" valign="top">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td>Seleccione el archivo</td>
					<td><input type="file" name="archivo" /></td>
				</tr>			
				<tr>
					<td>Nombre del Archivo</td>
					<td><input type="text" name="nombre" value="" style="width:100%" class="inputLogin" maxlength="17"/></td>
				</tr>
			</table>
			<input type="hidden" name="seqFormulario" id="seqFormulario" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
">
		</form>
		</div>
	</div>