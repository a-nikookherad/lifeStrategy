<form action="{{route("whoPosts.store")}}" class="form" enctype="multipart/form-data" method="post">
    @csrf

    <div class="custom-file border">
        <input type="file" class="custom-file-input " name="img" id="customFile">
        <label class="custom-file-label" for="customFile">Choose picture:</label>
    </div>
    <div class="form-group">
        <label for="title">name:</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="catID">category:</label>
        <select name="catID" id="catID" class="form-control">
            @include('admin.whoAmI.partials.options',["whoPostsCategories"=>isset($whoPostsCategories)?$whoPostsCategories:[]])
        </select>
    </div>
    <div class="form-group">
        <label for="description">description:</label>
        <textarea type="text" name="description" id="description" class="form-control" rows="5"
                  placeholder="description">
                        </textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success float-right">
            <i class="fa fa-save"></i>
        </button>
    </div>
</form>
