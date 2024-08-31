@extends('layout.master')

@section('content')
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">النشاطات</h6>
                <h1 class="mb-5">أحدث النشاطات</h1>
            </div>

            <div class="row justify-content-center">
                @foreach ($activities as $activity)
                    <div class="col-lg-8 mb-4">
                        <div class="card border-0 shadow-sm wow fadeInUp" data-wow-delay="0.1s">
                            @if ($activity->image)
                                <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}">
                            @endif
                            <div class="card-body p-4">
                                <h4 class="card-title mb-3">{{ $activity->title }}</h4>
                                <p class="card-text text-muted mb-3">{{ Str::limit($activity->description, 150) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $activity->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
