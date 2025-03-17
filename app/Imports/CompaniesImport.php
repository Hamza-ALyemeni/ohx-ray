<?php

namespace App\Imports;

use App\Model\Company;
use App\Model\Employee;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CompaniesImport implements ToModel, WithValidation, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function startRow(): int
    {
        return 2;
    }
    public function __construct()
    {
    }
    public function model(array $row)
    {
        $user =   User::create([
            'f_name'     => $row[0],
            'l_name'    => "",
            // 'logo'    => "",
            'country_id'    => null,
            'verification_code'=>234,
            'role'=>1,
            'location'    => "",
            'gender'    => 0,
            'address'    => "",
            'email'    => $row[1],
            'phone'    => $row[2],
            'password'    => Hash::make('123456'),
        ]);

        $data['user_id'] = $user->id;
        $company = Company::create([
            'name'=>$row[0],
            'user_id' => $user->id
        ]);

        return $company;
    }
    public function customValidationAttributes()
    {
        return [
            '0' => 'Name',
            '1' => 'Email',
            '2' => 'Phone',
        ];
    }

    public function rules(): array
    {
        return [
            '0' => 'required',
            '1' => 'required|email|max:255|unique:users,email',
            '2' => 'required|max:255|unique:users,phone',
        ];
    }
}
