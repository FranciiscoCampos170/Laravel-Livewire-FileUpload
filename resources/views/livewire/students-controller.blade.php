<div>
    <form action="" method="post" wire:submit.prevent="save">
        <input type="text" wire:model='name' placeholder='name' class="rounded-lg bg-white border border-gray-500 text-blue-500 shadow-lg px-4 py-2 mt-2 placeholder-indigo-300">
        <input type="email" wire:model='email' placeholder='email' class="rounded-lg bg-white border border-gray-500 text-blue-500 shadow-lg px-4 py-2 mt-2 placeholder-indigo-300">

        <input type="file" id="" wire:model="photo" class="rounded-lg bg-white border border-gray-500 text-blue-500 shadow-lg px-4 py-2 mt-2 placeholder-indigo-300">
        
        <p class="text-red-500 text-xs italic my-4">@error('photo') <span class="error">{{ $message }}</span> @enderror</p>
        
        <button type="submit" class="rounded-lg px-4 py-2 mt-2 bg-blue-900 text-white">Save</button>
    </form>
</div>

<div class="mt-12">
    <table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Name</th>
      <th class="px-4 py-2">Email</th>
      <th class="px-4 py-2">Photo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">{{$student->name}}</td>
      <td class="border px-4 py-2">{{$student->email}}</td>
      <td class="border px-4 py-2"><img src="{{asset('storage/photos/' . $student->photo)}}" alt="{{$student->name}}" srcset=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</div>

