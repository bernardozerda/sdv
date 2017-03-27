<?php /* Smarty version 2.6.26, created on 2017-03-07 15:09:56
         compiled from menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'menu.tpl', 8, false),)), $this); ?>

<div id="menu" class="yuimenubar yuimenubarnav">
	<div class="bd">
	    <ul class="first-of-type">
	    	<?php $_from = $this->_tpl_vars['arrMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menuPrincipal'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menuPrincipal']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['seqPadre'] => $this->_tpl_vars['objPadre']):
        $this->_foreach['menuPrincipal']['iteration']++;
?>
	    		<li class="yuimenubaritem first-of-type">
	    			<a class="yuimenubaritemlabel" href="#menu-<?php echo $this->_tpl_vars['objPadre']->txtEspanol; ?>
"
	    				<?php if (((is_array($_tmp=$this->_tpl_vars['objPadre']->txtEspanol)) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'inicio'): ?>
	    					onClick="location.reload(true);"
	    				<?php else: ?>
	    					onClick="cargarContenido( 'contenido' , './contenidos/<?php echo $this->_tpl_vars['objPadre']->txtCodigo; ?>
.php' , '' , true ); cargarContenido( 'rutaMenu' , './rutaMenu.php' , 'menu=<?php echo $this->_tpl_vars['seqPadre']; ?>
' , false );"
	    				<?php endif; ?>
	    			><?php echo $this->_tpl_vars['objPadre']->txtEspanol; ?>
</a>
					<?php if (! empty ( $this->_tpl_vars['objPadre']->hijos )): ?>
						<div id="menu-<?php echo $this->_tpl_vars['objPadre']->txtEspanol; ?>
" class="yuimenu">
				            <div class="bd">
				                <ul>
									<?php $_from = $this->_tpl_vars['objPadre']->hijos; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqHijo'] => $this->_tpl_vars['objHijo']):
?>
										<li class="yuimenuitem">
											<a class="yuimenuitemlabel" href="#menu-<?php echo $this->_tpl_vars['objHijo']->txtEspanol; ?>
" 
												onClick="cargarContenido( 'contenido' , './contenidos/<?php echo $this->_tpl_vars['objHijo']->txtCodigo; ?>
.php' , '' , true ); cargarContenido( 'rutaMenu' , './rutaMenu.php' , 'menu=<?php echo $this->_tpl_vars['seqHijo']; ?>
' , false );"
											><?php echo $this->_tpl_vars['objHijo']->txtEspanol; ?>
</a>
										</li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
	    		</li>
	    	<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
</div>
