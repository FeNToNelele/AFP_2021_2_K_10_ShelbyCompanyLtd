## 2. Projektterv
Projektmunkások, felelősségek:

Adatbázis tervezés és annak létrehozása: Kecse Károly, Nagy Péter Axel

Frontend: Kecse Károly, Nagy Péter Axel, Sárosi Gábor

Frontend design: Sárosi Gábor

Backend: Kecs Károly, Nagy Péter Axel,  Sárosi Gábor

Tesztelés: Kecse Károly, Nagy Péter Axel, Sárosi Gábor

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

## 9. Implementációs terv
A felület HTML, JS, és PHP nyelven készül. Az oldalakat és azok vezérlését végző fájlokat a framework által karbantartott fájl rendszerezés szerint hoztuk létre.
A szabványos fájlkezelés végett átláthatóbb és egyszerűbb lesz a későbbi fejlesztési folyamatok során megérteni a rendszer felépítését.

A frontend elkészítése során CSS, BootStrap illetve Tailwind CSS használatára került sor, ezek felgyorsították a felület szerkesztésének folyamatát.


## 10. Tesztterv
A teszteléseket egy külön jegyzőkönyvben fogjuk majd vezetni és folyamatosan jegyzetelni a fejlesztés során. Több tesztelés fog történni a fejlesztés alatt (Alfa, Béta és végleges teszt), 

Minden teszt 1 hetet fog igénybe venni és minden funkció átvizsgálásra fog kerülni. A fejlesztő csapat mindegyik tagja külön-külön fogja tesztelni a weboldalt.

A tesztjegyzőkönyv megtalálható a többi dokumentáció között.

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

