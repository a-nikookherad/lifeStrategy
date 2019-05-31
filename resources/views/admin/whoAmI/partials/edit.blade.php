<form action="{{route("whoPosts.store")}}" class="form" enctype="multipart/form-data">
    @csrf
    <div class="custom-file border">
        <input type="file" class="custom-file-input " name="img" id="customFile">
        <label class="custom-file-label" for="customFile">Choose picture:</label>
    </div>
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old("name",$whoPost->title)}}">
    </div>
    <div class="form-group">
        <label for="coreValue">core value:</label>
        <select name="coreValue" id="coreValue" class="form-control">
            @include('admin.whoAmI.partials.options',["whoPostsCategories"=>$whoPostsCategories])
        </select>
    </div>
    <div class="form-group">
        <label for="description">description:</label>
        <textarea type="text" name="description" id="description" class="form-control" rows="5"
                  placeholder="description">
            {{old("description",$whoPost->description)}}
                        </textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success float-right">
            <i class="fa fa-save"></i>
        </button>
    </div>
</form>
