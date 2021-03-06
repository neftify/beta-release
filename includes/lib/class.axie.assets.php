<?php

	function new_axie_asset($eth_address, $axie_id) {
		global $db;

		$q = $db->prepare ( "INSERT INTO ngc_axie_assets (eth_ronin_address, axie_id) VALUES (?, ?)" );
		$q->bind_param ( 'ss', $eth_address, $axie_id);

		if ( $q->execute() ) {
			return true;
		}
		$q->close();

		return false;
	}

	/***
	 * Safe SQL Query Explanations
	 * 
	 * $type values are 'all' to get an array of all result and 'count' to renturn a query count, 'one' for return the single result
	 * $extra is for extra sql that does not need to be validated, for example 'LIMIT 1'
	 * $query which could be a value or an array
	 * 		The query array is based on
	 * 			- 'type' to know if is an integer or character; 'INT' or 'CHR
	 * 			- 'condition' which can be sql AND, OR, IN, NOT IN	
	 * 			- 'loose' whis is used to add '%value%' to create a loose match in sql
	 * 			- 'table' which its the database table to be queried
	 * 			- 'command' which its the type of query like '=' or 'LIKE'
	 * 			- 'value' which its the value to be searched
	 */
	function get_axie_asset($type, $query = '', $extra = '') {
		global $db;

		if(is_array($query)) {
			$bind_param_type = '';
			$bind_param_values = array();
			$build_query = '';

			foreach ( $query  as $id => $value ) {
				//If is the first one, we dont use the condition, instead we use "WHERE"
				if($id == 0) {
					$build_query = $build_query."WHERE {$value['table']} {$value['command']} ?";
				}
				else {
					$build_query = $build_query." {$value['condition']} {$value['table']} {$value['command']} ?";
				}

				//We get the bind_param character type
				if($value['type'] == 'INT') {
					$bind_param_type = $bind_param_type . "i";
				}
				else {
					$bind_param_type = $bind_param_type . "s";
				}

				//We get the variable
				if($value['loose']) {
					$value['value'] = "%{$value['value']}%";
				}
				array_push($bind_param_values, $value['value']);
			}

			$q = $db->prepare ( "SELECT * FROM ngc_axie_assets $build_query $extra" );

			//Now using count we will select the corrent bin param
			//Remmeber that arrays start at "0"
			$array_count = count($bind_param_values);
			
			if($array_count == 1) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0] );	
			}
			elseif($array_count == 2) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1] );
			}
			elseif($array_count == 3) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2] );
			}
			elseif($array_count == 4) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3] );
			}
			elseif($array_count == 5) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4] );
			}
			elseif($array_count == 6) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5] );
			}
			elseif($array_count == 7) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6] );
			}
			elseif($array_count == 8) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6], $bind_param_values[7] );
			}
			elseif($array_count == 9) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6], $bind_param_values[7], $bind_param_values[8] );
			}
			elseif($array_count == 10) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6], $bind_param_values[7], $bind_param_values[8], $bind_param_values[9]  );
			}
			elseif($array_count == 11) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6], $bind_param_values[7], $bind_param_values[8], $bind_param_values[9], $bind_param_values[10]  );
			}
			elseif($array_count == 12) {
				$q->bind_param ( $bind_param_type, $bind_param_values[0], $bind_param_values[1], $bind_param_values[2], $bind_param_values[3], $bind_param_values[4], $bind_param_values[5], $bind_param_values[6], $bind_param_values[7], $bind_param_values[8], $bind_param_values[9], $bind_param_values[10], $bind_param_values[11]  );
			}
			elseif($array_count > 12) {
				die('MORE THAN 12 QUERY');
			}
		}
		else {
			$q = $db->prepare ( "SELECT * FROM ngc_axie_assets WHERE id_asset = ? LIMIT 1" );
			$q->bind_param ( 'i', $query );			
		}

		$q->execute();
		$result = $q->get_result();
		$array = array();

		if ( $type == 'count' ) {
			return $result->num_rows;
		}

		while ( $o = $result->fetch_array(MYSQLI_ASSOC) ) {
			if ( $type == 'all' ) {
				array_push($array, $o);
			}
			else {
				return $o;
			}
		}
		$q->close();

		if ( $type == 'all' ) {
			return $array;
		}

		return false;
	}
?>
