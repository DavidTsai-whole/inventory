@extends('admin.admin_master')
@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">產品庫存報告</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

    </div>



    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

                </div>

            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>

                <div class="">
<div class="table-responsive">



    <table class="table">
        <thead>
        <tr>

            <td class="text-center"><strong>供應商名稱</strong></td>
            <td class="text-center"><strong>單位</strong>
            </td>
            <td class="text-center"><strong>分類</strong>
            </td>
            <td class="text-center"><strong>產品名稱</strong>
            </td>
            <td class="text-center"><strong>庫存</strong>
            </td>


        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->



        <tr>

         <td class="text-center"> {{ $product['supplier']['name'] }} </td>
         <td class="text-center"> {{ $product['unit']['name'] }} </td>
         <td class="text-center"> {{ $product['category']['name'] }} </td>
         <td class="text-center"> {{ $product->name }} </td>
         <td class="text-center"> {{ $product->quantity }} </td>


        </tr>


                            </tbody>
                        </table>
                    </div>


        @php
        $date = new DateTime('now', new DateTimeZone('Asia/Taipei'));
        @endphp
        <i>Printing Time : {{ $date->format('F j, Y, g:i a') }}</i>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->






</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


@endsection
