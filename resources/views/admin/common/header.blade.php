<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Well Wishers Admin Panel</title>
<link rel="stylesheet" href="{{ URL::to('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ URL::to('vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ URL::to('vendors/css/vendor.bundle.addons.css') }}">
<link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
<link rel="shortcut icon" href="{{ URL::to('images/favicon.png') }}" />
</head>

<body>
<div class="container-scroller">
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center"> <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}"> <img src="{{ URL::to('images/logo.jpg') }}" alt="logo" /> </a> <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"> <img src="{{ URL::to('images/logo.jpg') }}" alt="logo" /> </a> </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-xl-inline-block"> <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> <span class="profile-text">Hello, {{ Auth::user()->username }} !</span> <img class="img-xs rounded-circle" src="{{ url('timages/'.Auth::user()->timage) }}" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown"> <a href="{{ url('admin/useredit', ['7', 'edit']) }}" class="dropdown-item mt-2"> Manage Account </a>   <a href="{{ url('/admin/logout') }}" class="dropdown-item mt-2" ><span>Logout</span></a> </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas"> <span class="icon-menu"></span> </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper"> 
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <div class="user-wrapper">
              <div class="profile-image"> <img src="{{ url('timages/'.Auth::user()->timage) }}" alt="profile image"> </div>
              <div class="text-wrapper">
                <p class="profile-name">{{ Auth::user()->username }}</p>
                <div> <small class="designation text-muted">Admin</small> <span class="status-indicator online"></span> </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.home') }}"> 
				<i class="menu-icon mdi mdi-television"></i> 
				<span class="menu-title">Dashboard</span> 
			</a> 
		</li>
         
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.sliderlist') }}"> 
				<i class="menu-icon mdi mdi-message-image"></i> 
				<span class="menu-title">Slider</span> 
			</a> 
		</li>
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.faqlist') }}"> 
				<i class="menu-icon mdi mdi-comment-question"></i> 
				<span class="menu-title">Faq</span> 
			</a> 
		</li>
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.testlist') }}"> 
				<i class="menu-icon mdi mdi-comment"></i> 
				<span class="menu-title">Testimonies</span> 
			</a> 
		</li>
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.supportlist') }}"> 
				<i class="menu-icon mdi mdi-information"></i> 
				<span class="menu-title">Support</span> 
			</a> 
		</li>
        <li class="nav-item"> 
			<a class="nav-link" href="{{ route('admin.userlist') }}"> 
				<i class="menu-icon mdi mdi-backup-restore"></i> 
				<span class="menu-title">Users</span> 
			</a> 
		</li>
      </ul>
    </nav>
    <!-- partial -->
