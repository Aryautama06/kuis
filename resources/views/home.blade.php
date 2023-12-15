@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    .custom-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-header {
        background-color: #092635;
        color: #9EC8B9;
        border-radius: 10px 10px 0 0;
    }

    .custom-body {
        padding: 20px;
    }

    .alert-message {
        color: #ffffff;
        background-color: #1B4242;
        border: none;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .welcome-message {
        color: #092635;
        text-align: justify;
    }

    .pln-info {
        color: #092635;
        text-align: justify;
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="card-header custom-header">
                    Selamat Datang di Sistem PLN
                </div>

                <div class="card-body custom-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-message" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="welcome-message">
                        Selamat datang di sistem PLN. Kami mengucapkan terima kasih atas kepercayaan Anda menggunakan layanan kami. PLN berkomitmen untuk menyediakan layanan listrik yang handal dan berkualitas untuk kebutuhan Anda.
                        Kami berupaya terus meningkatkan kualitas layanan kami demi kepuasan pelanggan.
                        Semoga pengalaman Anda menggunakan layanan PLN memberikan kenyamanan dan keamanan dalam kehidupan sehari-hari.
                    </p>

                    <p class="pln-info">
                        Untuk informasi lebih lanjut tentang layanan PLN dan pembaruan terbaru, silakan jelajahi situs web kami atau hubungi pusat layanan pelanggan kami.
                        Kami siap membantu Anda dengan segala pertanyaan atau kebutuhan yang mungkin Anda miliki. Terima kasih atas dukungan Anda dalam mendukung penyediaan listrik yang andal dan berkelanjutan.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
