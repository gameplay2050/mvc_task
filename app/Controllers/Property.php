<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\PropertyModel;

class Property extends Controller
{
	public function index()
	{
		return view('property_form');
    }

    public function deleteRecord($id)
	{
        $data = [

            "configuration_id" => $id

          ];
        
          $delete = new PropertyModel();
          $result = $delete->deleteRecord('bed_configuration',$data);

          
          return redirect()->to(base_url('public/?result=2')); 
    }


    public function updateform($id)
	{
        $data = [

            "owner_id" => $id

          ];
        
          $get_record = new PropertyModel();

          $record = [
            "owner_record" => $get_record->ownerRecord('owner_details',$data)

          ]; 


//print_r($record);

          return view('update_form', $record);

          
    }
    

    public function updateRecord() {

        $data = [

            "promo_code" => $this->request->getpost('promo_code'),
            "property_type" => $this->request->getpost('property_type')

          ];

          $owner_id = [

            "owner_id" => $this->request->getpost('owner_id'),

          ];

          $update = new PropertyModel();

       

          $update->update_record('owner_details', $data,  $owner_id);

          
          return redirect()->to(base_url('public/?result=3')); 
          
    }


    public function addRecord()
    {

          $data = [

            "owner_name" => $this->request->getpost('owner_name'),
            "promo_code" => $this->request->getpost('promo_code'),
            "property_type" => $this->request->getpost('property_type')

          ];

          $save = new PropertyModel();

          $get_last_row = $save->save_record('owner_details', $data);

          $data2 = [

            "country_list" => $this->request->getpost('country_list'),
            "street_address" => $this->request->getpost('street_address'),
            "apt_suite" => $this->request->getpost('apt_suite'),
            "city" => $this->request->getpost('city'),
            "state" => $this->request->getpost('state'),
            "post_code" => $this->request->getpost('post_code'),
            "owner_id" => $get_last_row[0]->lastID

          ];

         $save->save_record('property_detail',$data2);


          $data2 = [

            "no_of_guests" => $this->request->getpost('no_of_guests'),
            "no_of_bedrooms" => $this->request->getpost('no_of_bedrooms'),
            "no_of_bathrooms" => $this->request->getpost('no_of_bathrooms'),
            "owner_id" => $get_last_row[0]->lastID

          ];

          $save->save_record('bed_configuration',$data2);

          return redirect()->to(base_url('public/?result=1')); 
        
    }

     
    }

	//--------------------------------------------------------------------


