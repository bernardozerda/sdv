<?php /* Smarty version 2.6.26, created on 2017-03-21 10:07:38
         compiled from desembolso/revisionTecnica.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'desembolso/revisionTecnica.tpl', 24, false),array('modifier', 'ucwords', 'desembolso/revisionTecnica.tpl', 99, false),array('modifier', 'strlen', 'desembolso/revisionTecnica.tpl', 144, false),array('modifier', 'substr', 'desembolso/revisionTecnica.tpl', 145, false),array('modifier', 'number_format', 'desembolso/revisionTecnica.tpl', 790, false),)), $this); ?>

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
<?php $this->assign('seqTipoDocumento', $this->_tpl_vars['objCiudadano']->seqTipoDocumento); ?>
<?php $this->assign('bolDesplazado', $this->_tpl_vars['claFormulario']->bolDesplazado); ?>
<?php $this->assign('seqTipoEsquema', $this->_tpl_vars['claFormulario']->seqTipoEsquema); ?>
<?php $this->assign('numAltura', 550); ?>
<?php echo smarty_function_math(array('equation' => "x-50",'x' => $this->_tpl_vars['numAltura'],'assign' => 'numAlturaInterna'), $this);?>

<div id="revTecGen" class="yui-navset" style="width:98%; height:<?php echo $this->_tpl_vars['numAltura']; ?>
; text-align:left;">
    <ul class="yui-nav">
        <li class="selected"><a href="#dho"><em>Datos del Hogar</em></a></li>
            <?php if ($this->_tpl_vars['arrFlujoHogar']['flujo'] == 'retornoEscritura' || $this->_tpl_vars['arrFlujoHogar']['flujo'] == 'retornoGiroAnticipado'): ?>
            <li><a href="#cte"><em>Concepto T&eacute;cnico</em></a></li>
            <?php else: ?>
            <li><a href="#vus"><em>Datos de la Vivienda</em></a></li>
            <?php endif; ?>
        <li><a href="#seg"><em>Seguimiento</em></a></li>
        <li><a href="#aad"><em>Actos Administrativos</em></a></li>
    </ul>            
    <div class="yui-content">

        <!-- PESTANA DE DATOS DEL HOGAR -->
        <div id="dho" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
">

            <!-- FECHA DE LA VISITA -->
            <table cellpadding="2" cellspacing="0" border="0" width="100%" bgcolor="#e4e4e4">
                <tr>
                    <td width="140px"><b>Fecha de la Visita:</b></td>
                    <td>
                        <input	type="text" 
                               id="fchVisita" 
                               name="fchVisita"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['fchVisita']; ?>
"  
                               style="width:100px;"
                               maxlength="10"
                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                               onBlur="this.style.backgroundColor = '#FFFFFF';"
                               readonly 
                               /> <a href="#" onClick="calendarioPopUp('fchVisita');">Calendario</a>	
                    </td>
                </tr>
                <tr>
                    <td><b>Preparó:</b></td>
                    <td><?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>
</td>
                </tr>
                <tr>
                    <td><b>Aprobó:</b></td>
                    <td height="22px" valign="top">
                        <div id="buscarUsuario">
                            <input	id="aprobo" 
                                   name="txtAprobo"
                                   type="text" 
                                   style="width:250px" 
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtAprobo']; ?>
"
                                   />
                            <div id="contUsuario" style="width:250px"></div>
                        </div>	
                    </td>
                </tr>
            </table>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "desembolso/pestanaDatosHogar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        </div>
        <!-- PESTANA DE CONCEPTO TECNICO -->
        <?php if ($this->_tpl_vars['arrFlujoHogar']['flujo'] == 'retornoEscritura' || $this->_tpl_vars['arrFlujoHogar']['flujo'] == 'retornoGiroAnticipado' || ( $this->_tpl_vars['localidadcem'] == 22 && $this->_tpl_vars['bolDesplazado'] == 1 && $this->_tpl_vars['bolVisita'] == 0 )): ?>
            <div id="cte" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
; overflow:auto;"><br>
                <center>

                    <table cellpadding="2" cellspacing="0" border="0" width="95%" style="border: 1px solid #999999;">
                        <tr><td colspan="2" align="center" style="padding-left:30px; padding-right:30px; font-weight:bold;">
                                REVISION CERTIFICADO DE EXISTENCIA Y HABITABILIDAD VIVIENDA
                                Y RSULTADO DE LA CONSULTA PARA EFECTOS DE LO
                                ORDENADO EN EL ARTICULO 34 DE LA RESOLUCION 966 DE 2004 DEL 
                                MINISTERIO DE AMBIENTE, VIVIENDA Y DESARROLLO TERRITORIAL 
                            </td></tr>
                        <tr><td colspan="2" >&nbsp;</td></tr>
                        <tr><td colspan="2" style="padding-left:30px; padding-right:30px;" >
                                El día de hoy <?php echo $this->_tpl_vars['txtHoy']; ?>
 se realizó la revision de los documentos radicados por el hogar
                                de <b><?php echo $this->_tpl_vars['objCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtNombre2; ?>
 
                                    <?php echo $this->_tpl_vars['objCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido2; ?>
</b>
                                identificado con <b> <?php echo ((is_array($_tmp=$this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumento']])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
 <?php echo $this->_tpl_vars['objCiudadano']->numDocumento; ?>
,</b> 
                                beneficiario(s) del Subsidio Distrital de Vivienda de la vivienda ubicada en la 
                                <b><?php echo $this->_tpl_vars['claDesembolso']->txtDireccionInmueble; ?>
</b> arrojando como resultado lo siguiente:
                            </td></tr>
                        <tr><td colspan="2" >&nbsp;</td></tr>
                        <tr>
                            <td valign="middle" align="justify" width="180px" class="tituloTabla">
                                Introduzca observaciones y presione el icono de adicionar
                            </td>
                            <td valign="top" align="center"  class="tituloTabla">
                                <table cellspacing="0" cellpadding="0" width="100%"><tr>
                                        <td>
                                            <textarea  id="observacion"
                                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                       onBlur="this.style.backgroundColor = '#FFFFFF';
                                                               sinCaracteresEspeciales(this);"
                                                       rows="2"
                                                       cols="80"
                                                       class="inputLogin"
                                                       ></textarea>
                                        </td>
                                        <td valign="middle" align="center" width="50px"> 
                                            <button type="button" 
                                                    id="adicionar" 
                                                    title="adicionar" 
                                                    class="reporteador"
                                                    onClick="adicionarDocumentoAnalizado(document.getElementById('observacion'), 'resultadoAnalisis', 'observacion', 97, 80);"
                                                    >
                                                <img src="./recursos/imagenes/plus_icon.gif" width="14" height="15" alt="Adicionar" align="center">
                                            </button>
                                        </td>
                                    </tr></table>
                            </td>
                        </tr>
                        <tr><td colspan="2" id="resultadoAnalisis" style="padding-left:30px; padding-right:30px;"><br>
                                <?php $_from = $this->_tpl_vars['claDesembolso']->arrTecnico['observacion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['observacion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['observacion']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtObservacion']):
        $this->_foreach['observacion']['iteration']++;
?>
                                    <?php echo smarty_function_math(array('equation' => "x + y",'x' => ($this->_foreach['observacion']['iteration']-1),'y' => 1,'assign' => 'numSecuencia'), $this);?>
							
                                    <div id="observacion<?php echo $this->_tpl_vars['numSecuencia']; ?>
">							
                                        <div style="width:12px; height:14px; cursor:pointer; border: 1px solid #999999; float:left"
                                             onMouseOver="this.style.backgroundColor = '#FFA4A4';"
                                             onMouseOut="this.style.backgroundColor = '#F9F9F9'"
                                             onClick="eliminarObjeto('observacion<?php echo $this->_tpl_vars['numSecuencia']; ?>
')"
                                             >X</div>
                                        <div style="cursor:pointer; float:right; width:97%; height:14px; border:1px solid #F9F9F9;"
                                             onMouseOver="mostrarHint('<?php echo $this->_tpl_vars['txtDocumento']; ?>
')" onMouseOut="ocultarHint();">
                                            <?php if (((is_array($_tmp=$this->_tpl_vars['txtObservacion'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 80): ?>
                                                <?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['txtObservacion'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 80) : substr($_tmp, 0, 80)); ?>
...
                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['numSecuencia']; ?>
 - <?php echo $this->_tpl_vars['txtObservacion']; ?>

                                            <?php endif; ?>
                                        </div>
                                        <input type="hidden" name="observacion[]" value="<?php echo $this->_tpl_vars['txtObservacion']; ?>
">
                                    </div>								
                                <?php endforeach; endif; unset($_from); ?>
                            </td></tr>
                        <tr><td colspan="2" style="padding-left:30px; padding-right:30px; padding-top:5px;">
                                De acuerdo con la revisión anteriormente descrita es viable continuar desde el punto
                                de vista técnico con los trámites que permitan el desembolso del subsidio.<br><br>
                            </td></tr>
                    </table>	
                </center>
            </div>
        <?php else: ?>
            <!-- PESTANA DE VIVIENDA USADA -->			
            <div id="vus" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
">

                <div id="revTecVivUsa" class="yui-navset" style="width:98%; height:<?php echo $this->_tpl_vars['numAlturaInterna']; ?>
; text-align:left;">
                    <ul class="yui-nav">
                        <li class="selected"><a href="#ces"><em>Condiciones Espaciales</em></a></li>
                        <li><a href="#cfi"><em>Físicas y Estructurales</em></a></li>
                        <li><a href="#spu"><em>Servicios Públicos</em></a></li>
                        <li><a href="#rfo"><em>Registro Fotográfico</em></a></li>
                    </ul>            
                    <div class="yui-content">

                        <!-- PESTANA DE CONDICIONES ESPACIALES -->
                        <div id="ces" style="height:<?php echo $this->_tpl_vars['numAlturaInterna']; ?>
; overflow:auto">

                            <table cellpadding="2" cellspacing="0" border="0" width="100%"> 
                                <tr>
                                    <td class="tituloTabla" width="120px" height="25px" valign="bottom">Descripción</td>
                                    <td class="tituloTabla" width="50px" valign="bottom">Largo</td>
                                    <td class="tituloTabla" width="50px" valign="bottom">Ancho</td>
                                    <td class="tituloTabla" width="70px">Area (m<sup>2</sup>)</td>
                                    <td class="tituloTabla" valign="bottom">Observaciones</td>
                                </tr>

                                <!-- ESPACIO MULTIPLE -->
                                <tr>
                                    <td>Espacio Múltiple</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoMultiple"
                                               name="numLargoMultiple"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoMultiple', 'numAnchoMultiple', 'numAreaMultiple');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoMultiple']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoMultiple"
                                               name="numAnchoMultiple"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoMultiple', 'numAnchoMultiple', 'numAreaMultiple');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoMultiple']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaMultiple"
                                               name="numAreaMultiple"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaMultiple']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtMultiple"
                                               name="txtMultiple"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%;"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtMultiple']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- ALCOBA 1 -->
                                <tr>
                                    <td>Alcoba 1</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoAlcoba1"
                                               name="numLargoAlcoba1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba1', 'numAnchoAlcoba1', 'numAreaAlcoba1');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoAlcoba1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoAlcoba1"
                                               name="numAnchoAlcoba1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba1', 'numAnchoAlcoba1', 'numAreaAlcoba1');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoAlcoba1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaAlcoba1"
                                               name="numAreaAlcoba1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaAlcoba1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtAlcoba1"
                                               name="txtAlcoba1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%;"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtAlcoba1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- ALCOBA 2 -->
                                <tr>
                                    <td>Alcoba 2</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoAlcoba2"
                                               name="numLargoAlcoba2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba2', 'numAnchoAlcoba2', 'numAreaAlcoba2');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoAlcoba2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoAlcoba2"
                                               name="numAnchoAlcoba2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba2', 'numAnchoAlcoba2', 'numAreaAlcoba2');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoAlcoba2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaAlcoba2"
                                               name="numAreaAlcoba2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaAlcoba2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtAlcoba2"
                                               name="txtAlcoba2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtAlcoba2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- ALCOBA 3 -->
                                <tr>
                                    <td>Alcoba 3</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoAlcoba3"
                                               name="numLargoAlcoba3"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba3', 'numAnchoAlcoba3', 'numAreaAlcoba3');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoAlcoba3']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoAlcoba3"
                                               name="numAnchoAlcoba3"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoAlcoba3', 'numAnchoAlcoba3', 'numAreaAlcoba3');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoAlcoba3']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaAlcoba3"
                                               name="numAreaAlcoba3"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaAlcoba3']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtAlcoba3"
                                               name="txtAlcoba3"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtAlcoba3']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- COCINA -->
                                <tr>
                                    <td>Cocina</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoCocina"
                                               name="numLargoCocina"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoCocina', 'numAnchoCocina', 'numAreaCocina');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoCocina']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoCocina"
                                               name="numAnchoCocina"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoCocina', 'numAnchoCocina', 'numAreaCocina');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoCocina']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaCocina"
                                               name="numAreaCocina"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaCocina']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtCocina"
                                               name="txtCocina"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtCocina']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- BANO 1 -->
                                <tr>
                                    <td>Baño 1</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoBano1"
                                               name="numLargoBano1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoBano1', 'numAnchoBano1', 'numAreaBano1');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoBano1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoBano1"
                                               name="numAnchoBano1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoBano1', 'numAnchoBano1', 'numAreaBano1');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoBano1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaBano1"
                                               name="numAreaBano1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaBano1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtBano1"
                                               name="txtBano1"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtBano1']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- BANO 2 -->
                                <tr>
                                    <td>Baño 2</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoBano2"
                                               name="numLargoBano2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoBano2', 'numAnchoBano2', 'numAreaBano2');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoBano2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoBano2"
                                               name="numAnchoBano2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoBano2', 'numAnchoBano2', 'numAreaBano2');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoBano2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaBano2"
                                               name="numAreaBano2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaBano2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtBano2"
                                               name="txtBano2"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtBano2']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- AREA DE LAVANDERIA -->
                                <tr>
                                    <td>Area de Lavandería</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoLavanderia"
                                               name="numLargoLavanderia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoLavanderia', 'numAnchoLavanderia', 'numAreaLavanderia');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoLavanderia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoLavanderia"
                                               name="numAnchoLavanderia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoLavanderia', 'numAnchoLavanderia', 'numAreaLavanderia');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoLavanderia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaLavanderia"
                                               name="numAreaLavanderia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaLavanderia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtLavanderia"
                                               name="txtLavanderia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtLavanderia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- CIRCULACIONES -->
                                <tr>
                                    <td>Circulaciones</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoCirculaciones"
                                               name="numLargoCirculaciones"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoCirculaciones', 'numAnchoCirculaciones', 'numAreaCirculaciones');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoCirculaciones']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoCirculaciones"
                                               name="numAnchoCirculaciones"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoCirculaciones', 'numAnchoCirculaciones', 'numAreaCirculaciones');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoCirculaciones']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaCirculaciones"
                                               name="numAreaCirculaciones"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaCirculaciones']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtCirculaciones"
                                               name="txtCirculaciones"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtCirculaciones']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- PATIO -->
                                <tr>
                                    <td>Patio</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLargoPatio"
                                               name="numLargoPatio"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoPatio', 'numAnchoPatio', 'numAreaPatio');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLargoPatio']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />	   
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAnchoPatio"
                                               name="numAnchoPatio"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       calcularArea('numLargoPatio', 'numAnchoPatio', 'numAreaPatio');
                                               "
                                               style="width:55px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAnchoPatio']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <input type="text"
                                               id="numAreaPatio"
                                               name="numAreaPatio"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);
                                                       sumarAreas('areaTotal');"
                                               style="width:60px; text-align: right;"
                                               maxlength="6"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaPatio']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtPatio"
                                               name="txtPatio"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtPatio']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- TOTAL -->
                                <tr>
                                    <td class="tituloTabla" colspan="3" align="right">Area Total Construida</td>
                                    <td bgcolor="#e4e4e4" align="right" style="padding-right:10px; font-weight: bold;" id="areaTotal">
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrTecnico['numAreaTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>

                                        <input type="hidden"
                                               id="numAreaTotal"
                                               name="numAreaTotal"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numAreaTotal']; ?>
"
                                               />
                                    </td>
                                    <td class="tituloTabla">&nbsp;</td>
                                </tr>
                            </table>

                        </div>

                        <!-- PESTANA DE CONDICIONES FISICAS Y ESTRUCTURALES -->
                        <div id="cfi" style="height:<?php echo $this->_tpl_vars['numAlturaInterna']; ?>
; overflow:auto;">		

                            <table cellpadding="2" cellspacing="0" border="0" width="100%"> 
                                <tr>
                                    <td class="tituloTabla" width="150px">Descripción</td>
                                    <td class="tituloTabla" width="150px">Esado</td>
                                    <td class="tituloTabla" valign="bottom">Observaciones</td>
                                </tr>

                                <!-- CIMENTACION -->
                                <tr>
                                    <td>Cimentación</td>
                                    <td align="center">
                                        <select id="txtEstadoCimentacion" 
                                                name="txtEstadoCimentacion"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCimentacion'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCimentacion'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCimentacion'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtCimentacion"
                                               name="txtCimentacion"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtCimentacion']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- PLACA DE ENTREPISO -->
                                <tr>
                                    <td>Placa de Entrepiso</td>
                                    <td align="center">
                                        <select id="txtEstadoPlacaEntrepiso" 
                                                name="txtEstadoPlacaEntrepiso"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPlacaEntrepiso'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPlacaEntrepiso'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPlacaEntrepiso'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtPlacaEntrepiso"
                                               name="txtPlacaEntrepiso"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtPlacaEntrepiso']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- MAMPOSTERIA -->
                                <tr>
                                    <td>Mampostería</td>
                                    <td align="center">
                                        <select id="txtEstadoMamposteria" 
                                                name="txtEstadoMamposteria"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMamposteria'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMamposteria'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMamposteria'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtMamposteria"
                                               name="txtMamposteria"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtMamposteria']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- CUBIERTA -->
                                <tr>
                                    <td>Cubierta</td>
                                    <td align="center">
                                        <select id="txtEstadoCubierta" 
                                                name="txtEstadoCubierta"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCubierta'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCubierta'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoCubierta'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtCubierta"
                                               name="txtCubierta"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtCubierta']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- VIGAS -->
                                <tr>
                                    <td>Vigas</td>
                                    <td align="center">
                                        <select id="txtEstadoVigas" 
                                                name="txtEstadoVigas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVigas'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVigas'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVigas'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtVigas"
                                               name="txtVigas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtVigas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- columnas -->
                                <tr>
                                    <td>Columnas</td>
                                    <td align="center">
                                        <select id="txtEstadoColumnas" 
                                                name="txtEstadoColumnas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoColumnas'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoColumnas'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoColumnas'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtColumnas"
                                               name="txtColumnas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtColumnas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Pañetes -->
                                <tr>
                                    <td>Pañetes</td>
                                    <td align="center">
                                        <select id="txtEstadoPanetes" 
                                                name="txtEstadoPanetes"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPanetes'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPanetes'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPanetes'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtPanetes"
                                               name="txtPanetes"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtPanetes']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- ENCHAPES Y ACCESORIOS -->
                                <tr>
                                    <td>Enchapes y Accesorios</td>
                                    <td align="center">
                                        <select id="txtEstadoEnchapes" 
                                                name="txtEstadoEnchapes"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoEnchapes'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoEnchapes'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoEnchapes'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtEnchapes"
                                               name="txtEnchapes"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtEnchapes']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- ACABADOS PISOS -->
                                <tr>
                                    <td>Acabados Pisos</td>
                                    <td align="center">
                                        <select id="txtEstadoAcabados" 
                                                name="txtEstadoAcabados"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoAcabados'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoAcabados'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoAcabados'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtAcabados"
                                               name="txtAcabados"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtAcabados']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- INSTALACIONES HIDRAULICAS -->
                                <tr>
                                    <td>Instalaciones Hidráulicas</td>
                                    <td align="center">
                                        <select id="txtEstadoHidraulicas" 
                                                name="txtEstadoHidraulicas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoHidraulicas'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoHidraulicas'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoHidraulicas'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtHidraulicas"
                                               name="txtHidraulicas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtHidraulicas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- INSTALACIONES ELECTRICAS -->
                                <tr>
                                    <td>Instalaciones Eléctricas</td>
                                    <td align="center">
                                        <select id="txtEstadoElectricas" 
                                                name="txtEstadoElectricas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoElectricas'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoElectricas'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoElectricas'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtElectricas"
                                               name="txtElectricas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtElectricas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- INSTALACIONES SANITARIAS -->
                                <tr>
                                    <td>Instalaciones Sanitarias</td>
                                    <td align="center">
                                        <select id="txtEstadoSanitarias" 
                                                name="txtEstadoSanitarias"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoSanitarias'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoSanitarias'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoSanitarias'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtSanitarias"
                                               name="txtSanitarias"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtSanitarias']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- INSTALACIONES DE GAS -->
                                <tr>
                                    <td>Instalaciones de Gas</td>
                                    <td align="center">
                                        <select id="txtEstadoGas" 
                                                name="txtEstadoGas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoGas'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoGas'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoGas'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtGas"
                                               name="txtGas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtGas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- CARPINTERIA MADERA -->
                                <tr>
                                    <td>Carpinteria Madera</td>
                                    <td align="center">
                                        <select id="txtEstadoMadera" 
                                                name="txtEstadoMadera"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMadera'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMadera'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMadera'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtMadera"
                                               name="txtMadera"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtMadera']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- CARPINTERIA METALICA -->
                                <tr>
                                    <td>Carpinteria Metalica</td>
                                    <td align="center">
                                        <select id="txtEstadoMetalica" 
                                                name="txtEstadoMetalica"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMetalica'] == 'ejecutado'): ?> selected <?php endif; ?> >Ejecutado</option>
                                            <option value="no ejecutado" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMetalica'] == 'no ejecutado'): ?> selected <?php endif; ?> >No Ejecutado</option>
                                            <option value="ejecucion parcial" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoMetalica'] == 'ejecucion parcial'): ?> selected <?php endif; ?>>Ejecución Parcial</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtMetalica"
                                               name="txtMetalica"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtMetalica']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- LAVADERO -->
                                <tr>
                                    <td>Lavadero</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLavadero"
                                               name="numLavadero"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:150px; text-align: right;"
                                               maxlength="2"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLavadero']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtLavadero"
                                               name="txtLavadero"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtLavadero']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- LAVAPLATOS -->
                                <tr>
                                    <td>Lavaplatos</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLavaplatos"
                                               name="numLavaplatos"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:150px; text-align: right;"
                                               maxlength="2"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLavaplatos']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtLavaplatos"
                                               name="txtLavaplatos"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtLavaplatos']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Lavamanos -->
                                <tr>
                                    <td>Lavamanos</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numLavamanos"
                                               name="numLavamanos"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:150px; text-align: right;"
                                               maxlength="2"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numLavamanos']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtLavamanos"
                                               name="txtLavamanos"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtLavamanos']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Sanitario -->
                                <tr>
                                    <td>Sanitario</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numSanitario"
                                               name="numSanitario"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:150px; text-align: right;"
                                               maxlength="2"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numSanitario']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtSanitario"
                                               name="txtSanitario"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtSanitario']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Ducha -->
                                <tr>
                                    <td>Ducha</td>
                                    <td align="center">
                                        <input type="text"
                                               id="numDucha"
                                               name="numDucha"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:150px; text-align: right;"
                                               maxlength="2"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numDucha']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDucha"
                                               name="txtDucha"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDucha']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- VIDRIOS -->
                                <tr>
                                    <td>Vidrios</td>
                                    <td align="center">
                                        <select id="txtEstadoVidrios" 
                                                name="txtEstadoVidrios"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="si" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVidrios'] == 'si'): ?> selected <?php endif; ?> >Si</option>
                                            <option value="no" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVidrios'] == 'no'): ?> selected <?php endif; ?> >No</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtVidrios"
                                               name="txtVidrios"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtVidrios']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- pintura -->
                                <tr>
                                    <td>Pintura</td>
                                    <td align="center">
                                        <select id="txtEstadoPintura" 
                                                name="txtEstadoPintura"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="si" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPintura'] == 'si'): ?> selected <?php endif; ?> >Si</option>
                                            <option value="no" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoPintura'] == 'no'): ?> selected <?php endif; ?> >No</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtPintura"
                                               name="txtPintura"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtPintura']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Otros -->
                                <tr>
                                    <td>Otros</td>
                                    <td align="center">
                                        <input type="text"
                                               id="txtOtros"
                                               name="txtOtros"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:150px;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtOtros']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtObservacionOtros"
                                               name="txtObservacionOtros"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtObservacionOtros']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                            </table>

                        </div>
                        <!-- PESTANA DE SERVICIOS PUBLICOS Y AMOBLAMIENTO -->			
                        <div id="spu" style="height:<?php echo $this->_tpl_vars['numAlturaInterna']; ?>
;">	

                            <table cellpadding="2" cellspacing="0" border="0" width="100%"> 
                                <tr>
                                    <td class="tituloTabla" width="150px">Descripción</td>
                                    <td class="tituloTabla" width="100px">Contador</td>
                                    <td class="tituloTabla" width="150px">Estado Conexión</td>
                                    <td class="tituloTabla" >Observaciones</td>
                                </tr>

                                <!-- Servicio de agua -->
                                <tr>
                                    <td>Servicio de Agua</td>
                                    <td>
                                        <input type="text"
                                               id="numContadorAgua"
                                               name="numContadorAgua"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';"                                                
                                               style="width:100px; text-align: right;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numContadorAgua']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoConexionAgua" 
                                                name="txtEstadoConexionAgua"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="provisional" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionAgua'] == 'provisional'): ?> selected <?php endif; ?> >Provisional</option>
                                            <option value="definitivo" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionAgua'] == 'definitivo'): ?> selected <?php endif; ?> >Definitivo</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionAgua"
                                               name="txtDescripcionAgua"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionAgua']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Servicio de energia -->
                                <tr>
                                    <td>Servicio de Energía</td>
                                    <td>
                                        <input type="text"
                                               id="numContadorEnergia"
                                               name="numContadorEnergia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:100px; text-align: right;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numContadorEnergia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoConexionEnergia" 
                                                name="txtEstadoConexionEnergia"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="provisional" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionEnergia'] == 'provisional'): ?> selected <?php endif; ?> >Provisional</option>
                                            <option value="definitivo" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionEnergia'] == 'definitivo'): ?> selected <?php endif; ?> >Definitivo</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionEnergia"
                                               name="txtDescripcionEnergia"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionEnergia']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Servicio de alcantarillado -->
                                <tr>
                                    <td>Servicio de Alcantarillado</td>
                                    <td>
                                        <input type="text"
                                               id="numContadorAlcantarillado"
                                               name="numContadorAlcantarillado"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:100px; text-align: right;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numContadorAlcantarillado']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoConexionAlcantarillado" 
                                                name="txtEstadoConexionAlcantarillado"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="provisional" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionAlcantarillado'] == 'provisional'): ?> selected <?php endif; ?> >Provisional</option>
                                            <option value="definitivo" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionAlcantarillado'] == 'definitivo'): ?> selected <?php endif; ?> >Definitivo</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionAlcantarillado"
                                               name="txtDescripcionAlcantarillado"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionAlcantarillado']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Servicio de gas -->
                                <tr>
                                    <td>Servicio de Gas</td>
                                    <td>
                                        <input type="text"
                                               id="numContadorGas"
                                               name="numContadorGas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:100px; text-align: right;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numContadorGas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoConexionGas" 
                                                name="txtEstadoConexionGas"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="provisional" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionGas'] == 'provisional'): ?> selected <?php endif; ?> >Provisional</option>
                                            <option value="definitivo" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionGas'] == 'definitivo'): ?> selected <?php endif; ?> >Definitivo</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionGas"
                                               name="txtDescripcionGas"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionGas']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Servicio de telefonico -->
                                <tr>
                                    <td>Servicio de Teléfono</td>
                                    <td>
                                        <input type="text"
                                               id="numContadorTelefono"
                                               name="numContadorTelefono"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       soloNumeros(this);"
                                               style="width:100px; text-align: right;"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['numContadorTelefono']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoConexionTelefono" 
                                                name="txtEstadoConexionTelefono"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="si" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionTelefono'] == 'si'): ?> selected <?php endif; ?> >Si</option>
                                            <option value="no" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoConexionTelefono'] == 'no'): ?> selected <?php endif; ?> >No</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionTelefono"
                                               name="txtDescripcionTelefono"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionTelefono']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Andenes -->
                                <tr>
                                    <td>Andenes</td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoAndenes" 
                                                name="txtEstadoAndenes"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="construidos" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoAndenes'] == 'construidos'): ?> selected <?php endif; ?> >Construidos</option>
                                            <option value="no construidos" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoAndenes'] == 'no construidos'): ?> selected <?php endif; ?> >No Construidos</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionAndenes"
                                               name="txtDescripcionAndenes"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionAndenes']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Vias -->
                                <tr>
                                    <td>Vias</td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoVias" 
                                                name="txtEstadoVias"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="pavimentadas" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVias'] == 'pavimentadas'): ?> selected <?php endif; ?> >Pavimentadas</option>
                                            <option value="no pavimentadas" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoVias'] == 'no pavimentadas'): ?> selected <?php endif; ?> >No Pavimentadas</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionVias"
                                               name="txtDescripcionVias"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionVias']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>

                                <!-- Servicios Comunales -->
                                <tr>
                                    <td>Servicios Comunales</td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td align="center">
                                        <select id="txtEstadoServiciosComunales" 
                                                name="txtEstadoServiciosComunales"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="construidos" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoServiciosComunales'] == 'construidos'): ?> selected <?php endif; ?> >Construidos</option>
                                            <option value="no construidos" <?php if ($this->_tpl_vars['claDesembolso']->arrTecnico['txtEstadoServiciosComunales'] == 'no construidos'): ?> selected <?php endif; ?> >No Construidos</option>
                                        </select>
                                    </td>
                                    <td style="padding-left:10px;">
                                        <input type="text"
                                               id="txtDescripcionServiciosComunales"
                                               name="txtDescripcionServiciosComunales"
                                               onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                                       sinCaracteresEspeciales(this);"
                                               style="width:97%"
                                               class="inputLogin"
                                               value="<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionServiciosComunales']; ?>
" 
                                               <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                               />
                                    </td>
                                </tr>


                                <!-- Descripcion de la vivienda -->
                                <tr>
                                    <td>Descripción de la vivienda</td>
                                    <td align="center" colspan="4">
                                        <textarea name="txtDescripcionVivienda" 
                                                  style="width:96%"
                                                  onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                  onBlur="this.style.backgroundColor = '#FFFFFF';
                                                          sinCaracteresEspeciales(this);" 
                                                  <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                  ><?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionVivienda']; ?>
</textarea>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>

                            </table>


                            <table cellpadding="2" cellspacing="0" border="0" width="100%"> 
                                <tr>
                                    <td width="420px">Cumple la vivienda con los requisitos de existencia y habitabilidad</td>
                                    <td>
                                        <select id="txtExistencia" 
                                                name="txtExistencia"
                                                onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                onBlur="this.style.backgroundColor = '#FFFFFF';"
                                                style="width:150px;" 
                                                <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                ><option value="">Seleccione</option>
                                            <option value="si" <?php if (strtoupper ( $this->_tpl_vars['claDesembolso']->arrTecnico['txtExistencia'] ) == 'SI'): ?> selected <?php endif; ?> >Sí</option>
                                            <option value="no" <?php if (strtoupper ( $this->_tpl_vars['claDesembolso']->arrTecnico['txtExistencia'] ) == 'NO'): ?> selected <?php endif; ?> >No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b>Recomendaciones</b>
                                        <textarea name="txtDescripcionExistencia"
                                                  id="txtDescripcionExistencia" 
                                                  style="width:96%; height: 100px;"
                                                  onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                                  onBlur="this.style.backgroundColor = '#FFFFFF';
                                                          sinCaracteresEspeciales(this);" 
                                                  <?php if ($this->_tpl_vars['seqTipoEsquema'] == 1): ?>disabled<?php endif; ?>
                                                  ><?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionExistencia']; ?>
</textarea>
                                    </td>
                                </tr>
                            </table>

                            <!-- VARIABLES ELIMINADAS QUE SIGUEN EXISTIENDO EN LA BASE DE DATOS -->
                            <input type="hidden" value = "<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtNormaNSR98']; ?>
" name = "txtNormaNSR98"  id="txtNormaNSR98" >
                            <input type="hidden" value = "<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtRequisitos']; ?>
" name = "txtRequisitos"  id="txtRequisitos">
                            <input type="hidden" value = "<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescipcionNormaNSR98']; ?>
" name = "txtDescipcionNormaNSR98"  id="txtDescipcionNormaNSR98">
                            <input type="hidden" value = "<?php echo $this->_tpl_vars['claDesembolso']->arrTecnico['txtDescripcionRequisitos']; ?>
" name = "txtDescripcionRequisitos"  id="txtDescripcionRequisitos">

                        </div>
                        <!-- PESTANA DE REGISTRO FOTOGRAFICO -->			
                        <div id="rfo" style="height:<?php echo $this->_tpl_vars['numAlturaInterna']; ?>
; overflow:auto"><p>	

                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td align="center" valign="middle" width="50px">
                                        <?php if ($this->_tpl_vars['seqTipoEsquema'] != 1): ?>
                                            <button type="button" 
                                                    id="linkCargaArchivosDesembolso" 
                                                    title="adicionar" 
                                                    class="reporteador"
                                                    >
                                                <img src="./recursos/imagenes/plus_icon.gif" width="14" height="15" alt="Adicionar" align="center">
                                            </button>
                                        <?php endif; ?>
                                    </td>
                                    <td align="justify" style="padding-right:50px">
                                        A continuación verá el listado de imagenes cargadas para este hogar
                                        haga Click en el boton para cargar mas imagenes, si desea borrar una
                                        de las imágenes de click en la X al lado de la imagen que desea eliminar.<br><br>
                                        Para ver una imagen en su tamaño original haga click sobre la miniatura.
                                    </td>

                                </tr>
                                <tr>
                                    <td height="20px" colspan="2">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <div style="overflow:auto; text-align:left; width:700px; padding-top: 10px; padding-bottom: 10px; border: 1px dotted #999999; ">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tr id="contenedorImagenes">
                                                    <?php $_from = $this->_tpl_vars['claDesembolso']->arrTecnico['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrImagen']):
?>
                                                        <td	id="<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
" 
                                                            align="center" 
                                                            style="padding-left:10px; padding-rigth:10px"
                                                            >
                                                            <?php if ($this->_tpl_vars['seqTipoEsquema'] != 1): ?>
                                                                <div style="width:12px; height:14px; cursor:pointer; border: 1px solid #999999; float:left"
                                                                     onMouseOver="this.style.backgroundColor = '#FFA4A4';"
                                                                     onMouseOut="this.style.backgroundColor = '#F9F9F9'"
                                                                     onClick="
                                                                             eliminarObjeto('<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
');
                                                                             cargarContenido('mensajes', './contenidos/desembolso/eliminarArchivosDesemboslo.php', 'ruta=<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
', true);
                                                                     "
                                                                     >X</div>
                                                            <?php endif; ?>
                                                            <?php echo $this->_tpl_vars['arrImagen']['nombre']; ?>
<hr>
                                                            <img src="./recursos/imagenes/desembolsos/<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
" width='120px' height='120px' onClick="tamanoOriginal('<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
', '<?php echo $this->_tpl_vars['arrImagen']['nombre']; ?>
');" style="cursor:pointer">
                                                            <input type='hidden' name='nombreArchivoCargado[]' value='<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
'>
                                                            <input type='hidden' name='textoArchivoCargado[]' value='<?php echo $this->_tpl_vars['arrImagen']['nombre']; ?>
'>
                                                            <div id="ver<?php echo $this->_tpl_vars['arrImagen']['ruta']; ?>
"></div>
                                                        </td>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </p></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- PESTANA DE SEGUIMIENTO -->			
        <div id="seg" style="height:<?php echo $this->_tpl_vars['numAltura']; ?>
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
            <input type="hidden" id="seqFormularioEditar" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
">
            </p></div>	

        <!-- PESTAÑA ACTOS ADMINISTRATIVOS -->	        
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

<!-- LISTENER PARA ACTIVAR EL CUADRO DE DIALOGO -->
<div id="listenerCargaArchivosDesembolso"></div>
<div id="listenerRevisionTecnica"></div>
<div id="listenerBuscarUsuario">tecnico</div>