@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card">
                    @if ($project->proj_thumb)
                    <img class="card-img-top p-4" data-slug-img="{{ $project->proj_thumb }}" id="project_main_thumb" src="" alt="{{ $project->name }}">
                    @endif
                    <div class="card-body">
                        <h1 class="card-title">{{ $project->name }}</h1>
                        <p class="card-text">{{ $project->description }}</p>
                        <p class="card-text">{{ $project->category }}</p>
                        <a class="text-danger" href="{{ $project->link }}">
                            {{ $project->link }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection