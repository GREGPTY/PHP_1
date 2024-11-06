
<!DOCTYPE html>
<html lang="es-pa">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--https://cdnjs.com/libraries/font-awesome-->
    <link rel="stylesheet" href="/PPP/CSS/stylemain.css" />
    <link rel="stylesheet" href="/PPP/CSS/nas.css">
    <link href="/PPP/script/f1move.js" />
    <link rel="icon" href="/PPP/images/CoolCat_Greg.png"> 
    <title>Nascar</title>

</head>
    <body>
        <header>
        <div class="navbar">
            <div class="logo"><!--<a href="#">Web Dev Creative</a>-->
            <a href="/PPP/index.php"><img src="/PPP/images/CoolCat_Greg.png" alt="" href="index.php"></a>
            </div>
            <nav class="navigation">
            <ul class="links">
                <li><a href="/PPP/index.php">Inicio</a></li>  
                <li><a href="/PPP/html/info.php">Equipos de F1</a></li>
                <li><a href="/PPP/html/acercade.php">Acerca de</a></li>
                <li><a href="/PPP/html/pruebashtml.php">"Pagina de Pruebas"</a></li>
                <li><a href="/PPP/html/logins_types.php">"Logins"</a></li> 
                <li><a href="/PPP/html/nascar.php">"Nascar"</a></li>             
            </ul>
        </nav>
        <a href="/PPP/html/contact.php" class="action_btn">Contacto</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="/PPP/index.php">Inicio</a></li>            
            <li><a href="/PPP/html/info.php">Equipos de F1</a></li>
            <li><a href="/PPP/html/acercade.php">Acerca de</a></li>
            <li><a href="/PPP/html/pruebashtml.php">"Pagina de Pruebas"</a></li>
            <li><a href="/PPP/html/logins_types.php">"Logins"</a></li> 
            <li><a href="/PPP/html/nascar.php">"Nascar"</a></li>   
            <li><a href="/PPP/html/contact.php" class="action_btn">Contacto</a></li>
        </div>
        </header>
<main>
    <section class="L1">
        <table id="table_nascar" class="table_nascar" name="table_nascar">
            <tr class="titulo_tabla">
                <th colspan="4"> Calculadora de Posiciones</th>
            </tr>
            <tr>
                <td>
                    <!--<div class="form-group">-->
                    <form class="dato_cascar_r" id="dato_cascar_r" name="datos_nascar_r" method="post">
                    <class="form-group"> <!--caballos de fuerza-->
                            <label for="cv"></label>
                            <p>Caballos de Fuerza<br></p>
                            <input type="number" name="CaballosDeFuerza" class="CaballosDeFuerza" required="">
                    </td>    
                        <td>           
                        </div>
                        <div class="form-group"><!--Posicion I-->
                            <label for="pi"></label>
                            <p>Puesto Inicial<br></p>
                            <input type="number" id="pi" name="PosicionInicial" class="nas" required>
                        </div>
                        </td><td>
                        <div class="form-group"><!--habilidad del piloto-->
                            <label for="hbdp"></label>
                            <p>Habilidad del Piloto <br></p>
                            <input type="number" id="hbdp" name="HabilidadDelPiloto" class="nas" required>
                        </div></td>
                    <!--</div>-->
                </tr>
                        <tr>
                            <td></td>
                            <td class="botton_datnas">
                            <button type="submit" name="datos_nascar" id="btnEnviar" class="action_btn">Realizar Calculo</button>
                            </td>
                            <td></td>
                        </tr>

                    </form>
                </td>
            </tr>
            <tr><td colspan="3">
                <?php
                if(isset($_POST['datos_nascar']))
                {                     
                    //require_once("../phpback/nascar_back.php");
                    require_once("../phpback/NascarBack.php");
                    $participante = new NascarBack($_POST['HabilidadDelPiloto'],$_POST['PosicionInicial'],$_POST['CaballosDeFuerza']);
                    //$participante->construct($_POST['HabilidadDelPiloto'],$_POST['PosicionInicial'],$_POST['CaballosDeFuerza']);                                      
                        if(!($_POST['HabilidadDelPiloto']==0 || $_POST['PosicionInicial'] ==0 || $_POST['CaballosDeFuerza']==0)){
                            echo $participante->porcentajeAceptable();}
                        if(!($_POST['HabilidadDelPiloto']==0 || $_POST['CaballosDeFuerza']==0)){
                            echo $participante->agregarPosicion();
                        }
                    }
                ?> </td>
            </tr>
        </table>
    </section>   

    <section class="L1">
        <table class="table_nascar">
            <tr>
                <td class="ConversionDeMoneda" colspan="3"><h1>Conversion de moneda</h1></td>
            </tr>
            <tr>
                <td><p><strong>Moneda de origen</strong></p></td>                
                <td><p>Introduzca Monto</p></td>           
                <td><p>Moneda a convertir</p></td>
            </tr>
            <tr>
                <td><select id="MonedaOrigenSeleccionada">
                    <option value="COCR">Colones de Costa Rica</option>
                    <option value="YENES">Yenes (Japón)</option>
                    <option value="MEXD">Pesos Mexicanos</option>
                    <option value="USD">Dólares Americanos</option>
                </select></td>
                <td><input id="Cantidad" type="number"></td>
                <td><select id="MonedaDestinoeleccionada">
                    <option value="COCR">Colones de Costa Rica</option>
                    <option value="YENES">Yenes (Japón)</option>
                    <option value="MEXD">Pesos Mexicanos</option>
                    <option value="USD">Dólares Americanos</option>
                </select></td>                
            </tr>
            <tr>
                <td colspan="3"><button id="ConversionBoton" class="ConversionBoton">Convertir</button></td>
            </tr>
            <tr>
            <td colspan="3"><p><span id="Resultado"></span></p></td>
                <script src="../js/CambioDeMonedaD.js"></script>
            </tr>
        </table>
    </section>

</main>



<script>
    const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('.toggle_btn i')
    const dropDownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        //<!--El propósito del operador de signo de interrogación ? es para devolver un valor u otro dependiendo de su condición.-->
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
    }
    document.addEventListener('scroll', () =>{
            const header = document.querySelector('.navbar');
            if (window.scrollY >0){
                header.classList.add('active')
            }else{
                header.classList.remove('active');
            }
        })
</script>

</body>

<footer>
    <div class="footer-container">
      <ul class="footer-links">
        <li><a href="https://www.linkedin.com/in/greg-torres-447881218/" target="_blank"><i class="fab fa-linkedin social-icons"></i> LinkedIn</a></li>
        <li><a href="https://github.com/GREGPTY" target="_blank"><i class="fab fa-github social-icons"></i> GitHub</a></li>
        <li><a href="https://www.instagram.com/greg_sproul/" target="_blank"><i class="fab fa-instagram social-icons"></i> Instagram</a></li>
      </ul>
      <div class="footer-bottom-text">
        &copy; 2024 Greg Torres. Todos los derechos reservados.
      </div>
    </div>
  </footer>

</html>