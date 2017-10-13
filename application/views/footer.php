</div>

 </body>
 	<?php $route = $this->uri->segment(1); ?>	
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.server_validation.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/templatejs.js"></script>
	<?php if(trim($route)=="dashboard"){ ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/dashbaord.js"></script>
	<?php } ?>
	<?php include('html_template_js.php'); ?>
      
</html>