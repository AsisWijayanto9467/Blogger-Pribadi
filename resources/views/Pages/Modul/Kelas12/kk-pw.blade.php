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

    /* ============ FLOWCHART SYMBOL ============ */
    .fc-symbol {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 60px;
        padding: 4px 10px;
        border: 2px solid #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        background: #ffdbc8;
        box-shadow: 2px 2px 0px #1c1b1b;
        margin: 2px;
    }
    .fc-symbol.oval { border-radius: 20px; background: #ffd167; }
    .fc-symbol.rect { background: #a7f3a0; }
    .fc-symbol.parallel { transform: skewX(-15deg); background: #c9e6ff; }
    .fc-symbol.diamond { background: #ffb4ae; transform: rotate(45deg); }
    .fc-symbol.diamond span { transform: rotate(-45deg); }

    /* ============ STATUS PILL ============ */
    .status-pill {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 3px 10px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
        margin: 2px;
    }
    .status-pending { background: #ffdf9b; }
    .status-paid { background: #c9e6ff; }
    .status-active { background: #a7f3a0; }
    .status-done { background: #e0c0af; }
    .status-error { background: #ffb4ae; }

    /* ============ ERD CARD ============ */
    .erd-card {
        border: 2px solid #1c1b1b;
        background: #fcf9f8;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        overflow: hidden;
        margin: 0 auto;
        max-width: 220px;
    }
    .erd-header {
        background: #1c1b1b;
        color: #ffd167;
        padding: 6px 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.05em;
        text-align: center;
    }
    .erd-body {
        padding: 8px 10px;
    }
    .erd-row {
        padding: 3px 0;
        border-bottom: 1px dashed #e0c0af;
    }
    .erd-row:last-child { border-bottom: none; }
    .erd-pk { color: #994700; font-weight: 700; }
    .erd-fk { color: #006491; font-weight: 700; }

    /* ============ ARCH DIAGRAM ============ */
    .arch-layer {
        border: 2px solid #1c1b1b;
        padding: 0.75rem 1rem;
        text-align: center;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        box-shadow: 3px 3px 0px #1c1b1b;
        background: #fcf9f8;
        margin: 4px auto;
        max-width: 320px;
    }
    .arch-layer.user    { background: #ffdbc8; }
    .arch-layer.frontend{ background: #ffd167; }
    .arch-layer.api     { background: #c9e6ff; }
    .arch-layer.backend { background: #a7f3a0; }
    .arch-layer.db      { background: #ffb4ae; }
    .arch-arrow {
        text-align: center;
        font-family: 'JetBrains Mono', monospace;
        font-size: 20px;
        line-height: 1;
        color: #1c1b1b;
    }

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
            <span class="font-bold text-on-surface">R4 — KK Pemrograman Web</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R4</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">WEB APP</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    KK Pemrograman Web<br>Kelas XII
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap <strong>analisis, perancangan &amp; pembuatan website transaksi</strong>:
                    <strong>Flowchart, DFD, ERD</strong>, penyusunan laporan proyek, <strong>business logic</strong>,
                    <strong>keamanan website</strong>, <strong>testing</strong>, hingga <strong>deployment</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Topik</div>
                    <div class="font-headline-sm text-headline-sm font-bold">37 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~20 Jam</div>
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
                {{-- BAGIAN 1: FLOWCHART --}}
                {{-- ===================================================== --}}
                <div id="flowchart" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">account_tree</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Flowchart — Alur Proses
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian &amp; Fungsi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Flowchart</strong> adalah diagram yang menggambarkan alur proses/langkah-langkah
                            suatu sistem menggunakan simbol-simbol tertentu.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Merancang sistem</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menjelaskan alur</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mempermudah paham</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menemukan bug logika</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Dokumentasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Jelaskan ke klien</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Simbol Flowchart</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Simbol</th><th>Nama</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><span class="fc-symbol oval">OVAL</span></td><td>Terminator</td><td>Mulai/selesai</td></tr>
                                <tr><td><span class="fc-symbol rect">RECT</span></td><td>Process</td><td>Proses</td></tr>
                                <tr><td><span class="fc-symbol parallel"><span>PAR</span></span></td><td>Input/Output</td><td>Input atau output</td></tr>
                                <tr><td><span class="fc-symbol diamond"><span>DEC</span></span></td><td>Decision</td><td>Percabangan</td></tr>
                                <tr><td>→</td><td>Flowline</td><td>Arah alur</td></tr>
                                <tr><td>○</td><td>Connector</td><td>Penghubung</td></tr>
                            </tbody>
                        </table>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh: Flowchart Login</h4>
                        <div class="diagram-box mb-space-md">( MULAI )
    ↓
[ Login ]
    ↓
< Username & password benar? >
    ├── Tidak → [ Pesan Error ] → Login lagi
    └── Ya
         ↓
    [ Dashboard ]
         ↓
     ( SELESAI )</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh: Flowchart Website Penyewaan</h4>
                        <div class="diagram-box">        MULAI
          ↓
    Login/Register
          ↓
  Melihat kendaraan
          ↓
   Pilih kendaraan
          ↓
  Pilih tanggal sewa
          ↓
  Cek ketersediaan
          ↓
   Apakah tersedia?
    ├── Tidak → Pilih kendaraan lain
    └── Ya
         ↓
    Buat pesanan
         ↓
     Pembayaran
         ↓
  Apakah berhasil?
    ├── Tidak → Ulangi bayar
    └── Ya
         ↓
   Pesanan aktif
         ↓
      SELESAI</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Jenis Flowchart</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sistem</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Program</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Dokumen</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Proses</div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 2: DFD --}}
                {{-- ===================================================== --}}
                <div id="dfd" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">schema</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                DFD — Data Flow Diagram
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian DFD
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>DFD</strong> menggambarkan aliran data dalam suatu sistem —
                            data mengalir dari mana, diproses apa, disimpan di mana, dikirim ke siapa.
                        </p>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">4 Komponen DFD</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Komponen</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><strong>External Entity</strong></td><td>Pihak di luar sistem (User, Admin, Petugas)</td></tr>
                                <tr><td><strong>Process</strong></td><td>Proses pengolahan data (Login, Kelola kendaraan, dsb.)</td></tr>
                                <tr><td><strong>Data Flow</strong></td><td>Aliran data antar komponen</td></tr>
                                <tr><td><strong>Data Store</strong></td><td>Tempat penyimpanan (D1 User, D2 Kendaraan, dsb.)</td></tr>
                            </tbody>
                        </table>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Context Diagram (DFD Level 0)</h4>
                        <div class="diagram-box mb-space-md">          Data Login
  User ──────────────────────→
                              │
                              ↓
                      ┌────────────────┐
                      │                │
                      │ Sistem Rental  │
                      │                │
                      └────────────────┘
                         ↑          │
                         │          │
                  Data Pesanan      │
                                    ↓
                                Informasi</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">DFD Level 1</h4>
                        <div class="diagram-box">           USER
             │
             ↓
      (1.0 Login)
             │
             ↓
       D1 Data User


           USER
             │
             ↓
      (2.0 Penyewaan)
             │
      ┌──────┴──────┐
      ↓             ↓
  D2 Kendaraan   D3 Penyewaan


           USER
             │
             ↓
    (3.0 Pembayaran)
             │
             ↓
       D4 Pembayaran</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Flowchart vs DFD</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Flowchart</th><th>DFD</th></tr></thead>
                            <tbody>
                                <tr><td>Alur proses</td><td>Aliran data</td></tr>
                                <tr><td>Fokus langkah</td><td>Fokus data</td></tr>
                                <tr><td>Ada decision</td><td>Ada process</td></tr>
                                <tr><td>Logika program</td><td>Analisis sistem</td></tr>
                                <tr><td>Urutan</td><td>Perpindahan data</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Cara Ingat:</span>
                            <span class="font-body-sm"> Flowchart = proses berjalan bagaimana? · DFD = data berjalan ke mana?</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 3: ERD --}}
                {{-- ===================================================== --}}
                <div id="erd" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">database</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 3</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                ERD — Entity Relationship Diagram
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>ERD</strong> merancang struktur database &amp; hubungan antarentitas:
                            tabel, atribut, primary key, foreign key, dan kardinalitas.
                        </p>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Entity &amp; Attribute</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="erd-card">
                                <div class="erd-header">USERS</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row">nama</div>
                                    <div class="erd-row">email</div>
                                    <div class="erd-row">password</div>
                                    <div class="erd-row">role</div>
                                </div>
                            </div>
                            <div class="erd-card">
                                <div class="erd-header">KENDARAAN</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row">kode</div>
                                    <div class="erd-row">nama</div>
                                    <div class="erd-row">harga_sewa</div>
                                    <div class="erd-row">stok</div>
                                    <div class="erd-row">status</div>
                                </div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Kardinalitas</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : 1</div>
                                <div class="diagram-box">User ─── Profile
 1        1</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : N</div>
                                <div class="diagram-box">User
  │
  ├─ Penyewaan 1
  ├─ Penyewaan 2
  └─ Penyewaan 3</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">M : N</div>
                                <div class="diagram-box">Produk ↔ Pesanan
   (butuh pivot:
    detail_pesanan)</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">Contoh ERD Website Rental</h4>
                        <div class="diagram-box">┌──────────────┐
│    USERS     │
├──────────────┤
│ PK id        │
│ nama         │
│ email        │
│ password     │
│ role         │
└──────┬───────┘
       │ 1 : N
       ↓
┌──────────────┐
│  PENYEWAAN   │
├──────────────┤
│ PK id        │
│ FK user_id   │
│ tgl_mulai    │
│ tgl_selesai  │
│ total        │
│ status       │
└──────┬───────┘
       │ 1 : N
       ↓
┌──────────────────┐
│ DETAIL_PENYEWAAN │
├──────────────────┤
│ PK id            │
│ FK penyewaan_id  │
│ FK kendaraan_id  │
│ jumlah           │
│ harga            │
└────────┬─────────┘
         │ N : 1
         ↓
┌──────────────┐
│  KENDARAAN   │
├──────────────┤
│ PK id        │
│ nama         │
│ harga_sewa   │
│ stok         │
└──────────────┘</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 4: LAPORAN PROYEK --}}
                {{-- ===================================================== --}}
                <div id="laporan" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">description</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 4</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Penyusunan Laporan Website
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <div class="diagram-box mb-space-md">HALAMAN JUDUL
LEMBAR PENGESAHAN
KATA PENGANTAR
DAFTAR ISI

BAB I PENDAHULUAN
BAB II LANDASAN TEORI
BAB III ANALISIS DAN PERANCANGAN
BAB IV IMPLEMENTASI DAN PENGUJIAN
BAB V PENUTUP

DAFTAR PUSTAKA
LAMPIRAN</div>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>BAB I — Pendahuluan</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">A. Latar Belakang</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Menjelaskan masalah yang terjadi, alasan website dibuat, kondisi sebelum sistem, dan solusi yang ditawarkan.
                                        </p>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">B. Identifikasi Masalah</div>
                                        <ul class="font-code-inline text-code-inline space-y-1">
                                            <li>› Pencatatan transaksi masih manual</li>
                                            <li>› Informasi stok tidak selalu diperbarui</li>
                                            <li>› Laporan transaksi belum terorganisir</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">C. Rumusan Masalah</div>
                                        <ul class="font-code-inline text-code-inline space-y-1">
                                            <li>› Bagaimana membuat website penyewaan?</li>
                                            <li>› Bagaimana mengelola transaksi?</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">D. Tujuan &amp; E. Manfaat</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Membuat sistem informasi penyewaan berbasis website yang membantu pengelolaan data &amp; transaksi.
                                        </p>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>BAB II — Landasan Teori</summary>
                                <div class="p-space-md">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Website</span>
                                        <span class="badge-semester s2">Database</span>
                                        <span class="badge-semester s3">MySQL</span>
                                        <span class="badge-semester s4">Laravel</span>
                                        <span class="badge-semester s5">React</span>
                                        <span class="badge-semester">API</span>
                                        <span class="badge-semester s2">HTML/CSS/JS</span>
                                        <span class="badge-semester s3">ERD</span>
                                        <span class="badge-semester s4">DFD</span>
                                        <span class="badge-semester s5">Flowchart</span>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>BAB III — Analisis &amp; Perancangan</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Isi Bab:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Analisis kebutuhan (user &amp; admin)</li>
                                        <li>› Flowchart (login, registrasi, transaksi, pembayaran)</li>
                                        <li>› DFD (Context Diagram, Level 1, Level 2)</li>
                                        <li>› ERD (database &amp; relasi)</li>
                                        <li>› Struktur database (tabel-tabel)</li>
                                        <li>› Wireframe / UI Design</li>
                                    </ul>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>BAB IV — Implementasi &amp; Pengujian</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">A. Implementasi</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Screenshot &amp; penjelasan halaman: Login, Dashboard, Kendaraan, Transaksi.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-1 mt-3 text-primary">B. Pengujian (Black Box Testing)</div>
                                    <table class="brutal-table">
                                        <thead><tr><th>Fitur</th><th>Input</th><th>Hasil</th><th>Status</th></tr></thead>
                                        <tbody>
                                            <tr><td>Login</td><td>Email+pass benar</td><td>Masuk dashboard</td><td>✓</td></tr>
                                            <tr><td>Login</td><td>Password salah</td><td>Pesan error</td><td>✓</td></tr>
                                            <tr><td>Tambah kendaraan</td><td>Data lengkap</td><td>Data tersimpan</td><td>✓</td></tr>
                                            <tr><td>Transaksi</td><td>Data valid</td><td>Transaksi dibuat</td><td>✓</td></tr>
                                            <tr><td>Pembayaran</td><td>Data valid</td><td>Status berubah</td><td>✓</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>BAB V — Penutup</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">A. Kesimpulan</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Sistem informasi penyewaan berbasis website berhasil dibuat untuk membantu pengelolaan data.
                                        </p>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-primary">B. Saran</div>
                                        <ul class="font-code-inline text-code-inline space-y-1">
                                            <li>› Payment gateway</li>
                                            <li>› Notifikasi</li>
                                            <li>› Laporan PDF</li>
                                            <li>› Aplikasi mobile</li>
                                            <li>› Integrasi maps</li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 5: WEBSITE TRANSAKSI --}}
                {{-- ===================================================== --}}
                <div id="transaksi" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">shopping_cart</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 5</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Website Transaksi/Peminjaman/Penyewaan
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pola Sistem Transaksi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Transaksi</div>
                                <div class="diagram-box">Produk
  ↓
Pesanan
  ↓
Pembayaran
  ↓
Selesai</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Peminjaman</div>
                                <div class="diagram-box">Barang
  ↓
Pengajuan
  ↓
Persetujuan
  ↓
Dipinjam
  ↓
Pengembalian</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Penyewaan</div>
                                <div class="diagram-box">Barang
  ↓
Pemesanan
  ↓
Pembayaran
  ↓
Digunakan
  ↓
Pengembalian
  ↓
Denda?</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">3 Role Pengguna</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2">👤 USER</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Register &amp; login</li>
                                    <li>› Lihat &amp; cari kendaraan</li>
                                    <li>› Buat penyewaan</li>
                                    <li>› Pembayaran</li>
                                    <li>› Lihat status</li>
                                    <li>› Ajukan pengembalian</li>
                                </ul>
                            </div>
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2">🛡️ PETUGAS</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Periksa transaksi</li>
                                    <li>› Periksa pembayaran</li>
                                    <li>› Proses pengambilan</li>
                                    <li>› Proses pengembalian</li>
                                    <li>› Cek kondisi kendaraan</li>
                                </ul>
                            </div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2">⚙️ ADMIN</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kelola user</li>
                                    <li>› Kelola kendaraan</li>
                                    <li>› Kelola kategori</li>
                                    <li>› Lihat transaksi &amp; laporan</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Alur Transaksi Penyewaan</h4>
                        <div class="diagram-box">User
 ↓
Register/Login
 ↓
Melihat kendaraan
 ↓
Memilih kendaraan
 ↓
Memilih tanggal
 ↓
Sistem mengecek ketersediaan
 ↓
Tersedia?
 ├── Tidak → Pilih kendaraan/tanggal lain
 └── Ya
      ↓
   Buat penyewaan
      ↓
 Menunggu pembayaran
      ↓
    Pembayaran
      ↓
 Pembayaran berhasil?
 ├── Tidak → Menunggu pembayaran
 └── Ya
      ↓
 Penyewaan dikonfirmasi
      ↓
 Kendaraan digunakan
      ↓
 Pengembalian
      ↓
 Pemeriksaan kondisi
      ↓
 Ada denda?
 ├── Ya → Hitung denda
 └── Tidak
      ↓
 Transaksi selesai</div>
                    </article>

                    {{-- ============ STATUS & BUSINESS LOGIC ============ --}}
                    <article id="business-logic" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Status Transaksi &amp; Business Logic
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Status Transaksi</h4>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="status-pill status-pending">PENDING</span>
                            <span class="status-pill status-pending">MENUNGGU PEMBAYARAN</span>
                            <span class="status-pill status-paid">DIBAYAR</span>
                            <span class="status-pill status-paid">DIPROSES</span>
                            <span class="status-pill status-active">DISEWA</span>
                            <span class="status-pill status-active">MENUNGGU PENGEMBALIAN</span>
                            <span class="status-pill status-done">DIKEMBALIKAN</span>
                            <span class="status-pill status-done">SELESAI</span>
                            <span class="status-pill status-error">DITOLAK</span>
                            <span class="status-pill status-error">ADA DENDA</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Business Logic</h4>
                        <div class="code-block mb-space-md"><code>IF stok tersedia
    THEN transaksi dapat dibuat
ELSE
    transaksi ditolak

IF pembayaran berhasil
    THEN status = "dibayar"
ELSE
    status = "menunggu pembayaran"

IF terlambat
    THEN hitung denda
ELSE
    tidak ada denda</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh Perhitungan</h4>
                        <div class="code-block"><code>Tanggal mulai   = 10 Oktober
Tanggal selesai = 15 Oktober
Durasi          = 6 hari

Harga per hari = Rp100.000
Total = 100.000 × 6 = Rp600.000</code></div>
                    </article>

                    {{-- ============ ARSITEKTUR ============ --}}
                    <article id="arsitektur" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Arsitektur Website
                        </h3>

                        <div class="mb-space-md">
                            <div class="arch-layer user">👤 USER</div>
                            <div class="arch-arrow">↓</div>
                            <div class="arch-layer frontend">FRONTEND — React / Vue / Blade</div>
                            <div class="arch-arrow">↓ HTTP</div>
                            <div class="arch-layer api">API — REST API</div>
                            <div class="arch-arrow">↓</div>
                            <div class="arch-layer backend">BACKEND — Laravel</div>
                            <div class="arch-arrow">↓</div>
                            <div class="arch-layer db">DATABASE — MySQL</div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Frontend: React</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Backend: Laravel</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">DB: MySQL</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tool: VS Code</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Laragon</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Postman</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Git/GitHub</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Figma</div>
                        </div>
                    </article>

                    {{-- ============ KEAMANAN ============ --}}
                    <article id="keamanan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Keamanan Website
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Password hashing</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Validasi input</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authentication</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authorization</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">CSRF protection</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Prepared statement</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Role-based access</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Validasi file upload</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">No credentials in code</div>
                        </div>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">⚠ Contoh:</span>
                            <span class="font-body-sm"> User <strong>TIDAK BOLEH</strong> membuka <code>/admin/users</code>. Sistem harus periksa role terlebih dahulu.</span>
                        </div>
                    </article>

                    {{-- ============ TESTING ============ --}}
                    <article id="testing" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Testing Website
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Login</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Register</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">CRUD</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Transaksi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pembayaran</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pengembalian</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Denda</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Role</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">API</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Database</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Validasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Security</div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 6: ALUR PROJECT A-Z --}}
                {{-- ===================================================== --}}
                <div id="alur-project" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">flag</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 6</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Alur Pengerjaan Project A–Z
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            16 tahap wajib dari awal sampai selesai:
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="space-y-2">
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">01.</strong> Identifikasi Masalah
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">02.</strong> Analisis Kebutuhan
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">03.</strong> Flowchart
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">04.</strong> DFD
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">05.</strong> ERD
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">06.</strong> Normalisasi Database
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">07.</strong> Desain UI/UX
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">08.</strong> Pembuatan Database
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">09.</strong> Backend / API
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">10.</strong> Frontend
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">11.</strong> Integrasi
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">12.</strong> Testing
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">13.</strong> Debugging
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">14.</strong> Dokumentasi
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">15.</strong> Presentasi
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">16.</strong> Deployment
                                </div>
                            </div>
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
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R4</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>37</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~20 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Perancangan</div>
                            <a href="#flowchart" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Flowchart</a>
                            <a href="#dfd" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. DFD</a>
                            <a href="#erd" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. ERD</a>
                            <a href="#laporan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Laporan Proyek</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Website Transaksi</div>
                            <a href="#transaksi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. Website Transaksi</a>
                            <a href="#business-logic" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Business Logic</a>
                            <a href="#arsitektur" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">7. Arsitektur</a>
                            <a href="#keamanan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">8. Keamanan</a>
                            <a href="#testing" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">9. Testing</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Alur Project</div>
                            <a href="#alur-project" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">10. Alur A–Z (16 Tahap)</a>
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
<section class="w-full bg-primary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Website Transaksi End-to-End
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>flowchart</strong>, <strong>DFD</strong>, <strong>ERD</strong>,
                    <strong>business logic</strong>, <strong>keamanan</strong>, hingga <strong>testing</strong>,
                    siswa diharapkan mampu membangun website transaksi/peminjaman/penyewaan secara <strong>end-to-end</strong>
                    — lengkap dengan <strong>laporan proyek</strong> dan siap <strong>dipresentasikan</strong>.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#ff7a00] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#ff7a00] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    MULAI PROYEK
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

        console.log('%c🌐 Modul R4 — KK Pemrograman Web XII Loaded', 'background:#ff7a00;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
