<?php$country = $_POST['country'];if(!$country) {	return false;}$cities = array(			1 => array('Kathmandu','Bhaktapur','Patan','Pokhara','Lumbini'),			2 => array('Delhi','Mumbai','Kolkata','Bangalore','Hyderabad','Pune','Chennai','Jaipur','Goa'),			3 => array('Beijing','Chengdu','Lhasa','Macau','Shanghai'),			4 => array('Los Angeles','New York','Dallas','Boston','Seattle','Washington','Las Vegas'),			5 => array('Birmingham','Bradford','Cambridge','Derby','Lincoln','Liverpool','Manchester')		);		$currentCities = $cities[$country];?>City: <select name="city">	<option value="">Please Select</option>	<?php	foreach($currentCities as $city) {		?>		<option value="<?php echo $city; ?>"><?php echo $city; ?></option>		<?php 	}	?></select>