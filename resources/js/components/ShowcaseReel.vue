<script setup lang="ts">
import { defineProps, ref, onMounted } from "vue";
import { ArrowLeftIcon, ArrowRightIcon } from "@heroicons/vue/24/solid";
import LightBox from "./LightBox.vue";

const props = defineProps<{
    images: string[];
}>();

const lightbox = ref(false);
const lightboxImageUrl = ref("");
const rotations = ref<string[]>([]);
const currentIndex = ref(0);
const duplicatedImages = ref<string[]>([]);

const generateRotations = () => {
    if (duplicatedImages.value.length) {
        rotations.value = Array.from(
            { length: duplicatedImages.value.length },
            (_, index) => (index % 2 === 0 ? `rotate(2deg)` : `rotate(-2deg)`)
        );
    }
};

const nextImage = () => {
    currentIndex.value = (currentIndex.value + 1) % props.images.length;
};

const prevImage = () => {
    currentIndex.value =
        (currentIndex.value - 1 + props.images.length) % props.images.length;
};

const openLightbox = (imageUrl: string) => {
    lightboxImageUrl.value = imageUrl;
    lightbox.value = true;
};

const hideLightbox = () => {
    lightbox.value = false;
};

onMounted(() => {
    duplicatedImages.value = [...props.images, ...props.images];
    generateRotations();
});
</script>

<template>
    <div className="mt-10 sm:mt-16">
        <div
            className="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8"
        >
            <div
                v-for="(image, imageIdx) in duplicatedImages"
                :key="imageIdx"
                class="relative cursor-pointer aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 dark:bg-zinc-800 sm:w-72 sm:rounded-2xl border drop-shadow-lg"
                :style="{
                    transform: `translateX(-${100 * currentIndex}%) ${
                        rotations[imageIdx % rotations.length]
                    }`,
                }"
            >
                <img
                    :src="image"
                    @click="() => openLightbox(image)"
                    class="absolute inset-0 h-full w-full object-cover"
                />
            </div>
        </div>

        <div class="sm:px-8 mt-10">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="mx-auto flex items-center space-x-4 ml-auto">
                    <div
                        class="mx-auto flex items-center space-x-4 select-none"
                    >
                        <ArrowLeftIcon
                            @click="prevImage"
                            class="w-8 h-8 cursor-pointer text-zinc-700"
                        />
                        <ArrowRightIcon
                            @click="nextImage"
                            class="w-8 h-8 cursor-pointer text-zinc-700"
                        />
                    </div>
                </div>
            </div>
        </div>

        <LightBox
            :show="lightbox"
            @hide="hideLightbox"
            :imageUrl="lightboxImageUrl"
        />
    </div>
</template>
