<?php /* Smarty version 2.6.26, created on 2017-03-21 11:42:19
         compiled from seguimientoProyectos/seguimientoFormulario.tpl */ ?>
 
	<table cellpadding="2" cellspacing="0" border="0" width="100%">
		<thead>
			<tr>
				<th class="tituloTabla" width="90px">No.Registro</th>
				<th class="tituloTabla">Grupo Gestión</th>
				<th class="tituloTabla">Seguimiento</th>
				<th class="tituloTabla" width="60px;">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<tr><td align="center" height="25px">
				<input type="input"
					   id="referencia"
					   onFocus="this.style.backgroundColor = '#ADD8E6';"
					   onBlur="soloNumeros( this ); this.style.backgroundColor = '#FFFFFF';"
					   maxlength="8"
					   style="width:70px;"
				/>
			</td><td>
				<select id="grupoGestion" 
						style="width:250px"
						onFocus="this.style.backgroundColor = '#ADD8E6';" 
			  			onBlur="this.style.backgroundColor = '#FFFFFF';"
						onChange="obtenerGestionProyectos( this , 'tdGestion2' , 'gestion' );">
				>
					<option value="0">Seleccione Grupo</option>
					<?php $_from = $this->_tpl_vars['arrGrupoGestion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqGrupoGestion'] => $this->_tpl_vars['txtGrupoGestion']):
?>
						<option value="<?php echo $this->_tpl_vars['seqGrupoGestion']; ?>
"><?php echo $this->_tpl_vars['txtGrupoGestion']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td><td id="tdGestion2">
				<select id="gestion" 
						style="width:250px"
						onFocus="this.style.backgroundColor = '#ADD8E6';" 
			  			onBlur="this.style.backgroundColor = '#FFFFFF';"
				>
					<option value="0">Seleccione Gesti&oacute;n</select>
				</select>
			</td><td>
				<input type="button" 
					   class="buscarCedula" 
					   value="Buscar"
					   onClick="buscarSeguimientoProyectos( 'contenidoBusqueda', './contenidos/seguimientoProyectos/buscarSeguimiento.php' );"
				/>
			</td></tr>
			<tr>
				<td colspan="4" style="border:1px dotted #999999; padding:2px;" id="busquedaAvanzada" valign="top">
					
					<table cllpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td style="width:14px; height:14px; cursor:pointer;" align="center">
								<div style="width:12px; height:14px; cursor:pointer; border: 1px solid #999999; text-align:center;" 
								 	 onClick="cuadroBusquedaAvanzada( 'busquedaAvanzada' );"
									 onMouseOver="this.style.backgroundColor='#ADD8E6';"
									 onMouseOut="this.style.backgroundColor='#F9F9F9';"
									 id="masbusquedaAvanzada"
								>+</div>
							</td>
							<td width="120px" align="center">
								<a href="#" onClick="cuadroBusquedaAvanzada( 'busquedaAvanzada' );" style="text-decoration: hidden;">
									Búsqueda Avanzada 
								</a>		
							</td>
							<td><!-- VACIO --></td>
							<td width="120px" align="center">
								<a href="#" onClick="limpiarBusqueda();" style="text-decoration: none;">
									Limpiar la busqueda
								</a>
							</td>
						</tr>
					</table>
					<div id="cuadrobusquedaAvanzada" style="display:none;"><p>
						<table cellpadding="2" cellspacing="0" border="0" width="100%" bgcolor="#E4E4E4">
							<tr>
								<td width="50px">Desde</td>
								<td width="175px">
									<input	type="text" 
											id="inicial" 
											value=""  
											style="width:100px;"
											maxlength="10"
											onFocus="this.style.backgroundColor = '#ADD8E6';" 
											onBlur="this.style.backgroundColor = '#FFFFFF';"
											readonly 
									/> <a href="#" onClick="calendarioPopUp( 'inicial' );">Calendario</a>									
								</td>
								<td rowspan="2" width="145px">
									<input type="radio" id="cambiosSi" onClick="limpiarRadio( this , ['cambiosSi','cambiosNo','cambiosAmbos'] );" value="si"> Con Modificaciones<br>
									<input type="radio" id="cambiosNo" onClick="limpiarRadio( this , ['cambiosSi','cambiosNo','cambiosAmbos'] );" value="no"> Sin Modifiacioes <br>
									<input type="radio" id="cambiosAmbos" onClick="limpiarRadio( this , ['cambiosSi','cambiosNo','cambiosAmbos'] );" value="ambos"> Ambos 
								</td>
								<td rowspan="2" valign="top">
									Comentarios del Tutor
									<textarea id="comentario"
											  style="width:100%"
											  onFocus="this.style.backgroundColor = '#ADD8E6';" 
											  onBlur="sinCaracteresEspeciales( this ); this.style.backgroundColor = '#FFFFFF';"
									/></textarea>
								</td>
								<td rowspan="2" width="110px">
									<input type="radio" id="criterioTextoInicia" onClick="limpiarRadio( this , ['criterioTextoInicia','criterioTextoTermina','criterioTextoContiene'] )" value="inicia"> Inicia Con <br>
									<input type="radio" id="criterioTextoTermina" onClick="limpiarRadio( this , ['criterioTextoInicia','criterioTextoTermina','criterioTextoContiene'] )" value="termina"> Termina Con <br>
									<input type="radio" id="criterioTextoContiene" onClick="limpiarRadio( this , ['criterioTextoInicia','criterioTextoTermina','criterioTextoContiene'] )" value="contiene"> Contiene
								</td>
							</tr>
							<tr>
								<td width="50px">Hasta</td>
								<td width="175px">
									<input	type="text" 
											id="final" 
											value=""  
											style="width:100px;"
											maxlength="10"
											onFocus="this.style.backgroundColor = '#ADD8E6';" 
											onBlur="this.style.backgroundColor = '#FFFFFF';"
											readonly 
									/> <a href="#" onClick="calendarioPopUp( 'final' );">Calendario</a>
								</td>
							</tr>
						</table>
					</p></div>
				</td>
			</tr>
		</tbody>
	</table>
	