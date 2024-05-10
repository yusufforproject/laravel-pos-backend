<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            <p><?php echo e($message); ?></p>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\Project\Laravel\laravel-pos-backend\resources\views/layouts/alert.blade.php ENDPATH**/ ?>