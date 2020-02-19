<?php
class Event_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_events($faculty_id = NULL) {

		$events = array();
		$index = 1;

		if ($faculty_id == NULL)
		{
			$query = $this->db->query("SELECT ID, Name, Type, Technology, Org_Body, Org_Faculty_ID, Date, No_of_Days, Start_Time, End_Time, Venue, Description, Reg_Link, Created_On FROM Events ORDER BY Created_On DESC");
		}
		else
		{
			$query = $this->db->query("SELECT ID, Name, Type, Technology, Org_Body, Org_Faculty_ID, Date, No_of_Days, Start_Time, End_Time, Venue, Description, Reg_Link, Created_On FROM Events WHERE Org_Faculty_ID=".$faculty_id." ORDER BY Created_On DESC");
		}
		
		foreach ($query->result() as $row)
		{
			$data = array();

			$data['event_id'] = $row->ID;
			$data['event_name'] = $row->Name;
			$data['event_type'] = $row->Type;
			$data['event_technology'] = $row->Technology;
			$data['event_org_body'] = $row->Org_Body;
			$data['event_org_faculty_id'] = $row->Org_Faculty_ID;
			$data['event_date'] = $row->Date;
			$data['event_no_of_days'] = $row->No_of_Days;
			$data['event_start_time'] = $row->Start_Time;
			$data['event_end_time'] = $row->End_Time;
			$data['event_venue'] = $row->Venue;
			$data['event_description'] = $row->Description;
			$data['event_reg_link'] = $row->Reg_Link;
			$data['event_created_on'] = $row->Created_On;

			$events[$index] = $data;
			$index = $index + 1;
		}
		
		return $events;
	}

	public function add_event($data)
	{
		$query = "INSERT INTO Events (Name, Description, Type, Technology, Org_Body, Org_Faculty_ID, Date, No_of_Days, Start_Time, End_Time, Venue, Reg_Link) VALUES ('".$data['event_name']."', '".$data['event_description']."', '".$data['event_type']."', '".$data['event_technology']."', '".$data['event_org_body']."', ".$data['event_org_faculty_id'].", '".$data['event_date']."', ".$data['event_no_of_days'].", '".$data['event_start_time']."', '".$data['event_end_time']."', '".$data['event_venue']."', '".$data['event_reg_link']."'); ";
		
		if (! $this->db->simple_query($query))
			return FALSE;
		
		$query = $this->db->query("SELECT ID FROM Events ORDER BY Created_On DESC LIMIT 1;");
		$row = $query->first_row();
		return $row->ID;
	}

	public function update_event($data)
	{
		$query = "UPDATE Events SET Name='".$data['event_name']."', Type='".$data['event_type']."', Technology='".$data['event_technology']."', Org_Body='".$data['event_org_body']."', Org_Faculty_ID='".$data['event_org_faculty_id']."', Date='".$data['event_date']."', No_of_Days='".$data['event_no_of_days']."', Start_Time='".$data['event_start_time']."', End_Time='".$data['event_end_time']."', Venue='".$data['event_venue']."', Description='".$data['event_description']."', Reg_Link='".$data['event_reg_link']."' WHERE ID='".$data['event_id']."';";
		
		if ($this->db->simple_query($query))	return TRUE;
		else 	return FALSE;
	}

	public function delete_event($event_id)
	{

		$query = "DELETE FROM Events WHERE ID=".$event_id.";";
		
		if ($this->db->simple_query($query))	return TRUE;
		else 	return FALSE;
	}
}
?>