<?php /* Smarty version 2.6.26, created on 2017-03-20 15:37:28
         compiled from desembolso/busquedaOferta.tpl */ ?>
	
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
<?php $this->assign('bolDesplazado', $this->_tpl_vars['claFormulario']->bolDesplazado); ?>

<!-- 
        TREE VIEW QUE CONTIENE LA INFORMACION DE LA FASE 
-->

<?php $this->assign('numAltura', 500); ?>
<div id="demo" class="yui-navset" style="width:98%; height:<?php echo $this->_tpl_vars['altura']; ?>
; text-align:left;">
    <ul class="yui-nav">
        <li class="selected"><a href="#dh"><em>Datos del Hogar</em></a></li>
        <li><a href="#di"><em>Datos del Inmueble</em></a></li>
        <li><a href="#rd"><em>Recibo de Documentos</em></a></li>
        <li><a href="#se"><em>Seguimiento</em></a></li>
        <li><a href="#aad"><em>Actos Administrativos</em></a></li>
    </ul>            
    <div class="yui-content">

        <!-- PESTANA DE DATOS DEL HOGAR -->
        <div id="dh" style="height:<?php echo $this->_tpl_vars['altura']; ?>
">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "desembolso/pestanaDatosHogar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>				
        </div>

        <!-- PESTANA DE DATOS DEL INMUEBLE -->			
        <div id="di" style="height:<?php echo $this->_tpl_vars['altura']; ?>
"><p>

                <!-- PARA BUSCAR Y BORRAR
                        proyectoSolucion
                        DatosInmuebleGA
                        DatosInmueble
                        NombreVendedor
                -->

            <center>
                <?php if ($this->_tpl_vars['txtFase'] == 'busquedaOferta'): ?>
                    <div style="width:100%; color:white; background-color:#00cc00; height:20px; vertical-align:middle; font-weight:bold; padding-top:5px;">
                        INFORMACION DE ESCRITURA ANTECEDENTE
                    </div>
                <?php elseif ($this->_tpl_vars['txtFase'] == 'escrituracion'): ?>
                    <div style="width:100%; color:white; background-color: #0000ff; height:20px; vertical-align:middle; font-weight:bold; padding-top:5px;">
                        DATOS ESCRITURACION CON SDVE
                    </div>
                <?php endif; ?>
            </center> 

            <table cellpadding="2" cellspacing="0" border="0" width="98%">

                <!-- datos del vendedor o arrendatario en caso de modalidad de arriendo -->
                <tr><td class="tituloTabla" colspan="4">
                        Datos del <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> vendedor <?php else: ?> arrenador <?php endif; ?>
                    </td></tr>

                <!-- nombre del vendedor / arrendador -->
                <tr>
                    <td>Nombre del <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> vendedor <?php else: ?> arrenador <?php endif; ?></td>
                    <td colspan="3">
                        <input	type="text" 
                               name="txtNombreVendedor" 
                               id="txtNombreVendedor"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                        ponerPlaceholder(this.id, 'Nombre del <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> vendedor <?php else: ?> arrenador <?php endif; ?>');" 
                               onBlur="this.style.backgroundColor = '#FFFFFF';
                                        sinCaracteresEspeciales(this);"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>
"
                               style="width:98%"
                               />
                    </td>
                </tr>

                <!-- tipo de documento -->
                <tr>
                    <td>Tipo Documento</td>
                    <td>
                        <select	onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                name="seqTipoDocumento" 
                                id="seqTipoDocumento"
                                style="width:200px"
                                >
                            <?php $_from = $this->_tpl_vars['arrTipoDocumento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqTipoDocumento'] => $this->_tpl_vars['txtTipoDocumento']):
?>
                                <option value="<?php echo $this->_tpl_vars['seqTipoDocumento']; ?>
"
                                        <?php if ($this->_tpl_vars['claDesembolso']->seqTipoDocumento == $this->_tpl_vars['seqTipoDocumento']): ?> selected <?php endif; ?>
                                        ><?php echo $this->_tpl_vars['txtTipoDocumento']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>	        				
                    </td>
                    <td width="150px">Documento del <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> vendedor <?php else: ?> arrenador <?php endif; ?></td>
                    <td>
                        <input type="text" 
                               name="numDocumentoVendedor" 
                               id="numDocumentoVendedor"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                                   ponerPlaceholder(this.id, 'Documento');" 
                               onBlur="javascript: soloNumeros(this);
                                                   this.style.backgroundColor = '#FFFFFF';"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->numDocumentoVendedor; ?>
"
                               style="width:200px"
                               />
                    </td>
                </tr>

                <!-- TELEFONO 1 y 2 -->
                <tr>
                    <td>Tel&eacute;fono <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> vendedor <?php else: ?> arrenador <?php endif; ?></td>
                    <td>
                        <input type="text" 
                               name="numTelefonoVendedor" 
                               id="numTelefonoVendedor"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                           ponerPlaceholder(this.id, 'Telefono 1');" 
                               onBlur="javascript: soloNumeros(this);
                                           this.style.backgroundColor = '#FFFFFF';"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->numTelefonoVendedor; ?>
"
                               size="16"
                               />

                        <input type="text" 
                               name="numTelefonoVendedor2" 
                               id="numTelefonoVendedor2"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                           ponerPlaceholder(this.id, 'Telefono 2');" 
                               onBlur="javascript: soloNumeros(this);
                                           this.style.backgroundColor = '#FFFFFF';"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->numTelefonoVendedor2; ?>
"
                               size="16"
                               />
                    </td>
                    <td>Correo Electr&oacute;nico</td>
                    <td>
                        <input	type="text" 
                               name="txtCorreoVendedor" 
                               id="txtCorreoVendedor"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                           ponerPlaceholder(this.id, 'Correo electr&oacute;nico');" 
                               onBlur="this.style.backgroundColor = '#FFFFFF';"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->txtCorreoVendedor; ?>
"
                               style="width:200px"
                               />
                    </td>
                </tr>   
                <tr>
                    <td>Tipo de Vivienda</td>
                    <td>
                        Nueva <input type="radio" 
                                     name="txtCompraVivienda"
                                     id="compraNueva"
                                     value="nueva"
                                     <?php if ($this->_tpl_vars['claDesembolso']->txtCompraVivienda == 'nueva'): ?> checked <?php endif; ?>
                                     />

                        Usada <input type="radio" 
                                     name="txtCompraVivienda"
                                     id="compraUsada"
                                     value="usada"
                                     <?php if ($this->_tpl_vars['claDesembolso']->txtCompraVivienda == 'usada'): ?> checked <?php endif; ?>
                                     />
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>    		
            </table>

            <!--  DATOS DEL INMUEBLE -->
            <table cellpadding="2" cellspacing="0" border="0" width="98%">
                <tr>
                    <td class="tituloTabla" colspan="6">Datos del inmueble</td>
                </tr>
                <tr>
                    <td width="150px">
                        <a href="#" id="Direccion" onClick="recogerDireccion('txtDireccionInmueble', 'objDireccionOcultoInmueble')">
                            Direcci&oacute;n del Inmueble
                        </a>
                    </td>
                    <td colspan="2">
                        <div id="DireccionInmueble"> 
                            <input type="text" 
                                   name="txtDireccionInmueble" 
                                   id="txtDireccionInmueble"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';
                                                       ponerPlaceholder(this.id, 'Direcci&oacute;n');" 
                                   onBlur="this.style.backgroundColor = '#FFFFFF';"
                                   style="width:98%;"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtDireccionInmueble; ?>
"
                                   readonly
                                   />
                            <div id="objDireccionOcultoInmueble" style="display:none" />
                        </div> 
                    </td>
                    <td colspan="2">
                        <?php if ($this->_tpl_vars['seqModalidad'] != 1): ?>
                            <input 	type="checkbox"
                                    name="bolPoseedor"
                                    id="bolPoseedor"
                                    value="1"
                                    <?php if ($this->_tpl_vars['claDesembolso']->bolPoseedor == 1): ?> checked <?php endif; ?>
                                    /> Es Poseedor
                        <?php else: ?>
                            &nbsp;
                        <?php endif; ?>
                    </td>
                </tr>

                <!-- CIUDAD -->
                <tr>
                    <td>Ciudad</td>
                    <td>
                        <select            
                            name="seqCiudad" 
                            id="seqCiudad" 
                            onFocus="this.style.backgroundColor = '#ADD8E6';" 
                            onBlur="this.style.backgroundColor = '#FFFFFF';" 
                            style="width:260px;" 
                            onChange="cargarContenido('localidad', './contenidos/desembolso/cambiarLocalidad.php', 'ciudad=' + this.options[ this.selectedIndex ].value, true);"
                            ><option value="">Seleccione</option>
                            <?php $_from = $this->_tpl_vars['arrCiudad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqCiudad'] => $this->_tpl_vars['txtCiudad']):
?>
                                <option value="<?php echo $this->_tpl_vars['seqCiudad']; ?>
" 
                                        <?php if ($this->_tpl_vars['claDesembolso']->seqCiudad == $this->_tpl_vars['seqCiudad']): ?> selected <?php endif; ?>
                                        > <?php echo $this->_tpl_vars['txtCiudad']; ?>
</option>            
                            <?php endforeach; endif; unset($_from); ?>
                        </select>    
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

                <!-- LOCALIDAD Y BARRIO -->
                <tr>
                    <td>Localidad</td>
                    <td id="localidad">
                        <select	onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                name="seqLocalidad" 
                                id="seqLocalidad" 
                                style="width:260px"
                                onChange="barrioAutocomplete(['txtBarrio', 'barrioContainer', 'seqLocalidad']);"
                                >
                            <option value="0">0 - DESCONOCIDO</option>
                            <?php $_from = $this->_tpl_vars['arrLocalidad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqLocalidad'] => $this->_tpl_vars['txtLocalidad']):
?>
                                <option value="<?php echo $this->_tpl_vars['seqLocalidad']; ?>
"
                                        <?php if ($this->_tpl_vars['claDesembolso']->seqLocalidad == $this->_tpl_vars['seqLocalidad']): ?> selected <?php endif; ?>
                                        ><?php echo $this->_tpl_vars['txtLocalidad']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </td>
                    <td>Barrio</td>
                    <td colspan="3" valign="top" align="left">
                        <div id="Barrio"> 
                            <div id="barrioAutocomplete" style="width:200px;">
                                <input	type="text" 
                                       name="txtBarrio" 
                                       id="txtBarrio"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';
                                                                   ponerPlaceholder(this.id, 'Barrio');" 
                                       onBlur="javascript: sinCaracteresEspeciales(this);
                                                                   this.style.backgroundColor = '#FFFFFF';"
                                       style="width:200px"
                                       value="<?php echo $this->_tpl_vars['claDesembolso']->txtBarrio; ?>
"
                                       />
                                <div id="barrioContainer" style="width:200px"></div>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- PARA LA MODALIDAD DE ARRIENDO ESTOS DATOS NO VAN -->
                <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> <!-- inicio de la condicion para modalidad de arriendo -->
                    <tr>
                        <td>T&iacute;tulo de Propiedad</td>
                        <td colspan="5">

                            <!-- TITULO DE PROPIEDAD -->
                            <select name="txtPropiedad"
                                    id="txtPropiedad"
                                    onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                    onBlur="this.style.backgroundColor = '#FFFFFF';"
                                    onChange="cambiarTipoPropiedad(this);"
                                    style="width:200px"
                                    />
                    <option value="escritura" <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'escritura'): ?> selected <?php endif; ?>>Escritura Publica</option>
                    <option value="sentencia" <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'sentencia'): ?> selected <?php endif; ?>>Sentencia</option>
                    <option value="resolucion" <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'resolucion'): ?> selected <?php endif; ?>>Resolucion</option>
                    <option value="ninguno" <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'ninguno'): ?> selected <?php endif; ?>>Ninguno</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="5">

                            <!-- OPCIONES PARA ESCRITURA PUBLICA -->

                            <div id="escritura"							
                                 <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'Escritura' || $this->_tpl_vars['claDesembolso']->txtPropiedad == 'escritura' || $this->_tpl_vars['claDesembolso']->txtPropiedad == ""): ?>
                                     style="display:'';"
                                 <?php else: ?>
                                     style="display:none;"
                                 <?php endif; ?>
                                 />
                            <div id="Escritura_ga">
                                <input	type="text" 
                                       name="txtEscritura" 
                                       id="txtEscritura"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="javascript: soloNumeros(this); this.style.backgroundColor = '#FFFFFF';"
                                       style="width:40px"
                                       value="<?php echo $this->_tpl_vars['claDesembolso']->txtEscritura; ?>
"
                                       /> del 
                                <input	type="text" 
                                       name="fchEscritura" 
                                       id="fchEscritura"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="javascript: sinCaracteresEspeciales(this);
                                                               this.style.backgroundColor = '#FFFFFF';"
                                       maxlength="10"
                                       style="width:80px"
                                       value="<?php if ($this->_tpl_vars['claDesembolso']->fchEscritura != '0000-00-00'): ?><?php echo $this->_tpl_vars['claDesembolso']->fchEscritura; ?>
<?php endif; ?>"
                                       readonly
                                       />  <a href="#" onClick="calendarioPopUp('fchEscritura');">Calendario</a> notaría
                                <input	type="text" 
                                       name="numNotaria" 
                                       id="numNotaria"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="javascript: soloNumeros(this);
                                                               this.style.backgroundColor = '#FFFFFF';"
                                       maxlength="3"
                                       style="width:37px"
                                       value="<?php echo $this->_tpl_vars['claDesembolso']->numNotaria; ?>
"
                                       /> ciudad 
                                <input	type="text" 
                                       name="txtCiudad" 
                                       id="txtCiudad"
                                       onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                       onBlur="javascript: soloLetras(this);
                                                               this.style.backgroundColor = '#FFFFFF';"
                                       style="width:100px"
                                       value="<?php echo $this->_tpl_vars['claDesembolso']->txtCiudad; ?>
"
                                       /></div> <!-- fin div Escritura_ga -->
                            </div>

                            <!-- OPCIONES PARA SENTENCIA -->
                            <div id="sentencia"
                                 <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'sentencia'): ?>
                                     style="display:'';"
                                 <?php else: ?>
                                     style="display:none;"
                                 <?php endif; ?>
                                 />
                            <input	type="text" 
                                   name="fchSentencia" 
                                   id="fchSentencia"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   maxlength="10"
                                   style="width:80px"
                                   value="<?php if ($this->_tpl_vars['claDesembolso']->fchSentencia != '0000-00-00'): ?><?php echo $this->_tpl_vars['claDesembolso']->fchSentencia; ?>
<?php endif; ?>"
                                   readonly
                                   />  <a href="#" onClick="calendarioPopUp('fchSentencia');">Calendario</a> juzgado 
                            <input	type="text" 
                                   name="numJuzgado" 
                                   id="numJuzgado"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   maxlength="3"
                                   style="width:37px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numJuzgado; ?>
"
                                   /> de la ciudad de 
                            <input	type="text" 
                                   name="txtCiudadSentencia" 
                                   id="txtCiudadSentencia"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloLetras(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:100px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCiudadSentencia; ?>
"
                                   /> 
                            </div>

                            <!-- OPCIONES PARA RESOLUCION -->
                            <div id="resolucion"
                                 <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'resolucion'): ?>
                                     style="display:'';"
                                 <?php else: ?>
                                     style="display:none;"
                                 <?php endif; ?>
                                 />
                            <input	type="text" 
                                   name="numResolucion" 
                                   id="numResolucion"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   maxlength="5"
                                   style="width:50px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numResolucion; ?>
"
                                   /> del
                            <input	type="text" 
                                   name="fchResolucion" 
                                   id="fchResolucion"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   maxlength="10"
                                   style="width:80px"
                                   value="<?php if ($this->_tpl_vars['claDesembolso']->fchResolucion != '0000-00-00'): ?><?php echo $this->_tpl_vars['claDesembolso']->fchResolucion; ?>
<?php endif; ?>"
                                   />  <a href="#" onClick="calendarioPopUp('fchResolucion');">Calendario</a> entidad 
                            <input	type="text" 
                                   name="txtEntidad" 
                                   id="txtEntidad"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloLetras(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:100px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtEntidad; ?>
"
                                   /> ciudad 
                            <input	type="text" 
                                   name="txtCiudadResolucion" 
                                   id="txtCiudadResolucion"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloLetras(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:100px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCiudadResolucion; ?>
"
                                   />
                            </div>

                        </td>
                    </tr>
                <?php endif; ?> <!-- fin de la condicion para modalidad de arriendo -->                                       

                <!-- MATRICULA INMOBILIARIA	 -->
                <tr>
                    <td>Matricula Inmobiliaria</td>
                    <td>
                        <input	type="text" 
                               name="txtMatriculaInmobiliaria" 
                               id="txtMatriculaInmobiliaria"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                                       ponerPlaceholder(this.id, 'Matricula Inmibiliaria');" 
                               onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                               style="width:200px"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->txtMatriculaInmobiliaria; ?>
"
                               />
                    </td>
                    <td>Chip</td>
                    <td colspan="3">
                        <input	type="text" 
                               name="txtChip" 
                               id="txtChip"
                               onFocus="this.style.backgroundColor = '#ADD8E6';
                                                       ponerPlaceholder(this.id, 'Chip');" 
                               onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                               style="width:200px"
                               value="<?php echo $this->_tpl_vars['claDesembolso']->txtChip; ?>
"
                               />
                    </td>		        			
                </tr>

                <!-- PARA LA MODALIDAD DE ARRIENDO ESTOS DATOS NO VAN -->
                <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> <!-- inicio de la condicion para modalidad de arriendo -->
                    <tr>
                        <td>Cedula Catastral</td>
                        <td>
                            <input	type="text" 
                                   name="txtCedulaCatastral" 
                                   id="txtCedulaCatastral"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';
                                                           ponerPlaceholder(this.id, 'Cedula catastral');" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:200px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCedulaCatastral; ?>
"
                                   />
                        </td>
                        <td>Area (m<sup>2</sup>)</td>
                        <td colspan="3">
                            Lote 
                            <input	type="text" 
                                   name="numAreaLote" 
                                   id="numAreaLote"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:50px"
                                   maxlength="4"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAreaLote; ?>
"
                                   /> Construida
                            <input	type="text" 
                                   name="numAreaConstruida" 
                                   id="numAreaConstruida"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:50px"
                                   maxlength="3"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAreaConstruida; ?>
"
                                   />
                        </td>		        			
                    </tr>	        		
                    <tr>
                        <td>Avaluo Inmueble</td>
                        <td>
                            <input	type="text" 
                                   name="numAvaluo" 
                                   id="numAvaluo"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';
                                                           ponerPlaceholder(this.id, 'Avaluo');" 
                                   onBlur="javascript: soloNumeros(this);
                                                           this.style.backgroundColor = '#FFFFFF';"
                                   style="width:200px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAvaluo; ?>
"
                                   />
                        </td>
                        <td>Valor Inmueble</td>
                        <td colspan="5">
                            <input	type="text" 
                                   name="numValorInmueble" 
                                   id="numValorInmueble"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';
                                                           ponerPlaceholder(this.id, 'Valor Inmueble');" 
                                   onBlur="javascript: soloNumeros(this); this.style.backgroundColor = '#FFFFFF';"
                                   style="width:200px"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numValorInmueble; ?>
"
                                   />
                        </td>
                    </tr>

                <?php endif; ?> <!-- fin de la condicion para modalidad de arriendo -->

                <tr>
                    <td>Tipo de Predio</td>
                    <td>
                        Urbano <input type="radio" 
                                      name="txtTipoPredio"
                                      id="tipoUrbano" 
                                      value="urbano" 
                                      <?php if (strtoupper ( $this->_tpl_vars['claDesembolso']->txtTipoPredio ) == 'URBANO'): ?> checked <?php endif; ?>
                                      />&nbsp;
                        Rural <input type="radio" 
                                     name="txtTipoPredio"
                                     id="tipoRural" 
                                     value="rural" 
                                     <?php if (strtoupper ( $this->_tpl_vars['claDesembolso']->txtTipoPredio ) == 'RURAL'): ?> checked <?php endif; ?>
                                     />
                    </td>
                    <td>
                        Estrato
                    </td>
                    <td  colspan="3">
                        <select	onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                onBlur="this.style.backgroundColor = '#FFFFFF';" 
                                name="numEstrato" 
                                id="numEstrato" 
                                style="width:200px"
                                >
                            <option value="0">No Disponible</option>
                            <?php unset($this->_sections['estrato']);
$this->_sections['estrato']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['estrato']['start'] = (int)1;
$this->_sections['estrato']['name'] = 'estrato';
$this->_sections['estrato']['show'] = true;
$this->_sections['estrato']['max'] = $this->_sections['estrato']['loop'];
$this->_sections['estrato']['step'] = 1;
if ($this->_sections['estrato']['start'] < 0)
    $this->_sections['estrato']['start'] = max($this->_sections['estrato']['step'] > 0 ? 0 : -1, $this->_sections['estrato']['loop'] + $this->_sections['estrato']['start']);
else
    $this->_sections['estrato']['start'] = min($this->_sections['estrato']['start'], $this->_sections['estrato']['step'] > 0 ? $this->_sections['estrato']['loop'] : $this->_sections['estrato']['loop']-1);
if ($this->_sections['estrato']['show']) {
    $this->_sections['estrato']['total'] = min(ceil(($this->_sections['estrato']['step'] > 0 ? $this->_sections['estrato']['loop'] - $this->_sections['estrato']['start'] : $this->_sections['estrato']['start']+1)/abs($this->_sections['estrato']['step'])), $this->_sections['estrato']['max']);
    if ($this->_sections['estrato']['total'] == 0)
        $this->_sections['estrato']['show'] = false;
} else
    $this->_sections['estrato']['total'] = 0;
if ($this->_sections['estrato']['show']):

            for ($this->_sections['estrato']['index'] = $this->_sections['estrato']['start'], $this->_sections['estrato']['iteration'] = 1;
                 $this->_sections['estrato']['iteration'] <= $this->_sections['estrato']['total'];
                 $this->_sections['estrato']['index'] += $this->_sections['estrato']['step'], $this->_sections['estrato']['iteration']++):
$this->_sections['estrato']['rownum'] = $this->_sections['estrato']['iteration'];
$this->_sections['estrato']['index_prev'] = $this->_sections['estrato']['index'] - $this->_sections['estrato']['step'];
$this->_sections['estrato']['index_next'] = $this->_sections['estrato']['index'] + $this->_sections['estrato']['step'];
$this->_sections['estrato']['first']      = ($this->_sections['estrato']['iteration'] == 1);
$this->_sections['estrato']['last']       = ($this->_sections['estrato']['iteration'] == $this->_sections['estrato']['total']);
?>
                                <option value="<?php echo $this->_sections['estrato']['index']; ?>
"
                                        <?php if ($this->_tpl_vars['claDesembolso']->numEstrato == $this->_sections['estrato']['index']): ?> selected <?php endif; ?> 
                                        >Estrato <?php echo $this->_sections['estrato']['index']; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </td>

                    <!-- Adicionado por jbernalr obtiene los campos para que sean salvados en t_des_escrituracion -->

                <input type="hidden" 
                       name="seqProyectosSoluciones"
                       id="seqProyectosSoluciones" 
                       value="<?php echo $this->_tpl_vars['claDesembolso']->seqProyectosSoluciones; ?>
" 

                       />
                <input type="hidden" 
                       name="seqAplicacionSubsidio"
                       id="seqAplicacionSubsidio" 
                       value="<?php echo $this->_tpl_vars['claDesembolso']->seqAplicacionSubsidio; ?>
" 

                       />

                <!-- Fin de la adicion 20JUN2016-->

                </tr>
            </table>
            </p></div><!-- fin div DatosInmueble -->

        <!-- PESTANA DE RECIBO DE DOCUMENTOS -->			
        <div id="rd" style="height:<?php echo $this->_tpl_vars['altura']; ?>
"><p>

                <!-- DOCUMENTOS PARA PERSONA NATURAL O JURIDICA -->
            <table cellpadding=2 cellspacing=0 border=0 width="100%">
                <tr>
                    <td class="tituloTabla" width="280px">Mostrar Documentos</td>
                    <td width="130px">
                        <input  type="radio" 
                                id="persona" 
                                name="documentos" 
                                value="persona"
                                <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> checked <?php endif; ?> 
                                onClick="mostrarDocumentosEscrituracion(this.id, 'listadoDocumentos');"
                                /> Persona Natural
                    </td>
                    <td>
                        <input  type="radio" 
                                id="empresa"
                                name="documentos" 
                                value="empresa"
                                <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos == 'empresa'): ?> checked <?php endif; ?> 
                                onClick="mostrarDocumentosEscrituracion(this.id, 'listadoDocumentos');"
                                /> Persona Jur&iacute;dica
                    </td>
                </tr>
            </table>

            <?php if ($this->_tpl_vars['claFormulario']->seqModalidad != 5): ?>

                <table cellpadding=2 cellspacing=0 border=0 width="100%" id="listadoDocumentos">
                    <tr>
                        <td class="tituloTabla" width="270px">Documento</td>
                        <td class="tituloTabla" width="50px">Folios</td>
                        <td class="tituloTabla">Observaciones</td>
                    </tr>
                    <tr  id="1-ambos">
                        <td>Escritura P&uacute;blica o Promesa de Compraventa</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numEscrituraPublica" 
                                   id="numEscrituraPublica"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numEscrituraPublica; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtEscrituraPublica" 
                                   id="txtEscrituraPublica"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtEscrituraPublica; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="2-ambos">
                        <td>Certificado de tradici&oacute;n y libertad</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCertificadoTradicion" 
                                   id="numCertificadoTradicion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCertificadoTradicion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCertificadoTradicion" 
                                   id="txtCertificadoTradicion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCertificadoTradicion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="3-ambos">
                        <td>Fotocopia Carta de Asignaci&oacute;n</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCartaAsignacion" 
                                   id="numCartaAsignacion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCartaAsignacion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCartaAsignacion" 
                                   id="txtCartaAsignacion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCartaAsignacion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="4-ambos">
                        <td>Certificado de riesgo</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numAltoRiesgo" 
                                   id="numAltoRiesgo"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAltoRiesgo; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtAltoRiesgo" 
                                   id="txtAltoRiesgo"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtAltoRiesgo; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this); this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="5-ambos">
                        <td>Certificado de habitabilidad</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numHabitabilidad" 
                                   id="numHabitabilidad"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numHabitabilidad; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtHabitabilidad" 
                                   id="txtHabitabilidad"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtHabitabilidad; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="6-ambos">
                        <td>Bolet&iacute;n catastral</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numBoletinCatastral" 
                                   id="numBoletinCatastral"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numBoletinCatastral; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtBoletinCatastral" 
                                   id="txtBoletinCatastral"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtBoletinCatastral; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="7-ambos">
                        <td>Licencia construcci&oacute;n inmueble</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numLicenciaConstruccion" 
                                   id="numLicenciaConstruccion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numLicenciaConstruccion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtLicenciaConstruccion" 
                                   id="txtLicenciaConstruccion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtLicenciaConstruccion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="8-ambos">
                        <td>Recibo de &uacute;ltimo pago de impuesto predial</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numUltimoPredial" 
                                   id="numUltimoPredial"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numUltimoPredial; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtUltimoPredial" 
                                   id="txtUltimoPredial"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtUltimoPredial; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="9-ambos">
                        <td>&Uacute;ltimo recibo de acueducto y alcantarillado</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numUltimoReciboAgua" 
                                   id="numUltimoReciboAgua"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numUltimoReciboAgua; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtUltimoReciboAgua" 
                                   id="txtUltimoReciboAgua"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtUltimoReciboAgua; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="10-ambos">
                        <td>&Uacute;ltimo recibo de Energ&iacute;a</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numUltimoReciboEnergia" 
                                   id="numUltimoReciboEnergia"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numUltimoReciboEnergia; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtUltimoReciboEnergia" 
                                   id="txtUltimoReciboEnergia"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtUltimoReciboEnergia; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="11-ambos">
                        <td>Acta de entrega del inmueble</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numActaEntrega" 
                                   id="numActaEntrega"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numActaEntrega; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtActaEntrega" 
                                   id="txtActaEntrega"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtActaEntrega; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="12-ambos">
                        <td>Certificación Bancaria del Vendedor</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCertificacionVendedor" 
                                   id="numCertificacionVendedor"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCertificacionVendedor; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCertificacionVendedor" 
                                   id="txtCertificacionVendedor"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCertificacionVendedor; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this); this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <tr  id="13-ambos">
                        <td>Autorización de desembolso</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numAutorizacionDesembolso" 
                                   id="numAutorizacionDesembolso"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAutorizacionDesembolso; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtAutorizacionDesembolso" 
                                   id="txtAutorizacionDesembolso"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtAutorizacionDesembolso; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr  id="14-ambos">
                        <td>Fotocopia de la cedula del vendedor</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numFotocopiaVendedor" 
                                   id="numFotocopiaVendedor"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numFotocopiaVendedor; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtFotocopiaVendedor" 
                                   id="txtFotocopiaVendedor"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtFotocopiaVendedor; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="15-empresa">
                        <td>Fotocopia RUT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numRut" 
                                   id="numRut"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numRut; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtRut" 
                                   id="txtRut"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtRut; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="16-empresa">
                        <td>Fotocopia RIT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numRit" 
                                   id="numRit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numRit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtRit" 
                                   id="txtRit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtRit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="17-empresa">
                        <td>Fotocopia NIT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numNit" 
                                   id="numNit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numNit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtNit" 
                                   id="txtNit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtNit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr id="18-ambos">
                        <td>Otros documentos</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numOtros" 
                                   id="numOtros"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numOtros; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="3"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtOtro" 
                                   id="txtOtro"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtOtro; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                </table>

            <?php else: ?> <!-- documentos para arrendamiento -->

                <table cellpadding=2 cellspacing=0 border=0 width="100%" id="listadoDocumentos">
                    <tr>
                        <td class="tituloTabla" width="270px">Documento</td>
                        <td class="tituloTabla" width="50px">Folios</td>
                        <td class="tituloTabla">Observaciones</td>
                    </tr>

                    <!-- CONTRATO DE ARRENDAMIENTO -->
                    <tr id="1-ambos">
                        <td>Contrato de Arrendamiento</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numContratoArrendamiento" 
                                   id="numContratoArrendamiento"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numContratoArrendamiento; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtContratoArrendamiento" 
                                   id="txtContratoArrendamiento"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtContratoArrendamiento; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- CERTIFICADO DE APERTURA CUENTA DE AHORRO PROGRAMADO -->
                    <tr id="2-ambos">
                        <td>Certificado Apertura CAP</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numAperturaCAP" 
                                   id="numAperturaCAP"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numAperturaCAP; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtAperturaCAP" 
                                   id="txtAperturaCAP"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtAperturaCAP; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- CEDULA ARRENDADOR -->
                    <tr id=3-ambos">
                        <td>Cédula Arrendador</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCedulaArrendador" 
                                   id="numCedulaArrendador"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCedulaArrendador; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCedulaArrendador" 
                                   id="txtCedulaArrendador"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCedulaArrendador; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="4-empresa">
                        <td>Fotocopia RUT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numRut" 
                                   id="numRut"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numRut; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtRut" 
                                   id="txtRut"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtRut; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="5-empresa">
                        <td>Fotocopia RIT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numRit" 
                                   id="numRit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numRit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtRit" 
                                   id="txtRit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtRit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>
                    <tr <?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'empresa'): ?> style="display:none" <?php endif; ?> id="6-empresa">
                        <td>Fotocopia NIT</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numNit" 
                                   id="numNit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numNit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtNit" 
                                   id="txtNit"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtNit; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- CERTIFICACION CUENTA DEL ARRENDADOR -->
                    <tr id="7-ambos">
                        <td>Certificación Cuenta Arrendador</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCuentaArrendador" 
                                   id="numCuentaArrendador"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCuentaArrendador; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCuentaArrendador" 
                                   id="txtCuentaArrendador"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCuentaArrendador; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- TRES RECIBOS DE SERVICIOS PUBLICOS -->
                    <tr id="8-ambos">
                        <td>Tres Recibos de Servicios Públicos</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numServiciosPublicos" 
                                   id="numServiciosPublicos"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numServiciosPublicos; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtServiciosPublicos" 
                                   id="txtServiciosPublicos"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtServiciosPublicos; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- AUTORIZACION DE RETIRO DE RECURSOS -->
                    <tr id="9-ambos">
                        <td>Autorización de Retiro de Recursos</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numRetiroRecursos" 
                                   id="numRetiroRecursos"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numRetiroRecursos; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtRetiroRecursos" 
                                   id="txtRetiroRecursos"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtRetiroRecursos; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- CERTIFICADO DE TRADICION -->
                    <tr id="10-ambos">
                        <td>Certificado de tradici&oacute;n y libertad vigente</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numCertificadoTradicion" 
                                   id="numCertificadoTradicion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numCertificadoTradicion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtCertificadoTradicion" 
                                   id="txtCertificadoTradicion"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtCertificadoTradicion; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- BOLETIN NOMENCLATURA -->
                    <tr id="11-ambos">
                        <td>Bolet&iacute;n nomenclatura</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numBoletinCatastral" 
                                   id="numBoletinCatastral"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numBoletinCatastral; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtBoletinCatastral" 
                                   id="txtBoletinCatastral"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtBoletinCatastral; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                    <!-- OTROS DOCUMENTOS -->
                    <tr id="12-ambos">
                        <td>Otros documentos</td>
                        <td align="center">
                            <input	type="text" 
                                   name="numOtros" 
                                   id="numOtros"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->numOtros; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: soloNumeros(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:40px"
                                   maxlength="2"
                                   />
                        </td>
                        <td>
                            <input	type="text" 
                                   name="txtOtros" 
                                   id="txtOtros"
                                   value="<?php echo $this->_tpl_vars['claDesembolso']->txtOtro; ?>
"
                                   onFocus="this.style.backgroundColor = '#ADD8E6';" 
                                   onBlur="javascript: sinCaracteresEspeciales(this);
                                                       this.style.backgroundColor = '#FFFFFF';"
                                   style="width:300px"
                                   class="inputLogin"
                                   />
                        </td>
                    </tr>

                </table>

            <?php endif; ?>
            </p></div>

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
            </p></div>	

        <!-- PESTANA ACTOS ADMINISTRATIVOS -->	        
        <div id="aad" style="height:<?php echo $this->_tpl_vars['altura']; ?>
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
<div id="barrioListener"></div>