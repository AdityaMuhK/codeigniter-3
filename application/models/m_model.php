<?php

class M_model extends CI_Model
{
    function get_data($tabel)
    {
        return $this->db->get($tabel);
    }

    function getwhere($tabel, $data)
    {
        return $this->db->get_where($tabel, $data);
    }
    public function delete($tabel, $field, $id)
    {
        $data = $this->db->delete($tabel, array($field => $id));
        return $data;
    }
    public function tambah_data($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return ($data);
    }

    public function get_siswa_foto_by_id($id_siswa)
    {
        $this->db->select('foto');
        $this->db->from('siswa');
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->foto;
        } else {
            return false;
        }
    }
    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_by_nisn($nisn)
    {
        $this->db->select('id_siswa');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id_siswa;
        } else {
            return false;
        }
    }
    public function getDataPembayaran()
    {
        $this->db->select(
            'pembayaran.id, pembayaran.jenis_pembayaran, pembayaran.total_pembayaran, siswa.nama_siswa, kelas.tingkat_kelas, kelas.jurusan_kelas'
        );
        $this->db->from('pembayaran');
        $this->db->join(
            'siswa',
            'siswa.id_siswa = pembayaran.id_siswa',
            'left'
        );
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id', 'left');
        $query = $this->db->get();

        return $query->result();
    }
    public function getDataSiswa()
    {
        // Assuming you are using some kind of database query
        // Make sure to include id_kelas in your SELECT statement
        $query = $this->db->query("SELECT id_siswa, nama_siswa, nisn, gender, id_kelas, foto FROM siswa");
        return $query->result();
    }

    public function getKelasByTingkatJurusan($tingkat_kelas, $jurusan_kelas)
    {
        $this->db->select('id');
        $this->db->where('tingkat_kelas', $tingkat_kelas);
        $this->db->where('jurusan_kelas', $jurusan_kelas);
        $query = $this->db->get('kelas');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->id;
        } else {
            return false;
        }
    }

    // Fungsi untuk mengambil nama mapel berdasarkan id_mapel
    public function get_mapel_by_id($id_mapel)
    {
        // Gantilah 'mapel' dengan nama tabel mapel Anda
        $this->db->select('nama_mapel');
        $this->db->where('id', $id_mapel);
        $query = $this->db->get('mapel');

        // Periksa apakah query berhasil
        if ($query->num_rows() > 0) {
            return $query->row(); // Mengembalikan hasil query
        } else {
            return null; // Jika tidak ada data yang ditemukan
        }
    }
}
?>