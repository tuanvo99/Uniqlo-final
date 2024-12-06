<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/stylesheets/login.css">
    <style>
    .fixed-bottom-right {
        position: fixed;
        bottom: 0;
        right: 0;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
    </style>
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="wrapper" style="background-image: url('https://huytoanland.com.vn/wp-content/uploads/2022/11/Cua-hang-Uniqlo-viet-nam-Huytoanland-1024x614.webp'); background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;">
        <div class="box">
            <form action="index.php?page=admin&controller=login&action=check" method="POST">
                <div class="register-box" id="regUser">
                    <div class="top-header">
                    </div>
                    <?php
			            if (isset($err)) {
				        echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
				        unset($err);
			            }
			        ?>
                    <div class="input-field">
                        <input type="text" class="input-box" id="username" name="username" placeholder="Email" required>

                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="password" name="password" placeholder="Password" required>

                    </div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck-2" class="check">
                        <label for="formCheck-2">Ghi nhớ đăng nhập</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Đăng Nhập" name="submit-btn">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="fixed-bottom-right p-2">
        <div class="rounded p-2">
            <a href="index.php?page=main&controller=layouts&action=index"
                class="btn btn-dark d-flex align-items-center">
                <span class="me-2">Quay lại trang chủ</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </a>
        </div>
    </div>
</body>

</html>
