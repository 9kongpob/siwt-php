<?php

//แปลงค่าข้อมูลเป็น json format
function response_json($data , $status = 200)
{
    set_status_header($status);
    header('content-type: application/json');
    exit(json_encode($data));
}