<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactform;

class ContactformsController extends Controller
{
    public function list()
    {
        return view('contactforms.list', [
            'contactforms' => Contactform::all()

        ]);
    }

    public function addForm()
    {
        return view('contactforms.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);

        $contactforms = new Contactform();
        $contactforms->name = $attributes['name'];
        $contactforms->email = $attributes['email'];
        $contactforms->message = $attributes['message'];
        $contactforms->save();

        return redirect('/console/contactforms/list')
            ->with('message', 'Contactform has been added!');
    }

    public function delete(Contactform $contactform)
    {
        $contactform->delete();
        return redirect('/console/contactforms/list')
            ->with('message', 'Contactform has been deleted!');
    }
}
