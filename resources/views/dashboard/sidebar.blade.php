<div class="sidebar" id="sidebar">

    <div class="sidebar-inner slimscroll">
       <div id="sidebar-menu" class="sidebar-menu">
          <ul>
             <li class="menu-title">
                <span>Main Menu</span>
             </li>
             <li class="submenu">
                <a href=""><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                <ul>
                  
             
                  
                    @if(auth()->user()->is_hod != '0')
                   <li><a href="{{route('viewtplans')}}">Approve Teaching Plan</a></li>
                   @endif
                   
                   <li><a href="{{route('viewtplan')}}">View My Teaching Plans</a></li>
                   
                   <li><a href="{{route('tplan')}}">Add Teaching Plan</a></li>
               
  
                </ul>
             </li>
          </ul>
          </div>
       </div>
       </div>