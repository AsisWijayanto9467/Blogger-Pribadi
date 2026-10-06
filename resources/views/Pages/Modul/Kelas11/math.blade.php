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
                <a href="{{ route('pembelajaran') }}#section-kelas-xi" class="hover:text-primary transition-colors uppercase">KELAS XI</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface font-bold uppercase">B1 — MATEMATIKA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        KELOMPOK B • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        MATEMATIKA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">XI</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Nggali kawruh matematika tingkat lanjut: komposisi &amp; invers fungsi, lingkaran,
                        statistika, trigonometri lanjutan, vektor, dan limit fungsi aljabar.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">6
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">2 BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4 BAB</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#semester-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    SEMESTER 1
                </a>
                <a href="#semester-2"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-secondary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">auto_stories</span>
                    SEMESTER 2
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

        <!-- ============================================= -->
        <!-- ================ SEMESTER 1 ================= -->
        <!-- ============================================= -->
        <section id="semester-1" class="w-full">
            <div
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟦 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 1 — BAB 2
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 1 — KOMPOSISI & INVERS FUNGSI ==================== -->
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
                            BAB SATU • FUNGSI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Komposisi Fungsi &amp; Fungsi Invers
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    FUNGSI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Relasi & Fungsi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">functions</span>
                        A. RELASI &amp; FUNGSI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>Relasi</strong> adalah hubungan antara anggota himpunan satu dengan himpunan lainnya.
                        </p>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Fungsi</strong> adalah relasi khusus yang memasangkan setiap anggota domain
                            tepat satu anggota kodomain.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Domain</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Daerah asal / input.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Kodomain</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Daerah kawan.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Range</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Hasil / output yang benar-benar diperoleh.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <p class="font-code-inline text-code-inline text-on-surface mb-2">
                            f(x) = 2x + 1 untuk x = 1, 2, 3
                        </p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            f(1) = 3, f(2) = 5, f(3) = 7<br>
                            <span class="text-primary font-bold">Domain</span> = {1, 2, 3}<br>
                            <span class="text-primary font-bold">Range</span> = {3, 5, 7}
                        </div>
                    </div>
                </div>

                <!-- B. Operasi Aljabar Fungsi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        B. OPERASI ALJABAR FUNGSI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Penjumlahan</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                (f+g)(x) = f(x) + g(x)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Pengurangan</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                (f−g)(x) = f(x) − g(x)
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Perkalian</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                (f·g)(x) = f(x)·g(x)
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Pembagian</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                (f/g)(x) = f(x)/g(x), g(x) ≠ 0
                            </div>
                        </div>
                    </div>
                </div>

                <!-- C. Komposisi Fungsi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">merge</span>
                        C. KOMPOSISI FUNGSI
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>Komposisi fungsi</strong> = menggabungkan dua fungsi.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            (f ∘ g)(x) = f(g(x))
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant text-center mt-2">
                            Kerjakan <strong>g</strong> dulu, hasilnya dimasukkan ke <strong>f</strong>.
                        </p>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            f(x) = 2x + 1, g(x) = x + 3<br>
                            (f ∘ g)(x) = f(x+3) = 2(x+3) + 1 = <strong class="text-primary">2x + 7</strong>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Asosiatif ✓</div>
                            <div class="font-code-inline text-code-inline text-on-surface">(f ∘ g) ∘ h = f ∘ (g ∘ h)</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Tidak Komutatif ✗</div>
                            <div class="font-code-inline text-code-inline text-on-surface">f ∘ g ≠ g ∘ f</div>
                        </div>
                    </div>
                </div>

                <!-- D. Fungsi Invers -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">swap_horiz</span>
                        D. FUNGSI INVERS
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Fungsi invers</strong> adalah fungsi yang membalik proses fungsi asal.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CARA MENENTUKAN INVERS</div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">1</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ubah f(x) jadi y</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">2</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tukar x dan y</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">3</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Selesaikan y</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">4</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Hasil = f⁻¹(x)</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                f(x) = 2x + 3<br>
                                y = 2x + 3<br>
                                x = 2y + 3<br>
                                y = (x − 3) / 2<br>
                                <strong class="text-primary">f⁻¹(x) = (x − 3)/2</strong>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">HUBUNGAN PENTING</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> f(f⁻¹(x)) = x<br>
                                <span class="text-primary font-bold">›</span> f⁻¹(f(x)) = x<br>
                                <span class="text-primary font-bold">›</span> (f ∘ g)⁻¹ = g⁻¹ ∘ f⁻¹
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — LINGKARAN ==================== -->
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
                            BAB DUA • GEOMETRI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Lingkaran
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    LINGKARAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Persamaan Lingkaran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">circle</span>
                        A. PERSAMAAN LINGKARAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PUSAT (0,0)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                x² + y² = r²
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PUSAT (a,b)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                (x−a)² + (y−b)² = r²
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK UMUM</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface mb-2">
                                x² + y² + Dx + Ey + F = 0
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                Pusat = (−D/2, −E/2)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Unsur Lingkaran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">donut_large</span>
                        B. UNSUR LINGKARAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Jari-jari (r)</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jarak pusat ke titik pada lingkaran.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Diameter</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">2 × jari-jari (d = 2r).</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Tali Busur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Garis penghubung 2 titik pada lingkaran.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Busur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bagian lengkung lingkaran.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Juring</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Daerah dibatasi 2 jari-jari &amp; 1 busur.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Tembereng</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Daerah dibatasi tali busur &amp; busur.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Apotema</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jarak tegak lurus pusat ke tali busur.</p>
                        </div>
                    </div>
                </div>

                <!-- C. Sudut Pusat & Keliling -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">speed</span>
                        C. SUDUT PUSAT &amp; SUDUT KELILING
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            Sudut pusat menghadap busur yang sama dengan sudut keliling.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            Sudut Pusat = 2 × Sudut Keliling
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ============================================= -->
        <!-- ================ SEMESTER 2 ================= -->
        <!-- ============================================= -->
        <section id="semester-2" class="w-full">
            <div
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟢 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 3 — BAB 6
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 3 — GARIS SINGGUNG LINGKARAN ==================== -->
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
                            BAB TIGA • GEOMETRI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Garis Singgung Lingkaran
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    GARIS SINGGUNG
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Garis singgung</strong> adalah garis yang menyentuh lingkaran <strong>tepat di satu
                        titik</strong>.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Sifat Penting</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Jari-jari ⊥ garis singgung di titik singgung.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            r ⊥ garis singgung
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Persamaan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Untuk lingkaran x² + y² = r², garis singgung di titik (x₁, y₁):
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            xx₁ + yy₁ = r²
                        </div>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Tali Busur &amp; Apotema</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Jika jarak pusat ke tali busur = d, maka setengah tali busur:
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            √(r² − d²)
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-on-surface">square</span>
                        SEGIEMPAT TALI BUSUR
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-2">
                        Segi empat yang keempat titik sudutnya berada pada satu lingkaran.
                    </p>
                    <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                        Sudut berhadapan jumlahnya 180°
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 4 — STATISTIKA ==================== -->
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
                            BAB EMPAT • STATISTIKA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Statistika
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    STATISTIKA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Diagram Pencar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">scatter_plot</span>
                        A. DIAGRAM PENCAR (SCATTER PLOT)
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Digunakan untuk melihat <strong>hubungan antara dua variabel</strong>.
                            Contoh: x = waktu belajar, y = nilai ujian.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">trending_up</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Korelasi Positif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">x naik → y cenderung naik.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">trending_down</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Korelasi Negatif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">x naik → y cenderung turun.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">remove</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Tidak Ada Korelasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tidak terlihat pola jelas.</p>
                        </div>
                    </div>
                </div>

                <!-- B. Regresi Linear -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">show_chart</span>
                        B. REGRESI LINEAR
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-md text-headline-md font-bold text-on-surface">
                            y = a + bx
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-3 font-body-sm text-body-sm text-on-surface-variant">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">a</strong> = konstanta / intersep
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">b</strong> = koefisien arah / kemiringan
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">RUMUS KOEFISIEN b</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                b = (nΣxy − Σx·Σy) / (nΣx² − (Σx)²)
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">RUMUS KONSTANTA a</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                a = ȳ − b·x̄
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Regresi dapat digunakan untuk <strong>memprediksi nilai y berdasarkan x</strong>.
                        </p>
                    </div>
                </div>

                <!-- C. Korelasi Pearson -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">analytics</span>
                        C. KORELASI PEARSON
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-md text-headline-md font-bold text-on-surface mb-2">
                            r
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant text-center">
                            Koefisien korelasi Pearson, nilainya antara −1 ≤ r ≤ 1.
                        </p>
                    </div>

                    <div class="overflow-x-auto mb-space-md">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Nilai r</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Makna</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mendekati +1</td>
                                    <td class="p-space-md">Hubungan positif kuat</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mendekati −1</td>
                                    <td class="p-space-md">Hubungan negatif kuat</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mendekati 0</td>
                                    <td class="p-space-md">Hubungan linear lemah / tidak ada</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">percent</span>
                            KOEFISIEN DETERMINASI
                        </div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface mb-2">
                            R² = r²
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant text-center">
                            Dinyatakan dalam persen: <strong>R² × 100%</strong><br>
                            Menunjukkan seberapa besar variasi y dapat dijelaskan oleh hubungan linear dengan x.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — LIMIT FUNGSI ALJABAR ==================== -->
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
                            BAB LIMA • LIMIT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Limit Fungsi Aljabar
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    LIMIT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface mb-3">
                        <strong>Limit</strong> menggambarkan nilai yang didekati oleh suatu fungsi ketika x mendekati
                        nilai tertentu.
                    </p>
                    <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                        lim<sub>x→a</sub> f(x)
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <!-- A. Substitusi -->
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sync_alt</span>
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">A. Substitusi Langsung</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Jika tidak menghasilkan bentuk tak tentu, langsung masukkan nilai x.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            lim<sub>x→2</sub> (x² + 3) = 2² + 3 = <strong class="text-primary">7</strong>
                        </div>
                    </div>

                    <!-- B. Pemfaktoran -->
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">splitscreen</span>
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">B. Pemfaktoran</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Jika substitusi menghasilkan 0/0, faktorkan dulu.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            lim<sub>x→2</sub> (x²−4)/(x−2)<br>
                            = (x−2)(x+2)/(x−2)<br>
                            = x + 2 = <strong class="text-primary">4</strong>
                        </div>
                    </div>

                    <!-- C. Merasionalkan -->
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">square_foot</span>
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">C. Merasionalkan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Untuk bentuk akar, kalikan bentuk sekawan.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            √x + a ↔ √x − a
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 6 — TRIGONOMETRI LANJUTAN & VEKTOR ==================== -->
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
                            BAB ENAM • TRIGONOMETRI &amp; VEKTOR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Trigonometri Lanjutan &amp; Vektor
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TRIGONOMETRI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Rumus Jumlah & Selisih Sudut -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">change_history</span>
                        A. RUMUS JUMLAH &amp; SELISIH SUDUT
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Sinus</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                sin(A+B) = sinA·cosB + cosA·sinB<br>
                                sin(A−B) = sinA·cosB − cosA·sinB
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Cosinus</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                cos(A+B) = cosA·cosB − sinA·sinB<br>
                                cos(A−B) = cosA·cosB + sinA·sinB
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Tangen</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                tan(A+B) = (tanA+tanB)/(1−tanA·tanB)<br>
                                tan(A−B) = (tanA−tanB)/(1+tanA·tanB)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Sudut Rangkap -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">repeat</span>
                        B. SUDUT RANGKAP
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface">sin 2A = 2 sinA·cosA</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface">cos 2A = cos²A − sin²A</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface">tan 2A = 2tanA/(1−tan²A)</div>
                        </div>
                    </div>

                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK LAIN cos 2A</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">cos 2A = 2cos²A − 1</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">cos 2A = 1 − 2sin²A</div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">IDENTITAS DASAR</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center">sin²A + cos²A = 1</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center">tan A = sinA / cosA</div>
                        </div>
                    </div>
                </div>

                <!-- C. Vektor -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        C. VEKTOR
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Vektor</strong> adalah besaran yang mempunyai <strong>besar</strong> dan
                            <strong>arah</strong>. Ditulis:
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mt-2">
                            ā = (x, y) — ℝ² &nbsp; atau &nbsp; ā = (x, y, z) — ℝ³
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Operasi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> ā + b̄<br>
                                <span class="text-primary font-bold">›</span> ā − b̄<br>
                                <span class="text-primary font-bold">›</span> k·ā (skalar)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Magnitudo</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                |ā| = √(x² + y²)<br>
                                |ā| = √(x² + y² + z²)
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Dot Product</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                ā·b̄ = a₁b₁ + a₂b₂<br>
                                ā·b̄ = |ā||b̄|cos θ
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SYARAT TEGAK LURUS</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                ā·b̄ = 0
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PROYEKSI ORTOGONAL</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                proj<sub>b̄</sub> ā = (ā·b̄ / |b̄|²) b̄
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Bahasa Inggris,
                        KK kejuruan R3-R6, dan mata pelajaran Kelas XI lainnya.
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
