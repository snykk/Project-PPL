<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">PRODUK KAMI</h5>
        <div class="row">
            <?php foreach ($produk->result() as $row) :?>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?= base_url('assets/img/produk/') . $row->image;  ?>" alt="Minrose Cup"></p>
                                    <h4 class="card-title"><?= $row->nama; ?></h4>
                                    <p class="card-text">Siap diminum di mana saja apalagi waktu cuaca terik yagesya</p>
                                    <div class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Minrose Cup</h4>
                                    <p class="card-text">Upsss cieee pasti penasaran yaaa? 😄 klik "detail Produk" di bawah</p>
                                    <button data-id="<?= $row->id; ?>" class="btn btn-primary btn-sm detail" data-bs-toggle="modal" data-bs-target="#ModalDetail">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Team -->