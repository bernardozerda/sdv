<?php /* Smarty version 2.6.26, created on 2017-03-07 15:10:04
         compiled from subsidios/actosUnidades.tpl */ ?>
<ul>
	<?php $_from = $this->_tpl_vars['arrActosAsociados']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqUnidadActo'] => $this->_tpl_vars['arrActo']):
?>
		<li><b>Resolución de Indexaci&oacute;n </b><?php echo $this->_tpl_vars['arrActo']['numActo']; ?>
 de <?php echo $this->_tpl_vars['arrActo']['fchActo']; ?>
</li>
		<ul style="padding-right:25px; text-align:justify"><b>Descripci&oacute;n: </b><?php echo $this->_tpl_vars['arrActo']['txtDescripcion']; ?>
</ul>
		<ul style="padding-right:25px; text-align:justify"><b>Valor Indexado: </b>$ <?php echo $this->_tpl_vars['arrActo']['valIndexado']; ?>
</ul><br>
	<?php endforeach; endif; unset($_from); ?>
</ul>