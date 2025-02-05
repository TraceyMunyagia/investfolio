<div>
    <div class="row">
      <div class="col-auto">
        <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search installment">
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
            <th scope="col">AccountID</th>
            <th scope="col">AccountNumber</th>
            <th scope="col">Monthly Installment</th>
            <th scope="col">Month</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($installment as $installment )
          <tr>
            <th scope="row">{{$installment->id}}</th>
            <td>{{$installment->accountid}}</td>
            <td>{{$installment->accountno}}</td>
            <td>{{$installment->amount}}</td>
            <td>{{$installment->month}}</td>
  
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div>
        <a href="/investor/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
      </div>
      </div>
      
      
  
  