<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
</head>
<body>
    <h2>Verifikasi Email Kamu</h2>

    <p>
        Kami sudah mengirimkan link verifikasi ke email kamu.
        Silakan cek inbox atau spam.
    </p>

    @if (session('message'))
        <p style="color: green">{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Kirim Ulang Email Verifikasi</button>
    </form>
</body>
</html>
