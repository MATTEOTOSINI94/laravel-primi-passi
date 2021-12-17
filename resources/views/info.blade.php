<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header><h1>INFO Laravel</h1></header>
    <ul class="list">
    @foreach($link as $item)
        
        <li class="el-list"><a href="{{route($item)}}">{{$item}}</a></li>
        
    @endforeach
</ul>
</body>
</html>

<style>
    h1{
        text-align: center;
    }

    .list{
        display: block;
        padding-left: 0;
        text-align: center
    }
    .el-list{
        display: inline-block;
        padding: 20px;
        font-size: 15px;
        text-transform: uppercase
    }

</style>