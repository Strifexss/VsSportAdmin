<div class="flex flex-col items-start gap-2 text-[0.8rem] xl:text-[0.6rem] 2xl:text-[0.8rem]">
    <label for="{{ $name }}">{{ $placeholder }}</label>
    <input
        class="text-white bg-zinc-800 h-[2.5rem] outline-none rounded-md w-full xl:w-[15rem] 2xl:w-[{{ $size }}] p-2"
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ isset($value) ? $value : '' }}"
    >
</div>
