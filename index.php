<?php
if (array_key_exists("page", $_GET)) {
  $page = htmlspecialchars($_GET["page"]);
} else {
  $page = "bases";
}
?>

<!DOCTYPE html>
<html lang="FR-fr">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="Récapitulatif Javascript qui part de zéro."/>
      <meta name="viewport" content="width=device-width"/>
      <title>Récapitulatif Javascript</title>
      <!--Google Fonts-->
  		<link href="https://fonts.googleapis.com/css?family=Contrail+One|Lobster|Titillium+Web:300i,400,700" rel="stylesheet">
      <link href="css/prism.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <script src="js/prism.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <ul class="navbar">
          <li><a href="?page=bases">Les bases de Javascript</a></li>
          <li><a href="?page=dom">Le Document Object Model</a></li>
        </ul>
      </nav>

      <?php
        include "pages/" . $page . ".php";
      ?>

  </body>
</html>
