<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "stylesheet" href= "public/css/app.css">
    <title>Document</title>
</head>

<style>
    html{
     font-family: 'Roboto', sans-serif;

   }

   body{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     background-color: #e6e6e6;
     background-color: rgb(33, 33, 33);
    }

   a{
     text-decoration: none;
     color: black;
   }

   a:hover{
     color:  #0091ff;
   }

    .containerNavBar{
        width: 70%;
        height: 100%;
        margin: auto;
        display: flex;
        justify-content: space-between;
    }

    .imgBox{
        margin-top: auto;
        margin-bottom: auto;
    }

    .container{
      width: 70%;
      height: 100%;
      margin: auto;
      display: flex;
      align-items: center;
      color: white;
    }

    .containerGray{
        width: 100%;
        height: 1100px;
        background-color: rgb(33, 33, 33);
        padding-bottom: 150px
    }

    .containerBlue{
        width: 100%;
        height: 15vh;
        background-color: rgba(2,130,249,255);
    }
    .boxImgText{
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      width: 20%;
    }

    .logo{
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }
    .banner{
      height: 40%;
      width: 100%;
      color: white;
      background-image: url(http://localhost:8000/img/jumbotron.jpg);
    }

    .content{
      position: relative;
      width: 80%;
      height: 60%;
      margin: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      flex-wrap: wrap;
      gap:40px;
      padding-top:50px
    }

    .series{
    position: absolute;
    top:0;
    margin-top: -25px;
    left: 0;
    height: 45px;
    width: 190px;
    background-color: rgba(2,130,249,255);
    color: white;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .card{
        text-align: center;
        width: 200px;
        height: 200px;
    }

    img{
      width: 40%;
      height: 40%;
      object-fit: contain;
      display: flex;
      justify-content: center;
      align-items: center;
  }

    .navbar{
        width: 100%;
        height: 12vh;
        background-color: white;
    }

    img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    ul{
        display: flex;
        list-style: none;
        gap: 30px;
        font-size: 15px;
    }
    .imgBox{
        margin-top: auto;
        margin-bottom: auto;
    }

    .boxMenu{
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

</style>

<body>
    <div>
        @yield('content')
    </div>

    @include('guest.partials.navBar')

    @include('guest.partials.main')

    @include('guest.partials.footer')
</body>
</html>
