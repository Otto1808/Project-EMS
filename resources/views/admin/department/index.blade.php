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
                            <li class="breadcrumb-item active m-2" aria-current="page">All Departments</li>
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
                        @if(count($departments)>0)
                            @foreach($departments as $key=>$department)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    <td>
                                        <a href="{{route('departments.edit',[$department->id])}}">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td><i class="fas fa-trash"></i>Delete</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Department Display</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
