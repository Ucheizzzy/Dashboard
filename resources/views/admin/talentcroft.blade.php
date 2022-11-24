@extends('admin.admin_master')

@section('pagetitle', "Talentcroft Admin Analysis")
@section('content')

 <section class="content">

  <div class="row">
			
				{{-- Entries --}}
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>
        @php
            $today_entries = $today[8] + $today[16];
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Today's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">{{$today_entries}}<small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
         @php
            $yesterday_entries = $yesterday[8] + $yesterday[16];
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Yesterday's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">{{$yesterday_entries}}<small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-danger-light rounded w-60 h-60">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">This Month's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-light rounded w-60 h-60">
								<i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Last Month's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				{{-- earnings --}}
					<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>

        @php
            $today_earnings = $today_entries * 10
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Today's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500"> &#8358
         {{$today_earnings}} <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
          @php
            $yesterday_earnings = $yesterday_entries * 10
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Yesterday's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">&#8358
         {{$yesterday_earnings}} <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-danger-light rounded w-60 h-60">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">This Month's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-light rounded w-60 h-60">
								<i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Last Month's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
			

				
			
			</div>
		</section>


@endsection