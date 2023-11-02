<div class="mx-5 my-5">
    <h1>Posts:</h1>
    <hr>
    <section class="d-flex flex-wrap my-4">
        @foreach ($posts as $post)
            <div class="flex-grow-1 mb-3 mx-2" style="max-width: 400px;">
                <div class="card animate__animated animate__backInUp">
                    <div class="card-header d-flex justify-content-between">
                        <h3>{{ $post->user->name }}</h3>
                        @if (session('user_id') == $post->user_id)
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $post->id }}">Delete</button>
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal-{{ $post->id }}">Edit</button>
                        @endif
                    </div>
                    <div class="card-body">
                        <h4>{{ $post->title }}</h4>
                        <p>{!! $post->content !!}</p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deleteModal-{{ $post->id }}" tabindex="-1"
                aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delite post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>If you delete this post, you can't recover it again.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                wire:click="deletePost({{ $post->id }})">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal-{{ $post->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body mb-2">
                            <p>Content:</p>
                            <p>Title: {{$post->title}}</p>
                            <p>Content: {!! $post->content !!}</p>
                            <form wire:submit.prevent="update({{$post->id}})">
                                <div class="form-group">
                                    <label for="title">New title</label>
                                    <input type="text" name="title" class="form-control" placeholder="New Title" wire:model="title" required>
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="content">New content</label>
                                    <input type="text" name="content" class="form-control" id="editorPost-{{$post->id}}" placeholder="New post" wire:model="content" required/>
                                    @error('content') <span class="text-danger">{{ $message }} </span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
