<html>

<head>
    <titre>mini-site-routing</titre>
</head>
    
<header>
    
<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Page Accueil</a>   
<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page2</a>  
<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page3</a>  
    
<h1>  Bienvenue sur la page 

 <?php  
     if ($_GET['page']=="1") { 
     echo"Accueil";
     }
     else {
         echo $_GET['page'];
     }
     ?> 
</h1>
</header>
   
</html>