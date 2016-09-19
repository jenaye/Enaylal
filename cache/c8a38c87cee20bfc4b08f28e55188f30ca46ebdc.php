  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
  <section class="content-header">
    <h1>
      Guide de démarrage
    </h1>
    <ol class="breadcrumb">
      <li><a href="/">Accueil</a></li>
      <li class="active"><a href="/book">Guide de démarrage</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Boite pour le contenu -->
    <div class="box box-primary">
      <div class="box-body">
        <p>
          Cette section permet de présenter le framework et de vous aider dans l'installation de celui-ci
          sur vos différents environnements.
        </p>
      </div>
    </div>

    <pre><code><?php echo e('server {
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
'); ?></code></pre>

    <br/>
    <pre><code><?php echo e('#Require all granted

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

</VirtualHost>'); ?></code></pre>
  </section>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>