<style>
    .toggle:checked {
        color:#0ea5e9;
    }
</style>
<div class="form-control h-[3rem] ">
    <label class="label cursor-pointer flex flex-col items-start xl:items-center gap-2 text-center">
        <span class="label-text text-white text-[0.8rem] xl:text-[0.6rem] 2xl:text-[0.8rem]">{{$label}}</span>
        <input type="checkbox" class="toggle ml-2" {{$atributos ?? ""}} name="{{$name}}" id="{{$name}}" />
    </label>
</div>
