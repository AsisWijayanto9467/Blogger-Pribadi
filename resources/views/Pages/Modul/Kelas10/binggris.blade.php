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
                <span class="text-on-surface font-bold uppercase">B2 — BAHASA INGGRIS</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        KELOMPOK B • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">INGGRIS</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mastering English for Communication — Membangun keterampilan berbahasa Inggris
                        yang aplikatif untuk komunikasi interpersonal, akademik, dan dunia kerja.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">10
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">4
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">6
                            BAB</span>
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

        <!-- ==================== SEMESTER 1 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟦 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 1 — BAB 4
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 1 — INTERPERSONAL EXPRESSIONS ==================== -->
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
                            CHAPTER ONE • SPEAKING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Interpersonal Expressions
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SPEAKING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Introducing Self and Others -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person_add</span>
                        1. INTRODUCING SELF AND OTHERS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">INTRODUCING YOURSELF</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-3">
                                <strong class="text-primary">Formal:</strong><br>
                                "Good morning. My name is Andi. I am a student at SMK..."<br><br>
                                <strong class="text-primary">Informal:</strong><br>
                                "Hi, I'm Andi."
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">INTRODUCING OTHERS</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                "This is my friend, Rina."<br>
                                "Let me introduce my friend, Rina."
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">ASKING IDENTITY</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                "What is your name?"<br>
                                "Where are you from?"<br>
                                "What do you do?"
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">RESPONDING</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                "My name is..."<br>
                                "I'm from..."<br>
                                "I'm a student."
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Formal</strong> digunakan dalam situasi resmi, sedangkan <strong>informal</strong>
                            digunakan dengan teman atau orang yang sudah akrab.
                        </p>
                    </div>
                </div>

                <!-- 2. Greetings & Leave-Takings -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">waving_hand</span>
                        2. GREETINGS AND LEAVE-TAKINGS
                    </div>

                    <div class="overflow-x-auto mb-space-md">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Situasi</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Ungkapan</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Pagi</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">Good morning</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Siang</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">Good afternoon</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Sore</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">Good evening</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Umum / Informal</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">Hi / Hello</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH DIALOG</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">A:</strong> Good morning, how are you?<br>
                                <strong class="text-primary">B:</strong> Good morning. I'm fine, thank you.
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">LEAVE-TAKING / PARTING</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › Goodbye.<br>
                                › See you later.<br>
                                › See you tomorrow.<br>
                                › Take care.<br>
                                › Have a nice day.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Happiness & Sympathy -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sentiment_satisfied</span>
                        3. EXPRESSING HAPPINESS &amp; SYMPATHY
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">mood</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Expressing Happiness</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Menyampaikan rasa senang atau bahagia.</p>
                            <div class="font-code-inline text-code-inline text-on-surface mb-3">
                                › I'm very happy.<br>
                                › I'm so glad to hear that.<br>
                                › That's wonderful!<br>
                                › I'm excited!
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">A:</strong> I won the competition!<br>
                                <strong class="text-primary">B:</strong> Congratulations! That's wonderful!
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">volunteer_activism</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Showing Care &amp; Sympathy</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Menunjukkan kepedulian atau simpati.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I'm sorry to hear that.<br>
                                › Are you okay?<br>
                                › I hope you feel better soon.<br>
                                › That's too bad.
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERBEDAAN</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Happiness:</strong> menunjukkan kebahagiaan
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Sympathy:</strong> menunjukkan kepedulian terhadap keadaan orang lain
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — RECOUNT TEXT ==================== -->
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
                            CHAPTER TWO • WRITING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Recount Text
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    WRITING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            PENGERTIAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Recount text</strong> adalah teks yang menceritakan kembali kejadian atau
                            pengalaman yang sudah terjadi di masa lalu.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">target</span>
                            TUJUAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>To retell past events or experiences.</strong>
                        </p>
                        <div class="mt-2 font-code-inline text-code-inline text-on-surface-variant">
                            Contoh: pengalaman liburan, perjalanan, biografi singkat.
                        </div>
                    </div>
                </div>

                <!-- Struktur -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUCTURE
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Orientation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memperkenalkan siapa, kapan, dan di mana.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Events</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menceritakan kejadian secara berurutan.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Reorientation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Penutup atau komentar tentang pengalaman tersebut.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grammar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">spellcheck</span>
                        GRAMMAR — SIMPLE PAST TENSE
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm font-bold text-on-surface">
                            S + V2 + O
                        </div>
                        <p class="mt-2 font-code-inline text-code-inline text-on-surface text-center">I visited Bali last year.</p>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TIME SIGNALS</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Yesterday</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Last week</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Last year</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Two days ago</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">In 2025</span>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH SINGKAT</div>
                        <p class="font-body-md text-body-md text-on-surface italic">
                            "Last Sunday, I went to the beach with my family. We played, swam, and took some pictures.
                            It was a wonderful experience."
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — DESCRIPTIVE TEXT ==================== -->
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
                            CHAPTER THREE • WRITING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Descriptive Text
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    DESCRIPTIVE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            PENGERTIAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Descriptive text</strong> adalah teks yang bertujuan menggambarkan
                            seseorang, benda, hewan, atau tempat secara khusus dan jelas.
                        </p>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">target</span>
                            TUJUAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>To describe a particular person, place, animal, or thing.</strong>
                        </p>
                    </div>
                </div>

                <!-- Structure -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUCTURE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">badge</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Identification</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memperkenalkan objek yang akan dideskripsikan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">visibility</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Description</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menjelaskan ciri, bentuk, sifat, warna, ukuran, dsb.</p>
                        </div>
                    </div>
                </div>

                <!-- Grammar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">spellcheck</span>
                        GRAMMAR — SIMPLE PRESENT TENSE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">POLA</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                S + V1(s/es)
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">POLA + ADJECTIVE</div>
                            <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                                S + is/am/are + adjective
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            "My school <strong>is</strong> large and clean."<br>
                            "She <strong>has</strong> long black hair."
                        </div>
                    </div>
                </div>

                <!-- Adjectives -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">palette</span>
                        ADJECTIVES (KATA SIFAT)
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Beautiful</div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tall</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Smart</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Friendly</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Clean</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Big</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Small</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Hardworking</div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 4 — GRAMMAR & VOCABULARY ==================== -->
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
                            CHAPTER FOUR • LANGUAGE FOCUS
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Grammar &amp; Vocabulary
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    GRAMMAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Pronouns -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">group</span>
                        1. PRONOUNS
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Pronoun</strong> = kata ganti untuk menggantikan kata benda/orang.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Jenis</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Subject</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">I, you, we, they, he, she, it</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface">Object</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">me, you, us, them, him, her, it</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface">Possessive Adjective</td>
                                    <td class="p-space-md font-code-inline text-code-inline text-on-surface">my, your, our, their, his, her, its</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            › <strong class="text-primary">She</strong> is my friend. (Subject)<br>
                            › I know <strong class="text-primary">her</strong>. (Object)<br>
                            › <strong class="text-primary">Her</strong> name is Rina. (Possessive)
                        </div>
                    </div>
                </div>

                <!-- Adjectives -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">text_fields</span>
                        2. ADJECTIVES
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            <strong>Adjective</strong> digunakan untuk menjelaskan sifat atau karakteristik seseorang/benda.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            "He is <strong class="text-primary">smart</strong> and <strong class="text-primary">friendly</strong>."<br><br>
                            <strong class="text-primary">smart</strong> → pintar<br>
                            <strong class="text-primary">friendly</strong> → ramah
                        </div>
                    </div>
                </div>

                <!-- Vocabulary -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">book</span>
                        3. VOCABULARY (KOSAKATA)
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">health_and_safety</span>
                                TEMA KESEHATAN
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">healthy</strong> = sehat<br>
                                <strong class="text-primary">exercise</strong> = olahraga<br>
                                <strong class="text-primary">medicine</strong> = obat<br>
                                <strong class="text-primary">illness</strong> = penyakit<br>
                                <strong class="text-primary">doctor</strong> = dokter
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">sports_soccer</span>
                                TEMA OLAHRAGA
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">athlete</strong> = atlet<br>
                                <strong class="text-primary">competition</strong> = kompetisi<br>
                                <strong class="text-primary">training</strong> = latihan<br>
                                <strong class="text-primary">winner</strong> = pemenang<br>
                                <strong class="text-primary">champion</strong> = juara
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== SEMESTER 2 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟢 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 5 — BAB 10
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 5 — CONGRATULATING & COMPLIMENTING ==================== -->
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
                            CHAPTER FIVE • SPEAKING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Congratulating and Complimenting
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SPEAKING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <!-- Congratulating -->
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">celebration</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">1. CONGRATULATING</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Memberikan <strong>ucapan selamat</strong> atas keberhasilan atau pencapaian seseorang.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
                            › Congratulations!<br>
                            › Congratulations on your success!<br>
                            › Well done!<br>
                            › I'm happy for you.
                        </div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">RESPONS</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            › Thank you.<br>
                            › Thanks a lot.<br>
                            › I really appreciate it.
                        </div>
                    </div>

                    <!-- Complimenting -->
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">thumb_up</span>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">2. COMPLIMENTING</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                            Memberikan <strong>pujian</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
                            › You look great!<br>
                            › That's a beautiful dress.<br>
                            › Your presentation was excellent.<br>
                            › You did a great job!
                        </div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">RESPONS</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            › Thank you.<br>
                            › That's very kind of you.
                        </div>
                    </div>
                </div>

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERBEDAAN</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <strong class="text-primary">Congratulating:</strong> selamat atas pencapaian
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                            <strong class="text-primary">Complimenting:</strong> memuji kualitas/penampilan/hasil
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 6 — INVITATION & APPOINTMENT ==================== -->
        <article id="bab-6"
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
                            CHAPTER SIX • SPEAKING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Invitation &amp; Appointment
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    INVITATION
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Invitation -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">mail</span>
                        1. INVITATION
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Invitation</strong> = undangan atau ajakan.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">celebration</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">MENGUNDANG</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › Would you like to come to my birthday party?<br>
                                › Would you like to join us?<br>
                                › Do you want to come with me?
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">check_circle</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">MENERIMA</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I'd love to.<br>
                                › Sure, I'd be happy to.<br>
                                › That sounds great.
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">cancel</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">MENOLAK</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I'm sorry, I can't.<br>
                                › I'd love to, but I have another plan.<br>
                                › Sorry, I'm busy that day.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Appointment -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">event</span>
                        2. APPOINTMENT
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Appointment</strong> = janji temu, biasanya untuk menentukan waktu bertemu.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-code-inline text-code-inline text-on-surface">
                            › Can we meet at 3 p.m.?<br>
                            › Are you available tomorrow?<br>
                            › I'd like to make an appointment with the doctor.
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 7 — NARRATIVE TEXT ==================== -->
        <article id="bab-7"
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
                            CHAPTER SEVEN • READING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Narrative Text
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    NARRATIVE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            PENGERTIAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Narrative text</strong> adalah teks yang menceritakan cerita atau kejadian,
                            biasanya untuk menghibur pembaca.
                        </p>
                        <div class="mt-2 font-code-inline text-code-inline text-on-surface-variant">
                            Contoh: legenda, dongeng, fabel, cerita fantasi.
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">target</span>
                            TUJUAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>To entertain the readers.</strong>
                        </p>
                    </div>
                </div>

                <!-- Structure -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUCTURE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Orientation</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengenalan tokoh, tempat, waktu.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Complication</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Muncul masalah/konflik.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Resolution</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Masalah diselesaikan.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Coda</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesan/pelajaran cerita, jika ada.</p>
                        </div>
                    </div>
                </div>

                <!-- Grammar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">spellcheck</span>
                        GRAMMAR
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Umumnya menggunakan <strong>Simple Past Tense</strong>.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            "Once upon a time, there lived a kind girl."
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">KATA YANG SERING DIGUNAKAN</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Once upon a time</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">One day</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Suddenly</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Then</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">Finally</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">In the end</span>
                        </div>
                    </div>
                </div>

                <!-- Recount vs Narrative -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        RECOUNT vs NARRATIVE
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Recount</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Narrative</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md border-r-[2px] border-on-background">Pengalaman/kejadian nyata</td>
                                    <td class="p-space-md">Cerita/dongeng/fabel</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md border-r-[2px] border-on-background">Menceritakan kembali</td>
                                    <td class="p-space-md">Menghibur pembaca</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md border-r-[2px] border-on-background font-code-inline text-code-inline">Orientation → Events → Reorientation</td>
                                    <td class="p-space-md font-code-inline text-code-inline">Orientation → Complication → Resolution → Coda</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 8 — PROCEDURE TEXT ==================== -->
        <article id="bab-8"
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
                            CHAPTER EIGHT • WRITING
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Procedure Text
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PROCEDURE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            PENGERTIAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Procedure text</strong> adalah teks yang menjelaskan cara melakukan atau
                            membuat sesuatu melalui langkah-langkah.
                        </p>
                        <div class="mt-2 font-code-inline text-code-inline text-on-surface-variant">
                            Contoh: resep, cara menggunakan alat, tutorial, panduan.
                        </div>
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">target</span>
                            TUJUAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>To tell someone how to do or make something.</strong>
                        </p>
                    </div>
                </div>

                <!-- Structure -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">account_tree</span>
                        STRUCTURE
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Goal</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tujuan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">construction</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Materials/Equipment</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bahan atau alat.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">checklist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Steps</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Langkah-langkah.</p>
                        </div>
                    </div>
                </div>

                <!-- Imperative -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">campaign</span>
                        IMPERATIVE SENTENCES
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Procedure text banyak menggunakan <strong>kalimat perintah</strong>.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-code-inline text-code-inline text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">› Open the application.</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">› Press the button.</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">› Add some water.</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">› Mix the ingredients.</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background md:col-span-2">› Turn on the computer.</div>
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">KATA PENGHUBUNG URUTAN</div>
                        <div class="font-code-inline text-code-inline text-on-surface text-center">
                            First → Next → Then → After that → Finally
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 9 — FRACTURED STORIES & EXPOSITION ==================== -->
        <article id="bab-9"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">09</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            CHAPTER NINE • CREATIVE
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Fractured Stories &amp; Exposition Dasar
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    CREATIVE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Fractured Stories -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_stories</span>
                        1. FRACTURED STORIES
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Fractured story</strong> adalah cerita yang dibuat dengan
                            <strong>memodifikasi cerita yang sudah dikenal</strong>.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">edit</span>
                        YANG DAPAT DIUBAH
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tokoh</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Latar</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Konflik</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Alur</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Akhir</div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Contohnya, cerita legenda lama dibuat dengan latar zaman modern dan karakter yang berbeda.
                            Tujuannya adalah menghasilkan cerita baru dan kreatif.
                        </p>
                    </div>
                </div>

                <!-- Exposition -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        2. EXPOSITION DASAR
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Exposition</strong> digunakan untuk menyampaikan pendapat atau gagasan mengenai
                            suatu masalah disertai alasan.
                        </p>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">CONTOH TOPIK</div>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            "Students should exercise regularly."
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant text-center">Pendapat tersebut kemudian didukung dengan alasan atau fakta.</p>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">KATA YANG SERING DIGUNAKAN</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">I think...</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">I believe...</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">In my opinion...</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">because...</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">therefore...</span>
                            <span class="font-label-md text-label-md uppercase px-3 py-1.5 bg-surface-container-lowest border-[2px] border-on-background font-bold">however...</span>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 10 — KETERAMPILAN BERBAHASA ==================== -->
        <article id="bab-10"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">10</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            CHAPTER TEN • LANGUAGE SKILLS
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Keterampilan Berbahasa
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SKILLS
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Reading -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        1. READING
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Reading comprehension</strong> = kemampuan memahami isi bacaan.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">HAL YANG PERLU DICARI</div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Main Idea</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ide utama</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Specific Info</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Informasi khusus</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Meaning</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Arti kata</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Reference</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kata rujukan</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Inference</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kesimpulan</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TIPS</div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Baca pertanyaan terlebih dahulu, lalu cari informasi yang relevan dalam teks.
                        </p>
                    </div>
                </div>

                <!-- Listening -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">headphones</span>
                        2. LISTENING
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Listening</strong> = kemampuan memahami informasi yang didengar.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PERHATIKAN</div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Kata Kunci</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Angka</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Nama</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Waktu</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Tempat</div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            Tidak harus memahami setiap kata untuk mendapatkan inti pembicaraan.
                        </p>
                    </div>
                </div>

                <!-- Speaking -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">record_voice_over</span>
                        3. SPEAKING
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Speaking</strong> = kemampuan berbicara menggunakan Bahasa Inggris.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">YANG PENTING</div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Pronunciation</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pengucapan</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Vocabulary</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kosakata</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Grammar</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tata bahasa</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Fluency</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kelancaran</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Confidence</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Percaya diri</p>
                        </div>
                    </div>

                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">PRESENTASI SEDERHANA</div>
                        <div class="font-code-inline text-code-inline text-on-surface mb-2">
                            Opening → Introduction → Main Content → Closing
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-body-sm text-body-sm text-on-surface italic">
                            "Good morning, everyone. Today I would like to talk about..."
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Informatika,
                        PIPAS, dan mata pelajaran lainnya.
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
