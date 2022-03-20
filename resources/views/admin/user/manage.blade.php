@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Manage User</h4>
                    <p>{{Session::get('message')}}</p>
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover table-bordered">

                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('delete-user',['id'=>$user->id])}}" class="btn btn-danger"><i class="fa fa-trash {{$user->id == 1 ?'disable':''}}"></i></a>
                                    <a href="{{route('edit-user',['id'=>$user->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
