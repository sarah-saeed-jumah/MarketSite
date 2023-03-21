<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zaki jumah Site</title>
    <style>
body {background-color:antiquewhite;
      margin: 20px;
      padding: 20px;
      font-style: italic;
      text-align: left;
      }


p    {color: #DDF7E3; text-align:right;}
h4{color: #3A98B9;
   text-align: right;

}
h2{
    font-style:italic;
    margin-top: 30px;
    color:  #37306B;
    text-align: center;

}
</style>
</head>

<body>

<!-- <h2>{{ $data->name }}</h2>
<br> -->

<h2 >تفاصيل الرسالة   </h2><br>
<!-- <p>الاسم: </p>{{ $data->name }} <br> -->



<h4>    الإيميل  </h4>
<p>{{ $data->email }}</p> <br>



<h4>  الرقم</h5>

<p> {{ $data->phone }} </p> <br>

<h4>  الرسالة  </h4>
<p> {{ $data->message }} </p>

 <br><br>


<h4> مع أطيب التحيات</h4>
</body>




