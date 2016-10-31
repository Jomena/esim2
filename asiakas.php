<?php include "menu.php";?>
<hi1>Asiakkaat</hi1>
<?php
include "yhteys.php";
$sql="SELECT etunimi,sukunimi FROM asiakkaat";

$asiakkaat=$db->query($sql);

if(testi==true) 
{

	foreach ($asiakkaat as $rivi) 
	{
		echo $rivi['etunimi']. ' '.$rivi['sukunimi'].'<br>';
	}
}
else
{
	echo "Tietokantaan ei saatu yhteyttä, ota yhteys ylläpitoon";
}
?>

<?php include "footer.php";?>