@extends('admin.admin_master')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h1 class="card-title">新增供應商</h1><br><br>




                            <form method="post" action="{{ route('supplier.store') }}" id="myForm">
                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">供應商名稱</label>
                                    <div class="form-group col-sm-10">
                                        <input name="name" class="form-control" type="text">
                                        @if ($errors->first('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">供應商號碼</label>
                                    <div class="form-group col-sm-10">
                                        <input name="mobile_no" class="form-control" type="text">
                                        @if ($errors->first('mobile_no'))
                                            <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">供應商電子信箱</label>
                                    <div class="form-group col-sm-10">
                                        <input name="email" class="form-control" type="email">
                                        @if ($errors->first('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">供應商地址</label>
                                    <div class="form-group col-sm-10">
                                        <input name="address" class="form-control" type="text">
                                        @if ($errors->first('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- end row -->





                                <input type="submit" class="btn btn-info waves-effect waves-light" value="新增">
                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>
@endsection
