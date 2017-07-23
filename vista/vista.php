<?php  
	require "../modelo/consulta.php";
	$objConsulta = new Consulta();
?>
<head>
<title>Consultar datos de una Base de Datos PHP-MYSQL</title>
</head>
<body bgcolor="#999999">
	<form method="post" action="../controlador/controlador.php" >     
    <center>
    <font color="#FF0000" size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><b><i>Consultar datos de una Base de Datos PHP-MYSQL</i></b></font>	    
    <br />
    <font size="+2" color="#006600" face="Palatino Linotype, Book Antiqua, Palatino, serif">Autor: codigoweblibre.comli.com</font>
    <br /><br />   
    <input type="submit" name="consultar" id="consultar" value="Consultar" />
    </center>
        <?php 
			if(isset($_GET["visualizar"])){
				$objConsulta->listar();			
			} 
		?>
    </form>              
</body>
</html>