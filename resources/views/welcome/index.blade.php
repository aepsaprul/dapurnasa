@extends('welcome')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
        <h1>Menerima Pendaftaran Member Baru</h1>
        <h2>Distributor Resmi PT Natural Nusantara</h2>
        <a href="https://wa.me/6285728012440?text=Halo%20Admin,%20Saya%20Beminat%20Untuk%20Membeli,%20Bagaimana%20Cara%20Pesan%20Nya?" class="btn-get-started scrollto">Chat Penjual / WhatsApp</a>
        <a href="https://shopee.co.id/ida_divalida" class="btn-get-started scrollto">Shopee</a>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  {{-- <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Cari Produk"><input type="submit" value="Cari">
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer> --}}

  <!-- ======= Produk Pertanian ======= -->

  <section id="custom" class="custom">
    <div class="section-title">
      <h2>produk pertanian</h2>
    </div>
    <div class="custom-produk">
      @foreach ($pertanians as $key => $pertanian)
        <div class="custom-content">
          <div class="header">
            <a href="{{ route('welcome.show', [$pertanian->id]) }}"><img src="{{ asset('storage/' . $pertanian->img) }}" style="max-width:100%;height:auto;"></a>
            <div class="harga">Rp. {{ rupiah($pertanian->harga) }}</div>
            <div class="varian"><a href="{{ route('welcome.show', [$pertanian->id]) }}">{{ $pertanian->varian }}</a></div>
            <div class="tombol">
              <a href="https://wa.me/6285728012440?text={{ $pertanian->link_btn }}" class="beli">Beli</a>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- ======= Produk Peternakan ======= -->

  <section id="custom" class="custom">
    <div class="section-title">
      <h2>produk peternakan</h2>
    </div>
    <div class="custom-produk">
      @foreach ($peternakans as $key => $peternakan)
        <div class="custom-content">
          <div class="header">
            <a href="{{ route('welcome.show', [$peternakan->id]) }}"><img src="{{ asset('storage/' . $peternakan->img) }}" style="max-width:100%;height:auto;"></a>
            <div class="harga">Rp. {{ rupiah($peternakan->harga) }}</div>
            <div class="varian"><a href="{{ route('welcome.show', [$peternakan->id]) }}">{{ $peternakan->varian }}</a></div>
            <div class="tombol">
              <a href="https://wa.me/6285728012440?text={{ $peternakan->link_btn }}" class="beli">Beli</a>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>bisa cod</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            COD (Cash On Delivery) adalah pembayaran yang dilakukan setelah barang sampai, jadi lebih aman
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Review</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <img src="{{ asset('assets/img/testi1.jpg') }}" alt="" style="max-width: 100%;">
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <img src="{{ asset('assets/img/testi2.jpg') }}" alt="" style="max-width: 100%;">
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <img src="{{ asset('assets/img/testi3.jpg') }}" alt="" style="max-width: 100%;">
          </div>
        </div>

      </div>

      <div class="row">
        <a href="https://wa.me/6285728012440?text=produknya%20ready?"> <img src="{{ asset('assets/img/whatsapp-tombol.png') }}" alt="tombol-whatsapp" style="max-width: 100%;"> </a>
      </div>

    </div>
  </section><!-- End Pricing Section -->

</main><!-- End #main -->

@endsection