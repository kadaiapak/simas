<?php 

namespace App\Models;

use CodeIgniter\Model;

class NomorSuratModel extends Model
{
    protected $table = 'nomor_surat';
    protected $primaryKey = 'id_nomor_surat';

    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_nomor_surat',
        'nomor_surat',
        'id_departemen',
        'judul',
        'tujuan_surat',
        'status',
        'file',
        'created_at',
        'updated_at',
    ];

    public function getAllUnionAll($departemen = null) 
    {
        if($departemen != null) {
            $build = $this->db->query(
                "SELECT uuid, no_surat, created_at, departemen_pengajuan , status ,'Surat Validator Instrumen' AS keterangan 
                FROM surat_validator_instrumen
                WHERE surat_validator_instrumen.departemen_pengajuan = $departemen
                AND (status = 3 OR status = 4 OR status = 5)
                    UNION ALL
                SELECT uuid, no_surat, created_at, departemen_pengajuan, status,'Surat Validasi Instrumen' AS keterangan
                FROM surat_validasi_instrumen
                WHERE surat_validasi_instrumen.departemen_pengajuan = $departemen
                AND (status = 3 OR status = 4 OR status = 5)
                    UNION ALL
                SELECT uuid, no_surat,created_at, departemen_pengajuan, status, 'Surat Izin Penelitian' AS keterangan
                FROM surat_izin_penelitian
                WHERE surat_izin_penelitian.departemen_pengajuan = $departemen
                AND (status = 3 OR status = 4 OR status = 5)
                    UNION ALL
                SELECT uuid, no_surat, created_at, departemen_pengajuan, status, 'Surat Izin Observasi Penelitian' AS keterangan
                FROM surat_izin_observasi_penelitian
                WHERE surat_izin_observasi_penelitian.departemen_pengajuan = $departemen
                AND (status = 3 OR status = 4 OR status = 5)
                    UNION ALL
                SELECT uuid, no_surat, created_at, departemen_pengajuan, status, 'Surat Izin Observasi Matakuliah' AS keterangan
                FROM surat_izin_observasi_matakuliah
                WHERE surat_izin_observasi_matakuliah.departemen_pengajuan = $departemen
                AND (status = 3 OR status = 4 OR status = 5)
                ORDER BY cast(no_surat as unsigned) DESC");
            $result = $build->getResultArray();
            return $result;
        }
        // $build = $this->db->query(
        //     "SELECT no_surat
        //     FROM surat_validator_instrumen
        //     JOIN skripsi ON bimbingan.bb_skripsi_uuid = skripsi.skripsi_uuid
        //     JOIN profil ON bimbingan.bb_nim = profil.prf_nim_portal
        //     WHERE skripsi.dosen_pembimbing = $nidn
        //     GROUP BY bimbingan.bb_nim, skripsi.skripsi_uuid, bimbingan.bb_skripsi_uuid");
        // $result = $build->getResultArray();
        // return $result;
    }
 
}

?>