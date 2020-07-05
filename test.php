<html>
<head> 
<title> Comment utiliser un code PHP dans une page HTML </title>
</head>
<body>
<ul>
<?php for ($i = 1; $i <= 5; $i ++) { ?>
<li>  Menu numéro  <?php echo $i; ?> </li>
<?php } ?>
 
<?php echo $_GET['page']; ?>
    
  <h1> sous titre </h1>  
    
</ul>
</body>
</html>