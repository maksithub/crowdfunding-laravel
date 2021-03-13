<x-app-layout>
    <div class="hero h-96 bg-gradient-to-r from-yellow-100 via-green-400 to-yellow-100 relative">
        <div class="w-1/2 mx-auto sm:px-6 lg:px-8 absolute top-20 left-1/2" style="transform:translateX(-50%);">
            <div class="text-4xl mb-8 w-1/2 mx-auto text-white">
                <h2>いまより一歩、</h2> <br>
                <h2>好きなほうの未来へ。</h2>
            </div>

            <div class="flex justify-between">
                <a href="" class="bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded flex-auto text-center max-w-sm">プロジェクトをはじめる</a>
                <a href="" class="bg-gray-100 hover:bg-gray-200 py-3 px-4 rounded flex-auto text-center max-w-sm">プロジェクトをさがす</a>
            </div>

        </div>

    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <section class="mb-10">
                    <div class="flex justify-between mb-10">
                        <h2 class="font-bold text-lg">注目されているタグ</h2>
                        <a href="#" class="flex items-center text-gray-500">
                            もっと見る
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20px" height="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div>
                    @php
                        $tags_arr = ['新型コロナウイルス', '猫', '犬', '動物', '医療・福祉', '子ども・教育', 'ガジェット', '学生のチャレンジ', 'まちづくり', 'カフェ', '鉄道', '農業', 'カフェ', '地域文化', '東京都', '北海道', 'アジア'];
                    @endphp
                    <ul class="flex flex-wrap">
                    @foreach($tags_arr as $tag)
                    <li class="mr-4 mb-4">
                        <a href="" class="p-2 border border-gray-200 rounded shadow hover:shadow-md inline-block"># {{$tag}}</a>
                    </li>
                    @endforeach
                    </ul>
                    </div>
                </section>

                <section class="mb-20">
                    <div class="flex justify-between mb-10">
                        <h2 class="font-bold text-lg">注目のプロジェクト</h2>
                        <a href="#" class="flex items-center text-gray-500">
                            もっと見る
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20px" height="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-4 gap-4">
                        @foreach($projects as $project)
                        <x-article-card>
                            <x-slot name="thumbnail">{{$project->thumbnail}}</x-slot>
                            <x-slot name="link">{{route('project.show', $project->id)}}</x-slot>
                            <x-slot name="title">{{$project->title}}</x-slot>
                            <x-slot name="avatar">https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80</x-slot>
                            <x-slot name="username">{{$project->user->name}}</x-slot>
                            <x-slot name="tags">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#子ども・教育</span>
                            </x-slot>
                            <!-- <x-slot name="secondprogress">65</x-slot> -->
                            <x-slot name="progress">{{$project->percent}}</x-slot>
                            <x-slot name="money">{{number_format($project->money->current)}}</x-slot>
                            <x-slot name="participants">{{rand(10,500)}}</x-slot>
                            <x-slot name="remaining_dates">{{$project->remaining}}</x-slot>
                        </x-article-card>
                        @endforeach
                    </div>
                </section>

                <section class="mb-20">
                    <div class="flex justify-between mb-10">
                        <h2 class="font-bold text-lg">支援金額の多いプロジェクト</h2>
                        <a href="#" class="flex items-center text-gray-500">
                            もっと見る
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20px" height="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-4 gap-4">
                        @foreach($projects as $project)
                        <x-article-card>
                            <x-slot name="thumbnail">{{$project->thumbnail}}</x-slot>
                            <x-slot name="link">{{route('project.show', $project->id)}}</x-slot>
                            <x-slot name="title">{{$project->title}}</x-slot>
                            <x-slot name="avatar">https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80</x-slot>
                            <x-slot name="username">{{$project->user->name}}</x-slot>
                            <x-slot name="tags">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#子ども・教育</span>
                            </x-slot>
                            <!-- <x-slot name="secondprogress">65</x-slot> -->
                            <x-slot name="progress">{{$project->percent}}</x-slot>
                            <x-slot name="money">{{number_format($project->money->current)}}</x-slot>
                            <x-slot name="participants">{{rand(10,500)}}</x-slot>
                            <x-slot name="remaining_dates">{{$project->remaining}}</x-slot>
                        </x-article-card>
                        @endforeach
                    </div>
                </section>

                <section class="mb-20">
                    <div class="flex justify-between mb-10">
                        <h2 class="font-bold text-lg">新着のプロジェクト</h2>
                        <a href="#" class="flex items-center text-gray-500">
                            もっと見る
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20px" height="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-4 gap-4">
                        @foreach($projects as $project)
                        <x-article-card>
                            <x-slot name="thumbnail">{{$project->thumbnail}}</x-slot>
                            <x-slot name="link">{{route('project.show', $project->id)}}</x-slot>
                            <x-slot name="title">{{$project->title}}</x-slot>
                            <x-slot name="avatar">https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80</x-slot>
                            <x-slot name="username">{{$project->user->name}}</x-slot>
                            <x-slot name="tags">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#子ども・教育</span>
                            </x-slot>
                            <!-- <x-slot name="secondprogress">65</x-slot> -->
                            <x-slot name="progress">{{$project->percent}}</x-slot>
                            <x-slot name="money">{{number_format($project->money->current)}}</x-slot>
                            <x-slot name="participants">{{rand(10,500)}}</x-slot>
                            <x-slot name="remaining_dates">{{$project->remaining}}</x-slot>
                        </x-article-card>
                        @endforeach
                    </div>
                </section>
                
                <!-- 現在募集中のプロジェクト -->
                <section>
                    <div class="flex justify-between mb-10">
                        <h2 class="font-bold text-lg">現在募集中のプロジェクト</h2>
                        <a href="#" class="flex items-center text-gray-500">
                            もっと見る
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20px" height="20px">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-4 gap-4">
                        @foreach($projects as $project)
                        <x-article-card>
                            <x-slot name="thumbnail">{{$project->thumbnail}}</x-slot>
                            <x-slot name="link">{{route('project.show', $project->id)}}</x-slot>
                            <x-slot name="title">{{$project->title}}</x-slot>
                            <x-slot name="avatar">https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80</x-slot>
                            <x-slot name="username">{{$project->user->name}}</x-slot>
                            <x-slot name="tags">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">#子ども・教育</span>
                            </x-slot>
                            <!-- <x-slot name="secondprogress">65</x-slot> -->
                            <x-slot name="progress">{{$project->percent}}</x-slot>
                            <x-slot name="money">{{number_format($project->money->current)}}</x-slot>
                            <x-slot name="participants">{{rand(10,500)}}</x-slot>
                            <x-slot name="remaining_dates">{{$project->remaining}}</x-slot>
                        </x-article-card>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>