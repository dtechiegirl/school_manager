<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
    @include('header')

  
        @include('logout')
        @include('management.admin.sidebar')
      
        
     
        <div class="page-wrapper">
        <div class="content container-fluid">
        
        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">Add Subject</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
        <li class="breadcrumb-item active">Add Subject</li>
        </ul>
        </div>
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-12">
        <div class="card">
        <div class="card-body">
            <x-flash-message/>
        <form action="/subject/submit" method="POST" >
            @csrf
        <div class="row">
        <div class="col-12">
           
        <h5 class="form-title"><span>Subject Information</span></h5>
        </div>
        <div class="col-12 col-sm-6">
        <div class="form-group">
            @error('subject_name')
            <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
            @enderror
        <label>Subject Name</label>
        <input type="text" class="form-control" placeholder="Enter Subject Name" name="subject_name">
        </div>
        </div>
        <div class="col-12 col-sm-6">
        <div class="form-group">
            @error('subject_description')
            <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
            @enderror
        <label>Subject Description</label>
        {{-- <textarea name="subject_description" id="" cols="30" rows="10">Enter Subject Description</textarea> --}}
        <input type="text" class="form-control" placeholder="Enter Subject Description" name="subject_description">
        </div>
        </div>
        <div class="col-12 col-sm-6">
        <div class="form-group">

            @error('department_id')
            <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
            @enderror
        <label  >Departments </label>
        {{-- <input type="text" class="form-control"> --}}
         
      
  
           <div>
        @foreach($departments as $department)
        <input type="radio" id="html" name="department_id"  value="{{$department->department_id}}">
        <label for="html">{{ucfirst($department->name)}}</label><br>
        @endforeach

        {{-- <input type="radio" name="department_id" value="1">
        <label>Sciences</label>
        <input type="radio" name="department_id" value="2">
        <label >Languages</label>
        <input type="radio" name="department_id" value="3">
        <label>Humanities</label> --}}

    
       
        
         
    </div>
        {{-- <input type="radio" id="css" name="{{$department->name}}" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="{{$department->name}}" value="JavaScript">
        <label for="javascript">JavaScript</label> --}}

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
        
        <!-- Mirrored from preschool.dreamguystech.com/html-template/add-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
        </html>