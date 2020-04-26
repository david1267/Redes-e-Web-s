<html>

<head>

<title></title>

</head>

<body>
    <form method="post" action="<?php echo e(route('passo1')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome" placeholder="Nome" autocomplete="off" required><br>
        <input type="number" name="cep" minlength="9" maxlength="9" placeholder="CEP" autocomplete="off" required><br>
        
        
        <input type="submit">
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\cadastro_cliente\resources\views/cadastro_cliente.blade.php ENDPATH**/ ?>