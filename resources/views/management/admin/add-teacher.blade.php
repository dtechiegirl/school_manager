<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
@include('header')


@include('logout')

@include('management.admin.sidebar')


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
<li class="breadcrumb-item active">Add Teachers</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form>
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>FIRST NAME</label>
<input type="text" class="form-control" name="first_name">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>LAST NAME</label>
<input type="text" class="form-control" name="last_name">
</div>
</div>

<div class="col-12 col-sm-6">
    <div class="form-group">
    <label>LAST NAME</label>
    <input type="email" class="form-control" name="contact_email">
    </div>
    </div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select class="form-control" name="gender">
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<input type="date" class="form-control" name="dob">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input type="text" class="form-control">
</div>
</div>
{{-- <div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<input type="date" class="form-control">
</div>
</div> --}}
<div class="col-12 col-sm-6">
    <div class="form-group">
    <label> Highest Qualification </label>
    <select class="form-control" name="hlq">
    <option> o-level </option>
    <option>a-level</option>
    <option>bs</option>
    <option>ms</option>
    <option>phd</option>
    </select>
    </div>
    </div>
  
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Highest Qualification Description</label>
<input class="form-control" type="text">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>PHONE NUMBER</label>
<input type="text" class="form-control" name="contact_phone">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" name="	contact_address">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Next of Kin</label>
<input type="text" class="form-control" name="contact_name">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Repeat Password</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Address</span></h5>
</div>
<div class="col-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>City</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Zip Code</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Country</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/add-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>