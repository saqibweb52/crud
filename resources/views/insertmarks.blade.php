
 
 
 <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>put data</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Students Marks</h1>
							<p class="lead">
								
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="insert" method="post">
                                        @csrf
										<div class="mb-3">
											<label class="form-label"></label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your Name" required />
										</div>
										<div class="mb-3">
											<label class="form-label"></label>
											<input class="form-control form-control-lg" type="text" name="city" placeholder="Enter User City" required />
										</div>
										<div class="mb-3">
											<label class="form-label"></label>
											<input class="form-control form-control-lg" type="text" name="marks" placeholder="Enter your Marks" required/>
										</div>
									
										<div class="mb-3">
										<label class="form-label"> </label>
										
									</div>
										<div class="text-center mt-3">
											<input type="submit" class="btn btn-lg btn-primary" value="ADD">
											<div class="text-center mt-3">
											
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
									@if(session()->has('status'))
									<div class="alert- alert-success">
                                       {{session('status')}}
									</div>
										
									@endif
								</div>
							</div>
						</div>
                        
						

					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-4">
			<h1 class="h2">Students List</h1>
			<hr>
		</div>
		<table  class="table table-striped">
			<thead>
				<tr>
					<th style="width:20%;">Id</th>
					<th style="width:20%;">Name</th>
					<th style="width:20%">City</th>
					<th style="width:20%">Marks</th>
					
					
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			
				

				@foreach ($students as $s)
                <tr>
				<th>{{$s->id}}</th>
				<td>{{$s->name}}</td>
				<td>{{$s->city}}</td>
				<td>{{$s->marks}}</td>

			
					<th>
                      <a href="{{url('edit',$s->id)}}" class="btn btn-info btn-sm">Edit</a>
					  <a href="{{url('delete',$s->id)}}" class="btn btn-danger btn-sm">Delete</a>

					</th>
				@endforeach
	
			</tbody>
					
				

		
		</table>
	</main>

	<script src="js/app.js"></script>

</body>

</html>