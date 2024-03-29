@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if(Session::get('message'))
                    <div class="alert alert-success m-2">
                        {{Session::get('message')}}
                    </div>
                @endif

                <form action="{{route('departments.update', [$department->id])}}" method="POST">
                    @csrf{{method_field('PATCH')}}
                    <div class="card">
                        <div class="card-header">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Update Department</li>
                                </ol>
                            </nav>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name"> Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control
                                       @error('name') is-invalid
                                       @enderror"
                                       placeholder="Enter Name"
                                       value="{{$department->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name"> Description </label>
                                <textarea name="description"
                                          class="form-control
                                          @error('description') is-invalid
                                          @enderror"
                                          placeholder="Enter Description">{{$department->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"> Update </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop
