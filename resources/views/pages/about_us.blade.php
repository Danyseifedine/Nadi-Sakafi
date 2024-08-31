@extends('layout.master')

@section('content')
    <!-- About Us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">من نحن</h1>
                    <p class="mb-4">مركز الأنشطة والرعاية الصحية في لبنان هو مؤسسة رائدة تهدف إلى تعزيز الصحة والرفاهية
                        لجميع أفراد المجتمع. نحن نقدم مجموعة متنوعة من الخدمات والأنشطة التي تلبي احتياجات مختلف الفئات
                        العمرية.</p>
                    <p class="mb-4">تأسس مركزنا في عام 2010، ومنذ ذلك الحين ونحن نسعى جاهدين لتوفير بيئة آمنة وداعمة حيث
                        يمكن للأفراد الاستمتاع بالأنشطة الترفيهية والتعليمية، مع الحصول على رعاية صحية عالية الجودة.</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">اكتشف المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('img/us-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/us-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/us-3.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">لماذا نحن مميزون</h1>
                <p>نحن نسعى جاهدين لتقديم أفضل الخدمات والأنشطة لمجتمعنا. إليكم بعض الأسباب التي تجعلنا مميزين:</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <h5 class="mb-3">فريق طبي متخصص</h5>
                        <p class="m-0">نمتلك فريقًا من الأطباء والممرضين ذوي الخبرة والتخصصات المتنوعة</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <h5 class="mb-3">مرافق حديثة</h5>
                        <p class="m-0">نوفر مرافق رياضية وترفيهية حديثة ومجهزة بأحدث المعدات</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <h5 class="mb-3">برامج متنوعة</h5>
                        <p class="m-0">نقدم مجموعة واسعة من البرامج والأنشطة لتلبية احتياجات جميع الفئات العمرية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection
