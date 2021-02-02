<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Get Assignment</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>

    
    <body onLoad="location.href='getassignment.php?first=Bashar&last=Abdulraheem&age=33'">
    <!--<a href ="getassignment.php?first=Bashar&last=Abdulraheem&age=40"><b>FOR RESULT CLCIK HERE</b></a>-->
    

    <div class="topnav">
    <p class="currentdate" href="date">Today is <?php $today = date("m/d/Y"); 
    echo $today; ?></p>
    </div>

<div class ="text">
<h3>
<?php

$first_name = filter_input(INPUT_GET,'first' , FILTER_SANITIZE_STRING);
//echo $first_name;
$last_name = filter_input(INPUT_GET,'last' , FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET,'age' , FILTER_SANITIZE_STRING);

//echo htmlspecialchars($first_name);

if (!empty($first_name && $last_name)){

echo "Hello, my name is " . $first_name . " " . $last_name . ".<br>";}

else {
    echo "You did not submit firstname and lastname parameters";

}
?></h3>
    

<?php
if (!empty($age)){
echo "I am " ;
echo $age ;

if ($age >= 18){
echo " years old, and I am old enough to vote in the United States. <br>";
}

else {
        echo " years old, and I am not old enough to vote in the United States. <br>";
     }


     echo "<br>";
     echo "That means I'm at least ";
     echo number_format($age * 365);
     echo  " days old.";
     

    }

    else {
        echo "You did not submit a numeric age parameter";
    }



?>
</div>
</body>
</html>