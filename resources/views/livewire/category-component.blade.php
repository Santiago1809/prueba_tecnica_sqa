<div class="container mt-3">
    <form wire:submit.prevent="create">
        <div class="mb-3">
            <label for="category_name" class="form-label">Category name</label>
            <input type="text" class="form-control" wire:model="name" id="category_name">
            @error('name')<span class="text-danger">{{$message}}</span><br />@enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <h3 class="mt-3">Categories</h3>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="categoriesMenu" data-bs-toggle="dropdown" aria-expanded="false">
            Categories list
        </button>
        <ul class="dropdown-menu" aria-labelledby="categoriesMenu">
            @foreach($categories as $category)
                <li class="dropdown-item"> <a href="/posts/{{$category->id}}">{{ucfirst($category->name)}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
