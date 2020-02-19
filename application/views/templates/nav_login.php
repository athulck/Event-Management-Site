

		<!-- For Login -->
		<div class="btn-group">
			<button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="sr-only">Toggle Dropdown</span>
			</button>

			<div class="dropdown-menu dropdown-menu-right">
			  <div class="card ml-2 mr-2">
			  	<div class="card-body">
			  		
			  		<h5 class="card-title" >Sign in</h5>
					  <?=form_open(base_url().'users/user_login', 'class="px-4 py-3"'); ?>
					    <div class="form-group">
					      <?php
				          $data = array(
				              'class'       => 'form-control', 
				              'required'    => 'required', 
				              'name'        => 'username',
				              'id'          => 'username',
				              'placeholder' => 'Username'
				          );
				          echo form_input($data); 
				          ?>
					    </div>
					    <div class="form-group">
				          <?php
				          $data = array(
				              'class'       => 'form-control', 
				              'required'    => 'required', 
				              'name'        => 'password',
				              'id'          => 'password',
				              'placeholder' => 'Password'
				          );
				          echo form_password($data); 
				          ?>
					    </div>
					    <?php
				        $data = array(
				            'class'  => 'btn btn-sm btn-primary', 
				            'value'  => 'Sign in',
				            'id'     => 'login'
				        );
				        echo form_submit($data); 
				        ?>
					  <?=form_close(); ?>
			  
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item card-link ml-1" href="<?=base_url().'pages/register' ?>">New around here? Sign up</a>
					  <a class="dropdown-item card-link ml-1" href="#">Forgot password?</a>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>