<!DOCTYPE html>
<html>
  <head>
    <?php include_once('class/class.pkmn.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PKMN Get - Home</title>
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
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
              <a href="/index.php" class="brand-logo center"> <img style="margin-bottom: 3px;margin-right: -3px;" alt="Logo" src="img\favicon.ico"> PKMN Get</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="left hide-on-med-and-down">
                <li class="active"><a href="/index.php"><i class="material-icons left">home</i>Index</a></li>
                <li><a href="/overview.php?offset=-21&order=1"><i class="material-icons left">view_module</i>Pokémon</a></li>
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
            <div class="col s12">
                <div class="card darken-1">
                     <div class="card-content">
                         <span class="card-title">PKMN Get</span>
                          <?php searchPokemon(); ?>
                          <form id="searchPokemon" method="POST">
                            <div class="input-field col s6">
                              <i class="material-icons prefix">search</i>
                              <input id="icon_prefix" name="pokemon" type="text" class="validate" required>
                              <label for="icon_prefix">Pokémon</label>
                            </div>
                            <div class="col s6">
                              <img src="img/logo.png" style="margin-top: -30px;" class="responsive-img right" width="30%">
                            </div>
                            <br/><br/><br/><br/>
                          </form>
                      </div>
                      <div class="card-action">
                        <button type="submit" form="searchPokemon" id="submit" name="submit" class="btn waves-effect left" style="margin-top: 5px;"><i class="material-icons left">search</i>Search</button>
                        <a class="btn waves-effect right" style="margin-top: 5px;" href="/overview.php"><i class="material-icons left">view_module</i>Overview</a><br/><br/>
                     </div>
              </div>
              <br/><br/>
            </div>
          </div>
        </div>
    </main>
    <footer class="page-footer green accent-3">
      <div class="container">
        <div class="row">
          <div class="col l4 hide-on-small-only">
            <h5 class="white-text">PKMN Get</h5>
            <p class="grey-text text-lighten-4">Search Pokémons, find data<br/>and become the best PKMN Trainer!</p>
          </div>
          <div class="col l3 s6">
            <h5 class="white-text">Sitemap</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="/index.php">Index</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Overview</a></li>
            </ul>
          </div>
          <div class="col l3 s6">
            <h5 class="white-text">Contact</h5>
            <ul>
              <li style="height: 30px;"><i class="small material-icons grey-text text-lighten-3 left">email</i><a class="grey-text text-lighten-3 left" href="mailto:contact@pkmnget.com" style="margin-top: 4px;"> contact@pkmnget.com</a></li>
              <li style="height: 30px;"><i class="small material-icons grey-text text-lighten-3 left">phone</i><a class="grey-text text-lighten-3 left" style="margin-top: 4px;"> 06 12345678</a></li>
              <li style="height: 30px;"><i class="small material-icons grey-text text-lighten-3 left">thumb_up</i><a class="grey-text text-lighten-3 left" href="https://www.facebook.com" style="margin-top: 4px;"> Facebook</a></li>
            </ul>
          </div>
        </div>
      </div>
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
