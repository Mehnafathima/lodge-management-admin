@extends('Layout.base')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
      <h4>Customers</h4>
    <div class="card">
      <h5 class="card-header">Manage Customers</h5>
      <div class="table-responsive text-nowrap m-3">
      <table class="table table-bordered" id="jobsTable">
    <thead class="table-light">
        <tr>
            <th class="text-center">#</th>
            <th>Customer</th>
            <th>Place</th>
            <th>Phone</th>
            <th>Status</th>
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
      ajax: "{{ route('customers.datatables') }}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'DT_RowIndex'
        },
        
        {
          data: 'CS_Name',
          name: 'CS_Name'
        },
        {
          data: 'CS_Name',
          name: 'CS_Name'
        },
        {
          data: 'CS_Phone',
          name: 'CS_Phone'
        },
          {
          data: 'CS_Name',
          name: 'CS_Name'
        },
        {
          data: 'CS_Name',
          name: 'CS_Name'
        },
      
      ]
    });
  
  });
</script>
@endsection