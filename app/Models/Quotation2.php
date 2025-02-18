<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation2 extends Model
{
    // add into tabel DB
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_quotation_order'; // Set the table name
    protected $primaryKey = 'kd_quotation'; // Adjust the primary key if needed
    protected $fillable = [
        'kd_step',
        'kd_quotation',
        'product',
        'qty',
        'kerah_kancing',
        'bb_melengkung',
        'lengan_raglan',
        'lengan_panjang',
        's2xl',
        's3xl',
        's4xl',
        'celana_printing',
        'celana_pro',
        'kaoskaki',
        'bahan_embos',
        'logo_3d',
        'kerah_rib',
        'tangan_rib',
        'kategori_harga',
        'harga',
        'total_harga',
        'tipe_kualitas',
        // Add other columns as needed
    ];
    public $timestamps = false; // Disable timestamps
}
