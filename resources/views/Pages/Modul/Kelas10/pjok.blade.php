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
                <span class="text-on-surface font-bold uppercase">A4 — PJOK</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PENDIDIKAN
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">JASMANI</span>
                        &amp; KESEHATAN
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Membangun kebugaran jasmani, keterampilan olahraga, sportivitas, dan pola hidup sehat
                        melalui aktivitas permainan, atletik, bela diri, senam, renang, dan pendidikan kesehatan.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL MATERI</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">9
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
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">5
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
                class="bg-primary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
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

        <!-- ==================== MATERI 1 — BOLA BESAR ==================== -->
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
                            MATERI SATU • PERMAINAN INVASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Permainan Invasi — Bola Besar
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BOLA BESAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Sepak Bola -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_soccer</span>
                        A. SEPAK BOLA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang bertujuan memasukkan bola ke gawang lawan sebanyak mungkin.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">sports</span>
                                TEKNIK DASAR
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Passing</strong> — mengoper bola ke teman</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Control</strong> — menghentikan bola</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Dribbling</strong> — menggiring bola</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Shooting</strong> — menendang ke gawang</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Heading</strong> — memainkan bola dengan kepala</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">gavel</span>
                                PERATURAN
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> 1 tim = 11 pemain</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Dipimpin wasit</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bola keluar samping → <strong class="text-on-surface">throw-in</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pelanggaran di area penalti → <strong class="text-on-surface">penalti</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Tidak boleh pakai tangan (kecuali kiper)</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">strategy</span>
                                TAKTIK
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Menyerang</strong> — mencari ruang &amp; menciptakan peluang</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Bertahan</strong> — menjaga lawan &amp; menutup ruang</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kerja sama tim sangat penting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- B. Bola Basket -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_basketball</span>
                        B. BOLA BASKET
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang bertujuan memasukkan bola ke keranjang lawan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Passing</strong>: chest, bounce, overhead</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Dribbling</strong>: menggiring dengan pantulan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Shooting</strong>: memasukkan bola ke ring</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Lay-up</strong>: tembakan dekat ring</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Pivot</strong>: berputar satu kaki tumpuan</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERATURAN</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> 1 tim = <strong class="text-on-surface">5 pemain</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bola tidak boleh dibawa berjalan tanpa dribble</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pelanggaran → free throw / penguasaan bola</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TAKTIK</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Menyerang</strong> — cari ruang &amp; peluang tembakan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Bertahan</strong> — man-to-man / zone defense</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- C. Bola Voli -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_volleyball</span>
                        C. BOLA VOLI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang bertujuan menjatuhkan bola di daerah lawan melewati net.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Passing bawah</strong>: menerima bola rendah</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Passing atas</strong>: mengumpan bola</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Servis</strong>: memulai permainan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Smash</strong>: pukulan keras menyerang</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Blocking</strong>: membendung serangan di net</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERATURAN PENTING</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> 1 tim = <strong class="text-on-surface">6 pemain</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Maksimal <strong class="text-on-surface">3 sentuhan</strong> sebelum bola dikirim ke lawan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Rotasi</strong> ketika tim mendapat hak servis setelah memenangkan reli</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 2 — BOLA KECIL ==================== -->
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
                            MATERI DUA • PERMAINAN NET
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Permainan Net/Lapangan — Bola Kecil
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BOLA KECIL
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Bulu Tangkis -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_tennis</span>
                        A. BULU TANGKIS
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Menggunakan raket dan <em>shuttlecock</em>.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Grip</strong>: cara memegang raket</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Servis</strong>: pukulan awal</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Lob</strong>: pukulan tinggi &amp; jauh ke belakang</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Smash</strong>: pukulan keras &amp; menukik</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Dropshot</strong>: pukulan pelan jatuh dekat net</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Netting</strong>: pukulan tipis dekat net</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERMAINAN</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Tunggal</strong>: 1 lawan 1</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Ganda</strong>: 2 lawan 2</li>
                            </ul>
                            <div class="mt-3 pt-3 border-t-[2px] border-on-background">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    <strong class="text-on-surface">Tujuan:</strong> membuat shuttlecock jatuh di daerah lawan atau membuat lawan melakukan kesalahan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Tenis Meja -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_tennis</span>
                        B. TENIS MEJA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Dimainkan menggunakan bet dan bola kecil di atas meja yang memiliki net.
                        </p>
                    </div>
                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Grip</strong>: cara memegang bet</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Servis</strong>: memulai permainan</li>
                            </ul>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Forehand</strong>: pukulan sisi dominan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Backhand</strong>: pukulan sisi berlawanan</li>
                            </ul>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Smash</strong>: pukulan menyerang kuat</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> <strong class="text-on-surface">Push</strong>: dorongan kecepatan rendah</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 3 — ATLETIK ==================== -->
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
                            MATERI TIGA • ATLETIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Atletik
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ATLETIK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Lari Jarak Pendek -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">directions_run</span>
                        A. LARI JARAK PENDEK / SPRINT
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Lari dengan jarak relatif pendek dan dilakukan dengan kecepatan maksimal.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TAHAPAN</div>
                            <div class="space-y-2">
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background flex items-center gap-2">
                                    <span class="font-code-inline text-code-inline font-bold text-primary">01</span>
                                    <span class="font-body-sm text-body-sm font-bold text-on-surface">Start</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">— start jongkok</span>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background flex items-center gap-2">
                                    <span class="font-code-inline text-code-inline font-bold text-primary">02</span>
                                    <span class="font-body-sm text-body-sm font-bold text-on-surface">Akselerasi</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">— meningkatkan kecepatan</span>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background flex items-center gap-2">
                                    <span class="font-code-inline text-code-inline font-bold text-primary">03</span>
                                    <span class="font-body-sm text-body-sm font-bold text-on-surface">Lari</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">— pertahankan kecepatan</span>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background flex items-center gap-2">
                                    <span class="font-code-inline text-code-inline font-bold text-primary">04</span>
                                    <span class="font-body-sm text-body-sm font-bold text-on-surface">Finish</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">— memasuki garis akhir</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">info</span>
                                HAL PENTING
                            </div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Badan sedikit condong ke depan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ayunan tangan aktif</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Langkah cepat dan teratur</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Jangan mengurangi kecepatan sebelum melewati garis finish</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- B. Lompat Jauh -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">directions_walk</span>
                        B. LOMPAT JAUH
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Bertujuan memperoleh jarak lompatan sejauh mungkin.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Awalan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berlari untuk memperoleh kecepatan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tolakan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan satu kaki pada papan tolakan.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Melayang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mempertahankan keseimbangan di udara.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pendaratan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kedua kaki mendarat, badan ke depan.</p>
                        </div>
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">warning</span>
                            KESALAHAN YANG HARUS DIHINDARI
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface">
                            Melakukan tolakan melewati garis/papan batas tolakan.
                        </p>
                    </div>
                </div>

                <!-- C. Tolak Peluru -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_handball</span>
                        C. TOLAK PELURU
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Olahraga melempar atau lebih tepatnya <strong>menolak peluru</strong> sejauh mungkin menggunakan satu tangan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TAHAPAN</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Memegang peluru dekat leher</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Melakukan awalan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Melakukan tolakan dengan satu tangan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menjaga keseimbangan setelah tolakan</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-center">
                            <span class="material-symbols-outlined text-on-surface text-[36px] mb-2">priority_high</span>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CATATAN PENTING</div>
                            <p class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                Peluru <em>ditolak</em>, bukan dilempar!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 4 — BELA DIRI ==================== -->
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
                            MATERI EMPAT • BELA DIRI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Bela Diri — Pencak Silat
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PENCAK SILAT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Pencak silat merupakan <strong>bela diri tradisional Indonesia</strong> yang menggunakan
                        keterampilan gerak untuk pertahanan dan serangan.
                    </p>
                </div>

                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_martial_arts</span>
                        TEKNIK DASAR
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">accessibility_new</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kuda-Kuda</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Posisi kaki sebagai dasar keseimbangan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sports_martial_arts</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sikap Pasang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Posisi siap melakukan serangan/pertahanan.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">directions_walk</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pola Langkah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengatur perpindahan posisi.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">front_hand</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pukulan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Serangan menggunakan tangan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">airline_stops</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tendangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Serangan menggunakan kaki.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shield</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tangkisan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membendung serangan lawan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">swap_calls</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Elakan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menghindari serangan tanpa kontak langsung.</p>
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">target</span>
                        TUJUAN UTAMA
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Mempertahankan diri, mengendalikan lawan, serta menjaga <strong>sportivitas dan disiplin</strong>.
                    </p>
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
                        MATERI 5 — 9
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== MATERI 5 — KEBUGARAN JASMANI ==================== -->
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
                            MATERI LIMA • KEBUGARAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Kebugaran Jasmani
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KEBUGARAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Kemampuan tubuh melakukan aktivitas sehari-hari tanpa mengalami kelelahan berlebihan dan
                        masih memiliki tenaga untuk aktivitas lainnya.
                    </p>
                </div>

                <!-- Komponen -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fitness_center</span>
                        KOMPONEN UTAMA &amp; CONTOH LATIHAN
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Komponen</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Pengertian</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh Latihan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Kekuatan</td>
                                    <td class="p-space-md">Kemampuan otot menghasilkan tenaga</td>
                                    <td class="p-space-md font-code-inline text-code-inline">push-up, sit-up, squat</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Kelenturan</td>
                                    <td class="p-space-md">Kemampuan persendian bergerak secara luas</td>
                                    <td class="p-space-md font-code-inline text-code-inline">stretching</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Kecepatan</td>
                                    <td class="p-space-md">Kemampuan melakukan gerakan dalam waktu singkat</td>
                                    <td class="p-space-md font-code-inline text-code-inline">sprint</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Daya Tahan</td>
                                    <td class="p-space-md">Kemampuan tubuh melakukan aktivitas dalam waktu lama</td>
                                    <td class="p-space-md font-code-inline text-code-inline">jogging / lari jarak jauh</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">assignment</span>
                        TKJI — TES KESEGARAN JASMANI INDONESIA
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Digunakan untuk mengetahui tingkat kebugaran jasmani melalui beberapa bentuk tes fisik.
                    </p>
                </div>

            </div>
        </article>

        <!-- ==================== MATERI 6 — SENAM LANTAI ==================== -->
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
                            MATERI ENAM • SENAM
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Senam Lantai
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SENAM
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Aktivitas senam yang dilakukan di atas matras dengan mengutamakan
                        <strong>kelenturan, kekuatan, keseimbangan, koordinasi</strong>, dan <strong>keberanian</strong>.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">rotate_right</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Guling Depan</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Gerakan berguling ke depan dengan tubuh membulat.
                        </p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> jongkok → tangan bertumpu → kepala ditundukkan → badan berguling → posisi akhir
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">rotate_left</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Guling Belakang</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Gerakan menggulingkan badan ke belakang dengan bantuan tangan.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">vertical_align_top</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sikap Lilin</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Posisi tubuh terlentang dengan kedua kaki diangkat lurus ke atas, sementara tangan
                            membantu menopang pinggang.
                        </p>
                    </div>
                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-primary text-[28px] mb-2">pets</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Loncat Harimau</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                            Gerakan melompat ke depan kemudian dilanjutkan dengan gerakan berguling.
                        </p>
                        <div class="p-2 bg-error-container border-[2px] border-on-background">
                            <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">⚠ Butuh pengawasan</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- ==================== MATERI 7 — SENAM IRAMA ==================== -->
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
                            MATERI TUJUH • SENAM IRAMA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Senam Irama / Ritmik
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    RITMIK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Rangkaian gerakan tubuh yang dilakukan mengikuti <strong>irama atau musik</strong>.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">star</span>
                            UNSUR PENTING
                        </div>
                        <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ketepatan irama</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Keluwesan gerakan</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kontinuitas / kesinambungan</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Koordinasi gerakan</li>
                        </ul>
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">directions_walk</span>
                            GERAKAN DASAR
                        </div>
                        <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Langkah kaki ke depan</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Langkah rapat</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Langkah ganti</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ayunan lengan</li>
                            <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kombinasi langkah &amp; ayunan mengikuti ketukan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>

        <!-- ==================== MATERI 8 — RENANG ==================== -->
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
                            MATERI DELAPAN • AKTIVITAS AIR
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Air — Renang
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    RENANG
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Aktivitas bergerak di dalam air dengan teknik tertentu.
                    </p>
                </div>

                <!-- Tahap Dasar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">stairs</span>
                        TAHAP DASAR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pengenalan Air</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Membiasakan tubuh dengan air.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pernapasan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mengatur pengambilan &amp; pengeluaran napas.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Meluncur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Mempertahankan posisi tubuh agar bergerak di air.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gerakan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kaki &amp; tangan disesuaikan dengan gaya renang.</p>
                        </div>
                    </div>
                </div>

                <!-- Gaya Renang -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">pool</span>
                        GAYA YANG DIPELAJARI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">water</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gaya Dada</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gerakan tangan dan kaki menyerupai gerakan katak.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">waves</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gaya Bebas</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Gerakan tangan bergantian dengan tendangan kaki naik-turun.</p>
                        </div>
                    </div>
                </div>

                <!-- Keselamatan -->
                <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                        KESELAMATAN
                    </div>
                    <ul class="space-y-1 font-body-sm text-body-sm text-on-surface">
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Jangan berenang sendirian</li>
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Kenali kedalaman kolam</li>
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Ikuti instruksi guru/pelatih</li>
                        <li class="flex items-start gap-2"><span class="font-bold text-primary">›</span> Jangan bercanda secara berbahaya di sekitar kolam</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- ==================== MATERI 9 — PENDIDIKAN KESEHATAN ==================== -->
        <article id="materi-9"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">09</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-error font-bold tracking-wider">
                            MATERI SEMBILAN • KESEHATAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pendidikan Kesehatan
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-error-container border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KESEHATAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Narkoba -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">dangerous</span>
                        A. NARKOBA DAN ZAT ADIKTIF
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Narkoba</strong> adalah zat yang dapat memengaruhi sistem saraf dan menyebabkan
                            perubahan pada pikiran, perilaku, serta fungsi tubuh. <strong>Zat adiktif</strong> dapat
                            menimbulkan ketergantungan.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">DAMPAK</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-error font-bold">›</span> Gangguan kesehatan fisik</li>
                                <li class="flex items-start gap-2"><span class="text-error font-bold">›</span> Gangguan konsentrasi &amp; fungsi otak</li>
                                <li class="flex items-start gap-2"><span class="text-error font-bold">›</span> Ketergantungan</li>
                                <li class="flex items-start gap-2"><span class="text-error font-bold">›</span> Gangguan hubungan sosial</li>
                                <li class="flex items-start gap-2"><span class="text-error font-bold">›</span> Masalah pendidikan &amp; masa depan</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PENCEGAHAN</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menjauhi penyalahgunaan narkoba</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Memilih lingkungan pergaulan positif</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Ikut olahraga &amp; organisasi</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berani bilang <strong>TIDAK</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Cari bantuan orang dewasa tepercaya</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- B. Pola Hidup Sehat -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">favorite</span>
                        B. POLA HIDUP SEHAT
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">restaurant</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Makanan Bergizi</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">water_drop</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Air Cukup</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">directions_run</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Olahraga Rutin</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">bedtime</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Tidur Cukup</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">shower</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Kebersihan Tubuh</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">self_improvement</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Kelola Stres</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">smoke_free</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hindari Rokok</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">block</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Hindari Narkoba</div>
                        </div>
                    </div>
                </div>

                <!-- C. Kebersihan Diri -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">clean_hands</span>
                        C. KEBERSIHAN DIRI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Mandi secara teratur
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Mencuci tangan dengan sabun
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Menjaga kebersihan gigi dan mulut
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Memotong kuku
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Menggunakan pakaian bersih
                            </li>
                            <li class="flex items-start gap-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <span class="text-primary font-bold">›</span> Menjaga kebersihan rambut &amp; lingkungan
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- D. Penyakit -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">coronavirus</span>
                        D. PENYAKIT MENULAR DAN TIDAK MENULAR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">warning</span>
                                PENYAKIT MENULAR
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Berpindah dari satu orang ke orang lain melalui udara, cairan tubuh, makanan, air, atau vektor.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant mb-2">
                                <span class="text-primary font-bold">›</span> influenza<br>
                                <span class="text-primary font-bold">›</span> tuberkulosis<br>
                                <span class="text-primary font-bold">›</span> penyakit akibat infeksi
                            </div>
                            <div class="pt-2 border-t-[2px] border-on-background">
                                <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">PENCEGAHAN</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Cuci tangan, etika batuk/bersin, jaga lingkungan, vaksinasi.
                                </p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">info</span>
                                PENYAKIT TIDAK MENULAR
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Tidak berpindah langsung dari orang ke orang.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface-variant mb-2">
                                <span class="text-primary font-bold">›</span> diabetes<br>
                                <span class="text-primary font-bold">›</span> hipertensi<br>
                                <span class="text-primary font-bold">›</span> penyakit jantung
                            </div>
                            <div class="pt-2 border-t-[2px] border-on-background">
                                <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">PENCEGAHAN</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Pola makan sehat, aktivitas fisik, tidur cukup, hindari kebiasaan berisiko.
                                </p>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Sejarah, Seni Budaya,
                        Matematika, dan mata pelajaran lainnya.
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
