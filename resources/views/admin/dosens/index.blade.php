@extends('layouts.admin')
@section('title', 'Dosen & Staff')
@section('breadcrumb', 'Kelola data dosen & staff pengajar STAIMAS')
@section('header-action')
  <a href="{{ route('admin.dosens.create') }}" class="inline-flex items-center gap-2 bg-teal-700 hover:bg-teal-800 text-white text-sm font-bold px-4 py-2 rounded-xl transition-colors shadow">
    <i class="fas fa-user-plus"></i> Tambah Dosen
  </a>
@endsection

@section('content')
<div class="space-y-4">

  {{-- FILTER BAR --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4 flex flex-col sm:flex-row gap-3 items-start sm:items-center justify-between">

    {{-- Tab Filter Prodi --}}
    <div class="flex flex-wrap gap-2">
      @php
        $prodis = ['' => 'Semua', 'PAI' => 'PAI', 'ES' => 'ES', 'HTN' => 'HTN', 'KPI' => 'KPI'];
      @endphp
      @foreach($prodis as $val => $label)
        <a href="{{ route('admin.dosens.index', array_merge(request()->except('prodi','page'), $val ? ['prodi' => $val] : [])) }}"
           class="px-3 py-1.5 text-xs font-bold rounded-lg transition-colors
                  {{ request('prodi') === $val && ($val !== '' || !request('prodi')) ? 'bg-teal-700 text-white' : 'bg-gray-100 text-gray-600 hover:bg-teal-50 hover:text-teal-700' }}
                  {{ $val === '' && !request('prodi') ? 'bg-teal-700 text-white' : '' }}">
          {{ $label }}
        </a>
      @endforeach
    </div>

    {{-- Search --}}
    <form action="{{ route('admin.dosens.index') }}" method="GET" class="flex gap-2">
      @if(request('prodi'))
        <input type="hidden" name="prodi" value="{{ request('prodi') }}">
      @endif
      <div class="relative">
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
        <input type="text" name="search" value="{{ request('search') }}"
               placeholder="Cari nama dosen..."
               style="padding-left:2rem;"
               class="w-52 py-2 pr-3 text-sm rounded-lg border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-teal-500">
      </div>
      <button type="submit" class="bg-teal-700 hover:bg-teal-800 text-white text-xs font-bold px-3 py-2 rounded-lg transition-colors">
        Cari
      </button>
      @if(request('search'))
        <a href="{{ route('admin.dosens.index', request()->except('search','page')) }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 text-xs font-bold px-3 py-2 rounded-lg transition-colors">
          Reset
        </a>
      @endif
    </form>

  </div>

  {{-- TABLE --}}
  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <table class="w-full text-sm">
      <thead class="bg-gray-50 border-b border-gray-100">
        <tr>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Foto</th>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Nama</th>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Jabatan</th>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Prodi</th>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Urutan</th>
          <th class="text-left px-6 py-3 text-xs font-bold text-gray-500 uppercase">Status</th>
          <th class="text-right px-6 py-3 text-xs font-bold text-gray-500 uppercase">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-50">
        @forelse($dosens as $dosen)
        <tr class="hover:bg-gray-50/50">
          <td class="px-6 py-3">
            <div class="w-10 h-10 rounded-xl overflow-hidden bg-teal-100 flex items-center justify-center">
              @if($dosen->foto)
              <img src="{{ str_starts_with($dosen->foto, 'http') ? $dosen->foto : asset('storage/' . $dosen->foto) }}"
                   alt="{{ $dosen->nama }}" class="w-full h-full object-cover">
              @else
              <i class="fas fa-user text-teal-500 text-sm"></i>
              @endif
            </div>
          </td>
          <td class="px-6 py-3 font-semibold text-gray-800">{{ $dosen->nama }}</td>
          <td class="px-6 py-3 text-gray-500">{{ $dosen->jabatan }}</td>
          <td class="px-6 py-3">
            @php
              $prodiColor = match(strtoupper($dosen->program_studi ?? '')) {
                'PAI' => 'bg-emerald-100 text-emerald-700',
                'ES'  => 'bg-blue-100 text-blue-700',
                'HTN' => 'bg-red-100 text-red-700',
                'KPI' => 'bg-orange-100 text-orange-700',
                default => 'bg-gray-100 text-gray-500',
              };
            @endphp
            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full {{ $prodiColor }}">
              {{ $dosen->program_studi ?: '-' }}
            </span>
          </td>
          <td class="px-6 py-3 text-gray-500">{{ $dosen->urutan }}</td>
          <td class="px-6 py-3">
            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full {{ $dosen->aktif ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">
              {{ $dosen->aktif ? 'Aktif' : 'Nonaktif' }}
            </span>
          </td>
          <td class="px-6 py-3 text-right">
            <div class="flex items-center justify-end gap-2">
              <a href="{{ route('admin.dosens.edit', $dosen) }}" class="text-xs font-semibold text-teal-700 hover:text-teal-900 bg-teal-50 hover:bg-teal-100 px-3 py-1.5 rounded-lg transition-all">
                <i class="fas fa-pen text-[10px]"></i> Edit
              </a>
              <form action="{{ route('admin.dosens.destroy', $dosen) }}" method="POST">
                @csrf @method('DELETE')
                <button type="button" onclick="confirmDelete(this.closest('form'), '{{ addslashes($dosen->nama) }}')" class="text-xs font-semibold text-red-600 hover:text-red-800 bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-all">
                  <i class="fas fa-trash text-[10px]"></i> Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr><td colspan="7" class="px-6 py-12 text-center text-gray-400">
          <i class="fas fa-user-tie text-3xl mb-2 block opacity-30"></i>
          Belum ada dosen. <a href="{{ route('admin.dosens.create') }}" class="text-teal-700 font-semibold">Tambah sekarang</a>
        </td></tr>
        @endforelse
      </tbody>
    </table>

    {{-- PAGINATION --}}
    @if($dosens->hasPages())
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
      <p class="text-xs text-gray-500">
        Menampilkan {{ $dosens->firstItem() }}–{{ $dosens->lastItem() }} dari {{ $dosens->total() }} dosen
      </p>
      <div class="flex gap-1">
        @if($dosens->onFirstPage())
          <span class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed">‹ Prev</span>
        @else
          <a href="{{ $dosens->previousPageUrl() }}" class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 text-gray-600 hover:bg-teal-50 hover:text-teal-700 transition-colors">‹ Prev</a>
        @endif

        @foreach($dosens->getUrlRange(max(1,$dosens->currentPage()-2), min($dosens->lastPage(),$dosens->currentPage()+2)) as $page => $url)
          @if($page == $dosens->currentPage())
            <span class="px-3 py-1.5 text-xs rounded-lg bg-teal-700 text-white font-bold">{{ $page }}</span>
          @else
            <a href="{{ $url }}" class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 text-gray-600 hover:bg-teal-50 hover:text-teal-700 transition-colors">{{ $page }}</a>
          @endif
        @endforeach

        @if($dosens->hasMorePages())
          <a href="{{ $dosens->nextPageUrl() }}" class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 text-gray-600 hover:bg-teal-50 hover:text-teal-700 transition-colors">Next ›</a>
        @else
          <span class="px-3 py-1.5 text-xs rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed">Next ›</span>
        @endif
      </div>
    </div>
    @endif
  </div>

</div>
@endsection
