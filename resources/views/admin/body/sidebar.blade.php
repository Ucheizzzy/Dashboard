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
            <li class="{{($route === 'junebox') ? 'active': ''}}"><a href="{{route('junebox')}}"><i class="ti-more"></i>Junebox</a></li>

            {{-- {{route('all.sub_subcategory')}} --}}
            <li class="{{($route === 'moneyrun') ? 'active': ''}}"><a href="{{route('moneyrun')}}"><i class="ti-more"></i>Money Run</a></li>
          
          </ul>
        </li>
  
		 
     
		
        
		
		  
		    <li>
         
          <a href="{{route('admin.logout')}}">
            <i data-feather="lock"></i>
		   	<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
     
  </aside>