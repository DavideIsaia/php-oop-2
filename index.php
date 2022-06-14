<?php
  require_once __DIR__ . "/Prodotto.php";
  require_once __DIR__ . "/Cibo.php";
  require_once __DIR__ . "/PetToy.php";
  require_once __DIR__ . "/Utente.php";

  $dog_food = new Cibo("Enjoy Plus", "Crocchette di pollo", 24.99, "14/06/2024");
  $dog_toy = new PetToy("Molla l'osso!", "Osso da masticare", 9.99, "Gomma", "Beige");
  $cat_toy = new PetToy("Scappa Jerry!", "Giocattolo a forma di topo", 34.99, "Stoffa", "Grigio");

  $user1 = new Utente("Davide", "Isaia", "333-1234567");
  $user1-> aggiungiCarrello($dog_food);
  $user1-> aggiungiCarrello($dog_toy);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <h1>Animal Shopping</h1>
    <hr>
    <h3>Prodotti in pronta consegna:</h3>
      <ul>
        <li><?php echo $dog_food->printInfo(); ?></li>
        <li><?php echo $dog_toy->printInfo(); ?></li>
        <li><?php echo $cat_toy->printInfo(); ?></li>
      </ul>
      <hr>
      <h3>Utente</h3>
      <h4><?php echo $user1->printUtente(); ?></h4>
      <hr>
      <h2>Ciao <?php echo $user1->nome; ?>. Ecco il tuo carrello:</h2>
      <ul>
        <?php foreach($user1->carrello as $item) { ?>
          <li><?php echo $item->printInfo(); ?></li>
        <?php } ?>
      </ul>
      <h3>Totale: € <?php echo $user1->getPrezzoTot(); ?></h3>
      
      <p>
        <?php
        if ($user1->canPurchase()) {
          echo "Puoi procedere all'acquisto!";
        }
        else {
          echo "La tua carta è scaduta. Inserire metodo di pagamento alternativo";
        }?>
      </p>
  </div>  
</body>
</html>