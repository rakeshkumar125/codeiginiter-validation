/* 
	Validation  Plugin 
  	Created on : Thursday, June 13, 2013
  	Programmer : Shishir raven
  
  Description: adds valiation to the form specified checking the form Server Side.
	 
	How to use: 
	
	Step 1 : Include this file into the form file

	Step 2: Write the following code

   $('#button_id').server_validation({
		form_id:'myform_without#',
		validtion_script:'services/script_that_will_return_json.php'
	});*/

jQuery.fn.server_validation = function(options){
//For each matching class
var settings = jQuery.extend({
		form_id	:"myfrom",
		button_id : "",
		validtion_script:"services/somescript.php",
		before_validate_callback:function(){
		},
		after_success:function(){
		}
		},options);

		//this.each(function(){
		
		var element =$(this);

		var element_id=$(element).attr('id');

		//$(element).click(function(){
		$(document).on("click", '#'+settings.button_id, function() { 
			
				if(typeof(settings.before_validate_callback) == "function")
				{
					settings.before_validate_callback();
				}
				var button_name = $(element).html();
				//$(element).button('loading');
				
				var formdata= $('#'+settings.form_id).serialize();
				var filetype = "";
				$('input[type=file]',$('#'+settings.form_id)).each(function(){
					param_name = $(this).attr('name');
					param_value = $(this).val();
					filetype = filetype + '&'+param_name+"="+param_value;
				})
				
				formdata = formdata + filetype;
				
		   		$.ajax({
		    		type: "POST",
		    		url: $('#'+settings.form_id).attr("action"),
		     		data: formdata,
		    		dataType:"json",
		    		beforeSend:function(){ $(element).html("loading"); },
		    		success: function(error_obj)
		     			{
		     				   $('.error-message').remove();
				               $('.control-group').removeClass('has-error');
							   $('.form-group').removeClass('has-error');
		     				  if(error_obj.status==false)
		     				  {
		     				  	//for display response message
		     				  	if($('#'+settings.form_id).find("#form_response").length>0){
		     				  		$('#'+settings.form_id).find("#form_response").html(alert_message(error_obj.data[0].error));
		     				  	} 

		     				  	//for redirecting the page after successful complete
		     				  	if(error_obj.data.length>1 && error_obj.data[1].link.length>0){
		     				  		location.href= error_obj.data[1].link;
		     				  	}

		     				  	//$('#'+settings.form_id)[0].reset();
		     				  	$(element).html(button_name);
								$(element).removeAttr('disabled');
								$(element).removeClass('disabled');
								
								//call the callback fundtion
								if(typeof(settings.after_success) == "function"){
									settings.after_success.call();
								}					
		     				  } else {
		     				  	
		     				  	var top = 50000;
								var error = error_obj.data
								for(var x in error)
								{	
									$("<span class='help-block error-message'> "+error[x].error+"</span>").insertAfter('[name="'+error[x].error_field+'"]');
									$('[name="'+error[x].error_field+'"]').parent().addClass('has-error');
									elemt_top = parseInt($("[name="+error[x].error_field+"]").offset().top);
									if(elemt_top<top)
									{
										top = elemt_top;
									}
				                }
								
								$('html,body').animate({scrollTop: top-100},'slow');
								$(element).html(button_name);
								$(element).removeAttr('disabled');
								$(element).removeClass('disabled');
		    			 	
		    			 	}	

		    			 }
		     		})

			});
		//});
	}


//reset error inputs
$(document).on('click',"input[type='reset'],button[type='reset']",function(){
	$(".form-group").removeClass("has-error");
	$("span.help-block").remove();

});

function goToByScroll(element_name){
        $('html,body').animate({
            scrollTop: parseInt($("[name="+element_name+"]").offset().top)-100},
            'slow');
    }

function alert_message(message){
	var message = '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+message+'</div>';
	return message;
}    