

<?php


switch ($_GET["grade"]) {
	case 1 :
		echo "This work is really bad. What a dumb kid!";
		break;

        case 2 :
            echo "This work is really bad. What a dumb kid!";
            break;

            case 3 :
                echo "This work is really bad. What a dumb kid!";
                break;

                case 4 :
                    echo "This work is really bad. What a dumb kid!";
                    break;

	case 5:
		echo "This is not sufficient. More studying is required.";
		break;

    case 6:
    echo "This is not sufficient. More studying is required.";
    break;

    case 7:
     echo "This is not sufficient. More studying is required.";
     break;


    case 8:
    echo "This is not sufficient. More studying is required.";
    break;

     case 9:
    echo "This is not sufficient. More studying is required.";
    break;

    case 10:
		echo "Barely enough!";
		break;


    case 11:
    echo "Not bad!";
    break;
    
    case 12:
     echo "Not bad!";
    break;

    case 13:
    echo "Not bad!";
    break;

    case 14:
        echo "Not bad!";
       break;


       case 15:
        echo "Bravo, bravissimo!";
       break;

       case 16:
        echo "Bravo, bravissimo!";
       break;

       case 17:
        echo "Bravo, bravissimo!";
       break;

       case 18:
        echo "Bravo, bravissimo!";
       break;

       case 19:
        echo "Too good to be true : confront the cheater!";
       break;

       case 20:
        echo "Too good to be true : confront the cheater!";
       break;


        case 'storm':
            echo "Don't get out today!";
            break;

	default:
		echo "Weather will be ok to day";
}

/*
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



*/
// Form (incomplete)
?> 
<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="grade">
    <br>
	<input type="submit" name="submit" value="Note">
</form>