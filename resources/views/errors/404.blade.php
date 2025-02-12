<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-override.css') }}">

<section class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
            <div class="fs-big text-center text-danger fw-bold">404</div>
            <div class="fs-3 text-center fw-bold mb-4">عذرًا! لقد وصلت إلى خطأ 404</div>
            <div class="fs-6 text-center mb-3">
                للأسف، الصفحة التي تبحث عنها غير موجودة.
                قد تكون غير متاحة مؤقتًا، أو تم نقلها، أو لم تعد موجودة.
                يرجى التحقق من عنوان URL الذي أدخلته وحاول مرة أخرى.
            </div>
            <div class="text-center">
                <a href="{{ url()->previous() }}" class="btn btn-primary">الرجوع</a>
            </div>
        </div>
    </div>
</section>
