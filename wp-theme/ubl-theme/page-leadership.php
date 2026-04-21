<?php
/**
 * Template Name: Leadership
 * Description: Leadership team page — Umang Boards Limited
 */
get_header();
$uri  = UBL_URI;
$ldr  = esc_url( $uri ) . '/assets/images/leadership/';
$bd   = esc_url( $uri ) . '/assets/images/leadership-hero-bg.webp';

$people = [
  'anoop' => [
    'name'    => 'Mr. Anoop Kumar Dhanuka',
    'role'    => 'Chairman & Managing Director',
    'photo'   => $ldr . 'AnoopKumarDhanuka.jpg',
    'linkedin'=> '#',
    'meta'    => ['Promoter','B.Com, Univ. of Rajasthan (1993)','26+ yrs in Power T&D'],
    'bio'     => [
      "Mr. Anoop Kumar Dhanuka is the Promoter, Chairman & Managing Director of Umang Boards Limited. He holds a Bachelor of Commerce degree from the University of Rajasthan (1993) and brings over 26 years of leadership experience in the power transmission and distribution sector.",
      "As Chairman & Managing Director, Mr. Dhanuka provides strategic direction to the Company, overseeing its long-term growth and operational excellence. His executive focus centers on guiding future expansion initiatives, directing R&D and product development strategy, and overseeing strategic capital allocation across the business to drive sustained growth and operational strength.",
      "Under his stewardship, Umang Boards has evolved from a regional supplier into a global player, serving customers across multiple continents. The Company now supplies critical insulation solutions—including high-performance pressboards, precision-machined components, moulded systems, and winding wires—to leading transformer manufacturers worldwide, with technical capabilities extending to 1200 kV class applications.",
      "A strong advocate for responsible manufacturing, Mr. Dhanuka ensures that the Company's operations prioritize environmental sustainability through energy-efficient practices, low carbon footprint initiatives, and sustainable resource management.",
      "Driven by a vision to power the \"world's electric future,\" he is deeply committed to the \"Make in India\" initiative. By focusing on innovation and disciplined execution, Mr. Dhanuka has positioned Umang Boards as a world-class technology partner for next-generation electrical infrastructure, renewable energy, and high-efficiency power networks globally.",
    ],
  ],
  'alok' => [
    'name'    => 'Mr. Alok Kumar Dhanuka',
    'role'    => 'Whole-Time Director',
    'photo'   => $ldr . 'Alok-Dhanuka.jpg',
    'linkedin'=> '#',
    'meta'    => ['Promoter','B.Com, Univ. of Rajasthan (1994)','26+ yrs in Power T&D'],
    'bio'     => [
      "Mr. Alok Kumar Dhanuka is the Promoter and Whole Time Director of Umang Boards Limited and has served on its Board of Directors since incorporation. He holds a Bachelor of Commerce degree from the University of Rajasthan (1994) and brings over 26 years of leadership experience in the power transmission and distribution sector.",
      "As Whole Time Director, Mr. Dhanuka oversees the Company's financial strategy and treasury management, ensuring robust financial health and operational efficiency. His key responsibilities include managing overall P&L performance, directing finance and treasury operations, and optimizing capital utilization to support the Company's growth trajectory while maintaining financial discipline.",
      "Mr. Dhanuka plays a pivotal role in resource allocation and financial planning, ensuring that the Company's investments are strategically aligned with long-term business objectives. His disciplined approach to financial governance and working capital management has been instrumental in building a strong financial foundation that supports Umang Boards' expansion into new markets and product lines.",
    ],
  ],
  'umang' => [
    'name'    => 'Mr. Umang Dhanuka',
    'role'    => 'Whole-Time Director',
    'photo'   => $ldr . 'UmangDhanuka.jpg',
    'linkedin'=> '#',
    'meta'    => ['Promoter','B.Sc. Industrial Engg., Purdue (2018)','BIS ETD-02 Principal Member','IEEE Member'],
    'bio'     => [
      "Mr. Umang Dhanuka is a Promoter and Whole-Time Director of Umang Boards Limited. He holds a Bachelor of Science in Industrial Engineering from Purdue University, USA (2018), and is a Principal Member of the Bureau of Indian Standards ETD-02 Sectional Committee on Solid Electrical Insulating Materials and Insulation Systems. He is also an active member of the Institute of Electrical and Electronics Engineers (IEEE).",
      "Joining the Company in 2018 and appointed to the Board in 2025, Mr. Dhanuka brings over seven years of hands-on experience in the power transmission and distribution sector. He provides strategic leadership across production, operations, vendor management, marketing, and business development, driving growth through operational rigor and customer-centric innovation.",
      "Currently, he oversees the end-to-end operations of the Insulation business, ensuring seamless integration from manufacturing to market delivery. He also leads new product development initiatives, driving innovation in high-performance insulation solutions for next-generation electrical applications.",
      "In addition to his operational responsibilities, Mr. Dhanuka actively engages in investor relations, effectively communicating the Company's strategic vision and performance to stakeholders.",
    ],
  ],
  'dhruv' => [
    'name'    => 'Mr. Dhruv Dhanuka',
    'role'    => 'Whole-Time Director',
    'photo'   => $ldr . 'Dhruv-Dhanuka.jpg',
    'linkedin'=> '#',
    'meta'    => ['Promoter','B.Sc. Business Admin, USC (2022)','Plant Head · Unit II, Kaladera'],
    'bio'     => [
      "Mr. Dhruv Dhanuka is a Promoter and Whole-Time Director of Umang Boards Limited. He holds a Bachelor of Science in Business Administration from the University of Southern California (2022) and brings a diverse professional background spanning six years across multiple sectors, with over three years of specialized experience in the power transmission and distribution industry.",
      "Associated with the Company since 2022 and appointed to the Board in 2025, Mr. Dhanuka has quickly established himself as a key operational leader. He currently oversees the complete operations of Manufacturing Unit II at Kaladera, Jaipur, driving operational excellence and production efficiency at scale.",
      "Beyond manufacturing operations, Mr. Dhanuka carries significant responsibility for the Company's legal, regulatory, and compliance frameworks. He manages secretarial matters, regulatory filings, and governance protocols. His strategic focus on data-driven quality control systems has strengthened product consistency and performance benchmarking across manufacturing operations.",
    ],
  ],
  'devendra' => [
    'name'    => 'Mr. Devendra Kumar',
    'role'    => 'Independent Director',
    'photo'   => $ldr . 'DevendraKumar.jpg',
    'linkedin'=> '#',
    'meta'    => ['Ex-CGM (Personal Banking), State Bank of India','RBI-appointed Advisor, Abhyudaya Coop Bank','39+ yrs in banking'],
    'directorships' => [
      'SBI Cards and Payment Services Ltd (past nominee director)',
      'SBI Payments Services Pvt Ltd (past nominee director)',
      'SBI SG Global Securities Services Pvt Ltd (past nominee director)',
      'C-Edge Technologies Pvt Ltd (past nominee director)',
      'PSB Alliance Pvt Ltd (past nominee director)',
    ],
    'bio'     => [
      "Mr. Devendra Kumar is a seasoned banking leader with 39+ years of experience, primarily in retail banking across leading institutions. After retiring from State Bank of India, he served as Advisor to its Wealth and Premier Banking Business and, in March 2024, was appointed by the Reserve Bank of India as Advisor to Abhyudaya Coop Bank Ltd., Mumbai.",
      "He previously held the position of Chief General Manager – Personal Banking at SBI, overseeing nationwide retail operations with assets exceeding ₹5.2 trillion and liabilities of ₹38 trillion, driving significant market share growth. He also headed SBI's Associates & Subsidiaries Department, supervising 13 RRBs and 11 subsidiaries, and served as nominee director on multiple boards.",
      "He brings deep expertise in retail banking, product strategy, governance, and stakeholder collaboration, with a strong commitment to driving growth, innovation, and customer-centric excellence in the BFSI sector.",
    ],
  ],
  'avindar' => [
    'name'    => 'Mr. Avindra Laddha',
    'role'    => 'Independent Director',
    'photo'   => $ldr . 'AvindarLaddha.jpg',
    'linkedin'=> '#',
    'meta'    => ['Ex-Addl. Director of Industries, Govt. of Rajasthan','M.A. Economics, Rajasthan University','30+ yrs public policy'],
    'bio'     => [
      "Mr. Avindra Laddha is a seasoned industry expert with over three decades of experience, formerly serving as Additional Director of Industries for the Government of Rajasthan. He played a pivotal role in formulating key regulatory frameworks, including the Rajasthan MSME Policy 2015 and the state's Export Promotion Strategy.",
      "His track record includes managing extensive cluster development programs and executing value chain diagnostics for the salt and handicraft sectors. Furthermore, he supervised the successful Geographical Indication (GI) tagging of five heritage products, such as Makrana Marble and Blue Pottery.",
      "He holds a Master's degree in Economics from Rajasthan University.",
    ],
  ],
  'shruti' => [
    'name'    => 'Ms. Shruti Gupta',
    'role'    => 'Independent Director',
    'photo'   => $ldr . 'Shruti-Gupta.jpg',
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
  'nitin' => [
    'name'    => 'Mr. Nitin Ghanshyam Hotchandani',
    'role'    => 'Independent Director',
    'photo'   => $ldr . 'NitinGhanshyamHotchandani.jpg',
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
  'manan' => [
    'name'    => 'Mr. Manan Dhanuka',
    'role'    => 'President · Wire and Chemical Business',
    'photo'   => null,
    'linkedin'=> '#',
    'meta'    => ['B.Sc. EECS, UC Berkeley','Joined 2025'],
    'bio'     => [
      "Mr. Manan Dhanuka holds a degree in Electrical Engineering and Computer Science from the University of California, Berkeley. He joined the business in 2025 and currently leads the Wire and Chemical Business vertical, responsible for strategic growth, business development, and operational leadership across product segments.",
      "With a strong technical foundation and global exposure, he focuses on modernization, efficiency enhancement, and expanding the Company's presence in domestic and international markets.",
    ],
  ],
  'mayank' => [
    'name'    => 'Mr. Mayank Jain',
    'role'    => 'Chief Financial Officer',
    'photo'   => null,
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
  'ayush' => [
    'name'    => 'Mr. Ayush Vijay',
    'role'    => 'Company Secretary & Compliance Officer',
    'photo'   => null,
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
  'rajeshwaran' => [
    'name'    => 'Mr. P. Rajeshwaran',
    'role'    => 'Plant Head · Insulation',
    'photo'   => null,
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
  'gopal' => [
    'name'    => 'Mr. Gopal Sharma',
    'role'    => 'Finance Head · Treasury and MIS',
    'photo'   => null,
    'linkedin'=> '#',
    'meta'    => [],
    'bio'     => [],
  ],
];
?>

<style>
/* ── Token scope: override --navy from style-blue.css ── */
.lp-wrap {
  --navy:#0B1F3A;
  --navy-light:#1A3556;
  --navy-pale:#2A4A70;
  --gold:#C8A84B;
  --gold-dark:#A08030;
  --gold-light:#D4BA6A;
  --gold-pale:#E8D9A8;
  --parchment:#FAF4E8;
  --parchment-deep:#F2E7CF;
  --ink:#1A1D24;
  --ink-2:rgba(11,31,58,.7);
  --ink-3:rgba(11,31,58,.55);
  --rule:rgba(11,31,58,.10);
  --bg:#FFFFFF;
  --bg-soft:#F8F6F1;
  --ease:cubic-bezier(.16,1,.3,1);
  font-family:var(--font-body);
  -webkit-font-smoothing:antialiased;
}
.lp-wrap *{box-sizing:border-box}
.lp-wrap img{display:block;max-width:100%}
.lp-wrap a{color:inherit;text-decoration:none}
.lp-wrap button{font:inherit;cursor:pointer}

/* ── Hero ── */
.lp-wrap .hero{
  position:relative;
  min-height:480px;
  background:#ffffff;
  color:#0b1f3a;
  display:flex;flex-direction:column;justify-content:flex-end;
  overflow:hidden;
  border-bottom:1px solid rgba(11,31,58,.08);
}
.lp-wrap .hero-media{position:absolute;inset:0;z-index:0}
.lp-wrap .hero-media img{width:100%;height:100%;object-fit:cover;object-position:center;opacity:.10}
.lp-wrap .hero-media::after{content:'';position:absolute;inset:0;background:rgba(255,255,255,.55)}
.lp-wrap .hero-mark{
  position:absolute;width:70px;height:70px;z-index:2;
  border-color:rgba(200,168,75,.55);border-style:solid;border-width:0;
}
.lp-wrap .hero-mark.tl{top:32px;left:32px;border-top-width:1px;border-left-width:1px}
.lp-wrap .hero-mark.tr{top:32px;right:32px;border-top-width:1px;border-right-width:1px}
.lp-wrap .hero-mark.bl{bottom:32px;left:32px;border-bottom-width:1px;border-left-width:1px}
.lp-wrap .hero-mark.br{bottom:32px;right:32px;border-bottom-width:1px;border-right-width:1px}
.lp-wrap .hero-inner{
  position:relative;z-index:3;
  max-width:1440px;margin:0 auto;width:100%;
  padding:8rem 2.5rem 4rem;
}
.lp-wrap .eyebrow{
  display:inline-flex;align-items:center;gap:.7rem;
  font-size:.7rem;letter-spacing:.32em;text-transform:uppercase;color:var(--gold-dark);
  font-weight:600;margin-bottom:1.1rem;
}
.lp-wrap .eyebrow::before{content:'';width:34px;height:1px;background:var(--gold)}
.lp-wrap .hero-title{
  font-family:var(--font-body);
  font-weight:700;
  font-size:clamp(2.6rem,5.4vw,5rem);
  line-height:1.08;letter-spacing:-.02em;
  margin:0 0 1rem;max-width:900px;
}
.lp-wrap .hero-title em{font-style:normal;color:var(--gold-dark);font-weight:600}
.lp-wrap .hero-sub{
  font-size:1.02rem;line-height:1.7;color:rgba(11,31,58,.65);
  max-width:580px;margin:0;font-weight:400;
}


/* ── Section scaffolding ── */
.lp-wrap .section{padding:6rem 2.5rem}
.lp-wrap .section-wrap{max-width:1280px;margin:0 auto}
.lp-wrap .sec-eyebrow{
  font-size:.7rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold-dark);
  font-weight:700;margin-bottom:.8rem;display:flex;align-items:center;gap:.65rem;
}
.lp-wrap .sec-eyebrow::before{content:'';width:22px;height:1px;background:var(--gold)}
.lp-wrap .sec-title{
  font-family:var(--font-body);font-weight:700;
  font-size:clamp(2rem,3.6vw,3.2rem);
  line-height:1.08;color:#0b1f3a;margin:0;
  letter-spacing:-.01em;max-width:720px;
}
.lp-wrap .sec-title em{font-style:normal;color:var(--gold-dark);font-weight:600}

/* ── Chairman's Message ── */
.lp-wrap .founder{
  background:
    radial-gradient(ellipse 60% 50% at 80% 20%,rgba(200,168,75,.10),transparent 60%),
    radial-gradient(ellipse 40% 40% at 10% 90%,rgba(200,168,75,.06),transparent 60%),
    linear-gradient(180deg,var(--parchment) 0%,#F7EFDD 100%);
  position:relative;
}
.lp-wrap .founder::before{
  content:'';position:absolute;inset:0;pointer-events:none;
  background-image:radial-gradient(circle,rgba(11,31,58,.05) 1px,transparent 1px);
  background-size:26px 26px;opacity:.55;
}
.lp-wrap .founder-grid{
  position:relative;display:grid;grid-template-columns:1.15fr 1fr;gap:5rem;align-items:center;
}
.lp-wrap .founder-text{position:relative}
.lp-wrap .quote-glyph{
  font-family:var(--font-body);font-size:8rem;line-height:.8;
  color:var(--gold);opacity:.55;font-weight:500;
  position:absolute;left:-.1em;top:-.15em;pointer-events:none;
}
.lp-wrap .founder-lead{
  font-family:var(--font-body);font-size:clamp(1.4rem,2.1vw,1.9rem);
  line-height:1.4;color:#0b1f3a;font-weight:500;
  margin:1rem 0 1.6rem;letter-spacing:-.005em;position:relative;
}
.lp-wrap .founder-lead em{font-style:normal;color:var(--gold-dark)}
.lp-wrap .founder-body{font-size:1rem;line-height:1.85;color:var(--ink-2);max-width:540px;margin:0 0 1.6rem;font-weight:400}
.lp-wrap .founder-sig{display:flex;align-items:center;gap:1.1rem;margin-top:1.8rem}
.lp-wrap .founder-sig-rule{width:42px;height:1px;background:var(--gold)}
.lp-wrap .founder-sig-name{font-weight:700;color:#0b1f3a;font-size:1rem;letter-spacing:.01em}
.lp-wrap .founder-sig-role{font-size:.72rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold-dark);margin-top:.25rem;font-weight:600}
.lp-wrap .founder-portrait{
  position:relative;aspect-ratio:3/4;max-width:420px;width:100%;margin-left:auto;
  min-height:300px;
}
.lp-wrap .founder-portrait .frame{
  position:absolute;inset:0;border:1px solid rgba(200,168,75,.4);
  transform:translate(18px,18px);
}
.lp-wrap .founder-portrait .photo{
  position:absolute;inset:0;overflow:hidden;background:var(--navy-light);
  box-shadow:0 30px 70px -20px rgba(11,31,58,.35);
}
.lp-wrap .founder-portrait .photo img{
  width:100%;height:100%;object-fit:cover;object-position:top center;
  filter:contrast(1.02) saturate(.95);
}
.lp-wrap .founder-portrait .tag{
  position:absolute;bottom:-18px;left:-18px;background:var(--navy);color:#fff;
  padding:.65rem 1.2rem;font-size:.65rem;letter-spacing:.26em;text-transform:uppercase;font-weight:600;
}
.lp-wrap .founder-portrait .tag em{font-style:normal;color:var(--gold-light)}

/* ── Leadership tabs ── */
.lp-wrap .visionaries{background:#fff;padding-top:7rem;padding-bottom:7rem}
.lp-wrap .vis-head{text-align:center;margin-bottom:3rem}
.lp-wrap .vis-head .sec-eyebrow{justify-content:center}
.lp-wrap .vis-head .sec-eyebrow::before{display:none}
.lp-wrap .vis-head .sec-title{margin:0 auto;max-width:720px}
.lp-wrap .tabs{
  display:flex;justify-content:center;gap:.35rem;
  border-bottom:1px solid var(--rule);
  margin:2.6rem 0 3.6rem;position:relative;flex-wrap:wrap;
}
.lp-wrap .tab{
  padding:1.1rem 1.6rem;background:none;border:0;
  font-size:.78rem;font-weight:600;letter-spacing:.18em;text-transform:uppercase;
  color:var(--ink-3);position:relative;transition:color .3s var(--ease);
}
.lp-wrap .tab:hover{color:var(--navy)}
.lp-wrap .tab.is-active{color:var(--navy)}
.lp-wrap .tab-count{
  display:inline-block;margin-left:.55rem;
  font-size:.62rem;letter-spacing:.1em;color:var(--gold-dark);font-weight:700;
  background:rgba(200,168,75,.12);padding:2px 8px;border-radius:999px;
}
.lp-wrap .tab-indicator{
  position:absolute;bottom:-1px;height:2px;background:var(--gold);
  transition:all .4s var(--ease);
}
.lp-wrap .panel{display:none}
.lp-wrap .panel.is-active{display:block;animation:lpFadeUp .55s var(--ease)}
@keyframes lpFadeUp{from{opacity:0;transform:translateY(14px)}to{opacity:1;transform:none}}

/* ── Person grid ── */
.lp-wrap .lp-grid{display:grid;gap:2rem}
.lp-wrap .lp-grid--3{grid-template-columns:repeat(3,1fr)}
.lp-wrap .lp-grid--2{grid-template-columns:repeat(2,1fr)}
.lp-wrap .person{
  position:relative;display:flex;flex-direction:column;
  background:#fff;transition:transform .5s var(--ease);cursor:pointer;
}
.lp-wrap .person:hover{transform:translateY(-4px)}
.lp-wrap .person-photo{
  position:relative;aspect-ratio:4/5;overflow:hidden;
  background:linear-gradient(180deg,#f0ece4 0%,#e4ddc8 100%);
}
.lp-wrap .person-photo img{
  width:100%;height:100%;object-fit:cover;object-position:top center;
  filter:grayscale(.1) contrast(1.02);
  transition:transform 1s var(--ease),filter .6s var(--ease);
}
.lp-wrap .person:hover .person-photo img{transform:scale(1.04);filter:none}
.lp-wrap .person-photo::after{
  content:'';position:absolute;inset:0;
  background:linear-gradient(180deg,transparent 55%,rgba(11,31,58,.18) 100%);
  pointer-events:none;
}
.lp-wrap .person-photo--empty{
  display:flex;align-items:center;justify-content:center;
  background:radial-gradient(ellipse at top,rgba(200,168,75,.18),transparent 60%),
    linear-gradient(180deg,#f7f1e2,#ebe0c2);
}
.lp-wrap .person-photo--empty .init{
  font-family:var(--font-body);font-size:4rem;font-weight:500;
  color:var(--gold-dark);letter-spacing:-.02em;
}
/* Gold cap */
.lp-wrap .person-cap{
  background:linear-gradient(180deg,var(--gold) 0%,var(--gold-dark) 100%);
  color:var(--navy);padding:1.1rem 1.3rem 1.2rem;
  position:relative;text-align:center;
}
.lp-wrap .person-cap::before{
  content:'';position:absolute;left:50%;top:-9px;width:18px;height:18px;
  background:inherit;transform:translateX(-50%) rotate(45deg);
}
.lp-wrap .person-name{
  font-family:var(--font-body);font-weight:600;
  font-size:1.15rem;line-height:1.2;letter-spacing:-.005em;color:#0b1f3a;margin:0;
}
.lp-wrap .person-role{
  font-size:.66rem;letter-spacing:.22em;text-transform:uppercase;
  color:rgba(11,31,58,.72);margin-top:.35rem;font-weight:600;
}
.lp-wrap .person-more{
  margin-top:.85rem;display:inline-flex;align-items:center;gap:.35rem;
  font-size:.62rem;letter-spacing:.18em;text-transform:uppercase;
  color:#0b1f3a;font-weight:700;opacity:.85;
  padding-top:.75rem;border-top:1px solid rgba(11,31,58,.18);
}
.lp-wrap .person-more svg{width:11px;height:11px}
/* Parchment cap variant */
.lp-wrap[data-card="parchment"] .person-cap{
  background:linear-gradient(180deg,var(--parchment) 0%,var(--parchment-deep) 100%);
}
.lp-wrap[data-card="parchment"] .person-role{color:var(--gold-dark)}
.lp-wrap[data-card="parchment"] .person-more{color:#0b1f3a;border-top-color:rgba(11,31,58,.12)}
/* LinkedIn corner badge */
.lp-wrap .person-li{
  position:absolute;top:10px;right:10px;z-index:2;
  width:32px;height:32px;border-radius:50%;
  background:rgba(255,255,255,.92);backdrop-filter:blur(6px);
  display:flex;align-items:center;justify-content:center;
  color:#0A66C2;transition:all .3s var(--ease);
  border:1px solid rgba(11,31,58,.08);
}
.lp-wrap .person-li:hover{background:#0A66C2;color:#fff;transform:scale(1.08)}
.lp-wrap .person-li svg{width:15px;height:15px}

/* ── Modal ── */
.lp-modal-scrim{
  position:fixed;inset:0;background:rgba(11,31,58,.75);backdrop-filter:blur(6px);
  display:flex;align-items:center;justify-content:center;padding:2rem;z-index:9999;
  opacity:0;visibility:hidden;transition:all .35s cubic-bezier(.16,1,.3,1);
  --navy:#0B1F3A;--gold:#C8A84B;--gold-dark:#A08030;--gold-light:#D4BA6A;
  --parchment:#FAF4E8;--ink-2:rgba(11,31,58,.7);--rule:rgba(11,31,58,.10);
  --font-body:'Poppins',Arial,sans-serif;
}
.lp-modal-scrim.open{opacity:1;visibility:visible}
.lp-modal{
  background:#fff;max-width:760px;width:100%;max-height:88vh;
  position:relative;transform:translateY(30px);transition:transform .4s cubic-bezier(.16,1,.3,1);
  overflow:hidden;
}
.lp-modal::before{content:'';position:absolute;left:0;right:0;top:0;height:4px;background:linear-gradient(90deg,var(--gold) 0%,var(--gold-dark) 100%);z-index:2}
.lp-modal-scrim.open .lp-modal{transform:none}
.lp-modal-body{padding:2.6rem;overflow-y:auto;max-height:88vh}
.lp-modal-head{display:flex;align-items:center;gap:1.2rem;margin-bottom:1.2rem}
.lp-modal-thumb{
  width:88px;height:88px;flex-shrink:0;border-radius:50%;overflow:hidden;
  background:var(--parchment);border:2px solid var(--gold);
  box-shadow:0 6px 18px -6px rgba(11,31,58,.25);
}
.lp-modal-thumb img{width:100%;height:100%;object-fit:cover;object-position:top center}
.lp-modal-thumb--empty{display:flex;align-items:center;justify-content:center;font-family:var(--font-body);font-weight:600;font-size:1.5rem;color:var(--gold-dark)}
.lp-modal-name{font-family:var(--font-body);font-size:2rem;font-weight:600;color:#0b1f3a;margin:0;letter-spacing:-.01em}
.lp-modal-role{font-size:.72rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold-dark);font-weight:700;margin:.5rem 0 0}
.lp-modal-close{
  position:absolute;top:14px;right:14px;width:36px;height:36px;border-radius:50%;
  background:rgba(11,31,58,.08);border:0;display:flex;align-items:center;justify-content:center;
  color:#0b1f3a;transition:all .3s;cursor:pointer;
}
.lp-modal-close:hover{background:#0b1f3a;color:#fff}
.lp-modal-rule{width:40px;height:2px;background:var(--gold);margin:1.2rem 0}
.lp-modal-bio p{font-size:.95rem;line-height:1.8;color:var(--ink-2);margin:0 0 1rem;font-weight:400;font-family:var(--font-body)}
.lp-modal-meta{display:flex;gap:.5rem;flex-wrap:wrap;margin-top:1.6rem;padding-top:1.4rem;border-top:1px solid var(--rule)}
.lp-meta-chip{font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:#0b1f3a;background:var(--parchment);padding:.45rem .75rem;border:1px solid rgba(200,168,75,.25);font-weight:600;white-space:nowrap;font-family:var(--font-body)}
.lp-modal-directorships{
  margin-top:1.4rem;padding:1.2rem 1.2rem 1rem;
  background:var(--parchment);border-left:3px solid var(--gold);
}
.lp-mdir-head{font-size:.66rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold-dark);font-weight:700;margin-bottom:.7rem;font-family:var(--font-body)}
.lp-mdir-list{margin:0;padding:0;list-style:none}
.lp-mdir-list li{
  font-size:.88rem;line-height:1.6;color:var(--ink-2);
  padding:.4rem 0 .4rem 1.1rem;position:relative;
  border-bottom:1px dashed rgba(11,31,58,.08);font-family:var(--font-body);
}
.lp-mdir-list li:last-child{border-bottom:0}
.lp-mdir-list li::before{
  content:'';position:absolute;left:0;top:.9rem;width:6px;height:6px;
  background:var(--gold);border-radius:50%;
}
.lp-modal-linkedin{
  display:inline-flex;align-items:center;gap:.5rem;
  margin-top:1.4rem;padding:.7rem 1.1rem;
  background:#0A66C2;color:#fff;font-size:.7rem;letter-spacing:.16em;
  text-transform:uppercase;font-weight:700;border:0;transition:all .3s;
  font-family:var(--font-body);cursor:pointer;
}
.lp-modal-linkedin:hover{background:#004182}
.lp-modal-linkedin svg{width:14px;height:14px}

/* ── News section ── */
.lp-wrap .au-news{padding:clamp(5rem,10vh,8rem) clamp(1.5rem,4vw,3.5rem);background:#fff}
.lp-wrap .au-news-wrap{max-width:1400px;margin:0 auto}
.lp-wrap .au-news-header{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:clamp(2rem,4vw,3rem);flex-wrap:wrap;gap:1rem}
.lp-wrap .au-news-eyebrow{font-size:.72rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--gold-dark);margin-bottom:.75rem}
.lp-wrap .au-news-title{font-family:var(--font-body);font-size:clamp(2rem,4vw,3rem);font-weight:700;color:#0b1f3a;letter-spacing:-.02em;line-height:1.1}
.lp-wrap .au-news-title em{font-style:normal;color:var(--gold-dark)}
.lp-wrap .au-news-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.lp-wrap .au-news-card{background:#fff;border:1px solid rgba(11,31,58,.07);overflow:hidden;transition:box-shadow .3s,transform .3s}
.lp-wrap .au-news-card:hover{box-shadow:0 8px 32px rgba(11,31,58,.1);transform:translateY(-4px)}
.lp-wrap .au-news-card-img-wrap{position:relative;aspect-ratio:16/9;overflow:hidden}
.lp-wrap .au-news-card-img-wrap img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .5s}
.lp-wrap .au-news-card:hover .au-news-card-img-wrap img{transform:scale(1.05)}
.lp-wrap .au-news-badge{position:absolute;top:1rem;left:1rem;background:var(--gold);color:#0b1f3a;font-size:.62rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;padding:.3rem .7rem}
.lp-wrap .au-news-card-body{padding:1.5rem}
.lp-wrap .au-news-card-title{font-family:var(--font-body);font-size:1rem;font-weight:700;color:#0b1f3a;line-height:1.4;margin-bottom:.75rem}
.lp-wrap .au-news-card-excerpt{font-size:.85rem;color:var(--ink-3);line-height:1.6;margin-bottom:1.25rem}
.lp-wrap .au-news-card-link{display:inline-flex;align-items:center;gap:.4rem;font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--gold-dark);text-decoration:none;transition:gap .3s}
.lp-wrap .au-news-card-link:hover{gap:.7rem}
.lp-wrap .au-news-card-link svg{width:14px;height:14px;transition:transform .3s}
.lp-wrap .au-news-card-link:hover svg{transform:translateX(3px)}

/* ── Events section ── */
.lp-wrap .au-events{padding:clamp(3rem,6vh,5rem) clamp(1.5rem,4vw,3.5rem);background:var(--bg-soft)}
.lp-wrap .au-events-wrap{max-width:1400px;margin:0 auto}
.lp-wrap .au-events-inner{background:#fff;border-radius:12px;padding:clamp(2rem,4vw,3rem)}
.lp-wrap .au-events-eyebrow{font-size:.72rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--gold-dark);margin-bottom:.5rem}
.lp-wrap .au-events-title{font-family:var(--font-body);font-size:clamp(1.4rem,2.5vw,2rem);font-weight:700;color:#0b1f3a;margin-bottom:2rem}
.lp-wrap .au-events-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.lp-wrap .au-event-card{border:1px solid rgba(11,31,58,.07);border-radius:8px;overflow:hidden}
.lp-wrap .au-event-logo-wrap{background:var(--bg-soft);padding:1.5rem;display:flex;align-items:center;justify-content:center;min-height:100px}
.lp-wrap .au-event-logo-wrap img{max-height:52px;max-width:100%;object-fit:contain}
.lp-wrap .au-event-info{padding:1rem 1.25rem 1.25rem}
.lp-wrap .au-event-name{font-size:.95rem;font-weight:700;color:#0b1f3a;margin-bottom:.35rem}
.lp-wrap .au-event-meta{font-size:.78rem;color:var(--ink-3)}

/* ── Instagram section ── */
.lp-wrap .au-insta{padding:clamp(5rem,10vh,8rem) clamp(1.5rem,4vw,3.5rem);background:#fff;color:#0b1f3a}
.lp-wrap .au-insta-wrap{max-width:1400px;margin:0 auto}
.lp-wrap .au-insta-header{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:clamp(2rem,4vw,3rem)}
.lp-wrap .au-insta-eyebrow{display:flex;align-items:center;gap:.5rem;font-size:.72rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--gold-dark);margin-bottom:.5rem}
.lp-wrap .au-insta-eyebrow svg{width:16px;height:16px;flex-shrink:0}
.lp-wrap .au-insta-title{font-family:var(--font-body);font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;letter-spacing:-.02em;line-height:1.1;color:#0b1f3a}
.lp-wrap .au-insta-title em{font-style:normal;color:var(--gold-dark)}
.lp-wrap .au-insta-follow{align-self:flex-start;margin-top:.5rem}
.lp-wrap .au-insta-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:4px}
.lp-wrap .au-insta-tile{aspect-ratio:1/1;overflow:hidden;position:relative;display:block}
.lp-wrap .au-insta-tile img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .5s}
.lp-wrap .au-insta-tile:hover img{transform:scale(1.08)}
.lp-wrap .au-insta-overlay{position:absolute;inset:0;background:rgba(11,31,58,.55);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity .3s}
.lp-wrap .au-insta-overlay svg{width:28px;height:28px;color:#fff}
.lp-wrap .au-insta-tile:hover .au-insta-overlay{opacity:1}

/* ── CTA section ── */
.lp-wrap .au-cta{background:#ffffff;color:#0b1f3a;padding:clamp(6rem,12vh,12rem) clamp(1.5rem,4vw,3.5rem);text-align:center;position:relative;overflow:hidden;border-top:1px solid rgba(11,31,58,.06)}
.lp-wrap .au-cta-line{width:1px;height:96px;background:linear-gradient(to bottom,transparent,var(--gold));margin:0 auto 3rem;opacity:.4}
.lp-wrap .au-cta-title{font-family:var(--font-body);font-size:clamp(2.5rem,6vw,5rem);font-weight:700;letter-spacing:-.04em;line-height:.95;margin-bottom:2rem;color:#0b1f3a}
.lp-wrap .au-cta-title em{font-style:normal;color:var(--gold-dark)}
.lp-wrap .au-cta-desc{font-size:clamp(1rem,2vw,1.3rem);color:var(--ink-2);max-width:700px;margin:0 auto 3rem;line-height:1.6;font-weight:400}
.lp-wrap .au-cta-actions{display:flex;gap:1.5rem;justify-content:center;flex-wrap:wrap}

/* ── Extra responsive ── */
@media(max-width:900px){
  .lp-wrap .au-news-grid{grid-template-columns:1fr}
  .lp-wrap .au-events-grid{grid-template-columns:1fr}
  .lp-wrap .au-insta-grid{grid-template-columns:repeat(3,1fr)}
  .lp-wrap .au-insta-header{flex-direction:column;align-items:flex-start}
  .lp-wrap .au-news-header{flex-direction:column;align-items:flex-start}
}
@media(max-width:480px){
  .lp-wrap .au-insta-grid{grid-template-columns:repeat(2,1fr)}
  .lp-wrap .au-cta-actions{flex-direction:column;align-items:center}
}

/* ── Reveal animation ── */
.lp-wrap [data-reveal]{opacity:0;transform:translateY(22px);transition:opacity .9s var(--ease),transform .9s var(--ease)}
.lp-wrap [data-reveal].in{opacity:1;transform:none}

/* ── Responsive ── */
@media(max-width:960px){
  .lp-wrap .section{padding:4rem 1.4rem}
  .lp-wrap .founder-grid{grid-template-columns:1fr;gap:3rem}
  .lp-wrap .founder-portrait{max-width:360px;margin:0 auto}
  .lp-wrap .lp-grid--3{grid-template-columns:repeat(2,1fr)}
  .lp-wrap .hero-inner{padding:6rem 1.4rem 4rem}
  .lp-wrap .hero-title{font-size:clamp(2rem,8vw,3rem)}
  .lp-modal-body{max-height:92vh}
  .lp-modal-thumb{width:68px;height:68px}
}
@media(max-width:600px){
  .lp-wrap .lp-grid--3,.lp-wrap .lp-grid--2{grid-template-columns:1fr}
  .lp-wrap .hero-mark{display:none}
}
</style>

<div class="lp-wrap" data-card="parchment">

<!-- ── Hero ── -->
<section class="hero" id="lp-hero">
  <div class="hero-media">
    <img src="<?php echo $bd; ?>" alt="" aria-hidden="true">
  </div>
  <div class="hero-inner">
    <span class="eyebrow" data-reveal>Leadership</span>
    <h1 class="hero-title" data-reveal>Leading with <em>Transparency,</em><br>Growing with <em>Integrity.</em></h1>
    <p class="hero-sub" data-reveal>Our leadership team is defined by a commitment to robust corporate governance and long-term value creation. We believe that sustainable growth is only possible when technical excellence is paired with ethical transparency. At Umang Boards, we lead by example—fostering a culture of accountability that ensures we remain a trusted partner to the global power industry.</p>
  </div>
</section>

<!-- ── Chairman's Message ── -->
<section class="section founder" id="lp-chairman">
  <div class="section-wrap founder-grid">
    <div class="founder-text" data-reveal>
      <div class="sec-eyebrow">From the Chairman</div>
      <div style="position:relative">
        <span class="quote-glyph" aria-hidden="true">"</span>
        <p class="founder-lead">Driven by a vision to power the <em>world's electric future,</em> we remain deeply committed to the Make-in-India initiative.</p>
      </div>
      <p class="founder-body">Under Mr. Anoop Kumar Dhanuka's stewardship, Umang Boards has evolved from a regional supplier into a global player, serving customers across multiple continents. The Company now supplies critical insulation solutions—including high-performance pressboards, precision-machined components, moulded systems, and winding wires—to leading transformer manufacturers worldwide, with technical capabilities extending to 1200 kV class applications.</p>
      <div class="founder-sig">
        <span class="founder-sig-rule"></span>
        <div>
          <div class="founder-sig-name">Mr. Anoop Kumar Dhanuka</div>
          <div class="founder-sig-role">Chairman &amp; Managing Director</div>
        </div>
      </div>
    </div>
    <div class="founder-portrait">
      <div class="frame"></div>
      <div class="photo">
        <img src="<?php echo $ldr; ?>AnoopKumarDhanuka.jpg" alt="Mr. Anoop Kumar Dhanuka, Chairman &amp; Managing Director">
      </div>
      <div class="tag">Since <em>1999</em></div>
    </div>
  </div>
</section>

<!-- ── Meet Our Leadership ── -->
<section class="section visionaries" id="lp-leadership">
  <div class="section-wrap">

    <div class="vis-head" data-reveal>
      <div class="sec-eyebrow">Meet Our Leadership</div>
      <h2 class="sec-title">Board of <em>Directors</em> &amp; Personnel</h2>
    </div>

    <div class="tabs" role="tablist" id="lpTabs">
      <button class="tab is-active" data-tab="exec" role="tab">Board of Directors<span class="tab-count">6</span></button>
      <button class="tab" data-tab="kmp" role="tab">Key Managerial Personnel<span class="tab-count">3</span></button>
      <button class="tab" data-tab="sen" role="tab">Senior Management<span class="tab-count">2</span></button>
      <span class="tab-indicator" id="lpTabInd"></span>
    </div>

    <!-- Board of Directors -->
    <div class="panel is-active" data-panel="exec">
      <div class="lp-grid lp-grid--3">

        <?php
        $board_members = ['anoop','alok','umang','dhruv','devendra','avindar'];
        foreach ( $board_members as $key ) :
          $p = $people[ $key ];
          $initials = preg_replace('/^M[rs]\.\s*/u','', $p['name']);
          $parts = preg_split('/\s+/', $initials);
          $init = strtoupper( substr($parts[0],0,1) . (isset($parts[1]) ? substr($parts[1],0,1) : '') );
        ?>
        <article class="person" data-person="<?php echo esc_attr($key); ?>">
          <div class="person-photo<?php echo $p['photo'] ? '' : ' person-photo--empty'; ?>">
            <?php if ( $p['photo'] ) : ?>
              <img src="<?php echo esc_url($p['photo']); ?>" alt="<?php echo esc_attr($p['name']); ?>">
            <?php else : ?>
              <span class="init"><?php echo esc_html($init); ?></span>
            <?php endif; ?>
          </div>
          <div class="person-cap">
            <h3 class="person-name"><?php echo esc_html($p['name']); ?></h3>
            <div class="person-role"><?php echo esc_html($p['role']); ?></div>
            <div class="person-more">View Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
          </div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- KMP -->
    <div class="panel" data-panel="kmp">
      <div class="lp-grid lp-grid--3">

        <?php
        $kmp_members = ['manan','mayank','ayush'];
        foreach ( $kmp_members as $key ) :
          $p = $people[ $key ];
          $initials = preg_replace('/^M[rs]\.\s*/u','', $p['name']);
          $parts = preg_split('/\s+/', $initials);
          $init = strtoupper( substr($parts[0],0,1) . (isset($parts[1]) ? substr($parts[1],0,1) : '') );
        ?>
        <article class="person" data-person="<?php echo esc_attr($key); ?>">
          <div class="person-photo person-photo--empty">
            <span class="init"><?php echo esc_html($init); ?></span>
          </div>
          <div class="person-cap">
            <h3 class="person-name"><?php echo esc_html($p['name']); ?></h3>
            <div class="person-role"><?php echo esc_html($p['role']); ?></div>
            <div class="person-more">View Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
          </div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- Senior Management -->
    <div class="panel" data-panel="sen">
      <div class="lp-grid lp-grid--3">

        <?php
        $senior_members = ['rajeshwaran','gopal'];
        foreach ( $senior_members as $key ) :
          $p = $people[ $key ];
          $initials = preg_replace('/^M[rs]\.\s*/u','', $p['name']);
          $parts = preg_split('/\s+/', $initials);
          $init = strtoupper( substr($parts[0],0,1) . (isset($parts[1]) ? substr($parts[1],0,1) : '') );
        ?>
        <article class="person" data-person="<?php echo esc_attr($key); ?>">
          <div class="person-photo person-photo--empty">
            <span class="init"><?php echo esc_html($init); ?></span>
          </div>
          <div class="person-cap">
            <h3 class="person-name"><?php echo esc_html($p['name']); ?></h3>
            <div class="person-role"><?php echo esc_html($p['role']); ?></div>
            <div class="person-more">View Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></div>
          </div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>

  </div>
</section>

<!-- ── Latest News ── -->
<section class="au-news" id="lpNews">
  <div class="au-news-wrap">
    <div class="au-news-header">
      <div>
        <div class="au-news-eyebrow">Media &amp; News</div>
        <h2 class="au-news-title">Our Latest<br><em>Updates</em></h2>
      </div>
      <a href="<?php echo home_url('/newsroom'); ?>" class="btn-outline">View All</a>
    </div>
    <div class="au-news-grid">
      <article class="au-news-card">
        <div class="au-news-card-img-wrap">
          <span class="au-news-badge">Milestone</span>
          <img src="<?php echo esc_url($uri); ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 400 KV Approval" loading="lazy">
        </div>
        <div class="au-news-card-body">
          <h3 class="au-news-card-title">Power Grid Corporation India Ltd &mdash; 400 KV Class Approval</h3>
          <p class="au-news-card-excerpt">Approved by PGCIL for supply of pre-compressed pressboard, laminated pressboard and machined &amp; moulded components for up to 400 KV class rating transformers.</p>
          <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </article>
      <article class="au-news-card">
        <div class="au-news-card-img-wrap">
          <span class="au-news-badge">Rating</span>
          <img src="<?php echo esc_url($uri); ?>/assets/images/news-crisil-rating.jpg" alt="CRISIL BBB Rating" loading="lazy">
        </div>
        <div class="au-news-card-body">
          <h3 class="au-news-card-title">CRISIL BBB Investment Grade Rating Achieved</h3>
          <p class="au-news-card-excerpt">We are now BBB rated by CRISIL &mdash; reflecting our strong financial position and creditworthiness in the Indian power sector market.</p>
          <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </article>
      <article class="au-news-card">
        <div class="au-news-card-img-wrap">
          <span class="au-news-badge">Recognition</span>
          <img src="<?php echo esc_url($uri); ?>/assets/images/news-export-house.jpg" alt="Star Export House" loading="lazy">
        </div>
        <div class="au-news-card-body">
          <h3 class="au-news-card-title">One Star Export House Certification by DGFT</h3>
          <p class="au-news-card-excerpt">Honoured with the prestigious One Star Export House Certificate by the Directorate General of Foreign Trade, Government of India. Valid until March 2028.</p>
          <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ── Upcoming Events ── -->
<section class="au-events" id="lpEvents">
  <div class="au-events-wrap">
    <div class="au-events-inner">
      <div class="au-events-eyebrow">Upcoming Events</div>
      <h2 class="au-events-title">Connect With Us</h2>
      <div class="au-events-grid">
        <div class="au-event-card">
          <div class="au-event-logo-wrap">
            <img src="<?php echo esc_url($uri); ?>/assets/images/event-messe-dusseldorf.png" alt="Messe Dusseldorf" loading="lazy">
          </div>
          <div class="au-event-info">
            <h3 class="au-event-name">Messe Dusseldorf</h3>
            <p class="au-event-meta">13&ndash;17 Apr 2026 &middot; Booth C82-5</p>
          </div>
        </div>
        <div class="au-event-card">
          <div class="au-event-logo-wrap">
            <img src="<?php echo esc_url($uri); ?>/assets/images/event-cwieme-berlin.png" alt="CWIEME Berlin" loading="lazy">
          </div>
          <div class="au-event-info">
            <h3 class="au-event-name">CWIEME Berlin</h3>
            <p class="au-event-meta">19&ndash;21 May 2026 &middot; Booth 27A50</p>
          </div>
        </div>
        <div class="au-event-card">
          <div class="au-event-logo-wrap">
            <img src="<?php echo esc_url($uri); ?>/assets/images/event-elecrama.png" alt="ELECRAMA 2027" loading="lazy">
          </div>
          <div class="au-event-info">
            <h3 class="au-event-name">ELECRAMA 2027</h3>
            <p class="au-event-meta">20&ndash;24 Feb 2027 &middot; 17th Edition</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── Instagram Feed ── -->
<section class="au-insta" id="lpInsta">
  <div class="au-insta-wrap">
    <div class="au-insta-header">
      <div>
        <div class="au-insta-eyebrow">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          @umangboardslimited
        </div>
        <h2 class="au-insta-title">Follow Us on <em>Instagram</em></h2>
      </div>
      <a href="https://instagram.com/umangboardslimited" target="_blank" rel="noopener" class="au-insta-follow btn-outline">Follow Us</a>
    </div>
    <?php if ( shortcode_exists('instagram-feed') ) : ?>
      <?php echo do_shortcode('[instagram-feed num=6 cols=6 showheader=false showbutton=false showfollow=false]'); ?>
    <?php else : ?>
    <div class="au-insta-grid">
      <?php
      $insta_imgs = [
        ['factory-aerial-drone.jpg','Manufacturing Excellence'],
        ['facility-aerial.jpg','Our Facility'],
        ['product-transformer-insulation.jpg','Transformer Insulation'],
        ['product-winding-wire.jpg','Winding Wires'],
        ['boardroom.jpg','Leadership'],
        ['app-power-transformers.jpg','Power Transformers'],
      ];
      foreach ($insta_imgs as $img) : ?>
      <a href="https://instagram.com/umangboardslimited" target="_blank" rel="noopener" class="au-insta-tile">
        <img src="<?php echo esc_url($uri); ?>/assets/images/<?php echo $img[0]; ?>" alt="<?php echo esc_attr($img[1]); ?>" loading="lazy">
        <div class="au-insta-overlay">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- ── CTA ── -->
<section class="au-cta" id="lpCTA">
  <div class="au-cta-line"></div>
  <h2 class="au-cta-title">POWERING THE<br><em>NEXT GENERATION</em></h2>
  <p class="au-cta-desc">Explore our products, meet our team, or get in touch with our sales team for product inquiries and partnership opportunities.</p>
  <div class="au-cta-actions">
    <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">Partner With Us</a>
    <a href="<?php echo home_url('/company-history'); ?>" class="btn-outline">View Heritage</a>
  </div>
</section>

<!-- ── Modal ── -->
<div class="lp-modal-scrim" id="lpModal" role="dialog" aria-modal="true">
  <div class="lp-modal">
    <button class="lp-modal-close" id="lpModalClose" aria-label="Close">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="lp-modal-body">
      <div class="lp-modal-head">
        <div class="lp-modal-thumb" id="lpMThumb"></div>
        <div>
          <h3 class="lp-modal-name" id="lpMName"></h3>
          <div class="lp-modal-role" id="lpMRole"></div>
        </div>
      </div>
      <div class="lp-modal-rule"></div>
      <div class="lp-modal-bio" id="lpMBio"></div>
      <div class="lp-modal-directorships" id="lpMDir" style="display:none">
        <div class="lp-mdir-head">Other Directorships &amp; Advisory Roles</div>
        <ul class="lp-mdir-list" id="lpMDirList"></ul>
      </div>
      <div class="lp-modal-meta" id="lpMMeta"></div>
      <a class="lp-modal-linkedin" id="lpMLinkedIn" href="#" target="_blank" rel="noopener" style="display:none">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
        View on LinkedIn
      </a>
    </div>
  </div>
</div>

</div><!-- /.lp-wrap -->

<!-- People data -->
<script id="lpPeopleData" type="application/json">
<?php echo json_encode( $people, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ); ?>
</script>

<script>
document.addEventListener('DOMContentLoaded', function(){
(function(){
  var ease = 'cubic-bezier(.16,1,.3,1)';

  /* ── Tabs ── */
  var tabs   = document.querySelectorAll('#lpTabs .tab');
  var panels = document.querySelectorAll('.lp-wrap .panel');
  var tabInd = document.getElementById('lpTabInd');

  function posInd(t){
    var r  = t.getBoundingClientRect();
    var pr = t.parentElement.getBoundingClientRect();
    tabInd.style.width = r.width + 'px';
    tabInd.style.left  = (r.left - pr.left) + 'px';
  }
  function activateTab(key){
    tabs.forEach(function(t){ t.classList.toggle('is-active', t.dataset.tab === key); });
    panels.forEach(function(p){ p.classList.toggle('is-active', p.dataset.panel === key); });
    var at = document.querySelector('#lpTabs .tab.is-active');
    if(at) posInd(at);
    document.querySelectorAll('.panel.is-active [data-reveal]').forEach(function(el){ el.classList.add('in'); });
  }
  tabs.forEach(function(t){ t.addEventListener('click', function(){ activateTab(t.dataset.tab); }); });
  window.addEventListener('load',   function(){ var at=document.querySelector('#lpTabs .tab.is-active'); if(at) posInd(at); });
  window.addEventListener('resize', function(){ var at=document.querySelector('#lpTabs .tab.is-active'); if(at) posInd(at); });

  /* ── Reveal on scroll ── */
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, {threshold:.12});
  document.querySelectorAll('.lp-wrap [data-reveal]').forEach(function(el){ io.observe(el); });

  /* ── Modal ── */
  var peopleData = JSON.parse(document.getElementById('lpPeopleData').textContent);
  var modal      = document.getElementById('lpModal');
  var LI_SVG     = '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>';

  /* Inject LinkedIn badges */
  document.querySelectorAll('.lp-wrap [data-person]').forEach(function(card){
    var p = peopleData[card.dataset.person];
    if(p && p.linkedin){
      var photo = card.querySelector('.person-photo');
      if(photo && !photo.querySelector('.person-li')){
        var a = document.createElement('a');
        a.className='person-li'; a.href=p.linkedin; a.target='_blank'; a.rel='noopener';
        a.setAttribute('aria-label','LinkedIn — '+p.name);
        a.innerHTML = LI_SVG;
        a.addEventListener('click',function(e){e.stopPropagation();});
        photo.appendChild(a);
      }
    }
  });

  function openModal(key){
    var p = peopleData[key]; if(!p) return;
    var thumb = document.getElementById('lpMThumb');
    if(p.photo){
      thumb.classList.remove('lp-modal-thumb--empty');
      thumb.innerHTML = '<img src="'+p.photo+'" alt="'+p.name+'">';
    } else {
      thumb.classList.add('lp-modal-thumb--empty');
      var nm = p.name.replace(/^M[rs]\.\s*/,'').split(/\s+/).map(function(s){return s[0]||'';}).slice(0,2).join('').toUpperCase();
      thumb.innerHTML = nm;
    }
    document.getElementById('lpMName').textContent = p.name;
    document.getElementById('lpMRole').textContent = p.role;
    var bioArr = (p.bio && p.bio.length) ? p.bio : ['<em style="opacity:.6">Detailed biography coming soon.</em>'];
    document.getElementById('lpMBio').innerHTML = bioArr.map(function(t){return '<p>'+t+'</p>';}).join('');
    document.getElementById('lpMMeta').innerHTML = (p.meta||[]).map(function(t){return '<span class="lp-meta-chip">'+t+'</span>';}).join('');
    var dirBlock = document.getElementById('lpMDir');
    var dirList  = document.getElementById('lpMDirList');
    if(p.directorships && p.directorships.length){
      dirList.innerHTML = p.directorships.map(function(t){return '<li>'+t+'</li>';}).join('');
      dirBlock.style.display='';
    } else {
      dirBlock.style.display='none';
    }
    var li = document.getElementById('lpMLinkedIn');
    if(p.linkedin){ li.href=p.linkedin; li.style.display='inline-flex'; }
    else { li.style.display='none'; }
    modal.classList.add('open');
    document.body.style.overflow='hidden';
  }
  function closeModal(){ modal.classList.remove('open'); document.body.style.overflow=''; }

  document.querySelectorAll('.lp-wrap [data-person]').forEach(function(el){
    el.addEventListener('click', function(){ openModal(el.dataset.person); });
  });
  document.getElementById('lpModalClose').addEventListener('click', closeModal);
  modal.addEventListener('click', function(e){ if(e.target===modal) closeModal(); });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeModal(); });

})();
}); // DOMContentLoaded
</script>

<?php get_footer(); ?>
