@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card bg-secondary text-light fw-bold">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Edit Post</h2>
                    <form action="{{ route('EditUpdate') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" value="{{ $post->post_title }}">
                      </div>

                      <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" value="{{ $post->slug }}">
                      </div>

                      <div class="mb-3">
                        <label for="postCategory" class="form-label">Category</label>
                        <select class="form-select" id="postCategory" name="category">
                          <option selected value="{{$post->post_category}}">{{$category_name}}</option>
                          @foreach($all_category as $category)
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endforeach
                          <!-- Add more categories as needed -->
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="postImage" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="postImage" name="image">
                      </div>

                      <div class="mb-3">
                        <label for="postContent" class="form-label">Content</label>
                        <textarea type="text" class="form-control" id="postContent" name="content" rows="6">{{ $post->post_content }}</textarea>
                      </div>

                      <div class="d-flex justify-content-between">
                        <button type="submit" name="submit" class="btn btn-primary d-flex mx-auto">Update Post</button>
                        <button type="submit" name="submit" class="btn btn-dark d-flex mx-auto">Cancel</button>
                      </div>

                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection