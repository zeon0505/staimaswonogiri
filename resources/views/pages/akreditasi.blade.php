@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Status Akreditasi STAIMAS Wonogiri</h2>
  <p class="text-gray-600 leading-relaxed mb-8">Seluruh program studi di Sekolah Tinggi Agama Islam Mulia Astuti (STAIMAS) Wonogiri telah terakreditasi resmi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).</p>
  
  <div class="overflow-x-auto">
    <table class="w-full text-sm">
      <thead>
        <tr class="bg-teal-700 text-white">
          <th class="px-4 py-3 text-left rounded-tl-xl">No</th>
          <th class="px-4 py-3 text-left">Program Studi</th>
          <th class="px-4 py-3 text-left">Jenjang</th>
          <th class="px-4 py-3 text-left">Peringkat</th>
          <th class="px-4 py-3 text-left rounded-tr-xl">Masa Berlaku</th>
        </tr>
      </thead>
      <tbody>
        @foreach([
          ['1', 'Pendidikan Agama Islam (PAI)', 'S1', 'Baik / B', '2028'],
          ['2', 'Komunikasi Penyiaran Islam (KPI)', 'S1', 'Baik / B', '2027'],
          ['3', 'Ekonomi Syariah (ES)', 'S1', 'Baik / B', '2028'],
          ['4', 'Hukum Tata Negara (HTN)', 'S1', 'Baik', '2029']
        ] as $row)
        <tr class="border-b border-gray-100 hover:bg-gray-50">
          <td class="px-4 py-3 text-gray-500">{{ $row[0] }}</td>
          <td class="px-4 py-3 font-semibold text-gray-800">{{ $row[1] }}</td>
          <td class="px-4 py-3 text-gray-600">{{ $row[2] }}</td>
          <td class="px-4 py-3 text-teal-700 font-bold">{{ $row[3] }}</td>
          <td class="px-4 py-3 text-gray-500">{{ $row[4] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
