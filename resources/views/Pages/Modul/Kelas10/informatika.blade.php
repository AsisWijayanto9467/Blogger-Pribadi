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
                <span class="text-on-surface font-bold uppercase">B3 — INFORMATIKA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        KELOMPOK B • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        INFORMATIKA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">X</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Fondasi berpikir komputasional, teknologi informasi, arsitektur komputer,
                        jaringan, hingga logika pemrograman untuk mendukung kompetensi RPL/PPLG.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">9
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
                            BAB</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#bab-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    MULAI DARI BAB 1
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
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟦 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 1 — BAB 5
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 1 — PENGANTAR INFORMATIKA ==================== -->
        <article id="bab-1"
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
                            BAB SATU • PENGANTAR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pengantar Informatika
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PENGANTAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Informatika</strong> adalah ilmu yang mempelajari pengolahan informasi
                        menggunakan sistem komputasi, meliputi komputer, data, algoritma, pemrograman,
                        jaringan, dan dampaknya bagi manusia.
                    </p>
                </div>

                <!-- Dalam RPL -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">code</span>
                        DALAM RPL, INFORMATIKA MENJADI DASAR UNTUK
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Pemrograman</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Website &amp; Aplikasi</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Database</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Jaringan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Analisis Data</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Rekayasa PL</div>
                    </div>
                </div>

                <!-- Keterampilan Generik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">workspace_premium</span>
                        KETERAMPILAN GENERIK
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">forum</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Komunikasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sampaikan informasi jelas.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">groups</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kolaborasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kerja dalam tim.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">psychology</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Berpikir Kritis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Analisis masalah.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">lightbulb</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kreativitas</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Solusi baru.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">schedule</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Manajemen Waktu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sesuai jadwal.</p>
                        </div>
                    </div>
                </div>

                <!-- Tahapan Proyek -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        TAHAPAN PROYEK SEDERHANA
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">1. Identifikasi</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">2. Perencanaan</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">3. Tugas</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">4. Pelaksanaan</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">5. Pengujian</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">6. Evaluasi</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">7. Presentasi</span>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — BERPIKIR KOMPUTASIONAL ==================== -->
        <article id="bab-2"
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
                            BAB DUA • COMPUTATIONAL THINKING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Fondasi Berpikir Komputasional
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    CT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Berpikir Komputasional</strong> (Computational Thinking) adalah cara berpikir
                        sistematis untuk menyelesaikan masalah sehingga solusi dapat dilakukan manusia maupun komputer.
                    </p>
                </div>

                <!-- 4 Pilar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">view_week</span>
                        4 PILAR BERPIKIR KOMPUTASIONAL
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">call_split</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PILAR 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Dekomposisi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Memecah masalah besar menjadi masalah-masalah kecil.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Website → Login, Dashboard, Database, CRUD, Testing
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">pattern</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PILAR 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pengenalan Pola</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Mencari kesamaan atau pola dari suatu masalah.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Navbar sama di banyak halaman → buat 1 komponen reusable
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">filter_center_focus</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PILAR 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Abstraksi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Mengambil bagian penting dan mengabaikan detail yang tidak diperlukan.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> ATM → cukup tahu menu tarik tunai, tak perlu tahu internal
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-2">linear_scale</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PILAR 04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Algoritma</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Urutan langkah logis dan sistematis untuk menyelesaikan masalah.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Input user → Input pass → Validasi → Dashboard / Error
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konsep Matematika -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        KONSEP MATEMATIKA DALAM INFORMATIKA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Fungsi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hubungan input-output.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                f(x) = 2x + 3<br>
                                f(2) = 7
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Himpunan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kumpulan objek dengan karakteristik tertentu.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                A = {1, 2, 3, 4, 5}
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Logika</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menentukan kondisi benar/salah.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">AND</strong> — semua benar<br>
                                <strong class="text-primary">OR</strong> — salah satu benar<br>
                                <strong class="text-primary">NOT</strong> — membalik nilai
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — TIK ==================== -->
        <article id="bab-3"
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
                            BAB TIGA • TIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teknologi Informasi dan Komunikasi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TIK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>TIK</strong> adalah teknologi yang digunakan untuk memperoleh, mengolah, menyimpan,
                        dan menyampaikan informasi.
                    </p>
                </div>

                <!-- Aplikasi Perkantoran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">apps</span>
                        APLIKASI PERKANTORAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">description</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Microsoft Word</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengolah dokumen.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Surat<br>
                                <span class="text-primary font-bold">›</span> Laporan<br>
                                <span class="text-primary font-bold">›</span> Makalah<br>
                                <span class="text-primary font-bold">›</span> Dokumen proyek
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">table_chart</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Microsoft Excel</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengolah data tabel.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> SUM<br>
                                <span class="text-primary font-bold">›</span> AVERAGE<br>
                                <span class="text-primary font-bold">›</span> MAX<br>
                                <span class="text-primary font-bold">›</span> MIN<br>
                                <span class="text-primary font-bold">›</span> COUNT
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">slideshow</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">PowerPoint</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat presentasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Mail Merge -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">mail</span>
                        MAIL MERGE
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Mail Merge</strong> digunakan untuk membuat banyak dokumen dengan format sama
                            tetapi data penerima berbeda.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat 100 surat undangan dengan nama penerima yang berbeda.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">KONSEP</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">Template + Data → Banyak Dokumen</div>
                        </div>
                    </div>
                </div>

                <!-- Integrasi Aplikasi -->
                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface">sync_alt</span>
                        INTEGRASI APLIKASI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-3">
                        Data dari satu aplikasi dapat digunakan pada aplikasi lain.
                    </p>
                    <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                        Data siswa di Excel → Mail Merge di Word
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        <strong>Tujuan:</strong> Menghemat waktu dan mengurangi pekerjaan berulang.
                    </p>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 4 — ARSITEKTUR KOMPUTER ==================== -->
        <article id="bab-4"
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
                            BAB EMPAT • ARSITEKTUR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Komponen dan Arsitektur Komputer
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ARSITEKTUR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 3 Komponen Utama -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        3 KOMPONEN UTAMA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">memory</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hardware</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Perangkat keras yang dapat disentuh.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> CPU<br>
                                <span class="text-primary font-bold">›</span> RAM<br>
                                <span class="text-primary font-bold">›</span> SSD/HDD<br>
                                <span class="text-primary font-bold">›</span> Keyboard, Mouse<br>
                                <span class="text-primary font-bold">›</span> Monitor, Printer
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">code</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Software</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Program yang menjalankan fungsi tertentu.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Windows / Linux<br>
                                <span class="text-primary font-bold">›</span> Microsoft Word<br>
                                <span class="text-primary font-bold">›</span> VS Code<br>
                                <span class="text-primary font-bold">›</span> Browser
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">person</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Brainware</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Manusia yang menggunakan / mengelola komputer.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Programmer<br>
                                <span class="text-primary font-bold">›</span> Operator<br>
                                <span class="text-primary font-bold">›</span> Administrator<br>
                                <span class="text-primary font-bold">›</span> User
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">HUBUNGAN</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Brainware → Software → Hardware
                        </div>
                    </div>
                </div>

                <!-- Sistem Operasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">terminal</span>
                        SISTEM OPERASI
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Operating System (OS)</strong> adalah perangkat lunak yang mengelola hardware dan
                            menyediakan layanan bagi aplikasi.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Windows</span>
                                <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Linux</span>
                                <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">macOS</span>
                                <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Android</span>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">FUNGSI OS</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Mengelola file<br>
                                <span class="text-primary font-bold">›</span> Mengelola memori<br>
                                <span class="text-primary font-bold">›</span> Mengelola perangkat keras<br>
                                <span class="text-primary font-bold">›</span> Menjalankan aplikasi<br>
                                <span class="text-primary font-bold">›</span> Mengatur keamanan<br>
                                <span class="text-primary font-bold">›</span> Antarmuka pengguna
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Siklus Pemrosesan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">cycle</span>
                        SIKLUS PEMROSESAN INSTRUKSI
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Fetch</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ambil instruksi.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Decode</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Terjemahkan instruksi.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Execute</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jalankan instruksi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Store</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Simpan hasil.</p>
                        </div>
                    </div>
                </div>

                <!-- Sistem Bilangan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">numbers</span>
                        SISTEM BILANGAN
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Sistem</th>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Basis</th>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Biner</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background font-code-inline text-code-inline">2</td>
                                    <td class="p-space-md text-center font-code-inline text-code-inline">1010</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Oktal</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background font-code-inline text-code-inline">8</td>
                                    <td class="p-space-md text-center font-code-inline text-code-inline">17</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Desimal</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background font-code-inline text-code-inline">10</td>
                                    <td class="p-space-md text-center font-code-inline text-code-inline">25</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Heksadesimal</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background font-code-inline text-code-inline">16</td>
                                    <td class="p-space-md text-center font-code-inline text-code-inline">1A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BINER</div>
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            Hanya menggunakan <strong>0 dan 1</strong>.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Sistem biner sangat penting karena komputer bekerja menggunakan representasi digital
                            berbasis dua keadaan.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — KONEKTIVITAS & TRANSMISI DATA ==================== -->
        <article id="bab-5"
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
                            BAB LIMA • JARINGAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Konektivitas dan Transmisi Data
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    JARINGAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Jaringan komputer</strong> adalah hubungan antara dua atau lebih perangkat untuk
                        berkomunikasi dan bertukar data.
                    </p>
                </div>

                <!-- Berdasarkan Jangkauan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        BERDASARKAN JANGKAUAN
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">LAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Rumah / sekolah</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">MAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Area kota</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">WAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Area sangat luas</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Internet</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Global</p>
                        </div>
                    </div>
                </div>

                <!-- Perangkat Jaringan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">router</span>
                        PERANGKAT JARINGAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">router</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Router</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghubungkan jaringan berbeda & menentukan rute paket.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">lan</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Switch</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghubungkan perangkat dalam satu LAN.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">wifi</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Access Point</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menyediakan koneksi Wi-Fi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">settings_input_antenna</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Modem</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghubungkan jaringan dengan layanan internet.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">memory</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">NIC / LAN Card</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Antarmuka perangkat untuk terhubung ke jaringan.</p>
                        </div>
                    </div>
                </div>

                <!-- Transmisi Data -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">cable</span>
                        TRANSMISI DATA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">cable</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kabel</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> UTP<br>
                                <span class="text-primary font-bold">›</span> Fiber Optic
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">wifi</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Nirkabel</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Wi-Fi<br>
                                <span class="text-primary font-bold">›</span> Bluetooth<br>
                                <span class="text-primary font-bold">›</span> Jaringan seluler
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">security</span>
                        CYBERSECURITY DASAR
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Cybersecurity</strong> adalah upaya melindungi sistem, jaringan, dan data dari ancaman.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-2 bg-primary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Gunakan password yang kuat
                        </div>
                        <div class="p-2 bg-secondary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Jangan membagikan password
                        </div>
                        <div class="p-2 bg-tertiary-fixed border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Aktifkan autentikasi tambahan
                        </div>
                        <div class="p-2 bg-surface-container-low border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Jangan sembarang membuka link
                        </div>
                        <div class="p-2 bg-surface-container-low border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Gunakan software terpercaya
                        </div>
                        <div class="p-2 bg-primary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Lakukan backup data
                        </div>
                        <div class="p-2 bg-error-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface md:col-span-2">
                            <span class="text-primary font-bold">›</span> Waspadai phishing
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
                        🟢 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 6 — BAB 9
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 6 — DATA & VALIDASI ==================== -->
        <article id="bab-6"
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
                            BAB ENAM • DATA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Data, Informasi, dan Validasi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    DATA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Data vs Informasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        DATA vs INFORMASI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Data</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Fakta mentah yang belum diolah.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                80, 75, 90, 85
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Informasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Data yang sudah diolah sehingga memiliki makna.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                Rata-rata = 82,5
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Data → Diolah → Informasi
                        </div>
                    </div>
                </div>

                <!-- Variabel & Pengumpulan Data -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">data_object</span>
                        VARIABEL &amp; PENGUMPULAN DATA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Variabel</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Sesuatu yang nilainya dapat berubah atau berbeda.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> nama<br>
                                <span class="text-primary font-bold">›</span> umur<br>
                                <span class="text-primary font-bold">›</span> kelas<br>
                                <span class="text-primary font-bold">›</span> nilai
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sumber Data</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Observasi<br>
                                <span class="text-primary font-bold">›</span> Wawancara<br>
                                <span class="text-primary font-bold">›</span> Kuesioner<br>
                                <span class="text-primary font-bold">›</span> Database<br>
                                <span class="text-primary font-bold">›</span> Website<br>
                                <span class="text-primary font-bold">›</span> Dokumen
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Scraping -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">travel_explore</span>
                        WEB SCRAPING
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Web scraping</strong> adalah proses mengambil data dari halaman web secara
                            otomatis menggunakan program (Python/Google Colab).
                        </p>
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-code-inline text-code-inline text-on-surface text-center">
                            Website → Program Scraping → Data → Pengolahan/Analisis
                        </div>
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Perhatian:</strong> Penggunaan scraping harus memperhatikan aturan website,
                            privasi, hak cipta, dan ketentuan penggunaan data.
                        </p>
                    </div>
                </div>

                <!-- CRAAP -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">verified</span>
                        VALIDASI INFORMASI — CRAAP
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Huruf</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Arti</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Pertanyaan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-code-inline text-code-inline font-bold text-primary border-r-[2px] border-on-background">C</td>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Currency</td>
                                    <td class="p-space-md">Apakah informasinya terbaru?</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-code-inline text-code-inline font-bold text-primary border-r-[2px] border-on-background">R</td>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Relevance</td>
                                    <td class="p-space-md">Apakah relevan dengan kebutuhan?</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-code-inline text-code-inline font-bold text-primary border-r-[2px] border-on-background">A</td>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Authority</td>
                                    <td class="p-space-md">Siapa sumbernya?</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-code-inline text-code-inline font-bold text-primary border-r-[2px] border-on-background">A</td>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Accuracy</td>
                                    <td class="p-space-md">Apakah informasinya benar?</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md text-center font-code-inline text-code-inline font-bold text-primary border-r-[2px] border-on-background">P</td>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Purpose</td>
                                    <td class="p-space-md">Apa tujuan informasi dibuat?</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 7 — LOGIKA & PEMROGRAMAN ==================== -->
        <article id="bab-7"
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
                            BAB TUJUH • PEMROGRAMAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Dasar Logika &amp; Bahasa Pemrograman
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KODING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Algoritma, Flowchart, Pseudocode -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">code_blocks</span>
                        ALGORITMA, FLOWCHART, PSEUDOCODE
                    </div>

                    <!-- Algoritma -->
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. Algoritma</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Langkah-langkah logis dan berurutan untuk menyelesaikan masalah.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">Contoh membuat teh:</strong><br>
                            Siapkan gelas → masukkan teh → masukkan gula → tuangkan air → aduk
                        </div>
                    </div>

                    <!-- Flowchart -->
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. Flowchart</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Diagram yang menggambarkan alur algoritma.
                        </p>
                        <div class="overflow-x-auto">
                            <table class="w-full border-[2px] border-on-background bg-surface-container-lowest">
                                <thead class="bg-on-background text-inverse-on-surface">
                                    <tr>
                                        <th class="p-space-sm text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Simbol</th>
                                        <th class="p-space-sm text-left font-label-sm text-label-sm uppercase font-bold border-b-[2px] border-on-background">Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-space-sm font-bold text-on-surface border-r-[2px] border-on-background">Oval</td>
                                        <td class="p-space-sm">Start/End</td>
                                    </tr>
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-space-sm font-bold text-on-surface border-r-[2px] border-on-background">Persegi Panjang</td>
                                        <td class="p-space-sm">Process</td>
                                    </tr>
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-space-sm font-bold text-on-surface border-r-[2px] border-on-background">Jajar Genjang</td>
                                        <td class="p-space-sm">Input / Output</td>
                                    </tr>
                                    <tr class="border-b-[2px] border-on-background">
                                        <td class="p-space-sm font-bold text-on-surface border-r-[2px] border-on-background">Belah Ketupat</td>
                                        <td class="p-space-sm">Decision</td>
                                    </tr>
                                    <tr>
                                        <td class="p-space-sm font-bold text-on-surface border-r-[2px] border-on-background">Panah</td>
                                        <td class="p-space-sm">Flow / Alur</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pseudocode -->
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">3. Pseudocode</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Penulisan algoritma menggunakan bahasa sederhana yang menyerupai kode, tetapi tidak terikat
                            aturan bahasa pemrograman tertentu.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
START<br>
&nbsp;&nbsp;INPUT nilai<br>
&nbsp;&nbsp;IF nilai >= 75<br>
&nbsp;&nbsp;&nbsp;&nbsp;OUTPUT "Lulus"<br>
&nbsp;&nbsp;ELSE<br>
&nbsp;&nbsp;&nbsp;&nbsp;OUTPUT "Tidak Lulus"<br>
&nbsp;&nbsp;END IF<br>
END
                        </div>
                    </div>
                </div>

                <!-- Bahasa Pemrograman -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">terminal</span>
                        BAHASA PEMROGRAMAN
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH BAHASA</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Python</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">C</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Java</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">JavaScript</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">PHP</span>
                        </div>
                    </div>

                    <!-- Variabel & Tipe Data -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Variabel</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tempat menyimpan data.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                nama = "Budi"<br>
                                umur = 16
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tipe Data</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Integer — bilangan bulat<br>
                                <span class="text-primary font-bold">›</span> Float — bilangan desimal<br>
                                <span class="text-primary font-bold">›</span> String — teks<br>
                                <span class="text-primary font-bold">›</span> Boolean — True/False
                            </div>
                        </div>
                    </div>

                    <!-- Operator -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Aritmatika</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">+ , − , × , ÷</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perbandingan</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">&gt; , &lt; , &gt;= , &lt;= , == , !=</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Logika</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">AND , OR , NOT</div>
                        </div>
                    </div>

                    <!-- Percabangan & Perulangan -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Percabangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Program memilih berdasarkan kondisi.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
IF nilai >= 75<br>
&nbsp;&nbsp;Lulus<br>
ELSE<br>
&nbsp;&nbsp;Tidak Lulus
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perulangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menjalankan perintah berulang.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
FOR i = 1 TO 5<br>
&nbsp;&nbsp;tampilkan i
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> for<br>
                                <span class="text-primary font-bold">›</span> while<br>
                                <span class="text-primary font-bold">›</span> do-while
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 8 — ETIKA DIGITAL ==================== -->
        <article id="bab-8"
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
                            BAB DELAPAN • ETIKA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Etika Digital dan Dunia Industri
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ETIKA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Dampak Informatika -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">balance</span>
                        DAMPAK INFORMATIKA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">thumb_up</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Dampak Positif</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">+</span> Komunikasi lebih cepat<br>
                                <span class="text-primary font-bold">+</span> Pekerjaan lebih efisien<br>
                                <span class="text-primary font-bold">+</span> Pembelajaran lebih mudah<br>
                                <span class="text-primary font-bold">+</span> Munculnya pekerjaan baru<br>
                                <span class="text-primary font-bold">+</span> Berkembangnya ekonomi digital
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">thumb_down</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Dampak Negatif</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">−</span> Kejahatan siber<br>
                                <span class="text-primary font-bold">−</span> Penyebaran hoaks<br>
                                <span class="text-primary font-bold">−</span> Kecanduan teknologi<br>
                                <span class="text-primary font-bold">−</span> Pelanggaran privasi<br>
                                <span class="text-primary font-bold">−</span> Pengangguran akibat otomatisasi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Etika Digital -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">verified_user</span>
                        ETIKA DIGITAL
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Etika digital</strong> adalah aturan atau perilaku yang baik ketika menggunakan teknologi.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-2 bg-secondary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Menghormati privasi orang lain
                        </div>
                        <div class="p-2 bg-tertiary-fixed border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Tidak menyebarkan hoaks
                        </div>
                        <div class="p-2 bg-surface-container-low border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Tidak melakukan cyberbullying
                        </div>
                        <div class="p-2 bg-primary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Mencantumkan sumber
                        </div>
                        <div class="p-2 bg-secondary-container border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Tidak menjiplak karya orang lain
                        </div>
                        <div class="p-2 bg-tertiary-fixed border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                            <span class="text-primary font-bold">›</span> Menjaga keamanan akun
                        </div>
                    </div>
                </div>

                <!-- HKI -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">copyright</span>
                        HKI — HAK KEKAYAAN INTELEKTUAL
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>HKI</strong> memberikan perlindungan terhadap hasil karya atau kekayaan intelektual.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Hak Cipta</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Software, tulisan, gambar, musik.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Merek</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nama / logo produk.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Paten</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penemuan/inovasi tertentu.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Dalam RPL:</strong> Jangan sembarangan menyalin software, kode, desain,
                            atau aset digital tanpa memperhatikan lisensi dan hak penggunaannya.
                        </p>
                    </div>
                </div>

                <!-- Profesi RPL -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">work</span>
                        PROFESI DI BIDANG RPL
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Software Engineer</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Web Developer</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Mobile Developer</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Frontend Dev</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Backend Dev</div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Full-Stack Dev</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">UI/UX Designer</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">QA / Tester</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">DBA</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface md:col-span-3">DevOps Engineer</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 9 — PROYEK KOLABORATIF ==================== -->
        <article id="bab-9"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">09</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            BAB SEMBILAN • PROYEK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Proyek Kolaboratif RPL
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PROYEK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Proyek kolaboratif</strong> adalah kegiatan membuat produk atau solusi digital secara
                        berkelompok.
                    </p>
                </div>

                <!-- Contoh Proyek -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">apps</span>
                        CONTOH PROYEK
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Website Sekolah</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Aplikasi Kasir</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Sistem Perpus</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Aplikasi Rental</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Sistem Siswa</div>
                    </div>
                </div>

                <!-- Tahapan Proyek -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        8 TAHAPAN PROYEK
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Identifikasi Masalah</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan masalah yang ingin diselesaikan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Analisis Kebutuhan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan fitur dan kebutuhan pengguna.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perencanaan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan teknologi, jadwal, dan pembagian tugas.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perancangan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat desain UI, database, flowchart, UML, dsb.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">05</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Implementasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mulai membuat program.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">06</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mencari dan memperbaiki kesalahan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">07</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Dokumentasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat laporan dan dokumentasi proyek.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">08</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Presentasi / Evaluasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menjelaskan hasil proyek dan mengevaluasi kekurangannya.</p>
                            </div>
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
                        LANJUT KE MATA PELAJARAN LAIN?
                    </h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                        Kembali ke halaman pembelajaran untuk menjelajahi modul PIPAS,
                        DDPK PPLG, dan mata pelajaran lainnya.
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
