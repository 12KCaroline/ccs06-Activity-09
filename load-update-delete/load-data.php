<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Sinclair', 'Male', '02-13-2005', 'Robert', 'Roberto@gmail.com', 'sapang bato Street', '092344543');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Candice',
			'gender' => 'Female',
			'birthdate' => '8-20-2008',
			'owner' => 'Mike',
			'email' => 'mike998@yahoo.com',
			'address' => 'Boston street',
			'contact_number' => '0912343267'
		],
		[
			'name' => 'Bogito',
			'gender' => 'Male',
			'birthdate' => '05-19-2017',
			'owner' => 'Vandolph',
			'email' => 'Van89isdolph@gmail.com',
			'address' => 'fahardo street',
			'contact_number' => '09438766785'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}