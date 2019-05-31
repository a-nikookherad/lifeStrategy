<div class="list-group small">
    @foreach($whoPosts as $post)
        <a href="#" class="list-group-item" onclick="editModal({{$post->id}})" data-toggle="modal"
           data-target="#form_edit_modal">
            <h5>
                {{$post->title}}
            </h5>
            <p>
                {{$post->description}}
            </p>
        </a>
    @endforeach
</div>



