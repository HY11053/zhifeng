// JavaScript Document
$(function(){
	var rand = 0;
	var menu = $(".zc_text1");
	menu.each(function(i){
		rand = Math.ceil(Math.random()*0);
		$(".zc_text1:eq("+i+") li dl").each(function(m){
			if(m!=rand){
				$(this).hide();
				$(this).prev().removeClass('on');
				$(this).parent().removeClass('block_li');
			}else{
				$(this).show();
				$(this).prev().addClass('on');
				$(this).parent().addClass('block_li');
			}
		});
		
		$(".zc_text1:eq("+i+") li").each(function(j){
			var o = $(this);
			o.children('p').mouseover(function(){
				$(".zc_text1:eq("+i+") li dl").each(function(j){
					$(this).hide();
					$(this).prev().removeClass('on');
					$(this).parent().removeClass('block_li');
				});
				$(this).addClass('on').next().show();
				$(this).parent().addClass('block_li');
			});
		});
	});
});

$(function(){
    $("#callbF_sub").click(function(){

        var result = $("#callbF_text").val();
        var host=window.location.href;

        if( result  && /^1[3|4|5|8]\d{9}$/.test(result ) ){


            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/s87Rtl45/mobile.php",
                //提交的数据
                data:{"tel":result,"host":host},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".

                success:function (response, stutas, xhr) {
				alert(response);
				$("#callbF_sub").attr("disabled","disabled");
			
		}     
            });

            

        } else{
            alert("您输入的手机号码"+result+"不正确，请重新输入")
        }





    })

});

    function compute(){
        var danjia=parseFloat($("#danjia").val());
        var rijun=parseInt($("#rijun").val());
          
        var total=danjia*rijun*30-9766
          
        $("#callbF_sub").val(callbF_sub);
    }
$(function(){
	$(".newjoin_list dl:gt(3)").css({"border-bottom":"none"});
	})
$(function(){
      $(".diqutab_nav .diqutab_nav_list:gt(0)").hide();
		   $(".diqutab ul li").hover(function(){
			$(this).addClass("checked").siblings().removeClass("checked");	 
			index=$(this).index();
			$(".diqutab_nav .diqutab_nav_list").eq(index).show().siblings().hide();
		}) 
 });
$(function() {
	
	$('#carousel').flexslider({
		animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth:71,
        asNavFor: '#slider'
		
      });
	

	  $("#slider").flexslider({
		animation: "slide",
		direction:'vertical',
		slideshowSpeed: 4000, //展示时间间隔ms
		animationSpeed: 400, //滚动时间ms
		touch: true,
		controlNav: false,
		sync: "#carousel"
	});
});	
$(function(){
				$(window).scroll(function(){
					var curr = $(window).scrollTop();
					var rftop = $('#menu_xd').offset().top;
					var rf = $('.pinpaidao1')
					if(curr <= rftop){
						rf.removeClass('fixed')
					}else{
						rf.addClass('fixed')
						
					}

               $(".lxb_nav tr").each(function(){
                $(this).find("td:first").css("background","#F9F9F9")
                $(this).find("td:eq(2)").css("background","#F9F9F9")
                    })
				})
			});
  function avals(obj){
									var __c = document.cookie;
									var __b = false;
									var __s = __c.indexOf('INDI');
									if(__s>-1){var __a = __c.match(/USERNAME=.[^&]+/);if(__a!=null){__b=true;}}
									var d_id = obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
									jQuery('#notes').val(jQuery('#notes').val()+obj.innerHTML.replace("·",""));
									hide_menu1("msgList");
								}
								
								function hide_menu1(obj){jQuery("#"+obj).css('display','block');}
$(function(){
  $(".lxb_nav ul li").mouseover(function(){
	  $(this).children(".new-con").css("display","block");
	  $(this).siblings().children(".new-con").css("display","none");
	  $(this).children(".frh").css("display","none");
	  $(this).children(".fle").css("display","none");
	  $(this).siblings().children(".frh").css("display","block");
	  $(this).siblings().children(".fle").css("display","block");
  })	
})

