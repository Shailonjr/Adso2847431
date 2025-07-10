@extends('layouts.app')
@section('title', 'Módulo de Mascotas')

@section('content')
@include('layouts.navbar')

<h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg fill="#ffffff" width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <path d="M669.269 502.605c0 22.62-18.34 40.96-40.96 40.96s-40.96-18.34-40.96-40.96 18.34-40.96 40.96-40.96 40.96 18.34 40.96 40.96zm-235.315 0c0 22.62-18.34 40.96-40.96 40.96s-40.96-18.34-40.96-40.96 18.34-40.96 40.96-40.96 40.96 18.34 40.96 40.96z"></path>
            <path d="M907.279 561.784c0-191.025-177.037-346.993-396.626-346.993-219.595 0-396.626 155.965-396.626 346.993s177.031 346.993 396.626 346.993c219.589 0 396.626-155.968 396.626-346.993zm40.96 0c0 214.883-196.449 387.953-437.586 387.953-241.143 0-437.586-173.067-437.586-387.953S269.51 173.831 510.653 173.831c241.137 0 437.586 173.07 437.586 387.953z"></path>
            <path d="M361.143 228.797c9.771 5.698 22.311 2.396 28.008-7.375s2.396-22.311-7.375-28.008L184.072 78.122c-28.259-16.468-57.339.239-57.339 32.939v262.605c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V115.987l193.449 112.811zm496.713 155.109c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V111.061c0-32.7-29.08-49.407-57.334-32.942L643.773 193.414c-9.771 5.698-13.073 18.238-7.375 28.008s18.238 13.073 28.008 7.375l193.449-112.811v267.919zM461.151 608.829h99c33.679 0 48.979 30.22 29.043 57.36l-43.852 59.735c-18.188 24.76-51.195 24.76-69.387-.005l-43.844-59.725c-19.94-27.145-4.64-57.365 29.039-57.365zm47.819 92.846c1.821 2.479 1.541 2.479 3.358.005l38.093-51.891h-79.54l38.089 51.886z"></path>
            <path d="M481.375 723.05c-16.704 39.48-55.475 65.672-99.083 65.672-43.063 0-81.444-25.539-98.48-64.278-4.553-10.354-16.638-15.056-26.992-10.503s-15.056 16.638-10.503 26.992c23.519 53.48 76.522 88.749 135.975 88.749 60.207 0 113.746-36.169 136.806-90.672 4.407-10.417-.464-22.434-10.881-26.841s-22.434.464-26.841 10.881z"></path>
            <path d="M502.206 739.011c23.06 54.503 76.599 90.672 136.806 90.672 59.453 0 112.456-35.268 135.975-88.749 4.553-10.354-.149-22.438-10.503-26.992s-22.438.149-26.992 10.503c-17.036 38.739-55.418 64.278-98.48 64.278-43.608 0-82.379-26.193-99.083-65.672-4.407-10.417-16.425-15.288-26.841-10.881s-15.288 16.425-10.881 26.841zM796.42 523.676l207.708-55.654c10.925-2.927 17.409-14.157 14.482-25.083s-14.157-17.409-25.083-14.482l-207.708 55.654c-10.925 2.927-17.409 14.157-14.482 25.083s14.157 17.409 25.083 14.482zm-8.964 82.438h215.04c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48h-215.04c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48zm-1.637 81.042l207.708 55.654c10.925 2.927 22.155-3.556 25.083-14.482s-3.556-22.155-14.482-25.083L796.42 647.591c-10.925-2.927-22.155 3.556-25.083 14.482s3.556 22.155 14.482 25.083zM237.157 484.112L29.449 428.458c-10.925-2.927-22.155 3.556-25.083 14.482s3.556 22.155 14.482 25.083l207.708 55.654c10.925 2.927 22.155-3.556 25.083-14.482s-3.556-22.155-14.482-25.083zm-1.637 81.042H20.48c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48h215.04c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48zm-8.964 82.437L18.848 703.245c-10.925 2.927-17.409 14.157-14.482 25.083s14.157 17.409 25.083 14.482l207.708-55.654c10.925-2.927 17.409-14.157 14.482-25.083s-14.157-17.409-25.083-14.482z"></path>
        </g>
    </svg>
    Módulo de Mascotas
</h1>

<ul class="menu gap-1 mb-8 menu-horizontal bg-base-200 rounded-box">
    <li>
        <a href="{{ url('pets/create') }}" class="btn btn-sm sm:btn-md btn-success btn-outline">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Añadir Mascota
        </a>
    </li>
    <li><a class="btn btn-sm sm:btn-md btn-neutral btn-outline">Exportar PDF</a></li>
    <li><a class="btn btn-sm sm:btn-md btn-neutral btn-outline">Exportar Excel</a></li>
    <li><input class="py-2" id="qsearch" name="qsearch" type="search" placeholder="Buscar..."></li>
</ul>

<div class="overflow-x-auto my-2 rounded-box bg-base-100">
    <table class="table table-zebra">
        <!-- head -->
        <thead>
            <tr>
                <th>Nombre</th>
                <th class="sm:table-cell hidden">Tipo</th>
                <th class="md:table-cell hidden">Raza</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="list">
            @foreach ($pets as $pet)
            <tr class="hover:bg-base-300">
                <td>
                    <div class="flex items-center gap-3">
                        <div class="avatar">
                            <div class="mask mask-squircle h-12 w-12">
                                <img src="{{ asset('images/' . $pet->image ) }}" alt="image" />
                            </div>
                        </div>
                        <div>
                            <div class="font-bold">{{ $pet->name }}</div>
                            <div class="text-sm opacity-50"> Edad: {{ $pet->age }} años</div>
                        </div>
                    </div>
                </td>
                <td class="sm:table-cell hidden">
                    <span class="badge badge-outline badge-neutral">{{ $pet->kind }}</span>
                </td>
                <td class="md:table-cell hidden">{{ $pet->breed }}</td>
                <td>
                    <a class="btn btn-outline btn-square btn-neutral btn-xs" href="{{ url('pets/' . $pet->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </a>
                    <a class="btn btn-outline btn-square btn-neutral btn-xs" href="{{ url('pets/' . $pet->id . '/edit') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <a href="javascript:;" class="btn btn-outline btn-square btn-error btn-xs btn-delete" data-petname="{{ $pet->name }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </a>
                    <form class="hidden" method="post" action="{{ url('pets/' . $pet->id) }}">
                        @csrf
                        @method('delete')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th class="sm:table-cell hidden">Tipo</th>
                <th class="md:table-cell hidden">Raza</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>


<div class="mt-1 text-xs text-white text-center">

    Mostrando {{ $pets->firstItem() }} a {{ $pets->lastItem() }} de {{ $pets->total() }} resultados

</div>


{{ $pets->links('layouts.paginator') }}

<dialog id="message" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold">Congratulations!</h3>
        <p id="text-message" class="py-4">Lorem ipsum dolor</p>
    </div>
</dialog>

<dialog id="confirm" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold">Are you Sure?</h3>
        <p id="text-confirm" class="py-4">Lorem ipsum dolor</p>
        <div class="flex gap-2">
            <form method="dialog">
                <button class="btn btn-sm">Cancel</button>
            </form>
            <button class="btn btn-sm btn-error btn-accept">Accept</button>
        </div>
    </div>
</dialog>

@endsection

@section('js')
<script>
    // Message
    const message = document.querySelector('#message')
    const textMessage = document.querySelector('#text-message')
    @if(session('message'))
    textMessage.textContent = "{{ session('message') }}"
    message.showModal()
    @endif

    // Delete
    const btnDelete = document.querySelectorAll('.btn-delete')
    const confirm = document.querySelector('#confirm')
    const textConfirm = document.querySelector('#text-confirm')
    const btnAccept = document.querySelector('.btn-accept')
    let frmDelete = undefined

    btnDelete.forEach(element => {
        element.addEventListener('click', function() {
            const petName = this.dataset.petname
            frmDelete = this.nextElementSibling
            textConfirm.textContent = `You want to delete:  ${petName}?`
            confirm.showModal()
        })
    })

    btnAccept.addEventListener('click', function() {
        frmDelete.submit()
    })

    // Search
    const qSearch = document.querySelector('#qsearch')
    const list = document.querySelector('#list')

    qSearch.addEventListener('input', function(event) {
        event.preventDefault()
        let query = this.value
        let token = document.querySelector('input[name=_token]')

        fetch('pets/search', {
                method: 'POST'
                , headers: {
                    'Content-Type': 'application/json'
                    , 'Accept': 'application/json'
                    , 'X-CSRF-TOKEN': token.value
                }
                , body: JSON.stringify({
                    'q': query
                })
            }).then(response => response.text())
            .then(data => {
                list.innerHTML = `
                    <tr>
                    <td colspan="4">
                        <span class="loading loading-spinner loading-xl flex mx-auto"></span>
                    </td>
                </tr>`
                setTimeout(() => {
                    list.innerHTML = data
                }, 2000)
            })
    })

</script>
@endsection
