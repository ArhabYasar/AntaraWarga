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
              border : 3px solid #000;
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
        .zaki .btn-warning{
          width: 60px;
          height: 35px;
          flex-shrink: 0;
          border-radius: 10px;
          background: #464648;
        }
        .zaki .btn-warning{
          color: #FFF;
          font-family: Poppins;
          font-size: 18px;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
          text: center;
        }

        .zaki .btn-warning{
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


        .modal-kontent {
            padding: 20px;
            border-radius: 5px;
            text-align: center;
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
        .modal .icon{
          width: 70px;
          height: 70px;
          margin-bottom: 10px;
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
.truth {
  margin-left : 100px;
  color : blue ;

}
.truth3 {
  color : blue ;

}
.truth2 {
  background : none;
  color : blue ;
  text-decoration : none ;
  border : none;
}
.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: contain;
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
          <div class="item"><a href="{{ url('/DashboardUMKM') }}"><img src="{{ asset('img/airplay.svg') }}"alt="" class="icon"></i>DashBoard</a>
          </div>
          <p class="zack">-</p>


                  <div class="item"><a href="{{ url('/MediaPP') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>Media Promosi Produk
                  </a>
                  </div>
                  <div class="item"><a href="{{ url('/MediaTransaksi') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>Media Transaksi
                  </a>
                  </div>
                  <div class="item"><a href="{{ url('/KampungPasar') }}" class="sub-btn"><img src="{{ asset('img/mdi_cart-sale.png') }}"alt="" class="icon"></i>Kampung Pasar
                  </a>
                  </div>


        </div>
  </div>
    <div class="main-konten">
        <div class="around">
          <h1 class="strip">senin 19 desember | 11:33</h1>
          <div class="kanan">
  <img src="{{ asset('img/383.png') }}" alt="" class="icon">
</div>
                                  <div class="drop"><a class="sub-btn">
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                      <div class="sub-menu">

                                      <div class="view">
                                      <a href="{{ url('ProUMKM') }}" class="tohe">
                                      <img src="{{ asset('img/ura.svg') }}" alt="View Profile" class="icon">
                                      View Profile
                                    </a>
                                    </div>

                                    <div class="edit">
                                    <a href="{{ url('ProUMKM/create') }}" class="toha">
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

                <p class="Data">KAMPUNG PASAR<a href="{{ url('/dashboardUMKM/Pasar/create') }}" class="btn btn-primary">Tambah Data</a></p>
                <p class="nice">-</p>
                <div class="filter">
                    <form action="{{ url('/dashboardUMKM/Pasar') }}" method="get">
                        <label for="nama" class="mm">filter kategori usaha</label>
                        <input type="search" class="form-control" name="cari" value="{{ Request::get('cari') }}" id="pengarang">
                    </form>
                </div>
                <div class="katalog">
                    @foreach($data as $item)
                    <img src="{{ asset('path-to-your-image-directory/' . $item->foto) }}" alt="" class="icon">
                    <h2>{{ $item->nama }}</h2>
                    <a  href="{{ route('showDetailPasar', $item->id) }}"  class="truth" >detail |</a>
                    <form action="{{ url('/dashboardUMKM/Pasar/'.$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class ="truth2" id="deleteButton" >hapus</button>
                    </form>
                            <div id="modal" class="modal">
                                <div class="modal-kontent">
                                <img src="{{ asset('img/huai.png') }}" alt="" class="icon">
                                    <p>Anda yakin akan menghapus data tersebut?</p>
                                    <button id="confirmDelete">YA</button>
                                    <button id="cancelDelete">Batal</button>
                    @endforeach

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
</script>









      </body>
</html>
