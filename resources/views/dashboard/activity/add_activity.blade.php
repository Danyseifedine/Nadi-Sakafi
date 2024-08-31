@extends('layout.master')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">إضافة نشاط</h6>
                    <h1 class="mb-5">إنشاء نشاط جديد</h1>
                </div>

                <form action="{{ route('dashboard.activity.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">العنوان</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">الوصف</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">الصورة</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">إنشاء النشاط</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
