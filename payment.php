<?php
  include ("include/header.php")
  ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb px-4 py-2">
    <li class="breadcrumb-item"><a class="text-red-c" href="index.php"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active fs-6 " aria-current="page">Payment</li>
  </ol>
</nav>


<section class="about mb-4">
  <div class="container">
    <h1 class="">WELCOME TO OUR PAYMENT GATEWAY </h1>
    <div class="row align-items-center py-2">

<div class="col-6 mt-4">
<table class="table">
    <tr>
        <th class="text-poppins">Package Selected</th>
        <td class="text-red-c text-poppins">e-Book ESSENTIAL</td>
    </tr>
    <tr>
        <th class="text-poppins">Package Amount</th>
        <td class="text-red-c text-poppins">₹3299 + 18% GST</td>
    </tr>
    <tr>
        <th class="text-poppins">Total Amount</th>
        <td class="text-red-c text-poppins">	₹3892.82</td>
    </tr>
</table>

<p>Please provide details to proceed :</p>

<form action="">
<div class="mb-3">
  <label for="name" class="form-label">Name </label>
  <input type="text" class="form-control" id="name" placeholder=" Enter Your Name">
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
</div>
<div class="mb-3">
<label for="mobile" class="form-label">Phone Number</label>
  <input type="text" class="form-control" id="mobile" placeholder="Enter Your Phone Number">
</div>
<div class="mb-3">
<a href="#" class="btn btn-custom">Submit</a>
 
</div>
</form>
</div>
<div class="col-6 align-self-center">
<img src="assets/img/other/payment-svg.webp" alt="About" class="img-fluid"/>

</div>


</div>
</div>

</section>










<!--------------------------------------------------->
<!-- ============= Footer Section ================ -->
<!--------------------------------------------------->

<?php
include ("include/footer.php")
?>