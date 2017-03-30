<?php /* Smarty version 2.6.26, created on 2017-03-30 10:26:08
         compiled from subsidios/postulacionArrendamiento.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'subsidios/postulacionArrendamiento.tpl', 22, false),)), $this); ?>

	
	<table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="220px" height="140px"id="pasos" align="center" valign="top" style="border-right: 1px dotted #999999;">
				<table cellpadding="3" cellspacing="0" border="0" width="100%">
					<tr><td class="tituloVerde" height="20px">Pasos</td></tr>
					<tr><td <?php if ($this->_tpl_vars['numPaso'] == 1): ?> class="menuLateralOver" <?php else: ?> class="menuLateral" <?php endif; ?>>Paso 1: PreSelección de Hogares</td></tr>
					<tr><td <?php if ($this->_tpl_vars['numPaso'] == 2): ?> class="menuLateralOver" <?php else: ?> class="menuLateral" <?php endif; ?>>Paso 2: Selección</td></tr>
				</table>
				<br>
				<button class="reporteadorExport" 
						id="exportar" 
						onClick="location.href='./recursos/descargas/<?php echo $this->_tpl_vars['txtNombreArchivo']; ?>
'">
					Exportar a un Archivo
				</button>
			</td>
			<td id="tabla" style="padding:10px" rowspan="3" valign="top" align="center">

				<!-- navegadores aqui -->
				
				<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['numPaso'],'y' => 1,'assign' => 'numAnterior'), $this);?>

				<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['numPaso'],'y' => 1,'assign' => 'numSiguiente'), $this);?>

				
				<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border: 1px solid #999999">
					<tr><td  align="center" valign="bottom" width="100px" height="25px">
						<?php if ($this->_tpl_vars['numAnterior'] == 1): ?> 
							<form onSubmit="someterFormulario( 'contenido' , this , './contenidos/subsidios/postulacionArrendamiento.php' , false , true ); return false;">
								<input type="submit"
									   class="boton"
									   value="<< Paso <?php echo $this->_tpl_vars['numAnterior']; ?>
"
								/>
								<input type="hidden"
									   name="paso"
									   value="<?php echo $this->_tpl_vars['numAnterior']; ?>
"
								/>
							</form>
						<?php endif; ?>
					</td><td align="center">&nbsp;
						<?php if ($this->_tpl_vars['txtError'] != ""): ?>
							<span class="msgError"><?php echo $this->_tpl_vars['txtError']; ?>
</span><br>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['numPaso'] == 1): ?>
							Cantidad de subsidios a asignar
							<input type="text"
								   name="numSubsidios"
								   id="numSubsidios"
								   onFocus="this.style.backgroundColor = '#ADD8E6';" 
								   onBlur="this.style.backgroundColor = '#FFFFFF'; soloNumeros( this ); document.getElementById( 'cantidad' ).value = this.value "
								   value="<?php echo $this->_tpl_vars['numCantidad']; ?>
"
							/>
						<?php endif; ?>
					</td><td align="center" width="100px">&nbsp;
						<form id="frmSiguiente" onSubmit="someterFormulario( 'contenido' , this , './contenidos/subsidios/postulacionArrendamiento.php' , false , true ); return false;">
							<?php if ($this->_tpl_vars['numSiguiente'] <= 2): ?>
								<input type="submit"
									   class="boton"
									   value="Paso <?php echo $this->_tpl_vars['numSiguiente']; ?>
 >>"
								/>
							<?php endif; ?>
							<input type="hidden"
								   name="paso"
								   value="<?php echo $this->_tpl_vars['numSiguiente']; ?>
"
							/>
							<input type="hidden"
								   name="cantidad"
								   id="cantidad"
								   value="<?php echo $this->_tpl_vars['numCantidad']; ?>
"
							/>
						</form>
					</td></tr>
				</table>				
				
				<!-- fin navegadores aqui -->

				<div id="cantidadRegistros" style="text-align:center; width:100%; display:none" class="msgOk">
					Se han procesado <?php echo $this->_tpl_vars['numRegistros']; ?>
 registros.
				</div>
				<div id="cargandoTablaArrendamiento" style="text-align:center; width:100%;" class="msgOk">
					Se han procesando <?php echo $this->_tpl_vars['numRegistros']; ?>
 registros, espere por favor...<br>
					<img src="./recursos/imagenes/cargando.gif">
				</div>
				<center>
				<div id="contenedorhogaresSeleccionadosArrendamiento">
					<table id="hogaresSeleccionadosArrendamiento" style="display:none">
						<thead>
					        <tr>
					        	<th>Item</th>
					        	<th>Ticket</th>
					            <th>Tipo Documento</th>
					            <th>Documento</th>
					            <th>Nombre</th>
					        </tr>
					    </thead>
					    <tbody>
							<?php $_from = $this->_tpl_vars['arrHogares']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['arriendo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['arriendo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['seqFormulario'] => $this->_tpl_vars['arrDatos']):
        $this->_foreach['arriendo']['iteration']++;
?>
								<?php echo smarty_function_math(array('equation' => "x + y",'x' => ($this->_foreach['arriendo']['iteration']-1),'y' => 1,'assign' => 'numItem'), $this);?>

								<?php if (($this->_foreach['arriendo']['iteration']-1) < 1000): ?>
									<tr>
										<td><?php echo $this->_tpl_vars['numItem']; ?>
</td>
										<td><?php echo $this->_tpl_vars['arrDatos']['Ticket']; ?>
</td>
										<td><?php echo $this->_tpl_vars['arrDatos']['TipoDocumento']; ?>
</td>
										<td><?php echo $this->_tpl_vars['arrDatos']['Documento']; ?>
</td>
										<td><?php echo $this->_tpl_vars['arrDatos']['Nombre']; ?>
</td>
									</tr>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</tbody>	
					</table>
				</div>
				</center>
			</td>
		</tr>
		<tr>
			<td id="tituloDescripcion" class="tituloVerde">
				Descripción
			</td>
		</tr>
		<tr>
			<td id="descripcion" valign="top" align="justify" style="padding:5px; border-right: 1px dotted #999999;">
				<?php if ($this->_tpl_vars['numPaso'] == 1): ?>
					<p>En este paso usted esta viendo los hogares que se postularon para el subsidio de adquisición de vivienda, pero que
					hasta el momento no han reportado el cierre financiero necesario para ser llamados a avanzar en el proceso de postulacón.</p>
					<p>Los hogares pre-seleccionados en este paso cumplen con los siguientes criterios:</p>
					<ol>
						<li>Hogares que se inscribieron para la modalidad de adquisición de vivienda antes del 30 de Junio de 2010</li>
						<li>Han reportado no tener ahorros</li>
						<li>Los ingresos mensuales reportados por el hogar son menores a 2 SMMLV</li>
						<li>Han reportado no estar afiliados a cajas de compensación familiar</li>
					</ol>
					<p>En el siguiente paso el sistema realizará una seleccion aleatoria de tickets que corresponde a 1.5 veces la cantidad 
					de subsidios a asignar en el presente corte. Los hogares que seran llamados para postularse son aquellos a los que
					el numero de ticket seleccionado por el sistema coincida con el numero de ticket asignado al hogar.</p> 
				<?php endif; ?>
				<?php if ($this->_tpl_vars['numPaso'] == 2): ?>
					<p>El listado que esta observando es el listado de hogares cuyo ticket fue seleccionado por el sistema
					de manera aleatoria, estos hogares serán convocados a participar en el proceso del subsidio condicionado
					de arrendamiento.</p>
					<p>Aqui concluye el proceso de seleccion de los hogares.</p>
				<?php endif; ?>
			</td>
		</tr>
	</table>

<div id="listenerhogaresSeleccionadosArrendamiento"></div>
<div id="listenersorteoArrendamiento"></div>