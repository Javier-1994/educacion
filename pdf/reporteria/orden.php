<?php
	
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../login.php");
		exit;
    }
	
	
	/* Connect To Database*/
	include("../../config/db.php");
	include("../../config/conexion.php");
	/*
	$numero=$_POST['n_orden'];
	$sql_count=mysqli_query($con,"select * from orden_laboratorio where numero_orden ='".$numero."'");
	$count=mysqli_num_rows($sql_count);
	if ($count==0)
	{

	echo "<script>alert('No hay examenes agregados a orden')</script>";
	echo "<script>window.close();</script>";
	exit;
	}
*/
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
		
	//Variables por GET
	//$expediente=$_GET['expediente'];
	
     
	$numero_orden=$_GET['numero_orden'];
	//$fecha=date("d/m/Y",strtotime($_GET['fecha']));
	

	//Fin de variables por GET
/*
	$sql=mysqli_query($con, "select LAST_INSERT_ID(numero_orden) as last from ordenes order by id_orden desc limit 0,1 ");
	$rw=mysqli_fetch_array($sql);
	$numero_factura=$rw['last']+1;	
	*/
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/../../vistas/orden.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        // send the PDF
        $html2pdf->Output('Factura.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }


