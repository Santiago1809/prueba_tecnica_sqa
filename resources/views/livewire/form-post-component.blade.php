<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white">Create a new post</div>
        <div class="card-body">
            <form action="{{url('create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea id="editor" name="content" class="form-control plain-textarea" style="resize:none;"></textarea>
                    @error('content')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="numeber" name="category" id="category" class="form-control" value="{{intval($pathSegments[2])}}" readonly>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create post</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                removePlugins: ['MediaUpload'],
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>

