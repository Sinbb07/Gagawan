<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form2B;
use Illuminate\Support\Facades\Auth;

class Form2BController extends Controller
{
    public function store(Request $request)
    {
        // Validate required fields (you can make some nullable for drafts)
        $request->validate([
            'protocol_title' => 'required|string|max:255',
            'pi_name' => 'required|string|max:255',
            'pi_email' => 'required|string|max:255',
            'coiname' => 'required|string|max:255',
        ]);

        // Generate ID only if creating new
        $lastId = Form2B::max('form2BID');
        if ($lastId) {
            $num = intval(substr($lastId, 3)) + 1;
            $form2BID = 'f2b' . str_pad($num, 6, '0', STR_PAD_LEFT);
        } else {
            $form2BID = 'f2b000001';
        }

        // Save or update draft (always one record per user)
        Form2B::updateOrCreate(
            ['user_ID' => Auth::user()->user_ID], // find by user
            [
                'form2BID'  => $form2BID,
                'protocol'  => $request->protocol,
                'pi_name'    => auth()->user()->full_name,
                'pi_email' =>$request->pi_email,
                'coiname' =>$request->coiname,
            ]
        );

        return redirect()->back()->with('success', 'Your draft has been saved!');
    }

    public function edit()
    {
        $user = auth()->user();

        $mi = $user->user_MI ? "{$user->user_MI}." : '';
        $principalInvestigator = "{$user->user_Fname} {$mi} {$user->user_Lname}";
        $userEmail = $user->user_Email;

        $userId = $user->user_ID;

        // fetch draft if exists
        $form2b = Form2B::where('user_ID', $userId)->first();

        // fetch research info for this user
        $researchInfo = \App\Models\ResearchInformation::where('user_ID', $userId)->first();

        return view('student.forms.form2b', compact('form2b', 'researchInfo', 'principalInvestigator'));
    }
}
