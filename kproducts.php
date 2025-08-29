<?php include 'kconfig.php'; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการสินค้า</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100 text-gray-800">
<?php include 'kheader.php'; ?>

<div class="ml-64 p-6">
  <h2 class="text-purple-600 text-2xl mb-4 font-bold">จัดการสินค้า</h2>

  <!-- ฟอร์มเพิ่มสินค้า -->
  <form action="kadd_product.php" method="POST" class="bg-purple-200 p-4 rounded mb-6 shadow">
    <input type="text" name="name" placeholder="ชื่อสินค้า" required 
           class="p-2 rounded bg-white text-gray-800 w-full mb-2 border border-purple-300">
    <textarea name="description" placeholder="รายละเอียด" required 
              class="p-2 rounded bg-white text-gray-800 w-full mb-2 border border-purple-300"></textarea>
    <input type="number" name="price" placeholder="ราคา" required 
           class="p-2 rounded bg-white text-gray-800 w-full mb-2 border border-purple-300">
    <button type="submit" class="bg-yellow-300 hover:bg-yellow-400 text-gray-900 px-4 py-2 rounded">
      + เพิ่มสินค้า
    </button>
  </form>

  <!-- ตารางสินค้า -->
  <table class="w-full bg-yellow-100 rounded shadow">
    <tr class="bg-yellow-200">
      <th class="p-3">ID</th>
      <th class="p-3">ชื่อ</th>
      <th class="p-3">ราคา</th>
      <th class="p-3">สถานะ</th>
      <th class="p-3">การจัดการ</th>
    </tr>
    <?php
      $res = $conn->query("SELECT * FROM products");
      while($row = $res->fetch_assoc()):
    ?>
    <tr class="border-b border-yellow-200 hover:bg-yellow-50">
      <td class="p-3"><?= $row['id']; ?></td>
      <td class="p-3"><?= htmlspecialchars($row['name']); ?></td>
      <td class="p-3 text-purple-500">฿<?= $row['price']; ?></td>
      <td class="p-3"><?= htmlspecialchars($row['status']); ?></td>
      <td class="p-3">
        <a href="kdelete_product.php?id=<?= $row['id']; ?>" 
           onclick="return confirm('ลบสินค้า?')" 
           class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded">
          ลบ
        </a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>
