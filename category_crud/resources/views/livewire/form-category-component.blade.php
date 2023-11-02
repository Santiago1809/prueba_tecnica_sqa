<div class="m-5">
   <form wire:submit.prevent="create">
    <div class="form-group">
        <label for="name">Category name</label>
        <input type="text" id="name" class="form-control" wire:model="name">
        @error('name') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button type="submit" class="btn btn-primary my-3">Create new category</button>
   </form>
</div>
