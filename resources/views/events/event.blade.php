@extends('layouts.app')
@section('title', 'Részletek')

@section('content')
<div id="pdf_body">
<div class="bg-transparent my-3 rounded-lg lg:mx-52">
    <p class="font-light text-3xl lg:text-5xl text-center">{{ $esemeny->megnevezes }}</p>
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
            <p class="mb-3 text-2xl text-center">
                <i>Jelentkezhet még: {{ $esemeny->kapacitas - $jelentkezesek }} fő</i>
            </p>
            @if($esemeny->dolgozoid == Auth::user()['id'])
                    
                    <button onclick="save()">QR kód</button>
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
                        <button type="submit" class="rounded-lg w-full py-2.5 px-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            Jelentkezek
                        </button>
                    </form>
                @endguest
            @else
            <form action="/abandon" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="hidden" value="{{ $esemeny->id }}" name="esemenyId">
                <button class="rounded-lg w-full py-2.5 px-3 text-lg font-medium text-center text-white bg-blue-700 transition hover:bg-blue-800 focus:ring-4 focus:ring-blue-300" type="submit">Jelentkezés visszavonása</button>
            </form>
            @endif
        </div>
    </div>
</div>
</div>

    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        let eid = {{ $esemeny->id }};
        var pdf_content = document.getElementById("pdf_body");
        function save(){
            new QRCode(document.getElementById("qrcode"), "http://127.0.0.1:8000/verify/"+eid);
            var pdf_content = document.getElementById("pdf_body");
            html2pdf(pdf_content);
            document.getElementById("qrcode").innerHTML = "";
        }
    </script>
@endsection
