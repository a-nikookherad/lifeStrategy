@extends('layouts.dashboard')
@section('title')
    {{'who am i?'}}
@endsection
@section('content')
    <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" onclick="coreValue()" id="pills-home-tab" data-toggle="pill" href="#coreValues"
               role="tab"
               aria-controls="pills-coreValues" aria-selected="true">core values</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="getData('strengths_response','strengths')" id="pills-profile-tab"
               data-toggle="pill" href="#strengths"
               role="tab"
               aria-controls="pills-strengths" aria-selected="false">strengths</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="getData('weaknesses_response','weaknesses')" id="pills-contact-tab"
               data-toggle="pill" href="#weaknesses"
               role="tab"
               aria-controls="pills-weaknesses" aria-selected="false">weaknesses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="getData('opportunities_response','opportunities')" id="pills-profile-tab"
               data-toggle="pill"
               href="#opportunities" role="tab"
               aria-controls="pills-opportunities" aria-selected="false">opportunities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="getData('obstacles-response','obstacles')" id="pills-contact-tab"
               data-toggle="pill" href="#obstacles"
               role="tab"
               aria-controls="pills-obstacles" aria-selected="false">obstacles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="getData('skills-response','skills')" id="pills-contact-tab" data-toggle="pill"
               href="#skills" role="tab"
               aria-controls="pills-skills" aria-selected="false">skills</a>
        </li>
    </ul>
    <div class="tab-content w-100" id="pills-tabContent">
        {{--core value tab--}}
        <div class="tab-pane fade show active" id="coreValues" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="coreValue_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle " onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>

        {{--strengths tab--}}
        <div class="tab-pane fade" id="strengths" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div id="strengths_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle " onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>

        {{--weaknesses tab--}}
        <div class="tab-pane fade" id="weaknesses" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div id="weaknesses_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>

        {{--opportunities tab--}}
        <div class="tab-pane fade" id="opportunities" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div id="opportunities_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>

        {{--obstacles tab--}}
        <div class="tab-pane fade" id="obstacles" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div id="obstacles_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>

        {{--skills tab--}}
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div id="skills_response">
                {{-- response list by ajax --}}
            </div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
    </div>

    {{--start edit modal--}}
    <div id="form_edit_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-center">
                    edit form
                </div>
                <div class="modal-body" id="editModalBody">
                </div>
            </div>
        </div>
    </div>
    {{--end modal--}}
    {{--start insert modal--}}


    {{--end modal--}}
    @push('css_file')
        <link rel="stylesheet" href="{{asset("css/dropzone.css")}}">
    @endpush
    @push('js_file')
        <script src="{{asset("js/dropzone.min.js")}}"></script>
    @endpush
    {{--scripts--}}
    @push("scripts")
        <script>
            $(document).ready(function coreValue() {
                $.ajax({
                    url: "{{route("who.ajax")}}",
                    type: "post",
                    data: {param: 'coreValues'},
                    success: function (result) {
                        $("#coreValue_response").html(result);
                    }
                });
            })

            function getData(responseID, param) {
                $.ajax({
                    url: "{{route("who.ajax")}}",
                    type: "post",
                    data: {param: param},
                    success: function (result) {
                        $("#" + responseID).html(result);
                    }
                });
            }

            function whoModal(id = 0) {
                $.ajax({
                    url: "/whoAmI/whoModal/" + id + "",
                    success: function (result) {
                        $("#editModalBody").html(result);
                    }
                });
            }

        </script>
    @endpush
@endsection