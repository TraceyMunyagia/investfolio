<div class="card">
  <div class="card-header">
    View Customer
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$customer->name}}</h5>
    <p class="card-text">{{$customer->email}}</p>
    <p class="card-text">{{$customer->phone}}</p>
    <a wire:navigate href="/customers" class="btn btn-primary bt-sm">Back</a>
  </div>
</div>


