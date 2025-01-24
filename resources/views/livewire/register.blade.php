<div>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<div class="card offset-3 col-6" data-bs-theme="dark">
  <div class="card-header">
    Register 
  </div>
  <div class="card-body">
    <form wire:submit="storeUser">
    <div class="mb-3">
    <label for="exampleInputSurname" class="form-label">Surname</label>
    <input wire:model="surname" type="text" class="form-control" id="exampleInputSurname" aria-describedby="emailHelp">
      <div>
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
   <div class="mb-3">
    <label for="exampleInputFirstname" class="form-label">Firstname</label>
    <input wire:model="firstname" type="text" class="form-control" id="exampleInputFirstname" aria-describedby="emailHelp">
      <div>
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
   <div class="mb-3">
    <label for="exampleInputOthernames" class="form-label">Other names</label>
    <input wire:model="othernames" type="text" class="form-control" id="exampleInputOthernames" aria-describedby="emailHelp">
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
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input wire:model="phone" type="text" class="form-control" id="exampleInputPassword1">
       <div>
    @error('phone')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">National ID or Passport</label>
  <input wire:model="national_id" class="form-control" type="file" id="formFile">
    <div>
    @error('file')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    @if ($national_id)
     <img class="rounded w-1 h-1 mt-1 block" src="{{ $national_id->temporaryUrl() }}" alt="";
    @endif
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">KRA Pin Certificate</label>
  <input wire:model="kra_pin" class="form-control" type="file" id="formFile">
    <div>
    @error('file')
      <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    @if ($kra_pin)
     <img class="rounded w-1 h-1 mt-1 block" src="{{ $kra_pin->temporaryUrl() }}" alt="";
    @endif
</div>
  <button type="submit" class="btn btn-success btn-sm btn-center">Submit</button>
  <div>
    <p>Already an Investor?</p>
    <button wire:navigate href="/approved/login" class="btn btn-secondary btn-sm">Login</button>
  </div>
</form>
</div>
</html>
</div>
