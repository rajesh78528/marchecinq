<template>
  <div :class="['container py-5', locale == 'en' ? '' : 'custom-rtl']">
    <div class="row mx-3">
      <div
        class="col-lg-3 col-md-4 filter-item ml-3 mb-3"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        id="product-filter"
        style="color: #005677"
      >
        <i class="fa fa-filter"></i>&nbsp;
        <span style="font-weight: bold">{{ translations.filter_product }}</span>
        <i class="fa fa-chevron-down" style="float: right"></i>
      </div>
      <div class="dropdown-menu filter-menu" aria-labelledby="product-filter">
        <div class="row">
          <div class="col-md-3">
            <h4 class="title">Categories</h4>
            <div v-for="item in categories" :key="item.id" class="group">
              <input
                type="radio"
                name="category"
                :value="item.id"
                v-model="category_id"
                @change="categoryChange(item)"
              />
              <span :class="{ active: item.id == category_id, label: true }">{{
                item.name_en
              }}</span>
            </div>
          </div>
          <div class="col-md-3" v-for="item in variants" :key="item.id">
            <h4 class="title">{{ item.name_en }}</h4>
            <div v-for="val in item.values" :key="val.id" class="group">
              <input
                type="radio"
                :name="item.name_en"
                :value="val.name_en"
                v-model="item.val"
                @change="variantChange(item)"
              />
              <span :class="{ active: item.val == val.name_en, label: true }">{{
                val.name_en
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <h4 class="title">Price</h4>
            <div v-for="(item, index) in prices" :key="index" class="group">
              <input
                type="radio"
                name="price"
                :value="item"
                v-model="newPrice"
                @change="priceChange"
              />
              <span :class="{ active: item == newPrice, label: true }">
                {{ item }} QAR
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <button class="btn on2" @click="reset">Reset</button>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 filter-item ml-3 mb-3 dropdown">
        <div
          id="product-sort"
          aria-haspopup="true"
          aria-expanded="false"
          data-toggle="dropdown"
          style="color: #005677"
        >
          <i class="fa fa-sort"></i>&nbsp;
          <span style="font-weight: bold">{{ translations.sort_product }}</span>
          <span>{{ newSort }}</span>
          <i class="fa fa-chevron-down" style="float: right"></i>
        </div>
        <ul class="dropdown-menu sort-product" aria-labelledby="product-sort">
          <li
            class="dropdown-item"
            v-for="(item, index) in sort"
            :key="index"
            @click="changeSort(item.value)"
          >
            {{ item.text }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.filter-item {
  padding: 10px;
  border-bottom: 1px solid #ccc;
}
.filter-item:hover {
  color: #da5f15;
}
.filter-menu {
  width: 90%;
  padding: 2rem;
  padding-bottom: 10px;
  margin-top: 10px;
  .group {
    margin-bottom: 10px;
  }
  .title {
    color: #005677;
    font-weight: 700;
    text-transform: uppercase;
  }
  .label {
    font-size: 18px;
  }
  .active {
    color: #005677;
    font-weight: bold;
  }
}
@media only screen and (max-width: 760px) {
  .filter-menu {
    width: 70%;
  }
}
.sort-product {
  width: -webkit-fill-available;
  margin-top: 20px;
}
input[type="radio"]::before {
  background: red;
}
</style>

<script>
export default {
  props: ["categories", "variants", "price", "sort"],
  data() {
    return {
      category_id: 0,
      prices: ["0-50", "51-100", "101-200", "201-300", "301-400", "500-"],
      newPrice: "",
      newSort: "",
      translations: Object,
      locale: "",
    };
  },
  created() {
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
  },
  watch: {
    categories() {},
  },
  methods: {
    categoryChange(item) {
      this.$emit("categoryChange", item);
    },
    variantChange(item) {
      this.$emit("variantChange", item);
    },
    priceChange() {
      this.$emit("priceChange", this.newPrice);
    },
    changeSort(val) {
      this.newSort = val;
      this.$emit("sortChange", val);
    },
    reset() {
      this.category_id = 0;
      this.newPrice = "";
      this.variants.forEach((item) => (item.val = ""));
      this.$emit("reset", true);
    },
  },
};
</script>