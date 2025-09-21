<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.mainpart-section {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  min-height: 70vh;
  background: rgb(37,37,37);
  padding: 0;
}
.mainpart-left {
  flex: 1;
  max-width: 480px;
}
.mainpart-title1 {
  color: #fff;
  font-weight: 400;
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
  font-family: 'Open Sans',sans-serif;
}
.mainpart-title2 {
  color: #fff;
  font-weight: 400;
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  font-family: 'Open Sans',sans-serif;
}
.mainpart-title2 .highlight {
    font-weight: 600;
}
.pixfort-btn {
  background: #444;
  color: #fff;
  font-weight: 700;
  border: none;
  border-radius: 4px;
  padding: 0.4rem 1.2rem;
  margin-bottom: 1.2rem;
  font-size: 1rem;
}
.mainpart-desc {
  color: #aaa;
  font-size: 1.08rem;
  margin-bottom: 2rem;
  font-family: 'Open Sans',sans-serif;
}
.access-btn {
  display: inline-block;
  background: rgb(246,149,28);
  color: #fff;
  font-weight: bold;
  font-family: 'Open Sans',sans-serif !important;
  border: none;
  border-radius: 30px;
  padding: 0.8rem 2.2rem;
  font-size: 1rem;
  text-decoration: none;
  &:hover{
    background: rgb(207, 127, 28);
}
}
.mainpart-right {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.mainpart-img {
  max-width: 370px;
  height: auto;
  border-radius: 16px;
}
</style>
</head>
<body>
    <section class="mainpart-section">
  <div class="mainpart-left">
    <h1 class="mainpart-title1">No Magic!</h1>
    <h1 class="mainpart-title2">it's <span class="highlight">Bootstrap!</span></h1>
    <button class="pixfort-btn">PIXFORT PAGE BUILDER</button>
    <p class="mainpart-desc">From logo design to website designers and developers are ready to complete jobs to save your money and time.</p>
    <a href="#" class="access-btn">GET YOUR ACCESS</a>
  </div>
  <div class="mainpart-right">
    <img src="/megapack.png" alt="Megapack Hero" class="mainpart-img">
  </div>
</section>
@include('info')
</body>
</html>