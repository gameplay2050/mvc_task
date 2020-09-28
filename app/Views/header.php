<?php

helper('url'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MVC Testing Project 2</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css_design_files/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/css_design_files/css/mdb.min.css');?>" rel="stylesheet">
  <!-- MDBootstrap Datatables  -->
  <link href="<?php echo base_url('assets/css_design_files/css/addons/datatables.min.css');?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/css_design_files/css/addons/style.css');?>" rel="stylesheet">
  <!-- Layout Standards  -->

<link href="<?php echo base_url('assets/standards/layout_standards.css');?>" rel="stylesheet">

	
 
<style>

p{
	
	text-align: justify;
}

.number-input input[type="number"] {
-webkit-appearance: textfield;
-moz-appearance: textfield;
appearance: textfield;
}

.number-input input[type=number]::-webkit-inner-spin-button,
.number-input input[type=number]::-webkit-outer-spin-button {
-webkit-appearance: none;
}

.number-input {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.number-input button {
-webkit-appearance: none;
background-color: transparent;
border: none;
align-items: center;
justify-content: center;
cursor: pointer;
margin: 0;
position: relative;
}

.number-input button:before,
.number-input button:after {
display: inline-block;
position: absolute;
content: '';
height: 2px;
transform: translate(-50%, -50%);
}

.number-input button.plus:after {
transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
text-align: center;
}

.number-input.number-input {
border: 1px solid #ced4da;
width: 10rem;
border-radius: .25rem;
}

.number-input.number-input button {
width: 2.6rem;
height: .7rem;
}

.number-input.number-input button.minus {
padding-left: 10px;
}

.number-input.number-input button:before,
.number-input.number-input button:after {
width: .7rem;
background-color: #495057;
}

.number-input.number-input input[type=number] {
max-width: 4rem;
padding: .5rem;
border: 1px solid #ced4da;
border-width: 0 1px;
font-size: 1rem;
height: 2rem;
color: #495057;
}

@media not all and (min-resolution:.001dpcm) {
@supports (-webkit-appearance: none) and (stroke-color:transparent) {

.number-input.def-number-input.safari_only button:before,
.number-input.def-number-input.safari_only button:after {
margin-top: -.3rem;
}
}
}

</style>


</head>

<body>



  <!-- Start your project here-->
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background:var(--main_admin_header_layout_background_color);"> <!--- #34495e -->
  <a class="navbar-brand" href="<?php echo base_url('/public');?>">MVC Testing Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/public');?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
	    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Property
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">

          <a class="dropdown-item" href="<?php echo base_url('public/Property/index') ?>">Add New Property</a>
        


		  
        </div>
      </li>
	  
	   
  </div>
</nav>
<!--/.Navbar -->
  <!-- Start your project here-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/css_design_files/js/jquery-3.4.1.min.js') ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assets/css_design_files/js/popper.min.') ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/css_design_files/js/bootstrap.min.js') ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/css_design_files/js/mdb.min.js') ?>"></script>
  

  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url('assets/css_design_files/js/addons/datatables.min.js') ?>"></script>
	  
	  
</body>

</html>
