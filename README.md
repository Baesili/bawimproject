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
  
  
  
  
Ustawienia serwera strony:
- Silnik: XAMPP (!!!PHP 8.0.x!!!)
- Dodatkowy moduł mcrypt:
  - mcrypt https://pecl.php.net/package/mcrypt/1.0.4/windows PHP 8.0 Thread Safe (TS) x64
  - instalacja https://www.geeksforgeeks.org/how-to-install-mcrypt-extension-in-xampp/
  - użycie https://stackoverflow.com/questions/2448256/encrypting-decrypting-file-with-mcrypt/2448441#2448441
  - atak na mcrypt https://paragonie.com/blog/2015/05/using-encryption-and-authentication-correctly
- Baza danych: MySQL
  - nazwa bazy: 'bawim_cookie'
  - tabela 'login': id, username, password, type - (przykładowy rekord: 1, matikol, 1234, admin)
  - tabela 'payments': id, user_id, card_number, cvv - (przykładowy rekord: 1, 1, 1111 bawimCTF{st4y_s4f3_0n1in3} 4444, 999)
- Konfiguracja bazy danych w pliku 'connection.php', domyślnie:
  - host='localhost'
  - user='root'
  - password=''
  - db_name='bawim_cookie'

Podatności:
- podszywanie się pod innych użytkowników za pomocą ID sesji (session hijacking)
  - kod do wstrzyknięcia w formularzu: ';print_r(preg_grep("/^sess_/", scandir(ini_get("session.save_path"))));'
- manipulacja wartością ciasteczka o nazwie "cookie" - flaga pojawia się kiedy użytkownik inkrementując wartość dojdzie do 7
- "cookie wall" - po akceptacji tworzy ciasteczko z dopiskiem "_noflag", kiedy użytkownik stworzy nowe ciasteczko z dopiskiem "_flag" i usunie poprzednie to ponownie po akceptacji cookie walla wyświetli mu się flaga
