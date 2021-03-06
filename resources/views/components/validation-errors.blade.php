@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="d-flex justify-content-center font-medium text-red-600">
            <span>Опаньки! Что-то пошло не так.</span>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
