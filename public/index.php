<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>dondealquilo</title>

  <!-- CSS  -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- google-fonts-icons  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <!-- materialize.css -->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  
</head>
<body>
  <nav class="blue accent-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">dondealquilo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
<h4 class="blue-grey-text">ingrese una ciudad</h4>
  <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
      
      <div class="row center">
        <h5 class="header col s12 light">Nuestros agentes en cada ciudad tienen el sitio ideal para tus vacaciones.</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">ver agentes</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">
    <h4 class="blue-grey-text">destacados: 
 <?php
    setlocale(LC_ALL, 'spanish').': ';
    echo iconv('ISO-8859-1', 'UTF-8', strftime('%B de %Y', time()));
    ?>
  </h4>
      <!--   Icon Section   -->
      <div class="row">

 <div class="row">
    <div class="col s12 m4">
      <div class="card">
            <div class="card-image">
                <img src="img/colon.jpg">
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">Depto. 8pers.<br>Colon, E.Rios</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
      <div class="col s12 m4">
      <div class="card">
            <div class="card-image">
                <img src="img/mar-del-plata.jpg">
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">casa 10pers.<br>Mar del Plata</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
      <div class="col s12 m4">
     <div class="card">
            <div class="card-image">
                <img src="img/miramar.jpg">
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
                <span class="card-title">duplex 5pers.<br>Miramar, Bs.As.</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
  </div>


        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


<a class="btn-floating pulse"><i class="material-icons">menu</i></a>
<a class="btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
<a class="btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>
      
     

  <!--  Scripts-->
   <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>