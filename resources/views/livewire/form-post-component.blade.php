<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">Create a new post</div>
        <div class="card-body">
            <form wire:submit.prevent="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" wire:model="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <input id="content" name="content" class="form-control" wire:model="content"/>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create post</button>
            </form>
        </div>
    </div>
</div>


