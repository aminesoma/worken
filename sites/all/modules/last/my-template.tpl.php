
<?php
foreach ($my_var as $node) : 
			$field_image = field_get_items('node', $node, 'field_image'); 
			$options = array('absolute' => TRUE);
			$url = url('node/' . $node->nid, $options);
			$pic=theme('image_style', array('style_name' => 'thumbnail', 'path' => $field_image[0]['uri']));
			$sum=$node->body['und'][0]['summary'];
			?>
			<h1>Titre: <a href="<?php print $url;?>"><?php print $node->title; ?></a></h1>
			<br /><?php print $pic ;?>
			<br /><?php print $sum; ?>
			<br /><a href="<?php print $url;?>">Read more</a>
			<br /><br />
			<?php
endforeach;
?>

