<div class="mx-5 my-5">
    <h1>Posts:</h1>
    <hr>
    <section class="d-flex flex-wrap my-4">
        @foreach($posts as $post)
        <div class="flex-grow-1 mb-3 mx-2" style="max-width: 400px;">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{$post->user->name}}</h3>
                    @if(session('user_id') == $post->user_id)
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$post->id}}">Eliminar</button>
                    @endif
                </div>
                <div class="card-body">
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal-{{$post->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Eliminar post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Si eliminas este post, será imposible recuperarlo, ¿deseas continuar?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="deletePost({{$post->id}})">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
