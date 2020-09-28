<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model {

    // connect with db
    function __construct() {
       $this->db = db_connect();
       
        }

      function save_record($table, $data) {

        $query = $this->db->table($table)->insert($data);

        if($query) {
            return $this->db->query("SELECT last_insert_id() as lastID")->getResult();
        }
        else {
            return false;
        }
        
      }

      function getRecord($table) {

        return $this->db->table($table)->get()->getResultArray();
      }

      function deleteRecord($table, $data) {

         $result = $this->db->table($table)->delete($data);

         if($result) {
             return true;
         }
         else {
             return false;
         }
      }

      function ownerRecord($table, $data) {
        return $this->db->table($table)->getWhere($data)->getResultArray();
      }

      function update_record($table, $data, $id) {
        return $this->db->table($table)->update($data, $id);
      }


}

?>