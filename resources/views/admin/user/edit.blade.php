@extends('admin.layout.app')

@section('title', 'User Edit')

@section('admin-active', 'active')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a class="btn btn-warning" href="{{ url('admin/user') }}" role="button">Back</a>
    <br />
    <br />
    <form method="POST" enctype="multipart/form-data" action="{{ url('admin/user/'.$user->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">NAME<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"  placeholder="Enter User Name">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="name">EMAIL<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="check_email" value="{{ $user->email }}"  placeholder="Enter User Email">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Edit User</button>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\UserUpdateRequest') !!}
    <script>
        // Email Field Check
        $("#check_email").change(function(){
            $('#check_email').attr( "name", "email" );
        });
    </script>
@endsection
