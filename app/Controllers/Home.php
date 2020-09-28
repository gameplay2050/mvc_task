<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PropertyModel;


class Home extends BaseController
{
	public function index()
	{
		$result = new PropertyModel();

		$record = [
			'detail_owner_bed' => $result->getRecord('bed_configuration')

		];

		return view('view_property', $record);
	}

	//--------------------------------------------------------------------

}
