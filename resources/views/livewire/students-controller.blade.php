<div>
    <form action="" method="post" wire:submit.prevent="save">
        <input type="file" id="" wire:model="photo">
        <br>
        <span>@error('photo') <span class="error">{{ $message }}</span> @enderror<span>
        <br>
        <button type="submit">Save Student</button>
    </form>
</div>
