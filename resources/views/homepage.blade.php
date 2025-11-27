<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Acorn | HomePage</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="custom-style.css" rel="stylesheet">

</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <img src="assets/img/logo.png" alt="Acorn" width="30" />
        <a class="navbar-brand fw-bold" href="#home">Acorn</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#operator">Operator</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ================= HOME SECTION ================= -->
<section id="home" class="home">
    <div class="content">
        <h3>ACORN</h3>
        <span>Teman dalam berbagai Acara</span>
        <p class="mt-3">
            Mencatat tamu kini lebih mudah, rapi, dan modern. Cocok untuk seminar,
            pernikahan, reuni, konser, rapat, hingga event profesional.
        </p>
        <a href="{{ route('tamu.create') }}" class="btn btn-success mt-3">Coba Sekarang</a>
    </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section id="about" class="bg-light">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0 p-4">
                <h2 class="mb-3">Tentang Kami</h2>

                <p>
                    Acorn adalah platform digital untuk menyimpan data tamu dengan rapi dan efisien.
                    Menggantikan buku tamu manual yang rentan hilang atau rusak.
                </p>

                <h4 class="mt-4">Kenapa Tupai?</h4>
                <p>
                    Tupai dikenal aktif, lincah, dan suka menyimpan biji — sama seperti Acorn yang
                    menyimpan data dengan cepat dan teratur!
                </p>

                <p class="mt-3">Terima kasih telah menggunakan Acorn! 🌰</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= OPERATOR SIGNUP SECTION ================= -->
<section id="operator" class="home2">
    <div class="container text-center">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0 p-4">
                <h2 class="mb-3">Ingin Jadi Operator?</h2>
                <p>
                    Bergabunglah sebagai operator Acorn untuk mengelola buku tamu secara profesional
                    dan memiliki akses penuh ke data tamu.
                </p>
                <a href="{{ route('login') }}" class="btn btn-dark btn-lg mt-3">
                    Daftar Disini
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section id="contact" class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4">Contact Us</h2>
        <p>Kami siap menerima pesan, pertanyaan, atau saran dari Anda.</p>

        <form action="contact-process.php" method="POST" class="mt-4">

            <div class="mb-3">
                <label class="fw-bold">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="firstName" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="lastName" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Pesan <span class="text-danger">*</span></label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
            </div>

            <button class="btn btn-primary">Kirim</button>
        </form>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-3 footer" style="background-color: var(--dark-green); color:white;">
    © <?= date('Y') ?> Acorn. Kelompok 7.
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar scroll effect -->
<script>
window.addEventListener("scroll", function () {
    let nav = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});
</script>

</body>
</html>
