<div>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <div class="card offset-3 col-6" data-bs-theme="dark">
      <div class="card-header">
        Login
      </div>
      <div class="card-body">
        <form wire:submit="submit">
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
        <label for="exampleInputStartdate" class="form-label">Start Date</label>
        <input type="date" wire:model="start_date" class="form-control">
           <div>
        @error('Date')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEnddate" class="form-label">End Date</label>
        <input type="date" wire:model="end_date" class="form-control">
           <div>
        @error('Date')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      </div>
       <div class="mb-3">
        <label for="exampleInputAmount" class="form-label">Monthly Deposit</label>
        <input wire:model="amount" type="number" class="form-control" id="exampleInputAmount">
           <div>
        @error('Pin')
          <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-sm">Submit</button>
    </form>
    </div>
    </html>
    </div>
