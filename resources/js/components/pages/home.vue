<template>
    <div class=" w-full space-y-10 flex flex-col items-center font-krona py-10">
        <div class=" w-full flex flex-col items-center space-y-4 pb-10 ctn">
            <h1 class=" text-black font-krona font-normal text-2xl md:text-5xl text-center">Swap Faces Online</h1>
            <p class=" text-black font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                Want to see yourself acting in famous movie or become anyone in your dream? Simply do it with FACESWAPPER.AI face swapper
            </p>
            <div class=" w-full max-w-lg mx-auto pt-10">
                <Generate />
            </div>
        </div>

       <div class="bg-[#F6F6F6] w-full">
         <div class=" w-full flex flex-col items-center space-y-4  ctn py-10">
            <h1 class=" text-black font-krona font-normal text-lg md:text-4xl text-center">Swap Faces in Seconds </h1>
            <p class=" text-black font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                Upload realistic front face images will improve AI generation results!
            </p>
            <div class=" w-full max-w-lg mx-auto pt-10 space-y-10">
                <Result />
                <p class=" text-center text-black font-kosugi text-[0.8125rem] md:text-[1rem]">
                    Your generation record will be deleted after 24 hours, please download your images in time!
                </p>
            </div>
        </div>
       </div>
        
    </div>
</template>


<script setup>
 import Generate from '../UI/Generate.vue'
 import Result from '../UI/Result.vue'
</script>

<style scoped>
 .ctn {
    @apply max-w-[23.625rem] md:max-w-3xl px-4 mx-auto;
 }
</style>