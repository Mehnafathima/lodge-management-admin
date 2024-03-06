@extends('Layout.base')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center py-3 mb-2">
      <h4>Product</h4>
      <div class="text-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary me-2">
          <span class="tf-icons mdi mdi-plus me-1"></span> Add new
        </a>
      </div>
    </div>
    <div class="card">
      <h5 class="card-header">Manage Products</h5>
      <div class="table-responsive text-nowrap m-3">
      <table class="table table-bordered" id="jobsTable">
    <thead class="table-light">
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Description</th>
            <th class="text-center">Image</th>
            <th class="text-center">Amount</th>
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
      ajax: "{{ route('products.datatables') }}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'DT_RowIndex'
        },
        {
          data: 'PD_Name',
          name: 'PD_Name'
        },
        {
          data: 'PD_Desc',
          name: 'PD_Desc'
        },
        {
          data: 'PD_Img',
          name: 'PD_Img'
        },
        {
          data: 'PD_Price',
          name: 'PD_Price'
        },
        {
          data: 'actions',
          name: 'actions'
        },
      ]
    });
    $(document).on('click', '.edit-product', function() {
      var id = $(this).data('id');
    window.location.href = '{{ url("admin/products") }}/edit/' + id;
    });

    $(document).on('click', '.delete-product', function() {
      var id = $(this).data('id');

      $.ajax({
        url: '{{ url("admin/products/delete") }}/' + id,
        method: 'GET',
        data: {
          PD_Status: 3
        },
        success: function() {
          toastr.success('Product deleted successfully', 'Success');
          $('#jobsTable').DataTable().ajax.reload();
        }
      });
    });
  });
</script>
@endsection