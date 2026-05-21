<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund & Cancellation Policy - Vibestream Pay</title>
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
            <h1 id="page-title">Refund & Cancellation Policy</h1>
            <p id="page-subtitle">Standard regulatory conditions governing transactional cancellations and financial dynamic returns.</p>
        </section>

        <main class="content-body">
            
            <div class="legal-section">
                <div class="section-title"><span>1.</span> <div id="title-s1" style="display:inline;">Core Transactional Nature</div></div>
                <p class="section-text" id="text-s1">Vibestream Payment Provider L.L.C. provides instantaneous digital transmission routes to target telecommunication systems. Due to the real-time fulfillment nature of pre-paid recharges and utility credit allocations, processed transactions are structurally viewable as final executions.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>2.</span> <div id="title-s2" style="display:inline;">Immediate Non-Cancellation Rule</div></div>
                <p class="section-text" id="text-s2">The moment checkout validation is confirmed and the transmission process routes into the Malaysian cellular network infrastructure, the transaction cannot be dynamically canceled, frozen, pulled back, or modified by our local administrative technicians.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>3.</span> <div id="title-s3" style="display:inline;">User Input Responsibility Exclusion</div></div>
                <p class="section-text" id="text-s3">No refund requests shall be verified or approved if a transactional routing error stems from an incorrect account identification sequence or invalid mobile digits entered by the client. The user maintains full accountability for double-checking target details prior to payment.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>4.</span> <div id="title-s4" style="display:inline;">System Execution Failures</div></div>
                <p class="section-text" id="text-s4">If a technical disconnection occurs within our local platform architecture that prevents successful credit allocation after funds are verified and deducted, the system triggers an automatic reconciliation query to reverse the balance within our scheduled tracking window.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>5.</span> <div id="title-s5" style="display:inline;">Verification Window</div></div>
                <p class="section-text" id="text-s5">In complex settlement scenarios where an execution failure is unclear, users must formally submit an inquiry request to our support desk within 48 hours of transaction initiation. Requests received outside this structural window are legally disqualified from review.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>6.</span> <div id="title-s6" style="display:inline;">Documentation Prerequisites</div></div>
                <p class="section-text" id="text-s6">Every formal transaction verification review requires the submission of distinct reference materials, including the unique checkout identifier, the precise timestamp of execution, historical banking statements proving deduction, and valid identification parameters.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>7.</span> <div id="title-s7" style="display:inline;">Processing Channels for Approved Returns</div></div>
                <p class="section-text" id="text-s7">Approved reversals are routed strictly back to the original source card asset or digital wallet utilized during checkout. Vibestream Pay is prohibited under regulatory anti-money laundering laws from issuing cash balances or routing funds to third-party bank accounts.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>8.</span> <div id="title-s8" style="display:inline;">Banking Clearing Latencies</div></div>
                <p class="section-text" id="text-s8">While our platform issues approved reversals immediately, final balance restoration depends entirely on external institutional clearing networks. This cycle typically requires 7 to 14 administrative business days, and we hold no liability for bank processing delays.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>9.</span> <div id="title-s9" style="display:inline;">Deduction of Administrative Overhead</div></div>
                <p class="section-text" id="text-s9">Vibestream Pay reserves the statutory right to deduct original clearing gateway processing overheads and operational network handling fees from the final reversed balance, except in cases where the transactional drop was entirely caused by our technical infrastructure.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>10.</span> <div id="title-s10" style="display:inline;">Handling Network Operator Downtime</div></div>
                <p class="section-text" id="text-s10">If a transaction stalls due to maintenance or downtime on a Malaysian cellular network, the balance remains locked in the operator routing queue. We must wait for the target network to resolve the issue before a cancellation query can be legally initiated.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>11.</span> <div id="title-s11" style="display:inline;">Chargeback Mitigation Protocols</div></div>
                <p class="section-text" id="text-s11">Initiating unauthorized chargeback claims without first utilizing our direct support desk violates these structural conditions. Vibestream Pay actively presents transaction logs, network delivery receipts, and session verification logs to banking compliance units to contest faulty disputes.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>12.</span> <div id="title-s12" style="display:inline;">Fraudulent Operations Safeguards</div></div>
                <p class="section-text" id="text-s12">If our automated monitoring systems flag a transaction as potentially involving stolen card data, unauthorized access, or structural manipulation, operations are suspended instantly. Any associated refund rights are frozen pending a formal judicial investigation.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>13.</span> <div id="title-s13" style="display:inline;">Partial Allocations Adjustments</div></div>
                <p class="section-text" id="text-s13">In instances where a targeted bundle is partially delivered due to sudden structural telecommunication quota reconfigurations, our billing desk will analyze the delivery metrics and apply a proportional adjustment back to the client's source asset.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>14.</span> <div id="title-s14" style="display:inline;">Policy Framework Amendments</div></div>
                <p class="section-text" id="text-s14">We reserve the absolute right to append, adjust, or replace sections of this refund architecture to match changing payment handler conditions. New variations achieve full legal validity the exact moment they are hosted live upon this interface framework.</p>
            </div>

            <div class="legal-section">
                <div class="section-title"><span>15.</span> <div id="title-s15" style="display:inline;">Settlement Desk Contacts</div></div>
                <p class="section-text" id="text-s15">For formal documentation submissions, tracking validation updates, or to clarify transaction failure statuses, please contact our settlement team at Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.</p>
            </div>

        </main>

        <footer>
            <div class="footer-company">Vibestream Payment Provider L.L.C.</div>
            <p id="footer-desc" class="footer-desc">Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.</p>

            <div class="footer-links">
                <a href="privacy.php" id="f-link-privacy">Privacy Policy</a>
                <a href="terms.php" id="f-link-terms">Terms of Service</a>
                <a href="disclaimer.php" id="f-link-disclaimer">Legal Disclaimer</a>
                <a href="refund.php" id="f-link-refund">Refund Policy</a>
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
                pTitle: "Refund & Cancellation Policy",
                pSubtitle: "Standard regulatory conditions governing transactional cancellations and financial dynamic returns.",
                footerDesc: "Official Fees Collection & Remittance Services Platform. Registered Address: Office No. 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Privacy Policy",
                fTerms: "Terms of Service",
                fDisclaimer: "Legal Disclaimer",
                fRefund: "Refund Policy",
                titles: {
                    s1: "Core Transactional Nature",
                    s2: "Immediate Non-Cancellation Rule",
                    s3: "User Input Responsibility Exclusion",
                    s4: "System Execution Failures",
                    s5: "Verification Window",
                    s6: "Documentation Prerequisites",
                    s7: "Processing Channels for Approved Returns",
                    s8: "Banking Clearing Latencies",
                    s9: "Deduction of Administrative Overhead",
                    s10: "Handling Network Operator Downtime",
                    s11: "Chargeback Mitigation Protocols",
                    s12: "Fraudulent Operations Safeguards",
                    s13: "Partial Allocations Adjustments",
                    s14: "Policy Framework Amendments",
                    s15: "Settlement Desk Contacts"
                },
                texts: {
                    s1: "Vibestream Payment Provider L.L.C. provides instantaneous digital transmission routes to target telecommunication systems. Due to the real-time fulfillment nature of pre-paid recharges and utility credit allocations, processed transactions are structurally viewable as final executions.",
                    s2: "The moment checkout validation is confirmed and the transmission process routes into the Malaysian cellular network infrastructure, the transaction cannot be dynamically canceled, frozen, pulled back, or modified by our local administrative technicians.",
                    s3: "No refund requests shall be verified or approved if a transactional routing error stems from an incorrect account identification sequence or invalid mobile digits entered by the client. The user maintains full accountability for double-checking target details prior to payment.",
                    s4: "If a technical disconnection occurs within our local platform architecture that prevents successful credit allocation after funds are verified and deducted, the system triggers an automatic reconciliation query to reverse the balance within our scheduled tracking window.",
                    s5: "In complex settlement scenarios where an execution failure is unclear, users must formally submit an inquiry request to our support desk within 48 hours of transaction initiation. Requests received outside this structural window are legally disqualified from review.",
                    s6: "Every formal transaction verification review requires the submission of distinct reference materials, including the unique checkout identifier, the precise timestamp of execution, historical banking statements proving deduction, and valid identification parameters.",
                    s7: "Approved reversals are routed strictly back to the original source card asset or digital wallet utilized during checkout. Vibestream Pay is prohibited under regulatory anti-money laundering laws from issuing cash balances or routing funds to third-party bank accounts.",
                    s8: "While our platform issues approved reversals immediately, final balance restoration depends entirely on external institutional clearing networks. This cycle typically requires 7 to 14 administrative business days, and we hold no liability for bank processing delays.",
                    s9: "Vibestream Pay reserves the statutory right to deduct original clearing gateway processing overheads and operational network handling fees from the final reversed balance, except in cases where the transactional drop was entirely caused by our technical infrastructure.",
                    s10: "If a transaction stalls due to maintenance or downtime on a Malaysian cellular network, the balance remains locked in the operator routing queue. We must wait for the target network to resolve the issue before a cancellation query can be legally initiated.",
                    s11: "Initiating unauthorized chargeback claims without first utilizing our direct support desk violates these structural conditions. Vibestream Pay actively presents transaction logs, network delivery receipts, and session verification logs to banking compliance units to contest faulty disputes.",
                    s12: "If our automated monitoring systems flag a transaction as potentially involving stolen card data, unauthorized access, or structural manipulation, operations are suspended instantly. Any associated refund rights are frozen pending a formal judicial investigation.",
                    s13: "In instances where a targeted bundle is partially delivered due to sudden structural telecommunication quota reconfigurations, our billing desk will analyze the delivery metrics and apply a proportional adjustment back to the client's source asset.",
                    s14: "We reserve the absolute right to append, adjust, or replace sections of this refund architecture to match changing payment handler conditions. New variations achieve full legal validity the exact moment they are hosted live upon this interface framework.",
                    s15: "For formal documentation submissions, tracking validation updates, or to clarify transaction failure statuses, please contact our settlement team at Vibestream Payment Provider L.L.C., Office No. 0128-51, Dubai Investment Park First, Dubai, UAE."
                }
            },
            ms: {
                logo: "Vibestream Pay",
                navBack: "← Kembali ke Portal Ekspres",
                pTitle: "Dasar Bayaran Balik & Pembatalan",
                pSubtitle: "Syarat kawal selia standard yang mengawal pembatalan urus niaga dan pulangan dinamik kewangan.",
                footerDesc: "Platform Pengumpulan Yuran & Perkhidmatan Remitansi Rasmi. Berdaftar di Pejabat 0128-51, Dubai Investment Park First, Dubai, UAE.",
                fPrivacy: "Dasar Privasi",
                fTerms: "Syarat Perkhidmatan",
                fDisclaimer: "Penafian Undang-undang",
                fRefund: "Dasar Bayaran Balik",
                titles: {
                    s1: "Sifat Teras Urus Niaga",
                    s2: "Peraturan Tiada Pembatalan Segera",
                    s3: "Pengecualian Tanggungjawab Input Pengguna",
                    s4: "Kegagalan Pelaksanaan Sistem",
                    s5: "Tingkap Pengesahan",
                    s6: "Prasyarat Dokumentasi",
                    s7: "Saluran Pemprosesan untuk Pulangan yang Diluluskan",
                    s8: "Kependaman Penjelasan Perbankan",
                    s9: "Pemotongan Overhed Pentadbiran",
                    s10: "Mengendalikan Masa Henti Pengendali Rangka Kerja",
                    s11: "Protokol Mitigasi Caj Balik",
                    s12: "Perlindungan Operasi Penipuan",
                    s13: "Pelarasan Peruntukan Separa",
                    s14: "Pindaan Rangka Kerja Dasar",
                    s15: "Kenalan Meja Penyelesaian"
                },
                texts: {
                    s1: "Vibestream Payment Provider L.L.C. menyediakan laluan penghantaran digital serta-merta ke sistem telekomunikasi sasaran. Disebabkan sifat pemenuhan masa nyata bagi tambah nilai prabayar dan peruntukan kredit utiliti, urus niaga yang diproses secara struktur boleh dilihat sebagai pelaksanaan muktamad.",
                    s2: "Pada saat pengesahan pembayaran disahkan dan proses penghantaran disalurkan ke dalam infrastruktur rangkaian selular Malaysia, urus niaga tidak boleh dibatalkan, dibekukan, ditarik balik, atau diubah suai secara dinamik oleh juruteknik pentadbiran tempatan kami.",
                    s3: "Tiada permintaan bayaran balik akan disahkan atau diluluskan jika ralat penghalaan urus niaga berpunca daripada urutan pengenalan akaun yang salah atau digit mudah alih tidak sah yang dimasukkan oleh pelanggan. Pengguna mengekalkan akauntabiliti penuh untuk menyemak semula butiran sasaran sebelum pembayaran.",
                    s4: "Jika pemutusan sambungan teknikal berlaku dalam seni bina platform tempatan kami yang menghalang peruntukan kredit yang berjaya selepas dana disahkan dan ditolak, sistem akan mencetuskan pertanyaan penyesuaian automatik untuk membalas baki dalam tetingkap penjejakan berjadual kami.",
                    s5: "Dalam senario penyelesaian yang kompleks di mana kegagalan pelaksanaan tidak jelas, pengguna mesti menyerahkan permintaan pertanyaan secara rasmi ke meja sokongan kami dalam tempoh 48 jam selepas permulaan urus niaga. Permintaan yang diterima di luar tetingkap struktur ini hilang kelayakan secara sah untuk disemak.",
                    s6: "Setiap semakan pengesahan urus niaga rasmi memerlukan penyerahan bahan rujukan yang jelas, termasuk pengecam pembayaran yang unik, cap masa pelaksanaan yang tepat, penyata perbankan sejarah yang membuktikan pemotongan, dan parameter pengenalan yang sah.",
                    s7: "Pemulangan yang diluluskan disalurkan secara ketat kembali ke aset kad sumber asal atau dompet digital yang digunakan semasa pembayaran. Vibestream Pay dilarang di bawah undang-undang pencegahan pengubahan wang haram kawal selia daripada mengeluarkan baki tunai atau menyalurkan dana ke akaun bank pihak ketiga.",
                    s8: "Walaupun platform kami mengeluarkan pemulangan yang diluluskan serta-merta, pemulihan baki akhir bergantung sepenuhnya pada rangkaian penjelasan institusi luaran. Kitaran ini biasanya memerlukan 7 hingga 14 hari perniagaan pentadbiran, dan kami tidak bertanggungjawab atas kelewatan pemprosesan bank.",
                    s9: "Vibestream Pay mengekalkan hak berkanun untuk memotong overhed pemprosesan gerbang penjelasan asal dan yuran pengendalian rangkaian operasi daripada baki terbalik akhir, kecuali dalam kes di mana penurunan urus niaga disebabkan sepenuhnya oleh infrastruktur teknikal kami.",
                    s10: "Jika urus niaga tersekat disebabkan oleh penyelenggaraan atau masa henti pada rangkaian selular Malaysia, baki tetap terkunci dalam baris gilir penghalaan pengendali. Kami mesti menunggu rangkaian sasaran menyelesaikan isu tersebut sebelum pertanyaan pembatalan boleh dimulakan secara sah.",
                    s11: "Memulakan tuntutan caj balik tanpa kebenaran tanpa terlebih dahulu menggunakan meja sokongan langsung kami melanggar syarat struktur ini. Vibestream Pay secara aktif membentangkan log transaksi, resit penghantaran rangkaian, dan log pengesahan sesi kepada unit pematuhan perbankan untuk membantah pertikaian yang salah.",
                    s12: "Jika sistem pemantauan automatik kami menandakan transaksi berpotensi melibatkan data kad dicuri, akses tanpa kebenaran, atau manipulasi struktur, operasi akan digantung serta-merta. Sebarang hak bayaran balik yang berkaitan dibekukan sementara menunggu siasatan kehakiman rasmi.",
                    s13: "Dalam kes di mana pakej sasaran dihantar sebahagiannya disebabkan oleh rekonfigurasi kuota telekomunikasi struktur yang mengejut, meja pengebilan kami akan menganalisis metrik penghantaran dan menggunakan pelarasan berkadar kembali ke aset sumber pelanggan.",
                    s14: "Kami memelihara hak mutlak untuk menambah, melaras, atau menggantikan bahagian daripada seni bina bayaran balik ini untuk sepadan dengan keadaan pengendali pembayaran yang berubah-ubah. Varian baharu mencapai kesahan undang-undang penuh pada masa yang tepat ia dihoskan secara langsung pada antara muka ini.",
                    s15: "Untuk penyerahan dokumentasi rasmi, kemas kini pengesahan penjejakan, atau untuk menjelaskan status kegagalan transaksi, sila hubungi pasukan penyelesaian kami di Vibestream Payment Provider L.L.C., Pejabat No. 0128-51, Dubai Investment Park First, Dubai, UAE."
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
            document.getElementById('f-refund').innerText = t.fRefund;

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
