<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตะกร้าสินค้า - Bunnii Box</title>
<style>
body{font-family:Segoe UI;margin:0;background:#f5f5f5;}
.container{max-width:1000px;margin:auto;padding:50px;}
h1{text-align:center;}
.cart-item{
    display:flex;
    align-items:center;
    justify-content:space-between;
    background:#fff;
    padding:20px;
    margin-bottom:20px;
}
.cart-item img{
    width:100px;
}
.total{
    text-align:right;
    font-size:20px;
    margin-top:20px;
}
button{
    padding:8px 15px;
    border:none;
    background:#000;
    color:#fff;
    cursor:pointer;
}
button:hover{
    background:#444;
}
.empty{
    text-align:center;
    font-size:18px;
    color:#888;
}
</style>
</head>
<body>

<div class="container">
    <h1>ตะกร้าสินค้า</h1>
    <div id="cart-list"></div>
    <div class="total" id="total-price"></div>
</div>

<script>
let cart = JSON.parse(localStorage.getItem("cart")) || [];
let cartList = document.getElementById("cart-list");
let total = 0;

if(cart.length === 0){
    cartList.innerHTML = "<div class='empty'>ยังไม่มีสินค้าในตะกร้า</div>";
}else{
    cart.forEach((item,index)=>{
        total += parseInt(item.price.replace(/[^\d]/g,""));

        cartList.innerHTML += `
            <div class="cart-item">
                <img src="${item.img}">
                <div>${item.name}</div>
                <div>${item.price}</div>
                <button onclick="removeItem(${index})">ลบ</button>
            </div>
        `;
    });

    document.getElementById("total-price").innerHTML =
        "รวมทั้งหมด: ฿" + total.toLocaleString();
}

function removeItem(index){
    cart.splice(index,1);
    localStorage.setItem("cart", JSON.stringify(cart));
    location.reload();
}
</script>

</body>
</html>
