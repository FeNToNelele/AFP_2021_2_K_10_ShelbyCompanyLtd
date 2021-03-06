# Telepítési útmutató Microsoft Windows operációs rendszerre

## 1. lépés: Adatbázis beüzemelése
- A weboldal adatbázis hátterének létrehozásához szükségünk van egy XAMPP nevű programra, amely egy szervert fog számunkra szimulálni.
[Letöltés](https://www.apachefriends.org/xampp-files/8.0.13/xampp-windows-x64-8.0.13-0-VS16-installer.exe)
- Telepítsük, majd indítsuk el!

Opcionális: A megkapott sportesemeny.sql fájlt mozgassuk a telepített program főkönyvtárába! (C:/xampp)

- A felugró menüben kattintsunk a MySQL sorában a Start gombra! Ekkor elindul a MySQL szerverünk, aminek segítségével minden szükséges adatot el tudunk a későbbiekben tárolni!
- Kattintsunk a menüben a Shell gombra!
 
Jelentkezzünk be az alábbi kóddal:
```
mysql -u root -p
```

- Nyomjunk entert kétszer.

Hozzuk létre az adatbázist:
```
create database sportesemeny;
```

Opcionális: CTRL+C billentyűkombinációval lépjünk ki, majd importáljuk be az adatbázist:
```
mysql -u root -p sportesemeny < sportesemeny.sql
```


## 2. lépés: A Laravel framework telepítése
- Telepítenünk kell a Composer nevű programot.
[Letöltés](https://getcomposer.org/Composer-Setup.exe)

- Készítsünk egy mappát! Ide kell mindig navigálnunk, akárhányszor el szeretnénk indítani a weboldalt!
- Illesszük be ide a letöltött állományt!
- Indítsuk el a Windows PowerShellt. Navigáljunk el az előbb létrehozott mappába. 

Írjuk be az alábbi parancsot:
```
php artisan key:generate
```

Ezután nyissuk meg a ```.env``` nevű fájlt. Az itt felsorolt adatokat állítsuk be az általunk készített adatbázis adataira!

Most a PowerShellbe írjuk be:
```
php artisan migrate --seed
```

Ezután pedig indítsuk el a szervert!
```
php artisan serve
```

## A PowerShellben megjelenő linkkel azonnal elérhető és használható a weboldal!

