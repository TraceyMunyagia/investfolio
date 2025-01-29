<div>
  <div class="row">
    <div class="col-auto">
      <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search users">
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
      <th scope="col">SurName</th>
      <th scope="col">First Name</th>
      <th scope="col">Other Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone</th>
      <th scope="col">National ID or Passport</th>
      <th scope="col">KRA Pin Certificate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($investor as $investor )
    <tr>
      <th scope="row">{{$investor->id}}</th>
      <td>{{$investor->surname}}</td>
      <td>{{$investor->firstname}}</td>
      <td>{{$investor->othernames}}</td>
      <td>{{$investor->email}}</td>
      <td>{{$investor->phone}}</td>
      <td>
                @if ($investor->national_id)
                <a href="{{ asset('storage/app/private/uploads/national_ids' . $investor->national_id) }}" class="btn btn-primary btn-sm" target="_blank">View File</a>

                @else
                    No file uploaded
                @endif
            </td>
      <td>
                @if ($investor->kra_pin)
                <a href="{{ asset('storage/app/private/uploads/kra_pins' . $investor->kra_pin) }}" class="btn btn-primary btn-sm" target="_blank">View File</a>

                @else
                    No file uploaded
                @endif
            </td>
      <td>
        <button wire:click="Approveinvestor({{$investor->id}})" class="btn btn-outline-success btn-sm">Approve</button>
       <button wire:click="deleteinvestor({{$investor->id}})" class="btn btn-outline-danger btn-sm">Reject</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  <a href="/admin/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
</div>
</div>
