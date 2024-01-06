<?php
$website_domain ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$post_url = $_SERVER['REQUEST_URI'];
$domain = $_SERVER['HTTP_HOST'];
$hakibavuong = '';
function cache() { 
 return '?'.bin2hex(random_bytes(3));   
}
$changepages = basename($_SERVER['REQUEST_URI'], '.php');
$title = "Fakebill.Khangapi.site - Trang website fake bill chuyển khoản miễn phí";
$description = "Fakebill.Khangapi.site - Trang chủ fake bill Vietinbank, Mbbank, Momo, Vietcombank, v.v.v";
$keyword = "Khangapi.site, khangapi .site, fakebill khangapi.site, fakebill ngân hàng, khangapi fakebill, fakebill.khangapi.site, website fake bill";
$iconshortcut = "https://i.pinimg.com/564x/72/e0/31/72e031faf70cc0720832896ce648d279.jpg";
$imgreviews = "https://i.imgur.com/Idzw0iv.jpg";
if ($changepages == 'fake-bill-vietinbank') {
    $title = "Fakebill - Ngân Hàng VietinBank";
    $description = "Fakebill.Khangapi.site - Trang fake bill VietinBank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.com/Gpi6GAL.png";
}elseif ($changepages == 'fake-bill-acb-bank') {
    $title = "Fakebill - Ngân Hàng ACB Bank";
    $description = "Fakebill - Trang fake bill ACB Bank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.com/jmny07x.png";
}elseif ($changepages == 'fake-bill-mbbank') {
    $title = "Fakebill - Ngân Hàng MBBank";
    $description = "Fakebill.Khangapi.site - Trang fake bill MBBank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.com/U3dfbWY.png";
}elseif ($changepages == 'fake-bill-techcombank') {
    $title = "Fakebill - Ngân Hàng Techcombank";
    $description = "Fakebill.Khangapi.site - Trang fake bill Techcombank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.com/hfGMsUh.png";
}elseif ($changepages == 'fake-bill-vietcombank') {
    $title = "Fakebill - Ngân Hàng Vietcombank";
    $description = "Fakebill.Khangapi.site - Trang fake bill Vietcombank chuyển khoản miễn phí";
    $imgreviews = "https://i.imgur.com/1cuWvw4.png";
}
$daysOfWeek = [
    'Sunday' => 'Chủ Nhật',
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy'
];
$timestamp = time();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date('H:i l d/m/Y', $timestamp);
$now = strtr($now, $daysOfWeek);
?>