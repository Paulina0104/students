<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  fsp_details extends Model
{
    use HasFactory;

    protected $table = 'fsp_details';
    protected $primaryKey = 'id';
    protected $guarded = ['fsp_type',
        'institution_code',
        'institution_full_name'
        , 'institution_name'];
}
    // Fetch all records
           $details = Fsp_details::all();

//// Find a specific record by primary key
//$contact = Contact::find($id);
//
//// Update a record
//$contact->name = 'New Name';
//$contact->save();
//
//// Delete a record
//$contact->delete();


