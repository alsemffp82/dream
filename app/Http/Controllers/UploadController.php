<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;

class UploadController extends Controller
{
    public function upload(){

		if(Input::hasFile('file')){

			echo 'Uploaded';
			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
			echo '<img src="uploads/'. $file->getClientOriginalName() .'" />';
		}

	}
}
