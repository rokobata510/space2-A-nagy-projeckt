# Rendszerterv
------
## 1. A rendszer célja
   A rendszer célja, hogy az oldalra ellátogató felhasználóknak(első sorban fiatalok a célközönségünk) lehetőséget adjunk egy egyszerű ám, de populáris kép kitalálására valamint verseny helyzetet teremtsünk a helyes és helytelen válaszok átlagának megjelenítésével az oldalra ellátogatók között. A képeket különféle kutatási és filozófiai mélységgel kerestük meg, hogy a megtekintői számára tökéletes élményt nyújtson valamint könnyed felismerhetőséget adjon a felhasználók számára. A felület egyszerűségében rejti a szépségét és varázsát. Egyszerre tükröz eleganciát és humort. Stílusával görbe tükröt mutat saját magának valamint a világnak.

## 2. Projektterv
### 2.1 Projektszerepkörök, felelőségek:

   * Scrum masters: Takács Róbert

   * Product owner: Takács Róbert

   * Üzleti szereplő: Takács Róbert

_________________ 

### 2.2 Projektmunkások és felelőségek:

   * Frontend:

        elsődleges: Petrovics Tímea

        másodlagos: Szilágyi Debóra

        harmadlagos: Les Heidrich

        utólagos: Rokob Attila Adrián

   * Backend:

       elsődleges: Rokob Attila Adrián

       másodlagos: Les Heidrich

       harmadlagos: Szilágyi Debóra

       utólagos: Petrovics Tímea

   * Tesztelés:

       elsődleges: Les Heidrich

       másodlagos: Szilágyi Debóra

       harmadlagos: Rokob Attila Adrián

       utólagos: Petrovics Tímea 

_________________

### 2.3 Ütemterv:

|Funkció | Feladat | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |

|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|

|Követelmény specifikáció |Megírás | 2 | 2 | 1,5 | 2 | 2 |

|Funkcionális specifikáció|Megírás | 1,5 | 1 | 1,5 | 1 | 1 |

|Rendszerterv |Megírás | 1 | 2 | 2 | 1 | 3 |

|Program |Képernyőtervek elkészítése | 3 | 4 | 4 | 3 | 3 |

|Program |Prototípus elkészítése | 4 | 8 | 9 | 8 | 8 |

|Program |Alapfunkciók elkészítése | 3 | 8 | 8 | 9 | 7 |

|Program |Tesztelés | 4 | 2 | 3 | 3 | 2 |

_________________

### 2.4 Mérföldkövek:

   10. 06. ~ Az ötlet gondolatának megszületése ~

   10. 07. ~ Frontend tervének megbeszélése ~

   10. 13. ~ Kód és dokumentáció elkezdése ~

   10. 20. ~ Dokumentáció befejezése ~

   10. 23. ~ Első tesztek ~

   10. 24. ~ Dokumentáció helyesírásának javítása ~

   10. 27. ~ Kód megírásának befejezése ~

   10. 29. ~ Végső tesztelések ~

   11. 03. ~ Hibajavítások és dokumentáció kinézet szerkeztés. ~

   11. 10. ~ Közel végső állapot bemutatása ~

   12. 08. ~ Utolsó hiba javítások és végleges verzió kiadása ~

## 3. Üzleti folyamatok modellje
### 3.1 Üzleti szereplők

Az oldal regisztrációt igényel a megtekintéséhez. Bármely eszközön megtekinthető és használható internet kapcsolat és web böngésző feltétele mellett. Nem igényel szoftvertelepítést azonban böngészőnek kell, lennie a felhasználó eszközén ám ez lehet egy alapböngésző például: Internet Explorer is. Az a döntés, hogy milyen eszközön és milyen böngészőben nyitja meg az oldalt a felhasználó az teljesen rá és a meglévő eszközeire van bízva.

### 3.2 Üzleti folyamatok

Az oldalra való regisztrációt(vagy amennyiben már van felhasználói fiókja az illetőnek bejelentkezés) után egyből a képfelismerős játék kerül a felhasználó szeme elé. Felül egy menü sávban tud a további opciók között váltani. Csupán három opcióra van lehetősége amivel az idősebbek számára akarjuk a könnyed tájékozódást segíteni. Az opciók pedig: a képfelismerős "játékban" tartózkodni, adatait módosítani/új adatokat megadni és kijelentkezni.

## 4. Követelmények
### Funkcionális követelmények

| ID | Megnevezés | Leírás |

| --- | --- | --- |

| K1 | Szövegdoboz | Ebbe az elembe lehet szöveget írni és így a fotón szerepelő alanyt megtippelni. |

| K2 | Kép | Kép láthatósága és minőségi kinézete az elvárt keretek között. |

| K3 | Backend | Gyors betöltés, hibamentes működés, szép kódolás |

| K4 | Küldés gomb | A gomb működik és adatot dob vissza a felhasználónak. |

| K5 | Helyes találat | A felhasználó üzenetet kap a helyes találat esetén |

| K6 | Helytelen találat | A felhasználó üzenetet kap a helytelen találat esetén |

| K7 | Menüsor | A menüsor működik és a megfelelő oldalra dob kattintás után. |

| K8 | Név módosítás | A felhasználó nevét lehet módosítani vele |

| K9 | Jelszó módosítás | A felhasználó a jelszavát tudja módosítani vele |

| K10 | Kép feltöltés | A felhasználó profilképet tud magának feltölteni |

| K11 | Átlag pont | A helyes és helytelen válaszok átlaga megjelenik. |

____

### Nem funkcionális követelmények

| ID | Megnevezés | Leírás |

| --- | --- | --- |

| K1 | Frontend | Letisztult és igényes külső, amely könnye átlátható mégis illik az oldal egyedi tematikájába. |

_____

### Támogatott eszközök:

Web böngészők például: Chrome, Firefox, Opera [...]

Megtekinthető okos telefonokon; tableteken; laptopokon [...] 

## 5. Funkcionális terv
### 5.1 Rendszerszereplők

A rendszer internet hiányában is működtethető importálás megtörténte feltétele mellett. Jogosultsági körben a felhasználók között kettőt különböztetünk meg az admin és az egyszerű felhasználót. Az admin felhasználó több olyan funkciót is lát amit más felhasználók nem tekinthetnek meg és/vagy nincs joguk azon változtatásához.

______

### 5.2 Menühierarchiák

Az oldalunkon egy egyszerű menürendszert alkalmazunk. Bejelentkezés után a felhasználót a főoldal fogadja, ahol megtalálja magát a kép felismerős rendszert valamint innen tud átlépni más menü pontokba is. Ilyen az adatait tartalmazó menüpont is ahol testre szabhatja felhasználói képét valamint nevet és jelszót változtathat.

## 6. Fizikai környezet
### Vásárolt szoftverkomponensek és külső rendszerek

Nem igényel vásárolt szoftverkomponenst ugyanis bármilyen webböngésző és internet kapcsolat rendelkezés feltétele mellett bárki futtatni tudja.

___

### Hardver topológia

Az oldal elektronikai eszközön(laptop, telefon) amely rendelkezik egy böngészővel könnyedén futtatható hiba nélkül.

___

### Fizikai alrendszerek

Egy böngésző, amely az elektronikai eszközön fut abba lehetséges az oldal futtatása és megtekintése. (például: Internet Explorer, Chrome, Mozilla Firefox, Opera Browser stb.)

___

### Fejlesztő eszközök:

- Figma

- Trello

- Github

- Visual Studio Code (Laravel, PHP, HTML, CSS, Javascript)

## 7. Architekturális terv
Webszerver

Adatbázis rendszer

A program elérése, kezelése

## 9. Implementációs terv
