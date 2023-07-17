@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Audio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('audio.update') }}" method="post" enctype="multipart/form-data">
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
                            <label for="exampleInputEmail1">File</label>
                            <input type="hidden" name="id" value="{{ $audio->id }}">
                            <input type="file" name="file" class="form-control" accept="audio/mp3" required>
                        </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                              Save
                            </button>
                      </form>
                      <hr>
                      <div class="form-group">
                        <label for="exampleInputEmail1">{{ $audio->file_name }}</label>
                        </div>

                      <iframe src="{{ asset($audio->file_path) }}" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>
                        <audio controls>
                            <source src="{{ asset($audio->file_path) }}" type="audio/mp3">
                        </audio>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
