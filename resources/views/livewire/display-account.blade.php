<div class="card">
  <div class="card-header">
    Your Account Details
  </div>
  <div class="card-body">
    @if ($approved)
        <p class="card-text"><strong>Account Number:</strong> {{ $approved->accountno }}</p>
        <p class="card-text"><strong>Pin:</strong> {{ $approved->pin }}</p>
    @else
        <p class="text-danger">No approved account found.</p>
    @endif
    <a wire:navigate href="/change/pin" class="btn btn-outline-danger btn-sm">Change Pin</a>
    <a wire:navigate href="/investor/dashboard" class="btn btn-outline-primary btn-sm">Back</a>
  </div>
</div>
