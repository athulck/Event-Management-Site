		
		<!-- Split button -->
		<div class="btn-group">
		  <a type="button" class="btn btn-sm btn-outline-primary pt-2 pb-2" href="<?=base_url().'user/home'?>">Home</a>
		  <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
		    aria-expanded="false">
		    <span class="sr-only">Toggle Dropdown</span>
		  </button>
		  <div class="dropdown-menu dropdown-menu-right">
		    <a class="dropdown-item" href="#">Action</a>
		    <a class="dropdown-item" href="#">Another action</a>
		    <a class="dropdown-item" href="#">Something else here</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="<?=base_url().'users/user_logout'?>">Logout</a>
		  </div>
		</div>

	</div>
</nav>