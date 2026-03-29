<!DOCTYPE html><html><head><title>{{ $tab }}</title></head><body>
<h1>{{ $username }} — {{ ucfirst($tab) }}</h1>
<a href="{{ route('profile.show', $username) }}">Back to Profile</a>
</body></html>
