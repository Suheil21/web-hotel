@extends('layouts.app', ['title' => 'List Ruangan', 'page' => 'room'])

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Pages</a>
    </li>
    <li class="breadcrumb-item active">List Ruangan</li>
  </ol>
</nav>
@endsection

@section('modal')
<!-- Small Modal -->
<div class="modal fade" id="modalAction" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-capitalize" id="title-modal">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="text-modal">
          <p>Apakah Anda yakin ingin menghapus ruangan <strong><span id="roomName"></span></strong>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <form id="deleteForm" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger text-capitalize" id="btn-modal">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">List Ruangan
    @admin
    <a href="{{ route('room.create') }}"><button class="btn rounded-pill btn-primary float-end mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
          <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
        </svg> Ruangan</button></a>
    @endadmin
  </h5>
  <div id="load-room"></div>
</div>
@endsection

@push('js')
<script>
  $(function() {
    getRoom()
  })

  async function getRoom() {
    try {
      var sectionData = $('#load-room')
      url = "{{ route('view-room') }}"
      const response = await HitData(url, null, "GET");
      sectionData.html(response)

      $("#room-table").DataTable({
        processing: true,
        order: [2, 'asc'],
        'pageLength': 4,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
      });
    } catch (error) {
      console.log(error)
    }
  }

  function openModal(room_id, room_name) {
    $('#title-modal').text('Delete Room');

    // Update the form action
    $('#deleteForm').attr('action', `room/${room_id}`);

    $('#modalAction').modal('show');

  }
</script>
@endpush