@extends('app') @section('content-homepage')

<div class="container" id="daftar">
    <div class="section-title">
        <h5>TAMU UNDANGAN</h5>
        <p>Registrasi Tamu Undangan dan Delegasi Release Party TealinuxOS {{env('TEALINUXOS_VERSION')}}.</p>

        {{-- bila sudah tutup --}} @if(\App\Peserta::all()->count() > 130)
        <h6>Maaf, pendaftaran telah kami tutup, karena kuota peserta telah terpenuhi.
            <br/>
            <span style="color: #4eae49;">Bagi anda yang telah mendaftar namun belum membayar, silahkan segera lakukan pembayaran. </span>
            <br/>Jika ada pertanyaan, silahkan hubungi kontak dibawah. Terimakasih (: </h6>
    </div>
    @else
</div>

{{-- pendaftaran masih buka --}}
<div class="contact-form bottom-space-xl wow fadeInUp">
    <form action="{{ url('terimakasihTamu')}}" id="" method="POST">
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
                    <label class="">Tamu undangan</label>

                    <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                        <option value="">-- Pilih --</option>
                        <option value="komunitas">Komunitas</option>
                        <option value="delegasi">Delegasi Ormawa</option>
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

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-572ff5bda2aff3c7"></script>


@endsection @section('footer')
<script src="{{asset ('js/plugins/countdown.js')}}"></script>
<script type="text/javascript">
    $('#opsi-status').change(function () {

        if ($(this).val() == 'komunitas') {
            $('#instansi').remove();
            var instansi = "Apa nama komunitas mu ?";
            $('.instansi').append(
                '<div class="form-group"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' +
                instansi + '"  required /></div>');
        } else if ($(this).val() == 'delegasi') {
            $('#instansi').remove();
            var instansi = "Apa nama ormawa mu ?";
            $('.instansi').append(
                '<div class="form-group"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' +
                instansi + '"  required /></div>');
        } else {
            $('#instansi').remove();
        }

    });
</script>
@endsection