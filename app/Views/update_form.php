<?php require_once('header.php');


    $owner_id = $owner_record[0]['owner_id'];
    $owner_name = $owner_record[0]['owner_name'];
    $promo_code = $owner_record[0]['promo_code'];
    $property_type = $owner_record[0]['property_type'];
?>
<center>
<form method="POST" action="<?php echo base_url('public/Property/updateRecord') ?>">
    <table border="0" cellpadding="20px;" style="width:70%;" >

    <tr>

    <td>AIRKEEPER </td>

    </tr>
        <tr>

        <td> 

<!-- Default input -->
<label for="exampleForm2">Owner ID</label>
<input type="text" id="exampleForm2" class="form-control"  placeholder="Owner ID" name="owner_id" value="<?php echo  $owner_id;?>" readonly>

</td>

        <td> 

        <label for="exampleForm2">Owner Name</label>
        <select class="browser-default custom-select" name="owner_name" value="<?php echo  $owner_name;?>" >
            <option  style="display:none" >Select Owner</option>
            <option value="<?php $owner_name?>" selected ><?php echo $owner_name?></option>

        </select>

        </td>

            <td> 

                <!-- Default input -->
                <label for="exampleForm2">Identificator AIRBNB</label>
                <input type="text" id="exampleForm2" class="form-control"  placeholder="Promotion Code" name="promo_code" value="<?php echo  $promo_code;?>" >

            </td>

            <td> 
            
            <label for="exampleForm2">Property Type</label>
            <select class="browser-default custom-select" name="property_type" >
                <option  style="display:none" >Select type</option>
                    <option <?php if($property_type == "House") { ?> selected <?php }?>  value="House"> House </option>
                <option <?php if($property_type == "Town House") { ?> selected <?php }?> value="Town House">Town House</option>
                <option <?php if($property_type == "Apartment") { ?> selected <?php }?> value="Apartment">Apartment</option>
            </select>

        </td>


        </tr>


<tr>
    <td></td>
<td>
<center>
<button type="submit" class="btn btn-primary" name="update_record" >Update</button>
</center>
</td>
<td></td>
</tr>

    </table>
</form>
</center>