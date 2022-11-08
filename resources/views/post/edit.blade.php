<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="mb-3">
                 <a class="btn btn-warning" href="{{route('dashboard.post.index')}}">All Post </a>
            </div>
            <div class="col-md-6">

                <div class="card ">
                    <div class="card-header text-center">
                      Post Edit
                    </div>
                    <div class="card-body">
                        <form action ="{{route('dashboard.post.update',$post->id)}}" method="POST">
                            @method('Put')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" name="title"  value="{{ $post->title }}"class="form-control" placeholder="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                <textarea class="form-control" placeholder="write note here" name="content" id="exampleFormControlTextarea1" rows="3">{{ $post->content }}</textarea>
                            </div>

                            <div class="mb-3 ">
                                <label for="is-published" class="form-label">Is_Published</label>
                                <select class="form-select" id="is-published" name="is_published">
                                    <option value="1" @selected($post->isPublished())>Yes</option>
                                    <option value="0" @selected(!$post->isPublished())>No</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
