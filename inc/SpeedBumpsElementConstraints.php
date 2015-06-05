<?php
namespace SpeedBumps\Inc;
class SpeedBumpsElementConstraints {

	public static function prev_paragraph_contains_element( $speed_bump_id, $paragraph ) {
		$element_constraints = Speed_Bumps()->get_speed_bump_args( $speed_bump_id )[ 'element_constraints' ];
		
		$paragraph_no_constrainted_elements = array();
		foreach( $element_constraints as $constraint ) {
			$paragraph_no_constrainted_elements[] = SpeedBumpsElementFactory::build( ucfirst( $constraint ) )->contains( $paragraph );
		}

		return in_array( true, $paragraph_no_constrainted_elements, true );
	}

}
