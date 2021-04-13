<?php session_start();
session_gc();

$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Locations" >
    <ul class="navbar-nav">
      <a class="openbtn" onclick="openNav()">Locations<span class="sr-only">(current)</span></a>
    </ul>

    <a class="navbar-brand" id="foto" href="index.php?content=homepage"> <img src="./images/hollywood1.png" width="80" height="80" class="d-inline-block align-top" alt="">
    </a>

    <ul class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php?content=productenpage" id="menu">Menu</a>
    </ul>
    <ul class="navbar-nav">
      <a class="openbtnR" onclick="openNavR()">Contact<span class="sr-only">(current)</span></a>
    </ul>

    </li>
    </ul>
  </div>
</nav>