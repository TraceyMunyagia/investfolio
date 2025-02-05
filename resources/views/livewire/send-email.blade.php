<div>
<div class="container mt-4">
    <h3>Send Email to User</h3>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="sendEmail">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div>
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
          </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" id="subject" class="form-control" wire:model="subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="messageContent" class="form-label">Message</label>
            <textarea id="messageContent" class="form-control" rows="5" wire:model="messageContent"></textarea>
            @error('messageContent') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        

        <button type="submit" class="btn btn-outline-primary btn-small">Send Email</button>
    </form>
</div>
</div>
