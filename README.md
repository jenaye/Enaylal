# Enaylal #
si vous êtes sur wamp, crée un alias dans /wamp64/alias/jenaye-dev.conf
```
#Require all granted

<VirtualHost jenaye.dev:80>

  ServerAdmin admin@jenaye.dev
  ServerName jenaye.dev
  ServerAlias jenaye.dev
  DocumentRoot "C:/wamp64/www/enaylal/public"

  <Directory "C:/wamp64/www/enaylal/public">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
    Require all granted
  </Directory>

</VirtualHost>

```
puis, editez votre fichier hosts (system32/drivers/etc/host)

rajoutez : 127.0.0.1        jenaye.dev

# Pour nginx :  #
```nginx
server {
  listen  80;
  server_name jenaye.dev;
  location / {
    root   /home/jenaye/dev/php/Enaylal/public;
    index index.php index.html index.html;
     try_files $uri /index.php$is_args$args;
  }

         location ~ \.php$ {
           root   /home/jenaye/dev/php/Enaylal/public;
             fastcgi_pass   unix:/run/php-fpm/php-fpm-jenaye.sock;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
}

}

```

```
https://github.com/usmanhalalit/pixie#query
```

