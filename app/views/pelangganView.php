<?php require_once "header.php"; ?>

<div class="container">
    <h1>Daftar Pelanggan</h1>

            <table class="table table-striped" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pelanggan as $pelanggan): ?>
                    <tr>
                        <td><?= htmlspecialchars($pelanggan['PelangganID']); ?></td>
                        <td><?= htmlspecialchars($pelanggan['NamaPelanggan']); ?></td>
                        <td><?= htmlspecialchars($pelanggan['Alamat']); ?></td>
                        <td><?= htmlspecialchars($pelanggan['NomorTelepon']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
</div>
<?php require_once "footer.php"; ?>
