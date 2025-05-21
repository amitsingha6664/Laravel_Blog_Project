@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container mt-5">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-4">← Back to Dashboard</a>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm">
                <img src="{{ asset('Assets/img/one.jpg') }}" class="card-img-top img-fluid" alt="Post Image">
                <div class="card-body">
                    <h2 class="card-title">Sample Blog Post Title</h2>
                    <p class="text-muted">
                        Posted by <strong>Admin</strong> on May 9, 2025 in 
                        <span class="badge bg-info text-dark">Tech</span>
                    </p>
                    <hr>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                        Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                    </p>
                    <p class="card-text">
                        Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
                    </p>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('editpsot') }}" class="btn btn-primary">Edit Post</a>
                        <a href="{{ route('deletepost') }}" class="btn btn-danger">Delete Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection