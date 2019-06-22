@csrf
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

