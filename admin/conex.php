

    <?php
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhos t
$usuario = "agat"; //El usuario que acabamos de crear en la base de datos
$contrasenha = "Uni095359"; //La contraseña del usuario que utilizaremos
$BD = "bd"; //El nombre de la base de datos

$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "myserveruni.mysql.database.azure.com", "agat@myserveruni",$contrasenha, $BD , 3306);
    ?> 