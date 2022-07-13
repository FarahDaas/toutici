@extends('admin.dashbord')
@section('content')
@include('layouts.head')



<div class="app-content content " style="margin-left: 0%">
  
                
                  
                
              <!-- list and filter start -->
              <div class="card">
                  <div class="card-body border-bottom">
                    <h1 class="card-title" style="color: brown">Category list</h1>
                      <h4 class="card-title">Search & Filter</h4>
                      <div class="row">
                          <div class="col-md-4 user_role"></div>
                          <div class="col-md-4 user_plan"></div>
                          <div class="col-md-4 user_status"></div>
                      </div>

                      <div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                       <br>
                      <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><a href="{{route('category.create')}}" style="color: blanchedalmond"> <span>Add New Category</span></a></button>
                  </div>
                  <div class="card-datatable table-responsive pt-0">
                      <table class="user-list-table table">
                          <thead class="table-light">
                              <tr>
                                  
                                  <th scope="col">id</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Url</th>
                                  <th scope="col">Details</th>
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                  <th></th>
                                  
                              </tr>
                          </thead>
                        <tbody>
                          @foreach($category as $category)

                          <tr>
                            <th scope="row"  class="list-group-item">{{$category->id}}</th>
                            <td>{{$category->Nom}}</td>
                            <td>{{$category->description}}</td>
                            <td >{{$category->url}}</td>
                            <td><button type="button" class="btn btn-success btn-xs"><a href="{{url('category.show'.$category->id)}}" style="color: azure">Details</a> <span class="glyphicon glyphicon-plus"></span></button></td>
                            <td><button type="button" class="btn btn-info btn-xs"> <a href="{{ route('category.edit', $category->id)}}" style="color: azure">Update</a> <span class="glyphicon glyphicon-edit"></span></button></td>
                            <td><form action="{{ route('category.destroy', $category->id)}}" method="post">
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
