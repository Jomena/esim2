<?php include 'menu.php'; ?>
<h1>Php Array</h1>
<?php
$asiakkaat=array(
	array("en"=>'Mikko',"sn"=>'Virtanen'),
	array("en"=>'Antti',"sn"=>'Tuovinen'),
	array("en"=>'Matti Antti Aukusti',"sn"=>'Huovinen'),
	array("en"=>'Dj',"sn"=>'Ykaeykae')
	);
echo "<h2>Print_r</h2>";
print_r($asiakkaat);
?>
<h2>Tulostus foreach-loopilla</h2>
<?php
foreach ($asiakkaat as $rivi) {
	echo 'Etunimi '.$rivi['en'].' Sukunimi '.$rivi['sn'].'<br>';
}
?>
<h2>Tulostus taulukkona </h2>
<TABLE border=2>
	<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
	<?php
	foreach ($asiakkaat as $rivi) 
	{
		echo '<tr><td>'.$rivi['en'].'</td><td>'.$rivi['sn'].'</td></tr>';
	}
	?>
</TABLE>

<?php include 'footer.php'; ?>