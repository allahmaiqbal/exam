<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <a class="btn btn-info" href="{{ route('dashboard.post.create') }}">Create Post</a>
            </div>
            <div class="col-md-2">
                <form action="">
                    <select class="form-control mb-2" name="orderBy">
                        <option value="latest" @selected(request('orderBy') === 'latest')> Latest</option>
                        <option value="oldest" @selected(request('orderBy') === 'oldest')> Ordest</option>
                    </select>
                    <button class="btn btn-success  mb-2" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="card">
                                <div class="text-end">
                                    <a class="badge text-bg-primary"
                                        href="{{ route('dashboard.post.show', $post->id) }}" title="View Details">
                                        Show
                                    </a>
                                    <a class="badge text-bg-info" href="{{ route('dashboard.post.edit', $post->id) }}"
                                        title="Edit Post">
                                        Edit
                                    </a>
                                    <form class="badge text-bg-danger align-top position-relative"
                                        action="{{ route('dashboard.post.destroy', $post->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure want to delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="stretched-link" type="submit" title="Delete Post">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                                <p text-center>
                                    <span @class([
                                        'badge',
                                        'text-bg-success' => !$post->isPublished(),
                                        'text-bg-warning' => $post->isPublished(),
                                    ])>
                                        @if ($post->isPublished())
                                            Not
                                        @endif
                                        Published
                                    </span>
                                </p>

                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <p>Author Name: {{ $post->author->name }}</p>
                                </div>

                                <div class="card-footer">
                                    <small class="text-muted"> Latest Update:
                                        {{ $post->updated_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        {{ $posts->links() }}
    </div>
</x-app-layout>
