<!DOCTYPE html><html><head><title>Profile</title></head><body>
@if(session('info'))
    <p style="color:blue">{{ session('info') }}</p>
@endif
<h1>Profile: {{ $username }}</h1>
<a href="{{ route('profile.tab',  [$username, 'posts']) }}">Posts</a> |
<a href="{{ route('profile.tab',  [$username, 'photos']) }}">Photos</a> |
<a href="{{ route('profile.follow', $username) }}">Follow</a>
</body></html>
