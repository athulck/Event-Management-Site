

<div class="jumbotron">
<h3><strong>Welcome</strong> <?=$user_name?> </h3>
<h6 class="muted"><?=$user_email?></h6>
</div>

<h3>Add Event <a class="btn btn-light btn-sm" data-toggle="collapse" href="#addNewEvent" role="button" aria-expanded="false" aria-controls="addNewEvent"><i class="fas fa-plus"></i></a></h3>


<div class="collapse" id="addNewEvent">
	<div class="card card-body ml-2 mr-2">
		
		<?=form_open_multipart(base_url().'events/add_event'); ?>
			<div class="form-group">
				<label>Event Name</label>
				<?php
				$data = array(
					'class'       => 'form-control form-control-lg', 
					'required'    => 'required', 
					'name'        => 'event_name', 
					'id'          => 'event_name', 
					'placeholder' => 'Enter event name'
				);
				echo form_input($data); 
				?>
			</div>

			<div class="form-group">
				<label>Event Details</label>
				<?php
				$data = array(
					'class'       => 'form-control', 
					'required'    => 'required', 
					'name'        => 'event_description', 
					'id'          => 'event_description', 
					'placeholder' => 'Enter event details ... ', 
					'rows'        => '2'
				);
				echo form_textarea($data); 
				?>

			</div>

			<div class="form-row">
				<div class="form-group col-sm">
					<label for="inputPassword4">Event Type</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'event_type', 
						'id'          => 'event_type', 
						'placeholder' => 'Workshop? Talk? Programming event?'
					);
					echo form_input($data); 
					?>
				</div>
				<div class="form-group col-sm">
					<label for="inputEmail4">Technology</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'event_technology', 
						'id'          => 'event_technology', 
						'placeholder' => 'AI? AR/VR? Blockchain?'
					);
					echo form_input($data); 
					?>
				</div>
				<div class="form-group col-sm">
					<label for="inputPassword4">Organising body</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'event_org_body', 
						'id'          => 'event_org_body', 
						'placeholder' => 'IEEE? IEDC? MBCET?'
					);
					echo form_input($data); 
					?>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-sm">
					<label for="inputCity">Date</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'event_date', 
						'id'          => 'event_date', 
						'placeholder' => 'YYYY-MM-DD'
					);
					echo form_input($data); 
					?>
				</div>

				<div class="form-group col-sm-1">
					<label for="inputCity">No.of Days</label>
					<?php
					$data = array(
						'class'    => 'form-control',
						'required' => 'required',
						'id'       => 'event_no_of_days', 
					);
					$options = array(
						'1'  => '1',
						'2'  => '2',
						'3'  => '3',
						'4'  => '4',
						'5'  => '5',
						'6'  => '6',
						'7'  => '7',
						'8'  => '8',
						'9'  => '9',
						'10' => '10',
					);
					echo form_dropdown('event_no_of_days', $options, '1', $data);
					?>	
				</div>

			    <div class="form-row">
					<div class="form-group col-sm">
						<label for="inputState">Start Time</label>
						<?php
						$data = array(
							'class'       => 'form-control', 
							'required'    => 'required', 
							'name'        => 'event_start_time', 
							'id'          => 'event_start_time', 
							'placeholder' => 'HH:MM:SS'
						);
						echo form_input($data); 
						?>
					</div>
					<div class="form-group col-sm">
						<label for="inputState">End Time</label>
						<?php
						$data = array(
							'class'       => 'form-control', 
							'required'    => 'required', 
							'name'        => 'event_end_time', 
							'id'          => 'event_end_time', 
							'placeholder' => 'HH:MM:SS'
						);
						echo form_input($data); 
						?>
					</div>
				</div>

				<div class="form-group col-sm">
					<label for="inputZip">Venue</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'required'    => 'required', 
						'name'        => 'event_venue', 
						'id'          => 'event_venue', 
						'placeholder' => 'Enter Venue'
					);
					echo form_input($data); 
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="inputZip">Registration Link (Google Forms)</label>
				<?php
				$data = array(
					'class'       => 'form-control', 
					'required'    => 'required', 
					'name'        => 'event_reg_link', 
					'id'          => 'event_reg_link', 
					'placeholder' => 'Enter the registration link'
				);
				echo form_input($data); 
				?>
			</div>
			
			<div class="form-group">
				<label>Upload event media</label>
				<?php
				$data = array(
					'class'       => 'form-control-file',
					'name'        => 'event_media[]', 
					'id'          => 'event_media',
					'multiple'    => 'multiple'
				);
				echo form_upload($data);
				?>
			</div>
			
			<?php
			$data = array(
				'class' => 'btn btn-primary', 
				'value' => 'Add Event',
				'id'    => 'add_event',
				'name'  => 'add_event'
			);
			echo form_submit($data); 
			?>

		<?=form_close(); ?>
	</div>
</div>
