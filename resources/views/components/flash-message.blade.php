
   @if(session()->has('message'))
   <div x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 3000)" x-show = "show"  role="alert">
 
      <div class="form-group alert alert-info" role="alert">
         {{session('message')}}
       </div>
       
   
     
   </div>
   </div>
   @endif