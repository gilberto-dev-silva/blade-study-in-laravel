<div
    class="
    flex
    m-[20px]
    flex-col
    p-[20px]
    w-[200px]
    shadow-xl
    items-center
    justify-center
">
    <img src="{{ $image }}" alt="Imagem Pessoa">

    <div class="py-4">
        <h1> {{ $nome }} </h1>
        <h3> {{ $idade }} Anos</h3>
        <p class="text-sm"> Nasceu em {{ $birth }} </p>
    </div>
</div>
