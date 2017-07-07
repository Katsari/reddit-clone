@if( $post->exists )
  <form action="{{ route('update_post_path', ['post'=> $post->id]) }}" method="POST">
    {{ method_field('PUT') }}
@else
  <form action="{{ route('store_post_path') }}" method="POST">
@endif

{{ csrf_field() }}
  
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $post->title or old('title') }}">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea rows="5" class="form-control" name="description">{{ $post->description or old('description') }}</textarea>
    </div>
  
    <div class="form-group">
      <label for="url">Url:</label>
      <input type="text" class="form-control" name="url" placeholder="Url" value="{{ $post->url or old('url') }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Save Post</button>

  </form>