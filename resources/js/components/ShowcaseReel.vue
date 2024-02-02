<script setup lang="ts">
import { defineProps, ref, onMounted } from 'vue';

const props = defineProps<{
  images: string[];
}>();

const rotations = ref<string[]>([]);

function generateRotations() {
  if (props.images) {
    rotations.value = Array.from({ length: props.images.length }, (_, index) =>
      index % 2 === 0 ? `rotate-2` : `-rotate-2`
    );
  }
}

onMounted(() => {
  generateRotations();
});

</script>

<template>
   <div className="mt-16 sm:mt-20">
        <div className="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8">
            <div v-for="(image, imageIdx) in images" :key="imageIdx"
                class="relative cursor-pointer aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl border drop-shadow-lg"
                :class="rotations[imageIdx % rotations.length]">
                <img :src="image" class="absolute inset-0 h-full w-full object-cover">
            </div>
        </div>
    </div>
</template>
