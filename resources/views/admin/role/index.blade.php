@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                @if(Session::get('message'))
                    <div class="alert alert-success m-2">
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active m-2" aria-current="page">All roles</li>
                        </ol>
                    </nav>
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(count($roles)>0)
                            @foreach($roles as $key=>$role)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>
                                        <a href="{{route('roles.edit',[$role->id])}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{$role->id}}">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{route('roles.destroy', [$role->id])}}" method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this role?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete!!!</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Modal end -->

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No role Display</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

