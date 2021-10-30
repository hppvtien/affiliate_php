<?php

namespace App\Exports;

use App\Models\Uni_Contact;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Uni_Contact::select('email','created_at')->where('is_newsletter',0)->get();
    }
}
