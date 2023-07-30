<?php

namespace App\Http\Controllers;

use App\Models\Author;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        if(auth()->user()->username != 'adminwebmai')
        {
            $tampil_post = Prestasi::where('author_id', auth()->user()->author_id)->orderBy('created_at', 'desc')->get();
        }
        else
        {
            $tampil_post = Prestasi::get();
        }

        return view('admin.prestasi.index',[
            'title1' => 'Prestasi',
            'title2' => 'daftar post',
            'data' => $tampil_post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi.create',[
            'title1' => 'Prestasi',
            'title2' => 'daftar post',
            'author' => Author::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('foto')->store('foto_post');
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'max:250',
            'isi' => 'required',
            'category_id' => 'required',
            'nama' => 'required',
            // 'author_id' => 'required',
            'foto' => 'required|image|file|max:10240'
        ]);
        
        // $validate['author_id'] = auth()->user()->author_id;
        
        $validate['foto'] = $request->file('foto')->store('foto_post');
        
        Prestasi::create($validate);
        // dd('sukses');
        return redirect('/admin/prestasi')->with('sukses','sukses menambahkan postingan baru');
        // @dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        return view('admin.prestasi.show',[
            'title1' => 'Post',
            'title2' => 'prestasi',
            'post' => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit',[
            'title1' => 'Prestasi',
            'title2' => 'daftar post',
            'post' => $prestasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'slug' => 'max:250',
            'isi' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'author_id' => 'required',
            'foto' => 'image|file|max:10240'
        ]);
        
        if ($request['foto'] != null) {
            $validate['foto'] = $request->file('foto')->store('foto_post');
        }
        else {
            $validate['foto'] = $prestasi->foto;
        }
        
        
        Prestasi::where('id',$prestasi->id)->update($validate);

        return redirect('/admin/prestasi')->with('sukses', 'sukses mengedit postingan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        Prestasi::destroy($prestasi->id);

        return redirect('/admin/prestasi')->with('sukses', 'sukses menghapus postingan');
    }

    public function blog($id)
    {
        return view('post.post',[
            'title' => 'post',
            'data' => Prestasi::find(1),
        ]);
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Prestasi::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
