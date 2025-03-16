
        <div class="card p-4">
            <h2 class="text-center mb-4">Struk Pembelian Sepatu</h2>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama Pembeli</th>
                    <td><?= $name ?></td>
                </tr>
                <tr>
                    <th>No Telp/HP</th>
                    <td><?= $phone ?></td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td><?= $brand ?></td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td><?= $size ?></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td><?= number_format($price, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <th>Jumlah Beli</th>
                    <td><?= $quantity ?></td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td><?= number_format($total_price, 0, ',', '.') ?></td>
                </tr>
            </table>

            <div class="d-grid">
                <a href="<?php echo site_url('sepatu'); ?>" class="btn btn-secondary btn-lg">Kembali ke Form</a>
            </div>
        </div>
