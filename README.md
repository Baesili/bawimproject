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
