<div class="card offset-3 col-6" data-bs-theme="dark">
    <div class="card-header">
      Create Contract
    </div>
    <div class="card-body">
      <form wire:submit="Store">
     <div class="mb-3">
      <label for="exampleInputAccountno" class="form-label">Account Number</label>
      <input wire:model="accountno" type="text" class="form-control" id="exampleInputAccountno">
         <div>
      @error('Account number')
        <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>
     <div class="mb-3">
      <label for="exampleInputStart" class="form-label">Start Month</label>
      <input wire:model="start" type="string" class="form-control" id="exampleInputStart">
         <div>
      @error('Month')
        <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEnd" class="form-label">End Month</label>
        <input wire:model="end" type="string" class="form-control" id="exampleInputEnd">
           <div>
        @error('Month')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputAmount" class="form-label">Monthly Installment</label>
        <input wire:model="amount" type="number" class="form-control" id="exampleInputAmount">
           <div>
        @error('amount')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      </div>
    <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
  </form>
  </div>
  </div>

