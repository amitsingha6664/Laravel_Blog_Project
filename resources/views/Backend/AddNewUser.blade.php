@extends('Backend.Layout.MasterLayout')

@section('Content')

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow-lg rounded-4">
          <div class="card-body">
            <h4 class="text-center mb-4">Create User</h4>
            <form action="{{ route('User-Create') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="Enter role (e.g., Admin, User)" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
              </div>
              <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Create User</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection