<form wire:submit.prevent="verify">
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="form-group">
        <label for="otp">Enter OTP</label>
        <input type="text" class="form-control" wire:model="otp" id="otp">
    </div>
    <button type="submit" class="btn btn-primary">Verify OTP</button>
</form>
