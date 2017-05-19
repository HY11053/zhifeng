//
$(document).ready(function() {
	$("#icon-app").mouseover(function() {
		$("#barcode").css("display", "block");
	}).mouseout(function() {
		$("#barcode").css("display", "none");
	});
});
//
$(".m-company").hover(function() {
	$(this).find(".showInfo").show();
}, function() {
	$(this).find(".showInfo").hide();
})

//	
$("#showZone").toggle(function() {
	var v = $("#zone-box").css("height");
	if (v == "auto") {
		$("#zone-box").css("height", "22px");
	} else if (v != "auto" && v != "22px") {
		$("#zone-box").css("height", "22px");
		$(this).find("span").html("更多");
		$(this).find("i").removeClass("less");
	} else {
		$("#zone-box").css("height", "auto");
		$(this).find("span").html("收起");
		$(this).find("i").addClass("less");
	}
	;
}, function() {
	$("#zone-box").css("height", "22px");
	$(this).find("span").html("更多");
	$(this).find("i").removeClass("less");
})

$(function(){
	$(".slideContent .showSlide").toggle(function(){
			$(this).parent(".slideContent").addClass("show");
			//$(this).parent(".slideContent").parent(".items_V").css("background-color","#fafafa");
			$(this).html("收起");
			//移入查询
			var htmlContent = "<dl class=\"clearfix\">";
			var logName = $(this).parent(".slideContent").parent(".items_V").find("#logName").val();
			var brandSource = $(this).parent(".slideContent").parent(".items_V").find("#brandSource").val();
			var brandIndustry = $(this).parent(".slideContent").parent(".items_V").find("#brandIndustry").val();
			
			$(this).parent(".slideContent").find(".so_products").html("正在加载...");
            	$.ajax( {
				url : '/so/userPic.html',
				type : "post",
				dataType : "json",
				data : "loginName=" + logName + "&random=" + Math.random(),
				async : false,
				success : function(data) {
				var attr = data.result.split("|");
				var id = attr[0].split("@")[0];
				var imgHref = "";
				if (id == 1 || id == 2)
				{
					imgHref = "javascript:;";
				}
				else
				{
					if(brandSource == 0 || brandSource == '')
					{
					imgHref = "http://www.jiameng.com/"+logName+"/image/"+id+".htm";
					}
					else
						{
						
											imgHref = "http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/image/"+id+".htm";
						}
				}
				htmlContent += "<dd><a href=\""+imgHref+"\"><img src=\""+attr[0].split("@")[1]+"\" width=\"100\" height=\"100\" alt=\""+logName+"产品图片\" onerror=\"this.src='http://img4.jiameng.com/2014/07/U8w6Y759h603.png'\" /></a></dd>";
				var id1 = attr[1].split("@")[0];
				var imgHref1 = "";
				if (id1 == 1 || id1 == 2)
				{
					imgHref1 = "javascript:;";
				}
				else
				{  
					if(brandSource == 0 || brandSource == '')
					{
					imgHref1 = "http://www.jiameng.com/"+logName+"/image/"+id1+".htm";
					}
					else
						{
						
					imgHref1 = "http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/image/"+id1+".htm";
						}
					
				}
				htmlContent += "<dd><a href=\""+imgHref1+"\"><img src=\""+attr[1].split("@")[1]+"\" width=\"100\" height=\"100\" alt=\""+logName+"产品图片\" onerror=\"this.src='http://img4.jiameng.com/2014/07/U8w6Y759h603.png'\"/></a></dd>";
				if(brandSource == 0 || brandSource == '')
				{
                  htmlContent += "<dt><a href='http://www.jiameng.com/"+logName+"/default-images.htm' target='_blank' rel='nofollow'>更多</a></dt>";					
				}
				else
				{
				   htmlContent += "<dt><a href='http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/default-images.htm' target='_blank' rel='nofollow'>更多</a></dt>";
				}
				
				
				htmlContent += "</dl>";
		},
		error : function() {
	    	$(this).parent(".slideContent").find(".so_products").html.html('加载失败.');
		}});
          	$(this).parent(".slideContent").find(".so_products").html(htmlContent);
		},function(){
			$(this).parent(".slideContent").removeClass("show");
			//$(this).parent(".slideContent").parent(".items_V").css("background-color","#fff");
			$(this).html("展开");
			}
			)
	})
	/*banner slides*/
	$(function(){
	$('#so_slides').slidesjs({
			width: 182,
			height: 150,
			navigation: true,
			start: 1,
			play: {
			  auto: true,
			  restartDelay: 1000
			}
	 })

	})		
	/*
$(function() {
	$("#list-itemList .items_V").hover(function() {
		    //移入查询
		    $(this).css("background-color", "#fafafa");
			$(this).find(".slideContent").animate({height : "+100px"},100);
			var htmlContent = "<dl class=\"clearfix\">";
			var logName = $(this).find("#logName").val();
			var brandSource = $(this).find("#brandSource").val();
			var brandIndustry = $(this).find("#brandIndustry").val();
			
			$(this).find(".so_products").html("正在加载...");
            	$.ajax( {
				url : '/so/userPic.html',
				type : "post",
				dataType : "json",
				data : "loginName=" + logName + "&random=" + Math.random(),
				async : false,
				success : function(data) {
				var attr = data.result.split("|");
				var id = attr[0].split("@")[0];
				var imgHref = "";
				if (id == 1 || id == 2)
				{
					imgHref = "javascript:;";
				}
				else
				{
					if(brandSource == 0 || brandSource == '')
					{
					imgHref = "http://www.jiameng.com/"+logName+"/image/"+id+".htm";
					}
					else
						{
						
											imgHref = "http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/image/"+id+".htm";
						}
				}
				htmlContent += "<dd><a href=\""+imgHref+"\"><img src=\""+attr[0].split("@")[1]+"\" width=\"100\" height=\"100\" alt=\""+logName+"产品图片\" onerror=\"this.src='http://img4.jiameng.com/2014/07/U8w6Y759h603.png'\" /></a></dd>";
				var id1 = attr[1].split("@")[0];
				var imgHref1 = "";
				if (id1 == 1 || id1 == 2)
				{
					imgHref1 = "javascript:;";
				}
				else
				{  
					if(brandSource == 0 || brandSource == '')
					{
					imgHref1 = "http://www.jiameng.com/"+logName+"/image/"+id1+".htm";
					}
					else
						{
						
					imgHref1 = "http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/image/"+id1+".htm";
						}
					
				}
				htmlContent += "<dd><a href=\""+imgHref1+"\"><img src=\""+attr[1].split("@")[1]+"\" width=\"100\" height=\"100\" alt=\""+logName+"产品图片\" onerror=\"this.src='http://img4.jiameng.com/2014/07/U8w6Y759h603.png'\"/></a></dd>";
				if(brandSource == 0 || brandSource == '')
				{
                  htmlContent += "<dt><a href='http://www.jiameng.com/"+logName+"/default-images.htm' target='_blank'>更多</a></dt>";					
				}
				else
				{
				   htmlContent += "<dt><a href='http://www.jiameng.com/gs"+brandIndustry+"/"+logName+"/default-images.htm' target='_blank'>更多</a></dt>";
				}
				
				
				htmlContent += "</dl>";
		},
		error : function() {
	    	$(this).find(".so_products").html.html('加载失败.');
		}});
          	$(this).find(".so_products").html(htmlContent);
		}, function() {
			$(this).css("background-color", "#fff");
			$(this).find(".slideContent").stop().css("height","0");
		})
})
*/