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
                <span class="text-on-surface font-bold uppercase">A2 — PPKn</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PENDIDIKAN
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">PANCASILA</span>
                        &amp; KEWARGANEGARAAN
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Membangun warga negara yang beriman, bertakwa, berakhlak mulia, dan berkarakter
                        Pancasila melalui pemahaman konstitusi, keberagaman, dan semangat NKRI.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">4
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">2
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">2
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

        <!-- ==================== BAB 1 — PANCASILA ==================== -->
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
                            BAB SATU • IDEOLOGI NEGARA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pancasila sebagai Dasar Negara &amp; Pandangan Hidup Bangsa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    IDEOLOGI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Sejarah Perumusan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history_edu</span>
                        1. SEJARAH PERUMUSAN PANCASILA
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Pancasila dirumuskan melalui proses yang melibatkan para pendiri bangsa sebelum Indonesia merdeka.
                        BPUPK membahas berbagai persiapan kemerdekaan, termasuk dasar negara.
                    </p>

                    <!-- 3 Tokoh -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Mohammad Yamin</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengemukakan gagasan tentang
                                <strong>kebangsaan, kemanusiaan, ketuhanan, kerakyatan</strong>, dan
                                <strong>kesejahteraan rakyat</strong>.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Soepomo</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menekankan <strong>persatuan,
                                kekeluargaan, keseimbangan, musyawarah</strong>, dan <strong>keadilan rakyat</strong>.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Soekarno</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pada <strong>1 Juni 1945</strong>
                                menyampaikan gagasan dasar negara yang kemudian dikenal sebagai <strong>Pancasila</strong>.</p>
                        </div>
                    </div>

                    <!-- Urutan Penting -->
                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">timeline</span>
                            URUTAN PENTING
                        </div>
                        <div class="flex flex-wrap items-center gap-2 font-code-inline text-code-inline">
                            <span class="px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">BPUPK</span>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            <span class="px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Panitia Sembilan</span>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            <span class="px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Piagam Jakarta</span>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            <span class="px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Proklamasi</span>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            <span class="px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">PPKI</span>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            <span class="px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">UUD 1945</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Kedudukan Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">workspace_premium</span>
                        2. KEDUDUKAN PANCASILA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Dasar Negara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menjadi dasar penyelenggaraan negara.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pandangan Hidup</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menjadi pedoman dalam kehidupan sehari-hari.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ideologi Negara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menjadi nilai dan cita-cita yang menjadi arah kehidupan bangsa.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Nilai-Nilai Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        3. NILAI-NILAI PANCASILA
                    </div>
                    <div class="flex flex-col gap-space-md">
                        <!-- Sila 1 -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">1</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Ketuhanan Yang Maha Esa</div>
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Beriman dan bertakwa</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menghormati agama lain</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tidak memaksakan keyakinan</li>
                            </ul>
                        </div>
                        <!-- Sila 2 -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">2</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Kemanusiaan yang Adil dan Beradab</div>
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menghargai manusia</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bersikap adil</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tidak melakukan kekerasan atau bullying</li>
                            </ul>
                        </div>
                        <!-- Sila 3 -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">3</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Persatuan Indonesia</div>
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menjaga persatuan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menghargai keberagaman</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mengutamakan kepentingan bangsa</li>
                            </ul>
                        </div>
                        <!-- Sila 4 -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">4</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan</div>
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mengutamakan musyawarah</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menghargai pendapat</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tidak memaksakan kehendak</li>
                            </ul>
                        </div>
                        <!-- Sila 5 -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">5</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Keadilan Sosial bagi Seluruh Rakyat Indonesia</div>
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bersikap adil</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menghormati hak orang lain</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Peduli terhadap sesama</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Penerapan Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">checklist</span>
                        4. PENERAPAN PANCASILA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">school</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Di Sekolah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghormati guru, menghargai teman,
                                tidak bullying, bermusyawarah, dan menjaga fasilitas.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">groups</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Di Masyarakat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gotong royong, membantu sesama,
                                menjaga kerukunan.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">language</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Di Internet</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tidak menyebarkan hoaks, tidak
                                cyberbullying, menghargai perbedaan pendapat, dan bijak bermedia sosial.</p>
                        </div>
                    </div>
                </div>

                <!-- 5. Tantangan Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">warning</span>
                        5. TANTANGAN PANCASILA DI ERA MODERN
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Intoleransi</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Bullying</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Hoaks</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Ujaran Kebencian</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Diskriminasi</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Individualisme</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background font-bold">Penyalahgunaan Medsos</span>
                        </div>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">lightbulb</span>
                            CARA MENGHADAPI
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">Berpikir kritis, menghargai perbedaan,
                            menjaga persatuan, dan menggunakan teknologi secara bijak.</p>
                    </div>
                </div>

                <!-- 6. Gotong Royong -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">handshake</span>
                        6. GOTONG ROYONG
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Gotong royong adalah bekerja bersama untuk mencapai tujuan bersama.
                    </p>
                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">list</span>
                            CONTOH GOTONG ROYONG
                        </div>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Kerja bakti
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Membersihkan kelas
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Kerja kelompok
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Membantu korban bencana
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background md:col-span-2">
                                <span class="text-primary font-bold">›</span> Membantu teman yang mengalami kesulitan
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — UUD NRI 1945 ==================== -->
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
                            BAB DUA • KONSTITUSI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            UUD Negara Republik Indonesia Tahun 1945
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KONSTITUSI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Konstitusi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">description</span>
                        1. KONSTITUSI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Konstitusi adalah hukum dasar yang menjadi landasan penyelenggaraan negara.
                        Konstitusi tertulis Indonesia adalah <strong class="text-on-surface">UUD Negara Republik Indonesia Tahun 1945</strong>.
                    </p>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">rule</span>
                            UUD 1945 MENGATUR
                        </div>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Pemerintahan negara
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Lembaga negara
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Hak dan kewajiban warga negara
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Hubungan negara dengan warga negara
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Norma -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        2. NORMA
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Norma adalah aturan atau pedoman yang mengatur perilaku manusia dalam kehidupan masyarakat.
                    </p>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Norma</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Sumber</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Agama</td>
                                    <td class="p-space-md">Ajaran agama</td>
                                    <td class="p-space-md">Beribadah</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Kesusilaan</td>
                                    <td class="p-space-md">Hati nurani</td>
                                    <td class="p-space-md">Bersikap jujur</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Kesopanan</td>
                                    <td class="p-space-md">Kebiasaan masyarakat</td>
                                    <td class="p-space-md">Menghormati orang lain</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Hukum</td>
                                    <td class="p-space-md">Peraturan negara</td>
                                    <td class="p-space-md">Mematuhi lalu lintas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. Hak dan Kewajiban -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">balance</span>
                        3. HAK DAN KEWAJIBAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">verified_user</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hak</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Sesuatu yang seharusnya diperoleh.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Hak mendapatkan pendidikan<br>
                                <span class="text-primary font-bold">›</span> Hak perlindungan hukum
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">assignment_turned_in</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kewajiban</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Sesuatu yang harus dilakukan.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Menaati hukum<br>
                                <span class="text-primary font-bold">›</span> Menghormati hak orang lain
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            INTINYA
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Hak dan kewajiban harus dilaksanakan secara <strong>seimbang</strong>.
                        </p>
                    </div>
                </div>

                <!-- 4. Hierarki -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        4. HIERARKI PERATURAN PERUNDANG-UNDANGAN
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                        Menurut Pasal 7 UU No. 12 Tahun 2011 beserta perubahannya:
                    </p>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">01</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">UUD NRI Tahun 1945</span>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">02</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Ketetapan MPR</span>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">03</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">UU / Perppu</span>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">04</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Peraturan Pemerintah</span>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">05</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Peraturan Presiden</span>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">06</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Peraturan Daerah Provinsi</span>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface w-8 shrink-0">07</span>
                            <span class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Peraturan Daerah Kabupaten/Kota</span>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">warning</span>
                            PRINSIP PENTING
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Peraturan yang lebih rendah <strong>tidak boleh bertentangan</strong> dengan peraturan yang lebih tinggi.
                        </p>
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
                        SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 3 — BAB 4
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 3 — BHINNEKA TUNGGAL IKA ==================== -->
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
                            BAB TIGA • KEBERAGAMAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Bhinneka Tunggal Ika — Berbeda-beda Tetapi Tetap Satu
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KEBERAGAMAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">info</span>
                        1. PENGERTIAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                            "Berbeda-beda tetapi tetap satu."
                        </p>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Semboyan ini menggambarkan bangsa Indonesia yang memiliki banyak perbedaan
                            tetapi tetap bersatu.
                        </p>
                    </div>
                </div>

                <!-- 2. Keberagaman Indonesia -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">diversity_3</span>
                        2. KEBERAGAMAN INDONESIA
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Suku</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">church</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Agama</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">public</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Ras</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">translate</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Bahasa</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">theater_comedy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Budaya</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">handshake</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Adat</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">palette</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Kesenian</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-1">event</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tradisi</div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Keberagaman merupakan <strong>kekayaan bangsa</strong> yang harus dihargai dan dijaga.
                        </p>
                    </div>
                </div>

                <!-- 3. Identitas Nasional -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">badge</span>
                        3. IDENTITAS NASIONAL
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Identitas nasional adalah ciri atau jati diri yang menunjukkan suatu bangsa.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Pancasila</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">UUD 1945</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Bahasa Indonesia</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Merah Putih</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Garuda Pancasila</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Indonesia Raya</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">Bhinneka Tunggal Ika</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold">NKRI</div>
                    </div>
                </div>

                <!-- 4. Mengelola Keberagaman -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rule</span>
                        4. MENGELOLA KEBERAGAMAN
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="material-symbols-outlined text-on-surface text-[24px]">check_circle</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Toleransi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menghargai perbedaan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="material-symbols-outlined text-on-surface text-[24px]">handshake</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Saling Menghormati</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Tidak merendahkan orang lain.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="material-symbols-outlined text-on-surface text-[24px]">balance</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tidak Diskriminatif</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memperlakukan orang secara adil.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-[24px]">forum</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Musyawarah</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menyelesaikan perbedaan melalui dialog.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-[24px]">groups</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gotong Royong</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bekerja sama tanpa membedakan latar belakang.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Konflik dan Integrasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">swap_horiz</span>
                        5. KONFLIK DAN INTEGRASI NASIONAL
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">report</span>
                                PENYEBAB KONFLIK
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Perbedaan pendapat</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Diskriminasi</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Provokasi</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Informasi palsu</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">healing</span>
                                CARA MENYELESAIKAN
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Tidak menggunakan kekerasan</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Saling mendengarkan</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Mencari penyebab masalah</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Bermusyawarah</li>
                                <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Mencari solusi yang adil</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">DEFINISI</div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Integrasi nasional</strong> adalah proses menyatukan berbagai perbedaan menjadi
                            satu kesatuan bangsa.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 4 — NKRI ==================== -->
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
                            BAB EMPAT • NEGARA KESATUAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Negara Kesatuan Republik Indonesia (NKRI)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    NKRI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian NKRI -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">flag</span>
                        1. PENGERTIAN NKRI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        NKRI adalah <strong class="text-on-surface">Negara Kesatuan Republik Indonesia</strong>.
                        Indonesia memiliki banyak pulau, daerah, suku, budaya, dan bahasa, tetapi seluruhnya
                        merupakan bagian dari satu negara Indonesia.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">BENTUK NEGARA</div>
                            <div class="font-headline-md text-headline-md uppercase text-on-surface font-bold">Kesatuan</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">BENTUK PEMERINTAHAN</div>
                            <div class="font-headline-md text-headline-md uppercase text-on-surface font-bold">Republik</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Kedaulatan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">crown</span>
                        2. KEDAULATAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Kedaulatan adalah kekuasaan tertinggi dalam negara. Dalam sistem Indonesia, kedaulatan
                        berada di tangan rakyat dan dilaksanakan menurut UUD.
                    </p>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">how_to_vote</span>
                            CONTOH KEDAULATAN RAKYAT
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Pemilu</span>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Penyampaian Aspirasi</span>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Partisipasi Masyarakat</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Wawasan Nusantara -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        3. WAWASAN NUSANTARA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Wawasan Nusantara adalah <strong>cara pandang bangsa Indonesia</strong> terhadap diri
                            dan lingkungannya dengan mengutamakan persatuan dan kesatuan serta keutuhan wilayah NKRI.
                        </p>
                    </div>
                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            INTINYA
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Seluruh wilayah Indonesia dipandang sebagai <strong>satu kesatuan</strong>, bukan wilayah
                            yang berdiri sendiri-sendiri.
                        </p>
                    </div>
                </div>

                <!-- 4. Menjaga Keutuhan NKRI -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">shield</span>
                        4. MENJAGA KEUTUHAN NKRI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                        Menjaga NKRI merupakan tanggung jawab seluruh warga negara. Sebagai pelajar dapat dilakukan dengan:
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">school</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Belajar Sungguh-sungguh</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">handshake</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Menjaga Persatuan</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">diversity_3</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Menghargai Perbedaan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">block</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tidak Menyebar Hoaks</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">do_not_disturb</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tidak Bullying</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">eco</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Menjaga Lingkungan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hormati Simbol Negara</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">smartphone</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Bijak Bermedia Sosial</div>
                        </div>
                    </div>
                </div>

                <!-- 5. Negara Hukum -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">gavel</span>
                        5. NEGARA HUKUM
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Indonesia adalah <strong>negara hukum</strong>. Artinya, penyelenggaraan negara dan
                            kehidupan masyarakat harus berdasarkan hukum.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">target</span>
                            TUJUAN HUKUM
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Menciptakan Ketertiban</span>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Memberikan Kepastian</span>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Menciptakan Keadilan</span>
                            </div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Melindungi Masyarakat</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">warning</span>
                            PRINSIP PENTING
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Jika terjadi masalah hukum, penyelesaiannya harus melalui <strong>proses hukum</strong>,
                            bukan main hakim sendiri.
                        </p>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Bahasa Indonesia, PJOK,
                        Matematika, dan mata pelajaran lainnya.
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
