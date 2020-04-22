<?php 
$bestfriends = ['Matze' => 'Hess' , 'Flo' => 'Roehrl' , 'Daniel' => 'Baetz'];

foreach($bestfriends as $key => $value)
{
        echo $key." ".$value."</br>";
}
echo "</br>";

unset($bestfriends['Daniel']);

foreach($bestfriends as $key => $value)
{
    echo $key." ".$value."</br>";
}

$best

?>