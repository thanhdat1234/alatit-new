/**
 * Created by Admin on 11/1/2017.
 */
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
    /*this.prototype.locationsz = function*/
}