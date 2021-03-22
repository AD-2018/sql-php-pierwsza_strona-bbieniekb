<!DOCTYPE html>
<html>
<head>
    <h1>Bartosz Bieniek nr 2</h1>
</head>
<body>

<link rel="stylesheet" href="/style.css">
    <br/>
    <br/>
    <div class="buttons">
    <a class="btn effect01" href="https://github.com/AD-2018/sql-php-pierwsza_strona-bbieniekb">Github</a></br>
       <a class="btn effect01" href="pracownicy/orgPracownicy.php">organizacjaPracownicy</a><br/>
        <br/>
        <br/>
       <a class="btn effect01" href="pracownicy/funkcAgregujace.php">funkcjeAgregujace</a><br/>
        <br/>
        <br/>
        <a class="btn effect01" href="pracownicy/data.php">Data i Czas</a></br>
    <br/>
    <br/>
        <a class="btn effect01" href="pracownicy/formularz.html">Formularz</a></br>
    <br/>
<br/>
        <a class="btn effect01" href="pracownicy/insert.php">insert</a></br>
    <br/>
<br/>
        <a class="btn effect01" href="pracownicy/danedobazy.html">Dane do Bazy</a></br>
    <br/>
<br/>
        <a class="btn effect01" href="pracownicy/delete.php">Delete</a></br>
    <br/>
<br/>
<br/>
        <a class="btn effect01" href="biblioteka/ksiazki.php">Ksiazki</a></br>
    <br/>
    <br/>
        <a class="btn effect01" href="gridcss/">Ksiazki</a></br>
    <br/>
    
    </div>
    
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
