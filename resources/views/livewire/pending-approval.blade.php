<div>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <div class="row">
    <div class="col-auto">
  </div>
<div class="col-auto">
   <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search customers">
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
   @foreach ($user as $user )
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->surname}}</td>
      <td>{{$user->firstname}}</td>
      <td>{{$user->othernames}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>
                @if ($user->national_id)
                <a href="{{ asset('storage/app/private/uploads/national_ids' . $user->national_id) }}" class="btn btn-primary btn-sm" target="_blank">View File</a>

                @else
                    No file uploaded
                @endif
            </td>
      <td>
                @if ($user->kra_pin)
                <a href="{{ asset('storage/app/private/uploads/kra_pins' . $user->kra_pin) }}" class="btn btn-primary btn-sm" target="_blank">View File</a>

                @else
                    No file uploaded
                @endif
            </td>
      <td>
        <button wire:click="Approveuser({{$user->id}})" class="btn btn-danger btn-sm">Approve</button>
       <button wire:click="deleteuser({{$user->id}})" class="btn btn-danger btn-sm">Reject</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</html>
</div>
