<button class="btn btn-outline-in" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                {{$title}}
            </div>
            <div class="modal-body">
                <form action="{{route("whoPosts.store")}}" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="coreValue">core value:</label>
                        <select name="coreValue" id="coreValue" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">description:</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="5"
                                  placeholder="description">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success ">
                            <i class="fa fa-save"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>