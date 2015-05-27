<?php
    echo " <option id='no_table_sel'>Not-selected</option>";
	foreach($tables as $table)
        {
          echo "<option id='".$table[0]."'>";
          echo $table[0];
          echo "</option>";
        }
?>