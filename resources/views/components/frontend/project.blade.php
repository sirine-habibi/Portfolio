@props(['project'])
<a x-data="{ skill: {{ json_encode($project->skill) }} }" href="{{ $project->project_url }}" target="_blank"
    :class="selectedTab == 'all' || selectedTab == skill.id ? 'block' : 'hidden'"
    class=" group w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <img class="object-cover object-center w-full h-56 ease-in duration-100 group-hover:scale-105"
        src="{{ asset('storage/' . $project->image) }}" alt="avatar">

    <div class="flex items-center px-6 py-3 bg-gray-900">


        <h1
            class="mx-3 text-lg font-semibold text-white group-hover:text-light-tail-500 dark:group-hover:text-dark-navy-100">
            {{ $project->skill->name }}</h1>
    </div>

    <div class="px-6 py-4">
        <h1
            class="text-xl font-semibold text-gray-800 dark:text-white  group-hover:text-light-tail-500 dark:group-hover:text-dark-navy-100">
            {{ $project->name }}</h1>



        <div
            class="flex items-center mt-4 text-gray-700 dark:text-gray-200 group-hover:text-black dark:group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>

            <svg aria-label="suitcase icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M14 11H10V13H14V11Z" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7 5V4C7 2.89545 7.89539 2 9 2H15C16.1046 2 17 2.89545 17 4V5H20C21.6569 5 23 6.34314 23 8V18C23 19.6569 21.6569 21 20 21H4C2.34314 21 1 19.6569 1 18V8C1 6.34314 2.34314 5 4 5H7ZM9 4H15V5H9V4ZM4 7C3.44775 7 3 7.44769 3 8V14H21V8C21 7.44769 20.5522 7 20 7H4ZM3 18V16H21V18C21 18.5523 20.5522 19 20 19H4C3.44775 19 3 18.5523 3 18Z" />
            </svg>

            <h1 class="px-2 text-sm group-hover:text-black dark:group-hover:text-white">{{ $project->project_url }}</h1>
        </div>




    </div>

</a>
