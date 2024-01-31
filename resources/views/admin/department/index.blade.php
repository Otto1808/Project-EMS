@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        @if(count($departments)>0)
                            @foreach($departments as $key=>$departments)
                        <tr>
                            {{--<th>{{$key+1}}</th>
                            <th>{{$departments->name}}</th>
                            <th>{{$departements->description}}</th>
                            <th><i class="fas fa-edit"></i>Edit</th>
                            <th><i class="fas fa-trash"></i>Delete</th>--}}
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>No Department Display</td>
                            </tr>
                        @endif
                        </thead>

                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
