@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Beban Bahan Cost Executing </h2>
                <form action="/costExecuting/{{ $costExecuting->id }}/update" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Object</label>
                            <input type="text" name="object" id="" class="form-control mb-3 text-white" value="{{ $costExecuting->object }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Budget</label>
                            <input type="text" name="budget" id="" class="form-control mb-3 text-white" value="{{ $costExecuting->budget }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Assigned</label>
                            <input type="text" name="assigned" id="" class="form-control mb-3 text-white" value="{{ $costExecuting->assigned }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Available</label>
                            <input type="text" name="available" id="" class="form-control mb-3 text-white" value="{{ $costExecuting->available }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Date Update</label>
                            <input type="date" name="dateUpdate" id="" class="form-control mb-3 text-white" value="{{ $costExecuting->dateUpdate }}" required>
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