@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">發票批准</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @php
                        $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
                        @endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>發票編號: #{{ $invoice->invoice_no }} - {{ date('Y-m-d',strtotime($invoice->date)) }} </h4>
                    <a href="{{ route('invoice.pending.list') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list">待辦發票清單</i></a> <br>  <br>
                    <table class="table table-dark" width="100%">
                        <tbody>
                            <tr>
                                <td><p>顧客資訊</p></td>
                                <td><p> 姓名: <strong> {{ $payment['customer']['name']  }} </strong> </p></td>
                                <td><p> 手機號碼: <strong> {{ $payment['customer']['mobile_no']  }} </strong> </p></td>
                               <td><p> 電子信箱: <strong> {{ $payment['customer']['email']  }} </strong> </p></td>
                            </tr>

                             <tr>
                             <td></td>
                              <td colspan="3"><p> 描述 : <strong> {{ $invoice->description  }} </strong> </p></td>
                             </tr>
                        </tbody>

                     </table>

                     <form method="post" action="{{ route('approval.store',$invoice->id) }}">
                        @csrf
                        <table border="1" class="table table-dark" width="100%">
                           <thead>
                               <tr>
                                   <th class="text-center">編號</th>
                                   <th class="text-center">分類</th>
                                   <th class="text-center">產品名稱</th>
                                   <th class="text-center" style="background-color: #8B008B">目前庫存</th>
                                   <th class="text-center">數量</th>
                                   <th class="text-center">單價</th>
                                   <th class="text-center">總價</th>
                               </tr>

                           </thead>
                   <tbody>
                    @php
                    $total_sum = '0';
                    @endphp
                       @foreach($invoice['invoice_details'] as $key => $details)
                       <tr>
                            <input type="hidden" name="category_id[]" value="{{ $details->category_id }}">
                            <input type="hidden" name="product_id[]" value="{{ $details->product_id }}">
                            <input type="hidden" name="selling_qty[{{$details->id}}]" value="{{ $details->selling_qty }}">
                           <td class="text-center">{{ $key+1 }}</td>
                           <td class="text-center">{{ $details['category']['name'] }}</td>
                           <td class="text-center">{{ $details['product']['name'] }}</td>
                           <td class="text-center" style="background-color: #8B008B">{{ $details['product']['quantity'] }}</td>
                           <td class="text-center">{{ $details->selling_qty }}</td>
                           <td class="text-center">{{ $details->unit_price }}</td>
                           <td class="text-center">{{ $details->selling_price }}</td>
                       </tr>
                       @php
                        $total_sum += $details->selling_price;
                        @endphp
                       @endforeach
                       <tr>
                        <td colspan="6">小計</td>
                         <td > {{ $total_sum }} </td>
                    </tr>
                     <tr>
                        <td colspan="6">折扣</td>
                         <td > {{ $payment->discount_amount }} </td>
                    </tr>

                     <tr>
                        <td colspan="6">已付金額</td>
                         <td >{{ $payment->paid_amount }} </td>
                    </tr>

                     <tr>
                        <td colspan="6">剩餘金額</td>
                         <td > {{ $payment->due_amount }} </td>
                    </tr>

                    <tr>
                        <td colspan="6"> 累計金額 </td>
                         <td >{{ $payment->total_amount }}</td>
                    </tr>
                   </tbody>

                        </table>

                        <button type="submit" class="btn btn-info">批准</button>

                    </form>




                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection
