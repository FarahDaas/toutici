@extends('admin.dashbord')
@section('content')
@include('layouts.head')
    <div class="cintainer">
        <h1>edit</h1>
        <form action="{{route('partner.update', $partner->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label> 
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Nom}} name="Nom">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Adresse</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Adresse}} name="Adresse">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Type</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Type}} name="Type">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Matricule</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Matricule}} name="Matricule">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Email}} name="Email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Telephone}} name="Telephone">
        </div>

           <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Image}} name="image">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Marge</label>
            
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$partner->Marge}} name="Marge">
        </div>

     

      
          
          <button type="submit" class="btn btn-primary">Submit</button>
        

        </form>
    </div>
    @endsection