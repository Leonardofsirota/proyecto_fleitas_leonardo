<?= $this->extend('layouts/template') ?>

<?= $this->section('contenido') ?>

    <div class="row text-center mb-4">
        <h2 class="fw-bold">NUESTRO CATÁLOGO</h2>
    </div>
    <div class="row g-4 justify-content-center">
        <?php foreach ($productos as $producto): ?>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card h-100 d-flex flex-column">
                    <img src="<?= base_url('assets/img/' . $producto['imagen']) ?>" class="card-img-top h-100" alt="<?= esc($producto['nombre_prod']) ?>" style="height: 250px;">
                    <div class="card-body flex-grow-1 d-flex flex-column">
                        <h5 class="card-title"><?= esc($producto['nombre_prod']) ?></h5>
                        <p class="card-text">Precio: $<?= number_format($producto['precio_vta'], 2, ',', '.') ?></p>
                        <?php if (session()->has('usuario_id')): ?>
                            <form action="<?= site_url('carrito/agregar/' . $producto['id_producto']) ?>" method="post" class="mt-auto">
                                <button class="btn btn-primary w-100" type="submit">Agregar al carrito</button>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-warning text-center mt-auto p-2">
                                <small>
                                    Debes <a href="<?= site_url('login') ?>" class="alert-link">iniciar sesión</a> para comprar
                                </small>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?= $this->endSection() ?>
