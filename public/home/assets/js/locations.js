/**
 * Created by Admin on 11/1/2017.
 */
/*
var loactions = new function(){
    this.url = '';
    this.element = '';
    this.prototype.locations = function(url,element){
        this.url = url;
        this.element = element;
    }
    this.prototype.showData = function(){
        console.log(this.url);
        console.log(this.element);
    }
}*/
(function() {
    $(function() {
        var getJsonFile;
        getJsonFile = (function() {
            //var SRC_PATH;
            //SRC_PATH = '/wp/wp-content/uploads/photo-gallery';

            function getJsonFile(url1, req1) {
                var $url,$req,$dataz;
                //console.log(url1);
                this.url = url1;
                this.req = req1;
                this.dataz = [];
                //console.log(this.url);

            }

            getJsonFile.prototype.update = function(){
                return this.dataz = $.ajax({
                    url: this.url,
                    dataType: 'json',
                    method: 'get',
                    cache: false,
                    async: true,
                    /*data: this.req*/
                    /*success : function(res){
                        //console.log(res);
                        return this.dataz = res;
                    }*/

                }).done((function(_this) {
                    return function(res) {
                        return this.data = res;
                        //console.log(res);
                    };
                })(this));
                //console.log(this.dataz)
            };
            getJsonFile.prototype.returnData = function() {
                var anInstanceOfAObject = $.extend({}, this.dataz);
                return anInstanceOfAObject.someFunction = function () {
                    var x = function() {
                        console.log(this);
                    }
                }
                console.log(this.dataz);
            };
            return getJsonFile;

        })();
        return $.extend({
            initgetJsonFile: function(url, req) {
                var pgd;
                pgd = new getJsonFile(url, req);
                pgd.update();
                pgd.returnData();
                console.log(pgd);
                console.log(pgd['getJsonFile']);
                return pgd;
            }
        });
    });

}).call(this);

//# sourceMappingURL=photo-gallery-slider.js.map
