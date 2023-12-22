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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
  font-size: 9px;

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


        table{
                box-sizing: border-box;
             }

             body{
                margin : 30px;
                font-family : Poppins ;
             }

             .table {
              margin-top : 500px;
                background-color : #FFF;
                font-size: 14px;
                color: #444;
                white-space: nowrap;

            }
            table>thead{
                background-color : #FFF;
                color: #000;
            }
            table th, table td{
              border : 3px solid gray;
                text-align : center;
                padding : 10px;
                height: 600px;

            }

            table>thead th{
                width: 1050px;
                height: 50px;
                flex-shrink: 0;
                padding: 10px;
            }

            .btn-warning{
            background: #EE5353;
            width: 60px;
            height: 25px;
            flex-shrink: 0;
            border-radius: 10px;
            }
            .btn-warning{
                text-decoration:none;
                color: #FFF;
                font-family: Poppins;
                font-size: 12px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                gap : 5px;
            }
            .btn-danger{
            background: #EE5353;
            width: 60px;
            height: 25px;
            flex-shrink: 0;
            border-radius: 10px;
            }
            .btn-danger{
                text-decoration:none;
                color: #FFF;
                font-family: Poppins;
                font-size: 12px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }
            table{
              margin : 20px 20px 30px 25px;
            }

            .Data {
            color: #000;
            font-family: Poppins;
            font-size: 36px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-left : 21px;
            margin-top : 50px;

        }
        .nice{
            font-size: 5px;
            width: 1050px;
            height: 0.1px;
            background : #000;
            margin-top : 5px;
            margin-bottom : 10px;
            margin-left: 21px;
        }
        .Data .btn-warning{
            background: #6471FE;
            width: 170px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 10px;
            }
            .Data .btn-warning{
              color: #FFF;
              font-family: Poppins;
              font-size: 20px;
              position: center;
              font-style: normal;
              font-weight: 600;
              line-height: normal;
              border : 1px solid #FFF;

            }
            .pencarian{
              width: 1050px;
              height: 111px;
              flex-shrink: 0;
              border-radius: 20px;
              border: 0.3px solid #000;
              background: #FFF;
              margin : 10px 10px 10px 25px;
            }
            .zack{
              font-size: 3px;
              width: 200px;
              height: 0.1px;
              background : #FFF;
            }

            .pencarian .form-control {
              width: 450px;
              height: 35px;
              flex-shrink: 0;
              border-radius: 10px;
              border: 0.2px solid #000;
              background: #EEE;
        }
        .pencarian .form-control{
            margin : 40px 10px 10px 250px ;
        }
        .pencarian .icon {
          margin : -70px 10px 10px 655px;
        }
        .zaki .btn-dark{
          color: #FFF;
          font-family: Poppins;
          font-size: 15px;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
          border-radius: 10px;
          text: center;
        }

        .zaki .btn-dark{
          margin : -120px 10px 10px 720px;
          text-align: center;
        }
        .btn-primary{
          background-color: #6471FE;
          margin: -5px 0 0 20px;

        }
        .delete {
            width: 300px;
            height: 150px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 1px solid #000;
            position: relative;
            background: #FFF;
            margin : 10px 0 0 350px;
        }
        .delete .btn-warning {
            margin: 30px 0 0 70px;
        }
        .delete .btn-danger {
            margin: 30px 0 0 20px;
        }
        .delete .delet{
            width: 170px;
            height: 26px;
            flex-shrink: 0;
            color: #000;
            font-family: Poppins;
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .delet{
            margin : 20px 0 0 100px;
        }
        .delete .deteck{
            width: 417px;
            height: 42px;
            flex-shrink: 0;
            color: #000;
            text-align: center;
            font-family: Poppins;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-left: 19px;
        }
        .deteck{
            font-family: 'Poppins', sans-serif;

        }
        .delete .btn-info{
            color: #FFF;
            font-family: Superscript;
            font-size: 12px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .delete .btn-info {
            border: 1px solid #6571FE;
            background: #6571FE;
            border-radius : 5px;
            width: 45px;
            height: 23px;
            margin : 20px 0 0 95px;
        }
        .btn-info {
            text: center;
        }
        .delete .btn-success{
            color: #FFF;
            font-family: Superscript;
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .delete .btn-success {
            border: 1px solid #EE5353;
            background: #EE5353;
            border-radius : 5px;
            width: 50px;
            height: 23px;
            margin : 20px 0 0 10px;
        }
        .btn-success {
            text: center;
        }

        .chart {
    display: flex;
    width: 900px; /* Lebar line chart */
    height: 400px; /* Tinggi line chart */
    border: 1px solid #000; /* Garis batas line chart */
    margin: 20px auto; /* Margin tengah */
    position: relative; /* Diperlukan untuk elemen titik */
}
.line {
  position: absolute;
  background-color: #3498db; /* Warna garis yang Anda inginkan */
  z-index: -1; /* Untuk menempatkan garis di belakang titik-titik */
}


.point {
    width: 10px; /* Lebar titik data */
    height: 10px; /* Tinggi titik data (ukuran) */
    background-color: #000; /* Warna titik data */
    position: absolute; /* Untuk menempatkan titik secara relatif dalam line chart */
    border-radius: 50%; /* Membuat titik data berbentuk lingkaran */
}

/* Garis antara titik-titik data */
.point + .point::before {
    content: "";
    position: absolute;
    width: 50%; /* Lebar garis */
    height: 2px; /* Tinggi garis */
    background-color: #3498db; /* Warna garis */
    left: 25%; /* Letakkan garis di tengah antara titik data */
    bottom: 50%; /* Garis menghubungkan dari tengah titik data */
}

    h2{
        color: #000;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-left : 70px;
        margin-top : -20px;
        margin-bottom : 70px;

    }
    ul {
        list-style-type: none;
        padding: 0;

    }
    ul .icon{
        width: 200px;
        height: 200px;
        flex-shrink: 0;
        margin: 0 0 0 30px;
    }
    li {
        margin: 10px;
        padding: 10px;
        display: inline-block;
        width: 293px;
        height: 325px;
        flex-shrink: 0;
        border: 1px solid #000;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        margin-left : 40px;
        margin-right: 20px;
        margin-top : 20px;

    }
    img {
        max-width: 100%;
    }


    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;

        overflow: auto;
        background-color: rgba(0,0,0,0.4);
}

.modal-content::-webkit-scrollbar {
  width: 0em; /* Atur ukuran sesuai keinginan */
}

.modal-content::-webkit-scrollbar-thumb {
  background-color: transparent; /* Warna latar belakang thumb */
}



.modal-content {
  overflow-y: scroll;
    border-radius: 35px;
    border: 1px solid #000;
    background: #FFF;
    margin: 10% auto;
    padding: 20px;
    flex-shrink: 0;
    width: 850px;
    height: 350px;

}
.modal-content p {
    margin: 35px 0 0 0 ; /* Hapus margin bawah pada paragraf */
    line-height: 1.5; /* Tinggi baris untuk meningkatkan bacaan */
    text-align: left;
  white-space: pre-line; /* Menjaga pemformatan teks */
  margin-bottom: 10px; /* Ruang bawah antara paragraf */
  margin : -175px 0 0 246px;
}
.sow {
  color: #000;
font-family: Poppins;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: normal;
    position: absolute;
    top: 30px; /* Jarak vertikal dari atas */
    left: 51%; /* Posisi horizontal di tengah */
    transform: translateX(-50%); /* Pusatkan horisontal */
    background-color: white; /* Latar belakang agar teks lebih terlihat */
    padding: 5px 10px; /* Padding untuk estetika */

}

.close {
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 30px;
    height: 30px;
    top: 10px;
    right: 10px;
    margin: 2px 0 0 380px;
    font-size: 30px; /* Sesuaikan ukuran huruf tombol close */
    cursor: pointer;
    color: #000; /* Warna teks tombol */
}


.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.modal .icon {
  margin : 40px 0 0 20px;
}

.link-opacity-10-hover {
    color: #6471FE;
    font-family: Poppins;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    cursor: pointer;
    margin-left : 160px;
}
.filter .form-control {
    width: 217px;
    height: 35px;
    flex-shrink: 0;
    border-radius: 10px;
    border: 0.5px solid #000;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin-top : 29px;
}
.mm {
    margin-left: 5px; /* Jarak antara input dan teks S/D */

}
.filter {
    display: flex;
    align-items: center;
}

.mm {
    margin-left : 20px;
    margin-right: 10px;
    margin-top : -30px; /* Add margin to create space between label and input */
}

.form-control {
    width: 100%; /* Make the input field take up the remaining space */
    margin-bottom : 60px;
}
.pencarian{
              margin : -30px 10px 10px 325px
            }

        .filter .icon {
          width: 20px;
          height: 20px;
          flex-shrink: 0;
        }

        .guc {
              width: 35px;
              height: 35px;
              flex-shrink: 0;
              border-radius: 10px;
              border: 0.3px solid #000;
              background: #464648;
              text-align : center ;
          margin : -22px 10px 10px 20px;

        }

        .around .kanan   {
  width: 29px;
  height: 29px;
  flex-shrink: 0;
  width: 10px;
  padding : 10px;
  margin: -80px 10px 0px 990px;
}
.around .kanan .icon{
  display : relative ;
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
          <div class="item"><a href="{{ url('/DashboardWarga') }}"><img src="{{ asset('img/airplay.svg') }}"alt="" class="icon"></i>DashBoard</a>
          </div>
          <p class="zack">-</p>





          <div class="item"><a class="sub-btn"><img src="{{ asset('img/atm 1.png') }}"alt="" class="icon">Iuran Warga
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/PengingatTagihan') }}" class="sub-item">Tagihan & Pengingat Pembayaran</a>
                  <a href="{{ url('/PengingatTagihan/create') }}" class="sub-item">Konfirmasi Pembayaran Iuran</a>
                  <a href="{{ url('/LaporanPembayaran') }}" class="sub-item">Laporan Pembayaran</a>

                  </div>
              </div>

              <div class="item"><a class="sub-btn"><img src="{{ asset('img/bar-chart.png') }}"alt="" class="icon"></i>Keuangan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                  <a href="{{ url('/Keuangan') }}" class="sub-item">Laporan Keuangan</a>
                  </div>
              </div>


              <div class="item"><a class="sub-btn"><img src="{{ asset('img/shield.png') }}"alt="" class="icon"></i>Keamanan
                <i class="fas fa-angle-right dropdown"></i>
              </a>
                <div class="sub-menu">
                <a href="{{ url('/Veripikasi') }}" class="sub-item">Veripikasi Akun</a>
                  </div>
                </div>


                <div class="item"><a href="{{ url('/DisWarga') }}" class="sub-btn"><img src="{{ asset('img/message-circle.png') }}"alt="" class="icon"></i>Diskusi
                </a>
                </div>

                <div class="item"><a href="{{ url('/PengWarga') }}" class="sub-btn"><img src="{{ asset('img/info.png') }}"alt="" class="icon"></i>Pengumuman
                  </a>
                  </div>

                <div class="item"><a href="{{ url('/Ewarga') }}" class="sub-btn"><img src="{{ asset('img/copy.png') }}"alt="" class="icon"></i>E-Voting
                </a>
                </div>

                  <div class="item"><a href="{{ url('/UMKMWarga') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>UMKM
                  </a>
                  </div>


        </div>
  </div>
    <div class="main-konten">
        <div class="around">
          <h1 class="strip">senin 19 desember | 11:39</h1>
          <h1 class="kanan"><img src="{{ asset('img/383.png') }}" alt="" class="icon" i class="fas fa-angle-right dropdown"></i>
                            </h1>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                      <div class="view">
                                      <a href="{{ url('/ProWarga') }}" class="tohe">
                                      <img src="{{ asset('img/ura.svg') }}" alt="View Profile" class="icon">
                                      View Profile
                                    </a>
                                    </div>

                                    <div class="edit">
                                    <a href="{{ url('/ProWarga/create') }}" class="toha">
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

                <p class="Data">UMKM</p>
                <p class="nice">-</p>
                <div class="filter">
                    <form action="{{ url('/dashboardWarga/UMKM') }}" method="get">
                        <label for="nama" class="mm">filter kategori usaha</label>
                        <input type="search" class="form-control" name="cari" value="{{ Request::get('cari') }}" id="pengarang">
                        <button type="submit" class="guc" name="submit"><img src="{{ asset('img/pencarian.svg') }}"alt="" class="icon"></button>
                    </form>
                </div>
                @foreach($umkms as $umkm)
                <div class="katalog">
                <img src="{{ asset('path-to-your-image-directory/'. $umkm->foto) }}" alt="" class="icon">
                    <h2>{{ $umkm->nama }}</h2>
                    <a  id="openModalBtn" class="link-opacity-10-hover" data-bs-toggle="modal" data-bs-target="#myModal{{ $umkm->id }}">Detail Produk  ></a>
                    <div id="myModal{{ $umkm->id }}" class="modal">
                            <div class="modal-content">
                              <b class="sow"> Detail Produk </b>
                              <span class="close" id="closeModalBtn">&times;</span>
                              <img src="{{ asset('path-to-your-image-directory/' . $umkm->foto) }}" alt="" class="icon" width="200px" height="200px" >
                              <p>{{$umkm->deskripsi}}</p>
                            </div>
                          </div>
                </div>
                @endforeach






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
          document.addEventListener("DOMContentLoaded", function () {
          const openModalBtn = document.getElementById("openModalBtn");
          const closeModalBtn = document.getElementById("closeModalBtn");
          const modal = document.getElementById("myModal");

          openModalBtn.addEventListener("click", function () {
            modal.style.display = "block";
          });

          closeModalBtn.addEventListener("click", function () {
            modal.style.display = "none";
          });

          window.addEventListener("click", function (event) {
            if (event.target === modal) {
              modal.style.display = "none";
            }
          });
        });
</script>









      </body>
</html>
        {{-- <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="pb-3">
                    <form class="d-flex" action="{{ url('/dashboardWarga/UMKM') }}" method="get">
                        <input class="form-control me-1" type="search" id="searchInput" name="cari" value="{{ Request::get('cari') }}" placeholder="Search" aria-label="Search" autocomplete="off">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                    <div id="searchResults" style="display: none;"></div>
                 </div>
                 <!-- TOMBOL TAMBAH DATA -->
                @foreach($umkms as $umkm)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('path-to-your-image-directory/' . $umkm->foto) }}" class="card-img-top mt-2" alt=".Foto Produk">
                        <div class="card-body">
                            <h5 class="card-title">{{ $umkm->nama }}</h5>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#umkmModal{{ $umkm->id }}">Detail Produk</a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="umkmModal{{ $umkm->id }}" tabindex="-1" aria-labelledby="umkmModal{{ $umkm->id }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="umkmModal{{ $umkm->id }}Label">{{ $umkm->nama }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('path-to-your-image-directory/' . $umkm->foto) }}" class="card-img-top" alt=".Foto Produk">
                                <hr>
                                <h3 class="mt-3 text-center">Deskripsi</h3>
                                <p class="mt-3 mb-3">{{ $umkm->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Sesuaikan tinggi gambar sesuai kebutuhan Anda */
        object-fit: contain; /* Menampilkan gambar secara keseluruhan */
    }
</style>
</html>
@endsection --}}
