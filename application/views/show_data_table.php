<?php
    //print_r($result);
   if($result){
	echo "<table style='border: 1px solid'>";
    foreach ($result as $row) {
    	# code...
    	echo "<tr>";
    	foreach ($row as $column ) {
    		# code...
    		echo "<td>".$column."</td>";
    	}
    	echo "</tr>";
    }
    echo "</table>";
  }
  else{
    echo "No rows found in Table";
  }
?>