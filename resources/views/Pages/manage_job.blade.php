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
                        <h5 class="mb-0">{{ isset($job) ? 'Edit Job' : 'Add New Job' }}</h5>
                    </div>
                    <div class="card-body">
                        <form id="jobForm">
                            @csrf
                            @if(isset($job))
                            @method('POST')
                            @endif

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Job Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-name" class="form-control" name="job_name" value="{{ isset($job) ? $job->JB_Name : '' }}" required>
                                    <div class="invalid-feedback"> Please enter a job name.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="exampleFormControlSelect1" name="type" aria-label="Default select example">
                                        <option value="" {{ !isset($job) || empty($job->type) ? 'selected' : '' }}>Select a Type</option>
                                        <option value="1" {{ isset($job) && $job->JB_Type == 1 ? 'selected' : '' }}>Accessories</option>
                                        <option value="2" {{ isset($job) && $job->JB_Type == 2 ? 'selected' : '' }}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="description" class="form-control" name="description">{{ isset($job) ? $job->JB_Desc : '' }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-amount">Amount</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="text" class="form-control" id="amount" name="amount" value="{{ isset($job) ? $job->JB_Amt : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-amount">Discount</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-text">%</span>
                                        <input type="text" class="form-control" id="discount" name="discount" value="{{ isset($job) ? $job->JB_Disc : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Branch</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="exampleFormControlSelect1" name="branch" aria-label="Default select example">
                                        <option value="">Select a Branch</option>
                                        @foreach($branches as $branch)
                                        <option value="{{ $branch->BN_Id }}" {{ isset($job) && $job->BN_Id == $branch->BN_Id ? 'selected' : '' }}>
                                            {{ $branch->BN_Name }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="image-upload">Image Upload</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon03">Image</button>
                                        <input type="file" class="form-control" name="image" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" value="{{ isset($job) ? $job->JB_Img : '' }}" onchange="previewImage(this)">
                                        <div class="input-group mb-3 mt-2">
                                            <img id="imagePreview" name="imagePreview" src="{{ isset($job) && $job->JB_Img ? asset('images/' . $job->JB_Img) : asset('assets/img/download.png') }}" alt="Current Image" width="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 mt-2">
                                <label class="col-sm-2 col-form-label" for="status-checkbox">Active</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" id="active" class="form-check-input" value="1" name="active" {{ isset($job) && $job->JB_Status == 1 ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" id="saveJob">{{ isset($job) ? 'Update' : 'Save' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->
            <!-- <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic with Icons</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Company</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="mdi mdi-office-building-outline"></i></span>
                                        <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                        <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                                    </div>
                                    <div class="form-text">You can use letters, numbers & periods</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i class="mdi mdi-phone"></i></span>
                                        <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text"><i class="mdi mdi-message-outline"></i></span>
                                        <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- / Content -->
    <!-- / Layout wrapper -->
    @endsection
    @section('jsscript')

    <script>
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
        $(document).ready(function() {

            $('#saveJob').on('click', function(event) {
                event.preventDefault();
                $('#saveJob').prop('disabled', true);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ isset($job) ? route('jobs.update', ['id' => $job->JB_Id]) : route('jobs.store') }}",
                    type: "{{ isset($job) ? 'POST' : 'POST' }}",
                    data: new FormData($('#jobForm')[0]),
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        console.log('Success:', data);
                        setTimeout(function() {
                            window.location.href = "{{ route('jobs.index') }}";
                        }, 2000);
                        $('#saveJob').prop('disabled', false);
                        $('#jobForm')[0].reset();
                        toastr.success('Job saved successfully', 'Success');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', xhr.responseText);
                        $('#saveJob').prop('disabled', false);
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