@extends('layouts.master')

@section('section-header-name', "Data Perjalanan")

@section('card-title', "Data perjalanan Anda")

@section('card-content')

@php
  $no=1
@endphp

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Tanggal
          <button type="button" class="btn dropdown-toggle float-right text-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          </button>
          <form action="/sort" method="GET">
          @csrf
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
          <button class ="dropdown-item" name="tanggalDesc"value="Desc" href="/sort">Terbaru</button>
          <button class ="dropdown-item" name="tanggalAsc"value="Asc" href="/sort">Terlama</button>
        </div></form>
        </th>
        <th scope="col">Jam <button type="button" class="btn dropdown-toggle float-right text-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </button>
        <form action="/sort" method="GET">
        @csrf
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
        <button class ="dropdown-item" name="jamDesc"value="Desc" href="/sort">Terbaru</button>
        <button class ="dropdown-item" name="jamAsc"value="Asc" href="/sort">Terlama</button>
      </div></form></th>
        <th scope="col">Lokasi</th>
        <th scope="col">Suhu <button type="button" class="btn dropdown-toggle float-right text-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </button>
        <form action="/sort" method="GET">
        @csrf
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
        <button class ="dropdown-item" name="suhuDesc"value="Desc" href="/sort">Terbaru</button>
        <button class ="dropdown-item" name="suhuAsc"value="Asc" href="/sort">Terlama</button>
      </div></form></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $peduli_diri)
      <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{ $peduli_diri->tanggal }}</td>
        <td>{{ $peduli_diri->jam }}</td>
        <td>{{ $peduli_diri->lokasi }}</td>
        <td>{{ $peduli_diri->suhu }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
