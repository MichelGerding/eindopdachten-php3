<?php
  include "php/classes/Huis.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>eindopdracht 1 | php 3</title>
  </head>
  <body>
    <div class="wrapper container-fluid">
      <div class="input jumbotron col-md-4 col-sm-11">
        <form class="input_huis" action="index.php" method="post">
          <span class="in_span" id="kamers">Aantal kamers: </span> <input type="number" name="kamers" class="in_int  form-control col-12" id="kamers" placeholder="2"><br>
          <span class="in_span" id="toiletten"> Aantal toiletten: </span> <input type="number" name="toiletten" class="in_int  form-control col-12" id="toilet" placeholder="1"><br>
          <span class="in_span" id="verwarming"> Verwarming: </span>
          <!-- dropdown menu's -->
            <!-- wel of geen verwarming -->
          <select class="dropdown form-control col-12" id="verwarming_bool" name="verwarming_bool">
            <option id="true" class="options" value="true"> ja </option>
            <option id="fasle" class="options" value="false"> nee </option>
          </select>
            <!-- type verwarming -->
          <select name="verwarming_soort" id="type_verwarming" class="dropdown  form-control col-12">
            <option class="text_dampend" selected> Selecteer je type verwarming </option>
            <option value="radiator" id="rad" class="options"> Radiator </option>
            <option value="vloer" id="vloer" class="options"> vloerverwarming </option>
            <option value="lucht" id="lucht" class="options"> Luchtverwarming </option>
            <option value="wand" id="wand" class="options"> Wandverwarming </option>
          </select><br>
          <span class="in_span  " id="straatnaam"> Straatnaam en huisnummer: </span>
          <input type="text" name="straat" class="in_str form-control col-12" id="straat" placeholder="aapenlaan">
          <input type="number" name="huisnummer" class="in_int form-control col-12" id="huisnummer" placeholder="42"><br>
          <span class="in_span  " id="plaatsnaam"> Plaatsnaam: </span> <input type="text" name="plaats" class="in_str  form-control col-12" id="plaats" placeholder="Assen"><br>
          <span class="in_span  " id="oppervlakte"> Oppervlakte: </span> <input type="text" name="opp" class="in_int  form-control col-12" id="oppervlak" placeholder="1500"><br>
          <span class="in_span  " id="woz_waarde"> Woz waarde: </span> <input type="number" name="woz" placeholder="150.000" class=" form-control col-12"> <br>
          <button type="submit" class="btn-ligth btn-md">Confirm</button>
          <button type="reset"class="btn-ligth btn-md">Leeg velden</button>
        </form>
      </div>
      <!-- output -->
      <div class="output">
        <?php
        if (isset($_POST["straat"])) {
          // code...
          $huis = new Huis($_POST["straat"], $_POST["huisnummer"], $_POST["plaats"]);
          $huis->setKamers($_POST["kamers"]);
          $huis->setWozWaarde($_POST["woz"]);
          $huis->setToiletten($_POST["toiletten"])
          $huis->setVerwarming($_POST["verwarming_bool"])
          $huis->setTypeVerwarming($_post[""])
          // $huis->set
          $huis->show();
        }
        ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
