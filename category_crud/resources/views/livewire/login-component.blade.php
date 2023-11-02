<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6"> <!-- Colocamos el contenido en una columna de ancho md-6 -->
            <div class="card">
                <div class="card-header bg-dark text-white">Log In</div>
                <div class="card-body">
                    <form wire:submit.prevet="authenticate">
                        <div class="form-group p-2">
                            <label for="email" class="m-2">Email</label>
                            <input type="email" class="form-control" id="email" wire:model="email">
                        </div>
                        <div class="form-group p-2">
                            <label for="password" class="m-2">Password</label>
                            <input type="password" wire:model="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary m-2">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
