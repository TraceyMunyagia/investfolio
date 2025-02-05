<div>
    <div class="row">
      <div class="col-auto">
        <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search investment">
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
            <th scope="col">Type of Investment</th>
            <th scope="col">Company</th>
            <th scope="col">Period</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($investment as $investment )
          <tr>
            <th scope="row">{{$investment->id}}</th>
            <td>{{$investment->accountno}}</td>
            <td>{{$investment->type}}</td>
            <td>{{$investment->company}}</td>
            <td>{{$investment->period}}</td>
  
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div>
        <a href="/admin/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
      </div>
      </div>
      
      
  
  