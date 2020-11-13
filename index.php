<!DOCTYPE html
<html>
<head>
<link rel="stylesheet" href="style.css">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-bbieniekb">Github</a></br>
    <div>
       <a href="orgPracownicy.php">organizacjaPracownicy.php</a><br/>
       <a href="funkcAgregujace.php">funkcjeAgregujace.php</a><br/>
    </div>
    <h1>Bartosz Bieniek nr 2</h1>
</head>
<body>
<?php
$servername = "mysql-bbieniekb.alwaysdata.net";
$username = "bbieniekb";
$password = "dorsz1234";
$dbname = "bbieniekb_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT imie FROM pracownicy where dzial=2";
    echo("zadanie 1");
    echo($sql);
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    $sql = "SELECT imie FROM pracownicy where (dzial=2) or (dzial=3)";
    echo("zadanie 1");
    echo($sql);
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

    $sql = "SELECT * FROM pracownicy where zarobki<30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  ?>
  </body>
  </html>
