<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
	
</head>
<body>

	<!-- HEADER -->
<?php
	$this->load->view("common/header");
?>
	<!-- /MAIN MENU -->



	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section" >
			<!-- FORM POPUP -->
	
			<!-- /FORM POPUP -->




			<!-- FORM POPUP -->
			

			<!-- FORM POPUP -->
			<div class="form-popup align-center">

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Restore your password</h4>
					<hr class="line-separator double">
					<p class="spaced">You would be sent a new password to your respective email address linked with your account.</p>
					<form id="login-form">
						<input type="text" id="username5" name="username5" placeholder="Enter your Email">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember2" name="remember2" checked>
						<!-- /CHECKBOX -->
						
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
	
			<!-- /FORM POPUP -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

<?php
	$this->load->view("common/footer");
?>
</body>
</html>