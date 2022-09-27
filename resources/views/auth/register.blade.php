<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
 @include('header')
 <x-flash-message/>
   <body>
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="{{asset('assets/img/logo-white.png')}}" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Register</h1>
                        <p class="account-subtitle">Access to Dashboard</p>
                        <form action="{{route('registration')}}" method="POST">
                           @csrf
                           @error('username')
                           <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                           @enderror
                           <div class="form-group">
                            <input class="form-control" type="text" placeholder="Username" name="username">
                         </div>
                         @error('name')
                         <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                         @enderror
                         <div class="form-group">
                            <input class="form-control" type="text" placeholder="name" name="name">
                         </div>
                         @error('contact_number')
                         <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                         @enderror
                         <div class="form-group">
                            <input class="form-control" type="number" placeholder="Number" name="contact_number">
                         </div>
                         @error('email')
                         <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                         @enderror
                           <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email" name="email">
                           </div>
                           @error('password')
                           <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                           @enderror
                           <div class="form-group">
                              <input class="form-control" type="password" placeholder="Password" name="password">
                           </div>

                           <div class="form-group">
                            @error('role_id')
                            <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
                            @enderror
                            <label for="usertype">User Type</label>
                            <select name="role_id" >
                               
                             <option value=""></option>
                              <option value="admin">Admin</option>
                              <option value="staff">Staff</option>
                              <option value="teacher">Teacher</option>
                              
                              
                            </select>
                            
                         </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Register</button>
                           </div>
                        </form>
                        <div class="text-center forgotpass"><a href="{{url('/')}}">Login</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>

                        {{-- <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div> --}}
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:40 GMT -->
</html>