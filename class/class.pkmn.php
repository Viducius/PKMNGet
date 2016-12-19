<?php

function showPokemons(){
  $offset = 0;

  $order = $_GET['order'];
  $offsetGET = $_GET['offset'];

  if($order == 1){
    $offset = $offsetGET+21;
  } elseif($order == 0){
    $offset = $offsetGET-21;
  }

  $url = "https://pokeapi.co/api/v2/pokemon/?limit=21&offset=".$offset."";
  $json_string = file_get_contents($url);
  $obj = json_decode($json_string, true);

  for ($i = 0; $i < count($obj['results']); $i++) {
    $name = $obj['results'][$i]['name'];
    $url = $obj['results'][$i]['url'];
    $parts = Explode('/', $url);
    $id = $parts[count($parts) - 2];
    $idurl = str_pad($id, 3, '0', STR_PAD_LEFT);?>
    <div class="col s4 m4">
      <div class="card white lighten-1">
      <div class="card-content grey-text">
        <center>
          <small class="left">#<?php echo $idurl; ?></small><br/>
          <span class="card-title"><?php echo strtoupper($obj['results'][$i]['name']);?></span><br/><br/>
          <img id="pkmnHolder" width="200" height="180" src="<?php if($idurl == '721'){echo "http://cdn.bulbagarden.net/upload/4/44/721Volcanion";}else{echo "http://assets.pokemon.com/assets/cms2/img/pokedex/full/",$idurl;} ?>.png" alt="<?php echo $name; ?>">
        </center>
      </div>
      <div class="card-action">
        <a class="waves-effect right grey-text" href='/pokemon.php?id=<?php echo $id; ?>'>Info</a><br/>
      </div>
      </div>
    </div>
<?php
  }
  ?>
  <div class="row">
    <div class="col s12 m12">
      <div class="card white lighten-1">
        <div class="card-content" style="height: 77px;">
          <form method="post">
          <?php if($offset == 0){
            echo "<a class='waves-effect disabled btn' href='overview.php?offset=".$offset."&order=0'>Previous</a>";
            } else{
              echo "<a class='waves-effect btn' href='overview.php?offset=".$offset."&order=0'>Previous</a>";
            }
            if($offset >= 701){
              echo "<a class='waves-effect right disabled btn' href='overview.php?offset=".$offset."&order=1'>Next</a>";
            } else{
              echo "<a class='waves-effect right btn' href='overview.php?offset=".$offset."&order=1'>Next</a>";
            } ?>

          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
}

function searchPokemon(){
  if(isset($_POST['submit']))
  {
    $pokemonPre = $_POST['pokemon'];

    $pokemon = strtolower($pokemonPre);
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon."";
    $json_string = file_get_contents($url);
    $obj = json_decode($json_string);
    $id = $obj->id;
    header('Location: /pokemon.php?id='.$id.'');
  }
}

function getStats(){
  $id = $_GET["id"];
  $url = "https://pokeapi.co/api/v2/pokemon/".$id."";
  $json_string = file_get_contents($url);
  $obj = json_decode($json_string, true);

  global $attack;
  global $defense;
  global $sp_atk;
  global $sp_def;

  global $height;
  global $weight;
  global $speed;
  global $hp;

  $statsArray = array();

  foreach ($obj["stats"] as $stats)
  {
    $statsArray[] = $stats["base_stat"];
  }

  $attack = $statsArray[4];
  $defense = $statsArray[3];
  $sp_atk = $statsArray[2];
  $sp_def = $statsArray[1];
  $speed = $statsArray[0];
  $hp = $statsArray[5];
}

function getName(){
  $id = $_GET["id"];
  $url = "https://pokeapi.co/api/v2/pokemon/".$id."";
  $json_string = file_get_contents($url);
  $obj = json_decode($json_string, true);
  echo strtoupper($obj['name']);
}

function getNameTitle(){
  $id = $_GET["id"];
  $url = "https://pokeapi.co/api/v2/pokemon/".$id."";
  $json_string = file_get_contents($url);
  $obj = json_decode($json_string, true);
  echo ucfirst($obj['name']);
}

function getCries(){
  $id = $_GET["id"];
  $idurl = str_pad($id, 3, '0', STR_PAD_LEFT);
  echo "src='http://pokedream.com/pokedex/images/cries/".$idurl.".mp3'";
}

function getTypes(){
  $id = $_GET["id"];
  $url = "https://pokeapi.co/api/v2/pokemon/".$id."";
  $json_string = file_get_contents($url);
  $obj = json_decode($json_string);

  foreach($obj->types as $types) {
    $type = $types->type;
    $typeName = $type->name;
    switch($typeName){
      case "normal":
        echo "<div class='chip' style='background: #A8A878; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "fire":
        echo "<div class='chip' style='background: #F08030; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "fighting":
        echo "<div class='chip' style='background: #C03028; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "water":
        echo "<div class='chip' style='background: #6890F0; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "flying":
        echo "<div class='chip' style='background: #A890F0; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "grass":
        echo "<div class='chip' style='background: #78C850; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "poison":
        echo "<div class='chip' style='background: #A040A0; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "electric":
        echo "<div class='chip' style='background: #F8D030; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "ground":
        echo "<div class='chip' style='background: #E0C068; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "psychic":
        echo "<div class='chip' style='background: #F85888; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "rock":
        echo "<div class='chip' style='background: #B8A038; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "ice":
        echo "<div class='chip' style='background: #98D8D8; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "bug":
        echo "<div class='chip' style='background: #A8B820; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "dragon":
        echo "<div class='chip' style='background: #7038F8; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "ghost":
        echo "<div class='chip' style='background: #705898; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "dark":
        echo "<div class='chip' style='background: #705848; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "steel":
        echo "<div class='chip' style='background: #B8B8D0; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "fairy":
        echo "<div class='chip' style='background: #EE99AC; color: white;'>".strtoupper($typeName)."</div>";
        break;
      case "unknown":
        echo "<div class='chip' style='background: #68A090; color: white;'>???</div>";
        break;
    }
  }
}

?>
