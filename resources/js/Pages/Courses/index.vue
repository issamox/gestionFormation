<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Gestion des formation
            </h2>
        </template>

        <div class="py-4">
            <div class="py-6" v-for="course in coursesList" v-bind:id="course.id">
                <div class="mx-8 p-4 bg-white shadow rounded">
                    <div class="flex justify-between">
                        <div class="text-4xl">{{ course.title }}</div>
                        <div class="text-sm text-gray-600">10 Episode</div>
                    </div>
                    <div class="text-sm text-gray-500">{{ course.description }}</div>
                    <a href="#" class="text-white p-2 hover:bg-gray-700 mt-4 bg-gray-500 inline-block rounded">Voir la formation</a>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from "../../Layouts/AppLayout"

export default {
  components: {
      AppLayout
  },
  data(){
      return {
          coursesList:this.courses
      }
  },

  props:['courses'],

  mounted : function (){
      console.log(this.coursesList);
  }

}
</script>
