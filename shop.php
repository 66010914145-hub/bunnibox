
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bunnii Box</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#fff;
}

/* ===== NAVBAR ===== */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
    border-bottom:1px solid #eee;
}

.brand{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:20px;
    font-weight:500;
}

.brand img{
    width:40px;
}

.icons{
    display:flex;
    gap:25px;
    font-size:20px;
    align-items:center;
}

.icons i{
    cursor:pointer;
    position:relative;
}

.cart-count{
    position:absolute;
    top:-8px;
    right:-10px;
    background:#ff4d4d;
    color:#fff;
    font-size:12px;
    width:18px;
    height:18px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* ===== SLIDER ===== */
.slider-wrapper{
    position:relative;
    max-width:1200px;
    margin:60px auto;
    overflow:hidden;
}

.products{
    display:flex;
    gap:40px;
    overflow-x:auto;
    scroll-behavior:smooth;
    padding:20px;
}

.products::-webkit-scrollbar{
    display:none;
}

.card{
    min-width:260px;
    text-align:center;
    flex-shrink:0;
}

.card img{
    width:100%;
    border-radius:12px;
}

.name{
    margin-top:15px;
    font-size:15px;
}

.price{
    margin:5px 0;
    color:#777;
}

.btn{
    padding:8px 15px;
    border:none;
    background:#111;
    color:#fff;
    cursor:pointer;
    border-radius:20px;
    font-size:13px;
}

/* ===== ARROWS ===== */
.arrow{
    position:absolute;
    top:45%;
    transform:translateY(-50%);
    background:#fff;
    border:none;
    font-size:28px;
    cursor:pointer;
    padding:8px 15px;
    border-radius:50%;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.arrow-left{ left:10px; }
.arrow-right{ right:10px; }

.footer{
    text-align:center;
    padding:30px;
    color:#aaa;
    border-top:1px solid #eee;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="brand">
        <img src="img/logo-rabbit.png">
        Bunnii Box
    </div>

    <div class="icons">
        <i class="fa-solid fa-headphones"></i>
        <i class="fa-regular fa-user"></i>
        <i class="fa-regular fa-heart"></i>
        <i class="fa-solid fa-bag-shopping">
            <span class="cart-count" id="cartCount">0</span>
        </i>
    </div>
</div>

<!-- SLIDER -->
<div class="slider-wrapper">

<button class="arrow arrow-left" onclick="scrollLeft()">❮</button>
<button class="arrow arrow-right" onclick="scrollRight()">❯</button>

<div class="products" id="slider">

<div class="card">
<img src="img/heart-bag.jpg">
<div class="name">Twinkle Heart Bag</div>
<div class="price">฿850</div>
<button class="btn" onclick="addToCart()">Add to Cart</button>
</div>

<div class="card">
<img src="img/photo-frame.jpg">
<div class="name">Twinkle Photo Frame</div>
<div class="price">฿380</div>
<button class="btn" onclick="addToCart()">Add to Cart</button>
</div>

<div class="card">
<img src="img/lucky-doll.jpg">
<div class="name">Lucky Plush Pendant</div>
<div class="price">฿320</div>
<button class="btn" onclick="addToCart()">Add to Cart</button>
</div>

<div class="card">
<img src="img/brown-doll.jpg">
<div class="name">Mini Cookie Doll</div>
<div class="price">฿320</div>
<button class="btn" onclick="addToCart()">Add to Cart</button>
</div>

<div class="card">
<img src="img/stitch-box.webp">
<div class="name">Stitch Adventure</div>
<div class="price">฿550</div>
<button class="btn" onclick="addToCart()">Add to Cart</button>
</div>

</div>
</div>

<div class="footer">
© 2026 Bunnii Box
</div>

<script>
function scrollLeft(){
document.getElementById('slider').scrollBy({
left:-300,
behavior:'smooth'
});
}

function scrollRight(){
document.getElementById('slider').scrollBy({
left:300,
behavior:'smooth'
});
}

let cart = 0;
function addToCart(){
cart++;
document.getElementById("cartCount").innerText = cart;
}
</script>

</body>
</html>
