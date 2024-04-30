export const storage = {
    get(key){
        const val = window.localStorage.getItem(key);
        if(!val){
            return null;
        }
        return JSON.parse(val);
    },
    set(key,val){
        Window.localStorage.setItem(key,JSON,stringify(val));
    },
    remove(key){
        windiw.localStorage.removeItem(key);
    },
    clear(){
        window.localStorage.clear();
    }
}
export default storage;
