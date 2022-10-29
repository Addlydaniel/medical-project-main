<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Client([
           'id' => $row['id'],
           'ClientBranch' => $row['ClientBranch'],
           'ClientECode' => $row['ClientECode'],
           'ClientName' => $row['ClientName'],
           'ClientGender' => $row['ClientGender'],
           'ClientDOB' => $row['ClientDOB'],
           'ClientMobile' => $row['ClientMobile'],
           'ClientAlterMobile' => $row['ClientAlterMobile'],
           'ClientPhoneNo' => $row['ClientPhoneNo'],
           'ClientEmail' => $row['ClientEmail'],
           'ClientFatherName' => $row['ClientFatherName'],
           'ClientMotherName' => $row['ClientMotherName'],
           'ClientPermanentAddress' => $row['ClientPermanentAddress'],
           'ClientResAddress' => $row['ClientResAddress'],
           'ClientSpouseName' => $row['ClientSpouseName'],
           

        ]);
    }
}
