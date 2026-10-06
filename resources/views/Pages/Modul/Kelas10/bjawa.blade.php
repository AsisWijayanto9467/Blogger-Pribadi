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
                <span class="text-on-surface font-bold uppercase">A7 — BAHASA JAWA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MUATAN LOKAL • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">JAWA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Nguri-uri Basa lan Budaya Jawa — Melestarikan bahasa, sastra, dan budaya Jawa
                        melalui unggah-ungguh, tembang macapat, aksara, dan cerita rakyat.
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
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
                            TOPIK</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
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
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
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

        <!-- ==================== MATERI 1 — UNGGAH-UNGGUH ==================== -->
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
                            MATERI SATU • TATA KRAMA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Unggah-Ungguh Basa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TATA KRAMA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Unggah-ungguh basa</strong> adalah aturan penggunaan tingkat tutur Bahasa Jawa yang
                        disesuaikan dengan lawan bicara, usia, kedudukan, dan situasi. Tujuannya menunjukkan
                        <strong>rasa hormat dan sopan santun</strong>.
                    </p>
                </div>

                <!-- Tingkatan Bahasa Jawa -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">stairs</span>
                        TINGKATAN BAHASA JAWA
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Ragam</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Penggunaan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Ngoko Lugu</td>
                                    <td class="p-space-md">Teman sebaya/akrab, situasi santai</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Ngoko Alus</td>
                                    <td class="p-space-md">Ngoko yang disisipi kosakata krama untuk menghormati lawan bicara</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Krama Lugu</td>
                                    <td class="p-space-md">Situasi sopan, tetapi tidak terlalu resmi</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Krama Alus</td>
                                    <td class="p-space-md">Berbicara kepada orang yang lebih tua/dihormati atau situasi sangat sopan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        CONTOH SEDERHANA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline uppercase font-bold text-on-surface mb-2">NGOKO</div>
                            <p class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">"Kowe arep lunga menyang ngendi?"</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kamu mau pergi ke mana?</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline uppercase font-bold text-on-surface mb-2">KRAMA</div>
                            <p class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">"Sampeyan badhé tindak pundi?"</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Anda mau pergi ke mana?</p>
                        </div>
                    </div>
                </div>

                <!-- Hal yang Diperhatikan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">checklist</span>
                        HAL YANG HARUS DIPERHATIKAN
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">cake</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Umur</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">badge</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kedudukan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">diversity_3</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Hubungan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">meeting_room</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Situasi</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">sentiment_satisfied</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kesopanan</div>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        PRINSIP UTAMA
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Semakin dihormati lawan bicara, semakin <strong>tinggi tingkat tutur</strong> yang digunakan.
                    </p>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 2 — TEMBANG MACAPAT ==================== -->
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
                            MATERI DUA • TEMBANG
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Tembang Macapat
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TEMBANG
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Tembang Macapat</strong> adalah puisi atau tembang tradisional Jawa yang memiliki
                        aturan tertentu yang disebut <strong>paugeran</strong>.
                    </p>
                </div>

                <!-- Paugeran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rule</span>
                        PAUGERAN MACAPAT
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">format_list_numbered</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PAUGERAN 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Guru Gatra</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jumlah baris dalam satu bait.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">straighten</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PAUGERAN 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Guru Wilangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jumlah suku kata pada setiap baris.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">graphic_eq</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">PAUGERAN 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Guru Lagu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bunyi vokal/huruf hidup pada akhir setiap baris.</p>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">MUDAH DIINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Gatra = Baris • Wilangan = Suku Kata • Lagu = Vokal Akhir
                        </div>
                    </div>
                </div>

                <!-- Contoh Tembang -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">music_note</span>
                        CONTOH TEMBANG
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">bolt</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tembang Pangkur</div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Watak</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-3">
                                <span class="text-primary font-bold">›</span> Tegas<br>
                                <span class="text-primary font-bold">›</span> Bersemangat<br>
                                <span class="text-primary font-bold">›</span> Cocok untuk nasihat<br>
                                <span class="text-primary font-bold">›</span> Perjuangan / pengendalian hawa nafsu
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Dalam <strong>Serat Wedhatama</strong>, pupuh Pangkur banyak mengandung nasihat moral &amp; pendidikan kehidupan.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sentiment_dissatisfied</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tembang Maskumambang</div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Watak</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Sedih<br>
                                <span class="text-primary font-bold">›</span> Prihatin<br>
                                <span class="text-primary font-bold">›</span> Penuh keprihatinan
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 3 — AKSARA JAWA ==================== -->
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
                            MATERI TIGA • AKSARA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aksara Jawa
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
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Aksara Jawa dasar disebut <strong>Aksara Legena</strong> atau <strong>Carakan</strong>.
                        Terdapat <strong>20 aksara dasar</strong>.
                    </p>
                </div>

                <!-- 20 Aksara Legena -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">abc</span>
                        20 AKSARA LEGENA
                    </div>
                    <div class="grid grid-cols-5 gap-2">
                        <div class="p-3 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ha</div>
                        </div>
                        <div class="p-3 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Na</div>
                        </div>
                        <div class="p-3 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ca</div>
                        </div>
                        <div class="p-3 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ra</div>
                        </div>
                        <div class="p-3 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ka</div>
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Da</div>
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ta</div>
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Sa</div>
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Wa</div>
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">La</div>
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Pa</div>
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Dha</div>
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ja</div>
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ya</div>
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Nya</div>
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ma</div>
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ga</div>
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Ba</div>
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Tha</div>
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm font-bold">Nga</div>
                        </div>
                    </div>
                </div>

                <!-- Pasangan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">link</span>
                        PASANGAN
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            <strong>Pasangan</strong> digunakan untuk <strong>menghilangkan atau mematikan bunyi
                            vokal 'a'</strong> pada aksara sebelumnya sehingga dua konsonan dapat dibaca berurutan.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center">
                            <span class="font-code-inline text-code-inline text-on-surface-variant">
                                aksara pertama + pasangan aksara berikutnya → rangkaian konsonan
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Sandhangan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">tune</span>
                        SANDHANGAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Sandhangan</strong> digunakan untuk mengubah atau menambahkan bunyi tertentu.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">record_voice_over</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sandhangan Swara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengubah bunyi vokal.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">graphic_eq</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sandhangan Wyanjana</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menambahkan bunyi tertentu seperti <em>r</em> atau <em>y</em>.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">stop_circle</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Panyigeg Wanda</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memberikan bunyi penutup pada suku kata.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 4 — CERITA RAKYAT ==================== -->
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
                            MATERI EMPAT • CERITA RAKYAT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teks Cerita Rakyat / Legenda
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    CERITA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">auto_stories</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Cerita Rakyat</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Cerita yang berkembang &amp; diwariskan dalam masyarakat, biasanya secara turun-temurun.</p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">history_edu</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Legenda</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Cerita rakyat yang biasanya dikaitkan dengan asal-usul suatu tempat, tokoh, atau kejadian tertentu.</p>
                    </div>
                </div>

                <!-- Unsur Intrinsik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        UNSUR INTRINSIK
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tema</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gagasan utama cerita.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Alur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Maju, mundur, atau campuran.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tokoh</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pelaku cerita.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Penokohan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sifat/karakter tokoh.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Latar</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat, waktu, suasana.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sudut Pandang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Posisi pencerita.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] md:col-span-3">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Amanat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan atau pelajaran yang ingin disampaikan.</p>
                        </div>
                    </div>
                </div>

                <!-- Menceritakan Kembali -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">replay</span>
                        MENCERITAKAN KEMBALI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3">YANG HARUS DIPERHATIKAN</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Urutan Peristiwa</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Tokoh</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Latar</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Konflik</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Penyelesaian</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Amanat</span>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Penting:</strong> Gunakan <strong>unggah-ungguh basa</strong> yang sesuai saat menceritakan kembali.
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
                        🟢 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        MATERI 5 — 8
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 5 — SESORAH ==================== -->
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
                            MATERI LIMA • PIDATO JAWA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Sesorah / Pidato Bahasa Jawa
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
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Sesorah</strong> adalah kegiatan menyampaikan gagasan, informasi, atau pesan
                        secara lisan di depan orang lain menggunakan Bahasa Jawa.
                    </p>
                </div>

                <!-- Struktur Sesorah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUKTUR SESORAH
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Salam Pembuka</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant italic">"Assalamu'alaikum warahmatullahi wabarakatuh."</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sapaan/Penghormatan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menyebut pihak yang dihormati atau para hadirin.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pendahuluan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi ucapan syukur, terima kasih, &amp; pengantar menuju topik.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Isi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi pokok pembicaraan atau pesan utama.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">05</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Penutup</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi kesimpulan, permohonan maaf, &amp; ucapan terima kasih.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">06</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Salam Penutup</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mengakhiri sesorah dengan salam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Metode -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        METODE SESORAH
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">psychology</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Memoriter</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghafalkan naskah.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">notes</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ekstemporan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan garis besar/catatan.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">menu_book</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Naskah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membaca naskah yang telah disiapkan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">bolt</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Impromptu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berbicara spontan tanpa persiapan panjang.</p>
                        </div>
                    </div>
                </div>

                <!-- Prinsip 4W -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">star</span>
                        PRINSIP SAAT BERPIDATO (4W)
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">accessibility_new</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAGA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sikap &amp; gerakan tubuh.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">graphic_eq</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRAMA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Intonasi, tempo, &amp; irama suara.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">favorite</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WIRASA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penghayatan &amp; ekspresi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">record_voice_over</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">WICARA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kejelasan berbicara/pengucapan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 6 — DRAMA JAWA ==================== -->
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
                            MATERI ENAM • DRAMA JAWA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teks Drama Tradisional / Modern
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
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Drama</strong> adalah karya atau pertunjukan yang menggambarkan kehidupan melalui
                        <strong>dialog, tindakan, dan pemeranan tokoh</strong>.
                    </p>
                </div>

                <!-- Jenis Drama -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Drama Tradisional</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Berkembang berdasarkan budaya &amp; tradisi daerah.</p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Ketoprak<br>
                            <span class="text-primary font-bold">›</span> Ludruk<br>
                            <span class="text-primary font-bold">›</span> Wayang orang
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">movie</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Drama Modern</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan naskah &amp; teknik pementasan yang lebih terstruktur.</p>
                    </div>
                </div>

                <!-- Unsur Drama -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">widgets</span>
                        UNSUR DRAMA
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">description</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Naskah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Cerita &amp; dialog.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">person</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tokoh</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pelaku cerita.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">face</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Penokohan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Karakter tokoh.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">forum</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Dialog</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Percakapan antartokoh.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">timeline</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Alur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Rangkaian peristiwa.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">place</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Latar</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat, waktu, suasana.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">bolt</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Konflik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Permasalahan cerita.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">sms</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Amanat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan cerita.</p>
                        </div>
                    </div>
                </div>

                <!-- Dalam Pementasan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">theaters</span>
                        DALAM PEMENTASAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3">YANG HARUS DIPERHATIKAN</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Ekspresi Wajah</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Gerak Tubuh</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Intonasi</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Volume Suara</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Penghayatan Karakter</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">Interaksi Pemain</span>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 7 — PARIBASAN ==================== -->
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
                            MATERI TUJUH • PERIBAHASA JAWA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Paribasan, Bebasan, dan Saloka
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PERIBAHASA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        Ketiganya merupakan <strong>ungkapan atau peribahasa</strong> dalam Bahasa Jawa, tetapi
                        memiliki karakter yang berbeda.
                    </p>
                </div>

                <!-- 3 Jenis -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">format_quote</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Paribasan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Ungkapan yang susunan katanya <strong>tetap</strong> dan memiliki makna tertentu.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CONTOH</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-1">
                                Alon-alon waton kelakon.
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant italic">
                                Melakukan sesuatu dengan perlahan tetapi tetap tercapai.
                            </p>
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">person_search</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bebasan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Ungkapan yang digunakan untuk <strong>menggambarkan keadaan, sifat, atau perilaku</strong>
                            seseorang secara kiasan.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">compare</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Saloka</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Ungkapan berupa <strong>pengibaratan atau perumpamaan</strong>, biasanya menggunakan
                            gambaran benda, hewan, atau sesuatu yang mewakili sifat seseorang.
                        </p>
                    </div>
                </div>

                <!-- Perbedaan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        CARA MEMBEDAKAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Paribasan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ungkapan tetap</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Bebasan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggambarkan sifat/keadaan</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Saloka</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengibaratan/perumpamaan</p>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Ketiganya harus digunakan sesuai <strong>konteks kalimat</strong> dan <strong>situasi percakapan</strong>.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 8 — TEKS DESKRIPSI / NARASI ==================== -->
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
                            MATERI DELAPAN • TEKS BUDAYA LOKAL
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Teks Deskripsi / Narasi Budaya Lokal
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    TEKS
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <!-- Teks Deskripsi -->
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">visibility</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teks Deskripsi</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Bertujuan <strong>menggambarkan suatu objek secara jelas &amp; terperinci</strong>,
                            sehingga pembaca seolah-olah dapat melihat atau merasakan objek tersebut.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Objek</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant mb-3">
                            <span class="text-primary font-bold">›</span> Tempat bersejarah<br>
                            <span class="text-primary font-bold">›</span> Tradisi<br>
                            <span class="text-primary font-bold">›</span> Upacara adat<br>
                            <span class="text-primary font-bold">›</span> Bangunan budaya<br>
                            <span class="text-primary font-bold">›</span> Kesenian daerah
                        </div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Ciri</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Menjelaskan objek secara rinci<br>
                            <span class="text-primary font-bold">›</span> Banyak kata sifat<br>
                            <span class="text-primary font-bold">›</span> Menggambarkan ciri khusus objek
                        </div>
                    </div>

                    <!-- Teks Narasi -->
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">auto_stories</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teks Narasi</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Teks yang <strong>menceritakan rangkaian peristiwa secara berurutan</strong>.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Biasanya Memiliki</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant mb-3">
                            <span class="text-primary font-bold">›</span> Tokoh<br>
                            <span class="text-primary font-bold">›</span> Peristiwa<br>
                            <span class="text-primary font-bold">›</span> Waktu<br>
                            <span class="text-primary font-bold">›</span> Tempat<br>
                            <span class="text-primary font-bold">›</span> Urutan kejadian
                        </div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">Contoh Topik</div>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Sejarah tradisi<br>
                            <span class="text-primary font-bold">›</span> Proses upacara adat<br>
                            <span class="text-primary font-bold">›</span> Cerita tempat bersejarah
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
