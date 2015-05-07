<table style="width:100%">
<thead>
	<tr>
		 <th class="hi1" >Nom</th>
		 <th class="hi2">Valeur</th>
		 <th class="hi3">Ref</th>
	</tr>
</thead>
<?php
//print_r($rows);
foreach ($rows as $node) : 
?>  
	<tr>
		<td class="hi1"><?php print $node->title; ?></td>
		<td class="hi2"> <?php print $node->field_valeur['und'][0]['value']; ?></td> 
		<td class="hi3"><?php print $node->field_ref['und'][0]['value']; ?></td>
	</tr>
<?php			
endforeach;
?>
</table>



