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
                <span class="text-on-surface font-bold uppercase">B1 — MATEMATIKA</span>
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
                        MATEMATIKA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">X</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Membangun kemampuan berpikir logis, analitis, dan sistematis melalui
                        aljabar, trigonometri, statistika, dan peluang untuk mendukung
                        kompetensi keahlian RPL/PPLG.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">7
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3
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
                        BAB 1 — BAB 3
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 1 — EKSPONEN & LOGARITMA ==================== -->
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
                            BAB SATU • ALJABAR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Eksponen dan Logaritma
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    EKSPONEN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Bilangan Berpangkat -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">superscript</span>
                        1. BILANGAN BERPANGKAT (EKSPONEN)
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            Eksponen adalah <strong>bentuk perkalian berulang</strong>.
                        </p>
                        <div class="p-space-sm bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            a<sup>n</sup> = a × a × a × ... × a (sebanyak n faktor)
                        </div>
                    </div>

                    <!-- Sifat-sifat -->
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">checklist</span>
                        SIFAT-SIFAT EKSPONEN
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Sifat</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Rumus</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Perkalian</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">a<sup>m</sup> × a<sup>n</sup> = a<sup>m+n</sup></td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Pembagian</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">a<sup>m</sup> ÷ a<sup>n</sup> = a<sup>m-n</sup></td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Pangkat Dipangkatkan</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">(a<sup>m</sup>)<sup>n</sup> = a<sup>mn</sup></td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Perkalian dalam Pangkat</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">(ab)<sup>n</sup> = a<sup>n</sup>b<sup>n</sup></td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Pangkat Nol</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">a<sup>0</sup> = 1</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Pangkat Negatif</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">a<sup>-n</sup> = 1/a<sup>n</sup></td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Pangkat Pecahan</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">a<sup>m/n</sup> = <sup>n</sup>√a<sup>m</sup></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">2<sup>3</sup> × 2<sup>4</sup> = 2<sup>7</sup> = 128</div>
                    </div>
                </div>

                <!-- 2. Fungsi Eksponensial -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">functions</span>
                        2. FUNGSI EKSPONENSIAL
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">BENTUK UMUM</div>
                        <div class="font-headline-md text-headline-md font-bold text-on-surface">f(x) = a<sup>x</sup></div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">dengan a > 0 dan a ≠ 1</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">trending_up</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">a &gt; 1 → PERTUMBUHAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nilai bertambah seiring bertambahnya x.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">trending_down</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">0 &lt; a &lt; 1 → PELURUHAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nilai berkurang seiring bertambahnya x.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK PERTUMBUHAN</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">A = A₀(1 + r)<sup>t</sup></div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK PELURUHAN</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">A = A₀(1 - r)<sup>t</sup></div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH PENERAPAN</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Pertumbuhan Penduduk</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Perkembangan Bakteri</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Peluruhan Zat</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Investasi</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Bentuk Akar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">square_foot</span>
                        3. BENTUK AKAR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">AKAR = PANGKAT PECAHAN</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface"><sup>n</sup>√a = a<sup>1/n</sup></div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">PERKALIAN AKAR</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface">√a × √b = √(ab)</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">PEMBAGIAN AKAR</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface">√a ÷ √b = √(a/b)</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH PENYEDERHANAAN</div>
                            <div class="font-code-inline text-code-inline text-on-surface">√72 = √(36×2) = 6√2</div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PENJUMLAHAN AKAR SEJENIS</div>
                            <div class="font-code-inline text-code-inline text-on-surface">3√2 + 5√2 = 8√2</div>
                        </div>
                    </div>
                </div>

                <!-- 4. Logaritma -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        4. LOGARITMA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Logaritma merupakan <strong>kebalikan dari eksponen</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            <sup>a</sup>log b = c ⟺ a<sup>c</sup> = b
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">²log 8 = 3 → karena 2³ = 8</div>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">checklist</span>
                        SIFAT LOGARITMA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline text-on-surface"><sup>a</sup>log(MN) = <sup>a</sup>log M + <sup>a</sup>log N</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline text-on-surface"><sup>a</sup>log(M/N) = <sup>a</sup>log M − <sup>a</sup>log N</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline text-on-surface"><sup>a</sup>log(M<sup>n</sup>) = n · <sup>a</sup>log M</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline text-on-surface"><sup>a</sup>log a = 1</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] md:col-span-2">
                            <div class="font-code-inline text-code-inline text-on-surface"><sup>a</sup>log 1 = 0</div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — BARISAN & DERET ==================== -->
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
                            BAB DUA • BARISAN &amp; DERET
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Barisan dan Deret
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BARISAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Barisan Aritmetika -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">trending_up</span>
                        1. BARISAN ARITMETIKA
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Barisan aritmetika memiliki <strong>selisih tetap</strong>, disebut <strong>beda (b)</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CONTOH</div>
                            <div class="font-code-inline text-code-inline text-on-surface">3, 7, 11, 15, ... → beda b = 4</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SUKU KE-N</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                U<sub>n</sub> = a + (n−1)b
                            </div>
                            <div class="mt-2 font-body-sm text-body-sm text-on-surface-variant">
                                <strong>a</strong> = suku pertama<br>
                                <strong>b</strong> = beda
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">JUMLAH N SUKU</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                S<sub>n</sub> = n/2 [2a + (n−1)b]
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Barisan Geometri -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">functions</span>
                        2. BARISAN GEOMETRI
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Barisan geometri memiliki <strong>rasio tetap (r)</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CONTOH</div>
                            <div class="font-code-inline text-code-inline text-on-surface">2, 6, 18, 54, ... → rasio r = 3</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SUKU KE-N</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                U<sub>n</sub> = a·r<sup>n−1</sup>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">JUMLAH N SUKU</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                                S<sub>n</sub> = a·(r<sup>n</sup>−1)/(r−1)
                            </div>
                            <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant text-center">untuk r > 1</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Deret Geometri Tak Hingga -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">all_inclusive</span>
                        3. DERET GEOMETRI TAK HINGGA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Digunakan jika jumlah suku <strong>tidak terbatas</strong> dan <strong>|r| &lt; 1</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            S<sub>∞</sub> = a / (1 − r)
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface mb-2">8 + 4 + 2 + 1 + ... dengan a = 8, r = 1/2</div>
                        <div class="font-code-inline text-code-inline text-on-surface">S∞ = 8/(1 − 1/2) = 16</div>
                    </div>
                </div>

                <!-- 4. Matematika Keuangan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">savings</span>
                        4. MATEMATIKA KEUANGAN
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">account_balance_wallet</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bunga Tunggal</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Bunga dihitung berdasarkan modal awal.</p>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                B = M × r × t<br>
                                A = M(1 + rt)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">trending_up</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bunga Majemuk</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Bunga periode sebelumnya ikut menghasilkan bunga.</p>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                A = M(1 + r)<sup>t</sup>
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERBEDAAN UTAMA</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Bunga Tunggal:</strong> bunga selalu berdasarkan modal awal
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Bunga Majemuk:</strong> bunga ikut menjadi bagian modal
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — TRIGONOMETRI ==================== -->
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
                            BAB TIGA • TRIGONOMETRI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Perbandingan Trigonometri
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TRIGONOMETRI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Perbandingan Dasar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">change_history</span>
                        PERBANDINGAN DASAR (SEGITIGA SIKU-SIKU)
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-md text-headline-md font-bold text-on-surface mb-1">SIN</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">depan / miring</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-md text-headline-md font-bold text-on-surface mb-1">COS</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">samping / miring</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-md text-headline-md font-bold text-on-surface mb-1">TAN</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">depan / samping</div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERBANDINGAN KEBALIKAN</div>
                        <div class="grid grid-cols-3 gap-2 font-code-inline text-code-inline text-on-surface-variant">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center">csc θ = 1/sin θ</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center">sec θ = 1/cos θ</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center">cot θ = 1/tan θ</div>
                        </div>
                    </div>
                </div>

                <!-- Sudut Istimewa -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">table_chart</span>
                        SUDUT ISTIMEWA
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Sudut</th>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">sin</th>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">cos</th>
                                    <th class="p-space-md text-center font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">tan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-bold text-on-surface border-r-[2px] border-on-background">0°</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">0</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">1</td>
                                    <td class="p-space-md text-center">0</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-bold text-on-surface border-r-[2px] border-on-background">30°</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">1/2</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">√3/2</td>
                                    <td class="p-space-md text-center">√3/3</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-bold text-on-surface border-r-[2px] border-on-background">45°</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">√2/2</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">√2/2</td>
                                    <td class="p-space-md text-center">1</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md text-center font-bold text-on-surface border-r-[2px] border-on-background">60°</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">√3/2</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">1/2</td>
                                    <td class="p-space-md text-center">√3</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md text-center font-bold text-on-surface border-r-[2px] border-on-background">90°</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">1</td>
                                    <td class="p-space-md text-center border-r-[2px] border-on-background">0</td>
                                    <td class="p-space-md text-center">∞</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tanda Kuadran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">pie_chart</span>
                        TANDA PADA KUADRAN
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">KUADRAN I</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">SEMUA (+)</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">KUADRAN II</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">SIN (+)</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">KUADRAN III</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">TAN (+)</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">KUADRAN IV</div>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">COS (+)</div>
                        </div>
                    </div>
                </div>

                <!-- Aturan Sinus & Cosinus -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">triangle</span>
                        ATURAN SINUS &amp; COSINUS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">rule</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Aturan Sinus</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                a/sin A = b/sin B = c/sin C
                            </div>
                            <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">Untuk mencari sisi atau sudut segitiga.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">square</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Aturan Cosinus</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                a² = b² + c² − 2bc·cos A
                            </div>
                            <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">Untuk dua sisi + sudut apit, atau tiga sisi.</p>
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
                        BAB 4 — BAB 7
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 4 — SPLTV & SPtLDV ==================== -->
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
                            BAB EMPAT • SISTEM PERSAMAAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Sistem Persamaan dan Pertidaksamaan Linear
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SPLTV
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- SPLTV -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">functions</span>
                        1. SPLTV — SISTEM PERSAMAAN LINEAR TIGA VARIABEL
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK UMUM</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            ax + by + cz = d
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant text-center">Terdapat tiga variabel, biasanya x, y, z</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">block</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Eliminasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghilangkan salah satu variabel.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">swap_horiz</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Substitusi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memasukkan nilai variabel ke persamaan lain.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">merge</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Gabungan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Eliminasi + substitusi.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">TUJUAN AKHIR</div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">x = ..., y = ..., z = ...</div>
                    </div>
                </div>

                <!-- SPtLDV -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">show_chart</span>
                        2. SPtLDV — SISTEM PERTIDAKSAMAAN LINEAR DUA VARIABEL
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            x + y ≤ 6
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant text-center">Penyelesaian biasanya ditentukan menggunakan grafik.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">GARIS PUTUS-PUTUS</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface mb-2">Tanda &lt; atau &gt;</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Titik pada garis tidak termasuk penyelesaian.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">GARIS PENUH</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface mb-2">Tanda ≤ atau ≥</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Titik pada garis termasuk penyelesaian.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">MENENTUKAN DAERAH PENYELESAIAN</div>
                        <p class="font-body-md text-body-md text-on-surface">Gunakan <strong>titik uji</strong> untuk memastikan daerah yang benar.</p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — FUNGSI KUADRAT ==================== -->
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
                            BAB LIMA • KUADRAT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Fungsi Kuadrat
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KUADRAT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Bentuk Umum -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        BENTUK UMUM
                    </div>
                    <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-md text-headline-md font-bold text-on-surface mb-2">
                        f(x) = ax² + bx + c
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant text-center">dengan a ≠ 0</p>
                </div>

                <!-- Grafik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">show_chart</span>
                        GRAFIK FUNGSI KUADRAT (PARABOLA)
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">arrow_upward</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">a &gt; 0</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Parabola terbuka ke atas.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">arrow_downward</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">a &lt; 0</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Parabola terbuka ke bawah.</p>
                        </div>
                    </div>
                </div>

                <!-- Sumbu Simetri & Titik Puncak -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">my_location</span>
                        SUMBU SIMETRI &amp; TITIK PUNCAK
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SUMBU SIMETRI</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                x = −b/(2a)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">KOORDINAT X PUNCAK</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                x<sub>p</sub> = −b/(2a)
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TITIK POTONG SUMBU-Y</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-code-inline text-code-inline text-on-surface">
                                x = 0 → y = c
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Persamaan Kuadrat -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        MENYELESAIKAN PERSAMAAN KUADRAT
                    </div>
                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK</div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface text-center">ax² + bx + c = 0</div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">splitscreen</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. Pemfaktoran</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                x² − 5x + 6 = 0<br>
                                (x−2)(x−3) = 0<br>
                                x = 2 atau x = 3
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">crop_square</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. Melengkapkan Kuadrat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ubah menjadi bentuk:</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mt-1">
                                (x+p)² = q
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">functions</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">3. Rumus ABC</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                x = (−b ± √(b²−4ac))/(2a)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diskriminan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">pie_chart</span>
                        DISKRIMINAN (D)
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            D = b² − 4ac
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">D &gt; 0</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">2 akar berbeda</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">D = 0</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">1 akar kembar</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">D &lt; 0</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tidak memiliki akar real</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 6 — STATISTIKA ==================== -->
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
                            BAB ENAM • STATISTIKA
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

                <!-- Ukuran Pemusatan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">center_focus_strong</span>
                        UKURAN PEMUSATAN DATA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">functions</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. MEAN (Rata-rata)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                x̄ = Σx / n
                            </div>
                            <p class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Data Berfrekuensi</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                x̄ = Σfx / Σf
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sort</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. MEDIAN (Nilai Tengah)</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Setelah data diurutkan:</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
                                <strong class="text-primary">Ganjil:</strong> Me = x<sub>(n+1)/2</sub>
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">Genap:</strong> Me = (x<sub>n/2</sub> + x<sub>n/2+1</sub>)/2
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">bar_chart</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">3. MODUS</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Nilai yang paling sering muncul.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                Contoh: 2, 3, 3, 4, 5 → Mo = 3
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kuartil, Desil, Persentil -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">vertical_split</span>
                        KUARTIL, DESIL, PERSENTIL
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">KUARTIL</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membagi data menjadi <strong>4 bagian</strong></p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mt-2">
                                Q₁, Q₂, Q₃
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">DESIL</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membagi data menjadi <strong>10 bagian</strong></p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mt-2">
                                D₁, D₂, ..., D₉
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">PERSENTIL</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membagi data menjadi <strong>100 bagian</strong></p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mt-2">
                                P₁, P₂, ..., P₉₉
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ukuran Penyebaran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">zoom_out_map</span>
                        UKURAN PENYEBARAN DATA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">JANGKAUAN (R)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                R = x<sub>maks</sub> − x<sub>min</sub>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">SIMPANGAN KUARTIL</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                Q<sub>d</sub> = (Q₃ − Q₁)/2
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">VARIANS (σ²)</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengukur seberapa jauh data menyebar dari rata-rata.</p>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                σ² = Σ(x−x̄)² / n
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">SIMPANGAN BAKU (σ)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                σ = √σ²
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Semakin besar σ → data semakin menyebar</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 7 — PELUANG ==================== -->
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
                            BAB TUJUH • PELUANG
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Peluang
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PELUANG
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Kaidah Pencacahan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        1. KAIDAH PENCACAHAN
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">ATURAN PERKALIAN</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            a × b
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant text-center">Jika kegiatan 1 punya a cara dan kegiatan 2 punya b cara.</p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">3 pilihan baju × 2 pilihan celana = 6 kemungkinan</div>
                    </div>
                </div>

                <!-- Permutasi vs Kombinasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">shuffle</span>
                        2. PERMUTASI &amp; KOMBINASI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">swap_vert</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">PERMUTASI</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3"><strong>Memperhatikan urutan.</strong></p>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                <sup>n</sup>P<sub>r</sub> = n! / (n−r)!
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-body-sm text-body-sm text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Menyusun 3 orang dari 5 orang → A-B-C ≠ B-A-C
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">group_work</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">KOMBINASI</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3"><strong>Tidak memperhatikan urutan.</strong></p>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                <sup>n</sup>C<sub>r</sub> = n! / (r!(n−r)!)
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-body-sm text-body-sm text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Memilih 3 orang dari 5 orang → A-B-C = B-A-C
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERBEDAAN</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Permutasi:</strong> urutan diperhatikan
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Kombinasi:</strong> urutan tidak diperhatikan
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peluang Kejadian -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">casino</span>
                        3. PELUANG SUATU KEJADIAN
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PELUANG TEORITIS</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-md text-headline-md font-bold text-on-surface mb-2">
                            P(A) = n(A) / n(S)
                        </div>
                        <div class="font-body-sm text-body-sm text-on-surface-variant">
                            <strong>n(A)</strong> = banyak kejadian yang diinginkan<br>
                            <strong>n(S)</strong> = banyak seluruh kemungkinan
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">NILAI PELUANG</div>
                            <div class="font-headline-sm text-headline-sm font-bold text-on-surface">0 ≤ P(A) ≤ 1</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 text-center">PELUANG EMPIRIS</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                P(A) = frekuensi / jumlah percobaan
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frekuensi Harapan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">target</span>
                        4. FREKUENSI HARAPAN
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Frekuensi harapan menunjukkan berapa kali suatu kejadian <strong>diperkirakan terjadi</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-md text-headline-md font-bold text-on-surface">
                            F<sub>h</sub> = P(A) × n
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Peluang muncul angka 6 pada dadu = 1/6. Dadu dilempar 60 kali:
                        </p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            F<sub>h</sub> = 1/6 × 60 = 10
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">Jadi frekuensi harapannya adalah 10 kali.</p>
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
                        Informatika, PIPAS, dan mata pelajaran lainnya.
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
