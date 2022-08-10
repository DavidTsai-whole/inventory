<?php

namespace App\Exports;
use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class InvoiceReport implements FromCollection, WithHeadings
{
    protected $sdate;
    protected $edate;

    function __construct($sdate,$edate) {
        $this->sdate = $sdate;
        $this->edate = $edate;
 }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $allData = Invoice::with(['payment.customer'])->whereBetween('date',[$this->sdate,$this->edate])->where('status','1')->get();
        $allData = $allData->map(function($invoice){
            return [
                $invoice->payment->customer->name,
                $invoice->invoice_no,
                $invoice->date,
                $invoice->description,
                $invoice->payment->total_amount
            ];
        });
        return $allData;
    }

    public function headings(): array
    {
        return ['顧客名稱','發票編號','日期','描述','金額'];
    }

}
