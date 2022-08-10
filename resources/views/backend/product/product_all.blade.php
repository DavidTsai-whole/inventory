@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">所有產品</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('product.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light"
                                style="float:right;">新增產品</a> <br> <br>

                            <h4 class="card-title">所有產品資料</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>編號</th>
                                        <th>名字</th>
                                        <th>供應商名稱</th>
                                        <th>單位</th>
                                        <th>種類</th>
                                        <th>行為</th>

                                </thead>
                                <tbody>

                                    @foreach ($products as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->supplier->name }} </td>
                                            <td> {{ $item->unit->name }} </td>
                                            <td> {{ $item->category->name }} </td>
                                            <td>
                                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info sm"
                                                    title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                                <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger sm"
                                                    title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
@endsection
