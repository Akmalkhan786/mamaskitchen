<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }
    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }
    public function destroy($id){
        Contact::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
