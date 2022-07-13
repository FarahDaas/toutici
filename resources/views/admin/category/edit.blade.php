@extends('admin.dashbord')
@section('content')
@include('layouts.head')
    <div class="cintainer">
        <h1>edit</h1>
        <form action="{{route('category.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label> 
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$category->Nom}} name="Nom">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$category->description}} name="Description">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Url</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$category->url}} name="Url">
        </div>

      

     

      
          
          <button type="submit" class="btn btn-primary">Submit</button>
        

        </form>
    </div>
    @endsection