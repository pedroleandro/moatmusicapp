@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Permissions</div>

                    <div class="card-body">

                        <a class="text-success" href="{{ route('permission.index') }}">&leftarrow; Back to listing</a>

                        @if($errors)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mt-4" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form action="{{ route('permission.update', ['permission' => $permission->id]) }}" method="post" class="mt-4"
                              autocomplete="off">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Permission Name</label>
                                <input type="text" class="form-control" id="name"
                                       placeholder="Enter the Permission Name"
                                       name="name" value="{{ old('name') ?? $permission->name }}">
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Update Permission</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
