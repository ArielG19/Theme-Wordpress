<!--div class="col-md-3">
    <div class="card-body">
      <h4>Publicidad</h4>
      <hr>
      <img src="img/compu.jpg" class="img-fluid" width="200px" height="150px" alt="">
    </div>
</div-->

<div id="sidebar-primary" class="col-md-3">
    <?php if ( is_active_sidebar( 'mi-widget' ) ) : ?>
        <?php dynamic_sidebar( 'mi-widget' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>