<?php /* Smarty version 2.6.26, created on 2017-03-23 11:31:09
         compiled from subsidios/eliminarInscripcion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtoupper', 'subsidios/eliminarInscripcion.tpl', 55, false),)), $this); ?>
	
	<?php $this->assign('seqModalidad', $this->_tpl_vars['claFormulario']->seqModalidad); ?>
	<?php $this->assign('seqSolucion', $this->_tpl_vars['claFormulario']->seqSolucion); ?>
   
<form onSubmit="eliminarInscripcion( this ); return false;">
   <div style="padding:40px;">
      
      <!-- COMENTARIOS -->
      <div style="width:100%; text-align: left; font-size: 14px; border-bottom: 1px dotted #666666; padding: 3px;">
         <strong>Comentarios</strong>
      </div>
      <div style="width:70%; padding: 10px; float: left;">
         <textarea onblur="this.style.backgroundColor = '#FFFFFF';" 
                   onfocus="this.style.backgroundColor = '#ADD8E6';" 
                   style="width: 90%; height: 100px;" 
                   name="txtComentario" 
                   id="txtComentario" 
         ></textarea>
      </div>
      <div style="width: 24%; height: 100px; float: right; text-align: left; padding: 10px;">
         Por favor ingrese un comentario para ser almacenado dentro del hist&oacute;rico de formularios eliminados
      </div>
      
      <!-- DATOS DEL FORMULARIO -->
      <div style="width:100%; text-align: left; font-size: 14px; border-bottom: 1px dotted #666666; padding: 3px;">
         <strong>Datos del Formulario</strong>
      </div>
      <div style="width: 90%; padding: 10px; text-align: left; height: 65px;">
         
         <!-- MODALIDAD Y SOLUCION -->
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Modalidad</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->txtModalidad; ?>

         </div>
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Soluci&oacute;n</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->txtSolucion; ?>

         </div>
         
         <!-- CIUDAD Y LOCALIDAD -->
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Ciudad</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->txtCiudad; ?>

         </div>
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Localidad</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['claFormulario']->txtLocalidad)) ? $this->_run_mod_handler('strtoupper', true, $_tmp) : strtoupper($_tmp)); ?>

         </div>
         
         <!-- DIRECCION Y BARRIO -->
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Direcci&oacute;n</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->txtDireccion; ?>

         </div>
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Barrio</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->txtBarrio; ?>

         </div>
         
         <!-- TELEFONOS FIJOS Y CELULAR -->
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Tel&eacute;fono</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php if (intval ( $this->_tpl_vars['claFormulario']->numTelefono1 ) != 0): ?>
               <?php echo $this->_tpl_vars['claFormulario']->numTelefono1; ?>
 
            <?php endif; ?>
            
            <?php if (intval ( $this->_tpl_vars['claFormulario']->numTelefono2 ) != 0): ?> 
               <?php if (intval ( $this->_tpl_vars['claFormulario']->numTelefono1 ) != 0): ?>
                  ó
               <?php endif; ?>
               <?php echo $this->_tpl_vars['claFormulario']->numTelefono2; ?>

            <?php endif; ?>
         </div>
         <div style="width: 100px; float: left; padding: 2px; ">
            <strong>Celular</strong>
         </div>
         <div style="width: 245px; float: left; padding: 2px; ">
            <?php echo $this->_tpl_vars['claFormulario']->numCelular; ?>

         </div>
         
      </div>
      
      <!-- DATOS DEL FORMULARIO -->
      <div style="width:100%; text-align: left; font-size: 14px; border-bottom: 1px dotted #666666; padding: 3px;">
         <strong>Miembros de Hogar</strong>
      </div>
      <div style="width: 100%; padding: 10px; text-align: left;">
         <?php $_from = $this->_tpl_vars['claFormulario']->arrCiudadano; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqCiudadano'] => $this->_tpl_vars['objCiudadano']):
?>
            <?php $this->assign('seqTipoDocumento', $this->_tpl_vars['objCiudadano']->seqTipoDocumento); ?>
            <div style="width: 30%; float: left; padding: 2px; height:15px;">
               <?php echo $this->_tpl_vars['objCiudadano']->txtTipoDocumento; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->numDocumento; ?>

            </div>
            <div style="width: 35%; float: left; padding: 2px; height:15px;">
               <?php echo $this->_tpl_vars['objCiudadano']->txtNombre1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtNombre2; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido1; ?>
 <?php echo $this->_tpl_vars['objCiudadano']->txtApellido2; ?>

            </div>
            <div style="width: 30%; float: left; padding: 2px; height:15px;">
               <?php echo $this->_tpl_vars['objCiudadano']->txtParentesco; ?>

            </div>
         <?php endforeach; endif; unset($_from); ?>
      </div>
      
      <div style="width: 90%; padding: 10px; text-align: center;">
         <button type="submit" name="eliminar" value="1">
            Eliminar Registro
         </button>
      </div>   
      
      <input type="hidden" name="formulario" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
">
      
   </div>
 </form>