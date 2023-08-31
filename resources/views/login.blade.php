<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Seus campos de entrada de usuário aqui -->

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <a href="{{ route('login.google') }}" class="btn btn-primary">Login com Google</a>
        </div>
    </div>
</form>
