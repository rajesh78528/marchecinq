export default {
    data() {
        return {
            isNotification:false,
            notification:{
                title:"",
                message:"",
                color:""

            },


        }
    },

    methods: {
        snacks(title,message, color) {
            this.notification.title = title;
            this.notification.message = message;
            this.notification.color = color;
            this.isNotification = true;
            setTimeout(() => {
				this.isNotification = false;
			}, 3000);
        },
        snacksclose() {
            this.isNotification = false;
        },
        set(num) {
            this.$Progress.set(num)
        },
        increase(num) {
            this.$Progress.increase(num)
        },
        decrease(num) {
            this.$Progress.decrease(num)
        },
        finish() {
            this.showFullLoading = false;
        },
        fail() {
            this.showFullLoading = false;
        },
        test() {
            this.$Progress.start()


        }
    },
}