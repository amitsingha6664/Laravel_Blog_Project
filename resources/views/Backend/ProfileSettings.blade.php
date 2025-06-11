@extends('Backend.Layout.MasterLayout')

@section('Content')
<!-- Profile Details Page -->
<div class="container py-4 py-lg-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6">
            <!-- Profile Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-dark fw-bold mb-0">My Profile</h2>
                <a href="{{ route('Edit-Profile-View') }}" class="btn btn-primary">
                    <i class="fas fa-edit me-1"></i> Edit Profile
                </a>
            </div>
            
            <!-- Profile Details Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <!-- Profile Picture and Basic Info -->
                    <div class="d-flex flex-column flex-md-row align-items-center gap-4 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('Assets/img/thard.jpg') }}" alt="Profile Picture" 
                                 class="rounded-circle border" width="120" height="120"
                                 style="object-fit: cover;">
                        </div>
                        <div class="text-center text-md-start">
                            <h3 class="mb-1 text-dark">{{$all_user->name}}</h3>
                            <p class="text-muted mb-2">@johndoe</p>
                            <span class="badge bg-success">Active</span>
                        </div>
                    </div>
                    
                    <!-- Details Section -->
                    <div class="row g-3">
                        <div class="col-12">
                            <h5 class="text-dark fw-bold border-bottom pb-2">Personal Information</h5>
                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label text-muted">Full Name</label>
                            <p class="fw-semibold">John</p>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label text-muted">Email</label>
                            <p class="fw-semibold">john.doe@example.com</p>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label text-muted">Phone</label>
                            <p class="fw-semibold">+880 1234 567890</p>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label text-muted">Date of Birth</label>
                            <p class="fw-semibold">January 1, 1990</p>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label text-muted">Bio</label>
                            <p class="fw-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection