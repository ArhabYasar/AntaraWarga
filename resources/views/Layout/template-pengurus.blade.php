<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengurus</title>
    <link rel="stylesheet" href="still.css">
    <link rel="stylesheet" href="script.java">
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
    <main class="container">
        @include('komponen.pesan')


        @yield('konten-pengurus')
    </main>
</body>
</html>
