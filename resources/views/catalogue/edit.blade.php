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
                    <form action="{{ route('catalogue.update') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                              <strong>{{ $message }}</strong>
                          </div>
                        @endif
                        @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $data->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">File</label>
                            <input type="file" name="file" class="form-control" accept="application/pdf" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cover</label>
                            <input type="file" name="cover" class="form-control" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                          <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                              Save
                          </button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
