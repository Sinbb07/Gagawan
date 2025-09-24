<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Form2B;
use Illuminate\Support\Facades\Auth;

class Form2BController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate required fields
        $request->validate([
            'protocol_title' => 'required|string|max:255',
        ]);

        // 2. Generate custom ID (f2b000001, f2b000002, ...)
        $lastId = Form2B::max('form2BID'); // get latest ID
        if ($lastId) {
            $num = intval(substr($lastId, 3)) + 1;
            $form2BID = 'f2b' . str_pad($num, 6, '0', STR_PAD_LEFT);
        } else {
            $form2BID = 'f2b000001';
        }

        // 3. Insert using Eloquent
        Form2B::create([
            'form2BID'  => $form2BID,
            'user_ID'   => Auth::user()->user_ID,
            'protocol'  => $request->protocol_title, // maps your form input
        ]);

        // 4. Redirect back with success
        return redirect()->back()->with('success', 'Form 2B submitted successfully!');
    }
}
