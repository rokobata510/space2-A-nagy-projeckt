# Tesztjegyzőkönyv

Teszteléseket végezte: Rokob Atilla

Operációs rendszer: Windows

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.10.20. | Funkcionális specifikáció formázás megfelelő | Sikeres | Nincs hiba |
| Teszt #2 | 2022.10.22. | Követelmény specifikáció formázás megfelelő | Sikertelen | A sortördelés javításra szorul |
| Teszt #3 | 2022.10.23. | Rendszerterv formázás megfelelő | Sikertelen | A sortördelés javításra szorul |
| Teszt #5 | 2022.10.26. | Regisztrációs oldal: jelszó mező hiba mentesen működik | Sikeres | Nincs hiba |
| Teszt #6 | 2022.10.30. | Regisztrációs oldal: működik a "már regisztrált?" felirat | Sikeres | Nincs hiba |
| Teszt #7 | 2022.10.31. | Bejelentkezés oldal: jelszó mező hiba mentesen működik | Sikeres | Nincs hiba |
| Teszt #8 | 2022.11.01. | Elfelejtett jelszó oldal: gomb működik | Sikeres | Nincs hiba |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.
Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ez a későbbiek során javításra szorul.

Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

### Alfa teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #2 | 2022.10.22. | 2022.10.23. | Követelmény specifikáció formázás megfelelő | Hiba javítva | Sortördelés megfelelő |
| Teszt #3 | 2022.10.23. | 2022.10.23. | Rendszerterv formázás megfelelő | Hiba javítva | Sortördelés megfelelő |

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.11.02. | Főoldal: címsáv: főoldal gomb kattintás után a megfelelő oldalra dob | Sikertelen | Hibát dobott az első teszt során. |
| Teszt #2 | 2022.11.02. | Főoldal: címsáv: profil gomb kattintás után a megfelelő oldalra dob | Sikertelen | Hibát dobott az első teszt során. |
| Teszt #3 | 2022.11.02. | Főoldal: címsáv: kijelentkezés gomb kattintás után a megfelelő oldalra dob | Sikertelen | Hibát dobott az első teszt során. |
| Teszt #4 | 2022.11.09. | Főoldal: az oldal kinézete megjelenik | Sikertelen | Nem érzékelte a css jelenlétét |
| Teszt #5 | 2022.11.25. | Profil: Jelszó frissítés: jelenlegi jelszó érzékelés és hiba dobás | Sikeres | Nincs hiba |
| Teszt #6 | 2022.11.30. | Profil: Jelszó frissítés: új jelszóra frissít az adatbázisban | Sikeres | Nincs hiba |

A Béta teszt sikeresen zajlott.
A Béta teszt során akadtan hibák, mely(ek) javításra szorulnak.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

### Béta teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #1 | 2022.11.02. | 2022.11.09. | Főoldal: címsáv: főoldal gomb kattintás után a megfelelő oldalra dob | Hiba javítva | Elérési út hiba kezelve a web.php ban |
| Teszt #2 | 2022.11.02. | 2022.11.09. | Főoldal: címsáv: profil gomb kattintás után a megfelelő oldalra dob | Hiba javítva | Elérési út hiba kezelve a web.php ban |
| Teszt #3 | 2022.11.02. | 2022.11.09. | Főoldal: címsáv: kijelentkezés gomb kattintás után a megfelelő oldalra dob | Hiba javítva | Elérési út hiba kezelve a web.php ban |
| Teszt #4 | 2022.11.09. | 2022.11.09. | Főoldal: az oldal kinézete megjelenik | Hiba javítva | Css elérési út pontosítva |


## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.11.30. | Admin felület: felhasználó adatok megtekinthetőek | Sikertelen | A jelszó formátum hibás |
| Teszt #2 | 2022.12.01. | Admin felhasználó létezik | Sikeres | Nincs hiba |
| Teszt #3 | 2022.12.05. | Admin felhasználó tud felhasználót törölni | Sikeres | Nincs hiba |
| Teszt #4 | 2022.12.06. | Admin fiók létrehozás lehetséges | Sikertelen | Hibát dobott |

### Végleges teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #1 | 2022.11.30. | 2022.11.30. | Admin felület: felhasználó adatok megtekinthetőek | Hiba javítva |Javítva a formátum |
| Teszt #4 | 2022.12.06. | 2022.12.06. | Admin fiók létrehozás lehetséges | Hiba javítva | Hiba javítva |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Rokob Attila Adrián

Befejezve: 2022.12.08.
