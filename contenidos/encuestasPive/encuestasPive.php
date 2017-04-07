<?php

	/**
	 * INICIO DE LA PANTALLA DE VERIFICACION DE CRUCES DE CASA EN MANO
	 * @author Bernardo Zerda
	 * @version 1.0 Dic 2013
	 */
	
	$txtPrefijoRuta = "../../";
	include( $txtPrefijoRuta . "recursos/archivos/verificarSesion.php" );
	include( $txtPrefijoRuta . "recursos/archivos/lecturaConfiguracion.php" );
	include( $txtPrefijoRuta . $arrConfiguracion['librerias']['funciones'] . "funciones.php" );
	include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/inclusionSmarty.php" );
	include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/coneccionBaseDatos.php" );
	//include( $txtPrefijoRuta . $arrConfiguracion['librerias']['clases'] . "CasaMano.class.php" );

?>