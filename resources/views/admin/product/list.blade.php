@extends('admin.dashbord')
@section('content')
@include('layouts.head')
<!--<div class="container">
  <h1>Product</h1>
<button class="list-group-item-primary">
<a class="list-group-item-primary"  href="{{route('product.create')}}">Add produit</a> 
</button>
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">title</th>
<th scope="col">image</th>
<th scope="col">discription</th>

</tr>
</thead>
<tbody>
@foreach($products as $product)

<tr >
<th scope="row"  class="list-group-item">{{$product->id}}</th>
<td>{{$product->title}}</td>
<td>{{$product->image}}</td>
<td >{{$product->discription}}</td>

<td><button class="list-group-item-danger" style="color: pink"><a href="{{url('product/'.$product->id)}}">Details</a></button>
<button class="list-group-item-danger"><a href="{{route('product.edit',$product->id)}}">modifier</a></button>
</td>
</tr>

@endforeach
</tbody>
</table>
</div> -->


<div class="app-content content " style="margin-left: 0%">
  
                
                  
                
              <!-- list and filter start -->
              <div class="card">
                  <div class="card-body border-bottom">
                    <h1 class="card-title" style="color: brown">Product list</h1>
                      <h4 class="card-title">Search & Filter</h4>
                      <div class="row">
                          <div class="col-md-4 user_role"></div>
                          <div class="col-md-4 user_plan"></div>
                          <div class="col-md-4 user_status"></div>
                      </div>

                      <div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                       <br>
                      <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><a href="{{route('product.create')}}" style="color: blanchedalmond"> <span>Add New Product</span></a></button>
                  </div>
                  <div class="card-datatable table-responsive pt-0">
                      <table class="user-list-table table">
                          <thead class="table-light">
                              <tr>
                                  
                                  <th scope="col">id</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Prix</th>
                                  <th scope="col">Image</th>
                                
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                  <th></th>
                                  
                              </tr>
                          </thead>
                        <tbody>
                          @foreach($products as $product)

                          <tr>
                            <th scope="row"  class="list-group-item">{{$product->id}}</th>
                            <td>{{$product->Nom}}</td>
                            <td>{{$product->Description}}</td>
                            <td>{{$product->Prix}}</td>
                            <td> <img src="products/{{$product->Image}}" /> </td>
                            <td><button type="button" class="btn btn-info btn-xs"> <a href="{{ route('product.edit', $product->id)}}" style="color: azure">Update</a> <span class="glyphicon glyphicon-edit"></span></button></td>
                            <td><form action="{{ route('product.destroy', $product->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                          </tr>

                           @endforeach
                        </tbody>
                      </table>
                  </div>
                 
                      @endsection
