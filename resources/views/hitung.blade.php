<form>
    <input type="text" name="input" placeholder="Input Angka">
    <div style="margin-bottom: 1%"></div>
    <button>Genrete Segitiga</button>
    <button>Genrete Bilangan Ganjil</button>
    <button>Genrete Bilangan Prima</button>
</form>

<h1>Segitiga</h1>
@foreach ($segitiga as $item)
    {{ $item }}
@endforeach


<h1>Bilangan Ganjil</h1>
@foreach ($ganjil as $item)
    <li> {{ $item }}</li>
@endforeach


<h1>Bilangan Prima</h1>

@foreach ($prima as $item)
    <li>{{ $item }}</li>
@endforeach
