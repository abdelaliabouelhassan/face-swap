<template>
   <div class=" w-full flex flex-col items-start space-y-4">
        <div class=" w-full flex items-center justify-between sm:space-x-4">
            <div class=" flex flex-col items-center space-y-2">
                <div class=" w-[9.4375rem] h-[9.4375rem] md:w-[15rem] md:h-[15rem] bg-gray-400 rounded-lg">

                </div>
                <span class=" text-black font-manrope font-normal text-[0.9375rem] md:text-[1.5rem]">Add Face</span>
            </div>
            <div class=" -mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 18L18 12L12 6" stroke="#222222"/>
                    <path d="M6 18L12 12L6 6" stroke="#222222"/>
                </svg>
            </div>
            <div class=" flex flex-col items-center space-y-2">
                <div class=" w-[9.4375rem] h-[9.4375rem] md:w-[15rem] md:h-[15rem] bg-gray-400 rounded-lg">

                </div>
                <span class=" text-black font-manrope font-normal text-[0.9375rem] md:text-[1.5rem]">Add Face</span>
            </div>
        </div>
        <button class=" text-center text-white font-krona btn w-full h-[2.75rem] md:h-14 hover:scale-110 duration-200">
            Generate
        </button>
   </div>
</template>

<style scoped>
 .btn {
    border-radius: 1.5625rem;
    background: var(--Stye1, linear-gradient(90deg, #AD00FF 0%, rgba(98, 48, 255, 0.90) 47.92%, #006FFF 100%));
 }
</style>