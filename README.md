# Proyecto de tarjetas de presentación


## Configuración de XAMPP
### Create a new local domain called "project.test"
- Go to your hosts file in windows (The hosts file is located in -> C:\Windows\System32\drivers\etc).
- Open the hosts file with a text editor as administrator.
- Add your new local domain "project.test".
``` 
#127.0.0.1       localhost
#::1             localhost
127.0.0.1		project.test
```
### Create a new virtual hosts in XAMPP's apache
- Go to your httpd-vhosts.conf file (This file is located in -> C:\xampp\apache\conf\extra).
- Open httpd-vhosts.conf with an text editor an add the following.
```
<VirtualHost *:80>
   DocumentRoot "C:\xampp\htdocs"
   ServerName localhost
</VirtualHost>
<VirtualHost *:80>
DocumentRoot "C:\xampp\htdocs\web-project\public"
   ServerName project.test
   <Directory "C:\xampp\htdocs\web-project\public">
      Require all granted
   </Directory>
</VirtualHost>
```

## Installation
- Fork this repository (this will create a copy of the github repository).
- Clone the forked repository (wich is in your repositories) in the C:\xampp\htdocs\ directory

## Get started
- Run your apache server
- And open your web browser at project.test


