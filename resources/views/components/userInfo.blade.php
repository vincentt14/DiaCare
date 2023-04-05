<div
  class="bayangan_field mb-6 grid max-w-lg grid-cols-2 gap-0 border-2 border-black bg-white py-2 text-slate-500 md:max-w-md">
  <div class="grid grid-cols-3">
    <div class="col-1 col-span-1 flex items-center justify-center text-2xl font-bold text-primary">{{ count($user) }}
    </div>
    <div class="col-2 col-span-2">
      <p class="text-xs lg:text-base">DiaCare</p>
      <p class="text-xs lg:text-base">Users</p>
    </div>
  </div>
  <div class="grid grid-cols-3">
    <div class="col-1 col-span-1 flex items-center justify-center text-2xl font-bold text-primary">{{ count($medicine) }}
    </div>
    <div class="col-2 col-span-2">
      <p class="text-xs lg:text-base">Medicine</p>
      <p class="text-xs lg:text-base">Available</p>
    </div>
  </div>
</div>
