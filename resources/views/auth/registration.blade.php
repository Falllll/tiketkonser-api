@extends('layout.app')

@section('title', 'Home')

@section('app')

    <!-- Top Nav -->
    <div class="w-full bg-purple-900 fixed shadow z-1">
      <div class="container mx-auto">
        <div class="w-full flex justify-between items-center py-4 px-8">
          <!-- Brand -->
          <div class="text-center text-white font-bold">Politeknik Bangkir</div>
          <!-- Navigation -->
          <div class="items-center hidden sm:flex">
            <a href="#" class="bg-purple-500 hover:bg-gray-900 rounded-full text-white no-underline mx-2 px-4 py-2">Back</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="w-full bg-gray-500 bg-gradient-to-br from-purple-800 to-indigo-900 flex flex-wrap items-center justify-center" style="padding-top: 4rem;">
      <div class="container mx-auto py-8">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
              <div class="py-4 px-8 text-gray-800 text-xl border-b border-grey-lighter">Daftar akun baru</div>
              <div class="py-4 px-8">
                    <div class="mb-4">
                          <label class="block text-purple-700 text-sm font-bold mb-2" for="first_name">Nama lengkap</label>
                          <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700" id="first_name" type="text" placeholder="Nama lengkap">
                    </div>
                  <div class="mb-4">
                      <label class="block text-purple-700 text-sm font-bold mb-2" for="email">Email Address</label>
                      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700" id="email" type="email" placeholder="Email address">
                  </div>
                  <div class="mb-4">
                      <label class="block text-purple-700 text-sm font-bold mb-2" for="password">Password</label>
                      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700" id="password" type="password" placeholder="Password">
                      <p class="text-gray-900 text-xs mt-1">At least 6 characters</p>
                  </div>
                  <div class="flex items-center justify-between mt-8">
                      <button class="bg-purple-500 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded-full" type="submit">
                          Sign Up
                      </button>
                  </div>
              </div>
          </div>
          <p class="text-center my-4">
              <a href="#" class="text-white text-sm no-underline hover:text-gray-300">I already have an account</a>
          </p>
      </div>
    </div>
    <!-- Footer -->
    <footer class="w-full bg-grey-lighter py-8">
      <div class="container mx-auto text-center px-8">
          <p class="text-grey-dark mb-2 text-sm">Copyright <span class="font-bold">2021</span></p>
      </div>
    </footer>