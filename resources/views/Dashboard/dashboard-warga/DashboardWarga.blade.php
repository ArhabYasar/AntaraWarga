<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Warga</title>
    <link rel="stylesheet" href="still.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        *{
  font-family: 'Poppins', sans-serif;
  padding: 0;
  margin:0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;


}

.sidebar {
  background-color:#070F33 ;
  position: absolute;
  width: 260px;
  padding: 27px;
  display: flex;
  box-sizing: border-box;
  height: 1500px;
  left: 0;
  overflow: hidden;
  border-top-left-radius: 20px;
}



.main-konten{
  width: 1090;
  margin-left: 260px;
}

.main-konten .around{
  width: 1090px;
height: 69px;
flex-shrink: 0;
background: #E5E8F3;
}
.around .strip {
  width: 400px;
  height: 4;
  color: #000;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 100px;
  line-height: normal;
  padding: 27px;
  box-sizing: border-box;
}

.around .kanan  {
  width: 29px;
height: 29px;
flex-shrink: 0;
  width: 10px;
  margin: -50px 10px 0px 1000px;
}
.main-konten .around .drop{
  width: 10px;
  height: 10px;
  flex-shrink: 0;
  margin: -23px 40px 0px 1030px;
}
.drop a .dropdown{
  overflow: hidden;
  right: 0;
  transition: 0.3s ease;
}

.drop .sub-menu{
  background: #142262;
  display: none;

}

.navbar .green {
  width: 306px;
  height: 130px;
  flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #86F674;
box-sizing: border-box;
}
.main-konten .navbar .green {
  color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-align: center;
margin-left: 58px;
margin-top: 30px;


}
.navbar .green .icon{
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  margin-top: 20px;
}
.green .icon{
  margin-right: 15px;
}
.main-konten .navbar .green .text-one{
color: #403F3F;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.navbar .green .text-one{
  margin-top: 19px;
}


.main-konten .navbar .yellow {

width: 306px;
height: 130px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #FFF27D;
text-align: center;
margin: -130px 447px 795px 400px;
}

.navbar .yellow{
  color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.navbar .yellow .icon{
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  margin-top: 21px;
}

.yellow .icon{
  margin-right: 15px;
}

.navbar .yellow .text-one{
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin-top: 37px;
}



.main-konten .navbar .red {
  width: 306px;
height: 130px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #FF8C8C;
text-align: center;
margin: -925px 447px 795px 750px;
}
.navbar .red .icon{
  width: 24px;
height: 24px;
flex-shrink: 0;
margin-top: 20px;
}
.red .icon{
  margin-right: 15px;
}
.navbar .red {
  color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-align: center;

}
.navbar .red .text-one{
  color: #403F3F;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-top: 20px;
}




.main-konten .navbar .pink {
  width: 306px;
height: 130px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #FF8C8C;
text-align: center;
margin: -925px 447px 795px 750px;
}
.navbar .pink .icon{
  width: 24px;
height: 24px;
flex-shrink: 0;
margin-top: 20px;
}
.pink .icon{
  margin-right: 15px;
}
.navbar .pink {
  color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.navbar .pink .text-one{
  color: #403F3F;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-top: 22px;
margin-right: 50px;
}
.navbar .pink .text-two{
  color: #403F3F;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-top: 6px;
margin-right: 75px;
}
.navbar .pink .text-tree{
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin: -16px 0 0 60px;

}
.navbar .pink .text-four{
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin: -15px 10px 10px 100px;
}
.navbar .pink .text-five{
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin: -17px 10px 10px 70px;
}
.navbar .pink .text-six{
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin: -25px 10px 10px 95px;
}

.main-konten .navbar .allert{
  width: 306px;
  height: 319px;
  flex-shrink: 0;
  border-radius: 20px;
  border: 1px solid #000;
  text-align: center;
  margin: -750px 105px 399px 750px;
}

.navbar .allert .text-one{

  flex-shrink: 0;
  color: #403F3F;
  font-family: Poppins;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  margin-top: 5px;
  margin-left: 20px;
  line-height: normal;
}

.navbar .allert .icon{
  margin-top: 24px ;
  margin-right: 15px;
}
.navbar .allert {
  width: 132px;
height: 23.341px;
flex-shrink: 0;
  color: #F13434;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
}

.main-konten .navbar .Data{
  width: 306px;
  height: 319px;
  flex-shrink: 0;
  border-radius: 20px;
  border: 1px solid #000;
  margin: -372px 50px 10px 750px;
}

.navbar .Data .icon{
  margin-right: 14px;
  margin-top: 20px;
}
.navbar .Data{
  width: 101.895px;
height: 23.341px;
flex-shrink: 0;
color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-align: center;
}
.navbar .Data .text-one{
  width: 185px;
height: 18.154px;
flex-shrink: 0;
color: #403F3F;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-left: 20px;
margin-top: 10px;
}

.main-konten .navbar .foto{
  width: 600px;
height: 529px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
margin: -715px 20px 100px 57px;
}
.navbar .foto {
  width: 161px;
height: 23px;
flex-shrink: 0;
color: #000;
font-family: Poppins;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-align: center;
}
.navbar .foto .icon{

  margin-right: 20px;
  margin-top: 16px;
}
.navbar .foto .text-two{
  width: 333px;
height: 18px;
flex-shrink: 0;
color: #403F3F;
font-family: Poppins;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin : -30px 0 0px 290px;
}
.foto .text-one{
  width: 333px;
height: 18px;
flex-shrink: 0;
color: #403F3F;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 20px;
margin-left: 30px;
}
.foto .text-tree{
width: 333px;
height: 18px;
flex-shrink: 0;
color: #403F3F;
font-family: Poppins;
font-size: 14px;
font-style: normal;
font-weight: 700;
line-height: normal;
margin-top: 20px;
margin: 0 30px 40px 290px;
}
.foto p{
  width: 623px;
height: 0px;
flex-shrink: 0;
  stroke-width: 1px;
  color: #A3A3A3;
  margin: 50px 0 0 -10px;
}

.list-one{
  color: #FFF;
font-size: 24px;
font-style: normal;
font-weight: 600;
line-height: normal;
}
.sidebar a {
  text-decoration: none;
}


.sidebar .list-two{
  color: #6571FE;
font-size: 24px;
font-style: normal;
font-weight: 600;
line-height: normal;

  }
  .sidebar a {
      text-decoration: none;
  }

.list-nine{
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin: 10px 0 30px 0;
 text-align: center;

}
.main p{
  margin-bottom: 10px;
  color: #FFF;
}

.main{
  width: 100%;
  margin-top: px;
  margin: 0px 0 10px 0;
}
.main .item {
  position: relative;
  cursor: pointer;

}
.main .item a{
  color: #FFF;
  font-size: 12px;
  text-decoration: none;
  display: block;
  padding: 2px 5px;
  line-height: 30px;
  margin: 0px 0 5px 0;

}
.main .item .icon {
  margin-right: 12px;
}
.item a .dropdown{
  position: absolute;
  overflow: hidden;
  right: 0;
  margin: 10px;
  transition: 0.3s ease;
}
.item .sub-menu{
  background: #142262;
  display: none;

}
.sidebar .active{
  left: 0;
}
.curve_chart{
  margin: 20px 20px 40px 1000px;
}
    </style>


  </head>

<body>

<div class="container">

  <div class="sidebar">
        <div class="main">

          <div class="list-nine">
            <h1 class="d-inline">
                <span class="list-one">Antara</span>

                <span class="list-two">Warga</span>
            </h1>
          </div>
          <div class="item"><a href=""><img src="{{ asset('img/airplay.svg') }}"alt="" class="icon"></i>DashBoard</a>
          </div>
          <p>-------------------------------------</p>

              <div class="item"><a class="sub-btn"><img src="{{ asset('img/atm 1.png') }}"alt="" class="icon">Iuran Warga
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                    <a href="{{ route('pengingat.show', ['id' => 1]) }}" class="sub-item">Tagihan & Pengingat Pembayaran</a>
                    <a href="" class="sub-item">Konfirmasi Pembayaran Iuran</a>
                    <a href="" class="sub-item">Laporan Pembayaran</a>

                  </div>
              </div>

              <div class="item"><a class="sub-btn"><img src="{{ asset('img/bar-chart.png') }}"alt="" class="icon"></i>Keuangan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="" class="sub-item">Laporan Keuangan</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/shield.png') }}"alt="" class="icon"></i>Keamanan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
              <div class="sub-menu">
                <a href="{{ route('verify') }}" class="sub-item">Verifikasi Akun</a>
            </div>
            </div>


                <div class="item"><a class="sub-btn"><img src="{{ asset('img/message-circle.png') }}"alt="" class="icon"></i>Diskusi
                  <i class="fas fa-angle-right dropdown"></i>
                </a>
                </div>

                <div class="item"><a href="/dashboardWarga/Pengumuman" class="sub-btn"><img src="{{ asset('img/info.png') }}"alt="" class="icon"></i>Pengumuman
                    <i class="fas fa-angle-right dropdown"></i>
                  </a>
                  </div>

                <div class="item"><a href="/dashboardWarga/E-Voting" class="sub-btn"><img src="{{ asset('img/home.png') }}"alt="" class="icon"></i>E-Voting
=                </a>
                </div>

                  <div class="item"><a href="/dashboardWarga/UMKM" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>UMKM
                    <i class="fas fa-angle-right dropdown"></i>
                  </a>
                  </div>

                  <div class="item"><a class="sub-btn"><img src="{{ asset('img/Vector.png') }}"alt="" class="icon"></i>Berita Kampung
                    <i class="fas fa-angle-right dropdown"></i>
                  </a>

                  </div>
        </div>
  </div>
    <div class="main-konten">
        <div class="around">
            <div class="strip" id="liveTime"></div>
                <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                </h1>
                      <div class="drop"><a class="sub-btn">
                        <i class="fas fa-angle-right dropdown"></i></a>
                          <div class="sub-menu">
                              <a href="/logout" class="sub-item">Logout</a>
                              <a href="{{ route('profile.edit', ['id' => $data->id]) }}">Edit Profile</a>
                              <a href="{{ url('/dashboardWarga/Profile') }}"><img src="" alt="" class="icon">Profil</a>
                            </div>
                      </div>
        </div>

          <div class="navbar">
            <div class="green">
                <a><img src="{{ asset('img/123.svg') }}" alt="" class="icon">History Kedatangan Tamu</h1></a>
                <h1 class="text-one">{{ $jumlahData }} Orang</h1>
              </div>

              <div class="yellow">
                @foreach ($tagihan as $item)
                    <a><img src="{{ asset('img/what.svg') }}" alt="" class="icon">Total Tagihan Iuran</h1></a>
                    <h1 class="text-one">{{ $item->nominal }}</h1>
                @endforeach
            </div>

              <div class="red">
                <a><img src="{{ asset('img/sangkuni.svg') }}" alt="" class="icon">History Pembayaran Iuran</h1></a>
                <h1 class="text-one">{{ $pembayaran }} KALI BAYAR</h1>

              </div>

          <div class="allert">
            <a><img src="{{ asset('img/alert-circle.svg') }}" alt="" class="icon">Pengumuman</h1></a>
            <span>
                @foreach ($pengumuman as $item)
                <h1 class="text-one" align="left">Kategori : {{ $item->kategori }}</h1>
                <h1 class="text-one" align="left">Untuk : Seluruh Warga.</h1>
                <h1 class="text-one" align="left">Isi Pengumuman :</h1>
                <h1 class="text-one" align="left">{{ $item->isi }}</h1>
                @endforeach
            </span>
          </div>

          <div class="foto">
            <a><img src="{{ asset('img/berita.svg') }}" alt="" class="icon">Berita Kampung</h1></a>


            @foreach ($berita as $item)
                <h1 class="text-one" align="left"><img src="{{ asset('path-to-your-image-directory/' . $item->foto) }}" alt="" class="icon"></a>
                <h1 class="text-tree" align="left">{{ $item->judul }}</h1>
                <h1 class="text-two" align="left">{{ $item->isi }}</h1>
                <hr>
            @endforeach

    </div>

        </div>


  </div>
</div>




<script>
    function updateClock() {
        var now = new Date();
        var day = now.toLocaleDateString('id-ID', { weekday: 'long' });
        var date = now.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
        var time = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });
        var currentTime = day + ' | ' + date + ' | ' + time + ' WIB';

        document.getElementById('liveTime').innerText = currentTime;
    }

    setInterval(updateClock, 1000); // Perbarui setiap detik
    updateClock(); // Agar waktu ditampilkan segera setelah halaman dimuat
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
          <script>
           $(document).ready(function(){
            $('.menu-btn').click(function(){
              $('.side-bar').addClass('active');
              $('.menu-btn').css("visibility","hidden");
            });
          $('close-btn').click(function(){
            $('.side-bar').removeClass('active')
            $('menu-btn').css("visibility","visible");
          });
           $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
           })
          })
          </script>

      </body>
</html>
