<?php 

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

$code = 'code';

foreach ($pronouns as $pronouns) {
    print ($pronouns);
    print " ";
    print ($code);
    echo "<br />";
}



?>

<br>
<br>
<br>

<?php 

$amount_of_lines = 1;

while ($amount_of_lines <= 100)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}
?>

<br>
<br>
<br>

<?php

$a = 1;

while ($a <= 120)
{
    echo $a ++;
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
     

}
?>

<br>
<br>
<br>

<?php

for ($a = 1; $a <= 120; $a ++)
{
    echo $a;
}

?>

<br>
<br>
<br>

<?php 

$pronouns = array ('Antoine', 'Nat', 'Ludmi');

$code = 'code';

foreach ($pronouns as $pronouns) {
    print ($pronouns);
    echo "<br />";
    print " ";
    
}



?>

<br>
<br>
<br>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector</title>
</head>
<body>



<label for="land-select">Choose a land:</label>


<?php 

$country = array ('Belgique', 'France', 'England', 'Holland', 'Germany', 'Poland','Russia','Usa','Italy','Greece');


foreach ($country as $country) {
    print ($country);
    echo "<br />";
    print " ";
    
}



?>

<select name="land" id="land-select">
    <option value="">--Please choose an option--</option>
    <option value= <?php 

$country = array ('BE'=>'Belgique', 'FR'=> 'France', 'EN'=> 'England', 'NL'=> 'Holland', 'GR'=> 'Germany', 'PL'=> 'Poland', 'RU'=>'Russia', 'US'=>'Usa', 'IT'=>'Italy', 'GR'=>'Greece');


foreach ($country as  $key => $value) {
    print_r ($country);
    echo  "<option value='$key> $value</option>";
    print " ";
    
}



?>  > </option>
</select>
    
</body>
</html>