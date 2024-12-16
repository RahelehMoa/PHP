

<?php

    
/*
if (If this condition is met. )

{

The desired commands if the condition is met.

}

*/

// == that is Equal that shows checking.
// && that is And.
// || that is or.
// != that is not Equal
// > that is greater
// < that is smaller 
// <= that is smaler and equal 
// >= that is greater and Equal
// <> that is not Equal.

$user = "Raheleh";
$pass = "123";
$number = 10;

//  if ($user == "Raheleh" && $pass == "123")
//  if ($user == "Raheleh" || $pass == "1234")
//  if ($user == "Raheleh" || $user == "Amir")
//  if ($user != "Raheleh")
//  if ($user != "Amir")
//  if ($number > 10)
//  if ($number >= 10)
//  if ($number <= 10)

/*if ($number <> 10)
{

echo "yes";

}

else{
 
    echo "no";

}
    */
    
    
if ($number <> 10)
    
   {
    
    echo "yes";
    
    }
    
elseif($user == "Amir")

     {

      echo $user;

      }

    else{
     
        echo "no";
    
    } 
/* Note: when one condition is met that is shown otherwise it will go next condition .
 at the end , when all condition no met that is shown end condition. */
    

?> 







