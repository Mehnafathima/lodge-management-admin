@extends('Layout.base')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row align-items-center">
            <div class="col-xl-8">
                <h4 class="py-3 mb-4">{{ isset($product) ? 'Edit Product' : 'Add New Product' }}</h4>
            </div>
            <div class="col-xl-4">
                <button type="button" id="saveJob" class="btn btn-primary float-end mb-2">Submit</button>
            </div>
        </div>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Item Details</h5>
                    </div>
                    <form id="jobForm">
                        <div class="card-body">

                            @csrf
                            @if(isset($product))
                            @method('POST')
                            @endif
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-name" name="product_name" placeholder="Enter the product name" value="{{ isset($product) ? $product->PD_Name : '' }}" />
                                <label for="basic-default-fullname">Product Name</label>
                                <div class="invalid-feedback"> Please enter a product name.</div>

                            </div>
                            <div class="input-group input-group-merge mb-4">
                                <span id="basic-icon-default-message2" class="input-group-text"><i class="mdi mdi-text"></i></span>
                                <textarea id="basic-icon-default-message" class="form-control" name="description" placeholder="Description" aria-label="Description" aria-describedby="basic-icon-default-message2" style="height: 60px">{{ isset($product) ? $product->PD_Desc : '' }}</textarea>
                            </div>
                            <div class="mb-4">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">₹</span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="number" class="form-control" placeholder="999" name="price" value="{{ isset($product) ? $product->PD_Price : '' }}" />
                                        <label>Price</label>
                                    </div>
                                    <span class="input-group-text">/ Unit</span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon03">Image</button>
                                <input type="file" class="form-control" name="image" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" value="{{ isset($product) ? $product->PD_Img : '' }}" onchange="previewImage(this)">
                                <div class="input-group mb-3 mt-2">
                                    <img id="imagePreview" name="imagePreview" src="{{ isset($product) && $product->PD_Img ? asset('images/' . $product->PD_Img) : asset('assets/img/download.png') }}" alt="Current Image" width="100">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Merged -->
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Measurements</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating form-floating-outline mb-4">
                            <select class="form-select" id="exampleFormControlSelect1" name="unit" aria-label="Default select example">
                                <option value="">Select a Unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->UN_Id }}" {{ isset($product) && $product->UN_Id == $unit->UN_Id ? 'selected' : '' }}>
                                    {{ $unit->UN_Name }}
                                </option>
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">Unit</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="text" class="form-control" id="basic-default-name" name="qty" placeholder="Quantity" value="{{ isset($product) ? $product->PD_Qty : '' }}" />
                            <label for="basic-default-fullname">Quantity</label>
                        </div>
                        <div class="mb-4">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">Qty</span>
                                <div class="form-floating form-floating-outline">
                                    <input type="number" class="form-control" placeholder="00" name="re_qty" value="{{ isset($product) ? $product->PD_Re_Qty : '' }}" />
                                    <label>Reorder Qty</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-2">
                            <label class="col-sm-2 col-form-label" for="status-checkbox">Active</label>
                            <div class="col-sm-10">
                                <div class="form-check form-switch mb-2">
                                    <input type="checkbox" id="active" class="form-check-input" value="1" name="active" {{ isset($product) && $product->PD_Status == 1 ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
                    url: "{{ isset($product) ? route('products.update', ['id' => $product->PD_Id]) : route('products.store') }}",
                    type: "{{ isset($product) ? 'POST' : 'POST' }}",
                    data: new FormData($('#jobForm')[0]),
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        console.log('Success:', data);
                        setTimeout(function() {
                            window.location.href = "{{ route('products.index') }}";
                        }, 2000);
                        $('#saveJob').prop('disabled', false);
                        $('#jobForm')[0].reset();
                        toastr.success('Product saved successfully', 'Success');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', xhr.responseText);
                        $('#saveJob').prop('disabled', false);

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