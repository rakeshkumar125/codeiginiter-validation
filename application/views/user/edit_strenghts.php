<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <!-- here add the data that need to display -->
    <div class="popup_form">
              <div class="widget">
                <h4 class="title">Strengths
                  
                </h4>
              </div>
               <form id="save_strength" action="user/save_strength">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                   <input type="text" value="<?php echo $question; ?>" name="question" class="form-control" placeholder="Stregth Title">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="user_objective" name="answer" Placeholder="Strength Description" rows="3"><?php echo $answer; ?></textarea>
                </div>

                <div class="form_footer">
                    <div id="form_response"></div>
                    <button type="button" id="save_strength_button" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="clear_popup()">Close</button>
                </div>
              </form>

            </div>

    </div>
  </div>
</div>
