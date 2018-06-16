<div>
    <div class="form-group">
        <label>Nome：</label>
        <span>{{ $user->name }}</span>
    </div>
    <div class="form-group">
        <label>Descrição：</label>
        <span>{{ $user->description }}</span>
    </div>
    <div class="form-group">
        <label>Site Pessoal：</label>
        <a href="{{ httpUrl($user->website) }}">{{ httpUrl($user->website) }}</a>
    </div>
    @if($user->meta)
        @foreach($user->meta as $key=>$value)
            <div class="form-group">
                <label>{{ ucfirst($key) }}：</label>
                <a href="{{ $value }}">{{ $value }}</a>
            </div>
        @endforeach
    @endif
</div>