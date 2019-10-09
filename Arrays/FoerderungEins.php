<?php

$friends=["Berta", "Hans", "Peter"];

$friends[]="Klaus";

foreach($friends as $friend)
{
    echo $friend . "</br>";
}

$ageOfFriends=[18,22,43];
$ageOfFriends[]=1;

$friend1=18;
$friend2=22;
$friend3=43;


echo $friend1+$friend2+$friend3;
echo "</br>";


echo array_sum($ageOfFriends);



echo "</br>";
$sumOfAge=0;


foreach($ageOfFriends as $ageOfFriend)
{
    $sumOfAge=$sumOfAge+$ageOfFriend;
}


echo $sumOfAge;


echo "</br>";



echo count($ageOfFriends);