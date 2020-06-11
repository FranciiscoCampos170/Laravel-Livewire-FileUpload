<div>
    <form action="" method="post" wire:submit.prevent="save">
        <input type="file" id="" wire:model="photo" class="rounded-lg bg-white border border-gray-500 text-blue-500 shadow-lg px-4 py-2 mt-2 placeholder-indigo-300">
        
        <p class="text-red-500 text-xs italic my-4">@error('photo') <span class="error">{{ $message }}</span> @enderror</p>
        
        <button type="submit" class="rounded-lg px-4 py-2 mt-2 bg-blue-900 text-white">Save</button>
    </form>
</div>
