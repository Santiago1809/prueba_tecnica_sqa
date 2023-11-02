<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form wire:submit.prevent="register">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" wire:model="email">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" wire:model="password">
                            @error('password') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm password</label>
                            <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                            @error('password_confirmation') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
