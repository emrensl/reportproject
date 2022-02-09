<?php

namespace App\Exports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromQuery, WithHeadings
{
    private $customer;
    private $startDate;
    private $endDate;

    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
        return $this;
    }

    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
        return $this;
    }

    public function query()
    {
        return Report::where('date', '>=', $this->start_date)
            ->where('date', '<=', $this->end_date)
            ->whereCustomer($this->customer);
    }

    public function headings(): array
    {
        return [
            'Id',
            'Customer',
            'Title',
            'Desc',
            'Date',
            'Created At',
            'Updated At',
        ];
    }
}