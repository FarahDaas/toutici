@extends('admin.dashbord')
@section('content')
@include('layouts.head')
    <div class="container">
        <form action={{route('partner.store')}} method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nom" required>
        <label for="exampleInputEmail1" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Adresse" required>
        <label for="exampleInputEmail1" class="form-label">Type</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Type" required>
        <label for="exampleInputEmail1" class="form-label">Matricule</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Matricule" required>
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" required>
        <label for="exampleInputEmail1" class="form-label">Telephone</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Telephone" required>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="Image"required>
        </div>
        <label for="exampleInputEmail1" class="form-label">Marge</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Marge" required>
        
     
      <br>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 @endsection
