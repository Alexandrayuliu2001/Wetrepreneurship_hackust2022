function shoppinglist(){
    //$db = new PDO('sqlite:/var/www/cart.db');
				//inserted
                var aData = [{
                    //"window.location.assign":"www.google.com",
                    "navigate": "/4210/4210/products/4210/products/1.html",
                    "imgUrl": "/4210/picture/1.png",
                    "proName": " Faded ",
                    "proPrice": "2.4",
                    "proComm": "1"
                },
                {                        
                    "navigate": "/4210/4210/products/4210\ products\ 2.html",
                    "imgUrl": "/4210/picture/2.png",
                    "proName": " All Falls Falls Falls Down ",
                    "proPrice": "1.9",
                    "proComm": "9.7"
                },
                {
                    "navigate": "/4210/4210/products/4210\ products\ 3.html",
                    "imgUrl": "/4210/picture/3.png",
                    "proName": " Alone ",
                    "proPrice": "3",
                    "proComm": "1.3"
                },

                {					
                    "navigate": "/4210/4210/products/4210\ products\ 4.html",
                    "imgUrl": "/4210/picture/4.png",
                    "proName": " On My Way ",
                    "proPrice": "1.5",
                    "proComm": "1.1"
                },
                {   
                    "navigate": "/4210/4210/products/4210\ products\ 5.html",
                    "imgUrl": "/4210/picture/5.png",
                    "proName": " Sing Me To Sleep ",
                    "proPrice": "3.2",
                    "proComm": "0.3"
                },
                {
                    "navigate": "/4210/4210/products/4210\ products\ 6.html",
                    "imgUrl": "/4210/picture/6.png",
                    "proName": " The Spectre  ",
                    "proPrice": "4.1",
                    "proComm": "3.3"
                },
                {
                    "navigate": "/Users/jimharrison/Desktop/4210/4210/products/4210\ products\ 7.html",
                    "imgUrl": "/Users/jimharrison/Desktop/4210/picture/7.png",
                    "proName": " Darkside (feat. Au/Ra) ",
                    "proPrice": "1.9",
                    "proComm": "1.2"
                },
                {
                    "navigate": "/Users/jimharrison/Desktop/4210/4210/products/4210\ products\ 8.html",
                    "imgUrl": "/Users/jimharrison/Desktop/4210/picture/8.png",
                    "proName": "  Lily ",
                    "proPrice": "4.5",
                    "proComm": "0.6"
                },
                {
                    "navigate": "/Users/jimharrison/Desktop/4210/4210/products/4210\ products\ 9.html",
                    "imgUrl": "/Users/jimharrison/Desktop/4210/picture/9.png",
                    "proName": "  Diamond Heart  ",
                    "proPrice": "2.7",
                    "proComm": "0.3"
                },
                {
                    "navigate": "/Users/jimharrison/Desktop/4210/4210/products/4210\ products\ 10.html",
                    "imgUrl": "/Users/jimharrison/Desktop/4210/picture/10.png",
                    "proName": " Different World ",
                    "proPrice": "1.9",
                    "proComm": "7.2"
                }
            ];
				for (var i = 0; i < aData.length; i++) {
                    
					var oLi = document.createElement("li");
					var data = aData[i];

					oLi.innerHTML += '<div class="pro_img"><a href ="' + data["navigate"] + '"><img src="' + data["imgUrl"] + '" width="150" height="150"></a></div>';
					oLi.innerHTML += '<h3 id="h3" class="pro_name"><a rel="nofollow" href="#">' + data["proName"] + '</a></h3>';
					oLi.innerHTML += '<p class="pro_price">' + data["proPrice"] + '$</p>';
					oLi.innerHTML += '<p class="pro_rank">' + data["proComm"] + ' million buyers</p>';
					oLi.innerHTML += '<div class="add_btn">Add to Shopping Cart</div>';
					oUl.appendChild(oLi);

				}
}
shoppinglist();