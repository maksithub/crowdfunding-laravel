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

          @include('front.project.project-nav', ['active'=>'comment'])

          <!-- Comments-->
          <section class="bg-white p-4 sm:overflow-hidden">
              <div class="px-4 py-6 sm:px-6">
                <ul class="space-y-8">
                  @foreach($project->comments as $comment)
                  <li>
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{asset('storage/images/smile-icon.png')}}" alt="">
                      </div>
                      <div class="w-full space-y-2">
                        <div class="text-sm flex justify-between">
                          <a href="#" class="font-medium text-gray-900">cd102 xxxx</a>
                          <div>
                            <span class="text-gray-500 font-medium">{{date('y/m/d H:i', strtotime($comment->created_at))}}</span>
                          </div>                          
                        </div>
                        <div class="mt-1 text-sm text-gray-700">
                          <p>{{$comment->description}}</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
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