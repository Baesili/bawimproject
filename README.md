# bawimproject

This is the ReadMe file of the project.

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
- Dodatkowe moduły:
  - mcrypt https://pecl.php.net/package/mcrypt/1.0.4/windows PHP 8.0 Thread Safe (TS) x64
  - https://www.geeksforgeeks.org/how-to-install-mcrypt-extension-in-xampp/ - instalacja mcrypt
- Baza danych: MySQL
- Konfiguracja bazy danych w pliku 'connection.php', domyślnie:
  - host='localhost'
  - user='root'
  - password=''
  - db_name='bawim_cookie'
