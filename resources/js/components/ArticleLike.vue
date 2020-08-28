<template>
    <div>
        <button type="button" class="btn m-0 p-1 shadow-none">
            <i class="fas fa-star mr-1"
                :class="{'amber-text':this.isFavoritedBy}"
            />
        </button>
    </div>
</template>

<script>
    export default {
        props: {
            initialIsFavoritedBy: {
                type: Boolean,
                default: false,
            },
        },
        data() {
            return {
                isFavoritedBy: this.initialIsFavoritedBy,
            }
        },
    }
</script>
