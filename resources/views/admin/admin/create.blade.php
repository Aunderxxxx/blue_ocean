@extends('admin.layout.app')

@section('title', 'Admin Create')

@section('admin-active', 'active')

@section('content')
    <a class="btn btn-warning" href="{{ url('admin/admin') }}" role="button">Back</a>
    <br />
    <br />
    <form method="POST" enctype="multipart/form-data" action="{{ url('admin/admin') }}">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">NAME<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter Admin Name">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">EMAIL<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email"  placeholder="Enter Admin Email">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="password">PASSWORD<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Admin Password">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Create Admin</button>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\AdminCreateRequest') !!}
@endsection
