<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use App\Events\PusherBroadcast;


class ChatController extends Controller
{
    // public function chatDiskusi($id)
    // {
    // // Mendapatkan diskusi berdasarkan ID
    // $diskusi = Diskusi::findOrFail($id);

    // // Mendapatkan pesan dari diskusi
    // $chats = $diskusi->chats;

    // return view('Dashboard.dashboard-pengurus.pengumuman.Chat', compact('diskusi', 'chats'));
    // }

    // public function broadcast(Request $request)
    // {
    //   // Memvalidasi permintaan
    //     $request->validate([
    //         'message' => 'required|string|max:255',
    //     ]);

    //     // Mendapatkan ID diskusi dari parameter URL
    //     $diskusiId = $request->route('id');

    //     // Membuat objek Chat baru
    //     $chat = new Chat([
    //         'isi_pesan' => $request->input('message'),
    //         'diskusi_id' => $diskusiId,
    //     ]);

    //     // Menyimpan pesan ke dalam database
    //     $chat->save();

    //     // Mengirim pesan menggunakan Pusher
    //     broadcast(new PusherBroadcast($request->input('message')))->toOthers();

    //     // Mengembalikan pengguna ke halaman chat
    //     return redirect()->route('chat.diskusi', ['id' => $diskusiId]);
    // }

    // public function receive(Request $request)
    // {
    //     return view('Dashboard.dashboard-pengurus.pengumuman.receive',['message' => $request->get('message')]);
    // }

    //  public function index()
    // {
    //     return view('Dashboard.dashboard-pengurus.pengumuman.Chat');

    // }
}
