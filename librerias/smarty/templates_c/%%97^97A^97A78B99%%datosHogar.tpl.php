<?php /* Smarty version 2.6.26, created on 2017-03-21 07:45:35
         compiled from ./cruces/datosHogar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', './cruces/datosHogar.tpl', 28, false),array('modifier', 'lower', './cruces/datosHogar.tpl', 28, false),array('modifier', 'ucwords', './cruces/datosHogar.tpl', 28, false),array('modifier', 'utf8_encode', './cruces/datosHogar.tpl', 28, false),array('modifier', 'upper', './cruces/datosHogar.tpl', 31, false),array('modifier', 'number_format', './cruces/datosHogar.tpl', 59, false),)), $this); ?>

<!-- DECLARACION DE VARIABLES PARA USAR EN LA PLANTILLA -->
<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>	
<?php $this->assign('seqLocalidad', $this->_tpl_vars['claFormulario']->seqLocalidad); ?>
<?php $this->assign('seqBancoAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
<?php $this->assign('seqBancoAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
<?php $this->assign('seqEstadoProceso', $this->_tpl_vars['claFormulario']->seqEstadoProceso); ?>
<?php $this->assign('seqBancoCuentaAhorro', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro); ?>
<?php $this->assign('seqBancoCuentaAhorro2', $this->_tpl_vars['claFormulario']->seqBancoCuentaAhorro2); ?>
<?php $this->assign('seqBancoCredito', $this->_tpl_vars['claFormulario']->seqBancoCredito); ?>
<?php $this->assign('seqEntidadDonante', $this->_tpl_vars['claFormulario']->seqEmpresaDonante); ?>
<?php $this->assign('bolDesplazado', $this->_tpl_vars['claFormulario']->bolDesplazado); ?>


<p><div style="background-color: white; height:25px; padding-top:10px;">
    <strong>ESTADO DEL PROCESO:</strong> <?php echo $this->_tpl_vars['arrEstados'][$this->_tpl_vars['seqEstadoProceso']]; ?>

</div></p>
<div>
<!-- DATOS BASICOS DEL HOGAR -->    
<p><table cellpadding="3" cellspacing="0" border="0" width="98%" bgcolor="#FFFFFF" style="border: 1px dotted #666666;">
	    <tr><td colspan="6" class="tituloTabla">DATOS BASICOS DEL FORMULARIO</td></tr>
	    <tr align="left">
	        <th width="110px">No Formulario</th>
	        <td width="80px"><?php echo $this->_tpl_vars['claFormulario']->txtFormulario; ?>
</td>
	        <th width="80px">Modalidad</th>
	        <td width="180px"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrModalidad'][$this->_tpl_vars['seqModalidad']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	        <th width="80px">Soluci&oacute;n</th>
	        <td>
	        	<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSolucionDescripcion'][$this->_tpl_vars['seqModalidad']][$this->_tpl_vars['seqSolucion']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>

	            (<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSolucion'][$this->_tpl_vars['seqModalidad']][$this->_tpl_vars['seqSolucion']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
)
	        </td>
	    </tr>
	    <tr align="left">
	        <th>Tel&eacute;fono 1</th>
	        <td><?php echo $this->_tpl_vars['claFormulario']->numTelefono1; ?>
</td>
	        <th>Tel&eacute;fono 2</th>
	        <td><?php echo $this->_tpl_vars['claFormulario']->numTelefono2; ?>
</td>
	        <th>Celular</th>
	        <td><?php echo $this->_tpl_vars['claFormulario']->numCelular; ?>
</td>
	    </tr>
	    <tr align="left">
	        <th>Barrio</th>
	        <td colspan="3"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['claFormulario']->txtBarrio)) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	        <th>Localidad</th>
	        <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrLocalidad'][$this->_tpl_vars['seqLocalidad']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	    </tr>
	    <tr align="left">
	        <th>Direcci&oacute;n</th>
	        <td colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->txtDireccion)) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</td>
	    </tr>
	    <tr align="left">
			<th>Correo Electr&oacute;nico</th>
			<td colspan="5"><?php echo $this->_tpl_vars['claFormulario']->txtCorreo; ?>
</td>
	    </tr>
		<tr align="left">
	        <th>Valor Subsidio</th>
	        <td colspan="5">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valAspiraSubsidio)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
		</tr>
	</table></p>

<!--
	DATOS DEL HOGAR 
-->		
<p><table cellpadding="3" cellspacing="0" border="0" width="98%" bgcolor="#FFFFFF" style="border: 1px dotted #666666;">
	    <tr><td colspan="6" class="tituloTabla">DATOS DEL HOGAR</td></tr>
	    <tr align="left">
	        <th bgcolor="#F0F0F0">Parentesco</td>
	        <th bgcolor="#F0F0F0">Tipo Documento</td>
	        <th bgcolor="#F0F0F0">Documento</td>
	        <th bgcolor="#F0F0F0">Nombre</td>
	    </tr>
	    <?php $_from = $this->_tpl_vars['claFormulario']->arrCiudadano; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqCiudadano'] => $this->_tpl_vars['objCiudadano']):
?>
	        <?php $this->assign('seqTipoDocumento', $this->_tpl_vars['objCiudadano']->seqTipoDocumento); ?>
	        <?php $this->assign('seqParentesco', $this->_tpl_vars['objCiudadano']->seqParentesco); ?>
	        <tr>
	            <td><?php echo $this->_tpl_vars['arrParentesco'][$this->_tpl_vars['seqParentesco']]; ?>
</td>
	            <td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTipoDocumento'][$this->_tpl_vars['seqTipoDocumento']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
				<td><?php echo $this->_tpl_vars['objCiudadano']->numDocumento; ?>
</td>
	            <td>
	                <?php echo $this->_tpl_vars['objCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtNombre2; ?>

	                <?php echo $this->_tpl_vars['objCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido2; ?>

	            </td>
	        </tr>
	    <?php endforeach; endif; unset($_from); ?>
	</table></p>

<!-- 
        DATOS FINANCIEROS 
-->		
<p><table cellpadding="3" cellspacing="0" border="0" width="98%" bgcolor="#FFFFFF" style="border: 1px dotted #666666;">
	    <tr>
	    	<td colspan="6" class="tituloTabla">DATOS FINANCIEROS</td>
	    </tr>
	    <tr>
	        <td width="200px"><b>Valor del Ahorro 1</b> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCuentaAhorro']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	        <td width="150px" align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valSaldoCuentaAhorro)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td width="20px">&nbsp;</td>
	        <td width="200px"><b>Valor del Ahorro 2</b> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCuentaAhorro2']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	        <td width="150px" align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valSaldoCuentaAhorro2)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td><b>Valor del Cr&eacute;dito</b> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBanco'][$this->_tpl_vars['seqBancoCredito']])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valCredito)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	        <td><b>Subsidio Nacional</b></td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valSubsidioNacional)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td><b>Valor de Cesant&iacute;as</b></td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valSaldoCesantias)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	        <td><b>Aporte Lote o Terreno</b></td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valAporteLote)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td><b>Aporte Avance Obra</b></td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valAporteAvanceObra)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	        <td><b>Aporte Materiales</b></td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valAporteMateriales)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td><b>Donaci&oacute;n</b> <?php echo $this->_tpl_vars['arrDonantes'][$this->_tpl_vars['seqEntidadDonante']]; ?>
</td>
	        <td align="right">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valDonacion)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>
</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td bgcolor="#E4E4E4" colspan="6">
	        	<b>Total Recursos Econ&oacute;micos:</b> $ <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->valTotalRecursos)) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ',', '.') : number_format($_tmp, 0, ',', '.')); ?>

	        </td>
	    </tr>
	</table></p>
</div>