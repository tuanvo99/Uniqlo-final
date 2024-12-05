<?php
  include_once('views/main/navbar.php');
  $id = $_GET['id'];
  foreach ($products as $product) {
    if ($id == $product->id){
?>
<style>
.card-img-top:hover {
    transform: scale(0.9);
    transition: transform 0.3s ease;
}
</style>
<div class="container-fluid py-2" style="margin-top: 86px; background-color: rgb(240,240,240,0.8)">
    <div class="container">
        <a href="index.php?page=main&controller=layouts&action=index" class="fw-bold me-2">Home</a>&nbsp;>
        <?php if($product->typeid == 0 ) {?>
        <a href="index.php?page=main&controller=menproducts&action=index"
            class=" fw-bold me-2">&nbsp;&nbsp;Men</a>&nbsp;>
        <?php } ?>
        <?php if($product->typeid == 1 ) {?>
        <a href="index.php?page=main&controller=womenproducts&action=index"
            class=" fw-bold me-2">&nbsp;&nbsp;Women</a>&nbsp;>
        <?php } ?>
        <?php if($product->typeid == 2 ) {?>
        <a href="index.php?page=main&controller=shoesproducts&action=index"
            class=" fw-bold me-2">&nbsp;&nbsp;Shoes</a>&nbsp;>
        <?php } ?>
        <a href="" class=" fw-bold me-2">&nbsp;&nbsp;<?php echo $product->name;?></a>
    </div>
</div>
<div class="container-fluid py-2 px-5" style="margin-top:20px">
    <section class="product">
        <div class="container1">
            <div class="product-content row">
                <div class="product-content-left">
                    <div class="product-content-left-small-img">
                        <img src="<?php echo $product->img;?>" onclick="changeImage(this)" alt="">
                        <img src="<?php echo $product->img1;?>" onclick="changeImage(this)" alt="">
                        <img src="<?php echo $product->img2;?>" onclick="changeImage(this)" alt="">
                        <img src="<?php echo $product->img3;?>" onclick="changeImage(this)" alt="">
                    </div>
                    <div class="product-content-left-big-img" style="margin-left:10px">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Add more carousel items for other images -->
                                <div class="carousel-item active">
                                    <img id="fullImage" src="<?php echo $product->img;?>" alt="">
                                </div>
                                <div class="carousel-item active">
                                    <img id="fullImage" src="<?php echo $product->img1;?>" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img id="fullImage" src="<?php echo $product->img2;?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img id="fullImage" src="<?php echo $product->img3;?>" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-content-right">
                    <div class="product-name">
                        <h1 style="text-transform:uppercase; font-size:26px; line-height:1.1;">
                            <?php echo $product->name;?></h1>
                    </div>
                    <div class="product-price">
                        <p style="font-weight:bold;"><?php echo number_format($product->price) ?>đ</p>
                    </div>
                    <div class="product-size">
                        <div class="row">
                            <div class="col-md-6">
                                <p style="font-weight:bold;">Size:</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <a 
                                    style="text-decoration: underline;">
                                    <i class="bi bi-pen"></i> Hướng dẫn chọn size
                                </a>
                                <!-- <p>data-bs-toggle="modal" data-bs-target="#exampleModal"</p> -->
                            </div>
                        </div>
                        <form action="index.php?page=main&controller=cart&action=submit" method="POST">
                            <div class="product-size-input">
                                <label>
                                    <input type="radio" name="size" value="S" checked>
                                    <span>S</span>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="M">
                                    <span>M</span>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="L">
                                    <span>L</span>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="XL">
                                    <span>XL</span>
                                </label>
                                <label>
                                    <input type="radio" name="size" value="XXL">
                                    <span>XXL</span>
                                </label>
                            </div>

                    </div>
                    <br>



                    <input type="hidden" value="<?php echo $product->id ?>" name="product_id">
                    <input type="hidden" value="<?php echo $product->name ?>" name="product_name">
                    <input type="hidden" value="<?php echo $product->img ?>" name="product_image">
                    <input type="hidden" value="<?php echo $product->price ?>" name="product_price">
                    <input type="hidden" value="<?php echo $product->sale ?>" name="product_sale">




                    <div class="mt-2  mb-2 ">
                        <input id="addToCartBtn" class="addCart" type="submit" name="addcart" value="Thêm vào giỏ hàng">
                    </div>
                    </form>
             

                  
                </div>
            </div>
        </div>
    </section>
    <?php
            }
            ?>
    <?php
        }
    ?>





    <div class="row" style="height: 100px">
    </div>


</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="size-table">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bảng Size</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <!-- Content of the modal goes here -->
                <div class="tab-content">
                    <!-- Nam -->
                    <div class="tab-pane fade show active" id="namTab" role="tabpanel" aria-labelledby="namTab">
                        <h4>NAM</h4>
                        <h6>SIZE ÁO</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên gọi/Size</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cổ</td>
                                    <td>36</td>
                                    <td>38</td>
                                    <td>40</td>
                                    <td>42</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vai</td>
                                    <td>44</td>
                                    <td>45</td>
                                    <td>46</td>
                                    <td>47</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ngực</td>
                                    <td>90</td>
                                    <td>94</td>
                                    <td>98</td>
                                    <td>102</td>
                                    <td>106</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Eo</td>
                                    <td>88</td>
                                    <td>92</td>
                                    <td>96</td>
                                    <td>100</td>
                                    <td>104</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6>SIZE QUẦN</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên gọi/Size</th>
                                    <th>S(29)</th>
                                    <th>M(30)</th>
                                    <th>L(31)</th>
                                    <th>XL(32)</th>
                                    <th>XXL(33)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Vòng Eo</td>
                                    <td>76</td>
                                    <td>80</td>
                                    <td>84</td>
                                    <td>86</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vòng Mông</td>
                                    <td>91</td>
                                    <td>95</td>
                                    <td>99</td>
                                    <td>104</td>
                                    <td>109</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cân nặng (kg)</td>
                                    <td>62-68</td>
                                    <td>68-70</td>
                                    <td>70-74</td>
                                    <td>74-78</td>
                                    <td>78-82</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Chiều cao (cm)</td>
                                    <td>168-168</td>
                                    <td>168-172</td>
                                    <td>172-176</td>
                                    <td>176-180</td>
                                    <td>180-184</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Nữ -->
                    <div class="tab-pane fade" id="nuTab" role="tabpanel" aria-labelledby="nuTab">
                        <h4>NỮ</h4>
                        <h6>SIZE ÁO</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên gọi/Size</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cổ</td>
                                    <td>36</td>
                                    <td>37</td>
                                    <td>38</td>
                                    <td>39</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vai</td>
                                    <td>82</td>
                                    <td>86</td>
                                    <td>90</td>
                                    <td>94</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ngực</td>
                                    <td>64</td>
                                    <td>68</td>
                                    <td>72</td>
                                    <td>76</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Eo</td>
                                    <td>88</td>
                                    <td>92</td>
                                    <td>96</td>
                                    <td>100</td>
                                    <td>104</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6>SIZE QUẦN</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên gọi/Size</th>
                                    <th>S(29)</th>
                                    <th>M(30)</th>
                                    <th>L(31)</th>
                                    <th>XL(32)</th>
                                    <th>XXL(33)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Vòng Eo</td>
                                    <td>64</td>
                                    <td>68</td>
                                    <td>70</td>
                                    <td>76</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Vòng Mông</td>
                                    <td>88</td>
                                    <td>92</td>
                                    <td>96</td>
                                    <td>100</td>
                                    <td>104</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Vòng Bụng</td>
                                    <td>68</td>
                                    <td>72</td>
                                    <td>76</td>
                                    <td>80</td>
                                    <td>84</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dài Quần</td>
                                    <td>96</td>
                                    <td>97</td>
                                    <td>99</td>
                                    <td>100</td>
                                    <td>101</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Trẻ em -->
                    <div class="tab-pane fade" id="treEmTab" role="tabpanel" aria-labelledby="treEmTab">
                        <h4>TRẺ EM</h4>
                        <h6>SIZE VÁY ÁO TRẺ EM</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Cỡ/Tuổi</th>
                                    <th>4-5</th>
                                    <th>6-7</th>
                                    <th>8-9</th>
                                    <th>10-11</th>
                                    <th>12-13</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chiều Cao (cm)</td>
                                    <td>110</td>
                                    <td>122</td>
                                    <td>133</td>
                                    <td>150</td>
                                    <td>155</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cân Nặng (kg)</td>
                                    <td>15-20</td>
                                    <td>20-25</td>
                                    <td>23-29</td>
                                    <td>28-35</td>
                                    <td>34-43</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rộng Vai</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td>32</td>
                                    <td>33</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Vòng Ngực</td>
                                    <td>59</td>
                                    <td>65</td>
                                    <td>68</td>
                                    <td>74</td>
                                    <td>79</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Vòng Bụng</td>
                                    <td>54</td>
                                    <td>59</td>
                                    <td>62</td>
                                    <td>65</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Vòng Mông</td>
                                    <td>61</td>
                                    <td>66</td>
                                    <td>70</td>
                                    <td>75</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dài Tay</td>
                                    <td>40</td>
                                    <td>43</td>
                                    <td>47</td>
                                    <td>59</td>
                                    <td>53</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Chiều Dài Từ Đũng Đến Ống</td>
                                    <td>42</td>
                                    <td>52</td>
                                    <td>59</td>
                                    <td>66</td>
                                    <td>72</td>
                                </tr>
                                <!-- Thêm các dòng khác tương tự -->
                            </tbody>
                        </table>
                        <b>*Số đo trong "BẢNG THÔNG SỐ" là số đo cơ thể không phải số đo quần áo</b>*
                    </div>
                </div>

                <!-- Tabs navigation -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="namTab" data-bs-toggle="tab" href="#namTab" role="tab"
                            aria-controls="namTab" aria-selected="true">Nam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nuTab" data-bs-toggle="tab" href="#nuTab" role="tab"
                            aria-controls="nuTab" aria-selected="false">Nữ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="treEmTab" data-bs-toggle="tab" href="#treEmTab" role="tab"
                            aria-controls="treEmTab" aria-selected="false">Trẻ em</a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
// JavaScript để xử lý sự kiện click
document.getElementById('addToCartBtn').addEventListener('click', function() {
    // Lấy số lượng hiện tại từ logo giỏ hàng
    var currentCount = parseInt(document.getElementById('cartCount').innerText);

    // Cộng thêm 1
    var newCount = currentCount + 1;

    // Hiển thị số lượng mới lên trên logo giỏ hàng
    document.getElementById('cartCount').innerText = newCount;
});
</script>

<!-- Cart tab -->

<script>
const icon_cart = document.querySelector('#cart');
const cart_tab = document.querySelector('.cart-tab');
const close_btn = document.querySelector('.close');

icon_cart.addEventListener('click', () => {
    cart_tab.classList.add('active')
})

close_btn.addEventListener('click', () => {
    cart_tab.classList.remove('active')
})
</script>
<script>
const tabs = document.querySelectorAll('.product-tab-btn')
const all_content = document.querySelectorAll('.product-tab-content')
tabs.forEach((tab, index) => {
    tab.addEventListener('click', (event) => {
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')

        var line = document.querySelector('.line')
        line.style.width = event.target.offsetWidth + "px"
        line.style.left = event.target.offsetLeft + "px"

        all_content.forEach(content => {
            content.classList.remove('active')
        })
        all_content[index].classList.add('active')
    })


})

const button = document.querySelector(".show-more")
if (button) {
    button.addEventListener("click", function() {
        document.querySelector(".product-detail-container").classList.toggle("activeB")
    })
}
</script>
<script>
$(document).ready(function() {
    // Lắng nghe sự kiện khi carousel thay đổi
    $('#carouselExampleControls').on('slid.bs.carousel', function() {
        // Lấy index của carousel item hiện tại
        var currentIndex = $('#carouselExampleControls .carousel-inner .carousel-item.active').index();

        // Loại bỏ đường viền từ tất cả các ảnh nhỏ
        $('.product-content-left-small-img img').css('border', 'none');

        // Thêm đường viền cho ảnh nhỏ tương ứng với carousel item hiện tại
        $('.product-content-left-small-img img').eq(currentIndex).css('border', '2px solid #000');
    });
});
</script>
<?php
   include_once('views/main/footer.php');
?>