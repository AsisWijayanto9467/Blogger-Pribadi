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
                <span class="text-on-surface font-bold uppercase">A7 — BAHASA JAWA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MUATAN LOKAL • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">JAWA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Nguri-uri Sastra lan Budaya Jawa — Nggali kawruh babagan tembang macapat,
                        geguritan, cerita wayang, pranatacara, aksara Jawa, lan unggah-ungguh basa.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL MATERI</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">10
                            MATERI</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5 MATERI</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5 MATERI</span>
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
                    SEMESTER 1 (GANJIL)
                </a>
                <a href="#semester-2"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-secondary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">auto_stories</span>
                    SEMESTER 2 (GENAP)
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
                        🟠 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        MATERI 1 — 5
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 1 — TEMBANG MACAPAT ==================== -->
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
                            MATERI SATU • TEMBANG KLASIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Tembang Macapat
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    MACAPAT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Pangerten -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        A. PANGERTEN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-3">
                        <strong>Tembang Macapat</strong> yaiku salah sawijining karya sastra Jawa awujud geguritan utawa
                        tembang tradhisional sing <strong>kaiket déning paugeran tartamtu</strong>. Tembang macapat
                        nduwèni aturan baku sing kudu digatekake nalika nulis utawa nembang.
                    </p>
                </div>

                <!-- Paugeran Utama -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rule</span>
                        3 PAUGERAN UTAMA
                    </div>
                    <div class="overflow-x-auto mb-space-md">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Paugeran</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Tegesé</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Guru Gatra</td>
                                    <td class="p-space-md">Cacahé larik / baris ing saben pada</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Guru Wilangan</td>
                                    <td class="p-space-md">Cacahé wanda (suku kata) ing saben larik</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Guru Lagu</td>
                                    <td class="p-space-md">Swara vokal ing pungkasan saben larik</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- B. Pocung, Gambuh, Dhandhanggula -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">music_note</span>
                        B. JINISÉ TEMBANG
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">sentiment_satisfied</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pocung</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Wataké <strong>santai / lucu</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ngemot <strong>pitutur</strong> entheng</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Gegayutan pungkasan urip</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">handshake</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Gambuh</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Wataké <strong>akrab, grapyak</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kebak <strong>pitutur</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bab <strong>tata krama</strong></li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">auto_awesome</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Dhandhanggula</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Wataké <strong>luwes, manis</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Nyritakake <strong>kabagyan</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ngemot <strong>nilai luhur</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- C. Nilai Filosofis -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">lightbulb</span>
                        C. NILAI FILOSOFIS
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Tembang macapat ora mung kanggo hiburan, nanging uga kanggo <strong>menehi piwulang urip</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kudu Jujur</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Ngajeni Wong Liya</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Sregep Sinau</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Sabar &amp; Andhap Asor</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Ngendhaleni Napsu</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tumindak Becik</div>
                    </div>
                </div>

                <!-- Kunci Hafalan -->
                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">psychology</span>
                        SING KUDU DIELINGI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 text-center">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GURU GATRA</div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">Jumlah baris</div>
                        </div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GURU WILANGAN</div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">Jumlah wanda</div>
                        </div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GURU LAGU</div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">Swara pungkasan</div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 2 — NOVEL JAWA MODERN ==================== -->
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
                            MATERI DUA • PROSA FIKSI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Novel Jawa Modern
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    NOVEL
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Novel Jawa modern</strong> yaiku karya sastra awujud <strong>prosa fiksi dawa</strong>
                        sing nggunakake basa Jawa lan nyritakake sawijining kedadeyan utawa konflik kanthi luwih jembar.
                    </p>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">view_week</span>
                        UNSUR INTRINSIK
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Unsur</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Tegesé</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Tema</td>
                                    <td class="p-space-md">Gagasan pokok crita</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Alur / Plot</td>
                                    <td class="p-space-md">Urutan kedadeyan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Latar / Setting</td>
                                    <td class="p-space-md">Panggonan, wektu, swasana</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Paraga</td>
                                    <td class="p-space-md">Tokoh ing crita</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Penokohan</td>
                                    <td class="p-space-md">Watak paraga</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Sudut Pandang</td>
                                    <td class="p-space-md">Posisi panganggit</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Amanat</td>
                                    <td class="p-space-md">Piwulang utawa pesen</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">summarize</span>
                        RINGKESAN NOVEL
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface text-center">
                        Maca crita → Nemokaké kedadeyan penting → Nyusun manèh ringkes → Tetep njaga inti
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 3 — SESORAH ==================== -->
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
                            MATERI TIGA • PIDHATO
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Sesorah / Pidhato
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SESORAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Sesorah</strong> utawa <strong>pidhato</strong> yaiku kegiatan ngandharake gagasan,
                        informasi, utawa pesen marang wong akèh kanthi lisan nggunakake basa Jawa sing
                        <strong>trep lan sopan</strong>.
                    </p>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR SESORAH
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sapa Ngalamat</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Salam pambuka, puji syukur, pakurmatan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Purwaka</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pendahuluan — ngenalaké topik &amp; tujuan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Surasa / Wati</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Isi utama sesorah, cocog karo téma.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Wasana</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Panutup — kesimpulan, pangajab, pangapura, salam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">star</span>
                        PATRAP SESORAH (4W)
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WICARA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Cara ngucapake tembung supaya cetha.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAGA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gerak awak, sikap, ekspresi.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAMA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Irama, tempo, tekanan, intonasi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRASA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penghayatan lan rasa.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 4 — TEKS EKSPOSISI & UNGGAH-UNGGUH ==================== -->
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
                            MATERI EMPAT • EKSPOSISI &amp; BASA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teks Eksposisi lan Unggah-Ungguh Basa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    EKSPOSISI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">article</span>
                        TEKS EKSPOSISI
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-3">
                        <strong>Teks eksposisi</strong> yaiku teks sing nduwèni tujuan kanggo <strong>mratelakake,
                        njlentrehake</strong>, utawa menehi informasi marang pamaca kanthi <strong>objektif</strong>.
                    </p>
                    <div class="font-code-inline text-code-inline text-on-surface text-center">
                        Pambuka / Tesis → Argumentasi → Panutup / Penegasan
                    </div>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">translate</span>
                        UNGGAH-UNGGUH BASA
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Unggah-ungguh basa</strong> yaiku aturan nggunakake tingkat tutur basa Jawa sing
                            disesuaikan karo sapa sing diajak ngomong, umur, kedudukan, lan kahanan.
                            Konsep iki diarani <strong>empan papan</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">TINGKAT 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ngoko Lugu</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface italic">
                                "Kowe arep menyang ngendi?"
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">TINGKAT 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ngoko Alus</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ngoko + tembung krama/krama inggil.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">TINGKAT 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Krama Lugu</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface italic">
                                "Sampeyan badhe tindak pundi?"
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">TINGKAT 04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Krama Alus</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface italic">
                                "Panjenengan badhe tindak pundi?"
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 5 — AKSARA JAWA ==================== -->
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
                            MATERI LIMA • AKSARA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aksara Jawa — Rekan lan Murda
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKSARA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Aksara Jawa</strong> (Hanacaraka) nduwèni aksara khusus: <strong>Aksara Rekan</strong>
                        kanggo tembung serapan lan <strong>Aksara Murda</strong> kanggo pakurmatan.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Aksara Rekan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kanggo swara serapan:</p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> f, v, z, kh<br>
                            <span class="text-primary font-bold">›</span> fakir, zakat, khusus
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Aksara Murda</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kanggo pakurmatan:</p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Jeneng wong<br>
                            <span class="text-primary font-bold">›</span> Gelar<br>
                            <span class="text-primary font-bold">›</span> Lembaga / panggonan
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
                        MATERI 6 — 10
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 6 — GEGURITAN ==================== -->
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
                            MATERI ENAM • PUISI JAWA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Geguritan (Puisi Jawa Modern)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    GEGURITAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Geguritan</strong> yaiku puisi Jawa modern sing ora kaiket paugeran kaya tembang
                        macapat. Geguritan nduwèni <strong>struktur fisik</strong> lan <strong>struktur batin</strong>.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">visibility</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Struktur Fisik</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> <strong>Diksi</strong> — pilihan tembung<br>
                            <span class="text-primary font-bold">›</span> <strong>Pengimajian</strong> — gambaran indra<br>
                            <span class="text-primary font-bold">›</span> <strong>Kata konkret</strong><br>
                            <span class="text-primary font-bold">›</span> <strong>Tipografi</strong> — wujud tulisan<br>
                            <span class="text-primary font-bold">›</span> <strong>Rima / irama</strong>
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">favorite</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Struktur Batin</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> <strong>Tema</strong> — gagasan pokok<br>
                            <span class="text-primary font-bold">›</span> <strong>Rasa</strong> — perasaan panganggit<br>
                            <span class="text-primary font-bold">›</span> <strong>Nada</strong> — sikap panganggit<br>
                            <span class="text-primary font-bold">›</span> <strong>Amanat</strong> — pesen
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">mic</span>
                        PRAKTIK
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Maca indah / deklamasi — ekspresi, wicara, wirasa
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Nulis geguritan kanthi téma tartamtu
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 7 — CERITA WAYANG ==================== -->
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
                            MATERI TUJUH • WAYANG
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Cerita Wayang (Mahabarata / Ramayana)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    WAYANG
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Cerita wayang</strong> yaiku lakon sing sumbere saka epik India (Mahabarata lan
                        Ramayana) nanging <strong>diadaptasi karo filosofi Jawa</strong> — kalebu nilai budi pekerti,
                        tata krama, lan piwulang urip.
                    </p>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        KARAKTER TOKOH WAYANG
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pandhawa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Pihak sing bener — Yudhistira, Bima, Arjuna, Nakula, Sadewa. Ngemot nilai
                                <strong>kebenaran, kesetiaan, lan keadilan</strong>.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kurawa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Pihak sing salah — 100 putra Destarata. Ngemot sifat
                                <strong>angkara murka, srakah, lan iri</strong>.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Punakawan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Semar, Gareng, Petruk, Bagong. Dadi <strong>pamomong lan panyaruwe</strong>
                                kanthi piwulang luhur.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">checklist</span>
                        PIWULANG BUDI PEKERTI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 font-code-inline text-code-inline text-on-surface">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Rukun lan gotong royong</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Becik lan bener — aja tumindak angkara</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Ngelmu lan tata krama</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 8 — PRANATACARA ==================== -->
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
                            MATERI WOLU • MC ADAT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pranatacara (MC / Panatacara Adat Jawa)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PRANATACARA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Pranatacara</strong> yaiku wong sing mimpin lan nglantarake acara adat Jawa,
                        tuladhané <strong>panggih pengantin</strong> ing upacara pernikahan Jawa.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">task_alt</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tugas</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Mimpin acara, ngatur urutan, lan njaga swasana supaya acara lumaku lancar lan khidmat.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">translate</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ragam Bahasa</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Nggunakake <strong>krama alus</strong> sing trep karo paugeran adat Jawa, kalebu
                            tetembungan tartamtu.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">checkroom</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tata Busana</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Ngagem busana adat Jawa sing trep — kebaya, beskap, jarik, lan atribut liyané.
                        </p>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">record_voice_over</span>
                        OLAH VOKAL &amp; ARTIKULASI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline text-on-surface">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Wicara cetha lan runtut
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Wirama trep (tempo &amp; intonasi)
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Wiraga — sikap &amp; pandangan
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Wirasa — penghayatan
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 9 — TEKS EKSPOSISI / DESKRIPSI ADAT JAWA ==================== -->
        <article id="materi-9"
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
                            MATERI SEMBILAN • TRADISI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teks Eksposisi / Deskripsi Adat Tradisi Jawa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TRADISI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Teks eksposisi / deskripsi adat Jawa</strong> yaiku wacana non-sastra sing nyritakake
                        informasi faktual babagan <strong>tradisi masyarakat Jawa</strong>.
                    </p>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">favorite</span>
                        CONTOH: TAHAPAN UPACARA PENGANTIN JAWA
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">1. Tonten</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">2. Nontoni</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">3. Lamaran</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">4. Siraman</span>
                        <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">5. Panggih</span>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">list</span>
                        CONTOH TRADISI LIYANÉ
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Bersih Desa
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Sekaten
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Ruwatan / Tedhak Siten
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 10 — PACELATHON / DRAMA JAWA ==================== -->
        <article id="materi-10"
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
                            MATERI SEPULUH • DRAMA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pacelathon / Drama Jawa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    DRAMA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Pacelathon</strong> yaiku percakapan interaktif utawa naskah drama cekak
                        nggunakake basa Jawa sing trep. Latihané kalebu <strong>meranake watak tokoh</strong>
                        kanthi unggah-ungguh basa sing cocog konteks.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">forum</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Pacelathon</div>
                        <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Percakapan 2+ wong</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Nggunakake unggah-ungguh basa</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Trep karo konteks (kanca, wong tuwa, guru)</li>
                        </ul>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">theater_comedy</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Drama Jawa</div>
                        <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Naskah drama cekak</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Meranake watak tokoh (acting)</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Unggah-ungguh basa manut tokoh</li>
                        </ul>
                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        KUNCI SUKSES
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 font-code-inline text-code-inline text-on-surface">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Ekspresi &amp; penghayatan
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Vokal cetha &amp; wirama trep
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <span class="text-primary font-bold">›</span> Basa Jawa sing bener
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
                        Bahasa Inggris, dan mata pelajaran Kelas XI lainnya.
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
