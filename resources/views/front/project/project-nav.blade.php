<div class="border-b border-gray-200">
  <nav class="-mb-px flex" aria-label="Tabs">
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    <a href="{{route('project.show', $project->id)}}" class="bg-white border-white border-r w-1/4 py-4 px-1 text-center font-medium text-sm" aria-current="page">
      ホーム
    </a>
    <a href="#" class="border-transparent border-white border-r w-1/4 py-4 px-1 text-center font-medium text-sm bg-gray-200 flex items-center justify-center">
      <span>活動報告</span>
      <div class="rounded bg-green-500 text-white ml-2 py-0.5 px-2 inline-block">5</div>
    </a>
    <a href="#" class="border-transparent border-white border-r w-1/4 py-4 px-1 text-center font-medium text-sm bg-gray-200 flex items-center justify-center">
      <span>コメント</span>
      <div class="rounded bg-green-500 text-white ml-2 py-0.5 px-2 inline-block">450</div>
    </a>
  </nav>
</div>