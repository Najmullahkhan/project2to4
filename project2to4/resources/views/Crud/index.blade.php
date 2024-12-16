<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Crud</title>
</head>
<body>
<div class=" container-fluid mt-4">
  <div class="alert alert-success">
     <h1 class="text-center">CRUD FORM</h1>
  </div>
<form action="store" method="post">
  @csrf
<input type="text" name="name" class="form-control">
<input type="email" name="email" class="form-control">
<input type="submit" name="btn" class="btn btn-success">
<a href="" class="btn btn-success">view</a>
</form>

  

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>