<!DOCTYPE html>
<html lang="es-pa">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--https://cdnjs.com/libraries/font-awesome-->
    <link rel="stylesheet" href="/PPP/CSS/stylemain.css" />
    <link rel="stylesheet" href="/PPP/CSS/acercade.css" />
    <link href="/PPP/script/f1move.js" />
    <link rel="icon" href="/PPP/images/CoolCat_Greg.png"> 
    <title>Bienvenido</title>

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

    <section class="f1-2023-highlight">
        <h1>Acerca de la Fórmula 1 en 2023</h1>
        <div class="highlight-content">
            <article class="race-highlights">
                <h2>Momentos destacados de las carreras</h2>
                <p>La temporada 2023 fue testigo de una de las luchas más cerradas por el título en años recientes, con múltiples pilotos compitiendo por la corona hasta las últimas carreras.</p>
            </article>
    
            <article class="team-performances">
                <h2>Rendimiento de los equipos</h2>
                <p>La sorpresa del año fue el ascenso de un equipo de mitad de tabla que desafió a los gigantes establecidos, demostrando que la estrategia y la innovación pueden cambiar las reglas del juego.</p>
            </article>
    
            <article class="technological-advancements">
                <h2>Avances tecnológicos</h2>
                <p>Este año introdujo avances significativos en tecnología de motores y aerodinámica, marcando un antes y un después en la eficiencia y la competencia ecológica en la F1.</p>
            </article>
    
            <article class="upcoming-talents">
                <h2>Talentos emergentes</h2>
                <p>Jóvenes promesas hicieron su debut este año, con actuaciones que prometen un futuro brillante y emocionante para los próximos años de F1.</p>
            </article>
        </div>
    </section>
    <section class="f1-driver-domination">
        <h1>Dominio de Max Verstappen y Checo Pérez en 2023</h1>
        <div class="driver-highlights">
            <article class="verstappen-success">
                <h2>La Temporada Estelar de Verstappen</h2>
                <p>Max Verstappen continuó su racha de éxito en 2023, asegurando múltiples victorias que cimentaron su posición como uno de los mejores pilotos en la historia de la F1.</p>
                <!-- Sugerencia de lugar para añadir una imagen -->
                 <img src="/PPP/images/pilots/MaxDriving.jpg" alt="Max Verstappen en acción" style="width:100%; height:auto;"> 
            </article>
    
            <article class="perez-contribution">
                <h2>El Impacto Crucial de Checo Pérez</h2>
                <p>Sergio 'Checo' Pérez no solo complementó el éxito de su compañero de equipo, sino que también desempeñó un papel clave en estrategias cruciales que llevaron a Red Bull a la victoria en numerosas ocasiones.</p>
                <!-- Sugerencia de lugar para añadir una imagen -->
                 <img src="/PPP/images/pilots/ChecoDriving.jpg" alt="Checo Pérez celebrando una victoria" style="width:100%; height:auto;">
            </article>
        </div>
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