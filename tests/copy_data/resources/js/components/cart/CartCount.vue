<template>
  <span class="cart-count" style="color:#005677;">{{cartData?cartData.length:0}}</span>
</template>

<script>
export default {
    	components:{
	},
	data: () => ({
	}),

	props: 
		{
			source: String
        },
        
    computed: 
        {
            cartData()
            {
                return this.$store.state.cartData;
            }
        },

    watch: 
        {
             
        },

	created() 
		{
			this.initialize();
		},



	methods: 
	{
		async initialize() 
			{
				this.$store.commit('getCartData', JSON.parse(localStorage.getItem("localCart")))
			},	
    }
};
</script>