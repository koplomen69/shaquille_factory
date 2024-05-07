<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>"
                            class="nav-link active">Employee List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Edit Employee</h4>
                </div>
                <hr>
                <form method="POST" action="<?php echo e(route('employees.update', $employee->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName" class="form-label">First
                                Name</label>
                            <input type="text" name="firstname" class="form-control" value="<?php echo e($employee->firstname); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lastName" class="form-label">Last
                                Name</label>
                            <input type="text" name="lastname" class="form-control" value="<?php echo e($employee->lastname); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo e($employee->email); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" value="<?php echo e($employee->age); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" name="position_name" class="form-control" value="<?php echo e($employee->position_name); ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i
                                    class="bi-save me-2"></i>Save Changes</button>
                            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH E:\SI pemrograman framework\shaquille_controller\resources\views/employee/edit.blade.php ENDPATH**/ ?>