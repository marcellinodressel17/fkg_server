<?php

function is_logged_in_school(){
    $ci = get_instance();

    if(!$ci->session->userdata('username')){
        redirect('/project/school/auth');
    }else{
        $user_type = $ci->session->userdata('user_type');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['id_menu' => $user_type])->row_array();
        $menu_id = $queryMenu['id_menu'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'user_type' => $user_type,
            'menu_id' => $menu_id
        ]);

        if($userAccess->num_rows() < 1){
            redirect('/project/school/auth/blocked');
        }
    }
}