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
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card text-light fw-bold" style="background-color: #003153;">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Add New Category</h2>
                    <form action="{{ route('Add-Category') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Input Category Name">
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug (optional)</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Input Slug">
                        </div>

                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Description (optional)</label>
                            <textarea class="form-control" id="categoryDescription" name="category_description" rows="3" placeholder="Input Description"></textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                            <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                            <a href="dashboard.html" class="btn btn-light">Cancel</a>
                        </div>
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
