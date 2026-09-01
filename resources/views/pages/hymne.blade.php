@extends('layouts.app')
@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 text-center max-w-4xl mx-auto">
  
  {{-- Section Hymne --}}
  <div class="mb-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Hymne STAIMAS Wonogiri</h2>
    
    {{-- Video YouTube Hymne --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/_Y1Eh11feYI" title="Hymne STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="mb-8">
      <img src="{{ asset('assest/not_balok_1.webp') }}" alt="Not Balok Hymne STAIMAS" class="w-full max-w-2xl mx-auto rounded-lg shadow-sm border border-gray-100">
    </div>


  </div>

  {{-- Section Mars --}}
  <div class="border-t border-gray-100 pt-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Mars STAIMAS Wonogiri</h2>

    {{-- Video YouTube Mars --}}
    <div class="aspect-video max-w-2xl mx-auto mb-8 rounded-2xl overflow-hidden shadow-md border border-gray-100">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/1qncQHKHxcE" title="Mars STAIMAS Wonogiri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="mb-8">
      <img src="{{ asset('assest/not_balok_2.webp') }}" alt="Not Balok Mars STAIMAS" class="w-full max-w-2xl mx-auto rounded-lg shadow-sm border border-gray-100">
    </div>


  </div>
</div>
@endsection
