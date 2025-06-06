@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card text-light fw-bold" style="background-color: #003153;">
                <div class="card-body p-4 p-md-5">
                  <h2 class="text-center">Edit Post</h2>
                  <form action="{{ route('Edit-Update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      @if ($errors->has('title'))
                        <label for="postTitle" class="form-label text-danger">The field is required and under 255 characters.</label>
                      @else
                        <label for="postTitle" class="form-label">Post Title</label>
                      @endif
                      <input type="text" class="form-control" id="editTitle" name="title" value="{{ $post->post_title }}">
                    </div>

                    <div class="mb-3">
                      @if ($errors->has('slug'))
                          <label for="slug" class="form-label text-danger">The field is required or Unique and under 255 characters.</label>
                      @else
                          <label for="slug" class="form-label">Slug</label>
                      @endif
                      <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
                    </div>

                    <div class="mb-3">
                      @if ($errors->has('category'))
                        <label for="postCategory" class="form-label text-danger">You must select one option.</label>
                      @else
                        <label for="postCategory" class="form-label">Category</label>
                      @endif
                      <select class="form-select" id="editCategory" name="category">
                        <option value="{{$category_data->id}}" selected>{{$category_data->category_name}}</option>
                        @foreach($all_category as $category)
                          @if($category_data->id != $category->id)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="editImage" class="form-label">Change Image</label>
                      <input class="form-control" type="file" id="editImage" name="image">
                    </div>

                    <div class="mb-3">
                      @if ($errors->has('content'))
                        <label for="postContent" class="form-label text-danger">The field is required.</label>
                      @else
                        <label for="postContent" class="form-label">Content</label>
                      @endif
                      <textarea class="form-control" id="editContent" name="content" rows="6">{{ $post->post_content }}</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success">Update Post</button>
                    <a href="{{ route('Dashboard') }}" class="btn btn-secondary">Cancel</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const alertBox = document.getElementById("customAlert");
        if (alertBox) {
            alertBox.style.opacity = "1";
            setTimeout(() => {
                alertBox.style.transition = "opacity 0.6s ease";
                alertBox.style.opacity = "0";
                setTimeout(() => alertBox.remove(), 600);
            }, 5000);
        }
    });
</script>

@endsection