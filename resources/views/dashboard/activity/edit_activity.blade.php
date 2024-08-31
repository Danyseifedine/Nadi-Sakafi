@extends('layout.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">تعديل النشاط</h6>
                        <h1 class="mb-5">تحديث بيانات النشاط</h1>
                    </div>

                    <form action="{{ route('dashboard.activity.update', $activity) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $activity->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">الوصف</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $activity->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">الصورة الحالية</label>
                            @if ($activity->image)
                                <img src="{{ asset($activity->image) }}" alt="{{ $activity->title }}" class="img-fluid mb-2"
                                    style="max-width: 200px;">
                            @else
                                <p>لا توجد صورة</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="new_image" class="form-label">تحديث الصورة (اختياري)</label>
                            <input type="file" class="form-control" id="new_image" name="new_image">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">تحديث النشاط</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
