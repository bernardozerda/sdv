
<div id="menu" class="yuimenubar yuimenubarnav">
	<div class="bd">
	    <ul class="first-of-type">
	    	{foreach name=menuPrincipal from=$arrMenu key=seqPadre item=objPadre}
	    		<li class="yuimenubaritem first-of-type">
	    			<a class="yuimenubaritemlabel" href="#menu-{$objPadre->txtEspanol}"
	    				{if $objPadre->txtEspanol|lower == 'inicio' }
	    					onClick="location.reload(true);"
	    				{else}
	    					onClick="cargarContenido( 'contenido' , './contenidos/{$objPadre->txtCodigo}.php' , '' , true ); cargarContenido( 'rutaMenu' , './rutaMenu.php' , 'menu={$seqPadre}' , false );"
	    				{/if}
	    			>{$objPadre->txtEspanol}</a>
					{if not empty( $objPadre->hijos ) }
						<div id="menu-{$objPadre->txtEspanol}" class="yuimenu">
				            <div class="bd">
				                <ul>
									{foreach from=$objPadre->hijos key=seqHijo item=objHijo}
										<li class="yuimenuitem">
											<a class="yuimenuitemlabel" href="#menu-{$objHijo->txtEspanol}" 
												onClick="cargarContenido( 'contenido' , './contenidos/{$objHijo->txtCodigo}.php' , '' , true ); cargarContenido( 'rutaMenu' , './rutaMenu.php' , 'menu={$seqHijo}' , false );"
											>{$objHijo->txtEspanol}</a>
										</li>
									{/foreach}
								</ul>
							</div>
						</div>
					{/if}
	    		</li>
	    	{/foreach}
		</ul>
	</div>
</div>

