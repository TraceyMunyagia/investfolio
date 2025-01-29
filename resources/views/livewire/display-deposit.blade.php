<div>
  <div class="row">
    <div class="col-auto">
      <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search payment">
    </div>
  </div>
  <div class="row" data-bs-theme="dark">
  <div class="col-auto">
  </div>
  </div>
  <livewire:flash-message/>
   <table class="table table-bordered">
   <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Account Number</th>
    <th scope="col">Amount</th>
  </tr>
</thead>
<tbody>
 @foreach ($deposit as $deposit )
  <tr>
    <th scope="row">{{$deposit->id}}</th>
    <td>{{$deposit->accountno}}</td>
    <td>{{$deposit->amount}}</td>
  </tr>
  @endforeach
</tbody>
</table>
<div>
  <a href="/admin/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
</div>
</div>

