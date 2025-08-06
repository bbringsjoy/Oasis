<main>
    <h1 class="user-select-none"> Oasis </h1>
    <div class="destaques container">
    <h3 class="user-select-none text-center">Reservas em destaque</h3>
    <div class="row">
        <?php foreach ($destaques as $id => $value) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 bg-body-tertiary rounded" style="width: 100%;">
                    <img src="<?= $value['foto'] ?>" class="card-img-top" alt="<?= $value['nome'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['nome'] ?><i class="fa-solid fa-star"></i><?= $value['avaliacao']?></h5>
                        <p class="card-text"><?= $value['descricao'] ?></p>
                        <p class="card-text"><?= $value['preco'] ?></p>
                        <a href="#" class="btn btn-outline-primary">Mais informações</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<div class="reservas container">
    <h3 class="user-select-none text-center">Todas as reservas disponíveis</h3>
    <div class="row">
        <?php foreach ($casas as $id => $value) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 bg-body-tertiary rounded" style="width: 100%;">
                    <img src="<?= $value['foto'] ?>" class="card-img-top" alt="<?= $value['nome'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['nome'] ?></h5>
                        <p class="card-text"><?= $value['descricao'] ?></p>
                        <p class="card-text"><?= $value['preco'] ?></p>
                        <a href="#" class="btn btn-outline-primary">Mais informações</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</main>