<?php
		require "../conexion/conexion.php";

		class Consulta{
			var $conn;
			var $conexion;
			function Consulta(){
				$this->conexion = new  Conexion();
				$this->conn=$this->conexion->conectarse();
			}
			function listar(){
				$sql="select * from usuarios";
				//$rs=mysql_query($sql,$this->conn); //tipo de conexion 1
				$rs=mysqli_query($this->conn,$sql); //tipo de conexion 2
				echo "<table border='0' align='center'><tr><th>Codigo</th><th>Nombres</th><th>Apellidos</th><th>Tel&eacute;fono</th><th>Ciudad</th>";
				//while($datos=mysql_fetch_array($rs)){//tipo de conexion 1
				$arrNombre = array();
				while($datos=mysqli_fetch_array($rs)){ //tipo de conexion 2
					$arrNombre[$datos["codigo"]] = $datos["nombres"];
					/*echo "<tr><td>".$datos["codigo"]."</td>".
							  "<td>".$datos["nombres"]."</td>".
							  "<td>".$datos["apellidos"]."</td>".
							  "<td>".$datos["telefono"]."</td>".
							  "<td>".$datos["ciudad"]."</td>".
					"</tr>";*/
				}
				foreach ($arrNombre as $key => $value) {
					echo "<tr><td>".$key."->".$value."</td></tr>";
				}
				echo "</table>";
			}
		}
?>



