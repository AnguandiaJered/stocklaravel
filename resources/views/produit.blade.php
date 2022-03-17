
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Produits</title>

	  <!-- Site favicon -->
       <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets\vendors\images\graphic.PNG')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets\vendors\images\graphic.PNG')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets\vendors\images\graphic.PNG')}}">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\core.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\src\plugins\datatables\css\dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\src\plugins\datatables\css\responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets\vendors\styles\style.css')}}">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style type="text/css">
	#log{
		width: 100px;		
	}
	</style>
</head>
<body>
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
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Produit</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-12 col-sm-12 text-right">							
								<button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Produit</button>
							
							<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
							<div role="document" class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 id="exampleModalLabel" class="modal-title">Add produit</h5>
									<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
								</div>
									<div class="modal-body col-md-12">						
										<form id="formproduit" class="form-horizontal col-md-12" autocomplete="off">										
										@csrf
											<div class="form-group">
												<label for="designation">Designation</label>
												<input type="text" class="form-control" placeholder="designation" id="designation" name="designation" value="" required/>
											</div>                         
											<div class="form-group">
												<label for="quantite">Quantité</label>
												<input type="number" class="form-control" placeholder="quantité" id="quantite" name="quantite" min="0" oninput="this.value = Math.abs(this.value)" value="" required/>
											</div>               
											<div class="form-group">
												<label for="categorie">Categorie</label>
												<select class="form-control" name="category_id" id="category_id">
													<optgroup >																						
													@foreach ($categ as $item)																				
														<option value="{{$item->id}}">{{$item->designation}}</option>
													@endforeach	                                                          														
													</optgroup>	
												</select>
											</div>                 
											<div class="form-group">                               
												<input type="submit" class="btn btn-primary col-md-6 mt-4 ml-5" value="Enregistrer" />
											</div> 																								
										</form>
									</div>                                   
								</div>								                        
							</div>							
						</div>							
						</div>
					</div>
				</div>
                		<div id="myModalcate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
							<div role="document" class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 id="exampleModalLabel" class="modal-title">Add categorie</h5>
										<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
									</div>
									<div class="modal-body col-md-12">						
										<form id="formecategorie" class="form-horizontal col-md-12" autocomplete="off">									
										@csrf 
											<div class=" mt-3">
												<div class="form-group">
													<label for="designation">Designation</label>
													<input type="text" class="form-control" placeholder="designation" name='designation' id="designation" required />
												</div>                                                                                            
											</div>                                                               
											<div class="form-group">                               
												<input type="submit" class="btn btn-primary col-md-6 mt-4 ml-5" value="Enregistrer" />
											</div>																							
										</form>
									</div>
								</div>								                        
							</div>							
						</div>				
                <div class="card-box mb-50 container"><br>
                <button data-toggle="modal" data-target="#myModalcate" class="btn btn-primary">Add categorie</button>
				<a class="btn btn-primary offset-8" href="{{ route('listeproduit') }}">Imprimer</a>    	
					<div class="pd-20">
						<h4 class="text-blue h4">Liste des Produits</h4>                  						
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Designation</th>									
									<th>Quantité</th>												
                                    <th>Categorie</th>									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($produit as $item)
								<div id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
							<div role="document" class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 id="exampleModalLabel" class="modal-title">Update sortie</h5>
									<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
								</div>
									<div class="modal-body col-md-12">						
										<form method="POST" action="{{route('produit.update')}}" class="form-horizontal" autocomplete="off">
										@csrf 
											<input type="hidden" name="id" id="id" value="{{$item->id}}" class="form-control" required/>										
											<div class="form-group">
												<label for="designation">Designation</label>
												<input type="text" class="form-control" placeholder="designation" value="{{$item->designation}}" id="designation" name="designation" value="" required/>
											</div>                         
											<div class="form-group">
												<label for="quantite">Quantité</label>
												<input type="number" class="form-control" placeholder="quantité" value="{{$item->quantite}}" id="quantite" name="quantite" min="0" oninput="this.value = Math.abs(this.value)" value="" required/>
											</div>               
											<div class="form-group">
												<label for="categorie">Categorie</label>
												<select class="form-control" name="category_id" id="category_id" value="{{$item->category_id}}">
													<optgroup >																						
														<option value="{{$item->category_id}}">{{$item->category_id}}</option>                                                           														
													</optgroup>	
												</select>
											</div>              								
											<div class="form-group">                               
												<input type="submit" class="btn btn-primary col-md-6 mt-4 ml-5" value="Modifier" />
											</div> 																											
										</form>
									</div>
								</div>								                        
							</div>							
						</div>								
													
								<tr>
									<div class="modal fade" id="edit{{$item->id}}">
                                        <div class="modal-dialog modal-success">
                                          <div class="modal-content">
                                            <div class="modal-header" >
                                              <h3>Editer</h3><button class="btn btn-danger" data-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body"></div>
                                          </div>
                                        </div>
                                    </div>
									<td class="table-plus">{{$item->id}}</td>
									<td>{{$item->designation}}</td>
									<td>{{$item->quantite}}</td>
									<td>{{$item->category_id}}</td>																		
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">												
												<a class="dropdown-item" data-toggle="modal" data-target="#edit{{$item->id}}" href="{{'/produit/edit/'.$item->id}}".$id><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" onclick= "return (confirm(' Voulez-vous supprimer vraiment cette information ?'));"  href="{{'/produit/delete/'.$item->id}}"><i class="dw dw-delete-3"></i> Delete</a>											
											</div>
										</div>
									</td>
								</tr>
								@endforeach				
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div><br/>	
            @include('footer')
		</div>
	</div>
	<!-- js -->
    <script src="{{url('assets\vendors\scripts\core.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\script.min.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\process.js')}}"></script>
	<script src="{{url('assets\vendors\scripts\layout-settings.js')}}"></script>
    <script src="{{url('assets\src\plugins\datatables\js\jquery.dataTables.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\dataTables.responsive.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\responsive.bootstrap4.min.js')}}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{url('assets\src\plugins\datatables\js\dataTables.buttons.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\buttons.bootstrap4.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\buttons.print.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\buttons.html5.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\buttons.flash.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\pdfmake.min.js')}}"></script>
	<script src="{{url('assets\src\plugins\datatables\js\vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{url('assets\vendors\scripts\datatable-setting.js')}}"></script>
		<script type="text/javascript">
			$('#formproduit').submit(function(e){

				e.preventDefault();

				$.ajax({
					url:'{{ route("produit.store")}}',
					method: 'POST',
					data: new FormData(this),
					processData:false,
					contentType:false,
					cache:false,
					headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
					
					success: function(data){
						// alert('insert successfully');
						$('#formproduit')[0].reset();
					}
				});
			});			
		</script>
		<script type="text/javascript">
			$('#formecategorie').submit(function(e){

				e.preventDefault();

				$.ajax({
					url:'{{ route("category.store")}}',
					method: 'POST',
					data: new FormData(this),
					processData:false,
					contentType:false,
					cache:false,
					headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
					
					success: function(data){
						// alert('insert successfully');
						$('#formecategorie')[0].reset();
					}
				});
			});			
		</script>
</body>

</html>