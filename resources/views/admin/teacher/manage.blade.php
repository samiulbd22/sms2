@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Manage Teacher</h4>

                    <div class="table-responsive">
                        <table class="table mb-0 table-hover table-bordered bg-secondary hover:bg-gray-50 text-danger font-weight-bold">

                            <thead class="bg-dark text-white font-weight-bold rounded-2">
                            <tr>
                                <th>SL</th>
                                <th>Full Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->code}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->mobile}}</td>
                                <td>{{$teacher->address}}</td>
                                <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td><img src="{{asset($teacher->image)}}" alt="" width="50px" height="50px" style="border-radius: 50%"/></td>
                                <td><a href="{{route('delete-teacher',['id'=>$teacher->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <a href="{{route('edit-teacher',['id'=>$teacher->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
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
