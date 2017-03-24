<?php /* Smarty version 2.6.26, created on 2017-03-23 10:58:20
         compiled from desembolso/formatoRevisionJuridica.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'desembolso/formatoRevisionJuridica.tpl', 33, false),)), $this); ?>
<?php $this->assign('tipoDocCiudadano', $this->_tpl_vars['claCiudadano']->seqTipoDocumento); ?>
<?php $this->assign('tipoDocVendedor', $this->_tpl_vars['claDesembolso']->seqTipoDocumento); ?>
<?php $this->assign('txtCompraVivienda', $this->_tpl_vars['claDesembolso']->txtCompraVivienda); ?>
<?php $this->assign('txtPropiedad', $this->_tpl_vars['claDesembolso']->txtPropiedad); ?>

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
		
		<!-- TITULO DE LA CARTA DE IMPRESION -->
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="border: 1px solid #999999;">
			<tr>
				<td width="150px" height="80px" align="center" valign="middle">
               <?php if (in_array ( 31 , $_SESSION['arrGrupos']['3'] ) || in_array ( 32 , $_SESSION['arrGrupos']['3'] ) || in_array ( 33 , $_SESSION['arrGrupos']['3'] )): ?>
                  <img src="../../recursos/imagenes/cvp.png">
               <?php else: ?>
                  <img src="../../recursos/imagenes/escudo.png">
               <?php endif; ?>
            </td>
				<td align="center" valign="middle" style="padding:20px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
">
					<b>Subsidio Distrital de Vivienda</b><br>
					<b>Revisión de oferta para adquisición de vivienda</b><br>
					<span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
						Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['txtFecha']; ?>
<br>
						No. Registro: <?php echo ((is_array($_tmp=$this->_tpl_vars['numRegistro'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

					</span>
				</td>
				<td width="150px" align="center" valign="middle">
					<img src="../../recursos/imagenes/bta_positiva_carta.jpg">
				</td>
			</tr>
		</table>
		
		<!-- IDENTIFICACION DE LAS PARTES -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="3" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Identificación de las partes</b></td></tr>
			<tr>
				<td><b>Promitente Comprador</b></td>
				<td><?php echo $this->_tpl_vars['claCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtNombre2; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtApellido2; ?>
</td>
				<td><?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocCiudadano']]; ?>
 <!--<?php echo ((is_array($_tmp=$this->_tpl_vars['claCiudadano']->numDocumento)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
--><?php echo $this->_tpl_vars['claCiudadano']->numDocumento; ?>
</td>
			</tr>
			<tr>
				<td><b>Promitente Vendedor</b></td>
				<td><?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>
</td>
				<td><?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
			</tr>
			<tr>
				<td colspan="2"><b>Resolución de Asignación del Subsidio Distrital De Vivienda</b></td>
				<td><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion']; ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['fchResolucion']; ?>
</td>
			</tr>
		</table>
		
		<!-- IDENTIFICACION DEL INMUEBLE -->
		<table cellspacing="0" cellpadding="3" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Identificación del Inmueble</b></td></tr>
			<tr>
				<td><b>Dirección</b></td>
				<td colspan="5"><?php echo $this->_tpl_vars['claDesembolso']->txtDireccionInmueble; ?>
</td>
			</tr>
			<tr>
				<td><b>Folio de Matrícula</b></td>
				<td><?php echo $this->_tpl_vars['claDesembolso']->txtMatriculaInmobiliaria; ?>
</td>
				<td><b>Cédula Catastral</b></td>
				<td><?php echo $this->_tpl_vars['claDesembolso']->txtCedulaCatastral; ?>
</td>
				<td><b>CHIP</b></td>
				<td><?php echo $this->_tpl_vars['claDesembolso']->txtChip; ?>
</td>
			</tr>
			<tr>
				<td><b>Área del Lote (m<sup>2</sup>)</b></td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numAreaLote)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
				<td><b>Área Construida (m<sup>2</sup>)</b></td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numAreaConstruida)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		
		<!-- ANOTACION -->
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;border-top: 1px dotted #999999;">
				<?php if ($this->_tpl_vars['txtPropiedad'] != ""): ?>
					La descripción de cabida y linderos reposan en la 
					<?php if ($this->_tpl_vars['txtPropiedad'] == 'escritura'): ?>
						escritura pública <?php echo $this->_tpl_vars['claDesembolso']->txtEscritura; ?>
 del <?php echo $this->_tpl_vars['claDesembolso']->fchEscritura; ?>
, elevada ante la Notaria <?php echo $this->_tpl_vars['claDesembolso']->numNotaria; ?>
 del Circulo de  <?php echo $this->_tpl_vars['claDesembolso']->txtCiudad; ?>
.
					<?php elseif ($this->_tpl_vars['txtPropiedad'] == 'sentencia'): ?>
						sentencia de fecha <?php echo $this->_tpl_vars['claDesembolso']->fchSentencia; ?>
 proferida por el juzgado civil # <?php echo $this->_tpl_vars['claDesembolso']->numJuzgado; ?>
 del circuito de <?php echo $this->_tpl_vars['claDesembolso']->txtCiudadSentencia; ?>

					<?php elseif ($this->_tpl_vars['txtPropiedad'] == 'resolucion'): ?>
						resolución # <?php echo $this->_tpl_vars['claDesembolso']->numResolucion; ?>
 de fecha <?php echo $this->_tpl_vars['claDesembolso']->fchResolucion; ?>
 emitida por <?php echo $this->_tpl_vars['claDesembolso']->txtEntidad; ?>
 de la ciudad <?php echo $this->_tpl_vars['claDesembolso']->txtCiudadResolucion; ?>

					<?php endif; ?>
				<?php endif; ?>
				
				
			</td></tr>
		</table>
		
		<!-- OBSERVACIONES -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Observaciones</b></td></tr>
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;">
				<?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtObservaciones']; ?>

			</td></tr>
		</table>
		
		<!-- LIBERTAD -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Libertad</b></td></tr>
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;">
				<?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtLibertad']; ?>

			</td></tr>
		</table>
		
		<!-- DOCUMENTOS ANALIZADOS -->
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Documentos Analizados</b></td></tr>
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;">
				<ol>
					<?php $_from = $this->_tpl_vars['claDesembolso']->arrJuridico['documento']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txtDocumento']):
?>
						<li><?php echo $this->_tpl_vars['txtDocumento']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>
				</ol>
			</td></tr>
		</table>
		
		<!-- RECOMENDACIONES -->
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Recomendaciones</b></td></tr>
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;">
				<ol>
					<?php $_from = $this->_tpl_vars['claDesembolso']->arrJuridico['recomendacion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recomendaciones'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recomendaciones']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtRecomendacion']):
        $this->_foreach['recomendaciones']['iteration']++;
?>
						<li><?php echo $this->_tpl_vars['txtRecomendacion']; ?>
</li>
					<?php endforeach; endif; unset($_from); ?>
					
					<?php if ($this->_tpl_vars['claFormulario']->seqModalidad == 1 || $this->_tpl_vars['claFormulario']->seqModalidad == 6 || $this->_tpl_vars['claFormulario']->seqModalidad == 11): ?>
                  <li>EL PRECIO DE COMPRA NO DEBE SUPERAR LOS 70 SMMLV.</li>
                  <li>SI HAY VIABILIDAD TÉCNICA, PARA LA POSULACI&Oacute;N, SE FIRMAR&Aacute; LA PROMESA DE COMPRA VENTA QUE ENTREGAR&Aacute; EL TUTOR ASIGNADO.</li>
                  <li>EN LA ESCRITURA PÚBLICA DEBERÁ IR PROTOCOLIZADA LA CARTA DE ASIGNACIÓN DEL SUBSIDIO DISTRITAL DE VIVIENDA.</li>
                  <li>ANTES DE LA FIRMA DE LA ESCRITURA PÚBLICA EL HOGAR BENEFICIARIO DEBERÁ ALLEGAR EL BORRADOR DE LA MINUTA PARA SU REVISIÓN Y APROBACIÓN.</li>
                  <li>AL MOMENTO DE FIRMAR ESCRITURA PÚBLICA EL VENDEDOR DEBERÁ ESTAR A PAZ Y SALVO CON EL IMPUESTO PREDIAL DE LOS ÚLTIMOS CINCO AÑOS, CUANDO APLIQUE.</li>
                  <li>AL MOMENTO DE FIRMAR ESCRITURAS PÚBLICAS EL VENDEDOR DEBERÁ ESTAR A PAZ Y SALVO CON LOS SERVICIOS PÚBLICOS BÁSICOS Y NO DEBERÁ TENER CRÉDITOS A SU CARGO EN CODENSA Y ACUEDUCTO, CUANDO APLIQUE.</li>
                  <li>VERIFICAR QUE LOS NOMBRES, CEDULAS Y TIPO DE VIVIENDA DEL HOGAR BENEFICIARIO DEL SDV ESTÉN ESCRITOS EN FORMA CORRECTA.</li>
                  <li>ACTUALIZAR EL NOMBRE DEL TITULAR EN LOS RECIBOS DE AGUA Y LUZ, CUANDO APLIQUE.</li>
					<?php endif; ?>
				</ol>
			</td></tr>
		</table>
		
		<!-- COMENTARIOS -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
			<tr><td colspan="7" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="#E4E4E4"><b>Concepto</b></td></tr>
			<tr><td align="justify" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;">
				<?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtConcepto']; ?>

			</td></tr>
		</table>
		
		<!-- FIRMA DE LA CARTA -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="border-top: 1px solid #999999; <?php echo $this->_tpl_vars['txtFuente12']; ?>
">
			<tr><td style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
">Cordialmente</td></tr>
			<tr><td height="50px">&nbsp;</td></tr>
			<tr><td style="padding-left:20px;">
				<b><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['txtAprobo']; ?>
</b><br>
                <?php if (in_array ( 31 , $_SESSION['arrGrupos']['3'] ) || in_array ( 32 , $_SESSION['arrGrupos']['3'] ) || in_array ( 33 , $_SESSION['arrGrupos']['3'] )): ?>
                    <span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">Caja de Vivienda Popular<br><br>
                <?php else: ?>
                    <span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">Subdirección de Recursos Públicos<br><br>
                <?php endif; ?>            
				Preparó: <?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>
</span>
			</td></tr>
			<tr>
				<td style="padding-left:20px;"><br /><span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">El estudio jurídico responde por la regularidad formal de los documentos examinados, mas no por la veracidad de su contenido.</span>
			</td></tr>
		</table>
	</body>
</html>
