<div class="modal-dialog">
  <div class="modal-content">
	 	<div class="modal-body">
      <!-- here add the data that need to display -->
    <div class="popup_form">
              <div class="widget">
                <h4 class="title">Education</h4>
              </div>
               <form id="objective_form" action="user/save_education">
                <div class="form-group col-md-6 starting_year"><input type="text" placeholder="Class/ Degree " class="form-control" name="class"></div>
                <div class="form-group col-md-6 end_year"><input type="text" placeholder="University/ College " class="form-control" name="institute"></div>
				        <div class="form-group col-md-6 starting_year"><input type="text" id="start_date" readonly class="form-control" placeholder="Choose Start Date" name="start_year"></div>
			         	<div class="form-group col-md-6 end_year"><input type="text" id="end_date" readonly class="form-control" placeholder="Choose End Date" name="end_year"></div>
                <div class="form-group"><textarea rows="3" placeholder="Description" name="description" class="form-control"></textarea></div>
                <div class="form_footer">
                    <div id="form_response"></div>
                    <button type="button" id="save_objective" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="clear_popup()">Close</button>
                </div>
              </form>

            </div>

    </div>
  </div>
</div>
