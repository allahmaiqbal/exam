<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="card ">
                    <div class="card-header text-center">
                      post create
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Title</label>
                              <input type="text" name="title" class="form-control" placeholder="title" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                <textarea class="form-control" placeholder="write note here" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3 ">
                                <label for="exampleFormControlTextarea1" class="form-label">Is_Published</label>
                                <select class="form-select" name="is_published" aria-label="Default select example">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                  </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                  </div>


            </div>
        </div>
    </div>
</x-app-layout>