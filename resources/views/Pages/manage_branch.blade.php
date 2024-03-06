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
                        <h5 class="mb-0">{{ isset($branch) ? 'Edit Branch' : 'Add New Branch' }}</h5>
                    </div>
                    <div class="card-body">
                        <form id="unitForm">
                            @csrf
                            @if(isset($branch))
                            @method('POST')
                            @endif

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Branch Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-name" class="form-control" name="branch_name" value="{{ isset($branch) ? $branch->BN_Name : '' }}" required>
                                    <div class="invalid-feedback"> Please enter a Branch name.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                                <div class="col-sm-10">
                                    <textarea id="place" class="form-control" name="place">{{ isset($branch) ? $branch->BN_Place : '' }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Email</label>
                                <div class="col-sm-10">
                                    <div class="form-floating form-floating-outline mb-4">
                                        <input class="form-control" type="email" name="email" placeholder="john@example.com" id="html5-email-input" value="{{ isset($branch) ? $branch->BN_Email : '' }}" />
                                        <label for="html5-email-input">Email</label>
                                        <div class="invalid-feedback" id="email-feedback"> Please enter a valid email address.</div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-name" class="form-control" name="phone" value="{{ isset($branch) ? $branch->BN_Phone : '' }}">

                                </div>
                            </div>
                            <div class="row mb-3 mt-2">
                                <label class="col-sm-2 col-form-label" for="status-checkbox">Active</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckDefault" {{ isset($branch) && $branch->BN_Status == 1 ? 'checked' : '' }} />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" id="saveUnit">{{ isset($branch) ? 'Update' : 'Save' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('jsscript')

    <script>
        $(document).ready(function() {

            $('#saveUnit').on('click', function(event) {
                event.preventDefault();

                $('#saveUnit').prop('disabled', true);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ isset($branch) ? route('branches.update', ['id' => $branch->BN_Id]) : route('branches.store') }}",
                    type: "{{ isset($branch) ? 'POST' : 'POST' }}",
                    data: new FormData($('#unitForm')[0]),
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        console.log('Success:', data);
                        setTimeout(function() {
                            window.location.href = "{{ route('branches.index') }}";
                        }, 2000);
                        $('#saveUnit').prop('disabled', false);
                            $('#unitForm')[0].reset();
                            toastr.success('Branch saved successfully', 'Success');
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