<h1 align="center">
Követelmény Specifikáció
</h1>

## 1. Áttekintés
A space nevet viselő csapatunk azzal a feladattal lett megbízva, hogy tervezzen egy olyan   
könnyedén átlátható, egyszerű, szórakozási célra szánt oldalt, amelyen vicces képeket, úgynevezett       
meme-ket kell kitalálniuk a felhasználóknak az adott képrészlet alapján. Ezek helyes megfejtése    
után pontokat kapnak, melyeket gyűjtögethetnek a játékok során. A felhasználók versenyezhetnek        
egymással pontszámaik alapján. &nbsp; A felhasználók részéről a célja, hogy könnyen kezelhető         
és átlátható, egységes felület, gyorsan bármilyen eszközről elérhető legyen és csupán egy        
regisztráció szükséges hozzá.

## 2. A jelenlegi helyzet leírása 
A 21. század fiatal generációi az internet korába születtek bele. Ebből kifolyólag már egészen      
fiatal korukban érdeklődést mutatnak az okos eszközök iránt (ezzel párhuzamban az interneten található       
weboldalak iránt). Jelenleg a szülők ki is használják ezen érdeklődést a gyermekeik részéről és     
könnyedén adnak a kezükbe egy-egy weboldalt és/vagy alkalmazást mely órákra is lefoglalják a gyereket      
így csendet és nyugalmat elérve a hiperaktívabb picik között is. Oldalunkon a sok színes forma és kép erre        
tökéletes célt tud szolgálni. Valamint azt se felejtsük el, hogy interakciós kép felismerős lehetőség a hosszútávú         
és rendszeres visszatérésre is nagyszerű kikapcsolódás a kicsiknek és nagyoknak egyaránt. A fotók több órás        
kutató munka során lettek összeválogatva, hogy a Z (és fiatalabb) generációknak megfelelő valamit felismerhető      
formátumban jelenhessenek meg.

## 3. Vágyálomrendszer 
A projektünk során csapatunk arra törekszik, hogy egy olyan weblapot hozzon létre mely képes       
a fiataloknak szórakoztatást nyújtani egy képfelismerős játék keretein belül. Regisztrációs felület       
lehetőséget ad az felhasználó pontjainak átlagának tárolására és ezáltal csoportos verseny helyzet        
kialakulását adja meg a felhasználók között. A háttér kialakítását figyelem felhívó szem       
elkápráztató színes világ adja meg míg a kép kerete és a szövegek egy egyszerűbb a háttérrel        
komplementer megoldást képviseltetnek. Célunk, hogy egy hasznos és társadalom számára értékes           
oldallal gazdagítsuk a világhálót.

## 4. Jelenlegi üzleti folyamatok modellje 
A 21 század fiatal generáció között nagyon elterjedtek az úgy nevezett "meme" képek.          
A Wikipédia fogalmazását idézve a mém egy olyan kifejezést vagy fogalmat takar, ami divatszerűen          
terjed embertől emberig az interneten. Kicsit leegyszerűsítve a meme egy olyan kép amihez humoros         
szöveges jelentést írtunk. Oldalunk központjában ezek a népszerű képek állnak. A felhasználónak ki         
kell találnia a populáris kép nevét és így pontokat gyűjthet. Ezzel a pontgyűjtő rendszerrel         
teremtjük meg a verseny helyzetet a felhasználók között ami végett arra ösztönözzük az oldalra     
látogatókat, hogy többszörösen is vissza térnek. Oldalunk stílusa a letisztultságra és egyszerű       
eleganciájával valamint azzal, hogy kerüli a hirdetések nagy mennyiségű és zavaró használatát teremti         
meg a felhasználóbarát környezetet.         

## 5. Igényelt üzleti folyamatok modellje 
![terv](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/terv.png)

## 6. Követelménylista
| Id | Modul | Név | Leírás |
| --- | --- | --- | --- |
| K1 | Felület | Főoldal | a kép itt látható |
| K2 | Felület | Főoldal | itt van a kép kitalálási lehetőséget adó szöveg doboz |
| K3 | Adatbázis | Adatbázis | adat tárolásra szolgál | 
| K4 | Kód  | HTML | az oldal vázát adja |
| K5 | Kód  | CSS | az oldal kinézetéért felelős |
| K6 | Kód  | PHP | a funkciók működéséért felel |
| K7 | Felület | Adatok | jelszó változtatás lehetőség helye |
| K8 | Felület | Adatok | felhasználónév változtatás lehetőség helye |
| K9 | Felület | Adatok | email változtatás lehetőségének helye |
| K10 | Kód | Laravel | a felület vázát adja |
| K11 | Felület | Regisztráció| a felhasználó itt tud regisztrálni |
| K12 | Felület | Bejelentkezés | a felhasználó itt tud bejelentkezni |
| K13 | Adatbázis | tábla(user) | itt tárolódnak a felhasználó adatok |
| K14 | Adatbázis |  tábla(pics) | itt tárolódnak a képek |
  
## 7. Fogalomtár
- WEBOLDAL: jelen helyzetben egy felület melyen kommunikációra van szükség egy kép megoldása kapcsán.
- HASZNÁLAT: a felhasználó az oldalon megjelenő képet látja meg először. A fotón megtekinthető ismert médiai alak elemzése után beírja a nevét az oldal alján lévő keretbe majd az oldal egy 'helyes' vagy 'téves' visszajelzést ad a felhasználó számára.
- FRONT_END: a programoknak, weboldalaknak az a része, amelyik a felhasználóval közvetlenül kapcsolatban van. Feladata az adatok megjelenése, befogadása a felhasználó felől.
- BACK_END: a programoknak, weboldalaknak a hátsó, a felhasználó elől rejtett, a tényleges számításokat végző része. Feladata a front‑end felől érkező adatok feldolgozása, és az eredményeknek a front‑end felé történő visszajuttatása.


