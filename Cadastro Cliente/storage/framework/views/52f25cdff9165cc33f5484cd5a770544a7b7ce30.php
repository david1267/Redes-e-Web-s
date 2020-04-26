<html>

<head>

<title></title>

</head>

<body>
    <form method="post" action="<?php echo e(route('cadastro_final')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" placeholder="Nome" autocomplete="off" value="<?php echo e($nome); ?>" required disabled><br>
        <input type="number" minlength="9" maxlength="9" placeholder="CEP" autocomplete="off" value="<?php echo e($cep); ?>" required disabled><br>
        <hr>

        <input type="hidden" name="nome" value="<?php echo e($nome); ?>">
        <input type="hidden" name="cep" value="<?php echo e($cep); ?>">

        <input type="text" name="logradouro" placeholder="Logradouro" autocomplete="off" value = "<?php echo e($logradouro); ?>"><br>
        <input type="text" name="complemento" placeholder="Complemento" autocomplete="off" value="<?php echo e($complemento); ?>"><br>
        <input type="text" name="bairro" placeholder="Bairro" autocomplete="off" value="<?php echo e($bairro); ?>"><br>
        <input type="text" name="cidade" placeholder="Cidade" autocomplete="off"  value="<?php echo e($cidade); ?>"><br>
        <input type="text" name="estado" placeholder="Estado" autocomplete="off" value="<?php echo e($estado); ?>"><br>
        <hr>

        <input type="submit">
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\cadastro_cliente\resources\views/cadastro_cliente_passo2.blade.php ENDPATH**/ ?>