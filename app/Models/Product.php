<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'kode_bank_rekening',
        'nama_bank_rekening',
        'nomor_rekening',
        'nama_pemilik_rekening',
        'cabang_bank',
        'mata_uang',
    ];
}