
	{assign var=cssEncabezado        value="background-color:black;   color:white; font-family:verdana; font-size:12pt; font-weight: normal;"}
	{assign var=cssSeccion           value="background-color:gray;    color:white; font-family:verdana; font-size:10pt; font-weight: normal;"}
	{assign var=cssSubseccion        value="background-color:#f0f0f0; color:black; font-family:verdana; font-size:10pt; font-weight: normal;"}
	{assign var=cssPreguntaNormal    value="background-color:#f5f5f5; color:black; font-family:verdana; font-size:8pt;  font-weight: normal;"}
	{assign var=cssPreguntaNegrilla  value="background-color:#f5f5f5; color:black; font-family:verdana; font-size:8pt;  font-weight: bold;  "}
	{assign var=cssRespuestaNormal   value="background-color:white;   color:black; font-family:verdana; font-size:8pt;  font-weight: normal;" }
	{assign var=cssRespuestaNegrilla value="background-color:white;   color:black; font-family:verdana; font-size:8pt;  font-weight: bold;" }
	
	<table border=0 style='width: 100%;' cellpadding=5 cellspacing=0>
	
		<!-- ENCABEZADO -->
		<tr>
			<td style='{$cssEncabezado}'>
				{$claEncuesta->txtDiseno}
			</td>
		</tr>
		<tr>
			<td>
				<table border=0 style='width: 100%;' cellpadding=3 cellspacing=0>
					<tr>
						<td style='width: 25%; {$cssPreguntaNegrilla}'>NOMBRE DEL CARGUE:</td>
						<td style='{$cssPreguntaNormal}'>{$claEncuesta->arrAplicacion.encabezado.nombre|strtoupper}</td>
					</tr><tr>
						<td style='width: 25%; {$cssPreguntaNegrilla}'>IDENTIFICADOR DEL FORMULARIO:</td>
						<td style='{$cssPreguntaNormal}'>{$claEncuesta->arrAplicacion.encabezado.formulario|strtoupper}</td>
					</tr><tr>
						<td style='width: 25%; {$cssPreguntaNegrilla}'>FECHA DE APLICACIÓN DE LA ENCUESTA:</td>
						<td style='{$cssPreguntaNormal}'>{$claEncuesta->arrAplicacion.encabezado.fchAplicacion|strtoupper}</td>
					</tr><tr>
						<td style='width: 25%; {$cssPreguntaNegrilla}'>FECHA DE CARGA DE LA ENCUESTA:</td>
						<td style='{$cssPreguntaNormal}'>{$claEncuesta->arrAplicacion.encabezado.fchCarga|strtoupper}</td>
					</tr>
					</tr><tr>
						<td style='width: 25%; {$cssPreguntaNegrilla}'>USUARIO QUE CARGÓ LA ENCUESTA:</td>
						<td style='{$cssPreguntaNormal}'>{$claEncuesta->arrAplicacion.encabezado.txtUsuario|strtoupper}</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<!-- IMPRESION DE LA PLANTILLA Y DE LOS RESULTADOS -->
		
		{foreach from=$claEncuesta->arrPlantilla key=txtSeccion item=arrSubsecciones}
			<tr><td style='{$cssSeccion}'>{$txtSeccion}</td></tr>
			{foreach from=$arrSubsecciones key=txtSubseccion item=arrPreguntas}
				<tr><td style='{$cssSubseccion}'>{$txtSubseccion}</td></tr>
				{foreach from=$arrPreguntas key=txtIdentificador item=arrPregunta}
					
					<tr>
						<td style='width: 25%; {$cssPreguntaNormal}'>
							<span style="width: 25%; {$cssPreguntaNegrilla}">{$txtIdentificador}</span> {$arrPregunta.pregunta}
						</td>
					</tr>
					
					<tr>
						<td style="{$cssRespuestaNormal}"> <!-- #{$txtIdentificador}#{$arrPregunta.tipo}#{$arrPregunta.destino}  -->
							
							{if $arrPregunta.destino == "T_ENC_APLICACION_FORMULARIO"}
		
								{if $arrPregunta.tipo != 3 && $arrPregunta.tipo != 5}	
									<!--  {$claEncuesta->arrAplicacion.formulario.$seqRespuesta}  -->
								{elseif $arrPregunta.tipo == 3}
								<!-- 
									<table border=0 style='width: 100%;' cellpadding=3 cellspacing=0>
										{foreach from=$arrPregunta.respuesta key=seqRespuesta item=arrRespuesta}
											<tr>
												<td style='width: 25%; border-bottom: 1px dotted #000000; {$cssRespuestaNegrilla}'>
													{$arrRespuesta.texto}
												</td>
												<td style="border-bottom: 2px dotted #000000; {$cssRespuestaNormal}">
													{if isset( $claEncuesta->arrAplicacion.formulario.$seqRespuesta )}
														1
													{else}
														0
													{/if}
												</td>
											</tr>
										{/foreach}
									</table>
								 -->
								{elseif $arrPregunta.tipo == 5}
									<table border=0 style='width: 100%;' cellpadding=3 cellspacing=0>
										{foreach from=$arrPregunta.respuesta key=seqRespuesta item=arrRespuesta}
											<tr>
												<td style='width: 25%; border-bottom: 1px dotted #000000; {$cssRespuestaNegrilla}'>
													{$arrRespuesta.texto}
												</td>
												<td style="border-bottom: 2px dotted #000000; {$cssRespuestaNormal}">
													{$claEncuesta->arrAplicacion.formulario.$seqRespuesta}
												</td>
											</tr>
										{/foreach}
									</table>
								{/if}
							
							{else}
								<!-- preguntas de ciudadano -->				
							{/if}
									
						</td>
					</tr>
					
				{/foreach}
			{/foreach}
		{/foreach}
		
	</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	