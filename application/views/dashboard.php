<?php include('header.php'); ?>
	<div class="row-offcanvas row-offcanvas-left">
    <div id="sidebar" class="sidebar-offcanvas">
		<div class="sidebar-wrap">	
	    	<div class="widget">
	    		<!-- <h3 class="widget-title">Tags</h3> -->
	    		<div class="widget-content">
 
			<?php include('sidebar.php'); ?>
	    		</div>
	    	</div>	
			
			
			</div>
	</div>
	
  
  
  <div id="main" >
      <div class="col-md-12" >
      	  
          

          <div class="row" style="margin-top:28px;">
		  <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">
			<i class="fa fa-chevron-right"></i>
			</button>
          </p>
             <div class="col-md-8 post-list default">
				 <!-- here the area for the post -->
						<div class="profile-data" id="objective">
							<div class="widget">
								<h4 class="title">Objective
									<span class="pull-right">
										<a href="user/edit_objective" data-toggle="modal">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							 			</a>
							 		</span>
								</h4>
							</div>
							<div>
								<?php echo $this->base_user->get_objective(); ?>
							</div>

						</div>

							<div class="profile-data" id="strength">
							<div class="widget">
									<h4 class="title">Strengths<span class="pull-right"><a href="user/edit_strength" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i>
</i>
 </a></span></h4>
							</div>
							<div>
<?php for($i=0; $i<4; $i++){ ?>
							<div class="strength_cover">
								<div class="edit_area">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
<i class="fa fa-trash" aria-hidden="true"></i>

								</div>
							<div class="question">
								<i class="fa fa-circle" aria-hidden="true"></i>
								
 
								I have 5 Year experience in related fields</div>	
							<div class="answer">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
							</div>

						</div>
<?php } ?>


							</div>

						</div>

						<div class="profile-data" id="education">
							<div class="widget">
							<h4 class="title">Education 
								<span class="pull-right">
									<a href="user/add_education" data-toggle="modal">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</a>
								</span>
							</h4>
							</div>
							
						</div>

						<div class="profile-data" id="skills">
							<div class="widget">
									<h4 class="title">Skills
										<span class="pull-right">
									<a href="user/add_skill" data-toggle="modal" data-function="init_skills_list">
										<i class="fa fa-plus-square" aria-hidden="true"></i>
									</a>
								</span>
									</h4>
									<div class="row">
											
									</div>
							</div>
							
						</div>
					
					<div class="profile-data" id="experience">
							<div class="widget">
									<h4 class="title">Experience</h4>
							</div>
							<div>
<!-- start -->
								<div class="experience-box">
										<div class="row title">
										<div class="col-md-9">MSC From RTU Kota</div>
										<div class="col-md-3"><span>2007</span> | <span>2008</span></div>
										</div>	
										<div class="educatoin-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>	
								</div>

<!-- end -->

<!-- start -->
								<div class="experience-box">
										<div class="row title">
										<div class="col-md-9">MSC From RTU Kota</div>
										<div class="col-md-3"><span>2007</span> | <span>2008</span></div>
										</div>	
										<div class="educatoin-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>	
								</div>

<!-- end -->

<!-- start -->
								<div class="experience-box">
										<div class="row title">
										<div class="col-md-9">MSC From RTU Kota</div>
										<div class="col-md-3"><span>2007</span> | <span>2008</span></div>
										</div>	
										<div class="educatoin-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>	
								</div>

<!-- end -->

<!-- start -->
								<div class="education-box">
										<div class="row title">
										<div class="col-md-9">MSC From RTU Kota</div>
										<div class="col-md-3"><span>2007</span> | <span>2008</span></div>
										</div>	
										<div class="educatoin-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>	
								</div>

<!-- end -->

							</div>
						</div>

					<div class="profile-data">
							<div class="widget">
									<h4 class="title">Contact Details</h4>
							</div>
							


    <div class="table-responsive"> 

        <table class="table table-bordered">

           <tbody>

                <tr>
                    <td>Full Name</td>
					<td>Rakesh Kumar</td>
					<td>Age</td>
					<td>25 Year Old</td>
                </tr>
                <tr>
                    <td>Current Address</td>
					<td>Rakesh Kumar</td>
					<td>Permant Address</td>
					<td>25 Year Old</td>
                </tr>
                <tr>
                    <td>City</td>
					<td>Rakesh Kumar</td>
					<td>Home City</td>
					<td>25 Year Old</td>
                </tr>

                <tr>
                    <td>City</td>
					<td>Rakesh Kumar</td>
					<td>Home City</td>
					<td>25 Year Old</td>
                </tr>

            

            </tbody>

        </table>

    </div>





						</div>	
					
					
						
				 <!-- end the area of the post -->
			 
			 </div>
             <div class="col-md-4 sidebar">
				 <div class="widget">
						<h4 class="title">Follow</h4>
						<div class="content">
							<ul class="social">
								<!-- start social links -->
								<!-- replace the # with your own profile link address -->
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
								<li><a href="#"><i class="fa  fa-pinterest"></i></a></li>
							</ul>
						</div>
				</div> 

			</div>
		  </div>

		</div><!--/row-offcanvas -->
	
  </div>
 </div> 

<?php include('footer.php'); ?>