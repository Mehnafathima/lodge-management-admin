@extends('Layout.base')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">{{ isset($unit) ? 'Edit Room' : 'Add New Room' }}</h5>
                    </div>
                    <div class="card-body">
                        <form id="unitForm">
                            @csrf
                            @if(isset($unit))
                            @method('POST')
                            @endif

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Room Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-name"   class="form-control"  name="unit_name" value="{{ isset($unit) ? $unit->RM_Name : '' }}" required>
                                    <div class="invalid-feedback"> Please enter a room name.</div>
                                </div>
                        
                            <div class="row mb-3 mt-2">
                                <label class="col-sm-2 col-form-label" for="status-checkbox">Active</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch mb-2">
                                    <input type="checkbox" id="active" class="form-check-input" value="1"  name="active" {{ isset($unit) && $unit->RM_Status == 1 ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" id="saveUnit">{{ isset($unit) ? 'Update' : 'Save' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <!-- / Content -->
<!-- / Layout wrapper -->
@endsection
@section('jsscript')

<script>
    $(document).ready(function() {
    
        $('#saveUnit').on('click', function(event) {
            event.preventDefault();
            $('#saveUnit').prop('disabled', true);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ isset($unit) ? route('units.update', ['id' => $unit->RM_Id]) : route('units.store') }}",
            type: "{{ isset($unit) ? 'POST' : 'POST' }}",
            data: new FormData($('#unitForm')[0]),
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(data) {
                console.log('Success:', data);
                setTimeout(function() {
                    window.location.href = "{{ route('units.index') }}";
                  
                }, 2000); // 2000 milliseconds (2 seconds) delay
                $('#saveUnit').prop('disabled', false);
                    $('#unitForm')[0].reset();

                    toastr.success('Room saved successfully', 'Success');
            },
            error: function(xhr, status, error) {
                    console.error('Error:', xhr.responseText);
                    $('#saveUnit').prop('disabled', false);

                    // Handle validation errors
                    if (xhr.status === 422) {
                        var errors = JSON.parse(xhr.responseText).errors;

                        // Remove previous error messages
                        $('.is-invalid').removeClass('is-invalid');
                        $('.invalid-feedback').text('');

                        // Display validation errors in your form
                        for (var field in errors) {
                            var inputField = $('[name="' + field + '"]');
                            inputField.addClass('is-invalid');
                            inputField.siblings('.invalid-feedback').text(errors[field][0]);
                        }
                    }
                }
        });

});

    });
</script>
@endsection