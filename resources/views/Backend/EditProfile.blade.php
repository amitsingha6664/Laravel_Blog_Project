@extends('Backend.Layout.MasterLayout')

@section('Content')

<!-- Profile Edit Page -->
<div class="container py-4 py-lg-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6">
            <!-- Edit Header with Back Button -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('Profile-Settings-View') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Back
                </a>
                <h2 class="text-dark fw-bold mb-0">Edit Profile</h2>
                <div style="width: 40px;"></div> <!-- Spacer for alignment -->
            </div>
            
            <!-- Edit Form Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        
                        <!-- Profile Picture Upload -->
                        <div class="d-flex flex-column align-items-center mb-4">
                            <div class="position-relative mb-3">
                                <img src="{{ asset('Assets/img/thard.jpg') }}" alt="Profile Picture" 
                                     class="rounded-circle border" width="120" height="120"
                                     style="object-fit: cover;" id="profileImagePreview">
                                <label for="profileImage" class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-2 cursor-pointer"
                                       style="width: 36px; height: 36px; line-height: 20px;">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" id="profileImage" name="profile_image" class="d-none" accept="image/*" onchange="previewImage(this)">
                                </label>
                            </div>
                            <small class="text-muted">Click on camera icon to change photo</small>
                        </div>
                        
                        <!-- Personal Information -->
                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <h5 class="text-dark fw-bold border-bottom pb-2">Personal Information</h5>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" value="John">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" value="Doe">
                            </div>
                            
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="john.doe@example.com">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="+880 1234 567890">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" value="1990-01-01">
                            </div>
                            
                            <div class="col-12">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea class="form-control" id="bio" name="bio" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</textarea>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-between pt-3">
                            <button type="reset" class="btn btn-outline-danger">Reset Changes</button>
                            <button type="submit" class="btn btn-primary">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection