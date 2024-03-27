@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Tagihan</h3>
                <form action="/tagihanExecuting/save" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="vendor" class="form-label text-white">Vendor</label>
                            <input type="text" name="vendor" id="vendor" class="form-control mb-3 text-white" required>
                        </div>
                        <div class="col-md-4">
                            <label for="deskripsi" class="form-label text-white">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-3 text-white" required>
                        </div>
                        <div class="col-md-4">
                            <label for="curr" class="form-label text-white">Curr</label>
                            <input type="text" name="curr" id="curr" class="form-control mb-3 text-white" required>
                        </div>
                        <div class="col-md-4">
                            <label for="nilai_tagihan" class="form-label text-white">Nilai Tagihan</label>
                            <input type="text" name="nilai_tagihan" id="nilai_tagihan" class="form-control mb-3 text-white" required>
                        </div>
                    </div>   
                    <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                    <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection