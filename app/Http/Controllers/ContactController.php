<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Group;
use App\Models\Profesi;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function goToHalamanUtama(){
        return view(
            'halaman_utama' , [
            'contacts' => Contact::all()
        ]);
    }

    function deleteData(Contact $contact){
        $contact->delete();

        return back()
            ->with('status' , 'Berhasil menghapus data!');
    }

    function saveEditData(Request $request){
        $contact = Contact::where('id' , $request->id)->first();
        $contact->nama = $request->nama;
        $contact->nomor = $request->nomor;
        $contact->email = $request->email;
        $contact->id_group = $request->id_group;
        $contact->id_profesi = $request->id_profesi;
        $contact->save();

        return redirect('/halaman_utama');
    }

    function goToEditData(Contact $contact){
        return view(
            'halaman_edit',
            ['contact' => $contact]
        );
    }


    function goToHalamanTambahData(){
        return view(
            'halaman_tambah_data',
        );
    }
    function tambahData(Request $request){
        $contact = new Contact();
        $contact->nama = $request->nama;
        $contact->nomor = $request->nomor;
        $contact->email = $request->email;
        $contact->id_group = $request->id_group;
        $contact->id_profesi = $request->id_profesi;
        $contact->save();

        return redirect('/halaman_utama');
    }


}
