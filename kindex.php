<?php include 'kconfig.php'; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Italian Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100  text-gray-800">
<?php include 'kheader.php'; ?>

<div class="ml-64 p-6">
  <h1 class="text-purple-100  text-3xl font-bold mb-6">📊 ภาพรวม</h1>

  <?php
    $countProducts = $conn->query("SELECT COUNT(*) as c FROM products")->fetch_assoc()['c'];
    $countUsers    = $conn->query("SELECT COUNT(*) as c FROM users")->fetch_assoc()['c'];
    $countOrders   = $conn->query("SELECT COUNT(*) as c FROM orders")->fetch_assoc()['c'];
  ?>

  <div class="grid grid-cols-3 gap-6">
    <div class="bg-purple-100  p-6 rounded shadow">
      <h2 class="text-lg">🍕 สินค้า</h2>
      <p class="text-3xl text-pink-600 font-bold"><?= $countProducts; ?></p>
    </div>
    <div class="bg-purple-100  p-6 rounded shadow">
      <h2 class="text-lg">👥 ผู้ใช้</h2>
      <p class="text-3xl text-pink-600 font-bold"><?= $countUsers; ?></p>
    </div>
    <div class="bg-purple-100  p-6 rounded shadow">
      <h2 class="text-lg">📋 ออเดอร์</h2>
      <p class="text-3xl text-pink-600 font-bold"><?= $countOrders; ?></p>
    </div>
  </div>

  <div class="mt-10">
    <h2 class="text-purple-100 text-xl mb-4">🆕 ออเดอร์ล่าสุด</h2>
    <table class="w-full bg-yellow-100 rounded shadow">
      <tr class="bg-yellow-200">
        <th class="p-3">ลูกค้า</th>
        <th class="p-3">เมนู</th>
        <th class="p-3">รวม</th>
        <th class="p-3">สถานะ</th>
        <th class="p-3">วันที่</th>
      </tr>
      <?php
        $res = $conn->query("SELECT * FROM orders ORDER BY id DESC LIMIT 5");
        while($row = $res->fetch_assoc()):
      ?>
      <tr class="border-b border-yellow-200 hover:bg-yellow-50">
        <td class="p-3"><?= htmlspecialchars($row['customer']); ?></td>
        <td class="p-3"><?= htmlspecialchars($row['menu']); ?></td>
        <td class="p-3 text-pink-500">฿<?= $row['total']; ?></td>
        <td class="p-3">
          <?php if($row['status']=="pending") echo "🕑 รอดำเนินการ"; ?>
          <?php if($row['status']=="cooking") echo "🍳 กำลังทำ"; ?>
          <?php if($row['status']=="done") echo "✅ เสร็จแล้ว"; ?>
        </td>
        <td class="p-3"><?= $row['created_at']; ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </div>
</div>
</body>
</html>
