<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css

<link rel="stylesheet" href="assets/css/style.css">
<title>Crud</title>
</head>
<body>
<div class=" container-fluid mt-4">
  <div class="alert alert-success">
    <div class="alert alert-success">
      <h1 class="text-center">Crud Form</h1>
    </div>
    <table class="table table-success">
<thead>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Action</th>
</thead>
<tbody>
  @foreach($users as $user)

  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>

<td>
<a href="{{route('edit',$user->id)}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
<a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
<form action="{{route('delete',$user->id)}}" method="post" style="display:inline">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you wanna delete this data')"><i class="bi bi-trash"></i></button>
</form>

</td>
  </tr>
  @endforeach
</tbody>
</table>

<script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>