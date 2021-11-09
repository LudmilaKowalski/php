<?php

$teach = $_GET["teacher"];
$nom = $_GET["Name"];


if (isset($_GET["sexe"]) And ($_GET["sexe"])){
	// Form processing
    if ($_GET["sexe"] == "M"AND $_GET["ab"] == "ill" ){
        echo 'Sorry, ' .$teach. ' my son ' .$nom. ' was sick yesterday';
    
    }

    else if ($_GET["sexe"] == "M" AND $_GET["ab"] == "death") {
        echo 'Sorry, ' .$teach. ' my son ' .$nom. ' was death yesterday' ;
      
        }

        else if ($_GET["sexe"] == "M" AND $_GET["ab"] == "sin") {
            echo 'Sorry, ' .$teach. ' my son ' .$nom. ' was away from school and doing an much funny thing' ;
          
            }

            else if ($_GET["sexe"] == "M" AND $_GET["ab"] == "any") {
                echo 'Sorry, ' .$teach. ' my son' .$nom. ' was sleeping' ;
              
                }

        else if ($_GET["sexe"] == "F" AND $_GET["ab"] == "ill") {
            echo 'Sorry, ' .$teach. ' my dauchter ' .$nom. ' was sick yesterday' ;
          
            }
 
  else if ($_GET["sexe"] == "F" AND $_GET["ab"] == "death") {
    echo 'Sorry, ' .$teach.  ' my dauchter ' .$nom. ' was death yesterday' ;
  
    }

    else if ($_GET["sexe"] == "F" AND $_GET["ab"] == "sin") {
        echo 'Sorry, ' .$teach. ' my dauchter ' .$nom. ' was doing an extra curricular activity' ;
      
        }

        else if ($_GET["sexe"] == "F" AND $_GET["ab"] == "any") {
            echo 'Sorry, ' .$teach. ' my dauchter ' .$nom.  ' was sleeping, better than school !' ;
          
            }

   

}

?>

<form method="get" action="">
	<label for="age"></label>
	Name : <input type="" name="Name">
    <br>
    Gender of the kid : Girl <input type="radio" name="sexe" value="F">  
    Boy <input type="radio" name="sexe" value="M">
    <br>
    Name of the teacher : <input type="" name="teacher">
    <br>
    Reason of absence :
    illness <input type="radio" name="ab" value="ill">  
    death of the pet (or a family member) <input type="radio" name="ab" value="death">
    significant extra-curricular activity <input type="radio" name="ab" value="sin">
    any other excuse of your choice <input type="radio" name="ab" value="any">
    <br>
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>



<!--isset($_GET["teacher"]) !-->