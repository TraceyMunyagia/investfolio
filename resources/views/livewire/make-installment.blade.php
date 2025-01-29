<div class="card offset-3 col-6" data-bs-theme="dark">
    <div class="card-header">
      Make Installment
    </div>
    <div class="card-body">
      <form wire:submit="Makeinstallment">
     <div class="mb-3">
      <label for="exampleInputAccountno" class="form-label">Account Number</label>
      <input wire:model="accountno" type="text" class="form-control" id="exampleInputAccountno">
         <div>
      @error('account number')
        <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputAmount" class="form-label">Amount</label>
      <input wire:model="amount" type="number" class="form-control" id="exampleInputAmount">
         <div>
      @error('amount')
        <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputMonth" class="form-label">Month</label>
      <input wire:model="month" type="string" class="form-control" id="exampleInputMonth">
         <div>
      @error('Month')
        <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-outline-warning btn-sm">Pay Installment</button>
  </form>
  </div>
  </div>

