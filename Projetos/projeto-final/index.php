<html>

<head>
<title>Exemplo</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual: ' . phpversion() . '<br>';

$servername = "172.20.70.218";
$username = "root";
$password = "laranja@77";
$database = "meubanco";

$link = new mysqli($servername, $username, $password, $database);

/* checking connection... */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "Record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>