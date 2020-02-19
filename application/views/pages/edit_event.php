
<h3>Edit Event</h3>

<div class="jumbotron">
	<div class="container-fluid">
		
		<?=form_open(base_url().'events/update_event'); ?>
			<div class="form-group">
				<label>Event Name</label>
				<?php
				$data = array(
					'class'       => 'form-control form-control-lg', 
					'name'        => 'event_name', 
					'id'          => 'event_name', 
					'value'       => $event_name
				);
				echo form_input($data); 
				?>
			</div>

			<div class="form-group">
				<label>Event Details</label>
				<?php
				$data = array(
					'class'       => 'form-control', 
					'name'        => 'event_description', 
					'id'          => 'event_description', 
					'value'       => $event_description, 
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
						'name'        => 'event_type', 
						'id'          => 'event_type', 
						'value'       => $event_type
					);
					echo form_input($data); 
					?>
				</div>
				<div class="form-group col-sm">
					<label for="inputEmail4">Technology</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'name'        => 'event_technology', 
						'id'          => 'event_technology', 
						'value'       => $event_technology
					);
					echo form_input($data); 
					?>
				</div>
				<div class="form-group col-sm">
					<label for="inputPassword4">Organising body</label>
					<?php
					$data = array(
						'class'       => 'form-control', 
						'name'        => 'event_org_body', 
						'id'          => 'event_org_body', 
						'value'       => $event_org_body
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
						'name'        => 'event_date', 
						'id'          => 'event_date', 
						'value'       => $event_date
					);
					echo form_input($data); 
					?>
				</div>

				<div class="form-group col-sm-1">
					<label for="inputCity">No.of Days</label>
					<?php
					$data = array(
						'class'    => 'form-control',
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
					echo form_dropdown('event_no_of_days', $options, $event_no_of_days, $data);
					?>	
				</div>

			    <div class="form-row">
					<div class="form-group col-sm">
						<label for="inputState">Start Time</label>
						<?php
						$data = array(
							'class'       => 'form-control', 
							'name'        => 'event_start_time', 
							'id'          => 'event_start_time', 
							'value'       => $event_start_time
						);
						echo form_input($data); 
						?>
					</div>
					<div class="form-group col-sm">
						<label for="inputState">End Time</label>
						<?php
						$data = array(
							'class'       => 'form-control', 
							'name'        => 'event_end_time', 
							'id'          => 'event_end_time', 
							'value'       => $event_end_time
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
						'name'        => 'event_venue', 
						'id'          => 'event_venue', 
						'value'       => $event_venue
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
					'value'       => $event_reg_link
				);
				echo form_input($data); 
				?>
			</div>
			
			<div class="form-group">
				<label>Example file input</label>
				<?php
				$data = array(
					'class'       => 'form-control-file',
					'name'        => 'event_img', 
					'id'          => 'event_img'
				);
				echo form_upload($data); 
				?>
			</div>
			
			<?php
			$data = array(
				'class' => 'btn btn-primary', 
				'value' => 'Update Event',
				'id'    => 'update_event',
				'name'  => 'update_event'
			);
			echo form_submit($data); 
			?>


			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Delete Event</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"><strong>Warning!</strong></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        Deleting this event will result in permanent data loss ... Do you wish to delete it ?
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <?php
			            $data = array(
			              'class' => 'btn btn-danger', 
			              'value' => 'Delete Event',
			              'id'    => 'delete_event',
			              'name'  => 'delete_event'
			            );
			            echo form_submit($data); 
			            ?>
			      </div>
			    </div>
			  </div>
			</div>

			<?php
			$data = array(
				'class'       => 'form-control',
				'name'        => 'event_id',
				'hidden'      => 'hidden',
				'id'          => 'event_id', 
				'value'       => $event_id
			);
			echo form_input($data); 
			?>

		<?=form_close(); ?>
	</div>
</div>
