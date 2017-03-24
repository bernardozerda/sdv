<?php /* Smarty version 2.6.26, created on 2017-03-24 09:21:40
         compiled from desembolso/formatoSolicitudDesembolso.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'desembolso/formatoSolicitudDesembolso.tpl', 42, false),array('modifier', 'date_format', 'desembolso/formatoSolicitudDesembolso.tpl', 103, false),array('modifier', 'ucwords', 'desembolso/formatoSolicitudDesembolso.tpl', 203, false),array('modifier', 'trim', 'desembolso/formatoSolicitudDesembolso.tpl', 366, false),array('function', 'cycle', 'desembolso/formatoSolicitudDesembolso.tpl', 69, false),array('function', 'math', 'desembolso/formatoSolicitudDesembolso.tpl', 217, false),)), $this); ?>
<?php $this->assign('tipoDocCiudadano', $this->_tpl_vars['claCiudadano']->seqTipoDocumento); ?>
<?php $this->assign('tipoDocVendedor', $this->_tpl_vars['claDesembolso']->arrEscrituracion['seqTipoDocumento']); ?>
<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
<?php $this->assign('seqProyecto', $this->_tpl_vars['claFormulario']->seqProyecto); ?>
<?php $this->assign('seqLocalidad', $this->_tpl_vars['claDesembolso']->seqLocalidad); ?>
<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>
<?php $this->assign('seqBancoGiro', $this->_tpl_vars['arrSolicitud']['seqBancoGiro']); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8;" />
		<meta name="title" content="Subsidios de Vivienda">
		<meta name="keywords" content="subsidio,vivienda,social,prioritaria,bogota,habitat,asignacion,credito" />
		<meta name="description" content="Sistema de informacion de subsidios de vivienda">
		<meta http-equiv="Content-Language" content="es">
		<meta name="robots" content="index,  nofollow" />
		<title>SDV - SDHT</title>
		
<?php echo '		
<style type="text/css">
	p.salto {
		page-break-after: always;
	}
</style>
'; ?>

		
	</head>
	<body> <!-- onLoad="window.print();" -->
		
		<!-- TITULO DE LA CARTA DE IMPRESION -->
		<table cellspacing="0" cellpadding="0" border="0" width="100%" style="border: 1px solid #999999;">
			<tr>
				<td width="150px" height="80px" align="center" valign="middle"><img src="../../recursos/imagenes/escudo.png"></td>
				<td align="center" valign="middle" style="padding:20px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
">
					<b>Subsidio Distrital de Vivienda</b><br>
					<b>Solicitud de Desembolso</b><br>
					<b>Modalidad de <?php echo $this->_tpl_vars['arrModalidad'][$this->_tpl_vars['seqModalidad']]; ?>
</b>
					<hr>
					<div style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
; text-align:left; width:100%">
						<b>Fecha:</b> <?php echo $this->_tpl_vars['txtFecha']; ?>
<br>
						<b>Consecutivo:</b> <?php echo $this->_tpl_vars['arrSolicitud']['txtConsecutivo']; ?>
<br>
						<b>No. Registro:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['numRegistro'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

					</div>
				</td>
				<td width="150px" align="center" valign="middle">
					<img src="../../recursos/imagenes/bta_positiva_carta.jpg">
				</td>
			</tr>
			
			<!-- BENEFICIARIO DEL SUBSIDIO -->
			<table cellspacing="0" cellpadding="1" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
				<tr><td colspan="2" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" ><b>Beneficiario del Subsidio</b></td></tr>
				<tr>
					<td width="230px"><b>Nombre del Beneficiario:</b></td>
					<td><?php echo $this->_tpl_vars['claCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtNombre2; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->txtApellido2; ?>
 </td>
				</tr>
				<tr>
					<td><b>Documento del Beneficiario:</b></td>
					<td><?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocCiudadano']]; ?>
 <?php echo $this->_tpl_vars['claCiudadano']->numDocumento; ?>
</td>
				</tr>
				<tr>
					<td><b>Fecha de Resolución:</b></td>
					<td><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['fchResolucionTexto']; ?>
</td>
				</tr>
				<tr>
					<td><b>Número de Resolución:</b></td>
					<td><?php echo $this->_tpl_vars['claDesembolso']->arrJuridico['numResolucion']; ?>
</td>
				</tr>
            <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'c1','values' => '#FFFFFF,#F0F0F0'), $this);?>
">
               <td><b>Valor de la Resolución:</b></td>
               <td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrJuridico['valResolucion'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
            </tr>
            <tr>
					<td><b>Proyecto de Inversión:</b></td>
					<td>
						<?php if ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 488): ?>
                            <?php echo $this->_tpl_vars['arrNombreProyectos']['488']; ?>

                            <?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 801): ?>
                                <?php echo $this->_tpl_vars['arrNombreProyectos']['801']; ?>

								<?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 435): ?>
                                <?php echo $this->_tpl_vars['arrNombreProyectos']['435']; ?>

						<?php else: ?>
							<?php echo $this->_tpl_vars['arrNombreProyectos']['644']; ?>

						<?php endif; ?>       
					</td>
				</tr>
				<tr>
					<td><b>Número del Proyecto:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['numProyectoInversion']; ?>
</td>
				</tr>
            <tr>
					<td valign="top"><b>Registro Presupuestal:</b></td>
					<td>
						<?php echo $this->_tpl_vars['arrSolicitud']['numRegistroPresupuestal1']; ?>
 de <?php echo $this->_tpl_vars['arrSolicitud']['fchRegistroPresupuestal1Texto']; ?>
<br>
						<?php if ($this->_tpl_vars['arrSolicitud']['numRegistroPresupuestal2'] != 0): ?>
							<?php echo $this->_tpl_vars['arrSolicitud']['numRegistroPresupuestal2']; ?>
 de <?php echo $this->_tpl_vars['arrSolicitud']['fchRegistroPresupuestal2Texto']; ?>

						<?php endif; ?>
					</td>
				</tr>
            <?php if (! empty ( $this->_tpl_vars['arrResolucionIndexacion'] ) && $this->_tpl_vars['arrResolucionModificacion']['numero'] != 167 && $this->_tpl_vars['arrResolucionModificacion']['fecha'] != 2014 -04 -09): ?>
               <tr>
                  <td><b>Fecha de Resolución de Indexación:</b></td>
                  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrResolucionIndexacion']['fecha'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d de %B del %Y") : smarty_modifier_date_format($_tmp, "%d de %B del %Y")); ?>
</td>
               </tr>
               <tr>
                  <td><b>Número de Resolución de Indexación:</b></td>
                  <td><?php echo $this->_tpl_vars['arrResolucionIndexacion']['numero']; ?>
</td>
               </tr>
               <tr>
                  <td><b>Valor de la Resolución de Indexación:</b></td>
                  <td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['arrResolucionIndexacion']['valor'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</td>
               </tr>
               <tr>
                  <td><b>Proyecto de Inversión Indexación:</b></td>
                  <?php if ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 488): ?>
                  <td><?php echo $this->_tpl_vars['arrNombreProyectos']['488']; ?>
</td>
                            <?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 801): ?>
                     <td><?php echo $this->_tpl_vars['arrNombreProyectos']['801']; ?>
</td>
					 <?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 435): ?>
                               <td> <?php echo $this->_tpl_vars['arrNombreProyectos']['435']; ?>
</td>
						<?php else: ?>
                           <td><?php echo $this->_tpl_vars['arrNombreProyectos']['644']; ?>
</td>
						<?php endif; ?>      
               </tr>
               <tr>
                  <td><b>Número del Proyecto Indexación:</b></td>
                  <?php if ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 488): ?>
                            <td>488</td>
                            <?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 801): ?>
                               <td> 801</td>
							   <?php elseif ($this->_tpl_vars['arrSolicitud']['numProyectoInversion'] == 435): ?>
                               <td>435</td>
						<?php else: ?>
				<td>			644</td>
						<?php endif; ?>                       
                  
               </tr>
                  <td><b>Registro Presupuestal Indexación:</b></td>
                  <td><?php echo $this->_tpl_vars['arrResolucionIndexacion']['rp']; ?>
 del <?php echo ((is_array($_tmp=$this->_tpl_vars['arrResolucionIndexacion']['fechaRp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d de %B del %Y") : smarty_modifier_date_format($_tmp, "%d de %B del %Y")); ?>
</td>
               </tr>
            <?php endif; ?>
            
				<tr>
               <td><b>Total Valor del Subsidio:</b></td>
               <td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valAspiraSubsidio)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
            </tr>
				
				
			</table>
            
			<!-- BENEFICIARIO DEL PAGO -->
			<table cellspacing="0" cellpadding="1" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
				<tr><td colspan="2" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor=""><b>Beneficiario del Pago</b></td></tr>
				<tr>
					<td width="200px"><b>Nombre del <?php if ($this->_tpl_vars['seqModalidad'] != 5): ?> Vendedor <?php else: ?> Arrendador <?php endif; ?>:</b></td>
					<td><?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['txtNombreVendedor'] != ''): ?>
							<?php echo $this->_tpl_vars['claDesembolso']->arrEscrituracion['txtNombreVendedor']; ?>

						<?php else: ?>
							<?php echo $this->_tpl_vars['claDesembolso']->txtNombreVendedor; ?>

						<?php endif; ?> </td>
				</tr>
				<tr>
					<td><b><?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['txtTipoDocumentos'] == 'juridica'): ?>NIT<?php else: ?>Documento<?php endif; ?> del Vendedor:</b></td>
					<td>
						<?php if ($this->_tpl_vars['claDesembolso']->arrEscrituracion['numDocumentoVendedor'] != 0): ?>
							<?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->arrEscrituracion['numDocumentoVendedor'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 
						<?php else: ?>
							<?php echo $this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['tipoDocVendedor']]; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['claDesembolso']->numDocumentoVendedor)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
 
						<?php endif; ?>
					</td>
				</tr>
			</table>
			
			<!-- BENEFICIARIO DEL GIRO -->
			<table cellspacing="0" cellpadding="1" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
				<tr><td colspan="2" style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor=""><b>Beneficiario del Giro</b></td></tr>
				<tr>
					<td width="300px"><b>Nombre Beneficiario del Giro:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['txtNombreBeneficiarioGiro']; ?>
</td>
				</tr>
				<tr>
					<td><b>Número Documento Beneficiario del Giro:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['numDocumentoBeneficiarioGiro']; ?>
</td>
				</tr>
				<tr>
					<td><b>Dirección Beneficiario del Giro:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['txtDireccionBeneficiarioGiro']; ?>
</td>
				</tr>
				<tr>
					<td><b>Número Telefónico Beneficiario del Giro:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['numTelefonoGiro']; ?>
</td>
				</tr>
				<tr>
                                <td><b>Correo Electrónico Beneficiario del Giro:</b></td>
				    <td><?php echo $this->_tpl_vars['arrSolicitud']['txtCorreoGiro']; ?>
</td>
				</tr>
				<tr>
					<td><b>Número de Cuenta del Vendedor:</b></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['numCuentaGiro']; ?>
</td>
				</tr>
				<tr>
					<td><b>Tipo de Cuenta del Vendedor:</b></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrSolicitud']['txtTipoCuentaGiro'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</td>
				</tr>
				<tr>
					<td><b>Banco de la cuenta:</b></td>
					<td><?php echo $this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoGiro']]; ?>
</td>
				</tr>
				<tr>
					<td><b>Valor del Desembolso:</b></td>
					<td>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['arrSolicitud']['valSolicitado'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
				</tr>
				<tr>
					<td><b>Saldo del Desembolso:</b></td>
					<!--<td>$ 0</td>-->
					<td>
						<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['claFormulario']->valAspiraSubsidio,'y' => $this->_tpl_vars['claDesembolso']->arrSolicitud['resumen']['valSolicitudes'],'assign' => 'valSaldo'), $this);?>

						$ <?php echo ((is_array($_tmp=$this->_tpl_vars['valSaldo'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

					</td>
				</tr>
				<tr>
					<td><b>Nùmero del Pago:</b></td>
					<td><?php echo $this->_tpl_vars['numSolicitudes']; ?>
</td>
					<!--<td>1</td>-->
				</tr>
			</table>
			
			<!-- CERTIFICACION -->
			<table cellspacing="0" cellpadding="1" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
				<tr><td style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor=""><b>Certificación</b></td></tr>
				<tr><td style="padding-left:20px; padding-right:20px; text-align:justify;">
					
						<?php if ($this->_tpl_vars['seqModalidad'] != 5): ?>
						<?php if ($this->_tpl_vars['Flujo'] == "" || $this->_tpl_vars['Flujo'] != 'giroAnticipado'): ?>
							Una vez revisados, técnica, jurídica y financieramente, los documentos aportados por el 
							beneficiario del Subsidio Distrital de Vivienda y por el beneficiario del pago, 
							certificamos que los mismos se encuentran ajustados y acordes con los requisitos 
							establecidos en el reglamento operativo y la normatividad vigente, por lo anterior se 
							solicita desembolsar, contra finalización de la obra, a la cuenta del Banco indicada en 
							la carta de autorización.
						<?php else: ?>
							Una vez revisados jurídica y financieramente todos los documentos aportados por la 
							constructora y los de la entidad financiera, certificamos que los mismos se encuentran 
							ajustados y acordes con los requisitos establecidos en el reglamento operativo y la normatividad 
							vigente, por lo anterior se solicita realizar el respectivo giro anticipado, a la cuenta indicada 
							en la presente solicitud.
						<?php endif; ?>
					 <?php else: ?>
					 	Una vez revisados, técnica, jurídica y financieramente, los documentos aportados por el 
					 	beneficiario del Subsidio Condicionado de Arrendamiento, por el beneficiario del pago y por el Banco BCSC, 
					 	certificamos que los mismos se encuentran ajustados y acordes con los requisitos establecidos en el 
					 	reglamento operativo y la normatividad vigente, por lo anterior se solicita desembolsar, a la cuenta del 
					 	Arrendador indicada en la certificación bancaria.
					 <?php endif; ?>
					 
				</td></tr>
			</table>
			
			<!-- DOCUMENTOS -->
			<table cellspacing="0" cellpadding="1" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
				
				<!-- TITULO DE LA TABLA DE DOCUMETOS -->
				<tr><td style="padding:5px; <?php echo $this->_tpl_vars['txtFuente12']; ?>
" bgcolor="" colspan="3"><b>Se Adjuntaron los siguientes documentos:</b></td></tr>	
				
				<!-- DOCUMENTO DEL BENEFICIARIO -->
				<tr>
					<td style="padding-left:20px" width="350px"><li>Copia cédula de ciudadanía del beneficiario</li></td>
					<td width="25px"><?php if ($this->_tpl_vars['arrSolicitud']['bolDocumentoBeneficiario'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['txtDocumentoBeneficiario']; ?>
&nbsp;</td>
				</tr>
				
				<!-- DOCUMENTO DEL PROPIETARIO DEL INMUEBLE -->
				<?php if ($this->_tpl_vars['claDesembolso']->txtTipoDocumentos != 'persona' && $this->_tpl_vars['claDesembolso']->txtTipoDocumentos != ""): ?>
					
					<tr>
						<td style="padding-left:20px"><li>Copia Rut</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolRut'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtRut']; ?>
&nbsp;</td>
					</tr>
					
					<!-- <tr>
						<td style="padding-left:20px"><li>Copia Nit</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolNit'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtNit']; ?>
&nbsp;</td>
					</tr> -->
					
					<tr>
						<td style="padding-left:20px"><li>Documento Representante Legal</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolCedulaRepresentante'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtCedulaRepresentante']; ?>
&nbsp;</td>
					</tr>
					<tr>
						<td style="padding-left:20px"><li>Cámara y Comercio</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolCamaraComercio'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtCamaraComercio']; ?>
&nbsp;</td>
					</tr>
				<?php else: ?>
					
					<tr>
						<td style="padding-left:20px"><li>Copia cédula de ciudadanía del vendedor o arrendador</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolDocumentoVendedor'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtDocumentoVendedor']; ?>
&nbsp;</td>
					</tr>
						
				<?php endif; ?>
				
				<tr>
					<td style="padding-left:20px"><li>Copia carta de asignación</li></td>
					<td><?php if ($this->_tpl_vars['arrSolicitud']['bolCartaAsignacion'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['txtCartaAsignacion']; ?>
&nbsp;</td>
				</tr>
				
				<tr>
					<td style="padding-left:20px"><li>Autorización de Giro a Terceros</li></td>
					<td><?php if ($this->_tpl_vars['arrSolicitud']['bolGiroTercero'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['arrSolicitud']['txtGiroTercero']; ?>
&nbsp;</td>
				</tr>
				
				<?php if ($this->_tpl_vars['seqModalidad'] != 5): ?>
				
					<tr>
						<td style="padding-left:20px"><li>Copia certificación bancaria / Giro por Cheque</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolCertificacionBancaria'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtCertificacionBancaria']; ?>
&nbsp;</td>
					</tr>
					
					<?php if ($this->_tpl_vars['seqModalidad'] == 3 || $this->_tpl_vars['seqModalidad'] == 4): ?>
						<tr>
							<td style="padding-left:20px"><li>Acta entrega física de la obra</li></td>
							<td><?php if ($this->_tpl_vars['arrSolicitud']['bolActaEntregaFisica'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
							<td><?php echo $this->_tpl_vars['arrSolicitud']['txtActaEntregaFisica']; ?>
&nbsp;</td>
						</tr>
						<tr>
							<td style="padding-left:20px"><li>Acta de liquidación</li></td>
							<td><?php if ($this->_tpl_vars['arrSolicitud']['bolActaLiquidacion'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
							<td><?php echo $this->_tpl_vars['arrSolicitud']['txtActaLiquidacion']; ?>
&nbsp;</td>
						</tr>
					<?php endif; ?>
					
					<tr>
						<td style="padding-left:20px"><li>Original autorización de desembolso</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolAutorizacion'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtAutorizacion']; ?>
&nbsp;</td>
					</tr>
					
				<?php else: ?>
				
					<tr>
						<td style="padding-left:20px"><li>Copia certificación bancaria arrendador</li></td>
						<td><?php if ($this->_tpl_vars['arrSolicitud']['bolBancoArrendador'] == 1): ?> Si <?php else: ?> No <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['arrSolicitud']['txtBancoArrendador']; ?>
&nbsp;</td>
					</tr>
				
				<?php endif; ?>

		</table>

		<!-- FIRMA DE LA CARTA -->
		<table cellspacing="0" cellpadding="4" border="0" width="100%" style="<?php echo $this->_tpl_vars['txtFuente12']; ?>
">
			<tr>
				<td height="20px" colspan="4">&nbsp;</td>
			</tr>	
					<tr>
						<td colspan="2">
						<br/><br/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['arrSolicitud']['txtSubdireccion'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)) != ""): ?>
								<?php echo $this->_tpl_vars['arrSolicitud']['txtSubdireccion']; ?>
<br>								
								Subdirector de Recursos Públicos <?php if ($this->_tpl_vars['arrSolicitud']['bolSubdireccionEncargado'] == 1): ?> (E) <?php endif; ?>
								
								<?php endif; ?>
							<br><br>
							<span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
								Elaboró: <?php echo $this->_tpl_vars['txtUsuarioSesion']; ?>
 - Subdirección de Recursos Públicos<br>
							</span>
							<span style="<?php echo $this->_tpl_vars['txtFuente10']; ?>
">
								Revisó: <?php echo $this->_tpl_vars['arrSolicitud']['txtRevisoSubsecretaria']; ?>
 - Subdirección de Recursos Públicos 
							</span>
						</td>
					<?php if (((is_array($_tmp=$this->_tpl_vars['arrSolicitud']['txtSubdireccion'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)) == ""): ?>
						</tr>
					<tr>
					<?php endif; ?>				
						<td valign="top">
						<br/><br/>
						<?php if ($this->_tpl_vars['arrSolicitud']['txtSubsecretaria'] != ""): ?>
								<?php echo $this->_tpl_vars['arrSolicitud']['txtSubsecretaria']; ?>
<br>
								Subsecretario de Gestión Financiera <?php if ($this->_tpl_vars['arrSolicitud']['bolSubsecretariaEncargado'] == 1): ?> (E) <?php endif; ?>
							<?php endif; ?>
						</td>
						
					</tr>
				
		</table>
	
	</body>
</html>
	