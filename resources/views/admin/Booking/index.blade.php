@extends('admin.layouts.app')

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">

            </h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover datatable-highlight">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Package</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->package->name}}</td>
                        <td>{{$value->email ?? ''}}</td>
                        <td>{{$value->phone ?? ''}}</td>
                        <td>{{$value->status == 1 ? 'WAITING' : ($value->status == 2 ? 'CONFIRMED' : 'CANCELED')}}</td>
                        <td>{{$value->created_at ?? ''}}</td>
                        <td><a class= "btn btn-success" href="{{route('admin.booking.edit',$value->id)}}">Show Details</a>
                         <a  class= "btn btn-info" href="{{route('admin.booking.show',$value->id)}}">PDF</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


