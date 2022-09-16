@extends('layouts.template_siswa')
@section('contents')
<x-alert />
    <div class="row justify-content-center">
        <div class="card col-sm-12 col-lg-5">
            <div class="card-body">
                    
                    <div class="row">
                        
                        <div class="col mb-3 mb-lg-0 text-center">
                            <i data-feather="book-open" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Semua Materi</div>
                                <h6 class="badge badge-dark">{{ $semua_materi_tampil_count }}</h6><br>
                                <!-- Button trigger modal -->
                                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#tampilsemuamateri" aria-expanded="false" aria-controls="tampilsemuamateri">
                                        Lihat
                                </button>
                        </div>

                        <div class="col mb-3 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Semua Tugas</div>
                                <h6 class="badge badge-dark">{{ $semua_tugas }}</h6><br>
                                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#semuatugas" aria-expanded="false" aria-controls="semuatugas">
                                    Lihat
                                </button>

                        </div>
                        <div class="col mb-3 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Semua Ulangan</div>
                            <h6 class="badge badge-dark">{{ $semua_ulangan }}</h6><br>
                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#tampilsemuaulangan" aria-expanded="false" aria-controls="tampilsemuaulangan">
                                Lihat
                            </button>
                        </div>
                        <div class="col mb-3 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Semua Ujian</div>
                            <h6 class="badge badge-dark">{{ $semua_ujian }}</h6><br>
                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#tampilsemuaujian" aria-expanded="false" aria-controls="tampilsemuaujian">
                               Lihat
                            </button>
                        </div>
                    </div><hr class="mt-2">

                    <div class="row">
                        
                         <div class="col mb-2 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Materi Hari Ini</div>
                            <h6 class="badge badge-dark">{{ $materi_hari_ini }}</h6><br>
                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#materihariini" aria-expanded="false" aria-controls="materihariini">
                                Lihat
                            </button>
                        </div>
                         <div class="col mb-2 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Tugas Hari Ini</div>
                            <h6 class="badge badge-dark">{{ $tugas_hari_ini }}</h6><br>
                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#tugashariini" aria-expanded="false" aria-controls="tugashariini">
                                Lihat
                            </button>
                        </div>
                        <div class="col mb-2 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Ulangan Hari Ini</div>
                            <h6 class="badge badge-dark">{{ $ulangan_hari_ini }}</h6><br>
                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#ulanganhariini" aria-expanded="false" aria-controls="ulanganhariini">
                                Lihat
                            </button>
                        </div>
                        <div class="col mb-2 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">Ujian Hari Ini</div>
                            <h6 class="badge badge-dark">{{ $ujian_hari_ini }}</h6><br>
                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#ujianhariini" aria-expanded="false" aria-controls="ujianhariini">
                                Lihat
                            </button>
                        </div>
                        
                        <div class="col mb-2 mb-lg-0 text-center">
                            <i data-feather="file" style="width: 80px; height: 60px; color: #6c757d"></i>
                            <div class="mt-2 font-weight-bold" style="color: #6c757d;">siswa sudah absen</div>
                            <h6 class="badge badge-dark">{{ $hadir_count }}</h6><br>
                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#absensi" aria-expanded="false" aria-controls="absensi">
                                Lihat
                            </button>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card col-sm-12 col-lg-6 mx-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-3 mb-4 mb-lg-0 text-center">
                        <i data-feather="users" style="width: 100px; height: 40px"></i>
                        <div class="mt-2 font-weight-bold mb-1">Total Siswa</div>
                        <h6 class="badge badge-dark">{{ $count }}</h6> Siswa
                    </div>


                    <div class="col-3 mb-4 mb-lg-0 text-center">
                        <i data-feather="user-x" style="width: 100px; height: 40px"></i>
                        <div class="mt-2 font-weight-bold mb-1">belum absensi</div>
                        <h6 class="badge badge-dark">{{ $total_hadir }}</h6> siswa
                    </div>

                    <div class="col-3 mb-4 mb-lg-0 text-center">
                        <i data-feather="user-x" style="width: 100px; height: 40px"></i>
                        <div class="mt-2 font-weight-bold mb-1">hadir</div>
                        <h6 class="badge badge-dark">{{ $hadir_count }}</h6> siswa
                    </div>
                    

                    <div class="col-3 mb-4 mb-lg-0 text-center">
                        <i data-feather="user-x" style="width: 100px; height: 40px"></i>
                        <div class="mt-2 font-weight-bold mb-1">Tidak Masuk</div>
                        <h6 class="badge badge-danger">{{ $hitung_absen }}</h6> siswa
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="collapse mt-4" id="tampilsemuamateri">
                      <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_materi_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                        <a href="{{ route('kelas-masuk-siswa' ,encrypt($jadwal->id))}}" class="btn btn-success">Kembali</a>
                                    </form>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <td>judul</td>
                                                <td>type</td>
                                                <td>file or link</td>
                                                <td>description</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>pertemuan</td>
                                                <td>tanggal</td>
                                                {{-- <td>Action</td> --}}
                                            </thead>
                                            <tbody>
                                                <h1>Semua Materi</h1>
                                                @foreach($materi_tampil_semua as $p)
                                                    <tr>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->type }}</td>
                                                        <td>{{ $p->file_or_link}}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->pertemuan }}</td>
                                                        <td>{{ $p->tanggal }}</td>
                                                        {{-- <td><button class="btn btn-success">Link</button></td> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
    
    <div class="collapse mt-4" id="materihariini">
        <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_materi_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    
                                  <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <td>judul</td>
                                                <td>type</td>
                                                <td>file or link</td>
                                                <td>description</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>pertemuan</td>
                                                <td>tanggal</td>
                                                {{-- <td>Action</td> --}}
                                            </thead>
                                            <tbody>
                                                <h1>Materi hari ini</h1>
                                                @foreach($materi_tampil_semua as $p)
                                                    <tr>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->type }}</td>
                                                        <td>{{ $p->file_or_link}}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->pertemuan }}</td>
                                                        <td>{{ $p->tanggal }}</td>
                                                        {{-- <td><button class="btn btn-success">Link</button></td> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

    {{-- tampil semua tugas --}}
    <div class="collapse mt-4" id="semuatugas">
        <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_tugas_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                     @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>Tugas</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian tugas</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h1>semua tugas tampil</h1>
                                                @foreach($semua_tugas_tampil as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan tugas     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                               @if($p->jawaban_siswa == null)
                                                                <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

    <div class="collapse mt-4" id="tugashariini">
        <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_tugas_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>Tugas</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian tugas</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h3>Tugas Hari ini</h3>
                                                @foreach($tugas_tampil_hari_ini as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan tugas     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                               @if($p->jawaban_siswa == null)
                                                                <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>


        {{-- tampil semua ulangan --}}
        <div class="collapse mt-4" id="tampilsemuaulangan">
            <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_ulangan_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>ulangan</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian ulangan</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h1>semua ulangan tampil</h1>
                                                @foreach($semua_ulangan_tampil as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul_ulangan }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan ulangan     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semesters }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                               @if($p->jawaban_siswa == null)
                                                                <a href="" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        {{-- //ulangan hari ini --}}
    <div class="collapse mt-4" id="ulanganhariini">
        <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_ulangan_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>Tugas</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian tugas</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h1>ulangan hari ini</h1>
                                                @foreach($ulangan_tampil_hari_ini as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan tugas     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                               @if($p->jawaban_siswa == null)
                                                                <a href="" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

    <div class="collapse mt-4" id="ujianhariini">
        <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_ujian_filter', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>Tugas</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian tugas</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h1>Ujian Hari Ini</h1>
                                                @foreach($ujian_tampil_hari_ini as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan tugas     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                                @if($p->jawaban_siswa == null)
                                                                <a href="" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>



            {{-- tampil semua ujian --}}
        <div class="collapse mt-4" id="tampilsemuaujian">
            <div class="card card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="{{ route('cari_ujian_filter_siswa', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" >
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                    </form>
                                    <div class="table-responsive">    
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Siswa</td>
                                                <td>NISN</td>
                                                <td>Judul</td>
                                                <td>ulangan</td>
                                                <td>description</td>
                                                <td>batas pengumpulan</td>
                                                <td>jawaban siswa</td>
                                                <td>nilai</td>
                                                <td>komentar guru</td>
                                                <td>tanggal pemberian ulangan</td>
                                                <td>semester</td>
                                                <td>tahun ajaran</td>
                                                <td>action</td>
                                            </thead>
                                            <tbody>
                                                <h1>semua ujian tampil</h1>
                                                @foreach($semua_ujian_tampil as $p)
                                                    <tr>
                                                        <td>{{ $p->siswa_name }}</td>
                                                        <td>{{ $p->siswa_nisn }}</td>
                                                        <td>{{ $p->judul }}</td>
                                                        <td>{{ $p->file_or_link }}</td>
                                                        <td>{{ $p->description }}</td>
                                                        <td>{{ $p->pengumpulan }}</td>
                                                        <td>
                                                            @if($p->jawaban_siswa !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->jawaban_siswa }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->jawaban_siswa == null)
                                                                <p style="color:red">
                                                                    Siswa Belum mengumpulkan ulangan     <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->nilai !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->nilai }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->nilai == null)
                                                                <p style="color:red">
                                                                    Siswa Belum dkasih nilai  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            @if($p->komentar_guru !== null)
                                                                <p style="color:rgb(0, 255, 110)">
                                                                    {{ $p->komentar_guru }} <i class="bi bi-check"></i>
                                                                </p>
                                                            @endif                                         
                                                            @if($p->komentar_guru == null)
                                                                <p style="color:red">
                                                                    belum dikasih komentar  <i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i><i class="bi bi-exclamation"></i>  
                                                                </p>
                                                            @endif
                                                        </td>
                                                        <td>{{ $p->tahun_ajaran }}</td>
                                                        <td>{{ $p->semester }}</td>
                                                        <td>{{ $p->created_at }}</td>
                                                            <td>
                                                               @if($p->jawaban_siswa == null)
                                                                <a href="" class="btn btn-success" >kirim tugas</a>
                                                        @endif
                                                                {{-- @if($p->jawaban_siswa !== null)
                                                                    <a href="{{ route('get_jawaban_siswa', $p->id )}}" class="btn btn-success" >jawab</a>
                                                                @endif --}}
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


<div class="collapse mt-4" id="absensi">
    <div class="row">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Siswa</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($checkabsen->status !== null)
                                   <button class="btn btn-danger first">Absen</button>
                                @endif

                                @if($checkabsen->status == null)
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#absen">
                                        absen
                                    </button>
                                @endif


                                <h1 class="mt-3">Absensi siswa</h1>
                                    @foreach($hadir as $p)
                                        <tr>
                                            <td>
                                                {{ $p->siswa->name }}
                                            </td>
                                            <td>
                                                @if($p->status == null)
                                                    <p style="color:red">belum absens</p>
                                                @endif
                                                @if($p->status !== null)
                                                    {{ $p->status }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>


{{-- //absens --}}
<div class="modal fade" id="absen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Absensi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('absen-siswa', $checkabsen->id) }}" method="post">
            @csrf
            {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'> --}}
            {{-- <input type="hidden" value="{{ $hariini }}" name='tanggal'>  --}}
            {{-- <input type="hidden" value="{{ Auth::guard('siswa')->user()->id}}" name='siswa_id'>  --}}
            {{-- <input type="hidden" value="hadir" name='status'>  --}}
            <h1>Absensi</h1>
            <div class="my-2">
                <label for="name">Siswa</label> 
                <input type="text" class="form-control" value="{{ Auth::guard('siswa')->user()->name}}" disabled/>
                    <div class="my-2">
                        <label for="name">Siswa</label>
                        <select class="form-control" name="status">
                            <option disabled>-----pilih absen----</option>
                            <option value="hadir">Hadir</option>
                            <option value="izin">Izin</option>
                            <option value="sakit">Sakit</option>
                        </select>
                    </div>
            </div>
                                        {{-- <button class="btn btn-primary mb-3">absen</button> --}}
        </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
    </div>
  </div>
</div>
</div>
@endsection
@section('js')
	<script>
			document.querySelector(".first").addEventListener('click', function(){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Anda Sudah melakukan Absens!',
				})
			});
	</script>
	<!-- JS Libraies -->
	@endsection	


