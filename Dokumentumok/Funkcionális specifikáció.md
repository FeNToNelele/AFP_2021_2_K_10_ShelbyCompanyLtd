## 1. Áttekintés

Egy olyan webalkalmazást fejlesztünk, aminek segítségével ügyfelünk korszerűbb módon végezheti el eseményeinek nyilvántartását. Célunk, hogy minden  eszközön könnyedén használható legyen a rendszer. A weboldal autentikációs rendszerrel lesz felügyelve.

## 2. Jelenlegi helyzet

Megrendelőnk eddig papír alapon vezette a különféle sportrendezvényekre való regisztrálást. Ez meglehetősen nehézkes megoldásnak bizonyul, mivel a papír könnyen elveszhet, nem beszélve magáról a regisztrálás nehézségéről. A felhasználóknak személyesen kell regisztrálniuk egy eseményre. A nagyobb felhasználási kör érdekében fontos, hogy minden eszközön használható legyen a felület, ezért egy reszponzív web-es alkalmazás mellett döntöttek, amihez feltétlenül valamilyen PHP alapú framework-höz ragaszkodnak, így a továbbfejlesztés folyamata is egyszerűbb lesz a későbbiekben.



## 3. Követelménylista

| Modul  | Id | Név | Kifejtés |
| ------------- | ------------- | ------------- | -------------|
| Felhasználói rendszer | F1  | Regisztráció | A felhasználók annak megfelelően, hogy milyen beosztásúak, tudjanak regisztrálni az oldalra |
| Felhasználói rendszer | F2  | Bejelentkezés | A felhasználók be tudjanak lépni az oldalra. |
| Eseménykezelés | E1  | Események listázása | A belépés után jelenjenek meg az események az oldalon. |
| Eseménykezelés | E2  | Új esemény hozzáadása | Az egyetem dolgozói tudjanak új eseményt létrehozni. |
| Eseménykezelés | E3  | Esemény módosítása | Adott esemény adatain lehessen utólag változtatni.  |
| Eseménykezelés  | E4  | Esemény törlése | Adott esemény adatait lehessen törölni. |
| Eseménykezelés | E5  | Esemény részletei | Egy eseményre kattintva megjelennek annak részletei. |
| UI  | U1  | Jelentkezés | Az esemény részletei után megjelenik egy jelentkezés gomb. Ennek segítségével tud jelentkezni a felhasználó az adott rendezvényre. |
| UI  | U2  | Reszponzív design | Az oldalnak megfelelő kinézete legyen különböző eszközökön. |
| UI  | U3  | Igazolás | A felhasználó ha megjelenik egy eseményen, legyen képes igazolni jelenlétét egy QR-kód leolvasásával. |

## 4. Jelenlegi üzleti folyamatok modellje.
Egy sporteseményen, vagy bármilyen egyetemi rendezvényen való részvételünket jelenléti ív kitöltésével tudjuk igazolni. Ez nem csak, hogy korszerűtlen, de felesleges időt vesz igénybe azoktól, akiknek az aláírásokkal kell bajlódni, valamint akik az adminisztrációs feladatokat végzik a rendezvénnyel kapcsolatban. Megoldásunk a környezetre is kevésbé káros hatást gyakorolna, hiszen a több példányos jelenléti ívek helyett csak egy QR-kódot kellene kinyomtatni, amivel a nyomtatás és papír árát is meg lehetne spórolni.

## 5. Igényelt üzleti folyamatok modellje.
Egy olyan rendszert szeretnénk létrehozni, amivel az egyetem dolgozói könnyen tudnának adminisztrációs feladatokat elvégezni a rendezvényekkel kapcsolatban (létrehozni, módosítani, törölni, hozzá tartozó adatokat lekérni, stb.). Fontosnak tartjuk, hogy egy univerzális megoldást tudjunk biztosítani a felhasználók körében, ezért a reszponzív kialakítású weboldal mellett döntöttünk, amit minden eszközről el lehet érni. Az oldal megjelenése letisztult, mégis igényes design-t kapna, felhasználása egyértelmű lenne az elektronikus világban kevésbé jártas felhasználók számára is. Különböző típusú felhasználói fiók létrehozására adunk esélyt (dolgozó/hallgató/külsős), szabályozva a rendszer funkcióihoz való hozzáféréseket. A meghirdetett eseményekre előzetesen lehet regisztrálni a weboldalon a megadott időintervallumban, majd a helyszínen leolvasott QR-kóddal megerősíteni a megjelenésünket. Később a dolgozóknak lehetőséget biztosítunk, hogy különböző statisztikákat lehessen lekérdezni az egyes eseményekről (érdeklődök hány százaléka jelent meg, kik jelentek meg [név/szak/neptun]).

## 6. Használati esetek.
Az oldal arra készült hogy segítse az Eszterházy Károly Egyetem Testnevelési intézmény munkáját azáltal, hogy az eddig papir alapon vezetett események 
rögzítése könnyebb legyen. Ezért készül el a weboldal és a mobil applikáció megoldás képpen.

A felhasználónak lehetősége lesz a weboldalon illetve mobil applikáción megjelent eseményekre jelentkezni.

## 7. Képernyőtervek

![https://i.imgur.com/zi8UEMv.png](https://i.imgur.com/zi8UEMv.png)
![https://i.imgur.com/lTaxhsD.png](https://i.imgur.com/lTaxhsD.png)

## 8. Forgatókönyvek

Admin szemszögéből: Bejelentkezés után hozzáférése lesz a teljes weboldalhoz, ezáltal létre tudja hozni az eseményeket amik esedékedek illetve módosítani és törölni is tudja majd azokat ezáltal feltudja majd mérni mennyien vesznek részt az adott eseményen.

Vendég szemszögéből: Alapadatok megadásával jelentkezhet az adott eseményre.


## 9. Fogalomszótár.

Autentikáció - Hitelesítés. (A projekt esetében: Ne kelljen külön felhasználói fiókot arra létrehozni, hogy kitöltsünk egy kérdőívet.)

Reszponzív: A weboldal méretezése automatikusan igazodik a használt eszközhöz.

Framework: Magyarul keretrendszer. Jelen esetben olyan eszköz, amely segíti a projekt hatékony fejlesztését.

Hivatkozás: Itt: Az elérési út, amin keresztül megnyílik egy kérdőív. Egy link.

