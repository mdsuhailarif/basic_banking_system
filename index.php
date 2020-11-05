<?php
$host        = "host = ec2-52-73-199-211.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8h0u8kh19dh36";
   $credentials = "user = qownjuhbawznbz password=368dd7b964487933e40c9d030fd89399ae054c69a15b3f210ad7eea2917bebd";

   $db = pg_connect( "$host $port $dbname $credentials"  );

if($db)
{echo "DONE";}
else
{echo "Failed";}

$sql =<<<EOF
   CREATE TABLE IF NOT EXISTS customers
   (USERNAME TEXT,
    EMAIL TEXT  NOT NULL UNIQUE Primary Key,
    CURRENT_BALANCE REAL); 
EOF;
 
$ret = pg_query($db, $sql);
   pg_close($db); 
include_once("Homepage.html");

?>
