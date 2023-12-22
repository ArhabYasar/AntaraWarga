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
margin-left: -60px;
margin-top: 120px;

}
.navbar .green .icon{
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  margin-top: 2px;
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
  margin-top: 20px;
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
  margin-top: 2px;
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
margin-top: 2px;
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
  font-size : 9px;
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
        .Data {
            color: #000;
            font-family: Poppins;
            font-size: 36px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-left : 40px;
            margin-top : 50px;

        }
        .nice{
            font-size: 5px;
            width: 1050px;
            height: 0.1px;
            background : #000;
            margin-top : -5px;
            margin-bottom : 10px;
            margin-left: 21px;
        }

        .tweny .icon {
            width: 270.844px;
            height: 209.875px;
        }
        .tweny .sow {
            align-self: start;
        }
        .tweny {
    display: grid;
    text-align: center;
    grid-template-rows: auto 1fr;
    }

    .icon-wrapper {
        align-self: center;
    }

    .sow {
        align-self: start;
        margin-top: 5px; /* Atur sesuai dengan kebutuhan Anda */
    }

    .tableone {
    display: flex;
    justify-content: center;
}

.form-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 20px;
}

.left-column,
.right-column {
    padding: 10px;
}

.right-column {
    margin-left: 50px;
}
.left-column {
    margin-left: 50px;
}
.form-group {
    margin-top: 30px;
    margin-bottom: 10px;
    margin-right: 30px;
}

.form-control {
    width: 80%;
    flex-shrink: 0;
    border-radius: 5px;
    background: #D9D9D9;
    margin-right : 70px;
}
.simpen .btn-primary{
            font-family: Poppins;
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            width: 140px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 10px;
            margin-right :30px;
            border: 1px solid #6471FE;
            background :#6471FE;
            margin-left : 300px;
            margin-top : 30px;
        }
          .shut{
            font-family: Poppins;
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            width: 140px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 1px solid  #6471FE;
            background : #FFF;
            margin-left : 250px;
            margin-top : 30px;

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
                    <a href="{{ url('/Hunian') }}" class="sub-item">Data Hunian</a>
                    <a href="{{ url('/Warga') }}" class="sub-item">Data Warga</a>
                    <a href="{{ url('/DataKeluarga') }}" class="sub-item">Data Keluarga</a>
                    <a href="{{ url('/PindahHunian') }}" class="sub-item">Keluarga Pindah Hunian</a>
                    <a href="{{ url('/Kepemilikan') }}" class="sub-item">Kepemilikan hunian</a>
                  </div>
                  </div>





                  <div class="item"><a class="sub-btn"><img src="{{ asset('img/users.png') }}"alt="" class="icon"></i>Kepengurusan
                    <i class="fas fa-angle-right dropdown"></i>
                  </a>
                <div class="sub-menu">
                  <a href="{{ url('/PerKepengurusan') }}" class="sub-item">Periode Kepengurusan</a>
                  <a href="{{ url('/JabKepengurusan') }}" class="sub-item">Jabatan Kepengurusan</a>
                  <a href="{{ url('/DatPengurus') }}" class="sub-item">Data Pengurus</a>
                  </div>
              </div>




              <div class="item"><a class="sub-btn"><img src="{{ asset('img/bar-chart.png') }}"alt="" class="icon"></i>Keuangan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/Databank') }}" class="sub-item">Data Bank</a>
                  <a href="{{ url('/Posbiaya') }}" class="sub-item">Pos Biaya</a>
                  <a href="{{ url('/Rekeningbank') }}" class="sub-item">Rekening Bank</a>
                  <a href="{{ url('/Datakas') }}" class="sub-item">Data Kas</a>
                  <a href="{{ url('/KeuanganLaporan') }}" class="sub-item">Laporan</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/atm 1.png') }}"alt="" class="icon">Iuran Warga
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/Dataiuran') }}" class="sub-item">Data Iuran</a>
                  <a href="{{ url('/Terimaiuran') }}" class="sub-item">Terima Iuran</a>
                  <a href="{{ url('/Laporaniuran') }}" class="sub-item">Laporan</a>
                  <a href="{{ url('/IngatPembayaran') }}" class="sub-item">Pengingat Pembayaran</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/shield.png') }}"alt="" class="icon"></i>Keamanan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/RumahKosong') }}" class="sub-item">Rumah Kosong</a>
                  <a href="{{ url('/DataSatpam') }}" class="sub-item">Data Satpam</a>
                  <a href="{{ url('/JadwalJaga') }}" class="sub-item">Jadwal Jaga</a>
                  <a href="{{ url('/TamuMenginap') }}" class="sub-item">Tamu Menginap</a>
                  </div>
                </div>


                <div  class="item"><a href="{{ url('/Diskusi') }}" class="sub-btn"><img src="{{ asset('img/message-circle.png') }}"alt="" class="icon"></i>Diskusi

                </a>
                </div>

                <div class="item"><a href="{{ url('/Pengumuman') }}" class="sub-btn"><img src="{{ asset('img/info.png') }}"alt="" class="icon"></i>Pengumuman

                </a>
                </div>

                <div class="item"><a href="{{ url('/Evoting') }}" class="sub-btn"><img src="{{ asset('img/copy.png') }}"alt="" class="icon"></i>E-Voting

                </a>
                </div>
                <div class="item"><a href="{{ url('/UMKM') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>UMKM
                  </a>
                  </div>

                  <div class="item"><a href="{{ url('/BeritaKampung') }}" class="sub-btn"><img src="{{ asset('img/Vector.png') }}"alt="" class="icon"></i>Berita Kampung

                  </a>
                  </div>
                  <div class="item"><a class="sub-btn"><img src="{{ asset('img/tul.svg') }}"alt="" class="icon"></i>Manajemen Akun
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/ManajemenUser') }}" class="sub-item">User</a>
                  <a href="{{ url('/Manajemen') }}" class="sub-item">Role</a>
                  </div>
                </div>


        </div>
  </div>
  <div class="main-konten">
                <div class="around">
                      <h1 class="strip">senin 19 desember | 11:40</h1>
                            <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                            </h1>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                      <div class="view">
                                      <a href="Profile" class="tohe">
                                      <img src="{{ asset('img/ura.svg') }}" alt="View Profile" class="icon">
                                      View Profile
                                    </a>
                                    </div>

                                    <div class="edit">
                                    <a href="Profile/create" class="toha">
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

                            <p class="Data"> EDIT PROFILE</p>
                            <p class="nice">-</p>



                             <div class="tableone">
                                @extends("komponen.pesan")
                                <form action="{{ url('/dashboardWarga/Profile/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="left-column">
                                        <input type="hidden" class="form-control" name='username' value="{{ $data->username }}" id="username">
                                        <input type="hidden" class="form-control" name='nik' value="{{ $data->nik }}" id="nik">
                                            <div class="form-group">
                                                <label for="username" class="team">Nama Lengkap</label>
                                                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="team">Email</label>
                                                <input type="text" class="form-control" value="{{ $data->email }}" name='email' id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="team">Alamat</label>
                                                <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="phone">
                                            </div>
                                        </div>
                                        <div class="right-column">
                                            <div class="form-group">
                                                <label for="phone2" class="team">No. KK</label>
                                                <input type="text" class="form-control" name='nkk' value="{{ $data->nkk }}" id="phone2">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone3" class="team">No handphone</label>
                                                <input type="text" class="form-control" name='nomor_hp' value="{{ $data->nomor_hp }}" id="phone3">
                                            </div>
                                            <div class="form-group">
                                              <label for="formFile" class="team">Foto Profile</label></p>
                                              <div class="hadeh">
                                                <input type="file" class="form-control" id="foto" name="foto">
                                              </div>
                                        @if ($data->foto)
                                              <img src="{{ asset('path-to-your-image-directory/' . $data->foto) }}" alt="" class="icon" width="200px" height="200px" >
                                            @endif
                                              </div>
                                        </div>
                                        <div class="simpen">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="shut" name="submit">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>

                </div>


    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
