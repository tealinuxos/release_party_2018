@extends('app') @section('content-homepage')

<header id="top" class="header">
    <div class="container">
        <div class="header_top-bg">
            <div class="logo">
                <a href="#">
                    <img src="{{asset ('images/logo-cerah.png')}}" alt="event-logo">
                </a>
            </div>
        </div>
        <h3 class="headline-support wow fadeInDown">Release Party TeaLinux OS X</h3>
        <h1 class="headline wow fadeInDown" data-wow-delay="0.1s">TeaLinux and Collaboration</h1>
        <div class="when_where wow fadeIn" data-wow-delay="0.4s">
            <p class="event_when">Sabtu, 12 Mei 2017</p>
            <p class="event_where">
                <b>Semarang</b>, Indonesia</p>
        </div>
        <div class="header_bottom-bg">
            <a class="btn btn-default btn-xl wow zoomIn" data-wow-delay="0.3s" href="#daftar">DAFTAR SEKARANG</a>
            <p class="cta_urgency wow fadeIn" data-wow-delay="0.5s">
                <small>Cepat, kuota terbatas</small>
            </p>
        </div>
    </div>

</header>


<section class="highlight">
    <div class="container">
        <p class="lead text-center">Release Party TealinuxOS adalah acara yang diselenggarakan oleh Doscom (Dinus Open Source Community) untuk merayakan
            peluncuran TeaLinuxOS X. Release Party telah menjadi suatu acara tahunan Doscom untuk menarik pengguna baru serta
            mengedukasi masyarakat tentang Open Source. </p>
        <div class="countdown_wrap">
            <h6 class="countdown_title text-center">Acara akan berlangsung dalam</h6>

            <ul id="countdown" data-event-date="May 12, 2018 07:00:00">
                <li class="wow zoomIn" data-wow-delay="0s">
                    <span class="days">00</span>
                    <p class="timeRefDays">Hari</p>
                </li>
                <li class="wow zoomIn" data-wow-delay="0.2s">
                    <span class="hours">00</span>
                    <p class="timeRefHours">Jam</p>
                </li>
                <li class="wow zoomIn" data-wow-delay="0.4s">
                    <span class="minutes">00</span>
                    <p class="timeRefMinutes">Tanggal</p>
                </li>
                <li class="wow zoomIn" data-wow-delay="0.6s">
                    <span class="seconds">00</span>
                    <p class="timeRefSeconds">Detik</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="speakers" id="pembicara">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h4>Pembicara</h4>
        </div>
        <div class="speaker-slider">
            <div class="row">


                <div class="col-md-7 col-sm-6">
                    <div class="speaker-info wow fadeIn" data-wow-delay="0s">
                        <img src="{{asset ('images/pembicara/pembicara.jpeg')}}" alt="avatar" class="img-responsive center-block">
                        <p>Rizki Dwi Kelimutu</p>
                        <span>
                            <b>Pembicara</b>
                        </span>
                        <br/>
                        <br/>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara1">Lihat Profil</button>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6">
                    <div class="speaker-info wow fadeIn" data-wow-delay="0.2s">
                        <img src="{{asset ('images/doscom.png')}}" alt="avatar" class="img-responsive center-block">
                        <p>Team Doscom</p>
                        <span>
                            <b>Developer</b> TeaLinuxOS</span>
                        <br/>
                        <br/>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara4">Lihat Detail</button>
                    </div>

                </div>
            </div>
        </div>

</section>


<section class="schedule" id="agenda">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h4>Agenda</h4>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="day1">

                <section class="timeline">
                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s"> Registrasi Ulang</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">07:30</span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>
                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Pembukaan Acara</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">08:15</span>
                        </div>

                    </div>


                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Launching Tea Linux OS X</h2>
                            <p class="wow flipInX" data-wow-delay="0.3s">Oleh Project Manager TeaLinux OS X</p>
                            <p class="wow flipInX" data-wow-delay="0.3s">Fahri Firdausillah S.Kom, M.CS</p>
                            <p class="wow flipInX" data-wow-delay="0.3s">Ketua Umum DOSCOM</p>
                            <p class="wow flipInX" data-wow-delay="0.3s">Ketua Plaksana Release Party 2018</p>
                            <p class="wow flipInX" data-wow-delay="0.3s">Perwakilan UDINUS</p>



                            <span class="date wow flipInX" data-wow-delay="0.3s">08:50 </span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s"> Pembahasan TeaLinux OS X </h2>
                            <p class="wow flipInX" data-wow-delay="0.3s">oleh Project Manager TeaLinus OS X</p>
                            <span class="date wow flipInX" data-wow-delay="0.3s">09:20</span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Materi</h2>
                            <p class="wow flipInX" data-wow-delay="0.3s">oleh Rizki Dwi Kelimutu</p>

                            <span class="date wow flipInX" data-wow-delay="0.3s">09.40</span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Festival dan Games</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">10:20 </span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Open Discussion dan Tea Break</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">10:40</span>
                        </div>

                    </div>
                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Makan Bersama dan Hiburan </h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">11:30 </span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Penyerahan Plakat Kepada Pemateri</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">12:00</span>
                        </div>


                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Penyerahan Doorprize dan Marchendise</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">12:00 </span>
                        </div>

                    </div>

                    <div class="timeline-block">
                        <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                        </div>

                        <div class="timeline-content">
                            <h2 class="wow flipInX" data-wow-delay="0.3s">Penutup</h2>
                            <span class="date wow flipInX" data-wow-delay="0.3s">12:20 </span>
                        </div>

                    </div>




                </section>


            </div>


        </div>
    </div>

</section>




<section class="gallery" id="galeri">
    <div class="container">
        <div class="section-title">
            <h4>GALERI</h4>
            <p>Dokumentasi release party Tealinux OS</p>

        </div>
        <div class="nav-center bottom-space-lg">

            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active">
                    <a href="#photo-gallery" aria-controls="photo-gallery" role="tab" data-toggle="tab">Foto</a>
                </li>
                <li role="presentation">
                    <a href="#video-gallery" aria-controls="video-gallery" role="tab" data-toggle="tab">Video</a>
                </li>

            </ul>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="photo-gallery">
                <div class="popup-gallery">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{asset ('images/dokumentasi-release-party-tealinuxos-7-2.jpg')}}" title="">
                                <img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7-2.jpg')}}" alt="gallery image"
                                    class="img-responsive wow fadeIn">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{asset ('images/dokumentasi-release-party-tealinuxos-7.jpg')}}" title="">
                                        <img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7.jpg')}}" alt="gallery image"
                                            class="img-responsive wow fadeIn" data-wow-delay="0.2s">
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{asset('images/dokumentasi-release-party-tealinuxos-7-3.jpg')}}" title="">
                                        <img src="{{asset('images/dokumentasi-release-party-tealinuxos-7-3.jpg')}}" alt="gallery image"
                                            class="img-responsive wow fadeIn" data-wow-delay="0.2s">
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{asset('images/dokumentasi-release-party-tealinuxos-7-4.jpg')}}" title="">
                                        <img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7-4.jpg')}}" alt="gallery image"
                                            class="img-responsive wow fadeIn" data-wow-delay="0.4s">
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{asset ('images/panitia-release-party-tealinuxos.jpg')}}" title="">
                                        <img src="{{asset ('images/panitia-release-party-tealinuxos.jpg')}}" alt="gallery image"
                                            class="img-responsive wow fadeIn" data-wow-delay="0.4s">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div role="tabpanel" class="tab-pane" id="video-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center media-video">
                        <div class="video-wrapper">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/kRYLujNkpec" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>


<section class="highlight accommodation" id="detail">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h4>Detail Acara </h4>

        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail wow fadeInUp">
                    <img src="{{asset('images/lokasi.png')}}" alt="Lokasi Acara" style="margin: 30px auto;">
                    <div class="caption">
                        <p class="caption-text">LOKASI</p>
                        <h6 class="caption-title">Aula Gedung E Lantai 3
                            <br> Universitas Dian Nuswantoro</h6>
                        <p class="text-center">
                            <a target="_blank" href="https://www.google.co.id/maps/place/Televisi+Kampus+Universitas+Dian+Nuswantoro+(TVKU)/@-6.9811275,110.4059704,17z/data=!4m5!1m2!2m1!1sTVKU!3m1!1s0x2e708b4eab7880ab:0x40622c0d71e2ddb5?hl=id"
                                class="btn btn-outline" role="button">Lihat Google Maps</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{asset('images/fasilitas.png')}}" alt="Fasilitas" style="margin: 30px auto;">
                    <div class="caption">
                        <p class="caption-text">FASILITAS</p>
                        <h6 class="caption-title" style="text-align: left; ">
                            <ul>
                                <li>Sertifikat Nasional</li>
                                <li>DVD Exclusive TeaLinuxOS X</li>
                                <li>Snack + Tea Break</li>
                                <li>Makan Siang</li>
                                <li>Ilmu + Pengalaman</li>
                                <li>Doorprize*</li>
                            </ul>

                        </h6>
                        * bagi peserta yang beruntung

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
                <div class="thumbnail wow fadeInUp" data-wow-delay="0.6s">
                    <br>
                    <img src="{{asset ('images/tiket.png')}}" alt="The Gleneagles Hotel" style="margin: 30px auto;">
                    <div class="caption">
                        <p class="caption-text">HTM</p>
                        <h6 class="caption-title">Rp. 40.000,-</h6>

                        <h6>Tempat Pendaftaran</h6>

                        <h6 class="caption-title" style="text-align: left; ">
                            <ul>
                                <li>Stand gedung H, Lantai 1 </li>
                                <li>Camp Doscom ( Gedung D ,
                                    <br> Lantai 1 depan kantin
                                    <br> UDINUS)</li>
                            </ul>
                        </h6>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="container" id="daftar">
    <div class="section-title">
        <h5>DAFTAR SEKARANG</h5>
        <p>Jadi saksi perayaan di rilisnya TeaLinuxOS versi terbaru.</p>
        
        {{-- bila sudah tutup --}}
        @if(\App\Peserta::all()->count() > 60)
        <h6>Maaf, pendaftaran telah kami tutup, karena kuota peserta telah terpenuhi.
            <br/>
            <span style="color: #4eae49;">Bagi anda yang telah mendaftar namun belum membayar, silahkan segera lakukan pembayaran. </span>
            <br/>Jika ada pertanyaan, silahkan hubungi kontak dibawah. Terimakasih (: </h6>
        </div>
        @else
    </div>

    {{-- pendaftaran masih buka --}}
    <div class="contact-form bottom-space-xl wow fadeInUp">
        <form action="{{ url('terimakasih')}}" id="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda ( pastikan benar karena akan kami cetak di sertifikat )"
                            value="{{ old('nama') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor HP yang dapat dihubungi"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Alamat Email" required>
                    </div>

                    <div class="form-group has-info">
                        <label class="">Status</label>

                        <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                            <option value="">-- Pilih --</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="pelajar">Pelajar</option>
                            <option value="umum">Umum</option>
                        </select>


                    </div>
                    <div class="instansi">

                    </div>

                    <div class="form-group has-info">
                        <label class=""> DVD TeaLinux OS X</label>

                        <select class="form-control" name="dvd" required="required">
                            <option value="">--Pilih--</option>
                            <option value="32">32 Bit</option>
                            <option value="64">64 Bit</option>

                        </select>

                    </div>

                    <div class="text-center top-space">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Daftar</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
    @endif


</div>
<div class="highlight" id="kontak">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-box">
                    <img src="images/lokasi.png" alt="location icon" class="wow zoomIn">
                    <h5>ALAMAT</h5>
                    <p>Gedung D Lantai 1
                        <br> (Dekat Kantin Udinus)
                        <br>
                        <b>Universitas Dian Nuswantoro</b>
                        <br>Jalan Nakula I No 1 - 15
                        <br>
                        <b>Semarang</b> 50131</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contact-box">
                    <img src="{{asset('images/kontak.png')}}" alt="email icon" class="wow zoomIn" data-wow-delay="0.3s">
                    <h5>KONTAK</h5>
                    <p>Okta Arif Cahya -
                        <b>089525997000</b>
                        <br>Seviana Punky Brilianti -
                        <b></b>
                        <br>Email :
                        <a href="mailto:sekretariat@doscom.org?Subject=Release%20Party" target="_top">sekretariat@doscom.org</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>





<section class="sponsors">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h4>Sponsor Kami</h4>
            <p>Acara ini terselenggara berkat dukungan berbagai pihak, Terimakasih.</p>
        </div>
        <div class="sponsor-slider wow bounceIn">
                <div><a target="_blank" href="http://dinustek.com"><img src="{{asset ('images/sponsor/dinustek.png')}}" class="img-responsive center-block" alt="sponsor dinustek"></a>  </div>
                <div><a target="_blank" href="http://www.clowordistro.com/"><img src="{{asset ('images/sponsor/new-clowor-logo.png')}}" class="img-responsive center-block" alt="sponsor clowor"></a>  </div>
                <div><a target="_blank" href="http://bankjateng.co.id/"><img src="{{asset ('images/sponsor/bank-jateng.png')}}" class="img-responsive center-block" alt="sponsor Bank Jateng"></a>  </div>
                <div><a target="_blank" href="http://maintarget.co/"><img src="{{asset ('images/sponsor/mailtarget.png')}}" class="img-responsive center-block" alt="sponsor mailtarget"></a>  </div>
                <div><a target="_blank" href="http://sepatu.fans.co,id/"><img src="{{asset ('images/sponsor/fans.png')}}" class="img-responsive center-block" alt="sponsor Sepatu fans"></a>  </div>
                <div><a target="_blank" href="http://"><img width="190px" src="{{asset ('images/sponsor/ajt.jpeg')}}" class="img-responsive center-block" alt="sponsor AJT"></a>  </div>
                <div><a target="_blank" href="http://bukalapak.com"><img width="300px" src="{{asset ('images/sponsor/bukalapak.png')}}" class="img-responsive center-block" alt="sponsor Bukalapak"></a>  </div>
                <div><a target="_blank" href="https://semarangwingkorolls.net/"><img width="150px" src="{{asset ('images/sponsor/wingko.png')}}" class="img-responsive center-block" alt="sponsor wingkorols"></a>  </div>
                <div><a target="_blank" href="https://store.pelangi.love/"><img width="150px" src="{{asset ('images/sponsor/pelangi.png')}}" class="img-responsive center-block" alt="sponsor wingkorols"></a>  </div>
                <div><a target="_blank" href="https://mozilla.org/"><img width="250px" src="{{asset ('images/sponsor/mozilla.png')}}" class="img-responsive center-block" alt="sponsor wingkorols"></a>  </div>
                <div><a target="_blank" href="https://mozilla.org/"><img width="250px" src="{{asset ('images/sponsor/bellovoce.png')}}" width="" class="img-responsive center-block" alt="sponsor wingkorols"></a>  </div>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <a data-toggle="modal" data-target="#kerjasama-sponsorship" class="btn btn-outline">Ingin jadi sponsor ?</a>
            </p>
        </div>
    </div>

</section>



<section class="sponsors">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h4>Media Partner Kami</h4>
            <p>Acara ini terselenggara berkat dukungan berbagai pihak, Terimakasih.</p>
        </div>
        <div class="sponsor-slider wow bounceIn">
                <div><a target="_blank" href="http://tvku.tv/"><img src="{{asset ('images/sponsor/tvku.png')}}" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>
                <div><a target="_blank" href="http://eventbanget.com/"><img src="{{asset ('images/mediapartner/eventbanget.png')}}" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>
                <div><a target="_blank" href="http://kabarlinux.id/"><img src="{{asset ('images/mediapartner/kabarlinux.png')}}" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>
                <div><a target="_blank" href="http://eventkampus.com/"><img src="{{asset ('images/mediapartner/eventkampus.jpeg')}}"width="200px" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>
                <div><a target="_blank" href="http://"><img src="{{asset ('images/mediapartner/pg.jpg')}}" width="200px" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>
                <div><a target="_blank" href="http://"><img src="{{asset ('images/mediapartner/smgstudent.jpeg')}}" width="180px" class="img-responsive center-block" alt="sponsor tvku"></a>  </div>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <a data-toggle="modal" data-target="#kerjasama-sponsorship" class="btn btn-outline">Ingin jadi sponsor ?</a>
            </p>
        </div>
    </div>

</section>


<section class="faq" id="faq">
    <div class="container">
        <div class="section-title">
            <h5>Pertanyaan yang sering di tanyakan</h5>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s">
                <h6 class="faq-title">Apa itu
                    <i>open-soure</i> ?</h6>
                <p>Open Source (sumber kode terbuka) , kode sumber yang dibagikan ke siapa aja secara gratis maupun berbayar,
                    dengan open source pengembangan dari kode terbuka menjadi lebih luas dan ditangani oleh banyak orang
                    dari mana aja, siapa saja, kapan saja, dengan kode terbuka kita bebas berkreasi sesuka hati tanpa terikat
                    / bergantung dari suatu vendor tertentu. Simak berbagai alasan mengapa banyak perusahaan IT berskala
                    besar akhirnya berlomba-lomba meng-open source-kan produk mereka ? cari tahu berbagai alasan di acara
                    ini yang bertema "Open Source Everywhere".</p>
                <h6 class="faq-title">Apa itu Tealinux OS ?</h6>
                <p>
                    <a href="http://tealinuxos.org"> TeaLinuxOS </a>adalah distro Linux turunan Ubuntu yang dikembangkan oleh Dinus Open Source Community
                    (DOSCOM) yang berorientasi pemrograman. Dengan menghadirkan filosofi, “Nikmatnya sebuah racikan”, TeaLinuxOS
                    dikembangkan secara terbuka dan bersama-sama untuk menghasilkan distro Linux pemrograman yang dikhususkan
                    untuk dunia pendidikan. </p>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s">
                <h6 class="faq-title">Siapa penyelenggara acara ini ?</h6>
                <p>Acara ini di selenggarakan oleh
                    <a href="http://doscom.org"> Doscom - Dinus Open Source Community</a> . Kami adalah komunitas open source di bidang perangkat lunak
                    yang memilik visi " Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat " melalui berbagai
                    kegitan seperti workshop, seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama
                    TeaLinuxOS. </p>
                <h6 class="faq-title">Bagaimana alur pendaftaran acara ini ?</h6>
                <p>Pendaftaran acara ini dapat di lakukan melalui dua cara :
                    <ul>
                        <li>Datang langsung ke stand / camp kami di Gedung D Lantai 1 Universitas Dian Nuswantoro.
                            <a target="_blank"
                                href="https://www.google.co.id/maps/place/Televisi+Kampus+Universitas+Dian+Nuswantoro+(TVKU)/@-6.9811275,110.4059704,17z/data=!4m5!1m2!2m1!1sTVKU!3m1!1s0x2e708b4eab7880ab:0x40622c0d71e2ddb5?hl=id">Lihat Google Maps</a>
                        </li>
                        <li>Melakukan pendaftaran secara Online lalu melakukan pembayaran via rekening bank. (Nomor rekening
                            dan prosedur lengkap kami kirim via email setelah Anda mendaftar)</li>
                        <ul>
                            <li>Lakukan pembayaran ke nomor rekening kami</li>
                            <li>Konfirmasi pembayaran mu ke
                                <a href="{{ url('/konfirmasi') }}">halaman konfirmasi </a> / kirim sms dengan format "Nama Peserta Nama bank pengirim Atas nama
                                pengirim" </li>
                            <li>Tunggu maximal 1 x 24 Jam, untuk kami melakukan pengecekan lalu kami akan menghubungimu ( :</li>
                        </ul>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="footer-action">
    <div class="container">
        <h4 class="headline-support wow fadeInDown">Ayo gabung dalam perayaan rilis produk anak bangsa</h4>
        <h2 class="headline wow fadeInDown" data-wow-delay="0.1s">TeaLinuxOS X</h2>
        <div class="footer_bottom-bg">
            <a class="btn btn-success btn-xl wow zoomIn" data-wow-delay="0.3s" href="#daftar">DAFTAR SEKARANG</a>
        </div>
    </div>
</section>


<!--modal-->
<div id="pembicara1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h4 class="modal-title">Rizki Dwi Kelimutu</h4>
                </center>
            </div>
            <div class="modal-body">
                <p>
                    <b>Pengalaman :</b>
                </p>
                <ul>
                    <li>Bugzilla Koordinator Mozila Corp</li>
                    <li>Pembicara Gnome Asia Summit 2017</li>
                </ul>
                <br>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara2" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h4 class="modal-title">Masas Dani</h4>
                </center>
            </div>
            <div class="modal-body">
                <p>
                    <b>Pengalaman Kerja :</b>
                </p>
                <ul>
                    <li>Chief Technology Officer
                        <a href="http://gnews.id">GNEWS - Social News Reader </a> (2015 ~ sekarang)</li>
                    <li>VP Engineering
                        <a href="http://gdilab.com">GDILab </a> (2014 ~ Sekarang)</li>
                    <li>Technical Director GDILAB (2013 ~ 2014)</li>
                    <li>Chief Executive Officer Blung Studio (2012 ~ 2013)</li>
                </ul>
                <br>
                <p>
                    <b>Project :</b>
                </p>
                <ul>
                    <li>Olympiasel - Web Informasi Olimpiade Telkomsel 2013 (2013)</li>
                    <li>E-Gamelan Android & Blackberry (2012 - 2013)</li>
                    <li>Gnews IOs (2014)</li>
                    <li>Tea Linux OS (2010 - 2012)</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h4 class="modal-title">Sokibi</h4>
                </center>
            </div>
            <div class="modal-body">
                <p>
                    <b>Pengalaman Kerja</b>
                </p>
                <ul>
                    <li>Owner & Founder Istana Media </li>
                    <li>Penulis Buku Aplikasi Open Source</li>
                    <li>Koordinator Tim Dokumentasi BlankOn Linux (2012 ~ Sekarang)</li>
                    <li>Migrasi Pabrik Sepatu FANS (2014 ~ 2015)</li>
                </ul>
                <p>
                    <b>Kegiatan :</b>
                </p>
                <ul>
                    <li>Support & Training Implementasi Aplikasi Open Source</li>
                    <li>Menulis Panduan Aplikasi Open Source</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="pembicara4" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h4 class="modal-title">Team Doscom</h4>
                </center>
            </div>
            <div class="modal-body">
                <p>
                    <center>Kami adalah komunitas open source di bidang perangkat lunak yang memilik visi " Memasyarakatkan Open
                        Source dan Meng-Open Source-kan Masyrakat " melalui berbagai kegitan seperti workshop, seminar dan
                        sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS.</center>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div id="kerjasama-sponsorship" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <h4 class="modal-title">Kerjasama Sponsorship</h4>
                </center>
            </div>
            <div class="modal-body">
                <p>
                    <center>Terimakasih telah mendukung acara ini, untuk kerjasama sponsorship, silahkan hubungi kami di
                        <b>083842620177</b> - Hilmi Biya atau melalui email :
                        <a href="mailto:sekretariat@doscom.org?Subject=Kerjasama%20Sponsorship"
                            target="_top">sekretariat@doscom.org</a>
                    </center>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-572ff5bda2aff3c7"></script>


@endsection @section('footer')
<script src="{{asset ('js/plugins/countdown.js')}}"></script>
<script type="text/javascript">
    $('#opsi-status').change(function () {

        if ($(this).val() == 'mahasiswa') {
            var instansi = "Apa nama kampus mu ?";
        } else if ($(this).val() == 'pelajar') {
            var instansi = "Apa nama sekolah mu ?";
        } else if ($(this).val() == 'umum') {
            var instansi = "Apa nama instansi mu ?";
        } else {
            $('#instansi').remove();
        }


        $('#instansi').remove();
        $('.instansi').append(
            '<div class="form-group"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' +
            instansi + '"  required /></div>');
    });
</script>
@endsection