<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="buttons">
    <a class="btn effect01" href="https://github.com/AD-2018/sql-php-pierwsza_strona-bbieniekb">Github</a></br>
       <a class="btn effect01" href="/index.php">Główna</a><br/>
        <br/>
    <h3>Bartosz Bieniek</h3>
    </div>
<?php
echo("Jestem tutaj: <br>Data i Czas</br>");
    
    require_once "connect.php";
    
$sql = "SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>dzial</th><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND nazwa_dzial='serwis'";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>data urodzenia</th><th>nazwa_dzial</th><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');

$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy,organizacja WHERE id_org=dzial AND nazwa_dzial='handel'";
echo("<h3>ZADANIE 4</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>wiek</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['wiek']."</td>");
    echo ('</tr>');
}
echo ('</table>');
    
?>

</body>
</html>
