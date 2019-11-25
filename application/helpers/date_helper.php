<?php
function get_current_date($format = null)
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
    if (!is_null($format))
        return $date->format($format);
    return $date->format('Y-m-d H:i:s ');
}

function get_current_date_img()
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
    if (isset($format))
        return $date->format($format);
    return $date->format('YmdHis');
}

function base_url_img()
{
    return 'http://localhost/Silab_UGM/assets/gambar_alat/';
}
