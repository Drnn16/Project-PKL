<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Menambahkan styling dasar jika diperlukan */
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-5">
      <h2 class="text-2xl font-semibold mb-8">Dashboard</h2>
      <ul>
        <li class="mb-4">
          <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="mb-4">
          <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Tambah Data</span>
          </a>
        </li>
        <li class="mb-4">
          <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <span>Pengaturan</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-50">
      <!-- Header -->
      <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="flex items-center space-x-4">
          <button class="p-2 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 12l9 5-9 5-9-5 9-5z"></path>
            </svg>
          </button>
          <div class="relative">
            <button class="p-2 text-gray-500 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"></path>
              </svg>
            </button>
            <div class="absolute top-0 right-0 bg-white text-gray-800 p-2 shadow-lg rounded-md mt-2 w-48">
              <ul>
                <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Profil</a></li>
                <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Section -->
      <main class="p-6">
        <h2 class="text-xl font-semibold mb-4">Selamat datang di Dashboard</h2>

        <!-- Card Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-medium mb-2">Statistik Pengguna</h3>
            <p class="text-2xl font-semibold">1,245</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-medium mb-2">Data Penjualan</h3>
            <p class="text-2xl font-semibold">$15,478</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-lg font-medium mb-2">Tugas Hari Ini</h3>
            <p class="text-2xl font-semibold">7</p>
          </div>
        </div>

        <!-- Table -->
        <div class="mt-8 overflow-x-auto bg-white rounded-lg shadow-md">
          <table class="min-w-full table-auto">
            <thead>
              <tr class="bg-gray-100">
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">No</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nama</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Tanggal</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-6 py-4 text-sm text-gray-600">1</td>
                <td class="px-6 py-4 text-sm text-gray-600">Andi</td>
                <td class="px-6 py-4 text-sm text-gray-600">01 Nov 2024</td>
                <td class="px-6 py-4 text-sm text-gray-600">Aktif</td>
              </tr>
              <tr>
                <td class="px-6 py-4 text-sm text-gray-600">2</td>
                <td class="px-6 py-4 text-sm text-gray-600">Budi</td>
                <td class="px-6 py-4 text-sm text-gray-600">02 Nov 2024</td>
                <td class="px-6 py-4 text-sm text-gray-600">Non-aktif</td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

</body>
</html>
