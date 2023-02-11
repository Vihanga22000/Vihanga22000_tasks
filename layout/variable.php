<?php include "header.php"; ?>

<h3>Exersize 3. in class task Variables & Operators</h3>

<h2>

1. Create a simple html form to get Firstname and Lastname from the user and use 
echo echo statement to print using  tag: Hello …., You are welcome to my site. 
</h2>

<form action="action.php" method="post">
    <div class="row">
        <div class="col">
        <input type ="text" name="fname" required placeholder="First Name" class="form-control"></br>
    </div>
        <div class="col">
        <input type ="text"  name="lname" required placeholder="Last Name" class="form-control"></br></div>
     </div> 
     Birth Date: <input type ="date" name="bdate"></br>
     Select favourite color: <input type ="color" name="color"></br>
    <input type="submit" value="submit">

    </form>

    <h3>3.3 Prepare a simple html table and apply bootstrap style to the table.</h3>
    <table class="table table-bordered">
<tr>
<th> SNo </th><th> First Name </th><th> Last Name </th> 
</tr>
<tr>
<th> 1 </th><th> Pekka </th><th> Moore </th> 
</tr>
<tr>
<th> 2 </th><th> Johanna </th><th> Don </th> 
</tr>
<tr>
<th> 3 </th><th> John </th><th> Lah </th> 
</tr>
</table>

<h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  </h3>
<?php
$fname = "Vihanga";
$lname = "Gunathilaka";

echo "My name is $fname $lname.";
echo "<br> Lenght of my first name is ".strlen($fname);
echo "<br> Lenght of my last name is ".strlen($lname);
?>

<h3> 5.Write a script to add up the numbers: 298, 234, 46.Use variables to store these numbers and 
echo statement to output your answer.</h3>
<?php $num1="298";
  $num2="234";
  $num3="46";
$total = $num1+$num2+$num3;
echo "Total=".$total;
?>
<h3>6.Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h3>

<?php echo $_SERVER['HTTP_USER_AGENT'] . "\n"; ?>

<h3>7.(Did in footer)Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file</h3>



     

<?php include "footer.php" ?>