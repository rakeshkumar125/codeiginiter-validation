<div class="modal-dialog">
  <div class="modal-content">
	 	<div class="modal-body">
      <!-- here add the data that need to display -->
    <div class="popup_form">
              <div class="widget">
                <h4 class="title">Objective
                  
                </h4>
              </div>
               <form id="objective_form" action="user/save_objective">
                
                <div class="form-group">
                  <textarea class="form-control" id="user_objective" name="user_objective" Placeholder="Enter your objective" rows="6"><?php echo $objective; ?></textarea>
                </div>

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
