# Rendszerterv


## 1. A rendszer célja
Megrendelőnk eddig papír alapon vezette a különféle sportrendezvényekre való regisztrálást. 
Ez meglehetősen nehézkes megoldásnak bizonyul, 
mivel a papír könnyen elveszhet, nem beszélve magáról a regisztrálás nehézségéről. 
A felhasználóknak személyesen kell regisztrálniuk egy eseményre. 
A nagyobb felhasználási kör érdekében fontos, 
hogy minden eszközön használható legyen a felület, 
ezért egy reszponzív web-es alkalmazás mellett döntöttek, amihez feltétlenül valamilyen PHP alapú framework-höz ragaszkodnak, 
így a továbbfejlesztés folyamata is egyszerűbb lesz a későbbiekben.



## 2. Projektterv
Projektmunkások, felelősségek:

Adatbázis tervezés és annak létrehozása: Kecse Károly, Nagy Péter Axel

Frontend: Kecse Károly, Nagy Péter Axel, Sárosi Gábor

Frontend design: Sárosi Gábor

Backend: Kecs Károly, Nagy Péter Axel,  Sárosi Gábor

Tesztelés: Kecse Károly, Nagy Péter Axel, Sárosi Gábor

## 3. Üzleti folyamatok modellje

![Üzleti folyamatok modellje](https://imgur.com/7O7U80E.png)

## 4. Követelmények
 - Funkcionális követelmények
   - Felhasználó bejelentkezési adatainak tárolása
   - Felhasználói jogkörök kialakítása
   - Események adatainak tárolása
     - Események, azokhoz lehetséges résztvevők
   - Webes környezeten való stabil működés
 - Nem funkcionális működés
   - A bejelentkezés nélküli felhasználók ne férhessenek hozzá az események jelentkezéséhez és azok kezeléséhez
   - Eseményeken megjelentkezről lekérdezhető az egyes statisztika
     - ehhez csak az adminisztrációs személy férhet hozzá
   - A bejelentkezés nélküli felhasználó csak az események részleteihez illetve listázásához fér hozzá
 - Törvényi előírások, szabályok
   - A web felület szabványos eszközökkel készüljön, html/php/css
   - Intuitív, átlátható rendszer
   - GDPR szabályoknak való megfelelés

## 5. Funkcionális terv
 - Rendszerszereplők
    - Admin  
    - Dolgozó
    - Hallgató
    - Vendég
 - Rendszerhasználati esetek és lefutásaik:
    - ADMIN:
        - Rendszer feletti korlátlan hozzáférés
        - Események létrehozása
        - Események szerkesztése
        - Események törlése
        - Az egyes eseményekre vonatkozó statisztikák megjelenítése
    - Vendég
        - Eseményekhez való hozzáférés, jelentkezés hivatkozáson keresztü
    - Hallgató
        - Eseményekhez való hozzáférés, jelentkezés hivatkozáson keresztül
    - Dolgozó
        - Eseményekhez való hozzáférés, jelentkezés hivatkozáson keresztül
        - Események létrehozása, módosítása, törlése
 - Menü-architektúrák:
    - BEJELENTKEZÉS:
        - User autentikáció, jelentkezéshez szükséges
    
    - Regisztráció
        - Felhasználók regisztrációws felülete a rendszerbe, így nem kell minden esetben megadni az alapadatokat
    - Kijelentkezés


## 6. Fizikai környezet
Az alkalmazás WEB platformon készül.

 A BootStrap alkalmazása miatt hordozható eszközökön (okostelefon, táblagépek) illetve asztali számítógépeken is egyformán elérhető.
Laravel framework segítségével szabványos eljárásokkal készült backend és frontend

Fejlesztői eszközök:

-Visual Studio Code

-MySQL Workbench

-Laravel

-XAMPP

-Tailwind

## 7. Architektúrális terv
Backend:

-A backend fejlesztéséhez szükséges egy adatbázis szerver, amit MySQL-lel valósítuttuk meg

-Laravel framework a szabványos fájlkezelés és összetettebb fejlesztési lehetőségek végett

-PHP

-JavaScript

Frontend:

-BootStrap

-TailWind CSS

##  8. Adatbázis terv

![Adatbázis terv](https://imgur.com/Ji4ywqC.png)

## 9. Implementációs terv
A felület HTML, JS, és PHP nyelven készül. Az oldalakat és azok vezérlését végző fájlokat a framework által karbantartott fájl rendszerezés szerint hoztuk létre.
A szabványos fájlkezelés végett átláthatóbb és egyszerűbb lesz a későbbi fejlesztési folyamatok során megérteni a rendszer felépítését.

A frontend elkészítése során CSS, BootStrap illetve Tailwind CSS használatára került sor, ezek felgyorsították a felület szerkesztésének folyamatát.


## 10. Tesztterv
A teszteléseket egy külön jegyzőkönyvben fogjuk majd vezetni és folyamatosan jegyzetelni a fejlesztés során. Több tesztelés fog történni a fejlesztés alatt (Alfa, Béta és végleges teszt), 

Minden teszt 1 hetet fog igénybe venni és minden funkció átvizsgálásra fog kerülni. A fejlesztő csapat mindegyik tagja külön-külön fogja tesztelni a weboldalt.

A tesztjegyzőkönyv megtalálható a többi dokumentáció között.

## 11. Telepítési terv
A weboldal használatához szüksége lesz a felhasználónak egy böngésző használatához 
(Opera, Microsoft Edge, Google Chrome, Mozilla Firefox), más egyébre nincs szüksége a felhasználónak, 
illetve telefonos applikáció használata esetén letölteni 
a Google Play áruházból vagy App Store-ból.



## 12. Karbantartási terv
“Az alkalmazás folyamatos üzemeltetése és karbantartása, mely

magában foglalja a programhibák elhárítását, a belső igények változása miatti

módosításokat, valamint a környezeti feltételek változása miatt

megfogalmazott program-, illetve állomány módosítási igényeket.

Karbantartás:

Corrective Maintenance: A megrendelő jelenti, ha bármi hibát vélt felfedezni.

Adaptive Maintenance: A program naprakészen tartása és finomhangolása.

Perfective Maintenance: A szoftver hosszútávú használata érdekében végzett

módosítások, új funkciók, a szoftver teljesítményének és működési

megbízhatóságának javítása.

Preventive Maintenance: Olyan problémák elhárítása, amelyek még nem

tűnnek fontosnak, de később komoly problémákat okozhatnak.

