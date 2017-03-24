<?php /* Smarty version 2.6.26, created on 2017-03-24 08:18:34
         compiled from actosAdministrativos/plantillaActoAdministrativo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ucwords', 'actosAdministrativos/plantillaActoAdministrativo.tpl', 15, false),)), $this); ?>
<div style="width: 100%; height: 400px; overflow: auto;">
   
   <table border="0" cellspacing="0" cellpadding="5">
      <tr>
         <td>
            Debe crear un archivo de texto plano, seprado por tabulaciones, <strong>CON TITULOS</strong>
            que tenga las siguientes columnas (coloque las columnas en estricto orden y con el tipo de dato que se indica):
         </td>
      </tr>
      <tr>
         <td>
            <ol>
               <?php $_from = $this->_tpl_vars['objTipoActo']->arrFormatoArchivo; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrCaracteristica']):
?>
                  <li>
                     <?php echo $this->_tpl_vars['arrCaracteristica']['nombre']; ?>
 [ <?php echo ((is_array($_tmp=$this->_tpl_vars['arrCaracteristica']['tipo'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
 ]
                     <?php if (isset ( $this->_tpl_vars['arrCaracteristica']['rango'] ) && ! empty ( $this->_tpl_vars['arrCaracteristica']['rango'] )): ?>
                        <br>Este campo tiene un rango de valores válidos:
                        <ul>
                           <?php $_from = $this->_tpl_vars['arrCaracteristica']['rango']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txtRango']):
?>
                              <li><?php echo ((is_array($_tmp=$this->_tpl_vars['txtRango'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</li>
                           <?php endforeach; endif; unset($_from); ?>   
                        </ul>
                     <?php endif; ?>
                  </li>
               <?php endforeach; endif; unset($_from); ?>
            </ol>
         </td>
      </tr>
      <tr>
         <td>Use los identificadores de los estados tomando el que corresponda de la tabla que sigue:
            <?php if ($this->_tpl_vars['objTipoActo']->seqTipoActo == 4): ?>
               <ul>
                  <?php $_from = $this->_tpl_vars['arrEstadosReposicion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqEstado'] => $this->_tpl_vars['txtEstado']):
?>
                     <li>[<?php echo $this->_tpl_vars['seqEstado']; ?>
] <?php echo $this->_tpl_vars['txtEstado']; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
               </ul>
            <?php endif; ?>
         </td>
      </tr>
   </table>
            
</div>