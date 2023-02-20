<?php 
$title = "Exercise1";
include "header.php"?>
 <h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
<?php
//opening tag
echo "Hello Finland MY name is VIhanga<br>";
echo "BBCAP22 team 7";
?>
    <h1>Write the PHP code in to display the current date.</h1>

<?php
//opening tag
echo "team 7";
?>
<h1>Current Date</h1>
<?php echo date("d.m.Y")?>
</br>
<script>
document.write("Hello this is JavaScript");
</script> 

<noscript>
Please enable JavaScript to view this content
</noscript>
<input type="button" onclick="hello()" value="Click me">


<h3>3.4 Variable in PHP</h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<script>
    // //window.alert
    // window.alert("This will trigger an alert box");
    // window.alert(5+10);
    document.write("Hello this is interesting");
</script>

<h3>3.5 Table & Variable</h3>
<button onclick="add()">Click to Add</button>
<hr>
<p id ="place1" style="color:red; background-color:yellow;"> </P>
<span id ="place2" style="color:red; background-color:yellow;"></span>
<script>
    document.getElementById("place1").innerHTML = "This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span
    ";
</script>
<?php
$g1 =5;
$g2 =4;
$g3 =3;
echo"
<table>
<tr>
<th> S.N </th><th> Name</th> <th>Grade</th>
</tr>

<tr>
<td> 1 </td><td> pekka</td> <td>$g1</td>
</tr>

<tr>
<td> 2 </td><td> Johanna </td> <td>$g2</td>
</tr>
<tr>
<td> 3 </td><td> John </td> <td>$g3</td>
</tr>
</table>
";
?>
<h3> 4 Screenshot of the development environment</h3>
<img src="ss1.png"alt="">
<h2>Changing background-color</h2>
<form action="">
    <input type="color" name="background" onchange="changeColor('background',this.value)">
</form>
<?php include "footer.php"?>

