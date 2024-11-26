@section('head')

@endsection

@section('content')
    @foreach($games as $game)
        <h1>{{$game->name}}</h1>
    @endforeach
@endsection
