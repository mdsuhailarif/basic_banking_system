<?php
$host        = "host = ec2-52-73-199-211.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8h0u8kh19dh36";
   $credentials = "user = qownjuhbawznbz password=368dd7b964487933e40c9d030fd89399ae054c69a15b3f210ad7eea2917bebde";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql = "UPDATE customers SET current_balance='$_POST[amount]' WHERE email = '$_POST[email]'";

   		$ret = pg_query( $sql);
   		if(!$ret) {
   		   echo "Updation failed";
   		} 
		 else {
			$query = "SELECT * FROM customers"; 
			$rs = pg_query($db, $query);
			if(!$rs)
			{ echo "failed";}
			 else {echo "success<br>";}
			 $bp = pg_fetch_row($rs);
			 if(!$bp)
				 {
   		   echo "Fetch failed";
   		} 
				 
			echo "<table>";
			while ($row = pg_fetch_row($rs))  	
			 { echo "<tr><td>"; echo "$row[0]"; echo "</td> <td>"; echo "$row[1]"; echo "</td> <td>"; echo"$row[2]"; echo"</td></tr>"; }
			 echo "</table>";	
			   pg_close($db);		 
			 
			 
   		   	include_once("customer.html ");
   			}




?>
