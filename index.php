<?php

require_once("./src/DmarcParser.php");

// DB order: 'dbhost', 'dbuser', 'dbpass', 'dbname'
$parser = new DmarcParser( 'localhost', 'dmarc', 'dmarc', 'dmarc' );

$files = array_diff(scandir("./reports"), array('..', '.'));

$adjusted = array();
foreach($files as $file)
{
  $Newfile = "./reports/" . $file;
  array_push($adjusted, $Newfile);
}

echo($parser->parse($adjusted));

echo("success!\n");
