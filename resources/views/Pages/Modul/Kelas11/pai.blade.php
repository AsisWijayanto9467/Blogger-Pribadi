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
                <span class="text-on-surface font-bold uppercase">A1 — PAI &amp; BUDI PEKERTI</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PAI &amp;
                        <span
                            class="bg-primary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">BUDI PEKERTI</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mendalami akhlak, berpikir kritis dalam IPTEK, cabang-cabang iman, adab berdakwah,
                        dan meneladani perjuangan ulama Indonesia di era modern.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">5
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">FOKUS</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">Akidah &amp; Akhlak</span>
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

        <!-- ==================== BAB 1 — BERPIKIR KRITIS & IPTEK ==================== -->
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
                            BAB SATU • Q.S. Ali 'Imrān/3: 190–191 &amp; ar-Rahmān/55: 33
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Berpikir Kritis dan Mencintai IPTEK
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKIDAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Q.S. Ali 'Imrān -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        1. Q.S. ALI 'IMRĀN/3: 190–191
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Ayat ini menjelaskan bahwa penciptaan langit dan bumi serta pergantian siang dan malam
                            merupakan <strong>tanda kebesaran Allah Swt</strong>.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">ULUL ALBAB — ORANG YANG:</div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">favorite</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Selalu Mengingat Allah</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">psychology</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Menggunakan Akal</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">visibility</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Mengamati Ciptaan</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">verified</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ciptaan Tidak Sia-sia</div>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">lightbulb</span>
                            MAKNA BERPIKIR KRITIS
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Berpikir kritis dalam Islam bukan sekadar berpikir bebas, tetapi menggunakan akal secara
                            logis untuk <strong>mencari kebenaran</strong> dan <strong>mengambil pelajaran</strong>,
                            dengan tetap berlandaskan iman.
                        </p>
                    </div>
                </div>

                <!-- 2. Q.S. ar-Rahmān -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        2. Q.S. AR-RAHMĀN/55: 33
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Manusia dan jin <strong>tidak dapat menembus penjuru langit dan bumi</strong> tanpa
                            kekuatan atau kemampuan dari Allah Swt.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">MOTIVASI DARI AYAT INI:</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Mempelajari IPTEK</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Mengembangkan Teknologi</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Meneliti Alam</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kemaslahatan</div>
                    </div>
                </div>

                <!-- 3. Pentingnya IPTEK -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">science</span>
                        3. PENTINGNYA IPTEK
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>IPTEK</strong> sangat penting bagi kemajuan umat Islam karena dapat digunakan untuk:
                        </p>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Meningkatkan kualitas kehidupan<br>
                            <span class="text-primary font-bold">›</span> Menyelesaikan berbagai masalah<br>
                            <span class="text-primary font-bold">›</span> Mengembangkan pendidikan &amp; ekonomi<br>
                            <span class="text-primary font-bold">›</span> Membantu kehidupan masyarakat<br>
                            <span class="text-primary font-bold">›</span> Membangun peradaban yang maju
                        </div>
                    </div>

                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>⚠ Teknologi harus digunakan untuk kebaikan</strong>, bukan untuk merusak atau
                            merugikan orang lain.
                        </p>
                    </div>
                </div>

                <!-- 4. Hubungan Iman - Ilmu - Amal -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sync_alt</span>
                        HUBUNGAN IMAN, ILMU, DAN AMAL
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Iman → Mencari Ilmu → Diamalkan → Kebaikan
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                            Ilmu yang dimiliki seharusnya digunakan untuk <strong>amal saleh</strong> dan
                            <strong>memberikan manfaat</strong>.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — CABANG-CABANG IMAN ==================== -->
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
                            BAB DUA • AKIDAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Cabang-Cabang Iman
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKIDAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN IMAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Iman</strong> adalah keyakinan dalam hati, diucapkan dengan lisan, dan dibuktikan
                        melalui perbuatan. Iman tidak hanya berkaitan dengan ibadah, tetapi juga tercermin dalam
                        <strong>akhlak sehari-hari</strong>.
                    </p>
                </div>

                <!-- 4 Cabang Iman -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">view_week</span>
                        4 CABANG IMAN DALAM PERILAKU
                    </div>

                    <div class="flex flex-col gap-space-md">

                        <!-- 1. Memenuhi Janji -->
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">1</span>
                                </div>
                                <div>
                                    <div class="font-code-inline text-code-inline uppercase font-bold text-on-surface">Q.S. al-Isrā'/17: 34</div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Memenuhi Janji</div>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Manusia wajib memenuhi janji karena janji akan dimintai pertanggungjawaban.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">CONTOH</div>
                                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                                        › Menepati janji kepada teman<br>
                                        › Mengerjakan tugas sesuai kesepakatan<br>
                                        › Melaksanakan amanah
                                    </div>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">MANFAAT</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Membangun kepercayaan dan menunjukkan sikap bertanggung jawab.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Mensyukuri Nikmat -->
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">2</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Mensyukuri Nikmat Allah</div>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Syukur berarti <strong>mengakui nikmat berasal dari Allah</strong> dan
                                <strong>menggunakannya dengan benar</strong>.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-primary mb-1">Hati</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Menyadari nikmat dari Allah.</p>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-primary mb-1">Lisan</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Mengucapkan Alhamdulillah.</p>
                                </div>
                                <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-primary mb-1">Perbuatan</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan nikmat untuk kebaikan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Memelihara Lisan -->
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">3</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Memelihara Lisan</div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <div class="p-3 bg-error-container border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[16px]">cancel</span>
                                        HINDARI
                                    </div>
                                    <div class="font-code-inline text-code-inline text-on-surface">
                                        › Bohong<br>
                                        › Fitnah<br>
                                        › Ghibah<br>
                                        › Menghina<br>
                                        › Mencaci<br>
                                        › Menyebarkan berita belum jelas
                                    </div>
                                </div>
                                <div class="p-3 bg-primary-container border-[2px] border-on-background">
                                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                                        GUNAKAN LISAN UNTUK
                                    </div>
                                    <div class="font-code-inline text-code-inline text-on-surface">
                                        › Berkata jujur<br>
                                        › Sopan<br>
                                        › Bermanfaat
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Menutupi Aib -->
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">4</span>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Menutupi Aib Orang Lain</div>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                <strong>Aib</strong> adalah kekurangan atau keburukan seseorang yang tidak seharusnya
                                disebarluaskan. Menutupi aib berarti tidak menyebarkan keburukan pribadi seseorang,
                                terutama jika tidak ada kepentingan yang benar.
                            </p>
                            <div class="p-2 bg-error-container border-[2px] border-on-background">
                                <p class="font-body-sm text-body-sm text-on-surface">
                                    <strong>⚠ Catatan:</strong> Menutupi aib <strong>bukan berarti membenarkan
                                    kejahatan</strong>.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">star</span>
                        INTI BAB 2
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        Iman harus <strong>terlihat melalui perilaku</strong>: menepati janji, bersyukur, menjaga
                        lisan, dan menjaga kehormatan orang lain.
                    </p>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — MENGHINDARI PERKELAHIAN, MIRAS, NARKOBA ==================== -->
        <article id="bab-3"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">03</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-error font-bold tracking-wider">
                            BAB TIGA • AKHLAK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Menghindari Perkelahian Pelajar, Miras, dan Narkoba
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-error-container border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    AKHLAK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Perkelahian Pelajar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">sports_martial_arts</span>
                        1. PERKELAHIAN PELAJAR
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Perkelahian pelajar merupakan perilaku <strong>kekerasan</strong> yang dapat merugikan
                            diri sendiri, orang lain, dan lingkungan.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">warning</span>
                                DAMPAK
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Cedera &amp; kerugian<br>
                                <span class="text-primary font-bold">›</span> Mengganggu keamanan<br>
                                <span class="text-primary font-bold">›</span> Merusak nama baik sekolah<br>
                                <span class="text-primary font-bold">›</span> Menghambat pendidikan<br>
                                <span class="text-primary font-bold">›</span> Masalah hukum<br>
                                <span class="text-primary font-bold">›</span> Merusak masa depan
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">healing</span>
                                CARA MENCEGAH
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mengendalikan emosi<br>
                                <span class="text-primary font-bold">›</span> Tidak mudah terprovokasi<br>
                                <span class="text-primary font-bold">›</span> Memilih teman yang baik<br>
                                <span class="text-primary font-bold">›</span> Musyawarah menyelesaikan masalah<br>
                                <span class="text-primary font-bold">›</span> Minta bantuan guru/orang tua
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Minuman Keras -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">local_bar</span>
                        2. MINUMAN KERAS (KHAMR)
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Miras/khamr</strong> adalah minuman yang mengandung alkohol dan dapat memengaruhi
                            kesadaran.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md mb-space-md">
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gangguan Kesehatan</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Menurunkan Berpikir</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gangguan Sosial</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perilaku Berisiko</div>
                        </div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Gangguan Ibadah</div>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Islam <strong>melarang khamr</strong> karena dapat merusak akal dan menimbulkan banyak
                            kemudaratan.
                        </p>
                    </div>
                </div>

                <!-- 3. Narkoba -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">dangerous</span>
                        3. NARKOBA
                    </div>
                    <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Narkoba</strong> adalah zat yang dapat memengaruhi sistem saraf dan dapat
                            menyebabkan <strong>ketergantungan</strong> serta gangguan kesehatan.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">DAMPAK</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Gangguan fisik<br>
                                <span class="text-primary font-bold">›</span> Gangguan mental &amp; perilaku<br>
                                <span class="text-primary font-bold">›</span> Ketergantungan<br>
                                <span class="text-primary font-bold">›</span> Masalah sosial<br>
                                <span class="text-primary font-bold">›</span> Mengganggu pendidikan &amp; masa depan
                            </div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">CARA MENGHINDARI</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> Mengetahui bahayanya<br>
                                <span class="text-primary font-bold">2.</span> Memilih pergaulan sehat<br>
                                <span class="text-primary font-bold">3.</span> Berani menolak<br>
                                <span class="text-primary font-bold">4.</span> Kegiatan positif<br>
                                <span class="text-primary font-bold">5.</span> Minta bantuan orang tepercaya
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            INTI BAB 3
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Jauhi perkelahian, miras, dan narkoba karena dapat merusak <strong>kesehatan, akhlak,
                            hubungan sosial</strong>, dan <strong>masa depan</strong>.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 4 — ADAB BERDAKWAH ==================== -->
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
                            BAB EMPAT • DAKWAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Adab Berdakwah, Khutbah, dan Tablig
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    DAKWAH
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        Ketiganya berhubungan dengan penyampaian ajaran Islam, tetapi memiliki
                        <strong>pengertian berbeda</strong>.
                    </p>
                </div>

                <!-- 3 Konsep -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">campaign</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. Dakwah</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Usaha <strong>mengajak manusia</strong> menuju kebaikan dan menjalankan ajaran Islam.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">DAPAT MELALUI</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Lisan<br>
                            <span class="text-primary font-bold">›</span> Tulisan<br>
                            <span class="text-primary font-bold">›</span> Perbuatan<br>
                            <span class="text-primary font-bold">›</span> Keteladanan
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">mic</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. Khutbah</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Penyampaian nasihat atau ajaran agama dalam <strong>ibadah tertentu</strong>, salah satunya
                            khutbah Jumat.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">RUKUN KHUTBAH JUMAT</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Rangkaian salat Jumat<br>
                            <span class="text-primary font-bold">›</span> Dua khutbah<br>
                            <span class="text-primary font-bold">›</span> Duduk di antara dua khutbah<br>
                            <span class="text-primary font-bold">›</span> Sesuai tuntunan syariat
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">record_voice_over</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">3. Tablig</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            <strong>Menyampaikan ajaran Islam</strong> kepada orang lain.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Tablig lebih menekankan proses penyampaian pesan agama, sedangkan dakwah cakupannya lebih luas.
                        </p>
                    </div>
                </div>

                <!-- Tabel Perbedaan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        PERBEDAAN MUDAH
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Istilah</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Pengertian</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Dakwah</td>
                                    <td class="p-space-md">Mengajak manusia kepada kebaikan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Khutbah</td>
                                    <td class="p-space-md">Penyampaian ajaran dalam ibadah tertentu</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Tablig</td>
                                    <td class="p-space-md">Menyampaikan ajaran Islam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Etika Berdakwah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">handshake</span>
                        ETIKA BERDAKWAH
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Santun &amp; Sopan</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bahasa Baik</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bijaksana</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tidak Menghina</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tidak Memaksa</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Berikan Contoh</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — ULAMA INDONESIA ==================== -->
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
                            BAB LIMA • SEJARAH ISLAM
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Meneladani Perjuangan Ulama Indonesia
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ULAMA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Ulama</strong> memiliki peran penting dalam menyebarkan Islam, mendidik masyarakat,
                        membangun persatuan, dan ikut berjuang mempertahankan kemerdekaan Indonesia.
                    </p>
                </div>

                <!-- 3 Tokoh Ulama -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                    <!-- KH. Hasyim Asy'ari -->
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">school</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">KH. Hasyim Asy'ari</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Ulama besar Indonesia &amp; <strong>pendiri Nahdlatul Ulama (NU)</strong>.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KETELADANAN</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Gigih menuntut ilmu<br>
                            <span class="text-primary font-bold">›</span> Mengajarkan ilmu agama<br>
                            <span class="text-primary font-bold">›</span> Peduli terhadap umat<br>
                            <span class="text-primary font-bold">›</span> Semangat perjuangan<br>
                            <span class="text-primary font-bold">›</span> Cinta tanah air
                        </div>
                    </div>

                    <!-- Buya Hamka -->
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">edit_note</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Buya Hamka</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Ulama, cendekiawan, <strong>sastrawan</strong>, dan tokoh pendidikan Indonesia.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KETELADANAN</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Rajin mencari ilmu<br>
                            <span class="text-primary font-bold">›</span> Gemar menulis<br>
                            <span class="text-primary font-bold">›</span> Berwawasan luas<br>
                            <span class="text-primary font-bold">›</span> Teguh dalam prinsip<br>
                            <span class="text-primary font-bold">›</span> Dakwah melalui tulisan
                        </div>
                        <div class="mt-3 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KARYA TERKENAL</div>
                            <div class="font-code-inline text-code-inline text-on-surface">Tafsir Al-Azhar</div>
                        </div>
                    </div>

                    <!-- Prof. Quraish Shihab -->
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">menu_book</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Prof. Quraish Shihab</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Ulama &amp; cendekiawan yang dikenal luas dalam bidang <strong>Al-Qur'an &amp; tafsir</strong>.
                        </p>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KETELADANAN</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Sungguh-sungguh belajar<br>
                            <span class="text-primary font-bold">›</span> Mendalami Al-Qur'an<br>
                            <span class="text-primary font-bold">›</span> Bahasa mudah dipahami<br>
                            <span class="text-primary font-bold">›</span> Utamakan pendidikan<br>
                            <span class="text-primary font-bold">›</span> Dakwah bijaksana
                        </div>
                        <div class="mt-3 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KARYA TERKENAL</div>
                            <div class="font-code-inline text-code-inline text-on-surface">Tafsir Al-Mishbah</div>
                        </div>
                    </div>
                </div>

                <!-- Meneladani di Masa Modern -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        MENELADANI ULAMA DI MASA MODERN
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Sebagai pelajar, perjuangan ulama dapat diteladani dengan:
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">menu_book</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Rajin Belajar</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">science</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kuasai Agama &amp; IPTEK</div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">person</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Hormati Guru &amp; Ortu</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">favorite</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Jaga Akhlak</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">smartphone</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Teknologi Positif</div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">groups</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Jaga Persatuan</div>
                        </div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">lightbulb</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Berkarya</div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Nasionalisme</div>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul PPKn, Bahasa Indonesia,
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
