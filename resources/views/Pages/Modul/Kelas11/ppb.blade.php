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

    /* ============ PHONE MOCKUP ============ */
    .phone-frame {
        border: 3px solid #1c1b1b;
        border-radius: 18px;
        padding: 12px;
        background: #1c1b1b;
        box-shadow: 4px 4px 0px #ff7a00;
        max-width: 260px;
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
    }
    .phone-notch {
        width: 60px;
        height: 6px;
        background: #1c1b1b;
        border-radius: 3px;
        margin: 0 auto 8px;
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

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-secondary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">R5 — PPB</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R5</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                    <span class="badge-semester s4">FLUTTER</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Pemrograman<br>Perangkat Bergerak
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>konsep dasar PPB</strong>, perbedaan <strong>Native vs Cross-Platform</strong>,
                    bahasa <strong>Dart</strong> &amp; framework <strong>Flutter</strong>, pembuatan <strong>UI widget</strong>,
                    <strong>navigasi</strong>, <strong>state management</strong>, <strong>form &amp; validasi</strong>,
                    <strong>database lokal</strong>, integrasi <strong>REST API</strong>, <strong>authentication</strong>,
                    <strong>multimedia</strong>, hingga <strong>deployment APK</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">40+ Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~12 Jam</div>
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
                {{-- BAGIAN A: KONSEP DASAR PPB --}}
                {{-- ===================================================== --}}
                <div id="konsep-dasar" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">phone_iphone</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Fondasi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Konsep Dasar PPB
                            </h2>
                        </div>
                    </div>

                    {{-- 1. Pengertian PPB --}}
                    <article id="pengertian-ppb" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian PPB
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Pemrograman Perangkat Bergerak (PPB)</strong> adalah proses membuat,
                            mengembangkan, menguji, dan memelihara aplikasi yang berjalan pada perangkat
                            bergerak seperti <strong>smartphone</strong> dan <strong>tablet</strong>.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Sistem Operasi</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Android</li>
                                    <li>› iOS</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Contoh Aplikasi</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› WhatsApp, Instagram</li>
                                    <li>› Google Maps, e-commerce</li>
                                    <li>› Absensi &amp; perpustakaan sekolah</li>
                                </ul>
                            </div>
                        </div>
                        <details class="accordion-card" open>
                            <summary>Contoh Alur Aplikasi Absensi Siswa</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">Login
   ↓
Dashboard
   ↓
Daftar Siswa
   ↓
Absensi
   ↓
Simpan Data</div>
                            </div>
                        </details>
                    </article>

                    {{-- 2. Karakteristik Aplikasi Mobile --}}
                    <article id="karakteristik" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Karakteristik Aplikasi Mobile
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1. Layar Sentuh</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Interaksi pengguna:</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="method-badge method-get">Tap</span>
                                    <span class="method-badge method-put">Swipe</span>
                                    <span class="method-badge method-post">Scroll</span>
                                    <span class="method-badge method-delete">Drag</span>
                                    <span class="method-badge">Long press</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">2. Ukuran Layar Beragam</div>
                                <div class="diagram-box">Smartphone:
┌──────────┐
│ Produk   │
│ Produk   │
└──────────┘

Tablet:
┌────────────────────┐
│ Produk │ Produk    │
└────────────────────┘</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">3. Akses Hardware</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kamera, GPS, Mikrofon</li>
                                    <li>› Speaker, Sensor</li>
                                    <li>› Bluetooth, Penyimpanan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">4. Keterbatasan Sumber Daya</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› RAM terbatas</li>
                                    <li>› Baterai terbatas</li>
                                    <li>› Penyimpanan terbatas</li>
                                    <li>› CPU/GPU tertentu</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- 3. Native vs Cross-Platform --}}
                    <article id="native-cross" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Native vs Cross-Platform
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Native</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Pengembangan menggunakan teknologi khusus untuk OS tertentu.
                                </p>
                                <table class="brutal-table">
                                    <thead><tr><th>Platform</th><th>Bahasa</th></tr></thead>
                                    <tbody>
                                        <tr><td>Android</td><td>Kotlin / Java</td></tr>
                                        <tr><td>iOS</td><td>Swift</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Cross-Platform</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Satu basis kode untuk beberapa platform.
                                </p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Flutter (Dart)</li>
                                    <li>› React Native</li>
                                    <li>› .NET MAUI</li>
                                </ul>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>Kelebihan Native</summary>
                                <div class="p-space-md">
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Performa sangat baik</li>
                                        <li>› Akses hardware lebih langsung</li>
                                        <li>› Cocok untuk aplikasi performa tinggi</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card" open>
                                <summary>Kekurangan Native</summary>
                                <div class="p-space-md">
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Multi-platform butuh kode berbeda</li>
                                        <li>› Waktu pengembangan lebih lama</li>
                                    </ul>
                                </div>
                            </details>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN B: DART & FLUTTER --}}
                {{-- ===================================================== --}}
                <div id="dart-flutter" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">code</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bahasa &amp; Framework</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Dart &amp; Flutter
                            </h2>
                        </div>
                    </div>

                    {{-- 4. Dart --}}
                    <article id="dart" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Bahasa Dart
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Dart</strong> adalah bahasa pemrograman yang digunakan oleh Flutter.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="code-block"><code>void main() {
  print("Halo Flutter");
}</code></div>
                            <div class="code-block"><code>String nama = "Asis";
int umur = 17;
double nilai = 90.5;
bool aktif = true;</code></div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline"><strong>String</strong> → teks</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline"><strong>int</strong> → bilangan bulat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline"><strong>double</strong> → desimal</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline"><strong>bool</strong> → true/false</div>
                        </div>
                    </article>

                    {{-- 5. Flutter --}}
                    <article id="flutter" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Framework Flutter
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Flutter</strong> adalah framework UI yang dikembangkan <strong>Google</strong>
                            untuk membuat aplikasi menggunakan bahasa Dart. Flutter dapat digunakan untuk
                            <strong>Android, iOS, Web, dan Desktop</strong>.
                        </p>
                        <div class="code-block"><code>Text("Hello World")</code></div>
                    </article>

                    {{-- 6. Widget --}}
                    <article id="widget" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Widget — Balok Penyusun UI
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Widget</strong> adalah komponen dasar dalam Flutter untuk membangun tampilan
                            aplikasi. Hampir semua bagian UI Flutter merupakan widget.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="diagram-box">Scaffold
│
├── AppBar
│
└── Column
    ├── Text
    ├── Image
    └── Button</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Widget Umum</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="method-badge method-get">Text</span>
                                    <span class="method-badge method-get">Image</span>
                                    <span class="method-badge method-post">Button</span>
                                    <span class="method-badge method-post">Container</span>
                                    <span class="method-badge method-put">Row</span>
                                    <span class="method-badge method-put">Column</span>
                                    <span class="method-badge method-delete">Scaffold</span>
                                    <span class="method-badge method-delete">AppBar</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 7. StatelessWidget --}}
                    <article id="stateless" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            StatelessWidget
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Widget yang <strong>tidak memiliki state yang berubah</strong> selama digunakan.
                        </p>
                        <div class="code-block mb-space-md"><code>class Judul extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Text("Aplikasi Sekolah");
  }
}</code></div>
                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Cocok untuk:</span>
                            <span class="font-body-sm text-body-sm"> Judul • Label • Icon • Tampilan statis</span>
                        </div>
                    </article>

                    {{-- 8. StatefulWidget --}}
                    <article id="stateful" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            StatefulWidget
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Widget yang memiliki <strong>data/keadaan yang dapat berubah</strong>.
                        </p>
                        <div class="diagram-box mb-space-md">Counter = 0
   ↓ (tekan tombol)
Counter = 1
   ↓ (tekan lagi)
Counter = 2</div>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-primary">Penggunaan Umum</div>
                            <div class="flex flex-wrap gap-1">
                                <span class="method-badge method-get">Counter</span>
                                <span class="method-badge method-get">Form</span>
                                <span class="method-badge method-post">Checkbox</span>
                                <span class="method-badge method-post">Loading</span>
                                <span class="method-badge method-put">Data API</span>
                                <span class="method-badge method-delete">Status login</span>
                            </div>
                        </div>
                    </article>

                    {{-- 9. Struktur Project --}}
                    <article id="struktur-project" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Struktur Project Flutter
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="diagram-box">my_app/
│
├── android/
├── ios/
├── lib/
│   └── main.dart
├── test/
├── web/
├── pubspec.yaml
└── README.md</div>
                            <div class="space-y-space-sm">
                                <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                    <div class="font-code-inline font-bold mb-1">lib/</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Folder utama kode Dart aplikasi.</p>
                                </div>
                                <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                    <div class="font-code-inline font-bold mb-1">main.dart</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Titik awal aplikasi — <code>void main() { runApp(MyApp()); }</code></p>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 10. pubspec.yaml --}}
                    <article id="pubspec" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            pubspec.yaml — Konfigurasi Project
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>pubspec.yaml</strong> adalah file konfigurasi utama project Flutter.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>dependencies:
  flutter:
    sdk: flutter

  http: ^1.0.0</code></div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Mengatur:</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama &amp; versi aplikasi</li>
                                    <li>› Dependency &amp; package</li>
                                    <li>› Asset (gambar, font)</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- 11. Package & Dependency --}}
                    <article id="package" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            Package &amp; Dependency
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Package</strong> = kumpulan kode yang dapat digunakan kembali.
                            <strong>Dependency</strong> = package yang dibutuhkan aplikasi.
                        </p>
                        <table class="brutal-table">
                            <thead><tr><th>Package</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><code>http</code></td><td>Komunikasi HTTP / REST API</td></tr>
                                <tr><td><code>shared_preferences</code></td><td>Penyimpanan sederhana</td></tr>
                                <tr><td><code>sqflite</code></td><td>Database SQLite lokal</td></tr>
                                <tr><td><code>camera</code></td><td>Akses kamera perangkat</td></tr>
                            </tbody>
                        </table>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN C: USER INTERFACE --}}
                {{-- ===================================================== --}}
                <div id="ui" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">palette</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Tampilan</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                User Interface
                            </h2>
                        </div>
                    </div>

                    {{-- 12. Scaffold --}}
                    <article id="scaffold" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Scaffold — Struktur Dasar Halaman
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md items-center">
                            <div>
                                <div class="diagram-box">Scaffold
├── AppBar
├── Body
├── FloatingActionButton
└── BottomNavigationBar</div>
                            </div>
                            <div class="phone-frame">
                                <div class="phone-screen">
                                    <div class="phone-notch"></div>
                                    <div style="background:#1c1b1b;color:#fff;padding:4px;text-align:center;font-size:10px;">Home</div>
                                    <div style="padding:16px 4px;text-align:center;">Isi halaman</div>
                                    <div style="border-top:1px dashed #1c1b1b;padding:4px;text-align:center;font-size:9px;">Body Area</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 13. AppBar --}}
                    <article id="appbar" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            AppBar
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Bagian atas halaman — biasanya berisi judul, tombol kembali, icon pencarian, dan menu.
                        </p>
                        <div class="diagram-box">┌─────────────────────────┐
│ ← Detail Produk     ⋮   │
└─────────────────────────┘</div>
                    </article>

                    {{-- 14-17: Container, Row, Column, Text --}}
                    <article id="layout-widgets" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Widget Layout — Container, Row, Column
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Container</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Wadah — mengatur width, height, padding, margin, background, border.</p>
                                <div class="diagram-box">┌────────────┐
│  Produk    │
│  Rp50.000  │
└────────────┘</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Row</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menyusun widget horizontal.</p>
                                <div class="diagram-box">[Icon] Text [›]</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Column</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menyusun widget vertikal.</p>
                                <div class="diagram-box">Text
TextField
Button</div>
                            </div>
                        </div>
                    </article>

                    {{-- 18-20: Text, Image, Button --}}
                    <article id="content-widgets" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Widget Konten — Text, Image, Button
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Text</div>
                                <div class="code-block"><code>Text("Selamat Datang")</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Image</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Sumber gambar:</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Asset lokal</li>
                                    <li>› Internet</li>
                                    <li>› Kamera / Gallery</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Button</div>
                                <div class="diagram-box">Klik LOGIN
    ↓
Validasi
    ↓
Kirim data
    ↓
Login berhasil</div>
                            </div>
                        </div>
                    </article>

                    {{-- 21. TextField --}}
                    <article id="textfield" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            TextField — Input Pengguna
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md items-center">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Digunakan pada:</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Login / Register</li>
                                    <li>› Search</li>
                                    <li>› Form data</li>
                                </ul>
                            </div>
                            <div class="phone-frame">
                                <div class="phone-screen">
                                    <div class="phone-notch"></div>
                                    <div style="font-size:10px;">Email:</div>
                                    <div style="border-bottom:1px solid #1c1b1b;margin-bottom:8px;">&nbsp;</div>
                                    <div style="font-size:10px;">Password:</div>
                                    <div style="border-bottom:1px solid #1c1b1b;">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 22-23: ListView, GridView --}}
                    <article id="list-grid" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            ListView &amp; GridView
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">ListView</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Daftar yang dapat di-scroll.</p>
                                <div class="diagram-box">Produk 1
Produk 2
Produk 3
Produk 4
   ↓ scroll</div>
                                <p class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Cocok untuk:</p>
                                <p class="font-code-inline text-code-inline">Siswa • Produk • Berita • Transaksi</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">GridView</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tampilan kotak/grid.</p>
                                <div class="diagram-box">┌──┐ ┌──┐
│ A│ │ B│
└──┘ └──┘
┌──┐ ┌──┐
│ C│ │ D│
└──┘ └──┘</div>
                                <p class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Cocok untuk:</p>
                                <p class="font-code-inline text-code-inline">Galeri • Katalog • Menu aplikasi</p>
                            </div>
                        </div>
                    </article>

                    {{-- 24. Responsive UI --}}
                    <article id="responsive" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Responsive UI
                        </h3>
                        <div class="grid grid-cols-3 gap-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-sm uppercase font-bold text-on-surface-variant">Smartphone</div>
                                <div class="font-headline-sm font-bold">1 kolom</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-sm uppercase font-bold text-on-surface-variant">Tablet</div>
                                <div class="font-headline-sm font-bold">2 kolom</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-sm uppercase font-bold text-on-surface-variant">Layar Besar</div>
                                <div class="font-headline-sm font-bold">3–4 kolom</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN D: NAVIGASI & STATE --}}
                {{-- ===================================================== --}}
                <div id="nav-state" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">alt_route</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Alur &amp; Data</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Navigasi &amp; State Management
                            </h2>
                        </div>
                    </div>

                    {{-- 25. Navigasi --}}
                    <article id="navigasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Navigasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Proses berpindah dari satu halaman ke halaman lain.
                        </p>
                        <div class="diagram-box mb-space-md">Login
 ↓
Home
 ↓
Produk
 ↓
Detail Produk
 ↓
Checkout</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Route</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tujuan/jalur menuju halaman.</p>
                                <div class="font-code-inline text-code-inline">/login<br>/home<br>/product<br>/profile</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Navigator</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengatur perpindahan antar halaman.</p>
                                <div class="diagram-box">Home
 ↓
Navigator
 ↓
Detail</div>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md">
                            <summary>Mengirim Data Antar Halaman</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">Halaman Produk
      ↓ pilih "Laptop ASUS"
Halaman Detail
      ↓
nama = "Laptop ASUS"
harga = Rp8.000.000</div>
                            </div>
                        </details>
                    </article>

                    {{-- 26. State Management --}}
                    <article id="state-management" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            State Management
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>State</strong> adalah kondisi/data aplikasi yang dapat berubah &amp; memengaruhi tampilan.
                        </p>
                        <div class="diagram-box mb-space-md">Jumlah barang = 1
      ↓ tekan +
Jumlah barang = 2
      ↓
Tampilan harus berubah dari 1 → 2</div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>setState() — Update UI</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">User menekan tombol
        ↓
State berubah
        ↓
setState()
        ↓
UI diperbarui</div>
                            </div>
                        </details>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Data yang Dikelola</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama pengguna</li>
                                    <li>› Status login</li>
                                    <li>› Keranjang &amp; jumlah barang</li>
                                    <li>› Data API / Loading / Error</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Library State</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="method-badge method-get">Provider</span>
                                    <span class="method-badge method-get">Riverpod</span>
                                    <span class="method-badge method-post">BLoC</span>
                                    <span class="method-badge method-put">GetX</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Contoh Loading:</span>
                            <span class="font-body-sm text-body-sm"> <code>isLoading = true</code> → tampil "Loading..." → data selesai → <code>isLoading = false</code> → tampil data.</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN E: FORM & DATABASE --}}
                {{-- ===================================================== --}}
                <div id="form-db" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">database</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Input &amp; Penyimpanan</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Form &amp; Database
                            </h2>
                        </div>
                    </div>

                    {{-- 27. Form --}}
                    <article id="form" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Form
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Form</strong> mengelompokkan beberapa input &amp; melakukan validasi.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="diagram-box">Form
├── Nama
├── Email
├── Password
└── Button</div>
                            <div class="phone-frame">
                                <div class="phone-screen">
                                    <div class="phone-notch"></div>
                                    <div style="font-size:10px;">Nama:</div>
                                    <div style="border-bottom:1px solid #1c1b1b;margin-bottom:6px;">&nbsp;</div>
                                    <div style="font-size:10px;">Email:</div>
                                    <div style="border-bottom:1px solid #1c1b1b;margin-bottom:6px;">&nbsp;</div>
                                    <div style="font-size:10px;">Password:</div>
                                    <div style="border-bottom:1px solid #1c1b1b;margin-bottom:8px;">&nbsp;</div>
                                    <div style="background:#ff7a00;color:#1c1b1b;padding:4px;text-align:center;font-weight:bold;">REGISTER</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 28. Validasi --}}
                    <article id="validasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Validasi
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Contoh</div>
                                <div class="diagram-box">Email: [____]

Klik Login
     ↓
Email kosong
     ↓
"Email wajib diisi"</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Password</div>
                                <div class="diagram-box">Password: 123
     ↓
"Password terlalu pendek"</div>
                            </div>
                        </div>
                    </article>

                    {{-- 29. Controller --}}
                    <article id="controller" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            TextEditingController
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Digunakan untuk membaca &amp; mengontrol isi TextField.
                        </p>
                        <div class="diagram-box">User mengetik
      ↓
TextField
      ↓
Controller
      ↓
Program membaca data</div>
                    </article>

                    {{-- 30. Event --}}
                    <article id="event" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Event
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Kejadian yang terjadi karena interaksi pengguna atau sistem.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Button ditekan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">TextField berubah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Checkbox dicentang</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Halaman dibuka</div>
                        </div>
                        <div class="diagram-box">Button ditekan
     ↓
Event terjadi
     ↓
Function dijalankan</div>
                    </article>

                    {{-- 31. Database --}}
                    <article id="database" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Database Lokal
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">SQLite</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Database relasional lokal.</p>
                                <div class="diagram-box">id | nama  | kelas
---|-------|------
1  | Budi  | XII
2  | Andi  | XI
3  | Sinta | XII</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Shared Preferences</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Key-value sederhana.</p>
                                <div class="code-block"><code>username = "Asis"
isLogin = true
theme = "dark"</code></div>
                            </div>
                        </div>
                    </article>

                    {{-- 32. CRUD --}}
                    <article id="crud" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            CRUD
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Operasi</th><th>Arti</th><th>Contoh</th></tr></thead>
                            <tbody>
                                <tr><td><strong>C</strong>reate</td><td>Tambah</td><td>Tambah siswa baru</td></tr>
                                <tr><td><strong>R</strong>ead</td><td>Baca</td><td>Tampilkan daftar siswa</td></tr>
                                <tr><td><strong>U</strong>pdate</td><td>Ubah</td><td>Ubah kelas siswa</td></tr>
                                <tr><td><strong>D</strong>elete</td><td>Hapus</td><td>Hapus siswa</td></tr>
                            </tbody>
                        </table>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN F: API & AUTHENTICATION --}}
                {{-- ===================================================== --}}
                <div id="api-auth" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">api</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Integrasi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                API &amp; Authentication
                            </h2>
                        </div>
                    </div>

                    {{-- 33. API --}}
                    <article id="api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            API
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>API (Application Programming Interface)</strong> memungkinkan satu aplikasi
                            berkomunikasi dengan aplikasi/sistem lain.
                        </p>
                        <div class="diagram-box">Aplikasi Flutter
       ↓
      API
       ↓
Backend
       ↓
Database</div>
                    </article>

                    {{-- 34. HTTP --}}
                    <article id="http" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            HTTP — Protokol Komunikasi
                        </h3>
                        <div class="diagram-box">Client (Flutter)
   │ Request
   ↓
Server
   │ Response
   ↓
Flutter</div>
                    </article>

                    {{-- 35. REST API & HTTP Method --}}
                    <article id="rest-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            REST API &amp; HTTP Method
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            REST API menggunakan prinsip REST &amp; HTTP method untuk mengakses resource.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Resource</div>
                                <div class="font-code-inline text-code-inline">/products<br>/users<br>/orders</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">HTTP Method</div>
                                <div class="space-y-1">
                                    <div><span class="method-badge method-get">GET</span> Ambil data</div>
                                    <div><span class="method-badge method-post">POST</span> Buat data baru</div>
                                    <div><span class="method-badge method-put">PUT</span> Update data</div>
                                    <div><span class="method-badge method-delete">DELETE</span> Hapus data</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-block mt-space-md"><code>GET /api/products
POST /api/products
PUT /api/products/1
DELETE /api/products/1</code></div>
                    </article>

                    {{-- 36. JSON --}}
                    <article id="json" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            JSON
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Format pertukaran data antara aplikasi &amp; server.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>{
  "id": 1,
  "nama": "Laptop",
  "harga": 8000000
}</code></div>
                            <div class="code-block"><code>{
  "status": "success",
  "data": [
    { "id": 1, "nama": "Laptop" }
  ]
}</code></div>
                        </div>
                    </article>

                    {{-- 37. Request & Response --}}
                    <article id="request-response" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Request &amp; Response
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Request</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Permintaan dari client.</p>
                                <div class="font-code-inline text-code-inline">GET /api/products</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Response</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Jawaban dari server.</p>
                                <div class="font-code-inline text-code-inline">JSON data</div>
                            </div>
                        </div>
                    </article>

                    {{-- 38. Flutter + Backend --}}
                    <article id="flutter-backend" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Integrasi Flutter + Backend
                        </h3>
                        <div class="diagram-box">Flutter
   ↓
HTTP Request
   ↓
Laravel REST API
   ↓
MySQL
   ↓
Laravel
   ↓
JSON
   ↓
Flutter
   ↓
Tampilkan produk</div>
                    </article>

                    {{-- 39. Authentication --}}
                    <article id="authentication" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Authentication
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Proses untuk memverifikasi identitas pengguna. <em>"Apakah kamu benar-benar pengguna yang memiliki akun ini?"</em>
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Register</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama</li>
                                    <li>› Email</li>
                                    <li>› Password</li>
                                    <li>› Konfirmasi Password</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Login</div>
                                <div class="diagram-box">Email + Pass
    ↓
Flutter
    ↓
API → Backend → DB
    ↓
Verifikasi
    ↓
Berhasil / Gagal</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Token</div>
                                <div class="diagram-box">Login
 ↓
Server verifikasi
 ↓
Server beri token
 ↓
Flutter simpan token
 ↓
Token dikirim tiap request</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Session</div>
                                <div class="diagram-box">User login
    ↓
Dashboard
    ↓
Profile
    ↓
Tetap login</div>
                            </div>
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2">Auth vs Authorization</div>
                                <div class="space-y-2">
                                    <div><strong>Authentication</strong> = Siapa kamu?</div>
                                    <div><strong>Authorization</strong> = Apa yang boleh kamu lakukan?</div>
                                </div>
                                <div class="diagram-box mt-2">Admin: ✓ Add ✓ Edit ✓ Hapus
User:  ✓ Lihat ✗ Hapus</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN G: MULTIMEDIA & DEPLOYMENT --}}
                {{-- ===================================================== --}}
                <div id="multimedia-deploy" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">perm_media</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Media &amp; Rilis</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Multimedia &amp; Deployment
                            </h2>
                        </div>
                    </div>

                    {{-- 40. Multimedia --}}
                    <article id="multimedia" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Multimedia
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary mb-2">image</span>
                                <div class="font-label-lg uppercase font-bold mb-1">Image</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan gambar produk &amp; ilustrasi.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary mb-2">music_note</span>
                                <div class="font-label-lg uppercase font-bold mb-1">Audio</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Musik, notifikasi, podcast, materi pembelajaran.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary mb-2">movie</span>
                                <div class="font-label-lg uppercase font-bold mb-1">Video</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Konten video pembelajaran &amp; tutorial.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary mb-2">photo_camera</span>
                                <div class="font-label-lg uppercase font-bold mb-1">Kamera</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Ambil foto/video — misal untuk absensi.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary mb-2">photo_library</span>
                                <div class="font-label-lg uppercase font-bold mb-1">Gallery</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pilih media dari perangkat untuk upload.</p>
                            </div>
                        </div>

                        <div class="diagram-box mt-space-md">Contoh Absensi:
Klik Absensi
     ↓
Buka Kamera
     ↓
Ambil Foto
     ↓
Foto dikirim ke server</div>
                    </article>

                    {{-- 41. Deployment --}}
                    <article id="deployment" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Deployment
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Proses menyiapkan &amp; mendistribusikan aplikasi agar dapat digunakan pengguna.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Debug</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Pengembangan</li>
                                    <li>› Mencari bug</li>
                                    <li>› Debugging aktif</li>
                                    <li>› Untuk developer</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Release</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Distribusi</li>
                                    <li>› Versi final</li>
                                    <li>› Dioptimalkan</li>
                                    <li>› Untuk pengguna</li>
                                </ul>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Build APK</summary>
                            <div class="p-space-md space-y-space-sm">
                                <div class="code-block"><code>flutter build apk --release</code></div>
                                <div class="diagram-box">Flutter Project
      ↓
Build APK
      ↓
File .apk
      ↓
Perangkat Android
      ↓
Install
      ↓
Aplikasi siap digunakan</div>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Testing</summary>
                            <div class="p-space-md">
                                <table class="brutal-table">
                                    <thead><tr><th>Test</th><th>Hasil</th></tr></thead>
                                    <tbody>
                                        <tr><td>Email benar + password benar</td><td>Login berhasil</td></tr>
                                        <tr><td>Email salah</td><td>Login gagal</td></tr>
                                        <tr><td>Password kosong</td><td>Pesan error</td></tr>
                                    </tbody>
                                </table>
                                <div class="mt-space-sm flex flex-wrap gap-1">
                                    <span class="method-badge method-get">UI</span>
                                    <span class="method-badge method-get">Button</span>
                                    <span class="method-badge method-post">Form</span>
                                    <span class="method-badge method-post">Navigasi</span>
                                    <span class="method-badge method-put">Database</span>
                                    <span class="method-badge method-put">API</span>
                                    <span class="method-badge method-delete">Login</span>
                                    <span class="method-badge method-delete">Kamera</span>
                                </div>
                            </div>
                        </details>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN H: CONTOH PENERAPAN --}}
                {{-- ===================================================== --}}
                <div id="studi-kasus" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">school</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Studi Kasus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Contoh Penerapan Semua Materi
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-space-xs">🚗 PROYEK CONTOH</div>
                            <div class="font-headline-sm uppercase text-on-surface">Aplikasi "Rental Alat Proyek"</div>
                            <p class="font-body-sm text-body-sm mt-2">Dibuat dengan Flutter — menggabungkan semua materi dari UI hingga deployment.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1. UI</div>
                                <div class="diagram-box">Home
├── Daftar alat
├── Pencarian
└── Profile</div>
                                <div class="flex flex-wrap gap-1 mt-2">
                                    <span class="method-badge method-get">Scaffold</span>
                                    <span class="method-badge method-get">AppBar</span>
                                    <span class="method-badge method-post">Container</span>
                                    <span class="method-badge method-post">Row</span>
                                    <span class="method-badge method-put">Column</span>
                                    <span class="method-badge method-put">ListView</span>
                                </div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">2. Navigasi</div>
                                <div class="diagram-box">Home
 ↓
Detail Alat
 ↓
Form Penyewaan</div>
                                <div class="flex flex-wrap gap-1 mt-2">
                                    <span class="method-badge method-get">Route</span>
                                    <span class="method-badge method-get">Navigator</span>
                                </div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">3. Input</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama</li>
                                    <li>› Tanggal sewa</li>
                                    <li>› Tanggal kembali</li>
                                    <li>› Jumlah</li>
                                </ul>
                                <div class="flex flex-wrap gap-1 mt-2">
                                    <span class="method-badge method-post">TextField</span>
                                    <span class="method-badge method-post">Form</span>
                                    <span class="method-badge method-put">Controller</span>
                                    <span class="method-badge method-put">Validation</span>
                                </div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">4. API</div>
                                <div class="diagram-box">Flutter
 ↓ GET /api/alat
Laravel
 ↓
MySQL
 ↓ JSON
Flutter</div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">5. Login</div>
                                <div class="diagram-box">Email + Pass
 ↓
API → Laravel → DB
 ↓
Token → Flutter → Dashboard</div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">6. State</div>
                                <div class="diagram-box">Stok = 5
   ↓ sewa 1
Stok = 4</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Tampilan diperbarui otomatis.</p>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">7. Database</div>
                                <div class="font-code-inline text-code-inline">users<br>alat<br>penyewaan<br>pembayaran<br>pengembalian</div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">8. Multimedia</div>
                                <div class="diagram-box">Pengembalian
     ↓
Ambil Foto (Kamera)
     ↓
Upload → Server</div>
                            </div>
                        </div>

                        <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2">9. Deployment — Final Step</div>
                            <div class="diagram-box">Development
     ↓
Testing
     ↓
Debug
     ↓
Release
     ↓
Build APK
     ↓
Install Android</div>
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
                    <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R5</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>40+</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~12 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Konsep Dasar</div>
                            <a href="#pengertian-ppb" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Pengertian PPB</a>
                            <a href="#karakteristik" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Karakteristik Mobile</a>
                            <a href="#native-cross" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Native vs Cross-Platform</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Dart &amp; Flutter</div>
                            <a href="#dart" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Bahasa Dart</a>
                            <a href="#flutter" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Framework Flutter</a>
                            <a href="#widget" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Widget</a>
                            <a href="#stateless" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. StatelessWidget</a>
                            <a href="#stateful" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. StatefulWidget</a>
                            <a href="#struktur-project" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Struktur Project</a>
                            <a href="#pubspec" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. pubspec.yaml</a>
                            <a href="#package" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. Package &amp; Dependency</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ User Interface</div>
                            <a href="#scaffold" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Scaffold</a>
                            <a href="#appbar" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. AppBar</a>
                            <a href="#layout-widgets" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Container/Row/Column</a>
                            <a href="#content-widgets" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Text/Image/Button</a>
                            <a href="#textfield" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. TextField</a>
                            <a href="#list-grid" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. ListView &amp; GridView</a>
                            <a href="#responsive" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Responsive UI</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Navigasi &amp; State</div>
                            <a href="#navigasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Navigasi</a>
                            <a href="#state-management" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. State Management</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Form &amp; Database</div>
                            <a href="#form" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Form</a>
                            <a href="#validasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Validasi</a>
                            <a href="#controller" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Controller</a>
                            <a href="#event" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Event</a>
                            <a href="#database" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Database Lokal</a>
                            <a href="#crud" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. CRUD</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ API &amp; Auth</div>
                            <a href="#api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. API</a>
                            <a href="#http" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. HTTP</a>
                            <a href="#rest-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. REST API</a>
                            <a href="#json" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. JSON</a>
                            <a href="#request-response" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Request/Response</a>
                            <a href="#flutter-backend" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Flutter+Backend</a>
                            <a href="#authentication" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Authentication</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Media &amp; Deploy</div>
                            <a href="#multimedia" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Multimedia</a>
                            <a href="#deployment" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Deployment</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Studi Kasus</div>
                            <a href="#studi-kasus" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Rental Alat Proyek</a>
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
<section class="w-full bg-secondary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Aplikasi Mobile Full-Stack
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai Dart, Flutter, UI widget, state management, REST API, hingga authentication,
                    siswa diharapkan mampu membangun aplikasi mobile nyata: <strong>Absensi Siswa</strong>,
                    <strong>E-Commerce Sederhana</strong>, atau <strong>Aplikasi Rental</strong> — lengkap dengan
                    database, API integration, dan siap di-build menjadi <strong>APK</strong>.
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

        console.log('%c📱 Modul R5 — Pemrograman Perangkat Bergerak Loaded', 'background:#edc157;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
