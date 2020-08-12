<?php
$con = new mysqli("localhost", "id14574288_caffin_ema", "=WkRbPpb4(a>Igr5", "id14574288_caffin");
if ($con->connect_errno)
{
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
?>

