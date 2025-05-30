$(function(){
	$('.menu li').hover(function(){
		$(this).children('ul').show();
		//$(this).focus().addClass('focusa')	
	},function(){
		$(this).children('ul').hide();
		$//(this).focus().removeClass('focusa')
	});

	fixedNav();
	$(window).scroll(function(){
		fixedNav();
	});
	
	//wap menu
                $(".sjdha_t2").click(function(){
                    $(".huakuai").css("right","0%")
                })
                $(".guanbi").click(function(){
                    $(".huakuai").css("right","-100%")
                })
				
				$(".topa_dsj i").click(function() {
					$(".topa_a3sj").slideToggle();
				})
				
				$(".sjdhb_aa").slideUp()
				$(".sjdhb_ah1 .sjdhb_aa").slideDown();
				$(".sjdhb_a").click(function() {
					if ($(this).find(".sjdhb_aa").css('display') == "none") {
						$(this).find(".sjdhb_aa").slideDown();
						$(this).siblings().find(".sjdhb_aa").slideUp();
						$(this).addClass("sjdhb_ah1");
						$(this).siblings().removeClass("sjdhb_ah1");
					} else {
						$(this).find(".sjdhb_aa").slideUp();
						$(this).removeClass("sjdhb_ah1");
					}
				})
	
				$(".yyan h6").click(function() {
					$(".yyan_h").css("right", "0%")
				});
				$(".yyan_h h5").click(function() {
					$(".yyan_h").css("right", "-100%")
				});
				$(".yyan_ha p").slideUp()
				$(".yyan_ha").click(function() {
					if ($(this).find("p").css('display') == "none") {
						$(this).find("p").slideDown();
						$(this).siblings().find("p").slideUp();
						$(this).addClass("yyan_haa");
						$(this).siblings().removeClass("yyan_haa");
					} else {
						$(this).find("p").slideUp();
						$(this).removeClass("yyan_haa");
					}
				})
	
});

function fixedNav()
{
        var y = $(window).scrollTop(),
        navt = 168;
        if(y > navt){
            $('.nav_top').addClass('nav_fixed');
        }else{
            $('.nav_top').removeClass('nav_fixed');
        }
}

function DoSearch(obj)
{
	var key = $(obj).val();
	if(key.replace(/[\s]+/,"")==""||key=="搜索关键词")
	{
		alert("请输入产品型号搜索");
		$(obj).focus()
		return false;
	}
	window.location.href="/search.html?s=" + encodeURI(key);
}

function checkfeed(f)
{
  if (f.cname.value=='')
   {alert('Введите имя.');
    f.cname.focus();
    return false
   }
  if (f.company.value=='')
   {alert('Введите компанию.');
    f.company.focus();
    return false
   }
  if (f.email.value=='')
   {alert('Введите адрес почтового ящика.');
    f.email.focus();
    return false
   }
  if (f.tel.value=='')
   {alert('Пожалуйста, введите контактный телефон.');
    f.tel.focus();
    return false
   }
}

function checkfeed2(f)
{
  if (f.cname.value=='')
   {alert('Введите имя.');
    f.cname.focus();
    return false
   }
  if (f.tel.value=='')
   {alert('Пожалуйста, введите контактный телефон.');
    f.tel.focus();
    return false
   }
}