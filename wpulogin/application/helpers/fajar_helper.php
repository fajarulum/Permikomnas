<?php 

function cek_login()
{
	$ci = get_instance(); //untuk memanggil library ci di dalam fungsi instan di codeigniter
	if(!$ci->session->userdata('email')){ //mengecek jika belum login
		redirect('auth');
	}else{
		$role_id = $ci->session->userdata('role_id');
		$menu = $ci->uri->segment(1);

		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();

		$menu_id = $queryMenu['id'];

		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		if($userAccess->num_rows() < 1){
			redirect('auth/blocked');
		}
	}
}
