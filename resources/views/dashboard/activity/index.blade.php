@extends('layout.master')


@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">النشاطات</h6>
                        <h1 class="mb-5">إدارة النشاطات</h1>
                    </div>

                    <div class="mb-4 text-end">
                        <a href="{{ route('dashboard.activity.add') }}" class="btn btn-primary">إضافة نشاط جديد</a>
                    </div>

                    <div class="table-responsive">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>العنوان</th>
                                    <th>الوصف</th>
                                    <th>الصورة</th>
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->title }}</td>
                                        <td>{{ Str::limit($activity->description, 50) }}</td>
                                        <td>
                                            @if ($activity->image)
                                                <img src="{{ asset($activity->image) }}" alt="{{ $activity->title }}"
                                                    width="50">
                                            @else
                                                لا توجد صورة
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('dashboard.activity.edit', $activity) }}"
                                                class="btn btn-sm btn-info">تعديل</a>
                                            <form action="{{ route('dashboard.activity.destroy', $activity) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('هل أنت متأكد من حذف هذا النشاط؟')">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
