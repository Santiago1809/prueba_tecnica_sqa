<div class="container mt-3">
    <h1>Posts categories:</h1>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">
                <a href="/posts/{{$category->id}}" class="text-decoration-none text-dark">
                    {{ ucfirst($category->name) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
