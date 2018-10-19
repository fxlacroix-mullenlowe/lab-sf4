
Array.prototype.shuffle = function () {

    var ctr = this.length, temp, index;
    while (ctr > 0) {
        index = Math.floor(Math.random() * ctr);
        ctr--;
        temp = this[ctr];
        this[ctr] = this[index];
        this[index] = temp;
    }
    return this;
}