<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Vibestream Pay</title>
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
            <h1 id="page-title">Privacy Policy</h1>
            <p id="page-subtitle">Your data protection rights and structural information security protocols.</p>
        </section>

        <main class="content-body">
            
            <div class="legal-section">
                <div class="section-title"><span>1.</span> <div id="title-s1" style="display:inline;">General Commitment</div></div>
                <p class="section-text" id="text-s1">Vibestream Payment Provider L.L.C. handles your personal identifiers with high-tier defensive security frameworks. This policy establishes the structural regulations regarding data aggregation, processing parameters, and customer choice structures implemented throughout this portal interface.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>2.</span> <div id="title-s2" style="display:inline;">Information We Collect</div></div>
                <p class="section-text" id="text-s2">To fulfill remote digital network inquiries, our automated portal systematically logs customer network reference targets, mobile account figures, explicit transaction amounts, and localized session metrics. We do not store full payment card numbers on our local infrastructure arrays.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>3.</span> <div id="title-s3" style="display:inline;">Data Processing Objectives</div></div>
                <p class="section-text" id="text-s3">Collected indicators are strictly routed to process immediate prepaid balance adjustments, complete postpaid utility remittance confirmations, clear checkout logging discrepancies, investigate suspicious account spikes, and maintain strict alignment with global compliance audits.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>4.</span> <div id="title-s4" style="display:inline;">Legal Grounds for Processing</div></div>
                <p class="section-text" id="text-s4">We record user details under defined legal parameters, including the structural execution of payment fulfillment contracts initialized by you, explicit compliance obligations mandated by corporate laws, and legitimate interests in safeguarding platform operational health.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>5.</span> <div id="title-s5" style="display:inline;">Secure Third-Party Gateway Integration</div></div>
                <p class="section-text" id="text-s5">Card authentications are transmitted directly to external, fully certified PCI-DSS compliant checkout gateway aggregators. These security providers are legally authorized to handle card parameters. Vibestream Pay has no direct visualization or data storage of raw card security pins.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>6.</span> <div id="title-s6" style="display:inline;">Data Retention Schedules</div></div>
                <p class="section-text" id="text-s6">Transaction logs and mobile identifiers are preserved safely for the exact duration required to satisfy statutory financial record-keeping laws and institutional chargeback verification windows. Outdated indicators are completely purged via automated internal scripts.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>7.</span> <div id="title-s7" style="display:inline;">Structural Security Standards</div></div>
                <p class="section-text" id="text-s7">We deploy strict administrative, digital, and mechanical barriers to defend user data assets against unauthorized manipulation. All internal and external data communication channels are reinforced with 256-bit Secure Sockets Layer (SSL) encryption frameworks.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>8.</span> <div id="title-s8" style="display:inline;">Tracking & Cookie Deployment</div></div>
                <p class="section-text" id="text-s8">Our interface relies on non-persistent session cookies purely to guarantee interface continuity, remember language toggle states (EN/MS), and verify that user traffic has cleared the initial compliance modal. We do not use cookies to track user activities on external web frameworks.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>9.</span> <div id="title-s9" style="display:inline;">Data Sharing Boundaries</div></div>
                <p class="section-text" id="text-s9">Vibestream Pay does not sell, rent, or trade client data identifiers to third-party commercial advertising networks. Data sharing is strictly restricted to secure financial clearing institutions, telecom routing nodes, and regulatory compliance entities under judicial orders.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>10.</span> <div id="title-s10" style="display:inline;">Cross-Border Data Transmissions</div></div>
                <p class="section-text" id="text-s10">Because our administration center is in Dubai, UAE, while network fulfillment occurs in Malaysia, your submitted indicators are transmitted internationally. By using this portal, you consent to these cross-border data routing flows under high-level data protections.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>11.</span> <div id="title-s11" style="display:inline;">Your Data Access Rights</div></div>
                <p class="section-text" id="text-s11">Users retain the absolute statutory right to request a digital duplicate of all their transaction indicators preserved in our databases, demand immediate corrections to faulty historical parameters, or request complete data erasure where legal financial recording duties do not apply.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>12.</span> <div id="title-s12" style="display:inline;">Minors Privacy Safeguards</div></div>
                <p class="section-text" id="text-s12">This interface does not intentionally collect or process data from individuals below 18 years of age without explicit guardian oversight. If a guardian discovers that a minor has shared indicators without consent, they may request immediate database removal.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>13.</span> <div id="title-s13" style="display:inline;">External Web Framework Links</div></div>
                <p class="section-text" id="text-s13">Our platform may contain structural links pointing toward external financial gateways or informational networks. Vibestream Pay has no control over the privacy architectures or content setups of these external destinations, and users are encouraged to evaluate them independently.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>14.</span> <div id="title-s14" style="display:inline;">Policy Adaptations</div></div>
                <p class="section-text" id="text-s14">We reserve the absolute right to modify this privacy policy framework at any time to align with updated security standards. The modified version takes immediate effect when published on this interface, and continued site use constitutes acknowledgement of these updates.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>15.</span> <div id="title-s15" style="display:inline;">Privacy Contact Desk</div></div>
                <p class="section-text" id="text-s15">For requests concerning data access, file erasure inquiries, or details on information handling, you can contact our data protection team at Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.</p>
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
                pTitle: "Privacy Policy",
                pSubtitle: "Your data protection rights and structural information security protocols.",
                footerDesc: "Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Privacy Policy",
                fTerms: "Terms of Service",
                fDisclaimer: "Legal Disclaimer",
                titles: {
                    s1: "General Commitment",
                    s2: "Information We Collect",
                    s3: "Data Processing Objectives",
                    s4: "Legal Grounds for Processing",
                    s5: "Secure Third-Party Gateway Integration",
                    s6: "Data Retention Schedules",
                    s7: "Structural Security Standards",
                    s8: "Tracking & Cookie Deployment",
                    s9: "Data Sharing Boundaries",
                    s10: "Cross-Border Data Transmissions",
                    s11: "Your Data Access Rights",
                    s12: "Minors Privacy Safeguards",
                    s13: "External Web Framework Links",
                    s14: "Policy Adaptations",
                    s15: "Privacy Contact Desk"
                },
                texts: {
                    s1: "Vibestream Payment Provider L.L.C. handles your personal identifiers with high-tier defensive security frameworks. This policy establishes the structural regulations regarding data aggregation, processing parameters, and customer choice structures implemented throughout this portal interface.",
                    s2: "To fulfill remote digital network inquiries, our automated portal systematically logs customer network reference targets, mobile account figures, explicit transaction amounts, and localized session metrics. We do not store full payment card numbers on our local infrastructure arrays.",
                    s3: "Collected indicators are strictly routed to process immediate prepaid balance adjustments, complete postpaid utility remittance confirmations, clear checkout logging discrepancies, investigate suspicious account spikes, and maintain strict alignment with global compliance audits.",
                    s4: "We record user details under defined legal parameters, including the structural execution of payment fulfillment contracts initialized by you, explicit compliance obligations mandated by corporate laws, and legitimate interests in safeguarding platform operational health.",
                    s5: "Card authentications are transmitted directly to external, fully certified PCI-DSS compliant checkout gateway aggregators. These security providers are legally authorized to handle card parameters. Vibestream Pay has no direct visualization or data storage of raw card security pins.",
                    s6: "Transaction logs and mobile identifiers are preserved safely for the exact duration required to satisfy statutory financial record-keeping laws and institutional chargeback verification windows. Outdated indicators are completely purged via automated internal scripts.",
                    s7: "We deploy strict administrative, digital, and mechanical barriers to defend user data assets against unauthorized manipulation. All internal and external data communication channels are reinforced with 256-bit Secure Sockets Layer (SSL) encryption frameworks.",
                    s8: "Our interface relies on non-persistent session cookies purely to guarantee interface continuity, remember language toggle states (EN/MS), and verify that user traffic has cleared the initial compliance modal. We do not use cookies to track user activities on external web frameworks.",
                    s9: "Vibestream Pay does not sell, rent, or trade client data identifiers to third-party commercial advertising networks. Data sharing is strictly restricted to secure financial clearing institutions, telecom routing nodes, and regulatory compliance entities under judicial orders.",
                    s10: "Because our administration center is in Dubai, UAE, while network fulfillment occurs in Malaysia, your submitted indicators are transmitted internationally. By using this portal, you consent to these cross-border data routing flows under high-level data protections.",
                    s11: "Users retain the absolute statutory right to request a digital duplicate of all their transaction indicators preserved in our databases, demand immediate corrections to faulty historical parameters, or request complete data erasure where legal financial recording duties do not apply.",
                    s12: "This interface does not intentionally collect or process data from individuals below 18 years of age without explicit guardian oversight. If a guardian discovers that a minor has shared indicators without consent, they may request immediate database removal.",
                    s13: "Our platform may contain structural links pointing toward external financial gateways or informational networks. Vibestream Pay has no control over the privacy architectures or content setups of these external destinations, and users are encouraged to evaluate them independently.",
                    s14: "We reserve the absolute right to modify this privacy policy framework at any time to align with updated security standards. The modified version takes immediate effect when published on this interface, and continued site use constitutes acknowledgement of these updates.",
                    s15: "For requests concerning data access, file erasure inquiries, or details on information handling, you can contact our data protection team at Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, UAE."
                }
            },
            ms: {
                logo: "Vibestream Pay",
                navBack: "← Kembali ke Portal Ekspres",
                pTitle: "Dasar Privasi",
                pSubtitle: "Hak perlindungan data anda dan protokol keselamatan maklumat struktur.",
                footerDesc: "Platform Pengumpulan Yuran & Perkhidmatan Remitansi Rasmi. Berdaftar di Pejabat 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Dasar Privasi",
                fTerms: "Syarat Perkhidmatan",
                fDisclaimer: "Penafian Undang-undang",
                titles: {
                    s1: "Komitmen Am",
                    s2: "Maklumat yang Kami Kumpul",
                    s3: "Objektif Pemprosesan Data",
                    s4: "Asas Undang-undang untuk Pemprosesan",
                    s5: "Integrasi Gerbang Pihak Ketiga yang Selamat",
                    s6: "Jadual Pengekalan Data",
                    s7: "Standard Keselamatan Struktur",
                    s8: "Penjejakan & Penggunaan Kuki",
                    s9: "Batasan Perkongsian Data",
                    s10: "Penghantaran Data Merentas Sempadan",
                    s11: "Hak Akses Data Anda",
                    s12: "Perlindungan Privasi Kanak-Kanak",
                    s13: "Pautan Rangka Kerja Web Luaran",
                    s14: "Adaptasi Dasar",
                    s15: "Meja Hubungan Privasi"
                },
                texts: {
                    s1: "Vibestream Payment Provider L.L.C. mengendalikan pengecam peribadi anda dengan rangka kerja keselamatan defensif peringkat tinggi. Dasar ini menetapkan peraturan struktur mengenai pengagregatan data, parameter pemprosesan, dan struktur pilihan pelanggan yang dilaksanakan di seluruh antara muka portal ini.",
                    s2: "Untuk memenuhi pertanyaan rangkaian digital jarak jauh, portal automatik kami merekodkan sasaran rujukan rangkaian pelanggan, angka akaun mudah alih, jumlah transaksi yang jelas, dan metrik sesi tempatan secara sistematik. Kami tidak menyimpan nombor kad pembayaran penuh pada tatasusunan infrastruktur tempatan kami.",
                    s3: "Petunjuk yang dikumpul disalurkan dengan ketat untuk memproses pelarasan baki prabayar segera, melengkapkan pengesahan kiriman wang utiliti pascabayar, membersihkan percanggahan pengelogan pembayaran, menyiasat lonjakan akaun yang mencurigakan, dan mengekalkan penjajaran ketat dengan audit pematuhan global.",
                    s4: "Kami merekodkan butiran pengguna di bawah parameter undang-undang yang ditetapkan, termasuk pelaksanaan struktur kontrak pemenuhan pembayaran yang dimulakan oleh anda, obligasi pematuhan jelas yang dimandatkan oleh undang-undang korporat, dan kepentingan sah dalam menjaga kesihatan operasi platform.",
                    s5: "Pengesahan kad dihantar terus kepada agregator gerbang pembayaran luaran yang diperakui sepenuhnya mematuhi PCI-DSS. Penyedia keselamatan ini dibenarkan secara sah untuk mengendalikan parameter kad. Vibestream Pay tidak mempunyai visualisasi langsung atau penyimpanan data pin keselamatan kad mentah.",
                    s6: "Log transaksi dan pengecam mudah alih dipelihara dengan selamat untuk tempoh masa tepat yang diperlukan untuk memenuhi undang-undang penyimpanan rekod kewangan berkanun dan tingkap pengesahan caj balik institusi. Petunjuk lapuk dibersihkan sepenuhnya melalui skrip dalaman automatik.",
                    s7: "Kami menggunakan halangan pentadbiran, digital, dan mekanikal yang ketat untuk mempertahankan aset data pengguna daripada manipulasi tanpa kebenaran. Semua saluran komunikasi data dalaman dan luaran diperkukuh dengan rangka kerja penyulitan Lapisan Soket Selamat (SSL) 256-bit.",
                    s8: "Antara muka kami bergantung pada kuki sesi bukan berterusan semata-mata untuk menjamin kesinambungan antara muka, mengingati keadaan togol bahasa (EN/MS), dan mengesahkan bahawa trafik pengguna telah membersihkan modal pematuhan awal. Kami tidak menggunakan kuki untuk menjejaki aktiviti pengguna pada rangka kerja web luaran.",
                    s9: "Vibestream Pay tidak menjual, menyewa, atau memperdagangkan pengecam data pelanggan kepada rangkaian pengiklanan komersial pihak ketiga. Perkongsian data adalah terhad secara ketat kepada institusi penjelasan kewangan yang selamat, nod penghalaan telekomunikasi, dan entiti pematuhan kawal selia di bawah perintah kehakiman.",
                    s10: "Memandangkan pusat pentadbiran kami berada di Dubai, UAE, manakala pemenuhan rangkaian berlaku di Malaysia, petunjuk yang anda serahkan dihantar ke peringkat antarabangsa. Dengan menggunakan portal ini, anda bersetuju dengan aliran penghalaan data merentas sempadan ini di bawah perlindungan data tahap tinggi.",
                    s11: "Pengguna mengekalkan hak berkanun mutlak untuk meminta pendua digital bagi semua petunjuk transaksi mereka yang tersimpan dalam pangkalan data kami, menuntut pembetulan segera terhadap parameter sejarah yang salah, atau meminta pemadaman data sepenuhnya di mana tugas merekod kewangan undang-undang tidak terpakai.",
                    s12: "Antara muka ini tidak mengumpul atau memproses data secara sengaja daripada individu di bawah umur 18 tahun tanpa pengawasan penjaga yang jelas. Jika penjaga mendapati bahawa kanak-kanak di bawah umur telah berkongsi petunjuk tanpa kebenaran, mereka boleh meminta pengalihan keluar pangkalan data segera.",
                    s13: "Platform kami mungkin mengandungi pautan struktur yang menghala ke arah gerbang kewangan luaran atau rangkaian maklumat. Vibestream Pay tidak mempunyai kawalan ke atas seni bina privasi atau persediaan kandungan destinasi luaran ini, dan pengguna digalakkan untuk menilai mereka secara bebas.",
                    s14: "Kami memelihara hak mutlak untuk mengubah suai rangka kerja dasar privasi ini pada bila-bila masa untuk menyelaraskan dengan piawaian keselamatan yang dikemas kini. Versi yang dipinda berkuat kuasa serta-merta apabila diterbitkan pada antara muka ini, dan penggunaan tapak yang berterusan merupakan pengakuan terhadap kemas kini ini.",
                    s15: "Untuk permintaan mengenai akses data, pertanyaan pemadaman fail, atau butiran mengenai pengendalian maklumat, anda boleh menghubungi pasukan perlindungan data kami di Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, UAE."
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
