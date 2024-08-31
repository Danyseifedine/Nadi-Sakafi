@extends('layout.master')

@section('content')
    <!-- Medical Center Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">المركز الطبي</h6>
                <h1 class="mb-5">خدماتنا الطبية</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">الفحوصات العامة</h5>
                            <p>نقدم فحوصات طبية شاملة لضمان صحتك العامة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">طب الأسنان</h5>
                            <p>خدمات طب الأسنان الشاملة لابتسامة صحية ومشرقة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">أمراض القلب</h5>
                            <p>رعاية متخصصة لصحة القلب والأوعية الدموية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">التحاليل المخبرية</h5>
                            <p>مختبر متطور لإجراء جميع أنواع التحاليل الطبية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Medical Center Section End -->

    <!-- Our Doctors Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">أطباؤنا</h6>
                <h1 class="mb-5">تعرف على فريقنا الطبي المتميز</h1>
            </div>
            <div class="row g-4">
                @foreach ($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/' . $doctor['image']) }}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{ $doctor['name'] }}</h5>
                                <small>{{ $doctor['specialization'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ asset('img/cal.pdf') }}" class="btn btn-primary py-3 px-5" download>تحميل جدول مواعيد
                    الأطباء</a>
            </div>
        </div>
    </div>
    <!-- Our Doctors Section End -->
@endsection
