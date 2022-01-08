// Hiển thị thông báo
$(document).ready(function() {
    $("#btn_hienthi_thongbao").click(function() {
$("#show_thong_bao").toggle();
    });
});

$("#click_container").click(function() {
    $("#show_thong_bao").hide();
});

$("a[id!='btn_hienthi_thongbao']").click(function() {
    $("#show_thong_bao").hide();
});

// Hiển thị thông báo
$(document).ready(function() {
    $("#btn_hienthi_friend").click(function() {
        $("#show_friend").toggle();
    });
});

$("#click_container").click(function() {
    $("#show_friend").hide();
});

$("a[id!='btn_hienthi_friend']").click(function() {
    $("#show_friend").hide();
});

// Hiển thị giỏ hàng
$(document).ready(function() {
    $("#btn_hienthi_giohang").click(function() {
$("#show_gio_hang").toggle();
    });
});

$("#click_container").click(function() {
    $("#show_gio_hang").hide();
});

$("a[id!='btn_hienthi_giohang']").click(function() {
    $("#show_gio_hang").hide();
});


// Hiển thị đăng nhập
$(document).ready(function() {
    $("#btn_hienthi_dangnhap").click(function() {
        $("#show_dang_nhap").toggle();
    });
});

$("#click_container").click(function() {
    $("#show_dang_nhap").hide();
});

$("a[id!='btn_hienthi_dangnhap']").click(function() {
    $("#show_dang_nhap").hide();
});


 // Thay đổi chế độ  
 $("#btn_thaydoi_chedo").click(function() {
     $("body").css("background-color", "black");
 });

//  Show option
$(".btn_class_showOption").click(function(){
    $(".div_container_option").toggle();
});

// show tìm kiếm
$(".btn_timkiemnangcao").click(function(){
    $("#show_timkiem").toggle();
    $("#btn_datLai").toggle();
    $("#btn_timkiemnangcao").toggle();
    $("#btn_thugon").toggle();
});