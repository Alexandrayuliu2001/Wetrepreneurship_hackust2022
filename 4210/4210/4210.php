<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/help-center.css" />
		<link rel="stylesheet" type="text/css" href="/Users/jimharrison/Desktop/4210/4210/css/category.css">
		<title>shopping list</title>

		<style>
</style>
	</head>
	<body onload="addLinkForImage()" style="text-align: center; background-image:url(/Users/jimharrison/Desktop/4210/picture/bg1.jpg)";>
		<script src="/Users/jimharrison/Desktop/4210/4210/javascript/javascript1.js"></script>
		<script>
            
		</script>
		</head>
		<body>
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
								<li><a class="category"><hr><b><b><strong>CATEGORY</strong></b></b><hr></a></li>
						</div>
                    </li>
                </ul>
				<hr>
				<br>
				<br>
		
				<div id="openid-buttons" class="d-flex gs8 gsx ai-center sm:jc-space-between">
					
					<br>
						<button class="flex--item ws-nowrap s-btn s-btn__icon s-btn__google ta-center js-major-provider sm:d-none" data-provider='google' data-oauthserver='https://accounts.google.com/o/oauth2/auth' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Google&quot;,&quot;Question Hero&quot;,null,null]">
							<svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18"><path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18Z" fill="#4285F4"/><path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17Z" fill="#34A853"/><path d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07Z" fill="#FBBC05"/><path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3Z" fill="#EA4335"/></svg>
							Sign up with Google
						</button>
						<button class="flex--item ws-nowrap s-btn s-btn__icon s-btn__github ta-center js-major-provider sm:d-none" data-provider='github' data-oauthserver='https://github.com/login/oauth/authorize' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - GitHub&quot;,&quot;Question Hero&quot;,null,null]">
							<svg aria-hidden="true" class="svg-icon iconGitHub" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 0 0-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 0 1 4 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 0 0 9 1Z" fill="#010101"/></svg>
							Sign up with GitHub
						</button>
						<button class="flex--item ws-nowrap s-btn s-btn__icon s-btn__facebook ta-center js-major-provider sm:d-none" data-provider='facebook' data-oauthserver='https://www.facebook.com/v2.0/dialog/oauth' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Facebook&quot;,&quot;Question Hero&quot;,null,null]">
							<svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18"><path d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5Z" fill="#4167B2"/></svg>
							Sign up with Facebook
						</button>
						<button class="flex--item s-btn s-btn__muted s-btn__icon px8 js-dismiss" title="Dismiss"><svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41 13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41Z"/></svg></button>
						<br>
						<br>
						<br>
						<br>
					</div>
		</body>
</html>





