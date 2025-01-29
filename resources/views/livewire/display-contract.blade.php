<div>
  <div class="row">
    <div class="col-auto">
      <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search contracts">
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
          <th scope="col">AccountNumber</th>
          <th scope="col">Start Month</th>
          <th scope="col">End Month</th>
          <th scope="col">Monthly Installment</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($contract as $contract )
        <tr>
          <th scope="row">{{$contract->id}}</th>
          <td>{{$contract->accountno}}</td>
          <td>{{$contract->start}}</td>
          <td>{{$contract->end}}</td>
          <td>{{$contract->amount}}</td>

        </tr>
        @endforeach
        
      </tbody>
    </table>
    <div>
      <a href="/admin/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
    </div>
    </div>
    
    

