<?php

// Ruta relativa 
$txtPrefijoRuta = "../../";

// Archivos necesarios
include( $txtPrefijoRuta . "recursos/archivos/lecturaConfiguracion.php" );
include( $txtPrefijoRuta . $arrConfiguracion['librerias']['funciones'] . "funciones.php" );
include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/inclusionSmarty.php" );
include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/coneccionBaseDatos.php" );
include( $txtPrefijoRuta . $arrConfiguracion['librerias']['clases'] . "Ciudadano.class.php" );
include( $txtPrefijoRuta . $arrConfiguracion['librerias']['clases'] . "FormularioSubsidios.class.php" );
//include( $txtPrefijoRuta . "librerias/pdf/class.ezpdf.php" );

setlocale(LC_TIME, 'spanish');
date_default_timezone_set("America/Bogota");
$hoy = iconv('ISO-8859-1', 'UTF-8', strftime('%A %d de %B de %Y', time()));
$claCiudadano = new Ciudadano();
$claFormulario = new FormularioSubsidios();
//var_dump($claFormulario); exit();
$seqFormulario = $claCiudadano->formularioVinculado($_GET['documento']);
$claFormulario->cargarFormulario($seqFormulario);
$contenido = '<p>&nbsp;</p><p>Bogota D.C. ' . utf8_decode($hoy) . "<p><p>&nbsp;</p>";
$txtPossible = '0123456789abcdefghijkmnpqrstvwxyzABCDEFGHJKMNPQRSTUVWXYZ';
$txtCodigo = '';
$i = 0;
mt_srand(time());
while ($i < 8) {
    $txtCodigo .= substr($txtPossible, mt_rand(0, strlen($txtPossible) - 1), 1);
    $i++;
}
$txtCodigo = strtoupper($txtCodigo);
$txtTamanoFuente = 10;
$txtTamanoCausas = $txtTamanoFuente - 2;
$txtTamanoPie = $txtTamanoCausas - 2;


// Escudo

$txtFchIns = $claFormulario->fchInscripcion;
//echo $txtFchIns =  strftime('%A %d de %B de %Y', $txtFchIns);
//exit();
$txtFchIns = explode(" ", $txtFchIns);
//$txtFchIns = date_format($txtFchIns[0],'o\n l jS F Y');
// Obtiene el saludo segun el sexo del postulante principal y obtiene el nombre
//public integer Gender\Gender::get ( $_GET['nombre'] [, integer 1 ] );
$txtSaludo = "Señores<br>";
$txtNombre = $_GET['banco'];
$txtEncabezado = "";
$txtNombre1 = $_GET['nombre'];

foreach ($claFormulario->arrCiudadano as $seqCiudadano => $objCiudadano) {

    if ($objCiudadano->seqParentesco == 1) {
        $txtEncabezado = ( $objCiudadano->seqSexo == 1 ) ? " el señor" : " la señora"; 
        $txtTipoDocumento = obtenerNombres("T_CIU_TIPO_DOCUMENTO", "seqTipoDocumento", $objCiudadano->seqTipoDocumento);
        $txtInscripcion = ( $objCiudadano->seqSexo == 1 ) ? "inscrito" : "inscrita";
        break;
    }
}
$contenido .= utf8_decode($txtSaludo);
$contenido .= utf8_decode(strtoupper($txtNombre));
// Limpia a direcion de dobles espacios
$txtDireccion = mb_strtoupper($claFormulario->txtDireccion);
do {
    $txtDireccion = mb_ereg_replace("  ", " ", $txtDireccion);
} while (mb_strpos($txtDireccion, "  ") !== false);

// obtiene el telefono
$numTelefono = "";
//$contenido .= utf8_decode($txtDireccion) . "<br>";
if (trim($claFormulario->numTelefono1) != "") {
    $numTelefono = trim($claFormulario->numTelefono1);
} elseif (trim($claFormulario->numTelefono2 != "")) {
    $numTelefono = trim($claFormulario->numTelefono2);
} else {
    if (trim($claFormulario->numCelular) != "") {
        $numTelefono = trim($claFormulario->numCelular);
        //$contenido .= utf8_decode("Telefono: " . $numTelefono) . "<br>";
    }
}



$contenido .= "<br>" . utf8_decode("Bogotá") . "";
$contenido .= "<p style='text-align:right; float: right; position:absolute;'>" . utf8_decode("<b>Asunto:</b> Carta de Movilización ") . "</p>";
$contenido .= utf8_decode("<p>&nbsp;</p>Respetados Señores:") . "";

if ($_GET['tipo'] == 2) {
    $txtParrafo = "<p stroke='0.2' fill='true'  style='text-align:justify;'>En atención al radicado del asunto, informamos que una vez
    verificado el Sistema de Información para la Financiación de Soluciones de Vivienda de la Secretaría Distrital del Hábitat, 
    se pudo evidenciar que " . $txtEncabezado . " " . $txtNombre1 . " no se encuentra inscrita para acceder a un Subsidio Distrital de 
    Vivienda en Especie.</p>";
} else {
    $txtParrafo .= "<p>En atención al radicado del asunto, informamos que una vez verificado el Sistema de Información para 
la Financiación de Soluciones de Vivienda de la Secretaría Distrital del Hábitat, se pudo evidenciar que 
la señora Olga Lucia Acosta Mahecha no ha comprometido recursos con esta entidad para la asignación 
de un Subsidio Distrital de Vivienda en Especie, por lo anterior," . $txtEncabezado . " " . $txtNombre1 . " puede
movilizar los recursos de su Cuenta de Ahorro Programado si así lo requiere.</p> ";
}


/* $claPdf->ezText(utf8_decode("<i>" . $txtParrafo . "</i><br>"), $txtTamanoFuente, array("justification" => "full")); */
$contenido .= utf8_decode($txtParrafo);

/* $claPdf->ezText(utf8_decode($txtParrafo . "<br>"), $txtTamanoFuente, array("justification" => "full")); */

$txtParrafo = "<p><i>La Secretaría Distrital del Hábitat informa que todos los trámites para la obtención del Subsidio Distrital "
        . "de Vivienda en Especie (SDVE), desde la etapa de la inscripción hasta la asignación, son gratuitos por lo que no "
        . "necesita de intermediarios o tramitadores. </i></p>";


$contenido .= utf8_decode($txtParrafo);
$txtParrafo = "<p>Cualquier información adicional, puede comunicarse con nuestra línea de atención al ciudadano PBX 3581600 extensiones de la 1006 a la 1009.</p>";
$contenido .= utf8_decode($txtParrafo);

$txtParrafo = "<p>&nbsp;</p><div class='code'>Para efectos de seguridad el código de verificacion es: <b>" . $txtCodigo . "</b></div>";
$contenido .= utf8_decode($txtParrafo);
$numDoc = 0;
$objCiudadano->numDocumento;

if ($objCiudadano->numDocumento != "" && $objCiudadano->numDocumento != 0) {
    $numDoc = mb_ereg_replace("[^0-9]", "", $objCiudadano->numDocumento);
}

$sql = "
  INSERT INTO T_CIU_CARTA (
  numDocumento,
  txtNombreCiu,
  txtTipoCarta,
  fchCarta,
  txtCodigo,
  txtBanco,
 seqUsuario
  ) VALUES (
  '" . $numDoc . "',
  '" . $_GET['nombre'] . "',
  'Movilizacion',
  now(),
  '$txtCodigo',
  '" . $_GET['banco'] . "',
   " . $_SESSION['seqUsuario'] . "
  );
  ";
$aptBd->execute($sql);
if ($claFormulario->seqFormulario != 0) {
    $sql = "
      INSERT INTO T_SEG_SEGUIMIENTO (
         seqFormulario, 
         fchMovimiento, 
         seqUsuario, 
         txtComentario, 
         txtCambios, 
         numDocumento, 
         txtNombre, 
         seqGestion, 
         bolMostrar
      ) VALUES (
         $seqFormulario, 
         NOW(), 
         1, 
         'El hogar ha generado la carta de movilizacion de recursos para el banco " . $_GET['banco'] . " desde el sitio web de servicios al ciudadano, se han aplicado los cambios a los datos financieros del hogar', 
         '', 
         " . mb_ereg_replace("[^0-9]", "", $objCiudadano->numDocumento) . ", 
         '$txtNombre', 
         40, 
         1
      )
   ";
    $aptBd->execute($sql);
}
if ($_GET['cuenta'] == 1) {
    $sql = "
  UPDATE T_FRM_FORMULARIO SET
  bolInmovilizadoCuentaAhorro = 0,
  fchAperturaCuentaAhorro = null,
  seqBancoCuentaAhorro = 1,
  txtSoporteCuentaAhorro = '',
  valSaldoCuentaAhorro = 0
  WHERE seqFormulario = $seqFormulario
  ";
    $claFormulario->valSaldoCuentaAhorro = 0;
} else if ($_GET['cuenta'] == 2) {
    $sql = "
  UPDATE T_FRM_FORMULARIO SET
  bolInmovilizadoCuentaAhorro2 = 0,
  fchAperturaCuentaAhorro2 = null,
  seqBancoCuentaAhorro2 = 1,
  txtSoporteCuentaAhorro2 = '',
  valSaldoCuentaAhorro2 = 0
  WHERE seqFormulario = $seqFormulario
  ";
    $claFormulario->valSaldoCuentaAhorro2 = 0;
}
$aptBd->execute($sql);


$claFormulario->valTotalRecursos = (
        $claFormulario->valSaldoCuentaAhorro +
        $claFormulario->valSaldoCuentaAhorro2 +
        $claFormulario->valSubsidioNacional +
        $claFormulario->valAporteLote +
        $claFormulario->valSaldoCesantias +
        $claFormulario->valAporteAvanceObra +
        $claFormulario->valCredito +
        $claFormulario->valAporteMateriales +
        $claFormulario->valDonacion
        );
?>
