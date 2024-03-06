@extends('Layout.base')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center py-3 mb-2">
      <h4>Brands</h4>
      <div class="text-end">
        <a href="{{ route('brands.create') }}" class="btn btn-primary me-2">
          <span class="tf-icons mdi mdi-plus me-1"></span> Add new
        </a>
      </div>
    </div>
    <div class="card">
      <h5 class="card-header">Manage Brands</h5>
      <div class="table-responsive text-nowrap m-3">
      <table class="table table-bordered" id="jobsTable">
    <thead class="table-light">
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th >Status</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Table rows will be dynamically generated -->
    </tbody>
</table>
      </div>
    </div>
  </div>
  <!-- / Content -->
  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
@endsection
@section('jsscript')
<script>
  $(document).ready(function() {

    var jobsTable = $('#jobsTable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('brands.datatables') }}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'DT_RowIndex'
        },
        {
          data: 'BR_Name',
          name: 'BR_Name'
        },
        {
          data: 'BR_Status',
          name: 'BR_Status'
        },
        {
          data: 'actions',
          name: 'actions'
        },
      ]
    });
    $(document).on('click', '.edit-brand', function() {
      var unId = $(this).data('id');
    window.location.href = '{{ url("admin/brands") }}/edit/' + unId;
    });

    $(document).on('click', '.delete-brand', function() {
      var unId = $(this).data('id');

      $.ajax({
        url: '{{ url("admin/brands/delete") }}/' + unId,
        method: 'GET',
        data: {
          JB_Status: 3
        },
        success: function() {
          // Reload the DataTable
          toastr.success('Brand deleted successfully', 'Success');
          $('#jobsTable').DataTable().ajax.reload();
        }
      });
    });
  });
</script>
@endsection