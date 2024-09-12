<!-- resources/views/auth/register.blade.php -->
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name Input -->
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Email Input -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Input -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Confirmation Input -->
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
        @error('password_confirmation')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit">Register</button>
</form>
