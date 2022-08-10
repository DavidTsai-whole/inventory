@extends('admin.admin_master')
@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">每日發票報告</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">





    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
                    <h3 class="font-size-16"><strong>
    <span class="btn btn-info"> {{ $sdate }} </span> -
     <span class="btn btn-success"> {{ $edate }} </span>
                    </strong></h3>
                </div>

            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>編號</strong></td>
            <td class="text-center"><strong>顧客名稱</strong></td>
            <td class="text-center"><strong>發票編號</strong>
            </td>
            <td class="text-center"><strong>日期</strong>
            </td>
            <td class="text-center"><strong>描述</strong>
            </td>
            <td class="text-center"><strong>金額</strong>
            </td>


        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->

      @php
        $total_sum = '0';
        @endphp
        @foreach($allData as $key => $item)
        <tr>
           <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $item['payment']['customer']['name'] }}</td>
            <td class="text-center">#{{ $item->invoice_no }}</td>
            <td class="text-center">{{ $item->date }}</td>
            <td class="text-center">{{ $item->description }}</td>
            <td class="text-center">{{ $item['payment']['total_amount'] }}</td>


        </tr>
         @php
        $total_sum += $item['payment']['total_amount'];
        @endphp
        @endforeach



            <tr>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>累計金額</strong></td>
                <td class="no-line text-end"><h4 class="m-0">${{ $total_sum}}</h4></td>
            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="{{route('daily.invoice.excel',[$sdate,$edate])}}" class="btn btn-primary waves-effect waves-light ms-2">Download</a>
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
