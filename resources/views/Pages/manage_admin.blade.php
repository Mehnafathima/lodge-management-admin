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
                        <h5 class="mb-0">{{ isset($user) ? 'Edit Admin' : 'Add New Admin' }}</h5>
                    </div>
                    <div class="card-body">
                        <form id="unitForm">
                            @csrf
                            @if(isset($user))
                            @method('POST')
                            @endif
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Admin Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-name" class="form-control" name="name" value="{{ isset($user) ? $user->name : '' }}" required>
                                    <div class="invalid-feedback"> Please enter a admin name.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" id="bs-validation-email" name="email" class="form-control email" placeholder="Enter your email" value="{{ isset($user) ? $user->email : '' }}" />
                                    <div class="invalid-feedback" id="email-feedback"> Please enter a valid email address.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-password42">Password</label>
                                <div class="col-sm-10 form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" name="password" class="form-control" id="basic-default-password12" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password12" />
                                            <label for="basic-default-password12">Password</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                    <div class="invalid-feedback"> Please enter a valid password.</div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Branch</label>
                                <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1" name="branch" aria-label="Default select example">
                                <option value="">Select a Branch</option>
                                    @foreach($branches as $branch)
                                    <option value="{{ $branch->BN_Id }}" {{ isset($user) && $user->branch == $branch->BN_Id ? 'selected' : '' }}>
                                        {{ $branch->BN_Name }}
                                    </option>
                                    @endforeach

                                </select>
                                </div>
                            </div>
                            <div class="row mb-3 mt-2">
                                <label class="col-sm-2 col-form-label" for="status-checkbox">Active</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" name="status" value="1" type="checkbox" id="flexSwitchCheckDefault" {{ isset($user) && $user->status == 1 ? 'checked' : '' }} />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" id="saveUnit">{{ isset($user) ? 'Update' : 'Save' }}</button>
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
                    url: "{{ isset($user) ? route('users.update', ['id' => $user->id]) : route('users.store') }}",
                    type: "{{ isset($user) ? 'POST' : 'POST' }}",
                    data: new FormData($('#unitForm')[0]),
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        console.log('Success:', data);
                        setTimeout(function() {

                            window.location.href = "{{ route('users.index') }}";
                         
                        }, 2000); // 2000 milliseconds (2 seconds) delay
                        $('#saveUnit').prop('disabled', false);
                            $('#unitForm')[0].reset();
                            toastr.success('Admin saved successfully', 'Success');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', xhr.responseText);
                        $('#saveUnit').prop('disabled', false);


                        // Handle validation errors
                        if (xhr.status === 422) {
                            var errors = JSON.parse(xhr.responseText).errors;

                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').text('');

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