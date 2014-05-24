<?php

include("parser.php");
$html = file_get_html('output.php');

$html->find('tr');
foreach($html->find('tr') as $tr )
{

	echo $tr . '<br>';
}

?>
