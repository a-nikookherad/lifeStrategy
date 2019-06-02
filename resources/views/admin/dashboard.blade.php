@extends('layouts.dashboard')
@section('title')
    {{'dashboard'}}
@endsection
@section('content')
    <div class="page-content fade-in-up">
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" onclick="{{route('who.list')}}" id="home-tab" data-toggle="tab" href="#home"
                   role="tab" aria-controls="home"
                   aria-selected="true">
                    who am i?
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="{{route('dashboard')}}" id="profile-tab" data-toggle="tab" href="#profile"
                   role="tab"
                   aria-controls="profile" aria-selected="false">
                    goals
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="{{route('dashboard')}}" id="contact-tab" data-toggle="tab" href="#contact"
                   role="tab"
                   aria-controls="contact" aria-selected="false">
                    tasks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="{{route('dashboard')}}" id="contact-tab" data-toggle="tab" href="#contact"
                   role="tab"
                   aria-controls="contact" aria-selected="false">
                    habits
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="{{route('dashboard')}}" id="contact-tab" data-toggle="tab" href="#contact"
                   role="tab"
                   aria-controls="contact" aria-selected="false">
                    lessons
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">

                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                ...
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                ...
            </div>
        </div>

        @push("styles")
            <style>
                .visitors-table tbody tr td:last-child {
                    display: flex;
                    align-items: center;
                }

                .visitors-table .progress {
                    flex: 1;
                }

                .visitors-table .progress-parcent {
                    text-align: right;
                    margin-left: 10px;
                }
            </style>
        @endpush
    </div>
@endsection