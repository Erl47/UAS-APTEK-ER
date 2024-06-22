<div>
    <div class="row">
        <x-adminlte-input name="iLabel" wire:model="judul" label="Judul Berita" placeholder="Silahkan masukkan judul berita anda"
            fgroup-class="col-md-10" disable-feedback style="height: 50px"/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="sorotan" label="Sorotan Berita" placeholder="Silahkan masukkan sorotan berita anda"
            fgroup-class="col-md-10" disable-feedback style="height: 100px"/>
    </div>

    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="isi" label="Isi Berita" placeholder="Silahkan masukkan isi berita anda"
            fgroup-class="col-md-10" disable-feedback style="height: 200px"/>
    </div>

    <div class="row">
        <x-adminlte-button icon="fas fa-edit" wire:click="update" theme="success" label="Perbarui/Update"/>
    </div>
</div>
