<?php session_start(); session_gc(); 

$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Locations">
    <ul class="navbar-nav">
      <a class="openbtn" onclick="openNav()">Locations<span class="sr-only">(current)</span></a>
    </ul>
    <a class="navbar-brand" id="foto" href="index.php?content=homepage"> <img src="./images/hollywood1.png" width="80" height="80" class="d-inline-block align-top" alt="">
  </a>
        

<?php
    // if (isset($_SESSION["id"])) {
    //   echo '<li class="nav-item '; echo ($active == "logout")? "active" : ""; echo '">
    //             <a class="nav-link" id="nav_text_1" href="./index.php?content=logout">Uitloggen</a>
    //         </li>';
    // } else {
    //   echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
    //             <a class="nav-link" id="nav_text_1" href="./index.php?content=Registratie">Registratie</a>
    //         </li>
    //         <li class="nav-item '; echo ($active == "login")? "active" : ""; echo '">
    //             <a class="nav-link" id="nav_text_1" href="./index.php?content=login">Inloggen</a>
    //         </li>';
    // }
    // contact moet misschien weer loesoe
//    echo '<li class="nav-item '; echo ($active == "contact")? "active" : ""; echo '">
//                 <a class="nav-link" id="nav_text_1" href="./index.php?content=contactinfo">Contact</a>
//             </li>';         
?>
      <ul class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php?content=menu" id="menu">Menu</a>
      </ul>
    <ul class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php?content=contact" id="contact">Contact</a>
    </ul>

    </li> 
    </ul>
  </div>
</nav>