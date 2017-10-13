 <div class="modal-dialog">
  <div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-body">
      <!-- here add the data that need to display -->
    <div class="popup_form">
              <div class="widget">
                <h4 class="title">Add Skill
                  
                </h4>
              </div>
               <form id="save_skill" action="user/save_skill">
                <div class="form-group">
                   <input type="text" class="form-control" name="skill_name" id="skill">
                </div>
                <div class="form-group">
                  <select class="form-control" name="percent">
                  <?php for($i=1; $i<5; $i++){ ?>
                  <option value="<?php echo 20*$i; ?>"><?php echo 20*$i; ?>%</option>
                  <?php } ?>
                  </select>
                </div>
                

                <div class="form_footer">
                    <div id="form_response"></div>
                    <button type="button" id="save_skill_button" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="clear_popup()">Close</button>
                </div>
              </form>

            </div>

    </div>
  </div>
</div>
</div>
