	<table cellspacing="" cellpadding="0" width="99%" border="0">
		<tr>
			<td class="tituloCampo"  width="22%">
				Buscar por nombre de proyecto
			</td>
			<td colspan="3" height="17px" valign="top" width="66%">
				<div id="buscarNombreProyecto">
					<input type="hidden" id="myHidden">
					<input	id="nombre" 
							type="text" 
							style="width:533px" 
							onFocus="this.style.backgroundColor = '#ADD8E6'; " 
							onBlur="this.style.backgroundColor = '#FFFFFF';" 
					/>
					<div id="contenedor"></div>
				</div>	
			</td>
			<td width="12%"><input type="button" class="buscarCedula" value="Buscar" onClick="{$txtFuncion}"></td>
		</tr>
	</table>

	<table cellspacing="0" cellpadding="0" border="0" width="99%" height="90%" bgcolor="#E4E4E4"> 
		<tr><td height="5px"></td></tr>
		<tr>
			<td align="center" valign="top" id="formulario">
				&nbsp;
			</td>
		</tr>
	</table>

	<div id="buscarNitListener"></div>
	<div id="listenerBuscarNombreProyecto"></div>