<script setup>
defineProps(["posts"]);
</script>

<template>
  <ul>
    <li v-for="post in posts" :key="post.id" mb-2>
      <a :href="`/post/${post.id}`" text-blue-600 hover:underline>{{
        post.title
      }}</a>
    </li>
  </ul>
</template>
