@extends('layouts.app')
  
@section('title', 'Daftar Bank Rekening')
  
@section('contents')
    <h1 class="mb-0">Isi Data</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_bank_rekening" class="form-control" placeholder="Kode Bank Rekening">
            </div>
            <div class="col">
                <input type="text" name="nama_bank_rekening" class="form-control" placeholder="Nama Bank Rekening">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nomor_rekening" class="form-control" placeholder="Nomor Rekening">
            </div>
            <div class="col">
                <textarea class="form-control" name="nama_pemilik_rekening" placeholder="Nama Pemilik Rekening"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="cabang_bank" class="form-control" placeholder="Cabang Bank">
            </div>
            <div class="col">
                <textarea class="form-control" name="mata_uang" placeholder="Mata Uang"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </div>
    </form>
@endsection
