<?php 

$link = mysqli_connect('localhost', 'buchne7l_1', 'hmw89Nt%', 'buchne7l_1');

if (mysqli_connect_errno())
{
    echo 'Error ('. mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}