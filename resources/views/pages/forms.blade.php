@extends('layouts.master')

@section('section-header-name', 'Form Data Perjalanan')

@section('card-title', 'Inputkan data Anda')

@section('card-content')

    <form method="POST" action="/simpanPerjalanan">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" class="form-control" name="tanggal">
        </div>

        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="time" id="jam" class="form-control" name="jam">
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <div class="input-group">
                <input type="text" class="form-control" name="lokasi" id="lokasi">
                <div class="input-group-append">

            </div>
        </div>

        <div class="form-group">
            <label for="suhu">Suhu</label>
            <div class="input-group">
                <input type="number" class="form-control" id="suhu" name="suhu">
                <div class="input-group-append">
                    <span class="input-group-text">℃</span>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>

    </form>
@endsection
