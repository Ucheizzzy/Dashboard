@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
  
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{route('admin.dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/RIM-BANNER2.png')}}" alt="">
						  <h3><b></h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		    <li class="{{($route ==='admin.dashboard') ? 'active' : ''}}">
          <a href="{{route('admin.dashboard')}}">
            <i data-feather="pie-chart"></i>
			    <span>Admin Dashboard</span>
          </a>
        </li>  
		
          <li class="treeview {{($prefix === 'category')? 'active' : ''}}">
          <a href="#">
            <i data-feather="grid"></i> <span>Product Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="{{($route === 'talentcroft') ? 'active': ''}}"><a href="{{route('talentcroft')}}"><i class="ti-more"></i>Talentcroft</a></li>
            {{-- {{route('all.subcategory')}} --}}
            <li class="{{($route === 'all.subcategory') ? 'active': ''}}"><a href=""><i class="ti-more"></i>Junebox</a></li>

            {{-- {{route('all.sub_subcategory')}} --}}
            <li class="{{($route === 'all.sub_subcategory') ? 'active': ''}}"><a href=""><i class="ti-more"></i>Money Run</a></li>
          
          </ul>
        </li>
  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		
         <li class="treeview">
                 <a href="#">
                   <i data-feather="credit-card"></i>
                   <span>Cards</span>
                   <span class="pull-right-container">
                     <i class="fa fa-angle-right pull-right"></i>
                   </span>
                 </a>
                 <ul class="treeview-menu">
          <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
          <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
          <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
           </ul>
        </li>  
		
		  
		    <li>
          {{-- {{route('admin.logout')}} --}}
          <a href="">
            <i data-feather="lock"></i>
		   	<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
     
  </aside>