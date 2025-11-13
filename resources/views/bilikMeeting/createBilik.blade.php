@extends('layout.induk')

@section('breadcrumb')
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Bilik Mesyuarat</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Bilik Mesyuarat</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- <div class="col-5 align-self-center">
            <div class="customize-input float-end">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected>Aug 23</option>
                    <option value="1">July 23</option>
                    <option value="2">Jun 23</option>
                </select>
            </div>
        </div> --}}
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horizontal Grid</h4>

                    <form action="#">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Bilik Mesyuarat </label>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nama Bilik Mesyuarat" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lokasi </label>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Lokasi Bilik Mesyuarat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Status </label>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Status Bilik Mesyuarat">
                                    </div>
                                </div>
                            </div>
                        </div><p></p>
                        <div class="form-actions">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Hantar</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
