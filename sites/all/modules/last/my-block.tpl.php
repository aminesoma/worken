<?php

foreach ($my_block as $row) {
	 
	  // Do something with each $record
	  $options = array('absolute' => TRUE);
      $url = url('node/' . $row->nid, $options);
	  print_r("<a href=$url>$row->title</a><br />");
	}
	?>


