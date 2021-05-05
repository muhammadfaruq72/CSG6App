<header class="main-header">
    <a href="/" class="logo"> 
    <span class="logo-mini">
    
    <img src="{{asset('image/clinic1.png')}}" alt="">
    </span>
    <span class="logo-lg">
    
    <img src="{{asset('image/clinic1.png')}}" alt="">
    </span>
    </a>
    
    <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> 
    <span class="sr-only">Toggle navigation</span>
    <span class="pe-7s-keypad"></span>
    </a>
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    
    {{-- @if(Auth::User()->role =="patient")
        <li style="margin-top: 20px;margin-right:20px">Patient Dashboard</li>
        @else
        <li style="margin-top: 20px;margin-right:20px">Appointments <span></span></li>
        @endif --}}


    <li class="dropdown dropdown-user">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
    <ul class="dropdown-menu">
    
    <li>
    <a href="#"><i class="pe-7s-key"></i>Change Password</a>
    </li>
    <li>
       <a class="p-2" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" data-toggle="tooltip" title="" data-original-title="Logout">
                                     <span class="media align-items-center">
                                        <i class="fa fa-sign-out fa-fw"></i>
                                         <span class="media-body text-truncate text-left">
                                             <span class="text-truncate text-left">Logout</span>
                                         </span>
                                     </span>
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </nav>
    </header>