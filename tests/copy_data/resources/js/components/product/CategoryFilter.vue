<template>
  <div>
        <button class="button" v-on:click="show = !show" style="color:#005677;">
            {{locale=='en'?dataCategory.name_en:dataCategory.name_ar}}
        </button>
        <transition  name="fade" v-if="show" >
              <template>
                <div>
                  <div class="trans" v-for="(subdata,i) in dataCategory.sub_categories" :key="i">
                    <button class="button2" style="color:#005677;" @click="returnData(subdata)"> {{locale=='en'?subdata.name_en:subdata.name_ar}}<i class="	fa fa-angle-double-right" ></i></button>
                </div>
                </div>
              </template>
        </transition>
  </div>
</template>

<script>
export default {
    props:
    {
        dataCategory: Object,
    },
    data: () => ({
       locale:'',
        translations:Object,
        show: false
    }),
     mounted()
    {
        this.locale =  this.$store.state.locale;
      
        if( this.locale == 'ar')
        {
              this.translations =  this.$store.state.translations.ar.php.translations;
        }
        else
        {
            this.translations =   this.$store.state.translations.en.php.translations;
        }
        console.log(this.locale)
         console.log( this.translations)
    },
    methods: {

        returnData(data)
                {
                     console.log(data)
                      this.$emit('send', data)
                },
            
       
        
        
      
      
	},
}
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.trans{
  padding-top: 5px;
  padding-left: 20px;
}


.button{
  background-color: white;
  color: black;
  border: 1px solid #c9ccc9; /* Green */
  width: 200px;
   cursor: pointer;
}




.button2{
  background-color: white;
  color: black;
  border: 1px solid #c9ccc9; /* Green */
  width: 180px;
  cursor: pointer;
  
}
</style>