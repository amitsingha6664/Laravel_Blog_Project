@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container my-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-7">
            <div class="card bg-secondary text-light fw-bold">
                <div class="card-body p-4 p-md-5">
                    <h2 class="text-center mb-4">Profile Settings</h2>
                    <form action="#" method="POST" enctype="multipart/form-data">
                      <div class="mb-3 text-center">
                        <img src="" alt="Profile Picture" class="rounded-circle" width="100" height="100">
                        <div class="mt-2">
                          <label for="profileImage" class="form-label">Change Profile Picture</label>
                          <input class="form-control" type="file" id="profileImage" name="profile_image">
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="full_name" value="John Doe">
                      </div>

                      <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="john@example.com">
                      </div>

                      <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="johndoe">
                      </div>

                      <div class="d-grid">
                        <button type="submit" class="btn btn-success">Update Profile</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
