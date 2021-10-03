<?php

    function how_many_minutes_has_passed($startTime, $endTime) {
        $minutes = ($endTime - $startTime)/60;

        $minutes = round($minutes, 4);

        return $minutes;
    }

	function print_debug_main_title($title) {
        if ( DEBUG ) {
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "{$title} \n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n\n\n";
        }
	}

	function print_debug_secondary_title($title) {
        if ( DEBUG ) {
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "{$title} \n";
            echo "--- --- --- --- --- --- --- ---\n";
            echo "--- --- --- --- --- --- --- ---\n\n\n";
        }
	}

	function print_debug_text($text) {
        if ( DEBUG ) {
            echo "--- --- --- --- --- --- --- ---\n";
			echo "{$text} \n";
            echo "--- --- --- --- --- --- --- ---\n\n\n";
        }
	}
?>