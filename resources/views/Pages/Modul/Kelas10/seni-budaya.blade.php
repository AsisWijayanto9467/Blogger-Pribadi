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
                <span class="text-on-surface font-bold uppercase">A6 — SENI BUDAYA</span>
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
                        SENI
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">BUDAYA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mengasah apresiasi, kreativitas, dan ekspresi seni melalui seni rupa, musik, tari,
                        teater, serta kritik seni untuk melestarikan kekayaan budaya Nusantara.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL MATERI</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">7
                            TOPIK</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
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
                    MULAI DARI MATERI 1
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
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟠 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        MATERI 1 — 4
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 1 — PENGANTAR SENI & ESTETIKA ==================== -->
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
                            MATERI SATU • PENGANTAR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pengantar Seni Budaya &amp; Estetika
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PENGANTAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pengertian Seni -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN SENI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Seni</strong> adalah hasil karya manusia yang digunakan untuk mengungkapkan gagasan,
                        perasaan, pengalaman, dan keindahan melalui media tertentu.
                    </p>
                </div>

                <!-- Fungsi Seni -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">star</span>
                        FUNGSI SENI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">person</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pribadi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Media ekspresi &amp; kepuasan diri.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">groups</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sosial</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menyampaikan pesan &amp; interaksi.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">public</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Budaya</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Melestarikan tradisi &amp; identitas daerah.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">school</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pendidikan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengembangkan kreativitas &amp; karakter.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">sentiment_satisfied</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Hiburan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memberikan kesenangan.</p>
                        </div>
                    </div>
                </div>

                <!-- Estetika -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        ESTETIKA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Estetika</strong> adalah ilmu yang mempelajari keindahan dan nilai keindahan dalam suatu karya.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Keselarasan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Keseimbangan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Proporsi</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Komposisi</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Warna</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bentuk</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Keunikan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Irama</div>
                    </div>
                </div>

                <!-- 5 Cabang Seni -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        5 CABANG SENI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">palette</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">🎨 Seni Rupa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengutamakan bentuk &amp; visual.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">music_note</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">🎵 Seni Musik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan bunyi/suara.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">sports_martial_arts</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">💃 Seni Tari</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan gerak tubuh.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-1">theater_comedy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">🎭 Seni Teater</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Akting, dialog, gerak &amp; pementasan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-1">auto_stories</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">📖 Seni Sastra</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan bahasa sebagai media.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 2 — SENI RUPA ==================== -->
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
                            MATERI DUA • SENI RUPA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Seni Rupa 2 Dimensi &amp; 3 Dimensi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SENI RUPA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Unsur Seni Rupa -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        UNSUR-UNSUR SENI RUPA
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Titik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Unsur paling dasar.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Garis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kumpulan titik memanjang.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Bidang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bentuk 2D panjang × lebar.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Bentuk</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Geometris / organis.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ruang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kesan keluasan/volume.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Warna</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Karakter &amp; suasana.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tekstur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kasar, halus, bergelombang.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gelap-Terang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kesan volume &amp; kedalaman.</p>
                        </div>
                    </div>
                </div>

                <!-- Prinsip Seni Rupa -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rule</span>
                        PRINSIP SENI RUPA
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Kesatuan</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Keseimbangan</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Proporsi</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Irama</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Harmoni</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Kontras</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Komposisi</span>
                    </div>
                </div>

                <!-- 2D vs 3D -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        2D vs 3D
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">crop_square</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Seni Rupa 2 Dimensi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Karya yang memiliki panjang dan lebar, tetapi <strong>tidak memiliki volume nyata</strong>.
                            </p>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Contoh</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant mb-3">
                                Lukisan, gambar, poster, batik, fotografi, karya grafis
                            </div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Teknik</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                Menggambar, melukis, mencetak, membatik, kolase, mozaik
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">view_in_ar</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Seni Rupa 3 Dimensi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Memiliki panjang, lebar, dan tinggi, sehingga memiliki <strong>volume</strong> dan dapat dilihat dari berbagai arah.
                            </p>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Contoh</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant mb-3">
                                Patung, keramik, kriya, vas, miniatur
                            </div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Teknik</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                Pahat, butsir, cetak, konstruksi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Perkembangan Seni Rupa -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        PERKEMBANGAN SENI RUPA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">history</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tradisional</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berkaitan dengan adat &amp; budaya</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mengikuti tradisi warisan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Fungsi upacara/budaya</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">rocket_launch</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Modern</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menekankan kreativitas &amp; kebebasan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tidak terikat aturan tradisional</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Gaya &amp; teknik baru</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">new_releases</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kontemporer</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mengikuti konteks zaman</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bebas media &amp; gagasan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Angkat isu sosial/lingkungan/teknologi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Tradisional → Modern → Kontemporer
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 3 — SENI MUSIK ==================== -->
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
                            MATERI TIGA • SENI MUSIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Seni Musik
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    MUSIK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Seni musik adalah seni yang menggunakan <strong>bunyi atau suara</strong> sebagai media utama
                        untuk menghasilkan karya yang memiliki nilai keindahan dan ekspresi.
                    </p>
                </div>

                <!-- Unsur Musik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">music_note</span>
                        UNSUR MUSIK
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">graphic_eq</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🎵 Ritme</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pola panjang-pendek &amp; kuat-lemah bunyi yang membentuk ketukan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">queue_music</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🎶 Melodi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Rangkaian nada yang tersusun membentuk lagu.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">library_music</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🎼 Harmoni</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gabungan beberapa nada yang dimainkan bersamaan.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Tempo</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Dinamika</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Timbre</span>
                    </div>
                </div>

                <!-- Alat Musik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">piano</span>
                        ALAT MUSIK
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tradisional</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Gamelan (Jawa/Bali)<br>
                                <span class="text-primary font-bold">›</span> Angklung (Jawa Barat)<br>
                                <span class="text-primary font-bold">›</span> Sasando (NTT)<br>
                                <span class="text-primary font-bold">›</span> Kolintang (Sulawesi Utara)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">speaker</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Modern</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Gitar<br>
                                <span class="text-primary font-bold">›</span> Piano / Keyboard<br>
                                <span class="text-primary font-bold">›</span> Drum<br>
                                <span class="text-primary font-bold">›</span> Bass<br>
                                <span class="text-primary font-bold">›</span> Biola
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dasar Vokal -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">mic</span>
                        DASAR VOKAL
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pernapasan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Artikulasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kejelasan pengucapan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Intonasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ketepatan nada.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tempo</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ekspresi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penghayatan lagu.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 4 — SENI TARI ==================== -->
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
                            MATERI EMPAT • SENI TARI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Seni Tari
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TARI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Seni tari adalah seni yang menggunakan <strong>gerak tubuh yang teratur dan memiliki makna</strong>,
                        biasanya disertai iringan musik atau unsur pendukung lainnya.
                    </p>
                </div>

                <!-- Unsur Utama Tari -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">star</span>
                        UNSUR UTAMA TARI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">accessibility_new</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAGA</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gerak</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kemampuan / keterampilan gerak tubuh dalam menari.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">music_note</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAMA</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Irama</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kemampuan menyesuaikan gerakan dengan irama/musik.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">favorite</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRASA</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Rasa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kemampuan menampilkan penghayatan &amp; ekspresi sesuai karakter.</p>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">MUDAH DIINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Wiraga = Gerak • Wirama = Irama • Wirasa = Rasa
                        </div>
                    </div>
                </div>

                <!-- Jenis Tari -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        JENIS TARI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tradisional</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Berkembang &amp; diwariskan dalam masyarakat/daerah.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Tari Saman<br>
                                <span class="text-primary font-bold">›</span> Tari Pendet<br>
                                <span class="text-primary font-bold">›</span> Tari Jaipong
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">auto_awesome</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kreasi Baru</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Dikembangkan dari unsur tari yang sudah ada dengan kreativitas &amp; gagasan baru.</p>
                        </div>
                    </div>
                </div>

                <!-- Ruang & Waktu -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        RUANG &amp; WAKTU DALAM TARI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[24px]">explore</span>
                                Ruang
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Arah gerak</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Level tinggi-rendah</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Posisi penari</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Luas / sempitnya gerakan</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">timer</span>
                                Waktu
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tempo</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Durasi</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Cepat / lambatnya gerakan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ketukan / irama</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== SEMESTER 2 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟢 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        MATERI 5 — 7
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 5 — SENI TEATER ==================== -->
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
                            MATERI LIMA • SENI TEATER
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Seni Teater
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TEATER
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Teater adalah seni pertunjukan yang menyampaikan cerita melalui
                        <strong>akting, dialog, gerak, ekspresi</strong>, dan unsur pementasan.
                    </p>
                </div>

                <!-- Jenis Teater -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        JENIS TEATER
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tradisional</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Berkembang dari budaya masyarakat &amp; ciri khas daerah.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Wayang orang<br>
                                <span class="text-primary font-bold">›</span> Ketoprak<br>
                                <span class="text-primary font-bold">›</span> Ludruk
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">movie</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Modern</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan naskah, teknik pemeranan, tata panggung, &amp; pengelolaan terstruktur.</p>
                        </div>
                    </div>
                </div>

                <!-- Unsur Teater -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        UNSUR TEATER
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">description</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Naskah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Dasar cerita &amp; dialog.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">theater_comedy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Aktor</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pemain karakter.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">campaign</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sutradara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengarah pertunjukan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">theaters</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Panggung</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat pertunjukan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">chair</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Properti</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Benda dalam pertunjukan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">face_retouching_natural</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tata Rias &amp; Kostum</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bentuk karakter.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">light_mode</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tata Cahaya &amp; Suara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Dukung suasana.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">groups</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Penonton</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penyaksi pertunjukan.</p>
                        </div>
                    </div>
                </div>

                <!-- Teknik Dasar Akting -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_martial_arts</span>
                        TEKNIK DASAR AKTING
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">directions_run</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">🏃 Olah Tubuh</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Latihan tubuh agar aktor mampu bergerak dengan baik &amp; sesuai karakter.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">record_voice_over</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">🗣️ Olah Suara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Melatih:</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Pernapasan<br>
                                <span class="text-primary font-bold">›</span> Artikulasi<br>
                                <span class="text-primary font-bold">›</span> Intonasi<br>
                                <span class="text-primary font-bold">›</span> Volume<br>
                                <span class="text-primary font-bold">›</span> Kejelasan dialog
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">favorite</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">❤️ Olah Rasa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Melatih kemampuan aktor dalam menghayati karakter &amp; emosi.</p>
                        </div>
                    </div>
                </div>

                <!-- Pementasan Drama -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        TAHAPAN PEMENTASAN DRAMA
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">1. Ide</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">2. Naskah</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">3. Peran</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">4. Latihan</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">5. Panggung</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">6. Pementasan</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">7. Evaluasi</span>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 6 — APRESIASI & KRITIK ==================== -->
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
                            MATERI ENAM • APRESIASI &amp; KRITIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Apresiasi &amp; Kritik Seni Budaya Nusantara
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    APRESIASI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Apresiasi vs Kritik -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">thumb_up</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Apresiasi Seni</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Kegiatan mengamati, memahami, menghargai, dan menilai sebuah karya seni.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Tahapan</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Mengamati karya<br>
                            <span class="text-primary font-bold">›</span> Identifikasi unsur &amp; bentuk<br>
                            <span class="text-primary font-bold">›</span> Memahami makna/tujuan<br>
                            <span class="text-primary font-bold">›</span> Menghargai kelebihan<br>
                            <span class="text-primary font-bold">›</span> Menilai dengan alasan jelas
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">rate_review</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kritik Seni</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Kegiatan memberikan penilaian &amp; tanggapan terhadap karya seni berdasarkan pengamatan dan alasan yang dapat dipertanggungjawabkan.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Kritik yang Baik</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Objektif<br>
                            <span class="text-primary font-bold">›</span> Berdasarkan fakta karya<br>
                            <span class="text-primary font-bold">›</span> Bahasa sopan<br>
                            <span class="text-primary font-bold">›</span> Sebutkan kelebihan &amp; kekurangan<br>
                            <span class="text-primary font-bold">›</span> Berikan alasan<br>
                            <span class="text-primary font-bold">›</span> Saran perbaikan
                        </div>
                    </div>
                </div>

                <!-- Struktur Kritik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">structure</span>
                        STRUKTUR KRITIK SENI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Deskripsi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Apa yang terlihat?</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Analisis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bagaimana unsur seni digunakan?</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Interpretasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Apa makna / pesan karya?</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Evaluasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bagaimana kualitas karya &amp; alasannya?</p>
                        </div>
                    </div>
                </div>

                <!-- Keragaman Seni Nusantara -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">diversity_3</span>
                        KERAGAMAN SENI BUDAYA NUSANTARA
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bahasa Daerah</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Musik Tradisional</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tari Tradisional</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Seni Rupa</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Teater Tradisional</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kerajinan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Adat &amp; Tradisi</div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Keragaman tersebut merupakan <strong>identitas &amp; kekayaan budaya Indonesia</strong> yang harus dihargai dan dilestarikan.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 7 — PROYEK KOLABORASI ==================== -->
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
                            MATERI TUJUH • PROYEK KOLABORASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Proyek Kolaborasi Seni
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
                        Proyek kolaborasi seni adalah kegiatan membuat karya dengan
                        <strong>menggabungkan beberapa cabang seni</strong> dalam satu proyek.
                    </p>
                </div>

                <!-- Contoh Kolaborasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">merge</span>
                        CONTOH KOLABORASI
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md text-center">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            🎭 Teater + 🎵 Musik + 💃 Tari + 🎨 Seni Rupa
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">theater_comedy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">🎭 Drama</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sebagai cerita.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">music_note</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">🎵 Musik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sebagai pengiring.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-1">sports_martial_arts</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">💃 Tari</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bagian pertunjukan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-1">palette</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">🎨 Dekorasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Poster/visual.</p>
                        </div>
                    </div>
                </div>

                <!-- Tahapan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        TAHAPAN PROYEK
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Menentukan Tema</div>
                                <div class="font-code-inline text-code-inline text-on-surface-variant">
                                    <span class="text-primary font-bold">›</span> Budaya lokal<br>
                                    <span class="text-primary font-bold">›</span> Lingkungan<br>
                                    <span class="text-primary font-bold">›</span> Teknologi<br>
                                    <span class="text-primary font-bold">›</span> Isu sosial<br>
                                    <span class="text-primary font-bold">›</span> Kehidupan remaja
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Membuat Konsep</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan bentuk karya &amp; pesan yang ingin disampaikan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pembagian Tugas</div>
                                <div class="font-code-inline text-code-inline text-on-surface-variant">
                                    <span class="text-primary font-bold">›</span> Penulis naskah<br>
                                    <span class="text-primary font-bold">›</span> Pemain<br>
                                    <span class="text-primary font-bold">›</span> Penata musik<br>
                                    <span class="text-primary font-bold">›</span> Penari<br>
                                    <span class="text-primary font-bold">›</span> Dekorasi<br>
                                    <span class="text-primary font-bold">›</span> Dokumentasi
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Proses Pembuatan &amp; Latihan</div>
                            </div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">05</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pementasan / Presentasi</div>
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">06</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Evaluasi</div>
                                <div class="font-code-inline text-code-inline text-on-surface-variant">
                                    <span class="text-primary font-bold">›</span> Menilai hasil karya<br>
                                    <span class="text-primary font-bold">›</span> Menilai kerja sama<br>
                                    <span class="text-primary font-bold">›</span> Mencari kekurangan &amp; perbaikan
                                </div>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Matematika,
                        Bahasa Inggris, Informatika, dan mata pelajaran lainnya.
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
