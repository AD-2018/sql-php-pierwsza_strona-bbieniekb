<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-bbieniekb">GitHub</a></br>
<div class="nav">
    <a href="index.php">Pracownicy</a>
    <a href="orgPracownicy.php">Pracownicy i Organizacja</a></br>
    <a href="funcAgregujace.php">Funkcje agregujące</a></br>
    <h3>Kacper Radecki</h3>
</div>
</body>
</html>
<?php
$servername = "mysql-bbieniekb.alwaysdata.net";
$username = "bbieniekb";
$password = "dorsz1234";
$dbname = "bbieniekb_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
echo("<br>Zad 1 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like '%a' and (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
