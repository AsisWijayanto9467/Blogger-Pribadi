@extends("layouts.main")

@section("style")
<style>
    /* ============ SIDEBAR STICKY ============ */
    .toc-sidebar {
        position: sticky;
        top: 6rem;
        max-height: calc(100vh - 8rem);
        overflow-y: auto;
    }
    .toc-sidebar::-webkit-scrollbar { width: 6px; }
    .toc-sidebar::-webkit-scrollbar-thumb { background: #1c1b1b; border: 1px solid #1c1b1b; }
    .toc-sidebar::-webkit-scrollbar-track { background: #f0edec; }

    /* ============ ACTIVE TOC LINK ============ */
    .toc-link.active {
        background: #c9e6ff;
        color: #1c1b1b;
        font-weight: 700;
        transform: translateX(4px);
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ SCROLL BEHAVIOR ============ */
    html { scroll-behavior: smooth; scroll-padding-top: 6rem; }

    /* ============ ARABIC BLOCK ============ */
    .arabic-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 1rem 1.25rem;
        font-family: 'Amiri', 'Traditional Arabic', 'DM Sans', serif;
        font-size: 24px;
        line-height: 2;
        text-align: right;
        direction: rtl;
        box-shadow: 3px 3px 0px #1c1b1b;
        color: #1c1b1b;
    }

    /* ============ VERSE / DALIL BLOCK ============ */
    .verse-block {
        background: #1c1b1b;
        color: #c9e6ff;
        padding: 1.25rem 1.5rem;
        border: 3px solid #1c1b1b;
        box-shadow: 5px 5px 0px #57a8dd;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        line-height: 1.8;
        margin: 0.5rem 0;
        position: relative;
    }
    .verse-block::before {
        content: '☾';
        position: absolute;
        top: 4px;
        right: 10px;
        color: #57a8dd;
        font-size: 16px;
        font-weight: 900;
    }
    .verse-block .boxed {
        display: inline-block;
        border: 2px solid #ffd167;
        padding: 4px 12px;
        color: #ffd167;
        font-weight: 700;
    }

    /* ============ QUOTE BLOCK ============ */
    .quote-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 0.75rem 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        line-height: 1.7;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .quote-block::before {
        content: '❝';
        color: #57a8dd;
        font-size: 22px;
        font-weight: 900;
        margin-right: 6px;
        vertical-align: middle;
    }

    /* ============ DIAGRAM BOX ============ */
    .diagram-box {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        padding: 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        line-height: 1.6;
        overflow-x: auto;
        white-space: pre;
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ ACCORDION ============ */
    details.accordion-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    details.accordion-card[open] { box-shadow: 5px 5px 0px #57a8dd; }
    details.accordion-card summary {
        cursor: pointer;
        list-style: none;
        padding: 0.85rem 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.05em;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #c9e6ff;
        border-bottom: 2px solid transparent;
    }
    details.accordion-card[open] summary { border-bottom: 2px solid #1c1b1b; }
    details.accordion-card summary::-webkit-details-marker { display: none; }
    details.accordion-card summary::after {
        content: '+';
        font-size: 18px;
        font-weight: 900;
        transition: transform 0.2s;
    }
    details.accordion-card[open] summary::after { content: '−'; }

    /* ============ PROGRESS BAR ============ */
    #readingProgress {
        position: fixed;
        top: 80px;
        left: 0;
        height: 4px;
        background: #57a8dd;
        z-index: 60;
        width: 0%;
        transition: width 0.1s ease;
        border-right: 2px solid #1c1b1b;
    }

    /* ============ BADGE ============ */
    .badge-semester {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 3px 10px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        border: 2px solid #1c1b1b;
        background: #c9e6ff;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #ffd167; }
    .badge-semester.s3 { background: #ffdbc8; }
    .badge-semester.s4 { background: #a7f3a0; }
    .badge-semester.s5 { background: #ffb4ae; }

    /* ============ TABLE ============ */
    .brutal-table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #1c1b1b;
        font-size: 13px;
    }
    .brutal-table th {
        background: #1c1b1b;
        color: #f3f0ef;
        padding: 10px 12px;
        text-align: left;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border: 2px solid #1c1b1b;
    }
    .brutal-table td {
        padding: 10px 12px;
        border: 2px solid #1c1b1b;
        background: #ffffff;
        vertical-align: top;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
    }
    .brutal-table tr:nth-child(even) td { background: #f6f3f2; }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-tertiary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XII</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">A1 — Pendidikan Agama &amp; Budi Pekerti</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">A1</span>
                    <span class="badge-semester s2">UMUM</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">PAI</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Pendidikan Agama<br>dan Budi Pekerti
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>sabar dalam musibah</strong>, <strong>iman–islam–ihsan</strong>,
                    <strong>munafik &amp; keras hati</strong>, <strong>kewarisan Islam (mawaris)</strong>,
                    <strong>peradaban Islam</strong>, <strong>cinta tanah air &amp; moderasi beragama</strong>,
                    <strong>ilmu kalam</strong>, <strong>inovatif &amp; etika berorganisasi</strong>,
                    <strong>ijtihad</strong>, hingga <strong>peran organisasi Islam di Indonesia</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Bab</div>
                    <div class="font-headline-sm text-headline-sm font-bold">10 Bab</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~18 Jam</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== MAIN CONTENT + SIDEBAR ==================== --}}
<section class="w-full bg-surface">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

            {{-- ============ MAIN ARTICLE ============ --}}
            <div class="lg:col-span-9 space-y-space-xl">

                {{-- ===================================================== --}}
                {{-- SEMESTER 1 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-1" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">auto_stories</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Sabar, Iman, Akhlak, Waris &amp; Peradaban
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1: SABAR ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Sabar dalam Menghadapi Musibah &amp; Ujian</div>
                        </div>

                        {{-- A. Pengertian --}}
                        <h3 id="bab1-pengertian" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Musibah, Ujian, dan Bala'
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Ketiga istilah ini berkaitan dengan sesuatu yang dialami manusia, baik berupa kesulitan
                            maupun keadaan yang menguji dirinya.
                        </p>

                        <div class="space-y-space-sm mb-space-md">
                            <details class="accordion-card" open>
                                <summary>1. Musibah</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Sesuatu yang menimpa manusia dan dapat menimbulkan <strong>kesedihan, kesulitan,
                                        atau kerugian</strong>.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Contoh:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Kehilangan orang yang dicintai</li>
                                        <li>› Mengalami kecelakaan</li>
                                        <li>› Kehilangan harta</li>
                                        <li>› Terkena bencana alam</li>
                                        <li>› Mengalami kegagalan</li>
                                    </ul>
                                    <div class="quote-block">
                                        Musibah tidak selalu berarti hukuman. Musibah dapat menjadi <strong>ujian,
                                        peringatan, atau sarana meningkatkan keimanan</strong>.
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>2. Ujian</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Sesuatu yang diberikan Allah untuk menguji <strong>keimanan, kesabaran,
                                        kejujuran, dan ketakwaan</strong> seseorang.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Bentuk Ujian:</div>
                                    <div class="flex flex-wrap gap-1 mb-3">
                                        <span class="badge-semester">Kesulitan</span>
                                        <span class="badge-semester s2">Penyakit</span>
                                        <span class="badge-semester s3">Kekurangan harta</span>
                                        <span class="badge-semester s4">Kegagalan</span>
                                        <span class="badge-semester s5">Kenikmatan</span>
                                    </div>
                                    <div class="quote-block">
                                        Bukan hanya kesulitan yang menjadi ujian. <strong>Kekayaan, kepandaian,
                                        jabatan, dan kesuksesan</strong> juga dapat menjadi ujian.
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>3. Bala'</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Cobaan atau ujian yang diberikan Allah kepada manusia.
                                        Bala' dapat berupa sesuatu yang <strong>menyenangkan maupun tidak menyenangkan</strong>.
                                    </p>
                                </div>
                            </details>
                        </div>

                        {{-- B. Dalil --}}
                        <h3 id="bab1-dalil" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Dalil tentang Musibah
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Q.S. al-Baqarah/2:155–156</strong> menjelaskan bahwa manusia akan diuji dengan
                            berbagai macam keadaan: rasa takut, kelaparan, kekurangan harta, jiwa, dan hasil tanaman.
                        </p>

                        <div class="arabic-block mb-space-sm">
                            إِنَّا لِلَّهِ وَإِنَّا إِلَيْهِ رَاجِعُونَ
                        </div>

                        <div class="verse-block">
                            <span class="boxed">Inna lillahi wa inna ilaihi raji'un</span><br><br>
                            <em>"Sesungguhnya kami milik Allah dan kepada-Nya kami kembali."</em>
                        </div>

                        <div class="quote-block mt-space-md">
                            Maknanya: manusia dan segala sesuatu yang dimilikinya pada hakikatnya adalah <strong>milik Allah</strong>.
                        </div>

                        {{-- C. Tiga Macam Sabar --}}
                        <h3 id="bab1-sabar" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Tiga Macam Sabar
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Sabar dalam Ketaatan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Tetap melaksanakan perintah Allah walaupun terasa berat.
                                </p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Salat tepat waktu</li>
                                    <li>› Tetap belajar</li>
                                    <li>› Berpuasa</li>
                                    <li>› Rajin membaca Al-Qur'an</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Sabar Menjauhi Maksiat</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Menahan diri dari sesuatu yang dilarang Allah.
                                </p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tidak mencuri</li>
                                    <li>› Tidak berbohong</li>
                                    <li>› Tidak merundung</li>
                                    <li>› Menjaga pergaulan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">3. Sabar Menghadapi Takdir</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Menerima ketentuan Allah dengan tetap berusaha dan tidak berputus asa.
                                </p>
                                <div class="quote-block mt-2">
                                    Gagal lomba → evaluasi → coba lagi.
                                </div>
                            </div>
                        </div>

                        {{-- D. Tawakal --}}
                        <h3 id="bab1-tawakal" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Tawakal
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Menyerahkan hasil akhir kepada Allah <strong>setelah</strong> melakukan ikhtiar secara maksimal.
                        </p>

                        <div class="diagram-box mb-space-md">URUTAN TAWAKAL:
Ikhtiar  →  Doa  →  Tawakal  →  Menerima Hasil</div>

                        <div class="quote-block">
                            Tawakal <strong>bukan</strong> berarti pasrah tanpa usaha.
                            Contoh: siswa belajar sungguh-sungguh, berdoa, lalu menyerahkan hasilnya kepada Allah.
                        </div>

                        {{-- Inti Bab --}}
                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 1</div>
                            <p class="font-body-sm text-body-sm">
                                Musibah dan ujian harus dihadapi dengan <strong>sabar, ikhtiar, doa, dan tawakal</strong>.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 2: IMAN, ISLAM, IHSAN ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Indahnya Kehidupan Bermakna: Iman, Islam &amp; Ihsan</div>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Bab ini berkaitan dengan <strong>Hadis Jibril</strong> yang diriwayatkan oleh Muslim dari
                            Umar bin Khattab. Malaikat Jibril datang dalam bentuk manusia dan bertanya kepada
                            Rasulullah ﷺ mengenai Islam, Iman, Ihsan, dan hari kiamat.
                        </p>

                        <div class="space-y-space-sm mb-space-md">
                            <details class="accordion-card" open>
                                <summary>A. Iman</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                        <strong>Keyakinan yang kuat</strong> terhadap Allah dan seluruh perkara yang wajib diimani.
                                    </p>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-3">
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background">
                                            <div class="font-label-sm uppercase font-bold mb-1">1. Hati</div>
                                            <div class="font-body-sm">Meyakini kebenaran ajaran Allah.</div>
                                        </div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background">
                                            <div class="font-label-sm uppercase font-bold mb-1">2. Lisan</div>
                                            <div class="font-body-sm">Mengucapkan syahadat &amp; perkataan iman.</div>
                                        </div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background">
                                            <div class="font-label-sm uppercase font-bold mb-1">3. Perbuatan</div>
                                            <div class="font-body-sm">Membuktikan iman melalui perilaku.</div>
                                        </div>
                                    </div>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">6 Rukun Iman:</div>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                        <span class="badge-semester">1. Allah</span>
                                        <span class="badge-semester s2">2. Malaikat</span>
                                        <span class="badge-semester s3">3. Kitab</span>
                                        <span class="badge-semester s4">4. Rasul</span>
                                        <span class="badge-semester s5">5. Hari Akhir</span>
                                        <span class="badge-semester">6. Qada &amp; Qadar</span>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>B. Islam</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                        <strong>Berserah diri dan tunduk kepada Allah</strong> dengan menjalankan perintah-Nya
                                        dan menjauhi larangan-Nya.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">5 Rukun Islam:</div>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-3">
                                        <span class="badge-semester">1. Syahadat</span>
                                        <span class="badge-semester s2">2. Salat</span>
                                        <span class="badge-semester s3">3. Zakat</span>
                                        <span class="badge-semester s4">4. Puasa</span>
                                        <span class="badge-semester s5">5. Haji</span>
                                    </div>
                                    <div class="quote-block">Islam lebih terlihat dalam <strong>amal dan pelaksanaan syariat</strong>.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>C. Ihsan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                        Melakukan ibadah dengan <strong>kesadaran bahwa Allah selalu mengawasi kita</strong>.
                                    </p>
                                    <div class="verse-block">
                                        "Beribadah kepada Allah seakan-akan melihat-Nya;
                                        jika tidak mampu demikian, yakinlah bahwa Allah melihat kita."
                                    </div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mt-3">
                                        <li>› Jujur walaupun tidak ada yang melihat</li>
                                        <li>› Menghindari menyontek</li>
                                        <li>› Menjaga amanah</li>
                                        <li>› Berbuat baik kepada orang lain</li>
                                    </ul>
                                </div>
                            </details>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Hubungan Iman, Islam &amp; Ihsan
                        </h3>

                        <div class="diagram-box mb-space-md">    IMAN            ISLAM              IHSAN
   (hati)    →    (amal)    →    (kualitas & kesungguhan)
 akidah        syariat          akhlak</div>

                        <div class="quote-block">
                            Iman ada di dalam hati, Islam diwujudkan melalui amal,
                            dan Ihsan membuat amal dilakukan dengan sebaik-baiknya.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 2</div>
                            <p class="font-body-sm">
                                Kehidupan seorang muslim harus menggabungkan <strong>akidah, syariat, dan akhlak</strong>.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 3: MUNAFIK & KERAS HATI ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Munafik &amp; Keras Hati Tak Akan Maju</div>
                        </div>

                        <h3 id="bab3-munafik" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Munafik
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Seseorang yang <strong>menampakkan sesuatu yang berbeda</strong> dengan apa yang
                            sebenarnya ada di dalam dirinya.
                        </p>

                        <div class="verse-block mb-space-md">
                            <strong>Ciri-ciri Munafik (Hadis Nabi ﷺ):</strong><br><br>
                            1. Apabila <strong>berbicara</strong>, ia berdusta.<br>
                            2. Apabila <strong>berjanji</strong>, ia mengingkari.<br>
                            3. Apabila <strong>dipercaya</strong>, ia berkhianat.
                        </div>

                        <div class="quote-block">
                            Ada pula bentuk kemunafikan dalam beragama: <strong>malas beribadah</strong> dan
                            <strong>beribadah hanya untuk pujian</strong>.
                        </div>

                        <h3 id="bab3-dampak" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Dampak Sifat Munafik
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Bagi Diri Sendiri</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kehilangan kepercayaan orang lain</li>
                                    <li>› Hati tidak tenang</li>
                                    <li>› Sulit mendapat teman baik</li>
                                    <li>› Merusak kepribadian</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Bagi Masyarakat</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menimbulkan konflik</li>
                                    <li>› Merusak persatuan</li>
                                    <li>› Hilangnya kepercayaan</li>
                                    <li>› Menciptakan permusuhan</li>
                                </ul>
                            </div>
                        </div>

                        <h3 id="bab3-keras-hati" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Keras Hati — Qaswah al-Qalb
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Hati yang keras sehingga <strong>sulit menerima kebenaran dan nasihat</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">⚠ Ciri Keras Hati</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Sulit menerima nasihat</li>
                                    <li>› Tidak tersentuh ayat Al-Qur'an</li>
                                    <li>› Tidak peduli penderitaan orang lain</li>
                                    <li>› Terus melakukan kesalahan</li>
                                    <li>› Merasa dirinya selalu benar</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">⚠ Penyebab Keras Hati</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Terlalu banyak dosa</li>
                                    <li>› Meninggalkan zikir</li>
                                    <li>› Jarang membaca Al-Qur'an</li>
                                    <li>› Terlalu mencintai dunia</li>
                                    <li>› Sombong &amp; ikut hawa nafsu</li>
                                    <li>› Tidak mau menerima nasihat</li>
                                </ul>
                            </div>
                        </div>

                        <h3 id="bab3-melembutkan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Cara Melembutkan Hati
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Zikir</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Baca Al-Qur'an</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perbanyak Doa</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bertobat</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Amal Saleh</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ingat Kematian</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bersedekah</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bergaul dengan Saleh</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 3</div>
                            <p class="font-body-sm">
                                <strong>Kejujuran, amanah, dan menjaga hati</strong> merupakan bagian penting dalam
                                membangun kehidupan pribadi dan sosial yang baik.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 4: KEWARISAN ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Kewarisan dalam Islam (Mawaris)</div>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Ilmu yang membahas <strong>pembagian harta peninggalan</strong> seseorang yang telah meninggal
                            kepada orang-orang yang berhak menerimanya.
                        </p>

                        <div class="grid grid-cols-2 gap-3 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center">
                                <div class="font-label-sm uppercase font-bold">Pewaris</div>
                                <div class="font-body-sm text-on-surface-variant">Orang yang meninggal</div>
                            </div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center">
                                <div class="font-label-sm uppercase font-bold">Ahli Waris</div>
                                <div class="font-body-sm text-on-surface-variant">Penerima warisan</div>
                            </div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Tujuan Kewarisan
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memberi hak ahli waris</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mencegah perebutan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menciptakan keadilan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjaga hubungan keluarga</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mengatur harta peninggalan</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Rukun &amp; Syarat Waris
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Pewaris</div>
                                <p class="font-body-sm">Orang yang meninggal dan meninggalkan harta.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Ahli Waris</div>
                                <p class="font-body-sm">Orang yang berhak menerima warisan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">3. Harta Warisan</div>
                                <p class="font-body-sm">Harta yang ditinggalkan setelah kewajiban diselesaikan.</p>
                            </div>
                        </div>

                        <div class="quote-block mb-space-md">
                            <strong>Syarat:</strong> Pewaris telah meninggal · Ahli waris masih hidup saat pewaris meninggal ·
                            Terdapat hubungan (darah/perkawinan) yang menyebabkan berhak menerima warisan.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Penghalang Warisan
                        </h3>
                        <div class="verse-block mb-space-md">
                            1. Pembunuhan terhadap pewaris<br>
                            2. Perbedaan agama (dalam konteks hukum waris Islam)<br>
                            3. Kondisi tertentu yang menyebabkan tidak memenuhi syarat ahli waris
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Golongan Ahli Waris
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Dzawil Furudh</div>
                                <p class="font-body-sm mb-2">Ahli waris dengan bagian tertentu sesuai syariat.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">1/2</span>
                                    <span class="badge-semester s2">1/4</span>
                                    <span class="badge-semester s3">1/8</span>
                                    <span class="badge-semester s4">2/3</span>
                                    <span class="badge-semester s5">1/3</span>
                                    <span class="badge-semester">1/6</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Ashabah</div>
                                <p class="font-body-sm">Ahli waris yang mendapatkan <strong>sisa harta</strong> setelah bagian ahli waris tertentu diberikan.</p>
                            </div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Urutan Penyelesaian Harta Warisan
                        </h3>

                        <div class="diagram-box mb-space-md">Harta Peninggalan
   ↓
Biaya Pengurusan Jenazah
   ↓
Utang Pewaris
   ↓
Wasiat yang Sah (maks. 1/3)
   ↓
Pembagian kepada Ahli Waris</div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">📌 CATATAN PERHITUNGAN</div>
                            <p class="font-body-sm">
                                Perhitungan waris bisa rumit. Langkah soal hitungan:
                                <strong>tentukan ahli waris → siapa yang terhalang → bagian masing-masing → asal masalah → pembagian akhir</strong>.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 5: PERADABAN ISLAM ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Perkembangan Peradaban Islam di Dunia</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Bani Umayyah
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Berperan besar dalam perluasan wilayah Islam dan perkembangan pemerintahan.
                            Pusat pentingnya: <strong>Damaskus</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Administrasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perdagangan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pembangunan Kota</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Arsitektur</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pendidikan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perluasan Wilayah</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Bani Abbasiyah
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Salah satu masa penting dalam perkembangan ilmu pengetahuan Islam.
                            Pusat pemerintahan: <strong>Baghdad</strong>. Pusat keilmuan: <strong>Baitul Hikmah</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Matematika</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Astronomi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kedokteran</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Filsafat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kimia</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Geografi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sastra</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Teknologi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Arsitektur</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Tokoh Ilmuwan Muslim
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Tokoh</th><th>Bidang</th></tr></thead>
                            <tbody>
                                <tr><td>Al-Khwarizmi</td><td>Matematika &amp; Astronomi</td></tr>
                                <tr><td>Ibnu Sina</td><td>Kedokteran</td></tr>
                                <tr><td>Al-Farabi</td><td>Filsafat</td></tr>
                                <tr><td>Al-Biruni</td><td>Astronomi &amp; Ilmu Alam</td></tr>
                                <tr><td>Ibnu al-Haytham</td><td>Optik</td></tr>
                                <tr><td>Ibnu Khaldun</td><td>Sejarah &amp; Sosiologi</td></tr>
                            </tbody>
                        </table>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Faktor Kemajuan &amp; Kemunduran
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✓ Kemajuan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Semangat mencari ilmu</li>
                                    <li>› Dukungan pemerintah</li>
                                    <li>› Lembaga pendidikan</li>
                                    <li>› Penerjemahan buku</li>
                                    <li>› Perdagangan</li>
                                    <li>› Keterbukaan terhadap ilmu</li>
                                    <li>› Budaya baca &amp; tulis</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">✗ Kemunduran</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Konflik internal</li>
                                    <li>› Perebutan kekuasaan</li>
                                    <li>› Lemahnya persatuan</li>
                                    <li>› Menurunnya semangat keilmuan</li>
                                    <li>› Masalah politik &amp; ekonomi</li>
                                    <li>› Serangan dari pihak luar</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">🕌 IBRAH</div>
                            <p class="font-body-sm">
                                Kemajuan peradaban membutuhkan <strong>ilmu pengetahuan, kerja keras, persatuan,
                                kepemimpinan yang baik, dan keterbukaan terhadap zaman</strong>.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">public</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Moderasi, Ilmu Kalam, Ijtihad &amp; Organisasi Islam
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 6: CINTA TANAH AIR & MODERASI ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 6</div>
                            <div class="font-headline-sm uppercase">Cinta Tanah Air &amp; Moderasi Beragama</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Cinta Tanah Air
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Memiliki rasa <strong>memiliki, peduli, dan bertanggung jawab</strong> terhadap bangsa dan negara.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjaga persatuan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menaati hukum</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjaga lingkungan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menghargai keberagaman</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Belajar sungguh-sungguh</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjaga nama bangsa</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Hubbul Wathan
                        </h3>
                        <div class="verse-block mb-space-md">
                            <span class="boxed">Hubbul wathan minal iman</span><br><br>
                            "Cinta tanah air adalah bagian dari iman."
                        </div>
                        <div class="quote-block">
                            <strong>Catatan penting:</strong> Ungkapan ini <strong>bukan hadis sahih</strong> yang dapat
                            dinisbatkan begitu saja kepada Nabi ﷺ. Namun, nilai cinta tanah air <strong>didukung prinsip
                            Islam</strong>: menjaga kemaslahatan, persatuan, keamanan, dan kehidupan masyarakat.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Moderasi Beragama — Wasathiyah
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Sikap <strong>tengah, seimbang, adil, dan tidak berlebihan</strong>.
                            Bukan berarti mengurangi ajaran agama, tetapi menjalankan agama dengan cara yang:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Seimbang</span>
                            <span class="badge-semester s2">Adil</span>
                            <span class="badge-semester s3">Toleran</span>
                            <span class="badge-semester s4">Tidak ekstrem</span>
                            <span class="badge-semester s5">Menghargai perbedaan</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">✓ Contoh Moderasi</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menghormati berbeda agama</li>
                                    <li>› Tidak memaksakan keyakinan</li>
                                    <li>› Tidak mudah menyalahkan</li>
                                    <li>› Menjaga kerukunan</li>
                                    <li>› Menolak kekerasan atas nama agama</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">🛡 Maqashid Syariah</div>
                                <div class="font-body-sm mb-2">
                                    <strong>Hifdz al-nafs</strong> = menjaga jiwa<br>
                                    <strong>Hifdz al-mal</strong> = menjaga harta
                                </div>
                                <p class="font-body-sm text-on-surface-variant">
                                    Menjaga jiwa: tidak melakukan kekerasan.
                                    Menjaga harta: tidak mencuri, merusak, menipu, atau mengambil hak orang lain.
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- ============ BAB 7: ILMU KALAM ============ --}}
                    <article id="bab-7" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 7</div>
                            <div class="font-headline-sm uppercase">Ilmu Kalam</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Ilmu Kalam
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Ilmu yang membahas persoalan <strong>akidah / teologi Islam</strong> dengan menggunakan
                            <strong>dalil naqli</strong> dan <strong>argumentasi akal</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memahami akidah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memperkuat keyakinan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjawab persoalan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Membela keyakinan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memahami pandangan</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Sumber Ilmu Kalam
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Al-Qur'an</div>
                                <p class="font-body-sm">Sumber utama ajaran Islam.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Hadis</div>
                                <p class="font-body-sm">Menjelaskan &amp; melengkapi ajaran Al-Qur'an.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">3. Akal</div>
                                <p class="font-body-sm">Memahami &amp; menjelaskan dengan argumentasi yang benar.</p>
                            </div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Aliran dalam Ilmu Kalam
                        </h3>
                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Mu'tazilah</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Memberikan perhatian besar terhadap penggunaan <strong>akal</strong> dalam pembahasan teologi.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Asy'ariyah</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Dikaitkan dengan <strong>Abu al-Hasan al-Asy'ari</strong>. Menggabungkan <strong>dalil wahyu</strong> dengan <strong>argumentasi rasional</strong> dalam mempertahankan akidah.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Maturidiyah</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Dikaitkan dengan <strong>Abu Mansur al-Maturidi</strong>, berkembang terutama di wilayah tertentu dalam dunia Islam.</p>
                                </div>
                            </details>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Sikap terhadap Perbedaan
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memahami objektif</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak menghina</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menggunakan ilmu</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menghargai perbedaan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Berpegang akidah</div>
                        </div>
                    </article>

                    {{-- ============ BAB 8: INOVATIF & ETIKA ORGANISASI ============ --}}
                    <article id="bab-8" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 8</div>
                            <div class="font-headline-sm uppercase">Sikap Inovatif &amp; Etika dalam Berorganisasi</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Kerja Keras dalam Islam
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Islam mendorong manusia untuk <strong>berusaha</strong> dan tidak hanya bergantung pada orang lain.
                            <strong>Q.S. an-Najm</strong> mengajarkan bahwa manusia memperoleh sesuai dengan apa yang telah diusahakannya.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Rajin</span>
                            <span class="badge-semester s2">Disiplin</span>
                            <span class="badge-semester s3">Bertanggung jawab</span>
                            <span class="badge-semester s4">Bersungguh-sungguh</span>
                            <span class="badge-semester s5">Tidak mudah menyerah</span>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Inovasi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Kemampuan menghasilkan <strong>gagasan, metode, atau sesuatu yang baru atau lebih baik</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Membuat aplikasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menciptakan teknologi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Metode belajar efektif</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Produk digital</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menyelesaikan masalah</div>
                        </div>
                        <div class="quote-block">
                            Inovasi harus digunakan untuk <strong>kebaikan dan kemaslahatan</strong>, bukan untuk merugikan orang lain.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Etika Berorganisasi
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Amanah</summary>
                                <div class="p-space-md"><p class="font-body-sm">Melaksanakan tanggung jawab dengan baik.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Jujur</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tidak melakukan kebohongan atau manipulasi.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Musyawarah</summary>
                                <div class="p-space-md"><p class="font-body-sm">Menyelesaikan masalah dengan diskusi &amp; pertimbangan anggota.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Adil</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tidak memihak secara tidak benar.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Tanggung Jawab</summary>
                                <div class="p-space-md"><p class="font-body-sm">Berani melaksanakan &amp; mempertanggungjawabkan tugas.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>6. Kerja Sama</summary>
                                <div class="p-space-md"><p class="font-body-sm">Mengutamakan tujuan bersama daripada kepentingan pribadi.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>7. Kepemimpinan</summary>
                                <div class="p-space-md"><p class="font-body-sm">Pemimpin harus menjadi teladan, adil, amanah, dan mampu mengambil keputusan.</p></div>
                            </details>
                        </div>
                    </article>

                    {{-- ============ BAB 9: IJTIHAD ============ --}}
                    <article id="bab-9" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 9</div>
                            <div class="font-headline-sm uppercase">Ijtihad</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Ijtihad
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Usaha sungguh-sungguh yang dilakukan orang yang memiliki <strong>kemampuan keilmuan</strong>
                            untuk menetapkan atau menemukan hukum Islam terhadap suatu persoalan yang memerlukan
                            penalaran hukum.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Ijtihad diperlukan terutama ketika muncul <strong>persoalan baru</strong> yang tidak dijelaskan
                            secara langsung dan terperinci dalam Al-Qur'an dan hadis.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Teknologi</span>
                            <span class="badge-semester s2">Transaksi modern</span>
                            <span class="badge-semester s3">Ekonomi</span>
                            <span class="badge-semester s4">Masalah sosial</span>
                            <span class="badge-semester s5">Perkembangan IPTEK</span>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Syarat Mujtahid
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pengetahuan Al-Qur'an</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pengetahuan Hadis</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bahasa Arab</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Usul Fikih</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hukum Islam</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Analisis</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ketakwaan &amp; Integritas</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            <strong>Tidak semua orang boleh melakukan ijtihad</strong> tanpa memiliki kemampuan yang diperlukan.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Ijma'
                        </h3>
                        <div class="verse-block mb-space-md">
                            <span class="boxed">Ijma' = kesepakatan para mujtahid</span><br><br>
                            Kesepakatan para mujtahid umat Islam mengenai suatu hukum syariat setelah wafatnya Nabi Muhammad ﷺ.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Qiyas
                        </h3>
                        <div class="verse-block mb-space-md">
                            <span class="boxed">Qiyas = menyamakan hukum karena 'illat yang sama</span><br><br>
                            Menetapkan hukum suatu persoalan baru dengan membandingkannya dengan persoalan yang sudah
                            memiliki hukum karena memiliki <strong>'illat (alasan hukum)</strong> yang sama.
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Ikhtilaf
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Perbedaan pendapat</strong>. Dalam masalah <em>furu'iyah</em> (cabang fikih),
                            perbedaan pendapat dapat terjadi karena perbedaan metode memahami dalil.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menghormati pendapat</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak mudah menyalahkan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mempelajari dasar</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak fanatik</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjaga persaudaraan</div>
                        </div>
                    </article>

                    {{-- ============ BAB 10: ORGANISASI ISLAM ============ --}}
                    <article id="bab-10" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 10</div>
                            <div class="font-headline-sm uppercase">Peran Organisasi Islam di Indonesia</div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Sarekat Islam
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Berkembang sebagai organisasi yang awalnya berkaitan dengan kepentingan ekonomi, kemudian
                            berkembang menjadi gerakan <strong>sosial-politik</strong>.
                        </p>
                        <ul class="font-code-inline text-code-inline space-y-1 mb-space-md">
                            <li>› Membangun kesadaran masyarakat</li>
                            <li>› Memperjuangkan kepentingan rakyat</li>
                            <li>› Meningkatkan persatuan</li>
                            <li>› Bagian penting sejarah pergerakan nasional</li>
                        </ul>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1">B. Muhammadiyah</div>
                                <div class="font-body-sm text-on-surface-variant mb-2">Didirikan oleh <strong>KH Ahmad Dahlan</strong> pada <strong>1912</strong>.</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">Pendidikan</span>
                                    <span class="badge-semester s2">Kesehatan</span>
                                    <span class="badge-semester s3">Sosial</span>
                                    <span class="badge-semester s4">Dakwah</span>
                                    <span class="badge-semester s5">Pemberdayaan</span>
                                </div>
                            </div>
                            <div class="bg-primary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1">C. Nahdlatul Ulama</div>
                                <div class="font-body-sm text-on-surface-variant mb-2">Didirikan pada <strong>1926</strong>.</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">Pesantren</span>
                                    <span class="badge-semester s2">Dakwah</span>
                                    <span class="badge-semester s3">Sosial</span>
                                    <span class="badge-semester s4">Pemberdayaan</span>
                                    <span class="badge-semester s5">Tradisi Islam</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Peran dalam Kemerdekaan &amp; Masa Kini
                        </h3>

                        <div class="diagram-box mb-space-md">PERAN ORGANISASI ISLAM:
├── Pendidikan (sekolah, madrasah, pesantren, kampus)
├── Sosial (bantuan, kemanusiaan, pemberdayaan)
├── Kesehatan (rumah sakit, klinik)
├── Ekonomi (koperasi, UMKM, pelatihan)
├── Dakwah (kajian, pembinaan)
└── Menjaga NKRI (persatuan, toleransi, keadilan)</div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">🇮🇩 INTI BAB 10</div>
                            <p class="font-body-sm">
                                Organisasi Islam mempunyai kontribusi besar dalam <strong>pendidikan, dakwah, sosial,
                                ekonomi, kesehatan, perjuangan kemerdekaan, dan pembangunan Indonesia</strong>.
                                Perbedaan organisasi tidak boleh menjadi alasan untuk memecah persatuan bangsa.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- RINGKASAN CEPAT — 10 BAB --}}
                {{-- ===================================================== --}}
                <div id="ringkasan-cepat" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">bolt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bonus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Ringkasan Cepat 10 Bab
                            </h2>
                        </div>
                    </div>

                    <table class="brutal-table">
                        <thead>
                            <tr><th>Bab</th><th>Topik</th><th>Kata Kunci</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Sabar dalam Musibah</td><td>Musibah · Ujian · Bala' · Sabar · Tawakal</td></tr>
                            <tr><td>2</td><td>Iman, Islam, Ihsan</td><td>Hadis Jibril · 6 Rukun Iman · 5 Rukun Islam · Ihsan</td></tr>
                            <tr><td>3</td><td>Munafik &amp; Keras Hati</td><td>Dusta · Khianat · Qaswah al-Qalb · Zikir</td></tr>
                            <tr><td>4</td><td>Kewarisan Islam</td><td>Mawaris · Dzawil Furudh · Ashabah · Wasiat</td></tr>
                            <tr><td>5</td><td>Peradaban Islam</td><td>Umayyah · Abbasiyah · Baitul Hikmah · Ilmuwan</td></tr>
                            <tr><td>6</td><td>Cinta Tanah Air &amp; Moderasi</td><td>Hubbul Wathan · Wasathiyah · Maqashid Syariah</td></tr>
                            <tr><td>7</td><td>Ilmu Kalam</td><td>Akidah · Mu'tazilah · Asy'ariyah · Maturidiyah</td></tr>
                            <tr><td>8</td><td>Inovatif &amp; Etika Organisasi</td><td>Kerja Keras · Inovasi · Amanah · Musyawarah</td></tr>
                            <tr><td>9</td><td>Ijtihad</td><td>Mujtahid · Ijma' · Qiyas · Ikhtilaf</td></tr>
                            <tr><td>10</td><td>Organisasi Islam</td><td>SI · Muhammadiyah · NU · NKRI</td></tr>
                        </tbody>
                    </table>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        KEMBALI KE PEMBELAJARAN
                    </a>
                    <div class="flex gap-2">
                        <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">arrow_upward</span>
                            KE ATAS
                        </button>
                        <a href="{{ route('contact') }}"
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-primary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] transition-all flex items-center justify-center gap-2">
                            TANYA MENTOR
                            <span class="material-symbols-outlined text-[18px]">support_agent</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- ============ SIDEBAR — TABLE OF CONTENTS ============ --}}
            <aside class="lg:col-span-3">
                <div class="toc-sidebar">
                    {{-- Info Card --}}
                    <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>A1</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>10</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~18 Jam</strong></div>
                        </div>
                    </div>

                    {{-- TOC --}}
                    <div class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="p-space-sm border-b-[2px] border-on-background bg-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-inverse-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">list</span>
                                DAFTAR MATERI
                            </div>
                        </div>
                        <nav class="p-space-sm space-y-1 font-code-inline text-code-inline" id="tocNav">

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Semester 1</div>
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Sabar &amp; Musibah</a>
                            <a href="#bab1-pengertian" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Musibah, Ujian, Bala'</a>
                            <a href="#bab1-dalil" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Dalil Musibah</a>
                            <a href="#bab1-sabar" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Tiga Macam Sabar</a>
                            <a href="#bab1-tawakal" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Tawakal</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Iman, Islam, Ihsan</a>
                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Munafik &amp; Keras Hati</a>
                            <a href="#bab3-munafik" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian Munafik</a>
                            <a href="#bab3-dampak" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Dampak Munafik</a>
                            <a href="#bab3-keras-hati" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Keras Hati</a>
                            <a href="#bab3-melembutkan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Melembutkan Hati</a>

                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Kewarisan Islam</a>
                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Peradaban Islam</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 6 — Cinta Tanah Air</a>
                            <a href="#bab-7" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 7 — Ilmu Kalam</a>
                            <a href="#bab-8" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 8 — Inovatif &amp; Organisasi</a>
                            <a href="#bab-9" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 9 — Ijtihad</a>
                            <a href="#bab-10" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 10 — Organisasi Islam</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Bonus</div>
                            <a href="#ringkasan-cepat" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Ringkasan Cepat</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#57a8dd] hover:shadow-[4px_4px_0px_#57a8dd] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE CTA ==================== --}}
<section class="w-full bg-tertiary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">REFLEKSI &amp; AMAL</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Ilmu yang Bermanfaat, Amal yang Istiqamah
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>10 bab PAI</strong> — dari sabar, iman–islam–ihsan, akhlak, waris,
                    peradaban Islam, moderasi beragama, ilmu kalam, ijtihad, hingga organisasi Islam — siswa
                    diharapkan mampu <strong>mengamalkan ilmunya</strong> dalam kehidupan sehari-hari sebagai
                    muslim yang berakhlak mulia dan berkontribusi untuk bangsa.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#57a8dd] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#57a8dd] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    LATIHAN SOAL
                    <span class="material-symbols-outlined">menu_book</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section("script")
<script>
    document.addEventListener('DOMContentLoaded', function () {
        /* ============================================================
         * 1. READING PROGRESS BAR
         * ============================================================ */
        const progressBar = document.getElementById('readingProgress');
        const article = document.querySelector('section.bg-surface');

        function updateProgress() {
            if (!article) return;
            const rect = article.getBoundingClientRect();
            const total = rect.height - window.innerHeight;
            const scrolled = Math.max(0, -rect.top);
            const percent = total > 0 ? Math.min(100, (scrolled / total) * 100) : 0;
            progressBar.style.width = percent + '%';
        }
        window.addEventListener('scroll', updateProgress);
        updateProgress();

        /* ============================================================
         * 2. SCROLL SPY
         * ============================================================ */
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = Array.from(tocLinks).map(link => {
            const id = link.getAttribute('href').substring(1);
            return document.getElementById(id);
        }).filter(Boolean);

        function highlightTOC() {
            let current = null;
            const offset = 120;
            sections.forEach(section => {
                const top = section.getBoundingClientRect().top;
                if (top - offset <= 0) current = section;
            });
            tocLinks.forEach(link => link.classList.remove('active'));
            if (current) {
                const activeLink = document.querySelector(`.toc-link[href="#${current.id}"]`);
                if (activeLink) activeLink.classList.add('active');
            }
        }
        window.addEventListener('scroll', highlightTOC);
        highlightTOC();

        /* ============================================================
         * 3. SMOOTH SCROLL
         * ============================================================ */
        tocLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const yOffset = -100;
                    const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            });
        });

        /* ============================================================
         * 4. AUTO-CLOSE ACCORDION
         * ============================================================ */
        const allDetails = document.querySelectorAll('details.accordion-card');
        allDetails.forEach(detail => {
            detail.addEventListener('toggle', function () {
                if (this.open) {
                    const parentArticle = this.closest('article');
                    if (parentArticle) {
                        parentArticle.querySelectorAll('details.accordion-card').forEach(other => {
                            if (other !== this && other.open) other.open = false;
                        });
                    }
                }
            });
        });

        /* ============================================================
         * 5. KEYBOARD NAVIGATION
         * ============================================================ */
        document.addEventListener('keydown', function (e) {
            if (!e.altKey) return;
            if (e.key !== 'ArrowDown' && e.key !== 'ArrowUp') return;

            const ids = sections.map(s => s.id);
            let currentIndex = -1;
            sections.forEach((s, i) => {
                if (s.getBoundingClientRect().top - 120 <= 0) currentIndex = i;
            });

            let nextIndex = e.key === 'ArrowDown'
                ? Math.min(ids.length - 1, currentIndex + 1)
                : Math.max(0, currentIndex - 1);

            const nextSection = document.getElementById(ids[nextIndex]);
            if (nextSection) {
                const y = nextSection.getBoundingClientRect().top + window.pageYOffset - 100;
                window.scrollTo({ top: y, behavior: 'smooth' });
                e.preventDefault();
            }
        });

        console.log('%c🕌 Modul A1 — PAI & Budi Pekerti XII Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
