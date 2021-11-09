<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

/*
$room_is_filthy = false;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

*/

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];









//When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0] ;

if( $room_filthiness == $possible_states[0] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
	echo "Yuk, Room is filthy : let's clean it up !";
    // ...
}
    else if( $room_filthiness == $possible_states[2]){
        echo "Yuk, Room is dirty : let's clean it up !";
        
   
    }

    else if( $room_filthiness == $possible_states[3] ){
        echo "Hoora ! Your Room is clean, its fine !";
        
   
    }

 else {
	echo "<br>Nothing to do, room is neat.";
}


// 2. "Different greetings according to time" Exercise

$now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if( $now> "05:00" AND $now< "09:00"){
    echo "Good morning !" ;
}

else if( $now> "09:01" AND $now< "12:00" ){
    echo "Good day !";
    

}

else if( $now> "12:01" AND $now< "16:00" ){
    echo "Good afternoon !";
    

}

else if( $now> "16:01" AND $now< "21:00" ){
    echo "Good evening !";
    

}

else {
	echo "Good night !";
}

// 3. "Different greetings according to age" Exercise




if (isset($_GET['age'] )){
	// Form processing
   if( $_GET['age'] < 12 ) {
  echo 'Hello kiddo!';

  }
 
  else if ( $_GET['age'] < 18 AND $_GET['age'] > 12) {
    echo 'Hello Teenager !';
  
    }

    else if ( $_GET['age'] < 115 AND $_GET['age'] > 18) {
        echo 'Hello Adult !';
      
        }

        else if ( $_GET['age'] > 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
          
            }
   

}


if (isset($_GET["sexe"])){
	// Form processing
    if ($_GET["sexe"] == "M"){
        echo 'Hi men !';
    
    }
 
  else if ($_GET["sexe"] == "F") {
    echo 'Hi Women !';
  
    }
   

}

if (isset($_GET["sexe"]) And ($_GET["sexe"])){
	// Form processing
    if ($_GET["sexe"] == "M"AND $_GET["answer"] == "Yes" ){
        echo 'Hello boy!';
    
    }

    else if ($_GET["sexe"] == "M" AND $_GET["answer"] == "No") {
        echo 'Aloha boy';
      
        }

        else if ($_GET["sexe"] == "F" AND $_GET["answer"] == "Yes") {
            echo 'Hello Girl!';
          
            }
 
  else if ($_GET["sexe"] == "F" AND $_GET["answer"] == "No") {
    echo 'Aloha Girl';
  
    }

   

}







// Form (incomplete)
?> 
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
    <br>
    Women <input type="radio" name="sexe" value="F">  
    Men <input type="radio" name="sexe" value="M">
    <br>
    Do you speak English ?
    <br>
   Yes <input type ="radio" name = "answer" value ="Yes">
   No <input type ="radio" name = "answer" value ="No">
	<input type="submit" name="submit" value="Greet me now">
</form>


<br>
<br>
<br>

<?php



if (isset($_GET["sexe"]) And isset($_GET['age'])){
	// Form processing

        if ($_GET["sexe"] == "F" AND $_GET["age"] > 21 AND $_GET["age"] < 40 ) {
            echo 'welcome to the team !';
          
            }
 


    else {
        echo "Sorry you don't fit the criteria";
    }

   

   

}







// Form (incomplete)
?> 
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
    <br>
    Women <input type="radio" name="sexe" value="F">  
    Men <input type="radio" name="sexe" value="M">
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>


<br>
<br>
<br>


<?php

$msg = "Sorry you don't fit the criteria";



if (isset($_GET["sexe"]) AND isset($_GET['age'])){
	// Form processing

    


        if ($_GET["sexe"] == "F" AND $_GET["age"] > 21 AND $_GET["age"] < 40 ) {
            $msg = "Welcome";

            echo $msg;
          
            }
 


   

   

   

}







// Form (incomplete)
?> 
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
    <br>
    Women <input type="radio" name="sexe" value="F">  
    Men <input type="radio" name="sexe" value="M">
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>


<?php

$msg = "Sorry you don't fit the criteria";




if (isset($_GET["grade"]) ){
	// Form processing
    if ($_GET["grade"] < 4 ){
        echo 'This work is really bad. What a dumb kid! ';
    
    }

    else if ($_GET["grade"] <= 5 AND $_GET["grade"] >= 9 ) {
        echo 'This is not sufficient. More studying is required.';
      
        }

        else if ($_GET["grade"] == 10  ) {
            echo 'Barely enough!';
          
            }
 
            else if ($_GET["grade"] >= 11 AND $_GET["grade"] <= 14 ) {
                echo 'Not bad!';
              
                }

                else if ($_GET["grade"] >= 15 AND $_GET["grade"] <= 18 ) {
                    echo 'Bravo, bravissimo!';
                  
                    }


                else if ($_GET["grade"] >= 18 AND $_GET["grade"] <= 20 ) {
                    echo 'Too good to be true : confront the cheater!';
                  
                    }

   

}




// Form (incomplete)
?> 
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="grade">
    <br>
	<input type="submit" name="submit" value="Note">
</form>











