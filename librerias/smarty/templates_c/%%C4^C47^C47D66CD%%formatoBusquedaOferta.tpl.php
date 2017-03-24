<?php /* Smarty version 2.6.26, created on 2017-03-21 11:42:43
         compiled from desembolso/formatoBusquedaOferta.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'desembolso/formatoBusquedaOferta.tpl', 43, false),array('modifier', 'ucwords', 'desembolso/formatoBusquedaOferta.tpl', 106, false),array('modifier', 'strtoupper', 'desembolso/formatoBusquedaOferta.tpl', 112, false),array('modifier', 'upper', 'desembolso/formatoBusquedaOferta.tpl', 132, false),array('function', 'cycle', 'desembolso/formatoBusquedaOferta.tpl', 165, false),)), $this); ?>
<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>		
<?php $this->assign('seqLocalidad', $this->_tpl_vars['claFormulario']->seqLocalidad); ?>
<?php $this->assign('seqLocalidadDesembolso', $this->_tpl_vars['claDesembolso']->seqLocalidad); ?>
<?php $this->assign('seqBancoAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
<?php $this->assign('seqBancoAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
<?php $this->assign('seqEstadoProceso', $this->_tpl_vars['claFormulario']->seqEstadoProceso); ?>

<?php $this->assign('seqBancoCuentaAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
<?php $this->assign('seqBancoCuentaAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
<?php $this->assign('seqEntidadDonante', $this->_tpl_vars['claFormulario']->seqEmpresaDonante); ?>

<?php $this->assign('tipoDocVendedor', $this->_tpl_vars['claDesembolso']->seqTipoDocumento); ?>

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
                        <table cellspacing="0" cellpadding="0" border="0" width="750px" style="border: 1px solid #999999;">
                            <tr>
                                <td width="150px" height="80px" align="center" valign="middle">
                                    <?php if (in_array ( 31 , $_SESSION['arrGrupos']['3'] ) || in_array ( 32 , $_SESSION['arrGrupos']['3'] ) || in_array ( 33 , $_SESSION['arrGrupos']['3'] )): ?>
                                        <img src="../../recursos/imagenes/cvp.png">
                                        <?php else: ?>
                                            <img src="../../recursos/imagenes/escudo.png">
                                            <?php endif; ?>
                                            </td>
                                            <?php if ($this->_tpl_vars['seqCasaMano'] == 0): ?>
                                                <td align="center" valign="middle" style="<?php echo $this->_tpl_vars['txtFuente12']; ?>
 padding:10px;">
                                                    <b>Subsidio Distrital de Vivienda</b><br>
                                                        <b>Proceso de Desembolso. Recibo de Documentación</b><br>
                                                            <span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['txtFecha']; ?>
<br>
                                                                    No. Registro: <?php echo ((is_array($_tmp=$this->_tpl_vars['numRegistro'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

                                                            </span>
                                                            </td>
                                                        <?php else: ?>
                                                            <td align="center" valign="middle" style="<?php echo $this->_tpl_vars['txtFuente12']; ?>
 padding:10px;">
                                                                <b>Subsidio Distrital de Vivienda</b><br>
                                                                    <b>Esquema de Inscripci&oacute;n Casa en Mano.<br>Recibo de Documentación</b><br>
                                                                        <span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                            Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['txtFecha']; ?>
<br>
                                                                                No. Registro: <?php echo ((is_array($_tmp=$this->_tpl_vars['numRegistro'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

                                                                        </span>
                                                                        </td>
                                                                    <?php endif; ?>
                                                                    <td width="150px" align="center" valign="middle"><img src="../../recursos/imagenes/bta_positiva_carta.jpg"></td>
                                                                    </tr>
                                                                    </table>
                                                                    <table cellspacing="0" cellpadding="2" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Nombre del Beneficiario</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['nombre']; ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Documento</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['tipoDocumento']; ?>
 <?php echo $this->_tpl_vars['arrBeneficiario']['documento']; ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Modalidad</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['modalidad']; ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Valor del Subsidio</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['valor']; ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <?php if ($this->_tpl_vars['seqCasaMano'] == 0): ?>
                                                                            <tr>
                                                                                <td style="border-bottom: 1px dotted #999999;"><b>Resoluci&oacute;n de Asignaci&oacute;n</b></td>
                                                                                <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['resolucion']; ?>
&nbsp;</td>
                                                                                <td style="border-bottom: 1px dotted #999999;">&nbsp;</td>
                                                                                <td style="border-bottom: 1px dotted #999999;">&nbsp;</td>
                                                                            </tr>
                                                                        <?php endif; ?>   
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Direcci&oacute;n</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" colspan="3"><?php echo $this->_tpl_vars['arrBeneficiario']['direccion']; ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Localidad</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['localidad']; ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Barrio</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['barrio']; ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Tel&eacute;fonos</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" colspan="3">
                                                                                <?php echo $this->_tpl_vars['arrBeneficiario']['telefono1']; ?>
&nbsp;&nbsp;&nbsp;
                                                                                <?php echo $this->_tpl_vars['arrBeneficiario']['telefono2']; ?>
&nbsp;&nbsp;&nbsp;
                                                                                <?php echo $this->_tpl_vars['arrBeneficiario']['celular']; ?>
&nbsp;
                                                                            </td>
                                                                        </tr>
                                                                    </table>

                                                                    <table cellspacing="0" cellpadding="2" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                        <tr>
                                                                            <td bgcolor="#CECECE" align="center" colspan="4"><b>DATOS DEL INMUEBLE</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;" width="140px"><b>Nombre del Vendedor</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtNombreVendedor)) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;" width="120px"><b>Documento</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" width="200px"><?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Direcci&oacute;n del inmueble</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtDireccionInmueble)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
&nbsp;</td>
                                                                            <?php if ($this->_tpl_vars['nombreComercial'] != ''): ?>
                                                                                <td style="border-bottom: 1px dotted #999999;"><b>Proyecto</b></td>
                                                                                <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['nombreComercial']; ?>
</td>

                                                                            <?php endif; ?>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Localidad</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrLocalidad'][$this->_tpl_vars['seqLocalidadDesembolso']]; ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Barrio</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['claDesembolso']->txtBarrio; ?>
&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;" width="130px"><b>Título de Propiedad</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" colspan="3">
                                                                                <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'escritura'): ?>
                                                                                    Escritura Pública Número <?php echo $this->_tpl_vars['claDesembolso']->txtEscritura; ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->fchEscritura; ?>
 registrada en la notaria <?php echo $this->_tpl_vars['claDesembolso']->numNotaria; ?>
&nbsp; de <?php echo $this->_tpl_vars['claDesembolso']->txtCiudad; ?>
 
                                                                                <?php endif; ?>
                                                                                <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'sentencia'): ?>
                                                                                    Sentencia con fecha de <?php echo $this->_tpl_vars['claDesembolso']->fchSentencia; ?>
 del juzgado <?php echo $this->_tpl_vars['claDesembolso']->numJuzgado; ?>
 en la ciudad de <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtCiudadSentencia)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                                                                <?php endif; ?>
                                                                                <?php if ($this->_tpl_vars['claDesembolso']->txtPropiedad == 'resolucion'): ?>
                                                                                    Resolución número <?php echo $this->_tpl_vars['claDesembolso']->numResolucion; ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->fchResolucion; ?>
 expedido por <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtEntidad)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
 en la ciudad de <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtCiudadResolucion)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

                                                                                <?php endif; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;" width="130px"><b>Matr&iacute;cula Inmobili&aacute;ria</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtMatriculaInmobiliaria)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
&nbsp;</td>	
                                                                            <td style="border-bottom: 1px dotted #999999;" width="130px"><b>Chip</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->txtChip)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
&nbsp;</td>			
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Aval&uacute;o</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numAvaluo)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
&nbsp;</td>
                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Valor de la venta</b></td>
                                                                            <td style="border-bottom: 1px dotted #999999;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numValorInmueble)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
&nbsp;</td>
                                                                        </tr>
                                                                    </table>

                                                                    <table cellspacing="0" cellpadding="2" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                        <tr>
                                                                            <td bgcolor="#CECECE" align="center" colspan="3"><b>DOCUMENTOS RADICADOS</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border-bottom: 1px solid #999999;" align="center"><b>DOCUMENTO</b></td>
                                                                            <td style="border-bottom: 1px solid #999999;" align="center"><b>FOLIOS</b></td>
                                                                            <td style="border-bottom: 1px solid #999999;" align="center"><b>OBSERVACIONES</b></td>
                                                                        </tr>

                                                                        <?php if ($this->_tpl_vars['claFormulario']->seqModalidad != 5): ?>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Escritura p&uacute;blica de adquisici&oacute;n de la vivienda o Promesa de Compraventa</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numEscrituraPublica; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtEscrituraPublica; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificado de tradici&oacute;n y libertad vigente</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCertificadoTradicion; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCertificadoTradicion; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Fotocopia de la carta de asignacion del SDV</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCartaAsignacion; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCartaAsignacion; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificado de alto riesgo</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numAltoRiesgo; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtAltoRiesgo; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificado de habitabilidad</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numHabitabilidad; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtHabitabilidad; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Bolet&iacute;n catastral</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numBoletinCatastral; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtBoletinCatastral; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Licencia de contrucci&oacute;n del inmueble</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numLicenciaConstruccion; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtLicenciaConstruccion; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Recibo de pago del &uacute;ltimo impuesto predial</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numUltimoPredial; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtUltimoPredial; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>&Uacute;ltimo recibo de acueducto y alcantarillado</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numUltimoReciboAgua; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtUltimoReciboAgua; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>&Uacute;ltimo recibo de energ&iacute;a</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numUltimoReciboEnergia; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtUltimoReciboEnergia; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Acta de Entrega del Inmueble</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numActaEntrega; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtActaEntrega; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr  bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificación bancaria del vendedor</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCertificacionVendedor; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCertificacionVendedor; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Autorización de desembolso</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numAutorizacionDesembolso; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtAutorizacionDesembolso; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Fotocopia Cedula Vendedor</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numFotocopiaVendedor; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtFotocopiaVendedor; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>RUT (Persona Jurídica)</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numRut; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtRut; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>RIT (Persona Jurídica)</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numRit; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtRit; ?>
&nbsp;</td>
                                                                            </tr>
                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>NIT (Persona Jurídica)</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numNit; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtNit; ?>
&nbsp;</td>
                                                                            </tr>

                                                                        <?php else: ?>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Contrato de Arrendamiento</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numContratoArrendamiento; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtContratoArrendamiento; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificado de apertura CAP</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numAperturaCAP; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtAperturaCAP; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Cédula del Arrendador</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCedulaArrendador; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCedulaArrendador; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificación Cuenta Arrendador</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCuentaArrendador; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCuentaArrendador; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Tres Recibos de Servicios Públicos</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numServiciosPublicos; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtServiciosPublicos; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Autorización de Retiro de Recursos</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numRetiroRecursos; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtRetiroRecursos; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Certificado de tradici&oacute;n y libertad vigente</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numCertificadoTradicion; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtCertificadoTradicion; ?>
&nbsp;</td>
                                                                            </tr>

                                                                            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                                <td width="260px"><b>Bolet&iacute;n nomenclatura</b></td>
                                                                                <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numBoletinCatastral; ?>
&nbsp;</td>
                                                                                <td><?php echo $this->_tpl_vars['claDesembolso']->txtBoletinCatastral; ?>
&nbsp;</td>
                                                                            </tr>

                                                                        <?php endif; ?>

                                                                        <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => "#EAEAEA,#FFFFFF"), $this);?>
">
                                                                            <td width="260px"><b>Otros Documentos</b></td>
                                                                            <td width="60px" align="center"><?php echo $this->_tpl_vars['claDesembolso']->numOtros; ?>
&nbsp;</td>
                                                                            <td><?php echo $this->_tpl_vars['claDesembolso']->txtOtro; ?>
&nbsp;</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td bgcolor="#E4E4E4" align="center">TOTAL FOLIOS RADICADOS</td>
                                                                            <td bgcolor="#E4E4E4" align="center"><?php echo $this->_tpl_vars['numTotalFolios']; ?>
&nbsp;</td>
                                                                            <td bgcolor="#E4E4E4" align="center">&nbsp;</td>
                                                                        </tr>

                                                                    </table>
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                        <tr>
                                                                            <td bgcolor="#CECECE" align="center" width="25%"><b>RADICADO POR</b></td>
                                                                            <td bgcolor="#CECECE" align="center" width="25%"><b>RECIBIDO POR</b></td>
                                                                        </tr>
                                                                        <tr><td colspan="4">
                                                                                <table cellspacing="3" cellpadding="0" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                                    <tr>
                                                                                        <td width="50%" height="40px" style="border: 1px dotted #000000;">&nbsp;</td>
                                                                                        <td width="50%" height="40px" style="border: 1px dotted #000000;">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td  width="50%" height="20px" style="border: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['nombre']; ?>
<br> C.C.</td>
                                                                                        <td  width="50%" height="20px" style="border: 1px dotted #999999;" valign="top">
                                                                                            <?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>

                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td></tr>
                                                                        <tr><td colspan="4" style="border-bottom: 2px dashed black;">&nbsp;</td></tr>
                                                                        <tr><td colspan="4">&nbsp;</td></tr>
                                                                    </table>
                                                                    <table cellspacing="0" cellpadding="0" border="0" width="750px" style="border: 1px solid #999999;">
                                                                        <tr>
                                                                            <td width="150px" height="80px" align="center" valign="middle">
                                                                                <?php if (in_array ( 31 , $_SESSION['arrGrupos']['3'] ) || in_array ( 32 , $_SESSION['arrGrupos']['3'] ) || in_array ( 33 , $_SESSION['arrGrupos']['3'] )): ?>
                                                                                    <img src="../../recursos/imagenes/cvp.png">
                                                                                    <?php else: ?>
                                                                                        <img src="../../recursos/imagenes/escudo.png">
                                                                                        <?php endif; ?>

                                                                                        </td>
                                                                                        <td align="center" valign="middle" style="padding:10px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
">
                                                                                            <b>Subsidio Distrital de Vivienda</b><br>
                                                                                                <b>Proceso de Desembolso. Recibo de Documentación</b><br>
                                                                                                    <span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['txtFecha']; ?>
</span>
                                                                                                    </td>
                                                                                                    <td width="150px" align="center" valign="middle"><img src="../../recursos/imagenes/bta_positiva_carta.jpg"></td>
                                                                                                    </tr>
                                                                                                    </table>
                                                                                                    <table cellspacing="0" cellpadding="2" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                                                        <tr>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Nombre del Beneficiario</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['nombre']; ?>
&nbsp;</td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Documento</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['tipoDocumento']; ?>
 <?php echo $this->_tpl_vars['arrBeneficiario']['documento']; ?>
&nbsp;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td style="border-bottom: 1px dotted #999999;" width="140px"><b>Nombre del Vendedor</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>
&nbsp;</td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;" width="90px"><b>Documento</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;" width="200px"><?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
&nbsp;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Direcci&oacute;n del inmueble</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;" colspan="3"><?php echo $this->_tpl_vars['claDesembolso']->txtDireccionInmueble; ?>
&nbsp;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Localidad</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrLocalidad'][$this->_tpl_vars['seqLocalidadDesembolso']]; ?>
&nbsp;</td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><b>Barrio</b></td>
                                                                                                            <td style="border-bottom: 1px dotted #999999;"><?php echo $this->_tpl_vars['claDesembolso']->txtBarrio; ?>
&nbsp;</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                    <table cellspacing="0" cellpadding="0" border="0" width="750px" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                                                        <tr>
                                                                                                            <td bgcolor="#CECECE" align="center" width="25%"><b>RADICADO POR</b></td>
                                                                                                            <td bgcolor="#CECECE" align="center" width="25%"><b>RECIBIDO POR</b></td>
                                                                                                        </tr>
                                                                                                        <tr><td colspan="4">
                                                                                                                <table cellspacing="3" cellpadding="0" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
                                                                                                                    <tr>
                                                                                                                        <td  width="25%" height="40px" style="border: 1px dotted #000000;">&nbsp;</td>
                                                                                                                        <td  width="25%" height="40px" style="border: 1px dotted #000000;">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td  width="25%" height="20px" style="border: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['nombre']; ?>
<br> C.C.</td>
                                                                                                                        <td  width="25%" height="20px" style="border: 1px dotted #999999;" valign="top">
                                                                                                                            <?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>

                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td></tr>
                                                                                                    </table>
                                                                                                    </body>
                                                                                                    </html>