@php
$active_class = "bg-white";
$inactive_class = "bg-gray-200 flex items-center justify-center";
@endphp
<div class="border-b border-gray-200">
  <nav class="-mb-px flex" aria-label="Tabs">
    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
    <a href="{{route('project.show', $project->id)}}" class="border-white border-r w-1/4 py-4 px-1 text-center font-medium text-sm @if($active=='home') {{$active_class}} @else {{$inactive_class}} @endif" aria-current="page">
      ホーム
    </a>
    <a href="{{route('project.activities', $project->id)}}" class="border-white border-r w-1/4 py-4 px-1 text-center font-medium text-sm @if($active=='activity') {{$active_class}} @else {{$inactive_class}} @endif">
      <span>活動報告</span>
      <div class="rounded bg-green-500 text-white ml-2 py-0.5 px-2 inline-block">{{$project->activities->count()}}</div>
    </a>
    <a href="{{route('project.comments', $project->id)}}" class="w-1/4 py-4 px-1 text-center font-medium text-sm @if($active=='comment') {{$active_class}} @else {{$inactive_class}} @endif">
      <span>コメント</span>
      <div class="rounded bg-green-500 text-white ml-2 py-0.5 px-2 inline-block">{{$project->comments->count()}}</div>
    </a>
  </nav>
</div>