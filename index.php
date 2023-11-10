<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--CSS-->
  <link rel="stylesheet" href="style.css">

  <title>Mail e Mappe</title>
</head>

<body>

  <?php
  // echo "Inizio";
  // $nomeMittente = "Daniele";
  // $mailMittente = "daniele.boggian@iticopernico.it";
  // $mailDestinatario = "daniele.boggian@iticopernico.it";

  // $mailOggetto = "Messaggio di prova";
  // $mailCorpo = "Questo è un messaggio di prova";

  $primi = array();
  $primi['piatto1'] = array('nome' => 'Trofie al pesto', 'descrizione' => 'Pasta corta, modellata a mano, con un pesto verde fragrante a base di basilico, pinoli, pecorino e olio d\'oliva. Un\'esplosione di freschezza e gusto in ogni forchettata, un inno alla semplicità e al sapore della cucina mediterranea.', 'immagine' => 'trofiePesto.jpg', 'prezzo' => '12€');
  $primi['piatto2'] = array('nome' => 'Tagliatelle al ragù', 'descrizione' => 'Pasta fresca all\'uovo, lavorata con cura, saporita con un ragù di carne lentamente cotto, risultando in un piatto che abbraccia l\'anima e delizia il palato. Un inno alla tradizione culinaria, un comfort food che trasporta direttamente in un viaggio tra i sapori dell\'Italia.', 'immagine' => 'tagliatelleRagu.jpg', 'prezzo' => '10€');
  $primi['piatto3'] = array('nome' => 'Tagliolini al salmone', 'descrizione' => 'Pasta fresca sottile e leggera, arricchita con una cremosa salsa al salmone affumicato, panna e un tocco di limone. Un piatto elegante e decadente che porta il mare direttamente sul tuo piatto, per un\'esperienza culinaria indimenticabile. Una delizia per i sensi che ti farà innamorare a ogni forchettata.', 'immagine' => 'taglioliniSalmone.jpg', 'prezzo' => '14€');
  $primi['piatto4'] = array('nome' => 'Spaghetti alla carbonara', 'descrizione' => 'Pasta al dente arricchita con una salsa cremosa a base di uova, pecorino, guanciale croccante e pepe nero. Un abbraccio di tradizione italiana in ogni boccone, un equilibrio perfetto tra semplicità e saporito, che ti farà desiderare ogni volta un altro morso.', 'immagine' => 'spaghettiCarbonara.jpg', 'prezzo' => '12€');
  // $primi['piatto5'] = array('nome' => 'Tortellacci alla zucca', 'descrizione' => 'Piccoli involtini di pasta ripieni di una morbida purea di zucca, conditi con una salsa burrosa e salvia, e spolverati con parmigiano fresco. Un\'esplosione di sapori autunnali in ogni boccone, un mix perfetto di dolcezza e cremosità che conquisterà il tuo palato.', 'immagine' => 'tortellacciZucca.jpg', 'prezzo' => '15€');
  // $primi['piatto6'] = array('nome' => 'Spaghetti cacio e pepe', 'descrizione' => 'Pasta al dente condita con pecorino romano e una generosa macinata di pepe nero, creando una cremosa e piccante armonia di sapori. Un piatto che incarna l\'essenza della cucina italiana, un\'eccellenza gustativa in ogni morso.', 'immagine' => 'spaghettiCacioPepe.jpg', 'prezzo' => '12€');
  // $primi['piatto7'] = array('nome' => 'Risotto alla milanese', 'descrizione' => 'Riso carnaroli cotto lentamente in un brodo saffronato, arricchito con burro e parmigiano, creando una crema giallo zafferano dalla fragranza avvolgente. Un\'esperienza culinaria che coniuga raffinatezza e gusto in ogni cucchiaiata, un inno alla tradizione milanese che delizierà il tuo palato.', 'immagine' => 'risottoMilanese.jpg', 'prezzo' => '10€');

  $secondi = array();
  $secondi['secondo1'] = array('nome' => 'Bistecca alla fiorentina', 'descrizione' => 'La sua crosta esterna è croccante e impreziosita da una spruzzata di olio d\'oliva e sale, mentre l\'interno è rosato e succulento, sciolto in bocca con un sapore ricco e robusto. Un autentico capolavoro carnivoro, perfetto per gli amanti delle carni alla brace.', 'immagine' => 'fiorentina.jpg', 'prezzo' => '16€');
  $secondi['secondo2'] = array('nome' => 'Zuppa di pesce', 'descrizione' => 'Un viaggio culinario nel mare, un\'esplosione di sapori marini racchiusa in un caldo abbraccio di pomodoro e aromi mediterranei. Pesci freschi, crostacei e molluschi danzano in un brodo ricco e avvolgente, arricchito da peperoncino e aglio, creando una sinfonia di gusti che cattura il cuore e il palato.', 'immagine' => 'zuppaPesce.jpg', 'prezzo' => '14€');
  $secondi['secondo3'] = array('nome' => 'Salmone alla griglia', 'descrizione' => 'È una delizia culinaria che sposa la delicatezza del salmone fresco con il suo sapore leggermente affumicato. La sua carne tenera e succulenta è abbracciata da una crosta croccante, mentre le note aromatiche del limone e delle erbe esaltano la freschezza del piatto.', 'immagine' => 'salmoneGriglia.jpg', 'prezzo' => '16€');
  $secondi['secondo4'] = array('nome' => 'Minestrone di pollo e verdure', 'descrizione' => 'Il minestrone di pollo e verdure è un comfort food perfetto, se la sera non hai voglia di cucinare risolvi tutto con questo piatto unico che combina carboidrati e proteine.', 'immagine' => 'minestrone.jpg', 'prezzo' => '12€');

  $dolci = array();
  $dolci['dolce1'] = array('nome' => 'Tiramisù', 'descrizione' => 'Strati di biscotti savoiardi inzuppati in caffè, abbracciati da una crema al mascarpone leggera e soffice, coronati da un velo di cacao in polvere. Un boccone di paradiso, la dolce carezza d\'Italia che ti fa perdere nella magia del suo sapore in ogni assaggio.', 'immagine' => 'tiramisu.jpg', 'prezzo' => '6€');
  $dolci['dolce2'] = array('nome' => 'Profiteroles', 'descrizione' => 'Guscio di pasta choux croccante che avvolge un cuore di crema al cioccolato o alla vaniglia, il tutto finemente guarnito con una cascata di cioccolato fuso. Un\'elegante danza tra croccantezza e cremosità che fa deliziosamente sciogliere il cuore di chi li assapora.', 'immagine' => 'profiteroles.jpg', 'prezzo' => '6€');
  $dolci['dolce3'] = array('nome' => 'Cheesecake', 'descrizione' => 'La sua base di biscotto, come un fondamento solido, sorregge una cremosa e vellutata massa di formaggio, coronata da una generosa salsa di frutta o cioccolato. Un\'esperienza di dessert che regala l\'armonia dei sapori e una dolce estasi in ogni morso.', 'immagine' => 'cheesacake.jpg', 'prezzo' => '6€');
  $dolci['dolce4'] = array('nome' => 'Sorbetto', 'descrizione' => 'La sua consistenza vellutata e il sapore fruttato e intenso si sciolgono in bocca come una brezza estiva, offrendo un\'esplosione di rinfrescante piacere che delizia i sensi.', 'immagine' => 'sorbetto.jpg', 'prezzo' => '6€');

  // $bevande = array();
  // $bevande['piatto1'] = array('nome' => 'Trofie al pesto', 'descrizione' => 'Pasta corta, modellata a mano, con un pesto verde fragrante a base di basilico, pinoli, pecorino e olio d\'oliva. Un\'esplosione di freschezza e gusto in ogni forchettata, un inno alla semplicità e al sapore della cucina mediterranea.', 'immagine' => 'trofiePesto.jpg', 'prezzo' => '12€');
  // $bevande['piatto2'] = array('nome' => 'Tagliatelle al ragù', 'descrizione' => 'Pasta fresca all\'uovo, lavorata con cura, saporita con un ragù di carne lentamente cotto, risultando in un piatto che abbraccia l\'anima e delizia il palato. Un inno alla tradizione culinaria, un comfort food che trasporta direttamente in un viaggio tra i sapori dell\'Italia.', 'immagine' => 'tagliatelleRagu.jpg', 'prezzo' => '10€');
  // $bevande['piatto3'] = array('nome' => 'Tagliolini al salmone', 'descrizione' => 'Pasta fresca sottile e leggera, arricchita con una cremosa salsa al salmone affumicato, panna e un tocco di limone. Un piatto elegante e decadente che porta il mare direttamente sul tuo piatto, per un\'esperienza culinaria indimenticabile. Una delizia per i sensi che ti farà innamorare a ogni forchettata.', 'immagine' => 'taglioliniSalmone.jpg', 'prezzo' => '14€');
  // $bevande['piatto4'] = array('nome' => 'Spaghetti alla carbonara', 'descrizione' => 'Pasta al dente arricchita con una salsa cremosa a base di uova, pecorino, guanciale croccante e pepe nero. Un abbraccio di tradizione italiana in ogni boccone, un equilibrio perfetto tra semplicità e saporito, che ti farà desiderare ogni volta un altro morso.', 'immagine' => 'spaghettiCarbonara.jpg', 'prezzo' => '12€');

  $tavoliDisponibili = array();
  $tavoliDisponibili['tavolo1'] = array('nTavoli' => '2', 'postiTavolo' => '4');
  $tavoliDisponibili['tavolo2'] = array('nTavoli' => '2', 'postiTavolo' => '5');
  $tavoliDisponibili['tavolo3'] = array('nTavoli' => '2', 'postiTavolo' => '6');


  $navbar = <<<HTML
      <!--menù orizzontale-->
      <nav class="navbar">
        <div class="max">
          <div class="home"><a href="index.php"> Ristorante Oasi</a></div>
          <ul class="menu">
            <li>
              <a href="prenota.html"> Prenota<br /> </a>
            </li>
  
            <li>
              <a href="doveSiamo.html"> Dove siamo <br /> </a>
            </li>

          </ul>
          <button id="pulsante2" class="fas fa-bars" onclick="pulsante()"></button>
        </div>
      </nav>
  
      HTML;
  echo $navbar;

  echo <<<HTML
    <div id="immSfondo1">
      <!-- <img src="trattoria.jpg"> -->
    </div>

  HTML;

  $title = <<<HTML
          <div class="title">
          MENÙ <br>
          </div>
  
      HTML;
  echo $title;

  $primiPiatti = <<<HTML
          <div id="primi">
          PRIMI PIATTI <br>
          </div>
      HTML;
  echo $primiPiatti;

  foreach ($primi as $array) {
    $main = <<<HTML
  
      <div class = "container">
          <div class="titolo">$array[nome]</div>
          <div class="immagine"><img src=$array[immagine]></div>
          <div class="descrizione">$array[descrizione]</div>
          <div class="prezzo"> <div class = "costo"> Prezzo: $array[prezzo] </div> </div>
  
      </div>
      HTML;

    echo $main;
  }

  $secondiPiatti = <<<HTML
      <div id="primi">
      SECONDI PIATTI <br>
      </div>
    HTML;
  echo $secondiPiatti;

  foreach ($secondi as $array) {
    $main = <<<HTML

    <div class = "container">
        <div class="titolo">$array[nome]</div>
        <div class="immagine"><img src=$array[immagine]></div>
        <div class="descrizione">$array[descrizione]</div>
        <div class="prezzo"> <div class = "costo"> Prezzo: $array[prezzo] </div> </div>

    </div>
    HTML;

    echo $main;
  }

  $dolciTitolo = <<<HTML
      <div id="primi">
      DOLCI <br>
      </div>
    HTML;
  echo $dolciTitolo;

  foreach ($dolci as $array) {
    $main = <<<HTML

    <div class = "container">
        <div class="titolo">$array[nome]</div>
        <div class="immagine"><img src=$array[immagine]></div>
        <div class="descrizione">$array[descrizione]</div>
        <div class="prezzo"> <div class = "costo"> Prezzo: $array[prezzo] </div> </div>

    </div>
    HTML;

    echo $main;
  }

  // $bevandeTitolo = <<<HTML
  //       <div id="primi">
  //       BEVANDE <br>
  //       </div>
  //   HTML;
  // echo $bevandeTitolo;

  // foreach ($bevande as $array) {
  //   $main = <<<HTML

  // <div class = "container">
  //     <div class="titolo">$array[nome]</div>
  //     <div class="immagine"><img src=$array[immagine]></div>
  //     <div class="descrizione">$array[descrizione]</div>
  //     <div class="prezzo"> <div class = "costo"> Prezzo: $array[prezzo] </div> </div>

  // </div>
  // HTML;

  //   echo $main;
  // }

  $footer = <<<HTML

    <footer id = "footer">
    Autore: Boggian Daniele <br />
    Classe: 5G <br />
    Copyright by Boggian Daniele <br />
    </footer>
HTML;

  echo $footer;

  ?>
</body>
<script src="index.js"></script>

</html>