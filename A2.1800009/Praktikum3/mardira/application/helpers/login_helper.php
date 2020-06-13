<?php
function cek_session()
{
    $CI = &get_instance();
    $session = $CI->session->user_data('email');
    if ($session= NULL){
        redirect('login');
    }
}