<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
</head>
<body>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>

  <div class="container-scroller">
    
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
     <div style="position: relative; top: 60px; right; -160px">
        <table bgcolor= "grey" border="10px"> 

         <tr>
            <th style="padding: 20px">Name</th>
            <th style="padding: 30px">Email</th>
            <th style="padding: 30px">Action</th>
         </tr>


           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
         <tr allign= "center">
             <td><?php echo e($data->name); ?></td>
             <td><?php echo e($data->email); ?></td>

             <?php if($data->usertype=="0"): ?>
             <td style="padding: 8px"><a href="<?php echo e(url('/deleteuser',$data->id)); ?>">Delete</a></td>
             <?php else: ?>
             <td style="padding: 8px"><a>Not Allowed</a></td>
             <?php endif; ?>
         </tr>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>



     </div>
   
  </div>
       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  </body>
</html> 

</body>
</html><?php /**PATH C:\xampp\htdocs\Hotel-managent-booking-system\resources\views/admin/users.blade.php ENDPATH**/ ?>