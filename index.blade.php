@extends('home.layout.homeindex')
@section('con')
<div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class="">
		</div>
		<div id="bdw" class="bdw">
			<div id="bd" class="cf">
				<noscript style="display:none;" data-comboajax-uri="/index/tips/index/floornewV2" data-comboajax-onsuccess="$request.listen(&quot;www-tips&quot;, &quot;www.Tips&quot;);" data-comboajax-data="{&quot;sysmsg&quot;:true,&quot;commontips&quot;:true,&quot;page&quot;:&quot;index&quot;}" data-comboajax-state="5" data-parent="body" hidden="">
				</noscript>
				<div class="content" id="yui_3_16_0_1_1469929504947_672">
					<div class="content__header" id="yui_3_16_0_1_1469929504947_671">
						<!-- 首屏 -->
						<div data-component="floor-fsnew" class="component-floor-fsnew mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false}" id="yui_3_16_0_1_1469929504947_177">
							<div class="floor-fsnew cf" id="yui_3_16_0_1_1469929504947_670">
								<div class="fs site-fs J-site-fs__content" id="yui_3_16_0_1_1469929504947_669">
									<div data-component="index-hotfilter" class="component-index-hotfilter mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false}" id="yui_3_16_0_1_1469929504947_197">
										<div class="content__cell content__cell--hot content__cell-small" id="yui_3_16_0_1_1469929504947_9343">
											<h3 class="label">
												<span>热门团购</span>
											</h3>
											<div class="filter-strip" id="yui_3_16_0_1_1469929504947_9345">
												<ul class="filter-strip__list" id="yui_3_16_0_1_1469929504947_9344">
													<li id="yui_3_16_0_1_1469929504947_9649">
														<a href="/home/fgoodserji/1/10/{{session('cityname')['id']}}" class="hot" id="yui_3_16_0_1_1469929504947_9648">
															自助餐
														</a>
													</li>
													<li>
														<a href="/home/fgoodserji/1/26/{{session('cityname')['id']}}" class="hot">
															火锅
														</a>
													</li>
													<li id="yui_3_16_0_1_1469929504947_9650">
														<a href="/home/fgoodserji/1/27/{{session('cityname')['id']}}" id="yui_3_16_0_1_1469929504947_9651">
															小吃快餐
														</a>
													</li>
													<li id="yui_3_16_0_1_1469929504947_9347">
														<a href="/home/fgoodserji/1/31/{{session('cityname')['id']}}" id="yui_3_16_0_1_1469929504947_9346">
															烧烤烤肉
														</a>
													</li>
													<li id="yui_3_16_0_1_1469929504947_9590">
														<a href="/home/fgoodserji/9/107/{{session('cityname')['id']}}" id="yui_3_16_0_1_1469929504947_9589">
															足疗按摩
														</a>
													</li>
													<li id="yui_3_16_0_1_1469929504947_9746">
														<a href="/home/fgoods1/8/{{session('cityname')['id']}}" class="hot" id="yui_3_16_0_1_1469929504947_9796">
															KTV
														</a>
													</li>
													<li id="yui_3_16_0_1_1469929504947_9694">
														<a href="/home/fgoodserji/6/42/{{session('cityname')['id']}}" id="yui_3_16_0_1_1469929504947_9693">
															美发
														</a>
													</li>
													<li>
														<a href="/home/fgoodserji/1/29/{{session('cityname')['id']}}">
															西餐
														</a>
													</li>
													<li>
														<a href="/home/fgoodserji/1/25/{{session('cityname')['id']}}">
															甜点饮品
														</a>
													</li>
													<li>
														<a href="/home/fgoodserji/1/28/{{session('cityname')['id']}}">
															日韩料理
														</a>
													</li>
													
												</ul>
											</div>
										</div>
										<div class="content__cell content__cell--geo J-filter__geo content__cell-small" id="yui_3_16_0_1_1469929504947_8768">
											<h3 class="label">
												<span>全部区域</span>
											</h3>
											<div class="filter-strip" id="yui_3_16_0_1_1469929504947_9341">
												
												<ul class="filter-strip__list" id="yui_3_16_0_1_1469929504947_9340">
												@foreach($town as $v)
													<li id="yui_3_16_0_1_1469929504947_9647">
														<a href="/switch/town/{{$v['id']}}" id="yui_3_16_0_1_1469929504947_9646">
															{{$v['name']}}
														</a>
													</li>
												@endforeach	
												</ul>
											</div>
										</div>
										<div class="content__cell content__cell--area content__cell-small" id="yui_3_16_0_1_1469929504947_9334">
											<h3 class="label">
												<span>轮播图</span>
											</h3>
											<div class="filter-strip" id="yui_3_16_0_1_1469929504947_9337">
												
											</div>
										</div>
									</div>
									<div class="floor-fs-new__activity" id="yui_3_16_0_1_1469929504947_9330">
										<div id="press" class="promotion log-mod-viewed" data-mod="ip" data-mod-selector=".left,.right" >
											<ul id="tupianlunbo" class="promotion__slider J-promotion__slider cf mt-slider-sheet-container" >
											@for($i=0;$i<$num;$i++)	
												<li class="sheet mt-slider-sheet" style="left: 0px; display: none;" id="yui_3_16_0_1_1469929504947_9552" hidden="hidden">
													<div class="left choice__item" id="yui_3_16_0_1_1469929504947_9551">
														<em class="J-discount discount discount-big" data-lazyicon--slide="discount">8</em>
														<a class="link ccf" target="_blank" href="{{$lun[$i*2]['url']}}" id="yui_3_16_0_1_1469929504947_9550">
															<img class="img" src="{{$lun[$i*2]['pic']}}" id="yui_3_16_0_1_1469929504947_9549" height="232" width="333">
														</a>
														<div class="title" id="yui_3_16_0_1_1469929504947_10443">
															<a class="xtitle link ccf" target="_blank" href="http://bj.meituan.com/deal/39586431.html" id="yui_3_16_0_1_1469929504947_10444">
																{{$lun[$i]['name']}}
															</a>
															<p class="desc" id="yui_3_16_0_1_1469929504947_10442">
																{{$lun[$i]['desc']}}
															</p>
														</div>
														<span class="price">¥<strong>{{$lun[$i]['price']}}</strong></span>
													</div>
													<div class="right choice__item choice__item--right">
														<em class="J-discount discount" data-lazyicon--slide="discount">8.8</em>
														<a class="link ccf" target="_blank" href="{{$lun[$i*2+1]['url']}}">
															<img class="img" src="{{$lun[$i*2+1]['pic']}}" height="232" width="333">
														</a>
														<div class="title">
															<a class="xtitle link ccf" target="_blank" href="http://bj.meituan.com/deal/32057902.html">
																{{$lun[$i*2+1]['name']}}
															</a>
															<p class="desc">
																{{$lun[$i*2+1]['desc']}}
															</p>
														</div>
														<span class="price">¥<strong>{{$lun[$i*2+1]['price']}}</strong></span>
													</div>
												</li>
											@endfor	
											</ul>
											
											<div class="pre-next" id="yui_3_16_0_1_1469929504947_1768">
												<a id="prev" style="opacity: 0;background:black;text-decoration:none;color:white;" href="javascript:void(0);" hidefocus="true" class="mt-slider-previous sp-slide--previous">
												<span style="font-size:25px;" > <</span></a>
												<a id="next" style="opacity: 0;background:black;" href="javascript:void(0);" hidefocus="true" class="mt-slider-next sp-slide--next">
													<span class="J-slider-index slider-index">6</span><span class="slider-count">/6</span><span style="font-size:25px;" > ></span> 
												</a>
											</div>
											
										</div>
										<!--jquery特效  开始-->
											<script type="text/javascript">
												//轮播图片
												var i=0;    //自增变量
												var j=0;
												var num=0;  //当前显示第几个li
												var mytime=null;  //定时器--轮播图片
												//获取轮换图片
												var list = document.getElementById("tupianlunbo").getElementsByTagName("li");
												//共有几个轮播组
												var length=list.length;
												
												$('#tupianlunbo li:eq(0)').css({'display':'block',});
												$('.pre-next a:eq(1) span:eq(0)').html(1);
												$('.pre-next a:eq(1) span:eq(1)').html('/'+length);
												function run(i){
													j = 0;
													//轮播图片
													mytime = setInterval(function(){
														j = 0;
														$('#tupianlunbo li').css({'left':'0px','display':'none',});
														num = i%length;  //当前显示第几个li
														//console.log(num);
														pre = num-1;
														if(num==0){
															pre = length-1;
														}
														//滑动效果尝试
														$('#tupianlunbo li:eq('+num+')').css('display','block');
														//滑动效果 开始
														j = 0;
														zhi = 68.9;
														var huadon = setInterval(function(){
															//console.log(j);
															res = 689-zhi;
															//console.log(-zhi);
															$('#tupianlunbo li:eq('+num+')').css({'left':res+'px',});
															$('#tupianlunbo li:eq('+pre+')').css({'display':'block','left':-zhi+'px',});
															zhi = zhi+68.9;
															if(j>=9){
																clearInterval(huadon);
															}
															if(j<9){
																j++;
															}
															
														},50);
														
														//滑动效果 结束
														$('#tupianlunbo li:eq('+pre+')').css({'display':'none',});
														$('.pre-next a:eq(1) span:eq(0)').html(num+1);
														$('.pre-next a:eq(1) span:eq(1)').html('/'+length);
														i=i+1;
														
													},3000);
												}
												run(1);
												
												$('#press').mouseover(function(){
													$('.pre-next a').css('opacity','0.6');
													clearInterval(mytime);
												});
												$('#press').mouseout(function(){
													$('.pre-next a').css('opacity','0');
													nownum = $('.pre-next a:eq(1) span:eq(0)').html();
													run(nownum-1);
												});
												$('#prev').click(function(){
													var nownum = $('.pre-next a:eq(1) span:eq(0)').html();
													nownum--;
													$('#tupianlunbo li:eq('+nownum +')').css({'left':'0px','display':'none'});
													if(nownum == 0){
														nownum = length;
													}
													$('#tupianlunbo li:eq('+(nownum -1)+')').css({'left':'0px','display':'block'});
													$('.pre-next a:eq(1) span:eq(0)').html(nownum);
									
												});
												$('#next').click(function(){
													var nownum = $('.pre-next a:eq(1) span:eq(0)').html();
													
													$('#tupianlunbo li:eq('+(nownum-1)+')').css({'left':'0px','display':'none'});
													if(nownum == length){
														nownum = 0;
													}
													$('#tupianlunbo li:eq('+nownum+')').css({'left':'0px','display':'block'});
													nownum++;
													$('.pre-next a:eq(1) span:eq(0)').html(nownum);
									
												});
											</script>
											<!--jquery特效  结束-->
									</div>
								</div>
								<div class="qrcode-image">
									<img src="/home/index/a_002.png">
								</div>
								<div class="side__new-topic ui-slider log-mod-viewed" data-mod="ii" data-mod-deepview="1" id="yui_3_16_0_1_1469929504947_554">
									<ul class="new-topic__slider J-new-topic__slider cf" id="yui_3_16_0_1_1469929504947_9230">
										<li class="sheet" style="">
											<a class="wrapper" href="http://www.meituan.com/category/new" target="_blank" title="每日上新" data-mod-idx="">
												<div class="title__main">
													<div>
														每日上新
													</div>
													<div class="title__deputy">
														吃喝玩乐最低价
													</div>
												</div>
												<img src="/home/index/a90e6f506f86cb29f4b4eb70a628ccba37411.png" width="198">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="content__body" id="yui_3_16_0_1_1469929504947_744">
						<div data-comboajax-uri="/index/hotsandrec" data-comboajax-onsuccess="this.setHTML($response.html);" data-comboajax-state="5">
						</div>
						<div data-component="category-list" class="component-category-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;css&quot;:&quot;fewww:\/www\/css\/category-list.css@d945996&quot;}" id="yui_3_16_0_1_1469929504947_199">
							<div class="category-list log-mod-viewed" data-mod="im" id="yui_3_16_0_1_1469929504947_8749">
<!--美食-->						<div class="category-floor " id="yui_3_16_0_1_1469929504947_8748">
									<div id="floor-category--meishi" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/1/{{session('cityname')['id']}}" class="link">
													美食
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/24/{{session('cityname')['id']}}" class="link">
													代金券
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/10/{{session('cityname')['id']}}" class="link">
													自助餐
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/26/{{session('cityname')['id']}}" class="link">
													火锅
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/31/{{session('cityname')['id']}}" class="link">
													烧烤烤肉
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/35/{{session('cityname')['id']}}" class="link">
													香锅烤鱼
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/1/29/{{session('cityname')['id']}}" class="link">
													西餐
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/1/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="ms" id="ms" class="title" href="/home/fgoods1/1/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cmeishi">
											<i class="icon F-glob F-glob-meishi">
											</i>
											美食
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8747">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8746">
										@foreach($food as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_food/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_food/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_food/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach	
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/1/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多美食团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--休闲娱乐-->					<div class="category-floor " id="yui_3_16_0_1_1469929504947_8752">
									<div id="floor-category--xiuxianyule" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/9/{{session('cityname')['id']}}" class="link">
													休闲娱乐
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/9/105/{{session('cityname')['id']}}" class="link">
													运动健身
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/9/107/{{session('cityname')['id']}}" class="link">
													足疗按摩
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/9/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="xx" class="title" href="/home/fgoods1/9/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cxiuxianyule">
											<i class="icon F-glob F-glob-xiuxianyule">
											</i>
											休闲娱乐
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8751">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8750">
										@foreach($fun as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_fun/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_fun/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_fun/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/9/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多休闲娱乐团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--电影-->						<div class="category-floor " id="yui_3_16_0_1_1469929504947_8755">
									<div id="floor-category--dianying" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/3/{{session('cityname')['id']}}" class="link">
													电影
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/3/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="dy" class="title" href="/home/fgoods1/3/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cdianying">
											<i class="icon F-glob F-glob-dianying">
											</i>
											电影
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8754">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8753">
											@foreach($film as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_film/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_film/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_film/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/3/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多电影团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--酒店-->						<div class="category-floor " id="yui_3_16_0_1_1469929504947_8758">
									<div id="floor-category--jiudian" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/2/{{session('cityname')['id']}}" class="link">
													酒店
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/2/12/{{session('cityname')['id']}}" class="link">
													经济型酒店
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/2/13/{{session('cityname')['id']}}" class="link">
													主题酒店
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/2/46/{{session('cityname')['id']}}" class="link">
													豪华酒店
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/2/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="jd" class="title" href="/home/fgoods1/2/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cjiudian">
											<i class="icon F-glob F-glob-jiudian">
											</i>
											酒店
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8757">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8756">
											@foreach($hotel as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_hotel/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_hotel/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_hotel/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/2/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多酒店团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--生活服务-->					<div class="category-floor " id="yui_3_16_0_1_1469929504947_8761">
									<div id="floor-category--shenghuo" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/7/{{session('cityname')['id']}}" class="link">
													生活服务
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/92/{{session('cityname')['id']}}" class="link">
													培训课程
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/97/{{session('cityname')['id']}}" class="link">
													母婴亲子
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/98/{{session('cityname')['id']}}" class="link">
													配镜
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/91/{{session('cityname')['id']}}" class="link">
													其他摄影
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/94/{{session('cityname')['id']}}" class="link">
													体检/齿科
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/7/93/{{session('cityname')['id']}}" class="link">
													汽车服务
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/7/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="sh" class="title" href="/home/fgoods1/7/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cshenghuo">
											<i class="icon F-glob F-glob-shenghuo">
											</i>
											生活服务
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8760">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8759">
											@foreach($service as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_service/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_service/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_service/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/7/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多生活服务团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--丽人-->						<div class="category-floor " id="yui_3_16_0_1_1469929504947_8764">
									<div id="floor-category--jiankangliren" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/6/{{session('cityname')['id']}}" class="link">
													丽人
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/6/42/{{session('cityname')['id']}}" class="link">
													美发
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/6/83/{{session('cityname')['id']}}" class="link">
													美容美体
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/6/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="lr" class="title" href="/home/fgoods1/6/{{session('cityname')['id']}}" target="_blank" data-mttcode="Cjiankangliren">
											<i class="icon F-glob F-glob-jiankangliren">
											</i>
											丽人
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8763">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8762">
											@foreach($bualty as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_bualty/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_bualty/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_bualty/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/6/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多丽人团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
<!--旅游-->						<div class="category-floor " id="yui_3_16_0_1_1469929504947_8767">
									<div id="floor-category--lvyou" class="category-floor__head cf" data-mtnode="Acategory">
										<ul class="sub-categories">
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoods1/4/{{session('cityname')['id']}}" class="link">
													旅游
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/4/40/{{session('cityname')['id']}}" class="link">
													景点门票
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/4/60/{{session('cityname')['id']}}" class="link">
													主题公园
												</a>
											</li>
											<li class="sub-categories__cell ">
												<a target="_blank" href="/home/fgoodserji/4/63/{{session('cityname')['id']}}" class="link">
													水上乐园
												</a>
											</li>
											<li class="sub-categories__cell sub-categories__cell--all">
												<a target="_blank" href="/home/fgoods1/4/{{session('cityname')['id']}}" class="link" data-mttcode="Call">
													全部
													<i class="F-glob F-glob-caret-right-small">
													</i>
												</a>
											</li>
										</ul>
										<a name="ly" class="title" href="/home/fgoods1/4/{{session('cityname')['id']}}" target="_blank" data-mttcode="Clvyou">
											<i class="icon F-glob F-glob-lvyou">
											</i>
											旅游
										</a>
									</div>
									<div class="category-floor__body cf deal-list--floor-new" data-mtnode="Anone" id="yui_3_16_0_1_1469929504947_8766">
										<div data-component="deal-list" class="component-deal-list mt-component--booted" mt-scope="[]" data-component-config="{&quot;lazyRender&quot;:false,&quot;afterLoad&quot;:false}" id="yui_3_16_0_1_1469929504947_8765">
											@foreach($trip as $v)
											<div class="deal-tile" data-mteventnd="{&quot;id&quot;:25104886,&quot;pos&quot;:1}" data-mttcode="C1">
												<a href="/fgoods/detail/goods_trip/{{$v['id']}}" class="deal-tile__cover" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;cover&quot;}">
													<img class="J-webp" alt="{{$v['name']}}" src="{{$v['pic']}}" height="154" width="260">
													
												</a>
												<h3 class="deal-tile__title">
													<a href="/fgoods/detail/goods_trip/{{$v['id']}}" class="w-link" title="" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;title&quot;}">
														<span class="xtitle">{{$v['name']}}</span>
														<span class="short-title">{{$v['desc']}}</span>
													</a>
												</h3>
												<p class="deal-tile__detail">
													<span class="price">¥<strong>{{$v['price']}}</strong></span>
													<span class="value">门店价 <del class="num"><span>¥</span>{{$v['other_price']}}</del></span>
													<span class="sales">
														已售<strong class="num">{{$v['sell_num']}}</strong>
													</span>
												</p>
												<div class="deal-tile__extra">
													<p class="extra-inner">
													@if($v['fuli'])
														<span class="campaign">{{$v['fuli']}}</span>
													@endif
														
														<a href="/fgoods/detail/goods_trip/{{$v['id']}}#anchor-reviews" class="rate-info" hidefocus="true" target="_blank" data-mtevent="{&quot;sr&quot;:&quot;rating&quot;}">
															<span class="rate-info__bar common-rating">
																<span class="rate-stars" style="width: 86%;">
																</span>
															</span>
															<span class="rate-info__count">{{$v['comment_num']}}人评价</span>
														</a>
													</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
									<div class="category-floor__foot" data-mtnode="Acategory">
										<a href="/home/fgoods1/4/{{session('cityname')['id']}}" target="_blank" class="link">
											<span>更多旅游团购，请点击查看
												<i class="link__icon F-glob F-glob-caret-right-small">
												</i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-component="floor-elevator" class="component-floor-elevator mt-component--booted" mt-scope="[]" data-component-params="{&quot;topEdge&quot;:&quot;.category-floor__body&quot;}" data-component-config="{&quot;lazyRender&quot;:false}" id="yui_3_16_0_1_1469929504947_210">
						<div class="J-elevator floor-elevator" data-uix="smoothscroll" data-params="{easing: 'easeOut'}" id="yui_3_16_0_1_1469929504947_248" style="top: 786.8px; right: 1354.5px; display: none;" hidden="hidden">
							<ul id="ul" class="elevator" data-uix="scrollspy" data-params="{currentClass: 'current'}" id="yui_3_16_0_1_1469929504947_250">
								<li class="elevator__floor meishi">
									<a class="link " href="#ms">
										<i class="link__icon F-glob F-glob-meishi">
										</i>
										<span>美食</span>
									</a>
								</li>
								<li class="elevator__floor xiuxianyule">
									<a class="link " href="#xx" hidefocus="false" data-target="#floor-category--xiuxianyule" data-scroll="#floor-category--xiuxianyule">
										<i class="link__icon F-glob F-glob-xiuxianyule">
										</i>
										<span>休闲娱乐</span>
									</a>
								</li>
								<li class="elevator__floor dianying">
									<a class="link" href="#dy" hidefocus="true" data-target="#floor-category--dianying" data-scroll="#floor-category--dianying">
										<i class="link__icon F-glob F-glob-dianying">
										</i>
										<span>电影</span>
									</a>
								</li>
								<li class="elevator__floor jiudian">
									<a class="link" href="#jd" hidefocus="true" data-target="#floor-category--jiudian" data-scroll="#floor-category--jiudian">
										<i class="link__icon F-glob F-glob-jiudian">
										</i>
										<span>酒店</span>
									</a>
								</li>
								<li class="elevator__floor shenghuo">
									<a class="link" href="#sh" hidefocus="true" data-target="#floor-category--shenghuo" data-scroll="#floor-category--shenghuo">
										<i class="link__icon F-glob F-glob-shenghuo">
										</i>
										<span>生活服务</span>
									</a>
								</li>
								<li class="elevator__floor jiankangliren">
									<a class="link" href="#lr" hidefocus="true" data-target="#floor-category--jiankangliren" data-scroll="#floor-category--jiankangliren">
										<i class="link__icon F-glob F-glob-jiankangliren">
										</i>
										<span>丽人</span>
									</a>
								</li>
								<li class="elevator__floor lvyou">
									<a class="link" href="#ly" hidefocus="true" data-target="#floor-category--lvyou" data-scroll="#floor-category--lvyou">
										<i class="link__icon F-glob F-glob-lvyou">
										</i>
										<span>旅游</span>
									</a>
								</li>
							</ul>
						</div>
<!--jquery特效  开始-->
<script type="text/javascript">
//侧边栏特效
	$(window).scroll(function(){
		//获取window高度
		var wy=$(window).height();
		//获取滚动距离
		var sy  =$(window).scrollTop();
		var top = ((wy-sy) <= 0)?0:(wy-sy);
		
		if(sy > 0){
			$('#yui_3_16_0_1_1469929504947_248').css({'display':'block','top':top});
			$('#ul li a').attr('class','link ');
			$('#ul li:eq(0) a').attr('class','link current');
			if(sy>2300){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(1) a').attr('class','link current');
			}
			if(sy>3300){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(2) a').attr('class','link current');
			}
			if(sy>3900){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(3) a').attr('class','link current');
			}
			if(sy>4600){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(4) a').attr('class','link current');
			}
			if(sy>5300){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(5) a').attr('class','link current');
			}
			if(sy>6000){
				$('#ul li a').attr('class','link ');
				$('#ul li:eq(6) a').attr('class','link current');
			}
		}else{
			$('#yui_3_16_0_1_1469929504947_248').css('display','none');
		}
		
	});
</script>
<!--jquery特效  结束-->						
					</div>
				</div>
			</div>
		</div>
		<div data-component="holy-reco" class="component-holy-reco mt-component--booted" mt-scope="[]" data-component-config="{&quot;css&quot;:&quot;fewww:\/www\/css\/holy-reco.css@d945996&quot;}" id="yui_3_16_0_1_1469929504947_225">
			<div class="J-holy-reco holy-reco">
				<div>
					<ul class="ccf cf nav-tabs--small">
						
						<li class="J-holy-reco__label current">
							<a href="#" class="tab-item">
								友情链接
							</a>
						</li>
						
					</ul>
				</div>
				
				<div class="J-holy-reco__content holy-reco__content">
				@if($flinknum)
					@foreach($flink as $v)
					<a href="{{$v['url']}}" title="美食团购">
						{{$v['name']}}
					</a>
					@endforeach
				@endif
				</div>
				
			</div>
		</div>
		
@endsection
