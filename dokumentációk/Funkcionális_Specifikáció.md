<h1 align="center", font color="red">
Funkcionális Specifikáció
</h1>

## 1. Jelenlegi helyzet leírása
A 21. század fiatal generációi az internet korába születtek bele. Ebből kifolyólag már egészen      
fiatal korukban érdeklődést mutatnak az okos eszközök iránt (ezzel párhuzamban az interneten      
található weboldalak iránt). Jelenleg a szülők ki is használják ezen érdeklődést a gyermekeik     
részéről és könnyedén adnak a kezükbe egy-egy weboldalt és/vagy alkalmazást mely órákra is lefoglalják     
a gyereket így csendet és nyugalmat elérve a hiperaktívabb picik között is. Oldalunkon a sok színes forma      
és kép erre tökéletes célt tud szolgálni. Valamint azt se felejtsük el, hogy interakciós kép felismerős lehetőség       
a hosszútávú és rendszeres visszatérésre is nagyszerű kikapcsolódás a kicsiknek és nagyoknak egyaránt. A       
fotók több órás kutató munka során lettek összeválogatva, hogy a Z (és fiatalabb) generációknak megfelelő      
valamit felismerhető formátumban jelenhessenek meg.

## 2. Vágyállomrendszer leírás
A projektünk során csapatunk arra törekszik, hogy egy olyan weblapot hozzon létre mely képes a     
fiataloknak szórakoztatást nyújtani egy képfelismerős játék  keretein belül. Regisztrációs felület       
lehetőséget ad az felhasználó pontjainak átlagának tárolására és ezáltal csoportos verseny helyzet       
kialakulását adja meg a felhasználók között. A háttér kialakítását figyelem felhívó szem elkápráztató      
színes világ adja meg míg a kép kerete és a szövegek egy egyszerűbb a háttérrel komplementer megoldást         
képviseltetnek. Célunk, hogy egy hasznos és társadalom számára értékes oldallal gazdagítsuk          
a világhálót.

## 3. Jelenlegi üzleti folyamatok modellje
A 21 század fiatal generáció között nagyon elterjedtek az úgy nevezett "meme" képek.       
A Wikipédia fogalmazását idézve a mém egy olyan kifejezést vagy fogalmat takar,      
ami divatszerűen terjed embertől emberig az interneten. Kicsit leegyszerűsítve a meme egy          
olyan kép amihez humoros szöveges jelentést írtunk. Oldalunk központjában ezek a népszerű       
képek állnak. A felhasználónak ki kell találnia a populáris kép nevét és így pontokat gyűjthet.        
Ezzel a pontgyűjtő rendszerrel teremtjük meg a verseny helyzetet a felhasználók között ami végett        
arra ösztönözzük az oldalra látogatókat, hogy többszörösen is vissza térnek. Oldalunk stílusa a          
letisztultságra és egyszerű eleganciájával valamint azzal, hogy kerüli a hirdetések nagy mennyiségű          
és zavaró használatát teremti meg a felhasználóbarát környezetet.
      
## 4. Igényelt üzleti folyamatok modellje
![terv](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/terv.png)

## 5. Követelmény lista
| __Id__ | Modul | Név | Leírás |
|---|---|---|---|
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

## 6. Használati esetek
- Egy kép megnevezésének kitalálása

- Adat szerkesztés (felhasználó név, kép és email változtatás)

- Regisztráció és bejelentkezés

- A kép megtekintése és vizuális felfogása

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket
1. A felhasználót a főoldal megnyitása következtében egy letisztult oldallal találják szemben magukat mely alján írási lehetősége van, tetején pedig az aktuális kép kitalálandó kép tekinthető meg.

2. Az adatok oldalon lehetősége van a felhasználónak az adatainak módosítására, mint az email, jelszó és felhasználó név.

3. Regisztrálni és utána bejelentkezni

4. Adatbázisban adatok tárolása a felhasználóról és az oldalon megjelenő képekről egyaránt.


## 8. Képernyő tervek
### Kezdetlegi tervek
|  |  |
|---|---|
| ![kül2](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/k%C3%BCl2.png) | ![kül5](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/k%C3%BCl5.png) |
| ![kül3](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/k%C3%BCl3.png) | ![kül4](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/k%C3%A9pek/k%C3%BCl4.png) |

### Jelenlegi kinézet
#### Felhasználói nézet
|  |  |
|---|---|
| ![log-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/log-jelenleg.png) | ![prof-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/prof-jelenleg.png) |
| ![reg-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/reg-jelenleg.png) | ![dash-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/dash-jelenleg.png) |

#### Admin nézet
|  |
|---|
| ![admin-img-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/admin-img-jelenleg.png) |
| ![admin-user-jelenleg](https://github.com/rokobata510/space2-A-nagy-projeckt/blob/main/képek/admin-user-jelenleg.png) |




