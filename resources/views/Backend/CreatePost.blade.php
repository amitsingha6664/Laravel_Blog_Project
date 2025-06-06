@extends('Backend.Layout.MasterLayout')

@Section('Content')

@if(session('error'))
<div id="customAlert" class="custom-toast position-fixed top-0 end-0 m-4" style="z-index: 1050;">
    <div class="toast-body d-flex align-items-center shadow-lg rounded-3 px-4 py-3" style="background: rgba(202, 16, 16, 0.85); color: white; backdrop-filter: blur(10px); border-left: 5px solid #fff;">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 1 0-1.144-.976L7.525 8.37 5.383 6.234a.75.75 0 1 0-1.06 1.06l2.647 2.736z"/>
        </svg>
        <span>{{ session('error') }}</span>
    </div>
</div>
@endif

@if(session('success'))
<div id="customAlert" class="custom-toast position-fixed top-0 end-0 m-4" style="z-index: 1050;">
    <div class="toast-body d-flex align-items-center shadow-lg rounded-3 px-4 py-3" style="background: rgba(40, 167, 69, 0.85); color: white; backdrop-filter: blur(10px); border-left: 5px solid #fff;">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 1 0-1.144-.976L7.525 8.37 5.383 6.234a.75.75 0 1 0-1.06 1.06l2.647 2.736z"/>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
</div>
@endif

<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card text-light fw-bold" style="background-color: #003153;">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Create New Post</h2>
                    <form action="{{ route('Create-Post') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        @if ($errors->has('title'))
                            <label for="postTitle" class="form-label text-danger">The field is required and under 255 characters.</label>
                        @else
                            <label for="postTitle" class="form-label">Post Title</label>
                        @endif
                        <input type="text" class="form-control" value="{{ old('title') }}" id="postTitle" name="title">
                      </div>

                      <div class="mb-3">
                        @if($errors->has('slug'))
                            <label for="slug" class="form-label text-danger">The field is required and under 255 characters.</label>
                        @else
                            <label for="slug" class="form-label">Slug</label>
                        @endif
                        <input type="text" class="form-control" value="{{ old('slug') }}" id="slug" name="slug">
                      </div>

                      <div class="mb-3">
                          @if ($errors->has('category'))
                              <label for="postCategory" class="form-label text-danger">You must select one option.</label>
                          @else
                              <label for="postCategory" class="form-label">Category</label>
                          @endif
                          <select class="form-select" id="postCategory" name="category">
                              <option value="" disabled {{ old('category') ? '' : 'selected' }}>Choose category</option>
                              @foreach($all_category as $category)
                                  <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                      {{ $category->category_name }}
                                  </option>
                              @endforeach
                          </select>
                      </div>

                      <div class="mb-3">
                        <label for="postImage" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="postImage" name="image">
                      </div>

                      <div class="mb-3">
                        @if ($errors->has('content'))
                            <label for="postContent" class="form-label text-danger">The field is required.</label>
                        @else
                            <label for="postContent" class="form-label">Content</label>
                        @endif
                        <textarea type="text" class="form-control" id="postContent" name="content" rows="6">{{ old('content') }}</textarea>
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary d-flex mx-auto">Publish Post</button>
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