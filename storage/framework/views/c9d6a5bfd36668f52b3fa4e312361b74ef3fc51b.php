

<?php $__env->startSection('css'); ?>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
        <h2>Grant</h2>
        <p>Something will be there later...
        </p>

            <?php if(session('message-ok')): ?>
                <?php $__env->startComponent('alert'); ?>
                    <?php $__env->slot('type'); ?>
                        success
                    <?php $__env->endSlot(); ?>
                    <?php echo session('message-ok'); ?>

                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>

    <form method="post" action="<?php echo e(route('grantstore')); ?>">
                    <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="col-25">
                    <label for="fname">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="Your name.." value="<?php echo e(old('name')); ?>">
                    <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Gmail</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your gmail" value="<?php echo e(old('email')); ?>">
                    <?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">
                        Answers on questions</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="message" placeholder="Answers..." style="height:200px"><?php echo e(old('message')); ?></textarea>    
                    <?php echo $errors->first('message', '<small class="help-block">:message</small>'); ?>                                    
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
    <script>
       $(document).ready(function(){
          //...
       });       
    </script>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/napa/resources/views/front/grant.blade.php ENDPATH**/ ?>