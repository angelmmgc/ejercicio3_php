<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>

<?php

//El texto se almacenará en una variable usando heredoc o nowdoc.
$str = <<<EOD
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta<BR>
dignissim quam, sed rhoncus ligula volutpat id. Nulla quam libero, fermentum<BR> 
a luctus ut, volutpat eget mi. Etiam quis nisl metus. Curabitur commodo ex<BR>
eu nisi posuere volutpat. Maecenas sem nibh, sagittis sed euismod ut, hendrerit<BR> 
eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus<BR> 
suscipit pharetra metus quis porttitor. Suspendisse efficitur, dui in porta<BR> 
interdum, lectus nunc luctus massa, pellentesque tincidunt metus felis vel mi.<BR> 
Vestibulum et ligula in ex dapibus semper eget sed quam. Nunc pretium non nibh<BR> 
id porta. Nullam dapibus ante faucibus dolor elementum, rutrum faucibus odio<BR> 
lobortis. Nam mattis tortor tempus, dapibus nulla at, posuere quam. Fusce nec<BR> 
ullamcorper libero.<BR>
EOD;

//DECLARAMOS VARIABLES
$contador=0;
$letra=$_GET["letra"];

//RECORREMOS EL TEXTO CON BUCLE WHILE
while ($contador <= strlen($str)) {       
    //CONDICIONAL,SI LA LETRA PASADA POR GET COINCIDE CON LETRA TEXTO SE APLICA CSS
    //SI NO COINCIDE SE IMPRIME
    if ($letra==$str[$contador]) {
     
        //IMPRIME LETRA EN ROJO    
        //$str[$contador]=$letra;
         echo "<span class='color'>". $str[$contador]."</span>";
    
}else{
    echo $str[$contador];
    
}
    //CONTAMOS LAS LETRAS
    $contador++;

}


?>
</body>
</html>

