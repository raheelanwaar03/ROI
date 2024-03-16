@extends('layout.app')

@section('links')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <link href="{{ asset('asset/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('asset/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('asset/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('asset/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/pickadate/themes/default.date.css') }}">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-blog">
                                        <h4 class="text-white d-inline">Today Highlights</h4>
                                        <img src="{{ asset('asset/images/profile/1.jpg') }}" alt=""
                                            class="img-fluid mt-4 mb-4 w-100 rounded">
                                        <h4><a href="post-details.html" class="text-white">Darwin Creative Agency Theme</a>
                                        </h4>
                                        <p class="mb-0">A small river named Duden flows by their place and supplies it
                                            with the necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of sentences
                                            fly into your mouth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <h4>Request For Deposit</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <h2 style="text-align: center;">Deposit Amount</h2>
                                        <input type="number" id="inputValue" class="form-control"
                                            placeholder="Enter a value">
                                    </div>
                                    <div id="result"></div>
                                    <div class="m-3">
                                        <button id="showInputs" class="btn btn-info">Pay</button>
                                    </div>
                                    <div class="container">
                                        <div id="paymentDetails" class="hidden">
                                            <h3>Add Details Below</h3>
                                            <div class="m-2">
                                                <input type="text" name="trx" class="form-control"
                                                    placeholder="Transcation ID">
                                            </div>
                                            <div class="m-2">
                                                <input name="datepicker" class="datepicker-default form-control"
                                                    id="datepicker" placeholder="Date">
                                            </div>
                                            <div class="m-3">
                                                <input type="file" name="profe" class="form-control" id="fileInput">
                                            </div>
                                            <div class="m-2">
                                                <button id="uploadButton" class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection


                @section('scripts')
                    <script>
                        document.getElementById('showInputs').addEventListener('click', function() {
                            document.getElementById('paymentDetails').classList.remove('hidden');
                            document.getElementById('inputValue').readOnly = true;
                            this.disabled = true;
                        });

                        document.getElementById('uploadButton').addEventListener('click', function() {
                            // Your upload functionality goes here
                            alert('File uploaded successfully!');
                        });

                        document.getElementById('inputValue').addEventListener('input', function() {
                            var inputValue = parseFloat(this.value);
                            var percentage = inputValue * 0.01;
                            var totalAmount = inputValue + percentage;
                            var resultElement = document.getElementById('result');
                            if (!isNaN(inputValue) && inputValue >= 100) {
                                resultElement.innerHTML =
                                    `<p>1% of ${inputValue} is ${percentage.toFixed(2)}</p><p>Total Amount: ${totalAmount.toFixed(2)}</p>`;
                            } else {
                                resultElement.innerHTML = '<p>Please enter a value greater than or equal to 100</p>';
                            }
                        });
                    </script>
                    <script src="{{ asset('asset/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
                    <!-- Clockpicker init -->
                    <script src="{{ asset('asset/js/plugins-init/clock-picker-init.js') }}"></script>
                    <!-- asColorPicker init -->
                    <script src="{{ asset('asset/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
                    <!-- Material color picker init -->
                    <script src="{{ asset('asset/js/plugins-init/material-date-picker-init.js') }}"></script>
                    <script src="{{ asset('asset/js/plugins-init/pickadate-init.js') }}"></script>
                @endsection
