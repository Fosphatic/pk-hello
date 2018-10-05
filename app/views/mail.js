$(function(){
    var vm = new Vue({

        el: '#helloform',

        name: 'mailData',

        data:{
              form: {},
        			isSend:false,
              getMessage:''
        },

        methods:{

            sendMail:function(){
                this.$http.post('hello/sendmail/sendmail' , {data: this.form}).then( res => {
                    var data = res.data;
                    if (data.status == 200) {
                        //correct
                        this.isSend = true;
                        this.getMessage = data.message;
                    }else {
                        this.isSend = false;
                    }
                } )
            }

        }

    })
})
