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

    /* ============ CODE BLOCK ============ */
    .code-block {
        background: #1c1b1b;
        color: #f3f0ef;
        padding: 1rem 1.25rem;
        border: 2px solid #1c1b1b;
        box-shadow: 4px 4px 0px #57a8dd;
        overflow-x: auto;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        line-height: 1.7;
        white-space: pre;
        position: relative;
    }
    .code-block::before {
        content: '● ● ●';
        position: absolute;
        top: 6px;
        left: 12px;
        color: #57a8dd;
        font-size: 10px;
        letter-spacing: 3px;
    }
    .code-block code { display: block; margin-top: 14px; }

    /* ============ FORMULA BLOCK (MATH) ============ */
    .formula-block {
        background: #1c1b1b;
        color: #c9e6ff;
        padding: 1.25rem 1.5rem;
        border: 3px solid #1c1b1b;
        box-shadow: 5px 5px 0px #57a8dd;
        font-family: 'JetBrains Mono', monospace;
        font-size: 16px;
        text-align: center;
        letter-spacing: 0.05em;
        margin: 0.5rem 0;
        position: relative;
    }
    .formula-block::before {
        content: '∑';
        position: absolute;
        top: 4px;
        right: 10px;
        color: #57a8dd;
        font-size: 14px;
        font-weight: 900;
    }
    .formula-block .boxed {
        display: inline-block;
        border: 2px solid #ffd167;
        padding: 4px 12px;
        color: #ffd167;
        font-weight: 700;
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
            <span class="font-bold text-on-surface">B1 — Matematika</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">B1</span>
                    <span class="badge-semester s2">UMUM</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">MATEMATIKA</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Matematika<br>Kelas XII
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>barisan &amp; deret</strong>, <strong>matematika keuangan</strong>
                    (bunga tunggal, majemuk, anuitas), <strong>transformasi fungsi</strong>, <strong>lingkaran</strong>
                    (busur, juring, garis singgung), <strong>kombinatorik</strong> (permutasi &amp; kombinasi),
                    hingga <strong>peluang &amp; statistika</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Bab</div>
                    <div class="font-headline-sm text-headline-sm font-bold">6 Bab</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~14 Jam</div>
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
                        <span class="material-symbols-outlined text-tertiary text-[32px]">functions</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Barisan, Deret &amp; Transformasi
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1: BARISAN & DERET ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Barisan dan Deret</div>
                        </div>

                        {{-- 1. Barisan Aritmetika --}}
                        <h3 id="barisan-aritmetika" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Barisan Aritmetika
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Barisan aritmetika</strong> adalah barisan bilangan yang memiliki <strong>selisih tetap</strong>
                            antara satu suku dengan suku berikutnya. Selisih tetap tersebut disebut <strong>beda (b)</strong>.
                        </p>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Contoh</div>
                            <div class="font-code-inline text-code-inline">3, 7, 11, 15, 19, ...</div>
                            <div class="font-code-inline text-code-inline mt-2 text-on-surface-variant">7 − 3 = 4 · 11 − 7 = 4 · 15 − 11 = 4</div>
                            <div class="font-code-inline text-code-inline mt-2 font-bold">Jadi b = 4</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Rumus Suku ke-n</h4>
                        <div class="formula-block">
                            <span class="boxed">U<sub>n</sub> = a + (n − 1) b</span>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mb-space-md mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Keterangan</div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline">
                                <div>› U<sub>n</sub> = suku ke-n</div>
                                <div>› a = suku pertama</div>
                                <div>› n = nomor suku</div>
                                <div>› b = beda</div>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Barisan 5, 8, 11, 14, ... Tentukan suku ke-10.</p>
                                <div class="formula-block">a = 5 · b = 8 − 5 = 3</div>
                                <div class="formula-block">U<sub>10</sub> = 5 + (10 − 1) 3 = 5 + 27 = <span class="boxed">32</span></div>
                            </div>
                        </details>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Ciri:</span>
                            <span class="font-body-sm"> Beda tetap • Pola penambahan/pengurangan sama • Bisa naik atau turun</span>
                        </div>
                    </article>

                    {{-- 2. Barisan Geometri --}}
                    <article id="barisan-geometri" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Barisan Geometri
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Barisan geometri</strong> adalah barisan bilangan yang memiliki <strong>rasio tetap (r)</strong>
                            antara suatu suku dengan suku sebelumnya.
                        </p>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Contoh</div>
                            <div class="font-code-inline text-code-inline">2, 6, 18, 54, ...</div>
                            <div class="formula-block mt-2">r = 6/2 = 3 · r = 18/6 = 3 → <span class="boxed">r = 3</span></div>
                        </div>

                        <div class="formula-block">
                            <span class="boxed">U<sub>n</sub> = a · r<sup>n−1</sup></span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Barisan 3, 6, 12, 24, ... Tentukan suku ke-8.</p>
                                <div class="formula-block">a = 3 · r = 2</div>
                                <div class="formula-block">U<sub>8</sub> = 3 · 2<sup>7</sup> = 3 · 128 = <span class="boxed">384</span></div>
                            </div>
                        </details>
                    </article>

                    {{-- 3. Deret Aritmetika --}}
                    <article id="deret-aritmetika" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Deret Aritmetika
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Deret</strong> adalah penjumlahan suku-suku suatu barisan. Contoh barisan 2, 5, 8, 11 →
                            deretnya <strong>2 + 5 + 8 + 11</strong>.
                        </p>

                        <div class="formula-block">
                            <span class="boxed">S<sub>n</sub> = n/2 · (2a + (n−1)b)</span>
                        </div>
                        <p class="font-label-sm uppercase font-bold text-center mt-2 mb-2">Alternatif</p>
                        <div class="formula-block">
                            <span class="boxed">S<sub>n</sub> = n/2 · (a + U<sub>n</sub>)</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Hitung jumlah 10 suku pertama dari 2, 5, 8, 11, ...</p>
                                <div class="formula-block">a = 2 · b = 3 · n = 10</div>
                                <div class="formula-block">S<sub>10</sub> = 10/2 · (2·2 + 9·3) = 5 · (4 + 27) = <span class="boxed">155</span></div>
                            </div>
                        </details>
                    </article>

                    {{-- 4. Deret Geometri --}}
                    <article id="deret-geometri" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Deret Geometri
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Deret geometri</strong> adalah penjumlahan suku-suku dari barisan geometri.
                            Contoh: <strong>2 + 6 + 18 + 54 + ...</strong>
                        </p>

                        <p class="font-label-sm uppercase font-bold mt-space-md mb-2">Untuk r ≠ 1:</p>
                        <div class="formula-block">
                            <span class="boxed">S<sub>n</sub> = a · (r<sup>n</sup> − 1) / (r − 1)</span>
                        </div>
                        <p class="font-label-sm uppercase font-bold text-center mt-2 mb-2">Bentuk lain</p>
                        <div class="formula-block">
                            <span class="boxed">S<sub>n</sub> = a · (1 − r<sup>n</sup>) / (1 − r)</span>
                        </div>

                        {{-- Deret Tak Hingga --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">Deret Geometri Tak Hingga</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Deret dengan jumlah suku tidak terbatas. Memiliki jumlah hingga jika <strong>|r| &lt; 1</strong>.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">S<sub>∞</sub> = a / (1 − r)</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh — Deret Tak Hingga</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Hitung: 1 + 1/2 + 1/4 + 1/8 + ...</p>
                                <div class="formula-block">a = 1 · r = 1/2</div>
                                <div class="formula-block">S<sub>∞</sub> = 1 / (1 − 1/2) = <span class="boxed">2</span></div>
                            </div>
                        </details>
                    </article>

                    {{-- ============ BAB 2: INVESTASI & PINJAMAN ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Investasi dan Pinjaman</div>
                        </div>

                        {{-- 1. Bunga Tunggal --}}
                        <h3 id="bunga-tunggal" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Bunga Tunggal
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Bunga dihitung berdasarkan <strong>modal awal</strong>. Setiap periode jumlah bunganya tetap.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="formula-block">
                                <span class="boxed">B = M · i · t</span>
                            </div>
                            <div class="formula-block">
                                <span class="boxed">A = M(1 + i·t)</span>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Modal Rp2.000.000 ditabung bunga tunggal 5%/tahun selama 3 tahun.</p>
                                <div class="formula-block">B = 2.000.000 · 0,05 · 3 = 300.000</div>
                                <div class="formula-block">A = 2.000.000 + 300.000 = <span class="boxed">Rp2.300.000</span></div>
                            </div>
                        </details>

                        {{-- 2. Bunga Majemuk --}}
                        <h3 id="bunga-majemuk" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Bunga Majemuk
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Bunga ditambahkan ke modal sehingga periode berikutnya bunga dihitung dari modal yang sudah bertambah.
                            <strong>Bunga menghasilkan bunga lagi.</strong>
                        </p>
                        <div class="formula-block">
                            <span class="boxed">A = M(1 + i)<sup>n</sup></span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Rp1.000.000 diinvestasikan bunga majemuk 10%/tahun selama 2 tahun.</p>
                                <div class="formula-block">A = 1.000.000 (1 + 0,1)<sup>2</sup> = 1.000.000 · 1,21 = <span class="boxed">Rp1.210.000</span></div>
                            </div>
                        </details>

                        {{-- 3. Anuitas --}}
                        <h3 id="anuitas" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Anuitas
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Pembayaran/penerimaan uang secara berkala dengan jumlah yang sama. Contoh: cicilan kendaraan,
                            cicilan rumah, pembayaran pinjaman, investasi berkala.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">FV = P · ((1 + i)<sup>n</sup> − 1) / i</span>
                        </div>

                        {{-- 4. Pinjaman --}}
                        <h3 id="pinjaman" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Pinjaman Bunga Majemuk &amp; Angsuran
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Bunga Periode</div>
                                <div class="formula-block">B = P · i</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Angsuran Pokok</div>
                                <div class="formula-block">Pokok = Total − Bunga</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Sisa Pinjaman</div>
                                <div class="formula-block">Sisa = Sebelumnya − Pokok</div>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Pinjaman</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Pinjaman Rp10.000.000 · Bunga 1%/bulan · Angsuran Rp1.000.000</p>
                                <div class="formula-block">Bunga bulan 1 = 10.000.000 × 1% = 100.000</div>
                                <div class="formula-block">Pokok = 1.000.000 − 100.000 = 900.000</div>
                                <div class="formula-block">Sisa = 10.000.000 − 900.000 = <span class="boxed">Rp9.100.000</span></div>
                            </div>
                        </details>
                    </article>

                    {{-- ============ BAB 3: TRANSFORMASI FUNGSI ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Transformasi Fungsi</div>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            Perubahan posisi, ukuran, atau arah grafik suatu fungsi. Jenis: <strong>translasi, refleksi,
                            dilatasi, rotasi</strong>.
                        </p>

                        {{-- 1. Translasi --}}
                        <h3 id="translasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Translasi (Pergeseran)
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Horizontal</div>
                                <div class="formula-block">Kanan a: y = f(x − a)</div>
                                <div class="formula-block">Kiri a: y = f(x + a)</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Vertikal</div>
                                <div class="formula-block">Atas b: y = f(x) + b</div>
                                <div class="formula-block">Bawah b: y = f(x) − b</div>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Cara Ingat:</span>
                            <span class="font-body-sm"> Di dalam kurung tandanya berlawanan. Di luar kurung sesuai arah.</span>
                        </div>

                        {{-- 2. Refleksi --}}
                        <h3 id="refleksi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Refleksi (Pencerminan)
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Terhadap Sumbu-X</div>
                                <div class="formula-block">y = −f(x)</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Nilai y berubah tanda.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Terhadap Sumbu-Y</div>
                                <div class="formula-block">y = f(−x)</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Nilai x berubah tanda.</p>
                            </div>
                        </div>

                        {{-- 3. Dilatasi --}}
                        <h3 id="dilatasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Dilatasi (Perubahan Ukuran)
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Skala Vertikal</div>
                                <div class="formula-block">y = 2·f(x)</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Skala Horizontal</div>
                                <div class="formula-block">y = f(2x)</div>
                            </div>
                        </div>

                        {{-- 4. Rotasi --}}
                        <h3 id="rotasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Rotasi (Perputaran)
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Terhadap titik pusat (0,0).
                        </p>
                        <table class="brutal-table">
                            <thead><tr><th>Sudut</th><th>Transformasi</th></tr></thead>
                            <tbody>
                                <tr><td>90° (berlawanan jarum jam)</td><td>(x, y) → (−y, x)</td></tr>
                                <tr><td>180°</td><td>(x, y) → (−x, −y)</td></tr>
                                <tr><td>270°</td><td>(x, y) → (y, −x)</td></tr>
                            </tbody>
                        </table>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">change_history</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Lingkaran, Kombinatorik &amp; Peluang
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 4: LINGKARAN ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Busur dan Juring Lingkaran</div>
                        </div>

                        {{-- 1. Persamaan Lingkaran --}}
                        <h3 id="persamaan-lingkaran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Persamaan Lingkaran
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Pusat (0,0)</div>
                                <div class="formula-block"><span class="boxed">x² + y² = r²</span></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Contoh r = 5: x² + y² = 25</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Pusat (a, b)</div>
                                <div class="formula-block"><span class="boxed">(x − a)² + (y − b)² = r²</span></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Pusat (2,3) r=4: (x−2)² + (y−3)² = 16</p>
                            </div>
                        </div>

                        {{-- 2. Panjang Busur --}}
                        <h3 id="panjang-busur" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Panjang Busur Lingkaran
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Busur</strong> adalah bagian dari keliling lingkaran.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">L = (θ / 360°) × 2πr</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">r = 14 · θ = 90°</p>
                                <div class="formula-block">L = (90/360) · 2π(14) = 1/4 · 28π = 7π</div>
                                <div class="formula-block">Jika π = 22/7: L = <span class="boxed">22</span></div>
                            </div>
                        </details>

                        {{-- 3. Luas Juring --}}
                        <h3 id="luas-juring" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Luas Juring
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Juring</strong> adalah bagian lingkaran yang dibatasi dua jari-jari dan satu busur.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">L = (θ / 360°) × πr²</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">r = 14 · θ = 90°</p>
                                <div class="formula-block">L = (90/360) · (22/7) · 196 = 1/4 · 616 = <span class="boxed">154</span></div>
                            </div>
                        </details>

                        {{-- 4. Garis Singgung --}}
                        <h3 id="garis-singgung" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Garis Singgung Lingkaran
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Garis yang menyentuh lingkaran tepat pada satu titik. <strong>Jari-jari ⊥ garis singgung</strong>.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">xx₁ + yy₁ = r²</span>
                        </div>
                        <div class="diagram-box mt-space-md">Contoh penggunaan:
├── Menentukan panjang garis singgung
├── Posisi titik terhadap lingkaran
└── Persamaan garis</div>
                    </article>

                    {{-- ============ BAB 5: KOMBINATORIK ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Kombinatorik / Kaidah Pencacahan</div>
                        </div>

                        {{-- 1. Aturan Pengisian Tempat --}}
                        <h3 id="aturan-tempat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Aturan Pengisian Tempat
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Jika suatu proses terdiri dari beberapa tahap, jumlah kemungkinan = <strong>hasil kali</strong> jumlah pilihan setiap tahap.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">Total = a × b × c</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">3 baju · 2 celana · 2 sepatu</p>
                                <div class="formula-block">3 × 2 × 2 = <span class="boxed">12 kemungkinan</span></div>
                            </div>
                        </details>

                        {{-- 2. Permutasi --}}
                        <h3 id="permutasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Permutasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Penyusunan objek yang <strong>memperhatikan urutan</strong>. ABC ≠ BAC.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Seluruh Unsur</div>
                                <div class="formula-block"><span class="boxed">P<sub>n</sub> = n!</span></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Contoh: 5! = 120</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">r dari n</div>
                                <div class="formula-block"><span class="boxed"><sub>n</sub>P<sub>r</sub> = n! / (n−r)!</span></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Contoh: <sub>5</sub>P<sub>3</sub> = 60</p>
                            </div>
                        </div>

                        {{-- 3. Permutasi Unsur Sama --}}
                        <h3 id="permutasi-unsur-sama" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Permutasi Unsur yang Sama
                        </h3>
                        <div class="formula-block">
                            <span class="boxed">P = n! / (a! · b! · c!)</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 mb-space-md">
                            Contoh: Kata "MAMA" → 4! / (2! · 2!) = 24/4 = 6
                        </p>

                        {{-- 4. Kombinasi --}}
                        <h3 id="kombinasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Kombinasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Pemilihan objek yang <strong>tidak memperhatikan urutan</strong>. ABC = BAC.
                        </p>
                        <div class="formula-block">
                            <span class="boxed"><sub>n</sub>C<sub>r</sub> = n! / (r! · (n−r)!)</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Dari 5 siswa dipilih 2 untuk tim.</p>
                                <div class="formula-block"><sub>5</sub>C<sub>2</sub> = 5! / (2!·3!) = <span class="boxed">10 cara</span></div>
                            </div>
                        </details>

                        {{-- Perbedaan Permutasi & Kombinasi --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">Permutasi vs Kombinasi</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Permutasi</th><th>Kombinasi</th></tr></thead>
                            <tbody>
                                <tr><td>Urutan diperhatikan</td><td>Urutan tidak diperhatikan</td></tr>
                                <tr><td>Ketua dan wakil</td><td>Memilih anggota tim</td></tr>
                                <tr><td>ABC ≠ BAC</td><td>ABC = BAC</td></tr>
                                <tr><td>P(n,r)</td><td>C(n,r)</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Kunci Cepat:</span>
                            <span class="font-body-sm"> Urutan/jabatan penting → <strong>Permutasi</strong>. Hanya memilih → <strong>Kombinasi</strong>.</span>
                        </div>
                    </article>

                    {{-- ============ BAB 6: PELUANG & STATISTIKA ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 6</div>
                            <div class="font-headline-sm uppercase">Peluang dan Statistika Lanjut</div>
                        </div>

                        {{-- 1. Peluang Dasar --}}
                        <h3 id="peluang-dasar" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Peluang Suatu Kejadian
                        </h3>
                        <div class="formula-block">
                            <span class="boxed">P(A) = n(A) / n(S)</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                            Nilai peluang: <strong>0 ≤ P(A) ≤ 1</strong>. P(A)=0 mustahil, P(A)=1 pasti terjadi.
                        </p>

                        {{-- 2. Kejadian Saling Lepas --}}
                        <h3 id="saling-lepas" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Kejadian Saling Lepas
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Tidak dapat terjadi bersamaan. Contoh: dadu keluar angka 1 <em>atau</em> 6.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">P(A ∪ B) = P(A) + P(B)</span>
                        </div>

                        {{-- 3. Kejadian Saling Bebas --}}
                        <h3 id="saling-bebas" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Kejadian Saling Bebas
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Kejadian pertama tidak memengaruhi kejadian kedua.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">P(A ∩ B) = P(A) × P(B)</span>
                        </div>

                        {{-- 4. Peluang Bersyarat --}}
                        <h3 id="peluang-bersyarat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Peluang Bersyarat
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Peluang suatu kejadian saat kejadian lain sudah terjadi. Dibaca: <strong>peluang A jika B sudah terjadi</strong>.
                        </p>
                        <div class="formula-block">
                            <span class="boxed">P(A|B) = P(A ∩ B) / P(B)</span>
                        </div>

                        {{-- 5. Frekuensi Harapan --}}
                        <h3 id="frekuensi-harapan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Frekuensi Harapan
                        </h3>
                        <div class="formula-block">
                            <span class="boxed">F<sub>h</sub> = n × P(A)</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm">Dadu dilempar 60 kali. Peluang angka 6 muncul:</p>
                                <div class="formula-block">F<sub>h</sub> = 60 × 1/6 = <span class="boxed">10 kali</span></div>
                            </div>
                        </details>

                        {{-- 6. Variabel Acak --}}
                        <h3 id="variabel-acak" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Variabel Acak
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Variabel yang nilainya bergantung hasil percobaan acak. Contoh: melempar 2 koin, X = jumlah gambar.
                            Nilai X: 0, 1, 2 → <strong>variabel acak diskret</strong>.
                        </p>

                        {{-- 7. Distribusi Peluang --}}
                        <h3 id="distribusi-peluang" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Distribusi Peluang
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Contoh Tabel</div>
                                <table class="brutal-table">
                                    <thead><tr><th>X</th><th>P(X)</th></tr></thead>
                                    <tbody>
                                        <tr><td>0</td><td>1/4</td></tr>
                                        <tr><td>1</td><td>1/2</td></tr>
                                        <tr><td>2</td><td>1/4</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Syarat</div>
                                <div class="formula-block">Σ P(X) = 1</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Jumlah peluang semua nilai harus = 1.</p>
                            </div>
                        </div>

                        {{-- 8. Nilai Harapan --}}
                        <h3 id="nilai-harapan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            Nilai Harapan (Ekspektasi)
                        </h3>
                        <div class="formula-block">
                            <span class="boxed">E(X) = Σ x · P(x)</span>
                        </div>

                        <details class="accordion-card mt-space-md" open>
                            <summary>Contoh Soal</summary>
                            <div class="p-space-md space-y-space-sm">
                                <div class="db-table">
                                    <table>
                                        <tr><th>X</th><th>P(X)</th></tr>
                                        <tr><td>0</td><td>0,2</td></tr>
                                        <tr><td>1</td><td>0,5</td></tr>
                                        <tr><td>2</td><td>0,3</td></tr>
                                    </table>
                                </div>
                                <div class="formula-block">E(X) = 0·0,2 + 1·0,5 + 2·0,3 = 0 + 0,5 + 0,6 = <span class="boxed">1,1</span></div>
                            </div>
                        </details>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- RINGKASAN RUMUS WAJIB --}}
                {{-- ===================================================== --}}
                <div id="ringkasan-rumus" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">bolt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bonus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Ringkasan Rumus Wajib Hafal
                            </h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Barisan &amp; Deret</div>
                            <div class="space-y-2">
                                <div class="formula-block">U<sub>n</sub> = a + (n−1)b</div>
                                <div class="formula-block">S<sub>n</sub> = n/2 (2a + (n−1)b)</div>
                                <div class="formula-block">U<sub>n</sub> = a·r<sup>n−1</sup></div>
                                <div class="formula-block">S<sub>n</sub> = a(r<sup>n</sup>−1)/(r−1)</div>
                                <div class="formula-block">S<sub>∞</sub> = a/(1−r) · |r|&lt;1</div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Matematika Keuangan</div>
                            <div class="space-y-2">
                                <div class="formula-block">B = M·i·t</div>
                                <div class="formula-block">A = M(1 + it)</div>
                                <div class="formula-block">A = M(1 + i)<sup>n</sup></div>
                                <div class="formula-block">FV = P((1+i)<sup>n</sup>−1)/i</div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Transformasi</div>
                            <div class="space-y-2">
                                <div class="formula-block">Kanan: f(x−a)</div>
                                <div class="formula-block">Kiri: f(x+a)</div>
                                <div class="formula-block">Atas: f(x)+b</div>
                                <div class="formula-block">Bawah: f(x)−b</div>
                                <div class="formula-block">Sumbu-X: −f(x)</div>
                                <div class="formula-block">Sumbu-Y: f(−x)</div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Lingkaran</div>
                            <div class="space-y-2">
                                <div class="formula-block">x² + y² = r²</div>
                                <div class="formula-block">(x−a)² + (y−b)² = r²</div>
                                <div class="formula-block">L<sub>busur</sub> = (θ/360°)·2πr</div>
                                <div class="formula-block">L<sub>juring</sub> = (θ/360°)·πr²</div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Kombinatorik</div>
                            <div class="space-y-2">
                                <div class="formula-block">n! = n(n−1)(n−2)...1</div>
                                <div class="formula-block"><sub>n</sub>P<sub>r</sub> = n!/(n−r)!</div>
                                <div class="formula-block"><sub>n</sub>C<sub>r</sub> = n!/(r!(n−r)!)</div>
                                <div class="formula-block">P<sub>unsur sama</sub> = n!/(a!b!c!)</div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-tertiary">Peluang &amp; Statistika</div>
                            <div class="space-y-2">
                                <div class="formula-block">P(A) = n(A)/n(S)</div>
                                <div class="formula-block">P(A∪B) = P(A)+P(B)</div>
                                <div class="formula-block">P(A∩B) = P(A)·P(B)</div>
                                <div class="formula-block">P(A|B) = P(A∩B)/P(B)</div>
                                <div class="formula-block">F<sub>h</sub> = n·P(A)</div>
                                <div class="formula-block">E(X) = Σx·P(x)</div>
                            </div>
                        </div>

                    </div>
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
                            <div class="flex justify-between"><span>Kode:</span><strong>B1</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>6</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~14 Jam</strong></div>
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
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Barisan &amp; Deret</a>
                            <a href="#barisan-aritmetika" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Barisan Aritmetika</a>
                            <a href="#barisan-geometri" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Barisan Geometri</a>
                            <a href="#deret-aritmetika" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Deret Aritmetika</a>
                            <a href="#deret-geometri" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Deret Geometri</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Investasi &amp; Pinjaman</a>
                            <a href="#bunga-tunggal" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Bunga Tunggal</a>
                            <a href="#bunga-majemuk" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Bunga Majemuk</a>
                            <a href="#anuitas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Anuitas</a>
                            <a href="#pinjaman" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Pinjaman &amp; Angsuran</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Transformasi</a>
                            <a href="#translasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Translasi</a>
                            <a href="#refleksi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Refleksi</a>
                            <a href="#dilatasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Dilatasi</a>
                            <a href="#rotasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Rotasi</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Lingkaran</a>
                            <a href="#persamaan-lingkaran" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Persamaan</a>
                            <a href="#panjang-busur" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Panjang Busur</a>
                            <a href="#luas-juring" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Luas Juring</a>
                            <a href="#garis-singgung" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Garis Singgung</a>

                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Kombinatorik</a>
                            <a href="#aturan-tempat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Aturan Tempat</a>
                            <a href="#permutasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Permutasi</a>
                            <a href="#permutasi-unsur-sama" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Permutasi Unsur Sama</a>
                            <a href="#kombinasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Kombinasi</a>

                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 6 — Peluang</a>
                            <a href="#peluang-dasar" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Peluang Dasar</a>
                            <a href="#saling-lepas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Saling Lepas</a>
                            <a href="#saling-bebas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Saling Bebas</a>
                            <a href="#peluang-bersyarat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Peluang Bersyarat</a>
                            <a href="#frekuensi-harapan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">5. Frekuensi Harapan</a>
                            <a href="#variabel-acak" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">6. Variabel Acak</a>
                            <a href="#distribusi-peluang" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">7. Distribusi Peluang</a>
                            <a href="#nilai-harapan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">8. Nilai Harapan</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Bonus</div>
                            <a href="#ringkasan-rumus" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Ringkasan Rumus</a>
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
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">LATIHAN SOAL</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Kuasai Rumus, Taklukkan Ujian
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>barisan &amp; deret</strong>, <strong>matematika keuangan</strong>,
                    <strong>transformasi</strong>, <strong>lingkaran</strong>, <strong>kombinatorik</strong>,
                    &amp; <strong>peluang</strong>, siswa diharapkan mampu mengerjakan soal-soal ujian dengan cepat
                    dan tepat — lengkap dengan pemahaman konsep yang kuat.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#57a8dd] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#57a8dd] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    LATIHAN SOAL
                    <span class="material-symbols-outlined">edit_note</span>
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

        console.log('%c📘 Modul B1 — Matematika XII Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
