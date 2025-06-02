@extends('Backend.Layout.MasterLayout')

@Section('Content')

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