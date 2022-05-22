<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($request)
    { 	
		foreach ($request->record as $record )
        return [			
            'date' 		=> 'required|date', 
			'account' 	=> 'required', 
			'curency' 	=> 'required',
        ];
    }
}
