@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Modifica Post</h1>
        </div>
            
        {{-- <div class="col-4 d-flex justify-content-end align-items-center">
           
        </div> --}}
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  value="{{ old('title', $post->title)  }}" aria-describedby="helpTitle">
                  <small id="helpTitle" class="form-text text-muted">Modifica titolo del post</small>
                  @error('title')
                  <div id="title" class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control" id="content" name="content" rows="20">{{ old('content', $post->content) }}</textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Salva!</button>
              </form>
        </div>
    </div>
</div>

@endsection