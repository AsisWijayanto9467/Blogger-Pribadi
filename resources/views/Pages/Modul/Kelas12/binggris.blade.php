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

    /* ============ SENTENCE BLOCK (ENGLISH EXAMPLE) ============ */
    .sentence-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 0.75rem 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        line-height: 1.6;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-style: italic;
    }
    .sentence-block::before {
        content: '“';
        color: #57a8dd;
        font-size: 24px;
        font-weight: 900;
        margin-right: 4px;
        font-style: normal;
        vertical-align: middle;
    }

    /* ============ FORMULA / STRUCTURE BLOCK ============ */
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
            <span class="font-bold text-on-surface">B2 — Bahasa Inggris</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">B2</span>
                    <span class="badge-semester s2">UMUM</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">ENGLISH</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Bahasa Inggris<br>Kelas XII
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>Narrative Text</strong>, <strong>Argumentative Text</strong>,
                    <strong>Hortatory Exposition</strong>, <strong>Discussion Text</strong>,
                    <strong>Job Application &amp; CV</strong>, <strong>News Item &amp; Media Literacy</strong>,
                    <strong>Review Text</strong>, hingga <strong>Conditional Sentences &amp; Future Plan</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Bab</div>
                    <div class="font-headline-sm text-headline-sm font-bold">8 Bab</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~16 Jam</div>
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
                        <span class="material-symbols-outlined text-tertiary text-[32px]">menu_book</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Narrative, Argumentative &amp; Discussion Texts
                            </h2>
                        </div>
                    </div>

                    {{-- ============ CHAPTER 1: NARRATIVE TEXT ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 1</div>
                            <div class="font-headline-sm uppercase">Narrative Text</div>
                        </div>

                        {{-- Definition --}}
                        <h3 id="narrative-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Definition
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            A <strong>narrative text</strong> is a text that tells a story or a series of events.
                            Its main purpose is to <em>entertain</em> the readers and sometimes to give them a moral lesson.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Fairy Tales</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Legends</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Fables</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Short Stories</div>
                        </div>

                        {{-- Generic Structure --}}
                        <h3 id="narrative-structure" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Generic Structure
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>A. Orientation</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Introduces <strong>characters, place, time, and initial situation</strong>.
                                        Main questions: Who? Where? When?
                                    </p>
                                    <div class="sentence-block">A group of students lived in a small village with limited electricity.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>B. Complication</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Introduces the <strong>problem or conflict</strong> in the story.
                                    </p>
                                    <div class="sentence-block">One day, the village experienced a long power outage.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>C. Resolution</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Explains <strong>how the problem is solved</strong>.
                                    </p>
                                    <div class="sentence-block">The students built solar panels to provide clean electricity for the village.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>D. Coda / Moral Value</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Contains the <strong>lesson or moral value</strong>.
                                        <em>Not every narrative text has a coda.</em>
                                    </p>
                                    <div class="sentence-block">We should use renewable energy to protect our environment.</div>
                                </div>
                            </details>
                        </div>

                        {{-- Simple Past Tense --}}
                        <h3 id="narrative-simple-past" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Simple Past Tense
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Used to talk about actions or events that <strong>happened in the past</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Positive</div>
                                <div class="formula-block"><span class="boxed">S + V2 + O</span></div>
                                <div class="sentence-block mt-2">The students built a solar panel.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Negative</div>
                                <div class="formula-block"><span class="boxed">S + did not + V1</span></div>
                                <div class="sentence-block mt-2">The students did not build a solar panel.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Question</div>
                                <div class="formula-block"><span class="boxed">Did + S + V1?</span></div>
                                <div class="sentence-block mt-2">Did the students build a solar panel?</div>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">🕐 Time Expressions:</span>
                            <span class="font-body-sm"> yesterday · last week · last year · two days ago · in 2020 · once · one day</span>
                        </div>

                        {{-- Past Continuous --}}
                        <h3 id="narrative-past-continuous" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Past Continuous Tense
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Describes an activity that was <strong>in progress</strong> at a particular time in the past.
                        </p>
                        <div class="formula-block"><span class="boxed">S + was/were + V-ing</span></div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-2">
                            <div class="sentence-block">She was studying.</div>
                            <div class="sentence-block">They were building a solar panel.</div>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-3">
                            Often used with <strong>Simple Past</strong>:
                        </p>
                        <div class="sentence-block mt-2">They <strong>were working</strong> when it suddenly <strong>rained</strong>.</div>

                        {{-- Action Verbs --}}
                        <h3 id="narrative-action-verbs" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Action Verbs
                        </h3>

                        <table class="brutal-table">
                            <thead><tr><th>Verb</th><th>Meaning</th><th>Past Form</th></tr></thead>
                            <tbody>
                                <tr><td>build</td><td>make something</td><td>built</td></tr>
                                <tr><td>walk</td><td>move on foot</td><td>walked</td></tr>
                                <tr><td>generate</td><td>produce</td><td>generated</td></tr>
                                <tr><td>create</td><td>make something new</td><td>created</td></tr>
                                <tr><td>develop</td><td>make something better</td><td>developed</td></tr>
                                <tr><td>install</td><td>put something in place</td><td>installed</td></tr>
                            </tbody>
                        </table>

                        {{-- Time Connectors --}}
                        <h3 id="narrative-connectors" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Time Connectors
                        </h3>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">First</span>
                            <span class="badge-semester s2">Then</span>
                            <span class="badge-semester s3">Next</span>
                            <span class="badge-semester s4">After that</span>
                            <span class="badge-semester s5">Suddenly</span>
                            <span class="badge-semester">Finally</span>
                            <span class="badge-semester s2">Before</span>
                            <span class="badge-semester s3">After</span>
                            <span class="badge-semester s4">While</span>
                        </div>
                        <div class="sentence-block">First, they collected the materials. Then, they built the solar panel. Finally, they tested it.</div>
                    </article>

                    {{-- ============ CHAPTER 2: ARGUMENTATIVE TEXT ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 2</div>
                            <div class="font-headline-sm uppercase">Argumentative Text — E-Money</div>
                        </div>

                        <h3 id="arg-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Definition
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            An <strong>argumentative text</strong> presents an opinion about an issue and provides
                            reasons or evidence to support that opinion.
                        </p>
                        <div class="sentence-block">Is e-money better than cash?</div>

                        <h3 id="arg-structure" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Generic Structure
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>A. Introduction / Thesis</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Presents the topic and the writer's main position.
                                    </p>
                                    <div class="sentence-block">E-money has become an important part of modern payment systems.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>B. Arguments</summary>
                                <div class="p-space-md">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <div>
                                            <div class="font-label-sm uppercase font-bold mb-1 text-green-700">✓ Advantages</div>
                                            <ul class="font-code-inline text-code-inline space-y-1">
                                                <li>› Practical</li>
                                                <li>› Fast</li>
                                                <li>› Efficient</li>
                                                <li>› Convenient</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="font-label-sm uppercase font-bold mb-1 text-red-600">✗ Disadvantages</div>
                                            <ul class="font-code-inline text-code-inline space-y-1">
                                                <li>› Security risks</li>
                                                <li>› Technology dependence</li>
                                                <li>› Internet problems</li>
                                                <li>› System failures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>C. Conclusion / Restatement</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Summarizes or restates the main position.
                                    </p>
                                    <div class="sentence-block">Therefore, e-money is useful as long as people use it carefully and securely.</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="arg-simple-present" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Simple Present Tense
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">General</div>
                                <div class="formula-block"><span class="boxed">S + V1</span></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">He / She / It</div>
                                <div class="formula-block"><span class="boxed">S + V1 + s/es</span></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-2">
                            <div class="sentence-block">E-money makes transactions easier.</div>
                            <div class="sentence-block">E-money does not always guarantee security.</div>
                        </div>

                        <h3 id="arg-connectors" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Connectors
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">Addition</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester s4">Furthermore</span>
                                    <span class="badge-semester s4">Moreover</span>
                                    <span class="badge-semester s4">In addition</span>
                                    <span class="badge-semester s4">Also</span>
                                    <span class="badge-semester s4">Besides</span>
                                </div>
                                <div class="sentence-block">E-money is practical. Furthermore, it saves time.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">Contrast</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester s5">However</span>
                                    <span class="badge-semester s5">But</span>
                                    <span class="badge-semester s5">On the other hand</span>
                                    <span class="badge-semester s5">Nevertheless</span>
                                    <span class="badge-semester s5">Although</span>
                                </div>
                                <div class="sentence-block">E-money is convenient. However, it can have security risks.</div>
                            </div>
                        </div>

                        <h3 id="arg-fact-opinion" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Fact vs Opinion
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Fact</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Can be proven.</p>
                                <div class="sentence-block">Many people use digital payment systems.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Opinion</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Personal belief or judgment.</p>
                                <div class="sentence-block">I think digital payment is more convenient than cash.</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1 mt-3">
                            <span class="badge-semester">I think...</span>
                            <span class="badge-semester s2">I believe...</span>
                            <span class="badge-semester s3">In my opinion...</span>
                            <span class="badge-semester s4">I agree...</span>
                            <span class="badge-semester s5">I disagree...</span>
                        </div>
                    </article>

                    {{-- ============ CHAPTER 3: HORTATORY EXPOSITION ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 3</div>
                            <div class="font-headline-sm uppercase">Hortatory Exposition — Netiquette</div>
                        </div>

                        <h3 id="hort-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Definition
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            A <strong>hortatory exposition</strong> is a text that tries to <em>persuade</em> readers to do
                            or not do something. Topic: <strong>Netiquette</strong> — proper manners on the internet.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Polite language</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Respect privacy</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">No fake news</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">No cyberbullying</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Protect data</div>
                        </div>

                        <h3 id="hort-structure" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Generic Structure
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>A. Thesis</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Introduces the issue and position.</p>
                                    <div class="sentence-block">People should follow proper netiquette when communicating online.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>B. Arguments</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Reasons supporting the position.</p>
                                    <div class="sentence-block">Good netiquette prevents misunderstandings and creates a safer digital environment.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>C. Recommendation</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">What people should do.</p>
                                    <div class="sentence-block">Internet users should communicate respectfully and responsibly.</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="hort-modal" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Modal Verbs
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Should — Advice</div>
                                <div class="sentence-block">We should respect other internet users.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Ought to — Recommendation</div>
                                <div class="sentence-block">Users ought to protect their privacy.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Must — Strong Obligation</div>
                                <div class="sentence-block">You must protect your personal information.</div>
                            </div>
                        </div>

                        <h3 id="hort-mental" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Mental Verbs
                        </h3>
                        <div class="flex flex-wrap gap-1 mb-space-sm">
                            <span class="badge-semester">Think</span>
                            <span class="badge-semester s2">Believe</span>
                            <span class="badge-semester s3">Realize</span>
                            <span class="badge-semester s4">Understand</span>
                            <span class="badge-semester s5">Appreciate</span>
                            <span class="badge-semester">Consider</span>
                            <span class="badge-semester s2">Know</span>
                        </div>
                        <div class="sentence-block">We should realize that our online actions can affect other people.</div>
                    </article>

                    {{-- ============ CHAPTER 4: DISCUSSION TEXT ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 4</div>
                            <div class="font-headline-sm uppercase">Discussion Text — Carbon Footprints</div>
                        </div>

                        <h3 id="disc-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Definition
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            A <strong>discussion text</strong> discusses an issue from different points of view —
                            supporting arguments + opposing arguments → conclusion.
                        </p>

                        <h3 id="disc-structure" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Generic Structure
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>A. Issue</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Introduces the problem.</p>
                                    <div class="sentence-block">Human activities produce carbon emissions that contribute to climate change.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>B. Supporting Points</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">Reducing carbon emissions can help protect the environment.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>C. Contrast Points</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">However, reducing emissions may be difficult for industries that depend heavily on fossil fuels.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>D. Conclusion / Recommendation</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">Therefore, governments, industries, and individuals should work together to reduce emissions.</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="disc-carbon" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Carbon Footprint
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            The amount of greenhouse gas emissions produced by human activities, measured in
                            <strong>carbon dioxide equivalent</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Sources</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Cars &amp; motorcycles</li>
                                    <li>› Electricity consumption</li>
                                    <li>› Industrial activities</li>
                                    <li>› Burning fossil fuels</li>
                                </ul>
                            </div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Ways to Reduce</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Use public transportation</li>
                                    <li>› Save electricity</li>
                                    <li>› Use renewable energy</li>
                                    <li>› Reduce &amp; reuse waste</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">work</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Job Application, News &amp; Future Plans
                            </h2>
                        </div>
                    </div>

                    {{-- ============ CHAPTER 5: JOB APPLICATION ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 5</div>
                            <div class="font-headline-sm uppercase">Job Application Letter &amp; CV</div>
                        </div>

                        <h3 id="job-letter" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Job Application Letter
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            A formal letter written to apply for a job.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Introduce yourself</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">State position</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Explain qualifications</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Show skills</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Experience</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Request interview</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Structure</h4>
                        <div class="space-y-2">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">A.</span> Sender's Address
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">B.</span> Receiver's Address
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">C.</span> Date
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">D.</span> Salutation —
                                <span class="font-code-inline text-code-inline">Dear Hiring Manager, / Dear Sir/Madam,</span>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">E.</span> Opening Paragraph
                                <div class="sentence-block mt-2">I am writing to apply for the position of Junior Web Developer.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">F.</span> Body — education, skills, qualifications
                                <div class="flex flex-wrap gap-1 mt-2">
                                    <span class="badge-semester">HTML</span>
                                    <span class="badge-semester s2">CSS</span>
                                    <span class="badge-semester s3">JavaScript</span>
                                    <span class="badge-semester s4">PHP</span>
                                    <span class="badge-semester s5">Laravel</span>
                                    <span class="badge-semester">MySQL</span>
                                    <span class="badge-semester s2">Git</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="font-label-sm uppercase font-bold text-tertiary">G.</span> Closing
                                <div class="sentence-block mt-2">I would be grateful for the opportunity to discuss my qualifications in an interview.</div>
                                <div class="font-code-inline text-code-inline mt-2">Sincerely,</div>
                            </div>
                        </div>

                        <h3 id="job-cv" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Curriculum Vitae (CV)
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Personal Info</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Profile</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Education</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Experience</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Internship / PKL</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Skills</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Certificates</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Projects</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Contact</div>
                        </div>

                        <h3 id="job-interview" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Job Interview
                        </h3>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">Common Questions</div>
                            <ul class="font-code-inline text-code-inline space-y-1">
                                <li>› Tell me about yourself.</li>
                                <li>› What are your strengths?</li>
                                <li>› What are your weaknesses?</li>
                                <li>› Why do you want to work here?</li>
                                <li>› Why should we hire you?</li>
                                <li>› What are your career goals?</li>
                            </ul>
                        </div>
                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Good answer:</span>
                            <span class="font-body-sm"> clear + honest + relevant + confident</span>
                        </div>
                    </article>

                    {{-- ============ CHAPTER 6: NEWS ITEM ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 6</div>
                            <div class="font-headline-sm uppercase">News Item &amp; Media Literacy</div>
                        </div>

                        <h3 id="news-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            News Item
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            A text that provides information about an important or recent event.
                        </p>

                        <div class="space-y-space-sm mt-space-md">
                            <details class="accordion-card" open>
                                <summary>A. Main Event</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">A new solar power plant was officially opened on Monday.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>B. Background Events</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Explains When, Where, Why, How.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>C. Source</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">According to the project manager, the plant will provide clean energy for thousands of residents.</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="news-passive" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Passive Voice
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">Active</div>
                                <div class="sentence-block">The government built the bridge.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Passive</div>
                                <div class="sentence-block">The bridge was built by the government.</div>
                            </div>
                        </div>
                        <div class="formula-block mt-space-md"><span class="boxed">S + be + V3</span></div>
                        <div class="formula-block mt-2"><span class="boxed">Simple Past: S + was/were + V3</span></div>
                        <div class="sentence-block mt-3">The bridge was built in 2025.</div>

                        <h3 id="news-speech" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Direct vs Indirect Speech
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Direct Speech</div>
                                <div class="sentence-block">The teacher said, "The project is successful."</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Indirect Speech</div>
                                <div class="sentence-block">The teacher said that the project was successful.</div>
                            </div>
                        </div>

                        <table class="brutal-table mt-space-md">
                            <thead><tr><th>Direct</th><th>Indirect</th></tr></thead>
                            <tbody>
                                <tr><td>am / is</td><td>was</td></tr>
                                <tr><td>are</td><td>were</td></tr>
                                <tr><td>will</td><td>would</td></tr>
                                <tr><td>can</td><td>could</td></tr>
                                <tr><td>have / has</td><td>had</td></tr>
                            </tbody>
                        </table>

                        <h3 id="news-media" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Media Literacy
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            The ability to understand, analyze, evaluate, and use media information responsibly.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Identify sources</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Fact vs Opinion</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Recognize fake news</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Check evidence</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Compare sources</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Identify clickbait</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">🔍 Before believing news, ask:</div>
                            <div class="font-code-inline text-code-inline space-y-1">
                                <div>› Who published it?</div>
                                <div>› When was it published?</div>
                                <div>› Is there evidence?</div>
                                <div>› Is the source reliable?</div>
                                <div>› Do other sources report the same?</div>
                            </div>
                        </div>
                    </article>

                    {{-- ============ CHAPTER 7: REVIEW TEXT ============ --}}
                    <article id="bab-7" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 7</div>
                            <div class="font-headline-sm uppercase">Review Text</div>
                        </div>

                        <h3 id="review-def" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Definition
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Evaluates a product, application, film, book, game, service, or other work.
                        </p>

                        <h3 id="review-structure" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Generic Structure
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>A. Orientation</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">Canva is a popular graphic design application.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>B. Evaluation</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">The application is easy to use and provides many useful features.</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>C. Interpretative Account</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Deeper discussion: features, interface, performance, usability, advantages, disadvantages.
                                    </p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>D. Evaluative Summation / Recommendation</summary>
                                <div class="p-space-md">
                                    <div class="sentence-block">Overall, Canva is recommended for students who need a simple design tool.</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="review-adj" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Adjectives for Reviews
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✓ Positive</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s4">Useful</span>
                                    <span class="badge-semester s4">Innovative</span>
                                    <span class="badge-semester s4">Attractive</span>
                                    <span class="badge-semester s4">User-friendly</span>
                                    <span class="badge-semester s4">Reliable</span>
                                    <span class="badge-semester s4">Efficient</span>
                                    <span class="badge-semester s4">Affordable</span>
                                </div>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">✗ Negative</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s5">Expensive</span>
                                    <span class="badge-semester s5">Complicated</span>
                                    <span class="badge-semester s5">Disappointing</span>
                                    <span class="badge-semester s5">Difficult</span>
                                    <span class="badge-semester s5">Unreliable</span>
                                    <span class="badge-semester s5">Slow</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">📝 How to Write a Good Review</div>
                            <div class="diagram-box">Object → Description → Strengths → Weaknesses → Evaluation → Recommendation</div>
                            <div class="mt-3">
                                <div class="font-label-sm uppercase font-bold mb-1 text-red-600">❌ Instead of:</div>
                                <div class="sentence-block">This application is good.</div>
                                <div class="font-label-sm uppercase font-bold mb-1 mt-3 text-green-700">✔ Give a reason:</div>
                                <div class="sentence-block">This application is useful because it provides an easy-to-use interface and many design templates.</div>
                            </div>
                        </div>
                    </article>

                    {{-- ============ CHAPTER 8: CONDITIONAL SENTENCES ============ --}}
                    <article id="bab-8" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CHAPTER 8</div>
                            <div class="font-headline-sm uppercase">Conditional Sentences &amp; Future Plan</div>
                        </div>

                        <h3 id="cond-type-1" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Conditional Type 1 — Real Possibility
                        </h3>
                        <div class="formula-block"><span class="boxed">If + Simple Present, will + V1</span></div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-2">
                            <div class="sentence-block">If I study hard, I will pass the exam.</div>
                            <div class="sentence-block">If I get a job, I will save some money.</div>
                        </div>

                        <h3 id="cond-type-2" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Conditional Type 2 — Hypothetical
                        </h3>
                        <div class="formula-block"><span class="boxed">If + Simple Past, would + V1</span></div>
                        <div class="sentence-block mt-2">If I had more money, I would buy a new laptop.</div>

                        <h3 id="cond-type-3" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Conditional Type 3 — Past Regret
                        </h3>
                        <div class="formula-block"><span class="boxed">If + Past Perfect, would have + V3</span></div>
                        <div class="sentence-block mt-2">If I had studied harder, I would have passed the exam.</div>

                        <h3 id="cond-compare" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Comparison of Conditionals
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Type</th><th>Meaning</th><th>Formula</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Type 1</strong></td><td>Real possibility</td><td>If + V1, will + V1</td></tr>
                                <tr><td><strong>Type 2</strong></td><td>Hypothetical</td><td>If + V2, would + V1</td></tr>
                                <tr><td><strong>Type 3</strong></td><td>Past regret</td><td>If + had + V3, would have + V3</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Easy way:</span>
                            <span class="font-body-sm"> Type 1 → Real · Type 2 → Unreal · Type 3 → Regret</span>
                        </div>

                        <h3 id="cond-wish" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Expressing Wishes
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Wish about Present</div>
                                <div class="formula-block">wish + Simple Past</div>
                                <div class="sentence-block mt-2">I wish I had more time.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Wish about Past</div>
                                <div class="formula-block">wish + Past Perfect</div>
                                <div class="sentence-block mt-2">I wish I had studied harder.</div>
                            </div>
                        </div>

                        <h3 id="future-plan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Future Plans
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Be Going To</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Planned intention.</p>
                                <div class="sentence-block">I am going to study at university.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Will</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Predictions, decisions.</p>
                                <div class="sentence-block">I will work as a web developer.</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Present Continuous</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Arranged future.</p>
                                <div class="sentence-block">I am starting my internship next month.</div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Plans After Graduating</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">🎓 University</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester">University</span>
                                    <span class="badge-semester s2">Major</span>
                                    <span class="badge-semester s3">Degree</span>
                                    <span class="badge-semester s4">Scholarship</span>
                                </div>
                                <div class="sentence-block">I plan to study Computer Science at university.</div>
                            </div>
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">💼 Get a Job</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester">Job</span>
                                    <span class="badge-semester s2">Company</span>
                                    <span class="badge-semester s3">Career</span>
                                    <span class="badge-semester s4">Salary</span>
                                </div>
                                <div class="sentence-block">I want to work as a junior web developer.</div>
                            </div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">🚀 Start a Business</div>
                                <div class="flex flex-wrap gap-1 mb-2">
                                    <span class="badge-semester">Entrepreneur</span>
                                    <span class="badge-semester s2">Startup</span>
                                    <span class="badge-semester s3">Product</span>
                                    <span class="badge-semester s4">Service</span>
                                </div>
                                <div class="sentence-block">I want to start my own software business.</div>
                            </div>
                        </div>
                    </article>
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
                            <div class="flex justify-between"><span>Kode:</span><strong>B2</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>8</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~16 Jam</strong></div>
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
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 1 — Narrative Text</a>
                            <a href="#narrative-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Definition</a>
                            <a href="#narrative-structure" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Generic Structure</a>
                            <a href="#narrative-simple-past" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Simple Past Tense</a>
                            <a href="#narrative-past-continuous" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Past Continuous</a>
                            <a href="#narrative-action-verbs" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Action Verbs</a>
                            <a href="#narrative-connectors" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Time Connectors</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 2 — Argumentative</a>
                            <a href="#arg-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Definition</a>
                            <a href="#arg-structure" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Structure</a>
                            <a href="#arg-simple-present" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Simple Present</a>
                            <a href="#arg-connectors" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Connectors</a>
                            <a href="#arg-fact-opinion" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Fact vs Opinion</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 3 — Hortatory</a>
                            <a href="#hort-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Definition</a>
                            <a href="#hort-structure" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Structure</a>
                            <a href="#hort-modal" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Modal Verbs</a>
                            <a href="#hort-mental" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Mental Verbs</a>

                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 4 — Discussion</a>
                            <a href="#disc-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Definition</a>
                            <a href="#disc-structure" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Structure</a>
                            <a href="#disc-carbon" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Carbon Footprint</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 5 — Job Application</a>
                            <a href="#job-letter" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Application Letter</a>
                            <a href="#job-cv" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Curriculum Vitae</a>
                            <a href="#job-interview" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Job Interview</a>

                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 6 — News Item</a>
                            <a href="#news-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">News Item</a>
                            <a href="#news-passive" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Passive Voice</a>
                            <a href="#news-speech" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Direct/Indirect</a>
                            <a href="#news-media" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Media Literacy</a>

                            <a href="#bab-7" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 7 — Review Text</a>
                            <a href="#review-def" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Definition</a>
                            <a href="#review-structure" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Structure</a>
                            <a href="#review-adj" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Adjectives</a>

                            <a href="#bab-8" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">CH 8 — Conditional</a>
                            <a href="#cond-type-1" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Type 1 — Real</a>
                            <a href="#cond-type-2" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Type 2 — Hypothetical</a>
                            <a href="#cond-type-3" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Type 3 — Regret</a>
                            <a href="#cond-compare" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Comparison</a>
                            <a href="#cond-wish" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Wishes</a>
                            <a href="#future-plan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Future Plans</a>
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
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">PRACTICE &amp; MASTERY</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Master English for Your Career
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>8 jenis text</strong>, <strong>grammar</strong>,
                    <strong>job application</strong>, hingga <strong>conditional sentences</strong>,
                    siswa diharapkan mampu menulis dan berbicara Bahasa Inggris secara profesional —
                    siap menghadapi dunia kerja dan perkuliahan.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#57a8dd] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#57a8dd] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    LATIHAN SOAL
                    <span class="material-symbols-outlined">translate</span>
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

        console.log('%c📘 Modul B2 — Bahasa Inggris XII Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
