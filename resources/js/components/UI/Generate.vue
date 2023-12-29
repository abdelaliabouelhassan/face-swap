<template>
   <div class=" w-full flex flex-col items-start space-y-8">
        <div class=" w-full flex items-center justify-between sm:space-x-4">
            <div class=" flex flex-col items-center space-y-2">
                <div class=" w-[9.4375rem] flex h-[9.4375rem] md:w-[15rem] md:h-[15rem] bg-[#D9D9D9] overflow-hidden rounded-lg cursor-pointer" @click="faceRef.click">
                    <input type="file" hidden ref="faceRef" @change="getFaceImage" accept="image/*">
                    <div class=" m-auto" v-if="SelectedFaceImage == null">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.0186 7.49541C2 8.22358 2 9.05225 2 10V12H10.0971C9.76426 11.8433 9.40022 11.74 9.01534 11.7015L7 11.5H6.99999C5.68663 11.3687 5.02995 11.303 4.49718 11.087C3.36574 10.6283 2.50574 9.67803 2.1619 8.50656C2.0787 8.22308 2.03826 7.91099 2.0186 7.49541ZM21.8742 5.77457L21.5 17C20.5396 17 19.6185 16.6185 18.9393 15.9393L17.8123 14.8123C17.4423 14.4423 17.2572 14.2572 17.0697 14.1385C16.4165 13.7251 15.5835 13.7251 14.9303 14.1385C14.7428 14.2572 14.5577 14.4423 14.1877 14.8123L13.4145 15.5855C12.8925 16.1075 12 15.7378 12 14.9996V22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14V10C22 8.20744 22 6.8409 21.8742 5.77457Z" fill="#222222"/>
                            <path d="M3 10C3 8.08611 3.00212 6.75129 3.13753 5.74416C3.26907 4.76579 3.50966 4.2477 3.87868 3.87868C4.2477 3.50966 4.76579 3.26907 5.74416 3.13753C6.75129 3.00212 8.08611 3 10 3H14C15.9139 3 17.2487 3.00212 18.2558 3.13753C19.2342 3.26907 19.7523 3.50966 20.1213 3.87868L20.8112 3.18882L20.1213 3.87868C20.4903 4.2477 20.7309 4.76579 20.8625 5.74416C20.9979 6.75129 21 8.08611 21 10V14C21 15.9139 20.9979 17.2487 20.8625 18.2558C20.7309 19.2342 20.4903 19.7523 20.1213 20.1213C19.7523 20.4903 19.2342 20.7309 18.2558 20.8625C17.2487 20.9979 15.9139 21 14 21H13V14C13 13.9818 13 13.9637 13 13.9456C13.0001 13.5215 13.0002 13.1094 12.9545 12.7695C12.903 12.3863 12.7774 11.949 12.4142 11.5858C12.051 11.2226 11.6137 11.097 11.2305 11.0455C10.8906 10.9998 10.4785 10.9999 10.0544 11C10.0363 11 10.0182 11 10 11H3V10Z" stroke="#222222" stroke-width="2"/>
                            <circle cx="16" cy="8" r="2" fill="#222222"/>
                            <path d="M8 16V15H9V16H8ZM3.62469 20.7809C3.19343 21.1259 2.56414 21.056 2.21913 20.6247C1.87412 20.1934 1.94404 19.5641 2.37531 19.2191L3.62469 20.7809ZM7 21V16H9V21H7ZM8 17H3V15H8V17ZM8.6247 16.7809L3.62469 20.7809L2.37531 19.2191L7.3753 15.2191L8.6247 16.7809Z" fill="#222222"/>
                        </svg>
                    </div>
                    <div class=" w-full h-full" v-else>
                        <img :src="SelectedFaceImage" class=" w-full h-full object-cover" alt="">
                    </div>
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
                <div class=" w-[9.4375rem] h-[9.4375rem] flex md:w-[15rem] md:h-[15rem] bg-[#D9D9D9] overflow-hidden rounded-lg cursor-pointer" @click="originalRef.click">
                    <input type="file" hidden ref="originalRef" @change="getOriginImage" accept="image/*">
                     <div class=" m-auto" v-if="SelectedOriginImage == null">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.0186 7.49541C2 8.22358 2 9.05225 2 10V12H10.0971C9.76426 11.8433 9.40022 11.74 9.01534 11.7015L7 11.5H6.99999C5.68663 11.3687 5.02995 11.303 4.49718 11.087C3.36574 10.6283 2.50574 9.67803 2.1619 8.50656C2.0787 8.22308 2.03826 7.91099 2.0186 7.49541ZM21.8742 5.77457L21.5 17C20.5396 17 19.6185 16.6185 18.9393 15.9393L17.8123 14.8123C17.4423 14.4423 17.2572 14.2572 17.0697 14.1385C16.4165 13.7251 15.5835 13.7251 14.9303 14.1385C14.7428 14.2572 14.5577 14.4423 14.1877 14.8123L13.4145 15.5855C12.8925 16.1075 12 15.7378 12 14.9996V22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14V10C22 8.20744 22 6.8409 21.8742 5.77457Z" fill="#222222"/>
                            <path d="M3 10C3 8.08611 3.00212 6.75129 3.13753 5.74416C3.26907 4.76579 3.50966 4.2477 3.87868 3.87868C4.2477 3.50966 4.76579 3.26907 5.74416 3.13753C6.75129 3.00212 8.08611 3 10 3H14C15.9139 3 17.2487 3.00212 18.2558 3.13753C19.2342 3.26907 19.7523 3.50966 20.1213 3.87868L20.8112 3.18882L20.1213 3.87868C20.4903 4.2477 20.7309 4.76579 20.8625 5.74416C20.9979 6.75129 21 8.08611 21 10V14C21 15.9139 20.9979 17.2487 20.8625 18.2558C20.7309 19.2342 20.4903 19.7523 20.1213 20.1213C19.7523 20.4903 19.2342 20.7309 18.2558 20.8625C17.2487 20.9979 15.9139 21 14 21H13V14C13 13.9818 13 13.9637 13 13.9456C13.0001 13.5215 13.0002 13.1094 12.9545 12.7695C12.903 12.3863 12.7774 11.949 12.4142 11.5858C12.051 11.2226 11.6137 11.097 11.2305 11.0455C10.8906 10.9998 10.4785 10.9999 10.0544 11C10.0363 11 10.0182 11 10 11H3V10Z" stroke="#222222" stroke-width="2"/>
                            <circle cx="16" cy="8" r="2" fill="#222222"/>
                            <path d="M8 16V15H9V16H8ZM3.62469 20.7809C3.19343 21.1259 2.56414 21.056 2.21913 20.6247C1.87412 20.1934 1.94404 19.5641 2.37531 19.2191L3.62469 20.7809ZM7 21V16H9V21H7ZM8 17H3V15H8V17ZM8.6247 16.7809L3.62469 20.7809L2.37531 19.2191L7.3753 15.2191L8.6247 16.7809Z" fill="#222222"/>
                        </svg>
                    </div>
                    <div class=" w-full h-full" v-else>
                        <img :src="SelectedOriginImage" class=" w-full h-full object-cover" alt="">
                    </div>
                </div>
                <span class=" text-black font-manrope font-normal text-[0.9375rem] md:text-[1.5rem]">Original Image</span>
            </div>
        </div>
        <button :disabled='loading' @click="generate" class=" flex text-center text-white font-krona btn w-full h-[2.75rem] md:h-14 hover:scale-110 duration-200">
           <span class=" m-auto" v-if="!loading">Generate</span>
           
        <div role="status" class=" m-auto" v-else>
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>

        </button>
   </div>
</template>


<script setup>
import axios from 'axios';
import { ref,defineEmits } from "vue";

  const faceRef = ref(null)
  const originalRef = ref(null)
  const SelectedFaceImage = ref(null)
  const SelectedOriginImage = ref(null)
  let fileInputFace = null;
  let fileInputOrigin = null
  const loading = ref(false)
    const emits = defineEmits(['result','loading']);
  
  const getFaceImage = (e) => {


    
    const fileInput = e.target;

    if (fileInput.files && fileInput.files[0]) {
         fileInputFace = fileInput.files[0];

        
        
        // Check if the selected file is an image
        if (fileInputFace.type.startsWith('image/')) {
        const reader = new FileReader();

        reader.onload = (event) => {
            const base64String = event.target.result;
            // Now you can use the base64String as needed, for example, send it to the server or display it.
            // console.log(base64String);
            SelectedFaceImage.value = base64String;
        };

        // Read the selected file as a data URL (base64 format)
        reader.readAsDataURL(fileInputFace);
        } else {
        // Display an error message or handle the case when the selected file is not an image
        console.error('Please select a valid image file.');
        alert('Please select a valid image file.')
        // You might want to clear the input or show a message to the user
        fileInput.value = '';
        }
    }
  };

  const getOriginImage = (e) => {
     const fileInput = e.target;

    if (fileInput.files && fileInput.files[0]) {
         fileInputOrigin = fileInput.files[0];
        
        // Check if the selected file is an image
        if (fileInputOrigin.type.startsWith('image/')) {
        const reader = new FileReader();

        reader.onload = (event) => {
            const base64String = event.target.result;
            // Now you can use the base64String as needed, for example, send it to the server or display it.
            // console.log(base64String);
            SelectedOriginImage.value = base64String;
        };

        // Read the selected file as a data URL (base64 format)
        reader.readAsDataURL(fileInputOrigin);
        } else {
        // Display an error message or handle the case when the selected file is not an image
        console.error('Please select a valid image file.');
        alert('Please select a valid image file.')
        // You might want to clear the input or show a message to the user
        fileInput.value = '';
        }
    }
  };

  const validate = () => {
    if(SelectedFaceImage.value == null || SelectedOriginImage.value == null){
        return false
    }
    return true
  }


  const generate = () => {
    
    if(!validate()){
        alert('please add Face and Original Image')
        return;
    }
    loading.value = true
     let formData = new FormData();
     formData.append('face', fileInputFace);
     formData.append('origin', fileInputOrigin);
    axios.post('/generate',formData)
    .then(function (response) {
        // handle success
        console.log(response);
        let data = response.data;
        getReplicate(data.id);
        var resultElement = document.getElementById("results");
        if (resultElement) {
            resultElement.scrollIntoView({ behavior: "smooth" });
        }
        emits('loading',true)
    })
    .catch(function (error) {
        // handle error
         loading.value = false
        console.log(error);

        emits('loading',false)
    })
    .finally(function () {
        // always executed
    });
  }

   const getReplicate = (replicated_id) => {
          emits('loading',true)
             axios.post('/get-results', {id:replicated_id}).then((response) => {

                     console.log(response.data)
                     const checkStatus = (response) => {
                         //if response.data.status == processing wait 10s and then check again untile the status == succeeded
                        if (response.data.status === "processing" || response.data.status === 'starting') {
                            // Wait for 10 seconds and then check again
                            setTimeout(() => {
                                getReplicate(replicated_id); // Call the function recursively
                            }, 3000); // 10000 milliseconds = 10 seconds
                        } else if (response.data.status === "succeeded") {
                            // The status is "succeeded," you can handle it here
                            loading.value = false;
                            emits('result',response.data.images)
                             emits('loading',false)
                            //PrepareResults(response.data)
                        }
                     }
                        checkStatus(response)
                       

                }).catch((error) => {
                     loading.value = false;
                     console.log(error.response)
                });
        }

</script>