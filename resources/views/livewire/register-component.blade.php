<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form wire:submit.prevent="register">
                        <div class="form-group">
                            <label for="name">Nombre de usuario</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" wire:model="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" wire:model="password">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
