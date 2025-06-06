@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card text-light fw-bold" style="background-color: #003153;">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Create New Post</h2>
                    <form action="{{ route('Create-Post') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="postTitle" class="form-label @error('title') text-danger @enderror)">@error('title') {{$message}} @else Post Title @enderror</label>
                        <input type="text" class="form-control" value="{{ old('title') }}" id="postTitle" name="title">
                      </div>

                      <div class="mb-3">
                        <label for="slug" class="form-label @error('slug') text-danger @enderror">@error('title') {{$message}} @else Slug @enderror</label>
                        <input type="text" class="form-control" value="{{ old('slug') }}" id="slug" name="slug">
                      </div>

                      <div class="mb-3">
                            <label for="postCategory" class="form-label @error('category') text-danger @enderror">@error('category') {{$message}} @else Category @enderror</label>
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
                        <label for="postContent" class="form-label @error('content') text-danger @enderror">@error('content') {{$message}} @else Content @enderror</label>
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