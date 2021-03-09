@extends('layout')
@section('title', 'HomePage')

@section('konten')
<header class="jumbotron jumbotron-fluid">
    <div class="container-fluid text-center">
        <h1 class="display-3">Tugas</h1>
        <p class="lead pb-4">Membuat Website sederhana menggunakan PHP, Bootstrap dan Laravel dengan fitur Registrasi pelanggan</p>
    </div>
</header>

<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-warning" data-toggle="modal" id="btn-tambah-pelanggan">
        Tambah Pelanggan
    </button>

    <div style="margin-bottom: 30px; margin-top: 30px;">
        <div class="alert alert-primary" id="alert" style="display: none;" role="alert">
            Belum ada pelanggan
        </div>
        <div class="row row-cols-1 row-cols-md-3" id="list-pelanggan">

        </div>
    </div>
</div>
@endsection

@section('modal')
@include('tugas.modal.modalTambahPelanggan')
@include('tugas.modal.modalDetailPelanggan')
@endsection

@section('my-script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('assets/js/pelanggan.js') }}"></script>
@endsection
