# Manipulacja Ciasteczkami

Kilka podstawowych podatności i pojęć powiązanych z ciasteczkami.
  
### Podatności:
- Session hijacking - podszywanie się pod innego użytkownika wykorzystując jego ID sesji
- Cookie manipulation - zmiana wartości i nazwy ciasteczka w celu pozyskania określonego rezultatu

### Inne zagadnienia:
- Przejęcie i zdeszyfrowanie wartości ciasteczka

## Zadania
[Link do strony](https://bawimctf.000webhostapp.com/)  
W ramach ćwiczenia do przejęcia są 4 flagi, do których trzeba dotrzeć manipulując ciasteczkami.

#### Zadanie 1 - zmiana nazwy ciasteczka
Pierwsza flaga została ukryta za ścianą - żeby się do niej dostać, musisz przeanalizować ciasteczko z nią związane.

#### Zadanie 2 - zmiana wartości ciasteczka
Drugą flagę znajdziesz za pomocą szczęśliwej liczby - musisz znaleźć ciastko, które ją może przechować jako wartość.

#### Zadanie 3 - zdeszyfrowanie wartości ciasteczka
Trzecia flaga wymaga zdeszyfrowania tajemniczej wartości jednego z ciasteczek. Wykorzystarz do tego wiedzę kryptograficzną.

#### Zadanie 4 - przejęcie sesji poprzez ciasteczko
Ostatnia flaga wymaga przejęcia sesji zalogowanego użytkownika i przejrzeć jego konto (podstrona profile.php) - musisz dostać się do listy sesji i znaleźć jej ID.
