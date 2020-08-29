<template>
    <div>
        <button type="button" class="btn m-0 p-1 shadow-none">
            <i class="fas fa-star mr-1"
                :class="{'amber-text':this.isFavoritedBy, 'animated rollIn fast':this.gotToFavorite}"
                @click="clickFavorite"
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
            authorized: {
                type: Boolean,
                default: false,
            },
            endpoint: {
                type: String,
            },
        },
        data() {
            return {
                isFavoritedBy: this.initialIsFavoritedBy,
                gotToFavorite: false,
            }
        },
        methods: {
            clickFavorite() {
                if (!this.authorized) {
                    alert('お気に入り機能はログイン中のみ使用できます')
                    return
                }

                this.isFavoritedBy
                    ? this.unfavorite()
                    : this.favorite()
            },
            async favorite() {
                const response = await axios.put(this.endpoint)
                this.isFavoritedBy = true
                this.gotToFavorite = true
            },
            async unfavorite() {
                const response = await axios.delete(this.endpoint)
                this.isFavoritedBy = false
                this.gotToFavorite = false
            },
        },
    }
</script>
