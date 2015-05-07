(function($, Drupal)
{
	// Our function name is prototyped as part of the Drupal.ajax namespace, adding to the commands:
	Drupal.ajax.prototype.commands.afterAjaxCallbackExample = function(ajax, response, status)
	{
		// The value we passed in our Ajax callback function will be available inside the
		// response object. Since we defined it as selectedValue in our callback, it will be
		// available in response.selectedValue. Usually we would not use an alert() function
		// as we could use ajax_command_alert() to do it without having to define a custom
		// ajax command, but for the purpose of demonstration, we will use an alert() function
		// here:
		//alert(response.selectedValue);
			jQuery(".hi1").show();
			jQuery(".hi2").show();	
			jQuery(".hi3").show();	
			
		if(response.selectedValue==1){ 
			//$commands[] = ajax_command_remove('.hi2');
			//$commands[] = ajax_command_remove('.hi3');  
			jQuery(".hi2").hide();	
			jQuery(".hi3").hide();				
		}
		if(response.selectedValue==2){
			//	$commands[] = ajax_command_remove('.hi1');
			//	$commands[] = ajax_command_remove('.hi2');
			jQuery(".hi1").hide();	
			jQuery(".hi3").hide();
		}
		if(response.selectedValue==3){
			//	$commands[] = ajax_command_remove('.hi1');
			//	$commands[] = ajax_command_remove('.hi2');
				
			jQuery(".hi1").hide();	
			jQuery(".hi2").hide();
		}

		 //jQuery("table").hide();

	};
}(jQuery, Drupal));