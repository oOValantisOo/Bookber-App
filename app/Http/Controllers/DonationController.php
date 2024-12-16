<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $donations = Donation::paginate(10);
        return view('donationsIndex', compact('donations'));
    }

    public function create(){
        return view('createDonation');
    }

    public function store(Request $request){
        $request->validate([
            'BookId' => 'required|exists:book, BookId', 
            'DonationDate' => 'required|date', 
            'Quantity' => 'required|integer|gt:0', 
            'UserId' => 'required|exists:user, UserId', 
            'EventId' => 'required|exists:event, EventId'
        ]);

    	$data = new Donation;
        $data->BookId = $request->BookId;
        $data->DonationDate = $request->DonationDate;
        $data->Quantity = $request->Quantity;
        $data->UserId = $request->UserId;
        $data->EventId = $request->EventId;
        $data->save();
        return Redirect()->route('home');

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