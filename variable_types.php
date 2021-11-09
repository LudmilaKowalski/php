
<html>
  <head><title>Hi!</title></head>
  <body>
    <p> Hello my name is  <?php $name = "Ludmila"; echo $name; ?>  </p>
  	 <p>I'm <?php $age = "25"; echo $age; ?> years old </p>  
     <p>My eyes are  <?php $eyes = "brown"; echo $eyes; ?> </p>  
     <p>The person in my family are : <?php $family = array(
  0 => 'Stephane', 
  1 => 'Florence', 
  2 => 'Ludmila', 
);  
foreach($family as $family){
  echo $family . "\n";
}
?> </p> 

<p> <?php $am_i_hungry = true; echo $am_i_hungry ?>  </p>
  </body>
</html>
