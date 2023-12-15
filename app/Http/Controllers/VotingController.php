<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Voting::query();

        if ($cari) {
            $query->where('kategori', 'LIKE', '%' . $cari . '%')
                ->orWhere('judul', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-pengurus.pengumuman.Voting', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nextDate = Carbon::tomorrow()->addDay();
        $secondNextDate = Carbon::tomorrow()->addDays(2);
        $thirdNextDate = Carbon::tomorrow()->addDays(3);

        $dates = [
            'b' => $nextDate->format('d F Y'),
            'c' => $secondNextDate->format('d F Y'),
            'd' => $thirdNextDate->format('d F Y'),
        ];

        return view('Dashboard.dashboard-pengurus.pengumuman.crud.CreateVoting', compact('dates'));
    }
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'kategori' => 'required',
        'judul' => 'required',
    ]);

        $voting = new Voting([
            'kategori' => $request->kategori,
            'judul' => $request->judul,
        ]);

        $voting->save();

        return redirect()->to('/dashboardPengurus/Voting')->with('success', 'Voting berhasil dibuat!');
        }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $voting = Voting::findOrFail($id);
        $votes = $voting->votes;

        // Check if there are votes
        if ($votes->isEmpty()) {
            $errorMessage = 'No votes found.';
            return view('Dashboard.dashboard-pengurus.pengumuman.ViewVoting', compact('voting', 'errorMessage'));
        }

        $nextDate = Carbon::tomorrow()->addDay();
        $secondNextDate = Carbon::tomorrow()->addDays(2);
        $thirdNextDate = Carbon::tomorrow()->addDays(3);

        $dates = [
            'b' => $nextDate->format('d F Y'),
            'c' => $secondNextDate->format('d F Y'),
            'd' => $thirdNextDate->format('d F Y')
        ];

        return view('Dashboard.dashboard-pengurus.pengumuman.ViewVoting', compact('dates', 'votes', 'voting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Voting::find($id);

        if (!$data) {
            return redirect()->to('/dashboardPengurus/Voting')->with('error', 'Data tidak ditemukan.');
        }

        $nextDate = Carbon::tomorrow()->addDay();
        $secondNextDate = Carbon::tomorrow()->addDays(2);
        $thirdNextDate = Carbon::tomorrow()->addDays(3);

        $dates = [
            'b' => $nextDate->format('d F Y'),
            'c' => $secondNextDate->format('d F Y'),
            'd' => $thirdNextDate->format('d F Y')
        ];

        // Kemudian kembalikan tampilan edit beserta data yang ingin diedit
        return view('Dashboard.dashboard-pengurus.pengumuman.crud.EditVoting', compact('data', 'dates'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
        ]);

        $voting = Voting::findOrFail($id); // Mengambil data berdasarkan ID

        $voting->kategori = $request->kategori;
        $voting->judul = $request->judul;

        $voting->save();

        return redirect()->to('/dashboardPengurus/Voting')->with('success', 'Voting berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $voting = Voting::find($id);

        if (!$voting) {
            return redirect()->to('/dashboardPengurus/Voting')->with('error', 'Data tidak ditemukan.');
        }

        $voting->delete();
        return redirect()->to('/dashboardPengurus/Voting')->with('success', 'Voting berhasil dihapus!');
    }


    public function evotingIndex(Request $request)
    {
        $cari = $request->cari;
        $jumlahbaris = 5;

        $query = Voting::query();

        if ($cari) {
            $query->where('kategori', 'LIKE', '%' . $cari . '%')
                ->orWhere('judul', 'LIKE', '%' . $cari . '%');
        }

        $data = $query->paginate($jumlahbaris);

        return view('Dashboard.dashboard-warga.E-Voting', compact('data'));
    }

    public function evotingView(Request $request)
{
    $data = Voting::find($request->id);

    if (!$data) {
        return redirect()->route('evoting.index')->with('error', 'Data tidak ditemukan.');
    }

    $nextDate = Carbon::tomorrow()->addDay();
    $secondNextDate = Carbon::tomorrow()->addDays(2);
    $thirdNextDate = Carbon::tomorrow()->addDays(3);

    $dates = [
        'b' => $nextDate->format('d F Y'),
        'c' => $secondNextDate->format('d F Y'),
        'd' => $thirdNextDate->format('d F Y')
    ];

    return view('Dashboard.dashboard-warga.E-VotingView', compact('data', 'dates'));
}

public function vote(Request $request, $id)
    {
        $data = Voting::find($id);

        if (!$data) {
            return redirect()->route('evoting.index')->with('error', 'Data tidak ditemukan.');
        }

        // Check if the user has already voted
        $existingVote = $data->votes()->where('user_id', Auth::id())->first();

        if ($existingVote) {
            // User has already voted, update the existing vote
            $existingVote->update([
                'isi' => $request->isi,
            ]);
        } else {
            // User hasn't voted before, create a new vote
            $data->votes()->create([
                'isi' => $request->isi,
                'user_id' => Auth::id(),
            ]);
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('evoting.index')->with('success', 'Voting berhasil disimpan.');
    }
}
