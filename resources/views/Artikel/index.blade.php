@extends('layout_master')

@section('title', 'article')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700"
      >
        Tabel Artikel
      </h2>
      <a href="/artikel/tambah">
        <button
          class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 mb-4 text-white transition-colors duration-150 bg-[#4AB7B6] border border-transparent rounded-lg focus:outline-none "
        >
          <span>Tambah Data</span>
        </button>
      </a>
      <!-- With actions -->
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full ">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"
              >
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Penulis</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Judul</th>
                <th class="px-4 py-3">Deskripsi</th>
                <th class="px-4 py-3">Gambar</th>
                <th class="px-4 py-3 text-center">Actions</th>
              </tr>
            </thead>
            <tbody id="tableBody"
              class="bg-white divide-y"
            >
              <tr class="text-gray-700 ">
                <td class="px-4 py-3 ">
                  1
                </td>
                <td class="px-4 py-3 text-sm">
                  JOSO WOBOWO
                </td>
                <td class="px-4 py-3 text-sm">
                  6/10/2020
                </td>
                <td class="px-4 py-3 text-sm">
                  Teknik Efektif untuk Meningkatkan Hasil Pertanian
                </td>
                <td widht="200" class="px-4 py-3 text-sm">
                  Perawatan tanaman merupakan salah satu aspek krusial dalam pertanian yang menentukan keberhasilan dan kualitas hasil panen
                </td>
                <td class="px-4 py-3 text-sm">
                  inigambar.png
                </td>
                <td class="px-10 py-3 ">
                  <div class="flex items-center space-x-4 text-sm">
                    <a href="/artikel/edit">
                      <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-[#FDAA5D] rounded-lg  focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                        ></path>
                      </svg>
                    </button>
                    </a>
                    <a href="">
                      <button
                      class="flex items-center justify-between py-2 text-sm font-medium leading-5 text-red-600 rounded-lg  focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete"
                    >
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </button>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div
          class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9"
        >
          <span class="flex items-center col-span-3">
            Showing 1-10 of 100
          </span>
          <span class="col-span-2"></span>
          <!-- Pagination -->
          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
              <ul class="inline-flex items-center">
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none"
                    aria-label="Previous"
                  >
                    <svg
                      class="w-4 h-4 fill-current"
                      aria-hidden="true"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 text-white transition-colors duration-150 bg-[#4AB7B6] border border-r-0 rounded-md focus:outline-none "
                  >
                    1
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none"
                  >
                    2
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none"
                    aria-label="Next"
                  >
                    <svg
                      class="w-4 h-4 fill-current"
                      aria-hidden="true"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
              </ul>
            </nav>
          </span>
        </div>
      </div>
    </div>
  </main>
@endsection