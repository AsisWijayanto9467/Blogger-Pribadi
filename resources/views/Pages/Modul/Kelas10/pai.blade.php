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
                <span class="text-on-surface font-bold uppercase">A1 — PAI &amp; BUDI PEKERTI</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PENDIDIKAN AGAMA
                        <span
                            class="bg-primary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">ISLAM</span>
                        &amp; BUDI PEKERTI
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Membangun karakter muslim yang beriman, berakhlak mulia, dan berwawasan
                        kebangsaan melalui pemahaman Al-Qur'an, Hadis, dan nilai-nilai keislaman
                        yang aplikatif dalam kehidupan sehari-hari.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">10
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
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5
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

        <!-- ==================== BAB 1 ==================== -->
        <article id="bab-1"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <!-- Header Bab -->
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">01</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            BAB SATU • Q.S. al-Ma'idah/5: 48 &amp; Q.S. at-Taubah/9: 105
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Meraih Kesuksesan dengan Kompetisi dalam Kebaikan dan Etos Kerja
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    FIQIH MUAMALAH
                </span>
            </header>

            <!-- Body -->
            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <!-- Dasar Hukum -->
                <div
                    class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">gavel</span>
                        DASAR HUKUM
                    </div>
                    <ul class="font-body-sm text-body-sm text-on-surface space-y-1">
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Q.S.
                            al-Ma'idah/5: 48 — tentang <em>fastabiqul khairat</em></li>
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Q.S.
                            at-Taubah/9: 105 — tentang etos kerja</li>
                    </ul>
                </div>

                <!-- Inti Materi -->
                <div>
                    <div
                        class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">lightbulb</span>
                        INTI MATERI
                    </div>
                    <ul class="space-y-2 font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">01.</span>
                            <span>Memahami makna <strong class="text-on-surface">fastabiqul khairat</strong>, yaitu
                                berlomba-lomba dalam melakukan kebaikan.</span>
                        </li>
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">02.</span>
                            <span>Membiasakan diri melakukan kebaikan dengan <strong class="text-on-surface">segera</strong>
                                dan tidak menunda-nunda.</span>
                        </li>
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">03.</span>
                            <span>Membangun <strong class="text-on-surface">etos kerja</strong> yang disiplin, jujur,
                                mandiri, bertanggung jawab, dan pantang menyerah.</span>
                        </li>
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">04.</span>
                            <span>Menerapkan prinsip <strong class="text-on-surface">kerja keras, kerja cerdas, kerja
                                    ikhlas, dan kerja tuntas</strong> dalam kehidupan sehari-hari.</span>
                        </li>
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">05.</span>
                            <span>Memahami bahwa bekerja dengan sungguh-sungguh dan mencari rezeki yang halal merupakan
                                bagian dari <strong class="text-on-surface">ibadah</strong>.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 2 ==================== -->
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
                            BAB DUA • AKIDAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Memahami Hakikat dan Cabang-Cabang Iman (Syu'abul Iman)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKIDAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div>
                    <div
                        class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">lightbulb</span>
                        INTI MATERI
                    </div>
                    <ul class="space-y-2 font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">01.</span>
                            <span>Memahami pengertian <strong class="text-on-surface">iman</strong> dan hubungan antara
                                iman, Islam, dan ihsan.</span>
                        </li>
                        <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                            <span class="font-bold text-primary shrink-0">02.</span>
                            <span>Mengenal <strong class="text-on-surface">Syu'abul Iman</strong>, yaitu berbagai cabang
                                atau bagian yang menunjukkan kesempurnaan iman.</span>
                        </li>
                    </ul>
                </div>

                <!-- 3 Kelompok Cabang Iman -->
                <div>
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]">category</span>
                        TIGA KELOMPOK CABANG IMAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div
                            class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">
                                Ma'rifatun bil Qalbi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Iman yang berkaitan dengan
                                <strong>hati dan keyakinan</strong>.</p>
                        </div>
                        <div
                            class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">
                                Iqrarun bil Lisan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Iman yang diwujudkan melalui
                                <strong>ucapan</strong>.</p>
                        </div>
                        <div
                            class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Amalun
                                bil Arkan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Iman yang diwujudkan melalui
                                <strong>perbuatan</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-surface-container-low border-[2px] border-on-background">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        <strong class="text-on-surface">Penerapan:</strong> Menerapkan cabang-cabang iman dalam kehidupan
                        untuk membentuk pribadi muslim yang beriman dan berakhlak.
                    </p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 3 ==================== -->
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
                            BAB TIGA • AKHLAK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menghindari Sifat Berfoya-Foya, Riya', Sum'ah, Takabur, dan Hasad
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKHLAK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                        AKHLAK MAZMUMAH (PERILAKU TERCELA)
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface">Sifat atau perilaku tercela yang harus dihindari
                        oleh setiap muslim.</p>
                </div>

                <!-- 6 Sifat Tercela -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Israf
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Berlebihan dalam menggunakan sesuatu.
                        </p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tabzir
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menghamburkan atau menyia-nyiakan
                            harta untuk hal yang tidak semestinya.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Riya'
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Melakukan ibadah agar dilihat dan
                            dipuji orang lain.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sum'ah
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Melakukan kebaikan agar didengar atau
                            dibicarakan orang lain.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Takabur
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Merasa diri lebih baik dan
                            merendahkan orang lain.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Hasad
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Merasa tidak senang terhadap nikmat
                            yang diperoleh orang lain.</p>
                    </div>
                </div>

                <div
                    class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                        SOLUSI &amp; PEMBIASAAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">Membiasakan hidup <strong>sederhana, ikhlas,
                            rendah hati</strong>, dan <strong>bersyukur</strong>.</p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 4 ==================== -->
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
                            BAB EMPAT • FIQIH MUAMALAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Asuransi, Bank, dan Koperasi Syariah
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    FIQIH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <ul class="space-y-2 font-body-md text-body-md text-on-surface-variant">
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">›</span>
                        <span>Memahami prinsip <strong class="text-on-surface">muamalah syariah</strong> dalam kegiatan
                            ekonomi.</span>
                    </li>
                </ul>

                <!-- 3 Lembaga -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div
                        class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shield</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Asuransi
                            Syariah</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Sistem saling membantu dan melindungi
                            berdasarkan prinsip <em>ta'awun</em> serta akad yang sesuai syariah.</p>
                    </div>
                    <div
                        class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">account_balance</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bank
                            Syariah</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menjalankan kegiatan perbankan
                            berdasarkan prinsip syariah dan menghindari <em>riba</em>.</p>
                    </div>
                    <div
                        class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">groups</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Koperasi
                            Syariah</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Koperasi yang menjalankan usaha,
                            simpanan, dan pembiayaan berdasarkan prinsip syariah.</p>
                    </div>
                </div>

                <!-- Akad -->
                <div class="p-space-md bg-surface-container-low border-[2px] border-on-background">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">handshake</span>
                        JENIS AKAD DALAM MUAMALAH SYARIAH
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="font-code-inline text-code-inline font-bold text-primary">›</span>
                            <span class="font-headline-sm text-headline-sm font-bold"> Mudharabah</span>
                        </div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="font-code-inline text-code-inline font-bold text-primary">›</span>
                            <span class="font-headline-sm text-headline-sm font-bold"> Musyarakah</span>
                        </div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="font-code-inline text-code-inline font-bold text-primary">›</span>
                            <span class="font-headline-sm text-headline-sm font-bold"> Murabahah</span>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Penerapan:</strong> Menerapkan kegiatan ekonomi yang <strong>halal, adil, transparan</strong>,
                        dan <strong>saling menguntungkan</strong>.
                    </p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 5 ==================== -->
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
                            BAB LIMA • SEJARAH KEBUDAYAAN ISLAM
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Sejarah Masuknya Islam dan Peran Ulama Penyebar Islam di Indonesia
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SKI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <!-- Teori -->
                <div>
                    <div
                        class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        4 TEORI MASUKNYA ISLAM KE NUSANTARA
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div
                            class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Gujarat
                            </div>
                        </div>
                        <div
                            class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                Makkah/Arab</div>
                        </div>
                        <div
                            class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Persia
                            </div>
                        </div>
                        <div
                            class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Cina
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jalur -->
                <div>
                    <div
                        class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">route</span>
                        5 JALUR PENYEBARAN ISLAM
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Perdagangan</span>
                        <span
                            class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Perkawinan</span>
                        <span
                            class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Pendidikan</span>
                        <span
                            class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Tasawuf</span>
                        <span
                            class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Kesenian</span>
                    </div>
                </div>

                <ul class="space-y-2">
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">›</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Mengetahui peran ulama dan para
                            pendakwah dalam perkembangan Islam di Indonesia.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">›</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Memahami bahwa dakwah dilakukan
                            dengan pendekatan yang <strong class="text-on-surface">santun, damai</strong>, dan menyesuaikan
                            kondisi masyarakat.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">›</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Meneladani sikap <strong
                                class="text-on-surface">gigih, toleran, bijaksana</strong>, dan menghargai budaya
                            lokal.</span>
                    </li>
                </ul>
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
                        BAB 6 — BAB 10
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 6 ==================== -->
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
                            BAB ENAM • Q.S. al-Isra'/17: 32 &amp; Q.S. an-Nur/24: 2
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menjauhi Pergaulan Bebas dan Zina demi Menjaga Martabat Manusia
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKHLAK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div
                    class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">gavel</span>
                        DASAR HUKUM
                    </div>
                    <ul class="font-body-sm text-body-sm text-on-surface space-y-1">
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Q.S.
                            al-Isra'/17: 32 — larangan mendekati zina</li>
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Q.S. an-Nur/24:
                            2 — hukuman bagi pelaku zina</li>
                    </ul>
                </div>

                <ul class="space-y-2">
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">01.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Memahami pengertian <strong
                                class="text-on-surface">pergaulan bebas dan zina</strong> serta larangannya dalam
                            Islam.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">02.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Islam tidak hanya melarang zina,
                            tetapi juga <strong class="text-on-surface">melarang mendekati</strong> segala sesuatu yang
                            dapat mengarah kepada zina.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">03.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Memahami dampak pergaulan bebas dan
                            zina terhadap <strong class="text-on-surface">agama, diri sendiri, keluarga, dan
                                masyarakat</strong>.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">04.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Menerapkan <strong
                                class="text-on-surface">iffah</strong>, yaitu menjaga kehormatan dan kesucian diri.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">05.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Membiasakan <strong
                                class="text-on-surface">ghaddul bashar</strong> (menjaga pandangan) serta menjaga batas
                            pergaulan dengan lawan jenis.</span>
                    </li>
                </ul>
            </div>
        </article>

        <!-- ==================== BAB 7 ==================== -->
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
                            BAB TUJUH • AKIDAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menata Hidup dengan Khauf, Raja', dan Tawakal kepada Allah SWT
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKIDAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div
                        class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shield</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Khauf
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Rasa takut kepada Allah yang
                            mendorong menjauhi dosa dan menaati perintah-Nya.</p>
                    </div>
                    <div
                        class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">favorite</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Raja'
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Rasa berharap kepada rahmat,
                            ampunan, dan pertolongan Allah.</p>
                    </div>
                    <div
                        class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">handshake</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tawakal
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Berserah diri kepada Allah setelah
                            berusaha atau ikhtiar secara maksimal.</p>
                    </div>
                </div>

                <div
                    class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">balance</span>
                        PRINSIP KESEIMBANGAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">Khauf dan raja' harus <strong>berjalan
                            seimbang</strong>. Tidak mudah menyerah karena yakin bahwa usaha harus disertai doa dan
                        tawakal.</p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 8 ==================== -->
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
                            BAB DELAPAN • AKHLAK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menumbuhkan Perilaku Mulia Melalui Akhlak Mahmudah
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKHLAK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Akhlak Mahmudah</strong> adalah perilaku terpuji yang harus dibiasakan.
                    </p>
                </div>

                <!-- 3 Akhlak -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div
                        class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-primary text-[28px] mb-2">psychology</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">
                            Mujahadah an-Nafs</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Berusaha mengendalikan hawa nafsu
                            dan diri sendiri.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-primary text-[28px] mb-2">sentiment_calm</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ghadhab
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Marah yang dapat dikendalikan dan
                            tidak menimbulkan keburukan.</p>
                    </div>
                    <div
                        class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-primary text-[28px] mb-2">military_tech</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Syuja'ah
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Keberanian dalam membela kebenaran
                            dengan cara yang benar dan bijaksana.</p>
                    </div>
                </div>

                <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div
                        class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                        YANG HARUS DIHINDARI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">Sifat mudah marah, mengikuti hawa nafsu,
                        pengecut dalam kebaikan, dan perilaku tercela lainnya.</p>
                </div>

                <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Tujuan:</strong> Membentuk pribadi yang mampu <strong>mengendalikan diri, berani, sabar,
                            dan bertanggung jawab</strong>.
                    </p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 9 ==================== -->
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
                            BAB SEMBILAN • USHUL FIQIH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Mengenal Prinsip Dasar Al-Kulliyatul Khamsah
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    USHUL FIQIH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Al-Kulliyatul Khamsah</strong> merupakan lima prinsip dasar yang menjadi bagian penting
                        dalam <strong>Maqashid asy-Syari'ah</strong>, yaitu tujuan utama syariat Islam.
                    </p>
                </div>

                <!-- 5 Prinsip -->
                <div>
                    <div
                        class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">looks_5</span>
                        LIMA PRINSIP DASAR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-space-md">
                        <div
                            class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">mosque</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hifzhu
                                ad-Din</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Memelihara agama</p>
                        </div>
                        <div
                            class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">favorite</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hifzhu
                                an-Nafs</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Memelihara jiwa</p>
                        </div>
                        <div
                            class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">psychology</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hifzhu
                                al-'Aql</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Memelihara akal</p>
                        </div>
                        <div
                            class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">family_restroom</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hifzhu
                                an-Nasl</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Memelihara keturunan</p>
                        </div>
                        <div
                            class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">savings</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">05</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hifzhu
                                al-Mal</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Memelihara harta</p>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-surface-container-low border-[2px] border-on-background">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        <strong class="text-on-surface">Tujuan:</strong> Agar kehidupan manusia tetap <strong>aman,
                            teratur, bermartabat</strong>, dan sesuai dengan prinsip syariat Islam.
                    </p>
                </div>
            </div>
        </article>

        <!-- ==================== BAB 10 ==================== -->
        <article id="bab-10"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">10</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            BAB SEPULUH • SEJARAH KEBUDAYAAN ISLAM
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Keteladanan Dakwah Wali Songo di Nusantara
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SKI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <ul class="space-y-2">
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">01.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Mengenal <strong
                                class="text-on-surface">Wali Songo</strong> sebagai tokoh-tokoh penting dalam perkembangan
                            Islam di Pulau Jawa.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">02.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Memahami <strong
                                class="text-on-surface">peran dan wilayah dakwah</strong> para Wali Songo.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">03.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Mengenal metode dakwah yang
                            dilakukan secara <strong class="text-on-surface">damai, bijaksana, dan bertahap</strong>.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">04.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Dakwah dilakukan melalui <strong
                                class="text-on-surface">pendidikan, perdagangan, kesenian, budaya</strong>, dan pendekatan
                            sosial.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">05.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Menggunakan budaya lokal sebagai
                            sarana dakwah, seperti <strong class="text-on-surface">wayang, tembang, dan tradisi</strong>
                            masyarakat.</span>
                    </li>
                    <li class="flex items-start gap-3 p-3 bg-surface-container-low border-[2px] border-on-background">
                        <span class="font-bold text-primary shrink-0">06.</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Meneladani sikap Wali Songo dalam
                            berdakwah dengan <strong class="text-on-surface">santun, menghargai budaya, menjaga
                                kerukunan</strong>, dan menyebarkan kebaikan.</span>
                    </li>
                </ul>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul PPKn, Bahasa Indonesia, Matematika,
                        dan mata pelajaran lainnya.
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
