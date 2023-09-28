<div>
    <div class='flex gap-4 p-4  items-center justify-between'>
        @foreach ($items as $model => $data)
            <div class='w-full bg-ugreen-100 rounded-lg shadow-lg p-4 flex flex-col'>
                <p class='uppercase font-bold text-ugreen-700 border-b border-ugreen-400 mb-4'>{{ $data['label'] }}</p>
                <div class='flex justify-between items-center mt-4'>
                    @svg($data['icon'], 'h-12 w-12 text-ugreen-400 dark:text-gray-100')
                    <span class='text-[2rem] font-bold '>
                        {{ $model::count() }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
