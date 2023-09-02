<?php

include("ventas_base.php");
include("../../includes/connect.php");
include("../../includes/funciones_varias.php");

$mes_anio=date("n/Y");




echo "<center>";




?>
<font1>Listado x marca</font1>

<form action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="POST">
<font1>Desde:<input type="text" name="fecha_desde" value="<?php if( $_POST["fecha_desde"] ){ echo $_POST["fecha_desde"]; }else{ echo "1/".$mes_anio; } ?>" size="8"></font1>
<font1>Hasta:<input type="text" name="fecha_hasta" value="<?php if( $_POST["fecha_hasta"] ){ echo $_POST["fecha_hasta"]; }else{ echo "31/".$mes_anio; } ?>" size="8"></font1>




<?php

echo '<input type="submit" name="ACEPTAR" value="ACEPTAR"><br>';
echo '</form>';



$query="select * from ventas limit 0,1000";
$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}


echo '<table class="t1">';
echo "<tr>";
    echo "<th>id</th>";
    echo "<th>numero_venta</th>";
    echo "<th>marca</th>";
    echo "<th>descripcion</th>";
    echo "<th>clasificacion</th>";
    echo "<th>subclasificacion</th>";
    echo "<th>cantidad</th>";
    echo "<th>precio_unitario</th>";
    echo "<th>sucursal</th>";
    echo "<th>tipo_pago</th>";
    echo "<th>vendedor</th>";
    echo "<th>fecha</th>";
    echo "<th>hora</th>";
    echo "<th>id_articulos</th>";
    echo "<th>contenido</th>";
    echo "<th>presentacion</th>";
    echo "<th>costo</th>";
    echo "<th>uuid</th>";
    echo "<th>promocion</th>";
    echo "<th>id_cliente</th>";
    echo "<th>tarjeta</th>";
    echo "<th>tarjeta_pagos</th>";
    echo "<th>tarjeta_monto_pagos</th>";
    echo "<th>color</th>";
    echo "<th>tiquet</th>";
    echo "<th>descuento</th>";
echo "</tr>";

while($row=mysql_fetch_array($result)){
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["numero_venta"].'</td>';
    echo '<td>'.$row["marca"].'</td>';
    echo '<td>'.$row["descripcion"].'</td>';
    echo '<td>'.$row["clasificacion"].'</td>';
    echo '<td>'.$row["subclasificacion"].'</td>';
    echo '<td>'.$row["cantidad"].'</td>';
    echo '<td>'.$row["precio_unitario"].'</td>';
    echo '<td>'.$row["sucursal"].'</td>';
    echo '<td>'.$row["tipo_pago"].'</td>';
    echo '<td>'.$row["vendedor"].'</td>';
    echo '<td>'.$row["fecha"].'</td>';
    echo '<td>'.$row["hora"].'</td>';
    echo '<td>'.$row["id_articulos"].'</td>';
    echo '<td>'.$row["contenido"].'</td>';
    echo '<td>'.$row["presentacion"].'</td>';
    echo '<td>'.$row["costo"].'</td>';
    echo '<td>'.$row["uuid"].'</td>';
    echo '<td>'.$row["promocion"].'</td>';
    echo '<td>'.$row["id_cliente"].'</td>';
    echo '<td>'.$row["tarjeta"].'</td>';
    echo '<td>'.$row["tarjeta_pagos"].'</td>';
    echo '<td>'.$row["tarjeta_monto_pagos"].'</td>';
    echo '<td>'.$row["color"].'</td>';
    echo '<td>'.$row["tiquet"].'</td>';
    echo '<td>'.$row["descuento"].'</td>';
    echo '<td><A HREF="ventas_ingreso.php?id_ventas='.$row["id"].'"><button>Modificar</button></A></td>';
    echo '<td><A HREF="ventas_eliminar.php?id_ventas='.$row["id"].'"><button>Eliminar</button></A></td>';
    echo "</tr>".chr(10);
}
?>
</table></center>
