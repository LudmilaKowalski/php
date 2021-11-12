<?php 

$arr = array('Stephane', 'Florence', 'Ludmila');
$arr2 = array ('Pasta cheese and ham', 'Pizza', 'Sushi');
$arr3 = array ('V for vendetta', 'Pan s labyrinth', 'Shang chi');
$arr4 = array ('Frozzen', 'Paprika', 'Harry Potter' );
$me = array('firstname' => 'Ludmila', 'Age' => '25 years', 'favorite season' => 'Winter', 'Love soccer ?' => 'Sometine, yes', $arr3);
$me['hobbies'] = array('Write book', 'Rp', 'read book', 'play music', 'play vidéo games');
$me ['mother'] = array ('firstname' => 'Florence', 'Age' => '51 years', 'favorite season' => 'Spring', 'Love soccer ?' => 'No');
$mother ['hobbies'] = array ('Take care of the garden', 'Drawing', 'reading', 'whatching series');
$soulmate = array ('firstname' => 'Natalie', 'Age' => '24 years', 'favorite season' => 'Winter', 'Love soccer ?' => 'No', $arr4);
$soulmate ['hobbies'] = array ('Drawing', 'Playing video games', 'Rp', 'Watching series');
$web_development = array ('frontend' => $front, 'backend' => $back);
$front = array ();
$back = array();
$replacements = array(0 => 'html');



$possible_hobbies_via_intersection = array_intersect ($me['hobbies'], $soulmate ['hobbies']);
$possible_hobbies_via_merge = array_merge ($me['hobbies'], $soulmate ['hobbies']);
$basket = array_replace($back, $replacements);


echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

array_unshift($me,'Durand');
array_push($me['hobbies'], "Taxidermy");
array_push ($back,'xhtml');
array_push ($back, 'Ruby on Rails');
array_push ($back, 'CSS');
array_push ($back, 'Flash');
array_push ($back, 'JavaScript');
array_unshift ($back, 'html');
array_unshift ($back, 'Flash');
unset ($back[2]);
print_r ($arr);
print_r ($arr2);
print_r ($arr3[0]);
echo '<pre>';
print_r($me);
echo '</pre>';
print_r ($mother);

echo sizeof($me['hobbies']) + sizeof($mother ['hobbies']) ;
print_r ($soulmate);
print_r ($possible_hobbies_via_intersection);
print_r ($possible_hobbies_via_merge);
print_r ($web_development);
print_r ($back);







