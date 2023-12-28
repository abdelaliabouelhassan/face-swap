<template>
    <div class=" flex flex-col items-center space-y-4">
        <div class=" w-full h-[19.0625rem] max-w-[16.0625rem] rounded-lg md:h-[30rem] md:max-w-[25rem] overflow-hidden bg-[#BBB]">
            <img :src="result" v-if="result" class=" w-full h-full object-cover" alt="">
        </div>
        <div class="  flex items-center space-x-4 md:w-full md:max-w-[25rem]">
             <button @click="download" class=" text-white hover:scale-x-110 duration-200 font-krona text-[0.6875rem] md:text-[1rem] font-normal bg-black h-[2.0625rem] w-[7.6875rem] md:w-full md:h-[3rem] rounded-lg">Download</button>
             <button class=" text-white hover:scale-x-110 duration-200  font-krona text-[0.6875rem] md:text-[1rem] font-normal bg-black h-[2.0625rem] w-[7.6875rem] md:w-full md:h-[3rem] rounded-lg">Share</button>
        </div>
    </div>
</template>

<script setup>
import { ref,defineProps } from "vue";
 const props = defineProps(['result'])

 const  download =  async() => {
     if(!props.result){
        return;
     }
      const response = await fetch(props.result);
      const blob = await response.blob();
      const url = window.URL.createObjectURL(blob);

      const link = document.createElement('a');
      link.href = url;
      link.download = 'downloaded-image.jpg'; 
      link.target = '_blank'; 

      document.body.appendChild(link);
      link.click();

      document.body.removeChild(link);
      window.URL.revokeObjectURL(url);
 }
</script>