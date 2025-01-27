<?php
if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
    header('location: ' . ROUTES['home']);
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <?php include './common/css.php'; ?>
</head>

<body>

    <?php include './common/header.php'; ?>

    <main>
        <?php
        include './common/breadcrumb.php';
        ?>
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <form method="post" class="login__form" >
                            <div class="login__title">
                                <h3>Chào mừng quay trở lại!</h3>
                                <p>Bạn có thể đăng nhập bằng tên tài khoản của mình.</p>
                                <?php
                                if (!empty($error_message)) {
                                    echo '<p class="color--instagram" style="color:red">' . $error_message . '</p>';
                                }
                                ?>
                                <!-- <div id="error-message" style="color: red;"></div> -->
                            </div>
                            <div class="login__body">
                                <div class="login__group">
                                    <label for="username" class="mb-2">Tên tài khoản</label>
                                    <input id="username" type="text" class="form-control " name="username" placeholder="Nhập tên tài khoản" autocomplete="username">
                                </div>
                                <div class="login__group">
                                    <label for="password" class="mb-2">Mật khẩu</label>
                                    <input id="password" type="password" class="form-control " name="password" placeholder="Nhập mật khẩu" autocomplete="password">
                                </div>
                                <div class="login__group">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label for="remember" class="label_text">Nhớ đăng nhập</label>
                                </div>
                                <div class="login__group">
                                    <button type="submit" name="submit" class="btn btn-sm btn__theme">Đăng nhập</button>
                                </div>
                                <div class="login__assist">
                                    <p><a href="#">Quên mật khẩu?</a></p>
                                    <p>Chưa có <a href="<?php echo ROUTES['user_register'] ?>">tài khoản</a>?</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");

            if (username.trim() === '' || password.trim() === '') {
                errorMessage.innerText = 'Vui lòng nhập đầy đủ thông tin';
                return false;
            }
        }
    </script> -->

    <?php include './common/footer.php'; ?>

</body>

</html>