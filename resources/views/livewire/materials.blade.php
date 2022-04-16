<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Materials') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="m-5">
                <div class="flex justify-between w-full mb-1">
                    <input type="text" wire:model="materialSearch" class="w-full border rounded shadow">
                    <a href="{{ route('materials-form',['material'=>0]) }}">
                        Add material
                    </a>
                </div>
                <div class="mb-1">
                    <table class="w-full rounded table-auto">
                        <thead>
                            <tr>
                                <th>
                                    Material Title
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materials as $material)
                            <tr>
                                <td>{{ $material->title }}</td>
                                <td>{{ $material->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a href="{{ route('materials-form',['material'=>$material->id]) }}">
                                        <i class="p-1 text-white bg-blue-700 border rounded fa fa-pencil hover:bg-blue-500">Edit</i>
                                    </a>
                                    <i class="p-1 text-white bg-red-700 border rounded fa fa-trash-o hover:bg-red-500"
                                        onclick='Livewire.emit("removeMaterial", {{ $material->id }})'>Delete</i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
