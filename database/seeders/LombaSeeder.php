<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LombaSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('lombas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert all the lomba data with cleaned descriptions
        DB::table('lombas')->insert([
            ['id_lomba' => 1, 'nama_lomba' => 'Ruangguru Mathematics and Logic Championship (RMC) 2025', 'deskripsi' => 'Lomba Matematika untuk TK-SD dari Ruangguru!🔥

Buat kamu yang jago matematika, suka tantangan logika, atau ahli sempoa — Ruangguru Mathematics and Logic Championship (RMC) 2025 MASIH BUKA PENDAFTARAN! Kompetisi nasional yang diselenggarakan oleh Math Champs dan Kalananti by Ruangguru.

3 kategori yang bisa kamu ikuti:
📊 Mathematics
🧠 Logic
🧮 Sempoa

Kompetisi dibuka untuk 2 jenjang:
🔸 Lower Group : TK – 3 SD
🔸 Upper Group : 4 – 6 SD

💰 Biaya registrasi per kategori sudah masuk Gelombang II Rp100.000 (26 Mei - 10 Juni). Segera daftar sebelum memasuki Gelombang III Rp125.000 (11 - 26 Juni)

Yuk, langsung daftar di s.id/ruangguru-mc because #ChampionsStartHere 😎

#Ruangguru #Kalananti #MathChamps #ClashofChampions #KursusMatematika #kursusmatematikaonline #coc #Sempoa #AOC #hitungcepat #lombamatematika #lombalogika #infolomba', 'tgl_lomba' => '2025-05-26', 'lokasi' => 'Offline', 'link_daftar' => 'https://www.ruangguru.com/event/kompetisi-matematika', 'gambar' => 'uploads/1750083607_ruangguru-mathematics-and-logic-championship-rmc-2025-1.jpeg', 'penyelenggara_lomba' => 'Kalananti dan Math Champs by Ruangguru', 'updated_at' => '2025-06-16 22:03:59', 'status' => 'available', 'id_bidang' => 14, 'kategori_peserta' => 'SD', 'created_at' => '2025-06-16 21:09:00'],
            
            ['id_lomba' => 13, 'nama_lomba' => 'ECODAYS 2025', 'deskripsi' => '🚨 OPEN REGISTRATION – ECODAYS 2025 🚨

Ready to write with impact or race with innovation?
ENASCO and ICHEDECE are officially back and calling for future changemakers like you! 💥

💡 Theme: "Every Step Counts in Creating a Zero Emission Future"

📚 ENASCO – Ecodays National Essay Competition
📅 Timeline:
• Registration & Submission: May 29-July 23, 2025
• Finalist Announcement: August 16, 2025
• Final Stage: October 3-4, 2025

🏎 ICHEDECE – Indonesia Chemical Reaction Car Development Challenge
📅 Timeline:
• Registration & Submission: May 29-July 9, 2025
• Finalist Announcement: July 31, 2025
• Final Stage: October 3-4, 2025

🔗 Register & Get Full Info:
👉 https://linktr.ee/ecodaysuns

So what are you waiting for?
Come and be part of ECODAYS 2025, where your ideas and innovations help shape a zero-emission future! 🔥

#ECODAYS2025
#ENASCO
#ICHEDECE
#SNTK2025

📲 FIND US ON:
Instagram: @ecodaysuns
TikTok: @ecodaysuns
Line: @218qvlm
Facebook: Ecodays UNS
YouTube: Ecodays UNS', 'tgl_lomba' => '2025-05-29', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://linktr.ee/ecodaysuns', 'gambar' => 'uploads/1750085330_ecodays-2025-0.png', 'penyelenggara_lomba' => 'HMTK FT UNS', 'updated_at' => '2025-06-16 22:05:21', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 21:48:50'],
            
            ['id_lomba' => 14, 'nama_lomba' => 'IRDO 2025 (International Robot Design Olympiad)', 'deskripsi' => '🚨 [OPEN REGISTRATION] 🚨
INTERNATIONAL ROBOT DESIGN OLYMPIAD 2025 IS HERE!

Hai Generasi Muda!
Saatnya kamu learn, build, and innovate lewat karya robotik terbaikmu!
Buktikan kalau kamu layak jadi bagian dari future pioneers di ajang robotik internasional tahun ini!

✨ Kabar baiknya, acara ini juga didukung penuh oleh Dinas Pendidikan dan Kebudayaan Provinsi Lampung, loh! Jadi makin solid dan kredibel!

---

📅 Pendaftaran: 12 Mei – 22 Juni 2025
🏁 Hari Lomba: 25 Juni 2025
📍 Lokasi: Universitas Bandar Lampung

---

Kenapa kamu wajib ikut?
✅ Ajang tingkat internasional
✅ Wadah eksplorasi ide dan teknologi
✅ Tambah relasi, pengalaman, dan portofolio
✅ Hadiah menarik & sertifikat prestisius
✅ Didukung oleh Dinas Pendidikan & Kebudayaan Provinsi Lampung

---

🎯 Daftar sekarang di:
🌐 https://irdo.ubl.ac.id

📞 Info lebih lanjut:
📱 Wiman: +62 838-9308-2405
📱 Kevin: +62 882-9123-7471

---

Learn today, Build together, and Innovate for tomorrow.
Let\'s shape the future with robotics!

#IRDO2025 #LearnBuildInnovate #FuturePioneers
#RobotDesign #capstoneproject #Innovation
#InternationalRobotDesignOlympiad2025 #UBL #kampusubl
#DinasPendidikanLampung #DisdikbudLampung #RoboticsSupport', 'tgl_lomba' => '2025-05-12', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://irdo.ubl.ac.id', 'gambar' => 'uploads/1750086755_irdo-2025-international-robot-design-olympiad-66.jpeg', 'penyelenggara_lomba' => 'UKM Robotic Universitas Bandar Lampung', 'updated_at' => '2025-06-16 22:12:35', 'status' => 'available', 'id_bidang' => 21, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-16 22:09:21'],
            
            ['id_lomba' => 15, 'nama_lomba' => 'T-Ball Cup Vol.20', 'deskripsi' => '𝐓𝐁𝐀𝐋𝐋 𝐂𝐔𝐏 𝐕𝐎𝐋 𝟐𝟎!!🧭
"𝐓𝐈𝐌𝐄\'𝐒 𝐔𝐏, 𝐆𝐀𝐌𝐄 𝐎𝐍"

Hi T-Cuppers.. This journey through time brings a whole new vibe — and something fresh is joining the adventure🌀.

Push your 𝗹𝗶𝗺𝗶𝘁𝘀 🚀 and take your place among the 𝗴𝗿𝗲𝗮𝘁𝘀 👑 This is the moment–𝗴𝗼 𝗴𝗿𝗮𝗯 𝗶𝘁❕
-------------------*𓂅 ₊𓂃

𝗢𝗽𝗲𝗻 𝗥𝗲𝗴𝗶𝘀𝘁𝗿𝗮𝘁𝗶𝗼𝗻!
𝑭𝑼𝑻𝑺𝑨𝑳 𝑷𝑼𝑻𝑹𝑨 [𝑺𝑴𝑷/𝑺𝑴𝑨]⚽
₊༄ Rp. 300.000 + Rp. 50.000 (WO)
☎️ arsya : SMP(+62 812-8604-0759)
☎️ calyssa : SMA (+62 818-0713-6763)

𝑩𝑨𝑺𝑲𝑬𝑻 𝑷𝑼𝑻𝑹𝑨 [𝑺𝑴𝑷/𝑺𝑴𝑨]🏀
.༄ Rp. 300.000 + Rp. 50.000 (WO)
☎️ nafisha (+62 895-1394-1969)

𝑺𝑶𝑳𝑶 𝑽𝑶𝑪𝑨𝑳🎤
₊༄ Rp. 180.000 + Rp. 50.000
☎️ vilzha (+62 895-6227-10637)

𝑫𝑨𝑵𝑪𝑬 𝑪𝑶𝑴𝑷𝑬𝑻𝑰𝑻𝑰𝑶𝑵💃🏽
₊༄ Rp. 250.000 + Rp. 50.000
☎️ syifa (+62 812-1924-4801)

📆Date : 
August 24, 30, 31 and September 6, 7

🏆𝙏𝙊𝙏𝘼𝙇 𝙋𝙍𝙄𝙕𝙀 𝙋𝙊𝙊𝙇 :
 𝙍𝙥.𝟭𝟵.𝟬𝟬𝟬.𝟬𝟬𝟬

📌Close Registration :
7 agustus 2025
-------------------*𓂅 ₊𓂃

Travel through time, battle through eras—Tball Cup 20 is your next stop. 
Join us now!
click here : https://tball.carrd.co/

Chek us out in📧
Tiktok & Instagram : @tballcup
#tballcup20 
#timetravel 
#joinusnow', 'tgl_lomba' => '2025-05-01', 'lokasi' => 'Offline', 'link_daftar' => 'https://tball.carrd.co/', 'gambar' => 'uploads/1750086947_tball-cup-vol20-99.png', 'penyelenggara_lomba' => 'SMA Tunas Jakasampurna', 'updated_at' => '2025-06-16 22:15:47', 'status' => 'available', 'id_bidang' => 26, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-16 22:15:47'],

            ['id_lomba' => 16, 'nama_lomba' => 'Festival Bahasa dan Budaya', 'deskripsi' => '📢 UKM Studi Pengembangan Bahasa Asing Proudly present 📢

🎉 FESTIVAL BAHASA DAN BUDAYA 2025 🎉
📍 UIN Sunan Kalijaga Yogyakarta
📅 18–20 September 2025

✨ “Preserving Culture and Language, Building a Valuable Intellectual Civilization”

🌟 Hadir lagi dengan semangat baru! Yuk jadi bagian dari perayaan budaya & bahasa terbesar di UINSUKA!

🗓 Pendaftaran:
* Early Bird: 1–22 Juni
* Normal: 23 Juni–19 Juli
* Last Phase: 20 Juli–12 Agustus

📲 Daftar & unduh guidebook:
🔗 https://s.id/fbbuinsuka

📧 uinsukafbb@gmail.com
📸 @festivalbahasabudaya | @spbauinsk
▶️ YouTube: SPBA TV

#FestivalBahasadanBudaya2025 #Spbauinsk #UINSUKA #MajuBerbahasa #MudaBerbudaya', 'tgl_lomba' => '2025-06-01', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://s.id/fbbuinsuka', 'gambar' => 'uploads/1750087583_festival-bahasa-dan-budaya-6.jpeg', 'penyelenggara_lomba' => 'UKM SPBA UIN SUKA', 'updated_at' => '2025-06-16 22:26:23', 'status' => 'available', 'id_bidang' => 12, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 22:26:23'],
            
            ['id_lomba' => 17, 'nama_lomba' => 'Industrial Engineering Competition 2025', 'deskripsi' => '⚙ [Industrial Engineering Competition 2025 – SPECIAL PRICE GELOMBANG 2!🤩] ⚙ 
Diselenggarakan oleh Himpunan Mahasiswa Teknik Industri (HMTI) UNJAYA
🧠⚙ Subtema:
1. SDG\'s 
2. Ergonomic and Occupational Health & Safety (OHS) |Ergonomi dan K3
3. Green Manufacturing 
4. Smart Supply  Chain Optimization |Pengoptimalan Rantai Pasok Berbasis Teknologi Cerdas

Bersiaplah jadi bagian dari kompetisi paling bergengsi tahun ini!🏆

📝 Lomba Desain Poster & Esai Nasional tingkat SMA/ SMK dan Mahasiswa/i (D3/D4/S1)
Tuangkan gagasan inovatifmu terkait teknologi, kecerdasan buatan (AI) , IoT (Internet of Things) dan peran Gen Z dalam membentuk sistem cerdas untuk masa depan berkelanjutan.


⏰TIMELINE KARYA ESAI DAN POSTER
* Pendaftaran Gelombang I – Senin, 19 Mei 2025 - Jumat, 30 Mei 2025
* Pendaftaran Gelombang II – Minggu, 1 Juni 2025 - Minggu, 22 Juni 2025
* Pelaksanaan dan Pengumpulan Esai dan Desain Poster – Minggu, 22 Juni 2025 - Minggu, 29 Juni 2025
* Pengkoreksian Hasil Esai dan Desain Poster oleh juri– Senin, 30 Juni 2025 - Selasa, 1 Juli 2025
* Pengumuman Finalis Esai – Rabu, 2 Juli 2025
* Technical Meeting (TM) Finalis Esai – Kamis, 3 Juli 2025
* Presentasi Finalis Esai – Sabtu, 5 Juli 2025
* Pengumuman Juara Esai dan Desain Poster – Minggu, 6 Juli 2025


📄 Link Panduan & Berkas Lomba:
https://bit.ly/Panduan_dan_berkas
🖊 Link Pendaftaran Poster & Esai:
https://bit.ly/PendaftaranIE-Competition2025

Contact Persons :
1. 0812-5482-3424 (Siti Nurhasanah)
2. 0821-3706-1938 (Sigit Arif Prasetyo)
3. 0838-7482-8308 (Ifvan Yoga Pratama)

🔗 Instagram: @hmti.unjaya
💡 Siapkan tim terbaikmu, kumpulkan ide terkuatmu, dan jadilah bagian dari transformasi masa depan!

#IEC2025 #HMTIUNJAYA #RekayasaAksiInovasi #FutsalYogyakarta #LKTINasional #infolomba #Mahasiswa #TeknikIndustriUNJAYA', 'tgl_lomba' => '2025-06-01', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/Panduan_dan_berkas', 'gambar' => 'uploads/1750087845_industrial-engineering-competition-2025-20.jpeg', 'penyelenggara_lomba' => 'HMTI UNJAYA', 'updated_at' => '2025-06-16 22:30:45', 'status' => 'available', 'id_bidang' => 18, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 22:30:45'],
            
            ['id_lomba' => 18, 'nama_lomba' => 'Lomba Poster Dies Natalis Ke-1', 'deskripsi' => '📢 PENGUMUMAN LOMBA POSTER TINGKAT SMA/SMK/MA & MAHASISWA NASIONAL 🖼️✨

Halo para mahasiswa dan siswa SMA/SMK/MA kreatif!
Dalam rangka memeriahkan Dies Natalis UNESA, akan diselenggarakan:

🎨 LOMBA POSTER NASIONAL 2025
📝 Tema: "Students for Tomorrow: Menyalakan Asa dan Merayakan Karya Bersama Kampus UNESA 5"

📆 Pendaftaran & pengumpulan karya: 7 Mei - 30 Juli 2025
📍Hasil Karya : Poster digital dan diserahkan secara online melalui gform yang disediakan.

🏆 Hadiah Juara 1,2,3 dan Juara Favorit per kategori SMA dan Mahasiswa. (Hadiah berupa uang tunai, Gift, sertifikat HKI dan sertifikat juara, serta pameran online dan offline)

📌 Daftar di sini: https://bit.ly/LombaPosterDiesNatalisKampus5
👉 Link guideline: https://bit.ly/guidelineposterunesa5
📱 Contact Person:
- Adhitya Amarulloh 089661142597
- Annisa Deny Setiawati 085735016077
Ayo, Tunjukkan kreativitas dan identitas kalian lewat karya poster terbaik kalian!! 🔥

Panitia Lomba Poster Nasional Kampus UNESA 5', 'tgl_lomba' => '2025-05-15', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/LombaPosterDiesNatalisKampus5', 'gambar' => 'uploads/1750088113_lomba-poster-dies-natalis-kampus-unesa-5-ke1-20.jpeg', 'penyelenggara_lomba' => 'Kampus UNESA 5', 'updated_at' => '2025-06-16 22:35:13', 'status' => 'available', 'id_bidang' => 18, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 22:35:13'],
            
            ['id_lomba' => 19, 'nama_lomba' => 'ICC (Indonesian Counseling Competition)', 'deskripsi' => '📢 INDONESIAN COUNSELING COMPETITION (ICC) 2025 IS COMING!

🌟 Mahasiswa BK, saatnya unjuk potensi dan berkontribusi untuk dunia konseling Indonesia! 🌟

🧠 TEMA:
“Penguatan Pemahaman Diri sebagai Strategi Membentuk Mahasiswa BK yang Tangguh, Adaptif, dan Peduli Sosial”

📌 JENIS PERLOMBAAN:
1.    📝 Lomba Essay
2.    🎨 Media Bimbingan dan Konseling
3.    🤝 Lomba Bimbingan Kelompok

📅 TIMELINE PENDAFTARAN:
Gelombang 1: 1 Juni – 15 Juni 2025
Gelombang 2: 16 Juni – 1 Juli 2025

💰 HTM:
Essay:
Gel 1: 25K | Gel 2: 35K
Media BK:
Gel 1: 25K | Gel 2: 35K
Bimbingan Kelompok:
Gel 1: 35K | Gel 2: 45K

📲 NARAHUBUNG:
📞 Anatia Dwi Kamila – 0822 6001 0419
📞 Inas Zahy Rana Kunanda – 0896 0936 8404

💳 PEMBAYARAN:
BRI – 401301027180539 a.n. Nurfaani Kusmawati
DANA – 08122210206 a.n. Nurfaani Kusmawati

🔗 Link Pendaftaran
Gelombang 1: https://bit.ly/FormulirPendaftaran_ICC2025_GEL_1
Gelombang 2: https://bit.ly/FormulirPendaftaran_ICC2025_GEL_2
🔗 Buku Panduan https://bit.ly/bukupanduanICC25
________________________________________
✨ Jadilah bagian dari generasi konselor masa depan yang tangguh, adaptif, dan peduli!
#ICC2025 #KompetisiBK #MahasiswaBKIndonesia #BKHebat #HMPSBKUAD #uad #klikuad #BimbinganDanKonseling #LombaBK2025 #EssayBK #MediaBK #BimbinganKelompok', 'tgl_lomba' => '2025-06-01', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/bukupanduanICC25', 'gambar' => 'uploads/1750088461_icc-indonesian-counselling-competition-72.jpeg', 'penyelenggara_lomba' => 'HMPS BK UAD', 'updated_at' => '2025-06-16 22:41:01', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 22:41:01'],
            
            ['id_lomba' => 20, 'nama_lomba' => 'PEKAN IT COMPETITION', 'deskripsi' => '[𝗣𝗘𝗞𝗔𝗡 𝗜𝗧 𝗖𝗢𝗠𝗣𝗘𝗧𝗜𝗧𝗜𝗢𝗡]
Saatnya kamu tunjukkan skill, kreativitas, dan logika pemrogramanmu lewat karya terbaik di ajang Pekan IT dengan tema besar “Empower The Future With Your Inovative Vision\" ! 💡💻

𝗕𝗜𝗔𝗬𝗔 𝗣𝗘𝗡𝗗𝗔𝗙𝗧𝗔𝗥𝗔𝗡: 50K

🧩 𝗖𝗮𝗯𝗮𝗻𝗴 𝗟𝗼𝗺𝗯𝗮:
Software Development
UI/UX Design
Competitive Programming

🏆 𝗛𝗮𝗱𝗶𝗮𝗵:
Juara 1: Uang Pembinaan + E-Certificate + Merchandise
Juara 2: Uang Pembinaan + E-Certificate + Merchandise
Juara 3: Uang Pembinaan + E-Certificate + Merchandise

📅 𝗧𝗶𝗺𝗲𝗹𝗶𝗻𝗲:
Pendaftaran & Pengumpulan Karya: 1 Juni - 30 Juni 2025
Penilaian Karya: 1 Juli - 5 Juli 2025
Pengumuman Finalis: 6 Juli 2025
Technical Meeting: 9 Juli 2025
Pelaksana Lomba: 12 Juli 2025
Pengumuman: 11 Agustus 2025

Pendaftaran: linktr.ee/pekan.it
Panduan Lomba: s.id/GuidebookPekanIT2025 

Contact Person: 
082199575791 (Inong)
088219956650 (Dede)

@pekanit_unsika

💬 Jangan lewatkan kesempatan ini! Ayo buktikan potensi IT-mu dan jadilah bagian dari solusi digital masa depan Indonesia! 🚀

#PekanIT2025
#HIMTIKA2025
#kabinetSinergis
#BersamaKitaJaya', 'tgl_lomba' => '2025-06-01', 'lokasi' => 'Online', 'link_daftar' => 'https://drive.google.com/file/d/1566w5ttaxu0ppA3-O1wnhX6v5paTwga3/view?usp=sharing', 'gambar' => 'uploads/1750088675_pekan-it-competition--16.jpeg', 'penyelenggara_lomba' => 'HIMTIKA UNSIKA', 'updated_at' => '2025-06-16 22:44:35', 'status' => 'available', 'id_bidang' => 11, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 22:44:35'],
            
            ['id_lomba' => 21, 'nama_lomba' => 'Lomba Poster Designo', 'deskripsi' => '✨[OPEN REGISTRATION]✨

LOMBA POSTER DESIGNO 2025 TINGKAT NASIONAL

Saatnya kamu unjuk kreativitas lewat karya visual terbaikmu! dan menangkan 
[ Piala + medali + Uang Pembinaan + Sertifikat! ]

Timeline:
Gel. 1: 25 Mei – 10 Juni 2025 
Gel. 2: 11 Juni – 25 Juni 2025 
Pengumpulan karya: 25 Juni – 2 Juli 2025

Subtema:
* Pendidikan
* Teknologi
* Sosial & Budaya
* Lingkungan
* Ekonomi

Link Pendaftaran:
https://forms.gle/xNKFDjLwUgQkLMsi9

Juknis Designo:
https://drive.google.com/drive/folders/1cgoV7lC2g4Y7ENb-BhEkG1ZGX_FFiUux

Contact Person:
Rizki: 082247736199
Ifaa: 082118441054

#Designo2025
#LombaPoster
#TingkatNasional
#HMBUINMALANG', 'tgl_lomba' => '2025-05-25', 'lokasi' => 'Online', 'link_daftar' => 'https://drive.google.com/drive/folders/1cgoV7lC2g4Y7ENb-BhEkG1ZGX_FFiUux', 'gambar' => 'uploads/1750088830_event-designo--27.jpeg', 'penyelenggara_lomba' => 'HMB UIN Malang', 'updated_at' => '2025-06-16 22:47:10', 'status' => 'available', 'id_bidang' => 18, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-16 22:47:10'],
            
            ['id_lomba' => 22, 'nama_lomba' => 'GLORICUP 2025', 'deskripsi' => '𝘾𝘼𝙇𝙇𝙄𝙉𝙂 𝘼𝙇𝙇 𝘾𝙊𝙈𝙋𝙀𝙏𝙄𝙏𝙊𝙍𝙎! 🔥
SMA GLOBAL MANDIRI PRESENTS:

Get ready to be part of 𝗚𝗟𝗢𝗥𝗜𝗖𝗨𝗣 2025 – 🏆🔥
📅 Save the Date: 19-21 Agustus 2025
📍 Location: Sekolah Global Mandiri Cibubur

What are you waiting for? Registration is Now Open! 💡👇🏻

https://forms.gle/24oTAU7QxhPsZ4AcA

Contact Us!
🏀 Basket – Timur 
(082112466672)
⚽ Mini Soccer – Edgar 
(082249805167)
🎮 FIFA – Bima 
(081292696636)
📱 Mobile Legends – Bagas 
(085210605331)
🗣️ Debate – Mercy 
(082113529126)
📖 Scientific Essay – Anin 
(081289805680)

Don’t miss out! Bring out your best players and we’ll see you there! 🚀🏆', 'tgl_lomba' => '2025-03-01', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://forms.gle/24oTAU7QxhPsZ4AcA', 'gambar' => 'uploads/1750088992_gloricup--81.jpeg', 'penyelenggara_lomba' => 'SMA GLOBAL MANDIRI', 'updated_at' => '2025-06-16 22:49:52', 'status' => 'available', 'id_bidang' => 13, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 22:49:52'],
            
            ['id_lomba' => 23, 'nama_lomba' => 'FACTCOUNT INFOGRAPHIC COMPETITION 2025', 'deskripsi' => '❗FACTCOUNT INFOGRAPHIC COMPETITION 2025❗

Hai, pelajar hebat Indonesia!
Sudah siap menantang dirimu di ajang infografis bergengsi bertema keuangan digital?
Yuk, daftarkan dirimu di Finance Accounting Contest Infographic Competition 2025 dalam rangka acara Accounting Week 2025 dengan tema:
‼️Pengaruh Uang Digital dalam Dunia Modern‼️

Pilih subtema favoritmu:
🔬 Ilmu Pengetahuan | ⚖️ Politik | 💰 Ekonomi | 🌍 Sosial Budaya | ♻️ Lingkungan

Catat tanggalnya!!
🆓 Gelombang 1 (GRATIS): 19 April – 12 Mei 2025 [EXTEND‼️]
💸 Gelombang 2 (Rp10.000): 13 Mei – 20 Juni 2025 [EXTEND‼️]

Reward
🥇 Juara 1: Rp500.000
🥈 Juara 2: Rp350.000
🥉 Juara 3: Rp200.000
🎗Juara Favorit: Rp100.000
✨E-sertifikat untuk semua peserta✨

[Link Pendaftaran: bit.ly/RegistFactCount2025]
Bingung? Tenang ada panduan lengkap, cek di bit.ly/FactCount2025

📞Contact Person:
Mafida: 0838-9626-5296
Rayyan: 0822-3120-2311

========================
#HimaksiUisi
#AkuntansiUisi
#SayaUisi
#ACCWEEKUISI2025
➖➖➖➖➖➖➖➖➖➖
Contact us at:
• Instagram : @accweek_2025
• Email : accweek.uisi@gmail.com', 'tgl_lomba' => '2025-05-13', 'lokasi' => 'Online', 'link_daftar' => 'https://docs.google.com/forms/d/e/1FAIpQLSdFDmNkV6d9AJ654lbCrt_neyOqgAA_SolSMCExgVEbONKR7g/viewform', 'gambar' => 'uploads/1750089269_factcount-infographic-competition-2025-49.jpeg', 'penyelenggara_lomba' => 'HIMAKSI UISI', 'updated_at' => '2025-06-16 22:54:29', 'status' => 'available', 'id_bidang' => 16, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 22:54:29'],
            
            ['id_lomba' => 24, 'nama_lomba' => 'CREACTIONFEST', 'deskripsi' => '[CREACTIONFEST 2025: KOMPETISI ESSAY NASIONAL!🏅]

Proudly present by BEM Unicimi.

Ayo, tunjukkan kemampuanmu dalam menulis essay dan menjadi bagian dari Creactionfest 2025! Kompetisi ini terbuka untuk umum yaa!

Terdapat 2 jalur pendaftaran untuk mengikuti kompetisi ini, yaitu:
• Reguler
• Exclusive

🏅benefit
- Medali Juara
- Uang pembinaan 
- E-sertifikat

📌Link Informasi dan registrasi
https://linktr.ee/creactionfest_bemunicimi

Instagram:
@bemunicimi
@creactionfest_bemunicimi

Narahubung:
- Sella: 087778028796
- Ma\'lufatul: 085924783294

#bemunicimi
#creactionfest_bemunicimi
#essay_nasional', 'tgl_lomba' => '2025-06-06', 'lokasi' => 'Online', 'link_daftar' => 'https://linktr.ee/creactionfest_bemunicimi', 'gambar' => 'uploads/1750089514_creactionfest-91.jpeg', 'penyelenggara_lomba' => 'BEM UNICIMI', 'updated_at' => '2025-06-16 22:58:34', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 22:58:34'],
            
            ['id_lomba' => 25, 'nama_lomba' => 'IFEST Primakara', 'deskripsi' => 'Assalamualaikum Wr. Wb
Haii Semuanya ✨
Gimana kabarnya hari ini?? Semoga sehat selalu dan tetap semangat menjalani hari yaa!

Nah, buat kalian yang punya bakat terpendam dan pengen eksplor sisi Islami kalian, kami dari Primakara Muslim Club 2025 mengadakan acara ISLAMIC FEST PRIMAKARA 2025.  IFEST Primakara 2025 ini bertema “Islamic Talent Hub: Festival Kompetisi, Wadah Eksplorasi Islami”

Yapp, kali ini kalian bisa ikut berbagai lomba seru yang penuh nilai Islami dan pastinya bikin pengalaman kalian makin berkesan!

Ada tiga lomba utama yang bisa kalian pilih lohhh, yaitu:
1. Lomba Dai ( Tingkat SD/Sederajat )
2. Lomba Kaligrafi ( Tingkat SMP/Sederajat )
3. Lomba Menyanyi Pop Religi (Tingkat SMA/Sederajat)

Ajang ini terbuka untuk kalian semua dari berbagai jenjang,dengan *Biaya Pendaftaran* yang super terjangkau:
1. Tingkat SD & SMP: Rp10.000
2. Tingkat SMA/SMK/MA :Rp15.000      

📅 Waktu Pelaksanaan :
Hari/Tanggal : Minggu, 20 Juli 2025
Waktu : 08.00 WITA - Selesai
Tempat: Aula Lt.4 Primakara University

🔗 Link Pendaftaran:
1. Lomba Da’i Cilik: https://bit.ly/Pendaftaran_LombaDaiCilik_IFEST2025 
2. Lomba Kaligrafi: https://bit.ly/Pendaftaran_LombaKaligrafi_IFEST2025 
3. Lomba Menyanyi Pop Religi: https://bit.ly/Pendaftaran_LombaPopReligi_IFEST2025 

🎁 Benefit yang kalian dapat:
- Pengalaman seru & Islami
- Relasi
- Hadiah menarik
- Snack
- E-Sertifikat

Sebelum mendaftar diharapkan untuk melihat guidebook terlebih dahulu, agar mengetahui S&K dari masing-masing lomba, Guidebook dapat diakses melalui link dibawah ini:


https://bit.ly/Guidebook_IFESTPRIMAKARA2025

📞 Contact Person:
Silvi: 08993959776
Nova : 085961136968

Jadi, tunggu apa lagi??
Langsung daftar dan jadi bagian dari perjalanan seru di Islamic Talent Hub!
Kami tunggu partisipasi kalian di Islamic Festival 2025!🫶🏻🥰
Explorasi bakatmu, tebarkan semangat Islami!

See you there! 
Wassalamualaikum Wr. Wb', 'tgl_lomba' => '2025-05-08', 'lokasi' => 'Offline', 'link_daftar' => 'https://bit.ly/Guidebook_IFESTPRIMAKARA2025', 'gambar' => 'uploads/1750089718_ifest-primakara--75.png', 'penyelenggara_lomba' => 'Primakara Muslim Club', 'updated_at' => '2025-06-16 23:01:58', 'status' => 'available', 'id_bidang' => 15, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-16 23:01:58'],
            
            ['id_lomba' => 26, 'nama_lomba' => 'LeadCompetition Business Case', 'deskripsi' => '[FREE REGISTRATION: BUSINESS CASE COMPETITION by AIESEC in UI]

Ready to solve real-world business challenges?
Join LeadCompetition – a dynamic business case competition for undergraduate students across Indonesia!

What’s in it for you?
✅️IDR 20,000,000 total prize pool
✅️Exclusive mentoring & feedback from professionals
✅️Network with peers & industry leaders
✅️Real case exposure + opportunity to innovate!

Important Dates:
- Registration: 20 May – 20 June 2025
- Preliminary Submission: 21 June – 2 July
- Semifinal Submission: 7 – 20 July
- Finalist Announcement: 26 July
- Final Submission: 27 July – 5 August
- Grand Final: 6 August 
- Awarding: 7 August

‼️FREE REGISTRATION
Register now via: [bit.ly/LeadSeries2025_DelegatesCentralSheets]
or scan the QR code on the poster!

Stop asking “What if?” and start exploring beyond your limit.

#LeadCompetition2025 #AIESECinUI #BusinessCaseChallenge #StudentInnovation', 'tgl_lomba' => '2025-05-20', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://docs.google.com/spreadsheets/d/1XUaHBSoDPy800WADHO16GLevgdI6wCC0PPSkZLwW_Ic/edit?usp=sharing', 'gambar' => 'uploads/1750090250_leadcompetition-business-case-22.png', 'penyelenggara_lomba' => 'AIESEC in Universitas Indonesia', 'updated_at' => '2025-06-16 23:10:50', 'status' => 'available', 'id_bidang' => 67, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 23:10:50'],
            
            ['id_lomba' => 27, 'nama_lomba' => 'BUSINESS COMPETITION SEMAR ENTREPRENEUR 2025', 'deskripsi' => '🏆 BUSINESS COMPETITION SEMAR ENTREPRENEUR 2025 TELAH DIBUKA! 🏆

✨ Inovator muda, inilah saatnya kamu unjuk gigi! Punya ide bisnis yang out of the box dan berdampak? yuk, tuangkan jadi karya di Semar Entrepreneur 2025!

🌐 Skala: Nasional
🎓 Peserta: Mahasiswa D3/S1 dari seluruh program studi di Indonesia
🧠 TEMA: 
 “NextGen Entrepreneurs: Defying Limits, Designing Tomorrow” 
💸 BIAYA: 
- Pendaftaran & Pengumpulan BMC: GRATIS 
- Finalis (Pengumpulan Proposal):
Gelombang 1: Rp 55.000,00
Gelombang 2: Rp 75.000,00

🎁 TOTAL HADIAH: Rp 6.000.000 
💌 Seluruh peserta akan mendapatkan E-sertifikat!
📍 DAFTAR SEKARANG: 
🔗 uns.id/PendaftaranBMCSE25
🔗 https://linktr.ee/semarentrepreneur25

PAYMENT:
009701125379505 BRI an Pua Qitaralani

🌱 Jangan lewatkan kesempatan untuk berkontribusi dalam menciptakan masa depan bisnis yang berkelanjutan lewat inovasi dan teknologi!
📞 CONTACT PERSON: 
Angga – wa.me/6289531691371
Senda – wa.me/6383197809976
_________________
#SemarEntrepreneur2025
#UniversitasSebelasMaret', 'tgl_lomba' => '2025-06-09', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://linktr.ee/semarentrepreneur25', 'gambar' => 'uploads/1750090537_-business-competition-semar-entrepreneur-2025--6.png', 'penyelenggara_lomba' => 'BEM UNS', 'updated_at' => '2025-06-16 23:15:37', 'status' => 'available', 'id_bidang' => 67, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 23:15:37'],
            
            ['id_lomba' => 28, 'nama_lomba' => 'MBION Champion Quest 2025', 'deskripsi' => '📢 [MBION 2025 - CHAMPION QUEST EXTENDED] 📢 

Ingin uji survival skill yang kamu miliki? Ikuti MBION Champion Quest 2025. Sebuah kompetisi fun learning untuk mencari talenta muda yang hebat & inovatif!🚀🏆  

✨ Kenapa Harus Ikut?
✅ Free biaya pendaftaran  
✅ Hadiah total jutaan rupiah
✅ Fasilitas hotel & Akomodasi 
✅ E-certificate & Trophy
✅ Beasiswa Golden Ticket UISI
✅ Set Gift MBION 2025 

🗓 Timeline:  
📌 Pendaftaran & Pengumpulan Karya: 17 Maret - 17 Juni 2025  
📌 Seleksi Karya: 17 - 21 Juni 2025
📌 Pengumuman Finalis: 22 Juni 2025  
📌 Registrasi Finalis: 23 - 24 Juni 2025
📌 Technical Meeting: 25 Juni 2025
📌 Grand Opening: 28 Juni 2025
📌 Final Closing: 29 Juni 2025

Register your team now, it\'s time to be a champion!🔥🫵  

Link Pendaftaran: https://bit.ly/PendaftaranMBION2025
Link Pengumpulan Karya: https://bit.ly/PengumpulanKaryaMBION2025
Link Booklet: https://bit.ly/BookletMBION-2025 

📞 More Info:
WhatsApp: 083862048379 (Fadhilah)
Instagram: @mbion.uisi
Email: mbionhmdmuisi@gmail.com', 'tgl_lomba' => '2025-03-17', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://bit.ly/PendaftaranMBION2025', 'gambar' => 'uploads/1750090839_mbion-management-business-competition--59.jpeg', 'penyelenggara_lomba' => 'HMDM UISI', 'updated_at' => '2025-06-16 23:20:39', 'status' => 'available', 'id_bidang' => 67, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 23:20:39'],
            
            ['id_lomba' => 29, 'nama_lomba' => 'Marketing By U, Created By U', 'deskripsi' => '🎉 HEY, FUTURE BUSINESS BOSSES!
Punya ide bisnis kreatif dan strategi pemasaran yang out of the box?
Saatnya kamu unjuk gigi di B-STARTION X by.U 2025!

🚀 Tahun ini, B-STARTION berkolaborasi dengan by.U – provider digital pertama dari Telkomsel yang dirancang khusus untuk generasi muda, fleksibel, dan serba digital.

📢 Tema kompetisi tahun ini:
“Marketing by U, Created by U”
Siap menjawab tantangan nyata dan mengasah kemampuan bisnismu di dunia pemasaran digital?

💥 Benefit yang bisa kamu dapatkan:
🏆 Total hadiah senilai Rp15.000.000
📜 Sertifikat eksklusif untuk seluruh peserta
🧠 1-on-1 mentoring bersama para praktisi dan ahli industri

📌 Daftar dan unduh booklet lengkapnya sekarang di:
🔗https://linktr.ee/bstar25

---

🎙 Jangan lewatkan juga SEMINAR INSPIRATIF kami!
Bersama dua pembicara luar biasa:
👨‍💼 Edward Hartanto Enrico Abadi – Clash of Champions Cast
👩‍💼 Indira Dara Safira – by.U Creative and Branding Strategist Telkomsel

🗓️ GRATIS dan terbuka untuk umum!
📅 09 Juni 2025
📍 Link pendaftaran seminar: 
https://bit.ly/SeminarB-Startion2025 

📞 Contact Person:
📱 Nadine – 0812-9347-8105
📱 Helna – 0895-3603-08982

---

📲 Yuk, jadilah bagian dari generasi muda yang membawa perubahan melalui ide bisnis kreatif dan strategi digital bersama B-STARTION X by.U!

#BStartion2025 #byUxBStartion #Bpreneur
#GakGituGituAja
#MarketingbyU
#byUCompetition #BusinessCaseCompetition', 'tgl_lomba' => '2025-05-27', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://linktr.ee/bstar25', 'gambar' => 'uploads/1750090986_marketing-by-u-created-by-u-20.jpeg', 'penyelenggara_lomba' => 'B-Startion x By.U', 'updated_at' => '2025-06-16 23:23:06', 'status' => 'available', 'id_bidang' => 67, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 23:23:06'],
            
            ['id_lomba' => 30, 'nama_lomba' => 'Olympiad Economics (OPEC)', 'deskripsi' => 'Halo, Mahasiswa Hebat! 👋🏻

Ikatan Mahasiswa Ilmu Ekonomi UKSW membuka pendaftaran lomba Olympiad Economics 2025 yaitu ajang lomba debat ekonomi se Indonesia!

Tema:
"Gen-Z Wirausaha: Dari Passion Jadi Cuan di Era Digital"
Terbuka untuk seluruh mahasiswa jurusan ekonomi dari berbagai kampus di Indonesia!

🏆 Hadiah jutaan rupiah + sertifikat + mendali + pengalaman luar biasa! 
🎓 Terbuka untuk semua mahasiswa ekonomi. 

Informasi pendaftaran bisa diakses melalui link dibawah ini:
https://taplink.cc/opecuksw
📝 Link Pendaftaran: https://bit.ly/PendaftaranOPEC 

Kami tunggu partisipasimu dalam Olympiad Economics 2025!
Jangan sampai ketinggalan, ya!

Info lebih lanjut:
📱 Kontak Person : 08816682187 (Ritma)
🔗 Instagram : opec_imie', 'tgl_lomba' => '2025-05-19', 'lokasi' => 'Online', 'link_daftar' => 'https://taplink.cc/opecuksw', 'gambar' => 'uploads/1750091310_olympiad-economics-opec-5.png', 'penyelenggara_lomba' => 'OPEC FEB UKSW', 'updated_at' => '2025-06-16 23:28:30', 'status' => 'available', 'id_bidang' => 28, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-16 23:28:30'],
            
            ['id_lomba' => 31, 'nama_lomba' => 'VOKUS ADBIS: Navigating Uncertainty in Business', 'deskripsi' => 'VOKUS ADBIS 2025 IS COMING! 🔥

Buat kamu siswa/i SMA/K dari seluruh Indonesia, ini saatnya buktiin ide bisnis kreatifmu 💡

📌 Pendaftaran dibuka sampai 20 Juni
🎓 Beasiswa hingga 100% untuk kuliah di UNPAR
💵 Uang tunai jutaan rupiah
📜 Sertifikat resmi untuk seluruh peserta
🎁 Souvenir eksklusif 
💸 Biaya Pendaftaran: GRATIS
🔗 Panduan, Pendaftaran, Media Partner & Sponsorship di bio ig kita @vokusadbisunpar

Gass sekarang sebelum waktu pendaftaran habis! 🙌

#UNPAR #LombaSMA #KompetisiPelajar #LombaVideo #LombaGratis #BeasiswaSMA #LombaNasional #VideoCompetition #IdeBisnis #BeasiswaKuliah #VOKUS2025 #VOKUSADBISUNPAR', 'tgl_lomba' => '2025-06-09', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://taplink.cc/vokusadbis2025?fbclid=PAZXh0bgNhZW0CMTEAAadTnETHFYhspEtgHYanJnmB12WdovRLbUB1wCqGprkAF3FLZ2AdrqzaSvOTsg_aem_JE_eSbYAMDfUsdQl12mnyA', 'gambar' => 'uploads/1750091619_vokus-adbis-navigating-uncertainty-in-business-53.png', 'penyelenggara_lomba' => 'FISIP UNPAR', 'updated_at' => '2025-06-16 23:33:39', 'status' => 'available', 'id_bidang' => 65, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-16 23:33:39'],
            
            ['id_lomba' => 32, 'nama_lomba' => 'Development Economic Competion - Bussines Plan', 'deskripsi' => '[BUSINESS PLAN COMPETITION] ── .✦ 

Halo 🙌🏼 pejuang ide bisnis muda!
Saatnya wujudkan inovasimu untuk masa depan melalui 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭 𝐄𝐜𝐨𝐧𝐨𝐦𝐢𝐜 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧 yang diselenggarakan oleh 𝐇𝐈𝐌𝐀 𝐄𝐏 𝐔𝐧𝐢𝐯𝐞𝐫𝐬𝐢𝐭𝐚𝐬 𝟏𝟕 𝐀𝐠𝐮𝐬𝐭𝐮𝐬 𝟏𝟗𝟒𝟓 𝐒𝐮𝐫𝐚𝐛𝐚𝐲𝐚!

Dengan Tema:
𝐈𝐧𝐨𝐯𝐚𝐬𝐢 𝐮𝐧𝐭𝐮𝐤 𝐌𝐚𝐬𝐚 𝐃𝐞𝐩𝐚𝐧 𝐝𝐞𝐧𝐠𝐚𝐧 𝐌𝐞𝐧𝐜𝐢𝐩𝐭𝐚𝐤𝐚𝐧 𝐒𝐨𝐥𝐮𝐬𝐢 𝐁𝐢𝐬𝐧𝐢𝐬 𝐁𝐞𝐫𝐤𝐞𝐥𝐚𝐧𝐣𝐮𝐭𝐚𝐧

𝗕𝗲𝗻𝗲𝗳𝗶𝘁 :
💵 Uang penghargaan jutaan rupiah
🧾 Sertifikat + Voucher + Merchandise Untuk pemenang 
📩 E-sertifikat untuk seluruh peserta

𝗛𝗧𝗠 :
Gelombang 1 : 12 Mei - 21 Juni Rp 35.000
Gelombang 2 : 22 Juni–01 Juli Rp 55.000

𝗣𝗲𝗺𝗯𝗮𝘆𝗮𝗿𝗮𝗻 𝗱𝗮𝗽𝗮𝘁 𝗱𝗶𝗹𝗮𝗸𝘂𝗸𝗮𝗻 𝘁𝗿𝗮𝗻𝘀𝗳𝗲𝗿 𝗺𝗲𝗹𝗮𝗹𝘂𝗶 𝗿𝗲𝗸𝗲𝗻𝗶𝗻𝗴 𝗯𝗲𝗿𝗶𝗸𝘂𝘁 :
💰 Gopay & Shopeepay : 081336013436 a/n IMELDA AURA PUTRI AL
💳 BCA : 1300441561 a/n Novita Mauludya Dwi Safira 
𝐋𝐢𝐧𝐤 𝐑𝐞𝐠𝐢𝐬𝐭𝐞𝐫 :
https://docs.google.com/forms/d/e/1FAIpQLSfGyigWTdoPVFnYaDzXI3b2dndPLAD-py9VK_pb56ucWQhpUQ/viewform?usp=header
𝐋𝐢𝐧𝐤 𝐆𝐮𝐢𝐝𝐞𝐛𝐨𝐨𝐤 :
https://drive.google.com/drive/folders/1-CiUo9IMMP28D0AYsr4QuQNXGnR7pvab

𝗡𝗮𝗿𝗮𝗵𝘂𝗯𝘂𝗻𝗴 :
☎ Salwa (0817-7527-5751)
☎ Fahmi (0895-3372-75764)

Follow Us !
Instagram : @himaepuntag & @deco_untagsby
Tiktok : @himaepuntag
YouTube : HIMABISNIS UNIVERSITAS 17 AGUSTUS SURABAYA 

𝗦𝗲𝗴𝗲𝗿𝗮 𝗱𝗮𝗳𝘁𝗮𝗿𝗸𝗮𝗻 𝘁𝗶𝗺𝗺𝘂 𝗱𝗮𝗻 𝗯𝘂𝗸𝘁𝗶𝗸𝗮𝗻 𝗶𝗱𝗲 𝗯𝗶𝘀𝗻𝗶𝘀 𝘁𝗲𝗿𝗯𝗮𝗶𝗸𝗺𝘂!

🚨Tunggu Link Zoom Sosialisasi Lomba di Instagram 
@deco_untagsby @himaepuntag

#bisnisplancompetition 
#lombabisnisplan 
#lombasmanasional 
#pelajar 
#indonesia 
#untagsurabaya 
#fyppppppppppppppppppppppp
#lombabisnis
#lombanasional
#lombabpc
#lombasurabaya #lombasidoarjo #lombaSMA', 'tgl_lomba' => '2025-05-12', 'lokasi' => 'Online', 'link_daftar' => 'https://docs.google.com/forms/d/e/1FAIpQLSfGyigWTdoPVFnYaDzXI3b2dndPLAD-py9VK_pb56ucWQhpUQ/viewform?usp=header', 'gambar' => 'uploads/1750091797_development-economic-competion--bussines-plan-76.jpeg', 'penyelenggara_lomba' => 'HIMA EP UNTAG SURABAYA', 'updated_at' => '2025-06-17 01:36:37', 'status' => 'available', 'id_bidang' => 67, 'kategori_peserta' => 'SMA', 'created_at' => '2025-06-17 01:36:37'],
            
            ['id_lomba' => 33, 'nama_lomba' => 'PORFES 2025', 'deskripsi' => '📢 PERLOMBAAN PORFES 2025 RESMI DIBUKA

Halo, Sobat Poros ✨

Tahun ini, kami mengundang kamu untuk ikut serta  berkarya dan menyuarkan dinamika di balik Sumbu Filosofis Yogyakarta yang kerap terjadi tanpa banyak suara.
Pelbagai lomba pada PORFES 2025 adalah kesempatan berharga untuk menyampaikan perspektif melalui karya terbaikmu.

Tema:
Mengurai Tabir Perlawanan di Bawah Bayang Sumbu Filosofis Jogja
 
Kategori perlombaan:
📸Foto Jurnalistik
📝Opini
👩🏼‍💼News Anchor

Pendaftaran: 6 – 24 Juni 2025
Batas Pengumpulan Karya: 25 Juni 2025
 
📌GRATIS, terbuka untuk seluruh mahasiswa
🏆 Disediakan hadiah menarik bagi para pemenang
🔗 Info lengkap & pendaftaran dapat diakses melalui:
Link pendaftaran : https://bit.ly/PendaftaranPORFES2025
Link pengumpulan : https://bit.ly/PengumpulanPORFES2025 

Ayo daftar, tunjukkan karya unggulanmu, dan raih kesempatan menjadi pemenang 😼

Salam Persma!', 'tgl_lomba' => '2025-06-04', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/PendaftaranPORFES2025', 'gambar' => 'uploads/1750092015_porfes-2025--23.jpeg', 'penyelenggara_lomba' => 'PERS MAHASISWA POROS UAD', 'updated_at' => '2025-06-17 01:40:15', 'status' => 'available', 'id_bidang' => 19, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-17 01:40:15'],
            
            ['id_lomba' => 34, 'nama_lomba' => 'Borneo Muharram Festival', 'deskripsi' => '𝓑𝓪𝓷𝓰𝓾𝓷 𝓓𝓪𝓴𝔀𝓪𝓱 𝓓𝓮𝓷𝓰𝓪𝓷 𝓗𝓲𝓳𝓻𝓪𝓱 

LDNU KALTIM kembali menggelar event lomba tahunan ajang bergengsi Da\'i Cilik dan Da\'i Muda se-Kaltim serta di hiasi dengan karya Lomba Desain Poster Digital tingkat Nasional 

📌 Pendaftaran : 5 - 30 Juni 2025
📌 Pengumpulan Karya Poster : 5 - 30 Juni 2025
📲 Technical Meeting : 1 Juli 2025
🗓️ Pelaksanaan : 3 - 4 Juli 2025
📍 Tempat : Halaman Islamic Center Samarinda
🖊️ Link Pendaftaran : https://forms.gle/dTKKsjGidiTzPcvz9

🎉 Total Hadiah Jutaan Rupiah

Kontak Person :
0812-7227-4974 (ZAHRO)
0821-5416-6634 (AYU)

Tunggu apalagi, segera daftar dalam event lomba tahunan ajang bergengsi‼️

@ldnu.kaltim
#BangunDakwahBangunPeradaban
#BorneoMuharramFestival2025', 'tgl_lomba' => '2025-06-05', 'lokasi' => 'Online', 'link_daftar' => 'https://forms.gle/dTKKsjGidiTzPcvz9', 'gambar' => 'uploads/1750092140_borneo-muharram-festival--73.jpeg', 'penyelenggara_lomba' => 'LD PWNU KALTIM', 'updated_at' => '2025-06-17 01:42:20', 'status' => 'available', 'id_bidang' => 15, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:42:20'],
            
            ['id_lomba' => 35, 'nama_lomba' => 'DE\'KANDANG FEST', 'deskripsi' => '“THINKFEST ACADEMIC NATIONAL COMPETITION” 

LOMBA ESSAY MAHASISWA & PELAJAR TINGKAT NASIONAL | LOMBA POSTER (UMUM TINGKAT NASIONAL)

Tema : Bersama Menyemai Harapan, Menuai Ketahanan Pangan Masa Depan
Subtema :
1.    Peternakan
2.    Pertanian
3.    Teknologi
4.    Lingkungan
5.    Sosial Ekonomi

🗓️Timeline :
-    Pendaftaran Batch 1 : 4 – 11 Juni 2025
-    Pendaftaran Batch 2 : 12 – 22 Juni 2025
-    Pengumpulan Proposal/Karya: 23 Juni 2025
-    Penilaian Proposal/Karya : 24 – 26 Juni 2025
-    Pengumuman Finalis : 28 Juni 2025
-    Technical Meeting : 29 Juni 2025
-    Presentasi dan Awarding (Offline) : 9 Juli 2025

Biaya Pendaftaran💸
- POSTER = Batch 1 : 45.000 | Batch 2 : 60.000
- ESSAY = Batch 1 = 60.000 | Batch 2 : 75.000

- Link Guidebook : https://drive.google.com/folderview?id=1JLbBjTcw3h4nxgQrPidvthkF8LAY5rCX


Contact Person :
1.    0857-1161-1457 (Difa)
2.    0812-5951-7631 (Maya)

Find us on Instagram @dekafest_official @bemfapetunisma', 'tgl_lomba' => '2025-06-04', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://drive.google.com/folderview?id=1JLbBjTcw3h4nxgQrPidvthkF8LAY5rCX', 'gambar' => 'uploads/1750092309_thinkfest-academy-nasional-competition-15.jpeg', 'penyelenggara_lomba' => 'BEM FAPET UNISMA', 'updated_at' => '2025-06-17 01:45:09', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:45:09'],
            
            ['id_lomba' => 36, 'nama_lomba' => 'Teknokrat English Competition (TECOMP) 2025', 'deskripsi' => 'Hi everyone!

🎉The 2025 - TEKNOKRAT ENGLISH COMPETITION Is Back!!!!🎉

A Senior High School and Varsity National English Competition 

With this year theme 
“Probability and Possibility: Quantifying Uncertainty, Maximizing Opportunity”

📌The Competition Branches are  :
English Competition
Senior High School and Varsity
-Newscasting 
-Speech
-Story Telling 
-Debate (SHS Only)
-Scrabble (SHS Only)

Benefits
📜E-certificate (For all participants)
📜Certificate (For the champions)
🏆 Trophy (For the champions)
💸Cash Money (For the champions)

📅 Note the following date
REGISTRATION : May 26th - July 4th, 2025
TECHNICAL MEETING : July 5th, 2025
VIA : Zoom Meeting 
FINAL ROUND : July 15th, 2025

Register at the link below👇🏻
bit.ly/englishmathemathics2025

Guidebook for SHS & Varsity:
https://drive.google.com/drive/folders/15mJqXgA87VQkj2ExC9StSGK8Celr1TH0?usp=sharing

Contact Person
English Competition :
📞 0821-8487-4064 (Jihan)
📞 0838-1957-8050 (Mala)', 'tgl_lomba' => '2025-04-26', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://msha.ke/englishmathemathics', 'gambar' => 'uploads/1750097911_teknokrat-english-competition-tecomp-2025-41.png', 'penyelenggara_lomba' => 'Universitas Teknokrat Indonesia', 'updated_at' => '2025-06-17 01:18:31', 'status' => 'available', 'id_bidang' => 65, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:18:31'],
            
            ['id_lomba' => 37, 'nama_lomba' => 'Law Fair LP2DH 2025', 'deskripsi' => '📣 𝐎𝐏𝐄𝐍 𝐑𝐄𝐆𝐈𝐒𝐓𝐑𝐀𝐓𝐈𝐎𝐍 𝐋𝐀𝐖 𝐅𝐀𝐈𝐑 𝐋𝐏𝟲𝗗𝗛 𝟐𝟎𝟐𝟓 📣
Salam Perubahan, Salam Yuris Muda untuk Hukum Berkeadilan! 🇮🇩⚖️

Lembaga Pengkajian, Penalaran, dan Diskusi Hukum Fakultas Hukum Universitas Lambung Mangkurat dengan bangga mempersembahkan:

✨ 𝗟𝗔𝗪 𝗙𝗔𝗜𝗥 𝗟𝗣𝟲𝗗𝗛 𝟮𝟬𝟮𝟱 ✨Bertemakan:"Persepsi Yuris Muda dalam Mewujudkan Hukum Berkeadilan di Indonesia"

Ayo, tunjukkan kemampuanmu dalam dua kompetisi bergengsi tingkat nasional:

𝟭. 𝗞𝗢𝗠𝗣𝗘𝗧𝗜𝗦𝗜 𝗗𝗘𝗕𝗔𝗧 𝗛𝗨𝗞𝗨𝗠 𝗡𝗔𝗦𝗜𝗢𝗡𝗔𝗟

‼️Syarat dan Ketentuan Peserta: 
1. Peserta lomba adalah Mahasiswa(i) Strata-1 (S1) Fakultas Hukum Perguruan Tinggi di Indonesia. 
2. Mahasiswa/i dari Fakultas Hukum Universitas Lambung Mangkurat tidak diperkenankan untuk mengikuti Kompetisi Debat Hukum LP2DH Lawfair.
‼️Persyaratan selengkapnya berada pada Buku Panduan‼️

💸Registration Fee:
Gelombang I: Rp. 450.000,-
Gelombang II: Rp. 500.000,-

📞Contact Person:
081395871885 (Nazwa Al Zahra Ariani)
089531472170 (Halyza Azhara)

𝟮. 𝗟𝗢𝗠𝗕𝗔 𝗘𝗦𝗔𝗜 𝗡𝗔𝗦𝗜𝗢𝗡𝗔𝗟

‼️Syarat dan Ketentuan Peserta:
1. Peserta adalah mahasiswa(i) D1/D2/D3/S1 di seluruh Indonesia yang dibuktikan dengan melampirkan Kartu Tanda Mahasiswa pada laman pendaftaran yang telah disediakan.
2. Peserta lomba wajib menaati peraturan yang telah ditetapkan oleh panitia.
3. Esai yang dibuat harus merupakan karya sendiri dan tidak menjiplak karya orang lain, peserta akan segera didiskualifikasi jika menyerahkan esai hasil menjiplak.
4. Peserta hanya individu yang bisa mengirimkan 1 esai dan dikirimkan melalui email.
‼️Persyaratan selengkapnya berada pada Buku Panduan‼️

💸Registration Fee:
Gelombang I : Rp. 50.000,-
Gelombang II : Rp. 75.000,-

📞Contact Person:
081255623507 (Alisa Rohima)
089531472170 (Halyza Azhara)

⬇️⬇️⬇️

📖 Buku Panduan & Persyaratan lengkap:👉 https://heylink.me/LP2DH.LAWFAIR

‼️Informasi lebih lanjut dapat dilihat melalui Instagram @lp2dhlawfair‼️

📣 Jangan lewatkan kesempatan emas ini, jadilah bagian dari perubahan hukum Indonesia!✨', 'tgl_lomba' => '2025-06-01', 'lokasi' => 'Online', 'link_daftar' => 'https://heylink.me/LP2DH.LAWFAIR', 'gambar' => 'uploads/1750098149_law-fair-lp2dh-2025-6.jpeg', 'penyelenggara_lomba' => 'LP2DH FH ULM', 'updated_at' => '2025-06-17 01:22:59', 'status' => 'available', 'id_bidang' => 28, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-17 01:20:57'],
            
            ['id_lomba' => 38, 'nama_lomba' => 'Lomba Voice Over Communication Events', 'deskripsi' => 'HOLD ON TIGHT, WE WILL DEPART TO THE NEXT DESTINATION COMMNETZ 🌠

Yap, Communication Competition is Back‼️

Hey Commnetz! 👋

Telah dibuka pendaftaran Lomba Voice Over Communication Events 2025. Kali ini Kinara & Kinari memiliki misi untuk bersatu menjadi kesatuan yang memadukan sastra serta visual, humm menarik banget gak sih!? 🤩

Maka dari itu yuk catat tanggal pendaftarannya ya!
💥 Gelombang 1 (21 Mei - 11 Juni 2025) : Rp. 30.000
💥 Gelombang 2 (11 Juni - 21 Juni) : Rp. 35.000

Link Pendaftaran Lomba Voice Over COMMET : 🔗https://bit.ly/PendaftaranLombaVoiceOverCommet2025
Juknis Lomba Voicer Over COMMET :
🔗https://bit.ly/JuknisLombaVO2025

Jadi tunggu apalagi Commnetz!? Segera daftar sekarang juga dan tunjukkan skill kalian dengan mengikuti Lomba Voice Over Communication Events 2025!🫵

☎️Narahubung :
Avatar (0895800192803)
Hanna (081237173615)

#CommunicationEvents2025 #Commet2025 #AllCanBeCreative #HimanikaFISIPUnud #InfoLomba #LombaNasional #LombaVoiceOver #LombaMahasiswa', 'tgl_lomba' => '2025-06-11', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/PendaftaranLombaVoiceOverCommet2025', 'gambar' => 'uploads/1750098526_lomba-voice-over-communication-events-26.png', 'penyelenggara_lomba' => 'HIMANIKA FISIP UDAYANA', 'updated_at' => '2025-06-17 12:25:32', 'status' => 'available', 'id_bidang' => 12, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-17 01:28:46'],
            
            ['id_lomba' => 39, 'nama_lomba' => 'INVENTION 2025', 'deskripsi' => '🎉 Halo halo haloo Inventioners! 🎉
Mau ngabarin nih kalau INVENTION 2025 resmi dibuka lagi tahun ini! 🤩🔥

✨ Spesial banget di tahun ini:
📚 PELATIHAN GRATIS untuk seluruh peserta!
💸 DISKON SPESIAL buat kamu yang pernah ikut INVENTION sebelumnya!

➡ Pernah ikut di tahun 2023 atau 2024?
Kamu berhak mendapatkan potongan harga pendaftaran hingga 16% sebagai bentuk apresiasi dari kami atas partisipasimu! 🥳
Diskon ini berlaku untuk semua kategori lomba ya, jadi manfaatkan kesempatan emas ini!

📌 Cabang lomba:
💻 Web Design
📱 UI/UX Design
🎨 Poster Digital

🎯 Jangan lewatkan kesempatan buat unjuk kreativitas dan inovasi digitalmu di ajang nasional ini.
✨ Hadiah JUTAAN RUPIAH siap diperebutkan!

📲 Info lengkap & pendaftaran:
🌐 invention-udayana.com

📞 Contact Person:
* Minvention – 0851-6890-6745
* Tata – 0858-1127-0602

Jangan lupa daftar ya, Inventioners!
Kami tunggu karya hebatmu! Sampai jumpa dan semangat berkarya! 👋🏻✨', 'tgl_lomba' => '2025-06-10', 'lokasi' => 'Online', 'link_daftar' => 'http://invention-udayana.com/', 'gambar' => 'uploads/1750098950_invention-2025-79.jpeg', 'penyelenggara_lomba' => 'HIMAIF UNUD', 'updated_at' => '2025-06-17 01:35:50', 'status' => 'available', 'id_bidang' => 11, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:35:50'],
            
            ['id_lomba' => 40, 'nama_lomba' => 'Visdec Season 1', 'deskripsi' => '🎨✨ VISDEC SEASON 1 – Viding Studio Design Competition is HERE!

💌 Saatnya tunjukkan kreativitasmu dalam Kompetisi Design Undangan dengan total hadiah hingga 13 JUTA RUPIAH! 💸

📌 FREE REGISTRATION!
🎁 Hadiah menarik untuk 4 kategori pemenang!
👩‍🎨 Ajak teman-temanmu dan menangkan:

🏆 Juara 1: Rp 3.000.000 + Voucher Viding Rp 2.000.000
🥈 Juara 2: Rp 2.000.000 + Voucher Viding Rp 1.500.000
🥉 Juara 3: Rp 1.500.000 + Voucher Viding Rp 1.000.000
💖 Juara Favorit: Rp 1.000.000 + Voucher Viding Rp 1.000.000

🗓 Timeline:
📥 Pendaftaran: 9 – 30 Juni 2025
📤 Submit Desain: 4 Juli 2025
🔎 Penjurian: 5 – 6 Juli 2025
📢 Pengumuman: 7 Juli 2025

👉 Daftar sekarang di: bit.ly/vidingcompetition
📱 Info lebih lanjut: +62 878-8934-6660', 'tgl_lomba' => '2025-06-09', 'lokasi' => 'Online', 'link_daftar' => 'https://docs.google.com/forms/d/e/1FAIpQLSeba0orMmt7gG20q7PV658HtBT9Pk_q1P2cwXem62AON5eCqw/viewform', 'gambar' => 'uploads/1750099168_visdec-sesion-1-53.jpeg', 'penyelenggara_lomba' => 'Viding', 'updated_at' => '2025-06-17 01:39:28', 'status' => 'available', 'id_bidang' => 18, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:39:28'],
            
            ['id_lomba' => 41, 'nama_lomba' => 'Esai Mahasiswa Nasional 2025', 'deskripsi' => '[Hima Sejarah Universitas Negeri Semarang]

LOMBA ESAI MAHASISWA 

Tingkat Nasional 

Tema : “Sejarah Selalu Aktual: Mewujudkan Sejarah Publik, Membangun Kajian Sejarah Yang Inklusif”

Sub Tema
1. Pendidikan
2. Sosial
3. Budaya
4. Lingkungan
5. Politik
6. Ekonomi

📅Timeline pendaftaran:
Pendaftaran dan Pengumpulan
* Gelombang 1 : 2 Juni - 25 Juli 2025
* Gelombang 2 : 26 Juli - 25 Agustus 2025
* Penjurian : 3 September - 4 Oktober 2024
* Pengumuman Finalis : 6 Oktober 2024
* Technical Meeting : 12 Oktober 2024
* Presentasi : 19 Oktober 2024

Biaya Pendaftaran
* Gelombang 1 : 35.000
* ⁠Gelombang 2 : 40.000

Link Pendaftaran : 
https://bit.ly/pendaftaranesaimahasiswanasional2025

informasi lebih lanjut dapat menghubungi 
Contacts Person:
* 081325156967 ( Sendi Wardana)
* 085190043126 ( Mahesa Djati)', 'tgl_lomba' => '2025-06-02', 'lokasi' => 'Online', 'link_daftar' => 'https://bit.ly/pendaftaranesaimahasiswanasional2025', 'gambar' => 'uploads/1750099281_esai-mahasiswa-nasional-2025-bulan-pahlawan-2025-52.png', 'penyelenggara_lomba' => 'Hima Sejarah Unnes', 'updated_at' => '2025-06-17 01:41:21', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Mahasiswa', 'created_at' => '2025-06-17 01:41:21'],
            
            ['id_lomba' => 42, 'nama_lomba' => 'Coloring Competition Festival Jamu Nusantara', 'deskripsi' => 'Coloring Competition Simbalion kini hadir dalam Acaraki Jamu Festival di edisi Juni spesial untuk memeriahkan HUT Jakarta ke-498! 🎊

Coloring Competition kali ini bertema "Ulang Tahun Jakarta" 

Buat teman-teman semuanya, ini saatnya untuk berkreasi menyalurkan kreativitas dengan mengikuti Coloring Competition bersama Simbalion @simbalion.id @acaraki.jamu @festivaljamunusantara @capbadak_id 🖍️🎨✨

Ikuti lombanya dan tuangkan imajinasimu, eksplor kreasi karya gambar terbaikmu dengan menggunakan Oil Pastel Simbalion Isi 12 Warna dan menangkan hadiah menariknya! 🪄🏆

Kategori Peserta Lomba:
* Kategori A (Usia 4-7 tahun) 👧👦
* Kategori B (Usia 8-12 tahun)👩🧒

🗓 Hari/Tanggal Pelaksanaan:
Minggu, 22 Juni 2025
Pukul 12:30 WIB-selesai

Catat Lokasinya ya! 
📍Sarinah, Thamrin, Jakarta Pusat

*S&K Berlaku

Untuk informasi selengkapnya dapat cek slide pada postingan ini.

Jangan lupa ikuti lombanya, komen dan share informasi ini sebanyak-banyaknya dan mention ke teman-temanmu ya Sobat Simbalion, buat ikutin lombanya juga, selamat berkreasi! 🖌🎨🤗

#Simbalion #Simbalionindonesia #Lomba #Lombamewarnai #FestivalJamuNusantara #AcarakiJamuFestival #Kreativitas #HUTJakarta #LombaIndonesia #OilPastelSimbalion', 'tgl_lomba' => '2025-06-10', 'lokasi' => 'Online', 'link_daftar' => 'https://forms.gle/Bs5VVQQRrfYNJ54X9', 'gambar' => 'uploads/1750099555_coloring-competition-simbalion-x-acaraki-x-cap-badak-dalam-festival-jamu-nusantara-45.png', 'penyelenggara_lomba' => 'Simbalion X Acaraki X Cap Badak', 'updated_at' => '2025-06-17 01:45:55', 'status' => 'available', 'id_bidang' => 12, 'kategori_peserta' => 'SD', 'created_at' => '2025-06-17 01:45:55'],
            
            ['id_lomba' => 43, 'nama_lomba' => 'SPOTLIGHT FUN AND ACCOUNTING COMPETITION 2025', 'deskripsi' => '🎉 [OPEN REGISTRATION] 🎉
✨FESGEM PROUDLY PRESENT✨

🔥 SERANGKAIAN LOMBA NASIONAL & UMUM 🔥

Dalam rangka memeriahkan acara FESTIVAL EKONOMI GEMILANG, kami mengundang kalian semua untuk ikut serta dan jadi bagian dari kompetisi seru yang penuh tantangan dan hadiah menarik!

💥 Pilihan lomba:
📊 ACTION (Accounting Competition National)
🎱 Billiard Tournament
🎮 Mobile Legends Tournament
⚽ Futsal Tournament (SMA/SMK/MA Sederajat)

🗓 Timeline Seragam!
📌 Pendaftaran: 15 Juni - 13 Juli 2025
📌 Technical Meeting: 19 Juli 2025
📌 Pelaksanaan Lomba: 23–25 Juli 2025 (Tergantung cabang lomba)

🎁 Total hadiah JUTAAN RUPIAH + Sertifikat + Pengalaman luar biasa menanti kamu!

📍 Lokasi: Universitas Bhayangkara Jakarta Raya Kampus II & Online & District 2 Billiard, Agus Salim

📲 Yuk daftar sekarang dan buktikan kemampuanmu!
Link pendaftaran dan info lengkap bisa dicek lewat QR code di poster masing-masing lomba.

📞 Contact Person? Tenang, sudah tersedia di setiap pamflet ya!

Jangan sampai ketinggalan, slot terbatas!
#AccountingCompetition2025 #ACTION2025 #LombaNasional #KompetisiMahasiswa #BilliardTournament #MLTournament #FutsalCompetition 
#UbharaJaya#SerunyaKompetisi #OneBeatManyVoicesOnePurpose
#FESGEM2025 #FESTIVALEKONOMIGEMILANG', 'tgl_lomba' => '2025-06-15', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://drive.google.com/drive/folders/1X0PsFm7Xolb6QstSgEbe8B7sXN0mJWwX', 'gambar' => 'uploads/1750099883_spotlight-fun-and-accounting-competition-2025--69.jpeg', 'penyelenggara_lomba' => 'FEB Universitas Bhayangkara Jakarta Raya', 'updated_at' => '2025-06-19 10:27:13', 'status' => 'available', 'id_bidang' => 65, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:51:23'],
            
            ['id_lomba' => 44, 'nama_lomba' => 'Dapatkerja Competition', 'deskripsi' => '🚨 KOMPETISI GRATIS DARI DAPATKERJA! 🚨

Siap tunjukkan kreativitasmu dan menangkan jutaan Rupiah?

Yuk ikutan Kompetisi Poster Digital atau Video Promosi dengan tema "Beban Tak Terlihat di Balik Lowongan: Potret Realita Pencari Kerja Indonesia"!

Link pendaftaran
Digital poster competition: http://bit.ly/daftarposterdk
Promotional video competition: http://bit.ly/daftarvideodk

Menangkan hadiah uang tunai, sertifikat, dan endorsement LinkedIn dari CEO Dapatkerja!

Pendaftaran & pengumpulan karya sampai 7 Juli 2025!

Jangan sampai ketinggalan, slot terbatas! ✨

Guide book for competition: http://intip.in/gbkdapatkerja

#DapatKerja2025 #LombaBarengDapatKerja #KompetisiGratis #LombaKreativitas #LombaGratis #HadiahMenarik', 'tgl_lomba' => '2025-06-02', 'lokasi' => 'Online', 'link_daftar' => 'https://drive.google.com/drive/folders/19nQdMvtFibPOZr_bbe6jQinpjFfa5e1X?usp=drive_link', 'gambar' => 'uploads/1750100109_dapatkerja-competition-1.jpeg', 'penyelenggara_lomba' => 'DapatKerja', 'updated_at' => '2025-06-17 01:55:09', 'status' => 'available', 'id_bidang' => 18, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:54:30'],
            
            ['id_lomba' => 45, 'nama_lomba' => 'PEKAN NARASI (PENA) NASIONAL 2025', 'deskripsi' => '📣 [CALLING ALL MAHASISWA & SISWA SE-INDONESIA]

𝑰𝒏𝒊𝒍𝒂𝒉 𝒔𝒂𝒂𝒕𝒏𝒚𝒂 𝒃𝒆𝒓𝒔𝒊𝒏𝒂𝒓! ✨
Unitas Penalaran dan Jurnalistik Mahasiswa Universitas Warmadewa dengan bangga mengundang generasi muda kreatif dari seluruh Indonesia untuk berpartisipasi dalam Pekan Narasi (PENA) Nasional 2025 sebuah ruang aktualisasi kreativitas, gagasan, dan budaya!

Cabang Lomba:
📝 Lomba Esai  
🎨 Lomba Poster  
🎤 Lomba News Anchor 

Dengan tema "𝙄𝙣𝙤𝙫𝙖𝙨𝙞 𝙂𝙚𝙣𝙚𝙧𝙖𝙨𝙞 𝙈𝙪𝙙𝙖 𝙙𝙖𝙡𝙖𝙢 𝙋𝙚𝙢𝙗𝙚𝙧𝙙𝙖𝙮𝙖𝙣 𝙙𝙖𝙣 𝙋𝙚𝙡𝙚𝙨𝙩𝙖𝙧𝙞𝙖𝙣 𝘽𝙪𝙙𝙖𝙮𝙖 𝙇𝙤𝙠𝙖𝙡 𝙢𝙚𝙣𝙪𝙟𝙪 𝙄𝙣𝙙𝙤𝙣𝙚𝙨𝙞𝙖 𝙀𝙢𝙖𝙨 2045"

👥Kategori Peserta 
- Mahasiswa/i aktif (S1/D4/D3) Sederajat dari Universitas Negeri Swasta & SMA/SMK/MA sederajat (ESAI)
- ⁠Mahasiswa/i aktif (D3/D4/S1) dari Universitas Negeri/Swasta (POSTER & NEWS ANCHOR)

💰Biaya Pendaftaran:
🎨🎤Lomba Poster dan News Anchor:
- Biaya pendaftaran Gel.1 Rp 45.000
- Biaya pendaftaran Gel.2 Rp 55.000

📝Lomba Esai: 
- Biaya pendaftaran Gel.1 Rp 50.000
- Biaya pendaftaran Gel.2 Rp 60.000

DAFTAR SEKARANG!
📘Buku Panduan PENA 2025
https://bit.ly/BUKUPANDUANPENA2025
🔗Link Pendaftaran PENA 2025 bisa diakses melalui: 
https://linktr.ee/PENA.UPJM2025

Mari berkontribusi lewat karya dan narasi. Saatnya unjuk bakat dan suara dalam Pekan Narasi (PENA) Nasional 2025 bersama Universitas Warmadewa dan wujudkan generasi emas Indonesia! 🌟 

📢Informasi lebih lanjut bisa kalian dapatkan di akun Instagram @pena_upjm

☎ 𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐏𝐞𝐫𝐬𝐨𝐧 :
Informasi umum 
- 081515154517 (Risma Sabrina)
- 0895396261100 (Keisha)
Sponsorship & Media Partner 
- 088289276939 (Redina)', 'tgl_lomba' => '2025-06-05', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://linktr.ee/PENA.UPJM2025', 'gambar' => 'uploads/1750100291_pekan-narasi-pena-nasional-2025-10.png', 'penyelenggara_lomba' => 'UPJM Universitas Warmadewa', 'updated_at' => '2025-06-17 01:58:11', 'status' => 'available', 'id_bidang' => 59, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 01:58:11'],
            
            ['id_lomba' => 46, 'nama_lomba' => 'KREASI (KOMPETISI PENELITIAN KRISS)', 'deskripsi' => '📢[Penulis: admin] 𝐊𝐑𝐈𝐒𝐒 𝐑𝐄𝐒𝐄𝐀𝐑𝐂𝐇 𝐂𝐎𝐌𝐏𝐄𝐓𝐈𝐓𝐈𝐎𝐍 𝟐𝟎𝟐𝟓 (Penulis: admin) 𝟐𝟎𝟐𝟓)]📢

Hai, KREATIONERS!😊👋

Muda berinovasi dan beraksi untuk dunia!

Dengan bangga 𝐊𝐞𝐥𝐨𝐦𝐩𝐨𝐤 𝐑𝐞𝐦𝐚𝐣𝐚 𝐈𝐥𝐦𝐢𝐚𝐡 𝐒𝐌𝐀 dipersembahkan (𝐊𝐑𝐈𝐒𝐒 𝐑𝐄𝐒𝐄𝐀𝐑𝐂𝐇 𝐂𝐎𝐌𝐏𝐄𝐓𝐈𝐓𝐈𝐎𝐍)

𝐊𝐑𝐄𝐀𝐓𝐈𝐎𝐍 adalah kompetisi ilmiah yang diselenggarakan oleh Kelompok Remaja Ilmiah SMA Negeri 1 Sukawati yang terbuka untuk para siswa/i SMP/MTs/Sederajat se-Provinsi Bali!

𝐊𝐑𝐄𝐀𝐓𝐈𝐎𝐍 𝟐𝟎𝟐𝟓 mengusung tema utama "𝐀𝐤𝐬𝐢 𝐝𝐚𝐧 𝐈𝐧𝐨𝐯𝐚𝐬𝐢 𝐆𝐞𝐧𝐞𝐫𝐚𝐬𝐢 𝙈𝙪𝙙𝙖 𝐃𝐚𝐥𝐚𝐦 𝐌𝐞𝐰𝐮𝐢 𝐒𝐮𝐬𝐭𝐚𝐢𝐧𝐚𝐛𝐥𝐞 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭 ) (𝐒𝐃𝐆𝐬)" dengan kategori lomba:
✍️ 𝐄𝐬𝐚𝐢 𝐈𝐥𝐦𝐢𝐚𝐡
🎨 𝐏𝐨𝐬𝐭𝐞𝐫 𝐏𝐮𝐛𝐥𝐢𝐤
🎥 𝐕𝐢𝐝𝐞𝐨 𝐄𝐝𝐮𝐤𝐚𝐬𝐢

📌𝐓𝐢𝐦𝐞𝐥𝐢𝐧𝐞
📆 𝐏𝐞𝐧𝐝𝐚𝐟𝐭𝐚𝐫𝐚𝐧: 10 Juni-3 Agustus 2025
📆 𝐏𝐞𝐧𝐠𝐮𝐦𝐩𝐮𝐥𝐚𝐧 𝐊𝐚𝐫𝐲𝐚: 5-10 Agustus 2025
📆 𝐏𝐞𝐧𝐠𝐮𝐦𝐮𝐦𝐚𝐧 𝐅𝐢𝐧𝐚𝐥𝐢𝐬 𝐓𝐎𝐏 𝟓: 17 Agustus 2025
📆 𝐓𝐞𝐜𝐡𝐧𝐢𝐜𝐚𝐥 𝐌𝐞𝐞𝐭𝐢𝐧𝐠 𝐅𝐢𝐧𝐚𝐥𝐢𝐬: 19 Agustus 2025
📆 𝐕𝐨𝐭𝐞 𝐊𝐚𝐫𝐲𝐚 𝐏𝐨𝐬𝐭𝐞𝐫 & 𝐕𝐢𝐝𝐞𝐨 𝐄𝐝𝐮𝐤𝐚𝐬𝐢 𝐅𝐚𝐯𝐨𝐫: 20-22 Agustus 2025
📆 𝐅𝐢𝐧𝐚𝐥 & 𝐀𝐰𝐚𝐫𝐝𝐢𝐧𝐠: 26 Agustus 2025

📌𝐏𝐚𝐲𝐦𝐞𝐧𝐭
💵 Rp 50.000,00/karya untuk seluruh cabang lomba 
🏧 BCA : 1350819670 a/n Sang Ayu Putu Pertiwi

📌𝐒𝐭𝐚𝐫𝐭𝐞𝐫 𝐏𝐚𝐜𝐤 𝐏𝐞𝐬𝐞𝐫𝐭𝐚 𝐊𝐑𝐄𝐀𝐓𝐈𝐎𝐍
🖇️https://linktr.ee/kreation2025
Yuk segera daftarkan diri kalian pada 𝐊𝐑𝐄𝐀𝐓𝐈𝐎𝐍 𝟐𝟎𝟐𝟓 dan tunjukkan aksimu untuk dunia!🤩🙌

📌𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐏𝐞𝐫𝐬𝐨𝐧
✍️ 𝐄𝐬𝐚𝐢 : 081935671392 (Triana) 
🎨 𝐏𝐨𝐬𝐭𝐞𝐫 𝐏𝐮𝐛𝐥𝐢𝐤: 087734050758 (Anggrek)
🎥 𝐕𝐢𝐝𝐞𝐨 𝐄𝐝𝐮𝐤𝐚𝐬𝐢: 085157467700 (Nirmala)

Temukan kami di @kriss_suksma
Jelajahi Dunia dengan Aksi Ilmiah!🚀🌟

#KRISSUKSMA #KREATION2025
#Exploretheworldbyscientificaction ', 'tgl_lomba' => '2025-06-10', 'lokasi' => 'Online & Offline', 'link_daftar' => 'https://docs.google.com/forms/d/e/1FAIpQLSea9gKLGSnVo5E6fDlre-BQDFw1uvi4-IPri0ISlzxsfLnyBw/viewform', 'gambar' => 'uploads/1750100766_kompetisi-ilustrasi-fesyen-nasional--98.jpeg', 'penyelenggara_lomba' => 'HIMTARIUS ISBI Bandung', 'updated_at' => '2025-06-17 02:06:06', 'status' => 'available', 'id_bidang' => 12, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 02:06:06'],
            
            ['id_lomba' => 48, 'nama_lomba' => 'Cassevas Cup 7th', 'deskripsi' => '⚔︎ 𝐘𝐨, 𝐝𝐮𝐝𝐞𝐬! 𝐒𝐌𝐀𝐍 𝟏𝟐 𝐉𝐚𝐤𝐚𝐫𝐭𝐚 𝐢𝐬 𝐬𝐮𝐩𝐞𝐫 𝐞𝐱𝐜𝐢𝐭𝐞𝐝 𝐭𝐨 𝐩𝐫𝐞𝐬𝐞𝐧𝐭 ⚔︎

𓂃˖˳·˖ ִֶָ ⋆𝐂𝐀𝐒𝐒𝐄𝐕𝐀𝐒 𝐂𝐔𝐏 𝟕⋆ ִֶָ˖·˳˖𓂃 ִֶָ
𝐁𝐎𝐍𝐒𝐈 𝐂𝐔𝐏 is back with 🎉𝘾𝙖𝙨𝙨𝙚𝙫𝙖𝙨 𝘾𝙪𝙥 𝙥𝙖𝙧𝙩 7🎉, a new journey for all great 𝗮𝗱𝘃𝗲𝗻𝘁𝘂𝗿𝗲𝗿𝘀.

𝗢𝗣𝗘𝗡 𝗥𝗘𝗚𝗜𝗦𝗧𝗥𝗔𝗧𝗜𝗢𝗡
📅 6 March - 29 June 2025
🪢 : https://cassevas.dubes.my.id

𝗧𝗘𝗖𝗛𝗡𝗜𝗖𝗔𝗟 𝗠𝗘𝗘𝗧𝗜𝗡𝗚
📅 12 July, 25 July & 1 August 2025
🏰 SMAN 12 Jakarta

𝗖𝗢𝗠𝗣𝗘𝗧𝗜𝗧𝗜𝗢𝗡
📅 19 July - 9 August 2025

𝗖𝗟𝗢𝗦𝗜𝗡𝗚
📅 10 August 2025

𝗔𝗕𝗢𝗨𝗧 𝗖𝗢𝗠𝗣𝗘𝗧𝗜𝗧𝗜𝗢𝗡𝗦
🎖️𝗞𝗥𝗘𝗠𝗕𝗘𝗟𝗦 (𝗟𝗞𝗕𝗕)🎖️
𝑺𝑴𝑷/𝑴𝑻𝑺/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
💵= 650.000 

🎭𝗥𝗔𝗖𝗢𝗧𝗜𝗩𝗘 (𝗥𝗮𝘁𝗼𝗵 𝗝𝗮𝗿𝗼𝗲)🎭
𝑺𝑴𝑨/𝑴𝑨/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
💵= 350.000 [300k + 50k (WO)]

📑𝗘𝗟𝗩𝗘𝗟𝗘𝗦𝗧𝗜𝗖𝗢 (𝗘𝗡𝗚𝗟𝗜𝗦𝗛 𝗦𝗣𝗘𝗘𝗖𝗛)📑
𝑺𝑴𝑨/𝑴𝑨/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
💵= 50.000

🏀𝗕𝗔𝗦𝗞𝗘𝗧🏀
𝑺𝑴𝑷/𝑴𝑻𝑺/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
💵= 350.000 [300k + 50k (WO)]
🟠BASKET PUTRA
🟠BASKET PUTRI

⚽️𝗙𝗨𝗧𝗦𝗔𝗟⚽️
𝑺𝑴𝑷/𝑴𝑻𝑺/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕 
💵= 400.000 [350k + 50k (WO)]

🕌𝗔𝗥𝗧𝗜𝗩𝗘🕌
𝑺𝑴𝑨/𝑴𝑨/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
🟤DA\'I
💵= 65.000 [40k + 25k (WO)]
🟤MTQ
💵= 65.000 [40k + 25k (WO)]

🥁𝗕𝗔𝗡𝗗🥁
𝑺𝑴𝑨/𝑴𝑨/𝑺𝒆𝒅𝒆𝒓𝒂𝒋𝒂𝒕
💵= 300.000 [250k + 50k (WO)] 

🩹𝗥𝗘𝗖𝗢𝗧𝗜𝗧𝗜𝗢𝗡🩹
𝑺𝑴𝑨/𝑴𝑨/𝑺𝑴𝑷/𝑴𝑻𝑺
⚪️Tandu Darurat
💵= 65.000
⬇️MADYA⬇️
⬇️WIRA⬇️

⚪️Pertolongan Pertama (PP)
💵= 70.000
⬇️MADYA⬇️
⬇️WIRA⬇️

Let\'s check out our Social Media for further information!
🗡️ 𝗜𝗻𝘀𝘁𝗮𝗴𝗿𝗮𝗺 @cassevas12
🗡️ 𝗧𝗶𝗸𝗧𝗼𝗸 @cassevascup12

Ready to face epic quest? Grab your sword and register now! 🗡️

<:::::::::𝐂𝐀𝐒𝐒𝐄𝐕𝐀𝐒 𝐂𝐔𝐏 𝟕:::::::::>', 'tgl_lomba' => '2025-03-06', 'lokasi' => 'Online', 'link_daftar' => 'https://cassevas.dubes.my.id', 'gambar' => 'uploads/1750100943_cassevas-cup-7th-54.jpeg', 'penyelenggara_lomba' => 'SMAN 12 Jakarta', 'updated_at' => '2025-06-17 02:09:03', 'status' => 'available', 'id_bidang' => 65, 'kategori_peserta' => 'Umum', 'created_at' => '2025-06-17 02:09:03'],
        ]);
    }
}