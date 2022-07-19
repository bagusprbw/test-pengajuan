<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengajuan extends Model
{
    use HasFactory;
    protected $table = "data_pengajuan";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','nama_ketua','jumlah_rombongan','telp','email','tujuan','maksud_tujuan','bukti_surat'];
}
