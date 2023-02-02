<div class="flex flex-col my-auto  w-[calc(100%-(150px+4vw))]">
    <h3 class=" text-textGray">
        Lorem, ipsum dolor sit amet consectetur adipisicing.
    </h3>
    <div class="flex justify-around">
        <div class="flex gap-2 text-sm mt-1 font-semibold text-textGray">
            <label for="size"> Size </label>
            <span class="text-textMehandi"> xl </span>
        </div>
        <div class="flex gap-2 text-sm mt-1 font-semibold text-textGray">
            <label for="size"> Color </label>
            <span class="h-[18px] w-[18px] rounded-full bg-red-800 my-auto">
            </span>
        </div>
    </div>
    <div class="text-center flex justify-center mt-1 text-textMehandi gap-2">
        <label for="price"> Price </label>
        <h3 class="" id="price">
            <b class="text-textRed">₹</b>
            2000.00
        </h3>
    </div>

    <div class="text-center flex flex-wrap justify-between mt-2 text-textMehandi gap-2 text-[calc(13px+.2vw)]">
        <x-common.button-first />
        <x-common.button-second type="button" title="Remove" />
    </div>

</div>
