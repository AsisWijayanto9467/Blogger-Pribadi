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

    /* ============ PHONE MOCKUP ============ */
    .phone-frame {
        border: 3px solid #1c1b1b;
        border-radius: 18px;
        padding: 12px;
        background: #1c1b1b;
        box-shadow: 4px 4px 0px #ff7a00;
        max-width: 280px;
        margin: 0 auto;
    }
    .phone-screen {
        background: #fcf9f8;
        border-radius: 10px;
        padding: 12px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        line-height: 1.5;
        color: #1c1b1b;
        min-height: 200px;
    }
    .phone-notch {
        width: 60px;
        height: 6px;
        background: #1c1b1b;
        border-radius: 3px;
        margin: 0 auto 8px;
    }

    /* ============ WIREFRAME ============ */
    .wireframe {
        border: 2px dashed #1c1b1b;
        background: #fcf9f8;
        padding: 0.75rem;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        line-height: 1.6;
        text-align: center;
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

    /* ============ HTTP METHOD BADGES ============ */
    .method-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
    }
    .method-get    { background: #c9e6ff; }
    .method-post   { background: #a7f3a0; }
    .method-put    { background: #ffdf9b; }
    .method-delete { background: #ffb4ae; }

    /* ============ LIFECYCLE BADGE ============ */
    .lifecycle-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 3px 10px;
        border: 2px solid #1c1b1b;
        background: #ffdbc8;
        box-shadow: 2px 2px 0px #1c1b1b;
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
            <span class="font-bold text-on-surface">R5 — KK PPB</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R5</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">MOBILE</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    KK Pemrograman<br>Perangkat Bergerak
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lanjutan yang membahas <strong>arsitektur aplikasi mobile</strong>, <strong>wireframe &amp; prototype</strong>,
                    <strong>state management</strong>, <strong>local storage &amp; database</strong>, <strong>API &amp; JSON</strong>,
                    <strong>device features</strong> (kamera, GPS, push notif), hingga <strong>keamanan, testing, publishing</strong>,
                    dan <strong>Capstone Project 13 tahap</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Topik</div>
                    <div class="font-headline-sm text-headline-sm font-bold">55 Topik</div>
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
                {{-- SEMESTER 1 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-1" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">phone_iphone</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Tools, Arsitektur, Data &amp; Fitur Perangkat
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAGIAN 1: UI/UX & ARSITEKTUR ============ --}}
                    <article id="ui-ux" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Review Arsitektur Aplikasi Mobile
                        </h3>

                        {{-- UI --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">A. UI — User Interface</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Tampilan yang dilihat dan digunakan pengguna: tombol, teks, gambar, form, menu, icon, warna, layout, navigasi.
                        </p>

                        <div class="phone-frame mb-space-md">
                            <div class="phone-screen">
                                <div class="phone-notch"></div>
                                <div style="text-align:center;font-weight:700;margin-bottom:8px;">LOGIN</div>
                                <div style="font-size:10px;">Email</div>
                                <div style="border-bottom:1px solid #1c1b1b;margin-bottom:6px;">&nbsp;</div>
                                <div style="font-size:10px;">Password</div>
                                <div style="border-bottom:1px solid #1c1b1b;margin-bottom:8px;">&nbsp;</div>
                                <div style="background:#ff7a00;color:#1c1b1b;padding:4px;text-align:center;font-weight:bold;">LOGIN</div>
                            </div>
                        </div>

                        {{-- UX --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg">B. UX — User Experience</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Pengalaman pengguna ketika menggunakan aplikasi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mudah dipakai?</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Navigasi jelas?</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Proses cepat?</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Fitur mudah ditemukan?</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Error mudah dipahami?</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Nyaman digunakan?</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Perbedaan UI &amp; UX</h4>
                        <table class="brutal-table">
                            <thead><tr><th>UI</th><th>UX</th></tr></thead>
                            <tbody>
                                <tr><td>Tampilan</td><td>Pengalaman</td></tr>
                                <tr><td>Warna</td><td>Kemudahan penggunaan</td></tr>
                                <tr><td>Tombol</td><td>Alur penggunaan</td></tr>
                                <tr><td>Font</td><td>Navigasi</td></tr>
                                <tr><td>Icon</td><td>Kenyamanan</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ WIREFRAME & PROTOTYPE ============ --}}
                    <article id="wireframe" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Wireframe &amp; Prototype
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Wireframe</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Rancangan awal tampilan — belum fokus warna.</p>
                                <div class="wireframe">
                                    <div style="font-weight:700;">HEADER</div>
                                    <div style="border-top:1px dashed #1c1b1b;border-bottom:1px dashed #1c1b1b;padding:16px 0;margin:6px 0;">IMAGE</div>
                                    <div>Nama Produk</div>
                                    <div>Harga</div>
                                    <div style="background:#ffd167;border:2px solid #1c1b1b;display:inline-block;padding:3px 12px;margin-top:6px;font-weight:700;">BELI</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Prototype</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Simulasi alur aplikasi.</p>
                                <div class="diagram-box">Login
  ↓
Home
  ↓
Detail Produk
  ↓
Checkout
  ↓
Pembayaran</div>
                                <p class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Tools:</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">Figma</span>
                                    <span class="badge-semester s3">Adobe XD</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- ============ ARSITEKTUR & LIFECYCLE ============ --}}
                    <article id="arsitektur" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Arsitektur Aplikasi &amp; Lifecycle
                        </h3>

                        <div class="diagram-box mb-space-md">UI
 ↓
Logic
 ↓
Data
 ↓
Database / API</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Activity, Fragment &amp; Intent</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Activity</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Satu layar utama.</p>
                                <div class="font-code-inline text-code-inline mt-2">LoginActivity<br>HomeActivity<br>ProfileActivity</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Fragment</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bagian UI modular dalam Activity.</p>
                                <div class="font-code-inline text-code-inline mt-2">HomeFragment<br>ProfileFragment<br>SettingsFragment</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Intent</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Aksi / pindah komponen.</p>
                                <div class="diagram-box">LoginActivity
     ↓
  Intent
     ↓
HomeActivity</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg">Lifecycle Activity</h4>
                        <div class="diagram-box mb-space-md">onCreate()
   ↓
onStart()
   ↓
onResume()
   ↓
onPause()
   ↓
onStop()
   ↓
onRestart() / onDestroy()</div>

                        <div class="flex flex-wrap gap-1">
                            <span class="lifecycle-badge">onCreate()</span>
                            <span class="lifecycle-badge">onStart()</span>
                            <span class="lifecycle-badge">onResume()</span>
                            <span class="lifecycle-badge">onPause()</span>
                            <span class="lifecycle-badge">onStop()</span>
                            <span class="lifecycle-badge">onRestart()</span>
                            <span class="lifecycle-badge">onDestroy()</span>
                        </div>
                    </article>

                    {{-- ============ CROSS-PLATFORM & STATE ============ --}}
                    <article id="state" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Cross-Platform &amp; State Management
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Cross-Platform</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester">Flutter (Dart)</span>
                                    <span class="badge-semester s3">React Native</span>
                                </div>
                                <div class="diagram-box">Satu Basis Kode
      ↓
Android + iOS</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Struktur Flutter</div>
                                <div class="diagram-box">MaterialApp
 └── Scaffold
      ├── AppBar
      └── Body</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">State — Data yang Berubah</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>State</strong> adalah data/kondisi yang berubah selama aplikasi berjalan.
                        </p>

                        <div class="code-block mb-space-md"><code>// Contoh state sederhana di Flutter
int jumlah = 1;

setState(() {
    jumlah++;
});
// UI diperbarui otomatis</code></div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Status login</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Jumlah keranjang</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Data form</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tema aplikasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Loading</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hasil API</div>
                        </div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Library State:</span>
                            <span class="font-body-sm"> Provider · Riverpod · Bloc/Cubit · GetX</span>
                        </div>
                    </article>

                    {{-- ============ LOCAL STORAGE ============ --}}
                    <article id="local-storage" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Local Storage &amp; Database Lokal
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Shared Preferences</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Key-Value sederhana.</p>
                                <div class="code-block"><code>nama → "Andi"
tema → "dark"
isLogin → true</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">SQLite</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Database relasional lokal.</p>
                                <div class="code-block"><code>SELECT * FROM users;</code></div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Room Database (Android)</h4>
                        <div class="diagram-box mb-space-md">Aplikasi
   ↓
Room
   ↓
SQLite</div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Entity</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mewakili tabel.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">DAO</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Operasi database.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Database</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Penghubung aplikasi &amp; DB.</p>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg">Hive / AsyncStorage</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Hive</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Database lokal ringan (Flutter).</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">AsyncStorage</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Key-Value (React Native).</p>
                            </div>
                        </div>

                        {{-- CRUD --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg">CRUD Database Lokal</h4>
                        <table class="brutal-table">
                            <thead><tr><th>CRUD</th><th>Arti</th><th>Contoh</th></tr></thead>
                            <tbody>
                                <tr><td><strong>C</strong>reate</td><td>Tambah</td><td>Tambah catatan</td></tr>
                                <tr><td><strong>R</strong>ead</td><td>Baca</td><td>Lihat catatan</td></tr>
                                <tr><td><strong>U</strong>pdate</td><td>Ubah</td><td>Edit catatan</td></tr>
                                <tr><td><strong>D</strong>elete</td><td>Hapus</td><td>Hapus catatan</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ API & JSON ============ --}}
                    <article id="api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            API, Web Service &amp; JSON
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>API</strong> memungkinkan aplikasi mobile berkomunikasi dengan server.
                        </p>

                        <div class="diagram-box mb-space-md">Mobile App
    ↓
    API
    ↓
Backend
    ↓
Database</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">JSON</div>
                                <div class="code-block"><code>{
    "id": 1,
    "nama": "Andi",
    "kelas": "XII RPL"
}</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">XML</div>
                                <div class="code-block"><code>&lt;siswa&gt;
    &lt;nama&gt;Andi&lt;/nama&gt;
    &lt;kelas&gt;XII RPL&lt;/kelas&gt;
&lt;/siswa&gt;</code></div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Parsing JSON</h4>
                        <div class="diagram-box mb-space-md">JSON
 ↓
Parsing
 ↓
Object/Model
 ↓
UI</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">HTTP Method</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Method</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><span class="method-badge method-get">GET</span></td><td>Mengambil data</td></tr>
                                <tr><td><span class="method-badge method-post">POST</span></td><td>Membuat/mengirim data</td></tr>
                                <tr><td><span class="method-badge method-put">PUT</span></td><td>Mengubah data</td></tr>
                                <tr><td><span class="method-badge method-delete">DELETE</span></td><td>Menghapus data</td></tr>
                            </tbody>
                        </table>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">HTTP Client Library</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Flutter</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">http</span>
                                    <span class="badge-semester s2">Dio</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">React Native</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s3">Fetch</span>
                                    <span class="badge-semester s3">Axios</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Android Native</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s4">Retrofit</span>
                                    <span class="badge-semester s4">OkHttp</span>
                                </div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Asynchronous Programming</h4>
                        <div class="diagram-box mb-space-md">Request API
    ↓
Menunggu server
    ↓
Response
    ↓
Update UI</div>

                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester s5">async</span>
                            <span class="badge-semester s5">await</span>
                            <span class="badge-semester s5">Future / Promise</span>
                        </div>

                        {{-- Loading State --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg">Loading, Success &amp; Error</h4>
                        <div class="diagram-box">LOADING
   ↓
Request API
   ↓
 ┌───┴───┐
 ↓       ↓
SUCCESS ERROR
 ↓       ↓
Tampil  Tampil
data    error</div>
                    </article>

                    {{-- ============ DEVICE FEATURES ============ --}}
                    <article id="device" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Device Features
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">📷 Kamera</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">📍 GPS</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">🎤 Microphone</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">📱 Sensor</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">🖼️ Galeri</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">🔔 Notifikasi</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Kamera</h4>
                        <div class="diagram-box mb-space-md">User
 ↓
Tekan tombol kamera
 ↓
Permission
 ↓
Kamera
 ↓
Ambil foto
 ↓
Aplikasi menerima gambar</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">GPS / Geolocation</h4>
                        <div class="diagram-box mb-space-md">GPS
 ↓
Latitude + Longitude
 ↓
Map
 ↓
Marker</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Contoh Penggunaan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Aplikasi peta</li>
                                    <li>› Tracking kendaraan</li>
                                    <li>› Absensi berbasis lokasi</li>
                                    <li>› Pencarian lokasi</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Perhatikan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Permission</li>
                                    <li>› Privasi</li>
                                    <li>› Penggunaan baterai</li>
                                    <li>› Akurasi</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Push Notification</h4>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2 text-primary">Contoh Notifikasi</div>
                            <div class="code-block"><code>🔔 Pesanan berhasil!
Pesanan #123 sedang diproses.</code></div>
                        </div>

                        <div class="diagram-box">Server
 ↓
Notification Service
 ↓
Smartphone
 ↓
Notification</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">verified_user</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Keamanan, Testing, Dokumentasi &amp; Deployment
                            </h2>
                        </div>
                    </div>

                    {{-- ============ KEAMANAN ============ --}}
                    <article id="keamanan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Keamanan Aplikasi Mobile
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Keamanan bertujuan melindungi data pengguna, akun, token, komunikasi, database, dan aplikasi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authentication</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authorization</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Encryption</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Secure Storage</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Input Validation</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Secure API</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Enkripsi Data Sensitif</h4>
                        <div class="diagram-box mb-space-md">Data Asli
    ↓
Encryption
    ↓
Ciphertext</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Secure Storage</h4>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Android Keystore</span>
                            <span class="badge-semester s2">iOS Keychain</span>
                            <span class="badge-semester s3">Secure Storage Library</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Input Validation</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✓ Valid</div>
                                <div class="code-block"><code>Email:
[andi@gmail.com] ✓</code></div>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✗ Tidak Valid</div>
                                <div class="code-block"><code>Email:
[andi]

→ Email tidak valid.</code></div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Exception Handling</h4>
                        <div class="diagram-box">try
 ↓
jalankan kode
 ↓
berhasil?
 ├── Ya → lanjut
 └── Tidak → catch/error</div>
                    </article>

                    {{-- ============ OPTIMASI ============ --}}
                    <article id="optimasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Optimasi Performa
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kecepatan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">RAM</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">CPU</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ukuran App</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Jaringan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Baterai</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Responsivitas</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Memory Leak</h4>
                        <div class="diagram-box mb-space-md">Penggunaan RAM
      ↑
      ↑
      ↑
   Semakin besar → App crash</div>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <span class="font-label-sm uppercase font-bold">⚠ Pencegahan:</span>
                            <span class="font-body-sm"> Lepas resource · Kelola lifecycle · Hindari simpan object besar · Hentikan listener/subscription</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Ukuran APK / App Bundle</h4>
                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester">Hapus asset tidak dipakai</span>
                            <span class="badge-semester s2">Optimasi gambar</span>
                            <span class="badge-semester s3">Kurangi dependency</span>
                            <span class="badge-semester s4">Build release</span>
                        </div>
                    </article>

                    {{-- ============ TESTING ============ --}}
                    <article id="testing" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Testing &amp; Debugging
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Unit Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menguji bagian kecil program.</p>
                                <div class="code-block"><code>Input: 10000 + 5000
Expected: 15000

Result: PASS ✓</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Widget/UI Testing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menguji tampilan &amp; interaksi.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tombol muncul?</li>
                                    <li>› Input ada?</li>
                                    <li>› Navigasi jalan?</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Debugging</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mencari &amp; memperbaiki error.</p>
                                <div class="diagram-box">Bug
 ↓
Cari sebab
 ↓
Analisis
 ↓
Perbaiki
 ↓
Test ulang</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Jenis Error</h4>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Syntax Error</span>
                            <span class="badge-semester s2">Logic Error</span>
                            <span class="badge-semester s3">Runtime Error</span>
                            <span class="badge-semester s4">Network Error</span>
                            <span class="badge-semester s5">UI Error</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Logcat / Developer Tools</h4>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester s3">INFO</span>
                            <span class="badge-semester s4">DEBUG</span>
                            <span class="badge-semester s2">WARNING</span>
                            <span class="badge-semester s5">ERROR</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Beta Testing</h4>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ukuran layar</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Versi OS</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Koneksi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Performa</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Usability</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Crash</div>
                        </div>
                    </article>

                    {{-- ============ DOKUMENTASI ============ --}}
                    <article id="dokumentasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Dokumentasi &amp; User Manual
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">📘 Dokumentasi Teknik</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Untuk <strong>developer</strong>.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Info project &amp; versi</li>
                                    <li>› Cara instalasi</li>
                                    <li>› Struktur project</li>
                                    <li>› API documentation</li>
                                    <li>› Diagram (flowchart, ERD)</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">📖 User Manual</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Untuk <strong>pengguna</strong>.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Cara install</li>
                                    <li>› Cara login</li>
                                    <li>› Cara pakai fitur</li>
                                    <li>› Ubah profil</li>
                                    <li>› Logout &amp; troubleshooting</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Struktur Project (Contoh)</h4>
                        <div class="code-block"><code>lib/
 ├── models/
 ├── screens/
 ├── services/
 ├── widgets/
 └── main.dart</code></div>
                    </article>

                    {{-- ============ PITCHING & DEPLOYMENT ============ --}}
                    <article id="deployment" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Presentasi, Deployment &amp; Publikasi
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Pitching Produk</h4>
                        <div class="diagram-box mb-space-md">Masalah
 ↓
Solusi
 ↓
Target Pengguna
 ↓
Fitur
 ↓
Teknologi
 ↓
Demo
 ↓
Keunggulan
 ↓
Kesimpulan</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">APK vs AAB</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>APK</th><th>AAB</th></tr></thead>
                            <tbody>
                                <tr><td>Paket aplikasi Android</td><td>Format bundle distribusi</td></tr>
                                <tr><td>Instal langsung</td><td>Umumnya via Google Play</td></tr>
                                <tr><td>Cocok testing/manual install</td><td>Play generate APK sesuai perangkat</td></tr>
                            </tbody>
                        </table>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Signing</h4>
                        <div class="diagram-box mb-space-md">Source Code
 ↓
Build Release
 ↓
Signing
 ↓
APK / AAB
 ↓
Distribution</div>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <span class="font-label-sm uppercase font-bold">⚠ Penting:</span>
                            <span class="font-body-sm"> Signing key <strong>harus dijaga</strong>. Kehilangan = masalah serius saat update.</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Google Play Console</h4>
                        <div class="diagram-box mb-space-md">Buat akun developer
 ↓
Buat aplikasi
 ↓
Upload AAB
 ↓
Lengkapi info
 ↓
Isi keamanan &amp; privasi
 ↓
Testing
 ↓
Review
 ↓
Release</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Privacy &amp; Security</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✓ Lakukan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Jelaskan data dikumpulkan</li>
                                    <li>› Jelaskan alasan</li>
                                    <li>› Buat privacy policy</li>
                                    <li>› Minta permission sesuai</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✗ Hindari</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Minta permission tidak perlu</li>
                                    <li>› Simpan data tanpa izin</li>
                                    <li>› Bagikan data tanpa info</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- ============ CAPSTONE PROJECT ============ --}}
                    <article id="capstone" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CAPSTONE PROJECT</div>
                            <div class="font-headline-sm uppercase">Proyek Akhir Aplikasi Mobile</div>
                        </div>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            <strong>Capstone Project</strong> adalah proyek akhir yang menggabungkan seluruh materi.
                            Contoh aplikasi: rental, perpustakaan, sekolah, kasir, marketplace, absensi, pengelolaan tugas, layanan masyarakat.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>Tahap 1–5: Ide &amp; Desain</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div><strong>Tahap 1 — Menentukan Masalah:</strong> Siswa kesulitan mengelola tugas.</div>
                                    <div><strong>Tahap 2 — Solusi:</strong> Aplikasi manajemen tugas siswa.</div>
                                    <div><strong>Tahap 3 — Analisis Kebutuhan:</strong> Target pengguna, fitur, data, API, database, device feature.</div>
                                    <div><strong>Tahap 4 — UI/UX:</strong> Wireframe → Prototype → UI Design (Figma).</div>
                                    <div><strong>Tahap 5 — Membuat Aplikasi:</strong></div>
                                    <div class="diagram-box">Splash
  ↓
Login
  ↓
Home
  ├── Daftar Tugas
  ├── Tambah Tugas
  ├── Detail Tugas
  └── Profile</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Tahap 6–9: Data, API, Device &amp; Testing</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div><strong>Tahap 6 — Database Lokal:</strong> Data offline, cache, pengaturan.</div>
                                    <div><strong>Tahap 7 — API:</strong></div>
                                    <div class="diagram-box">Mobile App
 ↓
REST API
 ↓
Backend
 ↓
Database</div>
                                    <div><strong>Tahap 8 — Device Feature:</strong> Camera, GPS, Gallery, Notification.</div>
                                    <div><strong>Tahap 9 — Testing:</strong> Unit Test, UI Test, Manual Test, Beta Test.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Tahap 10–13: Optimasi, Build, Dokumentasi &amp; Presentasi</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div><strong>Tahap 10 — Optimasi:</strong> Performa, memory, ukuran, loading, error handling.</div>
                                    <div><strong>Tahap 11 — Build:</strong></div>
                                    <div class="diagram-box">Debug Build
     ↓
Testing
     ↓
Release Build
     ↓
APK/AAB</div>
                                    <div><strong>Tahap 12 — Dokumentasi:</strong> README, Dokumentasi Teknik, API Documentation, User Manual, Flowchart, ERD.</div>
                                    <div><strong>Tahap 13 — Presentasi:</strong> Masalah → Solusi → Target → Fitur → Teknologi → Demo → Hasil.</div>
                                </div>
                            </details>
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
                            <div class="flex justify-between"><span>Kode:</span><strong>R5</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>55</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Semester 1</div>
                            <a href="#ui-ux" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. UI/UX &amp; Arsitektur</a>
                            <a href="#wireframe" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Wireframe &amp; Prototype</a>
                            <a href="#arsitektur" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. Lifecycle &amp; Intent</a>
                            <a href="#state" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Cross-Platform &amp; State</a>
                            <a href="#local-storage" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. Local Storage &amp; DB</a>
                            <a href="#api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. API, JSON &amp; HTTP</a>
                            <a href="#device" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">7. Device Features</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#keamanan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Keamanan</a>
                            <a href="#optimasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Optimasi Performa</a>
                            <a href="#testing" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. Testing &amp; Debugging</a>
                            <a href="#dokumentasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Dokumentasi</a>
                            <a href="#deployment" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. Pitching &amp; Publikasi</a>
                            <a href="#capstone" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Capstone Project</a>
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
                    Bangun Aplikasi Mobile Production-Ready
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>arsitektur</strong>, <strong>state management</strong>,
                    <strong>API integration</strong>, <strong>device features</strong>, hingga
                    <strong>publishing Play Store</strong>, siswa diharapkan mampu membangun
                    aplikasi mobile nyata — lengkap dengan <strong>dokumentasi</strong> dan
                    siap dipublikasikan.
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

        console.log('%c📱 Modul R5 — KK PPB XII Loaded', 'background:#ff7a00;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
