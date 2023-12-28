<template>
    <div class=" w-full space-y-10 flex flex-col items-center font-krona pt-10">
        <div class=" w-full flex flex-col items-center space-y-4 pb-10 ctn">
            <h1 class=" text-black font-krona font-normal text-2xl md:text-5xl text-center">Swap Faces Online</h1>
            <p class=" text-black font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                Want to see yourself acting in famous movie or become anyone in your dream? Simply do it with FACESWAPPER.AI face swapper
            </p>
            <div class=" w-full max-w-lg mx-auto pt-10">
                <Generate @result='getResult' />
            </div>
        </div>

       <div class="bg-[#F6F6F6] w-full">
         <div class=" w-full flex flex-col items-center space-y-4  ctn py-10">
            <h1 class=" text-black font-krona font-normal text-lg md:text-4xl text-center">Swap Faces in Seconds </h1>
            <p class=" text-black font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                Upload realistic front face images will improve AI generation results!
            </p>
            <div class=" w-full max-w-lg mx-auto pt-10 space-y-10">
                <Result :result='resultImage'/>
                <p class=" text-center text-black font-kosugi text-[0.8125rem] md:text-[1rem]">
                    Your generation record will be deleted after 24 hours, please download your images in time!
                </p>
            </div>
        </div>
       </div>


       <div class=" w-full flex space-y-9 flex-col items-center ctn">
            <div class=" space-y-4">
                <h3 class=" text-black font-krona font-normal text-lg md:text-4xl text-center">How to Swap Faces with AI Online?</h3>
                <p class=" text-black font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                    With Face Swapper, it is as easy as one-two-three
                </p>
            </div>

            <div class=" w-full flex flex-col items-start space-y-4">
                <div class=" flex items-center space-x-4">
                    <div>
                        <div class=" w-20 h-20 md:w-40 md:h-40 bg-[#D9D9D9]">

                    </div>
                    </div>
                    <div class=" flex flex-col items-start space-y-2">
                        <h5 class=" text-black font-manrope text-[0.8125rem] md:text-[2rem] font-semibold">01.Upload Face Photo</h5>
                        <p class=" text-[#222] font-manrope text-[0.75rem] md:text-[1.2rem] font-normal">
                            Click "Add Face" and upload a clear, front-facing photo of the face you want to swap. A high-quality headshot works best.
                        </p>
                    </div>
                </div>
                  <div class=" flex items-center space-x-4">
                    <div>
                        <div class=" w-20 h-20 md:w-40 md:h-40 bg-[#D9D9D9]">

                    </div>
                    </div>
                    <div class=" flex flex-col items-start space-y-2">
                        <h5 class=" text-black font-manrope text-[0.8125rem] md:text-[2rem] font-semibold">02.Select Body Photo</h5>
                        <p class=" text-[#222] font-manrope text-[0.75rem] md:text-[1.2rem] font-normal">
                           upload your own. Match angles and lighting for optimal results.
                        </p>
                    </div>
                </div>
                  <div class=" flex items-center space-x-4">
                    <div>
                        <div class=" w-20 h-20 md:w-40 md:h-40 bg-[#D9D9D9]">

                    </div>
                    </div>
                    <div class=" flex flex-col items-start space-y-2">
                        <h5 class=" text-black font-manrope text-[0.8125rem] md:text-[2rem] font-semibold">03. Generate and Save</h5>
                        <p class=" text-[#222] font-manrope text-[0.75rem] md:text-[1.2rem] font-normal">
                            Click "Swap Face" to auto swap face into photo. Preview result. Click "Download" to save final swapped photo when satisfied.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" w-full">
                <button class=" text-center text-white font-krona btn w-full h-[2.75rem] md:h-14 hover:scale-110 duration-200">
                    SWAP FACE NOW
                </button>
            </div>
       </div>

       <div class=" w-full" style="background: var(--Stye1, linear-gradient(90deg, #AD00FF 0%, rgba(98, 48, 255, 0.90) 47.92%, #006FFF 100%));">
        <div class=" w-full ctn flex flex-col items-center space-y-4 py-10">
            <h2 class=" text-white font-krona font-normal text-lg md:text-4xl text-center">Replace Your Face with Any Image</h2>
            <p class=" text-[#CECECE] font-manrope text-[0.9375rem] md:text-[1.5rem] text-center font-normal">
                Change the meme game with our AI-powered Face Swapper. Create hilarious memes effortlessly
            </p>

           <div class=" w-full">
             <img src="/images/faces.svg" class=" w-full h-full object-cover" alt="">
           </div>

           <div class=" flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                  <path d="M10.9891 7.17991C11.8413 5.05549 12.2673 3.99329 13 3.99329C13.7327 3.99329 14.1588 5.05549 15.0109 7.17991L15.0506 7.27884C15.532 8.47903 15.7728 9.07912 16.2633 9.44387C16.7539 9.80861 17.3979 9.86629 18.6859 9.98164L18.9188 10.0025C21.0267 10.1913 22.0807 10.2857 22.3062 10.9562C22.5318 11.6268 21.749 12.3389 20.1836 13.7632L19.6611 14.2385C18.8686 14.9595 18.4724 15.32 18.2877 15.7924C18.2533 15.8806 18.2246 15.9709 18.202 16.0628C18.0806 16.5553 18.1966 17.0783 18.4287 18.1242L18.5009 18.4497C18.9274 20.3719 19.1406 21.333 18.7683 21.7476C18.6292 21.9025 18.4484 22.014 18.2475 22.0689C17.71 22.2155 16.9468 21.5936 15.4204 20.3499C14.4181 19.5332 13.917 19.1248 13.3416 19.033C13.1153 18.9968 12.8847 18.9968 12.6584 19.033C12.083 19.1248 11.5819 19.5332 10.5796 20.3499C9.05327 21.5936 8.29008 22.2155 7.75253 22.0689C7.55166 22.014 7.37084 21.9025 7.23172 21.7476C6.8594 21.333 7.07264 20.3719 7.49912 18.4497L7.57135 18.1242C7.80341 17.0783 7.91944 16.5553 7.79805 16.0628C7.7754 15.9709 7.74676 15.8806 7.71232 15.7924C7.52763 15.32 7.1314 14.9595 6.33894 14.2385L5.81646 13.7632C4.251 12.3389 3.46827 11.6268 3.6938 10.9562C3.91932 10.2857 4.9733 10.1913 7.08127 10.0025L7.31412 9.98164C8.60211 9.86629 9.24611 9.80861 9.73669 9.44387C10.2273 9.07912 10.468 8.47902 10.9494 7.27883L10.9891 7.17991Z" fill="#7E869E" fill-opacity="0.25" stroke="#DBC500"/>
                </svg>
                <span class=" text-[#FEE500] text-center font-krona uppercase font-normal text-[0.875rem] md:text-[1.3rem]">Become a meme star</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                 <path d="M10.9891 7.17991C11.8413 5.05549 12.2673 3.99329 13 3.99329C13.7327 3.99329 14.1588 5.05549 15.0109 7.17991L15.0506 7.27884C15.532 8.47903 15.7728 9.07912 16.2633 9.44387C16.7539 9.80861 17.3979 9.86629 18.6859 9.98164L18.9188 10.0025C21.0267 10.1913 22.0807 10.2857 22.3062 10.9562C22.5318 11.6268 21.749 12.3389 20.1836 13.7632L19.6611 14.2385C18.8686 14.9595 18.4724 15.32 18.2877 15.7924C18.2533 15.8806 18.2246 15.9709 18.202 16.0628C18.0806 16.5553 18.1966 17.0783 18.4287 18.1242L18.5009 18.4497C18.9274 20.3719 19.1406 21.333 18.7683 21.7476C18.6292 21.9025 18.4484 22.014 18.2475 22.0689C17.71 22.2155 16.9468 21.5936 15.4204 20.3499C14.4181 19.5332 13.917 19.1248 13.3416 19.033C13.1153 18.9968 12.8847 18.9968 12.6584 19.033C12.083 19.1248 11.5819 19.5332 10.5796 20.3499C9.05327 21.5936 8.29008 22.2155 7.75253 22.0689C7.55166 22.014 7.37084 21.9025 7.23172 21.7476C6.8594 21.333 7.07264 20.3719 7.49912 18.4497L7.57135 18.1242C7.80341 17.0783 7.91944 16.5553 7.79805 16.0628C7.7754 15.9709 7.74676 15.8806 7.71232 15.7924C7.52763 15.32 7.1314 14.9595 6.33894 14.2385L5.81646 13.7632C4.251 12.3389 3.46827 11.6268 3.6938 10.9562C3.91932 10.2857 4.9733 10.1913 7.08127 10.0025L7.31412 9.98164C8.60211 9.86629 9.24611 9.80861 9.73669 9.44387C10.2273 9.07912 10.468 8.47902 10.9494 7.27883L10.9891 7.17991Z" fill="#7E869E" fill-opacity="0.25" stroke="#DBC500"/>
                </svg>
           </div>

           <div class=" w-full">
             <button 
             
              class=" text-center text-white font-krona bg-white rounded-full w-full h-[2.75rem] md:h-14 hover:scale-110 duration-200">
                
                <span style="background: var(--Stye1, linear-gradient(90deg, #AD00FF 0%, rgba(98, 48, 255, 0.90) 47.92%, #006FFF 100%));background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Start Generate..</span>
            </button>
           </div>
        </div>
       </div>
        
    </div>
</template>


<script setup>
import { ref } from "vue";
 import Generate from '../UI/Generate.vue'
 import Result from '../UI/Result.vue'
 const resultImage = ref(null)
 const getResult = (image) => {
    resultImage.value = image;
 }
</script>



