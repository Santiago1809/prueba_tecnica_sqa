<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">Create a new post</div>
        <div class="card-body">
            <form wire:submit.prevent="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" wire:model="title">
                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <input wire:model="content" class="form-control" style="resize: none;" name="content" id="content">
                    @error('content') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create post</button>
            </form>
        </div>
    </div>
</div>
