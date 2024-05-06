<?php
class Model_dlemas extends CI_Model
{
    // Method untuk input Data
    public function inputSiswa(
        $nama           = null, 
        $nis            = null, 
        $kelas          = null, 
        $tanggal_lahir  = null, 
        $tempat_lahir   = null,
        $alamat         = null, 
        $jenis_kelamin  = null, 
        $agama          = null
    )
    
    {
        $data = [
            'nama'          => $nama,
            'nis'           => $nis,
            'kelas'         => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir'  => $tempat_lahir,
            'alamat'        => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama'         => $agama
        ];
        return $data;
    }
}