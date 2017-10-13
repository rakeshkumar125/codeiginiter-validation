<!-- <div class="modal-dialog">
        <div class="modal-content">
        	 	<form method="post" class="form-horizontal" name="form" id="form" action="user/add" enctype="multipart/form-data">
          <?php echo validation_errors(); ?>  
         <?php echo form_open('form'); ?> 
             <div class="modal-body">
          
            <div class="form-group">
            <label class="radio-inline">
		      <input type="radio" name="optradio" checked>Buyer
		    </label>
		    <label class="radio-inline">
		      <input type="radio" name="optradio">Artist
		    </label>
            </div>

            <div class="form-group">
			   <input type="text" class="form-control" name="username" placeholder="Username" id="email">
		  	</div>
		  	 <div class="form-group">
			   <input type="email" class="form-control" name="email" placeholder="email" id="email">
		  	</div>
		  	 <div class="form-group">
			   <input type="text" class="form-control" name="phone" placeholder="Phone" id="email">
		  	</div>
		  <div class="form-group">
		    <input type="password" class="form-control" placeholder="Password" id="pwd">
		  </div>
		    <div class="form-group">
		    <input type="password" class="form-control" placeholder="Confirm" id="pwd">
		  </div>
			

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear_popup()">Close</button>
               <!--  <button type="button" class="btn btn-primary-outline" data-dismiss="modal">Register</button> -->
<!--               <div name="submit" id="submit" class="btn btn-secondary"  data-loading-text="Validating.. " value="submit">register</div>
            </div>
            </form>
        </div>
    </div>
 -->


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
                <div class="form-group">
                   <input type="text" name="question" class="form-control" placeholder="Stregth Title">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="user_objective" name="answer" Placeholder="Strength Description" rows="3"></textarea>
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
