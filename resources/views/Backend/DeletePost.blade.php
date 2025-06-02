@extends('Backend.Layout.MasterLayout')

@section('Content')

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