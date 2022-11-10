# Rendszerterv
------
## 1. A rendszer célja
   A rendszer célja, hogy az oldalra ellátogató felhasználóknak(első sorban fiatalok a célközönségünk) lehetőséget adjunk egy egyszerű ám, de populáris kép kitalálására valamint verseny helyzetet teremtsünk a helyes és helytelen válaszok átlagának megjelenítésével az oldalra ellátogatók között. A képeket különféle kutatási és filozófiai mélységgel kerestük meg, hogy a megtekintői számára tökéletes élményt nyújtson valamint könnyed felismerhetőséget adjon a felhasználók számára. A felület egyszerűségében rejti a szépségét és varázsát. Egyszerre tükröz eleganciát és humort. Stílusával görbe tükröt mutat saját magának valamint a világnak.

## 2. Projektterv
### 2.1 Projektszerepkörök, felelőségek:

   * Scrum masters: **Takács Róbert**

   * Product owner: **Takács Róbert**

   * Üzleti szereplő: **Takács Róbert**


### 2.2 Projektmunkások és felelőségek:

   * **Frontend:**

        Elsődleges: **Petrovics Tímea**

        Másodlagos: **Szilágyi Debóra**

        Harmadlagos: **Heidrich Lóránd**

        Utólagos: **Rokob Attila Adrián**

   * **Backend:**

       Elsődleges: **Rokob Attila Adrián**

       Másodlagos: **Heidrich Lóránd**

       Harmadlagos: **Szilágyi Debóra**

       Utólagos: **Petrovics Tímea**

   * **Tesztelés:**

       Elsődleges: **Heidrich Lóránd**

       Másodlagos: **Szilágyi Debóra**

       Harmadlagos: **Rokob Attila Adrián**

       Utólagos: **Petrovics Tímea**


### 2.3 Ütemterv:

|Funkció | Feladat | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|--------|---------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás | 2 | 2 | 1,5 | 2 | 2 |
|Funkcionális specifikáció|Megírás | 1,5 | 1 | 1,5 | 1 | 1 |
|Rendszerterv |Megírás | 1 | 2 | 2 | 1 | 3 |
|Program |Képernyőtervek elkészítése | 3 | 4 | 4 | 3 | 3 |
|Program |Prototípus elkészítése | 4 | 8 | 9 | 8 | 8 |
|Program |Alapfunkciók elkészítése | 3 | 8 | 8 | 9 | 7 |
|Program |Tesztelés | 4 | 2 | 3 | 3 | 2 |


### 2.4 Mérföldkövek:

   10. 06 ~ Az ötlet gondolatának megszületése ~

   10. 07 ~ Frontend tervének megbeszélése ~

   10. 13 ~ Kód és dokumentáció elkezdése ~

   10. 20 ~ Dokumentáció befejezése ~

   10. 23 ~ Első tesztek ~

   10. 24 ~ Dokumentáció helyesírásának javítása ~

   10. 27 ~ Kód megírásának befejezése ~

   10. 29 ~ Végső tesztelések ~

   11. 03 ~ Hibajavítások és dokumentáció kinézet szerkeztés. ~

   11. 10 ~ Közel végső állapot bemutatása ~

   12. 08 ~ Utolsó hiba javítások és végleges verzió kiadása ~

## 3. Üzleti folyamatok modellje
### 3.1 Üzleti szereplők

Az oldal regisztrációt igényel a megtekintéséhez. Bármely eszközön megtekinthető és használható internet kapcsolat és web böngésző feltétele mellett. Nem igényel szoftvertelepítést azonban böngészőnek kell, lennie a felhasználó eszközén ám ez lehet egy alapböngésző például: Internet Explorer is. Az a döntés, hogy milyen eszközön és milyen böngészőben nyitja meg az oldalt a felhasználó az teljesen rá és a meglévő eszközeire van bízva.

### 3.2 Üzleti folyamatok

Az oldalra való regisztrációt(vagy amennyiben már van felhasználói fiókja az illetőnek bejelentkezés) után egyből a képfelismerős játék kerül a felhasználó szeme elé. Felül egy menü sávban tud a további opciók között váltani. Csupán három opcióra van lehetősége amivel az idősebbek számára akarjuk a könnyed tájékozódást segíteni. Az opciók pedig: a képfelismerős "játékban" tartózkodni, adatait módosítani/új adatokat megadni és kijelentkezni.

![terv](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/terv.png)

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



### Nem funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Frontend | Letisztult és igényes külső, amely könnye átlátható mégis illik az oldal egyedi tematikájába. |



### Támogatott eszközök:

Web böngészők például: Chrome, Firefox, Opera [...]

Megtekinthető okos telefonokon; tableteken; laptopokon [...] 

## 5. Funkcionális terv
### 5.1 Rendszerszereplők

A rendszer internet hiányában is működtethető importálás megtörténte feltétele mellett. Jogosultsági körben a felhasználók között kettőt különböztetünk meg az admin és az egyszerű felhasználót. Az admin felhasználó több olyan funkciót is lát amit más felhasználók nem tekinthetnek meg és/vagy nincs joguk azon változtatásához.



### 5.2 Menühierarchiák

Az oldalunkon egy egyszerű menürendszert alkalmazunk. Bejelentkezés után a felhasználót a főoldal fogadja, ahol megtalálja magát a kép felismerős rendszert valamint innen tud átlépni más menü pontokba is. Ilyen az adatait tartalmazó menüpont is ahol testre szabhatja felhasználói képét valamint nevet és jelszót változtathat.

## 6. Fizikai környezet
### Vásárolt szoftverkomponensek és külső rendszerek

Nem igényel vásárolt szoftverkomponenst ugyanis bármilyen webböngésző és internet kapcsolat rendelkezés feltétele mellett bárki futtatni tudja.



### Hardver topológia

Az oldal elektronikai eszközön(laptop, telefon) amely rendelkezik egy böngészővel könnyedén futtatható hiba nélkül.



### Fizikai alrendszerek

Egy böngésző, amely az elektronikai eszközön fut abba lehetséges az oldal futtatása és megtekintése. (például: Internet Explorer, Chrome, Mozilla Firefox, Opera Browser stb.)



### Fejlesztő eszközök:

- Figma

- Trello

- Github

- Visual Studio Code (Laravel, PHP, HTML, CSS, Javascript)

## 7. Architekturális terv
Webszerver

Adatbázis rendszer

A program elérése, kezelése

## 8. Adatbázis terv
~folyamatban~

## 9. Implementációs terv
- PHP és Laravel alapú oldal, 

- MYSQL segítségével adatokat tárol,

- HTML/CSS kód segítségével könnyedén megtekinthető böngészőben (eszköztől függetlenül)

## 10. Tesztterv
### Tesztesetek:

 | Tesztterv | Elvárt eredmény | 
 |-----|-----|
 | Szövegdoboz | Az írás opciója lehetséges, olvasható, látható. | 
 | Kép megjelenés | A kép látható és nem torz(pixeles, darabos)  |
 | Helyes válasz adás | Megfelelő visszajelzést ad a felhasználó számára/ a következő oldalra dob |
 | Hibás válasz adás | Megfelelő visszajelzést ad a felhasználó számára/ a következő oldalra dob |
 |Új kép helyes válasz esetén| Új kép megjelenik helyes válasz esetén |
 | Helyes válasz átlag | A profiladatoknál a helyes és helytelen válaszok átlaga megjelenik pontosan |
 | Név váltás | A felhasználó könnyen nevet tud változtatni |
 | Jelszó váltás | A felhasználó könnyen jelszót tud változtatni |
 | Kép beállítás lehetősége | A felhasználó könnyen egyedi profil képet tud beállítani |
 | Regisztráció | Új felhasználó regisztrációja működőképes |
 | Bejelentkezés | A felhasználó be tud lépni az oldalra |
 | Elérhetőség | A felhasználó csak bejelentkezés után érheti el az oldalt |
 | ... | ... |



### A tesztelési stratégia:

Fejlesztői csapatunk folyamatosan teszteli a fejlesztett funkciókat és értesítjük egymást a fenn maradott hibák meglétéről, hogy javításuk mielőbb meg tudjuk kezdeni. A teszteléseink gyakoriságának és sokszínűségének célja, hogy minél több ember könnyebben tudja átfésülni és jelenteni a hibákat a csapat számára mely elsődleges célja, hogy minél több hiba megtalálásra leljen.



### A tesztelési jegyzőkönyv kitöltésére egy sablon:

Tesztelő: Vezetéknév Keresztnév

Tesztelés dátuma: Év.Hónap.Nap

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés|
|-------|----------|-----------|--------|---------|
például. #01 | Kép | A kép látható és változik,  | A kép változik | Nem találtam problémát.|
|... | ... | ... | ... | ...|



továbbit részletes tesztek: Teszt.md

## 11. Telepítési terv
A programunk futtatásához csupán egy webböngésző szükségeltetik amely a legtöbb informatikai eszközön alapból megtalálható. Ez által nem igényel sem fizikai sem pedig szoftver telepítést ezzel is felhasználó baráttá téve az oldalt.

## 12. Karbantartási terv
Elkerülhetetlen napi ellenőrzési folyamatok:

    - Az oldal betölt hibátlanul (nem lassú, látható)

    - A kép tökéletesen látható

    - A tippelés rendszer megfelelően ad vissza igaz vagy hamis választ

    - Az oldal kinézete nincs elcsúszva és minden eszközön látható

Alkalmanként ellenőrzési terv:

    - Kód modernizálása

    - Rendszeres képtárbővítés

    - Korszerűsített frontend változtatások

    - Felhasználók által adott hibák és kiskapuk kezelése/javítása

