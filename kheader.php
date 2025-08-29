<?php
// include ส่วน sidebar
?>
<div class="fixed left-0 top-0 h-full w-64 bg-purple-200 border-r border-yellow-300 shadow-xl z-10">
  <div class="p-6 border-b border-yellow-300">
    <h1 class="font-playfair text-2xl font-bold text-yellow-600">🍝 col </h1>
    <p class="text-pink-700 text-sm mt-1">Admin Dashboard</p>
  </div>
  <nav class="mt-6 space-y-1">
    <a href="kindex.php" 
       class="block px-6 py-3 rounded-lg text-yellow-600 bg-yellow-100 hover:bg-yellow-200 transition">
       📊 ภาพรวม
    </a>
    <a href="kproducts.php" 
       class="block px-6 py-3 rounded-lg text-pink-800 hover:bg-purple-200 hover:text-yellow-700 transition">
       🍕 สินค้า
    </a>
    <a href="kusers.php" 
       class="block px-6 py-3 rounded-lg text-pink-800 hover:bg-purple-200 hover:text-yellow-700 transition">
       👥 ผู้ใช้
    </a>
    <a href="korders.php" 
       class="block px-6 py-3 rounded-lg text-pink-800 hover:bg-purple-200 hover:text-yellow-700 transition">
       📋 คำสั่งซื้อ
    </a>
  </nav>
</div>
