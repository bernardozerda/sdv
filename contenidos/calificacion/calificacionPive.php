<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $txtPrefijoRuta = "../../";
        //include( $txtPrefijoRuta . "recursos/archivos/verificarSesion.php" );
        include( $txtPrefijoRuta . "recursos/archivos/lecturaConfiguracion.php" );
        //include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/inclusionSmarty.php" );
        include( $txtPrefijoRuta . $arrConfiguracion['carpetas']['recursos'] . "archivos/coneccionBaseDatos.php" );

        $sql = "SELECT frm.seqFormulario, count(seqCiudadano) as cant, concat(txtNombre1, ' ',  txtNombre2, ' ', txtApellido1, ' ', txtApellido2 ) as nombre,
group_concat(concat('<tr><td>',ucwords(txtNombre1), ' ',  txtNombre2, ' ', txtApellido1, ' ', txtApellido2, '</td> <td>', YEAR(CURDATE())-YEAR(fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(fchNacimiento,'%m-%d'), 0, -1) ),'</td></tr>')  AS edades, 
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) >15 and hog1.seqFormulario = hog.seqFormulario ) AS cantMayor,
(SELECT sum(numAnosAprobados) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) >15 and hog1.seqFormulario = hog.seqFormulario ) AS aprobados,
(select count(*) FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where hog1.seqFormulario = hog.seqFormulario and numAfiliacionSalud in(0, 3) ) as afiliacion, 
numHabitaciones as cohabitacion, numHacinamiento as dormitorios, sum(valIngresos) as ingresos,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) <= 12 and hog1.seqFormulario = hog.seqFormulario ) AS cantMenores,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqParentesco = 3 and hog1.seqFormulario = hog.seqFormulario ) AS cantHijos,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqParentesco = 1 and seqSexo = 2 and hog1.seqFormulario = hog.seqFormulario ) AS mujerCabHogar,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqParentesco = 2 and hog1.seqFormulario = hog.seqFormulario ) AS conyugueHogar,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) > 59 and hog1.seqFormulario = hog.seqFormulario ) AS cantadultoMayor,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where  hog1.seqFormulario = hog.seqFormulario and (seqCondicionEspecial in(1, 2, 3 ) or seqCondicionEspecial2 in(1, 2, 3 )  or seqCondicionEspecial3 in(1, 2, 3 ))) AS cantCondEspecial,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqEtnia > 1 and hog1.seqFormulario = hog.seqFormulario ) AS condicionEtnica,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) > 12 and  YEAR(CURDATE())-YEAR(ciu1.fchNacimiento) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(ciu1.fchNacimiento,'%m-%d'), 0, -1) < 19 and hog1.seqFormulario = hog.seqFormulario ) AS adolecentes,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqParentesco = 1 and seqSexo = 1 and hog1.seqFormulario = hog.seqFormulario ) AS hombreCabHogar,
(SELECT count(*) 
FROM t_ciu_ciudadano ciu1 left join t_frm_hogar hog1 using(seqCiudadano)
where seqGrupoLgtbi > 0 and hog1.seqFormulario = hog.seqFormulario ) AS grupoLgtbi,
bolIntegracionSocial, bolSecEducacion, bolSecMujer, bolSecSalud, bolAltaCon, bolIpes
FROM sdht_subsidios.t_frm_formulario frm 
left join t_frm_hogar hog using(seqFormulario)
left join t_ciu_ciudadano ciu using(seqCiudadano)
where seqPlanGobierno = 3
group by frm.seqFormulario;";

        //secho $sql . "<br>";
        $objRes1 = $aptBd->execute($sql);
        //var_dump($objRes1);
        $int = 0;
        ?>
        <table border="1">
            <tr>
                <th>Formulario</th>
                <th>Ciudadano</th>
                <th>Edad Integrantes del hogar</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th> 
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php
            while ($objRes1->fields) {?>
            <tr>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['nombre']?></td>
                <td><table><?= ucwords(strtolower(str_replace(",", "", $objRes1->fields['edades'])))?></table></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>            
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
                <td><?=$objRes1->fields['seqFormulario']?></td>
            </tr>
            <?php
               // echo "<br>" . $objRes1->fields['seqFormulario'];

                $objRes1->MoveNext();
            }
            ?>
        </table>
    </body>
</html>
