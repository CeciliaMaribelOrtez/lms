@props(['title', 'description'])
<header>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{$title}}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{$description}}
    </p>
</header>
