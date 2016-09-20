  <!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
  <section class="content-header">
    <h1>
      Admin template
    </h1>
    <ol class="breadcrumb">
      <li><a href="/">Administration</a></li>
      <li class="active"><a href="#">je_suis_un_exemple</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
Bienvenue sur la partie admin petit developpeur :D
    <form method="POST" action="/admin">
      <input type="text" name="username">
      <input type="submit">
    </form>
  </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>