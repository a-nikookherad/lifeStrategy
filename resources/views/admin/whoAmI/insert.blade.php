<form action="{{route("who.store")}}" class="form" enctype="multipart/form-data" method="post">
    @include('admin.whoAmI.partials.form')
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success float-right">
            <i class="fa fa-save"></i>
        </button>
    </div>
</form>