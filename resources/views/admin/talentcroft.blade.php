@extends('admin.admin_master')

@section('pagetitle', "Talentcroft Admin Analysis")
@section('content')

 <section class="content">

  <div class="row">
			
				{{-- Entries --}}
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon  rounded w-60 h-60">
									<span class="text-warning mr-0 font-size-24 ">
									<img src="{{asset('backend/images/journal-book.png')}}" />
								</span>
							</div>
							<div>
        @php
            $today_entries = $today[8] + $today[16];
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Today's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">{{$today_entries}}<small class="text-success"><i class="fa fa-caret-up"></i></small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon  rounded w-60 h-60">
								<span class="text-info mr-0 font-size-24 ">
									<img src="{{asset('backend/images/journal-book.png')}}" />
								</span>
							</div>
							<div>
         @php
            $yesterday_entries = $yesterday[8] + $yesterday[16];
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Yesterday's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">{{$yesterday_entries}}<small class="text-danger"><i class="fa fa-caret-down"></i> </small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
							<span class="text-danger mr-0 font-size-24 ">
									<img src="{{asset('backend/images/journal-book.png')}}" />
								</span>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">This Month's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i></small></h3>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
								<span class="text-white mr-0 font-size-24 ">
									<img src="{{asset('backend/images/journal-book.png')}}" />
								</span>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Last Month's Entries</p>
								<h3 class="text-white mb-0 font-weight-500">Entries <small class="text-success"><i class="fa fa-caret-up"></i></small></h3>
							</div>
						</div>
					</div>
				</div>


					{{-- Charts --}}
				<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart41"></div>
												</div>
												<div>
													<div id="chart42" style="margin-left: 50%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

	

		
							<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart43"></div>
												</div>
												<div>
												
														<div id="chart46" style="margin-left: 50%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

				{{-- earnings --}}
					<div class="col-xl-3 col-6 mt-30">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
								<span class="text-warning mr-0 font-size-24 ">
									<img src="{{asset('backend/images/naira-sign.png')}}" />
								</span>
							</div>
							<div>
								

        @php
            $today_earnings = $today_entries * 10
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Today's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500"> &#8358
         {{$today_earnings}} <small class="text-success"><i class="fa fa-caret-up"></i></small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6 mt-30">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
								<span class="text-info mr-0 font-size-24 ">
									<img src="{{asset('backend/images/naira-sign.png')}}" />
								</span>
							</div>
							<div>
          @php
            $yesterday_earnings = $yesterday_entries * 10
        @endphp
								<p class="text-mute mt-20 mb-0 font-size-16">Yesterday's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">&#8358
         {{$yesterday_earnings}} <small class="text-danger"><i class="fa fa-caret-down"></i> </small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-6 mt-30">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
							<span class="text-secondary mr-0 font-size-24 ">
									<img src="{{asset('backend/images/naira-sign.png')}}" />
								</span>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">This Month's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">&#8358
									1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> </small></h3>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-6 mt-30">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon rounded w-60 h-60">
								<span class="text-primary mr-0 font-size-24 ">
									<img src="{{asset('backend/images/naira-sign.png')}}" />
								</span>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Last Month's Earnings</p>
								<h3 class="text-white mb-0 font-weight-500">&#8358
									 3000<small class="text-success"><i class="fa fa-caret-up"></i></small></h3>
							</div>
						</div>
					</div>
				</div>
			

				
			
			</div>
		</section>

	<script src="{{asset('backend/js/jquery.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
			$(document).ready(function(){

					var options = {
          series: [44, 55, 60],
          chart: {
          type: 'donut',
										height: 150,
											width: 150,
														},
								legend: {
														show: false,
								},
								dataLabels: {
									enabled: false,
										},
								plotOptions: {
									pie: {
											customScale: 0.8,
											donut: {
										size: '50%',
											},
											offsetY: 0,
									},
									stroke: {
											colors: undefined
									}
										},
								colors:['#00BC8B', '#caffe5', '#fff000'],
														};

        var chart = new ApexCharts(document.querySelector("#chart46"), options);
        chart.render();

			});
				


	</script>


@endsection