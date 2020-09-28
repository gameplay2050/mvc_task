<?php require_once('header.php');

if(isset($_GET['result']))
    {
  
  if($_GET['result'] == 1)
  {
    $result = "Record Saved.";

    echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

  if($_GET['result'] == 2)
  {
      $result = "Record Deleted.";

      echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

  if($_GET['result'] == 3)
  {
      $result = "Record Updated.";

      echo ' <br/> <center> <h3 style="color:green; background:silver; width:100%;">' . $result . '</h3> </center>';
  }

}

?>


<table id="dtBasicExample" class="table" width="100%">
  <thead>
    <tr>
      <th scope="col">Owner ID</th>
      <th scope="col">Configuration ID</th>
      <th scope="col">No of Guests</th>
      <th scope="col">No of Bedrooms</th>
      <th scope="col">No of Bathrooms</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($detail_owner_bed as $display) {?>
    <tr>
     
      <td><?php echo  $display['owner_id']; ?></td>
      <td><?php echo  $display['configuration_id']; ?></td>
      <td><?php echo  $display['no_of_guests']; ?></td>
      <td><?php echo  $display['no_of_bedrooms']; ?></td>
      <td><?php echo  $display['no_of_bathrooms']; ?></td>
      <td> <a class="dropdown-item" href="<?php echo base_url('public/Property/deleteRecord/'.$display['configuration_id']) ?>">Delete</a></td>
      <td> <a class="dropdown-item" href="<?php echo base_url('public/Property/updateform/'.$display['owner_id']) ?>">Update</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>

<script>

$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
