<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <a class="btn btn-warning" href="{{ route('dashboard.post.index') }}">All Post</a>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header text-center">
                        Post Create
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.post.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input id="title" name="title" type="text"
                                    value="{{ old('title') }}"class="form-control  @error('title') is-invalid @enderror"
                                    aria-describedby="emailHelp" placeholder="title">
                                <x-common.error-message name="title" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="content">Content</label>
                                <textarea class="form-control  @error('title') is-invalid @enderror" id="content" name="content"
                                    placeholder="write note here" rows="3"></textarea>
                                <x-common.error-message name="content" />
                            </div>

                            <div class="mb-3 ">
                                <label class="form-label" for="is-published">Publish</label>
                                <select class="form-select" id="is-published" name="is_published">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
