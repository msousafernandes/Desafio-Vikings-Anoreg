### Orientações envio de email usando sendmail: 

> No php.ini configure o mail function da seguinte forma :

[mail function]
; For Win32 only.
; http://php.net/smtp
;SMTP=localhost
; http://php.net/smtp-port
;smtp_port=25

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = me@example.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

>na pasta Sendmail dentro do xampp copie e cole a pasta sendmail que esta dentro desse diretorio para dentro dela pois contem
as configurações do serviço de email.




