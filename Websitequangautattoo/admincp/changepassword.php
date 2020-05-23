<?php
 
// Kết nối database, session, general info
		include('modules/config.php');
 
// Nếu không tồn tại $user
if (!$username)
{
    header('Location: index.php'); // Di chuyển đến trang chủ
}
 
// Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
$old_pass = @md5($_POST['old_pass']);
$new_pass = @$_POST['new_pass'];
$re_new_pass = @$_POST['re_new_pass'];
 
// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formChangePass .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formChangePass .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formChangePass .alert').attr('class', 'alert alert-success');</script>";
 
// Nếu mật khẩu cũ nhậ đúng
if ($old_pass != $data_user['password'])
{
    echo $show_alert.'Mật khẩu cũ nhập không chính xác, đảm bảo đã tắt caps lock.';
}
// Ngược lại nếu độ dài mật khẩu mới nhỏ hơn 6 ký tự
else if (strlen($new_pass) < 6)
{
    echo $show_alert.'Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.';
}
// Ngược lại nếu mật khẩu mởi nhập lại không khớp
else if ($new_pass != $re_new_pass)
{
    echo $show_alert.'Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock.';
}
// Ngược lại
else
{
    $new_pass = md5($new_pass); // Mã hoá mật khẩu sang MD5
    // Lệnh SQL đổi mật khẩu
    $sql_change_pass = "UPDATE admin SET password = '$new_pass' WHERE id_admin = '$data_user[id_admin]'";
    // Thực hiện truy vấn
    $db->query($sql_change_pass);
    // Giải phóng kết nối
    $db->close();
     
    // Hiển thị thông báo và tải lại trang
    echo $show_alert.$success_alert.'Đổi mật khẩu thành công.
        <script>
            location.reload();
        </script>
    ';
}
 
?>

<form action="" method="post">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Đổi mật khẩu</h3>
            <form method="POST" onsubmit="return false;" id="formChangePass">
                <div class="form-group">
                    <label for="user_signin">Mật khẩu cũ</label>
                    <input type="password" class="form-control" id="old_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="new_pass">
                </div>
                <div class="form-group">
                    <label for="user_signin">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" id="re_new_pass">
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_change_pass">
                    <span class="glyphicon glyphicon-ok"></span> Thay đổi
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>
</form>

