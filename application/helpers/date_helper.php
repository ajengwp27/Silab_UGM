<?php
function get_current_date()
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
    if(isset($format))
        return $date->format($format);
    return $date->format('Y-m-d H:i:s ');
}
?>