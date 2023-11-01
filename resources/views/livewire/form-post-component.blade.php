<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">Crea un nuevo Post</div>
        <div class="card-body">
            <form wire:submit.prevent="post">
                <div class="form-group">
                    <label for="content">Contenido del post:</label>
                    <textarea wire:model="content" class="form-control" style="resize: none;" name="content" id="content" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Crear post</button>
            </form>
        </div>
    </div>
</div>
