@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Catalogue') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-10">

                        </div>
                        <div class="col-2">
                            <a href="{{ route('catalogue.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>File Name</th>
                                <th>Cover Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->file_name }}</td>
                                <td>{{ $value->cover_name }}</td>
                                <td><a href="{{ route('catalogue.edit',$value->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('catalogue.delete',$value->id) }}" class="btn btn-danger">Delete</a>
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
