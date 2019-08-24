
    var vm = new Vue({
        el: '#app',
        data: {
            rows: [
                //initial data
                {item1: 0},
                {item2: 0},
                {item3: 0},
                {item4: 0},
                {item5: 0}
            ]
        },
        
        methods: {
            addRow: function (index) {
                try {
                    this.rows.splice(index + 1, 0, {});
                } catch(e)
                {
                    console.log(e);
                }
            },
            removeRow: function (index) {
                this.rows.splice(index, 1);
            },
           
        }
    });
