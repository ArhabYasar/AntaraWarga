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
                background-color : #FFF;
                font-size: 14px;
                color: #444;
                white-space: nowrap;

            }
            table>thead{
                background-color : #A8E293;
                color: #000;
            }
            table th, table td{
              border : 1px solid gray;
                text-align : center;
                padding : 10px;
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



.modal-content {
    border-radius: 35px;
    border: 3px solid #000;
    background: #FFF;
    margin: 15% auto;
    padding: 20px;
    width: 522px;
    height: 239px;
    flex-shrink: 0;
    width: 340px;
    height: 200px;

}
.modal-content p {
    margin: 35px 0 0 0 ; /* Hapus margin bawah pada paragraf */
    line-height: 1.5; /* Tinggi baris untuk meningkatkan bacaan */
    text-align: left;
}
.sow {
    position: absolute;
    top: 5px; /* Jarak vertikal dari atas */
    left: 50%; /* Posisi horizontal di tengah */
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
   display : none;
    top: 10px; /* Sesuaikan posisi vertikal */
    right: 10px; /* Sesuaikan posisi horizontal */
    font-size: 24px; /* Sesuaikan ukuran huruf tombol close */
}


.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.kick{
  margin-left: 25px;
  margin-right: 6px;
}
.slow{
  margin-left: 58px;
  margin-right: 10px;
}
.denim{
  margin-left: 58px;
  margin-right: 10px;
}
.sid{
  margin-left: 29px;
  margin-right: 10px;
}
.sud{
  margin-left: 38px;
  margin-right: 10px;
}
.modal1 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 500px;
            height: 265px;
            background: #FFF;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            border: 1px solid #000;
            padding: 20px;
            flex-shrink: 0;
            margin : 170px 10px 10px 500px;

        }


        .modal-two {
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        #confirmDelete {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFF;
            font-family: Poppins;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            width: 69px;
            height: 30px;
            flex-shrink: 0;
            background-color: #6571FE;
            color: white;
            margin : 40px 10px 10px 120px;
            }

        #cancelDelete {
          display: flex;
          justify-content: center;
          align-items: center;
          color: #FFF;
          font-family: Poppins;
          font-size: 14px;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
          width: 69px;
          height: 30px;
          flex-shrink: 0;
          background-color: red;
          text-align: center;
          margin : -40px 10px 10px 220px;

        }
        .modal1 .icon{
          width: 70px;
          height: 70px;
          margin-bottom: 10px;
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
          <h1 class="strip">senin 19 desember | 11:39</h1>
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

                <p class="Data">KELUARGA PINDAH HUNIAN<a href="{{ url('/dashboardPengurus/DataPindah/create') }}" class="btn btn-primary">Tambah Data</a></p>
                <p class="nice">-</p>

                <div class="pencarian">
                    <form action="{{ url('/dashboardPengurus/DataPindah') }}" method="get">
                        <input type="text" class="form-control" name="cari" value="{{ Request::get('cari') }}" name='pengarang' id="pengarang" >
                        <img src="{{ asset('img/pencarian.svg') }}"alt="" class="icon">
                        <div class="zaki"><a href="" class="btn btn-dark">Cari</a></p></div>
                    </form>
                </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                    <th class= "col-sm-1">No</th>
                    <th>Kelapa Keluarga</th>
                        <th>Hunian Asal</th>
                        <th>Hunian Baru</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data->firstItem() ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->warga->nama }}</td>
                        <td>{{ $item->hunian_asal }}</td>
                        @if ($item->hunian) <!-- Periksa apakah hunian tersedia -->
                            <td>{{ $item->hunian->alamat }}</td>
                        @else
                            <td>-</td>
                        @endif
                        <td>
                        <button id="openModalBtn" class="btn btn-warning btn-sm">Detail</button>
                          <div id="myModal" class="modal">
                            <div class="modal-content">
                              <b class="sow"> Detail Pindah Hunian </b>
                              <span class="close" id="closeModalBtn">&times;</span>
                                  <p>Kepala Keluarga <span class="kick">:</span> {{ $item->warga->nama }}<br>
                                  Hunian asal <span class="slow">:</span>{{ $item->hunian_asal }}<br>
                                  Hunian baru<span class="denim">:</span>
                                  {{ $item->hunian->alamat }}
                                  <br>
                                  Tanggal pindah <span class="sid">:</span>{{ $item->tanggal }}<br>
                                  Alasan pindah <span class="sud">:</span>{{ $item->alasan }}</p>
                            </div>
                          </div>
                            <a href='{{ url('/dashboardPengurus/DataPindah/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <form class="d-inline" action="{{ url('/dashboardPengurus/DataPindah/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" name="submit" id="deleteButton" >Hapus</button>
                            </form>
                            <div id="modal1" class="modal1">
                                <div class="modal-two">
                                <img src="{{ asset('img/huai.png') }}" alt="" class="icon">
                                    <p>Anda yakin akan menghapus data tersebut?</p>
                                    <button id="confirmDelete">YA</button>
                                    <button id="cancelDelete">Batal</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->withQueryString()->links() }}
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
<script>
          const deleteButton = document.getElementById("deleteButton");
          const modal = document.getElementById("modal1");
          const confirmDelete = document.getElementById("confirmDelete");
          const cancelDelete = document.getElementById("cancelDelete");

          deleteButton.addEventListener("click", () => {
              modal1.style.display = "block";
          });

          cancelDelete.addEventListener("click", () => {
              modal1.style.display = "none";
          });

          confirmDelete.addEventListener("click", () => {
              // Di sini Anda bisa menambahkan logika penghapusan item atau tindakan yang sesuai
              console.log("Item deleted.");
              modal1.style.display = "none";
          });
          </script>



      </body>
</html>
