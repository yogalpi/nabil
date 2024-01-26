<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="background-color: whitesmoke; margin-top: 3vh; padding: 3em; border-radius: 1em;">
    <div class="column is-half"><p>Input data Mahasiswa</p></div>
    <form action="/simpanMahasiswa" method="post">

        <div class="column is-one-third">
            <label for="nim">NIM</label>
                <input class="input is-hovered is-disabled" type="text" name="nim">
        </div>
        <div class="column is-half">
            <label for="nama">Nama</label>
            <input class="input is-hovered" type="text" name="nama">
            <?php if(isset($errors['nama'])) : ?><p class="help is-danger"><?= $errors['nama']; ?></p><?php endif; ?>
        </div>
        <div class="column is-half is-two-fifths">
            <label for="program studi">Program Studi</label>
            <input class="input is-hovered" type="text" name="program_studi">
            <?php if(isset($errors['program_studi'])) : ?><p class="help is-danger"><?= $errors['program_studi']; ?></p><?php endif; ?>
        </div>
        <div class="column is-half is-two-fifths">
            <label for="konsentrasi">Konsentrasi</label>
            <input class="input is-hovered" type="text" name="konsentrasi">
            <?php if(isset($errors['konsentrasi'])) : ?><p class="help is-danger"><?= $errors['konsentrasi']; ?></p><?php endif; ?>
        </div>
        <div class="column is-half is-one-quarter">
            <button type="submit" class="button is-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection('content'); ?>