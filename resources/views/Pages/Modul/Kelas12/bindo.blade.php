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
        background: #ffdbc8;
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
        box-shadow: 4px 4px 0px #994700;
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
        color: #994700;
        font-size: 10px;
        letter-spacing: 3px;
    }
    .code-block code { display: block; margin-top: 14px; }

    /* ============ LETTER BLOCK (CONTOH SURAT) ============ */
    .letter-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #994700;
        padding: 1rem 1.25rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        line-height: 1.8;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .letter-block .letter-date {
        text-align: right;
        font-style: italic;
        color: #584235;
        margin-bottom: 0.75rem;
    }
    .letter-block .letter-head {
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e0c0af;
    }
    .letter-block .letter-greeting {
        margin: 0.75rem 0;
        font-weight: 600;
    }
    .letter-block .letter-signature {
        margin-top: 1rem;
        text-align: right;
        font-weight: 700;
    }

    /* ============ QUOTE BLOCK ============ */
    .quote-block {
        background: #ffdbc8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #994700;
        padding: 0.75rem 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        line-height: 1.7;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .quote-block::before {
        content: '❝';
        color: #994700;
        font-size: 22px;
        font-weight: 900;
        margin-right: 6px;
        font-style: normal;
        vertical-align: middle;
    }

    /* ============ STRUCTURE BLOCK ============ */
    .structure-block {
        background: #1c1b1b;
        color: #ffdbc8;
        padding: 1.25rem 1.5rem;
        border: 3px solid #1c1b1b;
        box-shadow: 5px 5px 0px #994700;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        margin: 0.5rem 0;
        position: relative;
        line-height: 1.8;
    }
    .structure-block::before {
        content: '📝';
        position: absolute;
        top: 4px;
        right: 10px;
        font-size: 14px;
    }
    .structure-block .boxed {
        display: inline-block;
        border: 2px solid #ffd167;
        padding: 4px 12px;
        color: #ffd167;
        font-weight: 700;
        margin: 2px 0;
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
    details.accordion-card[open] { box-shadow: 5px 5px 0px #994700; }
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
        background: #ffdbc8;
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
        background: #994700;
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
        background: #ffdbc8;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #ffd167; }
    .badge-semester.s3 { background: #c9e6ff; }
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

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-primary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XII</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">A3 — Bahasa Indonesia</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">A3</span>
                    <span class="badge-semester s2">UMUM</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">BAHASA</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Bahasa Indonesia<br>Kelas XII
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>Surat Lamaran Pekerjaan</strong>, <strong>Teks Eksposisi &amp; Persuasif</strong>,
                    <strong>Teks Deskripsi &amp; Laporan Observasi</strong>, <strong>Kecerdasan Artifisial (AI)</strong>,
                    <strong>Kearifan Lokal</strong>, hingga <strong>Pendalaman Sastra &amp; Proyek Akhir</strong>.
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
                        <span class="material-symbols-outlined text-primary text-[32px]">menu_book</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Surat, Teks &amp; Lingkungan
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1: SURAT LAMARAN ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Surat Lamaran Pekerjaan</div>
                        </div>

                        {{-- Pengertian --}}
                        <h3 id="pengertian-surat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian &amp; Tujuan
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Surat lamaran pekerjaan</strong> adalah surat yang dibuat seseorang untuk mengajukan
                            permohonan agar dapat memperoleh pekerjaan pada suatu perusahaan atau instansi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bahasa sopan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bahasa baku</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kalimat efektif</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Struktur jelas</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Informasi benar</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ejaan tepat</div>
                        </div>

                        {{-- Struktur --}}
                        <h3 id="struktur-surat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Struktur Surat Lamaran
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Tempat &amp; Tanggal Surat</summary>
                                <div class="p-space-md">
                                    <div class="quote-block">Karanganyar, 7 Oktober 2026</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Lampiran &amp; Perihal</summary>
                                <div class="p-space-md">
                                    <div class="quote-block">Lampiran: 5 lembar<br>Perihal: Lamaran Pekerjaan</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Alamat Tujuan</summary>
                                <div class="p-space-md">
                                    <div class="quote-block">Yth. HRD PT Maju Teknologi<br>Jalan Sudirman No. 10<br>Surakarta</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Salam Pembuka</summary>
                                <div class="p-space-md">
                                    <div class="quote-block">Dengan hormat,</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Paragraf Pembuka</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi informasi tentang sumber informasi lowongan dan posisi yang dilamar.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>6. Isi Surat</summary>
                                <div class="p-space-md">
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Identitas pelamar</li>
                                        <li>› Pendidikan</li>
                                        <li>› Pengalaman</li>
                                        <li>› Keterampilan</li>
                                        <li>› Alasan melamar</li>
                                        <li>› Posisi yang diinginkan</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>7. Paragraf Penutup</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Harapan agar pelamar dapat mengikuti proses seleksi &amp; ucapan terima kasih.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>8. Salam Penutup</summary>
                                <div class="p-space-md">
                                    <div class="quote-block">Hormat saya,</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>9. Nama &amp; Tanda Tangan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Nama pelamar ditulis di bagian akhir surat.</p>
                                </div>
                            </details>
                        </div>

                        {{-- Contoh Surat --}}
                        <h3 id="contoh-surat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Contoh Surat Lamaran
                        </h3>

                        <div class="letter-block">
                            <div class="letter-date">Karanganyar, 7 Oktober 2026</div>
                            <div class="letter-head">
                                <strong>Lampiran:</strong> 5 lembar<br>
                                <strong>Perihal:</strong> Lamaran Pekerjaan
                            </div>
                            <div>
                                Yth. HRD PT Maju Teknologi<br>
                                Jalan Sudirman No. 10<br>
                                Surakarta
                            </div>
                            <div class="letter-greeting">Dengan hormat,</div>
                            <p style="text-indent: 2em;">
                                Berdasarkan informasi lowongan dari situs pencarian kerja, saya mengajukan lamaran
                                untuk posisi <strong>Web Developer</strong> di perusahaan yang Bapak/Ibu pimpin.
                            </p>
                            <p style="text-indent: 2em; margin-top: 0.5rem;">
                                Saya lulusan SMK Negeri 2 Karanganyar jurusan RPL. Saya menguasai HTML, CSS,
                                JavaScript, PHP, dan Laravel. Saya juga memiliki pengalaman PKL sebagai junior
                                developer di sebuah software house.
                            </p>
                            <p style="text-indent: 2em; margin-top: 0.5rem;">
                                Besar harapan saya untuk dapat mengikuti proses seleksi. Atas perhatian Bapak/Ibu,
                                saya ucapkan terima kasih.
                            </p>
                            <div class="letter-signature">
                                Hormat saya,<br><br><br>
                                <strong>Asis Wijayanto</strong>
                            </div>
                        </div>

                        {{-- Jenis Surat Lamaran --}}
                        <h3 id="jenis-surat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Jenis Surat Lamaran
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">A. Berdasarkan Iklan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Koran, website, sosmed, situs pencarian kerja.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">B. Info Seseorang</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Teman, guru, keluarga, pegawai.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">C. Inisiatif Sendiri</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Kirim meski tidak ada lowongan.</p>
                            </div>
                        </div>

                        {{-- Kata Baku --}}
                        <h3 id="kata-baku" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Kata Baku
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Tidak Baku</th><th>Baku</th></tr></thead>
                            <tbody>
                                <tr><td>aktifitas</td><td>aktivitas</td></tr>
                                <tr><td>resiko</td><td>risiko</td></tr>
                                <tr><td>ijin</td><td>izin</td></tr>
                                <tr><td>praktek</td><td>praktik</td></tr>
                                <tr><td>apotik</td><td>apotek</td></tr>
                                <tr><td>kwalitas</td><td>kualitas</td></tr>
                                <tr><td>sistim</td><td>sistem</td></tr>
                                <tr><td>sekedar</td><td>sekadar</td></tr>
                            </tbody>
                        </table>

                        {{-- Email Lamaran --}}
                        <h3 id="email-lamaran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Email Lamaran Pekerjaan
                        </h3>

                        <div class="code-block mb-space-md"><code>Subject: Lamaran Pekerjaan – Web Developer – Asis Wijayanto

Isi Email:
- Salam
- Tujuan email
- Posisi yang dilamar
- Sumber informasi lowongan
- Kemampuan singkat
- Dokumen yang dilampirkan
- Penutup</code></div>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Etika Email:</span>
                            <span class="font-body-sm"> Email profesional · No slang · Subject jelas · Periksa lampiran · Nama file rapi · Cek ejaan</span>
                        </div>
                    </article>

                    {{-- ============ BAB 2: GAYA HIDUP SEHAT ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Gaya Hidup Sehat</div>
                        </div>

                        <h3 id="teks-nonfiksi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Teks Nonfiksi &amp; Eksposisi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Teks nonfiksi</strong> = teks berdasarkan kenyataan, fakta, data, atau pengetahuan.
                            <strong>Teks eksposisi</strong> = teks yang bertujuan menjelaskan/menyampaikan informasi secara logis &amp; berdasarkan fakta.
                        </p>

                        <div class="structure-block">
                            <div class="font-label-sm uppercase font-bold mb-2">Struktur Teks Eksposisi:</div>
                            <div class="boxed">1. Tesis</div>
                            <p class="font-body-sm">Pendapat/gagasan utama mengenai topik</p>
                            <div class="boxed">2. Rangkaian Argumentasi</div>
                            <p class="font-body-sm">Alasan, fakta, data, bukti pendukung</p>
                            <div class="boxed">3. Penegasan Ulang</div>
                            <p class="font-body-sm">Penguatan kembali gagasan utama</p>
                        </div>

                        <h3 id="fakta-opini" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Fakta vs Opini
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✓ Fakta</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Benar-benar terjadi &amp; dapat dibuktikan.</p>
                                <div class="quote-block">Air membeku pada suhu 0°C dalam tekanan tertentu.</div>
                                <ul class="font-code-inline text-code-inline space-y-1 mt-2">
                                    <li>› Dapat diverifikasi</li>
                                    <li>› Ada data/bukti</li>
                                    <li>› Objektif</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✗ Opini</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Pendapat/penilaian seseorang.</p>
                                <div class="quote-block">Menurut saya, olahraga pagi paling menyenangkan.</div>
                                <ul class="font-code-inline text-code-inline space-y-1 mt-2">
                                    <li>› Subjektif</li>
                                    <li>› Belum tentu terbukti</li>
                                    <li>› Ada penilaian</li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1 mt-3">
                            <span class="badge-semester">menurut saya</span>
                            <span class="badge-semester s2">sebaiknya</span>
                            <span class="badge-semester s3">mungkin</span>
                            <span class="badge-semester s4">sangat baik</span>
                            <span class="badge-semester s5">paling bagus</span>
                            <span class="badge-semester">seharusnya</span>
                        </div>

                        <h3 id="persuasif" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Teks Persuasif
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Teks yang bertujuan <strong>membujuk atau mengajak</strong> pembaca melakukan sesuatu.
                        </p>

                        <div class="structure-block">
                            <div class="font-label-sm uppercase font-bold mb-2">Struktur Teks Persuasif:</div>
                            <div class="boxed">1. Pengenalan Isu</div>
                            <div class="boxed">2. Penyampaian Argumen</div>
                            <div class="boxed">3. Ajakan</div>
                            <div class="boxed">4. Penegasan</div>
                        </div>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="badge-semester s4">ayo</span>
                            <span class="badge-semester s4">mari</span>
                            <span class="badge-semester s4">sebaiknya</span>
                            <span class="badge-semester s4">hendaknya</span>
                            <span class="badge-semester s5">jangan</span>
                            <span class="badge-semester s4">lakukan</span>
                            <span class="badge-semester s4">biasakan</span>
                        </div>
                    </article>

                    {{-- ============ BAB 3: LINGKUNGAN SEKOLAH ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Lingkungan Sekolah</div>
                        </div>

                        <h3 id="teks-deskripsi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Teks Deskripsi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Menggambarkan objek secara jelas sehingga pembaca seolah-olah dapat melihat atau merasakan objek tersebut.
                        </p>
                        <div class="quote-block">Lingkungan sekolah memiliki halaman luas dengan beberapa pohon rindang.</div>

                        <div class="flex flex-wrap gap-1 mt-3">
                            <span class="badge-semester s3">bersih</span>
                            <span class="badge-semester s3">luas</span>
                            <span class="badge-semester s3">nyaman</span>
                            <span class="badge-semester s3">rindang</span>
                            <span class="badge-semester s3">ramai</span>
                            <span class="badge-semester s3">tenang</span>
                        </div>

                        <h3 id="laporan-observasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Teks Laporan Hasil Observasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Menyampaikan hasil pengamatan terhadap suatu objek secara sistematis dan objektif.
                        </p>

                        <div class="structure-block">
                            <div class="font-label-sm uppercase font-bold mb-2">Struktur:</div>
                            <div class="boxed">1. Pernyataan Umum</div>
                            <p class="font-body-sm">Menjelaskan objek secara umum.</p>
                            <div class="boxed">2. Deskripsi Bagian</div>
                            <p class="font-body-sm">Menjelaskan bagian/karakteristik objek.</p>
                            <div class="boxed">3. Deskripsi Manfaat</div>
                            <p class="font-body-sm">Menjelaskan manfaat/simpulan.</p>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Deskripsi vs Laporan Observasi</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Deskripsi</th><th>Laporan Observasi</th></tr></thead>
                            <tbody>
                                <tr><td>Menggambarkan objek</td><td>Melaporkan hasil pengamatan</td></tr>
                                <tr><td>Bisa lebih menggambarkan kesan</td><td>Lebih objektif</td></tr>
                                <tr><td>Banyak kata sifat</td><td>Banyak fakta/data</td></tr>
                                <tr><td>Fokus pada gambaran</td><td>Fokus pada hasil observasi</td></tr>
                            </tbody>
                        </table>

                        <h3 id="kritik-esai" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Kritik &amp; Esai Sederhana
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Kritik</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tanggapan/penilaian disertai alasan.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Objektif</li>
                                    <li>› Berdasarkan fakta</li>
                                    <li>› Memiliki alasan</li>
                                    <li>› Tidak menyerang pribadi</li>
                                    <li>› Memberi solusi</li>
                                </ul>
                                <div class="quote-block mt-2">Kebersihan toilet sekolah masih perlu ditingkatkan karena beberapa fasilitas belum terawat.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Esai</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Membahas masalah dari sudut pandang penulis.</p>
                                <div class="structure-block">
                                    <div class="boxed">Pendahuluan</div>
                                    <div class="boxed">Isi</div>
                                    <div class="boxed">Penutup</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">science</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                AI, Kearifan Lokal &amp; Sastra
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 4: AI ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Kecerdasan Artifisial (AI)</div>
                        </div>

                        <h3 id="pengertian-ai" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian AI
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>AI (Artificial Intelligence)</strong> — teknologi yang memungkinkan komputer melakukan tugas
                            yang biasanya membutuhkan kemampuan manusia.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mengenali pola</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memahami bahasa</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Analisis data</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Prediksi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hasilkan konten</div>
                        </div>

                        <h3 id="dampak-ai" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Dampak AI
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✓ Positif</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Membantu pekerjaan</li>
                                    <li>› Mempercepat analisis data</li>
                                    <li>› Membantu pendidikan</li>
                                    <li>› Meningkatkan produktivitas</li>
                                    <li>› Bidang kesehatan</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✗ Negatif</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Informasi palsu</li>
                                    <li>› Masalah privasi</li>
                                    <li>› Ketergantungan teknologi</li>
                                    <li>› Perubahan pekerjaan</li>
                                    <li>› Hak cipta</li>
                                </ul>
                            </div>
                        </div>

                        <h3 id="konjungsi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Konjungsi Intrakalimat &amp; Antarkalimat
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Intrakalimat</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghubungkan unsur dalam satu kalimat.</p>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester">dan</span>
                                    <span class="badge-semester s2">atau</span>
                                    <span class="badge-semester s3">tetapi</span>
                                    <span class="badge-semester s4">karena</span>
                                    <span class="badge-semester s5">sehingga</span>
                                    <span class="badge-semester">jika</span>
                                </div>
                                <div class="quote-block">AI dapat membantu manusia karena mampu memproses data dalam jumlah besar.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Antarkalimat</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghubungkan kalimat dengan sebelumnya.</p>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester s4">Namun,</span>
                                    <span class="badge-semester s4">Selain itu,</span>
                                    <span class="badge-semester s4">Oleh karena itu,</span>
                                    <span class="badge-semester s4">Dengan demikian,</span>
                                </div>
                                <div class="quote-block">AI dapat meningkatkan produktivitas. Namun, penggunaannya tetap harus diawasi.</div>
                            </div>
                        </div>

                        <h3 id="hipotesis" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Hipotesis
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Dugaan/jawaban sementara terhadap suatu masalah yang masih perlu dibuktikan.
                        </p>
                        <div class="structure-block">
                            <div class="boxed">Jika X terjadi → maka Y mungkin terjadi</div>
                            <p class="font-body-sm mt-2">Contoh: Jika penggunaan AI dalam pembelajaran dilakukan secara terarah, maka kemampuan belajar siswa dapat meningkat.</p>
                        </div>
                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-sm">
                            <span class="font-label-sm uppercase font-bold">⚠ Catatan:</span>
                            <span class="font-body-sm"> Hipotesis <strong>bukan</strong> fakta. Harus diuji melalui data/penelitian.</span>
                        </div>
                    </article>

                    {{-- ============ BAB 5: KEARIFAN LOKAL ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Kearifan Lokal</div>
                        </div>

                        <h3 id="pengertian-kearifan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian Kearifan Lokal
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Nilai, pengetahuan, kebiasaan, tradisi, atau budaya yang berkembang dalam suatu masyarakat &amp; diwariskan dari generasi ke generasi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tradisi daerah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bahasa daerah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kesenian</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pakaian adat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Rumah adat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Makanan khas</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Upacara adat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Permainan</div>
                        </div>

                        <h3 id="nilai-kearifan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Nilai dalam Kearifan Lokal
                        </h3>

                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester s4">Gotong royong</span>
                            <span class="badge-semester s4">Kebersamaan</span>
                            <span class="badge-semester s4">Penghormatan</span>
                            <span class="badge-semester s4">Menjaga lingkungan</span>
                            <span class="badge-semester s4">Tanggung jawab</span>
                            <span class="badge-semester s4">Kesopanan</span>
                            <span class="badge-semester s4">Kekeluargaan</span>
                        </div>

                        <h3 id="wawancara" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Wawancara
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Sebelum</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tentukan tujuan</li>
                                    <li>› Tentukan narasumber</li>
                                    <li>› Siapkan pertanyaan</li>
                                    <li>› Siapkan alat dokumentasi</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Saat</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Bersikap sopan</li>
                                    <li>› Bahasa sesuai</li>
                                    <li>› Dengarkan jawaban</li>
                                    <li>› Jangan potong bicara</li>
                                    <li>› Catat informasi penting</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Setelah</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Transkripsikan informasi</li>
                                    <li>› Pilih informasi penting</li>
                                    <li>› Analisis</li>
                                    <li>› Tuliskan hasilnya</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- ============ BAB 6: SASTRA & PROYEK AKHIR ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 6</div>
                            <div class="font-headline-sm uppercase">Pendalaman Sastra &amp; Proyek Akhir</div>
                        </div>

                        <h3 id="unsur-intrinsik" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Unsur Intrinsik
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">Unsur yang berasal dari <strong>dalam</strong> karya sastra.</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Tema &amp; Tokoh</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><strong>Tema</strong> = gagasan utama (persahabatan, keluarga, perjuangan, pendidikan).</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant"><strong>Tokoh</strong> = pelaku cerita (utama / tambahan).</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Penokohan &amp; Alur</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><strong>Penokohan</strong> = cara pengarang menggambarkan karakter (jujur, pemarah, penyabar).</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant"><strong>Alur</strong> = urutan peristiwa (maju / mundur / campuran).</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Latar &amp; Sudut Pandang</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><strong>Latar</strong> = tempat, waktu, suasana.</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant"><strong>Sudut Pandang</strong> = orang pertama (aku/saya) / orang ketiga (dia/mereka).</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Amanat</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan yang ingin disampaikan pengarang kepada pembaca.</p>
                            </div>
                        </div>

                        <h3 id="unsur-ekstrinsik" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Unsur Ekstrinsik
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">Unsur dari <strong>luar</strong> karya yang memengaruhi penciptaan.</p>

                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Latar pengarang</span>
                            <span class="badge-semester s2">Kondisi sosial</span>
                            <span class="badge-semester s3">Budaya</span>
                            <span class="badge-semester s4">Ekonomi</span>
                            <span class="badge-semester s5">Politik</span>
                            <span class="badge-semester">Nilai agama</span>
                            <span class="badge-semester s2">Keadaan masyarakat</span>
                        </div>

                        <h3 id="kritik-sastra" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Kritik Sastra
                        </h3>

                        <div class="structure-block">
                            <div class="font-label-sm uppercase font-bold mb-2">Struktur Kritik:</div>
                            <div class="boxed">Identitas Karya</div>
                            <div class="boxed">Ringkasan</div>
                            <div class="boxed">Kelebihan</div>
                            <div class="boxed">Kekurangan</div>
                            <div class="boxed">Penilaian</div>
                            <div class="boxed">Kesimpulan</div>
                        </div>

                        <h3 id="presentasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Presentasi &amp; Publikasi Karya
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Struktur Presentasi</div>
                                <div class="structure-block">
                                    <div class="boxed">Pembukaan</div>
                                    <div class="boxed">Isi</div>
                                    <div class="boxed">Penutup</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Teknik Presentasi</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Bicara jelas</li>
                                    <li>› Gunakan intonasi</li>
                                    <li>› Jangan baca seluruh slide</li>
                                    <li>› Kontak mata</li>
                                    <li>› Bahasa sopan</li>
                                    <li>› Kuasai materi</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">📤 Sebelum publikasi:</span>
                            <span class="font-body-sm"> Cek fakta · Ejaan benar · Sumber dicantumkan · Tidak menjiplak · Bahasa sesuai</span>
                        </div>
                    </article>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-primary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
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
                    <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>A3</strong></div>
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
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Surat Lamaran</a>
                            <a href="#pengertian-surat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian &amp; Tujuan</a>
                            <a href="#struktur-surat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Struktur</a>
                            <a href="#contoh-surat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Contoh Surat</a>
                            <a href="#jenis-surat" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Jenis Surat</a>
                            <a href="#kata-baku" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Kata Baku</a>
                            <a href="#email-lamaran" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Email Lamaran</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Gaya Hidup Sehat</a>
                            <a href="#teks-nonfiksi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Nonfiksi &amp; Eksposisi</a>
                            <a href="#fakta-opini" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Fakta vs Opini</a>
                            <a href="#persuasif" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Teks Persuasif</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Lingkungan Sekolah</a>
                            <a href="#teks-deskripsi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Teks Deskripsi</a>
                            <a href="#laporan-observasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Laporan Observasi</a>
                            <a href="#kritik-esai" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Kritik &amp; Esai</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — AI</a>
                            <a href="#pengertian-ai" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian AI</a>
                            <a href="#dampak-ai" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Dampak AI</a>
                            <a href="#konjungsi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Konjungsi</a>
                            <a href="#hipotesis" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Hipotesis</a>

                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Kearifan Lokal</a>
                            <a href="#pengertian-kearifan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian</a>
                            <a href="#nilai-kearifan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Nilai-nilai</a>
                            <a href="#wawancara" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Wawancara</a>

                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 6 — Sastra</a>
                            <a href="#unsur-intrinsik" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Unsur Intrinsik</a>
                            <a href="#unsur-ekstrinsik" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Unsur Ekstrinsik</a>
                            <a href="#kritik-sastra" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Kritik Sastra</a>
                            <a href="#presentasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Presentasi &amp; Publikasi</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#994700] hover:shadow-[4px_4px_0px_#994700] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE CTA ==================== --}}
<section class="w-full bg-primary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">PROYEK AKHIR</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Tulis &amp; Presentasikan Karya Terbaikmu
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>surat lamaran</strong>, <strong>berbagai jenis teks</strong>,
                    <strong>sastra</strong>, hingga <strong>kritik &amp; esai</strong>, siswa diharapkan mampu
                    menulis surat lamaran profesional, membuat esai argumentatif, menganalisis karya sastra,
                    dan mempresentasikannya dengan percaya diri.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#994700] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#994700] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    MULAI PROYEK
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

        console.log('%c📚 Modul A3 — Bahasa Indonesia XII Loaded', 'background:#ffdbc8;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
