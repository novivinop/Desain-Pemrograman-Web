<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Tambah Mahasiswa</h1>
        <form action="/mahasiswa/create" method="post">
            <?php echo csrf_field(); ?>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <br>

            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <br>

            <label for="gender">Gender</label>
            <select name="gender" required id="">
                <option value="#" selected>Pilih</option>

                <?php $__currentLoopData = $gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($g); ?>">
                        <?php echo e($g); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <br>

            <label for="departement">Jurusan</label>
            <select name="departement" required id="">
                <option value="#" selected>Pilih</option>

                <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d); ?>">
                        <?php echo e($d); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <br>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\example-app\resources\views/studentTambah.blade.php ENDPATH**/ ?>