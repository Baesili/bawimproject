# bawimproject

Link do prezentacji:
https://docs.google.com/presentation/d/1lyJCKT9u1E26OdU3fX_pPsghxc_pP3KeBvB06vwOGkE/edit?usp=sharing


Typy ataków:
- client-side
- man-in-the-middle
- buffer overflow
- cross-site scripting (XSS):
  - session hijacking
  - session spoofing
  - session fixation


https://bawimctf.000webhostapp.com/
  

Podatności:
- podszywanie się pod innych użytkowników za pomocą ID sesji (session hijacking)
  - kod do wstrzyknięcia w formularzu: ';print_r(preg_grep("/^sess_/", scandir(ini_get("session.save_path"))));'
- manipulacja wartością ciasteczka o nazwie "cookie" - flaga pojawia się kiedy użytkownik inkrementując wartość dojdzie do 7
- "cookie wall" - po akceptacji tworzy ciasteczko z dopiskiem "_noflag", kiedy użytkownik stworzy nowe ciasteczko z dopiskiem "_flag" i usunie poprzednie to ponownie po akceptacji cookie walla wyświetli mu się flaga
- flaga ukryta w ciasteczku zaszyfrowanym za pomocą id aktualnej sesji (AES 128bit czyli klucz 16 bajtowy, czyli za pomocą 16 znaków HEX a to jest 8 znaków ASCII - algorytm zamienia ASCII na hex)


Instrukcja odnajdywania flag:
1. Użytkownik wchodzi na stronę i wyświetla mu się popup z akceptacją polityki prywatności. Po zaakceptowaniu utworzone zostaje ciasteczko "user_cookie_consent_noflag". Użytkownik musi zmienić nazwę podmieniając "noflag" na "flag" czyli "user_cookie_consent_flag". Po odświeżeniu strony ponownie musi zaakceptować politę prywatności i wtedy wyświetli mu się alert z pierwszą flagą.
2. Użytkownik może zaobserwować na liście ciasteczek, jedno o nazwię "mystery" z zaszyfrowaną wiadomością. Należy podpowiedzieć użytkownikom, że jest to szyfr AES128 zaszyfrowany za pomocą KILKU pierwszych znaków z ID sesji. ID sesji znajduje się w ciasteczku "PHPSESSID", użytkownik wiedząc że to jest 128 bitowy klucz, musi wziąć 8 pierwszych znaków. Następnie musi wejść na stronę zamieniającą ASCII na HEX (można podpowiedzieć że należy użyć takiej strony), np - https://www.rapidtables.com/convert/number/ascii-to-hex.html (ważne, żeby pomiędzy wygenerowanymi znakami hex nie było spacji). Następnie użytkownik musi znaleźć formularz do odszyfrowania, znajduje się on pod przyciskiem "Pokaż więcej" na stronie głównej. W formluarzy należy wpisać szyfrogram z ciasteczka "mystery" oraz wygenerowany klucz szesnastkowy. Po wciśnięciu odszyfruj pokazuje się kolejna flaga.
3. W lewym górnym rogu strony wyświetla się informacja o liczbie ciasteczek, które strona posiada. Nie jest to rzeczywista liczba ciasteczek, a kiedy użytkownik przyjrzy się ciasteczkom na stronie, zobaczy ciasteczko o nazwie "cookie" z wartością identyczną co w komunikacie. Zwiększając wartość ciasteczka, zwiększa się wartość w komunikacie. Po dotarciu do 7 ciasteczek, pojawi się na górze strony kolejna flaga.
4. Dla użytkowników dostępny jest formularz logowania. Obejść można logowanie stosując session hijacking, podszywając się pod sesję innego użytkownika. Aby tego zrobić należy użyć XSS (cross site scripting) i wrzucić kod, który wyświetli listę sesji. Na dole strony dostępny jest formularz kontaktowy, gdzie po wpisaniu danych, wyświetla się strona z informacją, że wiadomość została przesłana. Należy podpowiedzieć użytkownikom, że będzie w tym zadaniu potrzebna im komenda: ';print_r(preg_grep("/^sess_/", scandir(ini_get("session.save_path"))));'    *uwaga* pojedyncze cudzysłowa są częścią tej komendy. Po wpisaniu tej komendy w polu Imię, za pomocą wykonania funkcji eval(), php zwróci listę dostępnych sesji. Użytkownicy muszą przekopiować część z id (bez słowa sess_) i wkleić do ciasteczka z id sesji. Metodą prób i błędów muszą znaleźć id sesji, na którym zalogowany jest użytkownik. Będzie to widoczne, kiedy zmieni się napis "Zaloguj się" na "Wyloguj się".
