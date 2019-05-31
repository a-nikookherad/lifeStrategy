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
            <a class="nav-link" onclick="strengths()" id="pills-profile-tab" data-toggle="pill" href="#strengths"
               role="tab"
               aria-controls="pills-strengths" aria-selected="false">strengths</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="weaknesses()" id="pills-contact-tab" data-toggle="pill" href="#weaknesses"
               role="tab"
               aria-controls="pills-weaknesses" aria-selected="false">weaknesses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="opportunities()" id="pills-profile-tab" data-toggle="pill"
               href="#opportunities" role="tab"
               aria-controls="pills-opportunities" aria-selected="false">opportunities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="obstacles()" id="pills-contact-tab" data-toggle="pill" href="#obstacles"
               role="tab"
               aria-controls="pills-obstacles" aria-selected="false">obstacles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="skills()" id="pills-contact-tab" data-toggle="pill" href="#skills" role="tab"
               aria-controls="pills-skills" aria-selected="false">skills</a>
        </li>
    </ul>
    <div class="tab-content w-100" id="pills-tabContent">

        <div class="tab-pane fade show active" id="coreValues" role="tabpanel" aria-labelledby="pills-home-tab">
            {{-- include list by ajax --}}
            <div id="coreValue_response"></div>
            <button class="btn btn-outline-success float-right btn-circle " onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>

        </div>

        <div class="tab-pane fade" id="strengths" role="tabpanel" aria-labelledby="pills-profile-tab">
            {{-- include list by ajax --}}
            <div id="strengths_response"></div>
            <button class="btn btn-outline-success float-right btn-circle " onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
        <div class="tab-pane fade" id="weaknesses" role="tabpanel" aria-labelledby="pills-contact-tab">
            {{-- include list by ajax --}}
            <div id="weaknesses_response"></div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
        <div class="tab-pane fade" id="opportunities" role="tabpanel" aria-labelledby="pills-contact-tab">
            {{-- include list by ajax --}}
            <div id="opportunities_response"></div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
        <div class="tab-pane fade" id="obstacles" role="tabpanel" aria-labelledby="pills-contact-tab">
            {{-- include list by ajax --}}
            <div id="obstacles_response"></div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
        <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="pills-contact-tab">
            {{-- include list by ajax --}}
            <div id="skills_response"></div>
            <button class="btn btn-outline-success float-right btn-circle" onclick="addModal()" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
    @push("scripts")
        <script>
            $(document).ready(function coreValue() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'coreValues'},
                    success: function (result) {
                        $("#coreValue_response").html(result);
                    }
                });
            })

            function strengths() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'strengths'},
                    success: function (result) {
                        $("#strengths_response").html(result);
                    }
                });
            }

            function weaknesses() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'weaknesses'},
                    success: function (result) {
                        $("#weaknesses_response").html(result);
                    }
                });
            }

            function opportunities() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'opportunities'},
                    success: function (result) {
                        $("#opportunities").html(result);
                    }
                });
            }

            function obstacles() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'obstacles'},
                    success: function (result) {
                        $("#obstacles_response").html(result);
                    }
                });
            }

            function skills() {
                $.ajax({
                    url: "{{route("whosAjax")}}",
                    type: "post",
                    data: {param: 'skills'},
                    success: function (result) {
                        $("#skills_response").html(result);
                    }
                });
            }

            function editModal(id) {
                $.ajax({
                    url: "/dashboard/whoPosts/" + id + "/edit",
                    success: function (result) {
                        $("#editModalBody").html(result);
                    }
                });

            }

            function addModal() {
                $.ajax({
                    url: "{{route("whoPosts.create")}}",
                    success: function (result) {
                        $("#insertModalBody").html(result);
                    }
                });

            }
        </script>
    @endpush
    {{-- end include list by ajax --}}
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

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-center">
                    add form
                </div>
                <div class="modal-body" id="insertModalBody">
                    @include("admin.whoAmI.partials.insert")
                </div>
            </div>
        </div>
    </div>
    {{--end modal--}}

@endsection