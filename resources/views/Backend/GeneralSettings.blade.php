@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container mt-5">
    <h2>Site Settings</h2>
    <form action="#" method="POST">
      <div class="mb-3">
        <label for="siteTitle" class="form-label">Site Title</label>
        <input type="text" class="form-control" id="siteTitle" name="site_title" value="My Blog">
      </div>

      <div class="mb-3">
        <label for="siteDescription" class="form-label">Site Description</label>
        <textarea class="form-control" id="siteDescription" name="site_description" rows="3">A simple blog admin panel.</textarea>
      </div>

      <div class="mb-3">
        <label for="adminEmail" class="form-label">Admin Email</label>
        <input type="email" class="form-control" id="adminEmail" name="admin_email" value="admin@example.com">
      </div>

      <hr>

      <h4>Change Password</h4>

      <div class="mb-3">
        <label for="currentPassword" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="currentPassword" name="current_password">
      </div>

      <div class="mb-3">
        <label for="newPassword" class="form-label">New Password</label>
        <input type="password" class="form-control" id="newPassword" name="new_password">
      </div>

      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirm_password">
      </div>

      <button type="submit" class="btn btn-success">Save Settings</button>
    </form>
</div>

@endsection