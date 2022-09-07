@extends('admin.layout.app')

@section('title', 'User')

@section('user-active', 'active')

@section('content')
    <!-- users list start -->
    <section class="app-user-list">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ count($users) }}</h3>
                            <span>Total Users</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <i data-feather="user" class="font-medium-4"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list and filter start -->
        <a class="btn btn-primary" href="{{ url('admin/user/create') }}" role="button">Add New User</a>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$item)
                    <tr>
                        <th>{{ $key+1 }}</th>
                        <th>{{ $item->name }}</th>
                        <th>{{ $item->email }}</th>
                        <th>
                            <a class="btn btn-warning btn-sm" href="{{ url('admin/user/'.$item->id.'/edit') }}" role="button">EDIT</a>
                            <form method="post" action="{{ url('admin/user/'.$item->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick='return confirm("Confirm delete?")'>DELETE</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- list and filter end -->
    </section>
    <!-- users list ends -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
