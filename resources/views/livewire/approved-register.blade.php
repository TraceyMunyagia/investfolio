<div>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
        <div class="card offset-3 col-6" data-bs-theme="dark">
          <div class="card-header">
            Assign Account
          </div>
          <div class="card-body">
            <form wire:submit="Store">
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
            <label for="exampleInputPin" class="form-label">Pin</label>
            <input wire:model="pin" type="number" class="form-control" id="exampleInputPin">
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

