@extends('layouts.app')

@section('title', 'Bank Rekening')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Kode Bank Rekening</th>
                <th>Nama Bank Rekening</th>
                <th>Nomor Rekening</th>
                <th>Nama Pemilik Rekening</th>
                <th>Cabang Bank</th>
                <th>Mata Uang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if($products->count() > 0)
            @foreach($products as $product)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $product->kode_bank_rekening }}</td>
                    <td class="align-middle">{{ $product->nama_bank_rekening }}</td>
                    <td class="align-middle">{{ $product->nomor_rekening }}</td>
                    <td class="align-middle">{{ $product->nama_pemilik_rekening }}</td>
                    <td class="align-middle">{{ $product->cabang_bank }}</td>
                    <td class="align-middle">{{ $product->mata_uang }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('products.show', $product->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('products.edit', $product->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">No products found</td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection
