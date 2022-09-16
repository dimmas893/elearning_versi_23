<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Category_soal;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Semester;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    public function index($category_soal)
    {
        // $jadwal = Jadwal::where('id', decrypt($jadwal))->first();
        $category_soal = Category_soal::where('id', decrypt($category_soal))->firstOrFail();
        $mata_pelajaran = MataPelajaran::all();
        $kelas = Kelas::all();
        // $soal = Soal::with('guru')->get();
        return view('frontend.guru.soal.mata_pelajaran', compact('mata_pelajaran', 'kelas', 'category_soal'));
    }


    public function semester($mata_pelajaran_id, $category_soal)
    {
        $mata_pelajaran = MataPelajaran::where('id', decrypt($mata_pelajaran_id))->firstOrFail();
        $category_soal = Category_soal::where('id', decrypt($category_soal))->firstOrFail();
        $semester = Semester::all();

        return view('frontend.guru.soal.semester', compact('mata_pelajaran', 'category_soal', 'semester'));
    }


    public function soal($semester, $category_soal, $mata_pelajaran_id)
    {
        // $semestersemester = Semester::FindOrFail(decrypt($semester));

        $semestersemester = Semester::where('id', decrypt($semester))->firstOrFail();
        $category_soal = Category_soal::where('id', decrypt($category_soal))->firstOrFail();
        $mata_pelajaran = MataPelajaran::where('id', decrypt($mata_pelajaran_id))->firstOrFail();
        $soal = Soal::with('guru', 'mata_pelajaran', 'kelas')->where('tahun_ajaran', \Carbon\Carbon::now('Asia/Jakarta')->format('Y'))->where('semester_id', $semestersemester->id)->where('category_soal_id', $category_soal->id)->where('kelas_id', $category_soal->kelas_id)->where('mata_pelajaran_id', $mata_pelajaran->id)->where('guru_id', Auth::guard('guru')->user()->id)->get();

        return view('frontend.guru.soal.index', compact('semestersemester', 'category_soal', 'mata_pelajaran', 'soal'));
    }

    public function store(Request $request)
    {
        $create = [
            'soal' => $request->soal,
            // 'file' => $request->file('file')->store('assets/soal', 'public'),
            'opsi_a' => $request->opsi_a,
            'opsi_b' => $request->opsi_b,
            'opsi_c' => $request->opsi_c,
            'opsi_d' => $request->opsi_d,
            'jawaban' => $request->jawaban,
            'tahun_ajaran' => $request->tahun_ajaran,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
            'category_soal_id' => $request->category_soal_id,
            'semester_id' => $request->semester_id,
        ];

        $soal =  Soal::create($create);
        // dd($soal);
        return back()->with('success', 'berhasil menambah soal');
        // return view('frontend.guru.soal.index', compact('mata_pelajaran', 'soal', 'category_soal'))->with('success', 'berhasil menambahkan soal');
    }
}
