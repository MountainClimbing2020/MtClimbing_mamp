$(function() {
    new Vue({
        el: '#app',
        data: {
            newItem: '',
            goods: []
        },
        methods: {
            addItem: function(){
                this.goods.push(this.newItem);
             this.newItem = '';
                this.goods.splice(0,2);
            }
        }
    });
});
