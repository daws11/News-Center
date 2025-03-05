@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active text-dark">Kontributor</li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="position-relative rounded overflow-hidden mb-3">
                        <img src="{{ asset('img/kontributor.jpg') }}" class="img-zoomin img-fluid rounded w-80" alt="">
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <a href="{{ route('kontributor') }}" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                <span class="text-white mx-auto">klik Disini Untuk Menjadi Kontributor!</span>
                            </a>
                        </div>
                    </div>
                    <h2>Peraturan & Status Kontributor</h2>

                    <p>Ayo bergabung menjadi bagian dari Notifikasy Politik dan suarakan aspirasi serta informasi Anda! Caranya mudah, cukup ikuti langkah-langkah berikut:</p>
                    <ol>
                        <li>Isi data diri Anda di formulir pendaftaran yang telah kami sediakan.</li>
                        <li>Tim Redaksi Notifikasy Politik akan meninjau pendaftaran Anda. Jika Anda terpilih menjadi bagian dari kontributor Notifikasy Politik, kami akan segera mengirimkan akun kontributor melalui email Anda.</li>
                        <li>Lengkapi akun Anda dengan melakukan verifikasi email, menambahkan nama lengkap, dan foto profil.</li>
                        <li>Setelah akun Anda lengkap, Anda sudah bisa mulai mengunggah artikel perdana Anda.</li>
                    </ol>

                    <h2>Aturan Penulisan Artikel/Berita</h2>

                    <p>Sebelum mulai menulis, yuk perhatikan aturan berikut agar artikel Anda sesuai dengan standar Notifikasy Politik:</p>

                    <ol>
                        <li>Pastikan konten yang Anda tulis tidak bertentangan dengan undang-undang yang berlaku di wilayah Negara Kesatuan Republik Indonesia (NKRI).</li>
                        <li>Tulisan Anda harus unik dengan persentase di atas 60%. Plagiarisme di bawah 40% akan ditolerir.</li>
                        <li>Gunakan Bahasa Indonesia yang baik dan benar.</li>
                        <li>Karya tulisan Anda belum pernah diterbitkan di media lain.</li>
                        <li>Artikel yang ditulis minimal 300 kata.</li>
                        <li>Hindari penggunaan singkatan seperti: yg, lain2, dll, dsb dan sebagainya.</li>
                        <li>Gunakan tanda baca yang benar dan hindari kesalahan pengetikan (typo).</li>
                        <li>Gunakan foto, video, atau audio sebagai pendukung tulisan dengan memperhatikan hak cipta dan mencantumkan sumbernya.</li>
                        <li>Anda dipersilakan menulis di berbagai tema dan kategori yang tersedia.</li>
                        <li>Tim Redaksi berhak menyunting tulisan Anda tanpa mengurangi substansi sebelum ditayangkan di portal Notifikasy Politik.</li>
                        <li>Setelah artikel Anda terbit, bagikan tautannya ke minimal satu media sosial Anda.</li>
                        <li>Anda bertanggung jawab penuh terhadap isi tulisan yang Anda buat.</li>
                        <li>Tulisan Anda tidak boleh mengandung unsur-unsur yang melanggar hukum.</li>
                        <li>Notifikasy Politik tidak bertanggung jawab terhadap semua materi tulisan yang dikirim kontributor, apabila dikemudian hari ditemukan pelanggaran Hak Kekayaan Intelektual. Tanggung jawab diberikan sepenuhnya kepada para kontributor.</li>
                    </ol>

                    <h2>Penghapusan Akun dan Penolakan Tulisan</h2>

                    <p>Tim Redaksi berhak menolak atau tidak mempublikasikan tulisan yang dibuat oleh kontributor jika tidak memenuhi aturan penulisan.</p>

                    <ul>
                        <li>Apabila dalam waktu 7 (tujuh) hari setelah pengiriman tulisan belum ada kabar mengenai tulisan Anda, kemungkinan besar tulisan Anda ditolak atau ditangguhkan.</li>
                        <li>Tim Redaksi berhak menghapus akun kontributor jika terbukti menyalahi syarat dan ketentuan serta aturan yang berlaku.</li>
                        <li>Tim Redaksi berhak menghapus akun kontributor jika dalam waktu 3 bulan, tidak pernah mengirim satu pun artikel.</li>
                        <li>Tim Redaksi juga berhak menghapus akun kontributor apabila tidak aktif selama 6 bulan setelah artikel terakhir dikirim.</li>
                        <li>Kontributor sepenuhnya bertanggung jawab atas penggunaan akunnya.</li>
                    </ul>

                    <h2>Bonus</h2>

                    <p>Dapatkan keuntungan menarik dengan menjadi kontributor aktif Notifikasy Politik!</p>

                    <ul>
                        <li>Jika tulisan Anda mencapai 10.000 (sepuluh ribu) kali dilihat/dikunjungi pembaca dalam waktu 1 (satu) bulan, Anda berhak mendapatkan bonus sebesar Rp50.000 dan berlaku kelipatan.</li>
                        <li>Jika Anda berhasil mempublikasikan 20 artikel dalam waktu 1 (satu) bulan, Anda juga berhak mendapatkan bonus sebesar Rp50.000.</li>
                        <li>Anda dapat memonitor jumlah kunjungan artikel dan jumlah artikel di dashboard kontributor Anda.</li>
                        <li>Jumlah pengunjung artikel dan jumlah artikel di dashboard kontributor akan di-reset setiap bulan di tanggal 1.</li>
                        <li>Pencairan bonus akan dilakukan antara tanggal 2 s/d 5 setiap bulannya.</li>
                        <li>Minimal pencairan bonus adalah Rp200.000,-</li>
                        <li>Pencairan bonus akan dipotong biaya admin antar bank, jika rekening pencairan selain Bank Mandiri.</li>
                        <li>Apabila akun kontributor dihapus sebagaimana yang tertuang pada “Penghapusan Akun dan Penolakan Tulisan” poin ke-5, maka honorariumnya dianggap hangus jika baru terkumpul di bawah Rp200.000,- Jika honorariumnya di atas Rp200.000,- maka akan tetap kami cairkan.</li>
                    </ul>

                    <p>Jadi, tunggu apa lagi? Daftarkan diri Anda sekarang dan jadilah bagian dari perubahan informasi di Indonesia!</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <a href="{{ route('kontributor') }}" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                <span class="text-white mx-auto">klik Disini Untuk Menjadi Kontributor!</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="keywords"
                                        aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i
                                            class="fa fa-search text-white"></i></span>
                                </div>

                                @component('components.col-2')
                                @endcomponent

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection