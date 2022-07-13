@extends('admin.dashbord')
@section('content')
@include('layouts.head')
    <div class="container">
        <form action={{route('category.store')}} method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom" required>
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Description" required>
        <label for="exampleInputEmail1" class="form-label">Url</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="url" required>
        
     
      <br>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 @endsection
