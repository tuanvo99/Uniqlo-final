<?php
  include_once('views/main/navbar.php');
?>


<div id="advertisement-product" class="container-fluid d-block" style="margin-top: 80px;">
    <div class="row banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<main id="main" style="margin-top: 20px;">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up ">

            <div class="row content">
                <div class="container px-4 px-lg-6">
                    <div class="row m-4">
                        <h2 class="text-center mt-3"><span class="fw-bolder">UNIQLO</span> - <span
                                class="fw-bolder">Thương hiệu quần áo chất lượng hàng đầu Việt Nam</span>
                        </h2><br>

                        <p class="text-center">
                            <span class="fw-bold">Định hình phong cách, nâng tầm tự tin</span>
                        </p>
                    </div>
                </div>
                <div class="op-box">
                    <div class="right">
                        <span class="title"> TV ANIME ONE PIECE 25TH </span>
                        <div class="mota">Bộ sưu tập áo thun UT nhân dịp kỷ niệm 25 năm ra mắt bộ phim hoạt hình Monkey D. Luffy: Adventure Trail hiện đã có mặt.
                             Năm 2024 đánh đấu 25 năm ra mắt bộ anime ONE PIECE nổi tiếng với những cuộc phiêu lưu kì thú của nhân vật chính Monkey D. Luffy. 
                             Bộ sưu tập áo thun kỷ niệm sự kiện này nay đã có mặt tại UNIQLO UT, với những thiết kế mang hình ảnh từ "East Blue" đến "Egghead" mới nhất. 
                             UNIQLO UT là đối tác toàn cầu chính thức của ONE PIECE DAY '24.</div>
                    </div>
                    <div class="left">
                        <img src="/assets/images/op.webp" alt="">
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <br><br><br>

    <style>
        .op-box{
            display: grid;
            grid-template-columns: 50% 50%;
            margin: auto; /* Loại bỏ lề vì đã dùng flexbox */
            width: 80%; /* Kích thước khung */
            height: 420px; /* Đặt chiều cao */
            overflow: hidden;
            border: 1px solid #dadada;

        }
        .title{
            font-weight: bolder;
            font-size: 45px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
        .mota{
            text-align: justify;
            font-size: 16px;
            margin-top: 20px;
        }
        .left img{
            max-width: 100%; /* Đảm bảo hình ảnh không vượt quá kích thước khung */
            height: 95%; /* Giữ nguyên tỉ lệ hình ảnh */
            margin: 5px;
        }
        .right{
            max-width: 90%;
        }
    </style>
    <div id=" news" onclick="window.location.href='/BigFarm/index.php?page=main&controller=blog&action=index'">
    </div>
    <div id="contact" onclick="window.location.href='/BigFarm/index.php?page=main&controller=contact&action=index'"
        style=" box-shadow: 0 5px 10px rgba(0,0,0,.2);">

    </div>
    <script>
    $(function() {
        $("#about").load(
            "http://localhost/BigFarm/index.php?page=main&controller=about&action=index #about-page");
    });
    $(function() {
        $("#news").load("http://localhost/BigFarm/index.php?page=main&controller=blog&action=index #blog");
    });
    $(function() {
        $("#contact").load(
            "http://localhost/BigFarm/index.php?page=main&controller=contact&action=index #contact");
    });
    </script>


</main><!-- End #main -->

<?php
include_once('views/main/footer.php');
?>