<?php /* Smarty version 2.6.26, created on 2017-03-13 09:31:38
         compiled from calificacion/calificacionFormularios.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'calificacion/calificacionFormularios.tpl', 28, false),array('modifier', 'lower', 'calificacion/calificacionFormularios.tpl', 28, false),array('modifier', 'ucwords', 'calificacion/calificacionFormularios.tpl', 28, false),array('modifier', 'utf8_encode', 'calificacion/calificacionFormularios.tpl', 28, false),array('modifier', 'number_format', 'calificacion/calificacionFormularios.tpl', 31, false),)), $this); ?>
<center>
    <form enctype="multipart/form-data" method="POST" id="frmCalificacionHogares"><table cellpadding="2" cellspacing="0" border="0" width="50%">
            <tr><td colspan="2" bgcolor="#E4E4E4" class="tituloTabla" align="center" width="250px">Carga de documentos a calificar</td></tr>
            <tr><td><b>Seleccione el archivo:</b><br>En el archivo plano debe ir la lista de los documentos sin encabezado </td><td valign="top"><input type="file" name="fileDocumentos" /></td></tr>
            <tr>
                <td colspan="2" align="right">
                    <br><input  type="button" 
                                value="Proceder a Calificar" 
                                onClick="someterFormulario(
                                        'mensajes',
                                        this.form,
                                        './contenidos/calificacion/calificacionPlan2.php',
                                        true,
                                        true
                                        );
                                "
                                />
                </td></tr>
        </table></form>
    <br>
    <!--<table cellpadding="2" cellspacing="0" border="0" width="50%">
        <tr>
            <td bgcolor="#E4E4E4" class="tituloTabla" align="center" width="250px">Modalidad</td>
            <td bgcolor="#E4E4E4" class="tituloTabla" align="center">Total</td>
        </tr>
        <?php $_from = $this->_tpl_vars['arrModalidad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seqModalidad'] => $this->_tpl_vars['txtModalidad']):
?>
            <tr>
                <td style="border-bottom: 1px dotted #999999;"><b><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['txtModalidad'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)))) ? $this->_run_mod_handler('utf8_encode', true, $_tmp) : utf8_encode($_tmp)); ?>
</b></td>
                <td align="center" style="border-bottom: 1px dotted #999999;">
                    <?php if ($this->_tpl_vars['arrTotales']['0']['modalidad'][$this->_tpl_vars['seqModalidad']]): ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arrTotales']['0']['modalidad'][$this->_tpl_vars['seqModalidad']])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

                    <?php else: ?>
                        0
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
            <td class="tituloTabla">Total</td>
            <td bgcolor="#E4E4E4" align="center" style="border-bottom: 1px dotted #999999;">
                <?php if ($this->_tpl_vars['arrTotales']['0']['total']): ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['arrTotales']['0']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, '.', ',') : number_format($_tmp, 0, '.', ',')); ?>

                <?php else: ?>
                    0
                <?php endif; ?>
            </td>
        </tr>
    </table>-->
    <br>
    <div style="height:380px; overflow-y:scroll;"><table cellpadding="2" cellspacing="0" border="1" width="50%">
            <tr>
                <td bgcolor="#E4E4E4" align="center" width="250px"><b>Fecha Calificación</b></td>
                <td bgcolor="#E4E4E4" align="center"><b>Total Calificados</b></td>
            </tr>
            <?php $_from = $this->_tpl_vars['arrFchCalifica']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fechaCalificacion'] => $this->_tpl_vars['cuantos']):
?>
                    <!-- <a href="contenidos/calificacion/pdfCalifica.php?fchCal=<?php echo $this->_tpl_vars['fechaCalificacion']; ?>
" target='_blank'>PDF</a>&nbsp; -->
                <tr><td style="border-bottom: 1px dotted #999999;" align="center"><b><?php echo $this->_tpl_vars['fechaCalificacion']; ?>
</b>&nbsp;<a href="contenidos/calificacion/xlsCalifica.php?fchCal=<?php echo $this->_tpl_vars['fechaCalificacion']; ?>
" target='_blank'>XLS</a></td>
                    <td style="border-bottom: 1px dotted #999999;" align="center"><?php echo $this->_tpl_vars['cuantos']; ?>
</td></tr>
                <?php endforeach; endif; unset($_from); ?>
        </table></div>
</center>