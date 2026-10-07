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
        background: #ffd167;
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
        box-shadow: 4px 4px 0px #ff7a00;
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
        color: #ff7a00;
        font-size: 10px;
        letter-spacing: 3px;
    }
    .code-block code { display: block; margin-top: 14px; }

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
    details.accordion-card[open] { box-shadow: 5px 5px 0px #ff7a00; }
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
        background: #ffd167;
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
        background: #ff7a00;
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
        background: #ffd167;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #c9e6ff; }
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
    }
    .brutal-table tr:nth-child(even) td { background: #f6f3f2; }

    /* ============ SWOT CARDS ============ */
    .swot-card {
        border: 3px solid #1c1b1b;
        padding: 1rem;
        box-shadow: 4px 4px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    .swot-card:hover {
        transform: translate(-2px, -2px);
        box-shadow: 6px 6px 0px #1c1b1b;
    }
    .swot-s { background: #a7f3a0; } /* Strengths — hijau */
    .swot-w { background: #ffb4ae; } /* Weaknesses — merah */
    .swot-o { background: #c9e6ff; } /* Opportunities — biru */
    .swot-t { background: #ffdf9b; } /* Threats — kuning */

    /* ============ 10D BYGRAVE CARD ============ */
    .d-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        padding: 0.75rem;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.15s ease;
    }
    .d-card:hover {
        transform: translate(-2px, -2px);
        box-shadow: 5px 5px 0px #ff7a00;
        background: #ffdf9b;
    }

    /* ============ WIREFRAME MOCKUP ============ */
    .wireframe {
        border: 2px dashed #1c1b1b;
        background: #fcf9f8;
        padding: 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        line-height: 1.5;
        text-align: center;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .wireframe-btn {
        display: inline-block;
        border: 2px solid #1c1b1b;
        padding: 4px 12px;
        background: #ffd167;
        font-weight: 700;
        margin: 4px 0;
    }

    /* ============ PILLAR BADGE ============ */
    .pillar-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
    }
    .pillar-s { background: #a7f3a0; }
    .pillar-w { background: #ffb4ae; }
    .pillar-o { background: #c9e6ff; }
    .pillar-t { background: #ffdf9b; }

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
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">B7R — PKK</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">B7R</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                    <span class="badge-semester s4">WIRAUSAHA</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Proyek Kreatif &amp;<br>Kewirausahaan
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>sikap &amp; perilaku wirausaha</strong>,
                    <strong>10D Bygrave</strong>, analisis peluang usaha (<strong>SWOT</strong>, <strong>5W+1H</strong>),
                    <strong>HAKI</strong>, desain produk digital (<strong>UI/UX</strong>, Wireframe, Prototype),
                    <strong>SDLC</strong>, <strong>Agile/Scrum</strong>, produksi software, marketing
                    (<strong>4P</strong> &amp; <strong>Digital</strong>), hingga <strong>pengelolaan keuangan</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">8 Bab</div>
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
                        <span class="material-symbols-outlined text-primary text-[32px]">emoji_objects</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Kewirausahaan &amp; Perencanaan Produk Digital
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1 ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Sikap dan Perilaku Wirausaha</div>
                        </div>

                        {{-- 1. Pengertian Wirausaha --}}
                        <h3 id="pengertian-wirausaha" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian Wirausaha
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>Wirausaha</strong> adalah seseorang yang mampu melihat peluang, menciptakan
                            atau mengembangkan usaha, mengelola sumber daya, serta berani mengambil risiko untuk
                            memperoleh keuntungan dan menciptakan nilai bagi orang lain.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-5 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Website</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aplikasi Mobile</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Software</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Game</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">SaaS</div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Contoh Kasus — Siswa RPL &amp; UMKM</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">Masalah: UMKM butuh website
    ↓
Solusi: Jasa pembuatan website
    ↓
Produk: Website
    ↓
Pelanggan: Pemilik UMKM
    ↓
Pendapatan: Jasa pembuatan + maintenance</div>
                            </div>
                        </details>

                        {{-- 2. Karakter/Sikap Wirausahawan --}}
                        <h3 id="karakter-wirausaha" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Karakter / Sikap Wirausahawan
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">a. Disiplin</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menjalankan tugas &amp; aturan secara konsisten &amp; tepat waktu.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">b. Komitmen</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Kesungguhan menjalankan yang telah disepakati.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">c. Jujur</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menyampaikan kondisi sebenarnya, tidak menipu pelanggan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">d. Kreatif</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Kemampuan menghasilkan ide atau cara baru.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">e. Inovatif</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menerapkan ide menjadi sesuatu yang lebih baik.</p>
                                <div class="diagram-box mt-2">Kreatif → menghasilkan ide
Inovatif → menerapkan ide</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">f. Bertanggung jawab</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Terhadap produk, pelayanan, kesepakatan, &amp; pelanggan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] md:col-span-2">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">g. Berani mengambil risiko</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Risiko harus <strong>diperhitungkan</strong>, bukan sembarangan. Contoh: riset pasar sebelum membuat aplikasi.</p>
                            </div>
                        </div>

                        {{-- 3. Kerja Prestatif & 10D Bygrave --}}
                        <h3 id="kerja-prestatif" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Kerja Prestatif &amp; 10D Bygrave
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>Kerja prestatif</strong> adalah sikap bekerja sungguh-sungguh untuk mencapai
                            hasil optimal. Konsep <strong>10D Bygrave</strong> menggambarkan karakter wirausahawan.
                        </p>

                        <div class="diagram-box mb-space-md">Dream → Decide → Do → Determination → Dedication
   → Devotion → Details → Destiny → Dollars → Distribute</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-sm">
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">1. Dream</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memiliki impian/visi. Contoh: ingin bangun software house.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">2. Decisiveness</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mampu mengambil keputusan tegas.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">3. Do</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bertindak, tidak hanya berencana.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">4. Determination</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Tekad kuat saat hadapi bug/hambatan.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">5. Dedication</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pengabdian &amp; kesungguhan pada usaha.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">6. Devotion</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Kecintaan pada pekerjaan.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">7. Details</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Perhatikan hal kecil: validasi, error, keamanan.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">8. Destiny</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Masa depan ditentukan usaha sendiri.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">9. Dollars</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Profit penting, tapi bukan satu-satunya tujuan.</p>
                            </div>
                            <div class="d-card">
                                <div class="font-label-lg uppercase font-bold text-primary mb-1">10. Distribute</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Delegasi tugas: programmer, designer, tester, PM.</p>
                            </div>
                        </div>

                        {{-- 4. Keberhasilan & Kegagalan --}}
                        <h3 id="sukses-gagal" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Keberhasilan &amp; Kegagalan Wirausaha
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✔ Faktor Keberhasilan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Memahami kebutuhan pasar</li>
                                    <li>› Produk berkualitas</li>
                                    <li>› Manajemen baik</li>
                                    <li>› Inovasi berkelanjutan</li>
                                    <li>› Pemasaran efektif</li>
                                    <li>› Pelayanan pelanggan</li>
                                    <li>› Konsisten</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✘ Faktor Kegagalan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tidak paham pasar</li>
                                    <li>› Produk tidak menyelesaikan masalah</li>
                                    <li>› Perencanaan buruk</li>
                                    <li>› Modal tidak dikelola</li>
                                    <li>› Harga tidak sesuai</li>
                                    <li>› Kurang promosi</li>
                                    <li>› Tidak inovatif</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">⚠ Contoh:</span>
                            <span class="font-body-sm"> Developer membuat aplikasi bagus secara teknis, tapi tidak pernah bertanya ke calon pengguna — <strong>produk teknis ≠ produk dibutuhkan pasar</strong>.</span>
                        </div>
                    </article>

                    {{-- ============ BAB 2 ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Analisis Peluang Usaha Produk/Jasa</div>
                        </div>

                        {{-- 1. Pengertian Peluang Usaha --}}
                        <h3 id="peluang-usaha" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian Peluang Usaha
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>Peluang usaha</strong> adalah kesempatan yang dapat dimanfaatkan untuk
                            menghasilkan produk/jasa yang dibutuhkan pasar dan berpotensi menghasilkan keuntungan.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Masalah masyarakat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Perkembangan teknologi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Perubahan kebiasaan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Kebutuhan perusahaan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Kekurangan produk lama</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">Tren teknologi</div>
                        </div>

                        {{-- 2. Sumber Peluang --}}
                        <h3 id="sumber-peluang" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Sumber Peluang Usaha
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">a. Kebutuhan Pasar</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Banyak UMKM kesulitan catat stok → peluang aplikasi inventory.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">b. Pain Point</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Jadwal pelajaran sering berubah → peluang aplikasi jadwal digital.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">c. Tren Teknologi</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-o">AI</span>
                                    <span class="pillar-badge pillar-o">Cloud</span>
                                    <span class="pillar-badge pillar-o">IoT</span>
                                    <span class="pillar-badge pillar-o">Mobile</span>
                                    <span class="pillar-badge pillar-o">SaaS</span>
                                </div>
                            </div>
                        </div>

                        {{-- 3. SWOT --}}
                        <h3 id="swot" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Analisis SWOT
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>SWOT</strong> menganalisis kondisi <em>internal</em> &amp; <em>eksternal</em> usaha.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="swot-card swot-s">
                                <div class="font-label-lg uppercase font-bold mb-2">S — Strengths</div>
                                <p class="font-body-sm text-body-sm mb-2"><strong>Kekuatan internal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Harga murah</li>
                                    <li>› UI mudah dipakai</li>
                                    <li>› Fitur lengkap</li>
                                    <li>› Tim berpengalaman</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-w">
                                <div class="font-label-lg uppercase font-bold mb-2">W — Weaknesses</div>
                                <p class="font-body-sm text-body-sm mb-2"><strong>Kelemahan internal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Modal kecil</li>
                                    <li>› Tim sedikit</li>
                                    <li>› Belum punya pelanggan</li>
                                    <li>› Server terbatas</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-o">
                                <div class="font-label-lg uppercase font-bold mb-2">O — Opportunities</div>
                                <p class="font-body-sm text-body-sm mb-2"><strong>Peluang eksternal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› UMKM butuh digitalisasi</li>
                                    <li>› Pengguna smartphone naik</li>
                                    <li>› Bisnis mulai online</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-t">
                                <div class="font-label-lg uppercase font-bold mb-2">T — Threats</div>
                                <p class="font-body-sm text-body-sm mb-2"><strong>Ancaman eksternal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kompetitor banyak</li>
                                    <li>› Teknologi cepat berubah</li>
                                    <li>› Harga cloud naik</li>
                                    <li>› Produk mudah ditiru</li>
                                </ul>
                            </div>
                        </div>

                        {{-- 4. 5W + 1H --}}
                        <h3 id="5w1h" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Analisis 5W + 1H
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Pertanyaan</th><th>Arti</th><th>Contoh — Aplikasi Kasir</th></tr></thead>
                            <tbody>
                                <tr><td><strong>What</strong></td><td>Apa</td><td>Aplikasi kasir untuk UMKM</td></tr>
                                <tr><td><strong>Who</strong></td><td>Siapa</td><td>Pemilik warung &amp; toko kecil</td></tr>
                                <tr><td><strong>Why</strong></td><td>Mengapa</td><td>UMKM masih catat transaksi manual</td></tr>
                                <tr><td><strong>When</strong></td><td>Kapan</td><td>Prototype 1 bulan</td></tr>
                                <tr><td><strong>Where</strong></td><td>Di mana</td><td>Smartphone Android</td></tr>
                                <tr><td><strong>How</strong></td><td>Bagaimana</td><td>Flutter + Laravel, dipromosikan via sosmed</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ BAB 3: HAKI ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Hak Kekayaan Intelektual (HAKI)</div>
                        </div>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>HAKI (Hak Kekayaan Intelektual)</strong> adalah hak yang diberikan atau diakui
                            atas hasil kreativitas &amp; intelektualitas manusia. Tujuan: memberi perlindungan hukum
                            &amp; mencegah penggunaan tanpa hak.
                        </p>

                        <h3 id="jenis-haki" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Jenis-jenis HAKI
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <details class="accordion-card" open>
                                <summary>Hak Cipta</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Melindungi karya ilmu pengetahuan, seni, sastra — termasuk program komputer.</p>
                                    <p class="font-label-sm uppercase font-bold mb-1">Contoh IT:</p>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Source code software</li>
                                        <li>› Dokumentasi</li>
                                        <li>› Konten website</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>Paten</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Berkaitan dengan <strong>invensi teknologi</strong> yang memenuhi persyaratan hukum.</p>
                                    <div class="diagram-box mt-2">Hak Cipta → karya
Paten     → invensi teknologi</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>Merek</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tanda pembeda barang/jasa.</p>
                                    <ul class="font-code-inline text-code-inline space-y-1 mt-2">
                                        <li>› Nama aplikasi</li>
                                        <li>› Logo perusahaan</li>
                                        <li>› Nama brand</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>Rahasia Dagang</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Informasi bisnis/teknologi bernilai ekonomi &amp; dijaga kerahasiaannya.</p>
                                    <ul class="font-code-inline text-code-inline space-y-1 mt-2">
                                        <li>› Algoritma rahasia</li>
                                        <li>› Strategi bisnis</li>
                                        <li>› Formula internal</li>
                                    </ul>
                                </div>
                            </details>
                        </div>

                        <h3 id="perbedaan-haki" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Perbandingan Jenis HAKI
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Jenis</th><th>Melindungi</th><th>Contoh</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Hak Cipta</strong></td><td>Karya</td><td>Software/kode program</td></tr>
                                <tr><td><strong>Paten</strong></td><td>Invensi teknologi</td><td>Teknologi baru</td></tr>
                                <tr><td><strong>Merek</strong></td><td>Identitas produk</td><td>Nama &amp; logo</td></tr>
                                <tr><td><strong>Rahasia Dagang</strong></td><td>Info rahasia bernilai ekonomi</td><td>Strategi bisnis</td></tr>
                            </tbody>
                        </table>

                        <h3 id="prosedur-haki" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Prosedur Pendaftaran HAKI
                        </h3>

                        <div class="diagram-box mb-space-md">Menentukan jenis HKI
   ↓
Menyiapkan karya/dokumen
   ↓
Mengajukan permohonan (DJKI)
   ↓
Pemeriksaan
   ↓
Penerbitan perlindungan (jika memenuhi syarat)</div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Catatan:</span>
                            <span class="font-body-sm"> Setiap jenis HKI memiliki prosedur berbeda — gunakan panduan resmi <strong>DJKI</strong>.</span>
                        </div>
                    </article>

                    {{-- ============ BAB 4: DESAIN PRODUK ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Desain Produk &amp; Prototype</div>
                        </div>

                        <h3 id="ui-ux" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            UI vs UX
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">UI — User Interface</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tampilan yang dilihat pengguna.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-o">Tombol</span>
                                    <span class="pillar-badge pillar-o">Warna</span>
                                    <span class="pillar-badge pillar-o">Font</span>
                                    <span class="pillar-badge pillar-o">Ikon</span>
                                    <span class="pillar-badge pillar-o">Form</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">UX — User Experience</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Pengalaman pengguna saat menggunakan produk.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Apakah mudah digunakan?</li>
                                    <li>› Apakah mudah cari menu?</li>
                                    <li>› Apakah terlalu rumit?</li>
                                    <li>› Apakah nyaman?</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Rumus:</span>
                            <span class="font-body-sm"> UI = <em>bagaimana tampilannya</em> &nbsp;•&nbsp; UX = <em>bagaimana pengalaman menggunakannya</em></span>
                        </div>

                        <h3 id="wireframe" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Wireframe, Mockup &amp; Prototype
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Wireframe</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Rancangan awal — belum fokus warna.</p>
                                <div class="wireframe">
                                    <div style="font-weight:700;">LOGO</div>
                                    <div style="margin:8px 0;">Username: [______]</div>
                                    <div style="margin:8px 0;">Password: [______]</div>
                                    <div class="wireframe-btn">LOGIN</div>
                                    <div style="font-size:10px;">Lupa Password?</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Mockup</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Sudah ada warna, font, ikon, gambar.</p>
                                <div class="wireframe" style="background:#ffd167;">
                                    <div style="font-weight:700;color:#994700;">VEKTOR.DEV</div>
                                    <div style="margin:8px 0;">Username: [______]</div>
                                    <div style="margin:8px 0;">Password: [______]</div>
                                    <div class="wireframe-btn" style="background:#1c1b1b;color:#ffd167;">LOGIN</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Prototype</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Simulasi interaktif.</p>
                                <div class="diagram-box">Klik Login
   ↓
Pindah ke Dashboard
   ↓
Contoh simulasi</div>
                            </div>
                        </div>

                        <h3 id="tools-desain" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Tools Desain
                        </h3>
                        <div class="grid grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Figma</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Adobe XD</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sketch</div>
                        </div>

                        <h3 id="kelayakan-teknis" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Analisis Kelayakan Teknis
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">1. Hardware</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">2. Software</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">3. SDM</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">4. Teknologi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">5. Waktu</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">6. Infrastruktur</div>
                        </div>

                        <div class="diagram-box">Contoh:
Ide: Video conference seperti Zoom
Tim: 2 siswa, waktu 1 bulan

→ Terlalu besar!
Solusi: Perkecil scope
→ Aplikasi meeting sekolah sederhana</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">rocket_launch</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Perancangan, Produksi &amp; Pemasaran
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 5: PERENCANAAN PRODUKSI ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Perencanaan Produksi Software</div>
                        </div>

                        <h3 id="sdlc" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            SDLC — Software Development Life Cycle
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>SDLC</strong> adalah tahapan pengembangan software dari awal sampai pemeliharaan.
                        </p>

                        <div class="diagram-box mb-space-md">Planning → Analysis → Design → Development
   → Testing → Deployment → Maintenance</div>

                        <div class="space-y-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">A. Planning</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan tujuan &amp; ruang lingkup. Contoh: sistem perpustakaan sekolah.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">B. Analysis</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Analisis kebutuhan: Login, Data buku, Data siswa, Peminjaman, Pengembalian, Laporan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">C. Design</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">UI, Database, Arsitektur, Flowchart, ERD.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">D. Development</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Programmer mulai coding.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">E. Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Software diuji untuk mencari error.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">F. Deployment</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Software dipublikasikan/digunakan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-1 text-primary">G. Maintenance</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Diperbaiki &amp; dikembangkan setelah digunakan.</p>
                            </div>
                        </div>

                        {{-- Waterfall vs Agile --}}
                        <h3 id="waterfall-agile" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Waterfall vs Agile
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Waterfall</div>
                                <div class="diagram-box">Analisis → Desain
   → Coding → Testing → Deploy</div>
                                <div class="grid grid-cols-2 gap-2 mt-3">
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-green-700">✔ Kelebihan</div>
                                        <ul class="font-code-inline text-code-inline space-y-0.5">
                                            <li>› Tahapan jelas</li>
                                            <li>› Dokumentasi rapi</li>
                                            <li>› Cocok jika kebutuhan jelas</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-red-600">✘ Kekurangan</div>
                                        <ul class="font-code-inline text-code-inline space-y-0.5">
                                            <li>› Susah jika berubah</li>
                                            <li>› Feedback lambat</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Agile</div>
                                <div class="diagram-box">Sprint 1 → Login
Sprint 2 → Dashboard
Sprint 3 → Data produk
Sprint 4 → Transaksi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Fleksibel, kolaboratif, feedback cepat.</p>
                            </div>
                        </div>

                        {{-- Scrum --}}
                        <h3 id="scrum" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Scrum Framework
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Product Owner</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menentukan kebutuhan &amp; prioritas produk.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Scrum Master</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memastikan proses Scrum berjalan baik.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Development Team</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mengembangkan produk.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Product Backlog</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Daftar kebutuhan/pekerjaan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Sprint</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Periode pengerjaan tertentu.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline font-bold mb-1">Daily Scrum</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pertemuan singkat harian.</p>
                            </div>
                        </div>

                        {{-- RAB --}}
                        <h3 id="rab" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            RAB — Rencana Anggaran Biaya
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Kebutuhan</th><th>Biaya</th></tr></thead>
                            <tbody>
                                <tr><td>Domain</td><td>Rp150.000</td></tr>
                                <tr><td>Hosting</td><td>Rp500.000</td></tr>
                                <tr><td>Internet</td><td>Rp300.000</td></tr>
                                <tr><td>Transportasi</td><td>Rp200.000</td></tr>
                                <tr><td>Promosi</td><td>Rp250.000</td></tr>
                                <tr><td>Lain-lain</td><td>Rp100.000</td></tr>
                                <tr style="background:#ffd167;"><td><strong>TOTAL</strong></td><td><strong>Rp1.500.000</strong></td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ BAB 6: PRODUKSI ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 6</div>
                            <div class="font-headline-sm uppercase">Proses Produksi / Working Prototype</div>
                        </div>

                        <h3 id="working-prototype" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Working Prototype
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>Working prototype</strong> adalah prototype yang sudah dapat menjalankan
                            sebagian fungsi utama.
                        </p>
                        <div class="diagram-box mb-space-md">Contoh: Aplikasi Perpustakaan (Prototype awal)
├── Login
├── Lihat daftar buku
└── Peminjaman buku</div>

                        <h3 id="coding-stack" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Coding &amp; Teknologi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Frontend</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Bagian yang interaksi langsung dengan pengguna.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-o">HTML</span>
                                    <span class="pillar-badge pillar-o">CSS</span>
                                    <span class="pillar-badge pillar-o">JS</span>
                                    <span class="pillar-badge pillar-o">React</span>
                                    <span class="pillar-badge pillar-o">Flutter</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Backend</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Logika aplikasi &amp; data.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-s">Laravel</span>
                                    <span class="pillar-badge pillar-s">Node.js</span>
                                    <span class="pillar-badge pillar-s">Django</span>
                                    <span class="pillar-badge pillar-s">Spring</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Database</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menyimpan data.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-t">MySQL</span>
                                    <span class="pillar-badge pillar-t">PostgreSQL</span>
                                    <span class="pillar-badge pillar-t">SQLite</span>
                                </div>
                            </div>
                        </div>

                        <h3 id="testing-debugging" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Testing &amp; Debugging
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mencari apakah ada masalah.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menemukan bug</li>
                                    <li>› Fungsi berjalan</li>
                                    <li>› Input diproses benar</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Debugging</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mencari penyebab &amp; memperbaiki.</p>
                                <div class="diagram-box">Contoh:
Login gagal
   ↓
Cari penyebab
   ↓
Perbaiki kode</div>
                            </div>
                        </div>

                        <h3 id="blackbox-uat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Black-Box Testing &amp; UAT
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Black-Box Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Fokus input-output, tanpa lihat kode.</p>
                                <table class="brutal-table">
                                    <thead><tr><th>Input</th><th>Hasil</th></tr></thead>
                                    <tbody>
                                        <tr><td>Username ✓ + Pass ✓</td><td>Berhasil</td></tr>
                                        <tr><td>Username ✗</td><td>Ditolak</td></tr>
                                        <tr><td>Password ✗</td><td>Ditolak</td></tr>
                                        <tr><td>Form kosong</td><td>Validasi</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">UAT — User Acceptance Test</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Diuji oleh pengguna sebenarnya.</p>
                                <div class="diagram-box">Petugas Perpustakaan
coba:
├── Login
├── Tambah buku
├── Peminjaman
├── Pengembalian
└── Lihat laporan
   ↓
Apakah diterima?</div>
                            </div>
                        </div>

                        <h3 id="packaging" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Pengemasan Produk &amp; Dokumentasi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Android</div>
                                <div class="font-code-inline text-code-inline">› APK<br>› AAB</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Website</div>
                                <div class="font-code-inline text-code-inline">› Hosting<br>› Domain<br>› Database<br>› Environment</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Desktop</div>
                                <div class="font-code-inline text-code-inline">› Installer<br>› User Manual</div>
                            </div>
                        </div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">📄 Dokumentasi Wajib:</span>
                            <span class="font-body-sm"> User manual • Instalasi • API • Database • README • Panduan penggunaan</span>
                        </div>
                    </article>

                    {{-- ============ BAB 7: MARKETING ============ --}}
                    <article id="bab-7" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 7</div>
                            <div class="font-headline-sm uppercase">Strategi Pemasaran Produk Digital</div>
                        </div>

                        <h3 id="marketing-mix" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Marketing Mix 4P
                        </h3>

                        <div class="diagram-box mb-space-md">Product → Price → Place → Promotion</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">P — Product</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Produk yang ditawarkan.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Fitur &amp; Kualitas</li>
                                    <li>› Desain &amp; Manfaat</li>
                                    <li>› Keunggulan</li>
                                    <li>› Masalah yang diselesaikan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">P — Price</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Model bisnis software:</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› <strong>Freemium</strong> — dasar gratis, premium bayar</li>
                                    <li>› <strong>Subscription</strong> — Rp50.000/bulan</li>
                                    <li>› <strong>One-Time</strong> — beli sekali</li>
                                    <li>› <strong>Custom</strong> — sesuai kebutuhan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">P — Place</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Saluran distribusi:</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-o">Website</span>
                                    <span class="pillar-badge pillar-o">Play Store</span>
                                    <span class="pillar-badge pillar-o">App Store</span>
                                    <span class="pillar-badge pillar-o">Marketplace</span>
                                    <span class="pillar-badge pillar-o">GitHub</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">P — Promotion</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Cara memperkenalkan:</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="pillar-badge pillar-t">Instagram</span>
                                    <span class="pillar-badge pillar-t">TikTok</span>
                                    <span class="pillar-badge pillar-t">YouTube</span>
                                    <span class="pillar-badge pillar-t">Content</span>
                                    <span class="pillar-badge pillar-t">Iklan Digital</span>
                                </div>
                            </div>
                        </div>

                        <h3 id="digital-marketing" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Digital Marketing &amp; Pitching
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Content Marketing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">"5 alasan UMKM butuh aplikasi kasir."</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Landing Page</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Halaman dengan CTA: <em>"Coba Gratis Sekarang"</em>.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Pitching</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Presentasi ke pelanggan/investor.</p>
                            </div>
                        </div>

                        <details class="accordion-card" open>
                            <summary>Isi Pitching yang Efektif</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">1. Masalah</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">2. Solusi</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">3. Produk</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">4. Target pengguna</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">5. Keunggulan</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">6. Model bisnis</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">7. Strategi pemasaran</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">8. Tim</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">9. Kebutuhan/tujuan</div>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- ============ BAB 8: KEUANGAN ============ --}}
                    <article id="bab-8" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 8</div>
                            <div class="font-headline-sm uppercase">Pengelolaan Keuangan &amp; Laporan Usaha</div>
                        </div>

                        <h3 id="kas" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Kas Masuk &amp; Kas Keluar
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">Kas Masuk</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Penjualan software</li>
                                    <li>› Pembayaran jasa website</li>
                                    <li>› Maintenance</li>
                                    <li>› Subscription</li>
                                </ul>
                                <div class="diagram-box mt-2">Contoh: Website → Rp2.000.000</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">Kas Keluar</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Hosting &amp; Domain</li>
                                    <li>› Internet &amp; Transportasi</li>
                                    <li>› Promosi</li>
                                    <li>› Peralatan</li>
                                    <li>› Gaji</li>
                                </ul>
                                <div class="diagram-box mt-2">Contoh: Hosting → Rp500.000</div>
                            </div>
                        </div>

                        <h3 id="pencatatan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Pencatatan Keuangan Sederhana
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Tanggal</th><th>Keterangan</th><th>Kas Masuk</th><th>Kas Keluar</th></tr></thead>
                            <tbody>
                                <tr><td>1 Okt</td><td>Modal awal</td><td>Rp2.000.000</td><td>-</td></tr>
                                <tr><td>3 Okt</td><td>Beli domain</td><td>-</td><td>Rp150.000</td></tr>
                                <tr><td>5 Okt</td><td>Jasa website</td><td>Rp1.500.000</td><td>-</td></tr>
                                <tr><td>7 Okt</td><td>Hosting</td><td>-</td><td>Rp300.000</td></tr>
                            </tbody>
                        </table>

                        <h3 id="laba-rugi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Laba, Rugi &amp; Laporan
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">Laba</div>
                                <div class="code-block"><code>Laba = Pendapatan − Total Biaya

Rp5.000.000 − Rp3.000.000 = Rp2.000.000</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">Rugi</div>
                                <div class="code-block"><code>Rugi = Total Biaya − Pendapatan

Rp3.000.000 − Rp2.000.000 = Rp1.000.000</code></div>
                            </div>
                        </div>

                        <h3 id="laporan-laba-rugi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Laporan Laba Rugi (Contoh)
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Keterangan</th><th>Jumlah</th></tr></thead>
                            <tbody>
                                <tr><td>Pendapatan</td><td>Rp10.000.000</td></tr>
                                <tr><td>Biaya hosting</td><td>Rp1.000.000</td></tr>
                                <tr><td>Promosi</td><td>Rp1.500.000</td></tr>
                                <tr><td>Internet</td><td>Rp500.000</td></tr>
                                <tr><td>Transportasi</td><td>Rp500.000</td></tr>
                                <tr><td><strong>Total Biaya</strong></td><td><strong>Rp3.500.000</strong></td></tr>
                                <tr style="background:#a7f3a0;"><td><strong>LABA</strong></td><td><strong>Rp6.500.000</strong></td></tr>
                            </tbody>
                        </table>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Perhitungan:</span>
                            <span class="font-body-sm"> Rp10.000.000 − Rp3.500.000 = <strong>Rp6.500.000</strong></span>
                        </div>
                    </article>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
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
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>B7R</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>8</strong></div>
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
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Sikap Wirausaha</a>
                            <a href="#pengertian-wirausaha" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Pengertian Wirausaha</a>
                            <a href="#karakter-wirausaha" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Karakter Wirausahawan</a>
                            <a href="#kerja-prestatif" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Kerja Prestatif &amp; 10D</a>
                            <a href="#sukses-gagal" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Sukses &amp; Gagal</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Analisis Peluang</a>
                            <a href="#peluang-usaha" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Peluang Usaha</a>
                            <a href="#sumber-peluang" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Sumber Peluang</a>
                            <a href="#swot" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. SWOT</a>
                            <a href="#5w1h" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. 5W + 1H</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — HAKI</a>
                            <a href="#jenis-haki" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Jenis HAKI</a>
                            <a href="#perbedaan-haki" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Perbandingan</a>
                            <a href="#prosedur-haki" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Prosedur</a>

                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Desain Produk</a>
                            <a href="#ui-ux" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. UI vs UX</a>
                            <a href="#wireframe" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Wireframe &amp; Prototype</a>
                            <a href="#tools-desain" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Tools Desain</a>
                            <a href="#kelayakan-teknis" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Kelayakan Teknis</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Perencanaan</a>
                            <a href="#sdlc" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. SDLC</a>
                            <a href="#waterfall-agile" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Waterfall vs Agile</a>
                            <a href="#scrum" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Scrum</a>
                            <a href="#rab" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. RAB</a>

                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 6 — Produksi</a>
                            <a href="#working-prototype" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Working Prototype</a>
                            <a href="#coding-stack" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Coding Stack</a>
                            <a href="#testing-debugging" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Testing &amp; Debugging</a>
                            <a href="#blackbox-uat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Black-Box &amp; UAT</a>
                            <a href="#packaging" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">5. Packaging</a>

                            <a href="#bab-7" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 7 — Marketing</a>
                            <a href="#marketing-mix" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Marketing Mix 4P</a>
                            <a href="#digital-marketing" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Digital &amp; Pitching</a>

                            <a href="#bab-8" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 8 — Keuangan</a>
                            <a href="#kas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">1. Kas Masuk &amp; Keluar</a>
                            <a href="#pencatatan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">2. Pencatatan</a>
                            <a href="#laba-rugi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">3. Laba &amp; Rugi</a>
                            <a href="#laporan-laba-rugi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">4. Laporan Laba Rugi</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#ff7a00] hover:shadow-[4px_4px_0px_#ff7a00] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE PROJECT CTA ==================== --}}
<section class="w-full bg-tertiary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Startup Digital Pertamamu
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai sikap wirausaha, analisis peluang, desain produk, perencanaan produksi, marketing,
                    &amp; keuangan, siswa diharapkan mampu membangun <strong>startup digital</strong> nyata:
                    <strong>Aplikasi Kasir UMKM</strong>, <strong>Jasa Pembuatan Website</strong>, atau
                    <strong>SaaS sederhana</strong> — lengkap dengan <strong>business model</strong>,
                    <strong>prototype</strong>, <strong>pitching deck</strong>, dan <strong>laporan keuangan</strong>.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#ff7a00] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#ff7a00] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    MULAI USAHA
                    <span class="material-symbols-outlined">rocket_launch</span>
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

        console.log('%c💡 Modul B7R — PKK Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
