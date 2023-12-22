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
            margin-left : 100px
        }
        .tableone .team{
            margin-left: 20px;
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
            margin-left : 41px;
        }
        .head .font .Data {
            color: #000;
            font-family: Poppins;
            font-size: 36px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-left : 21px;
            margin-top : 100px;

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
            margin-left : 20px;

        }
        .head {
            margin-top :30px;
            margin-left :20px ;
        }
        .keterangan

        .radio-group {
          color: #000;
  font-family: Poppins;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  margin: 20px 20px 10px 20px;
}

.radio {
  color: #000;
  font-family: Poppins;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  text-transform: capitalize;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  cursor: pointer;
  margin-left: 100px;
  padding-left: 40px;
  margin-top: 10px;
  margin-bottom: 5px;
}

.radio input {
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

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  border: 1px solid  #000;
  border-radius: 50%;
}

.radio:hover input ~ .checkmark {
  background-color: #ccc;
}

.radio input:checked ~ .checkmark {
  background-color: #6471FE;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.radio input:checked ~ .checkmark:after {
  display: block;
}

.radio .checkmark:after {
  top: 90%;
  left: 90%;
  transform: translate(-10%, -10%);
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #fff;
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

.keterangan1 {
width: 390px;
height: 406px;
flex-shrink: 0;
border-radius: 10px;
border: 0.5px solid #000;
background: #FFF;
margin-left : 110px;
margin-top : 10px;
margin-bottom : 10px;
}

.team2 {
    margin-left : 100px;
    margin-top : 20px ;
}
.keterangan1 .team {
    margin-bottom : 10px;
    margin-top : 10px;
    margin-left : 20px;
}

.tableone .hunian2 .form-control{
            color: #000;
            font-family: Poppins;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            box-sizing: border-box;
            width : 350px;
            height : 35px;
            margin-left : 20px;
        }

        .zack{
font-size: 3px;
width: 200px;
height: 0.1px;
background : #FFF;
}
.cam {
  margin-left : 20px;
}
span.checkmark{
  margin-left : 10px;
}
label.radio{
  margin-left : 40px;

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
          <div class="item"><a href="{{ url('/DashboardPetugas') }}"><img src="{{ asset('img/airplay.svg') }}"alt="" class="icon"></i>DashBoard</a>
          </div>
          <p class="zack">-</p>




              <div class="item"><a class="sub-btn"><img src="{{ asset('img/atm 1.png') }}"alt="" class="icon">Iuran Warga
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/IURANWARGA') }}" class="sub-item">Iuran Warga</a>
                  <a href="{{ url('/LaporanIuranWarga') }}" class="sub-item">Laporan Iuran</a>

                  </div>
              </div>

              <div class="item"><a class="sub-btn"><img src="{{ asset('img/bar-chart.png') }}"alt="" class="icon"></i>Keuangan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/LaporanKeuangan') }}" class="sub-item">Laporan Keuangan</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/shield.png') }}"alt="" class="icon"></i>Keamanan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                <a href="{{ url('/Buku') }}" class="sub-item">Buku Tamu</a>

                  </div>
                </div>

        </div>
  </div>
  <div class="main-konten">
        <div class="around">
          <h1 class="strip">senin 19 desember | 20:16</h1>
          <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                            </h1>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                      <div class="view">
                                      <a href="{{ url('/ProPetugas') }}" class="tohe">
                                      <img src="{{ asset('img/ura.svg') }}" alt="View Profile" class="icon">
                                      View Profile
                                    </a>
                                    </div>

                                    <div class="edit">
                                    <a href="{{ url('/ProPetugas/create') }}" class="toha">
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

    <div class="head">
        <div class="font">
        <span class="Data">Buku Tamu > ADD</span>
        <p class="nice">-</p>
    </div>
        </div>
        <div class="tableone">
            <form action="{{ url('/dashboardPetugas/BukuTamu') }}" method="post">
                @csrf
                    <div class="hunian">
                    <label for="judul" class="team">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ old('nama') }}" name="nama" id="nama"autocomplete="off">
                    </div>
                </div>

                <label for="judul" class="team">Gender</label>
    <div class="radio-group">
        <label class="radio">
            <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-Laki">
            <label class="form-check-label" for="laki-laki">
                Laki-Laki
            </label>
            <span class="checkmark"></span>
        </label>

        <label class="radio">
            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan">
            <label class="form-check-label" for="perempuan">
                Perempuan
            </label>
            <span class="checkmark"></span>
        </label>
    </div>

    <label for="judul" class="team2">Keterangan</label>
    <div class="keterangan1">
    <label class="cam">lapor</label>

    <div class="radio-group">
        <label class="radio">
            <input class="form-check-input" type="radio" name="lapor" id="sudah" value="Sudah">
            <label class="form-check-label" for="sudah">
                Sudah
            </label>
            <span class="checkmark"></span>
        </label>

        <label class="radio">
            <input class="form-check-input" type="radio" name="lapor" id="belum" value="Belum">
            <label class="form-check-label" for="belum">
                Belum
            </label>
        </label>
        <span class="checkmark"></span>
    </div>

    <label for="judul" class="team">Status Perkawinan</label>
    <div class="radio-group">
        <label class="radio">
            <input class="form-check-input" type="radio" name="status_kawin" id="menikah"
            value="Menikah">
        <label class="form-check-label" for="menikah">
            Menikah
        </label>
        <span class="checkmark"></span>
        </label>

        <label class="radio">
            <input class="form-check-input" type="radio" name="status_kawin" id="belum-menikah"
            value="Belum Menikah">
        <label class="form-check-label" for="belum-menikah">
            Belum Menikah
        </label>
        <span class="checkmark"></span>
        </label>

        <label class="radio">
            <input class="form-check-input" type="radio" name="status_kawin" id="duda" value="Duda">
            <label class="form-check-label" for="duda">
                Duda
            </label>
        <span class="checkmark"></span>
        </label>

        <label class="radio">
            <input class="form-check-input" type="radio" name="status_kawin" id="janda" value="Janda">
            <label class="form-check-label" for="janda">
                Janda
            </label>
            <span class="checkmark"></span>
        </label>
    </div>

              <div class="hunian2">
                    <label for="judul" class="team">Lain - Lain</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="lain_lain" id="lain_lain" rows="3">{{ old('lain_lain') }}</textarea>
                    </div>
                </div>


                </div>



              <div class="hunian">
                    <label for="nama" class="team">Usia</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('usia') }}" name="usia" id="usia" autocomplete="off">
                    </div>
                </div>
                <div class="hunian">
                    <label for="nama" class="team">Kunjungan Ke</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ old('kunjungan') }}" name="kunjungan" id="kunjungan" autocomplete="off">
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



      </body>
</html>
