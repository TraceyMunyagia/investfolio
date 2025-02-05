<div class="card offset-3 col-6" data-bs-theme="dark">
          <div class="card-header">
            Assign Account Details
          </div>
          <div class="card-body">
            <form wire:submit="Store">
              <div class="mb-3">
                <label for="exampleInputAccountid" class="form-label">Account ID</label>
                <input wire:model="accountid" type="text" class="form-control" id="exampleInputAccountid">
                   <div>
                @error('account id')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>
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
          <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
        </form>
        </div>
        </div>

