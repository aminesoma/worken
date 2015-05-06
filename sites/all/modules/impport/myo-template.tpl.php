
<table style="width:100%">
<thead>
  <tr>
     <th>Non</th>
	 <th>Valeur</th>
     <th>Ref</th>
  </tr>
 </thead><?php
foreach ($rows as $node) : 


          ?>  
		  <tr>
			<td><?php print $node->title; ?></td>
			<td>12</td> 
			<td>RT50</td>
		  </tr>


<?php

			
endforeach;
?>

</table>



<script>
jQuery( document ).ready(function() {
	jQuery( "#edit-filter-nom" ).change(function() {
		 jQuery("table").hide();
	});
});
</script>