<?php
function callApiPost($url, $data)
{
    $query = http_build_query($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function callApiGet($url, $data)
{
    $url = $url . '?' . http_build_query($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function base_admin_url($uri = null)
{
    $url = base_url('admin/');
    if (!empty($uri)) {
        $url = $url . $uri . "/";
    }
    return $url;
}


function convertToDate($year, $month, $day) {
    // Tạo đối tượng DateTime với các thông số được cung cấp
    $date = new DateTime("$year-$month-$day");

    // Sử dụng phương thức format để chuyển đổi thành định dạng Y-m-d
    $formattedDate = $date->format('Y-m-d');

    return $formattedDate;
}
