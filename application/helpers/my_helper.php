<?php
function convRupiah($value)
{
    return 'Rp. ' . number_format($value);
}

function tampil_full_siswa_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id_siswa', $id)->get('siswa');
    foreach ($result->result() as $c) {
        $stmt = $c->nama_siswa;
        return $stmt;
    }
}
?>