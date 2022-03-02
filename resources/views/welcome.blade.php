<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">       

        <title>Stock</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets\vendors\images\Logo.jpg')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets\vendors\images\Logo.jpg')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets\vendors\images\Logo.jpg')}}">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\core.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\src\plugins\datatables\css\dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\src\plugins\datatables\css\responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\style.css')}}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-119386393-1');
        </script>
        <style type="text/css">
        #log{
            width:100px;		
        }
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="pre-loader">
                <div class="pre-loader-box">
                    <div id="log" class="loader-logo"><h1>Stock manager</h1></div>
                    <div class='loader-progress' id="progress_div">
                        <div class='bar' id='bar1'></div>
                    </div>
                    <div class='percent' id='percent1'>0%</div>
                    <div class="loading-text">
                        Loading...
                    </div>
                </div>
	        </div>
            <!-- @include('header') -->
            @yield('header')
            <div class="right-sidebar">
                <div class="sidebar-title">
                    <h3 class="weight-600 font-16 text-blue">
                        Layout Settings
                        <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
                    </h3>
                    <div class="close-sidebar" data-toggle="right-sidebar-close">
                        <i class="icon-copy ion-close-round"></i>
                    </div>
                </div>
                <div class="right-sidebar-body customscroll">
                    <div class="right-sidebar-body-content">
                        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                        <div class="sidebar-radio-group pb-10 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                                <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                                <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                                <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                            </div>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                        <div class="sidebar-radio-group pb-30 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                                <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                                <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                                <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                                <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                                <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                                <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                            </div>
                        </div>

                        <div class="reset-options pt-30 text-center">
                            <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('menu')
            <div class="mobile-menu-overlay"></div>
            <div class="main-container">
                <div class="pd-ltr-20">                            
                <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Total Utilisateurs</h6>              
                            </div>
                            <div class="row">                                		
                                <div class="col-8 col-md-12 col-xl-8">
                                    <h5 class="text-center"></h5>
                                    <h3 class="mb-2"> Users</h3>                
                                </div>                              
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Total Stocks</h6>             
                            </div>
                            <div class="row">                            		
                                <div class="col-10 col-md-12 col-xl-10">
                                <h5 class="text-center"></h5>
                                    <h3 class="mb-2">Stocks</h3>                
                                </div>                                		  
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">		 
                            <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Total Approvisionnement</h6>             
                            </div>
                            <div class="row">                            
                                <div class="col-11 col-md-12 col-xl-11">
                                    <h5 class="text-center"></h5>
                                    <h3 class="mb-2">Entrées</h3>                
                                </div>                               	
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Total Sotie Stock</h6>              
                            </div>
                            <div class="row">                           
                                <div class="col-10 col-md-12 col-xl-10">
                                    <h5 class="text-center"></h5>
                                    <h3 class="mb-2"> Sorties</h3>                
                                </div>                               
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
				<div class="col-sm-10 mb-20">
					<div class="card-box height-100 pd-20">
						<h2 class="h4 mb-20">Stock d'alerte</h2>						
						<table class="table table-tripped table-hover">
							<thead>
								<th>ID</th>								
								<th>Produit</th>
								<th>Quantité</th>
								<th>Categorie</th>
							</thead>
							<tbody>												
								<td></td>
								<td></td>
								<td></td>
								<td></td>							
							</tbody>
						</table>
					</div>
				</div>				
			</div><br/>	
            @include('footer')
        </div>

        
    <script src="{{url('assets\vendors\scripts\core.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\script.min.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\process.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\layout-settings.js')}}"></script>
	<script src="{{url('assets\src\plugins\apexcharts\apexcharts.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\jquery.dataTables.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\dataTables.responsive.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\responsive.bootstrap4.min.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\dashboard.js')}}"></script>
    </body>
</html>
