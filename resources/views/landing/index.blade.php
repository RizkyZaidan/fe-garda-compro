@section('content')
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <div class="wrapper">
    <div class="carousel slide" id="carouselHeader" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHeader" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHeader" data-slide-to="1"></li>
        <li data-target="#carouselHeader" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block clear-filter w-100" src="./assets/img/header_I.jpg" filter-color="header" alt="Independent Politic Consultant Solution">
          <div class="carousel-caption caption-carousel">
            <h1 style="display: block;font-size: 5.5vmin;">INDEPENDENT POLITIC CONSULTANT SOLUTION</h1>
              <button class="btn btn-danger btn-outline-danger btn-round contact-us-btn" type="button" style="border-width: 4px;"><b style="color: white;text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">GET IN TOUCH WITH US</b></button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./assets/img/header_II.png" alt="Leading Indonesia Survey, Polling and Social Media Branding">
          <div class="carousel-caption caption-carousel">
            <h1 style="display: block;font-size: 5.5vmin;">THE EXPERT STRATEGIC COMMUNICATION</h1>
            <button class="btn btn-danger btn-outline-danger btn-round about-us-btn" type="button" style="border-width: 4px;"><b style="color: white;text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">LEARN ABOUT US</b></button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./assets/img/header_III.png" alt="Supporting Leadership with Kingmaker">
          <div class="carousel-caption caption-carousel">
            <h1 style="display: block;font-size: 5.5vmin;">EMPOWER LEADERSHIP WITH KINGMAKER</h1>
            <div class="d-flex justify-content-around">
              <button class="btn btn-danger btn-outline-danger btn-round service-plan-btn" type="button" style="border-width: 4px;"><b style="color: white;text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">See Our Plan</b></button>
              <button class="btn btn-danger btn-outline-danger btn-round movement-btn" type="button" style="border-width: 4px;"><b style="color: white;text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">Our Action</b></button>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
          <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
          <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
      </div>
    </div>
    <div class="main">
      {{-- Tentang Kami --}}
      <section id="about-us">
        <div class="container">
          <h3 class="title text-center pt-0 pb-4 underlined">TENTANG KAMI</h3>
          <p class="sub-header-p">GARDA ORGANIZER merupakan sebuah Lembaga Riset & Konsultan Politik serta Digital Marketing & Strategic Communication. GARDA akan menjadi solusi bagi anda yang membutuhkan konsultan politik independent, non partisan dan tidak berafiliasi dengan partai politik manapun.</p>
           <div class="row d-flex justify-content-around">
              {{-- <div class="col-sm-4 p-0 mx-3 card pb-5" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;background: #161616;">
                <div class="about-col">
                  <div class="img">
                    <img src="./assets/img/Filosofi.png" loading="lazy" alt="filosofi politik independen" style="width:100%" class="img-fluid">
                    <div class="icon"><i class="fa fa-users"></i></div>
                  </div>
                  <h4 class="title px-3 mt-0 mb-3" style="text-align:center;">FILOSOFI</h4>
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <p class="px-3" style="text-align:justify;font-size:1em;font-weight:normal;">
                    Kami percaya pengalaman adalah guru terbaik. Kami tidak sekedar memprediksi, tapi kami melaksanakan dan membuktikan konsep dan strategi yang kami terapkan.
                  </p>
                </div>
              </div> --}}
              <div class="col-sm-4 p-0 mx-3 card pb-5" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;background: #161616;">
                <div class="about-col">
                  <div class="img">
                    <img src="./assets/img/Vision.png" loading="lazy" alt="Visi politik yang independen" style="width:100%" class="img-fluid">
                  </div>
                  <h4 class="title px-3 mt-0 mb-3" style="text-align:center;">VISI</h4>
                  <p class="px-3" style="text-align:justify;font-size:1em;font-weight:normal;">
                    “Meningkatkan kualitas dan kecakapan kepemipinan politik dalam rangka menguatkan sistem demokrasi Di Indonesia”</p>
                </div>
              </div>
              <div class="col-sm-4 p-0 mx-3 card pb-5" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;background: #161616;">
                <div class="about-col">
                  <div class="img">
                    <img src="./assets/img/Mission.png" loading="lazy" alt="Misi politik yang independen" style="width:100%" class="img-fluid">
                  </div>
                  <h4 class="title px-3 mt-0 mb-3" style="text-align:center;">MISI</h4>
                  <p class="px-3" style="text-align:justify;font-size:1em;font-weight:normal;">
                    “Mewujudkan tata kehidupan yang demokratis dan berkeadilan sosial melalui pengembangan wacana Politik dan Demokrasi</p>
                </div>
              </div>
            </div>
        </div>
      </section>
      {{-- Produk --}}
      <section id="services-product">
        <div class="container">
          <h3 class="title text-center pt-0 pb-4 underlined">LAYANAN & PRODUK</h3>
          <p class="sub-header-p">Kami mengetahui konsep terbaik dan efektif bagaimana memenangkan hati rakyat. <br>Pengalaman menjadi dasar untuk menguji konsep dan mendapatkan sistem serta metodologi terbaik.</p>
        </div>
        <div class="slider">
          <section class="slider-layanan">
            <ul>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title"><em>Paket Riset</em> & Survey</h3>
                        <p>
                          Tingkat popularitas kandidat bisa diukur dengan metode ilmiah yang akurat, yakni SURVEY <em><strong>POPULARITAS</strong></em> & <em><strong>ELEKTABILITAS</strong></em> KANDIDAT. Hasil metode ini akan memberikan gambaran dari sisi survey elektabilitas dan bagaimana tingkat popularitas, kekuatan, dan posisi kandidat di mata publik.
                          Jenis layanan survey yang diberikan Garda Organizer :
                        </p>
                        <ul>
                          <li><em><b>Individual Survey</b></em> Dilakukan sebanyak 1 kali sepanjang periode
                            pemilihan. Menghemat biaya tetapi tidak bisa menangkap tren atau
                            pergerakan suara pemilih.</li>
                          <li><em><strong>Tracking Survey</strong></em>. Wawancara dilakukan lebih dari 1 kali. Dapat
                            mengetahui tren opini publik dan grafik popularitas kandidat, tetapi
                            biaya relatif mahal.
                            </li>
                          <li><em><strong>Panel Survey</strong></em> Dilakukan lebih dari 1 kali. Responden yang diwawancarai
                            dari satu survey ke survey lainnya sama. Dapat menekan biaya karena
                            responden yang sifatnya panel/sama.</li>
                        </ul> 
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title">Dukungan <em>Pencalonan</em></h3>
                        <p>
                          Kami akan membantu Client untuk mendapatkan <em><strong>Kendaraan Politik</strong></em> sebagai syarat pencalonan (20% kursi atau 25% suara sah) pasangan Gubernur, Bupati/Walikota.
                          <br><br>
                          Jika maju melalui jalur <em><strong>Perseorangan (Independen)</strong></em>, kami akan membantu client untuk memperoleh persentase tertentu dukungan pemilih (copy KTP) sesuai UU sebagai syarat pencalonan.
                        </p>	
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title"><em>Media</em> Campaign</h3>
                        <p>
                          Kami memberikan jasa konsultasi, perencanaan strategis dan perumusan Media Campaign, Media Relations & Media Monitoring, untuk membantu kandidat dalam memenangkan <em><b>Pemilihan kepala daerah</b></em>.
                          <br>
                          Kami selalu inovatif dalam memproduksi dan mengimplementasikan style kampanye publik yang efektif sehingga pesan komunikasi <em><b>Politik</b></em> dapat tepat sasaran baik dengan jenis kampanye langsung maupun kampanye politik digital (kampanye online).
                          <br><br>
                          Paket ini terdiri dari:
                        </p>
                        <ul>
                          <li>Jasa Konsultasi & Strategic Planning Media Campaign.</li>
                          <li>Media Relation & Media Monitoring.</li>
                          <li>Production & Placement Iklan Media.</li>
                        </ul>
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title">Personal <em><b>Branding</b></em></h3>
                        <p>
                          Di era teknologi informasi, membangun <em><strong>Personal Branding</strong></em> merupakan hal terpenting dalam mempromosikan diri.
                        <br><br>
                        Kami membantu client melalui layanan personal branding agar client memiliki Tingkat <em><strong>Kepercayaan Diri</strong></em> Tinggi, <em><strong>Kredibilitas</strong></em> Diri, <em><strong>Persepsi Positif</strong></em> dan memiliki nilai pembeda dengan lainnya.
                        </p>
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title"><em><b>Volunteer Support</b></em> & Management</h3>
                        <p>
                          Pada saat <em><b>musim elektoral</b></em> tiba, banyak orang yang menawarkan diri menjadi tim atau kelompok “Relawan Dadakan” yang mengajukan proposal berbasis “Data Bodong” atau “Massa Bodong” dengan orientasi profit semata.
                          <br><br>
                          Keberadaan <em><b>Relawan</b></em> perlu dimanage secara terorganisir berbasis efektifitas kerja dengan output utama perolehan suara kandidat.
                          <br><br>
                          Kami membantu client melalui program Volunteer Support & Management agar keberadaan organ relawan sebagai variabel penting <em><b>pemenangan</b></em> bisa lebih <em><b>optimal</b></em>.
                        </p>	
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title"><em><b>Program Rekrutmen</b></em> Pelatihan, Pengorganisasian & <em><b>Placement Saksi</b></em></h3>
                        <p>
                          Saksi adalah orang yang akan memastikan apakah proses pemungutan dan penghitungan suara telah dilakukan dengan benar, jujur dan adil sesuai <em><strong>prinsip-prinsip demokrasi</strong></em>.
                          <br><br>
                          Tugas Pokok Saksi adalah mewakili peserta pilkada (Pasangan Calon) untuk mencatat, menyaksikan dan mengawasi agar proses pemungutan dan penghitungan suara baik di tingkat TPS, PPK, KPU Kabupaten/Kota, KPU Provinsi dapat berlangsung secara <em><b>jujur dan adil</b></em>, sesuai peraturan perundang - undangan pilkada.
                          <br><br>
                          Oleh karenanya, peningkatan pengetahuan, skill dan kompetensi Saksi perlu dilakukan melalui <em><b>Pelatihan dan Pengorganisasian Saksi</b></em> secara terarah.
                        </p>	
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title">Pelaporan <em><b>Dana Kampanye</b></em></h3>
                        <p>
                          Kami membantu memberikan jasa layanan <em><b>Pelaporan Dana dari biaya kampanye</b></em> Pilkada.
                          <br><br>
                          Paket Pelaporan Dana Kampanye mencakup; penyusunan, pengelolaan, dan pertanggungjawaban laporan dana dan biaya kampanye kepada <em><b>KPU Kab/Kota./KPU Provinsi</b></em>.
                          <br><br>
                          Pelaporan dana kampanye merupakan wujud <em><b>Transparansi dan Akuntabilitas</b></em> terhadap penggunaan dana kampanye pasangan calon, baik yang berasal dari partai atau gabungan partai, dan juga sumbangan dari pihak lain. 
                        </p>
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title"><em><b>Bantuan Hukum</b></em> & Advokasi</h3>
                        <p>
                          Paket Bantuan Hukum dan Advokasi merupakan layanan jasa pemberian bantuan hukum dan advokasi terkait <em><b>sengketa pemilihan kepala daerah yang potensial</b></em> terjadi menyangkut selisih hasil penghitungan suara.
                          <br><br>
                          Program ini mencakup; identifikasi masalah; collecting barang bukti; pengurusan sengketa ke MK dan lembaga terkait dengan target <em><b>memenangkan calon</b></em> dalam peradilan di MK.
                        </p>	
                    </article>
                </li>
                <li class="slide">
                    <article class=" padding_2x">
                        <h3 class="big title">Alat Peraga <em><b>Kampanye</b></em></h3>
                        <p>
                          Kami menyediakan jasa <em><b>produksi dan placement</b></em> Alat Peraga Kampanye (APK). 
                          <br>
                          APK ini bersifat standar sesuai dengan <em><b>kondisi dan kebutuhan</b></em> daerah masing-masing.
                          <br><br>
                          APK standar ini terdiri dari :
                          <ul>
                            <li>Stiker</li>
                            <li>Surat Suara</li>
                            <li>Kalender</li>
                            <li>Banner</li>
                            <li>Baliho</li>
                            <li>Kaos dan tool campaign lainnya</li>
                          </ul>
                        </p>	
                    </article>
                </li>
                <aside>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </aside>
            </ul>
          </section>
        </div>        
      </section>
      {{-- Forum & Portfolio --}}
      <section id="portfolio">
        <div class="container">
          <h3 class="title text-center pt-0 pb-4 underlined">PORTOFOLIO KAMI</h3>
          <p class="sub-header-p">
            Independensi GARDA ORGANIZER selalu dijaga dengan kualitas riset yang teruji berdasarkan kaidah-kaidah akademik, etika kerja profesional, serta  bersandar pada kode etik survei opini publik, yakni International Association of Public Opinion Research (IAPOR).
          </p>
        </div>
        <section class='youtube-gallery py-5 bg-black position-relative bg-img bg-lines' id='watch'>
          <div class='ypt' id='ypt_wrapper'>
            <div class='container'>
              <div class='row'>
                <div class='col-12 mb-5'>
                  <div class='video ratio embed-responsive embed-responsive-16by9'>
                    <div class='play' data-pl='PLHgbDpuWPAh9GOPQA4z489sIJm6o1hsYk' id='player'></div>
                  </div>
                </div>
              </div>
            </div>
            <div class='container-max'>
              <div class='row'>
                <div class='col-12 px-5'>
                  <div class='youtube-carousel' id='ypt_thumbs' style="overflow: hidden">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      {{-- Tim Kami --}}
      <section id="our-team" style="background: #161616">
        <div class="container">
          <h3 class="title text-center pt-0 pb-4 underlined">TIM KAMI</h3>
          <p class="sub-header-p">
            Kami percaya pengalaman adalah guru terbaik. Dan tim yang kami bentuk dari para ahli pada bidangnya masing-masing. Kami tidak sekedar memprediksi, tapi kami melaksanakan dan membuktikan konsep dan strategi yang kami terapkan dalam bidang konsultan politik.
          </p>
        </div>
        <div id="image-track" data-mouse-down-at="0" data-prev-percentage="-50" style="margin-top:-10vh;">
          <div class="frame">
            <img class="image" src="./assets/img/Daniel-Wijaya.png" draggable="false" alt="Daniel Wijaya"/>
            <div class="textbox">
              <span class="subheader"><b style="font-size: 1.2em">Daniel Wijaya</b>
                <br>
                <br>
                <li>Digital Marketing Strategist Expert</li>
                <li>Data Analyst & Research Expert</li>
            </div>
          </div>
          <div class="frame">
            <img class="image" src="./assets/img/Yusak-Farchan.png" draggable="false" alt="Yusak Farchan"/>
            <div class="textbox">
              <span class="subheader"><b style="font-size: 1.2em">Yusak Farchan, S.Sos., M.Si.</b>
                <br>
                <li>Pengamat Politik Nasional</li>
                <li>Direktur Citra Institute</li>
                <li>Dekan FISIP UNPAM</li>
                <li>Ketua Bidang Kebijakan Publik DPP KNPI</li>
                <li>Wakil Sekretaris ICMI DKI Jakarta</li>
                <li>Dewan Pakar OIC Youth Indonesia</li>
                <li>Peneliti Pusat Informasi PEMILU - CETRO</li>
                <li>Kandidat Doktor Ilmu Politik <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universitas Nasional</li></span>
              </span>
            </div>
          </div>
          <div class="frame">
            <img class="image" src="./assets/img/Eva.png" draggable="false" alt="Eva Muryadi"/>
            <div class="textbox">
              <span class="subheader"><b style="font-size: 1.2em">Evafani Muryadi</b>
                <br>
                <br>
                <li>Personal Branding Expert</li>
                <li>Public Relations Management Expert</li>
                <li>Human Resources & General Affairs <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management Expert</li>
                <li>Jurnalis di Media Nasional</li>
                <li>Manajemen Komunikasi Massa</li>
                <li>Trainer Strategic Management <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;& Produktivitas SDM </li>
              </span>
            </div>
          </div>
        </div>
      </section>
      {{-- Contact Us --}}
      <section id="contact-us">
        <div class="container">
          <h3 class="title text-center pt-0 pb-4 underlined">KONTAK KAMI</h3>
          <div style="width: 30vmin; margin: 0 auto 3vmin auto;">
            <img src="{{ asset('assets/img/LogoGardaOrganizer.svg') }}" alt="Garda Organizer">
          </div>
          <div class="card">
            <div class="card-body p-0 rounded" style="background: #161616">
              <div class="row p-0 m-0">
                <div class="p-0 m-0" id="map-detail">
                  <div style="width: 100%">
                    <iframe class="rounded" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Podomoro%20Golf%20View,%20Tower%20Dahoma,%2010%20Floor%20Bojong%20Nangka,%20Gunung%20Putri%20(Exit%20Km%2019%20Tol%20Jagorawi%20Cimanggis-Cikeas)%20Kab.%20Bogor+(Garda%20Organizer)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                  </div>
                </div>
                <div class="px-5 py-4 my-5" id="contact-detail">
                  <div class="rows justify-content-around align-content-between" style="display: flex;flex-direction: column;height: 100%;flex-wrap: wrap;align-content: space-around;">
                    <div class="d-flex pb-4">
                        <div style="min-width:6vmin">
                          <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 4vmin;text-align:center;"></i>
                        </div>
                        <p  style="text-align: justify;height: fit-content;margin: auto 0;font-size: 2vmin;">
                            Podomoro Golf View, Tower Dahoma, 10 Floor Bojong Nangka, Gunung Putri (Exit Km 19 Tol Jagorawi Cimanggis-Cikeas) Kab. Bogor
                        </p>
                    </div>
                    <div class="d-flex pb-4">
                        <div style="min-width:6vmin;">
                          <i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 4vmin;text-align:center;"></i>
                        </div>
                        <p  style="text-align: justify;height: fit-content;margin: auto 0;font-size: 2vmin;">
                          +62 812-8833-5857
                        </p>
                    </div>
                    <div class="d-flex pb-4">
                        <div style="min-width:6vmin;">
                          <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 4vmin;text-align:center;"></i>
                        </div>
                        <p  style="text-align: justify;height: fit-content;margin: auto 0;font-size: 2vmin;">
                          admin@indonesiakingmaker.com
                        </p>
                    </div>
                    <div class="mx-auto">
                      <a class="btn btn-success btn-outline-success btn-round " href="https://wa.me/6281288335857" style="border-width: 4px;font-size: 2.5vmin"><b style="color: white;text-shadow: 2px 1px 3px rgba(0, 0, 0, 1);">HUBUNGI KAMI</b></a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
{{--   
  <button class="g-recaptcha" 
        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" 
        data-callback='onSubmitCaptcha' 
        data-action='submit'>Submit</button> --}}
@endsection