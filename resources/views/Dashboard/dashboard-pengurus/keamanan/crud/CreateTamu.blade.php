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
  top : 0 ;
  background-color:#070F33 ;
  position: absolute;
  width: 260px;
  padding: 27px;
  display: flex;
  box-sizing: border-box;
  height: 1500px;
  left: 0;
  margin-top : 0;
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
top : 0 ;
position: absolute;
left : 260px;
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
.zack{
              font-size: 3px;
              width: 200px;
              height: 0.1px;
              background : #FFF;
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
  font-size: 12px;
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
.main .cuy {
font-size: 3px;
width: 200px;
height: 1px;
background : #FFF;
margin-top : 10px;
margin-bottom : 10px;


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


.tableone  .form-control {
        width: 517px;
        height: 35px;
        flex-shrink: 0;
        border-radius: 10px;
        border: 0.5px solid #000;
        background: #EDEDED;
        margin-bottom : 10px;
        margin-top : 5px;
        padding: 15px;
        }
        .tableone .form-control{
            margin-left : 40px
        }
        .tableone .team{
            margin-left: 40px;
        }


        .head .font {
          margin : 50px 10px 10px 0;
            font-size: 25px;

        }
        .head .font .nice{
            font-size: 5px;
            width: 1000px;
            height: 0.1px;
            background : #000;
            margin-top : 10px;
            margin-bottom : 10px;
            margin-left: 21px;
        }
        .head .font .chup {
            color: #000;
            font-family: Poppins;
            font-size: 22px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-bottom : 20px;
            margin-left : 20px;
        }
        .head .font .Data {
            color: #000;
            font-family: Poppins;
            font-size: 36px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-left : 21px;


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
            margin : 30px 20px 30px 400px;
            background :#6471FE;
        }
         .simpen .shut{
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
        }


        .btn-circle {
            width: 30px;
            height: 30px;
            flex-shrink: 0;
            fill: #6571FE;
            border-radius: 50px;
            margin : 10px 10px 10px 100px;

        }
        .btn-circle:hover{
            background-color: #142262;
        }
        .tableone .hunian .form-control{
            color: #000;
            font-family: Poppins;
            font-size: 17px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            box-sizing: border-box;
            width : 400px;
            height : 35px;

        }
        .head {
            margin-top :30px;
            margin-left :20px ;
        }
        .tableone .radio{
          color: #000;
          font-family: Poppins;
          font-size: 18px;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
          text-transform: capitalize;
          display: inline-block;
          vertical-align: middle;
          position: relative;
          cursor: pointer;
          margin-left: 175px;
          padding-left: 40px;
          margin-top: 10px;
        }
        .radio + .radio{
          margin-left: 20px;
        }
        .radio input[type="radio"]{
          display:none;
        }
        .radio span {
          height :30px;
          width:30px;
          border-radius : 50%;
          border:3px solid #6571FE;
          display:block;
          position: absolute;
          left:0 ;
          top: -1px;
        }
        .radio span:after{
          content:"";
          height:8px;
          width:8px;
          background:#6571FE;
          display:block;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%)scale(0);
          border-radius: 50%;
          transition: 300ms ease-in-out 0s;
        }

        .radio input[type="radio"]:checked ~ span:after{
          transform: translate(-50%,-50%)scale(1);
        }
        .radio input:checked ~ .checkmark {
          background-color: #6571FE;
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
  margin-top : 12px;
  margin-left : -14px;
  display: none;
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
                  <a href="{{ url('/dashboardPengurus/Databank') }}" class="sub-item">Data Bank</a>
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
            <div class="strip" id="liveTime"></div>
          <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                            </h1>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                    <div class="logout">
                                    <a href="#" class="tohe">
                                      Logout
                                    </a>
                                    </div>

                                      </div>
                            </div>

                      <div class="head">
        <div class="font">
        <span class="Data">TAMU MENGINAP  </span>
        <p class="nice">-</p>
        </div>

<div class="tableone">
    @include('komponen.pesan')
    <form action="{{ url('/dashboardPengurus/TamuMenginap') }}" method="post">
        @csrf
                <div class="hunian">
                    <label for="judul" class="team">Tanggal Menginap</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='tanggal' value="{{ old('tanggal') }}" id="tanggal">
                    </div>
                </div>
                <div class="hunian">
                    <label for="judul" class="team">Nama Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' value="{{ old('nama') }}" id="nama">
                    </div>
                </div>
                <div class="hunian">
                    <label for="judul" class="team">Tempat Menginap</label>
                    <div class="col-sm-10">
                        <select name="hunian_id" id="hunian_id" class="col-sm-10 form-control h-100">
                            <option value="">Pilih Hunian</option>
                            @foreach ($hunian as $hunianItem)
                            <option value="{{ $hunianItem->id }}">{{ $hunianItem->alamat }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="hunian">
                    <label for="status" class="team">Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control h-100">
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="hunian">
                    <label for="keperluan" class="team">Keperluan</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" name='keperluan' id="keperluan">{{ old('keperluan') }}</textarea>
                    </div>
                </div>


                <div class="simpen">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                                            <button type="submit" class="shut" name="submit">Kembali</button>
                    </div>
                </div>
    </form>
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



      </body>
</html>

