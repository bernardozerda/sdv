<?php /* Smarty version 2.6.26, created on 2017-03-20 03:59:22
         compiled from index.tpl */ ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-Es" >
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="Subsidios de Vivienda">
		<meta name="keywords" content="subsidio,vivienda,social,prioritaria,bogota,habitat,asignacion,credito" />
		<meta name="description" content="Sistema de informacion de subsidios de vivienda">
		<meta http-equiv="Content-Language" content="es">
		<meta name="robots" content="index,  nofollow" />
		
		<title>SDV - SDHT</title>
		
		<!-- INCLUSIONES CSS -->		
		<link rel="stylesheet" type="text/css" href="./recursos/estilos/sdht.css" />
		<link rel="stylesheet" type="text/css" href="./recursos/estilos/proyectos.css" />
		<link rel="stylesheet" type="text/css" href="./librerias/yui/container/assets/skins/sam/container.css" />
		<link rel="stylesheet" type="text/css" href="./librerias/yui/button/assets/skins/sam/button.css" />
		<link rel="stylesheet" type="text/css" href="./librerias/yui/menu/assets/skins/sam/menu.css" />
		<link rel="stylesheet" type="text/css" href="./librerias/yui/calendar/assets/skins/sam/calendar.css" />
		<link rel="stylesheet" type="text/css" href="./librerias/yui/tabview/assets/skins/sam/tabview.css">
		<link rel="stylesheet" type="text/css" href="./librerias/yui/datatable/assets/skins/sam/datatable.css">
		<link rel="stylesheet" type="text/css" href="./librerias/yui/paginator/assets/skins/sam/paginator.css">
		<link rel="stylesheet" type="text/css" href="./librerias/yui/autocomplete/assets/skins/sam/autocomplete.css">
		<link rel="stylesheet" type="text/css" href="./librerias/yui/treeview/assets/skins/sam/treeview.css" />

		<!-- INCLUSIONES JAVASCRIPT -->	
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/yahoo-dom-event/yahoo-dom-event.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/element/element-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/connection/connection-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/dom/dom-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/dragdrop/dragdrop-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/event/event-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/animation/animation-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/container/container-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/button/button-min.js"></script>	
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/menu/menu-min.js" ></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/calendar/calendar-min.js" ></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/tabview/tabview-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/cookie/cookie-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/paginator/paginator-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/datasource/datasource-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/datatable/datatable-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/autocomplete/autocomplete-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/json/json-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/swf/swf-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/charts/charts-min.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/yui/treeview/treeview-min.js"></script>		
		
		<script language="JavaScript" type="text/javascript" src="./librerias/javascript/funciones.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/javascript/funcionesSubsidios.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/javascript/marquee.js"></script>
		<script language="JavaScript" type="text/javascript" src="./librerias/javascript/listenerIndex.js"></script>
		
		<script language="JavaScript" type="text/javascript" src="./librerias/bootstrap/js/jquery-1.10.1.js"></script>
		
	</head>
	<body class="yui-skin-sam" id="bodyHtml" topMargin="0"> 
		
		<center>
		
		<table cellpadding="0" cellspacing="0" border="0" width="900px" bgcolor="#F9F9F9">
		
<!-- BANNER NEGRO -->
			<tr><td height="22px" colspan="3" bgcolor="#000000">
				<img src="<?php echo $this->_tpl_vars['txtRutaImagenes']; ?>
bannerNegro.png" />
			</td></tr>

<!-- CABEZOTE -->			
			<tr>
				<td rowspan="2" valign="bottom" width="124px">
					<img src="<?php echo $this->_tpl_vars['txtRutaImagenes']; ?>
subsidiodvgeneral.jpg" align="center" onClick="location.reload(true);" style="cursor:pointer;"/>
				</td>
				<td id="rutaMenu" height="20px" valign="middle"  style="padding-left: 20px;">
                    <span class="menuLateral">Inicio: <?php echo $this->_tpl_vars['txtRutaInicio']; ?>
</span>
				</td>
				<td width="450px" align="right" style="padding-right: 20px">
					<b><i>En sesión:</b> <?php echo $this->_tpl_vars['txtNombreUsuario']; ?>
</i>
				</td>
			</tr>
<!-- SALIR DE SESION -->			
			<tr>
				<td colspan="2" bgcolor="#008FA6" align="right" valign="middle" style="padding-right:10px;">
					<a href="#" onClick="location.href = './autenticacion.php' " class="salir">
                  Abandonar Sesión
               </a>
               <a href="#" id="ayuda" onClick="popUpAyuda()">
                  <img src="./recursos/imagenes/ayuda.png" width="18px" height="18px">
               </a>
				</td>
			</tr>
					
			<!-- MENU PRINCIPAL -->
			<tr>
				<td colspan="3">
					<table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tr>
							<td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
							<td width="170px" valign="middle" align="center"> <!-- PROYECTOS AUTORIZADOS -->
								<select name="proyecto" id="proyecto" style="width:170px;"
								onChange="cargarContenido('bodyHtml','./index.php','proyecto=' + this.options[ this.selectedIndex ].value,true);">
									<?php $_from = $this->_tpl_vars['arrProyectos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqProyecto'] => $this->_tpl_vars['objProyecto']):
?>
										<option value="<?php echo $this->_tpl_vars['seqProyecto']; ?>
"
										<?php if ($this->_tpl_vars['seqProyectoPost'] == $this->_tpl_vars['seqProyecto']): ?> selected <?php endif; ?>
										><?php echo $this->_tpl_vars['objProyecto']->txtProyecto; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							</td>
						</tr>
					</table>
				</td>
			</tr>			
			
			<!-- MENSAJES -->
			<tr>
				<td height="20px" colspan="3" style="padding-left:10px;" id="mensajes"> &nbsp; </td>
			</tr>

			<!-- TODO EL CONTENIDO SE CARGA AQUI -->
			<tr>
				<td colspan="3" id="contenido" height="650px" align="left" valign="top" style="padding-left:10px; padding-top:5px; padding-bottom:5px; ">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['txtArchivoInicio']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
			</tr>
			<!-- Inicio Mensaje al usuario-->
			<tr>
				<td colspan="3">
					<div id="oScroll" style="width:900px;">
						<div id="scroll">Es importante que el hogar actualice informaci&oacute;n de contacto, conformaci&oacute;n del n&uacute;cleo familiar y las condiciones para acceder al SDVE.
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Es responsabilidad de cada servidor de la SDHT reiterar al hogar la necesidad de actualizar sus datos.
					</div>
				</div>
			</td>
		</tr>
		<!-- FIN Mensaje al usuario-->
			
			<!-- PIE DE PAGINA -->
			<tr>
				<td rowspan="2">
					<img src="<?php echo $this->_tpl_vars['txtRutaImagenes']; ?>
bta_positiva.jpg" />
				</td>
				<td colspan="2" background="<?php echo $this->_tpl_vars['txtRutaImagenes']; ?>
background_menupie.png">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td align="center" valign="middle" colspan="3">
					Calle 52 No. 13-64, Bogot&aacute D.C., Colombia. <br>
					PBX (571) 381 3000.
				</td>
			</tr>			
			
		</table>
		</center>
	</body>
</html>