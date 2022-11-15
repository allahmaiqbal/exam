<x-app-layout>
    <div class="container min-vh-100 d-flex justify-content-center">
        <div style="min-width: 50%;">
            <div class="row">
                <div class="class mb-3">
                    <a class="btn btn-success" href="{{ route('dashboard.post.index') }}">All Posts</a>
                </div>

                <div class="col-sm-12">
                    <div class="card" style="width: 50rem;">
                        <div class="card-body">
                            <span class="fw-bold">Post Title :</span>
                            <h5 class="card-title d-inline">{{ $post->title }}</h5><br><br>

                            <span class="fw-bold">Post Title :</span>
                            <p class="card-text d-inline">{{ $post->content }}</p><br><br>

                            <span class="fw-bold">Author Name :</span>
                            <p class="card-text d-inline">{{ $post->author->name }}</p><br><br>

                            <span class="fw-bold">Latest Update :</span>
                            <small class="text-muted"> {{ $post->updated_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
