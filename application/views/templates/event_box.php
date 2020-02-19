

<div class="card border-dark mt-2 ml-2 mr-2" style="min-height: 18rem; border-color: #563d7c !important; border-radius: .75rem; border-width: .12rem">
  
  <div class="card-body">
  
	    <ul class="list-group float-right">
		  <li class="list-group-item d-flex bd-highlight">
		  	  <div class="mr-auto bd-highlight">
		  	  	<i class="fas fa-calendar-alt"></i>
		  	  </div>
	  		  <div class="bd-highlight">
	  		  	<?=$event_date; ?>
	  		  </div>
		  </li>
		  <li class="list-group-item d-flex bd-highlight">
		  	  <div class="mr-auto bd-highlight">
		  	  	<i class="fas fa-clock pr-2"></i> 
		  	  </div>
	  		  <div class="bd-highlight">
	  		  	<?=$event_start_time.'am - '.$event_end_time.'pm'; ?>
	  		  </div>
		  </li>
		  <li class="list-group-item d-flex bd-highlight">
		  	  <div class="mr-auto bd-highlight">
		  	  	<i class="fas fa-hotel"></i> 
		  	  </div>
	  		  <div class="bd-highlight">
	  		  	<?=$event_venue; ?>	
	  		  </div>
		  </li>
		</ul>

		<a class="card-title display-4" href="#"><?=$event_name; ?></a>

		<div class="jumbotron-fluid">
		  <p class="lead"><?=$event_description; ?></p>
		</div>
	
	<!-- Script for the popovers in the footer-->
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="popover"]').popover()
		})
		$('.popover-dismiss').popover({
		  trigger: 'focus'
		})
	</script>
  </div>

  <div class="card-footer">
  	<div class="d-flex bd-highlight">

	  <div class="mr-auto p-2 bd-highlight align-self-center">
	  	<div class="container-fluid">
			<div class="row align-items-end">
				<a tabindex="0" class="badge badge-pill badge-primary btn mr-3" role="button" data-toggle="popover" data-trigger="focus" title="Event Type" data-content="This tells you what kind of an event it is ... "><?=$event_type; ?></a>
				<a tabindex="0" class="badge badge-pill badge-primary btn mr-3" role="button" data-toggle="popover" data-trigger="focus" title="Technology" data-content="This tells you what kind of technologies is this event associated with ... "><?=$event_technology; ?></a>
				<a tabindex="0" class="badge badge-pill badge-primary btn mr-3" role="button" data-toggle="popover" data-trigger="focus" title="Organizing Body" data-content="This tells you all the organizational banners under which this event is hosted ... "><?=$event_org_body; ?></a>
			</div>
		</div>
	  </div>
	  
	  <div class="bd-highlight align-self-center">
	  	<a class="btn btn-primary mr-5 pb-2" href="<?=base_url().'pages/gallery/'.$event_id.'/'.str_replace(' ', '_', $event_name)?>" role="button" >Gallery</a>
	  </div>

	  <div class="bd-highlight align-self-center">
	  	<a class="btn btn-primary active mr-3 pb-2" href="<?=$event_reg_link?>" role="button">Register</a>
	  </div>

	</div>
  </div>

</div>

