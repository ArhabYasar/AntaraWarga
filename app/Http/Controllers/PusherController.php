<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use App\Events\PusherBroadcast;

class PusherController extends Controller
{
    public function index($id)
    {
        $diskusi = Diskusi::findOrFail($id);

        return view('Dashboard.dashboard-pengurus.pengumuman.Chat', compact('diskusi'));
    }
    public function index1($id)
    {
        $diskusi = Diskusi::findOrFail($id);

        return view('Dashboard.dashboard-pengurus.pengumuman.Chat1', compact('diskusi'));
    }
    public function broadcast(Request $request)
    {
        // Broadcast ke pusher
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('Dashboard.dashboard-pengurus.pengumuman.broadcast', ['message' => $request->get('message')]);
    }
         public function receive(Request $request)
    {
        return view('Dashboard.dashboard-pengurus.pengumuman.receive',['message' => $request->get('message')]);

    }
}
