<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/help-center.css" />
		<link rel="stylesheet" type="text/css" href="/Users/jimharrison/Desktop/4210/4210/css\ file/category.css">
		<title>shopping list</title>

		<style>
			* {
		margin: 0;
		padding: 0;
		font-family: "Copperplate";
		list-style: none;
		color: #666;
		text-decoration: none;
		font-size: 14px;
	}
	body {
		background: #f5f5f5;
		height: 100%;
	}
	.header{
    font-size: 12px;
    border-bottom: 2px solid #7eecff;
    background: #fff;
    color: #b0b0b0;
    position: relative;
    z-index: 20;
    height: 100px;
}
	.header .container {
    position: relative;
    width: 1226px;
    margin-right: auto;
    margin-left: auto;
}
    .header .container .header-logo {
    width: 93px;
    margin-top: 26px;
}


 .logo {
    width: 48px;
    height: 48px;
    position: relative;
    display: block;
    width: 55px;
    height: 55px;
    overflow: hidden;
    background-color: #87d9ff;
	}

	.header-title {
    float: left;
    margin-top: 26px;
	font-size: 12px;
	}
	.topbar-info {
    margin-top: 30px;
    line-height: 40px;
}
	.link {
    padding: 0 5px;
	color: #757575;
	text-decoration: none;
	}
	.hid {
		overflow: hidden;
	}
	.left {
		float: left;
	}
	.box_head{
	position: relative;
    margin: 0;
    height: 50px;
    font-size: 30px;
    font-weight: 400;
    color: #757575;
    border-top: 1px solid #e0e0e0;
  }
  .box_head span{
  position: absolute;
    top: -20px;
    left: 372px;
    height: 40px;
    width: 482px;
    line-height: 40px;
    text-align: center;
    display: block;
    background-color: #f5f5f5;
	font-size: 30px;
	}
	#box {
		width:1240px;
		margin: 20px auto;
	}
	#box ul {
		margin-right: -14px;
		overflow: hidden;
	}
	/*控制图片表格白色布局尺寸*/
	#box li {
		margin-left:13%;
		width: 1000px;
		/*float: left;*/
		position: fixed;
		margin-right: 14px;
		padding: 24px 0 20px;
		background: #FFF;
		text-align: center;
		position: relative;
		cursor: pointer;
		margin-bottom:14px;
	}
	/*控制 category 大小*/
	#category li {
		margin-left:-10%;
		margin-top: -60%;
		width: 140px;
		/*float: left;*/
		position: fixed;
		margin-right: 0px;
		padding: 20px 0 180px;
		background: rgb(28, 28, 28);
		text-align: center;
		position: relative;
		cursor: pointer;
		margin-bottom:0px;
	}
	/*控制表格中图片大小*/
	.pro_img {
		width: 900px;
		height: 700px;
		margin: 0 auto 18px;
	}
	.pro_name {
		display: block;
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
		font-weight: 400;
	}
	.pro_name a {
		color: #333;
	}
	.pro_price {
		color: #80f0ff;
		margin: 10px;
	}
	.pro_rank {
		color: #757575;
		margin: 10px;
	}
	#box li:hover .add_btn {
		display: block;
	}
	#box li:hover .pro_rank {
		opacity: 0;
	}
	#box li .add_btn:hover {
		background-color: rgb(112, 217, 255);
		color: white;
	}
	

	
	.add_btn {
		height: 22px;
		position: absolute;
		width: 122px;
		bottom: 28px;
		left: 50%;
		margin-left: -61px;
		line-height: 22px;
		display: none;
		color: rgb(112, 217, 255);
		font-size: 10px;
		border: 1px solid  rgb(112, 217, 255);
	}
	.car {
		width: 1240px;
		margin: 20px auto;
		background: #FFF;
	}
	.car .check{
		width: 50px;
	
	}
	.car .check i{
		color: #fff;
		display: inline-block;
		
		width: 18px;
		height: 18px;
		line-height: 18px;
		border: 1px solid #e0e0e0;
		margin-left: 24px;
		background-color: #fff;
		font-size: 16px;
		text-align: center;
		vertical-align: middle;
		position: relative;
		top: -1px;
		cursor: pointer;
		font-family: "iconfont";
	}
	.i_acity {

		border-color: #6697ff !important;
		background-color: #6697ff !important;
	}
	.car .img {
		width: 190px;
	}
	.car .img img {
		display: block;
		width: 80px;
		height: 80px;
		margin: 3px auto;
	}
	.car .name {
		width: 300px;
	}
	.car .name span {
		line-height: 1;
		margin-top: 8px;
		margin-bottom: 8px;
		font-size: 18px;
		font-weight: normal;
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
	}
	.car .price {
		width: 144px;
		text-align: right;
		padding-right: 84px;
	}
	.car .price span {
		color: #8bfffd;
		font-size: 16px;
	}
	.car .number{
		width: 150px;
	}
	.car .subtotal{
		width: 130px;
		
	}
	.car .ctrl {
		width: 105px;
		padding-right:25px;
		text-align: center;
	}
	.car .ctrl a {
		font-size: 20px;
		cursor: pointer;
		display: block;
		width: 26px;
		height: 26px;
		margin: 30px auto;
		line-height: 26px;
	}
	.car .ctrl a:hover {
		color: #FFF;
		background: #7bfff8;
		border-radius: 50%;
	}
	.head_row {
		height: 70px;
		line-height: 70px;
	}
	.head_row, .row {
		border-bottom: solid 1px #e0e0e0;
	}
	.row {
		height: 86px;
		line-height:86px;
		padding: 15px 0;
		margin: 0px;
	}
	/*控制 checkout list 大小*/
	#sum_area{
		width:1240px;
		height: 60px;
		background: white;
		margin: 20px auto;
	}
	#sum_area #pay{
		width:250px;
		height:60px;
		text-align: center;
		float: right;
		line-height: 60px;
		font-size: 19px;
		background: #74f6ff;
		color: white;
	}
	#sum_area #pay_amout{
		width:250px;
		height:60px;
		text-align: center;
		float: right;
		line-height: 60px;
		font-size: 16px;
		color:#84fffd ;
	}
	#sum_area #pay_amout #price_num{
		width:100px;
		height: 60px;
		font-size: 25px;
		color:#00ffe5 ;
	/*	float: left;*/
	}
	
	.item_count_i{
		height: 85px;
		width:10%;
		/*border: 1px solid black;*/
		float: left;
		margin-right: 25px;
	}
	.num_count{
		width:150px;
		height:40px;
		border: 1.2px solid #E0E0E0;
		float:right;
		margin-top: 21px;
	
	}
	.count_i{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:21px;
		color: #40a9da;
	}
	.count_i:hover{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:21px;
		color: #525252;
		background: #73f6ff;
		cursor: pointer;
	}
	.c_num{
		width:40%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:16px;
		color: #747474;
	}
	.count_d{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:25px;
		color: #747474;
	}
	.count_d:hover{
		width:30%;
		height:40px;
		line-height: 40px;
		float: left;
		text-align: center;
		font-size:25px;
		color: #c5c5c5;
		background: #67fff7;
		cursor: pointer;
	}
	.i_acity2 {
		border-color: #5eefff !important;
		background-color: #4bf3ff !important;
	}
    .dropdown-menu.multi-level {    
    display: none;
    float: right;
    position: fixed;
    right: 10px;
    top:120px;
    background-color: rgb(255, 255, 255);
    }
    .nav.navbar-nav li:hover ul {
    display: block;
    float:right;
    background-color: rgb(255, 255, 255);
    }
    a:hover
    {
    background-color:rgb(255, 255, 255);
    }
	/*Feb, 4th 添加纵置列表*/
	
	/*Feb, 4th 添加纵置列表*/

</style>
	</head>
	<div>
	<body onload="addLinkForImage()" style="text-align: center; background-image:url(/Users/jimharrison/Desktop/4210/picture/bg1.jpg)";>
	</div>
		<!--纵置列表-->
		
		<!--纵置列表-->
		<script>
            function addLinkForImage(){

            }
			window.onload = function() {
				var aData = [{
                        //"window.location.assign":"www.google.com",
                        "imgUrl": "/Users/jimharrison/Desktop/4210/picture/1.png",
						"comment": "Faded is a song by British-Norwegian record producer and DJ Alan Walker with vocals provided by Norwegian singer Iselin Solheim. The single was originally set to be released on 25 November 2015, but was postponed to 3 December. The song was highly successful, peaking in the top 10 in most of the countries it charted in, and reached the top spot in more than 10 countries. As of July 2021, it is the 20th most viewed video on YouTube and also 13th most viewed music video, with over 3 billion views, making it the first EDM track to hit that milestone.[1] Faded is also the 45th most streamed song on Spotify as of July 2021, with over 1.5 billion streams.",
						"proName": "  Diamond Heart  ",
						"proPrice": "2.7",
						"proComm": "0.3"
					}
				];
				var oBox = document.getElementById("box");
				var oCar = document.getElementById("car");
				var oUl = document.getElementsByTagName("ul")[0];

				for (var i = 0; i < aData.length; i++) {
					var oLi = document.createElement("li");
					var data = aData[i];

					oLi.innerHTML += '<div class="pro_img"><img src="' + data["imgUrl"] + '" width="600" height="600"><br><hr>'+data["comment"]+'<hr></div>';
					oLi.innerHTML += '<h3 id="h3" class="pro_name"><a rel="nofollow" href="#">' + data["proName"] + '</a></h3>';
					oLi.innerHTML += '<p class="pro_price">' + data["proPrice"] + '$</p>';
					oLi.innerHTML += '<p class="pro_rank">' + data["proComm"] + ' million buyers</p>';
					oLi.innerHTML += '<div class="add_btn">Add to Shopping Cart</div>';
					oUl.appendChild(oLi);

				}
				var aBtn = getClass(oBox, "add_btn");//获取box下的所有添加购物车按钮
				var number = 0;//初始化商品数量
				for (var i = 0; i < aBtn.length; i++) {
					number++;
					aBtn[i].index = i;
					aBtn[i].onclick = function() {
						var oDiv = document.createElement("div");
						var data = aData[this.index];
						oDiv.className = "row hid";
						oDiv.innerHTML += '<div style="margin-left:25%;" class="check left"> <i class="i_check" id="i_check" onclick="i_check()" >√</i></div>';
						oDiv.innerHTML += '<div class="img left"><img src="' + data["imgUrl"] + '" width="80" height="80"></div>';
						oDiv.innerHTML += '<div style="margin-left:25%;" class="name left"><span>' + data["proName"] + '</span></div>';
						oDiv.innerHTML += '<div style="margin-left:25%;" class="price left"><span>' + data["proPrice"] + '$</span></div>';
						oDiv.innerHTML +=' <div style="margin-left:25%;" class="item_count_i"><div class="num_count"><div class="count_d">-</div><div class="c_num">1</div><div class="count_i">+</div></div> </div>'
						oDiv.innerHTML += '<div style="margin-left:25%;" class="subtotal left"><span>' + data["proPrice"] + '$</span></div>'
						oDiv.innerHTML += '<div style="margin-left:25%;" class="ctrl left"><a rel="nofollow" href="javascript:;">×</a></div>';
						oCar.appendChild(oDiv);
						var flag = true;
						var check = oDiv.firstChild.getElementsByTagName("i")[0];
						check.onclick = function() {
							// console.log(check.className);
							if (check.className == "i_check i_acity") {
								check.classList.remove("i_acity");

							} else {
								check.classList.add("i_acity");
							}
							getAmount();
						}
						var delBtn = oDiv.lastChild.getElementsByTagName("a")[0];
						delBtn.onclick = function() {
							var result = confirm("delete selected item?");
							if (result) {
								oCar.removeChild(oDiv);
								number--;
								getAmount();
							}
						}
						var i_btn = document.getElementsByClassName("count_i");
						for (var k = 0; k < i_btn.length; k++) {
							i_btn[k].onclick = function() {
								bt = this;
								//获取小计节点
								at = this.parentElement.parentElement.nextElementSibling;
								//获取单价节点
								pt = this.parentElement.parentElement.previousElementSibling;
								//获取数量值
								node = bt.parentNode.childNodes[1];
								console.log(node);
								num = node.innerText;
								num = parseInt(num);
								num++;
								node.innerText = num;
								//获取单价
								price = pt.innerText;
								price = price.substring(0, price.length - 1);
								//计算小计值
								at.innerText = price * num + "$";
								//计算总计值
								getAmount();
							}
						}
						//获取所有的数量减号按钮
						var d_btn = document.getElementsByClassName("count_d");
						for (k = 0; k < i_btn.length; k++) {
							d_btn[k].onclick = function() {
								bt = this;
								//获取小计节点
								at = this.parentElement.parentElement.nextElementSibling;
								//获取单价节点
								pt = this.parentElement.parentElement.previousElementSibling;
								//获取c_num节点
								node = bt.parentNode.childNodes[1];
								num = node.innerText;
								num = parseInt(num);
								if (num > 1) {
									num--;
								}
								node.innerText = num;
								//获取单价
								price = pt.innerText;
								price = price.substring(0, price.length - 1);
								//计算小计值		
								at.innerText = price * num + "$";
								//计算总计值
								getAmount();
							}
						}

						delBtn.onclick = function() {
							var result = confirm("delete selected item(s)?");
							if (result) {
								oCar.removeChild(oDiv);
								number--;
								getAmount();
							}
						}

					}
				}

			}

			function getClass(oBox, tagname) {
				var aTag = oBox.getElementsByTagName("*");
				var aBox = [];
				for (var i = 0; i < aTag.length; i++) {
					if (aTag[i].className == tagname) {
						aBox.push(aTag[i]);
					}
				}
				return aBox;
			}


			var index = false;
			function checkAll() {
				var choose = document.getElementById("car").getElementsByTagName("i");
				// console.log(choose);
				if (choose.length != 1) {
					for (i = 1; i < choose.length; i++) {
						if (!index) {
							choose[0].classList.add("i_acity2")
							choose[i].classList.add("i_acity");
						} else {
							choose[i].classList.remove("i_acity");
							choose[0].classList.remove("i_acity2")
						}
					}
					index = !index;
				}
				getAmount();
			}



			//进行价格合计
			function getAmount() {
				// console.log(ys);
				ns = document.getElementsByClassName("i_acity");
				console.log(ns);
				sum = 0;
				//选中框
				document.getElementById("price_num").innerText = sum;
				for (y = 0; y < ns.length; y++) {
					//小计
					amount_info = ns[y].parentElement.parentElement.lastElementChild.previousElementSibling;
					num = parseInt(amount_info.innerText);
					sum += num;
					document.getElementById("price_num").innerText = sum;
				}
			}
		</script>
		</head>
		<body>
			
			<!--
            <div class="header">
				<div class="container">
					<div class="header-logo">
						<a rel="nofollow" class="logo ir" href="" title="小米官网">小米官网</a>
					</div>
					<div class="header-title" id="J_miniHeaderTitle">
						<h2 id="h4" style="font-size: 30px;">我的购物车</h2>
					</div>
					<div class="topbar-info" id="J_userInfo">
						<a rel="nofollow" class="link" href="http://www.weichufeng.cn/login.jsp">登录</a><span class="sep">|</span><a rel="nofollow" class="link" href="http://www.weichufeng.cn/regist.jsp">注册</a></div>
				</div>
			</div>
            -->	


			<div style="margin-left:15%;" id="car" class="car">

				<div class="head_row hid">
					<div class="check left"> <i onclick="checkAll()">√</i></div>
					<div class="img left">  select all</div>
					<div class="name left">Name</div>
					<div class="price left">Price</div>
					<div class="number left">Amount</div>
					<div class="subtotal left">Sum</div>
				<!--<div class="ctrl left">操作</div>-->	
				</div>


			</div>

            <!--<i class="a-icon a-icon-star-small a-star-small-5 aok-align-bottom"><span class="a-icon-alt">4.8 out of 5 stars</span></i>-->
			<div style="margin-left:15%;" id="sum_area">
				<div id="pay">Checkout</div>
				<div id="pay_amout">Total：<span id="price_num">0</span>$</div>                
			</div>

			

            <div id="box">
				<h2 id="h5" class="box_head"></h2>
				<ul>
				</ul>
			</div>
			
            
			<ul class="nav navbar-nav">
				<li>
					<div  style="position: fixed ; right: 5px; top:100px"><a button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">shopping list $ <b class="caret"></b></a></div>
					<!---->
					
					<!---->
					<ul class="dropdown-menu multi-level">
						
						<!------------------------------------------------------------------->
						
						<!--
						<div style="margin-left:5%;" id="car" class="car">

							<div class="head_row hid">
								<div class="check left"> <i onclick="checkAll()">√</i></div>
								<div class="img left">  select all</div>
								<div class="name left">Name</div>
								<div class="price left">Price</div>
								<div class="number left">Amount</div>
								<div class="subtotal left">Sum</div>
							<div class="ctrl left">操作</div>
						</div>
			
						</div>
						<i class="a-icon a-icon-star-small a-star-small-5 aok-align-bottom"><span class="a-icon-alt">4.8 out of 5 stars</span></i>
						<div style="margin-left:15%;" id="sum_area">
							<div id="pay">Checkout</div>
							<div id="pay_amout">Total：<span id="price_num">0</span>$</div>                
						</div>
			
						<div id="box">
							<h2 id="h5" class="box_head"></h2>
							<ul>
							</ul>
						</div>
					-->
					<label for="tentacles">Number of Product  1 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  2 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  3 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  4 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  5 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  6 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  7 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  8 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product  9 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
					<label for="tentacles">Number of Product 10 (0-10000):</label>
						<input type="number" id="tentacles" name="tentacles" min="0" max="10000"><br>
						<!------------------------------------------------------------------->
						<ul class="nav pull-right">
							<li>
								<br>
								<button><a>[checkout]</a></button>
							</li>
						</ul>
					</ul>
				</li>
			</ul>



				<ul >
                    <li>
                        <div  id="category" style="position: fixed ; left: 0px; top:100px">
							<ul class="category">
								<li><img src="/Users/jimharrison/Desktop/4210/picture/bg2.jpg" width="140" height="70"></li>
								<li><a class="category" href="/Users/jimharrison/Desktop/4210/4210/4210.html"><hr>HOME<hr></a></li>
								<li><a class="category" href="/Users/jimharrison/Desktop/4210/4210/4210.html"><hr>CATEGORY<hr></a></li>
								<li><a class="category"><hr><b><b><strong>PRODUCT 1</strong></b></b><hr></a></li>
							  </ul>
						</div>
                    </li>
                </ul>
		</body>
</html>
