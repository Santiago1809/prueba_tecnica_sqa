<div class="container mt-3">
    <h1> <i class="fa-solid fa-file"></i> Categories:</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ucfirst($category->name)}}</td>
                <td>
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal-{{$category->id}}">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal-{{$category->id}}">Delete</button>
                    </div>
                    <div class="modal fade" id="EditModal-{{$category->id}}" tabindex="-1" aria-labelledby="EditCategoryLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditCategoryLabel">Edit Category {{$category->name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form wire:submit.prevent="update({{$category->id}})">
                                        <p>Name: {{$category->name}}</p>
                                        <div class="form-group">
                                            <label for="new_name">New category name</label>
                                            <input type="text" class="form-control bg-dark text-white" id="new_name" wire:model="name" required>
                                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                            <button type="submit" class="btn btn-primary my-2">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="DeleteModal-{{$category->id}}" tabindex="-1" aria-labelledby="DeleteCategoryLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="DeleteCategoryLabel">Delete category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure to delete the categoty "{{ucfirst($category->name)}}" and all post on it?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="deleteCategory({{$category->id}})">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</div>
