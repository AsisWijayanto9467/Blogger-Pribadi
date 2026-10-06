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
                <span class="text-on-surface font-bold uppercase">A3 — BAHASA INDONESIA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">INDONESIA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mengasah kemampuan literasi melalui teks laporan observasi, anekdot, hikayat, negosiasi,
                        biografi, dan puisi sesuai kaidah kebahasaan dan berpikir kritis.
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
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3
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
                        SEMESTER 1 / GANJIL
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

        <!-- ==================== BAB 1 — LHO ==================== -->
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
                            BAB SATU • TEKS LAPORAN HASIL OBSERVASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Mengungkapkan Fakta Alam Secara Objektif
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    LHO
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
                        Teks LHO adalah teks yang menyampaikan informasi berdasarkan hasil pengamatan secara
                        <strong>objektif, faktual, dan sistematis</strong>. Tujuannya memberikan gambaran atau
                        informasi yang benar mengenai suatu objek.
                    </p>
                </div>

                <!-- Struktur -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR TEKS LHO
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pernyataan Umum</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi definisi atau pengenalan objek.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Deskripsi Bagian</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menjelaskan bagian, ciri, atau karakteristik objek.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Deskripsi Manfaat / Simpulan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menjelaskan manfaat atau kesimpulan dari objek yang diamati.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Fakta dan opini</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kaidah kebahasaan</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pengumpulan informasi</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Penyusunan LHO dalam bentuk <strong class="text-on-surface">laporan, scrapbook, atau presentasi</strong></li>
                    </ul>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — ANEKDOT ==================== -->
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
                            BAB DUA • TEKS ANEKDOT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Mengungkapkan Kritik Lewat Senyuman
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ANEKDOT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian -->
                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Teks anekdot adalah cerita singkat yang <strong>lucu atau menghibur</strong> tetapi mengandung
                        <strong>kritik atau sindiran</strong> terhadap suatu keadaan. Kritik disampaikan dengan cara
                        yang menarik dan tetap santun.
                    </p>
                </div>

                <!-- Struktur -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR ANEKDOT
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Abstraksi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gambaran awal cerita.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Orientasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengenalan tokoh dan situasi.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Krisis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Munculnya masalah atau kejadian unik.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Reaksi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Respons terhadap masalah.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">05</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Koda</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penutup atau kesimpulan.</p>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kritik sosial</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Stand-up comedy</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kaidah kebahasaan</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Penyampaian kritik melalui <strong class="text-on-surface">komik strip atau penampilan</strong></li>
                    </ul>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — HIKAYAT & CERPEN ==================== -->
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
                            BAB TIGA • SASTRA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menyusuri Nilai dalam Cerita Lintas Zaman
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    HIKAYAT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SASTRA LAMA</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hikayat</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Karya sastra lama yang biasanya menceritakan kehidupan tokoh dengan berbagai keistimewaan.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">SASTRA MODERN</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Cerpen</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Cerita fiksi modern yang relatif singkat dan berfokus pada satu peristiwa atau konflik.
                        </p>
                    </div>
                </div>

                <!-- Struktur Cerpen -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR CERPEN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Orientasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengenalan tokoh, latar, dan situasi.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Komplikasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Munculnya konflik.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Resolusi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penyelesaian konflik.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Koda</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan atau penutup cerita, jika ada.</p>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Karakteristik hikayat dan cerpen</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Unsur intrinsik</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Nilai moral, sosial, budaya</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Perbandingan sastra klasik dan modern</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menulis cerpen berdasarkan inspirasi dari hikayat</li>
                    </ul>
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
                        SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 4 — BAB 6
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 4 — NEGOSIASI ==================== -->
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
                            BAB EMPAT • TEKS NEGOSIASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menjadi Negosiator Ulung
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    NEGOSIASI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian -->
                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Teks negosiasi adalah teks yang berisi proses <strong>tawar-menawar</strong> antara dua pihak
                        atau lebih untuk mencapai kesepakatan. Negosiasi harus dilakukan dengan komunikasi yang baik
                        dan mengutamakan solusi yang dapat diterima pihak-pihak terkait.
                    </p>
                </div>

                <!-- Struktur -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR TEKS NEGOSIASI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Orientasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pembukaan dan pengenalan pihak yang bernegosiasi.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pengajuan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penyampaian keinginan atau permintaan.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Penawaran</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Proses tawar-menawar.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kesepakatan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Hasil yang disetujui bersama.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">05</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Penutup</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengakhiri proses negosiasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Isi, tujuan, struktur, kaidah kebahasaan</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Strategi tawar-menawar</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Praktik membuat dan mempresentasikan teks negosiasi</li>
                    </ul>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — BIOGRAFI ==================== -->
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
                            BAB LIMA • TEKS BIOGRAFI &amp; REKON
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Belajar dari Keteladanan Tokoh
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BIOGRAFI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">person</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teks Biografi</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Teks yang menceritakan riwayat hidup seseorang, terutama pengalaman, perjuangan, prestasi,
                            dan keteladanannya.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">history</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teks Rekon</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Teks yang digunakan untuk menceritakan kembali peristiwa atau pengalaman berdasarkan
                            urutan waktu.
                        </p>
                    </div>
                </div>

                <!-- Struktur Biografi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR BIOGRAFI
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Orientasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pengenalan tokoh.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Peristiwa Penting</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Perjalanan hidup, pengalaman, perjuangan, atau prestasi tokoh.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Reorientasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Penutup yang berisi pandangan atau kesimpulan tentang tokoh.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ide pokok &amp; informasi penting</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Struktur teks rekon dan biografi</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tanda baca &amp; kata serapan</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menulis biografi secara kreatif</li>
                    </ul>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 6 — PUISI ==================== -->
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
                            BAB ENAM • PUISI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Berkarya dan Berekspresi Melalui Puisi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PUISI
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
                        Puisi adalah karya sastra yang menggunakan bahasa yang <strong>padat, indah, dan penuh
                        makna</strong> untuk mengungkapkan perasaan, gagasan, atau pengalaman. Pemilihan kata dalam
                        puisi sangat penting untuk membangun suasana dan makna.
                    </p>
                </div>

                <!-- Unsur Puisi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        UNSUR / STRUKTUR PUISI
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">edit_note</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Diksi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pilihan kata yang digunakan penyair.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">visibility</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Imaji</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kata-kata yang membangun gambaran atau pengalaman indra.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">music_note</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Rima</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Persamaan atau pengulangan bunyi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">auto_fix_high</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Majas</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penggunaan bahasa untuk memberikan efek tertentu.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">lightbulb</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tema</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gagasan utama puisi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sms</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Amanat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan yang ingin disampaikan.</p>
                        </div>
                    </div>
                </div>

                <!-- Yang Dipelajari -->
                <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        YANG DIPELAJARI
                    </div>
                    <ul class="space-y-2 font-body-sm text-body-sm text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Memahami makna dan unsur puisi</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Memilih diksi</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Membaca puisi &amp; musikalisasi puisi</li>
                        <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Membuat resensi antologi puisi</li>
                    </ul>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul PJOK, Matematika,
                        Bahasa Inggris, dan mata pelajaran lainnya.
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
