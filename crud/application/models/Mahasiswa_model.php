<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_model {

	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahDataMahasiswa()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"nim" => $this->input->post('nim', true),
				"email" => $this->input->post('email', true),
				"jurusan" => $this->input->post('jurusan', true)
			];

			$this->db->insert('mahasiswa', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('mahasiswa');
	}

	public function detail($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubahDataMahasiswa()
	{
		$data = [
				"nama" => $this->input->post('nama'),
				"nim" => $this->input->post('nim'),
				"email" => $this->input->post('email'),
				"jurusan" => $this->input->post('jurusan')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);

}
}
