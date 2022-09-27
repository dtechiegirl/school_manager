
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
<h3 class="page-title">Change Teachers Role</h3>
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
<th>Teacher Name</th>
<th>Teacher Email</th>
<th>Teacher Number</th>
<th>Role</th>



{{-- <th class="text-right">Action</th> --}}
</tr>
</thead>

@foreach($teachers as $teacher)
<td>{{$teacher->name}}</td>
<td>{{$teacher->email}}</td>
<td>{{$teacher->contact_number}}</td>
<td>
    <form action="{{route('role', $teacher->id)}}" method="POST">
        @csrf
        @if($teacher->is_hod == "0")
        <button type="submit" class="btn btn-success">Make HOD</button>
        @endif
        @if($teacher->is_hod == "1")
        <button type="submit" class="btn btn-info">HOD SCIENCE</button>
        @endif
        @if($teacher->is_hod == "2")
        <button type="submit" class="btn btn-dark">HOD HUMANITY</button>
        @endif
        @if($teacher->is_hod == "3")
        <button type="submit" class="btn btn-warning ">HOD LANG</button>
        @endif
    </form>
    </td>

{{-- <td>
<form action="{{route('activate', $tplan->id)}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Action</button>
</form>
</td> --}}
{{-- <td>
    <form action="{{route('comment', $tplan->id)}}" method="POST">
        @csrf
        <input type="text" placeholder="Write Comment" style="border: none;" name="hod_comments">
        <button type="submit" class="btn btn-warning">Submit Comment</button>
    </form>
</td> --}}

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