<!DOCTYPE html>
<html>
  <head>
    <?php include_once('class/class.pkmn.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PKMN Get - <?php getNameTitle(); ?></title>
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Roboto" rel="stylesheet">
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>

  </head>
  <body>
    <header>
      <div class="navbar-fixed">
        <nav class="green accent-3">
          <div class="nav-wrapper">
            <div class="container">
              <a href="#!" class="brand-logo center"> <img style="margin-bottom: 3px;margin-right: -3px;" src="img\favicon.ico"> PKMN Get</a>
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
          <div class="col s12">
            <div class="card darken-1">
              <div class="card-content">
                <div class="row">
                  <div class="col s3">
                   <table class="bordered centered striped">
                     <?php $id = $_GET['id']; $idurl = str_pad($id, 3, '0', STR_PAD_LEFT); ?>
                     <tr>
                       <th>
                         <span class="card-title">
                          <center>
                             <?php getName(); ?>
                             <audio id="player_cry" <?php getCries(); ?> autostart="0" onload="document.getElementById('player').volume=0.3;"></audio>
                             <span id="play2" onclick="document.getElementById('player_cry').play();" style="float: right; margin-top: 11px;"><a href="#"><i class="material-icons left">play_circle_filled</i></a></span>
                          </center>
                         </span>
                       </th>
                     </tr>
                     <tr>
                       <td><img width="200px" height="180px" src="<?php if($idurl == '721'){echo "http://cdn.bulbagarden.net/upload/4/44/721Volcanion";}else{echo "http://assets.pokemon.com/assets/cms2/img/pokedex/full/",$idurl;} ?>.png" alt="<?php getName(); ?>"></td>
                     </tr>
                     <tr>
                       <td><?php getTypes(); ?></td>
                     </tr>
                   </table>
                  </div>
                  <div class="col s9">
                    <table class="bordered centered striped">
                      <?php getStats(); ?>
                      <tr>
                        <th colspan="2"><span class="card-title"><center>Base Stats</center></span></th>
                      </tr>
                      <tr>
                        <td>Attack</td>
                        <td><?php echo $attack; ?></td>
                      </tr>
                      <tr>
                        <td>Defense</td>
                        <td><?php echo $defense; ?></td>
                      </tr>
                      <tr>
                        <td>Special Attack</td>
                        <td><?php echo $sp_atk; ?></td>
                      </tr>
                      <tr>
                        <td>Speed</td>
                        <td><?php echo $speed; ?></td>
                      </tr>
                      <tr>
                        <td>Special Defense</td>
                        <td><?php echo $sp_def; ?></td>
                      </tr>
                      <tr>
                        <td>Base HP</td>
                        <td><?php echo $hp; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="page-footer green accent-3">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">PKMN Get</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Sitemap</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Contact</h5>
            <ul>
            <ul class="right hide-on-med-and-down">
              <audio id="player" src="img/pkmnrap.mp3" autostart="0" onload=""></audio>
              <li id="play" onclick="document.getElementById('player').play(); document.getElementById('play').style.display='none'; document.getElementById('pause').style.display='block';" style=""><a href="#"><i class="material-icons left">volume_up</i></a></li>
              <li id="pause" onclick="document.getElementById('player').pause(); document.getElementById('play').style.display='block'; document.getElementById('pause').style.display='none';" style="display: none;"><a href="#"><i class="material-icons left">volume_mute</i></a></li>
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
    <script>
      $('.carousel.carousel-slider').carousel({full_width: true});
    </script>
  </body>
</html>
