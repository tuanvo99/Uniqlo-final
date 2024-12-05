<?php 
   include_once('views/main/navbar.php');
?>
<main>
    <style>
    .card-img-top:hover {
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    @media only screen and (max-width : 992px) {}

    @media only screen and (max-width : 575px) {}

    @media only screen and (max-width : 830px) {}

    @media screen and (max-width: 540px) {
        #advertisement-product {
            margin-top: 120px;
        }

    }

    .square-box {
        background-color: white;
        /* Gray background color */
        padding: 20px;
        /* Adjust padding as needed */
        border-radius: 10px;
        /* Optional: Add rounded corners */
        height: 100%;
        /* Ensures the box takes the full height of the parent container */
        box-shadow: 0 15px 15px rgba(0, 0, 0, 0.1);
    }
    </style>
    <div class="container-fluid py-2" style="margin-top: 86px; background-color: rgb(230,230,230,0.8)">
        <div class="container">
            <a href="index.php?page=main&controller=layouts&action=index" class="fw-bold me-2">Home</a>&nbsp;>
            <a href="index.php?page=main&controller=womenproducts&action=index"
                class=" fw-bold me-2">&nbsp;&nbsp;Women</a>
        </div>
    </div>
   


    <!-- Items -->
    <div class="container-fluid py-2" style="margin-top: 10px">
        <div class="container-fluid px-4 px-lg-6 mt-4">
            <div style="display: flex; justify-content: flex-end; margin-top: 10px">
                <select id="sortOption" name=""
                    style="margin-right: auto; border-radius: 10px; height: 30px; width: 300px; border-color: #ccc;"
                    onchange="sortProducts()">
                    <option value="default">Sắp xếp theo</option>
                    <option value="highToLow">Giá cao đến thấp</option>
                    <option value="lowToHigh">Giá thấp đến cao</option>
                </select>

            </div>
            <div class="row" style="margin-top: 30px; padding-left: 60px">
                <div id="card-content"
                    class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 ">
                    <?php 
            // Lặp qua danh sách sản phẩm và hiển thị card
            foreach ($womenproducts as $womenproduct) {
                echo '<div id="card" class="col mb-3">
                        <a href="index.php?page=main&controller=detail&id=' . $womenproduct->id . '&action=index"
                            class="card h-100 text-decoration-none">';

                            if ($womenproduct->sale) {
                            echo '<div class="badge bg-dark text-light position-absolute"
                                style="top: 0.5rem; right: 0.5rem; z-index:10"> - ' . $womenproduct->sale . '%</div>';
                            }

                            echo '<img class="card-img-top" src="' . $womenproduct->img . '" alt="..."
                                style="height: 80%; width: auto;">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <p class="product-name text-muted" style="font-size: 1em">' . $womenproduct->name .
                                        '</p>
                                    <span class="fw-bold">' . number_format($womenproduct->price * (100 -
                                        $womenproduct->sale) / 100, 0, ',', '.') . ' đ</span>
                                    <span class="text-muted text-decoration-line-through">' .
                                        number_format($womenproduct->price, 0, ',', '.') . ' đ</span>';

                                    if ($womenproduct->vote_number == 0) {
                                    echo '<p class="product-name text-muted" style="font-size: 1em">' .
                                        $womenproduct->vote_number . ' lượt đánh giá</p>';
                                    } else {
                                    echo '<p class="product-name text-muted" style="font-size: 1em">' .
                                        $womenproduct->vote_number . ' lượt đánh giá</p>
                                    <p class="product-name text-muted" style="font-size: 1em">' .
                                        $womenproduct->total_stars / $womenproduct->vote_number . ' &#9733
                                    </p>';
                                    }

                                    echo '
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <!-- Optional: Keep this div if you want to maintain the same structure -->
                                </div>
                            </div>
                        </a>
                    </div>';
                    }

                    ?>
                </div>



            </div>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">

                <li class="page-item">
                    <a class="page-link previous-page" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <style>
                    .pagination .page-item.active .page-link {
                        background-color: gray !important;
                        border-color: gray !important;
                    }
                </style>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link .next-page" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>



    <script type="text/javascript">
    function getPageList(totalPages, page, maxLength) {
        function range(start, end) {
            return Array.from(Array(end - start + 1), (_, i) => i + start);
        }

        var sideWidth = maxLength < 9 ? 1 : 2;
        var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

        if (totalPages <= maxLength) {
            return range(1, totalPages);
        }

        if (page <= maxLength - sideWidth - 1 - rightWidth) {
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
        }

        if (page >= totalPages - sideWidth - 1 - rightWidth) {
            return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth,
                totalPages));
        }

        return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages -
            sideWidth + 1, totalPages));
    }

    $(function() {
        var numberOfItems = $("#card-content #card").length;
        var limitPerPage = 9; //How many card items visible per a page
        var totalPages = Math.ceil(numberOfItems / limitPerPage);
        var paginationSize = 7; //How many page elements visible in the pagination
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $("#card-content #card").hide().slice((currentPage - 1) * limitPerPage, currentPage *
                    limitPerPage)
                .show();

            $(".pagination li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                    .toggleClass("active", item === currentPage).append($("<a>").addClass(
                            "page-link")
                        .attr({
                            href: "javascript:void(0)"
                        }).text(item || "...")).insertBefore(".next-page");
            });

            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
        }

        $(".pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass(
                    "page-link")
                .attr({
                    href: "javascript:void(0)"
                }).text("Prev")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link")
                .attr({
                    href: "javascript:void(0)"
                }).text("Next"))
        );

        $("#card-content").show();
        showPage(1);

        $(document).on("click", ".pagination li.current-page:not(.active)", function() {
            return showPage(+$(this).text());
        });

        $(".next-page").on("click", function() {
            return showPage(currentPage + 1);
        });

        $(".previous-page").on("click", function() {
            return showPage(currentPage - 1);
        });
    });
    </script>
    <script>
    function sortProducts() {
        var sortOption = document.getElementById("sortOption");
        var selectedValue = sortOption.value;

        // Xử lý sự kiện khi lựa chọn giá trị
        if (selectedValue === "highToLow") {
            window.location.href = 'index.php?page=main&controller=womenproducts&action=sortByPriceHighToLow';
        } else if (selectedValue === "lowToHigh") {
            window.location.href = 'index.php?page=main&controller=womenproducts&action=sortByPriceLowToHigh';
        }
        // Các trường hợp sắp xếp khác nếu cần
    }
    </script>



</main>

<?php
   include_once('views/main/footer.php');
?>