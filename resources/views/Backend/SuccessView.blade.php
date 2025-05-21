@extends('Backend.Layout.MasterLayout')

@Section('Content')

  <div class="success-box">
    <div class="success-icon">✔️</div>
    <h2 class="mt-3">Success!</h2>
    <p>Add completed successfully.</p>
    <a href="{{ route('dashboard')}}" class="btn btn-success mt-3">Go Home</a>
  </div>

@endsection