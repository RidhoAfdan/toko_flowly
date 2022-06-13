<div class="container-fluid">
    <div class="row text-center">

    <?php foreach ($barang as $brg) : ?>
    <div class="card ml-4 mb-4" style="width: 16rem;">
    <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar?>" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
    <small><?php echo $brg->keterangan ?></small><br>
    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $brg->harga ?></span><br>
    <a href="#" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
    <a href="#" class="btn btn-sm btn-success">Detail</a>
    
</div>
</div>
        <?php endforeach;?>
    </div>
</div>