@extends('layouts.app')

@section('title', 'UMART - TENTANG PRODUK KAMI')

@section('header')
  <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{ url('image/ssumart-logo.png') }}">
      <div class="relative container align-left">

          <div class="row">

              <div class="col-md-8">
                  <h1 class="font-alt mb-20 mb-xs-0">Produk Kami</h1>
                  <div class="hs-line-4 font-alt">
                      dari umat - oleh umat - untuk umat
                  </div>
              </div>

              <div class="col-md-4 mt-30">
                  <div class="mod-breadcrumbs font-alt align-right">
                      <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Produk Kami</span>
                  </div>

              </div>
          </div>

      </div>
  </section>
@endsection

@section('content')
  <section class="page-section">
      <div class="container relative">
        <div class="section-text text-justify">
          <p>
              Kecenderungan saat ini adalah masyarakat lebih memilih toko modern, hal ini karena berbagai fasilitas yang tersedia dan yang ditawarkan kepada para konsumen serta didukung dengan layanan yang prima akan membuat suasana belanja menjadi lebih aman dan menyenangkan.
          </p>
          <p>
            Di toko modern kualitas produk yang tersedia dan yang ditawarkan adalah produk yang lebih terjamin kualitasnya karena sistem barang masuk dan keluar selalu dijaga dengan cara yang lebih akurat dengan standar prosedur operasional (SOP) yang sudah ditetapkan, baik oleh pemerintah melalui peraturan yang berlaku (seperti peraturan menteri perdagangan tentang pemasokan produk-produk yang diperdagangkan dalam Toko Modern dan kemitraan usaha) maupun oleh perusahaan.
          </p>
          <p>
              Dalam rangka menjaring kepercayaan dan ketertarikan masyarakat umum terhadap Umart, kualitas produk yang tersedia dan yang ditawarkan Umart mesti memenuhi SOP yang sudah ditetapkan itu.
          </p>
          <p>
              Sehubungan dengan itu, produk yang dijual di Umart menggunakan strategi tiga kategori:
          </p>
        </div>

          @include('produk_kami.strategi')
          <h2 class="section-title font-alt mb-70 mb-sm-40">
              {{-- skat --}}
          </h2>

          <div class="section-text" style="text-align: justify;">
              <p>
                  Dalam perkembangannya, produk dengan kategori kedua dan ketiga dirancang secara bertahap agar menjadi produk dominan yang dijual di Umart.
              </p>
              <p>
                  Strategi ini digunakan ketika brand dan kualitas produk yang dibutuhkan masyarakat masih didominasi oleh produsen kafir atau tidak pro Islam.
              </p>
              <p>
                  Strategi ini merujuk kepada petunjuk syariat tentang bermuamalah dengan pihak kafir (selain kafir harbi) dalam situasi dan kondisi tertentu, antara lain sebagai berikut:
              </p>
              <p>
                  1.  melakukan transaksi dengan mereka dalam perdagangan dan sewa menyewa jasa selama alat tukar dan barang atau objek jasanya dibenarkan menurut syari’at Islam.
              </p>
              <p>
                  2.  Menerima derma mereka, seperti derma terhadap fakir miskin, perbaikan jalan, derma terhadap Ibnu Sabil dan semacamnya.
              <p>
                  3.  memberi pinjaman dan atau meminjam dari mereka walaupun dengan cara menggadaikan barang. Sebab Nabi saw. pernah meminjam 30 sha’ gandum dari seorang Yahudi dengan menggadaikan baju perangnya sebagai jaminan, sebagaimana diriwayatkan oleh Imam al-Bukhari
              <p>
                  4.  melakukan perjanjian damai dengan mereka, baik karena permintaan kita maupun karena permintaan mereka, selama hal itu untuk mewujudkan kemaslahatan umum bagi kaum Muslimin dan pemimpin kaum Muslimin sendiri cenderung ke arah itu berdasarkan firman Allah Subhanahu wa Ta’ala :
              <p>
                  وَإِن جَنَحُوا لِلسَّلْمِ فَاجْنَحْ لَهَا
               <p>
                  “Dan jika mereka condong kepada perdamaian, maka condonglah kepadanya…” [QS. Al-Anfaal: 61]
                  Tetapi perjanjian damai itu harus bersifat sementara dan tidak mutlak atau tidak untuk selamanya.
              <p>
                  5.  Mempekerjakan orang kafir dalam pekerjaan atau proyek kaum muslimin selama tidak membahayakan kaum muslimin.
              <p>
                  6.  berbuat ihsan (baik) pada orang kafir yang membutuhkan seperti memberi bantuan kepada orang miskin di antara mereka atau menolong orang sakit di antara mereka. Hal ini berdasarkan keumuman sabda Nabi saw:
              <p>
                  فِى كُلِّ كَبِدٍ رَطْبَةٍ أَجْرٌ
              <p>
                  “Menolong orang sakit yang masih hidup akan mendapatkan ganjaran pahala.” HR. Al-Bukhari dan Muslim no. 2244.
              <p>
                  7.  Tetap menjalin hubungan dengan kerabat yang kafir (seperti orang tua dan saudara) dengan memberi hadiah atau menziarahi mereka. Sebagaimana dalilnya telah kami jelaskan di atas.
              <p>
                  8.  memberi hadiah pada orang  kafir agar membuat mereka tertarik untuk memeluk Islam, atau ingin mendakwahi mereka, atau ingin agar mereka tidak menyakiti kaum muslimin.
              <p>
                  9.  memuliakan orang kafir ketika mereka bertamu sebagaimana boleh bertamu pada orang kafir dan bukan maksud diundang. Namun jika seorang muslim diundang orang kafir dalam acara mereka, maka undangan tersebut tidak perlu dipenuhi karena ini bisa menimbulkan rasa cinta pada mereka.
              <p>
                  10. bermuamalah dengan orang kafir dalam urusan dunia seperti mengambil ilmu dan teknologi yang bernilai mubah yang mereka miliki (tanpa harus pergi ke negeri kafir).
              <p>
                  11. meminta pertolongan pada orang kafir untuk menghalangi musuh yang akan memerangi kaum muslimin. Namun di sini dilakukan dengan dua syarat:
              <p>
                  (a) dalam keadaan darurat sehingga permintaan tolong itu dilakukan secara terpaksa.
              <p>
                  (b) Orang kafir tidak membuat bahaya dan makar pada kaum muslimin yang dibantu.
              <p>
                  12. menerima hadiah dari orang kafir selama tidak menimbulkan perendahan diri, penistaan dari orang kafir atau wala’ (loyal pada mereka). Sebagaimana Nabi shallallahu ‘alaihi wa sallam pernah menerima hadiah dari beberapa orang musyrik. Namun ingat, jika hadiah yang diberikan tersebut berkenaan dengan hari raya keagamaan orang kafir, maka tidak boleh diterima.
              <p>
                  Sebagai catatan bahwa orang kafir itu ada empat macam:
              <p>
                  1.  Kafir mu’ahid yaitu orang kafir yang tinggal di negeri mereka sendiri dan di antara mereka dan kaum muslimin memiliki perjanjian.
              <p>
                  2.  Kafir dzimmi yaitu orang kafir yang tinggal di negeri kaum muslimin dan sebagai gantinya mereka mengeluarkan jizyah (semacam upeti) sebagai kompensasi perlindungan kaum muslimin terhadap mereka.
              <p>
                  3.  Kafir musta’man yaitu orang kafir masuk ke negeri kaum muslimin dan diberi jaminan keamanan oleh penguasa muslim atau dari salah seorang muslim.
              <p>
                  4.  Kafir harbi yaitu orang kafir selain tiga jenis di atas. Kaum muslimin disyari’atkan untuk memerangi orang kafir semacam ini sesuai dengan kemampuan mereka. (Lihat Tahdzib Tashil Al-‘Aqidah Al-Islamiyah, hlm. 232-234)
              <p>
                  Berbagai petunjuk syariat di atas mengajarkan kepada kita bahwa dalam pertarungan “di medan tempur tertentu” ajaran Islam tidak mengajarkan kita untuk bersikap frontal (gamblang, jelas, langsung, polos) dan emosional, namun perlu digunakan pula pendekatan gradual (bertahap, sedikit demi sedikit) dan rasional.
            </p>

          </div>

      </div>
  </section>
            <!-- End Features Section -->


  {{-- <section class="page-section">
      <div class="relative container">



      </div>
  </section> --}}
@endsection
