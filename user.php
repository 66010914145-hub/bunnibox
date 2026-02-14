<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>POP NOW</title>

<style>
body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background:#f6f6f6;
}

/* Header */
.header{
    background:white;
    padding:20px 0;
    text-align:center;
    border-bottom:1px solid #eee;
}

.header h1{
    margin:0;
    font-size:42px;
    font-weight:bold;
    letter-spacing:3px;
}

.header p{
    margin-top:8px;
    color:#555;
    cursor:pointer;
}

/* Product Section */
.product-section{
    max-width:1200px;
    margin:60px auto;
    display:flex;
    justify-content:space-between;
    gap:40px;
}

/* Card */
.product-card{
    background:white;
    width:100%;
    max-width:350px;
    text-align:center;
    padding:30px 20px;
    border-radius:8px;
    transition:0.3s;
}

.product-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.product-card img{
    width:200px;
    height:auto;
    margin-bottom:20px;
}

.product-title{
    font-size:18px;
    margin-bottom:15px;
}

.price{
    font-size:20px;
    font-weight:bold;
    margin-bottom:20px;
}

.btn{
    padding:12px 25px;
    border:1px solid #333;
    background:white;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#333;
    color:white;
}
</style>
</head>

<body>

<div class="header">
    <h1>POP NOW</h1>
    <p>สำรวจชุดเพิ่มเติม ></p>
</div>

<div class="product-section">

    <!-- Product 1 -->
    <div class="product-card">
        <img src="img/stitch.jpg" alt="Stitch">
        <div class="product-title">
            Stitch Adventure Series Vinyl Plush Pendant
        </div>
        <div class="price">฿550.00 / การเลือก</div>
        <button class="btn">เปิดกล่องเดี๋ยวนี้</button>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <img src="img/zsiga.jpg" alt="Zsiga">
        <div class="product-title">
            Zsiga Under the Sun Series Figures
        </div>
        <div class="price">฿380.00 / การเลือก</div>
        <button class="btn">เปิดกล่องเดี๋ยวนี้</button>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
        <img src="img/spyfamily.jpg" alt="Spy Family">
        <div class="product-title">
            SPY x FAMILY Daily Life Series Figures
        </div>
        <div class="price">฿380.00 / การเลือก</div>
        <button class="btn">เปิดกล่องเดี๋ยวนี้</button>
    </div>

</div>

</body>
</html>
