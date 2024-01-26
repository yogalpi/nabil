<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="background-color: lightgreen; margin-top: 3vh; padding: 3em; border-radius: 1em;">
    <table class="table is-hoverable is-fullwidth">
        <?php if (isset($sukses)):?>
            <div class="notification is-success">
                <?= $sukses; ?>
            </div>
            <?php endif;?>
            <div class="column is-half"><p>Data Mahasiswa</p></div>
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PROGRAM STUDI</th>
                <th>KONSENTRASI</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nim']?></td>
                <td><?= $m['nama']?></td>
                <td><?= $m['program_studi']?></td>
                <td><?= $m['konsentrasi']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection('content'); ?>