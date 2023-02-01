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


<h3>3.4 Variable in PHP</h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<h3>3.5 Table & Variable</h3>
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
<?php include "footer.php"?>

