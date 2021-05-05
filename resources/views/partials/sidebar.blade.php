
<aside class="main-sidebar">

  <div class="sidebar">
  
  <div class="user-panel text-center">
  <div class="image">
  <img src="{{asset('image/admin.png')}}" class="img-circle" alt="User Image">
  </div>
  <div class="info">
  <p><?php echo Auth::user()->name ?></p>
  </div>
  </div>
  @if (Auth::User()->role == "admin")
      
  <ul class="sidebar-menu">
  <li class="active">
  <a href="/"><i class="ti-home"></i> <span>Dashboard</span>
  </a>
  </li>
  <li class="treeview Doctor">
  <a href="#">
  <i class="fa fa-file-text-o" aria-hidden="true"></i><span>Doctor</span>
  <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
  </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="/Doctor/create"><i class="fa fa-plus" aria-hidden="true"></i> Create Doctor </a></li>
  <li><a href="/Doctor"><i class="fa fa-plus" aria-hidden="true"></i> Doctor List </a></li>
  </ul>
  </li>
  <li class="treeview patient">
  <a href="#">
  <i class="fa fa-child" aria-hidden="true"></i><span>Patient</span>
  <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
  </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="/Patient/create"> <i class="fa fa-plus" aria-hidden="true"></i> Add New Patient</a></li>
  <li><a href="/Patient"> <i class="fa fa-list" aria-hidden="true"></i> Patient List</a></li>
  </ul>
  </li>
  {{-- <li class="treeview pres">
  <a href="#">
  <i class="fa fa-codepen" aria-hidden="true"></i><span>Prescription</span>
  <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
  </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="/Prescription"> <i class="fa fa-plus" aria-hidden="true"></i> Prescription List</a></li>
  </ul>
  </li> --}}
  <li class="treeview pres">
    <a href="#">
      <i class="fa fa-plus"></i><span>Hospital</span>
    <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="/Hospital/create"> <i class="fa fa-plus" aria-hidden="true"></i> Create Hospital</a></li>
      <li><a href="/Hospital"> <i class="fa fa-list" aria-hidden="true"></i> Hospital List</a></li>
    </ul>
    </li>



  <li class="treeview Invoice">
    <a href="#">
    <i class="fa fa-cogs"></i><span>Users</span>
    <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li><a href="/User/create"><i class="fa fa-plus" aria-hidden="true"></i> Add User </a></li>
    <li><a href="/User"><i class="fa fa-list" aria-hidden="true"></i> User List </a></li>
    
    </ul>
    </li>
 
 
  </ul>
    
@elseif(Auth::User()->role == "doctor")
<ul class="sidebar-menu">
  <li class="active">
  <a href="/"><i class="ti-home"></i> <span>Dashboard</span>
  </a>
  </li>

  <li class="treeview patient">
  <a href="#">
  <i class="fa fa-child" aria-hidden="true"></i><span>Patient</span>
  <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
  </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="/Patient/create"> <i class="fa fa-plus" aria-hidden="true"></i> Add Patient Details</a></li>
  <li><a href="/Patient"> <i class="fa fa-list" aria-hidden="true"></i> Patient List</a></li>
  </ul>
  </li>
  {{-- <li class="treeview pres">
  <a href="#">
  <i class="fa fa-codepen" aria-hidden="true"></i><span>Prescription</span>
  <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
  </span>
  </a>
  <ul class="treeview-menu">
  <li><a href="/Prescription"> <i class="fa fa-plus" aria-hidden="true"></i> Prescription List</a></li>
  </ul>
  </li> --}}
  </ul>
  @elseif(Auth::User()->role == "patient")
  <ul class="sidebar-menu">
    <li class="active">
    <a href="/dashboard"><i class="ti-home"></i> <span>Dashboard</span>
    </a>
    </li>
   
    
    <li class="treeview appointment">
    <a href="#">
    <i class="fa fa-codepen" aria-hidden="true"></i><span>Permissions</span>
    <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li><a href="/Appointment/create"> <i class="fa fa-plus" aria-hidden="true"></i> Generate Keys</a></li>
    </ul>
    </li>
    {{-- <li class="treeview pres">
    <a href="#">
    <i class="fa fa-codepen" aria-hidden="true"></i><span>Prescription</span>
    <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li><a href="/Prescription"> <i class="fa fa-plus" aria-hidden="true"></i> Prescription List</a></li>
    </ul>
    </li> --}}
 
   
    </ul>

  
  @endif
  </div> 
  </aside>