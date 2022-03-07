<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\DB;

use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();

        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Save is ok');
    }

    public function allData()
    {
        $model = new Contact();
        $data = $model->all();
//        $model->skip()->orderBy('id', 'asc')->limit(2)->inRandomOrder()->get()
        return view('messages', ['data' => $model->all()]);
    }

    public function messDetail($id)
    {
        $model = new Contact();
        return view('messDetail', ['data' => $model->find($id)]);
    }

    public function messUpdate($id)
    {
        $model = new Contact();
        return view('messUpdate', ['data' => $model->find($id)]);
    }

    public function updateMessSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);

        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contacts-detail', $id)->with('success', 'Save is ok');
    }

    public function messDelete($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contacts-data')->with('success', 'Delete is ok');
    }
}
