@extends('admin.dashbord')
@section('content')
@include('layouts.head')
    <div class="cintainer">
        <h1>edit</h1>
        <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label> 
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$product->Nom}} name="Nom">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$product->Description}} name="Description">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$product->Prix}} name="Prix">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$product->Image}} name="image">
        </div>

      
          
          <button type="submit" class="btn btn-primary">Submit</button>
        

        </form>
    </div>
    @endsection