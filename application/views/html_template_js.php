<script id="education_template" type="text/x-jquery-tmpl">
  	<div class="education-box">
		<div class="row title">
			<div class="col-md-9">${s_class} From ${institute}</div>
			<div class="col-md-3"><span>${start}</span> | <span>${end}</span></div>
			<div class="edit_area">
				<a data-toggle="modal" href="user/update_education/${id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				<i class="fa fa-trash" aria-hidden="true" onClick="delete_education(${id})"></i>
			</div>

		</div>	
		<div class="educatoin-text">${description}</div>	
</div>
</script>
<script id="strenght_template" type="text/x-jquery-tmpl">
   <div class="strength_cover"><div class="edit_area">
<a data-toggle="modal" href="user/update_strength/${id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
<i class="fa fa-trash" aria-hidden="true" onClick="delete_strength(${id})"></i>

								</div>
							<div class="question">
								<i class="fa fa-circle" aria-hidden="true"></i> ${question}</div>	
							<div class="answer">${answer}</div>

						</div>
</script>
<script id="skill_template" type="text/x-jquery-tmpl">
   <div class="col-md-6">
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="${percentage}" aria-valuemin="0" aria-valuemax="100" style="width: ${percentage}%;">
	    <span class="show">${percentage}% ${skill}</span>
	    <div class="edit_area"> <a href="user/update_strength/29" data-toggle="modal"><i aria-hidden="true" class="fa fa-pencil-square-o"></i></a> <i onclick="delete_strength(29)" aria-hidden="true" class="fa fa-trash"></i>          </div>
	  </div>
	</div>
</div>
</script>
