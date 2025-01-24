<div>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<div class="card offset-3 col-6" data-bs-theme="dark">
  <div class="card-header">
    Admin Login
  </div>
  <div class="card-body">
    <form wire:submit="loginAdmin">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div>
    @error('email')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
      <div>
    @error('password')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-success btn-sm">Login</button>
</form>
</div>
</html>
</div>