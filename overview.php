<!DOCTYPE html>
<html>
  <head>
    <?php include_once('class/class.pkmn.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PKMN Get - Overview</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Roboto" rel="stylesheet">
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

  </head>
  <body>
    <header>
      <div class="navbar-fixed">
        <nav class="green accent-3">
          <div class="nav-wrapper">
            <div class="container">
              <a href="#!" class="brand-logo center"> <img style="margin-bottom: 3px;margin-right: -3px;" alt="logo" src="img/favicon.ico"> PKMN Get</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="left hide-on-med-and-down">
                <li><a href="/index.php"><i class="material-icons left">home</i>Index</a></li>
                <li class="active"><a href="/overview.php?offset=-21&order=1"><i class="material-icons left">view_module</i>Pokémon</a></li>
              </ul>
              <ul class="right hide-on-med-and-down">
                <audio id="player" src="img/pkmnrap.mp3" autostart="0" onload="document.getElementById('player').volume=0.3;"></audio>
                <li id="play" onclick="document.getElementById('player').play(); document.getElementById('play').style.display='none'; document.getElementById('pause').style.display='block';" style=""><a href="#"><i class="material-icons left">volume_up</i></a></li>
                <li id="pause" onclick="document.getElementById('player').pause(); document.getElementById('play').style.display='block'; document.getElementById('pause').style.display='none';" style="display: none;"><a href="#"><i class="material-icons left">volume_mute</i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main id="page-wrap">
      <div class="container">
    		<div class="row">
          <?php showPokemons(); ?>
    		</div>
	     </div>
    </main>
    <footer class="page-footer green accent-3" style="padding-top: 0!important;">
      <div class="footer-copyright">
        <div class="container">
        &copy; 2016 PKMN Get - All rights reserved
        <text class="grey-text text-lighten-4 right" href="#!"><text style="color: red;">♥</text> Created by Jesse</text>
        </div>
      </div>
    </footer>

    <!--JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
