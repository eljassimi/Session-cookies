<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-roboto">

    <main class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h2 class="text-6xl font-extrabold text-[#7E55E7] mb-4">Your email is :<?php echo $_SESSION["email"] ?></h2>
        </div>
    </main>

</body>
</html>
