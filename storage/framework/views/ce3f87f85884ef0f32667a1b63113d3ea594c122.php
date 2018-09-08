<!doctype html>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
       <div id="app">

     <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">     

                <?php echo $__env->yieldContent('content'); ?>
           
        </div>           
       </div>

   <?php echo $__env->make('partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </body>
</html>
