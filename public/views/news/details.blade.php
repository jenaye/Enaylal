<h1>Bonjour</h1>
<p>
    Je suis la news {{ $idNews }}
</p>

@forelse($comments as $comment)
    <p>{{ $comment['content'] }}</p>
@empty
    <p>C'est vide</p>
@endforelse
