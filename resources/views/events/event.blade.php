@extends('layouts.app')
@section('title', 'Részletek')

@section('content')
<div id="pdf_body#{{ $esemeny->id }}">
<div class="bg-transparent my-3 rounded-lg lg:mx-52">
    <p class="font-light text-3xl mb-3 lg:text-5xl text-center">{{ $esemeny->megnevezes }}</p>
    <div class="flex s-screen" id="qrcode"></div>

</div>

<div class="flex h-screen">
    <div class="mx-auto">
        <div class="p-3 inline-block align-middle bg-white rounded-lg font-light border shadow-xl text-gray-700">
            <p class="font-semibold text-black mb-5 text-2xl">
                {{ $esemeny->leiras }}
            </p>
            <p class="mb-2 text-2xl">
                Kezdet: {{ $esemeny->kezdet }}
            </p>
            <p class="mb-10 text-2xl">
                Véget ér: {{ $esemeny->veg }}
            </p>
            <p class="mb-3 text-2xl">Szervező: {{ $szervezo->name }}</p>
            
            <p class="mb-10 text-2xl">
                Helyszín: {{ $esemeny->helyszin }}
            </p>
            <p class="mb-3 text-2xl text-center inline" id="pCapacity">
                <i>Jelentkezhet még: {{ $esemeny->kapacitas - $jelentkezesek }} fő</i>
            </p>
            @if($esemeny->dolgozoid == Auth::user()['id'])   
                
            <button onclick="save()" id="btnGenerate" class="mb-2 bg-green-600 w-full text-xl rounded-lg shadow-lg font-iight px-5 py-2.5 text-gray-100 transition hover:bg-green-500 hover:text-black inline">QR-kód generálása</button>
            @endif
            @if(!$jelentkezettE)
                @guest
                    <a href="{{ route('login') }}" class="flex justify-center items-center h-screen rounded-lg w-full text-3xl py-2 px-3 my-5 font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Lépjen be először, hogy jelentkezhessen!
                    </button>
                @else
                    <form action="{{ route('apply') }}" method="POST">
                        @csrf
                        <input type="hidden" name="esemenyId" value="{{ $esemeny->id }}">
                        <button type="submit" id="btnApplication" class="text-xl rounded-lg w-full py-2.5 px-3 font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 inline">
                            Jelentkezek
                        </button>
                    </form>
                @endguest
            @else
            <form action="/abandon" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button class="rounded-lg w-full py-2.5 px-3 text-lg font-medium text-center text-white bg-blue-700 transition hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 inline" type="submit">Jelentkezés visszavonása</button>
            </form>
            @endif
        </div>
    </div>
</div>
</div>
    <script type="text/javascript">
        let eid = {{ $esemeny->id }};
        var pdf_content = document.getElementById("pdf_body");
        function save(){
            toggleAllButtons();
            new QRCode(document.getElementById("qrcode"), "http://127.0.0.1:8000/verify/"+eid);
            var pdf_content = document.getElementById("pdf_body");
            html2pdf(pdf_content);
            document.getElementById("qrcode").innerHTML = "";
            toggleAllButtons();
        }

        function toggleAllButtons() {
            var pCapacityState = document.getElementById('pCapacity');
            if (pCapacityState.classList.contains('inline')) {
                pCapacityState.classList.remove('inline');
                pCapacityState.classList.add('hidden');
            }
            else {
                pCapacityState.classList.remove('hidden');
                pCapacityState.classList.add('inline');
            }

            var btnGenerateState = document.getElementById('btnGenerate');
            if (btnGenerateState.classList.contains('inline')) {
                btnGenerateState.classList.remove('inline');
                btnGenerateState.classList.add('hidden');
            }
            else {
                btnGenerateState.classList.remove('hidden');
                btnGenerateState.classList.add('inline');
            }

            var btnApplication = document.getElementById('btnApplication');
            if (btnApplication.classList.contains('inline')) {
                btnApplication.classList.remove('inline');
                btnApplication.classList.add('hidden');
            }
            else {
                btnApplication.classList.remove('hidden');
                btnApplication.classList.add('inline');
            }
        }
    </script>
@endsection
