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
                <span class="text-on-surface font-bold uppercase">A3 — BAHASA INDONESIA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">INDONESIA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mengasah literasi tingkat lanjut melalui teks argumentasi, persuasi, berita,
                        cerpen sejarah, dan resensi dengan penalaran kritis.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">3
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">FOKUS</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">Argumentasi &amp; Berita</span>
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
                    MULAI BAB 1
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

        <!-- ==================== BAB 1 — PRODUK PANGAN LOKAL ==================== -->
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
                            BAB SATU • ARGUMENTASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Mengenalkan &amp; Mempromosikan Produk Pangan Lokal
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ARGUMENTASI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Teks Argumentasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        1. TEKS ARGUMENTASI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Teks argumentasi</strong> adalah teks yang berisi pendapat atau gagasan penulis
                            yang disertai alasan, fakta, dan bukti untuk <strong>meyakinkan pembaca</strong>.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">STRUKTUR TEKS ARGUMENTASI</div>
                    <div class="flex flex-col gap-2 mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pendahuluan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memperkenalkan masalah/topik &amp; menyampaikan pendapat utama (tesis).</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tubuh Argumen</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi alasan yang mendukung pendapat, diperkuat fakta, data, contoh, atau bukti.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kesimpulan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menegaskan kembali pendapat, dapat berisi saran atau penegasan akhir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ciri-Ciri Argumentasi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Ada pendapat penulis<br>
                                <span class="text-primary font-bold">›</span> Menggunakan alasan logis<br>
                                <span class="text-primary font-bold">›</span> Didukung fakta/data<br>
                                <span class="text-primary font-bold">›</span> Bertujuan meyakinkan pembaca
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Contoh</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant italic">
                                "Pangan lokal perlu dikembangkan karena Indonesia memiliki banyak sumber pangan
                                selain beras, seperti jagung, singkong, sagu, dan ubi."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2. Fakta & Opini -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fact_check</span>
                        2. FAKTA &amp; OPINI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">verified</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">FAKTA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Informasi yang benar-benar terjadi dan dapat dibuktikan kebenarannya.
                            </p>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CIRI</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-2">
                                <span class="text-primary font-bold">›</span> Berdasarkan kenyataan<br>
                                <span class="text-primary font-bold">›</span> Dapat diverifikasi<br>
                                <span class="text-primary font-bold">›</span> Sering disertai data, angka, waktu
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                                "Indonesia memiliki berbagai jenis pangan lokal seperti singkong, jagung, dan sagu."
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">psychology</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">OPINI</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Pendapat, penilaian, atau gagasan seseorang yang belum tentu benar dan bersifat subjektif.
                            </p>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CIRI</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-2">
                                <span class="text-primary font-bold">›</span> Mengandung pendapat<br>
                                <span class="text-primary font-bold">›</span> Bersifat subjektif<br>
                                <span class="text-primary font-bold">›</span> "menurut saya", "sebaiknya", "mungkin"
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                                "Menurut saya, singkong adalah makanan lokal yang paling lezat."
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">help</span>
                            CARA MEMBEDAKAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Tanyakan: <strong>"Apakah pernyataan ini bisa dibuktikan?"</strong><br>
                            Jika <strong>bisa</strong> → Fakta • Jika <strong>pendapat/penilaian</strong> → Opini
                        </p>
                    </div>
                </div>

                <!-- 3. Ide Pokok & Pendukung -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">lightbulb</span>
                        3. IDE POKOK &amp; IDE PENDUKUNG
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2 italic">
                            "Pangan lokal memiliki banyak manfaat bagi masyarakat. Pangan lokal dapat membantu mengurangi
                            ketergantungan pada satu jenis bahan makanan. Selain itu, pengembangan pangan lokal dapat
                            meningkatkan pendapatan petani."
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">IDE POKOK</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Gagasan utama yang menjadi inti pembahasan sebuah paragraf.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                → Pangan lokal memiliki banyak manfaat bagi masyarakat.
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">IDE PENDUKUNG</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Gagasan yang menjelaskan, memperkuat, atau memberi contoh terhadap ide pokok.</p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                → Mengurangi ketergantungan pangan<br>
                                → Meningkatkan pendapatan petani
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Teks Persuasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">campaign</span>
                        4. TEKS PERSUASI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Teks persuasi</strong> adalah teks yang bertujuan <strong>mengajak atau membujuk
                            pembaca</strong> agar melakukan sesuatu.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ciri-Ciri</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mengandung ajakan<br>
                                <span class="text-primary font-bold">›</span> Memberikan alasan/argumen<br>
                                <span class="text-primary font-bold">›</span> Bahasa yang meyakinkan<br>
                                <span class="text-primary font-bold">›</span> Kata: ayo, mari, hendaknya, sebaiknya, jangan
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Struktur Sederhana</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">
                                Pengenalan Masalah → Argumen → Ajakan → Penegasan
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Poster & Infografis -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">image</span>
                        5. POSTER &amp; INFOGRAFIS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">campaign</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Poster</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Media visual yang menggabungkan gambar dan tulisan singkat untuk informasi atau ajakan.
                            </p>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">POSTER PERSUASI HARUS</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Menarik perhatian<br>
                                <span class="text-primary font-bold">›</span> Kalimat singkat<br>
                                <span class="text-primary font-bold">›</span> Ajakan jelas<br>
                                <span class="text-primary font-bold">›</span> Gambar sesuai
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">bar_chart</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Infografis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Penyajian informasi menggunakan kombinasi teks, data, gambar, ikon, dan grafik
                                agar mudah dipahami.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — BERITA INOVASI ==================== -->
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
                            BAB DUA • BERITA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menyajikan Berita Inovasi yang Menghibur
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BERITA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian Berita -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">newspaper</span>
                        1. PENGERTIAN BERITA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Berita</strong> adalah informasi mengenai suatu peristiwa yang
                            <strong>aktual, faktual, penting, dan menarik</strong> untuk diketahui masyarakat.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CIRI BERITA YANG BAIK</div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Aktual</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Baru/terkini</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Faktual</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berdasarkan fakta</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Akurat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Benar &amp; terpercaya</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Objektif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tidak memutarbalikkan</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Menarik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Relevan bagi pembaca</p>
                        </div>
                    </div>
                </div>

                <!-- 2. ADIKSIMBA -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">question_mark</span>
                        2. UNSUR BERITA — ADIKSIMBA
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>ADIKSIMBA</strong> merupakan cara mudah mengingat unsur berita. Dalam istilah
                            jurnalistik internasional, dikenal sebagai <strong>5W + 1H</strong>.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Unsur</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Pertanyaan</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">5W+1H</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">A — Apa</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Apa yang terjadi?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">What</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Di — Di mana</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Di mana peristiwa terjadi?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">Where</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">K — Kapan</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Kapan terjadi?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">When</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Si — Siapa</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Siapa yang terlibat?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">Who</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">M — Mengapa</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Mengapa peristiwa terjadi?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">Why</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Ba — Bagaimana</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Bagaimana peristiwa berlangsung?</td>
                                    <td class="p-space-md font-code-inline text-code-inline">How</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. Struktur Berita -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">vertical_align_top</span>
                        3. STRUKTUR BERITA — PIRAMIDA TERBALIK
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Berita umumnya menggunakan <strong>piramida terbalik</strong>: informasi paling penting
                            diletakkan di bagian awal. Pembaca tetap memperoleh inti berita meskipun tidak membaca
                            sampai akhir.
                        </p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kepala Berita / Lead</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bagian pembuka berita, berisi informasi paling penting, menarik perhatian pembaca.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Leher Berita</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memberikan penjelasan tambahan dari informasi utama.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tubuh Berita</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi detail, fakta, kronologi, kutipan, &amp; informasi pendukung.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kaki Berita</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi informasi tambahan yang tingkat kepentingannya lebih rendah.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Menilai Berita -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fact_check</span>
                        4. MENILAI BERITA
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3">SAAT MEMBACA BERITA, PERHATIKAN</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Siapa sumber informasinya?
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Apakah berdasarkan fakta?
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Apakah tanggalnya masih relevan?
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Apakah ada data/bukti?
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Apakah judul sesuai isi?
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">?</span> Apakah menyesatkan?
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Jangan langsung percaya</strong> berita hanya karena <strong>viral</strong>.
                        </p>
                    </div>
                </div>

                <!-- 5. Vlog Berita -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">videocam</span>
                        5. BERITA DALAM BENTUK VLOG
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Vlog</strong> (video blog) adalah penyampaian informasi dalam bentuk video.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Agar Vlog Berita Menarik</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Informasi harus benar<br>
                                <span class="text-primary font-bold">›</span> Bahasa jelas<br>
                                <span class="text-primary font-bold">›</span> Suara terdengar<br>
                                <span class="text-primary font-bold">›</span> Visual sesuai berita<br>
                                <span class="text-primary font-bold">›</span> Susun teratur<br>
                                <span class="text-primary font-bold">›</span> Jangan ubah fakta
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Struktur Sederhana</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                Pembukaan → Penyampaian Berita → Penjelasan → Penutup
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — CERPEN SEJARAH ==================== -->
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
                            BAB TIGA • CERPEN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menggali Nilai Sejarah Bangsa Lewat Cerita Pendek
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    CERPEN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian Cerpen -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Cerpen</strong> (cerita pendek) adalah karya sastra berbentuk prosa yang menceritakan
                        suatu peristiwa dengan jumlah tokoh dan konflik yang relatif terbatas.
                        <strong>Cerpen berlatar sejarah</strong> dapat menggunakan peristiwa atau suasana sejarah
                        sebagai latar cerita.
                    </p>
                </div>

                <!-- 2. Unsur Intrinsik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">view_week</span>
                        2. UNSUR INTRINSIK CERPEN
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Unsur intrinsik</strong> adalah unsur yang membangun cerita dari
                            <strong>dalam karya itu sendiri</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <!-- A. Tema -->
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">A</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tema</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Gagasan utama yang menjadi dasar cerita.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Perjuangan, persahabatan<br>
                                › Nasionalisme, pengorbanan
                            </div>
                        </div>

                        <!-- B. Tokoh -->
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">B</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tokoh</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Pelaku yang terdapat dalam cerita.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Tokoh utama — paling banyak berperan<br>
                                › Tokoh tambahan — mendukung cerita
                            </div>
                        </div>

                        <!-- C. Penokohan -->
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">C</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Penokohan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Cara pengarang menggambarkan sifat/karakter tokoh.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Jujur, berani, pantang menyerah<br>
                                › Egois, peduli<br>
                                › Ditunjukkan via perkataan, tindakan, pikiran
                            </div>
                        </div>

                        <!-- D. Alur -->
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">D</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Alur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Urutan peristiwa dalam cerita.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Alur maju — awal ke akhir<br>
                                › Alur mundur — kilas balik<br>
                                › Alur campuran — gabungan
                            </div>
                        </div>

                        <!-- E. Latar -->
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">E</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Latar</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Keterangan tempat, waktu, suasana.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Latar tempat<br>
                                › Latar waktu<br>
                                › Latar suasana
                            </div>
                        </div>

                        <!-- F. Sudut Pandang -->
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">F</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sudut Pandang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">Posisi pengarang menceritakan.</p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Orang pertama — aku/saya<br>
                                › Orang ketiga — dia/mereka/nama
                            </div>
                        </div>

                        <!-- G. Amanat -->
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] md:col-span-2">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">G</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Amanat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan atau pelajaran yang ingin disampaikan pengarang kepada pembaca.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Unsur Ekstrinsik -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        3. UNSUR EKSTRINSIK
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Unsur ekstrinsik</strong> adalah faktor dari <strong>luar karya</strong> yang
                            memengaruhi terciptanya cerita.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Latar Belakang Pengarang</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kondisi Sosial</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Nilai Budaya</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Nilai Agama</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kondisi Sejarah</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Nilai Moral</div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            PERBEDAAN
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                                <strong class="text-primary">Intrinsik:</strong> dari dalam cerita
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-body-sm text-body-sm text-on-surface">
                                <strong class="text-primary">Ekstrinsik:</strong> dari luar cerita
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Nilai Kehidupan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        4. NILAI KEHIDUPAN DALAM CERPEN
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Nilai</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Moral</td>
                                    <td class="p-space-md">Kejujuran, tanggung jawab</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Sosial</td>
                                    <td class="p-space-md">Tolong-menolong, kepedulian</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Budaya</td>
                                    <td class="p-space-md">Tradisi dan adat masyarakat</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Religius</td>
                                    <td class="p-space-md">Keimanan dan ketaatan</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Nasionalisme</td>
                                    <td class="p-space-md">Cinta tanah air dan perjuangan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Cerpen berlatar sejarah dapat membantu pembaca memahami <strong>perjuangan, kehidupan,
                            dan nilai-nilai masyarakat</strong> pada masa lalu.
                        </p>
                    </div>
                </div>

                <!-- 5. Resensi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rate_review</span>
                        5. RESENSI
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Resensi</strong> adalah tulisan yang berisi ulasan, penilaian, dan tanggapan
                            terhadap suatu karya.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tujuan Resensi</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Memberi informasi karya<br>
                                <span class="text-primary font-bold">›</span> Menilai kualitas karya<br>
                                <span class="text-primary font-bold">›</span> Tunjukkan kelebihan/kekurangan<br>
                                <span class="text-primary font-bold">›</span> Bantu pembaca memutuskan
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ciri Resensi yang Baik</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Objektif<br>
                                <span class="text-primary font-bold">›</span> Berdasarkan isi karya<br>
                                <span class="text-primary font-bold">›</span> Bahasa santun<br>
                                <span class="text-primary font-bold">›</span> Tidak hanya memuji/mencela<br>
                                <span class="text-primary font-bold">›</span> Berikan alasan
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">STRUKTUR UMUM RESENSI</div>
                        <div class="flex flex-col gap-2">
                            <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                                <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Identitas Karya</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Judul, penulis, penerbit, tahun terbit, jumlah halaman.</p>
                                </div>
                            </div>
                            <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                                <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Orientasi / Pengenalan</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Gambaran umum karya.</p>
                                </div>
                            </div>
                            <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                                <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sinopsis</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Ringkasan isi cerita.</p>
                                </div>
                            </div>
                            <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                                <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Analisis / Penilaian</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Kelebihan, kekurangan, unsur/kualitas karya.</p>
                                </div>
                            </div>
                            <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                                <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">05</span>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Evaluasi / Rekomendasi</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Kesimpulan dan penilaian akhir.</p>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul PJOK, Bahasa Jawa,
                        Matematika, dan mata pelajaran Kelas XI lainnya.
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
