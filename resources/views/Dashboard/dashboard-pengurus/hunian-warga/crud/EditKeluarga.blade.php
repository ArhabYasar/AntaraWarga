<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="still.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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



.head .font {
  margin : 50px 10px 10px 0;
            font-size: 25px;

        }
        .head .font .nice{
            font-size: 10px;
            width: 1000px;
            height: 0.2px;
            background : #000;
            margin-top : 10px;
            margin-bottom : 10px;
            margin-left: 21px;
        }
        .zack{
              font-size: 3px;
              width: 200px;
              height: 0.1px;
              background : #FFF;
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

        .head {
            margin-top :30px;
            margin-left :20px ;
        }

        .tableone .hand {
          margin-left :60px;
          margin-bottom : 15px;
        }
        .tableone .form-control {
          width: 355px;
          height: 30px;
          flex-shrink: 0;
          border-radius: 10px;
          padding : 10px;
          border: 0.5px solid #000;
          background: #EDEDED;
        }

        .tableone .leg{
          margin : -120px 10px 10px 500px;
        }

        .tableone .hunt{
          margin-left :60px;
          margin-bottom : 15px;
        }

        .tableone .hunt .form-control {
          width: 300px;
          height: 30px;
        }
        .pencarian{
              margin : -30px 10px 10px 325px
            }

        .pencarian .icon {
          width: 20px;
          height: 20px;
          flex-shrink: 0;
        }

        .pencarian .guc {
              width: 35px;
              height: 35px;
              flex-shrink: 0;
              border-radius: 10px;
              border: 0.3px solid #000;
              background: #464648;
              text-align : center ;
        }

        .leg .pencarian {
          margin : -117px 10px 10px 375px;
        }


                                table{
                                        box-sizing: border-box;
                                        margin: 20px 0 0 -60px;
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

                                    table th, table td{
                                      border : 1px solid white;
                                        text-align : center;
                                        padding : 10px;
                                    }

                                    table>thead th{
                                        width: 1000px;
                                        height: 50px;
                                        flex-shrink: 0;
                                        padding: 10px;
                                        background-color : #A8E293;
                                    }



                                    .Data {
                                    color: #000;
                                    font-family: Poppins;
                                    font-size: 36px;
                                    font-style: normal;
                                    font-weight: 600;
                                    line-height: normal;
                                    margin : 467px 20px 30px -60px;

                                }

                                .did .btn-primary{
                                  border-radius: 10px;
                                  background: #6471FE;
                                  margin : 0 0 0 -60px;
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
            margin : 30px 20px 30px 250px;
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
        /* CSS Anda */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1;
}

.modal-content {
  border-radius: 37px;
  border: 0.5px solid #000;
  background: #EDEDED;
  margin: 10% auto;
  padding: 20px;
  width: 500px;
  height: 380px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.modal-content .form-control{
  border-radius: 10px;
border: 0.5px solid #000;
background: #EDEDED;
}

.lower{
  color: #000;
  font-family: Poppins;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin-left: 90px;
  margin-bottom: 20px;
}
.modal-content .btn-primary{
  width: 100px;
  height: 35px;
  flex-shrink: 0;
  margin : -45px 10px 10px 110px;
}
.modal-content .shut{
  width: 100px;
  height: 35px;
  flex-shrink: 0;
  border-radius: 10px;
  border: 1px solid #6471FE;
  margin : 20px 10px 10px 260px;
}
.modal-content .form-control{
  margin-bottom : 5px;
}
.modal-content .text{
  margin-bottom : 5px;
}
.modal-content .hunt .form-control{
  width: 390px;
  height: 30px;
  margin-top : 5px;
}
.modal-content .guc {
  margin : -20px 0 0 85px;
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
        .modal1 .icons{
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



 .modal2 {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
  padding-top: 60px;
}
.modal-content {
  border-radius: 37px;
  border: 0.5px solid #000;
  background: #EDEDED;
  margin: 10% auto;
  padding: 20px;
  width: 500px;
  height: 380px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.modal-content .form-control{
  border-radius: 10px;
border: 0.5px solid #000;
background: #EDEDED;
}

.modal2 .lower{
  color: #000;
  font-family: Poppins;
  font-size: 20px;
  font-style: normal;
  font-weight: 600;
  line-height: normal;
  margin-left: 90px;
  margin-bottom: 20px;
}
.modal2 .modal-content .btn-primary{
  width: 100px;
  height: 35px;
  flex-shrink: 0;
  margin : -45px 10px 10px 110px;
  background : #6471FE ;
}
.modal2 .modal-content .shut{
  width: 100px;
  height: 35px;
  flex-shrink: 0;
  border-radius: 10px;
  border: 1px solid #6471FE;
  margin : 20px 10px 10px 260px;
}
.modal2 .modal-content .form-control{
  margin-bottom : 5px;
}
.modal2 .modal-content label.tools{
  text-align : left ;
  margin-bottom : 5px;
}
.modal2 .modal-content .hunt label.tools{
  text-align : left ;
  margin-bottom : 5px;
}
.modal2 .modal-content .hunt .form-control{
  width: 390px;
  height: 30px;
  margin-top : 5px;
  text-align: left;
}
.modal2 .modal-content .guc {
  margin : -20px 0 0 85px;
}
.twenty {
  color: #000;
font-family: Poppins;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: normal;
margin-bottom : 10px;
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
        </div>
  </div>
  <div class="main-konten">
        <div class="around">
          <h1 class="strip">senin 19 desember | 20:44</h1>
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

    <div class="head">
        <div class="font">
        <span class="Data">Data Keluarga</span>
        <p class="nice">-</p>
        <p class="chup">From Tambah Data</p>
    </div>
        </div>
        <div class="tableone">
            <form action="{{ url('/dashboardPengurus/DataKeluarga/'.$data->id) }}" method="post">
                @csrf
                @method('PUT')
            <div class="hand">
                    <label for="judul" class="team">No Kartu Keluarga</label>
                    <div class= "one">
                    <input type="text" class="form-control" name='nkk' value="{{ $data->nkk }}" id="judul">
                    </div>
                    </div>


                <div class="hunt">
                    <label for="nama" class="team">Kepala Keluarga</label>
                    <div class= "two">
                        <select name="nama" id="nama" class="form-control h-100">
                            <option value="">Pilih Nama Warga</option>
                            @foreach ($warga as $wargaItem)
                                <option value="{{ $wargaItem->id }}" {{ $wargaItem->id == $data->getWarga[0]->id ? 'selected' : '' }}>{{ $wargaItem->nama }}</option>
                            @endforeach
                        </select>
                    <div class="pencarian">
                    <button type="submit" class="guc" name="submit"><img src="{{ asset('img/pencarian.svg') }}"alt="" class="icon"></button>
                    </div>
              </div>
              </div>
                <div class="hand">
                    <label for="nama" class="team">Status</label>
                    <div class= "two">
                    <input type="text" class="form-control" value="{{$data->status}}" name='status' id="pengarang">
              </div>
              </div>

              <div class="leg">
                    <label for="alamat" class="team">Hunian</label>
                    <div class= "two">
                        <select name="alamat" id="alamat" class="form-control h-100">
                            <option value="">Pilih Alamat Hunian</option>
                            @foreach ($hunian as $hunianItem)
                                <option value="{{ $hunianItem->id }}" {{ $hunianItem->id == $data->getHunian->id ? 'selected' : '' }}>{{ $hunianItem->alamat }}</option>
                            @endforeach
                        </select>
                    <div class="pencarian">
                    <button type="submit" class="guc" name="submit"><img src="{{ asset('img/pencarian.svg') }}"alt="" class="icon"></button>
                    </div>
              </div>
              </div>
              <div class="leg">
                    <label for="nama" class="team">Status Hunian</label>
                    <div class= "two">
                        <select name="status_kepemilikan" id="status_kepemilikan" class="form-control h-100">
                            <option value="">Pilih Status Kepemilikan</option>
                            <option value="Milik Sendiri" {{ $data->getHunian->status_kepemilikan == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
                            <option value="Sewa" {{ $data->getHunian->status_kepemilikan == 'Sewa' ? 'selected' : '' }}>Sewa</option>
                        </select>
                    </div>
              </div>
              <div class="simpen">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    <button type="submit" class="shut" name="submit">Kembali</button>
                </div>
            </div>
            </form>
        </div>





</div>
<p class="Data">Daftar Anggota Keluarga </p>
<div class="did">
<button id="modal-toggle" class="btn btn-primary">Tambah Data</button>
<div id="create-modal" class="modal">
  <div class="modal-content">
    <span class="lower">Tambah Anggota Keluarga</span>
    <form action="{{ url('/dashboardPengurus/DataKeluarga') }}" method="post">
        @csrf
        <input type="hidden" name="nkk" value="{{ $data->nkk }}">
        <select hidden name="hunian_id" id="hunian_id" class="form-control">
            <option value="">Pilih Alamat Hunian</option>
            @foreach ($hunian as $hunianItem)
            <option value="{{ $hunianItem->id }}" {{ $hunianItem->id == $data->getHunian->id ? 'selected' : '' }}>{{ $hunianItem->alamat }}</option>
            @endforeach
        </select>
        <select hidden name="status_kepemilikan" id="status_kepemilikan" class="form-control">
            <option value="">Pilih Status Kepemilikan</option>
            <option value="Milik Sendiri" {{ $data->getHunian->status_kepemilikan == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
            <option value="Sewa" {{ $data->getHunian->status_kepemilikan == 'Sewa' ? 'selected' : '' }}>Sewa</option>
        </select>
        <div class="mb-3">
            <label for="nik">Pilih NIK:</label>
            <select name="nik" id="nik" class="form-control h-100">
                <option value="">Pilih NIK</option>
                @foreach ($warga as $wargaItem)
                    <option value="{{ $wargaItem->id }}">{{ $wargaItem->nik }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama">Pilih Nama Warga:</label>
            <select name="nama" id="nama" class="form-control">
                <option value="">Pilih Nama Warga</option>
                @foreach ($warga as $wargaItem)
                    <option value="{{ $wargaItem->id }}">{{ $wargaItem->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" name="status" id="status" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
  </div>
</div>


        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    @foreach ($dataWithSameNKK as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        @foreach ($item->getWarga as $warga)
                            @if ($warga->keluarga_id)
                                <td>{{ $warga->nik }}</td>
                                <td>{{ $warga->nama }}</td>
                            @else
                                <td colspan="2">Data Not Available</td>
                            @endif
                        @endforeach
                        <td>{{ $item->status }}</td>
                        <td>
                            <button id="editButton" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $i }}">Edit</button>
                            <form action="{{ url('/dashboardPengurus/DataKeluarga/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class ="btn btn-danger btn-sm" id="deleteButton" >Hapus</button>
                            </form>

                            <div id="editModal{{ $i }}" class="modal2">
                                <div class="modal-content">
                                <label class="twenty">Ubah Anggota Keluarga</label>
                                <form action="{{ url('/dashboardPengurus/DataKeluarga/'.$item->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="nkk" value="{{ $data->nkk }}">
                                    <select hidden name="hunian_id" id="hunian_id" class="form-control">
                                        <option value="">Pilih Alamat Hunian</option>
                                        @foreach ($hunian as $hunianItem)
                                        <option value="{{ $hunianItem->id }}" {{ $hunianItem->id == $data->getHunian->id ? 'selected' : '' }}>{{ $hunianItem->alamat }}</option>
                                        @endforeach
                                    </select>
                                    <select hidden name="status_kepemilikan" id="status_kepemilikan" class="form-control">
                                        <option value="">Pilih Status Kepemilikan</option>
                                        <option value="Milik Sendiri" {{ $data->getHunian->status_kepemilikan == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
                                        <option value="Sewa" {{ $data->getHunian->status_kepemilikan == 'Sewa' ? 'selected' : '' }}>Sewa</option>
                                    </select>
                                    <label for="nama" class="tools">Nama</label>
                                  <div class="hunt">
                                    @if ($item->getWarga && $item->getWarga->count() > 0)
                                    <input type="text" class="form-control" value="{{ $item->getWarga[0]->nama }}" name="nama" id="nik">
                                @else
                                    <input type="text" class="form-control" value="" name="nama" id="nik">
                                @endif
                                <div class="pencarian">
                                  <button type="submit" class="guc" name="submit"><img src="{{ asset('img/pencarian.svg') }}"alt="" class="icon"></button>
                                  </div>
                                  </div>

                                  <label for="nama" class="tools">NIK</label>
                                  @if ($item->getWarga && $item->getWarga->count() > 0)
                                        <input type="text" class="form-control" value="{{ $item->getWarga[0]->nik }}" name="nik" id="nik">
                                    @else
                                        <input type="text" class="form-control" value="" name="nik" id="nik">
                                    @endif

                                  <label for="status" class="tools">Status</label>
                                  <input type="text" class="form-control" value="{{ $data->status }}" id="nama" name="status">


                                <button id="modal-close2" class="shut">Tutup</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                              </div>
                                </div>

                            <div id="modal1" class="modal1">
                                <div class="modal-two">
                                <img src="{{ asset('img/huai.png') }}" alt="" class="icons">
                                    <p>Anda yakin akan menghapus data tersebut?</p>
                                    <button id="confirmDelete">YA</button>
                                    <button id="cancelDelete">Batal</button>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
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
          // JavaScript Anda
          document.getElementById('modal-toggle').addEventListener('click', function() {
            document.getElementById('create-modal').style.display = 'block';
          });

          document.getElementById('modal-close').addEventListener('click', function() {
            document.getElementById('create-modal').style.display = 'none';
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
