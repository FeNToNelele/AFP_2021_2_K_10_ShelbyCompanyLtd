## 1. Jelenlegi helyzet

Megrendelőnk eddig papír alapon vezette a különféle sportrendezvényekre való regisztrálást. Ez meglehetősen nehézkes megoldásnak bizonyul, mivel a papír könnyen elveszhet, nem beszélve magáról a regisztrálás nehézségéről. A felhasználóknak személyesen kell regisztrálniuk egy eseményre.

## 2. Vágyálom rendszer

Megrendelőnk szeretné a papíralapú regisztrációt elektronikussá átalakítani. Ehhez egy Android operációs rendszerre készített applikációt szeretne. Ez a megoldás nem csak modernebb, de a felhasználók szempontjából is kényelmesebb, akiknek így nem kell személyesen befáradni egy eseményre regisztrálásához.

## 3. Jelenlegi üzleti folyamatok:

 - Az alapanyagok beszerzése:
    - papír beszerzése
    - tintapatronok megvásárlása

 - A regisztrációs tábla elkészítése:
    - kérdőív megtervezése
    - nyomtatás
 - Regisztrálás az eseményre
    - megérkezés az egyetemi sportesemény helyszínére
    - jelentkezés a szervező kollégánál


## 4. Igényelt üzleti folyamatok:

 - Felhasználói rendszer:
 
    - Az oldalt csak a weboldalra regisztráltak vehetik igénybe
    - A felhasználók között különböztessük meg az ott dolgozókat, hallgatókat és külső vendégeket
 - Új esemény regisztrációja
 
    - Eseményeket csak az egyetemen dolgozó kollégák tudjanak létrehozni
    - esemény adatainak elkészítése
    - QR kód generálása az eseményhez
 - Eseményre regisztráció:
 
    - az eseményre kattintva részletek jelennek meg róla
    - Külön gombokkal lehet jelentkezni, mint résztvevő illetve néző
 - Eseményre megjelenés igazolása:
 
     - a QR-kód leolvasásával a felhasználó tudja igazolni, hogy az eseményen megjelent
 
 ## 5. A rendszerre vonatkozó szabályok
   A felület legyen intuitív, letisztult design.
   
   A megoldás csak autentikációval vehető igénybe.
   
   Az eseményekhez tartozó regisztrációs nyilvántartás kinyomtatható legyen.
   
   
 ## 6. Követelménylista
K01 Könnyen átlátható felület.

K02 Eszközfüggetlen design.

K03 A megoldás esetleg nevezés adminisztrálására is legyen alkalmas.

K04 Események hozzáadása.

k05 Eseményhez tartozó nyilvántartás kiexportálása.

K06 Az eseményhez QR-kód generálása.

K07 A QR-kód kinyomtathatósága.

## 7. Fogalomtár 

Design - Stílus, forma, kinézet

Intuitív - Magától értetődő

Autentikáció - Hitelesítés. (A projekt esetében: Rendelkezni kell felhasználói fiókkal az oldal használatához.)

QR-kód: Angolul quick response code. Gyakorlatilag egy kétdimenziós vonalkód, amely a telefon kamerájával leolvasható. A projekt esetében felgyorsítja az adminisztrálást.

Exportál: Adatok mentése külön fájlba. Itt: egy eseményhez tartozó adatok kinyerése az adatbázisból, azok rendezett megjelenése például egy Excel táblázatban.

