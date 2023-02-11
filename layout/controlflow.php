<?php include "header.php";?>
<h3>1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h3>
<?php
$month = date('F');
if ($month == 'August'){
    echo "It's August, so it's still holiday.";
    }
else{
    echo "Not August, this is Month-name so I don't have any holidays";
    }
?>


<h3>2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php
$color = 'Red';
if ($color == 'Red'){
    echo "The color is red. ";
    }
else{
    echo "The color is not red.";
    }
?>

<h3>3.Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
</h3>

<?php
$score = 100;
if ($score > 80)
    {
    echo "Excellent ";
    }
elseif ($score > 70) 
    {
    echo "Great ";
    }
elseif ($score > 60) 
    {
    echo "Good ";
    }  
elseif ($score > 50) 
    {
    echo "Pass ";
    }  
elseif ($score < 50) 
    {
    echo "Fail ";
    }
?>
<h3>4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h3>
<?php
$a = readline('Enter the age : ');
$b = readline('Enter the name : ');

if ($a>18){
    echo "eligible for voting. ";
    }
else{
    echo "not eligible for voting";
    }
?>


<?php include "footer.php" ?>

