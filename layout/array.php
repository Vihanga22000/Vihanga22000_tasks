<?php include "header.php";?>

<form action="" method="get">
    <input type='number' placeholder="Enter your First number "name="num1" required>
    <input type='number' placeholder="Enter your Second number "name="num2" required>
    
    <Select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiplication</option>
        <option value="div">Divide</option>
    </Select>
    <input type="Submit" name="cal"value="Calculate">

</form>

<?php
if (isset($_GET['cal'])) {
    $num1=$_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator){
        case "add":
            $result=$num1 + $num2;
            break;
        case "sub":
            $result=$num1 - $num2;
            break;
        case "mul":
            $result=$num1 * $num2;
            break;
        case "div":
            $result=$num1 / $num2;
            break;
        default:
            $result = "Error.you have not selected the correct operator";
    }
if(isset($result)){
    echo "<h2>Result : $result</h2>";
}
}
?> 

<h3> 5.In-class Task Arrays  09.02.2023 (array.php) </h3>

<h4>
1.  Write a php script to display courses as list.
</h4> 
<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 
foreach ($courses as $value) 
{
echo "<li>".$value . "</li>";
}

?> 

 <h3>2.The unset() function is used to remove element from the array.</h3> 
<?php
    $courses1=array("PHP","HTML","JavaScript","CMS","Project");
    unset($courses1["20"]);
    echo "<h6> use unset function to remove the third element of the array </h6>";
    foreach ($courses1 as $value) {
        echo $value."<br>"; 
    } 
    echo "Dumb information about element of the array";
        var_dump($courses1);
    ?>
    <br><br>
    <?PHP
    echo"Print only the values of the array elements";
        $values=array_values($courses1);
        foreach ($values as $value) {
            echo $value . "<br>";}
?>
<br>
 


<h3>3. Sort the following array 
</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "a) ascending order sort by value <br>";
asort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br><br>";
   }
   


echo "b) ascending order sort by Key<br>";
ksort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br><br>";
   }


echo "c) descending order sort by Value<br>";
arsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br><br>";
   }


echo "d) descending order sort by Key<br>";
krsort($courses);
foreach($courses as $x=>$x_value)
   {
   echo  $x_value;
   echo "<br><br>";
   }
?>



<h3>4. Change the following array's all values to upper case.
</h3> 
<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>

<h4>
5. List all your favorite colors and their hexadecimal equivalents.(associative arrays)
</h4> 
<?php 
    $color['#F0F8FF'] = "AliceBlue";
    
    $color['#F5F5DC'] = "Beige";
    
    $color['#000000'] = "Black";
   
    $color['#00FFFF'] = "Aqua";
   
    $color['##DC143C'] = "Crimson";
    
    foreach ($color as $x=>$x_values) {
        echo $x . " => ".$x_values."<br>";}

?><br> 

<h3>
6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h3> 

<?php
    $x=array(78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $sum=array_sum($x);
   
    $count=count($x);
    echo "Average temperature : ".$sum/$count;
    sort($x);
    for ($y=0; $y < 5; $y++) {
        echo $x[$y] . "<br>";
    }
    rsort($x);
    for ($y=0; $y < 5; $y++) {
        echo $x[$y]."<br>";
    }
?>






<?php include "footer.php" ?>

