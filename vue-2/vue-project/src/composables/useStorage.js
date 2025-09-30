import { ref, watch } from "vue";

export function useStorage(key, val = null) {
    let storedVal = read();

    if (storedVal) {
        val = ref(storedVal);
    } else {
        val = ref(val);

        write();
    }

    let val = ref(storedVal);

    watch(val, write, { deep: true });

    function read() {
        return JSON.parse(localStorage.getItem(key));
    }

    function write() {
        val.value === null || val.value === '' ? 
            localStorage.removeItem(key):
            localStorage.setItem(key, JSON.stringify(val.value));
    }
    
    return val;
}