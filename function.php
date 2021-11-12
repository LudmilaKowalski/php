<?php

$str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";

$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}




echo ucfirst("emile");

?>

<br>
<br>

<?php

echo date(' Y');
echo "  ";
echo date('d M Y h:i:s');


?>

<br>
<br>


<?php



function addition2( $a, $b){
    $a = 5;
$b = 4;
$c = array ($a,$b);
	//	one or more operations operating on the arguments...
    return $a+$b;




    foreach ($c as $element) {
        if (is_numeric($element)) {
            echo var_export($element, true) . " est numérique", PHP_EOL;
            
        } else {
            echo var_export($element, true) . "Error: argument is the not a number.", PHP_EOL;
        }
    }
}


echo "voici le résultat de l'addition 5 + 4 : ".addition2($a,$b);



?>

<br>
<br>

<?php



function acronym($a)
{
    $a = "In code we trust!";
    $letters=array();
    $words=explode(' ', $a);
    foreach($words as $word)
    {
        $word = (substr($word, 0, 1));
        array_push($letters, $word);
    }
    $shortname = strtoupper(implode($letters));
    return $shortname;

   
}
echo acronym ("In code we trust!");

?>

<br>
<br>

<?php



function letter ($a) {
$a = array ("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");




}


$MaVariable = "caecotrophie chaenichthys microsphaera sphaerotheca";
$MaVariable = str_replace("ae", "æ", $MaVariable);
echo $MaVariable."</br>\n"; //Va afficher 123a567

$MaVariable = "cæcotrophie chænichthys microsphæra sphærotheca";
$MaVariable = str_replace("æ", "ae", $MaVariable);
echo $MaVariable."</br>\n"; //Va afficher 123a567

?>

<?php

$a = "Incorrect email address error";
$b = "info error warning";


function feedback ($a, $b) {
   

}

echo feedback("Incorrect email address", "error");


 ?>

<br>
<br>

<?php 



function fonc ($a, $b) {

        $a = array ("hi", "tree", "thea", "leaf", "done", "on");
        $b = array ("Element", "function", "destroy", "famous");
 
$num = rand(0, 3);
 
echo  ($a[$num]);

?>
<br>

<?php

echo  ($b [$num] );
    
   
}

fonc ("salut","cool");


?>

<form method="get" action="">
<input type="submit" name="go" value="Greet me now">
</form>

<?php


$a = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";

echo strtolower($a);

?>

<br>
<br>

<?php




function calcul ($x, $y){
    $volume = $x * $x * 3.14 * $y * (1/3);
    echo "The volume of a cone which ray is $x and height is $y =  $volume . cm<sup>3</sup><br />";


}

calcul (5,2);
calcul (3,4);





?>



