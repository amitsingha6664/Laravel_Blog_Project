@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container mt-5">
    <a href="{{ route('Dashboard') }}" class="btn btn-secondary mb-4">← Back to Dashboard</a>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow-sm">
                <img src="{{ asset('Assets/img/one.jpg') }}" class="card-img-top img-fluid" alt="Post Image">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->post_title }}</h2>
                    <p class="text-muted">Posted by <strong>{{ $post->author_id }}</strong> Pablish Date: {{ $post->created_at }}<span class="badge bg-info text-dark">{{ $category_name }}</span>
                    </p>
                    <hr>
                    <p class="card-text">{{ $post->post_content}}</p>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('Edit-Post', $post->slug) }}" class="btn btn-primary">Edit Post</a>
                        <a href="{{ route('Delete-Post', $post->slug) }}" class="btn btn-danger">Delete Post</a>
                    </div>
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