<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<center/>
<h1 style="color: #c0c0c0;">汽车租赁金额计算</h1>
master
<form action="demo2.php" method="post">
    <h2 style="color: #c0c0c0;">请输入选择车型</h2>
    <div class="box">
<input type="radio" name="CatType" value="jiao" class="jiao"/><span class="s_jiao">轿车</span>
<input type="radio" name="CatType" value="ke" class="ke"/><span class="s_ke">客车</span>
    </div>
    <h2 style="color: #c0c0c0;">请输入需要租赁的天数</h2>
<input type="text" name="day" placeholder="请输入需要租赁的天数"/>
<input type="submit" value="计算"/>
</form>
</body>
</html>
<script type="text/javascript" src="http://localhost/jquery-3.2.1.min.js"></script>
<script>
    $(".jiao").click(function(){
        var arr=new Array('宝马X6','宝马550i','别克大道','别克GL8');
        var str='';
        $.each(arr,function(k,v){
            str+='<input type="radio" name="car" value="'+v+'"/>'+v
        });
        $('.box').append(str);
        $('.jiao').hide();
        $('.s_jiao').hide();
        $('.ke').hide();
        $('.s_ke').hide();
    });
    $(".ke").click(function(){
        var arr2=new Array('金杯16','金龙16','金杯34','金龙34');
        var str='';
        $.each(arr2,function(k,v){
            str+='<input type="radio" name="car" value="'+v+'"/>'+v
        });
        $('.box').append(str);
        $('.jiao').hide();
        $('.s_jiao').hide();
        $('.ke').hide();
        $('.s_ke').hide();
    })
</script>
