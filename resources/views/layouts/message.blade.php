@if (session()->has('errors'))
    <div class="py-4 container mx-auto mb-4">
        <div class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative text-center" role="alert">
          <strong class="font-bold">Error</strong>
          <span class="block sm:inline font-medium">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
          </span>
        </div>
    </div>
@endif
