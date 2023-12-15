<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">

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

.main-konten .around {
  width: 1090px;
  height: 69px;
  flex-shrink: 0;
  background: #E5E8F3;
  position: absolute;
  left: 260px;
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

.around .kanan   {
  width: 29px;
  height: 29px;
  flex-shrink: 0;
  width: 10px;
  padding : 10px;
  margin: -80px 10px 0px 990px;
}

.main-konten .around .drop {
  width: 10px;
  height: 10px;
  flex-shrink: 0;
  margin: -2px 40px 0px 1030px;
  position: relative; /* Menambahkan properti position */
  z-index: 2; /* Menambahkan z-index yang lebih tinggi */
}

.drop a .dropdown {
  color: #000;
  right: 0;
  transition: 0.3s ease;
  position: absolute;
  z-index: 1;
}

.main-konten .around .drop .sub-menu {
  width: 120px;
  height: 60px;
  font-size: 9px;
  flex-shrink: 0;
  border-radius: 10px;
  border: 1px solid #000;
  box-sizing: border-box;
  background: #FFF;
  display: block;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  transform: translateX(-40%);
  margin-top : 15px;
  margin-left : -14px;
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
margin-left: -55px;
margin-top: 120px;

}
.navbar .green .icon{
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  margin-top: 20px;
  margin-bottom : 20px;
}

.green .icon{
  margin-right: 15px;
}
.green a{
  margin-top : 15px;
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
  margin-top: -10px;
}


.main-konten .navbar .yellow {

width: 306px;
height: 130px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #FFF27D;
text-align: center;
margin: -130px 447px 795px 300px;
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
  margin-top: 20px;
  margin-bottom : 20px;
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
  margin-top: 10px;
}



.main-konten .navbar .red {
  width: 306px;
height: 130px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
background: #FF8C8C;
text-align: center;
z-index: 2;
margin: -925px 447px 795px 650px;
}
.main-kontern .red a{
  margin-top:20px;
}
.navbar .red .icon{
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  margin-top: 20px;
  margin-bottom : 20px;
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
margin-left: 5px;
margin-top: -10px;
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
  margin: -735px 105px 399px 650px;
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
  margin-top: 10px ;
  margin-right: 15px;
  margin-bottom : 15px;
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
  margin: -372px 50px 10px 725px;
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
  width: 650px;
height: 529px;
flex-shrink: 0;
border-radius: 20px;
border: 1px solid #000;
margin: -825px 20px 100px -50px;
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
  margin-top: 15px;
  margin-bottom: 15px;
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
  width: 10px;
height: 0px;
font-size : 10px;
flex-shrink: 0;
  stroke-width: 1px;
  color: #000;
  margin: 50px 0 0 0px;
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

.main{
  width: 100%;
  margin-top: px;
  margin: 0px 0 10px 0;
}


.main .item {
  position: relative;
  cursor: pointer;
  margin-top : 10px;

}
.main .item a{
  color: #FFF;
  font-size: 9px;
  text-decoration: none;
  display: block;
  padding: 2px 5px;
  line-height: 30px;
  margin: 0px 0 5px 0;

}
.main .item .icon {
  margin-right: 5px;

}

.main{
  width: 100%;
  margin-top: 5px;
  margin: -5px 0 10px 0;
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
  padding: 2px 10px;
  line-height: 30px;
  margin: -5px 0 0 px 0;

}

.main .item .icon {
  margin-right: 20px;
  padding : 5px;
  margin : -10px 0 0 -35px ;
  margin-right : 20px;
}
.main .item .sub-item {
  margin : 0 0 0 19px;
}
.main .item a.sub-item {
  font-size : 12px;
}
.main .zack {
  margin-bottom: 10px ;
  width: 225px;
  margin : 0 0 0 -5px;
}
.item a .dropdown{
  position: absolute;
  overflow: hidden;
  right: 0;
  margin: 10px;
  transition: 0.3s ease;
}
.item .sub-menu{
  display: none;

}
 .main .item .sub-menu .sub-item:hover{
  background-color: #142262;
}
.sidebar .active{
  left: 0;
}
.curve_chart{
  margin: 20px 20px 40px 1000px;
}
.zack{
font-size: 3px;
width: 200px;
height: 0.1px;
background : #FFF;
}


.sub-menu .tohe{
color: #000;
font-family: Poppins;
font-size: 10px;
font-style: normal;
font-weight: 400;
line-height: normal;
text-decoration: none;
}
.view {
  margin-top : 5px;
  margin-left : 5px;
}
.tohe .icon{
  width: 16px;
  height : 16px;
  margin-right : 3px;
}

.sub-menu .toha{
color: #000;
font-family: Poppins;
font-size: 10px;
font-style: normal;
font-weight: 400;
line-height: normal;
text-decoration: none;
}
.edit {
  margin-top : 3px;
  margin-left: 5px;
}
.toha .icon{
  width: 16px;
  height : 16px;
  margin-right :3px;
}

.logout {
  color: #000;
  font-family: Poppins;
  font-size: 10px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  margin-left: 27px;
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
          <div class="item"><a href="{{ url('/DashboardPengurus') }}"><img src="{{ asset('img/airplay.svg') }}"alt="" class="icon"></i>DashBoard</a>
          </div>
          <p class="zack">-</p>





          <div class="item"><a class="sub-btn"><img src="{{ asset('img/home.png') }}"alt="" class="icon"></i>Hunian & Warga
                  <i class="fas fa-angle-right dropdown"></i>
                </a>
                  <div class="sub-menu">
                    <a href="{{ url('/dashboardPengurus/DataHunian') }}" class="sub-item">Data Hunian</a>
                    <a href="{{ url('/dashboardPengurus/DaraWarga') }}" class="sub-item">Data Warga</a>
                    <a href="{{ url('/dashboardPengurus/DataKeluarga') }}" class="sub-item">Data Keluarga</a>
                    <a href="{{ url('/dashboardPengurus/DataPindah') }}" class="sub-item">Keluarga Pindah Hunian</a>
                    <a href="{{ url('/dashboardPengurus/KepemilikanHunian') }}" class="sub-item">Kepemilikan hunian</a>
                  </div>
                  </div>





                  <div class="item"><a class="sub-btn"><img src="{{ asset('img/users.png') }}"alt="" class="icon"></i>Kepengurusan
                    <i class="fas fa-angle-right dropdown"></i>
                  </a>
                <div class="sub-menu">
                  <a href="{{ url('/dashboardPengurus/PeriodeKepengurusan') }}" class="sub-item">Periode Kepengurusan</a>
                  <a href="{{ url('/dashboardPengurus/Jabatan') }}" class="sub-item">Jabatan Kepengurusan</a>
                  <a href="{{ url('/dashboardPengurus/Pengurus') }}" class="sub-item">Data Pengurus</a>
                  </div>
              </div>




              <div class="item"><a class="sub-btn"><img src="{{ asset('img/bar-chart.png') }}"alt="" class="icon"></i>Keuangan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/dashboardPengurus/DataBank') }}" class="sub-item">Data Bank</a>
                  <a href="{{ url('/dashboardPengurus/Posbiaya') }}" class="sub-item">Pos Biaya</a>
                  <a href="{{ url('/dashboardPengurus/RekeningBank') }}" class="sub-item">Rekening Bank</a>
                  <a href="{{ url('/dashboardPengurus/DataKas') }}" class="sub-item">Data Kas</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/atm 1.png') }}"alt="" class="icon">Iuran Warga
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/dashboardPengurus/Iuran') }}" class="sub-item">Data Iuran</a>
                  <a href="{{ url('/dashboardPengurus/TerimaIuran') }}" class="sub-item">Terima Iuran</a>
                  <a href="{{ url('/dashboardPengurus/Laporan') }}" class="sub-item">Laporan</a>
                  <a href="{{ url('/dashboardPengurus/PengingatPembayaran') }}" class="sub-item">Pengingat Pembayaran</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/shield.png') }}"alt="" class="icon"></i>Keamanan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/dashboardPengurus/RumahKosong') }}" class="sub-item">Rumah Kosong</a>
                  <a href="{{ url('/dashboardPengurus/DataSatpam') }}" class="sub-item">Data Satpam</a>
                  <a href="{{ url('/dashboardPengurus/DataJadwal') }}" class="sub-item">Jadwal Jaga</a>
                  <a href="{{ url('/dashboardPengurus/TamuMenginap') }}" class="sub-item">Tamu Menginap</a>
                  </div>
                </div>


                <div  class="item"><a href="{{ url('/dashboardPengurus/Diskusi') }}" class="sub-btn"><img src="{{ asset('img/message-circle.png') }}"alt="" class="icon"></i>Diskusi

                </a>
                </div>

                <div class="item"><a href="{{ url('/dashboardPengurus/Pengumuman') }}" class="sub-btn"><img src="{{ asset('img/info.png') }}"alt="" class="icon"></i>Pengumuman

                </a>
                </div>

                <div class="item"><a href="{{ url('/dashboardPengurus/Voting') }}" class="sub-btn"><img src="{{ asset('img/copy.png') }}"alt="" class="icon"></i>E-Voting

                </a>
                </div>
                <div class="item"><a href="{{ url('/dashboardPengurus/UMKM') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>UMKM
                  </a>
                  </div>

                  <div class="item"><a href="{{ url('/dashboardPengurus/Berita') }}" class="sub-btn"><img src="{{ asset('img/Vector.png') }}"alt="" class="icon"></i>Berita Kampung

                  </a>
                  </div>
                  <div class="item"><a class="sub-btn"><img src="{{ asset('img/tul.svg') }}"alt="" class="icon"></i>Manajemen Akun
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/dashboardPengurus/Users') }}" class="sub-item">User</a>
                  <a href="{{ url('/dashboardPengurus/Role') }}" class="sub-item">Role</a>
                  </div>
                </div>


        </div>
  </div>
  <div class="main-konten">
                    <div class="around">
                      <h1 class="strip">senin 19 desember 123</h1>
                            <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                            </h1>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                      <div class="view">
                                      <a href="{{ url('/Profile') }}" class="tohe">
                                      <img src="{{ asset('img/ura.svg') }}" alt="View Profile" class="icon">
                                      View Profile
                                    </a>
                                    </div>

                                    <div class="edit">
                                    <a href="{{ url('/Profile/create') }}" class="toha">
                                      <img src="{{ asset('img/ur.svg') }}" alt="Edit Profile" class="icon">
                                      Edit Profile
                                    </a>
                                    </div>

                                    <div class="logout">
                                    <a href="#" class="tohe">
                                      Logout
                                    </a>
                                    </div>

                                      </div>
                                  </div>
                    </div>

                    <div class="navbar">
                        <div class="green">
                            <a><img src="{{ asset('img/123.svg') }}" alt="" class="icon">History Kedatangan Tamu</h1></a>
                            <h1 class="text-one">4 Orang</h1>
                          </div>

                          <div class="yellow">
                            <a><img src="{{ asset('img/what.svg') }}" alt="" class="icon">Total Tagihan Iuran</h1></a>
                            <h1 class="text-one">Tidak Ada Tagihan Untuk Iuran</h1>
                          </div>

                          <div class="red">
                            <a><img src="{{ asset('img/sangkuni.svg') }}" alt="" class="icon">History Pembayaran Iuran</a>
                            <h1 class="text-one">4 KALI BAYAR</h1>

                          </div>

                      <div class="allert">
                        <a><img src="{{ asset('img/alert-circle.svg') }}" alt="" class="icon">Pengumuman</h1></a>
                        <span>
                          <h1 class="text-one" align="left">Kategori : Kebersihan.</h1>
                          <h1 class="text-one" align="left">Untuk : Seluruh Warga.</h1>
                          <h1 class="text-one" align="left">Isi Pengumuman :</h1>
                          <h1 class="text-one" align="left">Diberitahukan kepada seluruh</h1>
                          <h1 class="text-one" align="left">warga bahwa pada tanggal 01</h1>
                          <h1 class="text-one" align="left">Oktober 2021 akan diadakan kerja</h1>
                          <h1 class="text-one" align="left">bakti pembersihan gorong-gorong.</h1>
                          <h1 class="text-one" align="left">dimohon kehadirannya.</h1>
                          <h1 class="text-one" align="left">terima kasih.</h1>
                        </span>
                      </div>

                      <div class="foto">
                        <a><img src="{{ asset('img/berita.svg') }}" alt="" class="icon">Berita Kampung</h1></a>


                        <h1 class="text-one" align="left"><img src="{{ asset('img/foto.png') }}" alt="" class="icon"></a>
                        <h1 class="text-tree" align="left">Kerja bakti tanggal 16/04/2023 jam 09:00 WIB</h1>
                        <h1 class="text-two" align="left">Kumpul dilapangan depan mesjid </h1>
                            <p>_________________________________________________________________________________</p>
                        <h1 class="text-one" align="left"><img src="{{ asset('img/foto.png') }}" alt="" class="icon"></a>
                        <h1 class="text-tree" align="left">Kerja bakti tanggal 16/04/2023 jam 09:00 WIB</h1>
                        <h1 class="text-two" align="left">Kumpul dilapangan depan mesjid </h1>
                            <p>_________________________________________________________________________________</p>
                        <h1 class="text-one" align="left"><img src="{{ asset('img/foto.png') }}" alt="" class="icon"></a>
                        <h1 class="text-tree" align="left">Kerja bakti tanggal 16/04/2023 jam 09:00 WIB</h1>
                        <h1 class="text-two" align="left">Kumpul dilapangan depan mesjid </h1>
                     </div>
                    </div>


              </div>
</div>
</div>






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
          <script>
          const deleteButton = document.getElementById("deleteButton");
          const modal = document.getElementById("modal");
          const confirmDelete = document.getElementById("confirmDelete");
          const cancelDelete = document.getElementById("cancelDelete");

          deleteButton.addEventListener("click", () => {
              modal.style.display = "block";
          });

          cancelDelete.addEventListener("click", () => {
              modal.style.display = "none";
          });

          confirmDelete.addEventListener("click", () => {
              // Di sini Anda bisa menambahkan logika penghapusan item atau tindakan yang sesuai
              console.log("Item deleted.");
              modal.style.display = "none";
          });
          </script>



      </body>
</html>
