const app = new Vue({
  el: '#app',
  data: {
    height:'',
    weight:'',
    bmi:'',
    cate:''
  },
  computed: {
    calbmi2: function() {
      if (this.height == '' || this.weight =='') {
        return 0;
      }
      this.bmi = (parseFloat(this.weight) / ((parseFloat(this.height)/100)*(parseFloat(this.height)/100)));
      // console.log(this.height, this.weight, this.bmi);
      return this.bmi.toFixed(2);
    }
  },
  methods: {
    // result: function (bmi) {
    //   // console.log(this.cate);
    //   if (bmi > 0 && bmi < 18.50) {
    //     return this.cate = "Thinness";
    //   } else if (bmi >= 18.50 && bmi <= 22.99) {
    //     return this.cate = "Normal";
    //   } else if (bmi >= 23.00 && bmi <= 24.99) {
    //     return this.cate = "Chubby";
    //   } else if (bmi >= 25.00 && bmi <= 29.99) {
    //     return this.cate = "Fat";
    //   } else if (bmi >= 30) {
    //     return this.cate = "Very fat";
    //   } else if (bmi != 0) {
    //     return "Please input again";
    //   }
    // }
  }
})
