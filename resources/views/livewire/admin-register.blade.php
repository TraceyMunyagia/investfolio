<div> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<div class="card offset-3 col-6" data-bs-theme="dark">
  <div class="card-header">
     Admin
  </div>
  <div class="card-body">
  <form wire:submit="save">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input wire:model="name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
       <div>
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
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
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input wire:model="password" type="text" class="form-control" id="exampleInputPassword">
       <div>
    @error('password')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
  </div>
</div>
</html>
</div>
