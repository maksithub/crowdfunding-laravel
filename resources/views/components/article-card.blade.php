<div class="max-w-sm rounded overflow-hidden hover:shadow-lg">
  <a href="{{$link}}"><img class="w-full" src="{{$thumbnail}}" alt="Sunset in the mountains"></a>
  <div class="px-4 py-4">
    <div class="font-bold text-sm mb-2">
      <a href="{{$link}}">{{$title}}</a>
    </div>
    <div class="flex items-center">
      <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white mr-2" src="{{$avatar}}" alt="">
      <span class="text-gray-700 text-xs">{{$username}}</span>
    </div>
  </div>
  <div class="px-4 pb-2">
    {{$tags}}
  </div>

  <div class="relative px-4 text-xs overflow-hidden">
    <div class="overflow-hidden h-4 mb-4 text-xs rounded-xl bg-gray-200 relative">
        <!-- <div style="width: {{$secondprogress}}%" class="shadow-none text-center whitespace-nowrap text-white justify-center bg-yellow-500 rounded-xl h-full absolute"></div> -->
        <div style="width: {{$progress}}%" class="shadow-none text-center whitespace-nowrap text-white justify-center bg-green-500 rounded-xl h-full absolute max-w-full"></div>
    </div>
    <div class="absolute text-white text-xs leading-4 left-7 -top-0 font-bold">{{$progress}}%</div>
  </div>

  <div class="flex px-4 pb-3 text-xs">
    <div class="mr-2">
      <p>現在</p>
      <p class="font-bold">{{$money}}円</p>
    </div>
    <div class="mr-2">
      <p>支援者</p>
      <p class="font-bold">{{$participants}}人</p>
    </div>
    <div class="mr-2">
      <p>残り</p>
      <p class="font-bold">{{$remaining_dates}}日</p>
    </div>
  </div>
</div>