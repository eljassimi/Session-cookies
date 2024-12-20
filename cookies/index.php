<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>langue Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <div class="bg-[#FFF] p-6 rounded-lg shadow-lg w-96">
    <div class="flex flex-col items-center mb-6">
    </div>


    <form id="langueFrom" class="" action="langue.php" method="POST">
      <select name="langue" id="langue" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
        <option value="francais">Francais</option>
        <option value="anglais">anglais</option>
        <option value="arab">arab</option>
      </select>
      <button type="submit" name="submit" class="w-full bg-[#7E55E7] text-white py-2 rounded-md hover:bg-[#5ce1e6] focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">Submit</button>
    </form>
  </div>
  <script src="script/main.js"></script>
</body>
</html>
