class Package {

    constructor() {
        this.minCut  = 1;
        this.total   = 56;
        this.colors  = ['spade', 'heart', 'diamond', 'club'];
        this.values  = [/*'1', */'2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
        this.package = [];
        this.player1 = [];
        this.player2 = [];
    }

    generatePackage() {
        var that = this;
        this.colors.forEach(function(color){
            that.values.forEach(function(value){
                that.package.push(String.format('{0}-{1}', color, value));
            });
        });
        return this;
    }

    mix(){
        this.package.shuffle();

        return this;
    }

    distribute(){
        var that = this;
        this.package.forEach(function(cell, i){

            if(i % 2 && i){

                that.player1.push(cell);
            }else{

                that.player2.push(cell);
            }


        });

    }

}

module.exports = Package;