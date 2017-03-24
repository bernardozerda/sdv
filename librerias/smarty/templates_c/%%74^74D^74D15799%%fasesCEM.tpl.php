<?php /* Smarty version 2.6.26, created on 2017-03-21 07:45:42
         compiled from casaMano/fasesCEM.tpl */ ?>

<form id="frmBusquedaOferta" onSubmit="return false;">

   <?php $this->assign('txtFlujo', $this->_tpl_vars['arrFlujoHogar']['flujo']); ?>
   <?php $this->assign('txtFase', $this->_tpl_vars['arrFlujoHogar']['fase']); ?>

   <!-- PEDIR LOS SEGUIMIENTOS -->
   <div id="pedirSeguimiento" style="width:98%; padding-bottom:5px; text-align: right;">

       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "subsidios/pedirSeguimiento.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

       <table cellspacing="0" cellpadding="2" border="0" width="100%" bgcolor="#E4E4E4">
        <tr>
            <?php if ($this->_tpl_vars['arrFlujoHogar']['fase'] == 'revisionJuridica' || $this->_tpl_vars['arrFlujoHogar']['fase'] == 'revisionTecnica'): ?>
              <td width="120px" class="tituloTabla">
                 Concepto Final
              </td>
              <td style="width:260px;">
                 <select name="txtConcepto" style="width:250px;">
                    <option value="" selected>SELECCIONE UNA OPCION</option>
                    <option value="0" <?php if ($this->_tpl_vars['numConcepto'] == 0): ?> selected <?php endif; ?>>En Proceso</option>
                    <option value="1" <?php if ($this->_tpl_vars['numConcepto'] == 1): ?> selected <?php endif; ?>>Viabilizado</option>
                    <option value="2" <?php if ($this->_tpl_vars['numConcepto'] == 2): ?> selected <?php endif; ?>>No viabilizado</option>
                 </select>
              </td>  
            <?php else: ?>
               <td width="120px" class="tituloTabla">&nbsp;</td>
               <td style="width:260px;">&nbsp;</td>  
            <?php endif; ?>
            
            <?php if ($this->_tpl_vars['txtImprimir'] != ""): ?>
               <td>
                  <a href="#" onClick="<?php echo $this->_tpl_vars['txtImprimir']; ?>
" targuet="new">
                     Imprimir
                  </a>
               </td>
            <?php else: ?>
               <td>&nbsp;</td>
            <?php endif; ?>
            
            <?php if ($this->_tpl_vars['bolModificar'] == 1): ?>
                <td align="right">
                        <input type="submit"
                               value="Salvar Gesti&oacute;n"
                               onClick="someterFormulario(
                                           'mensajes', 
                                           this.form, 
                                           './contenidos/casaMano/pedirConfirmacion.php', 
                                           false, 
                                           true 
                                       )" 
                        />

                    <input type="hidden" name="seqFormulario" value="<?php echo $this->_tpl_vars['seqFormulario']; ?>
">
                    <input type="hidden" name="seqCasaMano"   value="<?php echo $this->_tpl_vars['seqCasaMano']; ?>
">
                    <input type="hidden" name="txtFlujo"      value="<?php echo $this->_tpl_vars['txtFlujo']; ?>
">
                    <input type="hidden" name="txtFase"       value="<?php echo $this->_tpl_vars['txtFase']; ?>
">
                    <input type="hidden" name="cedula"        value="<?php echo $this->_tpl_vars['cedula']; ?>
">
                </td>
            <?php endif; ?>
        </tr>
       </table>
   </div>    

   <!-- PLANTILLAS DE CASA FASE DE CASA EN MANO -->
   <div id="plantilla" style="width:98%; height:500px;">
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['claFlujoDesembolsos']->arrFases[$this->_tpl_vars['txtFlujo']][$this->_tpl_vars['txtFase']]['plantilla'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
   </div>

</form>