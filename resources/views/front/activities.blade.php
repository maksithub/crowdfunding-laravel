<x-app-layout>
  <div class="max-w-7xl mx-auto px-4 lg:px-8 pb-6">
      <div class="text-center pt-16">
        <h1 class="text-3xl font-bold">{{$project->title}}</h1>
        <div class="flex justify-center items-center text-xs text-gray-600 mt-5">
          <div><img class="inline-block h-6 w-6 rounded-full ring-2 ring-white mr-2" src="{{$project->user->profile_image}}" alt=""></div>
          <div class="mr-2 font-bold"><a href="#">{{$project->user->name}}</a></div>
          <div class="mr-2">#愛知県</div>
          <div class="mr-2">#社会にいいこと</div>
          <div class="mr-2">#医療・福祉</div>
          <div class="mr-2">#熊本地震</div>
          <div class="mr-2">#東日本大震災</div>
          <div class="mr-2">#被災地</div>
          <div class="mr-2">#介護</div>
        </div>
      </div>

      <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="lg:col-start-1 lg:col-span-2">

          @include('front.project.project-nav', ['active'=>'activity'])

          <!-- Comments-->
          <section class="bg-white p-4 sm:overflow-hidden">
              <div class="space-y-12">
              @foreach($project->activities as $activity)
              <a href="#" class="block mt-2">
                <div class="flex flex-col rounded shadow hover:shadow-lg overflow-hidden">
                  <div class="flex-shrink-0">
                    <img class="h-60 w-full object-cover" src="{{$activity->thumbnail}}" alt="">
                  </div>
                  <div class="flex-1 px-6 py-4 text-gray-500 text-sm">
                    {{date('Y年m月d日 H:i', strtotime($activity->created_at))}}
                  </div>
                  <div class="flex-1 bg-white px-6 pb-3 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-xl font-semibold text-gray-900">
                          {{$activity->title}}
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                          {{ \Illuminate\Support\Str::limit(htmlspecialchars($activity->description), $limit = 160, $end = '...') }}
                        </p>

                        <p class="text-gray-700 text-right">もっと見る ></p>
                    </div>
                  </div>
                </div>
              </a>
              @endforeach
              </div>
          </section>
        <!--End of Comments-->
        </div>

        <div class="space-y-6 lg:col-start-3 lg:col-span-1">
          @include('front.project.sidebar')
        </div>
      </div>
  </div>
</x-app-layout>