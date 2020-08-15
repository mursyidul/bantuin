<?php
    function checkSessionUser(){
        $CI =& get_instance();
        if($CI->session->userdata("biru_login") == "Y"){
            // redirect("dashboard");
        } else {
            redirect(base_url());
        }
    }
?>