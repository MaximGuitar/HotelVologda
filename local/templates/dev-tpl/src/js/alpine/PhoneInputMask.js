import { MaskInput } from "maska";

export default () => ({
  init() {
    new MaskInput(this.$root, { mask: "+7 ### ###-##-##" });
  },
});
