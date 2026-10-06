@extends("layouts.main")

@section("style")
@endsection

@section("main")
    <!-- ==================== HERO HEADER ==================== -->
    <div class="w-full border-b-[3px] border-on-background bg-surface-container-low relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-[0.05] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

            <!-- Breadcrumb -->
            <nav class="flex flex-wrap items-center gap-2 mb-space-md font-code-inline text-code-inline text-on-surface-variant">
                <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors uppercase">PEMBELAJARAN</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <a href="{{ route('pembelajaran') }}#section-kelas-x" class="hover:text-primary transition-colors uppercase">KELAS X</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface font-bold uppercase">R2 — DDPK PPLG</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MATA PELAJARAN KEJURUAN • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        DDPK
                        <span
                            class="bg-primary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">PPLG</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Dasar-dasar Keahlian Pengembangan Perangkat Lunak &amp; Gim — Fondasi wajib bagi
                        siswa jurusan RPL/PPLG sebelum menekuni keahlian tingkat lanjut.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL MATERI</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">8
                            TOPIK</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5
                            TOPIK</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3
                            TOPIK</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#materi-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    MULAI DARI TOPIK 1
                </a>
                <a href="{{ route('pembelajaran') }}"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                    KEMBALI
                </a>
            </div>
        </div>
    </div>

    <!-- ==================== MAIN CONTENT ==================== -->
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl flex flex-col gap-space-xl">

        <!-- ==================== SEMESTER 1 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-primary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟦 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        TOPIK 1 — 5
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== TOPIK 1 — PROSES BISNIS PPLG ==================== -->
        <article id="materi-1"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">01</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK SATU • INDUSTRI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Proses Bisnis Menyeluruh Bidang PPLG
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SDLC
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian PPLG -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>PPLG</strong> (Pengembangan Perangkat Lunak dan Gim) adalah bidang yang mempelajari
                        proses membuat, mengembangkan, menguji, dan memelihara perangkat lunak maupun gim.
                    </p>
                </div>

                <!-- SDLC -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">cycle</span>
                        SDLC — SOFTWARE DEVELOPMENT LIFE CYCLE
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>SDLC</strong> adalah tahapan pengembangan perangkat lunak dari awal sampai pemeliharaan.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Tahap</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Penjelasan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">1. Planning</td>
                                    <td class="p-space-md">Menentukan tujuan, kebutuhan, waktu, dan sumber daya</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">2. Analysis</td>
                                    <td class="p-space-md">Menganalisis kebutuhan pengguna</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">3. Design</td>
                                    <td class="p-space-md">Merancang tampilan, sistem, database, dan arsitektur</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">4. Implementation</td>
                                    <td class="p-space-md">Membuat program melalui coding</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">5. Testing</td>
                                    <td class="p-space-md">Memeriksa dan mencari kesalahan/bug</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">6. Deployment</td>
                                    <td class="p-space-md">Menggunakan atau merilis aplikasi</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">7. Maintenance</td>
                                    <td class="p-space-md">Memperbaiki dan mengembangkan aplikasi setelah digunakan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            URUTAN WAJIB INGAT
                        </div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold text-center">
                            Planning → Analysis → Design → Implementation → Testing → Deployment → Maintenance
                        </div>
                    </div>
                </div>

                <!-- Manajemen Proyek -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface">assignment</span>
                        MANAJEMEN PROYEK
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-2">Meliputi:</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 font-code-inline text-code-inline text-on-surface">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Pembagian Tugas</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Penentuan Waktu</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Penggunaan Sumber Daya</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Komunikasi Tim</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Pengawasan Hasil</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 2 — PERKEMBANGAN TEKNOLOGI ==================== -->
        <article id="materi-2"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">02</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK DUA • TEKNOLOGI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Perkembangan Dunia Kerja &amp; Teknologi PPLG
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TREN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Perkembangan PL & Gim -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">devices</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perangkat Lunak</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Berkembang dari <strong>program sederhana</strong> menjadi aplikasi kompleks yang berjalan di
                            <strong>komputer, smartphone, web, cloud</strong>, hingga <strong>perangkat pintar</strong>.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sports_esports</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Gim</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Berkembang dari <strong>2D sederhana</strong> menjadi gim <strong>3D, online, multiplayer,
                            VR/AR</strong>, dan menggunakan teknologi <strong>AI</strong>.
                        </p>
                    </div>
                </div>

                <!-- Teknologi yang Berkembang -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rocket_launch</span>
                        TEKNOLOGI YANG BERKEMBANG
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">smart_toy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">AI</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Komputer melakukan tugas yang butuh kecerdasan manusia.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sensors</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">IoT</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Perangkat fisik terhubung internet, kirim/terima data.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">cloud</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Cloud Computing</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penyimpanan &amp; pemrosesan data melalui server internet.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">database</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Big Data</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengolahan data dalam jumlah sangat besar &amp; kompleks.</p>
                        </div>
                    </div>
                </div>

                <!-- HAKI -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">copyright</span>
                        HAKI — HAK ATAS KEKAYAAN INTELEKTUAL
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>HAKI</strong> melindungi hasil karya seseorang atau perusahaan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Hak Cipta</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Software, musik, gambar, dll.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Merek</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nama/logo produk.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Paten</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penemuan/inovasi tertentu.</p>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">license</span>
                            LISENSI SOFTWARE
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Open Source</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Kode sumber tersedia untuk dipelajari/dikembangkan sesuai lisensi.</p>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Proprietary</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Dimiliki pihak tertentu, penggunaannya dibatasi.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 3 — PROFESI & KEWIRAUSAHAAN ==================== -->
        <article id="materi-3"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">03</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK TIGA • KARIER
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Profesi dan Kewirausahaan
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KARIER
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Profesi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">work</span>
                        PROFESI DALAM INDUSTRI PPLG
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Profesi</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Tugas Utama</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Software Engineer</td>
                                    <td class="p-space-md">Mengembangkan &amp; memelihara software</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Web Developer</td>
                                    <td class="p-space-md">Membuat &amp; mengembangkan website</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mobile Developer</td>
                                    <td class="p-space-md">Membuat aplikasi Android/iOS</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">UI/UX Designer</td>
                                    <td class="p-space-md">Merancang tampilan &amp; pengalaman pengguna</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Game Developer</td>
                                    <td class="p-space-md">Membuat &amp; mengembangkan gim</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">QA (Quality Assurance)</td>
                                    <td class="p-space-md">Menguji kualitas &amp; menemukan bug</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Technopreneurship -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rocket</span>
                        TECHNOPRENEURSHIP
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Technopreneurship</strong> adalah kewirausahaan yang memanfaatkan teknologi untuk
                            menciptakan produk atau jasa.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">YANG PERLU DIMILIKI</div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kreativitas</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Inovasi</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Melihat Peluang</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Problem Solving</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Gunakan Teknologi</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Berani Ambil Risiko</div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH USAHA</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">›</span> Membuat aplikasi kasir</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">›</span> Website toko online</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">›</span> Aplikasi pendidikan</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">›</span> Gim sebagai produk bisnis</div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 4 — K3LH & BUDAYA KERJA ==================== -->
        <article id="materi-4"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">04</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK EMPAT • K3LH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            K3LH &amp; Budaya Kerja
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    K3LH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>K3LH</strong> = Keselamatan dan Kesehatan Kerja serta Lingkungan Hidup.
                        Tujuannya menjaga keselamatan, kesehatan, kenyamanan, dan lingkungan kerja.
                    </p>
                </div>

                <!-- 5R/5S -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">cleaning_services</span>
                        5R / 5S
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">5R</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Arti</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Ringkas</td>
                                    <td class="p-space-md">Memisahkan barang yang diperlukan dan tidak diperlukan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Rapi</td>
                                    <td class="p-space-md">Menempatkan barang pada tempatnya</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Resik</td>
                                    <td class="p-space-md">Menjaga kebersihan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Rawat</td>
                                    <td class="p-space-md">Mempertahankan kondisi yang baik</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Rajin</td>
                                    <td class="p-space-md">Membiasakan disiplin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- K3 Komputer & Ergonomi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">computer</span>
                        K3 SAAT MENGGUNAKAN KOMPUTER
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Keselamatan</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Kabel tertata &amp; tidak membahayakan<br>
                                <span class="text-primary font-bold">›</span> Tidak menyentuh perangkat listrik dengan tangan basah<br>
                                <span class="text-primary font-bold">›</span> Gunakan komputer sesuai prosedur<br>
                                <span class="text-primary font-bold">›</span> Jangan makan/minum di dekat perangkat<br>
                                <span class="text-primary font-bold">›</span> Ventilasi perangkat tidak tertutup<br>
                                <span class="text-primary font-bold">›</span> Istirahatkan mata secara berkala
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ergonomi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Punggung tegak dan nyaman<br>
                                <span class="text-primary font-bold">›</span> Kaki menapak lantai<br>
                                <span class="text-primary font-bold">›</span> Layar sejajar/sedikit di bawah pandangan mata<br>
                                <span class="text-primary font-bold">›</span> Jarak mata ke layar ≈ 50–70 cm<br>
                                <span class="text-primary font-bold">›</span> Tangan &amp; pergelangan tidak terlalu menekuk
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 5 — DASAR PEMROGRAMAN & LOGIKA ==================== -->
        <article id="materi-5"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">05</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK LIMA • LOGIKA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Dasar Pemrograman &amp; Logika Komputasi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ALGORITMA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Algoritma -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">linear_scale</span>
                        ALGORITMA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>Algoritma</strong> adalah langkah-langkah logis dan sistematis untuk menyelesaikan
                            suatu masalah.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                            <strong class="text-primary">Contoh membuat teh:</strong> Mulai → Siapkan gelas → Masukkan teh → Tuangkan air → Tambahkan gula → Aduk → Selesai
                        </div>
                    </div>

                    <!-- Unsur Algoritma -->
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">UNSUR ALGORITMA</div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Finiteness</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jumlah langkah terbatas.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Definiteness</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Setiap langkah jelas.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Input</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Data yang masuk.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Output</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Hasil yang keluar.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Effectiveness</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Langkah dapat dilakukan &amp; menghasilkan solusi.</p>
                        </div>
                    </div>
                </div>

                <!-- Cara Menuliskan Algoritma -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        CARA MENULISKAN ALGORITMA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">chat</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. Bahasa Natural</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan bahasa manusia biasa.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">code</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. Pseudocode</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menyerupai kode program, tapi belum terikat bahasa tertentu.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">schema</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">3. Flowchart</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggambar algoritma dengan simbol.</p>
                        </div>
                    </div>

                    <!-- Simbol Flowchart -->
                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">shape_line</span>
                            SIMBOL FLOWCHART PENTING
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-2 font-code-inline text-code-inline">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">Oval</span> → Start/End</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">Persegi Panjang</span> → Process</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">Jajar Genjang</span> → Input/Output</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">Belah Ketupat</span> → Decision</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background"><span class="text-primary font-bold">Panah</span> → Flow/alur</div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== SEMESTER 2 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟩 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        TOPIK 6 — 8
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== TOPIK 6 — PEMROGRAMAN DASAR ==================== -->
        <article id="materi-6"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">06</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK ENAM • CODING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pemrograman Dasar
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    CODING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Pemrograman</strong> adalah proses membuat instruksi menggunakan bahasa pemrograman
                        agar komputer melakukan tugas tertentu. Bahasa yang dapat digunakan: <strong>Python, C++,
                        Pascal</strong>, tergantung kurikulum/sekolah.
                    </p>
                </div>

                <!-- Variabel & Tipe Data -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">inventory_2</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Variabel</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tempat menyimpan data.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            nama = "Asis"<br>
                            umur = 17
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">category</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tipe Data</div>
                        <div class="overflow-x-auto">
                            <table class="w-full border-[2px] border-on-background bg-surface-container-lowest text-xs">
                                <thead class="bg-on-background text-inverse-on-surface">
                                    <tr>
                                        <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Tipe</th>
                                        <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Contoh</th>
                                        <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-on-background">Ket</th>
                                    </tr>
                                </thead>
                                <tbody class="font-code-inline text-code-inline text-on-surface-variant">
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">Integer</td>
                                        <td class="p-2 border-r-[2px] border-on-background">10</td>
                                        <td class="p-2">Bilangan bulat</td>
                                    </tr>
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">Float</td>
                                        <td class="p-2 border-r-[2px] border-on-background">10.5</td>
                                        <td class="p-2">Bilangan desimal</td>
                                    </tr>
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">String</td>
                                        <td class="p-2 border-r-[2px] border-on-background">"Halo"</td>
                                        <td class="p-2">Teks</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">Boolean</td>
                                        <td class="p-2 border-r-[2px] border-on-background">True/False</td>
                                        <td class="p-2">Benar/salah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Operator -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        OPERATOR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Aritmatika</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">+ , − , × , ÷ , %</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perbandingan</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">== , != , &gt; , &lt; , &gt;= , &lt;=</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Logika</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">AND , OR , NOT</div>
                        </div>
                    </div>
                </div>

                <!-- Percabangan & Perulangan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">fork_right</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Percabangan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengambil keputusan.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
IF kondisi<br>
&nbsp;&nbsp;lakukan sesuatu<br>
ELSE<br>
&nbsp;&nbsp;lakukan yang lain
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            <strong class="text-primary">Contoh:</strong> Nilai ≥ 75 → Lulus, Nilai &lt; 75 → Tidak Lulus
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">all_inclusive</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perulangan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menjalankan perintah berkali-kali.</p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">for</span> → jumlah pengulangan diketahui<br>
                            <span class="text-primary font-bold">while</span> → berjalan selama kondisi benar<br>
                            <span class="text-primary font-bold">do-while</span> → jalankan minimal 1× sebelum cek kondisi
                        </div>
                    </div>
                </div>

                <!-- Fungsi & Prosedur -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface">functions</span>
                        FUNGSI &amp; PROSEDUR
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Digunakan untuk <strong>mengelompokkan instruksi</strong> agar program lebih rapi, mudah
                        digunakan kembali, dan mudah dipelihara.
                    </p>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 7 — DASAR PENGEMBANGAN PL & GIM ==================== -->
        <article id="materi-7"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">07</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK TUJUH • PENGEMBANGAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Dasar Pengembangan Perangkat Lunak dan Gim
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    UI/UX
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- UI -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        UI (USER INTERFACE)
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>UI</strong> adalah tampilan yang digunakan pengguna untuk berinteraksi dengan aplikasi.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Contoh UI</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Tombol<br>
                                <span class="text-primary font-bold">›</span> Menu<br>
                                <span class="text-primary font-bold">›</span> Form<br>
                                <span class="text-primary font-bold">›</span> Ikon<br>
                                <span class="text-primary font-bold">›</span> Warna<br>
                                <span class="text-primary font-bold">›</span> Layout
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">UI yang Baik</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">✓</span> Mudah digunakan<br>
                                <span class="text-primary font-bold">✓</span> Jelas<br>
                                <span class="text-primary font-bold">✓</span> Konsisten<br>
                                <span class="text-primary font-bold">✓</span> Responsif<br>
                                <span class="text-primary font-bold">✓</span> Nyaman dilihat
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aset Digital -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">perm_media</span>
                        ASET DIGITAL
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Aset digital</strong> adalah bahan yang digunakan dalam aplikasi/gim.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Gambar</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Ikon</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Audio</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Video</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Font</div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Animasi</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface md:col-span-2">Model 3D</div>
                    </div>
                </div>

                <!-- Integrasi Logika & UI -->
                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface">link</span>
                        INTEGRASI LOGIKA DENGAN UI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-3">
                        Program menghubungkan tampilan dengan logika.
                    </p>
                    <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                        <strong class="text-primary">Contoh:</strong> User menekan tombol Login → program memeriksa username &amp; password → jika benar masuk ke dashboard.
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 8 — DASAR PERANCANGAN BASIS DATA ==================== -->
        <article id="materi-8"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">08</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK DELAPAN • DATABASE
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Dasar Perancangan Basis Data
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    DATABASE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Data vs Informasi -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">scatter_plot</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Data</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Fakta mentah yang belum diolah.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            80, 75, 90
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">insights</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Informasi</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Data yang sudah diolah sehingga memiliki makna.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            Nilai rata-rata = 81,7
                        </div>
                    </div>
                </div>

                <!-- Database & RDBMS -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">storage</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Database</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kumpulan data yang disimpan secara terstruktur agar mudah dikelola &amp; dicari.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                            Database Sekolah<br>
                            ├── Tabel siswa<br>
                            ├── Tabel guru<br>
                            ├── Tabel kelas<br>
                            └── Tabel nilai
                        </div>
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">database</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">RDBMS</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Sistem mengelola database bentuk tabel dengan relasi antar-tabel.</p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> MySQL<br>
                            <span class="text-primary font-bold">›</span> MariaDB<br>
                            <span class="text-primary font-bold">›</span> PostgreSQL<br>
                            <span class="text-primary font-bold">›</span> Microsoft SQL Server
                        </div>
                    </div>
                </div>

                <!-- Istilah Penting -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        ISTILAH PENTING DATABASE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Table</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat menyimpan data.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Column / Field</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Atribut data.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Row / Record</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Satu data lengkap.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Primary Key</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Identitas unik setiap record.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Foreign Key</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penghubung antar-tabel.</p>
                        </div>
                    </div>
                </div>

                <!-- SQL -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">code</span>
                        SQL — STRUCTURED QUERY LANGUAGE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">DDL — Data Definition Language</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Membuat atau mengubah struktur database.</p>
                            <div class="overflow-x-auto">
                                <table class="w-full border-[2px] border-on-background bg-surface-container-lowest text-xs">
                                    <thead class="bg-on-background text-inverse-on-surface">
                                        <tr>
                                            <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Perintah</th>
                                            <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-on-background">Fungsi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-code-inline text-code-inline text-on-surface-variant">
                                        <tr class="border-b-[2px] border-on-background">
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">CREATE</td>
                                            <td class="p-2">Membuat database/tabel</td>
                                        </tr>
                                        <tr class="border-b-[2px] border-on-background">
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">ALTER</td>
                                            <td class="p-2">Mengubah struktur tabel</td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">DROP</td>
                                            <td class="p-2">Menghapus database/tabel</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">DML — Data Manipulation Language</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengelola isi data.</p>
                            <div class="overflow-x-auto">
                                <table class="w-full border-[2px] border-on-background bg-surface-container-lowest text-xs">
                                    <thead class="bg-on-background text-inverse-on-surface">
                                        <tr>
                                            <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Perintah</th>
                                            <th class="p-2 text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-on-background">Fungsi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-code-inline text-code-inline text-on-surface-variant">
                                        <tr class="border-b-[2px] border-on-background">
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">SELECT</td>
                                            <td class="p-2">Menampilkan data</td>
                                        </tr>
                                        <tr class="border-b-[2px] border-on-background">
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">INSERT</td>
                                            <td class="p-2">Menambahkan data</td>
                                        </tr>
                                        <tr class="border-b-[2px] border-on-background">
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">UPDATE</td>
                                            <td class="p-2">Mengubah data</td>
                                        </tr>
                                        <tr>
                                            <td class="p-2 border-r-[2px] border-on-background font-bold text-on-surface">DELETE</td>
                                            <td class="p-2">Menghapus data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CARA MUDAH MENGINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            DDL = Struktur • DML = Isi/Data
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BACK TO PEMBELAJARAN ==================== -->
        <section
            class="bg-secondary-container border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
            <div class="flex items-start gap-space-md">
                <div
                    class="w-14 h-14 bg-surface-container-lowest border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[32px] text-on-surface">school</span>
                </div>
                <div>
                    <div class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">
                        MODUL SELESAI
                    </div>
                    <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                        LANJUT KE TINGKAT BERIKUTNYA?
                    </h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Kelas XI
                        dengan materi pengembangan web, mobile, dan basis data.
                    </p>
                </div>
            </div>
            <a href="{{ route('pembelajaran') }}"
                class="w-full md:w-auto font-headline-sm text-label-lg uppercase bg-primary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-space-xs text-center shrink-0">
                ← KEMBALI KE PEMBELAJARAN
            </a>
        </section>
    </div>
@endsection

@section("script")
@endsection
