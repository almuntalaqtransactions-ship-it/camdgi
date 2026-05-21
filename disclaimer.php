<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Disclaimer - Vibestream Pay</title>
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
            <h1 id="page-title">Legal Disclaimer</h1>
            <p id="page-subtitle">Statutory exclusions of informational guarantees, operational liabilities, and service boundaries.</p>
        </section>

        <main class="content-body">
            
            <div class="legal-section">
                <div class="section-title"><span>1.</span> <div id="title-s1" style="display:inline;">Informational Purpose Only</div></div>
                <p class="section-text" id="text-s1">All material data, structural values, structural forms, and descriptive elements presented across this interface are hosted strictly for broad informational purposes. Vibestream Payment Provider L.L.C. provides no definitive verification that the raw interface parameters are entirely error-free.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>2.</span> <div id="title-s2" style="display:inline;">No Telecommunication Affiliation</div></div>
                <p class="section-text" id="text-s2">This platform explicitly disclaims any direct corporate association, commercial monopoly, or institutional partnership with telecommunication brands operating inside Malaysia. Trademarks, brand marks, and carrier names are deployed entirely as descriptive markers to assist users.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>3.</span> <div id="title-s3" style="display:inline;">Service Provision Framework</div></div>
                <p class="section-text" id="text-s3">Vibestream Pay is accessible to the public strictly on an "As-Is" and "As-Available" foundational setup. We provide no implied warranties, structural endorsements, or statutory guarantees that the routing portal will process continuous electronic queries without minor operational breaks.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>4.</span> <div id="title-s4" style="display:inline;">Limitation of Financial Liability</div></div>
                <p class="section-text" id="text-s4">Under no legal situations or corporate litigation laws shall Vibestream Payment Provider L.L.C. be held liable for any distinct indirect penalties, accidental overheads, asset data corruptions, or financial loss variants originating from your interactive deployment or inability to utilize this digital portal.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>5.</span> <div id="title-s5" style="display:inline;">User Account Accountability</div></div>
                <p class="section-text" id="text-s5">The individual operator is entirely accountable for ensuring the structural confidentiality of session routes, verification inputs, and client parameter setups. Any operations executed following data submissions on this platform are viewed legally as the autonomous actions of the specific customer.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>6.</span> <div id="title-s6" style="display:inline;">Execution Timelines Disclaimer</div></div>
                <p class="section-text" id="text-s6">While our system immediately passes transaction details to processing nodes, explicit confirmation responses are subject to third-party infrastructural network loads. Vibestream Pay disclaims direct responsibility for financial losses caused by delayed updates from external carriers.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>7.</span> <div id="title-s7" style="display:inline;">External Network Links Statement</div></div>
                <p class="section-text" id="text-s7">This interface may dynamically anchor architectural hyperlinks to external portals operated by payment aggregators or network nodes. Vibestream Pay does not monitor, endorse, verify, or claim statutory oversight for the structural safety frameworks of external websites.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>8.</span> <div id="title-s8" style="display:inline;">Accuracy of Billing Parameters</div></div>
                <p class="section-text" id="text-s8">We utilize automated updates to keep pricing details aligned with current carrier specifications. However, structural latency variations can cause occasional discrepancies. Users are advised to double-check their package values prior to initiating checkout flows.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>9.</span> <div id="title-s9" style="display:inline;">Geographical Access Constraints</div></div>
                <p class="section-text" id="text-s9">This system is designed primarily for use by individuals managing accounts in Malaysia, managed from our administrative base in Dubai, UAE. We make no statutory claim that accessing these digital structures is legal under the judicial frameworks of countries outside these areas.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>10.</span> <div id="title-s10" style="display:inline;">Force Majeure Conditions</div></div>
                <p class="section-text" id="text-s10">Vibestream Pay is entirely exempt from any operational failures, processing drops, or data delivery delays resulting from events beyond our control, including natural phenomena, regional power breaks, cyberattacks, regulatory shifts, or wide-scale telecom blackouts.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>11.</span> <div id="title-s11" style="display:inline;">No Professional Advisory Status</div></div>
                <p class="section-text" id="text-s11">The structural content and descriptions across this platform do not constitute professional telecommunication advice, statutory legal guidance, or official banking consultations. Users must make transactional decisions based on their independent criteria.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>12.</span> <div id="title-s12" style="display:inline;">Digital Security Exclusions</div></div>
                <p class="section-text" id="text-s12">Although we maintain 256-bit SSL protective barriers, Vibestream Pay cannot guarantee that file configurations, remote scripts, or portal arrays are entirely free from third-party interception, malicious injection, or external digital tampering beyond our standard protocols.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>13.</span> <div id="title-s13" style="display:inline;">Discontinuance of Portal Functions</div></div>
                <p class="section-text" id="text-s13">We reserve the absolute right to temporarily freeze or completely terminate operations on this interface without notice to adjust core systems, comply with sudden regulatory adjustments, or update corporate data structures.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>14.</span> <div id="title-s14" style="display:inline;">Severability of Conditions</div></div>
                <p class="section-text" id="text-s14">If any clause or section within this disclaimer is declared invalid or legally unenforceable by a court of competent jurisdiction in Dubai, UAE, that specific part will be updated minimalistically, and all remaining clauses will preserve full statutory validity.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>15.</span> <div id="title-s15" style="display:inline;">Regulatory Contact Verification</div></div>
                <p class="section-text" id="text-s15">For comprehensive legal inquiries or validation updates regarding our operational limitations, users can formally submit tracking inquiries to Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, United Arab Emirates.</p>
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
                pTitle: "Legal Disclaimer",
                pSubtitle: "Statutory exclusions of informational guarantees, operational liabilities, and service boundaries.",
                footerDesc: "Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Privacy Policy",
                fTerms: "Terms of Service",
                fDisclaimer: "Legal Disclaimer",
                titles: {
                    s1: "Informational Purpose Only",
                    s2: "No Telecommunication Affiliation",
                    s3: "Service Provision Framework",
                    s4: "Limitation of Financial Liability",
                    s5: "User Account Accountability",
                    s6: "Execution Timelines Disclaimer",
                    s7: "External Network Links Statement",
                    s8: "Accuracy of Billing Parameters",
                    s9: "Geographical Access Constraints",
                    s10: "Force Majeure Conditions",
                    s11: "No Professional Advisory Status",
                    s12: "Digital Security Exclusions",
                    s13: "Discontinuance of Portal Functions",
                    s14: "Severability of Conditions",
                    s15: "Regulatory Contact Verification"
                },
                texts: {
                    s1: "All material data, structural values, structural forms, and descriptive elements presented across this interface are hosted strictly for broad informational purposes. Vibestream Payment Provider L.L.C. provides no definitive verification that the raw interface parameters are entirely error-free.",
                    s2: "This platform explicitly disclaims any direct corporate association, commercial monopoly, or institutional partnership with telecommunication brands operating inside Malaysia. Trademarks, brand marks, and carrier names are deployed entirely as descriptive markers to assist users.",
                    s3: "Vibestream Pay is accessible to the public strictly on an 'As-Is' and 'As-Available' foundational setup. We provide no implied warranties, structural endorsements, or statutory guarantees that the routing portal will process continuous electronic queries without minor operational breaks.",
                    s4: "Under no legal situations or corporate litigation laws shall Vibestream Payment Provider L.L.C. be held liable for any distinct indirect penalties, accidental overheads, asset data corruptions, or financial loss variants originating from your interactive deployment or inability to utilize this digital portal.",
                    s5: "The individual operator is entirely accountable for ensuring the structural confidentiality of session routes, verification inputs, and client parameter setups. Any operations executed following data submissions on this platform are viewed legally as the autonomous actions of the specific customer.",
                    s6: "While our system immediately passes transaction details to processing nodes, explicit confirmation responses are subject to third-party infrastructural network loads. Vibestream Pay disclaims direct responsibility for financial losses caused by delayed updates from external carriers.",
                    s7: "This interface may dynamically anchor architectural hyperlinks to external portals operated by payment aggregators or network nodes. Vibestream Pay does not monitor, endorse, verify, or claim statutory oversight for the structural safety frameworks of external websites.",
                    s8: "We utilize automated updates to keep pricing details aligned with current carrier specifications. However, structural latency variations can cause occasional discrepancies. Users are advised to double-check their package values prior to initiating checkout flows.",
                    s9: "This system is designed primarily for use by individuals managing accounts in Malaysia, managed from our administrative base in Dubai, UAE. We make no statutory claim that accessing these digital structures is legal under the judicial frameworks of countries outside these areas.",
                    s10: "Vibestream Pay is entirely exempt from any operational failures, processing drops, or data delivery delays resulting from events beyond our control, including natural phenomena, regional power breaks, cyberattacks, regulatory shifts, or wide-scale telecom blackouts.",
                    s11: "The structural content and descriptions across this platform do not constitute professional telecommunication advice, statutory legal guidance, or official banking consultations. Users must make transactional decisions based on their independent criteria.",
                    s12: "Although we maintain 256-bit SSL protective barriers, Vibestream Pay cannot guarantee that file configurations, remote scripts, or portal arrays are entirely free from third-party interception, malicious injection, or external digital tampering beyond our standard protocols.",
                    s13: "We reserve the absolute right to temporarily freeze or completely terminate operations on this interface without notice to adjust core systems, comply with sudden regulatory adjustments, or update corporate data structures.",
                    s14: "If any clause or section within this disclaimer is declared invalid or legally unenforceable by a court of competent jurisdiction in Dubai, UAE, that specific part will be updated minimalistically, and all remaining clauses will preserve full statutory validity.",
                    s15: "For comprehensive legal inquiries or validation updates regarding our operational limitations, users can formally submit tracking inquiries to Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, United Arab Emirates."
                }
            },
            ms: {
                logo: "Vibestream Pay",
                navBack: "← Kembali ke Portal Ekspres",
                pTitle: "Penafian Undang-undang",
                pSubtitle: "Pengecualian berkanun bagi jaminan maklumat, liabiliti operasi, dan batasan perkhidmatan.",
                footerDesc: "Platform Pengumpulan Yuran & Perkhidmatan Remitansi Rasmi. Berdaftar di Pejabat 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Dasar Privasi",
                fTerms: "Syarat Perkhidmatan",
                fDisclaimer: "Penafian Undang-undang",
                titles: {
                    s1: "Tujuan Maklumat Sahaja",
                    s2: "Tiada Gabungan Telekomunikasi",
                    s3: "Rangka Kerja Penyediaan Perkhidmatan",
                    s4: "Had Liabiliti Kewangan",
                    s5: "Akauntabiliti Akaun Pengguna",
                    s6: "Penafian Garis Masa Pelaksanaan",
                    s7: "Kenyataan Pautan Rangka Kerja Luaran",
                    s8: "Ketepatan Parameter Pengebilan",
                    s9: "Sekatan Akses Geografi",
                    s10: "Syarat Force Majeure",
                    s11: "Tiada Status Penasihat Profesional",
                    s12: "Pengecualian Keselamatan Digital",
                    s13: "Penghentian Fungsi Portal",
                    s14: "Kebolehasingan Syarat",
                    s15: "Pengesahan Hubungan Kawal Selia"
                },
                texts: {
                    s1: "Semua data bahan, nilai struktur, borang struktur, dan elemen deskriptif yang dibentangkan di seluruh antara muka ini dihoskan semata-mata untuk tujuan maklumat umum. Vibestream Payment Provider L.L.C. tidak memberikan pengesahan muktamad bahawa parameter antara muka mentah adalah bebas daripada kesilapan sepenuhnya.",
                    s2: "Platform ini secara eksplisit menafikan sebarang hubungan korporat langsung, monopoli komersial, atau perkongsian institusi dengan jenama telekomunikasi yang beroperasi di dalam Malaysia. Tanda dagangan, tanda jenama, dan nama syarikat penerbangan digunakan sepenuhnya sebagai penanda deskriptif untuk membantu pengguna.",
                    s3: "Vibestream Pay boleh diakses oleh orang ramai secara ketat atas dasar persediaan asas 'Sedia Ada' dan 'Sedia Disediakan'. Kami tidak memberikan sebarang jaminan tersirat, pengesahan struktur, atau jaminan berkanun bahawa portal penghalaan akan memproses pertanyaan elektronik secara berterusan tanpa sebarang gangguan operasi kecil.",
                    s4: "Di bawah mana-mana situasi undang-undang atau undang-undang litigasi korporat, Vibestream Payment Provider L.L.C. tidak akan bertanggungjawab ke atas sebarang penalti tidak langsung yang ketara, overhed tidak sengaja, rasuah data aset, atau varian kerugian kewangan yang berpunca daripada penggunaan interaktif anda atau ketidakupayaan untuk menggunakan portal digital ini.",
                    s5: "Pengendali individu bertanggungjawab sepenuhnya untuk memastikan kerahsiaan struktur laluan sesi, input pengesahan, dan persediaan parameter pelanggan. Sebarang operasi yang dilaksanakan berikutan penyerahan data pada platform ini dilihat secara sah sebagai tindakan autonomi pelanggan tertentu.",
                    s6: "Walaupun sistem kami menghantar butiran transaksi dengan segera ke nod pemprosesan, respons pengesahan yang jelas adalah tertakluk kepada bebanan rangkaian infrastruktur pihak ketiga. Vibestream Pay menafikan tanggungjawab langsung terhadap kerugian kewangan yang disebabkan oleh kelewatan kemas kini daripada syarikat penerbangan luaran.",
                    s7: "Antara muka ini boleh menambat hiperpautan seni bina secara dinamik ke portal luaran yang dikendalikan oleh agregator pembayaran atau nod rangkaian. Vibestream Pay tidak memantau, mengesahkan, atau menuntut pengawasan berkanun untuk rangka kerja keselamatan struktur tapak web luaran.",
                    s8: "Kami menggunakan kemas kini automatik untuk memastikan butiran harga sejajar dengan spesifikasi syarikat penerbangan semasa. Walau bagaimanapun, variasi kependaman struktur boleh menyebabkan percanggahan sekali-sekala. Pengguna dinasihatkan untuk menyemak semula nilai pakej mereka sebelum memulakan aliran pembayaran.",
                    s9: "Sistem ini direka terutamanya untuk kegunaan individu yang menguruskan akaun di Malaysia, diuruskan dari pangkalan pentadbiran kami di Dubai, UAE. Kami tidak membuat sebarang tuntutan berkanun bahawa mengakses struktur digital ini adalah sah di bawah rangka kerja kehakiman negara di luar kawasan ini.",
                    s10: "Vibestream Pay dikecualikan sepenuhnya daripada sebarang kegagalan operasi, penurunan pemprosesan, atau kelewatan penghantaran data akibat daripada peristiwa di luar kawalan kami, termasuk fenomena alam semula jadi, gangguan bekalan kuasa serantau, serangan siber, peralihan kawal selia, atau gangguan telekomunikasi berskala besar.",
                    s11: "Kandungan struktur dan perihalan di seluruh platform ini tidak membentuk nasihat telekomunikasi profesional, panduan undang-undang berkanun, atau perundingan perbankan rasmi. Pengguna mesti membuat keputusan transaksi berdasarkan kriteria bebas mereka sendiri.",
                    s12: "Walaupun kami mengekalkan halangan perlindungan SSL 256-bit, Vibestream Pay tidak dapat menjamin bahawa konfigurasi fail, skrip jauh, atau tatasusunan portal adalah bebas sepenuhnya daripada pemintasan pihak ketiga, suntikan berniat jahat, atau gangguan digital luaran di luar protokol standard kami.",
                    s13: "Kami memelihara hak mutlak untuk membekukan sementara atau menamatkan sepenuhnya operasi pada antara muka ini tanpa notis untuk melaraskan sistem teras, mematuhi pelarasan kawal selia yang mengejut, atau mengemas kini struktur data korporat.",
                    s14: "Jika mana-mana fasal atau bahagian dalam penafian ini diisytiharkan tidak sah atau tidak boleh dikuatkuasakan secara sah oleh mahkamah yang mempunyai bidang kuasa kompeten di Dubai, UAE, bahagian khusus tersebut akan dikemas kini secara minimalis, dan semua fasal yang tinggal akan mengekalkan kesahan berkanun penuh.",
                    s15: "Untuk pertanyaan undang-undang yang komprehensif atau kemas kini pengesahan mengenai had operasi kami, pengguna boleh menyerahkan pertanyaan penjejakan secara rasmi kepada Vibestream Payment Provider L.L.C., Pejabat No. 0128-51, Dubai Investment Park First, Dubai, Emiriah Arab Bersatu."
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
