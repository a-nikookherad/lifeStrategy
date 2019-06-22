{{dd($_POST)}}
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-center">
                add form
            </div>
            <div class="modal-body" id="insertModalBody">
                @if(isset($_POST['whoID']))
                    <form action="{{route("who.update",$_POST['whoID'])}}" class="form" enctype="multipart/form-data"
                          method="get">
                        @csrf
                        <div class="form-group">
                            <label for="title">name:</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="catID">category:</label>
                            <select name="catID" id="catID" class="form-control">
                                @foreach($whoPostsCategories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
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
                @else
                    <form action="{{route("who.store")}}" class="dropzone" id="my-awesome-dropzone"
                          enctype="multipart/form-data"
                          method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">name:</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="catID">category:</label>
                            <select name="catID" id="catID" class="form-control">
                                @foreach($whoPostsCategories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach            </select>
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
                @endif
            </div>
        </div>
    </div>
</div>