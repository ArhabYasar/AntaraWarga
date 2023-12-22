<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
.main .item .sub-item {
  color: #FFF;
  font-size: 9px;
  text-decoration: none;

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
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
}

.modal-content {
    background-color: #D3D3D3;
    width: 60%;
    max-width: 400px;
    margin: 15% auto;
    padding: 20px;
    border-radius: 10px;
    width: 605px;
    height: 255px;
    flex-shrink: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.close {
    float: right;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    margin-right : -350px;
    display : none;
}
.modal .radio {
margin : 10px 0 0 -250px;
margin-right : 20px;
}
.modal .btn-primary{
  margin-top: 50px;
  margin-right: 20px;
}
.modal .btn-light{
  border : #000;
  margin-top: 50px;
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


.chat-container {
      width: 1000px;
      height : 500px;
      margin: 50px auto;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
    }

    .jig {
  margin-left : 10px;
  margin-right : 10px;
}
.jog {
  margin-left : 10px;
  margin-right : 10px;
}
.how{
  font-size : 11px;
  margin : 10px 0 0 300px;
}
.haw{
  font-size : 11px;
  margin : -18px 0 0 500px;
}

    .chat-messages {
      padding: 15px;
      overflow-y: auto;
      max-height: 400px;
    }

    .message {
      margin-bottom: 10px;
      display: flex;
      flex-direction: column;
    }

    .message p {
      background-color: #ffffff;
      padding: 10px;
      border-radius: 8px;
      max-width: 70%;
      border: 2px solid #ccc;

    }

    .message.sent p {
      background-color: #6471FE;
      align-self: flex-end;
    }

    .message.received p {
      background-color: #ffffff;
      align-self: flex-start;
      border :
    }

    .message .meta {
      font-size: 0.8em;
      color: #777;
      margin-top : -16px;
    }

    .message.sent .meta {
      text-align: right;
    }

    .message.received .meta {
      text-align: left;
    }

    .chat-input {
  display: flex;
  padding: 5px;
  position: absolute;
  top: 640px;
  left: 56px;
  right: 0;
  width : 980px;
  height : 60px;
}

.input-field {
  flex-grow: 1;
  padding: 10px;
  border: 1px solid #000;
  border-radius: 4px;
}

.send-button {
  padding: 10px;
  background : white ;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position : absolute ;
  left : 920px;
  top : 8px;

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
          <h1 class="strip">senin 19 desember | 10:48</h1>
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

                <p class="Data">DISKUSI</p>
                <p class="nice">-</p>

                <div class="chat-container">
<div class="chat">
    <div class="top">
        <p class="how">Topik<span class="jig">:</span>{{ $diskusi->judul }}</p>
    </div>
    <div class="messages">
            @include('Dashboard.dashboard-pengurus.pengumuman.receive',['message' => " "])
    </div>
    <div class="bottom">
            <form>
                @csrf
                <input type="text" class="input-field" id="message" name="message" placeholder="Enter Message..." autocomplete="off">
                <button type="submit" class="send-button">
                </button>
            </form>
    </div>
</div>
</div>





  </div>
</div>





<script>
    const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'ap1'});
    const channel = pusher.subscribe('public');

    //Receive Message
    channel.bind('chat', function(data){
        $.post("/dashboardPengurus/receive",{
            _token: '{{csrf_token()}}',
            message: data.message,
        })
            .done(function (res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
        });
    });

    //Broadcast Message
    $("form").submit(function(event){
        event.preventDefault();

        $.ajax({
            url: '/dashboardPengurus/broadcast',
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: '{{csrf_token()}}',
                message: $("form #message").val(),
            }
        }).done(function (res){
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
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

          <script>
  function sendMessage() {
    var inputField = document.querySelector('.input-field');
    var messageText = inputField.value.trim();

    if (messageText !== '') {
      var chatMessages = document.getElementById('chatMessages');
      var newMessage = document.createElement('div');
      newMessage.className = 'message sent';
      newMessage.innerHTML = `
        <p>${messageText}</p>
        <div class="meta">You • ${getCurrentTime()}</div>
      `;

      chatMessages.appendChild(newMessage);
      inputField.value = '';

      // Scroll to the bottom of the chat messages
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }

  function getCurrentTime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    return `${hours}:${minutes}`;
  }
</script>



      </body>
</html>

