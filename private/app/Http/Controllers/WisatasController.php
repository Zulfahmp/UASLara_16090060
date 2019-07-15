<?php

namespace App\Http\Controllers;
use App\Wisata;
use Illuminate\Http\Request;

class WisatasController extends Controller
{

    public function index()
    {
        $data = Wisata::latest()->paginate(5);
        return view('pages.wisata.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wisata'    =>  'required',
            'kategori'    =>  'required',
            'lokasi'     =>  'required',
            'deskripsi'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nama_wisata'       =>   $request->nama_wisata,
            'kategori'    =>  $request->kategori,
            'lokasi'        =>   $request->lokasi,
            'deskripsi'        =>   $request->deskripsi,
            'image'            =>   $new_name
        );

        Wisata::create($form_data);

        return redirect('wisata')->with('success', 'Data Wisata Telah Di TAMBAHKAN :)');
    }

    public function show($id)
    {
        $data = Wisata::findOrFail($id);
        return view('pages.wisata.view', compact('data'));
    }

    public function edit($id)
    {
        $data = Wisata::findOrFail($id);
        return view('pages.wisata.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'nama_wisata'    =>  'required',
                'kategori'    =>  'required',
                'lokasi'     =>  'required',
                'deskripsi'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'nama_wisata'    =>  'required',
                'kategori'    =>  'required',
                'lokasi'     =>  'required',
                'deskripsi'     =>  'required'
            ]);
        }

        $form_data = array(
            'nama_wisata'    =>  $request->nama_wisata,
            'kategori'    =>  $request->kategori,
            'lokasi'     =>  $request->lokasi,
            'deskripsi'        =>   $request->deskripsi,
            'image'         =>  $image_name
        );

        Wisata::whereId($id)->update($form_data);
        return redirect('wisata')->with('success', 'Data Wisata Telah Di UPDATE :|');

    }

    public function destroy($id)
    {
        $data = Wisata::findOrFail($id);
        $data->delete();
        return redirect('wisata')->with('success', 'Data Wisata Telah Di DELETE! :(');
    }
}
