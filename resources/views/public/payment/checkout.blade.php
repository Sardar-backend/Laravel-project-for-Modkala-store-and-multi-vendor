@extends('base')
@section('content')
  <main class="max-w-[1500px] mx-auto px-3 md:px-5 mt-44 md:mt-32">
    <!-- top cart -->
    <div class="container mx-auto w-full h-full pt-9">
      <div class="relative pl-3 h-full">
        <div class="flex pt-3 *:border-2 md:*:border-4">
          <div class="border-opacity-90 border-green-500 w-1/4"></div>
          <div class="border-opacity-90 border-green-500 w-1/4"></div>
          <div class="border-opacity-90 border-gray-300 w-1/4"></div>
          <div class="border-opacity-90 border-gray-300 w-1/4"></div>
        </div>
        <!-- text -->
        <div class="absolute -top-10 inline-flex w-full justify-between">
          <!-- not -->
          <div class="">
            <div class="w-8 h-8">
            </div>
          </div>
          <!-- 1 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-500 pr-6 text-xs md:text-base">سبد خرید</h1>
            </div>
          </div>
          <!-- 2 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-700 pr-4 text-xs md:text-base">جزئیات پرداخت</h1>
            </div>
          </div>
          <!-- 3 -->
          <div class="flex items-center">
            <div class="z-20 flex items-center order-1">
              <h1 class="mx-auto md:font-semibold text-zinc-500 pr-1 pl-2 text-xs md:text-base">تکمیل سفارش</h1>
            </div>
          </div>
          <!-- not -->
          <div class="pl-3">
            <div class="w-8 h-8">
            </div>
          </div>
        </div>
        <!-- dots -->
        <div class="absolute top-0 md:-top-1 inline-flex w-full justify-between">
          <!-- not -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-gray-200 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-lg text-zinc-700"></h1>
            </div>
          </div>
          <!-- 1 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-white shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-zinc-700">1</h1>
            </div>
          </div>
          <!-- 2 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-green-400 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-white">2</h1>
            </div>
          </div>
          <!-- 3 -->
          <div class="flex items-center *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-white shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-base md:text-lg text-zinc-700">3</h1>
            </div>
          </div>
          <!-- not -->
          <div class="flex items-center pl-3 *:w-6 *:h-6 md:*:w-8 *:md:h-8">
            <div class="z-20 flex items-center order-1 bg-gray-200 shadow-box-md rounded-full">
              <h1 class="mx-auto font-semibold text-lg text-zinc-700"></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- main -->
    <div class="my-8 lg:my-10 py-5 lg:px-20 md:flex gap-5">
      <div class="md:w-8/12 bg-white shadow-box-md rounded-xl py-5 px-2 sm:px-6">
        <!-- name -->
        <div class="text-zinc-800 text-lg font-semibold">
          جزئیات پرداخت
        </div>
        <!-- inputs -->
        <div class="sm:flex gap-x-5 mt-5">
          <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              نام
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
          <div class="sm:w-1/2 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              نام خانوادگی
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
        </div>
        <div class="sm:flex gap-x-5 mt-7">
          <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              استان
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
              <option value="">-</option>
              <option value="2">خراسان رضوی</option>
              <option value="">خراسان جنوبی</option>
              <option value="">خراسان شمالی</option>
              <option value="">تهران</option>
            </select>
          </div>
          <div class="sm:w-1/2 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              شهر
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <select name="select" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
              <option value="">تهران</option>
              <option value="2">رباط کریم</option>
              <option value="">دماوند</option>
              <option value="">بومهن</option>
              <option value="">رودهن</option>
            </select>
          </div>
        </div>
        <div class="mt-7">
          <div class="flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              خیابان و کوچه
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
          <div class="flex flex-col gap-y-1 mt-5">
            <label class="text-sm text-zinc-700 flex">
              شماره پلاک و واحد
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
        </div>
        <div class="sm:flex gap-x-5 mt-5">
          <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              تلفن
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
          <div class="sm:w-1/2 flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              کد پستی
              <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
            </label>
            <input type="text" name="" class="focus:shadow-primary-outline text-sm leading-5.6 block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-300 focus:outline-none">
          </div>
        </div>
        <div class="mt-5">
          <div class="flex flex-col gap-y-1">
            <label class="text-sm text-zinc-700 flex">
              توضیحات اضافه
            </label>
            <textarea placeholder="نکات مهم درباره تحویل محصول" name="mailTicket" cols="30" rows="7" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all focus:border-red-400 focus:outline-none"></textarea>
          </div>
        </div>
      </div>
      <div class="md:w-4/12 mt-8 md:mt-0">
        <div class="px-2 sm:px-6 py-3 bg-white rounded-xl shadow-box-sm mb-5">
          <div class="flex gap-x-1 items-center text-zinc-700 border-b pb-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d02525" viewBox="0 0 256 256"><path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path></svg>            روز تحویل
          </div>
          <ul class="grid w-full gap-6 grid-cols-2 md:grid-cols-3">
            <li>
              <input type="radio" id="1" name="hosting" value="1" class="hidden peer" required>
              <label for="1" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <div class="text-center">
                  <div class="text-sm mb-1">شنبه</div>
                  <div class="text-xs">7 بهمن</div>
                </div>
              </label>
            </li>
            <li>
              <input type="radio" id="2" name="hosting" value="2" class="hidden peer" required>
              <label for="2" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <div class="text-center">
                  <div class="text-sm mb-1">یکشنبه</div>
                  <div class="text-xs">8 بهمن</div>
                </div>
              </label>
            </li>
            <li>
              <input type="radio" id="3" name="hosting" value="3" class="hidden peer" required>
              <label for="3" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <div class="text-center">
                  <div class="text-sm mb-1">دوشنبه</div>
                  <div class="text-xs">9 بهمن</div>
                </div>
              </label>
            </li>
          </ul>
        </div>
        <div class="px-2 sm:px-6 py-3 bg-white rounded-xl shadow-box-sm mb-5">
          <div class="flex gap-x-1 items-center text-zinc-700 border-b pb-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d02525" viewBox="0 0 256 256"><path d="M240,120v64a8,8,0,0,1-8,8H208a24,24,0,0,0-32-22.63h0A24,24,0,0,0,160,192H96a24,24,0,0,0-48,0H24a8,8,0,0,1-8-8V144H176V120Z" opacity="0.2"></path><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
            نوع ارسال
          </div>
          <ul class="grid w-full gap-3">
            <li>
              <input type="radio" id="4" name="send" value="4" class="hidden peer" required>
              <label for="4" class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-12 border rounded-md p-1" src="./assets/image/post.png" alt="">
                <div class="text-center">
                  <span class="text-sm">پست معمولی :</span>
                  <span class="text-sm">19,000 تومان</span>
                </div>
              </label>
            </li>
            <li>
              <input type="radio" id="5" name="send" value="5" class="hidden peer" required>
              <label for="5" class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <img class="max-w-12 border rounded-md p-1" src="./assets/image/fastpost.jpg" alt="">
                <div class="text-center">
                  <span class="text-sm">پست پیشتاز :</span>
                  <span class="text-sm">32,000 تومان</span>
                </div>
              </label>
            </li>
          </ul>
        </div>
        <div class="px-2 sm:px-6 py-3 bg-white rounded-xl shadow-box-sm mb-5">
          <div class="flex gap-x-1 items-center text-zinc-700 border-b pb-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d02525" viewBox="0 0 256 256"><path d="M232,96v96a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V96Z" opacity="0.2"></path><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
            نحوه پرداخت
          </div>
          <ul class="grid w-full gap-3">
            <li>
              <input type="radio" id="6" name="pey" value="6" class="hidden peer" required>
              <label for="6" class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <svg class="max-w-12" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d02525" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
                <div class="text-center">
                  <span class="text-sm">پرداخت با درگاه بانکی </span>
                </div>
              </label>
            </li>
            <li>
              <input type="radio" id="7" name="pey" value="7" class="hidden peer" required>
              <label for="7" class="flex items-center justify-start gap-x-2 w-full p-2 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">
                <svg class="max-w-12" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#d02525" viewBox="0 0 256 256"><path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path></svg><div class="text-center">
                  <span class="text-sm">پرداخت در محل</span>
                </div>
              </label>
            </li>
          </ul>
        </div>
        <div class="px-2 sm:px-6 py-3 bg-white rounded-xl shadow-box-sm">
          <div class="flex gap-x-1 items-center text-zinc-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#d02525" viewBox="0 0 256 256"><path d="M223.92,208H32.08a8,8,0,0,1-8-8.93l14.25-120a8.06,8.06,0,0,1,8-7.07H209.67a8.06,8.06,0,0,1,8,7.07l14.25,120A8,8,0,0,1,223.92,208Z" opacity="0.2"></path><path d="M239.89,198.12l-14.26-120a16,16,0,0,0-16-14.12H176a48,48,0,0,0-96,0H46.33a16,16,0,0,0-16,14.12l-14.26,120A16,16,0,0,0,20,210.6a16.13,16.13,0,0,0,12,5.4H223.92A16.13,16.13,0,0,0,236,210.6,16,16,0,0,0,239.89,198.12ZM128,32a32,32,0,0,1,32,32H96A32,32,0,0,1,128,32ZM32,200,46.33,80H80v24a8,8,0,0,0,16,0V80h64v24a8,8,0,0,0,16,0V80h33.75l14.17,120Z"></path></svg>            سبد شما
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-5 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              قیمت کالاها (2)
            </div>
            <div class="flex gap-x-1">
              <div>
                1,700,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-600 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              تخفیف
            </div>
            <div class="flex gap-x-1">
              <div>
                400,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <div class="flex gap-x-1 justify-between items-center text-zinc-800 mt-3 bg-gray-100 rounded-lg px-2 py-3 text-sm">
            <div>
              جمع سبد خرید
            </div>
            <div class="flex gap-x-1">
              <div>
                3,400,000
              </div>
              <div>
                تومان
              </div>
            </div>
          </div>
          <button class="mx-auto w-full px-2 py-3 mt-5 text-sm bg-red-500 hover:bg-red-400 transition text-gray-100 rounded-lg">
            تایید و پرداخت
          </button>
        </div>
      </div>
    </div>
  </main>
  <!-- footer -->
  @endsection