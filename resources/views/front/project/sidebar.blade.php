<section class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
  <div class="font-bold">支援総額</div>
  <div class="text-right font-bold my-3"><span class="text-3xl">{{number_format($project->money->current)}}</span> 円</div>
  <x-progress-bar>
    <x-slot name="progress">{{$project->percent}}</x-slot>
  </x-progress-bar>
  <div class="flex text-sm text-gray-500 justify-between mb-5">
    <div>{{date('y 年 m 月 d', strtotime($project->created_at->addDays($project->duration)))}} まで</div>
    <div>目標 <span>{{number_format($project->money->target)}}</span> 円</div>
  </div>

  <div class="flex justify-between border-t border-gray-400 py-3 items-center">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
      <span class="ml-1">支援人数</span>
    </div>
    <div><span class="text-2xl">957</span> 人</div>
  </div>
  <div class="flex justify-between border-t border-gray-400 py-3 items-center">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="ml-1">残り時間</span>
    </div>
    <div><span class="text-2xl">{{$project->remaining}}</span> 日</div>
  </div>

  <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded w-full mt-4 font-bold text-center block">このプロジェクトを支援する</a>
</section>


<!-- Rewards Section -->
<section class="bg-white shadow sm:rounded-lg hover:shadow-lg">
  <a href="#" class="px-4 py-5 sm:px-6 block">
    <div class="border-b flex items-center pb-2 mb-4 font-bold">
      <span class="text-xl">3,000</span>
      <span class="ml-1">円</span>
    </div>

    <div class="text-base font-bold mb-4">A【16年間走り続けたドクターカーを買い替えさせてください！！】</div>

    <img src="https://readyfor.jp/s3/readyfor-img/project_images/54399/large/bcb94cfdac0b73de27eb7f6ad7f40fc1ac46d866.png?1615205653" alt="" class="w-full mb-4">

    <div class="text-sm text-gray-500 mb-4">
    - 感謝のメールをお送りします。
    </div>

    <div class="flex text-sm mb-4">
      <div class="mr-4">
        <p class="text-gray-500">支援者</p>
        <p class="font-bold">62人</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">在庫数</p>
        <p class="font-bold">制限なし</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">発送予定</p>
        <p class="font-bold">2021年5月</p>
      </div>
    </div>

    <div class="rounded bg-gray-200 font-bold w-full text-sm py-3 text-center">このリターンを購入する</div>
  </a>
</section>
<section class="bg-white shadow sm:rounded-lg hover:shadow-lg">
  <a href="#" class="px-4 py-5 sm:px-6 block">
    <div class="border-b flex items-center pb-2 mb-4 font-bold">
      <span class="text-xl">5,000</span>
      <span class="ml-1">円</span>
    </div>

    <div class="text-base font-bold mb-4">B【16年間走り続けたドクターカーを買い替えさせてください！！】</div>

    <img src="https://readyfor.jp/s3/readyfor-img/project_images/54399/large/bcb94cfdac0b73de27eb7f6ad7f40fc1ac46d866.png?1615205653" alt="" class="w-full mb-4">

    <div class="text-sm text-gray-500 mb-4">
    - 感謝のメールをお送りします。
    </div>

    <div class="flex text-sm mb-4">
      <div class="mr-4">
        <p class="text-gray-500">支援者</p>
        <p class="font-bold">62人</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">在庫数</p>
        <p class="font-bold">制限なし</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">発送予定</p>
        <p class="font-bold">2021年5月</p>
      </div>
    </div>

    <div class="rounded bg-gray-200 font-bold w-full text-sm py-3 text-center">このリターンを購入する</div>
  </a>
</section>
<section class="bg-white shadow sm:rounded-lg hover:shadow-lg">
  <a href="#" class="px-4 py-5 sm:px-6 block">
    <div class="border-b flex items-center pb-2 mb-4 font-bold">
      <span class="text-xl">10,000</span>
      <span class="ml-1">円</span>
    </div>

    <div class="text-base font-bold mb-4">C【16年間走り続けたドクターカーを買い替えさせてください！！】</div>

    <img src="https://readyfor.jp/s3/readyfor-img/project_images/54399/large/bcb94cfdac0b73de27eb7f6ad7f40fc1ac46d866.png?1615205653" alt="" class="w-full mb-4">

    <div class="text-sm text-gray-500 mb-4">
    - 感謝のメールをお送りします。
    </div>

    <div class="flex text-sm mb-4">
      <div class="mr-4">
        <p class="text-gray-500">支援者</p>
        <p class="font-bold">62人</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">在庫数</p>
        <p class="font-bold">制限なし</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">発送予定</p>
        <p class="font-bold">2021年5月</p>
      </div>
    </div>

    <div class="rounded bg-gray-200 font-bold w-full text-sm py-3 text-center">このリターンを購入する</div>
  </a>
</section>
<section class="bg-white shadow sm:rounded-lg hover:shadow-lg">
  <a href="#" class="px-4 py-5 sm:px-6 block">
    <div class="border-b flex items-center pb-2 mb-4 font-bold">
      <span class="text-xl">30,000</span>
      <span class="ml-1">円</span>
    </div>

    <div class="text-base font-bold mb-4">D【16年間走り続けたドクターカーを買い替えさせてください！！】</div>

    <img src="https://readyfor.jp/s3/readyfor-img/project_images/54399/large/bcb94cfdac0b73de27eb7f6ad7f40fc1ac46d866.png?1615205653" alt="" class="w-full mb-4">

    <div class="text-sm text-gray-500 mb-4">
    - 感謝のメールをお送りします。
    </div>

    <div class="flex text-sm mb-4">
      <div class="mr-4">
        <p class="text-gray-500">支援者</p>
        <p class="font-bold">62人</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">在庫数</p>
        <p class="font-bold">制限なし</p>
      </div>
      <div class="mr-4">
        <p class="text-gray-500">発送予定</p>
        <p class="font-bold">2021年5月</p>
      </div>
    </div>

    <div class="rounded bg-gray-200 font-bold w-full text-sm py-3 text-center">このリターンを購入する</div>
  </a>
</section>