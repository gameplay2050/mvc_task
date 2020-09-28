<?php require_once('header.php');

?>
<center>
<form method="POST" action="addRecord">
    <table border="0" cellpadding="20px;" style="width:70%;" >

    <tr>

    <td>AIRKEEPER </td>

    </tr>
        <tr>

        <td> 

        <label for="exampleForm2">Owner</label>
        <select class="browser-default custom-select" name="owner_name" required >
            <option  disabled style="display:none" selected>Select Owner</option>
            <option value="Alessio">Alessio</option>
            <option value="Ali">Ali</option>
            <option value="John">John</option>
        </select>

        </td>

            <td> 

                <!-- Default input -->
                <label for="exampleForm2">Identificator AIRBNB</label>
                <input type="text" id="exampleForm2" class="form-control"  placeholder="Promotion Code" name="promo_code" required >

            </td>

            <td> 
            
            <label for="exampleForm2">Property Type</label>
            <select class="browser-default custom-select" name="property_type" required >
                <option disabled style="display:none" selected>Select type</option>
                <option value="House">House</option>
                <option value="Town House">Town House</option>
                <option value="Apartment">Apartment</option>
            </select>

        </td>


        </tr>

        <tr>

<td>PROPERTY ADDRESS </td>

</tr>

        <tr>

        <td> 

        <label for="exampleForm2">Country</label>
        <select class="browser-default custom-select" name="country_list" required >
            <option disabled style="display:none" selected>Select Country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Saudia Arabia">Saudia Arabia</option>
            <option value="Australia">Australia</option>
        </select>

        </td>

        <td> 

            <!-- Default input -->
            <label for="exampleForm2">Street Address</label>
            <input type="text" id="exampleForm2" class="form-control"  placeholder="Street Address" name="street_address" required >

        </td>

        <td> 

        <!-- Default input -->
        <label for="exampleForm2">Apt, Suite. (Optional)</label>
        <input type="text" id="exampleForm2" class="form-control"  placeholder="Apt, Suite. (Optional)" name="apt_suite" >

        </td>


        </tr>

        
        <tr>

        <td> 

            <!-- Default input -->
            <label for="exampleForm2">City</label>
            <input type="text" id="exampleForm2" class="form-control"  placeholder="City" name="city" required>

        </td>

        <td> 

            <!-- Default input -->
            <label for="exampleForm2">State</label>
            <input type="text" id="exampleForm2" class="form-control"  placeholder="State" name="state" required>

        </td>

        <td> 

        <!-- Default input -->
        <label for="exampleForm2">PostCode</label>
        <input type="text" id="exampleForm2" class="form-control"  placeholder="Post Code" name="post_code" required>

        </td>


        </tr>

        <tr>

<td>BED CONFIGURATION</td>

</tr>

<tr>
    <td>

    <label for="exampleForm2">Number of Guest</label>
    <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0"  value="" name="no_of_guests" type="number" >
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
    </td>

    <td>

    <label for="exampleForm2">Number of Bedrooms</label>
    <select class="browser-default custom-select" name="no_of_bedrooms" >
            <option selected>Select Bedroom</option>
            <option value="1">1 Bedroom</option>
            <option value="2">2 Bedrooms</option>
            <option value="3">3 Bedrooms</option>
            <option value="4">4 Bedrooms</option>
            <option value="5">5 Bedrooms</option>
            <option value="6">6 Bedrooms</option>
            <option value="7">7 Bedrooms</option>
        </select>
    </td>


    <td>

    <label for="exampleForm2">Number of Bathrooms</label>
    <div class="def-number-input number-input safari_only">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0"  value="" name="no_of_bathrooms" type="number" >
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
    </td>

</tr>


<tr>

<td>
    Common Spaces 
    <button type="button" class="btn btn-primary" style="float:right">Add beds</button>
</td>

<td>
    Bedroom 1
    <button type="button" class="btn btn-primary" style="float:right">Add beds</button>
</td>

<td>
Bedroom 2
    <button type="button" class="btn btn-primary" style="float:right">Add beds</button>
</td>


</tr>


<tr>

<td>
King
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_king" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
King
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_king" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
King
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_king" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>


<tr>

<td>
Queen
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_queen" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Queen
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_queen" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Queen
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_queen" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>


<tr>

<td>
Double
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_double" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Double
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_double" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Double
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_double" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>


<tr>

<td>
Single
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_single" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Single
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_single" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Single
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_single" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>



<tr>

<td>
Sofa
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_sofa" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Sofa
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_sofa" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Sofa
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_sofa" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>



<tr>

<td>
Bunk
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_bunk" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Sofa
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_bunk" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Sofa
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_bunk" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>



<tr>

<td>
Air Mattress
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_airmattress" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Air Mattress
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_airmattress" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Air Mattress
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_airmattress" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>


<tr>

<td>
Couch
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="comon_space_couch" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Couch
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_1_couch" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

<td>
Couch
<div class="def-number-input number-input safari_only" style="float:right">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
  <input class="quantity" min="0" name="quantity" value="0" name="bed_room_2_couch" type="number">
  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
</div>
</td>

</tr>

<tr>
    <td></td>
<td>
<center>
<button type="submit" class="btn btn-primary" name="add_record" >Add</button>
</center>
</td>
<td></td>
</tr>

    </table>
</form>
</center>