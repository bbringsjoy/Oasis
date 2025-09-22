<main>
    <div class="destaques container">
    <p style="text-align: center;"> <img src="../imagens/titulo1.png" style="width: 30%;"></p>
    <div class="row">
        <?php foreach ($destaques as $id => $value) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 bg-body-tertiary rounded" style="width: 100%;">
                    <img src="<?= $value['foto'] ?>" class="card-img-top" alt="<?= $value['nome'] ?>">
                    <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between align-items-center">
        <?= $value['nome'] ?>
        <small class="text-muted d-flex align-items-center star">
            <i class="fa-solid fa-star"></i>
            <?= $value['avaliacao'] ?>
        </small>
    </h5>
                        <p class="card-text"><?= $value['descricao'] ?></p>
                        <p class="card-text"><?= $value['preco'] ?></p>
                        
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<div class="reservas container">
    <p style="text-align: center;"><img src="../imagens/titulo2.png"style="width: 30%;"></p>
    <div class="row">
        <?php foreach ($casas as $id => $value) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 bg-body-tertiary rounded" style="width: 100%;">
                    <img src="<?= $value['foto'] ?>" class="card-img-top" alt="<?= $value['nome'] ?>">
                    <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between align-items-center">
        <?= $value['nome'] ?>
        <small class="text-muted d-flex align-items-center star">
            <i class="fa-solid fa-star"></i>
            <?= $value['avaliacao'] ?>
        </small>
    </h5>
                        <p class="card-text"><?= $value['descricao'] ?></p>
                        <p class="card-text"><?= $value['preco'] ?></p>
                        
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</main>