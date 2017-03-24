<?php /* Smarty version 2.6.26, created on 2017-03-21 09:15:32
         compiled from subsidios/formatoPostulacionImprimir.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'subsidios/formatoPostulacionImprimir.tpl', 59, false),array('modifier', 'ucwords', 'subsidios/formatoPostulacionImprimir.tpl', 59, false),array('modifier', 'number_format', 'subsidios/formatoPostulacionImprimir.tpl', 59, false),array('modifier', 'strtoupper', 'subsidios/formatoPostulacionImprimir.tpl', 123, false),array('modifier', 'upper', 'subsidios/formatoPostulacionImprimir.tpl', 149, false),)), $this); ?>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="Subsidios de Vivienda">
		<meta name="keywords" content="subsidio,vivienda,social,prioritaria,bogota,habitat,asignacion,credito" />
		<meta name="description" content="Sistema de informacion de subsidios de vivienda">
		<meta name="robots" content="index,  nofollow" />
		<title>Formulario de Postulacion</title>
	</head>
	<body onLoad="window.print();">
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="border: 1px solid #999999;">
			<tr>
				<td width="150px" height="90px" align="center" valign="middle"><img src="../../recursos/imagenes/escudo.png"></td>
				<td align="center" valign="middle" style="padding:10px; font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 12px; ">
					<b>ALCALDIA MAYOR DE BOGOTA</b><br>
					SECRETARIA DEL HABITAT<br>
					SUBSIDIO DISTRITAL DE VIVIENDA<br>
					FORMULARIO UNICO DE INSCRIPCION PARA POSTULANTES<hr>
					<span style="font-size: 9px;">Fecha de Radicaci&oacute;n: <?php echo $this->_tpl_vars['fchImpresion']; ?>
</span>
				</td>
				<td width="150px" align="center" valign="middle"><img src="../../recursos/imagenes/bta_positiva_carta.jpg"></td>
			</tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%">
			<tr>
				<td bgcolor="#E4E4E4" style="padding-left:10px; font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
					<b>No.Formulario:</b> <?php echo $this->_tpl_vars['objFormulario']->txtFormulario; ?>

				</td>
			</tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
			<tr><td bgcolor="#CECECE" style="padding-left:10px;" align="center"><b>DATOS DE LOS MIEMBROS DEL HOGAR</b></td></tr>
			<?php $_from = $this->_tpl_vars['objFormulario']->arrCiudadano; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['objCiudadano']):
?>
				
				<?php $this->assign('seqTipoDocumento', $this->_tpl_vars['objCiudadano']->seqTipoDocumento); ?>
				<?php $this->assign('seqParentesco', $this->_tpl_vars['objCiudadano']->seqParentesco); ?>
				<?php $this->assign('seqCondicionEspecial1', $this->_tpl_vars['objCiudadano']->seqCondicionEspecial); ?>
				<?php $this->assign('seqCondicionEspecial2', $this->_tpl_vars['objCiudadano']->seqCondicionEspecial2); ?>
				<?php $this->assign('seqCondicionEspecial3', $this->_tpl_vars['objCiudadano']->seqCondicionEspecial3); ?>
				<?php $this->assign('seqSexo', $this->_tpl_vars['objCiudadano']->seqSexo); ?>
				<?php $this->assign('seqEstadoCivil', $this->_tpl_vars['objCiudadano']->seqEstadoCivil); ?>
				<?php $this->assign('seqOcupacion', $this->_tpl_vars['objCiudadano']->seqOcupacion); ?>
				<?php $this->assign('seqNivelEducativo', $this->_tpl_vars['objCiudadano']->seqNivelEducativo); ?>
				<?php $this->assign('seqEtnia', $this->_tpl_vars['objCiudadano']->seqEtnia); ?>
				<?php $this->assign('seqCajaCompensacion', $this->_tpl_vars['objCiudadano']->seqCajaCompensacion); ?>
				<?php $this->assign('seqSalud', $this->_tpl_vars['objCiudadano']->seqSalud); ?>
				
				<tr>
					<td bgcolor="#E4E4E4">
						<b><?php echo $this->_tpl_vars['objCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtNombre2; ?>
 
						<?php echo $this->_tpl_vars['objCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido2; ?>
</b>
					</td>
				</tr>
				<tr>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 8px; border-bottom: 1px solid #999999;">
							<tr>
								<!--<td><b>Documento de Identidad:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumento']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['objCiudadano']->numDocumento)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>-->
								<td><b>Documento de Identidad:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumento']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
 <?php echo $this->_tpl_vars['objCiudadano']->numDocumento; ?>
</td>
								<td><b>Fecha de Nacimiento:</b> <?php echo $this->_tpl_vars['objCiudadano']->fchNacimiento; ?>
</td>
								<td><b>Parentesco:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrParentesco'][$this->_tpl_vars['seqParentesco']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
							</tr>
							<tr>
								<td><b>Estado Civil:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrEstadoCivil'][$this->_tpl_vars['seqEstadoCivil']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Sexo:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSexo'][$this->_tpl_vars['seqSexo']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>LGTB:</b> <?php if ($this->_tpl_vars['objCiudadano']->bolLgtb == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
							</tr>
							<tr>
								<td><b>Condici&oacute;n Especial 1:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCondicionEspecial'][$this->_tpl_vars['seqCondicionEspecial1']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Condici&oacute;n Especial 2:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCondicionEspecial'][$this->_tpl_vars['seqCondicionEspecial2']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Condici&oacute;n Especial 3:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCondicionEspecial'][$this->_tpl_vars['seqCondicionEspecial3']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
							</tr>
							<tr>
								<td><b>Ocupaci&oacute;n:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrOcupacion'][$this->_tpl_vars['seqOcupacion']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Nivel Educativo:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNivelEducativo'][$this->_tpl_vars['seqNivelEducativo']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Etnia:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrEtnia'][$this->_tpl_vars['seqEtnia']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
							</tr>
							<tr>
								<td><b>Caja de Compensaci&oacute;n</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCajaCompensacion'][$this->_tpl_vars['seqCajaCompensacion']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Salud:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSalud'][$this->_tpl_vars['seqSalud']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
								<td><b>Beneficiario:</b> <?php if ($this->_tpl_vars['objCiudadano']->bolBeneficiario == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
							</tr>
							<tr>
								<td><b>Ingresos:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objCiudadano']->valIngresos)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			
			<?php $this->assign('seqSisben', $this->_tpl_vars['objFormulario']->seqSisben); ?>
			<?php $this->assign('seqBarrio', $this->_tpl_vars['objFormulario']->seqBarrio); ?>
                        <?php $this->assign('seqLocalidad', $this->_tpl_vars['objFormulario']->seqLocalidad); ?>
			<?php $this->assign('seqVivienda', $this->_tpl_vars['objFormulario']->seqVivienda); ?>
			<?php $this->assign('seqModalidad', $this->_tpl_vars['objFormulario']->seqModalidad); ?>
			<?php $this->assign('seqSolucion', $this->_tpl_vars['objFormulario']->seqSolucion); ?>
			<?php $this->assign('seqProyecto', $this->_tpl_vars['objFormulario']->seqProyecto); ?>
			<?php $this->assign('seqBancoCuentaAhorro', $this->_tpl_vars['objFormulario']->seqBancoCuentaAhorro); ?>
			<?php $this->assign('seqBancoCuentaAhorro2', $this->_tpl_vars['objFormulario']->seqBancoCuentaAhorro2); ?>
			<?php $this->assign('seqBancoCredito', $this->_tpl_vars['objFormulario']->seqBancoCredito); ?>
			<?php $this->assign('seqEntidadDonante', $this->_tpl_vars['objFormulario']->seqEmpresaDonante); ?>
			
			<tr>
				<td bgcolor="#E4E4E4">
					<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 8px;">
						<tr>
							<td width="44%"><b>Total Ingresos del Hogar:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valIngresoHogar)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
							<td width="30%"><b>Desplazamiento:</b> <?php if ($this->_tpl_vars['objFormulario']->bolDesplazado == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
							<td><b>Sisben:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSisben'][$this->_tpl_vars['seqSisben']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
			<tr><td bgcolor="#CECECE" colspan="3" style="padding-left:10px;" align="center"><b>DATOS DEL HOGAR</b></td></tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 8px;">
			<tr>
				<td><b>Direcci&oacute;n de Residencia:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtDireccion)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td><b>Barrio:</b> <?php echo $this->_tpl_vars['arrBarrio'][$this->_tpl_vars['seqBarrio']]; ?>
</td>
				<td><b>Localidad:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['arrLocalidad'][$this->_tpl_vars['seqLocalidad']])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
			</tr>
			<tr>
				<td><b>Estado de Vivienda actual:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['arrVivienda'][$this->_tpl_vars['seqVivienda']])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td colspan="2"><b>Valor del Arriendo (Si Aplica):</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valArriendo)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
			</tr>
			<tr>
				<td><b>Correo Elect&oacute;nico:</b> <?php echo $this->_tpl_vars['objFormulario']->txtCorreo; ?>
</td>
				<td><b>Tel&eacute;fonos fijos:</b> <?php echo $this->_tpl_vars['objFormulario']->numTelefono1; ?>
 o <?php echo $this->_tpl_vars['objFormulario']->numTelefono2; ?>
</td>
				<td><b>Tel&eacute;fonos celular:</b> <?php echo $this->_tpl_vars['objFormulario']->numCelular; ?>
</td>
			</tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
			<tr><td bgcolor="#CECECE" colspan="3" style="padding-left:10px;" align="center"><b>MODALIDAD Y LOCALIZACION DE LA SOLUCION A LA QUE SE ASPIRA</b></td></tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 8px;">	
			<tr>
				<td><b>Modalidad:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrModalidad'][$this->_tpl_vars['seqModalidad']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
				<td><b>Soluci&oacute;n</b> <?php echo $this->_tpl_vars['arrSolucion'][$this->_tpl_vars['seqModalidad']][$this->_tpl_vars['seqSolucion']]; ?>
</td>
				<td><b>Valor Subsidio:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valAspiraSubsidio)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
			</tr>
			<?php if ($this->_tpl_vars['objFormulario']->seqModalidad == 5): ?>
				<tr>
					<td><b>Paga Arriendo Desde:</b> <?php if ($this->_tpl_vars['objFormulario']->fchArriendoDesde == "0000-00-00"): ?> No Especifica <?php else: ?> <?php echo $this->_tpl_vars['objFormulario']->fchArriendoDesde; ?>
 <?php endif; ?></td>
					<td><b>Presenta Comprobante Arriendo</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtComprobanteArriendo)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
 </td>
					<td>&nbsp;</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td><b>Direcci&oacute;n de Soluci&oacute;n:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtDireccionSolucion)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<?php if ($this->_tpl_vars['objFormulario']->seqModalidad != 5): ?> <td><b>Matr&iacute;cula Inmobilliaria:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtMatriculaInmobiliaria)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td> <?php else: ?> <td>&nbsp;</td> <?php endif; ?>
				<?php if ($this->_tpl_vars['objFormulario']->seqModalidad != 5): ?> <td><b>CHIP:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtChip)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td> <?php else: ?> <td>&nbsp;</td> <?php endif; ?>
			</tr>
			<?php if ($this->_tpl_vars['objFormulario']->seqModalidad != 5): ?>
				<tr>
					<td><b>Proyecto:</b>
					<?php if (trim ( $this->_tpl_vars['arrProyecto'][$this->_tpl_vars['seqProyecto']] ) != ""): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProyecto'][$this->_tpl_vars['seqProyecto']])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProyectoBp'][$this->_tpl_vars['seqProyecto']])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>

					<?php endif; ?>
					</td>
					<td><b>Conjunto Residencial:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['nombreConjuntoResidencial'])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
					<td><b>Unidad Proyecto:</b> <?php if ($this->_tpl_vars['nombreUnidadProyecto'] != 'NINGUNA'): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['nombreUnidadProyecto'])) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>

												<?php else: ?>
													&nbsp;
												<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td><b>Tiene Promesa de compra-venta firmada:</b> <?php if ($this->_tpl_vars['objFormulario']->bolPromesaFirmada == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
					<td><b>Tiene Idetificada una soluci&oacute;n:</b> <?php if ($this->_tpl_vars['objFormulario']->bolIdentificada == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
					<td><b>Plan de Vivienda Viabilizada:</b> <?php if ($this->_tpl_vars['objFormulario']->bolViabilizada == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
				</tr>
				<tr>
					<td><b>Presupuesto:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valPresupuesto)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
					<td><b>Aval&uacute;o:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valAvaluo)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
					<td><b>Total:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valTotal)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				</tr>
			<?php endif; ?>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
			<tr><td bgcolor="#CECECE" colspan="3" style="padding-left:10px;" align="center"><b>DATOS FINANCIEROS</b></td></tr>
		</table>
		<table cellspacing="0" cellpadding="2" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 8px;">		
			<tr>
				<td><b>Ahorro 1:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCuentaAhorro']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valSaldoCuentaAhorro)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteCuentaAhorro)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td><b>Fecha Apertura:</b> <?php echo $this->_tpl_vars['objFormulario']->fchAperturaCuentaAhorro; ?>
</td>
				<td><b>Valor Inmobilizado:</b> <?php if ($this->_tpl_vars['objFormulario']->bolInmovilizadoCuentaAhorro == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
			</tr>
			<tr>
				<td><b>Ahorro 2:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCuentaAhorro2']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valSaldoCuentaAhorro2)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteCuentaAhorro2)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td><b>Fecha Apertura:</b> <?php echo $this->_tpl_vars['objFormulario']->fchAperturaCuentaAhorro2; ?>
</td>
				<td><b>Valor Inmobilizado:</b> <?php if ($this->_tpl_vars['objFormulario']->bolInmovilizadoCuentaAhorro2 == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
			</tr>
			<tr>
				<td><b>Cr&eacute;dito:</b> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCredito']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valCredito)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteCredito)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td><b>Fecha Vencimiento:</b> <?php echo $this->_tpl_vars['objFormulario']->fchAprobacionCredito; ?>
</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Subsidio Nacional</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valSubsidioNacional)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteSubsidioNacional)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Cesant&iacute;as</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valSaldoCesantias)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteCesantias)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Aporte Lote o Terreno</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valAporteLote)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteAporteLote)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Aporte Avance Obra</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valAporteAvanceObra)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteAvanceObra)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Aporte Materiales</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valAporteMateriales)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteAporteMateriales)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td><b>Donaci&oacute;n: <?php echo $this->_tpl_vars['arrDonantes'][$this->_tpl_vars['seqEntidadDonante']]; ?>
</b></td>
				<td><b>Valor:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valDonacion)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td><b>Soporte:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->txtSoporteDonacion)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>
</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td bgcolor="#E4E4E4"><b>Total Recursos Econ&oacute;micos</b></td>
				<td bgcolor="#E4E4E4" align="right" style="padding-right:17px;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['objFormulario']->valTotalRecursos)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				<td bgcolor="#E4E4E4">&nbsp;</td>
				<td bgcolor="#E4E4E4">&nbsp;</td>
				<td bgcolor="#E4E4E4">&nbsp;</td>
			</tr>
		</table>
		
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
			<tr>
				<td bgcolor="#CECECE" align="center" width="10%"><b>&nbsp;</b></td>
				<td bgcolor="#CECECE" align="center" width="20%"><b>Firma del Hogar</b></td>
				<td bgcolor="#CECECE" align="center" width="20%"><b>Firma del Tutor</b></td>
			</tr>
			<tr><td colspan="4">
				<table cellspacing="3" cellpadding="0" border="1" width="100%" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 9px;">
					<tr>
						<td width="10%" rowspan="2" height="10px" style="border: 1px dotted #000000;">&nbsp;</td>
						<td width="20%" height="50px" style="border: 1px dotted #000000;">&nbsp;</td>
						<td width="20%" height="50px" style="border: 1px dotted #000000;">&nbsp;</td>
					</tr>
					<tr>
						<td width="25%" height="20px" style="border: 1px dotted #999999;"><?php echo $this->_tpl_vars['arrBeneficiario']['nombre']; ?>
<br> C.C.</td>
						<td width="25%" height="20px" style="border: 1px dotted #999999;" valign="top">
							<?php echo $this->_tpl_vars['txtUsuarioSistema']; ?>

						</td>
					</tr>
				</table>
			</td></tr>
			
			<tr><td style="font-size: 7px;" align="justify" colspan="4">
				La Secretaria Distrital del Hábitat asume de parte del hogar postulante que: 
				*Toda informacion suministrada es veridica y es bajo la gravedad del juramento
				*Autoriza para que, por cualquier medio, se verifique la información aquí contenida. 
				El diligenciamiento de este formulario representa la postulacion al sistema de informacion para soluciones de vivienda de la Secretaria
				Distrital del Habitat y no implica el otorgamiento de un subsidio.
				<?php if ($this->_tpl_vars['objFormulario']->seqModalidad == 3 || $this->_tpl_vars['objFormulario']->seqModalidad == 4): ?>
					* Al menos un miembro del Hogar habita actualmente en la vivienda objeto del subsidio.
				<?php endif; ?>
				<!--
				<?php if ($this->_tpl_vars['objFormulario']->seqModalidad == 5): ?>
					* La Suscripcion del presente formulario de postulacion al Subsidio Condicionado de Arrendamiento constituye un compromiso del hogar
					que representa, de ahorrar mensualmente como mínimo el 30% de un Salario Mínimo Mensual Legal Vigente (SMMLV) en una cuenta de ahorro
					autorizada por la Secretaria Distrital de Hábitat, durante el término de aplicación del Subsidio Condicionado de Arrendamiento, 
					en caso de ser asignado.
				<?php endif; ?> -->
			</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td style="font-size: 7px;" align="justify" colspan="4">
			Si en el proceso de postulación el hogar resulta incluido en una resolución de 
			Inhabilidad, la continuidad en el proyecto y la unidad habitacional para el cual se postuló 
			dependerá de la disponibilidad de cupos al momento de expedición del Acto Administrativo 
			por el cual se revoca la causa que dio origen a la inhabilidad. 
			En caso de no disponibilidad de cupos, el hogar podrá ser convocado a un nuevo proyecto de 
			acuerdo con el proceso de selección según la calificación de vulnerabilidad.
			</td></tr>
			
		</table>
		
		
	</body>
	</html>