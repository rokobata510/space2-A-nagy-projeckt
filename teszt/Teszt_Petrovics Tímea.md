# Tesztjegyzőkönyv

Teszteléseket végezte: Petrovics Tímea

Operációs rendszer: Windows

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.10.20. | Funkcionális specifikáció helyesírási hiba mentes | Sikertelen | Több helyesírási hiba találva |
| Teszt #2 | 2022.10.20. | Követelmény specifikáció helyesírási hiba mentes | Sikeres | Nincs helyesírási hiba találva |
| Teszt #3 | 2022.10.22. | Rendszerterv helyesírási hiba mentes | Sikeres | Nincs helyesírási hiba találva |
| Teszt #4 | 2022.10.25. | Regisztrációs oldal: név mező hiba mentesen működik | Sikeres | Nincs hiba |
| Teszt #5 | 2022.10.26. | Regisztrációs oldal: a regisztráció gomb működik | Sikeres | Nincs hiba |
| Teszt #6 | 2022.10.30. | Bejelentkezés oldal: "elfelejtetted a jelszót gomb" működik | Sikeres | Nincs hiba |
| Teszt #7 | 2022.10.31. | Elfelejtett jelszó oldal: Logó látható | Sikertelen | A logó elcsúszik a képernyőn |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.
Az Alfa tesztelés során a vizsgált elemek között volt ami nem megfelelően működött, ez a későbbiek során javításra szorul.

Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

### Alfa teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #1 | 2022.10.20. | 2022.10.21. | Funkcionális specifikáció helyesírási hiba mentes | Hiba javítva | Helyesírás ellenőrizve és javítva |
| Teszt #7 | 2022.10.31. | 2022.10.31. | Elfelejtett jelszó oldal: Logó látható | Hiba javítva | A logó pozíciójának és méretének fixálása |

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.11.02. | Főoldal: címsáv: főoldal gomb megjelenik | Sikeres | Nincs hiba |
| Teszt #2 | 2022.11.02. | Főoldal: címsáv: profil megjelenik | Sikeres | Nincs hiba |
| Teszt #3 | 2022.11.02. | Főoldal: címsáv: kijelentkezés megjelenik | Sikeres | Nincs hiba |
| Teszt #4 | 2022.11.14. | Főoldal: címsáv: logó megjelenik | Sikertelen | Rossz minőségbe jelent meg |
| Teszt #5 | 2022.11.17. | Profil: Profil információk név váltás lehetséges | Sikeres | Nincs hiba |
| Teszt #6 | 2022.11.28. | Profil: Profil információk email váltás lehetséges | Sikeres | Nincs hiba |
| Teszt #7 | 2022.11.28. | Profil: a tervezett külalak jelenik meg | Sikeres | Nincs hiba |
| Teszt #8 | 2022.11.30. | Kijelentkezés: gombra kattintás után kijelentkezik a profilból | Sikeres | Nincs hiba |

A Béta teszt sikeresen zajlott.
A Béta teszt során akadtan hibák, mely(ek) javításra szorulnak.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

### Béta teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #4 | 2022.11.14. | 2022.11.16. | Főoldal: címsáv: logó megjelenik | Hiba javítva | Minőség és méret javítva |

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Teszt #1 | 2022.11.30. | A kép változik minden helyes tipp után | Sikeres | Nincs hiba |
| Teszt #2 | 2022.11.30. | A helyes és helytelen válaszok után az oldal választ küld | Sikeres | Nincs hiba |
| Teszt #3 | 2022.12.01. | Minden profil adat szerkeszthető | Sikeres | Nincs hiba |
| Teszt #4 | 2022.12.01. | Az oldal kinézete mindenhol a vártak szerint tölt be | Sikeres | Nincs hiba |
| Teszt #5 | 2022.12.06. | Az admin oldal kinézete igényes | Sikertelen | Nem érzékeli a css-t |
| Teszt #5 | 2022.12.06. | Adminná tétel lehetőség | Sikeres | Nincs hiba |

### Végleges teszt hibák javítása
| Vizsgálat neve | Tesztelés eredeti időpontja | Hibamentesítés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- | --- |
| Teszt #5 | 2022.12.06. | 2022.12.09. | Az admin oldal kinézete igényes | Sikeres | Nem érzékelte a css-t |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Petrovics Tímea

Befejezve: 2022.12.08.
