<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <a class="btn btn-warning" href="{{ route('dashboard.post.index') }}">All Post </a>
            </div>
            <div class="col-md-6">

                <div class="card ">
                    <div class="card-header text-center">
                        Post Edit
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.post.update', $post->slug) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input id="title" name="title" type="text"
                                    value="{{ $post->title }}"class="form-control @error('title') is-invalid @enderror"
                                    aria-describedby="emailHelp" placeholder="title">
                                <x-common.error-message name="title" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="content">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                                    placeholder="write note here" rows="3">{{ $post->content }}</textarea>
                                <x-common.error-message name="content" />
                            </div>

                            <div class="mb-3 ">
                                <label class="form-label" for="is_published">Publish Now</label>
                                <select class="form-select" id="is_published" name="is_published">
                                    <option value="0" @selected($post->isPublished())>No</option>
                                    <option value="1" @selected(!$post->isPublished())>Yes</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
