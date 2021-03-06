<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
<?php
	 $this->load->view("common/meta_links");
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
<style>
post-tab .tab-header.tertiary .tab-item.selected > p{
border-top-color: #00d7b3 !important;
}
</style>
	<title>Emerald Dragon | Author Profile</title>
</head>
<body>

	<!-- HEADER -->
<?php
	$this->load->view("common/header");
?>
	<!-- /HEADER -->

	<!-- SIDE MENU -->


	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Author's Profile</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Author's Profile-</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- AUTHOR PROFILE META -->
	<div class="author-profile-meta-wrap">
		<div class="author-profile-meta">
			<!-- AUTHOR PROFILE INFO -->
			<div class="author-profile-info">
				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Member Since:</p>
					<p>December 26th, 2013 - 
					
					</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Total Sales:</p>
					<p>820</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Freelance Work:</p>
					<p>Available</p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->

				<!-- AUTHOR PROFILE INFO ITEM -->
				<div class="author-profile-info-item">
					<p class="text-header">Website:</p>
					<p><a href="http://www.odindesign-themes.com/" class="primary">www.odindesign-themes.com</a></p>
				</div>
				<!-- /AUTHOR PROFILE INFO ITEM -->
			</div>
			<!-- /AUTHOR PROFILE INFO -->
		</div>
	</div>
	<!-- /AUTHOR PROFILE META -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section overflowable">
			<!-- SIDEBAR -->
			<div class="sidebar left author-profile">
			

				<!-- DROPDOWN -->
				<?php
					$this->load->view("common/clickers_sidebar");
				?>
				<!-- /DROPDOWN -->

				<!-- SIDEBAR ITEM -->
				
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- HEADLINE -->
				
				<!-- /HEADLINE -->

				
				<!-- /PRODUCT LIST -->

				<div class="clearfix"></div>
					<!-- FORM BOX ITEMS -->
			<div class="content left">
			<!-- POST TAB -->
			<?php 
				$user_data = json_decode(json_encode($usr_data[0]), True);
			?>
				<?php
				if($this->session->flashdata('success')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;width:100%;">
					<h4><img src="<?php echo base_url();?>images/if_sign-check_299110.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('success');?></p></h4>
				</div>
			<?php
				}
			?>

			<?php
				if($this->session->flashdata('failed')){
			?>
				<div class="form-popup headline primary align-center" style="margin-bottom:10px;width:100%;">
					<h4><img src="<?php echo base_url();?>images/if_ic_cancel_48px_352263.png" style="height:34px;margin-top:15px;float:left;"> &nbsp; <p style="margin-top:25px;float:left;margin-left:10px;"><?php echo $this->session->flashdata('failed');?></p></h4>
				</div>
			<?php
				}
			?>
				<div class="post-tab">
					<!-- TAB HEADER -->
					<div class="tab-header primary">
						<!-- TAB ITEM -->
						<div class="tab-item" style="width:50%;"> 
							<p class="text-header">General Settings</p>
						</div>
						<!-- /TAB ITEM -->

						<!-- TAB ITEM -->
						<div class="tab-item selected" style="width:50%;">
							<p class="text-header">Security Settings</p>
						</div>
						<!-- /TAB ITEM -->
					</div>
					<!-- /TAB HEADER -->

					<!-- TAB CONTENT -->
					<div class="tab-content void">
						<!-- COMMENTS -->
						
							<!-- FORM BOX ITEM -->
							
							<div class="form-box-item " style="width:100%;">
								<h4>Profile Information</h4>
								<hr class="line-separator">
								<!-- PROFILE IMAGE UPLOAD -->
							
								<!-- PROFILE IMAGE UPLOAD -->
								

								<form name="myform" method="POST" action="<?php echo base_url();?>index.php/account_profile/edit_details" enctype="multipart/form-data">
									
								<div class="profile-image">
									<div class="profile-image-data">
										<figure class="user-avatar medium">
											<img src="<?php echo base_url().$user_data['profile_picture']; ?>" alt="profile-default-image" id="lolwa_pic">
										</figure>
										<p class="text-header">Profile Photo</p>
										<p class="upload-details">Minimum size 70x70px</p>
									</div>
									<label class="button mid-short dark-light" for="pro_pic">Upload Image</label>
									<input type="file" id="pro_pic" name="picture" style="display:none"/>
								</div>
									<!-- INPUT CONTAINER -->
									<div class="input-container half">
										<label for="new_pwd" class="rl-label">First Name</label>
										<input type="text" id="new_pwd" value="<?php echo $user_data['fname'];?>" name="first_name" placeholder="Enter your Firstname here...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container half">
										<label for="new_pwd2" class="rl-label">Last Name</label>
										<input type="text" id="new_pwd2" value="<?php echo $user_data['lname'];?>" name="last_name" placeholder="Enter Your Lastname here...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Email</label>
										<input type="email" id="new_email" name="new_email" value="<?php echo $user_data['email'];?>" placeholder="Enter your email address here...">
									</div>
									<!-- /INPUT CONTAINER -->
									
									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">City</label>
										<input type="text" id="cityz" name="addr" value="<?php echo $user_data['city'];?>" placeholder="Choose from dropdown">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
								<div class="input-container">
									<label for="notes2" class="rl-label">About You</label>
									<textarea id="notes2" name="about_z" placeholder="Tell Your Stories."><?php echo $user_data['about'];?></textarea>
								</div>
									

									<!--<div class="input-container">
										<label class="rl-label">Preferences</label>

										<input type="checkbox" id="show_balance" name="show_balance" checked>
										<label for="show_balance" class="label-check">
											<span class="checkbox primary"><span></span></span>
											Show account balance in the status bar
										</label>

										<input type="checkbox" id="email_notif" name="email_notif">
										<label for="email_notif" class="label-check">
											<span class="checkbox primary"><span></span></span>
											Send me email notifications
										</label>
									</div>
									<hr class="line-separator">-->
									<button class="button big dark">Update Profile</button>
								</form>
							</div>
						
					</div>
					<!-- /TAB CONTENT -->

					<!-- TAB CONTENT -->
					<div class="tab-content void">
						<!-- COMMENTS -->
						<div class="form-box-item " style="width:100%;">
								<h4>Profile Information</h4>
								<hr class="line-separator">
								<form name="myform" method="POST" action="<?php echo base_url();?>index.php/account_profile/change_password" enctype="multipart/form-data">

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Current Password</label>
										<input type="password" id="new_email" name="old_password" placeholder="Enter your current password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">New Password</label>
										<input type="password" id="new_email" name="new_password" placeholder="Enter your new password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<!-- INPUT CONTAINER -->
									<div class="input-container">
										<label for="new_email" class="rl-label">Confirm New Password</label>
										<input type="password" id="new_email" name="confirm_pasword" placeholder="Confirm your new password...">
									</div>
									<!-- /INPUT CONTAINER -->

									<hr class="line-separator">
									<button class="button big dark">Update Password</button>
								</form>
							</div>
						<!-- /COMMENTS -->
					</div>
					<!-- /TAB CONTENT -->

				</div>
			
			<!-- /POST TAB -->
			</div>

			<!-- /FORM BOX -->

				<!-- HEADLINE -->
				
				<!-- /HEADLINE -->

			
			</div>
			<!-- CONTENT -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
<?php
	$this->load->view("common/footer");
?>
  <script>
      var input = document.getElementById('cityz');
      var autocomplete = new google.maps.places.Autocomplete(input);

	  function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
				reader.onload = function (e) {
					$('#lolwa_pic').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#pro_pic").change(function(){
			readURL(this);
		});
    </script>
</body>
</html>