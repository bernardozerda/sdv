<?php /* Smarty version 2.6.26, created on 2017-03-30 11:43:22
         compiled from ayuda/ayuda.tpl */ ?>

<div style="width:100%; height:<?php echo $this->_tpl_vars['numAlto']; ?>
; overflow: auto;">
   
   <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#FFFFFF">
      <tr>
         <td style="padding:10px; font-size: 20px; font-weight:bold; " valign="middle" align="center">
            Men&uacute; de ayuda para el sistema de informaci&oacute;n del proceso de Definición y 
            ejecución de los instrumentos de financiación para el acceso a la vivienda.
         </td>
      </tr>
      <tr>
         <td colspan="2" height="20px;" class="tituloVerde">
            Descripci&oacute;n
         </td>
      </tr>
      <tr>
         <td colspan="2" height="20px;" style="padding:20px;">
            A continuaci&oacute;n encontrar&aacute; los &iacute;tems principales del men&uacute; que 
            contiene el sistema de informaci&oacute;n. Para ver la ayuda de cada uno de los men&uacute;s 
            debe dar click en el nombre del men&uacute; para que despliegue la descripci&oacute;n del men&uacute; y 
            los sub men&uacute; que tenga dentro de cada opci&oacute;n. Dentro de cada opci&oacute;n de sub men&uacute;, tambi&eacute;n 
            puede hacer click para ver la descripci&oacute;n y gu&iacute;a de uso de cada uno de las opciones.
         </td>
      </tr>
   </table>
   
   
   <?php $_from = $this->_tpl_vars['arrMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqMenu'] => $this->_tpl_vars['objMenu']):
?>
      <ul>
         <li style="cursor:hand;">
            
            <div onClick="mostrarOcultar('<?php echo $this->_tpl_vars['objMenu']->txtEspanol; ?>
')">
               <strong><?php echo $this->_tpl_vars['objMenu']->txtEspanol; ?>
</strong>
            </div>
            
            <?php if (! empty ( $this->_tpl_vars['objMenu']->arrHijos )): ?>
               <div id="<?php echo $this->_tpl_vars['objMenu']->txtEspanol; ?>
" style="display:none">
                  <?php if ($this->_tpl_vars['objMenu']->txtAyuda != ""): ?>
                     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['objMenu']->txtAyuda, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php endif; ?>
                  <ul>
                     <?php $_from = $this->_tpl_vars['objMenu']->arrHijos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['objHijo']):
?>
                        <li>
                           <div onClick="mostrarOcultar('<?php echo $this->_tpl_vars['objHijo']->txtEspanol; ?>
')">
                              <strong><?php echo $this->_tpl_vars['objHijo']->txtEspanol; ?>
</strong><br>
                           </div>
                           <?php if ($this->_tpl_vars['objHijo']->txtAyuda != ""): ?>
                              <div id="<?php echo $this->_tpl_vars['objHijo']->txtEspanol; ?>
" style="display:none">
                                 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['objHijo']->txtAyuda, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                              </div>
                           <?php endif; ?>
                        </li>
                     <?php endforeach; endif; unset($_from); ?>
                  </ul>
               </div>
            <?php endif; ?>   
         </li>
      </ul>
      
   <?php endforeach; endif; unset($_from); ?>   
</div>