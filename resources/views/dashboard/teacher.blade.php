<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
    @include('header')
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.html" class="logo">
               <img src="assets/img/logo.png" alt="Logo">
               </a>
               <a href="index.html" class="logo logo-small">
               <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            {{-- <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div> --}}
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
               <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                       <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                       <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                       <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                     </div>
                  </div>
               </li>
              @include('dropdown')
              @include('dashboard.sidebar')
            </ul>
         </div>

        
     
          
         
             <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Teachers Plan</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Teacher</a></li>
                           <li class="breadcrumb-item active">Teacher's Plan</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <x-flash-message/>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="{{route('save')}}" method="POST" >
                              @csrf
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Teacher's Plan</span></h5>
                                 </div>
                                 @error('subject_id')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                   
                                       <label>Subject</label>
                                       <div class="form-group">
                                       @foreach($subjects as $subject)
                                       <input type="radio" id="html" name="subject_id"  value="{{$subject->subject_id}}">
                                       <label for="html">{{ucfirst($subject->subject_name)}}</label><br>
                                       @endforeach
                                    </div>
                                 </div>

                                 @error('department_id')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                   
                                       <label>Department</label>
                                       <div class="form-group">
                                       @foreach($dept as $dept)
                                       <input type="radio" id="html" name="department_id"  value="{{$dept->department_id}}">
                                       <label for="html">{{ucfirst($dept->name)}}</label><br>
                                       @endforeach
                                    </div>
                                 </div>
                     
                                 @error('term')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <label>Term</label>
                                    <div class="form-group">
                                     
                                       
                                       <input type="radio" id="html" name="term"  value="1">
                                       <label for="html">1ST TERM</label>
                                       <input type="radio" id="html" name="term"  value="2">
                                       <label for="html">2ND TERM</label>
                                       <input type="radio" id="html" name="term"  value="3">
                                       <label for="html">3RD TERM</label>
                                     
                                    </div>
                                 </div>
                                 @error('week')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                   
                                       <label for="cars">Week:</label>
                                       <div class="form-group">
                                       <select name="week" id="cars">
                                       <option value=""></option>
                                       <option value="1">Week 1</option>
                                       <option value="2">Week 2</option>
                                       <option value="3">Week 3</option>
                                       <option value="4">Week 4</option>
                                       <option value="5">Week 5</option>
                                       <option value="6">Week 6</option>
                                       <option value="7">Week 7</option>
                                       <option value="8">Week 8</option>
                                       <option value="9">Week 9</option>
                                       </select>
                                    </div>
                                 </div>
                                 @error('day')
                           <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                           @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>DAY</label>
                                       <div>
                                          <input type="date" class="form-control" name="day">
                                       </div>
                                    </div>

                                    
                                 </div>
                                 @error('week_end_date')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    
                                    <div class="form-group">
                                       <label>WEEK END DATE</label>
                                       <div>
                                          <input type="date" class="form-control" name="week_end_date">
                                       </div>
                                    </div>
                                  
                                 </div>

                                 @error('general_topic')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>General Topic</label>
                                       <div>
                                          <input type="text" class="form-control" name="general_topic">
                                       </div>
                                    </div>
                                 </div>
                                 @error('specific_topics')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Specific Topics</label>
                                       <input type="text" class="form-control" name="specific_topics">
                                    </div>
                                 </div>
                                 @error('period')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Period</label>
                                       <input type="text" class="form-control" name="period">
                                    </div>
                                 </div>
                                 @error('time')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Time</label>
                                       <input type="time" class="form-control" name="time">
                                    </div>
                                 </div>
                                 @error('duration')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Duration</label>
                                       <input type="text" class="form-control" name="duration">
                                    </div>
                                 </div>
                                 @error('plan_references')
                                 <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                                 @enderror
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>References</label>
                                       <input type="text" class="form-control" name="plan_references">
                                    </div>
                                 </div>

                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label> Introduction</label>
                                       <input type="text" class="form-control" name="introduction">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Presentation</label>
                                       <input type="text" class="form-control" name="presentation">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Activities</label>
                                       <input type="text" class="form-control" name="student_activities">
                                    </div>
                                 </div>    
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Board Summary</label>
                                       <input type="text" class="form-control" name="board_summary">
                                    </div>
                                 </div>  
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Evaluation</label>
                                       <input type="text" class="form-control" name="evaluation">
                                    </div>
                                 </div>  
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Assignment</label>
                                       <input type="text" class="form-control" name="assignment">
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
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>