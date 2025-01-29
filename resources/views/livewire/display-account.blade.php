<div class="card">
  <div class="card-header">
    Your Account Details
  </div>
  <div class="card-body">
    <p class="card-text">Account Number:{{$approved->accountno}}</p>
    <p class="card-text">Pin:{{$approved->pin}}</p>
    <a wire:navigate href="/change/pin" class="btn btn-outline-danger btn-sm">Change pin</a>
    <a wire:navigate href="/investor/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
  </div>
</div>


