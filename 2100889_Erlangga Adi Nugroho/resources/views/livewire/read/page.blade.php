<div>
    @foreach($news as $index => $singlenews)
        {{$index+1}}.
        <span wire:click="read({{$singlenews->id}})" style="color:green; cursor:pointer;">
            <u>{{$singlenews->judul}}</u>
        </span>
        &nbsp; &nbsp;
        <i wire:click="delete({{$singlenews->id}})" style="color:black; cursor:pointer;" class="fas fa-sm fa-trash"></i>
        <i wire:click="edit({{$singlenews->id}})" style="color:black; cursor:pointer;" class="fas fa-sm fa-edit"></i>
        <br>
    @endforeach

    @if($selectedNews)
        <div>
            <h2>{{ $selectedNews->judul }}</h2>
            <p>{{ $selectedNews->content }}</p>
            <h2>{{ $selectedNews->sorotan }}</h2>
            <p>{{ $selectedNews->content }}</p>
            <h2>{{ $selectedNews->isi }}</h2>
            <p>{{ $selectedNews->content }}</p>
        </div>
    @endif
</div>

