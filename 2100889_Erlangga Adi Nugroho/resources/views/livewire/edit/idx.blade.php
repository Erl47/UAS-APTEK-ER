<div>
    @section('content')
        <div class="card text-left">
          <div class="card-header">
            <b>Berita</b> | Perbarui
          <div class="card-body">
            <livewire:edit.page :newsId="$newsId"></livewire:edit.page>  
          </div>
        </div>
    @endsection
</div>
