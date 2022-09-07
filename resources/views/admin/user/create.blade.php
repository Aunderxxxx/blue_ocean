@extends('admin.layout.app')

@section('title', 'User Create')

@section('user-active', 'active')

@section('content')
    <a class="btn btn-warning" href="{{ url('admin/user') }}" role="button">Back</a>
    <br />
    <br />
    <form method="POST" enctype="multipart/form-data" action="{{ url('admin/user') }}">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">NAME<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter User Name">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">EMAIL<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email"  placeholder="Enter User Email">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="password">PASSWORD<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Enter User Password">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\UserCreateRequest') !!}
@endsection
