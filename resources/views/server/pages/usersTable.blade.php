@extends('server.layouts.masterlayout')
@section('content')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><img src="{{asset('uploads/user')}}/{{$user->image}}" style="width: 60px; height: 60px;"></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form action="#" method="get">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                                <button class="dropdown-item" type="submit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                                            </form>

                                            <form action="#" method="get">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                                <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</button>
                                            </form>
                                            <a href="{{route('generate-userpdf')}}"><button type="button" class="btn btn-primary">Download PDF</button></a>
                                        </div>
                                    </div>
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
<!-- Table End -->

@endsection