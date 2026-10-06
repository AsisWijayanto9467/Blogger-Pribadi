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
                <span class="text-on-surface font-bold uppercase">B4 — PIPAS</span>
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
                        PIPAS
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">IPA &amp; IPS</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Projek Ilmu Pengetahuan Alam &amp; Sosial — Memahami alam, lingkungan, dan masyarakat
                        melalui pendekatan interdisipliner dan kontekstual.
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
                            BAB (IPA)</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
                            BAB (IPS)</span>
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
                        🟦 SEMESTER 1 / GANJIL — IPA
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

        <!-- ==================== BAB 1 — MAKHLUK HIDUP & LINGKUNGAN ==================== -->
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
                            BAB SATU • BIOLOGI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Makhluk Hidup dan Lingkungan
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    EKOSISTEM
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Ekosistem -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">eco</span>
                        1. EKOSISTEM
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Ekosistem</strong> adalah hubungan timbal balik antara makhluk hidup dengan
                            lingkungan di sekitarnya.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">pets</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Komponen Biotik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Komponen yang hidup.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Manusia<br>
                                <span class="text-primary font-bold">›</span> Hewan<br>
                                <span class="text-primary font-bold">›</span> Tumbuhan<br>
                                <span class="text-primary font-bold">›</span> Bakteri<br>
                                <span class="text-primary font-bold">›</span> Jamur
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">water_drop</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Komponen Abiotik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Komponen tidak hidup.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Air<br>
                                <span class="text-primary font-bold">›</span> Tanah<br>
                                <span class="text-primary font-bold">›</span> Udara<br>
                                <span class="text-primary font-bold">›</span> Cahaya Matahari<br>
                                <span class="text-primary font-bold">›</span> Suhu<br>
                                <span class="text-primary font-bold">›</span> Kelembapan<br>
                                <span class="text-primary font-bold">›</span> Mineral
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">MUDAH DIINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Biotik = Hidup • Abiotik = Tidak Hidup
                        </div>
                    </div>
                </div>

                <!-- 2. Simbiosis -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">diversity_1</span>
                        2. INTERAKSI ANTAR-MAKHLUK HIDUP — SIMBIOSIS
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Jenis</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Pengertian</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mutualisme</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Keduanya diuntungkan</td>
                                    <td class="p-space-md">Lebah &amp; bunga</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Komensalisme</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Satu untung, yang lain tidak dirugikan</td>
                                    <td class="p-space-md">Anggrek pada pohon</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Parasitisme</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Satu untung, satu dirugikan</td>
                                    <td class="p-space-md">Benalu &amp; pohon</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Predasi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pemangsa memakan mangsa.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kompetisi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Persaingan mendapatkan sumber daya.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Rantai Makanan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">link</span>
                        3. RANTAI &amp; JARING-JARING MAKANAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            <strong>Rantai makanan</strong> adalah urutan perpindahan energi melalui proses makan dan dimakan.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            Rumput → Belalang → Katak → Ular → Elang
                        </div>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERAN ORGANISME</div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Produsen</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat makanan sendiri. Contoh: tumbuhan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Konsumen</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memperoleh energi dengan memakan organisme lain.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pengurai / Dekomposer</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menguraikan sisa makhluk hidup. Contoh: bakteri &amp; jamur.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">account_tree</span>
                            TINGKAT TROFIK (dari bawah ke atas, energi makin sedikit)
                        </div>
                        <div class="flex flex-col gap-1 font-code-inline text-code-inline">
                            <div class="p-2 bg-primary-container border-[2px] border-on-background text-center font-bold text-on-surface">🦅 ELANG — Konsumen Puncak</div>
                            <div class="p-2 bg-secondary-container border-[2px] border-on-background text-center font-bold text-on-surface">🐍 ULAR — Konsumen Tersier</div>
                            <div class="p-2 bg-tertiary-fixed border-[2px] border-on-background text-center font-bold text-on-surface">🐸 KATAK — Konsumen Sekunder</div>
                            <div class="p-2 bg-surface-container-low border-[2px] border-on-background text-center font-bold text-on-surface">🦗 BELALANG — Konsumen Primer</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-bold text-on-surface">🌱 RUMPUT — Produsen</div>
                        </div>
                    </div>
                </div>

                <!-- 4. Keseimbangan Ekosistem -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">balance</span>
                        4. KESEIMBANGAN EKOSISTEM
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Ekosistem seimbang apabila hubungan antara komponen <strong>biotik</strong> dan
                            <strong>abiotik</strong> berjalan dengan baik.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">warning</span>
                                GANGGUAN
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Pencemaran<br>
                                <span class="text-primary font-bold">›</span> Penebangan hutan<br>
                                <span class="text-primary font-bold">›</span> Perburuan liar<br>
                                <span class="text-primary font-bold">›</span> Perubahan iklim
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">healing</span>
                                CARA MENJAGA
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Reboisasi<br>
                                <span class="text-primary font-bold">›</span> Mengurangi pencemaran<br>
                                <span class="text-primary font-bold">›</span> Menjaga keanekaragaman hayati<br>
                                <span class="text-primary font-bold">›</span> Menggunakan sumber daya secara bijak
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — ZAT & PERUBAHANNYA ==================== -->
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
                            BAB DUA • KIMIA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Zat dan Perubahannya
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KIMIA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Klasifikasi Materi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">category</span>
                        1. KLASIFIKASI MATERI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Materi</strong> adalah segala sesuatu yang mempunyai massa dan menempati ruang.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">circle</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Unsur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Zat yang tersusun dari satu jenis atom.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Fe = Besi<br>
                                <span class="text-primary font-bold">›</span> Au = Emas<br>
                                <span class="text-primary font-bold">›</span> O₂ = Oksigen
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">link</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Senyawa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Zat tersusun dari 2+ unsur yang bergabung secara kimia.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> H₂O = Air<br>
                                <span class="text-primary font-bold">›</span> CO₂ = Karbon dioksida<br>
                                <span class="text-primary font-bold">›</span> NaCl = Garam
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">scatter_plot</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Campuran</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Gabungan beberapa zat yang tidak bergabung secara kimia.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Air garam<br>
                                <span class="text-primary font-bold">›</span> Udara<br>
                                <span class="text-primary font-bold">›</span> Pasir &amp; air
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Sifat Fisik & Kimia -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">visibility</span>
                        2. SIFAT FISIK &amp; KIMIA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sifat Fisik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Dapat diamati tanpa menghasilkan zat baru.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Warna<br>
                                <span class="text-primary font-bold">›</span> Bau<br>
                                <span class="text-primary font-bold">›</span> Massa<br>
                                <span class="text-primary font-bold">›</span> Titik didih<br>
                                <span class="text-primary font-bold">›</span> Titik leleh<br>
                                <span class="text-primary font-bold">›</span> Wujud<br>
                                <span class="text-primary font-bold">›</span> Kelarutan
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sifat Kimia</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kemampuan zat mengalami reaksi kimia.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mudah terbakar<br>
                                <span class="text-primary font-bold">›</span> Mudah berkarat<br>
                                <span class="text-primary font-bold">›</span> Mudah bereaksi dengan asam
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Perubahan Fisika vs Kimia -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sync_alt</span>
                        3. PERUBAHAN FISIKA vs KIMIA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">ac_unit</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perubahan Fisika</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><strong>Tidak</strong> menghasilkan zat baru.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Es mencair<br>
                                <span class="text-primary font-bold">›</span> Air membeku<br>
                                <span class="text-primary font-bold">›</span> Kertas dipotong<br>
                                <span class="text-primary font-bold">›</span> Gula larut dalam air
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">local_fire_department</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perubahan Kimia</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><strong>Menghasilkan</strong> zat baru.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Kayu terbakar<br>
                                <span class="text-primary font-bold">›</span> Besi berkarat<br>
                                <span class="text-primary font-bold">›</span> Makanan membusuk<br>
                                <span class="text-primary font-bold">›</span> Telur dimasak
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">MUDAH DIINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Fisika = Zat Baru ❌ • Kimia = Zat Baru ✅
                        </div>
                    </div>
                </div>

                <!-- 4. Pemisahan Campuran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">filter_alt</span>
                        4. PEMISAHAN CAMPURAN
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Metode</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Prinsip</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Filtrasi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Penyaringan berdasarkan ukuran partikel</td>
                                    <td class="p-space-md">Pasir + air</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Sentrifugasi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Pemisahan dengan putaran cepat</td>
                                    <td class="p-space-md">Komponen darah</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Kromatografi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Perbedaan kecepatan perpindahan zat</td>
                                    <td class="p-space-md">Memisahkan warna tinta</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Distilasi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Perbedaan titik didih</td>
                                    <td class="p-space-md">Air &amp; alkohol</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Evaporasi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Penguapan</td>
                                    <td class="p-space-md">Garam dari air laut</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Magnetisasi</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Menggunakan magnet</td>
                                    <td class="p-space-md">Besi + pasir</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — ENERGI & PERUBAHANNYA ==================== -->
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
                            BAB TIGA • FISIKA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Energi dan Perubahannya
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    FISIKA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian Energi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">bolt</span>
                        1. PENGERTIAN ENERGI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Energi</strong> adalah kemampuan untuk melakukan usaha atau menyebabkan perubahan.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BENTUK ENERGI</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kinetik</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Potensial</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Panas</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Cahaya</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Listrik</div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kimia</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bunyi</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Mekanik</div>
                    </div>
                </div>

                <!-- 2. Hukum Kekekalan Energi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">gavel</span>
                        2. HUKUM KEKEKALAN ENERGI
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Energi <strong>tidak dapat diciptakan atau dimusnahkan</strong>, tetapi dapat berubah
                            dari satu bentuk ke bentuk lainnya.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            Energi Listrik → Energi Cahaya + Panas (pada lampu)
                        </div>
                    </div>
                </div>

                <!-- 3. Rumus-Rumus -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        3. RUMUS PENTING
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <!-- Usaha -->
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">fitness_center</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Usaha (W)</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface mb-2">
                                W = F × s
                            </div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">
                                <strong>F</strong> = gaya (N)<br>
                                <strong>s</strong> = perpindahan (m)
                            </div>
                        </div>

                        <!-- Energi Kinetik -->
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sprint</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Energi Kinetik</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface mb-2">
                                Ek = ½ m v²
                            </div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Energi karena gerak.<br>
                                <strong>m</strong> = massa (kg)<br>
                                <strong>v</strong> = kecepatan (m/s)
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> m=5kg, v=6m/s → Ek = 90 J
                            </div>
                        </div>

                        <!-- Energi Potensial -->
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">height</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Energi Potensial</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface mb-2">
                                Ep = m g h
                            </div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Energi karena posisi/ketinggian.<br>
                                <strong>m</strong> = massa (kg)<br>
                                <strong>g</strong> = gravitasi (9,8 m/s²)<br>
                                <strong>h</strong> = ketinggian (m)
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> m=3,4kg, h=9m → Ep ≈ 300 J
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Sumber Energi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">power</span>
                        4. SUMBER ENERGI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">autorenew</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Terbarukan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Dapat diperbarui secara alami.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Matahari<br>
                                <span class="text-primary font-bold">›</span> Angin<br>
                                <span class="text-primary font-bold">›</span> Air<br>
                                <span class="text-primary font-bold">›</span> Panas bumi<br>
                                <span class="text-primary font-bold">›</span> Biomassa
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">hourglass_bottom</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tidak Terbarukan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Jumlahnya terbatas, butuh waktu sangat lama terbentuk.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Minyak bumi<br>
                                <span class="text-primary font-bold">›</span> Batu bara<br>
                                <span class="text-primary font-bold">›</span> Gas alam
                            </div>
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
                        🟢 SEMESTER 2 / GENAP — IPS
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

        <!-- ==================== BAB 4 — BUMI & ANTARIKSA ==================== -->
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
                            BAB EMPAT • GEOGRAFI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Bumi dan Antariksa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    GEOGRAFI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Struktur Bumi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        1. STRUKTUR BUMI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">terrain</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Litosfer</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Lapisan batuan terluar/kerak bumi dan bagian atas mantel.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">water</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hidrosfer</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Seluruh air di bumi.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Laut, sungai, danau<br>
                                <span class="text-primary font-bold">›</span> Air tanah, es
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">air</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Atmosfer</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Lapisan gas yang menyelimuti bumi. Melindungi bumi &amp; menjaga kondisi yang mendukung kehidupan.</p>
                        </div>
                    </div>
                </div>

                <!-- 2. Mitigasi Bencana -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">crisis_alert</span>
                        2. MITIGASI BENCANA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Mitigasi</strong> adalah upaya mengurangi risiko dan dampak bencana.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🌋 Gempa Bumi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Berlindung di tempat aman<br>
                                <span class="text-primary font-bold">›</span> Menjauh dari benda yang dapat jatuh<br>
                                <span class="text-primary font-bold">›</span> Ikuti informasi resmi setelah gempa
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🌋 Gunung Meletus</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Ikuti arahan evakuasi<br>
                                <span class="text-primary font-bold">›</span> Menjauhi daerah berbahaya<br>
                                <span class="text-primary font-bold">›</span> Gunakan perlindungan dari abu
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🌊 Tsunami</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Segera ke tempat tinggi<br>
                                <span class="text-primary font-bold">›</span> Ikuti jalur evakuasi<br>
                                <span class="text-primary font-bold">›</span> Tidak kembali sebelum dinyatakan aman
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Tata Surya -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rocket_launch</span>
                        3. TATA SURYA
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Tata surya terdiri dari <strong>Matahari</strong> dan benda-benda langit yang mengorbitnya.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">URUTAN PLANET</div>
                    <div class="flex flex-wrap gap-2 mb-space-md">
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-primary-container border-[2px] border-on-background font-bold">Merkurius</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-secondary-container border-[2px] border-on-background font-bold">Venus</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-tertiary-fixed border-[2px] border-on-background font-bold">Bumi</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-error-container border-[2px] border-on-background font-bold">Mars</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background font-bold">Jupiter</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background font-bold">Saturnus</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background font-bold">Uranus</span>
                        <span class="font-label-md text-label-md uppercase px-3 py-2 bg-surface-container-low border-[2px] border-on-background font-bold">Neptunus</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">rotate_right</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Rotasi Bumi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Bumi berputar pada porosnya.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Siang dan malam<br>
                                <span class="text-primary font-bold">›</span> Perbedaan waktu
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">all_inclusive</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Revolusi Bumi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Bumi mengelilingi Matahari.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Perubahan posisi semu Matahari<br>
                                <span class="text-primary font-bold">›</span> Perubahan musim
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Bulan</strong> mengorbit Bumi dan mengalami perubahan fase yang terlihat dari Bumi.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — KERUANGAN & WAKTU ==================== -->
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
                            BAB LIMA • GEOGRAFI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Keruangan, Konektivitas Antar-Ruang, dan Waktu
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KERUANGAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">place</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Konsep Ruang</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tempat berlangsungnya aktivitas manusia dan kehidupan.</p>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Rumah, sekolah<br>
                            <span class="text-primary font-bold">›</span> Pasar, kota, desa
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sync_alt</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Interaksi Antar-Ruang</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Ketika satu wilayah berhubungan dengan wilayah lain.</p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                            <strong class="text-primary">Contoh:</strong> Desa sayuran → kota, kota barang/jasa → desa
                        </div>
                    </div>
                </div>

                <!-- Letak Indonesia -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">flag</span>
                        LETAK INDONESIA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">public</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Astronomis</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
                                6°LU – 11°LS<br>
                                95°BT – 141°BT
                            </div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">
                                <span class="text-primary font-bold">›</span> Beriklim tropis<br>
                                <span class="text-primary font-bold">›</span> Pembagian waktu
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">map</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Geografis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Indonesia berada di antara:</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Benua Asia &amp; Australia<br>
                                <span class="text-primary font-bold">›</span> Samudra Hindia &amp; Pasifik
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">landscape</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Geologis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Pertemuan lempeng tektonik.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Banyak gunung api<br>
                                <span class="text-primary font-bold">›</span> Sumber daya mineral<br>
                                <span class="text-primary font-bold">›</span> Risiko gempa tinggi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengaruh Ruang & Waktu -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        PENGARUH RUANG &amp; WAKTU
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Pekerjaan</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Budaya</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Transportasi</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Perdagangan</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Komunikasi</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 6 — INTERAKSI & DINAMIKA SOSIAL ==================== -->
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
                            BAB ENAM • SOSIOLOGI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Interaksi, Komunikasi, Sosialisasi, dan Dinamika Sosial
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SOSIOLOGI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Interaksi Sosial -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        1. INTERAKSI SOSIAL
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>Interaksi sosial</strong> adalah hubungan timbal balik antara individu atau kelompok.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            <strong class="text-primary">Syarat utama:</strong> Kontak Sosial + Komunikasi
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">handshake</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Asosiatif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengarah pada kerja sama atau persatuan.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Kerja sama<br>
                                <span class="text-primary font-bold">›</span> Akomodasi (penyelesaian konflik)<br>
                                <span class="text-primary font-bold">›</span> Asimilasi (pembauran budaya)<br>
                                <span class="text-primary font-bold">›</span> Akulturasi (unsur budaya baru tanpa menghilangkan budaya lama)
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">swords</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Disosiatif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengarah pada persaingan atau konflik.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Kompetisi (persaingan)<br>
                                <span class="text-primary font-bold">›</span> Kontravensi (penolakan terselubung)<br>
                                <span class="text-primary font-bold">›</span> Konflik (pertentangan terbuka)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Sosialisasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">school</span>
                        2. SOSIALISASI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Sosialisasi</strong> adalah proses seseorang mempelajari nilai, norma, dan
                            perilaku yang berlaku dalam masyarakat.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tujuan</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Memahami aturan<br>
                                <span class="text-primary font-bold">›</span> Berinteraksi dengan orang lain<br>
                                <span class="text-primary font-bold">›</span> Membentuk kepribadian<br>
                                <span class="text-primary font-bold">›</span> Menjalankan peran sosial
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Agen Sosialisasi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Keluarga<br>
                                <span class="text-primary font-bold">›</span> Sekolah<br>
                                <span class="text-primary font-bold">›</span> Teman sebaya<br>
                                <span class="text-primary font-bold">›</span> Masyarakat<br>
                                <span class="text-primary font-bold">›</span> Media
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Lembaga Sosial -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_balance</span>
                        3. LEMBAGA SOSIAL
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Lembaga sosial</strong> adalah sistem norma atau aturan yang dibentuk untuk
                            memenuhi kebutuhan tertentu dalam masyarakat.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Keluarga</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Pendidikan</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Agama</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Ekonomi</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Politik</div>
                    </div>
                </div>

                <!-- 4. Dinamika Sosial -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">swap_horiz</span>
                        4. DINAMIKA SOSIAL
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Dinamika sosial</strong> adalah perubahan yang terjadi dalam kehidupan masyarakat.
                        </p>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PENYEBAB</div>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-2 font-code-inline text-code-inline text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Perkembangan Teknologi</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Perubahan Ekonomi</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Perubahan Budaya</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Pertambahan Penduduk</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">Perubahan Lingkungan</div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Contoh:</strong> Internet mengubah cara masyarakat berkomunikasi, belajar, bekerja,
                            dan berbelanja.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 7 — PERILAKU EKONOMI ==================== -->
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
                            BAB TUJUH • EKONOMI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Perilaku Ekonomi dan Kesejahteraan
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    EKONOMI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Kebutuhan Manusia -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">shopping_cart</span>
                        1. KEBUTUHAN MANUSIA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Kebutuhan</strong> adalah sesuatu yang diperlukan manusia untuk menjalani kehidupan.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BERDASARKAN TINGKAT KEPENTINGAN</div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Primer</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kebutuhan pokok: makanan, pakaian, tempat tinggal.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sekunder</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kebutuhan setelah primer terpenuhi.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tersier</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kebutuhan untuk kemewahan/prestise.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Penting:</strong> Kebutuhan manusia pada dasarnya <strong>tidak terbatas</strong>,
                            sedangkan sumber daya untuk memenuhinya <strong>terbatas</strong>.
                        </p>
                    </div>
                </div>

                <!-- 2. Kelangkaan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">warning</span>
                        2. KELANGKAAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Kelangkaan</strong> terjadi ketika sumber daya yang tersedia tidak cukup untuk
                            memenuhi seluruh kebutuhan manusia.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PENYEBAB</div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sumber Daya Terbatas</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kebutuhan Meningkat</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pertumbuhan Penduduk</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Distribusi Tidak Merata</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Bencana</div>
                        </div>
                    </div>
                </div>

                <!-- 3. Biaya Peluang -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        3. BIAYA PELUANG (OPPORTUNITY COST)
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            <strong>Biaya peluang</strong> adalah nilai dari <strong>pilihan terbaik yang dikorbankan</strong>
                            ketika memilih suatu alternatif.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">Contoh:</strong><br>
                            Kamu punya waktu 2 jam dan memilih belajar daripada bermain game.<br>
                            Biaya peluangnya = kesempatan bermain game yang dikorbankan.
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Catatan:</strong> Biaya peluang <strong>bukan semua pilihan</strong> yang tidak
                            dipilih, tetapi <strong>alternatif terbaik</strong> yang dikorbankan.
                        </p>
                    </div>
                </div>

                <!-- 4. Kegiatan Ekonomi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sync_alt</span>
                        4. KEGIATAN EKONOMI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">factory</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Produksi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghasilkan barang atau jasa.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Pabrik membuat komputer.
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">local_shipping</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Distribusi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menyalurkan barang/jasa dari produsen ke konsumen.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Distributor kirim laptop ke toko.
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shopping_bag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Konsumsi</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menggunakan barang/jasa untuk memenuhi kebutuhan.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Siswa menggunakan laptop untuk belajar.
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Produksi → Distribusi → Konsumsi
                        </div>
                    </div>
                </div>

                <!-- 5. Literasi Finansial -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">savings</span>
                        5. LITERASI FINANSIAL
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Literasi finansial</strong> adalah kemampuan memahami dan mengelola keuangan
                            dengan baik.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hal yang Perlu Dipahami</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Membedakan kebutuhan &amp; keinginan<br>
                                <span class="text-primary font-bold">›</span> Membuat anggaran<br>
                                <span class="text-primary font-bold">›</span> Menabung<br>
                                <span class="text-primary font-bold">›</span> Memahami risiko<br>
                                <span class="text-primary font-bold">›</span> Menghindari utang konsumtif<br>
                                <span class="text-primary font-bold">›</span> Memahami produk keuangan
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Perbankan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                <strong>Bank</strong> adalah lembaga keuangan yang menghimpun dana masyarakat dan
                                menyalurkannya kembali dalam bentuk layanan/produk keuangan.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Tabungan<br>
                                <span class="text-primary font-bold">›</span> Transfer<br>
                                <span class="text-primary font-bold">›</span> Pembayaran<br>
                                <span class="text-primary font-bold">›</span> Pinjaman/kredit
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3">PRINSIP PENGELOLAAN KEUANGAN SEDERHANA</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                            Pendapatan → Kebutuhan Utama → Tabungan → Kebutuhan Lainnya
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant text-center">
                            Buat anggaran dan pastikan pengeluaran <strong>tidak melebihi</strong> kemampuan.
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul DDPK PPLG
                        dan mata pelajaran kejuruan lainnya.
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
