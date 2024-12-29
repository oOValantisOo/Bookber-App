<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index(){
        $donations = Donation::all();
        return view('donations.donations-admin', compact('donations'));
    }

    public function create(){
        return view('donations.create-donation');
    }

    public function store(Request $request, $EventId)
    {
        $request->validate([
            'id' => 'required|exists:events,EventId',
        ]);

        $donation = Donation::create([
            'EventId' => $EventId,
            'UserId' => Auth::id(),
            'DonationDate' => now(),
        ]);
    
        return redirect()->route('book.create-page', ['id' => $donation->DonationId])
                     ->with('success', 'Donation created successfully!');
    }
    

    public function getDonationById($id){
        $donation = Donation::find($id);
        
        if(donation){
            return view('donation', compact('donation'));
        } else {
            return redirect()->route('donationsIndex')->with('error', 'Donation not found!');
        }
    }

    public function getDonationByUser($id){
        $donations = Donation::where('UserId', '=', $id)->get();

        return view('userDonations', compact('donations'));
    }

    public function getDonationsByEvent($id){
        $donations = Donation::where('EventId', '=', $id)->get();

        return view('eventDonations', compact('donations'));
    }

    public function delete($id){
        $donation = Donation::find($id);

        if($donation){
            $event->delete();
            return redirect()->route('event.index')->with('success', 'Event deleted successfully!');
        } else {
            return redirect()->route('event.index')->with('error', 'Event is not found!');
        }
    }

}