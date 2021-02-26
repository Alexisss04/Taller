<!DOCTYPE html>
<html lang="es">
<head>
<title>Volumenes</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
<link rel="stylesheet" href="css/salario.css" />
<link rel="stylesheet" href="css/links.css" />
<script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<header id="inset">
<h1>Conversion de Areas</h1>
</header>
<section>
<article>
<?php
if(isset($_POST['enviar'])){
//esfera
$cm3 = isset($_POST['cm3']) ? $_POST['cm3'] : "";
$m3 = isset($_POST['m3']) ? $_POST['m3'] : "";
$p3 = isset($_POST['p3']) ? $_POST['p3'] : "";
//esfera
$Ecm3 = isset($_POST['Ecm3']) ? $_POST['Ecm3'] : "";
$Em3 = isset($_POST['Em3']) ? $_POST['Em3'] : "";
$Ep3 = isset($_POST['Ep3']) ? $_POST['Ep3'] : "";
//tetraedro
$Tcm3 = isset($_POST['Tcm3']) ? $_POST['Tcm3'] : "";
$Tm3 = isset($_POST['Tm3']) ? $_POST['Tm3'] : "";
$Tp3 = isset($_POST['Tp3']) ? $_POST['Tp3'] : "";


//esfera
$centimetros =($cm3*$cm3)*4*3.1416;
$metros = ($centimetros/1000);
$pulgadas = ($p3*0.061024);
//cubo
$centimetros2 = ($Ecm3*$Ecm3*6);
$metros2 = ($centimetros2/1000);
$pulgadas2 = ((4/3)*3.14159*($Ep3^3)*0.061024);
//cilindro
$centimetros3 = ($Tcm3);
$metros3 = ($Tm3);
$pulgadas3 = (2*3.14*$metros3*($centimetros3+4)/1000);

echo "<div>\n<h3>Area de esfera</h3>\n";
echo "<table>\n";
echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalles\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<td>\n\t\t\tArea: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$cm3,"\n\t\t</td>\n\t\t\t</tr>\n";

echo "\t<tr>\n\t\t<th>\n\t\t\tTotal area es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $centimetros, "\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<th>\n\t\t\tTotal en milimetros es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $metros, "\n\t\t</th>\n\t</tr>\n";
echo "</table>\n</div>\n";

echo "<div>\n<h3>Area de Cubo</h3>\n";
echo "<table>\n";
echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalles\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<td>\n\t\t\tArea: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t ", $Ecm3, "\n\t\t</td>\n\t</tr>\n";

echo "\t<tr>\n\t\t<th>\n\t\t\tTotal area: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $centimetros2, "\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<th>\n\t\t\tTotal en milimetros: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $metros2, "\n\t\t</th>\n\t</tr>\n";
echo "</table>\n</div>\n";


echo "<div>\n<h3>Area de Cilindro</h3>\n";
echo "<table>\n";
echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalles\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<td>\n\t\t\tRadio es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$Tcm3,"\n\t\t</td>\n\t\t\t</tr>\n";
echo "\t<tr>\n\t\t<td>\n\t\t\tBase es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t ", $Tm3, "\n\t\t</td>\n\t</tr>\n";


echo "\t<tr>\n\t\t<th>\n\t\t\tRadio es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $centimetros3, "\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<th>\n\t\t\tBase es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $metros3, "\n\t\t</th>\n\t</tr>\n";
echo "\t<tr>\n\t\t<th>\n\t\t\tTotal es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t", $pulgadas3, "\n\t\t</th>\n\t</tr>\n";
echo "</table>\n</div>\n";
}
?>

<a href="volumenes.html" class="a-btn">
<span class="a-btn-symbol">i</span>
<span class="a-btn-text">Regresar</span>
<span class="a-btn-slide-text">Probar de nuevo</span>
<span class="a-btn-slide-icon"></span>
</a>
</article>
</section>
</body>
</html>