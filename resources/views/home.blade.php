@extends('layout')
@section('title', 'HomePage')

@section('konten')
<header class="jumbotron jumbotron-fluid">
    <div class="container-fluid text-center">
       <h1 class="display-3">The Best Solution for Your Business</h1>
       <p class="lead pb-4">We help you maximize performance and build a healthy organization.</p>
    </div>
</header>

<section id="services" class="container">
   <h2 class="display-4 text-center mt-5 mb-4">We are Vascommers!</h2>

   <div class="row row-cols-1 row-cols-md-3 text-center">
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/bright.png') }}">
            <div class="card-body">
               <h4 class="card-title"><b>B</b>enefit to Community</h4>
               <p class="card-text" style="">Vascomm hadir untuk memberikan solusi terbaik yang bisa
                memberikan manfaat serta nilai baru bagi bisnis Anda
                </p>
            </div>
         </div>
      </div>

      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/running.png') }}">
            <div class="card-body">
                <h4 class="card-title"><b>R</b>unning Effectively</h4>
                <p class="card-text">Kami bekerja bukan hanya untuk solusi terbaik, tapi juga
                dengan cara yang efektif dan efisien, tanpa ada pemborosan waktu
                </p>
            </div>
         </div>
      </div>

      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/innovative.png') }}">
            <div class="card-body">
                <h4 class="card-title"><b>I</b>nnovation & Integrity</h4>
               <p class="card-text">Inovasi menjadi bagian keseharian kami dalam bekerja. Tapi
                itu saja belum cukup tanpa dilandasi dengan integritas dalam
                profesionalisme kerja.</p>
            </div>
         </div>
      </div>

      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/best.png') }}">
            <div class="card-body">
                <h4 class="card-title"><b>G</b>ive the Best</h4>
               <p class="card-text">Kami memaksimalkan performa kerja (work all out) demi
                sebuah hasil yang memuaskan. Intinya adalah best solutions
                for the best service and product</p>
            </div>
         </div>
      </div>

      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/performance.png') }}">
            <div class="card-body">
                <h4 class="card-title"><b>H</b>igh Performance</h4>
               <p class="card-text">Setiap produk dan layanan yang kami ciptakan, menggunakan teknologi dengan performa tinggi. Sehingga itu mampu
                menunjang best experience sekaligus penggunaan jangka
                panjang.
                </p>
            </div>
         </div>
      </div>

      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" style="width: 100%; height: 250px;" src="{{ asset('assets/img/default/partner.png') }}">
            <div class="card-body">
                <h4 class="card-title"><b>T</b>rusted Partner</h4>
               <p class="card-text">Kami selalu berusaha untuk menjadi
                mitra yang dapat dipercaya oleh klien. Oleh karena itu, Vascomm telah berhasil menjadi salah satu patner terpercaya
                perusahaan BUMN, komunitas dan korporasi swasta besar
                lain di Indonesia.
                </p>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
