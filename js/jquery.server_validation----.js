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
		validtion_script:"services/somescript.php",
		before_validate_callback:function(){
		}
		},options);

		this.each(function(){
		
		var element =$(this);
		var element_id=$(element).attr('id');
		
			$(element).click(function(){
			
				if(typeof(settings.before_validate_callback) == "function")
				{
					settings.before_validate_callback();
				}
				$(element).button('loading');
				
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
		    		 url: settings.validtion_script,
		     		data: formdata,
		    		 dataType:"json",
		    		 success: function(error_obj)
		     			{
						
						error_status = error_obj[0];
						error_obj = error_obj[1];
		     				  if(error_status==true)
		     				  {
									message = '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+error_obj+'</div>';
									$(message).insertBefore('#'+settings.form_id);
									//$('#'+settings.form_id).submit();
									error_obj="";
		     				  }

					   $('.error-message').remove();
		               $('.control-group').removeClass('has-error');
					   $('.form-group').parent().removeClass('has-error');
					   $('.form-group').removeClass('has-error');
						
						var top = 50000;
						if(error_obj.length>0){
							for(var x in error_obj)
							{
								$("<span class='help-block error-message'> "+error_obj[x].error+"</span>").insertAfter('[name="'+error_obj[x].error_field+'"]');
								$('[name="'+error_obj[x].error_field+'"]').parent().parent().addClass('has-error');
								
								elemt_top = parseInt($("[name="+error_obj[x].error_field+"]").offset().top);
								if(elemt_top<top)
								{
									top = elemt_top;
								}
							}
							
							$('html,body').animate({
							scrollTop: top-100},'slow'
							);
						}
						
						
							 
						$(element).button('reset');
						}
		     		})

			});
		});
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