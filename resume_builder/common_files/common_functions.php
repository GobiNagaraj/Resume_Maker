<?php 

	function sanitize_all_values(&$raw_inputs, $connection)
	{
		foreach ($raw_inputs as $name => $value) 
		{
			$raw_inputs[$name] = sanitize($connection, $value);
		}		
		return $raw_inputs;
	}

	function sanitize($connection, $value)
	{
		return mysqli_real_escape_string($connection, $value);
	}

	function resume_generate_comma($string)
   {
   		$comma_removed_string = explode(",",$string);
  		$string = implode("<br/>",$comma_removed_string);
  		echo $string;
   }

   function resume_generate_minus($minus)
   {
   		$minus_removed_string = explode("-",$minus);
   		$minus = implode("<li>", $minus_removed_string);
   		echo "$minus";
   }

   function resume_generate_reference($reference)
   {
   		$comma_removed_string = explode(",",$reference);
      $reference = implode("<br/>",$comma_removed_string);
      echo $reference;
   }

   function resume_generate_date($date)
   {
      $date_removed_string = explode("-", $date);
      $date = implode(" ", $date_removed_string);
      echo $date;
   }

 ?>