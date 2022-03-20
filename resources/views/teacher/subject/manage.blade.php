@extends('master.teacher.master')

@section('body')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Manage Subject</h4>

                <div class="table-responsive">
                    <table class="table mb-0 table-hover table-bordered bg-secondary hover:bg-gray-50 text-danger font-weight-bold">

                        <thead class="bg-dark text-white font-weight-bold rounded-2">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Code</th>
                            <th>Fee</th>
                            <th>Teacher Nmae</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$subject->title}}</td>
                                <td>{{$subject->code}}</td>
                                <td>{{number_format($subject->fee)}}</td>
                                <td>{{$subject->teacher->name}}</td>
                                <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td><img src="{{asset($subject->image)}}" alt="" width="50px" height="50px" style="border-radius: 50%"/></td>
                                <td><a href="{{route('delete-teacher',['id'=>$subject->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <a href="{{route('edit-teacher',['id'=>$subject->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
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
