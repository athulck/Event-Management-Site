
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="page-header">
				<h1>Register</h1>
			</div>

			<?=form_open(base_url().'users/user_register'); ?>
				<div class="form-group md-form">
					<label for="username">Enter your username</label>
					<?php
					$data = array(
						'class'       => 'form-control',
						'required'    => 'required', 
						'name'        => 'username',
						'id'          => 'username'
					);
					echo form_input($data); 
					?>
					<p class="help-block">At least 4 characters, letters or numbers only</p>
				</div>
				<div class="form-group md-form">
					<label for="email">Enter your email</label>
					<input type="email" class="form-control" id="email" name="email" required="required">
					<p class="help-block">A valid email address</p>
				</div>
				<div class="form-group md-form">
					<label for="password">Enter your password</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'password',
						'id'          => 'password'
					);
					echo form_password($data); 
					if(!$password_match)
						echo '<p class="alert alert-danger">Passwords does not match !</p>';
					?>
					<p class="help-block">At least 6 characters</p>
				</div>
				<div class="form-group md-form">
					<label for="password_confirm">Confirm password</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'password_confirm',
						'id'          => 'password_confirm'
					);
					echo form_password($data);
					if(!$password_match)
						echo '<p class="alert alert-danger">Passwords does not match !</p>';
					?>
					<p class="help-block">Must match your password</p>
				</div>
				<div class="form-group md-form">
					<?php
					$data = array(
						'class' => 'btn purple-gradient', 
						'value' => 'Register',
						'id'    => 'register');
					echo form_submit($data); 
					?>
				</div>
			<?=form_close(); ?>

		</div>
	</div>
</div>