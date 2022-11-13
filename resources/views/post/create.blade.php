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
                                <label class="form-label" for="exampleInputEmail1">Title</label>
                                <input id="exampleInputEmail1" name="title" type="text"
                                    value="{{ old('title') }}"class="form-control" aria-describedby="emailHelp"
                                    placeholder="title">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" placeholder="write note here"
                                    rows="3"></textarea>
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
