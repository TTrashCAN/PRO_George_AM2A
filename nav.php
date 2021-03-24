<?php session_start(); session_gc(); 

$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Locations">
    <ul class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php?content=homepage" id="location">Locations<span class="sr-only">(current)</span></a>
    </ul>

    <a class="navbar-brand" id="foto" href="#"> <img src="https://uploads-ssl.webflow.com/5f3ece93689659d6e7431728/5f3ece93689659584f431736_Marina%202.svg" width="80" height="80" class="d-inline-block align-top" alt="">
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
      <a class="nav-item nav-link active" href="index.php?content=contact" id="contact">Contact</a>
    </ul>

    </li> 
    </ul>
  </div>
</nav>