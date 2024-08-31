@extends('layout.master')

@section('content')
    <div class="container-fluid p-0 mb-5">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="display-3 text-white mb-4 animated fadeInDown">مركز الأنشطة والرعاية الصحية في لبنان</h1>
                <p class="fs-5 text-white mb-4 pb-2 animated fadeInUp">انضم إلينا لتجربة مجموعة متنوعة من الأنشطة
                    الترفيهية والتعليمية، مع توفير رعاية صحية متميزة من قبل أطبائنا المتخصصين.</p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">استكشف الأنشطة</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">قسم الأطباء</a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="fa fa-heartbeat fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">رعاية صحية متميزة</h5>
                            <p>نقدم خدمات طبية عالية الجودة من قبل فريق من الأطباء المتخصصين والممرضين ذوي الخبرة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-bicycle fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">أنشطة رياضية متنوعة</h5>
                            <p>نوفر مجموعة واسعة من الأنشطة الرياضية لجميع الأعمار لتعزيز اللياقة البدنية والصحة العامة
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-palette fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">ورش عمل فنية</h5>
                            <p>نقدم ورش عمل فنية متنوعة لتنمية المهارات الإبداعية وتعزيز التعبير الذاتي لدى المشاركين
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-book fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">برامج تعليمية</h5>
                            <p>نوفر برامج تعليمية متنوعة لمختلف الفئات العمرية لتعزيز المعرفة وتطوير المهارات الحياتية
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/team.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">من نحن</h6>
                    <h1 class="mb-4">نادي ثقافي</h1>
                    <p class="mb-4">نحن نادي ثقافي رائد، أسسته إيلين داماج بهدف تعزيز التبادل الثقافي والفكري في
                        مجتمعنا. إيلين داماج هي رائدة أعمال وناشطة ثقافية ملهمة، تتمتع بشغف كبير للفنون والثقافة. بفضل
                        رؤيتها الثاقبة وخبرتها الواسعة في المجال الثقافي، استطاعت إيلين تأسيس هذا النادي ليكون منارة
                        للإبداع والتنوع الثقافي في مجتمعنا.</p>
                    <p class="mb-4">نسعى جاهدين لتحقيق رؤية إيلين من خلال توفير بيئة إبداعية وملهمة لجميع أفراد
                        المجتمع، بغض النظر عن خلفياتهم الثقافية أو الاجتماعية. نقدم مجموعة متنوعة من الأنشطة والفعاليات
                        الثقافية المصممة لتلبية اهتمامات وتطلعات أعضائنا، مع التركيز على تعزيز الحوار الثقافي وتشجيع
                        الإبداع والتفكير النقدي.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الفعاليات</h6>
                <h1 class="mb-5">فعالياتنا</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('img/us-1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('img/us-2.jpg') }}" alt="">

                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('img/us-3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/us-4.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->
@endsection
