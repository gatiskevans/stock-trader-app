<div>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form method="post" action="{{ route('email.send') }}">
        @csrf
        <input type="email" name="email" placeholder="Enter email:" required>
        <button type="submit">Send email</button>
    </form>
</div>
