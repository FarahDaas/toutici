@extends('admin.dashbord')
@section('content')
@include('layouts.head')



<div class="app-content content " style="margin-left: 0%">
  
                
                  
                
              <!-- list and filter start -->
              <div class="card">
                  <div class="card-body border-bottom">
                    <h1 class="card-title" style="color: brown">Partner list</h1>
                      <h4 class="card-title">Search & Filter</h4>
                      <div class="row">
                          <div class="col-md-4 user_role"></div>
                          <div class="col-md-4 user_plan"></div>
                          <div class="col-md-4 user_status"></div>
                      </div>

                      <div class="me-1"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                       <br>
                      <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><a href="{{route('partner.create')}}" style="color: blanchedalmond"> <span>Add New Partner</span></a></button>
                  </div>
                  <div class="card-datatable table-responsive pt-0">
                      <table class="user-list-table table">
                          <thead class="table-light">
                              <tr>
                                  
                                  <th scope="col">id</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Adresse</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Details</th>
                                  <th scope="col">Edit</th>
                                  <th scope="col">Delete</th>
                                  <th></th>
                                  
                              </tr>
                          </thead>
                        <tbody>
                          @foreach($partner as $partner)

                          <tr>
                            <th scope="row"  class="list-group-item">{{$partner->id}}</th>
                            <td>{{$partner->Nom}}</td>
                            <td>{{$partner->Adresse}}</td>
                            <td >{{$partner->Type}}</td>
                            <td> <img src="{{asset('partners/$partner->Image')}}" width="30px" /> </td>
                            <td>{{$partner->Email}}</td>
                            <td><button type="button" class="btn btn-success btn-xs"><a href="{{ route('partner.show',$partner->id)}}" style="color: azure">Details</a> <span class="glyphicon glyphicon-plus"></span></button></td>
                            <td><button type="button" class="btn btn-info btn-xs"> <a href="{{ route('partner.edit', $partner->id)}}" style="color: azure">Update</a> <span class="glyphicon glyphicon-edit"></span></button></td>
                            <td><form action="{{ route('partner.destroy', $partner->id)}}" method="post">
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
