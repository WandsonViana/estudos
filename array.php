<?php 
      $_salada = array(
                       "maçã",
                       "banna",
                       "melão",
                       "uva",
                       array("limao","laranja")
                    );
      ?>
<!doctype html>
<html>
<header>
    <meta charset ="UTF-8">

    <title>Aula Booleana php </title>
   <sytle>

  </style>
</header>
<body>

<p>
<pre>
 <?php
   echo " Buscar elemento do array:". in_array("uva",$_salada)."<br>";
   echo " Buscar elemento do array:". array_search("banna",$_salada);

  
 ?>
 </pre>
 <?php  
  echo $_salada[0]."<br>";
  echo $_salada[1]."<br>";
  echo $_salada[2]."<br>";
  echo $_salada[3]."<br>";
  echo $_salada[4][0]."<br>";
  echo $_salada[4][1]."<br>";

  
  
  echo "Posições no array: ". count($_salada). "<br>" ."<br>";

  for ($_salada = 0; $_salada < 5; $_salada++) { 
     
            echo $_salada . " = <br>"; 
    
  }
    
 ?>
</P>
</body>




</html>
