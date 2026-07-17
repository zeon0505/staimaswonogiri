@extends('layouts.app')
@section('content')
<div class='bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-8'>
    <h2 class='text-2xl font-bold text-gray-800 mb-4'>Pusat Data & Informasi</h2>
    <p class='text-gray-600 leading-relaxed mb-6'>Layanan satu pintu untuk data akademik, statistik mahasiswa, dan informasi penting lainnya tentang STAIMAS Wonogiri.</p>
    <div class='grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8'>
        <div class='bg-teal-50 p-6 rounded-xl'>
            <h4 class='font-bold text-teal-700 text-3xl mb-1'>300+</h4>
            <p class='text-sm text-gray-600 font-semibold'>Mahasiswa Aktif</p>
        </div>
        <div class='bg-teal-50 p-6 rounded-xl'>
            <h4 class='font-bold text-teal-700 text-3xl mb-1'>21+</h4>
            <p class='text-sm text-gray-600 font-semibold'>Dosen Profesional</p>
        </div>
        <div class='bg-teal-50 p-6 rounded-xl'>
            <h4 class='font-bold text-teal-700 text-3xl mb-1'>15+</h4>
            <p class='text-sm text-gray-600 font-semibold'>Kerjasama Institusi</p>
        </div>
    </div>
    <h3 class='font-bold text-gray-800 text-lg mb-4'>Layanan Data Terintegrasi</h3>
    <div class='grid grid-cols-1 sm:grid-cols-2 gap-4'>
        <a href='https://staimaswonogiri.ecampuz.com/eakademikportal/' target='_blank' class='p-4 border border-gray-100 rounded-xl hover:bg-teal-50/50 transition-colors flex items-center gap-3'>
            <i class='fas fa-laptop-code text-teal-600 text-2xl'></i>
            <div>
                <h5 class='font-bold text-gray-800 text-sm'>Portal SIAKAD</h5>
                <p class='text-xs text-gray-500'>Akses nilai, KRS, dan administrasi akademik</p>
            </div>
        </a>
        <a href='https://pddikti.kemdiktisaintek.go.id/' class='p-4 border border-gray-100 rounded-xl hover:bg-teal-50/50 transition-colors flex items-center gap-3'>
            <i class='fas fa-chart-bar text-teal-600 text-2xl'></i>
            <div>
                <h5 class='font-bold text-gray-800 text-sm'>Pangkalan Data DIKTI</h5>
                <p class='text-xs text-gray-500'>Data resmi perguruan tinggi di PDDIKTI Kemendikbud</p>
            </div>
        </a>
    </div>
</div>
@endsection
