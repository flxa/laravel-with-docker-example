<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class StorePracticeRevenue extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        //$file = $request->file('upload-file');
        //dd($request);
        //echo '<pre>'.print_r($_POST,true).'</pre>';
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'revenueFile' => 'required'
        ];
    }
}
