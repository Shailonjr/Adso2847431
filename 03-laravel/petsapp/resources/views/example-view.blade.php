<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1 class="text-4xl text-center my-10">{{$title}}</h1>

    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>Name</th>
              <th>breed</th>
              <th>location</th>
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pets as $pet)

            <tr class="hover:bg-blue-300">
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="{{ asset('images/'.$pet->image) }}"
                        alt="{{ $pet->name }}" />
                    </div>
                  </div>
                  <div>
                    <div class="font-bold">{{$pet->name}}</div>
                    @if ($pet->kind == 'Dog')
                        <div class="badge badge-primary">{{$pet->kind}}</div>
                        
                        @else
                        <div class="badge badge-secondary">{{$pet->kind}}</div> 
                    @endif

                  </div>
                </div>
              </td>
              <td>
                <span class="badge badge-ghost badge-sm badge-accent">{{$pet->breed}}</span>
              </td>
              <td>{{$pet->location}}</td>
              <th>
                <a href="{{url('show/pet/'.$pet->id)}}" class="btn btn-sm btn-outline btn-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z" />
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z" clip-rule="evenodd" />
                    </svg>
                </a>
              </th>
            </tr>
            @endforeach
            </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
                <th>Name</th>
                <th>breed</th>
                <th>location</th>
                <th>actions</th>
            </tr>
          </tfoot>
        </table>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>