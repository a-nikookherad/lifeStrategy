<form action="{{route("who.update")}}" class="form" enctype="multipart/form-data" method="get">
    @include('admin.whoAmI.partials.form',["id"=>$id])
    <div class="form-group">
        <button type="submit" class="btn btn-outline-success float-right">
            <i class="fa fa-save"></i>
        </button>
    </div>
</form>