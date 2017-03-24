<?php /* Smarty version 2.6.26, created on 2017-03-21 10:11:31
         compiled from desembolso/pedirConfirmacion.tpl */ ?>

	<?php if ($this->_tpl_vars['bolMostrarConfirmacion'] == true): ?>
		<div id="dlgConfirmacionDesembolso" style="visibility: hidden; height: 1px;">
			<div class="hd">Se solicita atención del usuario...</div>
			<div class="bd" style="text-align:center">
				<form method="POST" action="<?php echo $this->_tpl_vars['txtArchivo']; ?>
">
               <p><?php echo $this->_tpl_vars['txtMensaje']; ?>
</p>
					<?php $_from = $this->_tpl_vars['arrPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txtClave'] => $this->_tpl_vars['txtValor']):
?>
						<?php if (! is_array ( $this->_tpl_vars['txtValor'] )): ?>
							<input type="hidden" name="<?php echo $this->_tpl_vars['txtClave']; ?>
" value="<?php echo $this->_tpl_vars['txtValor']; ?>
">
						<?php else: ?>
                            
                            <?php if (isset ( $this->_tpl_vars['arrPost']['hogar'] )): ?>
                                <?php $_from = $this->_tpl_vars['arrPost']['hogar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['numDocumento'] => $this->_tpl_vars['arrCiudadano']):
?>
                                    <?php $_from = $this->_tpl_vars['arrCiudadano']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txtClave'] => $this->_tpl_vars['txtValor']):
?>
                                        <input type="hidden" name="hogar[<?php echo $this->_tpl_vars['numDocumento']; ?>
][<?php echo $this->_tpl_vars['txtClave']; ?>
]" value="<?php echo $this->_tpl_vars['txtValor']; ?>
">
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php else: ?>
                                <?php $_from = $this->_tpl_vars['txtValor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['arreglo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['arreglo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['txtVariable']):
        $this->_foreach['arreglo']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['txtClave'] != 'hogar'): ?>
                                        <input type="hidden" name="<?php echo $this->_tpl_vars['txtClave']; ?>
[]" value="<?php echo $this->_tpl_vars['txtVariable']; ?>
">
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
               <input type="hidden" name="bolBorrar" id="bolBorrar" value="0">
				</form>
			</div>
		</div>
		<div id="dlgConfirmacionDesembolsoListener"></div>
	<?php endif; ?>