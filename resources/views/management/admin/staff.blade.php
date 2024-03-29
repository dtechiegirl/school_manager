
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:57 GMT -->
@include('header')
<body>
     @include('logout')
    @include('management.admin.sidebar')
 
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">View Teachers</li>
</ul>
</div>
<div class="col-auto text-right float-right ml-auto">
<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
<a href="add-time-table.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<x-flash-message/>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>Staff Name</th>
<th>Staff Email</th>
<th>Staff Number</th>



{{-- <th class="text-right">Action</th> --}}
</tr>
</thead>

@foreach($staff as $staff)
<td>{{$staff->name}}</td>
<td>{{$staff->email}}</td>
<td>{{$staff->contact_number}}</td>



</tr>

</tbody>
@endforeach
</table>


</div>
</div>
</div>
</div>
</div>
</div>

<footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>