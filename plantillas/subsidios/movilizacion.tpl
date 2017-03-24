<div id="financiera" style="height:407px;"><p>
    <table cellpadding="1" cellspacing="0" border="0" width="100%" bgcolor="#FFFFFF" height='50%'>
        <tr>
            <td colspan="4"><p><br><div class="msgError"><li>Este ciudadano no existe o no está vinculado a un hogar</li></div></p><br></td>
        </tr>        
        <tr>           
            <td width="30%" style="text-align: center">Nombre de Ciudadano(a)</td>
            <td colspan="3" width="70%" >
                <input	type="text" 
                       name="namePostulado1" 
                       id="valPostulado1" 
                       value="{$nombrePostulante}"
                       onfocus="this.style.backgroundColor = '#ADD8E6';"
                       onblur="soloLetras(this);
                               this.style.backgroundColor = '#FFFFFF';"
                       size="60" 
                       />
            </td>
        </tr>        
        <tr>
            <!-- TIENE OTRO AHORRO -->                                    

            <!-- BANCO DONDE TIENE EL AHORRO -->
            <td width="10%" align="center"><input type="radio" value="3" name="radio" id="radio_3"> Otra Entidad</td>
            <td align="left" width="320px">
                <select onFocus="this.style.backgroundColor = '#ADD8E6';" 
                        onBlur="this.style.backgroundColor = '#FFFFFF';"  
                        name="seqBancoCuentaAhorro_3" 
                        id="seqBancoCuentaAhorro_3" 
                        style="width:300px;"
                        >
                    <option value="1">Ninguno</option>
                    {foreach from=$arrBanco key=seqBanco item=txtBanco}
                        <option value="{$seqBanco}"
                                {if $objFormulario->seqBancoCuentaAhorro2 == $seqBanco} selected {/if}
                                >{$txtBanco}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center" ><br>

                <div onclick="confirmarCartaMovilizacion({$numDocumento}, 2)" style="width:70px; text-align: center; border: 1px solid #000; background: #F5F5F5; position: relative; left: 44% ">
                    <img src="./recursos/imagenes/pdf.gif" width="25px" height="25px"><br>
                    <span style="font-size: 10px; font-weight: bold;">Exportar <br>a PDF</span>
                </div>
            </td>
        </tr>				        		
    </table>
</p></div>