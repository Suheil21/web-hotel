@php
$photo = isset($room) ? $room->photo : null;
$roomname = isset($room) ? $room->name : null;
$description = isset($room) ? $room->description : null;
$capacity = isset($room) ? $room->capacity : null;
$status = isset($room) ? $room->status : null;

$url = isset($room) ? "/admin/room/$room->id" : '/admin/room';
$method = isset($room) ? 'PUT' : 'POST';
$title = isset($room) ? 'Ubah Data Ruangan' : 'Tambah Data Ruangan';
@endphp

@extends('layouts.app', ['title' => $title, 'page' => 'room'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('room.index') }}">List Ruangan</a>
    </li>
    <li class="breadcrumb-item active">{{ $title }}</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="card">
  <div class="card-header">{{ $title }}</div>
  <div class="card-body">
    <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method($method)
      <div class="mb-3">
        <label for="formFile" class="form-label">Foto Preview Ruangan</label>
        <div class="input-group input-group-merge">
          <span id="formFile2" class="input-group-text"><i class="bx bx-file"></i></span>
          <input class="form-control" name="photo" type="file" value="{{ $photo }}" id="formFile" aria-describedby="formFile2" accept="image/*">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-roomname">Nama Ruangan</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-roomname2" class="input-group-text"><i class="bx bx-user"></i></span>
          <input type="text" class="form-control" id="basic-icon-default-roomname" name="name" value="{{ $roomname }}" placeholder="Meeting ..." aria-label="Meeting ..." aria-describedby="basic-icon-default-roomname2" required />
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-description">Deskripsi</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-description2" class="input-group-text"><i class="bx bx-comment"></i></span>
          <textarea id="basic-icon-default-description" class="form-control" name="description" placeholder="Ruangan ..." aria-label="Ruangan ..." aria-describedby="basic-icon-default-description2" required>{{ $description }}</textarea>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="capacity-input">Kapasitas</label>
        <div class="input-group input-group-merge">
          <span id="capacity-input2" class="input-group-text"><i class="bx bx-group"></i></span>
          <input class="form-control" type="number" name="capacity" value="{{ $capacity }}" min="2" id="capacity-input" aria-describedby="capacity-input2" required />
        </div>
      </div>
      <div class="mb-3">
        <label for="status-input" class="form-label">Status</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-room2" class="input-group-text">Pilih Status Ruangan</span>
          <select class="form-select" name="status" id="basic-icon-default-room">
            <option selected="">Choose...</option>
            <option value="able" @if($status=='able' ) selected @endif>Bisa dipakai</option>
            <option value="disable" @if($status=='disable' ) selected @endif>Tidak bisa dipakai / dalam perbaikan</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
</div>
@endsection