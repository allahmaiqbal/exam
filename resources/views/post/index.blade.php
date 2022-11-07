<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <a class="btn btn-info" href="{{route('dashboard.post.create')}}">Create Post</a>
           </div>
           <div class="col-md-6">
                {{-- <form action ="">
                    <select name="orderBy" class="form-control form-control-sm">
                        <option value="latest" @selected(request('orderBy')==='latest' )>Latest</option>
                        <option value="oldest" @selected(request('orderBy')==='oldest' )>Oldest</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form> --}}
                <form action="">
                    <select name ="orderBy" class="form-control mb-2">
                        <option value="latest" @selected(request('orderBy') === 'latest')> Latest</option>
                        <option value="oldest" @selected(request('orderBy')==='oldest')> Ordest</option>
                    </select>
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
           </div>
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $post )
                    <div class="col">
                        <div class="card">
                                <p class="text-end">
                                    <span @class([ 'badge' , 'text-bg-warning'=> !$post->isPublished(), 'text-bg-success'
                                        => $post->isPublished() ])>
                                        @if(!$post->isPublished())
                                        Not
                                        @endif
                                        Published
                                    </span>
                                </p>
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-header">
                                <p></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <p>Pubished by: {{ $post->author->name }}</p>
                            </div>
                            <div class="card-footer">
                                <p>Pubished by: {{ $post->author->name }}</p>
                                <small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small>
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
