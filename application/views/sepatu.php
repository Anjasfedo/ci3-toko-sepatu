
        <div class="card p-4">
            <h2 class="text-center mb-4">Form Pembelian Sepatu</h2>

            <form action="<?php echo site_url('sepatu/submit'); ?>" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pembeli</label>
                    <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" id="name"
                        name="name" value="<?= set_value('name'); ?>" required>
                    <?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp/HP</label>
                    <input type="text" class="form-control <?= form_error('phone') ? 'is-invalid' : '' ?>" id="phone"
                        name="phone" value="<?= set_value('phone'); ?>" required>
                    <?= form_error('phone', '<div class="invalid-feedback">', '</div>') ?>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Merk Sepatu</label>
                    <select class="form-select <?= form_error('brand') ? 'is-invalid' : '' ?>" id="brand" name="brand"
                        required>
                        <option value="Nike" <?= set_select('brand', 'Nike'); ?>>Nike</option>
                        <option value="Adidas" <?= set_select('brand', 'Adidas'); ?>>Adidas</option>
                        <option value="Kickers" <?= set_select('brand', 'Kickers'); ?>>Kickers</option>
                        <option value="Eiger" <?= set_select('brand', 'Eiger'); ?>>Eiger</option>
                        <option value="Bucherri" <?= set_select('brand', 'Bucherri'); ?>>Bucherri</option>
                    </select>
                    <?= form_error('brand', '<div class="invalid-feedback">', '</div>') ?>
                </div>

                <div class="mb-3">
                    <label for="size" class="form-label">Ukuran Sepatu</label>
                    <select class="form-select <?= form_error('size') ? 'is-invalid' : '' ?>" id="size" name="size"
                        required>
                        <?php for ($i = 32; $i <= 44; $i++): ?>
                        <option value="<?= $i ?>" <?= set_select('size', $i); ?>><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <?= form_error('size', '<div class="invalid-feedback">', '</div>') ?>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah Beli</label>
                    <input type="text" class="form-control <?= form_error('quantity') ? 'is-invalid' : '' ?>"
                        id="quantity" name="quantity" value="<?= set_value('quantity'); ?>" required>
                    <?= form_error('quantity', '<div class="invalid-feedback">', '</div>') ?>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Proses</button>
                </div>
            </form>
        </div>
