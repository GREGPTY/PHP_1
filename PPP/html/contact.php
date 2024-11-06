<?php
$server = "localhost";
        $user = "root";
        $pass = "";
        $db = "pagept1";
        $connection = new mysqli($server, $user, $pass, $db);
        if ($connection->connect_error) {
            die("Connection Failed". $conection->connect_error);
        } else {
            echo "Connected";
        }
        ?>

<!DOCTYPE html>
<html lang="es-pa">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--https://cdnjs.com/libraries/font-awesome-->
    <link rel="stylesheet" href="/PPP/CSS/stylemain.css" />
    <link rel="stylesheet" href="/PPP/CSS/contact.css" />
    <link href="/PPP/script/f1move.js" />
    <link rel="icon" href="/PPP/images/images/CoolCat_Greg.png"> 
    <title>Contacto</title>


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
                <li><a href="/PPP/html/react.php">"ReactJS"</a></li>
                <li><a href="/PPP/html/logins_types.php">"Logins"</a></li>             
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
            <li><a href="/PPP/html/react.php">ReactJS</a></li>
            <li><a href="/PPP/html/logins_types.php">"Logins"</a></li>   
            <li><a href="/PPP/html/contact.php" class="action_btn">Contacto</a></li>
        </div>
        </header>
<main>
    <section class="contact-section">
        <div class="contact-container">
            <h1>Contacta con nosotros</h1>
            <div class="form-group">
            <form class="contact-form" id="contact-form" name="pagept1" method="post">            
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div></div>
            <button type="submit" name="register" id="btnEnviar" >Enviar Mensaje</button>
        </form>
    </div>
    </section>

</main>
    
    <?php
        //require("./phpback/mysql_contact_php.php");
       if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        }
        //if(0==0) {
            //echo'Dato añadido';
        $insertData = "INSERT INTO date VALUES('','$name','$email','$message', NOW())";
        $ejeInsert= mysqli_query($connection, $insertData);
        //}
        //else{
            //echo 'No se establecio la conexion';
        //}
    ?> 
    <!--<script>
    const form =document.getElementById("contact-form");
    form.addEventListener("submit", function(event){
        event.preventDefault();
        form.reset();
    })
    </script>-->

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
            const header = document-querySelector('.navbar');
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