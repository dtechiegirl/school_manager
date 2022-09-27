<li class="nav-item dropdown has-arrow">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
    <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
    </a>
    <div class="dropdown-menu">
       <div class="user-header">
          <div class="avatar avatar-sm">
             <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
          </div>
          <div class="user-text">
             <h6>Welcome {{auth()->user()->username}}</h6>
             <p class="text-muted mb-0">Role: {{ucfirst(auth()->user()->role_id)}}</p>
          </div>
       </div>
       <a class="dropdown-item" href="profile.html">My Profile</a>
       <a class="dropdown-item" href="inbox.html">Inbox</a>
       <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="dropdown-item" type="submit">Logout</button>

      </form>
       
    </div>
 </li>