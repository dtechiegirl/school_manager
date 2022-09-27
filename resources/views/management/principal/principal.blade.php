<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/time-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:57 GMT -->
@include('header')
<body>
    @include('logout')
    @include('management.principal.sidebar')

 
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teaching Plan</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Teaching Plans</li>
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
<th>General Topic</th>
<th>Specific Topic</th>
<th>Teacher Name</th>
<th>Subject</th>
<th>Term</th>
<th>Week</th>
<th>Day</th>
<th>Duration</th>
<th>Assignment</th>
<th>Duration</th>
<th>Assignment</th>
<th>Duration</th>

<td>Comment</td>


{{-- <th class="text-right">Action</th> --}}
</tr>
</thead>
@foreach($tplans as $tplan)
<tbody>
<tr>
 
  <td>{{$tplan->general_topic}}</td>


<td>
<h2 class="table-avatar">
{{-- <a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> --}}
{{$tplan->specific_topics}}


</h2>
</td>

<td>{{$tplan->getuser->name}}</td>
<td>{{$tplan->getsubject->subject_name}}</td>
<td>{{$tplan->term}}</td>
<td>{{$tplan->week}}</td>
<td>{{$tplan->day}}</td>
<td>{{$tplan->duration}}</td>
<td>{{$tplan->assignment}}</td>
<td>{{$tplan->evaluation}}</td>
<td>{{$tplan->plan_references}}</td>
<td>{{$tplan->presentation}}</td>

<td>
    <form action="{{route('comment', $tplan->id)}}" method="POST">
        @csrf
        <input type="text" placeholder="Write Comment" style="border: none;" name="hod_comments">
        <button type="submit" class="btn btn-warning">Submit Comment</button>
    </form>
</td>

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