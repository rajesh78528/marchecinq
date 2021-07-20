<template>
  <div>
    <div class="title">
      <h4 style="color: #005677">
        {{ locale == "en" ? dataOption.name_en : dataOption.name_ar }}
      </h4>

      <div class="items">
        <div class="val" v-for="item in dataOption.option_value" :key="item.id">
          <div
            v-if="dataOption.name_en.toLowerCase() == 'color'"
            :style="{
              background: item.name_en.toLowerCase(),
            }"
            :class="{ 'round-item': true, active: item.active }"
            @click="variantChange(dataOption, item)"
          ></div>
          <div
            v-else-if="dataOption.name_en.toLowerCase() == 'size'"
            :class="{ 'round-item': true, active: item.active }"
            @click="variantChange(dataOption, item)"
          >
            {{ isNaN(item.name_en[0]) ? item.name_en[0] : item.name_en }}
          </div>
          <div
            v-else
            :class="{ 'rect-item': true, active: item.active }"
            @click="variantChange(dataOption, item)"
          >
            {{ item.name_en }}
          </div>
        </div>
      </div>
    </div>
    <!-- <select
      v-model="name"
      @change="optionParent(dataOption)"
      style="width: 15%"
    >
      <option
        :value="value.name_en"
        v-for="(value, i) in dataOption.option_value"
        :key="i"
      >
        {{ locale == "en" ? value.name_en : value.name_ar }}
      </option>
    </select> -->
    <!-- <ul  style="color:#005677;">
                            <li v-for="(value,i) in dataOption.option_value" :key="i">
                                <input type="radio" class="button2"       :value="value.name_en" @change="optionParent(dataOption, value)" v-model="name"> 
                                 {{locale=='en'?value.name_en:value.name_ar}}
                            </li>
                        </ul> -->
  </div>
</template>

<style lang="scss" scoped>
.items {
  display: flex;
  flex-direction: row;
  .val {
    margin-right: 10px;
    padding: 10px;
    .round-item {
      width: 2rem;
      height: 2rem;
      border: 1px solid #ccc;
      border-radius: 50%;
      font-weight: bold;
      text-align: center;
      font-size: 20px;
      color: #005677;
      cursor: pointer;
    }
    .rect-item {
      border: 1px solid #ccc;
      padding: 5px;
      border-radius: 5px;
      cursor: pointer;
    }
  }
}
.active {
  border: 5px solid #005677 !important;
}
</style>

<script>
export default {
  props: {
    dataOption: Object,
  },

  computed: {},
  data: () => ({
    show: false,
    name: "",
    optionValue: {},
    locale: "",
    translations: Object,
  }),
  mounted() {
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    console.log(this.locale);
    console.log(this.translations);
  },
  created() {
    this.name = this.dataOption.option_value[0].name_en;
    Vue.set(this.dataOption.option_value[0], "active", true);
    this.returnData();
  },
  methods: {
    optionParent(data) {
      let findObj = null;
      try {
        findObj = data.option_value.find((obj) => obj.name_en === this.name);
      } catch (exception) {
        console.log("not found");
      }

      this.optionValue = {
        parent_id: data.id,
        child_id: findObj.id,
        name: findObj.name_en,
      };

      this.$emit("send", this.optionValue);
    },

    variantChange(data, val) {
      this.optionValue = {
        parent_id: data.id,
        child_id: val.id,
        name: val.name_en,
      };
      let obj = data.option_value.find((obj) => obj.name_en == this.name);
      obj.active = false;
      this.name = val.name_en;
      if (val.hasOwnProperty("active")) {
        val.active = true;
      } else {
        Vue.set(val, "active", true);
      }
      this.$emit("send", this.optionValue);
    },

    returnData() {
      this.optionValue = {
        parent_id: this.dataOption.id,
        child_id: this.dataOption.option_value[0].id,
        name: this.dataOption.option_value[0].name_en,
      };

      this.$emit("send", this.optionValue);
    },
  },
};
</script>