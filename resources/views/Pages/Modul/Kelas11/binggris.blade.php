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
                <span class="text-on-surface font-bold uppercase">B2 — BAHASA INGGRIS</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        KELOMPOK B • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        BAHASA
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">INGGRIS</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Mastering English for Global Communication — Mengasah literasi digital, kepedulian
                        lingkungan, gaya hidup sehat, hingga pengelolaan keuangan pribadi.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL UNIT</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">5
                            UNIT</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3 UNIT</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">2 UNIT</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#semester-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    SEMESTER 1
                </a>
                <a href="#semester-2"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-secondary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">auto_stories</span>
                    SEMESTER 2
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

        <!-- ============================================= -->
        <!-- ================ SEMESTER 1 ================= -->
        <!-- ============================================= -->
        <section id="semester-1" class="w-full">
            <div
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🇬🇧 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        UNIT 1 — UNIT 3
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== UNIT 1 — DIGITAL LITERACIES ==================== -->
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
                            UNIT ONE • DIGITAL LITERACIES
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Digital Literacies and My Identities
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SPEAKING &amp; WRITING
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Digital Literacy -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">devices</span>
                        1. DIGITAL LITERACY
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Digital literacy</strong> is the ability to use digital technology and online
                            media <strong>effectively, safely, critically, and responsibly</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">search</span>
                            <p class="font-body-sm text-body-sm font-bold text-on-surface">Searching info online</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">verified</span>
                            <p class="font-body-sm text-body-sm font-bold text-on-surface">Checking the truth</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">thumb_up</span>
                            <p class="font-body-sm text-body-sm font-bold text-on-surface">Responsible social media</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">lock</span>
                            <p class="font-body-sm text-body-sm font-bold text-on-surface">Protecting privacy</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">chat</span>
                            <p class="font-body-sm text-body-sm font-bold text-on-surface">Polite online</p>
                        </div>
                    </div>
                </div>

                <!-- 2. Digital Identity -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">badge</span>
                        2. DIGITAL IDENTITY
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Digital identity</strong> is the image or identity that a person creates through
                            their activities in the digital world.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Includes</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Profile name &amp; photo<br>
                                <span class="text-primary font-bold">›</span> Social media posts<br>
                                <span class="text-primary font-bold">›</span> Comments<br>
                                <span class="text-primary font-bold">›</span> Accounts &amp; websites<br>
                                <span class="text-primary font-bold">›</span> Communication style
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Good Digital Behavior</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">✓</span> Do not share personal info carelessly<br>
                                <span class="text-primary font-bold">✓</span> Think before posting<br>
                                <span class="text-primary font-bold">✓</span> Avoid cyberbullying<br>
                                <span class="text-primary font-bold">✓</span> Check info before sharing<br>
                                <span class="text-primary font-bold">✓</span> Respect others' opinions
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Expressing Opinions -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        3. EXPRESSING OPINIONS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Giving Opinion</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I think...<br>
                                › I believe...<br>
                                › In my opinion,...<br>
                                › From my point of view,...
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Agreeing</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I agree with you.<br>
                                › That's true.<br>
                                › I think so too.
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Disagreeing</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I disagree.<br>
                                › I don't agree with that.<br>
                                › I have a different opinion.
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">EXAMPLE</div>
                        <p class="font-body-md text-body-md text-on-surface italic">
                            "I think social media can be useful for learning."
                        </p>
                    </div>
                </div>

                <!-- 4. Subject Questions -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">help</span>
                        4. SUBJECT QUESTIONS
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            A <strong>subject question</strong> asks about the person or thing that
                            <strong>performs an action</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Subject Question</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                Who called you?<br>
                                <span class="text-primary font-bold">→ ask who performs</span>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Object Question</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                Who did you call?<br>
                                <span class="text-primary font-bold">→ ask about object</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Present Tenses -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        5. PRESENT TENSES
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Simple Present</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Untuk habits, routines, facts, general truths.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                S + V1(s/es) + O
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                                "She uses social media every day."
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Present Continuous</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Untuk aksi yang sedang terjadi sekarang.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center mb-2">
                                S + am/is/are + V-ing
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                                "She is using her phone now."
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== UNIT 2 — LOVE YOUR ENVIRONMENT ==================== -->
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
                            UNIT TWO • ENVIRONMENT
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Love Your Environment
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    READING &amp; VOCAB
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Environmental Problems -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        1. ENVIRONMENTAL PROBLEMS
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Plastic Waste</div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Air Pollution</div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Water Pollution</div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Deforestation</div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Climate Change</div>
                        <div class="p-space-md bg-error-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Household Waste</div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">DEFINITION</div>
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            <strong>Household waste</strong> means waste produced by daily activities at home.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                            "Plastic bottles, food waste, and used paper are household waste."
                        </div>
                    </div>
                </div>

                <!-- 2. How to Protect -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">eco</span>
                        2. HOW TO PROTECT THE ENVIRONMENT
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">reduce_capacity</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Reduce</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Reduce consumption</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">replay</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Reuse</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Reuse items</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[24px] mb-1">autorenew</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Recycle</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Recycle materials</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">water_drop</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Save</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Save water &amp; electricity</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">delete_sweep</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Don't Litter</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Keep clean</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[24px] mb-1">park</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Plant Trees</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Protect greenery</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Important Vocabulary -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">book</span>
                        3. IMPORTANT VOCABULARY
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Word</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Meaning</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Waste</td>
                                    <td class="p-space-md">Sampah / limbah</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Pollution</td>
                                    <td class="p-space-md">Polusi</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Environment</td>
                                    <td class="p-space-md">Lingkungan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Forest</td>
                                    <td class="p-space-md">Hutan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Deforestation</td>
                                    <td class="p-space-md">Penggundulan hutan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Recycling</td>
                                    <td class="p-space-md">Daur ulang</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Climate change</td>
                                    <td class="p-space-md">Perubahan iklim</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Renewable energy</td>
                                    <td class="p-space-md">Energi terbarukan</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Conservation</td>
                                    <td class="p-space-md">Pelestarian</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 4. Asking & Giving Suggestions -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">question_answer</span>
                        4. ASKING &amp; GIVING SUGGESTIONS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Asking</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › What should we do?<br>
                                › What do you suggest?<br>
                                › Do you have any suggestions?<br>
                                › What can we do to protect the environment?
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Giving</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › You should...<br>
                                › You shouldn't...<br>
                                › You could...<br>
                                › Why don't we...?<br>
                                › I suggest that we...<br>
                                › How about...?
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">EXAMPLE</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">A:</strong> What should we do with plastic waste?<br>
                            <strong class="text-primary">B:</strong> We should reduce the use of plastic.
                        </div>
                    </div>
                </div>

                <!-- 5. Adjective Phrases & Connectives -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">link</span>
                        5. ADJECTIVE PHRASES &amp; CONNECTIVES
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Adjective Phrases</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Grup kata yang mendeskripsikan sesuatu.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> very clean<br>
                                <span class="text-primary font-bold">›</span> extremely polluted<br>
                                <span class="text-primary font-bold">›</span> full of plastic waste
                            </div>
                            <div class="mt-2 p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant italic">
                                "The river is very polluted."
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Connectives</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Kata penghubung untuk urutan ide/kejadian.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> First<br>
                                <span class="text-primary font-bold">›</span> Second<br>
                                <span class="text-primary font-bold">›</span> Next<br>
                                <span class="text-primary font-bold">›</span> Then<br>
                                <span class="text-primary font-bold">›</span> After that<br>
                                <span class="text-primary font-bold">›</span> Finally
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== UNIT 3 — HEALTHY LIFE ==================== -->
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
                            UNIT THREE • HEALTHY LIFE
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Healthy Life for a Healthy Future
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PROCEDURE TEXT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Healthy Lifestyle -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">favorite</span>
                        1. HEALTHY LIFESTYLE
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            A <strong>healthy lifestyle</strong> is a way of living that helps maintain
                            <strong>physical and mental health</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Eating Nutritious Food</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Enough Water</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Exercise</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Enough Sleep</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Hygiene</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Managing Stress</div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface md:col-span-2">Mental Health Care</div>
                    </div>
                </div>

                <!-- 2. Important Vocabulary -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">book</span>
                        2. IMPORTANT VOCABULARY
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Word</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Meaning</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Healthy</td>
                                    <td class="p-space-md">Sehat</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Nutrition</td>
                                    <td class="p-space-md">Nutrisi</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Exercise</td>
                                    <td class="p-space-md">Olahraga</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Sleep</td>
                                    <td class="p-space-md">Tidur</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Mental health</td>
                                    <td class="p-space-md">Kesehatan mental</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Physical health</td>
                                    <td class="p-space-md">Kesehatan fisik</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Balanced diet</td>
                                    <td class="p-space-md">Pola makan seimbang</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Habit</td>
                                    <td class="p-space-md">Kebiasaan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Stress</td>
                                    <td class="p-space-md">Stres</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Disease</td>
                                    <td class="p-space-md">Penyakit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. Procedure Text -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">checklist</span>
                        3. PROCEDURE TEXT
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            A <strong>procedure text</strong> explains how to do or make something step by step.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Goal</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tujuan.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">construction</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Materials/Ingredients</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bahan/alat.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">list</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Steps</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Langkah-langkah.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Imperative Verbs</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Drink enough water.<br>
                                <span class="text-primary font-bold">›</span> Eat vegetables.<br>
                                <span class="text-primary font-bold">›</span> Wash your hands.
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Sequence Words</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">
                                First → Next → Then → Finally
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">EXAMPLE TOPIC</div>
                        <p class="font-body-md text-body-md text-on-surface italic">"How to Make a Healthy Drink"</p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ============================================= -->
        <!-- ================ SEMESTER 2 ================= -->
        <!-- ============================================= -->
        <section id="semester-2" class="w-full">
            <div
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🇮🇩 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        UNIT 4 — UNIT 5
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== UNIT 4 — ENVIRONMENTAL FIGURES ==================== -->
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
                            UNIT FOUR • BIOGRAPHY
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Indonesian Environmental Figures
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BIOGRAPHY
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Focus Points -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person_search</span>
                        1. FOCUS POINTS
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Identity</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Background</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Education</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Struggles</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Achievements</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Values</div>
                    </div>
                </div>

                <!-- 2. Biography Text -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        2. BIOGRAPHY / RECOUNT TEXT
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            A <strong>biography</strong> is a text that tells the life story of a person.
                            Biographies commonly use the <strong>Simple Past Tense</strong>.
                        </p>
                    </div>

                    <div class="flex flex-col gap-2 mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Orientation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Introduces the person.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Events</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Important experiences, struggles, and achievements in chronological order.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Reorientation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Conclusion or final statement about the person.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">EXAMPLE</div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            › He was born in Indonesia.<br>
                            › He started his environmental activities when he was young.<br>
                            › He worked to protect the environment.
                        </div>
                    </div>
                </div>

                <!-- 3. Common Past Verbs -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history</span>
                        3. COMMON PAST VERBS
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Present</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Past</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Meaning</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Go</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Went</td>
                                    <td class="p-space-md">Pergi</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Start</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Started</td>
                                    <td class="p-space-md">Memulai</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Work</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Worked</td>
                                    <td class="p-space-md">Bekerja</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Become</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Became</td>
                                    <td class="p-space-md">Menjadi</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Help</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Helped</td>
                                    <td class="p-space-md">Membantu</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Fight</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Fought</td>
                                    <td class="p-space-md">Berjuang</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Lead</td>
                                    <td class="p-space-md font-code-inline text-code-inline border-r-[2px] border-on-background">Led</td>
                                    <td class="p-space-md">Memimpin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 4. Retelling -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">replay</span>
                        4. RETELLING
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Retelling</strong> means telling a story or information again using your own words.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Structure</div>
                            <div class="font-code-inline text-code-inline text-on-surface text-center">
                                Introduction → Important Events → Achievements → Lesson/Value
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">When Presenting</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">✓</span> Speak clearly<br>
                                <span class="text-primary font-bold">✓</span> Don't only read the text<br>
                                <span class="text-primary font-bold">✓</span> Follow the sequence<br>
                                <span class="text-primary font-bold">✓</span> Be confident<br>
                                <span class="text-primary font-bold">✓</span> Good eye contact
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== UNIT 5 — MONEY MANAGEMENT ==================== -->
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
                            UNIT FIVE • FINANCIAL
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Personal Money Management
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ARGUMENT
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Personal Money Management -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">savings</span>
                        1. PERSONAL MONEY MANAGEMENT
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Personal money management</strong> means managing your money wisely.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">THE GOALS</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Meeting Needs</div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Avoid Unnecessary</div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Building Savings</div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Prepare Future</div>
                    </div>
                </div>

                <!-- 2. Important Vocabulary -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">book</span>
                        2. IMPORTANT VOCABULARY
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Word</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Meaning</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Money</td>
                                    <td class="p-space-md">Uang</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Income</td>
                                    <td class="p-space-md">Pendapatan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Expense</td>
                                    <td class="p-space-md">Pengeluaran</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Saving</td>
                                    <td class="p-space-md">Tabungan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Budget</td>
                                    <td class="p-space-md">Anggaran</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Need</td>
                                    <td class="p-space-md">Kebutuhan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Want</td>
                                    <td class="p-space-md">Keinginan</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Debt</td>
                                    <td class="p-space-md">Utang</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Goal</td>
                                    <td class="p-space-md">Tujuan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 3. Needs vs Wants -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare_arrows</span>
                        3. NEEDS vs. WANTS
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">restaurant</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Needs</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hal yang benar-benar kita butuhkan.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Food<br>
                                <span class="text-primary font-bold">›</span> Education<br>
                                <span class="text-primary font-bold">›</span> Transportation<br>
                                <span class="text-primary font-bold">›</span> Basic necessities
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shopping_bag</span>
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Wants</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hal yang ingin dimiliki tapi tidak esensial.</p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> New gadget (old still works)<br>
                                <span class="text-primary font-bold">›</span> Trendy items<br>
                                <span class="text-primary font-bold">›</span> Entertainment
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">IMPORTANT PRINCIPLE</div>
                        <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface">
                            Prioritize NEEDS before WANTS
                        </div>
                    </div>
                </div>

                <!-- 4. Budgeting -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calculate</span>
                        4. BUDGETING
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            A <strong>budget</strong> is a plan for how money will be used.
                        </p>
                        <div class="p-3 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">Example (Rp1.000.000):</strong><br>
                            › Needs: Rp600.000<br>
                            › Savings: Rp250.000<br>
                            › Other: Rp150.000
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">BASIC CONCEPT</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-headline-sm text-headline-sm font-bold text-on-surface">
                                Income = Expenses + Savings
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">warning</span>
                                JIKA PENGELUARAN &gt; PENDAPATAN
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface">
                                Perlu <strong>mengurangi spending</strong> atau <strong>reorganize the budget</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 5. Saving & Financial Planning -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">savings</span>
                        5. SAVING &amp; FINANCIAL PLANNING
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Saving Goals</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> School needs<br>
                                <span class="text-primary font-bold">›</span> Emergency funds<br>
                                <span class="text-primary font-bold">›</span> Education<br>
                                <span class="text-primary font-bold">›</span> Future plans
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Simple Financial Planning</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> Set a financial goal<br>
                                <span class="text-primary font-bold">2.</span> Record your income<br>
                                <span class="text-primary font-bold">3.</span> Record your expenses<br>
                                <span class="text-primary font-bold">4.</span> Separate needs from wants<br>
                                <span class="text-primary font-bold">5.</span> Decide how much to save<br>
                                <span class="text-primary font-bold">6.</span> Review budget regularly
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Giving Critical Arguments -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        6. GIVING CRITICAL ARGUMENTS
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">STRUCTURE</div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface text-center">
                            Opinion → Reason → Evidence/Example → Conclusion
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Opinion</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › I think...<br>
                                › I believe...<br>
                                › In my opinion...
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Reason</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › because...<br>
                                › because of...<br>
                                › The reason is...
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-2">Conclusion</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                › Therefore,...<br>
                                › That is why...<br>
                                › In conclusion,...
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">EXAMPLE</div>
                        <p class="font-body-md text-body-md text-on-surface italic">
                            "I think saving money is important because it helps us prepare for unexpected expenses."
                        </p>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul KK kejuruan R3-R6,
                        B7R, B9R1, dan mata pelajaran Kelas XI lainnya.
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
