<?php
// Timezone field

$helper = new evo_helper();
$tz = $this->EVENT ? $this->EVENT->get_prop('_evo_tz') : false;
$unix = $this->EVENT ? $this->EVENT->get_prop('evcal_srow') : false;

echo "<div class='row evoau_timeone'>";

	echo EVO()->elements->get_element(
		array(
				'type'=>'dropdown',
				'id'=>'_evo_tz',
				'value'=> $tz,
				'name'=> __('Event Timezone','eventon'),
				'options'=> $helper->get_timezone_array( $unix,true ),
				'row_style'=>'padding-bottom:10px;',
			)
	);

echo "</div>";