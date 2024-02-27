<template>
  <div class="flex h-6" v-html="fieldValue"></div>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  }
}
</script>
