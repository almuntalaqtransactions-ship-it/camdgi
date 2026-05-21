<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - Vibestream Pay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Base Variables & Pure CSS Formatting for 100% Railway Compatibility */
        :root {
            --blue-700: #1d4ed8;
            --blue-800: #1e40af;
            --blue-900: #1e3a8a;
            --yellow-400: #facc15;
            --yellow-300: #fde047;
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-300: #cbd5e1;
            --slate-600: #475569;
            --slate-700: #334155;
            --slate-900: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--slate-100);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        /* 600px App-Like Constraint for Universal Consistency */
        .app-container {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header {
            background-color: var(--blue-700);
            color: #ffffff;
            padding: 16px 20px;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-img {
            height: 35px;
            width: auto;
            object-fit: contain;
        }

        .logo-text {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .lang-container {
            display: flex;
            gap: 8px;
        }

        .lang-btn {
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .lang-active {
            background-color: var(--yellow-400);
            color: var(--blue-900);
        }

        .lang-inactive {
            background-color: #2563eb;
            color: #ffffff;
        }

        .lang-inactive:hover {
            background-color: #3b82f6;
        }

        /* Legal Content Styling */
        .legal-hero {
            background: linear-gradient(to bottom, var(--blue-700), var(--blue-800));
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .legal-hero h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .legal-hero p {
            font-size: 13px;
            opacity: 0.9;
        }

        .content-body {
            padding: 24px 20px;
            background-color: #ffffff;
            flex-grow: 1;
        }

        .legal-section {
            margin-bottom: 24px;
            border-bottom: 1px solid var(--slate-200);
            padding-bottom: 16px;
        }

        .legal-section:last-child {
            border-bottom: none;
        }

        .section-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--blue-900);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .section-title span {
            color: var(--yellow-400);
            font-weight: 700;
        }

        .section-text {
            font-size: 13px;
            color: var(--slate-700);
            line-height: 1.65;
            text-align: justify;
        }

        /* Nav back bar */
        .nav-back-bar {
            padding: 12px 20px;
            background-color: var(--slate-50);
            border-bottom: 1px solid var(--slate-200);
        }

        .back-link {
            font-size: 13px;
            color: var(--blue-700);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        /* Footer */
        footer {
            background-color: var(--slate-900);
            color: var(--slate-300);
            padding: 32px 20px;
            text-align: center;
            border-top: 4px solid var(--blue-700);
            margin-top: auto;
        }

        .footer-company {
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 6px;
            font-size: 15px;
        }

        .footer-desc {
            font-size: 12px;
            opacity: 0.9;
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: var(--slate-300);
            text-decoration: none;
            font-size: 12px;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: var(--yellow-400);
        }

        .footer-copyright {
            font-size: 12px;
            opacity: 0.7;
            border-top: 1px solid var(--slate-700);
            padding-top: 12px;
        }
    </style>
</head>
<body>

    <div class="app-container">
        <header>
            <div class="header-flex">
                <div class="logo-area">
                    <img 
                        src="https://files.manuscdn.com/user_upload_by_module/session_file/310519663659802744/QGaslqfEfmkbRZFB.png" 
                        alt="Vibestream Pay Logo" 
                        class="logo-img" 
                    />
                    <span id="logo-text" class="logo-text">Vibestream Pay</span>
                </div>
                <div class="lang-container">
                    <button onclick="switchLanguage('en')" id="btn-lang-en" class="lang-btn lang-active">EN</button>
                    <button onclick="switchLanguage('ms')" id="btn-lang-ms" class="lang-btn lang-inactive">MS</button>
                </div>
            </div>
        </header>

        <div class="nav-back-bar">
            <a href="index.php" class="back-link" id="nav-back-home">← Back to Express Portal</a>
        </div>

        <section class="legal-hero">
            <h1 id="page-title">Terms of Service</h1>
            <p id="page-subtitle">Please read these regulatory terms carefully before completing operations.</p>
        </section>

        <main class="content-body">
            
            <div class="legal-section">
                <div class="section-title"><span>1.</span> <div id="title-s1" style="display:inline;">Contractual Relationship</div></div>
                <p class="section-text" id="text-s1">These Terms of Service govern your commercial access and transactional utilization of the digital platform managed by Vibestream Payment Provider L.L.C. By interacting with our portal, you acknowledge binding alignment with these conditions. If you disagree, access must be terminated immediately.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>2.</span> <div id="title-s2" style="display:inline;">Legal Entity & Scope</div></div>
                <p class="section-text" id="text-s2">Vibestream Payment Provider L.L.C. is an independent utility entity incorporated under the corporate laws of the United Arab Emirates, with administrative operations positioned at Office No. 0128-51, Dubai Investment Park First, Dubai. We function solely as a specialized billing and remote digital collection medium.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>3.</span> <div id="title-s3" style="display:inline;">Autonomous Operation</div></div>
                <p class="section-text" id="text-s3">This utility declares complete autonomous separation from telecommunication operators within the Malaysian region. We are not a technical branch, subsidiary, or joint venture structure owned by specific cellular networks. All local infrastructure processing is managed via secure commercial remittance gateways.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>4.</span> <div id="title-s4" style="display:inline;">Eligibility Criteria</div></div>
                <p class="section-text" id="text-s4">Users processing network transactions must possess statutory legal capacity to form binding contractual settlements under their home jurisdictions. Minors utilizing this interface must secure formal verifiable supervisor or legal parental guardian authorizations prior to checkout routing.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>5.</span> <div id="title-s5" style="display:inline;">Data Input Accuracy</div></div>
                <p class="section-text" id="text-s5">The user maintains exclusive, absolute liability for ensuring the numeric validity of the Malaysian destination network number or mobile account identifier submitted. Vibestream Pay executes automation instantly based on client entry; therefore, inputs routed to erroneous accounts cannot be pulled back.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>6.</span> <div id="title-s6" style="display:inline;">Payment Methods</div></div>
                <p class="section-text" id="text-s6">Processing limits are strictly bound to international debit cards, verified credit structures, and digital token applications officially authorized by our secure integrated gateway handlers. You guarantee that the localized banking asset deployed is legitimately registered under your individual identity.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>7.</span> <div id="title-s7" style="display:inline;">Processing Frequencies</div></div>
                <p class="section-text" id="text-s7">While the overwhelming majority of network top-ups and outstanding balance remittances settle within immediate intervals, technical data latencies between networks can require up to 24 administrative hours. We are not liable for provider-side internal system maintenance delays.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>8.</span> <div id="title-s8" style="display:inline;">Service Fee Clarification</div></div>
                <p class="section-text" id="text-s8">All numerical values presented during checkout correspond cleanly to the raw parameters required by the targeted telecommunication package. Vibestream Pay enforces full transparent processing, meaning zero hidden operational adjustments are placed outside the final customer breakdown statement.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>9.</span> <div id="title-s9" style="display:inline;">Permitted Non-Commercial Use</div></div>
                <p class="section-text" id="text-s9">This portal is allocated solely for consumer-driven payment executions. Commercial reverse-engineering, automated extraction queries, robotic script interactions, or large-scale unauthorized institutional scraping of our styling arrays or programmatic structures are prohibited under cyber legislation laws.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>10.</span> <div id="title-s10" style="display:inline;">Intellectual Property Rights</div></div>
                <p class="section-text" id="text-s10">The layout architecture, code styling, font styling choices, translations, structural logos, and custom interface elements remain the exclusive protected assets of Vibestream Payment Provider L.L.C. Third-party network marks or icons are deployed purely for informational customer categorization.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>11.</span> <div id="title-s11" style="display:inline;">System Availability</div></div>
                <p class="section-text" id="text-s11">We strive to maintain continuous 24/7 technical operations. However, Vibestream Pay does not guarantee uninterrupted operational status during emergency structural restorations, critical host upgrades, global routing network splits, or unforeseen server outages completely external to our local control protocols.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>12.</span> <div id="title-s12" style="display:inline;">Indemnity Protocols</div></div>
                <p class="section-text" id="text-s12">You agree to completely indemnify, legally defend, and hold harmless Vibestream Payment Provider L.L.C., its executive officers, and directors against any third-party financial liabilities, loss aggregates, or legislative litigation costs arising out of your clear breach of these structural conditions.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>13.</span> <div id="title-s13" style="display:inline;">Modifications of Terms</div></div>
                <p class="section-text" id="text-s13">Vibestream Pay reserves the right to append, adjust, or completely replace parts of these statutory rules to preserve compliance parameters. Revised variants achieve absolute legal validity the exact moment they are hosted live upon this URL link framework.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>14.</span> <div id="title-s14" style="display:inline;">Governing Law & Jurisdiction</div></div>
                <p class="section-text" id="text-s14">These agreements, operational executions, and transactional settlements are exclusively governed by and interpreted under the commercial litigation laws of the United Arab Emirates. Any irreconcilable statutory disputes shall fall under the unique jurisdiction of the Dubai Courts.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>15.</span> <div id="title-s15" style="display:inline;">Contact Information</div></div>
                <p class="section-text" id="text-s15">For structural validation concerns, official clarifications regarding these guidelines, or to address settlement documentation requests, you are invited to formally write to our administrative compliance center at our registered commercial address in Dubai, UAE.</p>
            </div>

        </main>

        <footer>
            <div class="footer-company">Vibestream Payment Provider L.L.C.</div>
            <p id="footer-desc" class="footer-desc">Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.</p>

            <div class="footer-links">
                <a href="privacy.php" id="f-link-privacy">Privacy Policy</a>
                <a href="terms.php" id="f-link-terms">Terms of Service</a>
                <a href="disclaimer.php" id="f-link-disclaimer">Legal Disclaimer</a>
            </div>

            <div class="footer-copyright">
                &copy; 2026 Vibestream Payment Provider L.L.C. All Rights Reserved.
            </div>
        </footer>
    </div>

    <script>
        let currentLang = 'en';

        const translations = {
            en: {
                logo: "Vibestream Pay",
                navBack: "← Back to Express Portal",
                pTitle: "Terms of Service",
                pSubtitle: "Please read these regulatory terms carefully before completing operations.",
                footerDesc: "Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Privacy Policy",
                fTerms: "Terms of Service",
                fDisclaimer: "Legal Disclaimer",
                titles: {
                    s1: "Contractual Relationship",
                    s2: "Legal Entity & Scope",
                    s3: "Autonomous Operation",
                    s4: "Eligibility Criteria",
                    s5: "Data Input Accuracy",
                    s6: "Payment Methods",
                    s7: "Processing Frequencies",
                    s8: "Service Fee Clarification",
                    s9: "Permitted Non-Commercial Use",
                    s10: "Intellectual Property Rights",
                    s11: "System Availability",
                    s12: "Indemnity Protocols",
                    s13: "Modifications of Terms",
                    s14: "Governing Law & Jurisdiction",
                    s15: "Contact Information"
                },
                texts: {
                    s1: "These Terms of Service govern your commercial access and transactional utilization of the digital platform managed by Vibestream Payment Provider L.L.C. By interacting with our portal, you acknowledge binding alignment with these conditions. If you disagree, access must be terminated immediately.",
                    s2: "Vibestream Payment Provider L.L.C. is an independent utility entity incorporated under the corporate laws of the United Arab Emirates, with administrative operations positioned at Office No. 0128-51, Dubai Investment Park First, Dubai. We function solely as a specialized billing and remote digital collection medium.",
                    s3: "This utility declares complete autonomous separation from telecommunication operators within the Malaysian region. We are not a technical branch, subsidiary, or joint venture structure owned by specific cellular networks. All local infrastructure processing is managed via secure commercial remittance gateways.",
                    s4: "Users processing network transactions must possess statutory legal capacity to form binding contractual settlements under their home jurisdictions. Minors utilizing this interface must secure formal verifiable supervisor or legal parental guardian authorizations prior to checkout routing.",
                    s5: "The user maintains exclusive, absolute liability for ensuring the numeric validity of the Malaysian destination network number or mobile account identifier submitted. Vibestream Pay executes automation instantly based on client entry; therefore, inputs routed to erroneous accounts cannot be pulled back.",
                    s6: "Processing limits are strictly bound to international debit cards, verified credit structures, and digital token applications officially authorized by our secure integrated gateway handlers. You guarantee that the localized banking asset deployed is legitimately registered under your individual identity.",
                    s7: "While the overwhelming majority of network top-ups and outstanding balance remittances settle within immediate intervals, technical data latencies between networks can require up to 24 administrative hours. We are not liable for provider-side internal system maintenance delays.",
                    s8: "All numerical values presented during checkout correspond cleanly to the raw parameters required by the targeted telecommunication package. Vibestream Pay enforces full transparent processing, meaning zero hidden operational adjustments are placed outside the final customer breakdown statement.",
                    s9: "This portal is allocated solely for consumer-driven payment executions. Commercial reverse-engineering, automated extraction queries, robotic script interactions, or large-scale unauthorized institutional scraping of our styling arrays or programmatic structures are prohibited under cyber legislation laws.",
                    s10: "The layout architecture, code styling, font styling choices, translations, structural logos, and custom interface elements remain the exclusive protected assets of Vibestream Payment Provider L.L.C. Third-party network marks or icons are deployed purely for informational customer categorization.",
                    s11: "We strive to maintain continuous 24/7 technical operations. However, Vibestream Pay does not guarantee uninterrupted operational status during emergency structural restorations, critical host upgrades, global routing network splits, or unforeseen server outages completely external to our local control protocols.",
                    s12: "You agree to completely indemnify, legally defend, and hold harmless Vibestream Payment Provider L.L.C., its executive officers, and directors against any third-party financial liabilities, loss aggregates, or legislative litigation costs arising out of your clear breach of these structural conditions.",
                    s13: "Vibestream Pay reserves the right to append, adjust, or completely replace parts of these statutory rules to preserve compliance parameters. Revised variants achieve absolute legal validity the exact moment they are hosted live upon this URL link framework.",
                    s14: "These agreements, operational executions, and transactional settlements are exclusively governed by and interpreted under the commercial litigation laws of the United Arab Emirates. Any irreconcilable statutory disputes shall fall under the unique jurisdiction of the Dubai Courts.",
                    s15: "For structural validation concerns, official clarifications regarding these guidelines, or to address settlement documentation requests, you are invited to formally write to our administrative compliance center at our registered commercial address in Dubai, UAE."
                }
            },
            ms: {
                logo: "Vibestream Pay",
                navBack: "← Kembali ke Portal Ekspres",
                pTitle: "Syarat Perkhidmatan",
                pSubtitle: "Sila baca terma kawal selia ini dengan teliti sebelum menyelesaikan operasi.",
                footerDesc: "Platform Pengumpulan Yuran & Perkhidmatan Remitansi Rasmi. Berdaftar di Pejabat 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Dasar Privasi",
                fTerms: "Syarat Perkhidmatan",
                fDisclaimer: "Penafian Undang-undang",
                titles: {
                    s1: "Hubungan Kontrak",
                    s2: "Entiti Syarikat & Skop",
                    s3: "Operasi Autonomi",
                    s4: "Kriteria Kelayakan",
                    s5: "Ketepatan Input Data",
                    s6: "Kaedah Pembayaran",
                    s7: "Kekerapan Pemprosesan",
                    s8: "Penjelasan Yuran Perkhidmatan",
                    s9: "Penggunaan Bukan Komersil Dibenarkan",
                    s10: "Hak Harta Intelek",
                    s11: "Ketersediaan Sistem",
                    s12: "Protokol Ganti Rugi",
                    s13: "Pengubahsuaan Terma",
                    s14: "Undang-undang Pentadbiran & Bidang Kuasa",
                    s15: "Maklumat Hubungan"
                },
                texts: {
                    s1: "Syarat Perkhidmatan ini mengawal akses komersial dan penggunaan transaksi anda terhadap platform digital yang diuruskan oleh Vibestream Payment Provider L.L.C. Dengan berinteraksi dengan portal kami, anda mengakui pematuhan yang mengikat dengan syarat ini. Jika anda tidak bersetuju, akses mesti dihentikan serta-merta.",
                    s2: "Vibestream Payment Provider L.L.C. ialah entiti utiliti bebas yang ditubuhkan di bawah undang-undang korporat Emiriah Arab Bersatu, dengan operasi pentadbiran yang berkedudukan di Pejabat No. 0128-51, Dubai Investment Park First, Dubai. Kami berfungsi semata-mata sebagai medium pengebilan khusus dan pengutipan digital jarak jauh.",
                    s3: "Utiliti ini mengisytiharkan pemisahan autonomi sepenuhnya daripada pengendali telekomunikasi di rantau Malaysia. Kami bukan cawangan teknikal, anak syarikat, atau struktur usaha sama yang dimiliki oleh rangkaian selular tertentu. Semua pemprosesan infrastruktur tempatan diuruskan melalui gerbang kiriman wang komersial yang selamat.",
                    s4: "Pengguna yang memproses transaksi rangkaian mesti mempunyai kapasiti undang-undang berkanun untuk membentuk penyelesaian kontrak yang mengikat di bawah bidang kuasa asal mereka. Anak di bawah umur yang menggunakan antara muka ini mesti mendapatkan kebenaran penyelia rasmi yang boleh disahkan atau penjaga ibu bapa yang sah sebelum penghalaan pembayaran.",
                    s5: "Pengguna mengekalkan liabiliti eksklusif dan mutlak untuk memastikan kesahan berangka bagi nombor rangkaian destinasi Malaysia atau pengecam akaun mudah alih yang diserahkan. Vibestream Pay melaksanakan automasi serta-merta berdasarkan kemasukan pelanggan; oleh itu, input yang dihantar ke akaun yang salah tidak boleh ditarik balik.",
                    s6: "Had pemprosesan adalah terikat secara ketat kepada kad debit antarabangsa, struktur kredit yang disahkan, dan aplikasi token digital yang dibenarkan secara rasmi oleh pengendali gerbang bersepadu kami yang selamat. Anda menjamin bahawa aset perbankan tempatan yang digunakan adalah didaftarkan secara sah di bawah identiti individu anda.",
                    s7: "Walaupun sebahagian besar tambah nilai rangkaian dan kiriman wang baki tertunggak diselesaikan dalam tempoh masa segera, kependaman data teknikal antara rangkaian boleh memerlukan sehingga 24 jam pentadbiran. Kami tidak bertanggungjawab atas kelewatan penyelenggaraan sistem dalaman pihak penyedia.",
                    s8: "Semua nilai berangka yang dibentangkan semasa pembayaran sepadan dengan bersih dengan parameter mentah yang diperlukan oleh pakej telekomunikasi yang disasarkan. Vibestream Pay menguatkuasakan pemprosesan telus sepenuhnya, bermakna tiada pelarasan operasi tersembunyi diletakkan di luar penyata pecahan pelanggan akhir.",
                    s9: "Portal ini diperuntukkan semata-mata untuk pelaksanaan pembayaran yang didorong oleh pengguna. Kejuruteraan terbalik komersial, pertanyaan pengekstrakan automatik, interaksi skrip robotik, atau pengikisan institusi tanpa kebenaran berskala besar terhadap tatasusunan gaya atau struktur program kami adalah dilarang di bawah undang-undang siber.",
                    s10: "Seni bina susun atur, gaya kod, pilihan gaya fon, terjemahan, logo struktur, dan elemen antara muka tersuai kekal sebagai aset terpelihara eksklusif Vibestream Payment Provider L.L.C. Tanda atau ikon rangkaian pihak ketiga digunakan semata-mata untuk pengkategorian pelanggan bermaklumat.",
                    s11: "Kami berusaha untuk mengekalkan operasi teknikal 24/7 yang berterusan. Walau bagaimanapun, Vibestream Pay tidak menjamin status operasi tanpa gangguan semasa pemulihan struktur kecemasan, naik taraf hos kritikal, perpecahan rangkaian laluan global, atau gangguan pelayan yang tidak dijangka di luar protokol kawalan tempatan kami.",
                    s12: "Anda bersetuju untuk menanggung rugi sepenuhnya, mempertahankan secara sah, dan melindungi Vibestream Payment Provider L.L.C., pegawai eksekutifnya, dan pengarah daripada sebarang liabiliti kewangan pihak ketiga, agregat kerugian, atau kos litigasi perundangan yang timbul daripada pelanggaran nyata anda terhadap syarat struktur ini.",
                    s13: "Vibestream Pay berhak untuk menambah, melaras, atau menggantikan sepenuhnya bahagian daripada peraturan berkanun ini untuk mengekalkan parameter pematuhan. Varian yang disemak mencapai kesahan undang-undang mutlak pada masa yang tepat ia dihoskan secara langsung pada rangka kerja pautan URL ini.",
                    s14: "Perjanjian ini, pelaksanaan operasi, dan penyelesaian transaksi dikawal secara eksklusif oleh dan ditafsirkan di bawah undang-undang litigasi komersial Emiriah Arab Bersatu. Sebarang pertikaian berkanun yang tidak dapat didamaikan hendaklah diletakkan di bawah bidang kuasa unik Mahkamah Dubai.",
                    s15: "Untuk kebimbangan pengesahan struktur, penjelasan rasmi mengenai garis panduan ini, atau untuk menangani permintaan dokumentasi penyelesaian, anda dijemput untuk menulis secara rasmi ke pusat pematuhan pentadbiran kami di alamat komersial kami yang berdaftar di Dubai, UAE."
                }
            }
        };

        function switchLanguage(lang) {
            currentLang = lang;
            const t = translations[lang];
            
            // Layout Updates
            document.getElementById('logo-text').innerText = t.logo;
            document.getElementById('nav-back-home').innerText = t.navBack;
            document.getElementById('page-title').innerText = t.pTitle;
            document.getElementById('page-subtitle').innerText = t.pSubtitle;
            document.getElementById('footer-desc').innerText = t.footerDesc;
            
            document.getElementById('f-privacy').innerText = t.fPrivacy;
            document.getElementById('f-terms').innerText = t.fTerms;
            document.getElementById('f-disclaimer').innerText = t.fDisclaimer;

            // Loop and translate all 15 sections
            for (let i = 1; i <= 15; i++) {
                document.getElementById('title-s' + i).innerText = t.titles['s' + i];
                document.getElementById('text-s' + i).innerHTML = t.texts['s' + i];
            }

            // Language Button State Update
            if(lang === 'en') {
                document.getElementById('btn-lang-en').className = "lang-btn lang-active";
                document.getElementById('btn-lang-ms').className = "lang-btn lang-inactive";
            } else {
                document.getElementById('btn-lang-ms').className = "lang-btn lang-active";
                document.getElementById('btn-lang-en').className = "lang-btn lang-inactive";
            }
        }
    </script>
</body>
</html>
