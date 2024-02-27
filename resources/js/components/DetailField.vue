<template>
  <div
    class="flex flex-col md:flex-row -mx-6 px-6 py-2 md:py-0 space-y-2 md:space-y-0"
    :dusk="field.attribute"
  >
    <div class="md:w-1/4 md:py-3">
      <slot>
        <h4 class="font-normal">
          <span>{{ label }}</span>
        </h4>
      </slot>
    </div>
    <div class="md:w-3/4 md:py-3 break-all lg:break-words">
      <slot name="value">
        <p
          v-if="fieldValue && !shouldDisplayAsHtml"
          class="flex items-center"
        >
          {{ fieldValue }}
        </p>
        <div
          class="flex h-6"
          v-else-if="fieldValue && shouldDisplayAsHtml"
          v-html="fieldValue"
        />
        <p v-else>&mdash;</p>
      </slot>
    </div>
  </div>

</template>

<script>
import filled from 'lodash'
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  computed: {
    label() {
      return this.fieldName || this.field.name
    },

    fieldHasValue() {
      return filled(this.field.value)
    },

    fieldValue() {
      if (!this.usesCustomizedDisplay && !this.fieldHasValue) {
        return null
      }

      return String(this.field.displayedAs || this.field.value)
    },

    shouldDisplayAsHtml() {
      return this.field.asHtml
    },
  },

}
</script>
