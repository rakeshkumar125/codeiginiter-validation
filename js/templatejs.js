$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
	
	if($('.row-offcanvas').hasClass('active')){
	
		$(this).find("i").removeClass();
		$(this).find("i").addClass("fa fa-chevron-right");
	} else{
		
		$(this).find("i").removeClass();
		$(this).find("i").addClass("fa fa-chevron-left");	
	}				
	
	$('.row-offcanvas').toggleClass('active');
	
  });

  //code for global pop up
  //      $('[data-toggle="modal"]').click(function(e) {
    $(document).on("click", '[data-toggle="modal"]', function(e) {

        e.preventDefault();
        var url = $(this).attr('href');
        if (url.indexOf('#') == 0) {
            $(url).modal('open');
        } else {
            $.get(url, function(data) {
                $('<div class="modal fade">' + data + '</div>').modal({backdrop: 'static', keyboard: false});
            });
        }
    });
    $(document).on("keypress", '#skill', function(event) {

      if (event.keyCode === 10 || event.keyCode === 13) 
        event.preventDefault();

    });

    

    //code for skill suggestion
   /* $("#skill" ).autocomplete({
      source: "search.php",
      minLength: 2,
      select: function( event, ui ) {
       // log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }
    });*/
     
});

$(function () {

	$(".scroll").click(function(){
  		$('html, body').animate({
          scrollTop: ($("#"+this.target).offset().top-55)
		}, 2000);
	});

}); 

function init_skill_list(){
if($("#skill" ).length>0){
  $("#skill" ).autocomplete({
      source: base_url+"user/skill_list",
      minLength: 2,
      select: function( event, ui ) {
       // log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }
    });
  }
}
function clear_popup(){
  $(".modal").remove();
  $(".modal-backdrop").remove();
}



function load_strength(){
  $.getJSON(base_url+"user/get_strength").done(function(data){
  //console.log(data);
    $(".strength_cover").remove();
    $("#strenght_template").tmpl(data).appendTo("#strength").find(".widget").next("div");

  });
}

function load_education(){
  $.getJSON(base_url+"user/get_education").done(function(education_data){
  //  console.log(education_data);
    $(".education-box").each(function(){
      $(this).remove();
    });
      $("#education_template").tmpl(education_data).appendTo("#education");
  });
}

function delete_strength(id){
  var txt;
  var r = confirm("Are you sure want to delete strength !");
  if (r == true) {
    $.get(base_url+"user/delete_strength/"+id).done(function(){
      load_strength();
    });   
  }
}

function delete_education(id){
  var txt;
  var r = confirm("Are you sure want to delete education !");
  if (r == true) {
    $.get(base_url+"user/delete_education/"+id).done(function(){
      load_education();
    });   
  }
}

function load_user_skill(){

  $.getJSON(base_url+"user/user_skill").done(function(data){
  //console.log(data);
    $("#skills .widget .row").html("");
    $("#skill_template").tmpl(data).appendTo("#skills .widget .row");

  });

}

$('#register_user').server_validation({form_id:'user_register_form',button_id:'register_user'});
$('#login_submit').server_validation({form_id:'login_form',button_id:'login_submit'});
$('#save_objective').server_validation({form_id:'objective_form',button_id:'save_objective',after_success:load_education});
$('#save_strength_button').server_validation({form_id:'save_strength',button_id:'save_strength_button',after_success:load_strength});
$('#save_skill_button').server_validation({form_id:'save_skill',button_id:'save_skill_button',after_success:load_user_skill});
$( document ).ajaxComplete(function() {
setTimeout(function(){ 
  //alert("Hello");
  $('#start_date').datepicker();
    $('#end_date').datepicker();
    init_skill_list(); 
}, 1000);    
    

});



