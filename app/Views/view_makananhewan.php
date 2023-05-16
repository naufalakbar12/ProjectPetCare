<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h5 class="mb-4">Lists Makanan Hewan</h5>
                <div>
                    <a href="<?= base_url('admin/makanan/tambah/') ?>" class="btn btn-sm btn-warning">Tambah Makanan</a>
                </div>
            </div>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Gambar</th>
                        <th scope="col ">Name</th>
                        <th scope="col ">Harga</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item) : ?>
                        <tr>
                            <td><img src="/photos/<?= $item['image'] ?>" alt="" width=100 height=100></td>
                            <td><?= $item['name'] ?></td>
                            <td>Rp .<?= $item['harga'] ?></td>
                            <td class="d-flex">
                                <div>
                                    <a href="<?= base_url('admin/makanan/edit/' . $item['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                </div>
                                <form action="/admin/makanan/delete/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>