<div class="flex flex-col items-start text-[0.8rem] xl:text-[0.6rem] 2xl:text-[0.8rem]">
    <div class="label">
      <span class="label-text text-white">{{$label}}</span>
    </div>
    <select name="{{$name}}" id="{{$name}}" class="select select-bordered text-white bg-zinc-800 outline-none rounded-md w-full xl:w-[15rem] 2xl:w-[{{$size}}] p-2">
      <option disabled selected> - </option>
      @foreach($data as $key => $value)
          <option value="{{$key}}">{{$value}}</option>
      @endforeach
    </select>
</div>
