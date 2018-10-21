<!doctype html>
<html lang="en">
<head>
    <?php include 'style.php'?>
    <title>آفاق</title>
</head>
<body>
<?php include 'header.php'?>
<div class="py-15">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-lg-3 pr-lg-1 text-center">
                <div class="logo">
                    <img class="img-fluid" src="images/logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pr-lg-0 pl-lg-1 top-adw">
                <img src="images/01.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 col-md-6 pl-lg-1 top-adw">
                <img src="images/01.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
<section class="section2 bg-dark mt-2 ">
    <div class="py-15">
        <div class="container-fluid">
            <div class="row justify-content-md-end">
                <div class="col-lg-11 ">
                    <div dir="rtl" class="news-holder">
                        <div class="news">
                            <div class="new">
                                <a href="#">الأنظار تتجه للقاهرة وترقب إعلان «التهدئة» مع استمرار خلاف الخصوم
                                    السياسيين </a>
                            </div>
                            <div class="new">
                                <a href="#">الأنظار تتجه للقاهرة وترقب إعلان «التهدئة» مع استمرار خلاف الخصوم
                                    السياسيين </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-4 pb-4">
    <div class="py-15">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form>
                        <div class="form-group">
                            <label for="name">الأسم <span class="red-color">*</span></label>
                            <input type="text" class="form-control" required id="name" placeholder="الأسم">
                        </div>
                        <div class="form-group">
                            <label for="subject">الموضوع<span class="red-color">*</span></label>
                            <input type="text" class="form-control" required id="subject" placeholder="الموضوع">
                        </div>
                        <div class="form-group">
                            <label for="news">الخبر <span class="red-color">*</span></label>
                            <textarea class="form-control" id="news" required rows="3" placeholder="الخبر"></textarea>
                        </div>
                        <button type="submit" class="referendum-button d-inline-block text-center">
                            ارسال
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
<?php include 'javasecript.php' ?>
</body>
</html>