<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#fafafa"/>
    <title>Sabor Casero</title>
  </head>
  <body>
    <div class="container__pagina">
      <header class="header">
        <form class="header__form" action="loguear.php" method="POST"><img class="header__logo" src="assets/img/svg/logo.svg" alt=""/>
          <article class="header__inputs">
            <label class="header__login">LOGIN</label>
            <input class="input__user" type="text" name="user" placeholder="Email"/>
            <input class="input__pass" type="password" name="clave" placeholder="contraseña"/>
            <button class="input__buton" type="submit">Entrar</button>
          </article>
        </form>
        <section class="header__titulos"> 
          <h1 class="header__titulo">El sabor CASERO</h1>
          <h1 class="header__titulo2">Menús a domicilio</h1>
          <hr class="linea__division"/>
        </section>
      </header>
      <main class="main">
        <div class="main__index">
        <img src="assets/img//svg/advertencia.svg" alt="">
          <h4 class="main__titulo">Error! Los datos introducidos no son correctos, prueba de nuevo!</h4>
          
         

        </div>
      </main>
      <footer class="footer">  
        <hr class="linea__division__footer"/>
        <ul class="footer__logo"> 
          <li><img class="footer__logo_img" src="assets/img/svg/logo.svg" alt=""/></li>
          <li>
            <h4>El sabor CASERO</h4>
          </li>
        </ul>
        <ul class="footer__contact">
          <h3>El sabor CASERO</h3>
          <li>C/ Pascual, 25 Bajos, Marratxi</li>
          <li>Tel. 655858585</li>
          <li>info@saborcasero.es</li>
        </ul>
        <ul class="footer__redes">
          <h3>Síguemos en redes sociales:</h3>
          <li><a href="facebook/saborcasero"><img class="logo__face" src="assets/img//svg/logo_facebook.svg" alt=""/></a><a href="instagram/saborcasero"><img class="logo__insta" src="assets/img//svg/logo_insta.svg" alt=""/></a><a href="twitter/saborcasero"><img class="logo__twi" src="assets/img//svg/logo_twitter.svg" alt=""/></a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>